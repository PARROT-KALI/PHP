<?php
    class Client   //开户
    {
        public $name=''; public $money='';
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
?>

<html>
<head>
    <title>ATM模拟程序--开户界面</title>
    <link rel="stylesheet" type="text/css" href="first.css"/>
</head>
<body>
<div class="wrapper">
    <div class="search">
        <input type="text" value="欢迎来到开户界面"/>
        <input type="text" value="本界面可以实现开户功能"/>
    </div>
    <div class="standList">
        <ul>
            <form  action="./register_success.php" method="post">
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入新开户的名字</span>
                    <br>
                    <input type="text" name="name"  style="height: 25px;width: 150px;" placeholder="Your name..">
                </li>
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入存入的金额</span>
                    <br>
                    <input type="text" name="money" style="height: 25px;width: 150px;" placeholder="Your money..">
                    <input type="submit" value="Submit">
                </li>
            <form>
        </ul>
    </div>
</div>
</body>
<body style="background-image: url('./background.jpeg');
             background-size: 100%,100%;
             background-repeat: no-repeat;
             background-position: center;">
</body>
</html>
