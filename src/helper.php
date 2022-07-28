<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: cwy104 <cwy104@vip.qq.com>
// +----------------------------------------------------------------------

use cwy104\captcha\facade\Captcha;

/**
 * @param string $config
 * @return
 */
function captcha($config = null)
{
    return Captcha::create($config);
}


/**
 * @param string $key
 * @param string $value
 * @return bool
 */
function captcha_check($key, $value)
{
    return Captcha::check($key, $value);
}
