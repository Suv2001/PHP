<?php


// When you are using $_GET method it will  show all the value in url bar but for $_POST it don't

echo "<pre>";
print_r($_GET);
echo "</pre>";


$name = $_GET["name"];
echo $name;


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// $name = $_POST["name"];
// echo $name;

//  if you want to use  any method thn use $_REQUEST

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";


// $name = $_REQUEST["name"];
// echo $name;

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


?>