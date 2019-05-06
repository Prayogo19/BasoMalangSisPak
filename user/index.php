<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="user"){
    die("Anda bukan user");//jika bukan user jangan lanjut
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

    <meta name="author" content="Made By GN DESIGNS">



    <title>User Page</title>



    <!-- // PLUGINS (css files) // -->

    <link href="../assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="../assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="../assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="../assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="../assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="../assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="../assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="../assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// FAVICON //-->

    <link href="../favicon.ico" rel="shortcut icon">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="../assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/css/user.css" rel="stylesheet">

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



    <!--//** Navigation**//-->
    <?php
        include '../menu.php';
    ?>

    <!--//** Banner**//-->

    <section id="home">

        <div class="container">

            <div class="row">

                <!-- Introduction -->

                <div class="col-md-6 caption">

                    <?php echo "<h1>Hallo, Ibu ".$_SESSION['nama']."</h1> " ?>

                    <h2>Silahkan Memulai Pemeriksaan dengan mengklik tombol Periksa dibawah</h2>

                    <a href="#" class="btn btn-lg btn-transparent">PERIKSA</a>
                    <a href="#" class="btn btn-lg btn-transparent">PETUNJUK</a>

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

                    <img src="../assets/img/logo.png" class="img-responsive center-block" alt="logo">

                    <hr>

                    <h5 class="pull-left">Basomalang, &copy;2019 All rights reserved</h5>
                </div>

            </div>

        </div>

    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="../assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="../assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="../assets/js/plugins/bootsnav_files/js/bootsnav.js"></script>

    <script src="../assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="../assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

    <script src="../assets/js/main.js"></script>

</body>



</html>