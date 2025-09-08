<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Cartão</title>
</head>
<body>
    <form method = "GET">
        <h1>Verificação de Cartão</h1>
        <label>Nome Completa:</label>
        <input type="text" name="nomecompleto" placeholder='Coloque seu nome'>
        <label>Senha do Cartão</label>
        <input type="text" name="senhacartao" placeholder='coloque sua senha'>
        <label>CPF</label>
        <input type="text" name="cepcompleto" placeholder='coloque seu CPF'>
        <label>Data de Nascimento</label>
        <input type="text" name="datanascimento" placeholder='coloque seu CPF'>
        <input type="submit" value="Verificar">
        
    </form>
</body>
</html>

<?php 
  $nome = $_GET['nome'];
    $nome = $_GET["nomecompleto"];
    $senha = $_GET['senhacartao'];
    $cpf = $_GET['cepcompleto'];
    $datanascimento = $_GET['datanascimento'];
    
    if(strlen($nome) < 3 and strlen($senha) < 4 and strlen($cpf) < 11 and strlen($datanascimento) < 10){
        echo "<script>alert('Verifique as entrada para ve se esta tudo certo!!');</script>";
    }
    else{
        echo "<script>alert('Bem vindo!!');</script>";
    }
?>