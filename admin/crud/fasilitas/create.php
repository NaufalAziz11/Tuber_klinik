<?php

    include '../../koneksi.php';
    
    $id_fasilitas = $_POST['id_fasilitas'];
    $jenis_fasilitas= $_POST['jenis_fasilitas'];
    $id_admin = $_POST['id_admin'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $desc = $_POST['desc'];
   
    $path = "../../images/fasilitas/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_fasilitas VALUES 
        ('$id_fasilitas','$id_admin','$jenis_fasilitas','$foto','$desc')");
        if($sql){
            header('location:../../fasilitas.php');
        }else{
            header('location:../../tambah_fasilitas.php');
        }
    }

?>