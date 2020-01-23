<?php

    include '../../koneksi.php';

    $iduser = $_POST['id_user'];
    $pass = md5($_POST['password']);
    $lev_user = $_POST['lev_user'];
    $nama = $_POST['nama_user'];
    
    $sql = mysqli_query($koneksi, "INSERT INTO tb_user VALUES('$iduser','$pass','$lev_user','$nama')");
    
    if($sql){
        header('location:../../user.php');
    }else{
        header('location:../../tambah_user.php');
    }

?>