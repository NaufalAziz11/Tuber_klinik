<?php

    include '../../koneksi.php';
    
    $id_pelayanan = $_POST['id_pelayanan'];
    $jenis_pelayanan= $_POST['jenis_pelayanan'];
    $id_admin = $_POST['id_admin'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $desc = $_POST['desc'];
   
    $path = "../../images/pelayanan/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_pelayanan VALUES 
        ('$id_pelayanan','$id_admin','$jenis_pelayanan','$foto','$desc')");
        if($sql){
            header('location:../../pelayanan.php');
        }else{
            header('location:../../tambah_pelayanan.php');
        }
    }

?>