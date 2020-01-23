<?php
    
    error_reporting(0);

    if($_GET['page']==""){
        include 'view/beranda.php'; 
    } else if($_GET['page']=="visimisi"){
        include 'view/profil/visi-misi.php';
    } else if($_GET['page']=="visimisi"){
        include 'view/profil/visi-misi.php';
    } else if($_GET['page']=="visimisi"){
        include 'view/profil/visi-misi.php';
    } else if($_GET['page']=="visimisi"){
        include 'view/profil/visi-misi.php';
    } else if($_GET['page']=="sambutan"){
        include 'view/profil/sambutan.php'; 
    } else if($_GET['page']=="artikel"){
        include 'view/artikel/artikel.php';
    } else if($_GET['page']=="tampartikel"){
        include 'view/artikel/tamp-artik.php';
    } else if($_GET['page']=="tips"){
        include 'view/artikel/tips.php';
    } else if($_GET['page']=="tamptips"){
        include 'view/artikel/tamp-blog.php';
    } else if($_GET['page']=="pelayanan"){
        include 'pelayanan.php';
    } else if($_GET['page']=="igd"){
        include 'view/pelayanan/igd.php';
    } else if($_GET['page']=="umum"){
        include 'view/pelayanan/umum.php';
    } else if($_GET['page']=="rawatinap"){
        include 'view/pelayanan/rawatinap.php';
    } else if($_GET['page']=="kiakb"){
        include 'view/pelayanan/kiakb.php';
    } else if($_GET['page']=="konselinggigi"){
        include 'view/pelayanan/konsgigi.php';
    } else if($_GET['page']=="pemeriksaangigi"){
        include 'view/pelayanan/periksagigi.php';
    } else if($_GET['page']=="persalinan"){
        include 'view/pelayanan/persalinan.php';
    } else if($_GET['page']=="sanitasi"){
        include 'view/pelayanan/sankesmas.php';
    }  else if($_GET['page']=="dokter"){
        include 'dokter.php';
    } else if($_GET['page']=="detaildokter"){
        include 'view/dokter/tampdokter.php';
    } else if($_GET['page']=="fasilitas"){
        include 'fasilitas.php';
    } else if($_GET['page']=="r.inap"){
        include 'view/fasilitas/inap.php'; 
    } else if($_GET['page']=="r.gizi"){
        include 'view/fasilitas/gizi.php'; 
    } else if($_GET['page']=="r.farmasi"){
        include 'view/fasilitas/farmasi.php'; 
    } else if($_GET['page']=="r.igd"){
        include 'view/fasilitas/igd.php'; 
    } else if($_GET['page']=="lab"){
        include 'view/fasilitas/laborat.php'; 
    } else if($_GET['page']=="r.persalinan"){
        include 'view/fasilitas/persalinan.php'; 
    } else if($_GET['page']=="alurinap"){
        include 'view/info_umum/alur_inap.php'; 
    }else if($_GET['page']=="alurpelayanan"){
        include 'view/info_umum/alur_pelayanan.php'; 
    } else if($_GET['page']=="infoumum"){
        include 'view/info_umum/info_umum.php';
        
    } else if($_GET['page']=="tampdokter"){
        include 'view/dokter/tampdokter.php';
    } else if($_GET['page']=="tamp-artik"){
        include 'view/artikel/tamp-artik.php';
    } else if($_GET['page']=="tampfasilitas"){
        include 'view/fasilitas/tampfasilitas.php';
    } else if($_GET['page']=="tamppelayanan"){
        include 'view/pelayanan/tamppelayanan.php';
    } else if($_GET['page']=="tampinfo"){
        include 'view/info_umum/tampinfo.php';
    } else if($_GET['page']=="kontak"){
        include 'view/kontak/kontak.php';
    }
?>