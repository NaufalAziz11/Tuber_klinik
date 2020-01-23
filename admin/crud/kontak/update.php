<?php

    include '../../koneksi.php';

    $idkontak = $_POST['id'];
    $jenis_kontak =$_POST['jenis_kontak'];
 
    $no = $_POST['no/alamat_kontak'];

    $sql = mysqli_query($koneksi, "update tb_kontak set no/alamat_kontak='$no',jenis_kontak = $jenis_kontak where id_kontak='$idkontak' " );

    if($sql){
        header('location:../../kontak.php');
    }else{
        header('location:../../edit_kontak.php');
    }

?>