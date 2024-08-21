<?php
$color = array('red', 'green', 'blue', 'alpha');
print_r($color);

$mix = array('red', 20, 'blue', 23.3, "Suvendu Dash Adhikary");
$mix[1]+=10;


echo "<pre>";
print_r($mix);

echo"</pre>";

for($i = 0; $i <5; $i++)
{
    echo "<ul>";
    echo "<li> $mix[$i] </li>";
    echo "</ul>";
}


for($i = 0; $i <5; $i++)
{
    echo "<ol>";
    echo "<li> $mix[$i] </li>";
    echo "</ol>";
}
?>