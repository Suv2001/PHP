<?php

$date = date_create("2024-10-20");

echo $date->format("Y-D-M");

date_time_set($date, 3,50,49);


echo "<br>";
echo $date->format("D/M/Y-H:i:s");



?>