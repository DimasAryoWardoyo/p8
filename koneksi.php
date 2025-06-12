<?php
include 'conn.php';

// Mengambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk menyimpan data ke tabel users
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan!<br>";
    echo "<a href='form_users.html'>Tambah User Baru</a>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi
$koneksi->close();
?>