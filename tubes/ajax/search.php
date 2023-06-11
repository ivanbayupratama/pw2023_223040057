<?php
require('../functions.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
users
WHERE username LIKE '%$keyword%' OR 
email LIKE '%$keyword%' 
";
$user = query($query); ?>


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
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                student not found !
            </div>
        </div>
    </div>
<?php endif; ?>