<?php
 echo checkdate(12,15,2024);/* order is month/day/year  and return true or false means 1 or 0*/
 echo checkdate(15,15,2024);  


 $date1 = date_create("2022-09-08");
 $date2 = date_create("2024-09-08");
$dif =  date_diff($date1, $date2);

echo "<br>".$dif->days;

echo "<pre>";
print_r($dif);
echo "</pre>";


?>