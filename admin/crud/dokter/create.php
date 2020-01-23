<?php

    include '../../koneksi.php';
    
    $pendidikan = $_POST['pendidikan/tahun'];
    $jamprak = $_POST['jam_prak'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $path = "../../images/dokter/".$foto;
    


    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_dokter VALUES 
        ('$pendidikan','$jamprak','$foto')");
        if($sql){
            header('location:../../dokter.php');
        }else{
            header('location:../../edit_dokter.php');
        }
    }

?>