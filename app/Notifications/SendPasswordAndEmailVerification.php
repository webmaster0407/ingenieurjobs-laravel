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

namespace App\Notifications;

use App\Helpers\UrlGen;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordAndEmailVerification extends Notification implements ShouldQueue
{
	use Queueable;
	
	protected $user;
	protected $randomPassword;
	
	public function __construct($user, $randomPassword)
	{
		$this->user = $user;
		$this->randomPassword = $randomPassword;
	}
	
	public function via($notifiable)
	{
		return ['mail'];
	}
	
	public function toMail($notifiable)
	{
		$verificationUrl = url('users/verify/email/' . $this->user->email_token);
		$loginUrl = UrlGen::login();
		
		$mailMessage = (new MailMessage)
			->subject(trans('mail.generated_password_title'))
			->greeting(trans('mail.generated_password_content_1', ['userName' => $this->user->name,]))
			->line(trans('mail.generated_password_content_2'));
		
		if (!isVerifiedUser($this->user)) {
			$mailMessage->line(trans('mail.generated_password_verify_content_3'))
				->action(trans('mail.generated_password_verify_action'), $verificationUrl);
		}
		
		$mailMessage->line(trans('mail.generated_password_content_4', ['randomPassword' => $this->randomPassword,]));
		
		if (isVerifiedUser($this->user)) {
			$mailMessage->action(trans('mail.generated_password_login_action'), $loginUrl);
		}
		
		$mailMessage->line(trans('mail.generated_password_content_6', ['appName' => config('app.name')]))
			->salutation(trans('mail.footer_salutation', ['appName' => config('app.name')]));
		
		return $mailMessage;
	}
}
