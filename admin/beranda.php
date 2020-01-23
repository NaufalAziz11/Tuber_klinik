<?php

  include 'koneksi.php';
  include 'notif.php';
  session_start();

  if(empty($_SESSION['adminid'])){
    header('location:xx.php?login=no');

  }else if($_SESSION['lev_user']=="Dokter"){
    header("location:xx.php?login=gagal");
  }

 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
            </div>
            
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            
               
               
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active">
                        <a href="beranda.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                          
                            <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="berita.php">
                        
                            <span>Berita</span>
                        </a>
                    </li>
                    <li>
                        <a href="pelayanan.php">
                          
                            <span>Pelayanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="fasilitas.php">
                            
                            <span>Fasilitas</span>
                        </a>
                    </li>
                    <li>
                        <a href="info_umum.php">
                           
                            <span>Informasi Umum</span>
                        </a>
                    </li>
                    <li>
                        <a href="kontak.php">
                      
                            <span>Kontak</span>
                        </a>
                    </li>
                    <li>
                        <a href="xx.php">
                           
                            <span>Log Out</span>
                        </a>
                    </li>

            <!-- #Menu -->
            <!-- Footer -->
           
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
   
        <div class="container-fluid">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="card">
                        <div class="body bg-red hover-expand-effect">
                        <div class="icon">
                        <center><span><img src="images/icons8-administrator-male-60 (1).png"></span><center>
                        </div>
                        <div class="content">
                        <a href="user.php"><span><center><h2>User</h2></center></span>
                      </a>
                        </div>
                        <center><h3> <?php
     
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_user");
                $data    =array();
                while($row    =mysqli_fetch_array($sql)){
                $data[] =$row;
                }
                $count    =count($data);
                echo " ( $count )"
                ?></div>
                </div>
                </div>
            
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="card">
                    <div class="body bg-blue hover-expand-effect">
                    <div class="icon">
                    <center><span><img src="images/icons8-us-news-filled-60.png"></span><center>
                    </div>
                    <div class="content">
                    <a href="berita.php"><span><center><h2>Berita</h2></center></span>
                  </a>
                    </div>
                    <center><h3>
                    <?php
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_berita");
     $data    =array();
     while($row    =mysqli_fetch_array($sql)){
     $data[] =$row;
     }
     $count    =count($data);
     echo " ( $count )"
     ?></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
        <div class="card">
                <div class="body bg-purple hover-expand-effect">
                <div class="icon">
                <center><span><img src="images/icons8-stethoscope-60.png"></span><center>
                </div>
                <div class="content">
                        <a href="pelayanan.php"><span><center><h2>Pelayanan</h2></center></span>
                      </a>
                </div>
                <center><h3><?php
     
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_pelayanan");
     $data    =array();
     while($row    =mysqli_fetch_array($sql)){
     $data[] =$row;
     }
     $count    =count($data);
     echo " ( $count )"
     ?></div>
        </div>
    </div>
</div>
    <div class="row clearfix">
    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
            <div class="body bg-orange hover-expand-effect">
            <div class="icon">
            <center><span><img src="images/icons8-hospital-3-60.png"></span><center>
            </div>
            <div class="content">
            <a href="fasilitas.php"><span><center><h2>Fasilitas</h2></center></span>
          </a>
            </div>
            <center><h3><?php
     
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas");
     $data    =array();
     while($row    =mysqli_fetch_array($sql)){
     $data[] =$row;
     }
     $count    =count($data);
     echo " ( $count )"
     ?></div>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
<div class="card">
        <div class="body bg-teal hover-expand-effect">
        <div class="icon">
        <center><span><img src="images/icons8-information-filled-60.png"></span><center>
        </div>
        <div class="content">
        <a href="info_umum.php"><span><center><h2>Informasi Umum</h2></center></span>
      </a>
        </div>
        <center><h3><?php
     
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_info");
     $data    =array();
     while($row    =mysqli_fetch_array($sql)){
     $data[] =$row;
     }
     $count    =count($data);
     echo " ( $count )"
     ?></div>
</div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
<div class="card">
    <div class="body bg-green hover-expand-effect">
    <div class="icon">
    <center><span><img src="images/icons8-phone-filled-60.png"></span><center>
    </div>
    <div class="content">
    <a href="kontak.php"><span><center><h2>Kontak</h2></center></span>
  </a>
    </div>
    <center><h3><?php
     
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_kontak");
     $data    =array();
     while($row    =mysqli_fetch_array($sql)){
     $data[] =$row;
     }
     $count    =count($data);
     echo " ( $count )"
     ?></div>
</div>
</div>
           
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
          
            <!-- #END# CPU Usage -->
         
            
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
  

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
