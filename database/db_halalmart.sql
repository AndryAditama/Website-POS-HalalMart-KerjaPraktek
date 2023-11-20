-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2023 pada 09.46
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_halalmart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(20) CHARACTER SET latin1 NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `poin_bonus` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `no_transaksi`, `idbarang`, `jumlah`, `poin_bonus`, `harga_total`, `tanggal`) VALUES
(171, '202204050001', 73, 1, 20, 60000, '2022-04-05 09:44:25'),
(172, '202204050002', 81, 1, 20, 55000, '2022-04-05 11:28:05'),
(173, '202204050002', 73, 1, 20, 60000, '2022-04-05 11:28:05'),
(174, '202204050003', 74, 1, 20, 60000, '2022-04-08 15:29:14'),
(175, '202204050003', 41, 1, 3, 17000, '2022-04-08 15:29:14'),
(176, '202204170001', 60, 1, 100, 260000, '2022-04-17 14:28:57'),
(177, '202204170001', 55, 1, 25, 75000, '2022-04-17 14:28:57'),
(178, '202204170001', 90, 1, 6, 20000, '2022-04-17 14:28:57'),
(179, '202204170002', 54, 1, 20, 60000, '2022-04-18 09:19:59'),
(180, '202204170002', 36, 1, 10, 28000, '2022-04-18 09:19:59'),
(181, '202204170002', 27, 1, 5, 20000, '2022-04-18 09:19:59'),
(182, '202204180001', 92, 1, 5, 17000, '2022-04-18 09:23:12'),
(183, '202204220001', 74, 1, 20, 60000, '2022-04-22 08:22:56'),
(184, '202204220001', 27, 1, 5, 20000, '2022-04-22 08:22:56'),
(185, '202204220002', 76, 1, 0, 42000, '2022-04-22 08:29:16'),
(186, '202204220003', 27, 1, 5, 20000, '2022-04-22 08:31:38'),
(187, '202204220003', 93, 2, 16, 70000, '2022-04-22 08:31:38'),
(188, '202204220003', 40, 2, 6, 34000, '2022-04-22 08:31:38'),
(189, '202204220004', 35, 1, 0, 75000, '2022-04-22 08:34:09'),
(190, '202205070001', 92, 1, 5, 17000, '2022-05-07 09:43:43'),
(191, '202205070002', 74, 1, 20, 60000, '2022-05-07 16:10:17'),
(192, '202205070002', 76, 1, 10, 36000, '2022-05-07 16:10:17'),
(193, '202205070002', 70, 1, 20, 75000, '2022-05-07 16:10:17'),
(194, '202205070003', 74, 1, 20, 60000, '2022-05-07 16:12:29'),
(195, '202205070003', 92, 1, 5, 17000, '2022-05-07 16:12:29'),
(196, '202205070003', 36, 1, 10, 28000, '2022-05-07 16:12:29'),
(197, '202205120001', 83, 1, 10, 35000, '2022-05-12 10:17:00'),
(198, '202205150001', 58, 1, 0, 70000, '2022-05-15 13:25:05'),
(199, '202206060001', 59, 1, 0, 45000, '2022-06-06 07:14:07'),
(200, '202206060002', 79, 1, 15, 40000, '2022-06-06 07:14:57'),
(201, '202206060002', 73, 1, 20, 60000, '2022-06-06 07:14:57'),
(202, '202205170001', 54, 1, 0, 75000, '2022-05-17 08:16:49'),
(203, '202205200001', 63, 1, 13, 50000, '2022-05-20 11:23:37'),
(204, '202205220001', 66, 1, 25, 80000, '2022-05-22 15:06:02'),
(205, '202205220001', 56, 1, 40, 100000, '2022-05-22 15:06:02'),
(206, '202205270001', 73, 1, 0, 75000, '2022-05-27 13:18:52'),
(207, '202205300001', 55, 1, 25, 75000, '2022-05-30 18:20:11'),
(208, '202205310001', 59, 1, 8, 35000, '2022-05-31 09:53:26'),
(209, '202206010001', 73, 1, 20, 60000, '2022-06-01 08:54:19'),
(210, '202206010001', 56, 1, 40, 100000, '2022-06-01 08:54:19'),
(211, '202206010002', 63, 1, 13, 50000, '2022-06-01 15:41:13'),
(212, '202206030001', 84, 1, 8, 30000, '2022-06-03 12:38:40'),
(213, '202206040001', 36, 1, 10, 28000, '2022-06-04 08:39:17'),
(214, '202206040001', 85, 1, 30, 105000, '2022-06-04 08:39:17'),
(215, '202206050001', 79, 1, 0, 50000, '2022-06-05 10:20:58'),
(216, '202206050002', 84, 1, 8, 30000, '2022-06-05 13:25:28'),
(217, '202206050002', 83, 1, 10, 35000, '2022-06-05 13:25:28'),
(218, '202206050003', 27, 1, 5, 20000, '2022-06-05 15:10:25'),
(219, '202206050003', 74, 1, 20, 60000, '2022-06-05 15:10:25'),
(220, '202206050003', 73, 1, 20, 60000, '2022-06-05 15:10:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_toko`
--

CREATE TABLE `profil_toko` (
  `id_profil` int(2) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_toko`
--

INSERT INTO `profil_toko` (`id_profil`, `nama_toko`, `alamat`, `nama_pemilik`, `no_hp`, `email`, `facebook`, `instagram`, `logo`) VALUES
(1, 'Halal Mart', 'Jl. H. Agus Salim 54. Pamekasan', 'FREYA ', '0852320334534', 'halalmart_pmk@gmail.com', 'FB', 'IG', '1700468818655b185231925.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_member` int(11) NOT NULL,
  `harga_normal` int(11) NOT NULL,
  `poin` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `stok`, `harga_member`, `harga_normal`, `poin`, `gambar`) VALUES
(27, '20/5', 'Minyak Zaitun', 6, 20000, 24000, 5, '5a3a256a0f8285.78345796151376010606357039.png'),
(29, '32/3', 'Pasta Gigi Herbal Propolis', 10, 32000, 36000, 3, '16485578816242ff390bd43.png'),
(35, '60/20', 'Mengkudu Kapsul', 8, 60000, 75000, 20, '1650878231626667173c9ab.png'),
(36, '28/30', 'Minyak Herba Sinergi', 2, 28000, 45000, 10, ''),
(40, '20/17', 'Pasta Gigi Herbal Cengkeh', 6, 17000, 20000, 3, '16532055786289ea4a1fcab.png'),
(41, '17/35', 'Pasta Gigi Herbal HPAI', 19, 17000, 20000, 3, '16532052506289e902daa55.png'),
(45, '80/20', 'Minyak Zaitun Softgel', 6, 80000, 90000, 20, ''),
(46, '20/5', 'Pasta Gigi Herbal Sensitif', 20, 20000, 23000, 5, ''),
(47, '10/2', 'Pasta Gigi Herbal Anak', 9, 10000, 13000, 2, ''),
(48, '75/20', 'Pegagan HS', 5, 75000, 90000, 20, ''),
(49, '140/50', 'Procumin Propolis', 3, 140000, 175000, 50, ''),
(50, '130/50', 'Procumin Rich Vit E', 3, 130000, 160000, 50, ''),
(51, '50/15', 'Promol 12 ECO', 5, 50000, 60000, 15, ''),
(52, '50/20', 'Andrographis Centella', 20, 50000, 70000, 20, ''),
(53, '75/20', 'Biosir', 20, 75000, 90000, 20, ''),
(54, '60/20', 'Day Cream', 18, 60000, 75000, 20, ''),
(55, '70/25', 'Night Cream', 18, 75000, 85000, 25, ''),
(56, '100/40', 'Billberry', 18, 100000, 130000, 40, ''),
(57, '100/30', 'Carnocap', 20, 100000, 120000, 30, ''),
(58, '55/15', 'Centella Tea Sinergi', 19, 55000, 70000, 15, ''),
(59, '35/8', 'Date Syrup Sari Kurma', 18, 35000, 45000, 8, ''),
(60, '260/100', 'Deep Beauty', 9, 260000, 360000, 100, ''),
(61, '120/30', 'Deep Olive', 10, 120000, 150000, 30, ''),
(62, '90/25', 'Kopi 7 Elemen isi 20', 15, 90000, 110000, 25, ''),
(63, '50/13', 'Kopi 7 Elemen isi 10', 18, 50000, 60000, 13, ''),
(64, '100/30', 'Langsingin', 10, 100000, 120000, 30, ''),
(65, '55/20', 'Laurik', 10, 55000, 65000, 20, ''),
(66, '80/25', 'Madu Asli Multiflora', 9, 80000, 100000, 25, ''),
(67, '100/30', 'Madu Asli Premium', 10, 100000, 130000, 30, ''),
(68, '100/30', 'Madu Pahit', 10, 100000, 120000, 30, ''),
(69, '100/30', 'Madu S Jaga', 5, 100000, 120000, 30, ''),
(70, '75/20', 'Magafit', 9, 75000, 90000, 20, ''),
(71, '200/65', 'Deep Squa', 5, 200000, 250000, 65, ''),
(72, '110/40', 'Diabextrac', 5, 110000, 130000, 40, ''),
(73, '60/20', 'Eat Gotta Milk (EGM) Susu Kambing', 14, 60000, 75000, 20, ''),
(74, '60/20', 'Extra Food', 15, 60000, 80000, 20, ''),
(75, '100/40', 'Gamat', 5, 100000, 130000, 40, ''),
(76, '36/10', 'Green Wash Detergent', 13, 36000, 42000, 10, ''),
(77, '24/6', 'Green Wash Softener', 10, 24000, 29000, 6, ''),
(78, '75/20', 'Ginextrac', 5, 75000, 90000, 20, ''),
(79, '40/15', 'Habbassauda', 8, 40000, 50000, 15, ''),
(80, '85/20', 'Habbatussauda Softgel', 10, 85000, 95000, 20, ''),
(81, '55/20', 'Harumi', 4, 55000, 70000, 20, ''),
(82, '180/45', 'Hibis', 3, 180000, 225000, 45, ''),
(83, '35/10', 'Body Wash', 3, 35000, 40000, 10, ''),
(84, '30/8', 'HNI Shampoo', 6, 30000, 35000, 8, ''),
(85, '105/30', 'HPAI Coffee', 5, 105000, 125000, 30, ''),
(86, '95/30', 'Janntea Hot & Cold', 4, 95000, 115000, 30, ''),
(87, '75/20', 'Kelosin', 6, 75000, 90000, 20, ''),
(88, '110/40', 'N-Green', 3, 110000, 130000, 40, ''),
(89, '75/20', 'Rosella HS', 6, 75000, 90000, 20, ''),
(90, '20/6', 'Sabun Kolagen', 19, 20000, 25000, 6, ''),
(91, '17/5', 'Sabun Madu', 20, 17000, 20000, 5, ''),
(92, '17/5', 'Sabun Propolis', 17, 17000, 20000, 5, ''),
(93, '35/8', 'Sari Kurma', 8, 35000, 45000, 8, ''),
(94, '60/20', 'Siena', 4, 60000, 75000, 20, ''),
(95, '250/100', 'Stimfibre', 2, 250000, 350000, 100, ''),
(96, '90/30', 'Truson', 10, 90000, 110000, 30, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diskon`
--

CREATE TABLE `tb_diskon` (
  `id_diskon` int(11) NOT NULL,
  `diskon` varchar(20) NOT NULL,
  `poin_diskon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_diskon`
--

INSERT INTO `tb_diskon` (`id_diskon`, `diskon`, `poin_diskon`) VALUES
(1, '20000', '200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelamin`
--

CREATE TABLE `tb_kelamin` (
  `id_kelamin` int(11) NOT NULL,
  `kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelamin`
--

INSERT INTO `tb_kelamin` (`id_kelamin`, `kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` varchar(50) NOT NULL,
  `nama_member` varchar(200) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `poin` int(11) NOT NULL,
  `avo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama_member`, `kelamin`, `alamat`, `no_hp`, `poin`, `avo`) VALUES
('02941476', 'Bambang Asyari', 'Laki-laki', 'Desa Sentol', '089', 77, '2022-04-05 09:45:39'),
('0300839', 'Kiki Novita', 'Perempuan', 'Panempan', '079865765', 78, '2022-05-31 18:39:07'),
('03008426', 'Nurhadi P', 'Laki-laki', 'Panempan', '0', 43, '2022-05-20 17:45:07'),
('03092762', 'Muslimatul Aina', 'Perempuan', 'Sopaah', '0', 86, '2022-06-04 20:30:02'),
('03616183', 'Kurniawati', 'Perempuan', 'Jl. Segara', '08', 93, '2022-05-07 16:11:20'),
('03645020', 'Dewi Suhartatik', 'Perempuan', 'Panempan', '0', 156, '2022-06-04 20:32:40'),
('03660133', 'Siti Kholifah', 'Perempuan', 'Panempan', '0', 123, '2022-06-04 20:33:31'),
('03676752', 'Fatmawati', 'Perempuan', 'Jl. Gazali', '087', 58, '2022-04-18 09:24:20'),
('03676763', 'Masdirah', 'Perempuan', 'Bugih', '089', 39, '2022-04-22 08:30:45'),
('03729567', 'Hosnol Hotimah', 'Perempuan', 'Jl. Stadion Gg 3', '085', 177, '2022-04-18 09:22:33'),
('03893892', 'Nur Hasanah', 'Perempuan', 'Ceguk', '0', 54, '2022-04-17 14:27:35'),
('03895850', 'Siti Nurjannah', 'Perempuan', 'Jl. Cokroatmojo 56', '0', 80, '2022-04-05 09:43:58'),
('03924234', 'Adi Putra', 'Laki-laki', 'Jl. Sersan Mesrul Gg 7 No.3', '08976565534', 73, '2022-06-04 20:50:12'),
('04444541', 'Siti rokayyah', 'Perempuan', 'Kaduarah Timur', '0', 163, '2022-04-17 14:30:33'),
('1123', 'KHALIFAH', 'Perempuan', 'Jl. H. Gazali 105', '089245345232', 19, '2022-05-17 17:45:07'),
('121', 'Hotimah', 'Perempuan', 'Jl. Masjid Bagandan N0.20', '20', 59, '2022-05-10 17:45:07'),
('1214', 'admin', 'Perempuan', 'Jl. Gazali 105 Jungcangcang', '1234567789', 40, '2022-05-10 17:45:07'),
('34555', 'HASAN', 'Laki-laki', 'Jl. H Gazali 20A', '09798678', 60, '2022-05-19 17:45:07'),
('454', 'Hartono', 'Laki-laki', 'Jl. Brawijaya 45', '098768', 151, '2022-05-08 17:45:07'),
('90223', 'SUFIATUN', 'Perempuan', 'Jl. H Gazali 57', '7897897', 175, '2022-05-01 17:45:07'),
('999999999999999', 'zzzz', 'Laki-laki', '-', '-', 0, '2022-05-12 17:45:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `pengeluaran` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`id_pengeluaran`, `pengeluaran`, `jumlah`, `tanggal`) VALUES
(1, 'restok barang', 200000, '2022-03-24'),
(2, 'kebutuhan toko', 300000, '2022-03-24'),
(3, 'bahan', 100000, '2022-03-24'),
(8, 'bahan pokok', 400000, '2022-03-24'),
(21, 'salam', 500000, '2022-03-24'),
(24, 'kebutuhan pribadi', 50000, '2022-03-17'),
(25, 'kebutuhan pribadi', 5000000, '2022-03-26'),
(26, 'beli beli', 200000, '2022-05-28'),
(27, 'liburan', 200000, '2022-05-28'),
(30, 'Upgrade Toko', 5000000, '2022-03-29'),
(32, 'a', 10000, '2022-05-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `notransaksi` varchar(20) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `hargatotal` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `poinbonus` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`notransaksi`, `tanggal_transaksi`, `hargatotal`, `bayar`, `kembalian`, `pelanggan`, `poinbonus`, `admin`, `keterangan`) VALUES
('202204050001', '2022-04-05 09:44:25', 60000, 60000, 0, '03895850', 20, 1, 'Transaksi member'),
('202204050002', '2022-04-05 11:28:05', 115000, 120000, 5000, '02941476', 40, 1, 'Transaksi member'),
('202204050003', '2022-04-08 15:29:14', 57000, 100000, 43000, '02941476', 23, 1, 'Transaksi member + Tukar Poin'),
('202204170001', '2022-04-17 14:28:57', 355000, 360000, 5000, '03893892', 131, 1, 'Transaksi member'),
('202204170002', '2022-04-18 09:19:59', 108000, 110000, 2000, '04444541', 35, 1, 'Transaksi member'),
('202204180001', '2022-04-18 09:23:12', 17000, 17000, 0, '03729567', 5, 1, 'Transaksi member'),
('202204220001', '2022-04-22 08:22:56', 80000, 100000, 20000, '03676752', 25, 1, 'Transaksi member'),
('202204220002', '2022-04-22 08:29:16', 42000, 50000, 8000, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202204220003', '2022-04-22 08:31:38', 124000, 150000, 26000, '03676763', 27, 1, 'Transaksi member'),
('202204220004', '2022-04-22 08:34:09', 75000, 75000, 0, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202205070001', '2022-05-07 09:43:43', 17000, 17000, 0, '03729567', 5, 1, 'Transaksi member'),
('202205070002', '2022-05-07 16:10:17', 171000, 200000, 29000, '03676763', 50, 1, 'Transaksi member'),
('202205070003', '2022-05-07 16:12:29', 85000, 85000, 0, '03616183', 35, 1, 'Transaksi member + Tukar Poin'),
('202205120001', '2022-05-12 10:17:00', 35000, 35000, 0, '0300839', 10, 1, 'Transaksi member'),
('202205150001', '2022-05-15 13:25:05', 70000, 70000, 0, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202205170001', '2022-05-17 08:16:49', 75000, 80000, 5000, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202205200001', '2022-05-20 11:23:37', 30000, 50000, 20000, '03924234', 13, 1, 'Transaksi member + Tukar Poin'),
('202205220001', '2022-05-22 15:06:02', 180000, 200000, 20000, '03660133', 65, 1, 'Transaksi member'),
('202205270001', '2022-05-27 13:18:52', 75000, 75000, 0, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202205300001', '2022-05-30 18:20:11', 75000, 100000, 25000, '03729567', 25, 1, 'Transaksi member'),
('202205310001', '2022-05-31 09:53:26', 35000, 50000, 15000, '03676752', 8, 1, 'Transaksi member'),
('202206010001', '2022-06-01 08:54:19', 140000, 150000, 10000, '03676763', 60, 1, 'Transaksi member + Tukar Poin'),
('202206010002', '2022-06-01 15:41:13', 50000, 50000, 0, '03924234', 13, 1, 'Transaksi member'),
('202206030001', '2022-06-03 12:38:40', 30000, 30000, 0, '04444541', 8, 1, 'Transaksi member'),
('202206040001', '2022-06-04 08:39:17', 133000, 135000, 2000, '02941476', 40, 1, 'Transaksi member'),
('202206050001', '2022-06-05 10:20:58', 50000, 50000, 0, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202206050002', '2022-06-05 13:25:28', 65000, 65000, 0, '0300839', 18, 1, 'Transaksi member'),
('202206050003', '2022-06-05 15:10:25', 120000, 120000, 0, '03893892', 45, 1, 'Transaksi member + Tukar Poin'),
('202206060001', '2022-06-06 07:14:07', 45000, 50000, 5000, '999999999999999', 0, 1, 'Transaksi Non-Member'),
('202206060002', '2022-06-06 07:14:57', 80000, 100000, 20000, '03008426', 35, 1, 'Transaksi member + Tukar Poin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_transaksi` (`no_transaksi`),
  ADD KEY `id_barang` (`idbarang`);

--
-- Indeks untuk tabel `profil_toko`
--
ALTER TABLE `profil_toko`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_kelamin`
--
ALTER TABLE `tb_kelamin`
  ADD PRIMARY KEY (`id_kelamin`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `member` (`pelanggan`) USING BTREE,
  ADD KEY `admin` (`admin`) USING BTREE;

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `profil_toko`
--
ALTER TABLE `profil_toko`
  MODIFY `id_profil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `tb_kelamin`
--
ALTER TABLE `tb_kelamin`
  MODIFY `id_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `barang` FOREIGN KEY (`idbarang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `tb_transaksi` (`notransaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `admin` FOREIGN KEY (`admin`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan` FOREIGN KEY (`pelanggan`) REFERENCES `tb_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
