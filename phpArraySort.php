<?php
$a = [1,2,8,6,4];

sort($a);


echo "<pre>";
print_r($a);
echo "</pre>";


rsort($a);

echo "<pre>";
print_r($a);
echo "</pre>";

$newArray = array_reverse($a);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>