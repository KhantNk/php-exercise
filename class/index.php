<?php
class animal {
  public $name;
  function set_name($name) 
  {
    $this->name = $name;
  }
}
$animal = new animal();
$animal->set_name("dog");

echo $animal->name;

class dog
{
    public $name;
    function foo( ):void
    {
      return;
    }
}

$dog = new dog();

class cat
{
    public $name;
    function set_name($name)
    {
        $this->name = $name;
    }
}

$cat = new cat();