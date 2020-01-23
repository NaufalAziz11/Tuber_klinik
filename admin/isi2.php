<?php include "koneksi.php"?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Editors | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>


    <!-- Page Loader -->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    
<br>
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <h2>
                                Deskripsi
                               
                            </h2>
                        </div>
                       
                        <div class="body">
                        <textarea id="ckeditor" name="desc" required >
                        
                        <?php echo $data['deskripsi'] ?></textarea>
                        </div>
                      
                 
              </div>
                    </div>
                </div>
            
            <!-- #END# CKEditor -->
            <!-- TinyMCE -->
            
            <!-- #END# TinyMCE -->
            <div class="form-group">
              <label for="kategori" class="col-sm-2 control-label">Dipost Oleh</label>
               <div class="col-sm-2">
              <div class="form-line">
            <input type="text" class="form-control" value="<?php echo ($_SESSION['lev_user']) ?>" name="id_admin" placeholder="ID USER" required />
              </div>
                </div>
               </div>
               <br>
               <div class="form-actions">
             
                <input type="submit" class="btn btn-success" value="Simpan">
        </div>
        </div>
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

    <!-- Ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
