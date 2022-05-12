@extends('admin.layouts.master')

@section('header')
	<div class="row page-titles">
		<div class="col-md-5 col-12 align-self-center">
			<h3 class="mb-0">
				<a href="{{ admin_url('languages') }}" class="btn btn-primary shadow">
					<i class="fa fa-arrow-left"></i>&nbsp;{{ mb_ucfirst(trans('admin.languages')) }}
				</a>&nbsp;
				{{ trans('admin.translate') }} <span class="text-lowercase">{{ trans('admin.site_texts') }}</span>
			</h3>
		</div>
		<div class="col-md-7 col-12 align-self-center d-none d-md-flex justify-content-end">
			<ol class="breadcrumb mb-0 p-0 bg-transparent">
				<li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
				<li class="breadcrumb-item"><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
				<li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.edit') }} {{ trans('admin.texts') }}</li>
			</ol>
		</div>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-12">
			
			<div class="card border-primary">
				<div class="card-header">
					<h3 class="mb-0">{{ ucfirst(trans('admin.language')) }}:
						@foreach ($languages as $lang)
							@if ($currentLang == $lang->abbr)
								{{{ $lang->name }}}
							@endif
						@endforeach
						<small>
							&nbsp; {{ trans('admin.switch_to') }}: &nbsp;
							<select name="language_switch" id="language_switch">
							@foreach ($languages as $lang)
								<option value="{{ admin_url("languages/texts/{$lang->abbr}") }}" {{ $currentLang == $lang->abbr ? 'selected' : ''}}>
									{{ $lang->name }}
								</option>
							@endforeach
							</select>
						</small>
					</h3>
				</div>
				
				<div class="card-body">
					
					<p><em>{!! trans('admin.rules_text') !!}</em></p>
					
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">{{ trans('admin.Files') }}:</a>
						<button class="navbar-toggler"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#navbarNav"
								aria-controls="navbarNav"
								aria-expanded="false"
								aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
							@foreach ($langFiles as $file)
								<li class="nav-item{{ $file['active'] ? ' active' : '' }}">
									<a class="nav-link" href="{{ $file['url'] }}">
										{{ $file['name'] }}
										@if ($file['active'])
										<span class="sr-only">(current)</span>
										@endif
									</a>
								</li>
							@endforeach
							</ul>
						</div>
					</nav>
					
					<div class="row">
						<div class="col-12 lang-inputs">
							<div class="card">
							@if (!empty($fileArray))
								{!! Form::open([
									'url'           => admin_url("languages/texts/{$currentLang}/{$currentFile}"),
									'method'        => 'post',
									'id'            => 'lang-form',
									'class'         => 'form-horizontal',
									'data-required' => trans('admin.fields_required')
								]) !!}
								{!! Form::button('<i class="fa fa-save"></i> ' . trans('admin.save'), [
									'type' => 'submit',
									'class' => 'btn btn-primary shadow submit float-end hidden-xs hidden-sm',
									'style' => "margin-top: 10px;"
								]) !!}
								<div class="card-body">
									<div class="row hidden-sm hidden-xs">
										<div class="col-sm-2 text-end">
											<h4 class="fw-bold">
												{{ trans('admin.key') }}
											</h4>
										</div>
										<div class="hidden-sm hidden-xs col-md-5">
											<h4 class="fw-bold">
												{{ trans('admin.language_text', ['language_name' => $browsingLangObj->name]) }}
											</h4>
										</div>
										<div class="col-sm-10 col-md-5">
											<h4 class="fw-bold">
												{{ trans('admin.language_translation', ['language_name' => $currentLangObj->name]) }}
											</h4>
										</div>
									</div>
								</div>
								<div class="card-body">
									{!! $langFile->displayInputs($fileArray) !!}
								</div>
								<div class="card-footer text-center">
									{!! Form::button('<i class="fa fa-save"></i> ' . trans('admin.save'), [
										'type'  => 'submit',
										'class' => 'btn btn-primary shadow submit'
									]) !!}
								</div>
								{!! Form::close() !!}
							@else
								<div class="card-body">
									<em>{{ trans('admin.empty_file') }}</em>
								</div>
							@endif
							</div>
						</div>
					</div>
					
				</div>
			</div>
	  
		</div>
	</div>
@endsection

@section('after_scripts')
	<script>
		jQuery(document).ready(function($) {
			$("#language_switch").change(function() {
				window.location.href = $(this).val();
			})
		});
	</script>
@endsection
