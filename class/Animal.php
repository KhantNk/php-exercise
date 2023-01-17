<?php

class Animal
{
   public string $name;

    public string $voice;

    public int $legs;

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function getCommonName()
    {
        return "Hla Hla";
    }
}