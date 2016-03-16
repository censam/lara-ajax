<?php

namespace Censam\LaraAjax;

use Illuminate\Support\Facades\Facade;

/**
 * class LaraAjax
 *
 * @package laraAjax
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class LaraAjax extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Censam\LaraAjax\LaraAjaxGenerate';
    }
}
