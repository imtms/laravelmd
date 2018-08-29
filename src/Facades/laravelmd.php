<?php

/**
 * Created by PhpStorm.
 * User: imtms
 * Date: 16/06/28
 * Time: 下午4:18
 */

namespace imtms\laravelmd\Facades;

use Illuminate\Support\Facades\Facade;

class laravelmd extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelmd';
    }
}