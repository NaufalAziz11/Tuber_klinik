<?php include "koneksi.php"?>
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
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
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
       <!-- Left Sidebar -->
       <aside id="leftsidebar" class="sidebar">
       <!-- User Info -->
       
          
          
       </div>
       <!-- #User Info -->
       <!-- Menu -->
       <div class="menu">
           <ul class="list">
              
                   <a href="beranda.php">
                       <i class="material-icons">home</i>
                       <span>Home</span>
                   </a>
               
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
               <li class="active">
                   <a href="kontak.php">
                 
                       <span>Kontak</span>
                   </a>
               </li>
                </li>
               <li>
                   <a href="xx.php">
                      
                       <span>Log Out</span>
                   </a>
               </li>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
         
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>Kontak</h1>
                            <hr>
                            <ul class="header-dropdown m-r--5">
                              
                            </ul>
                            <h2>Form Tambah Kontak</h2>
                        
                        <div class="body">
                        <form action="crud/kontak/create.php" method="POST" class="form-horizontal">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id_kontak" required>
                                        <label class="form-label">ID.Kontak</label>
                                    </div>
                                </div>
                                <br>
                                 <div class="form-group form-float">
                                 <div class="form-line">
                                                <select class = "form-control show-tick" id="jenis_kontak" name ="jenis_kontak" >
                                                        <option value="0">Jenis Kontak</option>
                                                        <option value="No.Telepon">No.Telepon</option>
                                                        <option value="Email">Email</option>
                                                 </select>
                                               </div>
                                               </div><br>
                                    <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no" required>
                                        <label class="form-label">No/Alamat Email</label>
                                    </div>
                                </div><br>
                                               <div class="form-actions">
                                                   
                                <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                                            </div>
                                  
                                  

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
         
        </div>
    </section>

   
           
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
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="js/select2.min.js"></script> 
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
