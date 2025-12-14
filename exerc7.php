<?php
$A = (double) fgets(STDIN);
$B = (double) fgets(STDIN);
$C = (double) fgets(STDIN);

$MEDIA = ($A * 2 + $B * 3 + $C * 5) / 10;

printf("MEDIA = %.1f\n", $MEDIA);
?>