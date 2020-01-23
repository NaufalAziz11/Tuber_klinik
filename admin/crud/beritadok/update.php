<?php

    include '../../koneksi.php';

    $id_berita = $_POST['id'];
    $kategori= $_POST['kategori'];
    $judul = $_POST['judul'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $berita = $_POST['berita'];
    $id_admin = $_POST['id_admin'];
    $path = "../../images/berita/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "update tb_berita set kategori='$kategori', judul='$judul', tanggal='$tanggal', gambar='$foto', isi_berita='$berita', id_admin='$id_admin' where id_berita = '$id_berita' " );
        if($sql){
            header('location:../../berita_dokter.php');
        }else{
            header('location:../../tambah_berita.php');
        }
    }

?>