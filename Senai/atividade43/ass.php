<?php 
$dados_usuario = [
    "nome" => "leandro",
     "email" => "leandrocomedodecu@gmail.com",
];

//verificação de dados

if(isset($dados_usuario)){

    $nomes = $dados_usuario['nome'];
    $email= $dados_usuario['email'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>

    <h1>coisas
    </h1>
<label>nome</label>
<input type="text" name="nome" value="<?php echo $nomes ?>">

<label>email</label>
<input type="text" name="email" value="<?php echo $email ?>">
    </form>
</body>
</html>