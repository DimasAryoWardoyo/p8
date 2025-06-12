<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-3 mb-5">
        <div class="d-flex justify-content-between">
            <a href="../index.php" class="btn btn-danger mb-3">
                ← Kembali ke Menu Utama
            </a>
            <a href="tampilData.php" class="btn btn-warning mb-3">
                Lihat Data
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="text-center fw-bold">Form Registrasi</h5>
                        <form method="POST" action="register.php">
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="confirm_password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>