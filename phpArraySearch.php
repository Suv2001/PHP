<?php

$array = array(1,2,3,4,5);
 echo in_array(2,$array); // if the value is present in the array then it will return 1 otherwise will return 0
 if(in_array(2,$array) ) echo "Element found in the aray";
 else echo "element not found ";
 echo "<br>";
 echo array_search(10,$array); // this will return the index of the element if present in the array otherwiae will return 0 or false and for assiocied array will return key 


?>