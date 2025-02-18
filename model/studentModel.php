<?php 
require_once('../config/connect.php');
class StudentModel
{
    public static function selectData($query){
        global $connect;
        $result = mysqli_query($connect, $query);
        $isMatch = [];
        while($row = mysqli_fetch_object($result)){
            $isMatch[] = $row;
        }
        return $isMatch;
    }

    public static function selectDataById($id){
        global $connect;
        $query = "SELECT murid.*, jurusan.nama_jurusan AS jurusan FROM murid
                  LEFT JOIN jurusan ON murid.jurusan_id = jurusan.id
                  WHERE murid.id = $id";
        $result = mysqli_query($connect, $query);
        return mysqli_fetch_object($result);
    }

    public static function create($nama_depan, $nama_belakang, $nis, $jenis_kelamin, $kelas, $jurusan_id){
        global $connect;
        $sql = "INSERT INTO murid (nama_depan, nama_belakang, nis, jenis_kelamin, kelas, jurusan_id)
                VALUES ('$nama_depan', '$nama_belakang', '$nis', '$jenis_kelamin', '$kelas',
                '$jurusan_id')";
        if(mysqli_query($connect, $sql)){
            return mysqli_affected_rows($connect);
        }
    }

    public static function update($id, $nama_depan, $nama_belakang, $nis, $jenis_kelamin, $kelas, $jurusan_id){
        global $connect;
        $sql = "UPDATE murid SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang',
                nis = '$nis', jenis_kelamin = '$jenis_kelamin', kelas = '$kelas',
                jurusan_id = '$jurusan_id'
                WHERE id = $id";
        if(mysqli_query($connect, $sql)){
            return mysqli_affected_rows($connect);
        }
    }

    public static function delete($id){
        global $connect;
        $sql = "DELETE FROM murid WHERE id = $id";
        if(mysqli_query($connect, $sql)){
            return mysqli_affected_rows($connect);
        }
    }
};
