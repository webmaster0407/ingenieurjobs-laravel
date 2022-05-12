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

namespace App\Http\Controllers\Web\Post;

use App\Helpers\UrlGen;
use App\Http\Requests\ReportRequest;
use App\Models\Post;
use App\Models\ReportType;
use App\Http\Controllers\Web\FrontController;
use Torann\LaravelMetaTags\Facades\MetaTag;

class ReportController extends FrontController
{
	/**
	 * ReportController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			$this->commonQueries();
			
			return $next($request);
		});
		
		if (config('settings.single.auth_required_to_report_abuse')) {
			$this->middleware('auth')->only(['showReportForm', 'sendReport']);
		}
	}
	
	/**
	 * Common Queries
	 */
	public function commonQueries()
	{
		// Get Report abuse types
		$reportTypes = ReportType::query()->get();
		view()->share('reportTypes', $reportTypes);
	}
	
	public function showReportForm($postId)
	{
		$data = [];
		
		// Get Post
		$postId = hashId($postId, true) ?? $postId;
		$data['post'] = Post::findOrFail($postId);
		
		// Meta Tags
		$data['title'] = t('Report for', ['title' => mb_ucfirst($data['post']->title)]);
		$description   = t('Send a report for', ['title' => mb_ucfirst($data['post']->title)]);
		
		MetaTag::set('title', $data['title']);
		MetaTag::set('description', strip_tags($description));
		
		// Open Graph
		$this->og->title($data['title'])->description($description);
		view()->share('og', $this->og);
		
		return appView('post.report', $data);
	}
	
	/**
	 * @param $postId
	 * @param \App\Http\Requests\ReportRequest $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function sendReport($postId, ReportRequest $request)
	{
		// Call API endpoint
		$postId = hashId($postId, true) ?? $postId;
		$endpoint = '/posts/' . $postId . '/report';
		$data = makeApiRequest('post', $endpoint, $request->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			flash($message)->error();
			
			return redirect()->back()->withInput();
		}
		
		// Notification Message
		if (data_get($data, 'success')) {
			flash($message)->success();
		} else {
			flash($message)->error();
		}
		
		$post = data_get($data, 'extra.post');
		
		if (!empty($post)) {
			return redirect(UrlGen::postUri($post));
		} else {
			return redirect('/');
		}
	}
	
}
