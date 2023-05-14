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
        <h3>Daftar Promo !!</h3>
        <p>Menampilkan 1 - 12 promo dari 99 promo</p>
        <div class="container_promo">
            <?php
            $kat = new App\Promo;
            $rows = $kat->tampil();
            $no = 1;

            foreach ($rows as $row) { ?>
                <?php $foto = $row['banner_promo']; ?>
                <div class="item_promo">
                    <img src="promo/<?php echo $foto; ?>" alt="" width="500" height="200">
                    <p class="nama"><?php echo $row['judul_promo']; ?></p>
                    <p class="harga"><?php echo $row['masa_berlaku']; ?></p>
                </div>
            <?php
                $no++;
            }
            ?>
        </div>
    </div>
</body>

</html>