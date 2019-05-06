  <!--//** Navigation**//-->

    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



        <div class="container">

            <!-- Start Header Navigation -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars"></i>

                </button>

                <a class="navbar-brand" href="#brand">

                    <img src="assets/img/logo.png" class="logo" alt="logo">

                </a>

            </div>

            <!-- End Header Navigation -->



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active scroll"><a href="#home">Home</a></li>

                    <?php
                       
                    ?>
                    <?php
                        if (empty($_SESSION['username'])) {
                            echo '<li class="scroll"><a href="#about">Petunjuk</a></li>';
                            echo '<li class="scroll"><a href="#about">Tentang</a></li>';
                            echo ' 
                            <li class="button-holder">
                                <button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Login</button>
                            </li>';
                        } else {
                             if ($_SESSION['level'] == 'admin') {
                                echo '<li class="scroll"><a href="#about">Pasien</a></li>';
                                echo '<li class="scroll"><a href="#about">Gejala</a></li>';
                                echo '<li class="scroll"><a href="#about">Penyakit</a></li>';
                            }else if($_SESSION['level'] == 'user'){
                                echo '<li class="scroll"><a href="#about">Periksa</a></li>';
                                echo '<li class="scroll"><a href="#about">Rekam Medis</a></li>';
                            }
                            echo ' 
                            <li class="button-holder">
                                <button type="button" class="btn btn-blue navbar-btn"><a href="../logout.php">Logout</a></button>
                            </li>';
                        }
                    ?>

                   

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

    </nav>