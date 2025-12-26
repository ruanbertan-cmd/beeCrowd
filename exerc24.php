<?php

list($a, $b, $c) = array_map('floatval', explode(' ', fgets(STDIN)));
$delta = pow($b, 2) - 4 * $a * $c;
$raizDelta = round(sqrt($delta), 2);

if ($a != 0 & $delta >= 0) {    
    $x1 = (-$b + $raizDelta) / (2 * $a);
    $x2 = (-$b - $raizDelta) / (2 * $a);

    printf("R1 = %.5f\n", round($x1, 5));
    printf("R2 = %.5f\n", round($x2, 5));

} else {
    echo "Impossivel calcular";
}