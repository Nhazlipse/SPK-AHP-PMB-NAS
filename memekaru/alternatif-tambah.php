<?php
include "../layout/header.php";

?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="dashboard.php">Dashboard</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Data</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="alternatif.php">Alternatif</a>
                                </li>
                                <li>
                                    <a href="bobot.php">Bobot & Kriteria</a>
                                </li>
                                <li>
                                    <a href="matrik.php">Input Data</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="perhitungan.php">
                                <i class="fas fa-table"></i>Perhitungan</a>
                        </li>
        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Administrasi</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Administrasi</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form -->
                                <form action="alternatif-simpan.php" method="post">
                                    <div class="form-group">
                                        <label for="candidateName">Name:</label>
                                        <input type="text" id="candidateName" name="name" placeholder="Nama Kandidat..." class="form-control" required>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_alternatif" class="btn btn-primary">Simpan</button>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Footer -->
                                <div class="copyright">
                                    <p>SPK - PMB Metode AHP</p>
                                </div>
                                <!-- End Footer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php include "../layout/footer.php";?>