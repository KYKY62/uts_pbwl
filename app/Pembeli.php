<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Pembeli extends Koneksi
{

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pembeli,tb_category,tb_promo WHERE tb_pembeli.pembeli_id_promo = tb_promo.id && tb_pembeli.pembeli_id_cat = tb_category.cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function tampilPromo()
    {
        $sql = "SELECT * FROM tb_promo";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function tampilCategory()
    {
        $sql = "SELECT * FROM tb_category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $pembeli_id = $_POST['pembeli_id'];
        $pembeli_id_promo = $_POST['pembeli_id_promo'];
        $pembeli_id_cat = $_POST['pembeli_id_cat'];
        $pembeli_title = $_POST['pembeli_title'];
        $jumlah_beli = $_POST['jumlah_beli'];

        $sql = "INSERT INTO tb_pembeli (pembeli_id, pembeli_id_promo,pembeli_id_cat,pembeli_title,jumlah_beli) VALUES (:pembeli_id,:pembeli_id_promo, :pembeli_id_cat,:pembeli_title,:jumlah_beli)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pembeli_id", $pembeli_id);
        $stmt->bindParam(":pembeli_id_promo", $pembeli_id_promo);
        $stmt->bindParam(":pembeli_id_cat", $pembeli_id_cat);
        $stmt->bindParam(":pembeli_title", $pembeli_title);
        $stmt->bindParam(":jumlah_beli", $jumlah_beli);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pembeli WHERE pembeli_id=:pembeli_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pembeli_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pembeli_id = $_POST['pembeli_id'];
        $pembeli_id_promo = $_POST['pembeli_id_promo'];
        $pembeli_id_cat = $_POST['pembeli_id_cat'];
        $pembeli_title = $_POST['pembeli_title'];
        $jumlah_beli = $_POST['jumlah_beli'];

        $sql = "UPDATE tb_pembeli SET pembeli_id_promo=:pembeli_id_promo,pembeli_id_cat=:pembeli_id_cat, pembeli_title=:pembeli_title, jumlah_beli=:jumlah_beli WHERE pembeli_id=:pembeli_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pembeli_id", $pembeli_id);
        $stmt->bindParam(":pembeli_id_promo", $pembeli_id_promo);
        $stmt->bindParam(":pembeli_id_cat", $pembeli_id_cat);
        $stmt->bindParam(":pembeli_title", $pembeli_title);
        $stmt->bindParam(":jumlah_beli", $jumlah_beli);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pembeli WHERE pembeli_id=:pembeli_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pembeli_id", $id);
        $stmt->execute();
    }
}
