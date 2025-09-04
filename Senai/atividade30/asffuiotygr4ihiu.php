<?php 

$aluno = [

'nome'=>'nome:'. 'lucie',
'idade'=>'idade:'. 19,
'curso'=>'curso:'.'informatica',
];

$aluno['descrição']= 'ele e um super nova';

/*echo $aluno["nome"];*/// jeito de chama so um sem o foreach.

foreach($aluno as$sle ){

    echo $sle ."<br>";
}
    

?>