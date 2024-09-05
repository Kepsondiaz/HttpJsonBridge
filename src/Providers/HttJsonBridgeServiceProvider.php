<?php

namespace Kepsondiaz\HttpJsonBridge\Providers;

class HttJsonBridgeServiceProvider
{
    public function register()
    {
        $this->app->singleton('HttpJsonBridge', function () {
            return new HttpJsonBridgeService();
        });
    }
}