<?php
define('BASE_URL', '/pw2023_223040057_tubes');

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040057_tubes') or die('Koneksi ke Database gagal');
    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function hapus($id) // fungsi hapus data
{
    $conn = koneksi();
    $query = "DELETE FROM users WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];

    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);

    $query = "UPDATE
           users
            SET
            username = '$username',
            email = '$email',
            password = '$password'
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));


    return mysqli_affected_rows($conn);
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    die;
    echo "</pre>";
}

function uriIS($uri)
{
    return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
