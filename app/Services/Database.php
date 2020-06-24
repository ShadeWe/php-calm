<?php

namespace App\Services;

class Database {

    private $connection;

    public function __construct()
    {
        
    }

    public function connection() {
        echo "CONNECTION ...";
    }

}