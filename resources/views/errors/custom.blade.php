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
<?php
$httpStatus = [
	100 => 'Continue',
	101 => 'Switching Protocols',
	102 => 'Processing',
	200 => 'OK',
	201 => 'Created',
	202 => 'Accepted',
	203 => 'Non-Authoritative Information',
	204 => 'No Content',
	205 => 'Reset Content',
	206 => 'Partial Content',
	207 => 'Multi-Status',
	208 => 'Already Reported',
	226 => 'IM Used',
	300 => 'Multiple Choices',
	301 => 'Moved Permanently',
	302 => 'Found',
	303 => 'See Other',
	304 => 'Not Modified',
	305 => 'Use Proxy',
	307 => 'Temporary Redirect',
	308 => 'Permanent Redirect',
	400 => 'Bad Request',
	401 => 'Unauthorized',
	402 => 'Payment Required',
	403 => 'Forbidden',
	404 => 'Not Found',
	405 => 'Method Not Allowed',
	406 => 'Not Acceptable',
	407 => 'Proxy Authentication Required',
	408 => 'Request Timeout',
	409 => 'Conflict',
	410 => 'Gone',
	411 => 'Length Required',
	412 => 'Precondition Failed',
	413 => 'Payload Too Large',
	414 => 'URI Too Long',
	415 => 'Unsupported Media Type',
	416 => 'Range Not Satisfiable',
	417 => 'Expectation Failed',
	418 => 'I\'m a teapot',
	419 => 'Authentication Timeout',
	420 => 'Method Failure',
	421 => 'Misdirected Request',
	422 => 'Unprocessable Entity',
	423 => 'Locked',
	424 => 'Failed Dependency',
	425 => 'Reserved for WebDAV advanced collections expired proposal',
	426 => 'Upgrade Required',
	428 => 'Precondition Required',
	429 => 'Too Many Requests',
	431 => 'Request Header Fields Too Large',
	444 => 'No Response',
	449 => 'Retry With',
	450 => 'Blocked by Windows Parental Controls',
	451 => 'Unavailable For Legal Reasons',
	494 => 'Request Header Too Large',
	495 => 'Cert Error',
	496 => 'No Cert',
	497 => 'HTTP to HTTPS',
	499 => 'Client Closed Request',
	500 => 'Internal Server Error',
	501 => 'Not Implemented',
	502 => 'Bad Gateway',
	503 => 'Service Unavailable',
	504 => 'Gateway Timeout',
	505 => 'HTTP Version Not Supported',
	506 => 'Variant Also Negotiates',
	507 => 'Insufficient Storage',
	508 => 'Loop Detected',
	509 => 'Bandwidth Limit Exceeded',
	510 => 'Not Extended',
	511 => 'Network Authentication Required',
	598 => 'Network read timeout error',
	599 => 'Network connect timeout error',
];

$statusCode = 500;
if (isset($exception)) {
	if (($exception instanceof \Throwable) && method_exists($exception, 'getStatusCode')) {
		try {
			$statusCode = $exception->getStatusCode();
		} catch (\Throwable $e) {
		}
	}
}
$title = $httpStatus[$statusCode] ?? 'Internal Server Error';
?>
<html>
<head>
	<title>{{ $title }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex,nofollow">
	<meta name="googlebot" content="noindex">
	<link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
	<style>
		.page-not-found {
			background-color: #f0f0f0;
			height: 100vh;
		}
		
		.page-not-found h2 {
			font-size: 150px;
			color: #e0e0e0;
			line-height: normal !important;
		}
		
		.page-not-found h3 {
			font-size: 30px;
		}
		
		.page-not-found .bg-light {
			width: 50%;
			padding: 50px;
			border-radius: 10px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		
		@media (max-width: 991px) {
			.page-not-found h2 {
				font-size: 100px;
			}
			
			.page-not-found h3 {
				font-size: 28px;
			}
			
			.page-not-found .bg-light {
				width: 95%;
			}
		}
	</style>
</head>
<body>
<div class="page-not-found pt-5">
	<div class="bg-light text-center shadow">
		<h2 class="fw-bold py-0 text-primary">{{ $statusCode }}</h2>
		<h3 class="mt-4 mb-3">{{ $title }}</h3>
		<p>
			<?php
			$defaultErrorMessage = 'An internal server error has occurred.';
			$extractedMessage = null;
			
			if (isset($message) && !empty($message)) {
				$extractedMessage = $message;
			}
			if (empty($extractedMessage) && isset($exception)) {
				if (($exception instanceof \Throwable) && method_exists($exception, 'getMessage')) {
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
		<div class="mt-5">
			<a href="{{ url('/') }}" class="btn m-2 m-md-0 btn-primary"><i class="bi bi-house-door-fill"></i> Back Home</a>
		</div>
	</div>
</div>
</body>
</html>
