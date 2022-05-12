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

use App\Helpers\Files\Storage\StorageDisk;
use App\Helpers\UrlGen;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Post;
use Illuminate\Support\Str;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;

class EmployerContacted extends Notification implements ShouldQueue
{
	use Queueable;
	
	protected $post;
	
	// CAUTION: Conflict between the Model Message $message and the Laravel Mail Message (Mailable) objects.
	// NOTE: No problem with Laravel Notification.
	protected $msg;
	
	public function __construct(Post $post, array $msg)
	{
		$this->post = $post;
		$this->msg = $msg;
	}
	
	public function via($notifiable)
	{
		if (!empty($this->post->email)) {
			if (config('settings.sms.message_activation') == 1) {
				if (!empty($this->post->phone) && $this->post->phone_hidden != 1) {
					if (config('settings.sms.driver') == 'twilio') {
						return ['mail', TwilioChannel::class];
					}
					
					return ['mail', 'nexmo'];
				}
				return ['mail'];
			} else {
				return ['mail'];
			}
		} else {
			if (config('settings.sms.driver') == 'twilio') {
				return [TwilioChannel::class];
			}
			
			return ['nexmo'];
		}
	}
	
	public function toMail($notifiable)
	{
		$postUrl = UrlGen::post($this->post);
		
		$mailMessage = (new MailMessage)
			->replyTo($this->msg['from_email'], $this->msg['from_name'])
			->subject(trans('mail.post_employer_contacted_title', [
				'title'   => $this->post->title,
				'appName' => config('app.name'),
			]))
			->line(nl2br($this->msg['body']))
			->line(trans('mail.post_employer_contacted_content_1', [
				'name'  => $this->msg['from_name'],
				'email' => $this->msg['from_email'] ?? '',
				'phone' => $this->msg['from_phone'] ?? '',
			]))
			->line(trans('mail.post_employer_contacted_content_2', [
				'title'   => $this->post->title,
				'postUrl' => $postUrl,
				'appUrl'  => url('/'),
				'appName' => config('app.name'),
			]))
			->line('<br>')
			->line(trans('mail.post_employer_contacted_content_3'))
			->line(trans('mail.post_employer_contacted_content_4'))
			->line(trans('mail.post_employer_contacted_content_5'))
			->line(trans('mail.post_employer_contacted_content_6'))
			->line('<br>')
			->line(trans('mail.post_employer_contacted_content_7'))
			->salutation(trans('mail.footer_salutation', ['appName' => config('app.name')]));
		
		// Check & get attached file
		if (isset($this->msg['filename']) && !empty($this->msg['filename'])) {
			if (isset($this->msg['fileData']) && !empty($this->msg['fileData'])) {
				// Get file's content (from uploaded file)
				$fileData = base64_decode($this->msg['fileData']);
				$filename = $this->msg['filename'];
			} else {
				// Get file's content (from DB column)
				$pDisk = StorageDisk::getDisk();
				if (Str::startsWith($this->msg['filename'], 'resumes/')) {
					$pDisk = StorageDisk::getDisk('private');
				}
				if ($pDisk->exists($this->msg['filename'])) {
					$fileData = $pDisk->get($this->msg['filename']);
				}
				
				// Get file's short name
				$filename = basename($this->msg['filename']);
			}
		}
		
		// Attachment
		if (isset($fileData, $filename) && !empty($fileData) && !empty($filename)) {
			$mailMessage->attachData($fileData, $filename);
		}
		
		return $mailMessage;
	}
	
	public function toNexmo($notifiable)
	{
		return (new NexmoMessage())->content($this->smsMessage())->unicode();
	}
	
	public function toTwilio($notifiable)
	{
		return (new TwilioSmsMessage())->content($this->smsMessage());
	}
	
	protected function smsMessage()
	{
		return trans('sms.post_employer_contacted_content', [
			'appName' => config('app.name'),
			'postId'  => $this->msg['post_id'],
			'message' => Str::limit(strip_tags($this->msg['body']), 50),
		]);
	}
}
