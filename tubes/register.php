<?php
require('functions.php');

if (isset($_POST['tambah'])) {
  $conn = koneksi();
  $username = htmlspecialchars($_POST["username"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);

  $tambah = mysqli_query($conn, "INSERT INTO users (username,email, password)
                                 VALUES 
                                 ('$username','$email', '$password')");
  if ($tambah > 0) {
    $massage = '
    <script>
    alert("Data berhasil dimasukan!")
    </script>';
  } else {
    $massage = '
    <script>
    alert("Data gagal dimasukkan !")
    </script>';
  }
  // exit;
  echo $massage;
}


error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  if ($password > 0) {
    $query = "SELECT FROM USERS WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (!$result->num_rows > 0) {
      $query = "INSERT INTO USERS(username,email,password)
                  VALUES ('$username','$email',''$password)";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
      } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }
  } else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register page</title>
  <link rel="stylesheet" type="text/css" href="css/styleLogin.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>


<body>
  <div class="container">
    <form action="register.php" method="POST">
      <h1>Register</h1>
      <label>Username</label>
      <br />
      <input type="text" name="username" />
      <label>Email</label>
      <br />
      <input type="text" name="email" />
      <label>Password</label>
      <br />
      <input type="password" name="password" />
      <br />
      <button type="submit" name="tambah" method="POST">Submit</button>
      <p>
        Sudah punya akun ?
        <a href="login.php">Login disini.</a>
      </p>
      <p>
        Update Data Akun ?
        <a href="update.php">Klik disini.</a>
      </p>
    </form>
  </div>
</body>

</html>