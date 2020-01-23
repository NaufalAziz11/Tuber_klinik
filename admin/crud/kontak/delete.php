<?php

    include '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_kontak WHERE id_kontak = '$id' ");
    
    if($sql){
        header('location:../../kontak.php');
    }else{
        header('location:../../kontak.php');
    }

?>