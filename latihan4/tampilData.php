<?php
include '../conn.php';

$result = $koneksi->query("SELECT * FROM registration");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="card-header text-center fw-bold">
                Data Pendaftaran English Course
            </div>
            <div class="card-body">
                <?php if ($result->num_rows > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kode Pos</th>
                                    <th>Telepon</th>
                                    <th>TTL</th>
                                    <th>Gender</th>
                                    <th>Agama</th>
                                    <th>Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['full_name']) ?></td>
                                        <td><?= htmlspecialchars($row['address']) ?></td>
                                        <td><?= htmlspecialchars($row['postal_code']) ?></td>
                                        <td><?= htmlspecialchars($row['phone']) ?></td>
                                        <td><?= htmlspecialchars($row['place_of_birth']) . ', ' . htmlspecialchars($row['date_of_birth']) ?>
                                        </td>
                                        <td><?= htmlspecialchars($row['gender']) ?></td>
                                        <td><?= htmlspecialchars($row['religion']) ?></td>
                                        <td><?= htmlspecialchars($row['school']) ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info text-center">
                        Belum ada data registrasi yang tersimpan.
                    </div>
                <?php endif; ?>

                <a href="index.php" class="btn btn-primary mt-3">← Kembali ke Form</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$koneksi->close();
?>