<?php

namespace App\Services;

class Router
{

    private $routes = [];

    public function add($string)
    {
        $this->routes[] = $string;
    }

}