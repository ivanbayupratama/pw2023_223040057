<?php

$mahasiswa =
    [
        [
            "nama" => "Ivan Bayu Pratama",
            "nrp" => "223040057",
            "jurusan" => "Teknik Informatika",
            "email" => "ivan.bayu2019@gmail.com"
        ],

        [
            "nama" => "Rayyan Naufal Andriyana",
            "nrp" => "223040065",
            "jurusan" => "Teknik Informatika",
            "email" => "rayyan@gmail.com"
        ],
        [
            "nama" => "Sandy Nugraha",
            "nrp" => "223040047",
            "jurusan" => "Teknik Informatika",
            "email" => "sandy@gmail.com"
        ],

        [
            "nama" => "Muhammad Daffa Musyaffa",
            "nrp" => "223040048",
            "jurusan" => "Teknik Informatika",
            "email" => "daff@gmail.com"
        ],

        [
            "nama" => "Muhammad Rackha Fauziansyah",
            "nrp" => "223040036",
            "jurusan" => "Teknik Informatika",
            "email" => "rackha@gmail.com"
        ],

        [
            "nama" => "Nagar Rasyid Erdiansyah",
            "nrp" => "2230400549",
            "jurusan" => "Teknik Informatika",
            "email" => "nagar@gmail.com"
        ],

        [
            "nama" => "Fikriyawan Nugraha",
            "nrp" => "223040058",
            "jurusan" => "Teknik Informatika",
            "email" => "fikri@gmail.com"
        ],

        [
            "nama" => "Muhammad Raihan Nagata Akbar",
            "nrp" => "223040054",
            "jurusan" => "Teknik Informatika",
            "email" => "raihan@gmail.com"
        ],

        [
            "nama" => "Muhammad Alief Arrizal Effendi",
            "nrp" => "223040061",
            "jurusan" => "Teknik Informatika",
            "email" => "rizal@gmail.com"
        ],

        [
            "nama" => "Rangga Dhani Hermawan",
            "nrp" => "223040063",
            "jurusan" => "Teknik Informatika",
            "email" => "rangga@gmail.com"
        ]


    ]

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>