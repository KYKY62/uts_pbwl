<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/assets/css/style.css">
    <title>Tambah Produk</title>
</head>

<body>
    <h2>Tambah Produk</h2>
    <?php
    $kat = new App\Pembeli;
    $rowPromo = $kat->tampilPromo();
    $rowCategory = $kat->tampilCategory();
    ?>

    <form action="pembeli_proses.php" method="post">
        <table>
            <tr>
                <td>Promo</td>
                <td>
                    <select id="pembeli_id_promo" name="pembeli_id_promo">
                        <option>Promo...</option>
                        <?php foreach ($rowPromo as $row) {
                            echo "<option value=$row[id]>$row[judul_promo]</option>";
                        }  ?>
                </td>

            </tr>
            <tr>
                <td>Produk</td>
                <td>
                    <select id="pembeli_id_cat" name="pembeli_id_cat">
                        <option>Produk...</option>
                        <?php foreach ($rowCategory as $row) {
                            echo "<option value=$row[cat_id]>$row[cat_name]</option>";
                        }  ?>
                </td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td><textarea name="pembeli_title" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Jumlah Produk</td>
                <td><textarea name="jumlah_beli" id="" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="btn_simpan" value="SIMPAN" class="btn"></td>
            </tr>
        </table>
    </form>
</body>

</html>