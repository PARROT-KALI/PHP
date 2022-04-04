<?php
class A
{
    public $a;
    function test()
    {
        echo "AAa";
    }
}


class B extends A
{
    public function test()
    {
        #parent::test();
        echo 'bbb';
    }
}

$b=new B;
$b->test();
?>
