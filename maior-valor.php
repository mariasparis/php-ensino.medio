<?php

function e($v) {
    $m = $v[0];

    foreach ($v as $va) {
        if ($va > $m) {
            $m = $va;
        }
    }

    return $m;
}

$v = array();

for ($i = 0; $i < 10; $i++) {
    $va = readline("Digite o valor " . ($i + 1) . ": ");
    $v[] = intval($va);
}

$m = e($v);

echo "O maior valor é: " . $m;

?>
