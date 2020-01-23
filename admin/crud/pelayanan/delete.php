<?php

    include '../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_pelayanan WHERE id_pelayanan = '$id' ");
    
    if($sql){
        header('location:../../pelayanan.php');
    }else{
        header('location:../../pelayanan.php');
    }

?>