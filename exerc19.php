<?php
$cedulas = [100, 50, 20, 10, 5, 2, 1];
$valor = (int) fgets(STDIN);
echo $valor . PHP_EOL;

foreach ($cedulas as $cedula) {
    $divisao = intdiv($valor, $cedula);
    $valor = $valor % $cedula;
    echo  $divisao . " nota(s) de R$ " . number_format($cedula,2,","," ") . "\n";
}
?>