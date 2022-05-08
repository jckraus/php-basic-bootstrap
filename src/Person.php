<?php

namespace App;

class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function greet()
    {
        return "Hello!, I'm " . $this->name;
    }
}
