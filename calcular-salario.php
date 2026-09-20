<?php

function calcularReajuste($salario) {

    $percentual = 0;
    $aumento = 0;

    if ($salario <= 280) {
        $percentual = 20;
    } elseif ($salario > 280 && $salario <= 700) {
        $percentual = 15;
    } elseif ($salario > 700 && $salario <= 1500) {
        $percentual = 10;
    } else {
        $percentual = 5;
    }

    $aumento = ($salario * $percentual) / 100;
    $novoSalario = $salario + $aumento;

    echo "Salário antes do reajuste: R$ " .
        number_format($salario, 2, ',', '.') . "\n";

    echo "Percentual de aumento aplicado: " .
        $percentual . "%\n";

    echo "Valor do aumento: R$ " .
        number_format($aumento, 2, ',', '.') . "\n";

    echo "Novo salário, após o aumento: R$ " .
        number_format($novoSalario, 2, ',', '.') . "\n";
}

$salario = 1000;

calcularReajuste($salario);

?>
