<?php

    include 'koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);



    $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE nama = '$username' AND password = '$password' ");
    
    $data = mysqli_fetch_array($sql);
   
    if($data['lev_user']=="Admin"){
        session_start();

        $_SESSION['adminid'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['lev_user'] = $data['lev_user'];
        header('location:beranda.php');

    }else if ($data['lev_user']=="Dokter"){
            session_start();
    
            $_SESSION['adminid'] = $data['id_user'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['lev_user'] = $data['lev_user'];
            header('location:beranda_dokter.php');
    }else{
        header('location:xx.php?login=wrong');
    }
?>