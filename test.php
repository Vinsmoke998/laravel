<?php

class cat extends animal 
{
    public function  Greet()
    {

        return "moew!";

    }

    public function Describe()

    {

        return parrent:: Describe() . ", and i am a boss!";
    }

}
edited
