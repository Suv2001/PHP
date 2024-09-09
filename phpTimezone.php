<?php

// echo date_default_timezone_get();

// echo date_default_timezone_get();
echo "<br>";

// date_default_timezone_set("Asia/Kolkata");

$timezone = timezone_open("Asia/Kolkata");

echo timezone_name_get($timezone);

echo "<pre>";
print_r(timezone_location_get($timezone));
echo "</pre>";


$timez = timezone_open("Europe/Berlin");

echo timezone_name_get($timez);

echo "<pre>";

print_r(timezone_location_get($timez));

echo "</pre>";


?>