<?php
require 'functions.php';
$conn = koneksi();
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
  header("Location: login_sukses.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM users WHERE
                                email ='$email' and
                                password = 'password'";

  $result = mysqli_query($conn, $query);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: login_sukses.php");
  } else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/styleLogin.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>

<body>
  <div class="container">
    <form action="" method="POST">
      <h1>Sign in</h1>
      <label>Email</label>
      <br />
      <input type="email" name="email" value="<?php echo $email; ?>" required />
      <br />
      <label>Password</label>
      <br />
      <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required />
      <br />
      <button type="submit" name="submit">Login</button>
      <p>
        Belum punya akun ?
        <a href="register.php">Register di sini</a>
      </p>
      <p>
        Lupa Password ?
        <a href="update.php">Klik disini.</a>
      </p>
    </form>
  </div>
</body>

</html>