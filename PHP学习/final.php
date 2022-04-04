<?php
 class A
{
    final public function test()
    {
        echo  'A is testing';
    }
}

class B extends A
{
    public function test()
    {
        echo 'B is testing';
    }
}

$test=new B;
 $test->test();
