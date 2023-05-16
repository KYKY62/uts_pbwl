<?php

use App\Pembeli;

$id = $_GET['id'];
$kat = new App\Pembeli();
$option = new App\Pembeli();

$row = $kat->edit($id);
$rowPromo = $kat->tampilPromo();
$rowCategory = $kat->tampilCategory();
?>

<h2>Edit Category</h2>

<form action="pembeli_proses.php" method="post">
    <input type="hidden" name="pembeli_id" value="<?php echo $row['pembeli_id']; ?>">
    <table>
        <tr>
            <td>Promo</td>
            <td>
                <select id="pembeli_id_promo" name="pembeli_id_promo">
                    <?php foreach ($rowPromo as $promo) {
                        $selected = ($promo['id'] == $row['pembeli_id_promo']) ?
                            "selected" : "";
                        echo "<option value='" . $promo['id'] . "' $selected>" . $promo['judul_promo'] . "</option>";
                    } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Produk</td>
            <td>
                <select id="pembeli_id_cat" name="pembeli_id_cat">
                    <?php foreach ($rowCategory as $category) {
                        $selected = ($category['cat_id'] == $row['pembeli_id_cat']) ? 'selected' : '';
                        echo "<option value='" . $category['cat_id'] . "' $selected>" . $category['cat_name'] . "</option>";
                    } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td><textarea name="pembeli_title" id="" cols="30" rows="10"><?php echo $row["pembeli_title"]; ?></textarea></td>

        </tr>
        <tr>
            <td>Jumlah Produk</td>
            <td><textarea name="jumlah_beli" id="" cols="30" rows="10"><?php echo $row["jumlah_beli"]; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>