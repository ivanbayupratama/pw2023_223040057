<?php
$jml_angkot = 10;
$angkot_rusak = 4;
$nomor_angkot = 1;

while ($nomor_angkot <= $jml_angkot - $angkot_rusak) {

    echo " Angkot no.$nomor_angkot beroperasi dengan baik. <br>";

    $nomor_angkot++;
}

for ($nomor_angkot; $nomor_angkot <= $jml_angkot; $nomor_angkot++) {

    echo " Angkot no.$nomor_angkot sedang rusak.<br>";
}
