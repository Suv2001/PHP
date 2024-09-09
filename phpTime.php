<?php

echo date("h"). "    for hours  start 01 to 12 with <br>";
echo date("h"). "    for hours  start 1 to 12 with <br>";
echo date("H"). "    for hours  start 00 to 23 with<br>";
echo date("H"). "    for hours  start 0 to 23 with<br>";
echo date("i"). " minutes<br>";
echo date("s"). " second<br>";
echo date("a"). " meridian in small letter<br>";
echo date("A"). " meridian in Capital letter<br>";

echo "<br>";


echo "<br>";

echo date("d-m-y");

date_default_timezone_set("Asia/Kolkata"); // Set the time zone
echo date("h:i:sA"); // Display the current time


?>