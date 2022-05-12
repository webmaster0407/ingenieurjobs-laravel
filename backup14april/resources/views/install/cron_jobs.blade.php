@extends('install.layouts.master')

@section('title', trans('messages.cron_jobs'))

@section('content')
	
	@include('elements._cron_jobs')
	
	<div class="text-end">
		<a href="{{ $installUrl . '/finish' }}" class="btn btn-primary bg-teal">
			{!! trans('messages.finish') !!} <i class="fas fa-chevron-right position-right"></i>
		</a>
	</div>
	
@endsection

@section('after_scripts')
	<script type="text/javascript" src="{{ url()->asset('assets/plugins/forms/styling/uniform.min.js') }}"></script>
@endsection
