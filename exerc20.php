<?php
$n = (int) fgets(STDIN);

$horas = intdiv($n, 3600);
$resto = $n % 3600;

$minutos = intdiv($resto, 60);
$segundos = $resto % 60;

echo $horas . ":" . $minutos . ":" . $segundos . PHP_EOL;
?>