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

            echo "<script>alert($content[$i])</script>";
            $f='fp';
            $$f=fopen("./$this->name.txt",'w');
            fwrite($fp,$this->name);fwrite($fp,"\n");
            fwrite($fp,$content[$i]);
            fclose($fp);
        }
    }

    if ($_POST['name'] != null && $_POST['money'] != null )
    {
        $tmp = new Account_withdraw();
        $tmp->draw_money($_POST['name'],$_POST['money']);
    }
?>

<html>
<body style="background-image: url('./background.jpeg');
             background-size: 100%,100%;
             background-repeat: no-repeat;
             background-position: center;">
<script>
    alert("取款成功！点我跳转回主页！");
    window.location.href="./index.php";
</script>
</body>
</html>
