<?php
$conn = new mysqli('localhost', 'root', '', 'prodi_mahasiswa');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

