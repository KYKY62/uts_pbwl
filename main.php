<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/assets/css/style.css">
    <title>Dashboard Warung</title>
</head>

<body>
    <div class="c_promo">
        <h2>Daftar Produk yang Tersedia</h2>
        <div class="container">
            <?php
            $kat = new App\Kategori;
            $rows = $kat->tampil();

            foreach ($rows as $row) { ?>
                <?php $foto = $row['foto_barang']; ?>
                <div class="item">
                    <img src="product/<?php echo $foto; ?>" alt="" width="200" height="200">
                    <p class="nama"><?php echo $row['cat_name']; ?></p>
                    <p class="harga">Rp.<?php echo $row['cat_text']; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>