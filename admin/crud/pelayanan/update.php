<?php

    include '../../koneksi.php';

    $id_pelayanan = $_POST['id'];
    $jenis_pelayanan= $_POST['jenis_pelayanan'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $id_admin = $_POST['id_admin'];
    $path = "../../images/pelayanan/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "update tb_pelayanan set id_user='$id_admin', jenis_pelayanan='$jenis_pelayanan',gambar='$foto', deskripsi='$deskripsi' where id_pelayanan='$id_pelayanan' " );
        if($sql){
            header('location:../../pelayanan.php');
        }else{
            header('location:../../edit_pelayanan.php');
        }
    }

?>