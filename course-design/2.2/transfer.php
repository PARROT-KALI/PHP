<?php
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
?>

<html>
<head>
    <title>ATM模拟程序--转账界面</title>
    <link rel="stylesheet" type="text/css" href="first.css"/>
</head>
<body>
<div class="wrapper">
    <div class="search">
        <input type="text" value="欢迎来到转账界面"/>
        <input type="text" value="本界面可以实现转账功能"/>
    </div>
    <div class="standList">
        <ul>
            <form  action="./transfer_success.php" method="post">
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入转账人的姓名</span>
                    <br>
                    <input type="text" name="name1"  style="height: 25px;width: 150px;" placeholder="Your name..">
                </li>
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入接收人的姓名</span>
                    <br>
                    <input type="text" name="name2"  style="height: 25px;width: 150px;" placeholder="Your name..">
                </li>
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入转账金额</span>
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

