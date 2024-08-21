<?php

$array1 = [1,2,3];

$array2 = ["Suvendu", "Koushik"];

$array3 = [2.3,5.6];

$newArray = array_merge($array1, $array2, $array3);

echo "<pre>";
print_r($newArray);
echo "</pre>";



$a = ["a" => 1, "b" => 2];
$b = ["c" => 3, "b" => 5, "d" => 4];
$newArray = $a + $b ;

echo "<pre>";
print_r($newArray);
echo "</pre>";


$name = ["Nilashis", "Apurba", "Suvendu"];

$age = [22,20,22];

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>