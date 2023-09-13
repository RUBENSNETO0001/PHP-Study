<?php 

$array = [];
$array02 = [];

array_push($array,23);
array_push($array02,23);

$array04 = array_merge($array,$array02);
foreach( $array04 as $asd){

echo array_sum($array04);
}
?>