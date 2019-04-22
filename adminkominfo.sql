-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jul 2018 pada 04.33
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminkominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fungsi`
--

CREATE TABLE `fungsi` (
  `id` int(5) NOT NULL,
  `fungsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fungsi`
--

INSERT INTO `fungsi` (`id`, `fungsi`) VALUES
(1, 'Pengelolaan opini dan aspirasi publik di lingkup pemerintah daerah.'),
(2, 'Pengelolaan informasi untuk mendukung kebijakan nasional dan pemerintah daerah.'),
(3, 'Pelayanan informasi publik.'),
(4, 'Penyediaan konten lintas sektoral dan pengelolaan media komunikasi publik.'),
(5, 'Layanan Hubungan Media.'),
(6, 'Penguatan sumber daya komunikasi publikdan penyediaan akses informasi.'),
(7, 'Layanan infrastruktur dasar Data Center.'),
(8, 'Disaster Recovery Center dan TIK pemerintah daerah.'),
(9, 'Layanan pengembangan intranet dan penggunaan akses internet.'),
(10, 'Layanan pengembangan dan pengelolaan aplikasi generik, spesifik, dan suplemen yang terintegrasi.'),
(11, 'Layanan manajemen data dan informasi e-government.'),
(12, 'Integrasi layanan publik dan kepemerintahan.'),
(13, 'Layanan keamanan informasi e-government.'),
(14, 'Layanan komunikasi intra pemerintah daerah.'),
(15, 'Layanan nama domain dan sub domain bagi lembaga.'),
(16, 'Pelayanan publik dan kegiatan provinsi.'),
(17, 'Pengembangan sumber daya TIK pemerintah daerah dan masyarakat.'),
(18, 'Penyelenggaraan Government Chief Information Officer (GCIO) pemerintah daerah.'),
(19, 'Penyelenggaraan ekosistem TIK smartcity lingkup kabupaten.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginadmin`
--

CREATE TABLE `loginadmin` (
  `username` varchar(24) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loginadmin`
--

INSERT INTO `loginadmin` (`username`, `password`) VALUES
('adminkominfo', '3a944b907438c63e3f6906895ecf7047472870df');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `nama`, `jabatan`, `gambar`) VALUES
(2, 'Drs. BAMBANG SETYAWAN, MM.', 'KEPALA DINAS', 'Man-16-icon.png'),
(4, 'AGUS SUGIANTO ZEIN, M.Si.', 'SEKERTARIS', 'Man-16-icon1.png'),
(8, 'ABD. MALIK R., SE., MM.', 'KABID INFORMASI &amp; KOMUNIKASI PUBLIK', 'Man-16-icon2.png'),
(9, 'TAUFIQURROHMAN, SE., MM.', 'KABID APLIKASI INFORMATIKA', 'Man-16-icon3.png'),
(10, 'Ir. MOCHAMMAD ZAINAL ARIF, M.Si.', 'KABID SUMBER DAYA TIK &amp; STATISTIK', 'Man-16-icon4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(5) NOT NULL,
  `tugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `tugas`) VALUES
(1, 'Melakukan perumusan dan dan pelaksanaan kebijakan, evaluasi, pelaporan, dan bimbingan teknis di bidang komunikasi dan informatika.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(5) NOT NULL,
  `Visi` text NOT NULL,
  `Misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id`, `Visi`, `Misi`) VALUES
(1, 'Terwujudnya Tata Kelola Komunikasi dan Informatika menuju Pemerintahan yang Efektif , Efisien, dan Berorientasi Pelayanan Publik', '1. Meningkatnya Kemampuan Sumber Daya Aparatur Dalam Bidang Teknologi Informasi dan Komunikasi.<br>\r\n2. Meningkatnya Kapasitas Infrastruktur Teknologi Informasi Dan Komunikasi.<br>\r\n3. Meningkatnya Tata Kelola Sistem Informasi untuk Pelayanan Publik.<br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
