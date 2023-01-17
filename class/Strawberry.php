<?php

require "Fruit.php";
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");  
$strawberry->message();
$strawberry->intro();