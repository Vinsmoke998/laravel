<?php

class video implements media
{
    private $name;
    private $code;
    private $qty;

    public function __construct($name,$code,$qty)
    {
        $this->name = $name;
        $this->code = $code;
        $this->qty = $qty;
    }

    public function calPrice() 
    {

        $this->qty *= 7;
        return $this->qty;
    }


}