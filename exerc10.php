<?php
$nomeVendedor = (string) fgets(STDIN);
$salario = (double) fgets(STDIN);
$comissao = 0.15;

$salarioFinal = $salario + ((double) fgets(STDIN) * $comissao);

printf("TOTAL = R$ %.2f\n", $salarioFinal);
?>