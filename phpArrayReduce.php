<?php


echo " used in add to cart total money section ";
$a = [1,2,8,6,4];
$result = array_reduce($a, "sum");
function sum($int, $m) {
    return $int + $m;
}
echo $result;



?>