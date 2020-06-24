<?php

return [

    'providers' => [
        App\Providers\Database\Database::class,
        App\Providers\Router\Router::class,
    ],
    
    'components' => [
        Symfony\Component\HttpFoundation\Request::class
    ]

];