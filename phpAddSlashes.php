<?php


echo " it is use for restict sql injection ";

$str = "Suvendu 'dash' adhikary";


$st = addslashes($str);
echo  $st;

echo  stripcslashes($st);

$a =addcslashes($str, "s");
echo $a;
echo stripcslashes($str);
?>