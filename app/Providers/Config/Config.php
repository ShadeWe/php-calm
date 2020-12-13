<?php

namespace App\Providers\Config;

use App\Providers\Provider;

class Config extends Provider
{
    function init()
    {
        $this->app->bind(\App\Services\Config::class, function() {
            return new \App\Services\Config();
        });
    }
}