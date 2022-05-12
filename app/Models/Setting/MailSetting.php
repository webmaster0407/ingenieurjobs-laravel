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

namespace App\Models\Setting;

class MailSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['sendmail_path'] = '/usr/sbin/sendmail -bs';
			if (env('APP_ENV') == 'local') {
				$value['sendmail_path'] = '/usr/bin/env catchmail -f some@from.address';
			}
			
		} else {
			
			if (!isset($value['sendmail_path'])) {
				$value['sendmail_path'] = '/usr/sbin/sendmail -bs';
				if (env('APP_ENV') == 'local') {
					$value['sendmail_path'] = '/usr/bin/env catchmail -f some@from.address';
				}
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		return $value;
	}
	
	public static function getFields($diskName)
	{
		$fields = [
			[
				'name'       => 'driver',
				'label'      => trans('admin.mail_driver_label'),
				'type'       => 'select2_from_array',
				'options'    => [
					'sendmail'  => 'Sendmail',
					'smtp'      => 'SMTP',
					'mailgun'   => 'Mailgun',
					'postmark'  => 'Postmark',
					'ses'       => 'Amazon SES',
					'sparkpost' => 'Sparkpost',
				],
				'attributes' => [
					'id'       => 'driver',
					'onchange' => 'getDriverFields(this)',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'validate_driver',
				'label' => trans('admin.validate_driver_label'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.validate_mail_driver_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'              => 'driver_sendmail_title',
				'type'              => 'custom_html',
				'value'             => trans('admin.driver_sendmail_title'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 sendmail',
				],
			],
			[
				'name'  => 'driver_sendmail_info',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_sendmail_info'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 sendmail',
				],
			],
			[
				'name'              => 'sendmail_path',
				'label'             => trans('admin.sendmail_path_label'),
				'type'              => 'text',
				'hint'              => trans('admin.sendmail_path_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 sendmail',
				],
			],
			[
				'name'              => 'sendmail_email_sender',
				'label'             => trans('admin.mail_email_sender_label'),
				'type'              => 'email',
				'hint'              => trans('admin.mail_email_sender_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sendmail',
				],
			],
			
			[
				'name'  => 'driver_smtp_title',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_smtp_title'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 smtp',
				],
			],
			[
				'name'  => 'driver_smtp_info',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_smtp_info'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 smtp',
				],
			],
			[
				'name'              => 'smtp_host',
				'label'             => trans('admin.mail_smtp_host_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_host_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 smtp',
				],
			],
			[
				'name'              => 'smtp_port',
				'label'             => trans('admin.mail_smtp_port_label'),
				'type'              => 'number',
				'hint'              => trans('admin.mail_smtp_port_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 smtp',
				],
			],
			[
				'name'              => 'smtp_username',
				'label'             => trans('admin.mail_smtp_username_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_username_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 smtp',
				],
			],
			[
				'name'              => 'smtp_password',
				'label'             => trans('admin.mail_smtp_password_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_password_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 smtp',
				],
			],
			[
				'name'              => 'smtp_encryption',
				'label'             => trans('admin.mail_smtp_encryption_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_encryption_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 smtp',
				],
			],
			[
				'name'              => 'smtp_email_sender',
				'label'             => trans('admin.mail_email_sender_label'),
				'type'              => 'email',
				'hint'              => trans('admin.mail_email_sender_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 smtp',
				],
			],
			
			[
				'name'              => 'driver_mailgun_title',
				'type'              => 'custom_html',
				'value'             => trans('admin.driver_mailgun_title'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 mailgun',
				],
			],
			[
				'name'  => 'driver_mailgun_info',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_mailgun_info'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 mailgun',
				],
			],
			[
				'name'              => 'mailgun_domain',
				'label'             => trans('admin.mail_mailgun_domain_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_secret',
				'label'             => trans('admin.mail_mailgun_secret_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_endpoint',
				'label'             => trans('admin.mail_mailgun_endpoint_label'),
				'type'              => 'text',
				'default'           => 'api.mailgun.net',
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_host',
				'label'             => trans('admin.mail_smtp_host_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_host_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_port',
				'label'             => trans('admin.mail_smtp_port_label'),
				'type'              => 'number',
				'hint'              => trans('admin.mail_smtp_port_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_username',
				'label'             => trans('admin.mail_smtp_username_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_username_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_password',
				'label'             => trans('admin.mail_smtp_password_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_password_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_encryption',
				'label'             => trans('admin.mail_smtp_encryption_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_encryption_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			[
				'name'              => 'mailgun_email_sender',
				'label'             => trans('admin.mail_email_sender_label'),
				'type'              => 'email',
				'hint'              => trans('admin.mail_email_sender_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mailgun',
				],
			],
			
			[
				'name'              => 'driver_postmark_title',
				'type'              => 'custom_html',
				'value'             => trans('admin.driver_postmark_title'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 postmark',
				],
			],
			[
				'name'  => 'driver_postmark_info',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_postmark_info'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 postmark',
				],
			],
			[
				'name'              => 'postmark_token',
				'label'             => trans('admin.mail_postmark_token_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			[
				'name'              => 'postmark_host',
				'label'             => trans('admin.mail_smtp_host_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_host_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			[
				'name'              => 'postmark_port',
				'label'             => trans('admin.mail_smtp_port_label'),
				'type'              => 'number',
				'hint'              => trans('admin.mail_smtp_port_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			[
				'name'              => 'postmark_username',
				'label'             => trans('admin.mail_smtp_username_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_username_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			[
				'name'              => 'postmark_password',
				'label'             => trans('admin.mail_smtp_password_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_password_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			[
				'name'              => 'postmark_encryption',
				'label'             => trans('admin.mail_smtp_encryption_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_encryption_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			[
				'name'              => 'postmark_email_sender',
				'label'             => trans('admin.mail_email_sender_label'),
				'type'              => 'email',
				'hint'              => trans('admin.mail_email_sender_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 postmark',
				],
			],
			
			[
				'name'              => 'driver_ses_title',
				'type'              => 'custom_html',
				'value'             => trans('admin.driver_ses_title'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 ses',
				],
			],
			[
				'name'  => 'driver_ses_info',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_ses_info'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 ses',
				],
			],
			[
				'name'              => 'ses_key',
				'label'             => trans('admin.mail_ses_key_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_secret',
				'label'             => trans('admin.mail_ses_secret_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_region',
				'label'             => trans('admin.mail_ses_region_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_host',
				'label'             => trans('admin.mail_smtp_host_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_host_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_port',
				'label'             => trans('admin.mail_smtp_port_label'),
				'type'              => 'number',
				'hint'              => trans('admin.mail_smtp_port_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_username',
				'label'             => trans('admin.mail_smtp_username_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_username_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_password',
				'label'             => trans('admin.mail_smtp_password_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_password_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_encryption',
				'label'             => trans('admin.mail_smtp_encryption_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_encryption_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			[
				'name'              => 'ses_email_sender',
				'label'             => trans('admin.mail_email_sender_label'),
				'type'              => 'email',
				'hint'              => trans('admin.mail_email_sender_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 ses',
				],
			],
			
			[
				'name'              => 'driver_sparkpost_title',
				'type'              => 'custom_html',
				'value'             => trans('admin.driver_sparkpost_title'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 sparkpost',
				],
			],
			[
				'name'  => 'driver_sparkpost_info',
				'type'  => 'custom_html',
				'value' => trans('admin.driver_sparkpost_info'),
				'wrapperAttributes' => [
					'class' => 'col-md-12 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_secret',
				'label'             => trans('admin.mail_sparkpost_secret_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_host',
				'label'             => trans('admin.mail_smtp_host_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_host_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_port',
				'label'             => trans('admin.mail_smtp_port_label'),
				'type'              => 'number',
				'hint'              => trans('admin.mail_smtp_port_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_username',
				'label'             => trans('admin.mail_smtp_username_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_username_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_password',
				'label'             => trans('admin.mail_smtp_password_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_password_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_encryption',
				'label'             => trans('admin.mail_smtp_encryption_label'),
				'type'              => 'text',
				'hint'              => trans('admin.mail_smtp_encryption_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			[
				'name'              => 'sparkpost_email_sender',
				'label'             => trans('admin.mail_email_sender_label'),
				'type'              => 'email',
				'hint'              => trans('admin.mail_email_sender_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6 sparkpost',
				],
			],
			
			[
				'name'  => 'javascript',
				'type'  => 'custom_html',
				'value' => '<script>
docReady(function() {
	let driverEl = document.querySelector("#driver");
	getDriverFields(driverEl);
});

function getDriverFields(driverEl) {
	let driverElValue = driverEl.value;
	
	hideEl(document.querySelectorAll(".smtp, .mailgun, .postmark, .ses, .sparkpost, .sendmail"));
	
	if (driverElValue === "smtp") {
		showEl(document.querySelectorAll(".smtp"));
	}
	if (driverElValue === "mailgun") {
		showEl(document.querySelectorAll(".mailgun"));
	}
	if (driverElValue === "postmark") {
		showEl(document.querySelectorAll(".postmark"));
	}
	if (driverElValue === "ses") {
		showEl(document.querySelectorAll(".ses"));
	}
	if (driverElValue === "sparkpost") {
		showEl(document.querySelectorAll(".sparkpost"));
	}
	if (driverElValue === "sendmail") {
		showEl(document.querySelectorAll(".sendmail"));
	}
}
</script>',
			],
			
			[
				'name'  => 'mail_other_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.mail_other_sep_value'),
			],
			[
				'name'  => 'email_verification',
				'label' => trans('admin.settings_mail_email_verification_label'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.settings_mail_email_verification_hint'),
			],
			[
				'name'  => 'confirmation',
				'label' => trans('admin.settings_mail_confirmation_label'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.settings_mail_confirmation_hint'),
			],
			[
				'name'  => 'admin_notification',
				'label' => trans('admin.settings_mail_admin_notification_label'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.settings_mail_admin_notification_hint'),
			],
			[
				'name'  => 'payment_notification',
				'label' => trans('admin.settings_mail_payment_notification_label'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.settings_mail_payment_notification_hint'),
			],
		];
		
		return $fields;
	}
}
