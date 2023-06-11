<?php

echo "Mulai. <br>";
// 1. Inisialisasi / nilai awal //
// 2. Kondisi terminasi / kapan pengulanagan berhenti //
// 3. Increment (Nilainya ditambah 1) / Decrement (Nilainya dikurang 1) //

$nilai_awal = 1; // Inisialiasai
while ($nilai_awal <= 10) { // Kondisi Terminasi //

    echo " Hello World $nilai_awal X <br>";

    $nilai_awal += 1; // Increment

}

echo " Selesai.  <br>";

echo "<hr>";
// Kode dibawah adalah baris kode pengulangan menggunakan sintaks for //
echo " Mulai. <br>";

for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) { // Inisialisasi, Kondisi Terminasi, Increment //
    echo " Hello World $nilai_awal X <br> ";
}
echo " Selesai. ";
