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

    <form action="kat_proses.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="cat_name"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><textarea name="cat_text" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto_barang"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_simpan" value="SIMPAN" class="btn"></td>
            </tr>
        </table>
    </form>
</body>

</html>