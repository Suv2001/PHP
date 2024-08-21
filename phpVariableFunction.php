<?php

function abc($b)
{
    echo "hello world $b";
}

$a = "abc";

$a(10);

$p = function ($a, $b) {
    echo $a + $b;
};  //; is must because it treate as a single line

$p(10,20);
?>