<?php

return [

    'providers' => [
        App\Providers\Database\Database::class,
        App\Providers\Router\Router::class,
        App\Providers\Config\Config::class,
    ],
    
    'components' => [
        Symfony\Component\HttpFoundation\Request::class
    ]

];