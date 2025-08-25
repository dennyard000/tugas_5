<?php
// Rumus keliling ellipse (Ramanujan): P ≈ π [3(a+b) - sqrt((3a+b)(a+3b))]
$pi = 3.14;
$a = 6; // sumbu semi-mayor
$b = 4; // sumbu semi-minor

$keliling = $pi * (3*($a + $b) - sqrt((3*$a + $b) * ($a + 3*$b)));

echo "Sumbu mayor a = $a <br>";
echo "Sumbu minor b = $b <br>";
echo "Keliling Ellipse ≈ $keliling";
?>
