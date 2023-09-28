<?php

$usuario = 'gustavo';

session_start();

if (isset($_SESSION['usuario'])) {


    echo "Usuário logado com sucesso! <br>";
        
    
    $usuario = $_SESSION['usuario'];
    echo "Olá, $usuario bem vindo ao sistema! <br>";

} 

?>