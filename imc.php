<?php

function calcular($p, $a) {
    return $p / ($a * $a);
}

function classificar($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    }
    elseif ($imc >= 18.5 && $imc < 25) {
        return "Peso ideal";
    }
    elseif ($imc >= 25 && $imc < 30) {
        return "Sobrepeso";
    }
    elseif ($imc >= 30 && $imc < 40) {
        return "Obesidade";
    }
    else {
        return "Obesidade mórbida";
    }
}

$p = floatval(readline("Digite o peso (em kg): "));
$a = floatval(readline("Digite a altura (em metros): "));

$imc = calcular($p, $a);

echo "Seu IMC é: " . number_format($imc, 2) . "\n";
echo "Classificação: " . classificar($imc) . "\n";

?>