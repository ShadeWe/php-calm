<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;

class Controller {

    protected $request = null;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    function hint(bool $hint)
    {
        
    }

}