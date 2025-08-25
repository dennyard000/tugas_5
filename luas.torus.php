<?php
// Rumus Luas Torus: A = 4 * π^2 * R * r
$pi = 3.14;
$R = 10; // jari-jari besar (pusat ke lingkaran tengah)
$r = 3;  // jari-jari kecil (penampang lingkaran)

$luas = 4 * ($pi ** 2) * $R * $r;

echo "Jari-jari besar R = $R <br>";
echo "Jari-jari kecil r = $r <br>";
echo "Luas Permukaan Torus = $luas";
?>
