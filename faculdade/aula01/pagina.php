<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Formulário</title>
</head>
<body>
    <form action="./script-php/script.php" method="get">
        <label>Nome ou Email</label>
        <input type="text" name="nome" minlength="2" required>

        <label>Senha</label>
        <input type="password" name="senha" minlength="5" required>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
