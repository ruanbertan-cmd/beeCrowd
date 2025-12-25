<?php

$valorMonetario = (float) fgets(STDIN);
$notas = [100, 50, 20, 10, 5, 2];
$moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];

echo "NOTAS:". PHP_EOL;

foreach ($notas as $nota) {
   
    $qtdNotas = intdiv($valorMonetario, $nota);
    $valorMonetario = $valorMonetario % $nota;
    echo $qtdNotas . " nota(s) de R$ " . number_format($nota, 2, ".", " ") . PHP_EOL;
}