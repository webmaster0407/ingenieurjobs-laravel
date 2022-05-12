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

use App\Helpers\Arr;
use App\Helpers\UrlGen;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostSentByEmail extends Notification implements ShouldQueue
{
	use Queueable;
	
	protected $post;
	protected $mailData;
	
	public function __construct(Post $post, $mailData)
	{
		$this->post = $post;
		$this->mailData = (is_array($mailData)) ? Arr::toObject($mailData) : $mailData;
	}
	
	public function via($notifiable)
	{
		return ['mail'];
	}
	
	public function toMail($notifiable)
	{
		$postUrl = UrlGen::post($this->post);
		
		return (new MailMessage)
			->replyTo($this->mailData->sender_email, $this->mailData->sender_email)
			->subject(trans('mail.post_sent_by_email_title', [
				'appName'     => config('app.name'),
				'countryCode' => $this->post->country_code
			]))
			->line(trans('mail.post_sent_by_email_content_1', ['senderEmail' => $this->mailData->sender_email]))
			->line(trans('mail.post_sent_by_email_content_2'))
			->line(trans('mail.Job URL') . ':  <a href="' . $postUrl . '">' . $postUrl . '</a>')
			->salutation(trans('mail.footer_salutation', ['appName' => config('app.name')]));
	}
}
