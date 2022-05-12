@extends('install.layouts.master')

@section('title', trans('messages.configuration'))

@section('content')
	
	<form action="{{ $installUrl . '/site_info' }}" method="POST">
		{!! csrf_field() !!}
		
		<h3 class="title-3"><i class="fas fa-globe"></i> {{ trans('messages.general') }}</h3>
		<div class="row">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'site_name',
					'value' => $site_info['site_name'] ?? '',
					'rules' => ["site_name" => "required"]
				])
			</div>
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'site_slogan',
					'value' => $site_info['site_slogan'] ?? '',
					'rules' => ["site_slogan" => "required"]
				])
			</div>
		</div>
		
		<hr class="border-0 bg-secondary">
		
		<h3 class="title-3"><i class="fas fa-user"></i> {{ trans('messages.admin_info') }}</h3>
		<div class="row">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'name',
					'value' => $site_info['name'] ?? '',
					'rules' => $rules
				])
			</div>
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'purchase_code',
					'value' => $site_info['purchase_code'] ?? '',
					'hint'  => trans('admin.find_my_purchase_code'),
					'rules' => $rules
				])
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'email',
					'value' => $site_info['email'] ?? '',
					'rules' => $rules
				])
			</div>
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'password',
					'value' => $site_info['password'] ?? '',
					'rules' => $rules
				])
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
				'type'          => 'select',
				'name'          => 'default_country',
				'value'         => $site_info['default_country'] ?? \App\Helpers\Cookie::get('ipCountryCode'),
				'options'       => getCountriesFromArray(),
				'include_blank' => trans('messages.choose'),
				'rules'         => $rules
				])
			</div>
		</div>
		
		<hr class="border-0 bg-secondary">
		
		<h3 class="title-3"><i class="fas fa-envelope"></i> {{ trans('messages.system_email_configuration') }}</h3>
		<div class="row">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'    => 'select',
					'name'    => 'mail_driver',
					'label'   => trans('messages.mail_driver'),
					'value'   => $site_info['mail_driver'] ?? '',
					'options' => [
						["value" => "sendmail", "text" => trans('messages.sendmail')],
						["value" => "smtp", "text" => trans('messages.smtp')],
						["value" => "mailgun", "text" => trans('messages.mailgun')],
						["value" => "postmark", "text" => trans('messages.postmark')],
						["value" => "ses", "text" => trans('messages.ses')],
						["value" => "sparkpost", "text" => trans('messages.sparkpost')],
					],
					'rules' => $rules
				])
			</div>
		</div>
		<div class="row sendmail-box">
			<div class="col-md-6">
				@php
					$sendmailPath = '/usr/sbin/sendmail -bs';
				@endphp
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'sendmail_path',
					'label' => trans('messages.sendmail_path'),
					'value' => $site_info['sendmail_path'] ?? $sendmailPath,
					'hint'  => trans('admin.sendmail_path_hint'),
					'rules' => $sendmail_rules
				])
			</div>
		</div>
		<div class="row smtp-box">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'smtp_hostname',
					'label' => trans('messages.hostname'),
					'value' => $site_info['smtp_hostname'] ?? '',
					'rules' => $smtp_rules
				])
				
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'smtp_username',
					'label' => trans('messages.username'),
					'value' => $site_info['smtp_username'] ?? '',
					'rules' => $smtp_rules
				])
				
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'smtp_encryption',
					'label' => trans('messages.encryption'),
					'value' => $site_info['smtp_encryption'] ?? '',
					'rules' => $smtp_rules
				])
			</div>
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'smtp_port',
					'label' => trans('messages.port'),
					'value' => $site_info['smtp_port'] ?? '',
					'rules' => $smtp_rules
				])
				
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'smtp_password',
					'label' => trans('messages.password'),
					'value' => $site_info['smtp_password'] ?? '',
					'rules' => $smtp_rules
				])
			</div>
		</div>
		<div class="row mailgun-box">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'mailgun_domain',
					'label' => trans('messages.mailgun_domain'),
					'value' => $site_info['mailgun_domain'] ?? '',
					'rules' => $mailgun_rules
				])
			
			</div>
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'mailgun_secret',
					'label' => trans('messages.mailgun_secret'),
					'value' => $site_info['mailgun_secret'] ?? '',
					'rules' => $mailgun_rules
				])
			</div>
		</div>
		<div class="row postmark-box">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'postmark_token',
					'label' => trans('messages.postmark_token'),
					'value' => $site_info['postmark_token'] ?? '',
					'rules' => $postmark_rules
				])
			</div>
		</div>
		<div class="row ses-box">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'ses_key',
					'label' => trans('messages.ses_key'),
					'value' => $site_info['ses_key'] ?? '',
					'rules' => $ses_rules
				])
				
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'ses_secret',
					'label' => trans('messages.ses_secret'),
					'value' => $site_info['ses_secret'] ?? '',
					'rules' => $ses_rules
				])
			</div>
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'ses_region',
					'label' => trans('messages.ses_region'),
					'value' => $site_info['ses_region'] ?? '',
					'rules' => $ses_rules
				])
			</div>
		</div>
		<div class="row sparkpost-box">
			<div class="col-md-6">
				@include('install.helpers.form_control', [
					'type'  => 'text',
					'name'  => 'sparkpost_secret',
					'label' => trans('messages.sparkpost_secret'),
					'value' => $site_info['sparkpost_secret'] ?? '',
					'rules' => $sparkpost_rules
				])
			</div>
		</div>
		
		<hr class="border-0 bg-secondary">
		
		<div class="text-end">
			<button type="submit" class="btn btn-primary" data-wait="{{ trans('messages.button_processing') }}">
				{!! trans('messages.next') !!} <i class="fas fa-chevron-right position-right"></i>
			</button>
		</div>
	
	</form>

@endsection

@section('after_scripts')
	<script type="text/javascript" src="{{ url()->asset('assets/plugins/forms/styling/uniform.min.js') }}"></script>
	<script>
		function toogleMailer() {
			var value = $("select[name='mail_driver']").val();
			var smtpEl = $('.smtp-box');
			
			$('.smtp-box, .sendmail-box, .mailgun-box, .postmark-box, .ses-box, .sparkpost-box').hide();
			
			if (value === 'sendmail') {
				/* $('.sendmail-box').show(); */
			}
			if (value === 'smtp') {
				smtpEl.show();
			}
			if (value === 'mailgun') {
				smtpEl.show();
				$('.mailgun-box').show();
			}
			if (value === 'postmark') {
				smtpEl.show();
				$('.postmark-box').show();
			}
			if (value === 'ses') {
				smtpEl.show();
				$('.ses-box').show();
			}
			if (value === 'sparkpost') {
				smtpEl.show();
				$('.sparkpost-box').show();
			}
		}
		
		$(document).ready(function () {
			toogleMailer();
			$("select[name='mail_driver']").change(function () {
				toogleMailer();
			});
		});
	</script>
@endsection
