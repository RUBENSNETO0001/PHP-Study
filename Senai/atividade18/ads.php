<?php 

$carrinho_compras = [' ps5', 'xbox one', 'computador', 'celular'];

$carrinho_compras[0]= "Ps3";

echo"<br>";

var_dump($carrinho_compras);

array_shift($carrinho_compras);

array_pop($carrinho_compras);

unset($carrinho_compras[2]);

echo count($carrinho_compras);
if(in_array('computador',$carrinho_compras)){
    echo"existe sim";
}

$index = array_search('Ps3',$carrinho_compras);
    echo"$index";

// re organiza o var_dump vai ser o primeiro nao deixando os outros irem.
?>