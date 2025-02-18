<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Murid</title>
    <link rel="stylesheet" href="framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="d-flex align-items-center flex-column p-3">
        <div class="title col-lg-6 col-sm-9">
            <h1 class="text-center fw-bold">Management Student in School SMK Samudra</h1>
        </div>
        <img src="img/logo smk samudra.png" alt="logo" style="width: 120px;" class="mt-3">
    </header>
    <div class="container">
        <nav class="manage d-flex justify-content-start align-items-center">
            <a href="../public/web.php?action=showFormCreate" class="btn btn-primary text-white">Add Students <i
                    class="fas fa-plus"></i></a>
            <form action="" method="get" class="my-3 ms-3 col-lg-3 col-sm-5">
                <input type="search" class="form-control" id="keyword" autofocus autocomplete="off"
                    placeholder="Search Student...">
            </form>
        </nav>
        <div class="table-responsive" id="container">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5">No</th>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5">Full Name</th>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5">Student Indetification Number</th>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5">Gender</th>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5">Class</th>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5">Major</th>
                        <th class="text-center align-middle text-dark px-4 py-3 fs-5" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomorUrut = 1 ?>
                    <?php foreach($dataMurid as $row) : ?>
                    <tr>
                        <td class="text-center align-middle"><?= $nomorUrut ?></td>
                        <td class="align-middle"><?= $row->nama_depan; ?> <?= $row->nama_belakang; ?></td>
                        <td class="align-middle"><?= $row->nis; ?></td>
                        <td class="align-middle"><?= $row->jenis_kelamin; ?></td>
                        <td class="align-middle"><?= $row->kelas; ?></td>
                        <td class="align-middle"><?= $row->jurusan; ?></td>
                        <td class="text-center align-middle">
                            <a href="../public/web.php?action=showFormUpdate&id=<?= $row->id; ?>"
                                class="btn btn-sm btn-warning text-white">Edit <i class="fas fa-pencil"></i></a>
                        </td>
                        <td class="text-center align-middle">
                            <a href="../public/web.php?action=delete&id=<?= $row->id; ?>"
                                class="btn btn-sm btn-danger text-white"
                                onclick="return confirm('Yakin mau dihapus?')">Delete <i
                                    class="fas fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php $nomorUrut++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
if(isset($_SESSION['pesanEdit'])){
    echo '<script>
            Swal.fire({
                title: "Success",
                text: "Data murid berhasil diubah!",
                icon: "success"
            });
          </script>';
}

if(isset($_SESSION['pesanDrop'])){
    echo '<script>
            Swal.fire({
                title: "Success",
                text: "Data murid berhasil dihapus!",
                icon: "success"
            });
          </script>';
}
unset($_SESSION['pesanEdit']);
unset($_SESSION['pesanDrop']);
?>