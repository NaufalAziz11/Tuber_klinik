<?php

    include '../../koneksi.php';

    $id_fasilitas = $_POST['id'];
    $jenis_fasilitas= $_POST['jenis_fasilitas'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $id_admin = $_POST['id_admin'];
    $path = "../../images/berita/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "update tb_fasilitas set id_user='$id_admin', jenis_fasilitas='$jenis_fasilitas',gambar='$foto', deskripsi='$deskripsi' where id_fasilitas='$id_fasilitas' " );
        if($sql){
            header('location:../../fasilitas.php');
        }else{
            header('location:../../edit_fasilitas.php');
        }
    }

?>