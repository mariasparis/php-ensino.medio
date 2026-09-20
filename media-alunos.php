<?php

function media($n1, $n2) {
    $media = ($n1 + $n2) / 2;

    if ($media < 5.0) {
        return "Reprovado";
    }
    elseif ($media >= 5.0 && $media < 7.0) {
        return "Recuperação";
    }
    else {
        return "Aprovado";
    }
}

$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");

echo "Situação do aluno: " . media($n1, $n2);

?>