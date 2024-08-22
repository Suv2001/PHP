<?php
$name = "Suvendu Dash Adhikary";

$array = explode(" ", $name );

echo "<pre>";
print_r($array);
echo "</pre>";

$str = implode(" ",$array);

echo $str;


?>