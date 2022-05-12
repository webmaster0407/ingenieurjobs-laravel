<?php

return [

    /*
     * If a translation has not been set for a given locale, use this locale instead.
     */
	'fallback_locale' => env('FALLBACK_LOCALE_FOR_DB', env('APP_FALLBACK_LOCALE', 'en')),
];
