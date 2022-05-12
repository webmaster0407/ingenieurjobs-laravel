<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Http\Controllers\Web\Account;

use App\Helpers\UrlGen;
use App\Http\Controllers\Web\Account\Traits\MessagesTrait;
use App\Http\Requests\ReplyMessageRequest;
use App\Http\Requests\SendMessageRequest;
use App\Models\Thread;
use App\Models\ThreadMessage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Torann\LaravelMetaTags\Facades\MetaTag;

class MessagesController extends AccountBaseController
{
	use MessagesTrait;
	
	private $perPage = 10;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->perPage = (is_numeric(config('settings.list.items_per_page'))) ? config('settings.list.items_per_page') : $this->perPage;
	}
	
	/**
	 * Show all the message threads to the user.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		// All threads that user is participating in
		$threads = $this->threads;
		
		// Get threads that have new messages or that are marked as unread
		if (request()->get('filter') == 'unread') {
			$threads = $this->threadsWithNewMessage;
		}
		
		// Get threads started by this user
		if (request()->get('filter') == 'started') {
			$threadTable = (new Thread())->getTable();
			$messageTable = (new ThreadMessage())->getTable();
			
			$threads->where(function ($query) use ($threadTable, $messageTable) {
				$query->select('user_id')
					->from($messageTable)
					->whereColumn($messageTable . '.thread_id', $threadTable . '.id')
					->orderBy($messageTable . '.created_at', 'ASC')
					->limit(1);
			}, auth()->id());
		}
		
		// Get this user's important thread
		if (request()->get('filter') == 'important') {
			$threads->where('is_important', 1);
		}
		
		// Get rows & paginate
		$threads = $threads->paginate($this->perPage);
		
		// Meta Tags
		MetaTag::set('title', t('messenger_inbox'));
		MetaTag::set('description', t('messenger_inbox'));
		
		if (request()->ajax()) {
			$result = [];
			$result['threads'] = view('account.messenger.threads.threads', ['threads' => $threads])->render();
			$result['links'] = view('account.messenger.threads.links', ['threads' => $threads])->render();
			
			return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
		}
		
		return view('account.messenger.index', compact('threads'));
	}
	
	/**
	 * Shows a message thread.
	 *
	 * @param $id
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function show($id)
	{
		try {
			$threadTable = (new Thread())->getTable();
			$thread = Thread::forUser(auth()->id())->where($threadTable . '.id', $id)->firstOrFail();
			
			// Get the Thread's Messages
			$messages = ThreadMessage::query()
				->notDeletedByUser(auth()->id())
				->where('thread_id', $thread->id)
				->orderByDesc('id');
			
			$messages = $messages->paginate($this->perPage);
			$linksRender = $messages->links('account.messenger.messages.pagination')->render();
			$messages = $messages->items();
			
		} catch (ModelNotFoundException $e) {
			$msg = t('thread_not_found', ['id' => $id]);
			flash($msg)->error();
			
			return redirect('account/messages');
		}
		
		// Mark the Thread as read
		$thread->markTheThreadAsRead(auth()->id());
		
		// Meta Tags
		MetaTag::set('title', t('Messages Received'));
		MetaTag::set('description', t('Messages Received'));
		
		// Reverse the collection order like Messenger
		$messages = collect($messages)->reverse();
		
		if (request()->ajax()) {
			$result = [];
			$result['messages'] = view('account.messenger.messages.messages', ['messages' => $messages])->render();
			$result['links'] = $linksRender;
			
			return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
		}
		
		return view('account.messenger.show', compact('thread', 'messages', 'linksRender'));
	}
	
	/**
	 * Stores a new message thread.
	 * Contact the Post's Author
	 * NOT use AJAX
	 *
	 * @param $postId
	 * @param \App\Http\Requests\SendMessageRequest $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store($postId, SendMessageRequest $request)
	{
		request()->merge(['post_id' => $postId]);
		
		// Call API endpoint
		$endpoint = '/threads';
		$data = makeApiRequest('post', $endpoint, $request->all(), [], true);
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			flash($message)->error();
			
			return redirect()->back()->withInput($request->except('resume.filename'));
		}
		
		// Notification Message
		if (data_get($data, 'success')) {
			flash($message)->success();
		} else {
			flash($message)->error();
		}
		
		// Get Post
		$post = data_get($data, 'extra.post');
		
		if (!empty($post)) {
			return redirect(UrlGen::postUri($post));
		} else {
			return redirect()->back();
		}
	}
	
	/**
	 * Adds a new message to a current thread.
	 *
	 * @param $id
	 * @param \App\Http\Requests\ReplyMessageRequest $request
	 * @return \Illuminate\Http\JsonResponse|void
	 */
	public function update($id, ReplyMessageRequest $request)
	{
		if (!request()->ajax()) {
			return;
		}
		
		// Call API endpoint
		$endpoint = '/threads/' . $id;
		$data = makeApiRequest('post', $endpoint, $request->all(), [], true);
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		$result = [
			'success' => (bool)data_get($data, 'success'),
			'msg'     => $message,
		];
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
		}
		
		return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * Actions on the Threads
	 *
	 * @param null $threadId
	 * @return \Illuminate\Http\JsonResponse|void
	 */
	public function actions($threadId = null)
	{
		if (!request()->ajax()) {
			return;
		}
		
		// Call API endpoint
		$endpoint = '/threads/bulkUpdate' . $this->getSelectedIds($threadId);
		$data = makeApiRequest('post', $endpoint, request()->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		$result = [
			'type'    => request()->get('type'),
			'success' => (bool)data_get($data, 'success'),
			'msg'     => $message,
		];
		if (!empty($threadId)) {
			$result['baseUrl'] = request()->url();
		}
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			$result['success'] = false;
		}
		
		return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * Delete Thread
	 *
	 * @param null $threadId
	 * @return \Illuminate\Http\JsonResponse|void
	 */
	public function destroy($threadId = null)
	{
		if (!request()->ajax()) {
			return;
		}
		
		// Call API endpoint
		$endpoint = '/threads' . $this->getSelectedIds($threadId);
		$data = makeApiRequest('delete', $endpoint, request()->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		$result = [
			'type'    => 'delete',
			'success' => (bool)array_get($data, 'success'),
			'msg'     => $message,
		];
		if (!empty($threadId)) {
			$result['baseUrl'] = request()->url();
		}
		
		// HTTP Error Found
		if (!array_get($data, 'isSuccessful')) {
			$result['success'] = false;
		}
		
		return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
	}
}
