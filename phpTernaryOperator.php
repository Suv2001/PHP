<?php
$x = 15;

($x>10)? $z = "true" : $z = "false";
echo $z;

// (5>4)? echo " this is true conddition" : echo " this is false condition";


$z = ($x<10)? "true" : "false";
echo $z;


$z = "The value is " .(($x<10)? "true" : "false");
echo $z;
?>