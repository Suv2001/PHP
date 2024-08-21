<?php
$a = array("Souharda"=>"103","Nilashis"=>10.7,"Chayan"=>"DAs", "Apurba"=>114,"Suvendu"=>117);

echo "<pre>";
print_r($a);
echo "</pre>";

// for ($i = 0; $i <5; $i++)
// {
//     echo "<ul>";            // can not use this for loop because it is not index aray  here dont have any  index 
//     echo "<li>$a[$i]</li>";
//     echo "</ul>";

// }

echo $a["Souharda"];
echo $a["Nilashis"];
echo $a["Chayan"];
echo $a["Apurba"];
echo $a["Suvendu"];

echo "<pre>";
var_dump($a);
echo "</pre>";
?>