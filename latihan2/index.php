<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Form Validation Example</title>
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
                        <h5 class="text-center fw-bold">PHP Form Validation Example</h5>
                    </div>
                    <div class="card-body">
                        <form action="validation.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Website</label>
                                <input type="text" name="website" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Comment</label>
                                <textarea name="comment" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-block">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female" required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
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