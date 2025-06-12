<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>English Course Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        label.numbered {
            min-width: 200px;
            font-weight: 500;
        }

        .form-line {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .form-line .colon {
            margin: 0 5px;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            border: none;
            border-bottom: 1px solid #000;
            border-radius: 0;
            width: 100%;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            outline: none;
            box-shadow: none;
            border-bottom: 1.5px solid #000;
        }
    </style>
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
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="text-center fw-bold">REGISTRATION FORM<br>ENGLISH COURSE</h5>
                        <form action="validation.php" method="POST" class="mt-4">

                            <!-- nama -->
                            <div class="form-line">
                                <label class="numbered">1. Full Name</label>
                                <span class="colon">:</span>
                                <input type="text" name="full_name" required>
                            </div>

                            <!-- alamat -->
                            <div class="form-line">
                                <label class="numbered">2. Address</label>
                                <span class="colon">:</span>
                                <textarea name="address" rows="1" required></textarea>
                            </div>
                            <div class="form-line ps-4">
                                <label style="min-width: 100px;">Postal Code</label>
                                <span class="colon">:</span>
                                <input type="text" name="postal_code" required>
                            </div>

                            <!-- no HP -->
                            <div class="form-line">
                                <label class="numbered">3. Telephone Number</label>
                                <span class="colon">:</span>
                                <input type="text" name="phone" required>
                            </div>

                            <!-- tanggal lahir -->
                            <div class="form-line">
                                <label class="numbered">4. Place/Date of Birth</label>
                                <span class="colon">:</span>
                                <div class="d-flex w-100">
                                    <input type="text" name="place_of_birth" required>
                                    <span class="mx-2">,</span>
                                    <input type="date" name="date_of_birth" required>
                                </div>
                            </div>

                            <!-- jenis kelamin -->
                            <div class="form-line">
                                <label class="numbered">5. Gender</label>
                                <span class="colon">:</span>
                                <div>
                                    <input type="radio" name="gender" value="Male" required> Male &nbsp;&nbsp;
                                    <input type="radio" name="gender" value="Female" required> Female
                                </div>
                            </div>

                            <!-- agama -->
                            <div class="form-line">
                                <label class="numbered">6. Religion</label>
                                <span class="colon">:</span>
                                <div>
                                    <input type="checkbox" name="religion[]" value="Muslim"> Muslim &nbsp;
                                    <input type="checkbox" name="religion[]" value="Christian"> Christian &nbsp;
                                    <input type="checkbox" name="religion[]" value="Hinduism"> Hinduism <br>
                                    <input type="checkbox" name="religion[]" value="Buddhism"> Buddhism &nbsp;
                                    <input type="checkbox" name="religion[]" value="Others"> Others :
                                    <input type="text" name="religion_other" style="width: 150px;">
                                </div>
                            </div>

                            <!-- sekolah -->
                            <div class="form-line">
                                <label class="numbered">7. Attended School at</label>
                                <span class="colon">:</span>
                                <input type="text" name="school" required>
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