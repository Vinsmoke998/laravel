<?php

class person 
{

    private $name;
    private $age;
    private $ethnic;
    private $gender;
    
    public function __construct($name,$age,$ethnic,$gender) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->ethnic = $ethnic;
        $this->gender = $gender;

    }

    public function getName() 
    {
        return $this->name;

    }

    public function setName($name)
    {
        $this->name = $name;

    }



}