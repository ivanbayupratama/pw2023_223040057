<?php
require 'functions.php';

$id = htmlspecialchars($_GET['id']);
$user = query("SELECT * FROM users WHERE id = '$id'")[0];

if (isset($_POST['ubah'])) { // ketika tombol ubah di klik

    if (ubah($_POST) > 0) {
        echo "<script>
         alert('Update Data Berhasil !');
        document.location.href = 'dashboard_adm.php';
      </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Data Akun</title>
    <link rel="stylesheet" type="text/css" href="css/styleUpdate.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <h1>Update Data Akun Anda</h1>
            <label>Username Anda</label>
            <br />
            <input type="text" name="username" id="username" value="<?= $user['username']; ?>" />
            <br />
            <label>Email</label>
            <br>
            <input type="text" name="email" id="email" value="<?= $user['email']; ?>" />
            <br />
            <label>Password</label>
            <br />
            <input type="password" name="password" id="password" value="<?= $user['password']; ?>" />
            <br />
            <button type="submit" name="ubah">Update</button>
            <p>
                Kembali ?
                <a href="login.php">Login disini</a>
            </p>
        </form>
    </div>
</body>

</html>