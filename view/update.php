<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah DataMurid</title>
    <link rel="stylesheet" href="framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-form">
    <div class="card-form col-lg-4 col-sm-9 m-auto shadow-sm bg-white">
        <h1 class="p-3 text-center fw-bold">Form Edit Data</h1>
        <form action="web.php?action=update&id=<?= $row->id; ?>" method="post" class="p-3">
            <div class="input-box row mb-3">
                <div class="col">
                    <label for="nama_depan" class="form-label">First Name</label>
                    <input type="text" name="nama_depan" id="nama_depan" placeholder="First Name" class="form-control border-secondary"
                        required autocomplete="off" value="<?= $row->nama_depan; ?>">
                </div>
                <div class="col">
                    <label for="nama_belakang" class="form-label">Last Name :</label>
                    <input type="text" name="nama_belakang" id="nama_belakang" placeholder="Last Name (Optional)"
                        class="form-control border-secondary" autocomplete="off" value="<?= $row->nama_belakang; ?>">
                </div>
            </div>
            <div class="input-box mb-3">
                <label for="nis" class="form-label">SIN :</label>
                <input type="text" name="nis" id="nis" placeholder="Student Indetification Number (SIN)" class="form-control border-secondary" required autocomplete="off" value="<?= $row->nis; ?>">
            </div>
            <div class="input-box mb-3">
                <label for="jenis_kelamin" class="form-label">Your Gender :</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select border-secondary" required>
                    <option selected>Gender</option>
                    <option value="Laki-laki" <?= isset($row->jenis_kelamin) && $row->jenis_kelamin == 'Laki-laki' ? 'selected' :'' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= isset($row->jenis_kelamin) && $row->jenis_kelamin == 'Perempuan ' ? 'selected' :'' ?>>Perempuan</option>
                </select>
            </div>
            <div class="input-box mb-3">
                <label for="kelas" class="form-label">Class :</label>
                <input type="text" name="kelas" id="kelas" placeholder="Your Class" class="form-control border-secondary" required autocomplete="off" value="<?= $row->kelas; ?>">
            </div>
            <div class="input-box mb-3">
                <label for="jurusan_id" class="form-label">Your Major :</label>
                <select name="jurusan_id" id="jurusan_id" class="form-select border-secondary" required>
                    <option selected>JMajor</option>
                    <option value="1" <?= isset($row->jurusan_id) && $row->jurusan_id == '1' ? 'selected' : '' ?>>Teknik Komputer dan Jaringan</option>
                    <option value="2" <?= isset($row->jurusan_id) && $row->jurusan_id == '2' ? 'selected' : '' ?>>Teknik Kendaraan Ringan Otomotif</option>
                    <option value="3" <?= isset($row->jurusan_id) && $row->jurusan_id == '3' ? 'selected' : '' ?>>Akuntansi</option>
                    <option value="4" <?= isset($row->jurusan_id) && $row->jurusan_id == '4' ? 'selected' : '' ?>>Administrasi Perkantoran</option>
                </select>
            </div>
            <div class="input-box mb-3">
                <button type="submit" class="btn btn-lg btn-primary w-100 text-white">Edit Data <i class="fas fa-pencil"></i></button>
                <a href="../public/web.php" class="btn btn-lg btn-danger mt-2 w-100 text-white">Cancel <i class="fas fa-arrow-right-from-bracket"></i></a>
            </div>
        </form>
    </div>
    </div>
</body>
</html>