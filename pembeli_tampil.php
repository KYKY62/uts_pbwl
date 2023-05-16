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
    <?php

    $kat = new App\Pembeli;
    $rows = $kat->tampil();

    ?>

    <h2>Daftar Pembeli</h2>

    <a href="index.php?hal=pembeli_input" class="btn">Tambah Pembeli</a>

    <table>
        <tr>
            <th>NO</th>
            <th>Promo</th>
            <th>Produk</th>
            <th>Nama Pembeli</th>
            <th>Jumlah Produk</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
        $no = 1;
        foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['judul_promo']; ?></td>
                <td><?php echo $row['cat_name']; ?></td>
                <td><?php echo $row['pembeli_title']; ?></td>
                <td><?php echo $row['jumlah_beli']; ?></td>
                <td><a href="index.php?hal=pembeli_edit&id=<?php echo $row['pembeli_id']; ?>" class="btn">Edit</a></td>
                <td><a href="index.php?hal=pembeli_delete&id=<?php echo $row['pembeli_id']; ?>" class="btn">Delete</a></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>