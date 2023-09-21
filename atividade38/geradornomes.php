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