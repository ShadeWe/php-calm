<?php

namespace App\Providers;

use App\Engine\Container\Container;

abstract class Provider {

    protected $app = null;

    public function __construct(Container $di) 
    {
        $this->app = $di;
    }

    abstract function init();

}
