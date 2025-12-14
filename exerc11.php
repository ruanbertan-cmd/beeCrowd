<?php
list($cod1, $num1, $valorUn1) = explode(" ", trim(fgets(STDIN)));
list($cod2, $num2, $valorUn2) = explode(" ", trim(fgets(STDIN)));

printf("VALOR A PAGAR: R$ %.2f\n", (($num1 * $valorUn1) + ($num2 * $valorUn2)));
?>