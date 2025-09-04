<?php 



if(isset($_POST['numero'])){
    $nome = $_POST['numero'];
   $numeroaleatorio= rand(0,5);


if(empty($nome)){

  echo"numero vazio";

}

else if($nome == $numeroaleatorio){
   echo"é igual";
}

else {
    echo"nao e igual";
}
}

?>