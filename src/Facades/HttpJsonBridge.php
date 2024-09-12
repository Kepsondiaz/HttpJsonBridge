<?php

namespace Kepsondiaz\HttpJsonBridge\Facades;

use Illuminate\Support\Facades\Facade;

class HttpJsonBridge extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'HttpJsonBridge';
    }

}