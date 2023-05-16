<?php

$id = $_GET['id'];

$kat = new App\Pembeli();
$rows = $kat->delete($id);

?>

<div class="info">
    Data berhasil dihapus!
    <a href="index.php?hal=pembeli_tampil">Kembali</a>
</div>