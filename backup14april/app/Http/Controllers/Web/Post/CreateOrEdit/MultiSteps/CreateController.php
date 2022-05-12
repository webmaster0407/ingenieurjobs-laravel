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

namespace App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps;

use App\Helpers\UrlGen;
use App\Http\Controllers\Api\Payment\SingleStepPaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\MakePaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\RequiredInfoTrait;
use App\Http\Controllers\Web\Auth\Traits\VerificationTrait;
use App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps\Traits\Create\ClearTmpInputTrait;
use App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps\Traits\Create\SubmitTrait;
use App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps\Traits\WizardTrait;
use App\Http\Controllers\Web\Post\CreateOrEdit\Traits\PricingPageUrlTrait;
use App\Http\Requests\PackageRequest;
use App\Http\Requests\PostRequest;
use App\Models\Company;
use App\Models\Post;
use App\Models\PostType;
use App\Models\SalaryType;
use App\Http\Controllers\Web\FrontController;
use App\Models\Scopes\VerifiedScope;
use App\Models\Scopes\ReviewedScope;
use App\Observers\Traits\PictureTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Torann\LaravelMetaTags\Facades\MetaTag;

class CreateController extends FrontController
{
	use VerificationTrait;
	use RequiredInfoTrait;
	use WizardTrait;
	use SingleStepPaymentTrait, MakePaymentTrait;
	use PricingPageUrlTrait;
	use PictureTrait, ClearTmpInputTrait;
	use SubmitTrait;
	
	protected $baseUrl = '/posts/create';
	protected $tmpUploadDir = 'temporary';
	
	/**
	 * CreateController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		// Check if guests can post Ads
		if (config('settings.single.guests_can_post_listings') != '1') {
			$this->middleware('auth');
		}
		
		$this->middleware(function ($request, $next) {
			$this->commonQueries();
			
			return $next($request);
		});
		
		$this->baseUrl = url($this->baseUrl);
	}
	
	/**
	 * @return void
	 * @throws \Exception
	 */
	public function commonQueries()
	{
		$this->setPostFormRequiredInfo();
		$this->paymentSettings();
		
		// Get Post Types
		$cacheId = 'postTypes.all.' . config('app.locale');
		$postTypes = cache()->remember($cacheId, $this->cacheExpiration, function () {
			return PostType::orderBy('lft')->get();
		});
		view()->share('postTypes', $postTypes);
		
		// Get Salary Types
		$cacheId = 'salaryTypes.all.' . config('app.locale');
		$salaryTypes = cache()->remember($cacheId, $this->cacheExpiration, function () {
			return SalaryType::orderBy('lft')->get();
		});
		view()->share('salaryTypes', $salaryTypes);
		
		$companies = collect();
		if (auth()->check()) {
			// Get all the User's Companies
			$companies = Company::where('user_id', auth()->user()->id)
				->take(100)
				->orderByDesc('id')
				->get();
			
			// Get the User's latest Company
			if ($companies->has(0)) {
				$postCompany = $companies->get(0);
				view()->share('postCompany', $postCompany);
			}
			
			$companies = collect($companies->toArray());
		}
		$postInput = request()->session()->get('postInput');
		if (isset($postInput['company'], $postInput['company']['name'])) {
			$companies = $companies->prepend($postInput['company']);
		}
		view()->share('companies', $companies);
		
		// Meta Tags
		[$title, $description, $keywords] = getMetaTag('create');
		MetaTag::set('title', $title);
		MetaTag::set('description', strip_tags($description));
		MetaTag::set('keywords', $keywords);
	}
	
	/**
	 * Check for current step
	 *
	 * @param Request $request
	 * @return int
	 */
	public function step(Request $request): int
	{
		if ($request->get('error') == 'paymentCancelled') {
			if ($request->session()->has('postId')) {
				$request->session()->forget('postId');
			}
		}
		
		$postId = $request->session()->get('postId');
		
		$step = 0;
		
		$data = $request->session()->get('postInput');
		if (isset($data) || !empty($postId)) {
			$step = 1;
		} else {
			return $step;
		}
		
		$data = $request->session()->get('paymentInput');
		if (isset($data) || !empty($postId)) {
			$step = 2;
		} else {
			return $step;
		}
		
		return $step;
	}
	
