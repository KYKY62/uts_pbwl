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

    $kat = new App\Kategori;
    $rows = $kat->tampil();

    ?>

    <h2>List Produk</h2>

    <a href="index.php?hal=kat_input" class="btn">Tambah Produk</a>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA Produk</th>
            <th>Harga</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
        $no = 1;
        foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['cat_name']; ?></td>
                <td>Rp.<?php echo $row['cat_text']; ?></td>
                <td><a href="index.php?hal=kat_edit&id=<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td>
                <td><a href="index.php?hal=kat_delete&id=<?php echo $row['cat_id']; ?>" class="btn">Delete</a></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>