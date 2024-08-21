<?php
$array = array(
array(
'id'=> 2201,
'first name'=> 'Anil',
'last name' => 'Kapoor'),

array(
'id' => 2202,
'first name'=> 'Salman',
'last name' => 'Khan'),

array(
'id' =>2203,
'first name'=> 'John',
'last name' => 'Abraham')
);

$firstname = array_column($array,'first name' );

echo "<pre>";
print_r($firstname);
echo "</pre>";


$a = ["Red", "Green", "Blue", "Orange", "Brown"];

$arr = array_chunk($a, 2);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>