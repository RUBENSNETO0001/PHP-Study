6 ) Faça um programa que crie um array com 50 números aleatórios de 0 a 100 e mostre o maior número.

<?php
    $vetor = [];
    function verificacao($a){
        $maximo = max ($a);
        echo"Maior $maximo";
    }
    for($i = 0; $i < 100; $i++){
        $random = rand(0,100);
        $vetor[] = $random;
    }
    verificacao($vetor);
?>