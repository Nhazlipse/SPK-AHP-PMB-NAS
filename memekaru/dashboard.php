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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                        <p><h2 align="center">APLIKASI PENERIMAAN MAHASISWA BARU MENGGUNAKAN METODE WP</h2></p>
                        <br>

                            </div>
                        </div>
                        


                        <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Weight Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        SPK Aplikasi Penerimaan Mahasiswa Baru Menggunakan Metode Weight
                                        </p>
                                        <hr>
                                        <p class="card-text">SPK (Sistem Pendukung Keputusan) Aplikasi Penerimaan Mahasiswa Baru menggunakan metode Weight Product adalah sebuah sistem yang dirancang untuk membantu dalam pengambilan keputusan dalam proses penerimaan mahasiswa baru di sebuah institusi pendidikan.
                                        </p>
                                        <br>
                                        <p class="card-text">Metode Weight Product (WP) adalah metode pengambilan keputusan yang menggunakan pembobotan terhadap kriteria-kriteria yang relevan untuk menentukan peringkat alternatif. Dalam konteks ini, kriteria-kriteria tersebut dapat mencakup nilai akademik, prestasi ekstrakurikuler, tes masuk, atau kriteria lainnya yang relevan dalam proses seleksi.
                                        </p>
                                        <br>
                                        <p class="card-text">SPK ini memungkinkan pihak yang bertanggung jawab dalam penerimaan mahasiswa baru, seperti panitia seleksi atau staf administrasi, untuk menginput data dan bobot kriteria yang diperlukan. Selanjutnya, SPK akan melakukan perhitungan berdasarkan metode Weight Product untuk memberikan peringkat atau skor kepada setiap calon mahasiswa baru.
                                        </p>
                                        <br>
                                        <p class="card-text">Dengan menggunakan metode Weight Product, SPK ini dapat membantu memudahkan proses seleksi mahasiswa baru dengan memberikan hasil yang lebih objektif dan terukur. Dalam hal ini, keputusan akhir tentang penerimaan mahasiswa baru masih bergantung pada pihak yang bertanggung jawab, namun SPK ini dapat menjadi alat yang berharga dalam membantu mereka dalam proses pengambilan keputusan yang lebih efisien dan konsisten.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>









                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>SPK - PMB Metode AHP</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php include "../layout/footer.php";?>