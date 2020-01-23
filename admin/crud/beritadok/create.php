<?php

    include '../../koneksi.php';
    
    $id_berita = $_POST['id_berita'];
    $kategori= $_POST['kategori'];
    $judul = $_POST['judul'];

    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $berita = $_POST['berita'];
    $id_admin = $_POST['id_admin'];
    $path = "../../images/berita/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_berita VALUES 
        ('$id_berita','$kategori','$judul','$tanggal','$foto','$berita','$id_admin')");
        if($sql){
            header('location:../../berita_dokter.php');
        }else{
            header('location:../../tambah_berita_dokter.php');
        }
    }

?>