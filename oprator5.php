<?php

$a = true;
$b = false;

//variabel $c akan bernial false
$c = $a && $b;
printf ("%b && %b = %", $a,$b,$C);
echo "<hr>";

//variabel $c akan bernial true
$c = $a || $b;
printf ("%b || %b = %", $a,$b,$C);
echo "<hr>";

//variabel $c akan bernial true
$c = !$a;
printf ("!%b = %b", $a,$C);
echo "<hr>";
