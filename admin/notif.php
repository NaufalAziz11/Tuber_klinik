<?php

    $notif = "";

    if (@$_GET['login']=="wrong"){
        $notif = '<p class="alert alert-danger">Username/Password Tidak Tepat!</p>';
    }else if (@$_GET['login']=="no"){
        $notif = '<p class="alert alert-danger">Anda harus login dahulu!</p>';
    }

?>