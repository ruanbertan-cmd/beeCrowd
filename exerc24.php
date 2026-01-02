<?php
list($a, $b, $c) = array_map('floatval', explode(' ', fgets(STDIN)));
$delta = pow($b, 2) - 4 * $a * $c;
$raizDelta = sqrt($delta);

if ($a != 0 && $delta >= 0) {
    $x1 = (-$b + $raizDelta) / (2 * $a);
    $x2 = (-$b - $raizDelta) / (2 * $a);

    echo "R1 = " . number_format($x1,5,'.','') . PHP_EOL;
    echo "R2 = " . number_format($x2,5,'.','') . PHP_EOL;

} else {
    echo "Impossivel calcular\n";
}
?>