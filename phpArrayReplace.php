<?php

$fruit = ["orange", "mango", "banana"];
$veggis = ["carrot", "pottato"];

$newArray =  array_replace($fruit,$veggis);
echo "<pre>";
print_r($newArray);
echo "</pre>";



?>