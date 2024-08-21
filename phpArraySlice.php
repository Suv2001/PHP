<?php

$array = [10,20,30,40,50,60];

$name = ["Suvendu", "Nilashis", "Roumya"];


// $a = array_slice($array, 3,3);
$a = array_slice($array, -2,3, true);


echo "<pre>";
print_r($a);
echo "</pre>";

echo " Array Splice in php";


array_splice($array,2,3, $name );

echo "<pre>";
print_r($array);
echo "</pre>";

echo " To remove specific value from the array ";

array_splice($array, 0, 1);

echo "<pre>";
print_r($array);
echo "</pre>";

echo " For remove more value then use ";

array_splice($array,2,2);

echo "<pre>";
print_r($array);
echo "</pre>";

echo " For update value in perticuler index";

array_splice($array, 0,1, "Koushik");

echo "<pre>";
print_r($array);
echo "</pre>";

echo " Enter value without removing any value ";

array_splice($array, 1,0, "Rivu");

echo "<pre>";
print_r($array);
echo "</pre>";


echo count($array) . "this is the array length";

?>