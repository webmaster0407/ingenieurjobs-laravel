<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Api\Base\ApiResponseTrait;
use App\Http\Controllers\Web\FrontController;
use App\Http\Requests\ResetPasswordRequest;
use App\Helpers\Auth\Traits\ResetsPasswordsForEmail;
use App\Helpers\Auth\Traits\ResetsPasswordsForPhone;
use Illuminate\Http\Request;
use Torann\LaravelMetaTags\Facades\MetaTag;

class ResetPasswordController extends FrontController
{
	use ResetsPasswordsForEmail, ResetsPasswordsForPhone, ApiResponseTrait;
	
	/**
	 * Where to redirect users after resetting their password.
	 *
	 * @var string
	 */
	protected $redirectTo = '/account';
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware('guest');
	}
	
	// -------------------------------------------------------
	// Laravel overwrites for loading LaraClassified views
	// -------------------------------------------------------
	
	/**
	 * Display the password reset view for the given token.
	 *
	 * If no token is present, display the link request form.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param null $token
	 * @return mixed
	 */
	public function showResetForm(Request $request, $token = null)
	{
		// Meta Tags
		MetaTag::set('title', t('reset_password'));
		MetaTag::set('description', t('reset_your_password'));
		
		return appView('auth.passwords.reset')->with(['token' => $token, 'email' => $request->email]);
	}
	
	/**
	 * Reset the given user's password.
	 *
	 * @param ResetPasswordRequest $request
	 * @return $this|\Illuminate\Http\RedirectResponse
	 */
	public function reset(ResetPasswordRequest $request)
	{
		// Call API endpoint
		$endpoint = '/auth/password/reset';
		$data = makeApiRequest('post', $endpoint, $request->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		if (data_get($data, 'isSuccessful') && data_get($data, 'success')) {
			if (
				!empty(data_get($data, 'extra.authToken'))
				&& !empty(data_get($data, 'result.id'))
			) {
				auth()->loginUsingId(data_get($data, 'result.id'));
				session()->put('authToken', data_get($data, 'extra.authToken'));
			}
			
			return redirect($this->redirectPath())->with('status', $message);
		}
		
		return redirect()->back()
			->withInput($request->only('email'))
			->withErrors(['email' => $message]);
	}
}
