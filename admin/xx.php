<?php include 'notif.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    
    <link href="../admin/css2/font-face.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-4.7/css2/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-5/css2/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/mdi-font/css2/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/css2-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../admin/css2/theme.css" rel="stylesheet" media="all">
    <script src="../admin/js/jquery-3.3.1.min.js"></script>
    <script src="../admin/js/login.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <center><h3>Klinik Gramedika</h3></center><br><br>
                        <div class="login-form">
                        <form id="loginform" method="POST" action="login-proses.php" class="form-vertical" action="user.php">
                        <?php echo $notif ?>
                                <div class="form-group">
                                    <div class="form-line">
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" id="username">
                                </div>
                                </div>
                                <div class="form-group">
                                   
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="password">
                                </div>
                              <br>  
                                    <div class="form-actions">
                      <center><span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span></center>  
                    </div>
                                   </p>
                                 
                                   
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../admin/vendor/slick/slick.min.js">
    </script>
    <script src="../admin/vendor/wow/wow.min.js"></script>
    <script src="../admin/vendor/animsition/animsition.min.js"></script>
    <script src="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../admin/js/main.js"></script>

</body>

</html>
<!-- end document-->