<?php

    include '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_berita WHERE id_berita = '$id' ");
    
    if($sql){
        header('location:../../berita_dokter.php');
    }else{
        header('location:../../berita_dokter.php');
    }

?>