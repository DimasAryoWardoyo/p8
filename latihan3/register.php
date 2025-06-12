<?php
include '../conn.php';

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';

// Validasi sederhana
if ($password !== $confirm) {
    die("Password dan konfirmasi tidak sama. <a href='index.php'>Kembali</a>");
}

// Simpan data ke database
$stmt = $koneksi->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
    header("Location: tampilData.php");
    exit;
} else {
    echo "Gagal menyimpan data: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>