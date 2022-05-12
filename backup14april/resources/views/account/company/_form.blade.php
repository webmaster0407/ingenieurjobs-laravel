<?php
// From Company's Form
$classLeftCol = 'col-md-3';
$classRightCol = 'col-md-9';

if (isset($originForm)) {
	// From User's Form
	if ($originForm == 'user') {
		$classLeftCol = 'col-md-3';
		$classRightCol = 'col-md-7';
	}
	
	// From Post's Form
	if ($originForm == 'post') {
		$classLeftCol = 'col-md-3';
		$classRightCol = 'col-md-8';
	}
}

$postInput = $postInput ?? [];
?>
<div id="companyFields">
	{{-- name --}}
	<?php $companyNameError = (isset($errors) && $errors->has('company.name')) ? ' is-invalid' : ''; ?>
	<?php $companyName = data_get($postInput, 'company.name', (isset($company->name) ? $company->name : '')) ?>
	<div class="row mb-3 required">
		<label class="{{ $classLeftCol }} col-form-label" for="company.name">{{ t('company_name') }} <sup>*</sup></label>
		<div class="{{ $classRightCol }}">
			<input name="company[name]"
				   placeholder="{{ t('company_name') }}"
				   class="form-control input-md{{ $companyNameError }}"
				   type="text"
				   value="{{ old('company.name', $companyName) }}">
		</div>
	</div>
	
	{{-- logo --}}
	<?php $companyLogoError = (isset($errors) && $errors->has('company.logo')) ? ' is-invalid' : ''; ?>
	<?php $companyLogo = data_get($postInput, 'company.logo', (isset($company->logo) ? $company->logo : null)) ?>
	<div class="row mb-3">
		<label class="{{ $classLeftCol }} col-form-label{{ $companyLogoError }}" for="company.logo"> {{ t('Logo') }} </label>
		<div class="{{ $classRightCol }}">
			<div {!! (config('lang.direction')=='rtl') ? 'dir="rtl"' : '' !!} class="file-loading mb10">
				<input id="logo" name="company[logo]" type="file" class="file{{ $companyLogoError }}">
			</div>
			<div class="form-text text-muted">
				{{ t('file_types', ['file_types' => showValidFileTypes('image')]) }}
			</div>
		</div>
	</div>
	
	{{-- description --}}
	<?php $companyDescriptionError = (isset($errors) && $errors->has('company.description')) ? ' is-invalid' : ''; ?>
	<?php $companyDescription = data_get($postInput, 'company.description', (isset($company->description) ? $company->description : '')) ?>
	<div class="row mb-3 required">
		<label class="{{ $classLeftCol }} col-form-label" for="company.description">{{ t('Company Description') }} <sup>*</sup></label>
		<div class="{{ $classRightCol }}">
			<textarea class="form-control{{ $companyDescriptionError }}"
					  name="company[description]"
					  rows="10"
					  style="height: 200px"
			>{{ old('company.description', $companyDescription) }}</textarea>
			<div class="form-text text-muted">
				{{ t('Describe the company') }} - ({{ t('N characters maximum', ['number' => 1000]) }})
			</div>
		</div>
	</div>
	
	@if (isset($company) && !empty($company))
		{{-- country_code --}}
		<?php $companyCountryCodeError = (isset($errors) && $errors->has('company.country_code')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3 required">
			<label class="{{ $classLeftCol }} col-form-label{{ $companyCountryCodeError }}" for="company.country_code">{{ t('country') }}</label>
			<div class="{{ $classRightCol }}">
				<select id="countryCode" name="company[country_code]" class="form-control large-data-selecter{{ $companyCountryCodeError }}">
					<option value="0" {{ (!old('company.country_code') || old('company.country_code')==0) ? 'selected="selected"' : '' }}> {{ t('select_a_country') }} </option>
					@foreach ($countries as $item)
						<option value="{{ $item->get('code') }}" {{ (
									old(
										'company.country_code',
										(
											isset($company->country_code)
											? $company->country_code
											: ((!empty(config('country.code'))) ? config('country.code') : 0)
										)
									)==$item->get('code')
								) ? 'selected="selected"' : ''
							}}
						>
							{{ $item->get('name') }}
						</option>
					@endforeach
				</select>
			</div>
		</div>
		
		{{-- city_id --}}
		<?php $companyCityIdError = (isset($errors) && $errors->has('company.city_id')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label{{ $companyCityIdError }}" for="company.city_id">{{ t('city') }}</label>
			<div class="{{ $classRightCol }}">
				<select id="cityId" name="company[city_id]" class="form-control large-data-selecter{{ $companyCityIdError }}">
					<option value="0" {{ (!old('company.city_id') || old('company.city_id')==0) ? 'selected="selected"' : '' }}>
						{{ t('select_a_city') }}
					</option>
				</select>
			</div>
		</div>
		
		{{-- address --}}
		<?php $companyAddressError = (isset($errors) && $errors->has('company.address')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.address">{{ t('Address') }}</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
					<input name="company[address]"
						   type="text"
						   class="form-control{{ $companyAddressError }}"
						   placeholder=""
						   value="{{ old('company.address', (isset($company->address) ? $company->address : '')) }}"
					>
				</div>
			</div>
		</div>
		
		{{-- phone --}}
		<?php $companyPhoneError = (isset($errors) && $errors->has('company.phone')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.phone">{{ t('phone') }}</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
					<input name="company[phone]" type="text"
						   class="form-control{{ $companyPhoneError }}" placeholder=""
						   value="{{ old('company.phone', (isset($company->phone) ? $company->phone : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- fax --}}
		<?php echo (isset($errors) && $errors->has('company.fax')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.fax">{{ t('Fax') }}</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fas fa-print"></i></span>
					<input name="company[fax]" type="text"
						   class="form-control" placeholder=""
						   value="{{ old('company.fax', (isset($company->fax) ? $company->fax : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- email --}}
		<?php $companyEmailError = (isset($errors) && $errors->has('company.email')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.email">{{ t('email') }}</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="far fa-envelope"></i></span>
					<input name="company[email]" type="text"
						   class="form-control{{ $companyEmailError }}" placeholder=""
						   value="{{ old('company.email', (isset($company->email) ? $company->email : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- website --}}
		<?php $companyWebsiteError = (isset($errors) && $errors->has('company.website')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.website">{{ t('Website') }}</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fas fa-globe"></i></span>
					<input name="company[website]" type="text"
						   class="form-control{{ $companyWebsiteError }}" placeholder=""
						   value="{{ old('company.website', (isset($company->website) ? $company->website : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- facebook --}}
		<?php $companyFacebookError = (isset($errors) && $errors->has('company.facebook')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.facebook">Facebook</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fab fa-facebook"></i></span>
					<input name="company[facebook]" type="text"
						   class="form-control{{ $companyFacebookError }}" placeholder=""
						   value="{{ old('company.facebook', (isset($company->facebook) ? $company->facebook : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- twitter --}}
		<?php $companyTwitterError = (isset($errors) && $errors->has('company.twitter')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.twitter">Twitter</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fab fa-twitter"></i></span>
					<input name="company[twitter]" type="text"
						   class="form-control{{ $companyTwitterError }}" placeholder=""
						   value="{{ old('company.twitter', (isset($company->twitter) ? $company->twitter : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- linkedin --}}
		<?php $companyLinkedinError = (isset($errors) && $errors->has('company.linkedin')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.linkedin">Linkedin</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fab fa-linkedin"></i></span>
					<input name="company[linkedin]" type="text"
						   class="form-control{{ $companyLinkedinError }}" placeholder=""
						   value="{{ old('company.linkedin', (isset($company->linkedin) ? $company->linkedin : '')) }}">
				</div>
			</div>
		</div>
		
		{{-- pinterest --}}
		<?php $companyPinterestError = (isset($errors) && $errors->has('company.pinterest')) ? ' is-invalid' : ''; ?>
		<div class="row mb-3">
			<label class="{{ $classLeftCol }} col-form-label" for="company.pinterest">Pinterest</label>
			<div class="{{ $classRightCol }}">
				<div class="input-group">
					<span class="input-group-text"><i class="fas fa-bullhorn"></i></span>
					<input name="company[pinterest]" type="text"
						   class="form-control{{ $companyPinterestError }}" placeholder=""
						   value="{{ old('company.pinterest', (isset($company->pinterest) ? $company->pinterest : '')) }}">
				</div>
			</div>
		</div>
	@endif
</div>

@section('after_styles')
	@parent
	<style>
		#companyFields .select2-container {
			width: 100% !important;
		}
		.file-loading:before {
			content: " {{ t('loading_wd') }}";
		}
		.krajee-default.file-preview-frame .kv-file-content {
			height: auto;
		}
		.krajee-default.file-preview-frame .file-thumbnail-footer {
			height: 30px;
		}
	</style>
@endsection

@section('after_scripts')
	@parent
	<script>
		/* Initialize with defaults (logo) */
		$('#logo').fileinput(
		{
			theme: 'fas',
			language: '{{ config('app.locale') }}',
			@if (config('lang.direction') == 'rtl')
				rtl: true,
			@endif
			dropZoneEnabled: false,
			showPreview: true,
			previewFileType: 'image',
			allowedFileExtensions: {!! getUploadFileTypes('image', true) !!},
			showUpload: false,
			showRemove: false,
			minFileSize: {{ (int)config('settings.upload.min_image_size', 0) }}, {{-- in KB --}}
			maxFileSize: {{ (int)config('settings.upload.max_image_size', 1000) }}, {{-- in KB --}}
			@if (isset($companyLogo) && !empty($companyLogo) && isset($disk) && $disk->exists($companyLogo))
				/* Retrieve Existing Logo */
				initialPreview: [
					'<img src="{{ imgUrl($companyLogo, 'medium') }}" class="file-preview-image">',
				],
			@endif
			/* Remove Drag-Drop Icon (in footer) */
			fileActionSettings: {dragIcon: '', dragTitle: ''},
			layoutTemplates: {
				/* Show Only Actions (in footer) */
				footer: '<div class="file-thumbnail-footer pt-2">{actions}</div>',
				/* Remove Delete Icon (in footer) */
				actionDelete: ''
			}
		});
	</script>
	@if (isset($company) && !empty($company))
	<script>
		/* Translation */
		var lang = {
			'select': {
				'country': "{{ t('select_a_country') }}",
				'admin': "{{ t('select_a_location') }}",
				'city': "{{ t('select_a_city') }}"
			}
		};

		/* Locations */
		var countryCode = '{{ old('company.country_code', (isset($company) ? $company->country_code : 0)) }}';
		var adminType = 0;
		var selectedAdminCode = 0;
		var cityId = '{{ old('company.city_id', (isset($company) ? $company->city_id : 0)) }}';
	</script>
	<script src="{{ url('assets/js/app/d.select.location.js') . vTime() }}"></script>
	@endif
@endsection