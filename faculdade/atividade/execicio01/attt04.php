4) Faça um programa onde o usuário digite 4 números e o programa mostrar o maior deles.

<?php 
    $numero_user = 0;
    $vetor = [];
    function verificacao($a){
        $das = max($a);
        echo"Resultado $das";
    }
    for($i = 0; $i < 4; $i++){
        $numero_user = (int) readline("Me informe um numero: ");
        $vetor[] = $numero_user;
    }
    verificacao($vetor);
?>