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
                        <h3 class="display-4">Hasil Perhitungan Weight Product</h3>
                    </div>
        <div class="page-content">
        <?php
        require("../controller/Kriteria.php");

        $kriteria = Index("SELECT * FROM saw_criterias");
        $alternatif = Index("SELECT * FROM saw_alternatives");
        $bobot = Index("SELECT * FROM saw_evaluations ORDER BY id_alternative, id_criteria");
        $maxkriteria = Index("SELECT SUM(weight) AS Total FROM saw_criterias");
        $test = [];
        $varV = [];
        $totalS = 0;
        ?>
        
        <section class="row">
                        <div class="col-12">
                            <div class="card border-primary mb-3">
                                <div class="card-header bg-primary text-white">
                                    <p class="card-header-title">Table penilaian</p>
                                </div>

                                <div class="card-content">
                                    <div class="table-container">
                                        <table class="table is-fullwidth">
                                            <thead class="has-background-success">
                                                <tr>
                                                    <th class="has-text-white">No</th>
                                                    <th class="has-text-white">Alternatif</th>
                                                    <?php foreach ($kriteria as $header) : ?>
                                                        <th class="has-text-white"><?= $header["criteria"] ?></th>
                                                    <?php endforeach ?>
                                                </tr>
                                            </thead>
                                            <tfoot class="has-background-success">
                                                <tr>
                                                    <th class="has-text-white">No</th>
                                                    <th class="has-text-white">Alternatif</th>
                                                    <?php foreach ($kriteria as $header) : ?>
                                                        <th class="has-text-white"><?= $header["criteria"] ?></th>
                                                    <?php endforeach ?>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php $a = 1 ?>
                                                <?php foreach ($alternatif as $row) : ?>
                                                    <tr>
                                                        <th><?= $a++ ?></th>
                                                        <td><?= $row["name"] ?></td>
                                                        <?php foreach ($bobot as $pembobot) : ?>
                                                            <?php if ($pembobot["id_alternative"] == $row["id_alternative"]) : ?>
                                                                <td><?= $pembobot["value"] ?></td>
                                                            <?php endif ?>
                                                        <?php endforeach ?>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>

                                    <!-- BAGIAN -->
                                    <h4 class="subtitle">Bagian 1 : Mencari Nilai W</h4>
                                    <hr>
                                    <p>Bobot Tiap Kriteria :</p>
                                    <p>W = [
                                        <?php foreach ($kriteria as $tampildoang) : ?>
                                            <?= $tampildoang["weight"] . "," ?>
                                        <?php endforeach ?>
                                        ]
                                    </p>
                                    <hr>
                                    <p>Pembobotan :</p>
                                    <?php $b = 1 ?>
                                    <?php foreach ($kriteria as $bagibobot) : ?>
                                        <?php foreach ($maxkriteria as $TotalLah) : ?>
                                            <p>W<?= $b++ ?> =
                                                <?= $bagibobot["weight"] . "/" . $TotalLah["Total"] ?> = <?= round($bagibobot["weight"] / $TotalLah["Total"], 3) ?>
                                            </p>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                    <hr>
                                    <p>Normalisasi Berdasarkan Pembobotan :</p>
                                    <?php $c = 1 ?>
                                    <?php foreach ($kriteria as $bagibobot) : ?>
                                        <?php foreach ($maxkriteria as $TotalLah) : ?>
                                            <p>W<?= $c++ ?> =
                                                <?php if ($bagibobot["attribute"] == "cost") : ?>
                                                    <?= round($bagibobot["weight"] / $TotalLah["Total"], 3) * -1 ?></p>
                                        <?php else : ?>
                                            <?= round($bagibobot["weight"] / $TotalLah["Total"], 3) ?></p>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                <?php endforeach ?>
                                <hr>

                                <!-- BAGIAN 2 -->
                                <h4 class="subtitle">Bagian 2 : Mencari Nilai Vector (S)</h4>
                                <p>Pembobotan :</p>
                                <?php $d = 1 ?>
                                <?php $e = 0 ?>
                                <?php foreach ($alternatif as $les) : ?>
                                    <?php $idalter = $les["id_alternative"] ?>
                                    <?php $bobot = Index("SELECT * FROM saw_evaluations WHERE id_alternative = $idalter ORDER BY id_alternative, id_criteria"); ?>
                                    <?php $test[$e] = 1 ?>
                                    S<?= $d++ ?> =
                                    <?php foreach ($bobot as $pembobot) : ?>
                                        <?php $idbobot = $pembobot["id_criteria"] ?>
                                        <?php $kriteria = Index("SELECT * FROM saw_criterias WHERE id_criteria = $idbobot"); ?>
                                        <?php foreach ($kriteria as $bagibobot) : ?>
                                            <?php $maxkriteria = Index("SELECT SUM(weight) AS Total FROM saw_criterias"); ?>
                                            <?php foreach ($maxkriteria as $TotalLah) : ?>
                                                <?php if ($bagibobot["attribute"] == "cost") : ?>
                                                    (<?= $pembobot["value"] . "<sup>" . round($bagibobot["weight"] / $TotalLah["Total"], 3) * -1 . "</sup>" ?>)
                                                    <?php $test[$e] = $test[$e] * pow($pembobot["value"], round($bagibobot["weight"] / $TotalLah["Total"], 3) * -1) ?>
                                                <?php else : ?>
                                                    (<?= $pembobot["value"] . "<sup>" . round($bagibobot["weight"] / $TotalLah["Total"], 3) . "</sup>" ?>)
                                                    <?php $test[$e] = $test[$e] * pow($pembobot["value"], round($bagibobot["weight"] / $TotalLah["Total"], 3)) ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                    =
                                    <?= round($test[$e], 3) ?>
                                    <?php $totalS = $totalS + $test[$e] ?>
                                    <?php $e++ ?>
                                    <br>
                                <?php endforeach ?>
                                <hr>
                                <h4 class="subtitle">Bagian 3 : Mencari Nilai V (V)</h4>
                                <?php $f = 1 ?>
                                <?php $g = 0 ?>
                                <?php foreach ($test as $row) : ?>
                                    <p>V<?= $f++ ?> = <?= round($test[$g], 3) . "/" . round($totalS, 3) ?>
                                        = <?= round(round($test[$g], 3) / round($totalS, 3), 3) ?></p>
                                    <?php $g++ ?>
                                <?php endforeach ?>
                                <hr>
                                <h4 class="subtitle">Hasil</h4>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead class="has-background-success">
            <tr>
                <th class="has-text-white">No</th>
                <th class="has-text-white">Alternatif</th>
                <th class="has-text-white">Nilai</th>
            </tr>
        </thead>
        <tfoot class="has-background-success">
            <tr>
                <th class="has-text-white">No</th>
                <th class="has-text-white">Alternatif</th>
                <th class="has-text-white">Nilai</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
            $h = 1;
            $i = 0;
            $j = 0;
            $minIndex = $maxIndex = 0;
            $minValue = $maxValue = $test[0] / $totalS;  // Assuming $test and $totalS are properly initialized
            foreach ($alternatif as $row) : 
                $varV[$j] = $test[$i] / $totalS;
                if ($varV[$j] < $minValue) {
                    $minValue = $varV[$j];
                    $minIndex = $i;
                }
                if ($varV[$j] > $maxValue) {
                    $maxValue = $varV[$j];
                    $maxIndex = $i;
                }
            ?>
                <tr>
                    <th><?= $h++ ?></th>
                    <td><?= $row["name"] ?></td>
                    <td><?= round(round($test[$i], 3) / round($totalS, 3), 3) ?></td>
                </tr>
                <?php 
                $i++;
                $j++;
            endforeach;
            ?>
        </tbody>
    </table>
</div>

<style>
    .button.is-success {
        background-color: #007BFF;  // Ganti warna latar belakang menjadi biru
        color: white;
        border: none;
        padding: 10px 20px;  // Kurangi padding
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;  // Kurangi ukuran font
        margin: 4px 20px 4px 2px;  // Tambahkan margin kanan
        cursor: pointer;
        border-radius: 12px;
        transition-duration: 0.4s;
        float: left;  // Posisikan tombol di kiri
    }

    .button.is-success:hover {
        background-color: white;
        color: #007BFF;  // Ganti warna teks saat hover menjadi biru
        border: 2px solid #007BFF;  // Ganti warna border saat hover menjadi biru
    }
</style>

<button class="button is-success" onclick="alert('Nilai Terendah: <?= $minValue ?> (<?= $alternatif[$minIndex]["name"] ?>)\nNilai Terbesar: <?= $maxValue ?> (<?= $alternatif[$maxIndex]["name"] ?>)')">Kesimpulan</button>




<br><br>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        
      </div>
    </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>SPK - PMB Metode WP</a>.</p>
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
    <?php require "../layout/js.php";?>