<?php
include '../conn.php';

// Ambil data dari tabel pendaftaran
$sql = "SELECT * FROM pendaftaran ORDER BY id DESC";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="card-header text-center fw-bold">
                Data Pendaftar Sekolah
            </div>
            <div class="card-body">
                <?php if ($result->num_rows > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Program</th>
                                    <th>Waktu Daftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= htmlspecialchars($row['nama_lengkap']) ?></td>
                                        <td><?= htmlspecialchars($row['email']) ?></td>
                                        <td><?= $row['tanggal_lahir'] ?></td>
                                        <td><?= htmlspecialchars($row['alamat']) ?></td>
                                        <td><?= htmlspecialchars($row['program_dipilih']) ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info">Belum ada data pendaftar.</div>
                <?php endif; ?>

                <a href="index.php" class="btn btn-primary mt-3">← Back to Form</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$koneksi->close();
?>