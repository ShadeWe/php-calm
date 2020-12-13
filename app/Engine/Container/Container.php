<?php

namespace App\Engine\Container;

use ReflectionFunction;
use App\Services\Config;

class Container 
{
    protected $services = [];

    public function bind($class, $function)
    {
        $this->services[$class] = $function;
    }

    public function resolve($class)
    {
        $this->services[$class]();


        // dump($provider->getReturnType());

        // return $this->services[$class]();

        // $reflection = new \ReflectionClass($class);
        // $parameters = $reflection->getConstructor()->getParameters();

        // $dependencies = [];

        // foreach ($parameters as $param)
        // {
        //     $class_name = $param->getClass()->name;
        //     $dependencies[] = new $class_name();
        // }

        // $reflection->newInstanceArgs($dependencies);
    }
}