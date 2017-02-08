-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2017 pada 01.10
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_strip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_strip`
--

CREATE TABLE `t_strip` (
  `id` int(200) NOT NULL,
  `Profil` varchar(10000) NOT NULL,
  `News` varchar(10000) NOT NULL,
  `Service` varchar(10000) NOT NULL,
  `Guest` varchar(10000) NOT NULL,
  `Portofolio` varchar(10000) NOT NULL,
  `Contact` varchar(10000) NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_strip`
--

INSERT INTO `t_strip` (`id`, `Profil`, `News`, `Service`, `Guest`, `Portofolio`, `Contact`, `Gambar`) VALUES
(1, 'Profil Perusahaan<br>\r\nPerusahaan ini bergerak dibidang properti karena memiliki potensi yang terus merangkak naik. Properti sendiri memiliki nilai jual yang terus meningkat bahkan dalam hitungan bulan saja suatu bangunan atau properti bisa mengalami kenaikan harga dan kami mempunyai visi misi.<br><br><br>\r\n\r\nVisi<br>\r\nMenjual properti kualitas terbaik dengan harga terjangkau.\r\n<br>\r\nMisi<br>\r\nMembuat semua orang mendapat rumah maupun properti yang diingkan.', 'SELAMAT DATANG DI KRS GROUP', 'Service<br>\r\n\r\nKRS adalah sebuah konsultan spesialis real estate yang berbasis di Indonesia menyediakan untuk klien berbagai operator layanan konsultasi di seluruh kawasan Asia Pasifik:<br>\r\n\r\n1. pembangunan strategis dan nasihat investasi.<br>\r\n2. strategi perencanaan penggunaan lahan.<br>\r\n3. perencanaan manajemen aset perusahaan jasa konsultasi kerja.<br>\r\nKRS menyarankan klien pada strategi yang paling tepat dalam kaitannya dengan singkat mereka, menengah dan jangka panjang real estate persyaratan, kepentingan atau investasi dalam konteks penggunaan bisnis tertentu atau lingkungan atau pengembangan perusahaan secara keseluruhan atau rencana keuangan. jasa strategis umum termasuk penggunaan peluang regenerasi analisis tanah dan rekomendasi, penilaian lokasional, strategi kerja, konservasi dan kritis penilaian.', 'Rincian Guest Book :<br>\r\n    1.instruksi koneksi wifi.<br>\r\n    2.Periksa prosedur.<br>\r\n    3.instruksi darurat untuk mematikan alarm air / gas / asap.<br>\r\n    4.Rincian kontak lokal untuk pemeliharaan panggilan keluar.<br>\r\n    5.Rincian kontak untuk terdekat dokter / dokter darurat / rumah sakit / apotek / dokter hewan.<br>\r\n    6.Rincian kontak untuk polisi setempat.<br>\r\n    7.Rincian kontak untuk konsulat.<br>\r\n    8.Peta daerah lokal dan regional.<br>\r\n    9.ATM terdekat.<br>', 'Portofolio', 'Kontak', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_strip`
--
ALTER TABLE `t_strip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_strip`
--
ALTER TABLE `t_strip`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
