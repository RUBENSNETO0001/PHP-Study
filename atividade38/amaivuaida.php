<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="re.css">
</head>
<body>
    <form method="POST">
       <h1>Gerador de nomes</h1>
       <button type="submit" name="ccc">Gerar 😄</button>
       
    </form>

</body>
</html>

<?php
if(isset($_POST['ccc'])){

$alo = $_POST['ccc'];

$ramdom =['antonio', 'fabio giga','lady gaga', 'samuel do churas', 'ricardão', 'ruren'];
  
      $nomealeatorio = $ramdom[array_rand($ramdom)];
      $nome = $nomealeatorio;
 
  echo ($nome);
 

}
?>