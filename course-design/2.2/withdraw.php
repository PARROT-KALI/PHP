<?php
    class Account_withdraw     //取钱
    {
        private $name='';
        function draw_money($name,$money)
        {
            $this->name=$name;$content=array();$i=0;
            $f='fp';
            $$f=fopen("./$this->name.txt",'r');
            while(!feof($fp))
            {
                $content[$i]=fgets($fp, 1024); //利用fgets一行一行提取的特性
                $i++;
            }
            $i=$i-1;
            $content[$i]=$content[$i]-$money;

            $f='fp';
            $$f=fopen("./$this->name.txt",'w');
            fwrite($fp,$this->name);fwrite($fp,"\n");
            fwrite($fp,$content[$i]);
            fclose($fp);
        }
    }
?>

<html>
<head>
    <title>ATM模拟程序--取款界面</title>
    <link rel="stylesheet" type="text/css" href="first.css"/>
</head>
<body>
<div class="wrapper">
    <div class="search">
        <input type="text" value="欢迎来到取款界面"/>
        <input type="text" value="提交后会弹出账户余额"/>
    </div>
    <div class="standList">
        <ul>
            <form  action="./withdraw_success.php" method="post">
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入待查询账户户主的姓名</span>
                    <br>
                    <input type="text" name="name"  style="height: 25px;width: 150px;" placeholder="Your name..">
                </li>
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入待取出的金额</span>
                    <br>
                    <input type="text" name="money"  style="height: 25px;width: 150px;" placeholder="Your money..">
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
