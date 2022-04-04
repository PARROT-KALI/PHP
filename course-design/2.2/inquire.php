<?php
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

<html>
<head>
    <title>ATM模拟程序--查询界面</title>
    <link rel="stylesheet" type="text/css" href="first.css"/>
</head>
<body>
<div class="wrapper">
    <div class="search">
        <input type="text" value="欢迎来到查询界面"/>
        <input type="text" value="提交后输出的账户余额"/>
    </div>
    <div class="standList">
        <ul>
            <form  action="./inquire_success.php" method="post">
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入待查询账户户主的姓名</span>
                    <br>
                    <input type="text" name="name"  style="height: 25px;width: 150px;" placeholder="Your name..">
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

