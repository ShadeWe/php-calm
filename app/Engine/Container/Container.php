<?php

namespace App\Engine\Container;

class Container 
{

    protected $services = [];

    public function bind($class, $function)
    {
        $this->services[$class] = $function;
    }

    public function resolve($class)
    {
        return $this->services[$class]();
    }

}