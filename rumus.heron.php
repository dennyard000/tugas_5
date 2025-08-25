<?php
// Rumus Heron: A = sqrt(s * (s-a) * (s-b) * (s-c)), s = (a+b+c)/2
$a = 7;
$b = 8;
$c = 9;

$s = ($a + $b + $c) / 2;
$luas = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

echo "Sisi a = $a <br>";
echo "Sisi b = $b <br>";
echo "Sisi c = $c <br>";
echo "Luas Segitiga (Heron) = $luas";
?>
