<?php

$a = [1,2,8,6,4];

array_map("square", $a);

function square($a)
{
     echo ($a * $a) . " <br>";
}


?>