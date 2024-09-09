<?php
$date1 = date_create("2024-09-07");

echo $date1->format("d-m-y") . "\n";

date_add($date1, date_interval_create_from_date_string("30 days"));

echo date_format($date1, "d-m-y");

date_sub($date1, date_interval_create_from_date_string("10 days"));

echo "\n";

echo $date1->format("d-m-y");

echo "You can rather use date_modify function";

date_modify($date1, "+10 days");
echo $date1->format("Y-m-d");

echo "<br>";
date_modify($date1, "-10 days");
echo $date1->format("Y-m-d");
?>
