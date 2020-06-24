<?php

use App\Engine\Container\Container;
use App\Core\SettingsResolver;

$container = new Container();
$config = require __DIR__ . "\\..\\config\\app.php";

foreach ($config['providers'] as $provider) 
{
    $instance = new $provider($container);
    $instance->init();
}

$config = new SettingsResolver();