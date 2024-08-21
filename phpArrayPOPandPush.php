<?php
$array = [1,2,3,5];
echo  " array pop method  " . array_pop($array);

echo "<pre>";
print_r( $array);
echo "</pre>";


 array_push($array, 10,12,14);

echo "<pre>";
print_r( $array);
echo "</pre>";

echo " array shift and array unshift function";


array_shift($array);

echo "<pre>";
print_r( $array);
echo "</pre>";

echo " Array un shift ";

array_unshift($array, 100, 112, 104);

echo "<pre>";
print_r( $array);
echo "</pre>";

?>