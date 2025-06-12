<?php
include '../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $phone = $_POST['phone'];
    $place_of_birth = $_POST['place_of_birth'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $religion = isset($_POST['religion']) ? implode(", ", $_POST['religion']) : '';
    $school = $_POST['school'];

    $stmt = $koneksi->prepare("INSERT INTO registration (full_name, address, postal_code, phone, place_of_birth, date_of_birth, gender, religion, school)
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssss", $full_name, $address, $postal_code, $phone, $place_of_birth, $date_of_birth, $gender, $religion, $school);

    if ($stmt->execute()) {
        header("Location: tampilData.php");
    } else {
        echo "Gagal menyimpan data: " . $stmt->error;
    }

    $stmt->close();
    $koneksi->close();
}
?>