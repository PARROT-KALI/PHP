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

    if ($_POST['name1'] != null && $_POST['name2'] != null &&$_POST['money'] != null )
    {
        $tmp = new Trans_account();
        $tmp->trans($_POST['name1'],$_POST['name2'],$_POST['money']);
    }
?>

<html>
<body style="background-image: url('./background.jpeg');
             background-size: 100%,100%;
             background-repeat: no-repeat;
             background-position: center;">
<script>
    alert("转账成功！点我跳转回主页！");
    window.location.href="./index.php";
</script>
</body>
</html>