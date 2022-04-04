<?php
class client
{
    public $name=''; public $money='';
    function __construct($new_name,$new_money)
    {
        $this->name=$new_name;
        $this->money=$new_money;
        echo $this->name,$this->money;
        echo '<br>';
    }
}

class open_new_client extends client
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
$a=new open_new_client("xxy",123452);
$a->write_in();
?>


<!DOCTYPE html>
<html>
<head>
    <title>ATM模拟程序</title>
</head>
<body>
<script>
    document.write("设计一个仿真自动柜员机（ATM）的程序。</br>");
    document.write("要求实现：</br>");
    document.write("1) 开户、提款、存款、转帐、查询等功能，并有选项可以离开此程序。</br>");
    document.write("2) 信息以文件形式保存，一用户一文件，相当于一用户一存折。</br>");
</script>
</body>
</html>

