<?php 

$array = [];
$array02 = [];

array_push($array,25);
array_push($array02,25);

$array04 = array_merge($array,$array02);

echo array_sum($array04);

?>