<?php 
    $nome = $_GET['nome'];
    $senha = $_GET['senha'];

    if(strlen($nome) >= 2 and strlen($senha) >= 5){
        echo"Deu bom";
    }
    else{
        echo"Deu ruim ai man";
    }
?>