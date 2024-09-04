<?php

namespace Kepsondiaz\HttJsonBridge\src\providers;

use Illuminate\Support\ServiceProvider;

class HttJsonBridgeServiceProvider
{
    public function register()
    {
        $this->app->singleton('HttpJsonBridge', function () {
            return new HttpJsonBridgeService();
        });
    }
}