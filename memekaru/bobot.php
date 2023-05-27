
<?php
include "../layout/header.php";
include "koneksi.php";
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
                                                    <span class="email">kontolodon@memeka.com</span>
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

                </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-content">
                    <div class="page-heading text-center my-3">
                        <h3 class="display-4">Bobot Kriteria</h3>
                    </div>

                    <section class="row">
                        <div class="col-12">
                            <div class="card border-primary mb-3">
                                <div class="card-header bg-primary text-white">
                                    <h4 class="card-title">Tabel Bobot Kriteria</h4>
                                </div>

                                <div class="card-body">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <caption>
                                                Tabel Kriteria C<sub>i</sub>
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Simbol</th>
                                                    <th>Kriteria</th>
                                                    <th>Bobot</th>
                                                    <th colspan="2">Atribut</th>
                                                </tr>
  <?php
$sql = 'SELECT id_criteria,criteria,weight,attribute FROM saw_criterias';
$result = $db->query($sql);
$i = 0;
while ($row = $result->fetch_object()) {
    echo "<tr>
        <td class='right'>" . (++$i) . "</td>
        <td class='center'>C{$i}</td>
        <td>{$row->criteria}</td>
        <td>{$row->weight}</td>
        <td>{$row->attribute}</td>
        <td>
            <a href='bobot-edit.php?id={$row->id_criteria}' class='btn btn-info btn-sm'>Edit</a>
            </td>
      </tr>\n";
}
$result->free();
?>
                    </table>
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