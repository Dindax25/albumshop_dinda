<?php
$servername = "nama_server";
$username = "nama_pengguna";
$password = "kata_sandi";
$database = "nama_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
