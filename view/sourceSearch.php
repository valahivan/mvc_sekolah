<?php 
require_once('../controller/searchController.php');

$keyword = $_GET['keyword'];
$search = new SearchingStudent();
$dataMurid = $search->searching($keyword);
?>

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
                <a href="../public/web.php?action=delete&id=<?= $row->id; ?>" class="btn btn-sm btn-danger text-white"
                    onclick="return confirm('Yakin mau dihapus?')">Delete <i class="fas fa-trash-can"></i></a>
            </td>
        </tr>
        <?php $nomorUrut++ ?>
        <?php endforeach; ?>
    </tbody>
</table>