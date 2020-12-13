<?php

use App\Engine\Container\Container;
use App\Services\Database;
use App\Services\Config;

$config = require ROOT . "/config/app.php";

$container = new Container();

foreach ($config['providers'] as $provider) 
{
    $instance = new $provider($container);
    $instance->init();
}