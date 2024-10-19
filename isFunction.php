<?php

$num = 10;

echo is_int($num);
$num = 10.5;

echo is_float($num);


function hello() {
    echo "Hello";
}

echo is_callable('hello') ? 'true' : 'false';

?>