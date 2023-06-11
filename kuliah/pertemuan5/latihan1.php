<?php

// ARRAY 
// Array adalah variabel yang  bisa menampung banyak nilai


// Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');

$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];
$myArray = ['Ivan Bayu', 19, false];
$binatang = ['😺', '🐰', '🐵', '🐨', '🐼', '🐘'];

// Mencetak Array
var_dump($hari);
var_dump($binatang);
var_dump($bulan);

print_r($myArray);

echo ($binatang[4]);

// Manipulasi Array 

// Menambah elemen Array

$bulan[] = 'Juli'; // Menambah elemen diakhir array
$bulan[] = 'Agustus';
print_r($bulan);
echo "<hr>";

array_push($bulan, 'September', 'Oktover', 'November', 'Desember');

print_r($bulan);
echo "<hr>";

//Menambah array elemen di awal array
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";


//Menghapus elemen diakhir array
array_pop($hari);
print_r($hari);
