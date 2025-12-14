<?php

$pi = 3.14159;
$raio = (float) fgets(STDIN);

$area = $pi * ($raio**2);

printf("A=%.4f\n", $area);
?>