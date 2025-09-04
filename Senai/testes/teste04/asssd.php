<?php 

$lista_numeros = [1,2,3,4,5,6,7];

$lista_filtrada = array_filter($lista_numeros,
function($valores){
    return $valores> 3;
});

var_dump($lista_filtrada)
?>