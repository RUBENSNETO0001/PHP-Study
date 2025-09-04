<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe alternativa</title>
</head>
<body>

    <?php 
    $admin = false; // Autorizado
    ?>

    <!-- Se admin for verdadeiro -->
    <?php 
        if($admin): // if(admin == true) 
    ?>

    <h1>Acesso autorizado</h1>
    <li>Admin</li>
    <p>Acesso para pessoas autorizadas</p>
    <button>Entrar</button>

    <!-- Se admin não for verdadeiro -->
    <?php 
        else:
    ?>

    <h1>Acesso para usuário comum!</h1>
    <li>Inicial</li>
    <p>usuários comuns</p>
    <a href="#">acessar</a>

    <?php 
        endif;
    ?>
</body>
</html>