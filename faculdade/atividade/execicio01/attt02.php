2) Faça um programa onde o usuário digite sua altura e peso e o programa calcula o seu IMC.

<?php
function imc($a, $b) {
    return $a / ($b * $b);
}

function res($imc) {
    $imc_formatado = number_format($imc, 2);

    if ($imc < 18.5) {
        return "IMC: $imc_formatado -> Abaixo do peso";
    } elseif ($imc < 24.9) {
        return "IMC: $imc_formatado -> Peso normal";
    } elseif ($imc < 29.9) {
        return "IMC: $imc_formatado -> Sobrepeso";
    } elseif ($imc < 34.9) {
        return "IMC: $imc_formatado -> Obesidade grau I";
    } elseif ($imc < 39.9) {
        return "IMC: $imc_formatado -> Obesidade grau II";
    } else {
        return "IMC: $imc_formatado -> Obesidade grau III";
    }
}

$peso = (float) readline("Me informe seu peso (kg): ");
$altura = (float) readline("Me informe sua altura (m): ");

$imc = imc($peso, $altura);
$ress = res($imc);

echo $ress . "\n";
