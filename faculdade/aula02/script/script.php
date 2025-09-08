<?php 
    $nome = $_GET["nomecompleto"];
    $senha = $_GET['senhacartao'];
    $cpf = $_GET['cepcompleto'];
    $datanascimento = $_GET['datanascimento'];

    if(strlen($nome) < 3 and strlen($senha) < 4 and strlen($cpf) < 11 and strlen($datanascimento) < 10){
        $url = '../index.html';
        header("Location: $url");
        exit;
    }
    else{
        $url = '../index_priv.html';
        header("Location: $url");
        exit;
    }
?>