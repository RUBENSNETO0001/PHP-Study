<?php 

if(isset($_POST['nome'], $_POST['idade'] )){

$nome = $_POST['nome'];
$idade = $_POST['idade'];
if($idade >= 18){
echo"olá $nome <br> vc ja tem $idade anos";
}

else{
    echo"desculpa você não pode entra na pagina";
    echo"<br>";
    echo"vc e menor de idade";
}


}





?>