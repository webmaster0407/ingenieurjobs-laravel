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

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormSent extends Notification implements ShouldQueue
{
	use Queueable;
	
	protected $msg;
	
	public function __construct($request)
	{
		$this->msg = $request;
	}
	
	public function via($notifiable)
	{
		return ['mail'];
	}
	
	public function toMail($notifiable)
	{
		$mailMessage = (new MailMessage)
			->replyTo($this->msg->email, $this->msg->first_name . ' ' . $this->msg->last_name)
			->subject(trans('mail.contact_form_title', ['country' => $this->msg->country_name, 'appName' => config('app.name')]))
			->line(t('country') . ': <a href="' . url('/?d=' . $this->msg->country_code) . '">' . $this->msg->country_name . '</a>')
			->line(t('first_name') . ': ' . $this->msg->first_name)
			->line(t('last_name') . ': ' . $this->msg->last_name)
			->line(t('email_address') . ': ' . $this->msg->email);
		
		if (isset($this->msg->company_name) && $this->msg->company_name!='') {
			$mailMessage->line(t('company_name') . ': ' . $this->msg->company_name);
		}
		
		$mailMessage->line(nl2br($this->msg->message))
			->salutation(trans('mail.footer_salutation', ['appName' => config('app.name')]));
		
		return $mailMessage;
	}
}
