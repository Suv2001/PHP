<?php

$color = array(" red" , "green" , "blue" , "yellow" , "brown");
$rand = array_rand($color);
$rand1 = array_rand($color,2);

echo "<pre>";
print_r($rand);
echo "</pre>";


echo "<pre>";
print_r($rand1);
echo "</pre>";


echo "<pre>";
print_r($color[$rand]);
echo "</pre>";


 shuffle($color);
echo "<pre>";
print_r($color);
echo "</pre>";

?>