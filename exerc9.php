<?php
$id = (int) fgets(STDIN);
$horasTrab = (int) fgets(STDIN);
$valorHrs = (float) fgets(STDIN);

$salario = $horasTrab * $valorHrs;

printf("NUMBER = $id\nSALARY = U$ %.2f\n", $salario);
?>