5) Faça um programa que leia uma frase e uma palavra. 
O programa deve dizer se a palavra existe na frase. 
O programa deve considerar as diferenças de caixa alta e baixa, por exemplo: "Casa" é diferente de "casa"

<?php
    $frase = readline("Me de uma frase: ");
    $palavraencontrar = readline("Me informe a palavra para a verificação: ");

    function variavel($a, $b){
        if(strpos($a, $b) !== false and preg_match("/{$b}/i",$a)){
            return "A palavra: $b, existe na frase: $a";
            
        }
        else{
            return "A palavra: $b, não existe na frase: $a";
        }
    }

    $resultado = variavel($frase, $palavraencontrar);
    echo"$resultado";
?>