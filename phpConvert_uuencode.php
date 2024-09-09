<?php

$str = "Suvendu";
$temp1 = convert_uuencode($str);
echo $temp1 . "<br>";

echo convert_uudecode($temp1);


?>