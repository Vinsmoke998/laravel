<?php
abstract class animal 

{

    public $name;
    public $age;

public function Describe()
{

return $this->name . " , " . $this->$age . "years old";

}
abstract public function Greet();

}