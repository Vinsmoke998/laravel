<?php

class PHP {

    protected $age;

    public function setAge($age){
        
        $this->age = $age;

    }

    public function getAge($age){

        $this->setAge(20);

return $this->age;
    }

}

$example = new PHP();

echo $example->getAge();
