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
                echo "<script>alert($content[$i])</script>";
                $i++;
            }
        }
    }
    if ($_POST['name'] != null)
    {
        $tmp = new Account_inquiry();
        $tmp->Inquire($_POST['name']);
    }
?>


<html>
<body style="background-image: url('./background.jpeg');
             background-size: 100%,100%;
             background-repeat: no-repeat;
             background-position: center;">
<script>
    alert("查询成功！点我跳转回主页！");
    window.location.href="./index.php";
</script>
</body>
</html>
