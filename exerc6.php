<?php
$A = (float) fgets(STDIN);
$B = (float) fgets(STDIN);
$MEDIA = ($A * 3.5 + $B * 7.5) / 11;

printf("MEDIA = %.5f\n", $MEDIA);
?>