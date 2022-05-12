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
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;

class ReplySent extends Notification implements ShouldQueue
{
	use Queueable;
	
	// CAUTION: Conflict between the Model Message $message and the Laravel Mail Message (Mailable) objects.
	// NOTE: No problem with Laravel Notification.
	protected $msg;
	
	public function __construct(array $msg)
	{
		$this->msg = $msg;
	}
	
	public function via($notifiable)
	{
		if (!empty($this->msg['to_email'])) {
			if (config('settings.sms.message_activation') == 1) {
				if (!empty($this->msg['to_phone'])) {
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
		$mailMessage = (new MailMessage)
			->replyTo($this->msg['from_email'], $this->msg['from_name'])
			->subject($this->msg['subject'])
			->greeting(trans('mail.reply_form_content_1'))
			->line(trans('mail.reply_form_content_2', ['senderName' => $this->msg['from_name']]))
			->line(nl2br($this->msg['body']))
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
		return trans('sms.reply_form_content', [
			'appName' => config('app.name'),
			'subject' => $this->msg['subject'],
			'message' => Str::limit(strip_tags($this->msg['body']), 50),
		]);
	}
}
