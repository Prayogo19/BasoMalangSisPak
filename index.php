<?php
include ("koneksi.php");
session_start(); //memulai session
if (isset($_SESSION['akses'])) { //mengecek session akses
   header('location:'.$_SESSION['akses']);
   exit();
 } 
 $error = "";
 if (isset($_SESSION['error'])) {  //menangani error
  $error = $_SESSION['error'];
  unset($_SESSION['error']);
 }
 ?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Landing PAGE Html5 Template">

    <meta name="keywords" content="landing,startup,flat">


    <title>Landing Page</title>



    <!-- // PLUGINS (css files) // -->

    <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// FAVICON //-->

    <link href="favicon.ico" rel="shortcut icon">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

</head>



<body>



    <!--======================================== 

           Preloader

    ========================================-->

    <div class="page-preloader">

        <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div>

    </div>

    <!--======================================== 

           Header

    ========================================-->



    <?php
        include 'menu.php';
    ?>



    <!--//** Banner**//-->

    <section id="home">

        <div class="container">

            <div class="row">

                <!-- Introduction -->

                <div class="col-md-6 caption">

                    <h2>Selamat Datang di SIPARTUS</h2>
                    <img src="assets/img/abortus.jpg" alt="abortus">

                    <p>Abortus Adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam iure unde dolore dolor officia distinctio perspiciatis, error expedita? Officiis magnam at qui dolores placeat, voluptate asperiores accusamus alias nemo in.</p>

                </div>

                <!-- Sign Up -->

                <div class="col-md-5 col-md-offset-1">

                    <form action="registrasi.php" class="signup-form" method="post">

                        <h2 class="text-center">Register</h2>

                        <hr>

                        <div class="form-group">

                            <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama" required="required">

                        </div>

                        <div class="form-group">

                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" id="tanggal_lahir" required="required">

                        </div>
                        <div class="form-group">

                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" name="username" class="form-control" placeholder="Username" id="username" required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" name="password" class="form-control" placeholder="Password" id="password" required="required">

                        </div>
                        <div class="form-group">

                            <input type="password" name="repassword" class="form-control" placeholder="Re-Password" id="repassword" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" name="buat" class="btn btn-blue btn-block">Registrasi</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>




    <!--======================================== 

           Footer

    ========================================-->



    <footer>

        <div class="container">

            <div class="row">

                <div class="footer-caption">

                    <img src="assets/img/logo.png" class="img-responsive center-block" alt="logo">

                    <hr>

                    <h5 class="center-block">Basomalang, &copy;2019 All rights reserved</h5>
                </div>

            </div>

        </div>

    </footer>



    <!--======================================== 

           Modal

    ========================================-->



    <!-- Modal -->

    <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>

                </div>

                <div class="modal-body">

                    <form action="login.php?op=in" class="signup-form" method="post">

                        <div class="form-group">

                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" name="login" class="btn btn-blue btn-block">Log In</button>

                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js"></script>

    <script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

    <script src="assets/js/main.js"></script>

</body>



</html>