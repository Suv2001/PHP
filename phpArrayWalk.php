<?php


$fruits = array(
    "a" => "Lemon " ,
   "b" => "Orange" ,
    "c" =>" Banana " ,
    "d" =>"Apple");


    array_walk($fruits, "fun");

    function fun($value, $key)
    {
        echo  $value . " and the key is " . $key . "<br>";
    }
?>