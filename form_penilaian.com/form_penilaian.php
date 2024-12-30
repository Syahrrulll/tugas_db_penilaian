<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian Program Studi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Form Penilaian Program Studi</h1>
        <form method="POST" action="simpan_penilaian.php">
            <div class="mb-3">
                <label for="id_program_studi" class="form-label">ID Program Studi</label>
                <input type="number" class="form-control" name="id_program_studi" required>
            </div>

            <div class="mb-3">
                <label for="elemen_penilaian" class="form-label">Elemen Penilaian</label>
                <input type="text" class="form-control" name="elemen_penilaian" required>
            </div>

            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <textarea class="form-control" name="nilai" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Simpan Penilaian</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
