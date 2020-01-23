<?php

    include '../../koneksi.php';

    $iduser = $_POST['id'];
    $namauser = $_POST['nama_user'];
    $pass = md5($_POST['password']);

    $sql = mysqli_query($koneksi, "update tb_user set nama='$namauser', password='$pass' where id_user='$iduser' " );

    if($sql){
        header('location:../../user.php');
    }else{
        header('location:../../edit_user.php');
    }

?>