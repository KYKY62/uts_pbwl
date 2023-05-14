<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Promo extends Koneksi
{

    public function tampil()
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
}
