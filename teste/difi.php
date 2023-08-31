<?php 
$nome = "ruren";
$idade= 32;
$email = "eonautaquedelicia@gmail.com";


echo"olá.meu mundo";

echo"<br>";

echo"ola, $nome, sua idade é $idade, e seu email é $email";

echo"ola". $nome." sua idade é". $idade." e seu email é". $email;


$array = [1,2,3];
echo is_array($array);//verificação  vai retorna nada ou 1 que e verdadeiro ou true
//outras formas de verificação
/*
verificar se e inteiro: is_int(valor)
verificar se e float: is_float(valor)
verificar se e string: is_string(valor)
verificar se e uma array: is_array(valor)
verificar se e numero: is_numeric(valor)

*/

if(10 > 2){
    echo"entrou no primeiro if<br>";
    if(2 == 2){
        echo"entrou no segundo if<br>";
    }
}

echo"<br>";
echo"exemplo 2?<br>";



?>