<?php

    include '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_fasilitas WHERE id_fasilitas = '$id' ");
    
    if($sql){
        header('location:../../fasilitas.php');
    }else{
        header('location:../../fasilitas.php');
    }

?>