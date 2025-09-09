<!-- 1) Faça um programa onde o usuário digite um número e o programa diz se é par ou ímpar.  -->

<?php
    $numero_user = (int) readline("Me informe o numero: ");

    function verificacao($a){
        $ver = $a % 2;

        if($ver == 1){
            return "Numero impar";
        }
        else{
            return "Numero par";
        }
    }

    $res = verificacao($numero_user);
    echo $res . "\n";
?>
