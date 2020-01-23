<?php include "koneksi.php"
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
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
    type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap core CSS -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--external css-->
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

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
                    <a href="Fasilitas.php">
                        
                        <span>fasilitas</span>
                    </a>
                </li>
                <li>
                <li class="active">
                    <a href="info_umum.php">   
                        <span>Informasi Umum</span>
                    </a>
                </li>
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
           
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>
    <?php
    session_start();
  ($_SESSION['nama'])

  ?>
    <section class="content">
        <div class="container-fluid">
          
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>Informasi Umum</h1>
                            <hr>
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                            <h2>Form Tambah Info</h2>
                        </div>
                    
                        <div class="body">
                        <?php  
            
            $id = $_GET['id'];
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_info where id_info = '$id'");
            while ($data = mysqli_fetch_array($sql)){
    ?>
                        <form action="crud/info_umum/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                          <div class="form-group form-float">
                                   
                                                <label for="id_info" class="col-sm-2 control-label">ID.Info</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  value="<?php echo $data['id_info'] ?>" name="id" placeholder="ID Fasilitas" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_info" class="col-sm-2 control-label">Jenis Informasi</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" value="<?php echo $data['jenis_info'] ?>" name="jenis_info" placeholder="ID Fasilitas" required />
                                                    </div>
                                                </div>
                                            </div>
                                   
                                            <?php include "aaa.php"?>
                                            </div>
                                            <?php include "isi2.php"?>
                                        </div> 
                            </form>
                        </div>
                    </div>
                </div>
        
                <?php } ?>
           
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


<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Ckeditor -->
<script src="plugins/ckeditor/ckeditor.js"></script>

<!-- TinyMCE -->
<script src="plugins/tinymce/tinymce.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/forms/editors.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>

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

<!-- js placed at the end of the document so the pages load faster -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<!--script for this page-->
<script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="lib/advanced-form-components.js"></script>
</body>

</html>