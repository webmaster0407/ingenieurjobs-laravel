{{--
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
--}}
@extends('errors.layouts.master')

@section('title', t('Internal Server Error'))

@section('search')
	@parent
	@include('errors.layouts.inc.search')
@endsection

@section('content')
	@include('common.spacer')
	<div class="main-container inner-page">
		<div class="container">
			<div class="section-content">
				<div class="row">

					<div class="col-md-12 page-content">
						
						<div class="error-page mt-5 mb-5 ms-0 me-0 pt-5">
							<h1 class="headline text-center" style="font-size: 180px;">500</h1>
							<div class="text-center m-l-0 mt-5">
								<h3 class="m-t-0 color-danger">
									<i class="fas fa-exclamation-triangle"></i> {{ t('Internal Server Error') }}
								</h3>
								<p>
									<?php
									$defaultErrorMessage = t('An internal server error has occurred');
									$extractedMessage = null;
									
									if (isset($exception)) {
										if (is_object($exception) && method_exists($exception, 'getMessage')) {
											$extractedMessage = $exception->getMessage();
											$extractedMessage = str_replace(base_path(), '', $extractedMessage);
											
											if (!empty($extractedMessage)) {
												if (method_exists($exception, 'getFile')) {
													$filePath = $exception->getFile();
													$filePath = str_replace(base_path(), '', $filePath);
													$extractedMessage .= "\n" . 'In the: <code>' . $filePath . '</code> file';
													if (method_exists($exception, 'getLine')) {
														$extractedMessage .= ' at line: <code>' . $exception->getLine() . '</code>';
													}
												}
												$extractedMessage = nl2br($extractedMessage);
											}
										}
									}
									
									echo (!empty($extractedMessage)) ? $extractedMessage : $defaultErrorMessage;
									?>
								</p>
							</div>
						</div>

					</div>

				</div>
			</div>

            <?php
				$requirements = [];
				$requiredPhpVersion = _getComposerRequiredPhpVersion();
				if (!version_compare(PHP_VERSION, $requiredPhpVersion, '>=')) {
					$requirements[] = 'PHP ' . $requiredPhpVersion . ' or higher is required.';
				}
				if (!extension_loaded('openssl')) {
					$requirements[] = 'OpenSSL PHP Extension is required.';
				}
				if (!extension_loaded('mbstring')) {
					$requirements[] = 'Mbstring PHP Extension is required.';
				}
				if (!extension_loaded('pdo')) {
					$requirements[] = 'PDO PHP Extension is required.';
				}
				if (!extension_loaded('tokenizer')) {
					$requirements[] = 'Tokenizer PHP Extension is required.';
				}
				if (!extension_loaded('xml')) {
					$requirements[] = 'XML PHP Extension is required.';
				}
				if (!extension_loaded('fileinfo')) {
					$requirements[] = 'PHP Fileinfo Extension is required.';
				}
				if (!(extension_loaded('gd') && function_exists('gd_info'))) {
					$requirements[] = 'PHP GD Library is required.';
				}
            ?>
			@if (isset($requirements))
			<div class="row">
				<div class="col-md-12">
					<ul class="installation">
						@foreach ($requirements as $key => $item)
							<li>
								<i class="fas fa-times text-danger"></i>
								<h5 class="title-5">
									Error #{{ $key }}
								</h5>
								<p>
									{{ $item }}
								</p>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif
			
		</div>
	</div>
@endsection
