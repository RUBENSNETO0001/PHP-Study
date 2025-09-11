7) Faça um programa que crie um array com 50 números aleatórios de 0 a 100 e calcule a média dos elementos.

<?php
    $vet = 0;
    function media($a){
        $resultado = $a /50;
        echo"Media $resultado";
    }
    for($i = 0; $i < 50; $i++){
        $random = rand(0,50);
        $vet += $random;
    }
    media($vet);