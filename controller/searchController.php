<?php 
require_once('studentController.php');

class SearchingStudent extends StudentController
{
    public function searching($keyword){
        return $this->search("SELECT murid.*, jurusan.nama_jurusan AS jurusan 
               FROM murid LEFT JOIN jurusan ON murid.jurusan_id = jurusan.id
               WHERE murid.nama_depan LIKE '%$keyword%' OR murid.nama_belakang 
               ORDER BY murid.nama_depan ASC ");
    }

}
