<body>
    <h1>impar e par</h1>
</body>

<?php
 echo"<br>"; echo"<br>";
 echo"while";
echo"<br>";
echo"<br>";
$contador = 0;

while($contador <= 20){
 echo"$contador<br>";
 $contador+=2;
}

echo"<br>";
$contadori = 1;

while($contadori <= 20){
    echo"$contadori<br>";
    $contadori+=2;
   }

   echo"<br>";

   //do while
   echo"do while";
   echo"<br>"; echo"<br>";
$c = 0;

do{
    echo "$c <br>";
    $c+=2;;

}while($c <=20);

echo"<br>";
$ci = 1;

do{
    echo "$ci <br>";
    $ci+=2;;

}while($ci <=20);
echo"<br>";
 //for
 echo"for";
 echo"<br>";
 echo"<br>";

 $contadori = 0;
 
 for($contadori; $contadori <= 20; $contadori+=2){
     echo"$contadori <br>";
    }

    echo"<br>";

    $contadori = 1;
    
    for($contadori; $contadori <= 20; $contadori+=2){
        echo"$contadori <br>";
       }
?>