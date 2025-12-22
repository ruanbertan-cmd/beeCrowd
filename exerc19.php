<?php

$notas = [100, 50, 20, 10, 5, 2, 1];
$valor = (int) fgets(STDIN);

if (0 < $valor && $valor < 1000000) {
    echo "Ok, valor dentro do esperado!\n";

    foreach ($notas as $nota) {
        echo $valor / $nota . " nota(s) de R$ " . $nota . "\n";
    }

} else {
    echo "Valor inválido!\n";
}