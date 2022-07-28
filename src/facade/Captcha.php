<?php

namespace cwy104\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package cwy104\captcha\facade
 * @mixin \cwy104\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \cwy104\captcha\Captcha::class;
    }
}
