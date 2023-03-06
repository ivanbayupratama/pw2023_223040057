<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";

$r1 = 10;
$r2 = 20;
function hitungLuasLingkaran($r1)
{

    $luas = 3.14 * $r1 * $r1; // rumus mencari luas lingkaran
    return $luas . " cm<sup>2</sup>";
}

echo "Jari-jari = " . $r1 . " cm <br>";
echo "Luas lingkaran = " . hitungLuasLingkaran($r1);


echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r2)
{
    $keliling = 2 * 3.14 * $r2; // rumus mencari keliling lingkaran
    return $keliling . " cm ";
}

echo "Jari-jari = " . $r2 . "cm <br>";
echo "Keliling lingkaran = " . hitungKelilingLingkaran($r2);

echo "<hr>";
