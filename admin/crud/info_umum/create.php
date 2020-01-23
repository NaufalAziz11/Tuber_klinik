<?php

    include '../../koneksi.php';
    
    $id_info = $_POST['id_info'];
    $jenis_info= $_POST['jenis_info'];
    $id_admin = $_POST['id_admin'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $desc = $_POST['desc'];
   
    $path = "../../images/info/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_info VALUES 
        ('$id_info','$id_admin','$jenis_info','$foto','$desc')");
        if($sql){
            header('location:../../info_umum.php');
        }else{
            header('location:../../tambah_info.php');
        }
    }

?>