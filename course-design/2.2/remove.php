<?php
    class Del
    {
        private $name='';
        function  delete($post_name)
        {
            $this->name=$post_name;
            if(file_exists($this->name)==1)
            {
                unlink($this->name);
                echo "<script>alert('已顺利销号，欢迎下次使用!')</script>";
            }
            else
            {
                echo "<script>alert('文件不存在!')</script>";
            }
        }
    }
?>


<html>
<head>
    <title>ATM模拟程序--销户界面</title>
    <link rel="stylesheet" type="text/css" href="first.css"/>
</head>
<body>
<div class="wrapper">
    <div class="search">
        <input type="text" value="欢迎来到销户界面"/>
        <input type="text" value="本界面可以实现销户功能"/>
    </div>
    <div class="standList">
        <ul>
            <form  action="./remove_success.php" method="post">
                <li>
                    <span style="height:26px;width:24px;border-radius:16px;font-size:18px;color: chartreuse">在此输入待销毁账户的名字</span>
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
