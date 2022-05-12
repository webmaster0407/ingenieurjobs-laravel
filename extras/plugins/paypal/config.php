<?php

return [
	
	'paypal' => [
		'mode'         => env('PAYPAL_MODE', 'sandbox'),
		'clientId'     => env('PAYPAL_CLIENT_ID', ''),
		'clientSecret' => env('PAYPAL_CLIENT_SECRET', ''),
	],
	
];
