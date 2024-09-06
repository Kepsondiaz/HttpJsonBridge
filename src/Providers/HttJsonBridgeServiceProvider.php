<?php

namespace Kepsondiaz\HttpJsonBridge\Providers;

use Kepsondiaz\HttpJsonBridge\HttpJsonBridge;

class HttJsonBridgeServiceProvider
{
    public function register()
    {
        $this->app->singleton('HttpJsonBridge', function () {
            return new HttpJsonBridge();
        });
    }
}