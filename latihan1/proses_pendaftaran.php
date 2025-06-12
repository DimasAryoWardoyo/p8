<?php
include '../conn.php';

// Ambil data dari form
$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$program = $_POST['program_dipilih'];

// Query insert
$sql = "INSERT INTO pendaftaran (nama_lengkap, email, tanggal_lahir, alamat, program_dipilih)
        VALUES ('$nama', '$email', '$tanggal_lahir', '$alamat', '$program')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: tampilData.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>