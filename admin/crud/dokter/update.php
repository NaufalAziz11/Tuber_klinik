<?php
include '../../koneksi.php';


$id = $_POST['id_user'];
$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan/tahun'];
$jamprak = $_POST['jam_prak'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];
$path = "../../images/dokter/".$foto;


    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "UPDATE tb_dokter SET nama='$nama', pendidikan/tahun='$pendidikan', jam_prak='$jamprak', foto='$foto' WHERE id_user = '$id' ");
    
        if($sql){
            header('location:../../dokter.php');
        }else{
            header('location:../../edit_dokter.php');
        }
    }

?>
