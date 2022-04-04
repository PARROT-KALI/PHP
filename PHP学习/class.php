<?php
/*
class Stu
{
    private $name,$age,$score;
    public function __construct($name,$age,$score='130')
    {
        $this->name=$name;
        $this->age=$age;
        $this->score=$score;
    }

    public function showinfo()
    {
        echo $this->name.'-'.$this->age.'-'.$this->score. '<br>';
    }
}


class pupil extends Stu
{
    public function test()
    {
        echo '小学生在考试';
    }
}



class graduate extends pupil
{
    public function test()
    {
        echo '研究生在考试';
    }
}

$a=new graduate('谢翔宇','19');$a->showinfo();$a->test();*/
class A
{
    private  function test1($a)
    {
        echo 'test1 haha';
    }
    private  function test2($a)
    {
        echo 'test1 hello';
    }

    public function __call($method,$p)
    {
        var_dump($p);
        if($method=='test1')
        {
            if(count($p)==1)
            {
                $this->test1($p);
            }
            else if(count($p)==2)
            {
                $this->test2($p);
            }
        }

    }

}

$a=new A;
$a->test(100);
echo '</br>';
$a->test(100,99);

?>

