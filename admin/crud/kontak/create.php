<?php

    include '../../koneksi.php';

    $idkontak = $_POST['id_kontak'];
    $jenis_kontak = $_POST['jenis_kontak'];
    $no = $_POST['no'];
    
    $sql = mysqli_query($koneksi, "INSERT INTO tb_kontak VALUES('$idkontak','$jenis_kontak','$no')");

    if($sql){
        header('location:../../kontak.php');
    }else{
        header('location:../../tambah_kontak.php');
    }

?>