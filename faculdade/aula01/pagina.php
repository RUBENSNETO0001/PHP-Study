<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pagina de formulario</title>
</head>
<body>
    <form action="./script-php/script.php">
        <label>Nome ou Email</label>
        <input type="text" name="nome" min=2 require>
        <label >Senha</label>
        <input type="password" name="senha"min=2 require>
        <input type="submit" value="Entrar">
        <!-- <button>Entrar</button> -->
    </form>
</body>
</html>