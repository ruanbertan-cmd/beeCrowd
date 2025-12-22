<?php
$notas = [100, 50, 20, 10, 5, 2, 1];
$valor = (int) fgets(STDIN);
echo $valor . "\n";
if (0 < $valor && $valor < 1000000) {
    for ($i=0; $i < count($notas); $i++) { 
        $nota = (int) ($valor / $notas[$i]);
        $valor = $valor % $notas[$i];
        echo $nota . " nota(s) de R$ " . number_format($notas[$i], 2,',','') . "\n";
    }
} else {
    echo "Valor inválido!\n";
}
?>