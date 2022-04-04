<h1><?php

//echo "haha<br>";/*$a=123;$b='haha';$c=$a.$b;echo $c;*/
/*function f1($n)
{
    if($n>2)
    {f1(--$n);}
    else{
        echo '$n='.$n.'<br>';
    }

}
    $a=3;
f1($a);*/

    /* $a=123;
*function f2()
 {
     global $a;
     $a+=1;
     echo $a;
 }
 f2();*/

    $xs[0]=77;
    $xs[1]=80;
    $xs[2]=82;
    for($i=0;$i<count($xs);$i++)
    {
        echo '第$i个数组元素是：'.$xs[$i].'<br>';
    }
?></h1>