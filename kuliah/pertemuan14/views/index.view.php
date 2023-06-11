<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group my-3">
          <input type="text" class="form-control" name="keyword" placeholder="Search student(s).." autofocus autocomplete="off" id="">
          <button class="btn-primary btn-outline-secondary" name="search" type="submit" id="search-button">Search</button>
        </div>

      </form>
    </div>
  </div>

  <div id="search-container">
    <?php if ($students) : ?>
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
                <a href="ubah.php?id=<?= $student['id']; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $student['id']; ?>" onclick="return confirm('Yakin ?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-danger" role="alert">
            student not found !
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

</div>

</div>


<?php require('partials/footer.php'); ?>