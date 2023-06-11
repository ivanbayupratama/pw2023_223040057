<?php
require('functions.php');

//meyiapkan data user
$users = query("SELECT * FROM USERS");

//cari users ketika tombol search di klik
if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM 
            users
            WHERE username LIKE '%$keyword%' OR 
            password LIKE '%$keyword%' 
            ";
  $users = query($query);
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="css/styleDash.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet" />

  <title>Dashboard Admin</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: rgb(173, 3, 3)">
    <div class="container">
      <a class="navbar-brand" href="#">Dashboard Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="main">
    <div class="main-container">
      <div class="list-container">
        <div class="list">
          <li><a style="text-decoration: none" href="register.php">Tambah Data</a></li>
        </div>
        <div class="list">
          <li><a style="text-decoration: none" href="#">Akun</a></li>
        </div>
      </div>
      <div class="list2-container">
        <h2>Dashboard</h2>
        <div class="row">
          <div class="col-md-6">
            <form action="" method="get">
              <div class="input-group my-3">
                <input type="text" class="form-control" name="keyword" placeholder="Search user(s).." autofocus autocomplete="off" id="">
                <button style="color:black" class="btn-danger btn-outline-secondary" name="search" type="submit" id="search-button">Search</button>
              </div>

            </form>
          </div>
        </div>

        <div class="kotak-container">
          <div class="kotak">
            <h4>Data Pengunjung</h4>
            <?php if ($users) : ?>
              <table class="table">
                <thead>
                  <tr>

                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody class="tbody-1">
                  <?php $i = 1;
                  foreach ($users as $user) :  ?>
                    <tr>
                      <th scope="row"></th>
                      <td><img src="img/default.png" style="width: 50px" class="rounded-circle"></td>
                      <td><?= $user["username"]; ?></td>
                      <td><?= $user["email"]; ?></td>
                      <td><?= $user["password"]; ?></td>
                      <td>
                        <a href="update.php?id=<?= $user['id']; ?>">Ubah |</a>
                        <a href="hapus.php?id=<?= $user['id']; ?>" onclick="return confirm('Yakin ?')">Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            <?php else : ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                    users not found !
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>