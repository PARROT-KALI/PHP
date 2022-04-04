<?php
abstract class animal
{
    public $name;
    protected $age;
    abstract function cry();
}

class Cat extends animal
{
    public function cry()
    {
        // TODO: Implement cry() method.
        echo '喵喵喵';
    }
}

$cat=new Cat();
$cat->cry();
?>
