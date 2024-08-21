<?php
$a = [1,2,8,6,4];
  $array = array_fill_keys($a,"test");

  $array1 = array_flip($array);


  echo "<pre>";
print_r($array);
echo "</pre>";

  echo "<pre>";
print_r($array1);
echo "</pre>";



$arr = array_fill(2,6, "Suvendu");

echo "<pre>";
print_r($arr);
echo "</pre>";

?>