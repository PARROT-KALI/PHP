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
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>ATM模拟程序</title>
    <link rel="stylesheet" type="text/css" href="first.css"/>
</head>
<body>
<div class="wrapper">
    <div class="search">
        <input type="text" value="欢迎使用本系统"/>
        <input type="text" value="本系统可以实现'增删改查'功能"/>
    </div>
    <div class="standList">
        <ul>
            <li>
                <a href="https://www.baidu.com" style="color: chartreuse;width:600px;height:3px;font-size:22px;">存款,点我进入存款界面</a>
                <span style="height:26px;width:24px;margin-left:50px;border-radius:16px;font-size:22px;color: chartreuse">功能介绍：新开账户并向内存入钱</span>
            </li>
            <li>
                <a href="https://www.baidu.com" style="color: chartreuse;width:600px;height:3px;font-size:22px;">销号,点我进入销号界面</a>
                <span style="height:26px;width:24px;margin-left:50px;border-radius:16px;font-size:22px;color: chartreuse">功能介绍：删除账户</span>
            </li>
            <li>
                <a href="https://www.baidu.com" style="color: chartreuse;width:600px;height:3px;font-size:22px;">转账,点我进入转账界面</a>
                <span style="height:26px;width:24px;margin-left:50px;border-radius:16px;font-size:22px;color: chartreuse">功能介绍：向一个指定账户转入金额</span>
            </li>
            <li>
                <a href="https://www.baidu.com" style="color: chartreuse;width:600px;height:3px;font-size:22px;">取款,点我进入取款界面</a>
                <span style="height:26px;width:24px;margin-left:50px;border-radius:16px;font-size:22px;color: chartreuse">功能介绍：提取指定账户上指定金额</span>
            </li>
            <li>
                <a href="https://www.baidu.com" style="color: chartreuse;width:600px;height:3px;font-size:22px;">查询,点我进入查询界面</a>
                <span style="height:26px;width:24px;margin-left:50px;border-radius:16px;font-size:22px;color: chartreuse">功能介绍：查看当前账户余额</span>
            </li>
        </ul>
    </div>
</div>

</body>
<body style="background-image: url('./background.jpeg');
             background-size: 90%,90%;
             background-repeat: no-repeat;
             background-position: center;">
</body>
</html>

