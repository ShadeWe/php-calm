<?php

namespace App\Providers\Router;

use App\Providers\Provider;

class Router extends Provider
{
    function init()
    {
        $this->app->bind(\App\Services\Router::class, function() {
            return new \App\Services\Router();
        });
    }
}