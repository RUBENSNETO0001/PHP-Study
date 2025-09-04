<?php 

if(isset($_POST['nome'], $_POST['idade'], $_POST['corfavorita'])){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $color = $_POST['corfavorita'];

    echo "SEU NOME $nome";
    echo"<br>";
    echo "VOCÊ POSSUI $idade ANOS DE IDADE";
    echo"<br>";
    echo "SUA COR FAVORITA E $color";
}

else{
    echo "Tem certeza que ta certo isso amigo";
}


?>