<?php
include '../conn.php';

$result = $koneksi->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="card-header text-center fw-bold">
                Daftar Pengguna
            </div>
            <div class="card-body">
                <?php if ($result->num_rows > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-secondary">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['user_id']) ?></td>
                                        <td><?= htmlspecialchars($row['username']) ?></td>
                                        <td><?= htmlspecialchars($row['email']) ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info text-center">Belum ada pengguna yang terdaftar.</div>
                <?php endif; ?>

                <a href="index.php" class="btn btn-primary mt-3">← Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$koneksi->close();
?>