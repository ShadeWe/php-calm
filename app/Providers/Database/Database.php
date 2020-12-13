<?php

namespace App\Providers\Database;

use App\Services\Config;
use App\Providers\Provider;

class Database extends Provider
{
    function init()
    {
        $this->app->bind(\App\Services\Database::class, function() {
            return new \App\Services\Database();
        });
    }
}