<?php 
require_once('../model/studentModel.php');

class StudentController
{
    public function readAll(){
        $dataMurid = StudentModel::selectData('SELECT murid.*, jurusan.nama_jurusan AS jurusan FROM murid
        LEFT JOIN jurusan ON murid.jurusan_id = jurusan.id
        ORDER BY murid.nama_depan ASC');
        include('../view/index.php');
        return $dataMurid;
    }

    public function selectAll(){
        $result = StudentModel::selectData('SELECT murid.*, jurusan.nama_jurusan AS jurusan FROM murid
        LEFT JOIN jurusan ON murid.jurusan_id = jurusan.id
        ORDER BY murid.nama_depan ASC');
        return $result;
    }

    public function showFormCreate(){
        return include('../view/create.php');
    }

    public function saveMurid($data){
        $nama_depan = htmlspecialchars($data['nama_depan']);
        $nama_belakang = htmlspecialchars($data['nama_belakang']);
        $nis = htmlspecialchars($data['nis']);
        $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
        $kelas = htmlspecialchars($data['kelas']);
        $jurusan_id = htmlspecialchars($data['jurusan_id']);

        $isMatch = StudentModel::create($nama_depan, $nama_belakang, $nis,
        $jenis_kelamin, $kelas, $jurusan_id );
        return $isMatch;
    }

    public function showFormUpdate($id){
        $row = StudentModel::selectDataById($id);
        include('../view/update.php');
        return $row;
    }

    public function editMurid($id, $data){
        $nama_depan = htmlspecialchars($data['nama_depan']);
        $nama_belakang = htmlspecialchars($data['nama_belakang']);
        $nis = htmlspecialchars($data['nis']);
        $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
        $kelas = htmlspecialchars($data['kelas']);
        $jurusan_id = htmlspecialchars($data['jurusan_id']);
        $isMatch = StudentModel::update($id, $nama_depan, $nama_belakang, $nis,
        $jenis_kelamin, $kelas, $jurusan_id );

        return $isMatch;
    }

    public function dropMurid($id){
        return StudentModel::delete($id);
    }

    public function search($query){
        return StudentModel::selectData($query);
    }
}
