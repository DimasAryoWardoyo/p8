<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="card-header">
                        <h5 class="text-center fw-bold">Formulir Pendaftaran Sekolah</h5>
                    </div>
                    <div class="card-body">
                        <form action="proses_pendaftaran.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Program yang Dipilih</label>
                                <select name="program_dipilih" class="form-select" required>
                                    <option value="">-- Pilih Program --</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="Bahasa">Bahasa</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>