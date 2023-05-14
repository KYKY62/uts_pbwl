-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2023 pada 01.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardwarung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_text` varchar(100) NOT NULL,
  `foto_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `cat_text`, `foto_barang`) VALUES
(1, 'Hilo Teen Susu Bubuk Hi-Calcium Coklat 500G', '79.000', 'hilo.jpg'),
(3, 'Ichitan Thai Milk Tea Drink 310Ml', '9.000', 'thai_tea.jpg'),
(4, 'Ichi Ocha Minuman Teh Madu Lemon 350mL', '3.800', 'ichi_ocha.jpg'),
(5, 'Indomie Mi Instan Kari Ayam 72G', '3.100', 'kari_ayam.jpg'),
(6, 'Ultra Teh Kotak Blackcurrant 300Ml', '3.900', 'teh_kotak.jpg'),
(7, 'Frisian Flag Kental Manis Cokelat 545G', '15.700', 'frisian_flag.jpg'),
(13, 'Asahi Sardines Saus Tomat 155G', '9.500', 'sarden_kaleng.jpg'),
(14, 'Indomaret Instant Cup Noodle Ayam Pedas 90G', '7.900', 'instant_cup_ayamPedas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `pembeli_id` int(11) NOT NULL,
  `pembeli_id_post` int(11) NOT NULL,
  `pembeli_title` varchar(100) NOT NULL,
  `pembeli_file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `post_id_cat` int(11) NOT NULL,
  `post_slug` varchar(25) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_text` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_id_pembeli` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_promo`
--

CREATE TABLE `tb_promo` (
  `id` int(10) NOT NULL,
  `banner_promo` varchar(100) NOT NULL,
  `judul_promo` varchar(100) NOT NULL,
  `masa_berlaku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_promo`
--

INSERT INTO `tb_promo` (`id`, `banner_promo`, `judul_promo`, `masa_berlaku`) VALUES
(1, 'promo_1.jpg', 'Promo diskon Hingga 50% Khusus pembayaran menggunakan Akulaku Paylater', '01 May 2023 - 31 May 2023'),
(2, 'promo_2.jpeg', 'Setiap Belanja produk Aqua pilihan senilai Rp42.000,- Dapat potongan Rp5.000', '01 May 2023 - 31 May 2023'),
(3, 'promo_3.jpg', 'Setiap Belanja produk Kao attack senilai Rp50.000,- Dapat Gratis 1 Kao attack fresh up', '04 May 2023 - 16 May 2023'),
(4, 'promo_4.jpg', 'Axis diskon Rp10.000', '06 Mei 2023 - 24 Mei 2023'),
(5, 'promo_5.jpg', 'Setiap Belanja produk Azzura kosmetik senilai Rp100.000,- Dapatkan diskon Rp20.000', '02 May 2023 - 31 May 2023'),
(6, 'promo_6.jpg', 'Setiap pembelian produk Toiletries senilai Rp50.000,- dapatkan diskon Rp10.000', '12 May 2023 - 14 May 2023'),
(7, 'promo_7.jpg', 'Yuk Bikin Kue! Tersedia Beragam Varian Bahan Kue di Klik Indomaret', '01 Jan 2023 - 31 Dec 2023'),
(8, 'promo_8.jpg', 'Beauty & Hair Care Festival diskon hingga 35%', '09 Mei 2023 - 15 Mei 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeks untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`pembeli_id`),
  ADD UNIQUE KEY `photo_id_post` (`pembeli_id_post`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id_cat` (`post_id_cat`),
  ADD UNIQUE KEY `post_id_cat_2` (`post_id_cat`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `album_id_photo` (`product_id_pembeli`);

--
-- Indeks untuk tabel `tb_promo`
--
ALTER TABLE `tb_promo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `pembeli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_promo`
--
ALTER TABLE `tb_promo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD CONSTRAINT `tb_pembeli_ibfk_1` FOREIGN KEY (`pembeli_id_post`) REFERENCES `tb_post` (`post_id`);

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`post_id_cat`) REFERENCES `tb_category` (`cat_id`);

--
-- Ketidakleluasaan untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`product_id_pembeli`) REFERENCES `tb_pembeli` (`pembeli_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
