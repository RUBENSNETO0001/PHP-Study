<?php 
if(isset($_GET['nome'], $_GET['email'])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    echo "$nome e $email";
}

else{
    echo"nao existe valor via url";
}

?>