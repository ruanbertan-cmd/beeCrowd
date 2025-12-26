<?php
$idadeDias = (int) fgets(STDIN);

$anos = intdiv($idadeDias, 365);
$resto = $idadeDias % 365;

$meses = intdiv($resto, 30);
$dias = $resto % 30;

echo $anos . " ano(s)\n";
echo $meses . " mes(es)\n";
echo $dias . " dia(s)\n";
?>