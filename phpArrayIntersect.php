<?php
 $a = [1,2,3,4,5,6];

 $b = [2,1,5,9,10];

 $array = array_intersect($a, $b);  // it copy all the common value between multiple arrays 

 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $a = ['a'=>1,'b'=>2, 'c'=>3];

 $b = ['a'=>1,'d'=>2, 'g'=>3];

 $array = array_intersect_key($a, $b);

 echo "<pre>";
 print_r($array);
 echo "</pre>";


?>