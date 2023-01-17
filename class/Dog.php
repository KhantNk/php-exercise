<?php

require "Animal.php";

class Dog extends Animal
{

    public function ppp()
    {
        return $this->getCommonName();
    }
}