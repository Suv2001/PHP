
<?php

echo "Generally, we use keys for associative arrays.";
$person = ["Suvendu" => "22", "Nilashis" => "22", "Apurba" => "20", "Rivu" => "16"];
$array = array_keys($person);
echo "<pre>";
print_r($array);
echo "</pre>";


$last = array_key_last($person); // Get the last key
$first = array_key_first($person); // Get the first key
echo "Last key: $last\n";
echo "First key: $first\n";

echo " <br>array key exists";


echo array_key_exists("Suvendu", $person); // if exists then it will return 1 otherwise 0




?>
