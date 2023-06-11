<?php
require 'functions.php';
$name = "Ubah Data Mahasiswa";
$id = htmlspecialchars($_GET['id']);
$student = query("SELECT * FROM mahasiswa WHERE id= $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
         alert('Ubah Data Berhasil !');
        document.location.href = 'index.php';
      </script>";
    }
}
require 'views/ubah.view.php';
