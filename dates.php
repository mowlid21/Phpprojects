<?php
date_default_timezone_set("Africa/Nairobi");

$today = date("d-m-Y");
echo $today;
echo "<br>";

$today = date("d/m/Y");
echo  $today;
echo "<br>";

$time = date("H:i:s A");
echo "\n$time";

//DATE CREATE
$now = date_create("2019-10-11");
date_add($now, date_interval_create_from_date_string("30 days") );
echo "<br>";
echo date_format($now, "d-m-Y");
echo "<br>";

$date1 = date_create("10-10-2019");
$date2 = date_create("12-01-2020");

$diff = date_diff($date1, $date2);
//var_dump($diff);
echo "<br>";

echo $diff->format("%m months %d days %y years");
echo "<br>";
//echo $diff->format("%d days");
