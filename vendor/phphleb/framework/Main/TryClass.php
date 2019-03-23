<?php

namespace Hleb\Main;

use App\Optional\MainConnector;

class TryClass
{
    private $classname;

    public function __construct($classname)
    {
        $this->classname = $classname;
    }

    public function is_connect()
    {
        return isset( (new MainConnector())->add()[$this->classname]) &&  class_exists($this->classname);
    }

    public function is_exists()
    {
        return class_exists($this->classname);
    }
}