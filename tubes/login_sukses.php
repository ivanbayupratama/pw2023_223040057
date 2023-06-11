<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Login</title>
</head>

<body>
    <form action="" method="POST">
        <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>

        <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </form>
</body>

</html>