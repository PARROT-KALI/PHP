<?php
    class Client   //开户
    {
        public $name = '';
        public $money = '';

        function __construct($new_name, $new_money)
        {
            $this->name = $new_name;
            $this->money = $new_money;
        }
    }


    class Deposit extends Client    //开户并存款
    {
        function write_in()
        {
            $f = 'fp';
            $$f = fopen("./$this->name.txt", 'w');
            fwrite($fp, $this->name);
            fwrite($fp, "\n");
            fwrite($fp, $this->money);
            fclose($fp);
        }
    }

    if ($_POST['name'] != null && $_POST['money'] != null)
    {
        $tmp = new Deposit($_POST['name'], $_POST['money']);
        $tmp->write_in();
    }
?>

<html>
<body style="background-image: url('./background.jpeg');
             background-size: 100%,100%;
             background-repeat: no-repeat;
             background-position: center;">
<script>
    alert("开户成功！点我跳转回主页！");
    window.location.href="./index.php";
</script>
</body>
</html>