	/**
	 * New Post's Form.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function getPostStep(Request $request)
	{
		// Check if the 'Pricing Page' must be started first, and make redirection to it.
		$pricingUrl = $this->getPricingPage($this->getSelectedPackage());
		if (!empty($pricingUrl)) {
			return redirect($pricingUrl)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		// Check if the form type is 'Single Step Form', and make redirection to it (permanently).
		if (config('settings.single.publication_form_type') == '2') {
			$url = url('create');
			
			return redirect($url, 301)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		// Only Admin users and Employers/Companies can post ads
		if (auth()->check()) {
			if (!in_array(auth()->user()->user_type_id, [1])) {
				return redirect()->intended('account');
			}
		}
		
		$this->shareWizardMenu($request);
		
		// Create an unique temporary ID
		if (!$request->session()->has('uid')) {
			$request->session()->put('uid', uniqueCode(9));
		}
		
		$postInput = $request->session()->get('postInput');
		
		// Get the next URL button label
		if (
			isset($this->countPackages, $this->countPaymentMethods)
			&& $this->countPackages > 0
			&& $this->countPaymentMethods > 0
		) {
			$nextStepLabel = t('Next');
		} else {
			$nextStepLabel = t('submit');
		}
		view()->share('nextStepLabel', $nextStepLabel);
		
		return appView('post.createOrEdit.multiSteps.create', compact('postInput'));
	}
	
	/**
	 * Store a new Post.
	 *
	 * @param \App\Http\Requests\PostRequest $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postPostStep(PostRequest $request)
	{
		// Use unique ID to store post's pictures
		if ($request->session()->has('uid')) {
			$this->tmpUploadDir = $this->tmpUploadDir . '/' . $request->session()->get('uid');
		}
		
		$postInputOld = (array)$request->session()->get('postInput');
		$postInput = $request->all();
		
		// Set the company's temporary ID
		if (isset($postInput['company'], $postInput['company']['name'])) {
			$postInput['company']['id'] = 'new';
		}
		
		// Save uploaded file
		$file = $request->file('company.logo');
		if (!empty($file)) {
			$filePath = uploadPostLogo($this->tmpUploadDir, $file);
			$postInput['company']['logo'] = $filePath;
			
			// Remove old company logo
			if (isset($postInputOld['company'], $postInputOld['company']['logo'])) {
				try {
					$this->removePictureWithItsThumbs($postInputOld['company']['logo']);
				} catch (\Throwable $e) {
				}
			}
		} else {
			// Skip old logo if the logo field is not filled
			if (isset($postInputOld['company'], $postInputOld['company']['logo'])) {
				$postInput['company']['logo'] = $postInputOld['company']['logo'];
			}
		}
		
		$request->session()->put('postInput', $postInput);
		
		// Get the next URL
		if (
			isset($this->countPackages, $this->countPaymentMethods)
			&& $this->countPackages > 0
			&& $this->countPaymentMethods > 0
		) {
			$nextUrl = url('posts/create/payment');
			$nextUrl = qsUrl($nextUrl, request()->only(['package']), null, false);
			
			return redirect($nextUrl)->withHeaders(config('larapen.core.noCacheHeaders'));
		} else {
			return $this->storeInputDataInDatabase($request);
		}
	}
	
	/**
	 * Payment's Step
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function getPaymentStep(Request $request)
	{
		if ($this->step($request) < 1) {
			$backUrl = url($this->baseUrl);
			$backUrl = qsUrl($backUrl, request()->only(['package']), null, false);
			
			return redirect($backUrl)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		// Check if the 'Pricing Page' must be started first, and make redirection to it.
		$pricingUrl = $this->getPricingPage($this->getSelectedPackage());
		if (!empty($pricingUrl)) {
			return redirect($pricingUrl)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		$this->shareWizardMenu($request);
		
		$payment = $request->session()->get('paymentInput');
		
		return appView('post.createOrEdit.multiSteps.packages.create', compact('payment'));
	}
	
	/**
	 * Payment's Step (POST)
	 *
	 * @param \App\Http\Requests\PackageRequest $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postPaymentStep(PackageRequest $request)
	{
		if ($this->step($request) < 1) {
			$backUrl = url($this->baseUrl);
			$backUrl = qsUrl($backUrl, request()->only(['package']), null, false);
			
			return redirect($backUrl)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		$request->session()->put('paymentInput', $request->validated());
		
		return $this->storeInputDataInDatabase($request);
	}
	
	/**
	 * Confirmation
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function finish(Request $request)
	{
		if (!session()->has('message')) {
			return redirect('/')->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		// Clear the steps wizard
		if (session()->has('postId')) {
			// Get the Post
			$post = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
				->where('id', session()->get('postId'))
				->first();
			
			if (empty($post)) {
				abort(404, t('Post not found'));
			}
			
			session()->forget('postId');
		}
		
		// Redirect to the Post,
		// - If User is logged
		// - Or if Email and Phone verification option is not activated
		if (auth()->check() || (config('settings.mail.email_verification') != 1 && config('settings.sms.phone_verification') != 1)) {
			if (!empty($post)) {
				flash(session('message'))->success();
				
				return redirect(UrlGen::postUri($post))->withHeaders(config('larapen.core.noCacheHeaders'));
			}
		}
		
		// Meta Tags
		MetaTag::set('title', session('message'));
		MetaTag::set('description', session('message'));
		
		return appView('post.createOrEdit.multiSteps.finish');
	}
}
