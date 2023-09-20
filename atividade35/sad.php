<?php 

$date = date('d/m/y');

echo $date . '<br>';

$date2 = date('D/M/Y');

echo $date2 . '<br>';

$dateeHORA = date('d/m/y h:i:s');

echo $dateeHORA ;


/*

[y] => 0
[m] => 0
[d] => 0
[h] => 9
[i] => 0
[s] => 0
[f] => 0
[weekday] => 0
[weekday_behavior] => 0
[first_last_day_of] => 0
[invert] => 1
[days] => 0
[special_type] => 0
[special_amount] => 0
[have_weekday_relative] => 0
[have_special_relative] => 0

*/
echo "<br>"; 

$datadobancomatue = "2023-09-23";

$datadeformatação = date('d/m/y', strtotime ($datadobancomatue));

echo"data formatada : $datadeformatação ";

/////////// 
/*
include "funcao.php";

echo teste();

echo"<br>";

echo"resultado da soma:  " . soma();

*/

?>