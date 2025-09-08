<?php 
    $nome = $_GET['nome'];
    $senha = $_GET['senha'];
    function verificação($nome, $senha){
        if(strlen($nome) >= 2 and strlen($senha) >= 5){
            return "Boa tarde";
        }
        else{
            return "Error, Verifique a entrada!!";
        } 
    }
?>