<?php 

$array = [0, 1,2,3,4,5,6,7];


$listafiltrada = array_filter($array,function($pares){
    if($pares %2==0) {
 return $pares;
    }

});var_dump($listafiltrada);
?>