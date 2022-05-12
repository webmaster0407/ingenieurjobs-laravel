<?php

return [
	
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
	
	/*
	 * Mail providers
	 */
    'mailgun' => [
        'domain'   => null,
        'secret'   => null,
		'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'guzzle' => [
            'verify' => false,
        ],
    ],
	
	'postmark' => [
		'token' => env('POSTMARK_TOKEN', ''),
	],
	
    'ses' => [
        'key'    => null,
        'secret' => null,
        'region' => null,
    ],
	
    'sparkpost' => [
        'secret' => null,
        'guzzle' => [
            'verify' => false,
        ],
    ],
	
	/*
	 * Social login providers (OAuth)
	 */
    'facebook' => [
        'client_id'     => null,
        'client_secret' => null,
        'redirect'      => env('APP_URL') . '/auth/facebook/callback',
    ],
	
	'linkedin' => [
		'client_id'     => null,
		'client_secret' => null,
		'redirect'      => env('APP_URL') . '/auth/linkedin/callback',
	],
	
	'twitter' => [
		'client_id'     => null,
		'client_secret' => null,
		'redirect'      => env('APP_URL') . '/auth/twitter/callback',
	],
	
    'google' => [
        'client_id'     => null,
        'client_secret' => null,
        'redirect'      => env('APP_URL') . '/auth/google/callback',
    ],
	
	/*
	 * Payment gateways
	 */
	// See payment plugins config files
	
	/*
	 * SMS providers
	 */
    'nexmo' => [
        'key'      => env('NEXMO_KEY', ''),
        'secret'   => env('NEXMO_SECRET', ''),
        'sms_from' => env('NEXMO_FROM', ''),
    ],
	
	/*
	 * Other
	 */
	'googlemaps' => [
		'key' => null, //-> for Google Map JavaScript & Embeded
	],
	
];
