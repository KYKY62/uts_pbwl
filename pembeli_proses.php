<?php

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";

$kat = new App\Pembeli();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=pembeli_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=pembeli_tampil");
}
