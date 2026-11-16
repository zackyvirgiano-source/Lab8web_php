<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if ($conn == false) {
    echo "Koneksi ke server gagal: " . mysqli_connect_error();
    die();
}

echo "Koneksi berhasil";
?>
