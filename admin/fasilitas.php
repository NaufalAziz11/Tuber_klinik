<?php include "koneksi.php";?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>
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

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                   
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                  
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                 
                    <!-- #END# Tasks -->
                    
                </ul>
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
                <li>
                <li class="active">
                    <a href="fasilitas.php">   
                        <span>Fasilitas</span>
                    </a>
                </li>
                </li>
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
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                Fasilitas
                                <hr>
                            </h1>
                           
                            <a href="tambah_fasilitas.php">  <button type="button" class="btn btn-success waves-effect">
                                    <i class="material-icons">add</i>
                                    <span>Tambah</span>

                                </button></a>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID.Fasilitas</th>
                                            <th>Jenis Fasilitas</th>
                                            <th>Deskripsi</th>
                                            <th>Dipost Oleh</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas");
                while($data = mysqli_fetch_array($sql)){
              ?>
                                        <tr class="gradeX">
                                            <td><?php echo $data['id_fasilitas'] ?></td>
                                            <td><?php echo $data['jenis_fasilitas'] ?></td>
                                            <td><?php echo $data['deskripsi'] ?></td>
                                            <td><?php echo $data['id_user'] ?></td>
                                            <td>
                                                <a class="btn btn-primary waves-effect" href ="edit_fasilitas.php?id=<?php echo $data['id_fasilitas'] ?>">
                                                        <i class="material-icons">edit</i>
                                                        <span>Edit</span>
                                                </a>
                                               
                                                <a class="btn btn-danger waves-effect" href ="crud/fasilitas/delete.php?id=<?php echo $data['id_fasilitas'] ?>"
                                                onclick="return confirm('Apakah anda yakin?')"> <i class="material-icons">delete</i>Hapus</a>    
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
           
            <!-- #END# Exportable Table -->
        </div>
    </section>

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

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
