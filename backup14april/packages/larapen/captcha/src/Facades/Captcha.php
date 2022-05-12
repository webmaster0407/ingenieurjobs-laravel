<?php

namespace Larapen\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larapen\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
