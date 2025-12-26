<?php
$valorMonetario = (float) fgets(STDIN);
$valorMonetario = round($valorMonetario * 100);

$notas = [10000, 5000, 2000, 1000, 500, 200];
$moedas = [100, 50, 25, 10, 5, 1];

echo "NOTAS:". PHP_EOL;

foreach ($notas as $nota) {
    $qtdNotas = intdiv($valorMonetario, $nota);
    $valorMonetario %= $nota;
    echo $qtdNotas . " nota(s) de R$ " . number_format($nota / 100, 2, ".", " ") . PHP_EOL;
}

echo "MOEDAS:". PHP_EOL;

foreach ($moedas as $moeda) {
    $qtdMoedas = intdiv($valorMonetario, $moeda);
    $valorMonetario %= $moeda;
    echo $qtdMoedas . " moeda(s) de R$ " . number_format($moeda / 100, 2, ".", " ") . PHP_EOL;
}
?>