<?php
$name = "Suvendu";

$array = str_split($name);

echo "<pre>";
print_r($array);
echo "</pre>";

$arr = chunk_split($name, 2, "**");
echo "<pre>";
print_r($arr);
echo "</pre>";

?>