<?php
$quantidade = 1;

if($quantidade > 0){
$nomealeatorio = [];
$ramdom =['antonio', 'fabio giga','lady gaga', 'samuel do churas', 'ricardão', 'ruren',];


  for($comeco = 0; $comeco < $quantidade; $comeco++){
  $nomealeatorio = $ramdom[array_rand($ramdom)];
  $nome = $nomealeatorio;

  echo ($nome);
 
}

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
    <form action="" method="POST">
       
       <button type="submit">Gerar Nomes</button>

    </form>

</body>
</html>