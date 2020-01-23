<?php

    include '../../koneksi.php';

    $id_info = $_POST['id'];
    $jenis_info= $_POST['jenis_info'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $id_admin = $_POST['id_admin'];
    $path = "../../images/info/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "update tb_info set id_user='$id_admin', jenis_info='$jenis_info',gambar='$foto', deskripsi='$deskripsi' where id_info='$id_info' " );
        if($sql){
            header('location:../../info.php');
        }else{
            header('location:../../edit_info.php');
        }
    }

?>