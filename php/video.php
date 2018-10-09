<?php

class video
{
    private $name;
    private $code;

    public function __construct($name,$code) 
    {

    $this->name = $name;
    $this->code = $code;

    }
    
    public function getCode()
    {
return $this->code;

    }

    public function setCode()
    {
return $this->code= $code;    
    }
    
    public function getName()
    {
    
return $this->name;

    }

    public function setName()
    {

    $this->name = $name;

    }
    
    private function modifyName($name)
    {

    $this->name = $name;

    }

    public function reuse() 
    {
    $this->modifyName();
    }
}