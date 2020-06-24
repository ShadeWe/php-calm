<?php

namespace App\Core;

class SettingsResolver
{
    public $settings = [];
    private $settings_path = ROOT . "/settings.ini";

    function __construct()
    {
        $fh = fopen($this->settings_path, "r");
        
        if ($fh)
        {
            while ($buffer = fgets($fh))
            {
                $values = explode(" ", trim($buffer));
                $settings[$values[0]] = $values[1];
            }
        }

    }
    
}