<?php 

$nome = "matheus gomes";
// VAI CONTAR QUANTOS CARACTERES TEM NA VARIALVEL
echo strlen($nome);

// VAI PEGAR A ULTIMA PALAVRA DA VARIAVEL "GOMES"
$ultimo_nome = substr($nome, 8, 13);

echo $ultimo_nome;

// VAI INVERTER A PALAVRA "GOMES"
echo strrev($ultimo_nome);

// VAI TRANSFORMAR O GOMES EM ARRAY SEPARANDO PELA LETRA O
$array = explode("s", $ultimo_nome);

var_dump($ultimo_nome);

// TRANSFORMA UM ARRAY EM TEXTO
echo implode(",", $array);


if(isset($nome)){

    echo"existe";
}
else{
    echo" nao existe"; 
}
?>