<?php
include "koneksi.php";
include "../layout/header.php";
include "W.php";
include "R.php";
?>
  <?php

$P = array();
$m = count($W);
$no = 0;
foreach ($R as $i => $r) {
    for ($j = 0; $j < $m; $j++) {
        $P[$i] = (isset($P[$i]) ? $P[$i] : 0) + $r[$j] * $W[$j];
    }
    
}
?>
    <?php include "../layout/footer.php";?>


      