<?php
$x = (int) fgets(STDIN);
$y = (double) fgets(STDIN);

$consumoMedio = $x / $y;

printf("%.3f km/l\n", $consumoMedio);
?>