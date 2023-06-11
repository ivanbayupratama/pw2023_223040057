<?php
require('functions.php');
$name = "Tambah Data Mahasiswa";

//ketika tombol submit di klik
if (isset($_POST['tambah'])) {
  //ambil data dari form lalu tambah ke tabel mahasiswa
  // cek apakah tambah daya berhasil
  tambah($_POST);

  if (tambah($_POST) > 0) {
    echo " <script>
        alert('Tambah Data Berhasil !');
        document.location.href ='index.php';
      </script>";
  }
}
require('views/tambah.view.php');
