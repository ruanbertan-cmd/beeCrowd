<?php

list($a, $b, $c) = array_map('floatval', explode(' ', fgets(STDIN)));
$delta = pow($b, 2) - 4 * $a * $c;
$raizDelta = round(sqrt($delta), 2);

if ($a != 0 & $delta >= 0) {    
    $x1 = (-$b + $raizDelta) / (2 * $a);
    $x2 = (-$b - $raizDelta) / (2 * $a);

    echo number_format($x1,5,'.','') . PHP_EOL;
    echo number_format($x2,5,'.',' ') . PHP_EOL;

} else {
    echo "Impossivel calcular";
}