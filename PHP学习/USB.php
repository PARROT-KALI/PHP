<?php

interface USB
{
    const test1=100;
    public function start();
    public function stop();
}
interface ps2
{
    public function ps2_start();
}
class pc implements USB,ps2
{
    public function start()
    {
        // TODO: Implement start() method.
        echo 'usb start';
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo 'usb stop';
    }
    public function ps2_start()
    {
        // TODO: Implement ps2_start() method.
        echo 'pc ps2 start';
    }
}

class phone implements USB
{
    public function start()
    {
        // TODO: Implement start() method.
        echo 'phone usb start';
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo 'phone usb stop';
    }
}

$a=new pc();
$a->start();echo'</br>';
$a->ps2_start();

echo USB::test1;  //接口可以有属性但必须是常量，默认public。
?>