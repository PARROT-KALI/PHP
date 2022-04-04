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

    if ($_POST['name'] != null )
    {
        $a=$_POST['name'];
        $tmp = new Del();
        $b="./".$a.".txt";
        $tmp->delete($b);
    }
?>

<html>
<body style="background-image: url('./background.jpeg');
             background-size: 100%,100%;
             background-repeat: no-repeat;
             background-position: center;">
<script>
    alert("销户成功！点我跳转回主页！");
    window.location.href="./index.php";
</script>
</body>
</html>