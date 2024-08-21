<?php
$a = array(
    "Bill" =>10,
    "Joe" =>20,
    "Peter" => 30);



    $array = array_flip($a);

    $array1 = array_change_key_case($a, CASE_UPPER);


echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($array);
echo "</pre>";


echo "<pre>";
print_r($array1);
echo "</pre>";



?>