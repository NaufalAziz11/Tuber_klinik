<?php

    include '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_info WHERE id_info = '$id' ");
    
    if($sql){
        header('location:../../info_umum.php');
    }else{
        header('location:../../info_umum.php');
    }

?>