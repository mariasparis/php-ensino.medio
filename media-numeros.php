<?php

$s = 0;
$c = 0;

while (true) {

    echo "Digite um número (digite 0 para encerrar): ";
    $n = readline();

    if ($n == 0) {
        break;
    }

    $s += $n;
    $c++;
}

if ($c > 0) {

    $m = $s / $c;

    echo "A média dos números digitados é: " . number_format($m, 1) . "\n";

} else {

    echo "Nenhum número foi digitado.\n";

}

?>