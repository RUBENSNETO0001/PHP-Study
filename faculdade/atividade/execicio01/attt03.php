3) Faça um programa onde o usuário digite 4 notas e o programa calcula a média

<?php 
    $nota = 0;
    $somar = 0;
    
    for($i = 0; $i < 4; $i++){
        $nota = (int)readline("Me informe um valor: ");
        $somar += $nota;
    }
    $resultado = $somar / 4;
    echo"Resultado da media: $resultado";
?>