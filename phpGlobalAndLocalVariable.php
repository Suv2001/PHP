<?php

$x = 10;

function test()
{
    global $x;
    echo " From inside the function : $x<br>";
}


test();

echo" from outside the function:$x";

?>