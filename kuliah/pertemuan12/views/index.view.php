<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php" class="btn-primary">Tambah Data Mahasiswa</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($students as $student) :  ?>
        <tr>
          <th scope="row"></th>
          <td><img src="img/default.png" style="width: 50px" class="rounded-circle"></td>
          <td><?= $student["nim"]; ?></td>
          <td><?= $student["nama"]; ?></td>
          <td><?= $student["email"]; ?></td>
          <td> <?= $student["jurusan"]; ?></td>
          <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<?php require('partials/footer.php'); ?>