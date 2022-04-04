<?php
class Client   //开户
{
    private $name=''; private $money='';
    function __construct($new_name,$new_money)
    {
        $this->name=$new_name;
        $this->money=$new_money;
    }
}


class Deposit extends Client    //开户并存款
{
    function  write_in()
    {
        $f='fp';
        $$f=fopen("./$this->name.txt",'w');
        fwrite($fp,$this->name);fwrite($fp,"\n");
        fwrite($fp,$this->money);
        fclose($fp);
    }
}

class Withdraw extends Client     //取款
{
    function __construct($new_name)
    {
        $this->name=$new_name;
        $this->money=0;
    }

    function read_out()
    {
        $f='fp';
        $$f=fopen("./$this->name.txt",'r');
        while(!feof($fp)){
            $tmp=fgets($fp, 1024);
            echo $tmp;
        }
        fclose($fp);
    }
}

class Trans_account         //转账
{
    private $name='';private $del=0;
    function  trans($n1,$n2,$del)
    {
        $content1=array();$content2=array();$f='fp';$this->del=$del;
        $this->name=$n1;$i=0;
        $$f=fopen("./$this->name.txt",'r');
        while(!feof($fp))
        {
            $content1[$i]=fgets($fp, 1024);
            $i++;
        }

        $this->name=$n2;$i=0;
        $$f=fopen("./$this->name.txt",'r');
        while(!feof($fp))
        {
            $content2[$i]=fgets($fp, 1024);
            $i++;
        }

        $content1[1]=$content1[1]-$del;
        $content2[1]=$content2[1]+$del;

        $this->name=$n1;$i=0;
        $$f=fopen("./$this->name.txt",'w');
        while($i!=2)
        {
            fwrite($fp,$content1[$i]);
            $i++;
        }

        $this->name=$n2;$i=0;
        $$f=fopen("./$this->name.txt",'w');
        while($i!=2)
        {
            fwrite($fp,$content2[$i]);
            $i++;
        }
        fclose($fp);
    }
}


class Account_inquiry     //查看账户里有多少钱
{
    private $name='';
    function Inquire($name)
    {
        $this->name=$name;$content=array();$i=0;
        $f='fp';
        $$f=fopen("./$this->name.txt",'r');
        while(!feof($fp))
        {
            $content[$i]=fgets($fp, 1024); //利用fgets一行一行提取的特性
            echo $content[$i];                   //将文件内容转为数组内容取出
            $i++;
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>ATM模拟程序</title>
</head>
<body>
<script>
    document.write("设计一个仿真自动柜员机（ATM）的程序。</br>");
    document.write("要求实现：</br>");
    document.write("1) 开户、提款、存款、转帐、查询等功能，并有选项可以离开此程序。</br>");
    document.write("2) 信息以文件形式保存，一用户一文件，相当于一用户一存折。</br>");
</script>
</body>
</html>

<?php

?>
