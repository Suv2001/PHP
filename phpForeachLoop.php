<?php
$a = array("Souharda"=>"103","Nilashis"=>10.7,"Chayan"=>"Das", "Apurba"=>114,"Suvendu"=>117);

foreach($a as $key => $value)
{
    echo "$key = $value<br>";
}
echo "<pre>";
foreach($a as $value)
{
    echo "$value<br>";
}
echo "</pre>";


$b = array("red","green","blue","yellow","black","yellow");

foreach($b as $value)
{
    echo "$value<br>";
}

echo "<ul>";
foreach($b as $key => $value)
{
    echo "<li>$key = $value<br></li>";
}
echo "</ul>";

?>