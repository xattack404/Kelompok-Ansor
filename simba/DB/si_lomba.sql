-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 04:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_lomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `atlet`
--

CREATE TABLE `atlet` (
  `nik_id` varchar(18) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten_kota` varchar(20) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atlet`
--

INSERT INTO `atlet` (`nik_id`, `nama`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `kecamatan`, `kabupaten_kota`, `provinsi`, `warga_negara`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
('12', 'Tahajjudi Fajri', '2020-06-04', 'L', 'dd', 'Paiton', 'Prob', 'Jatim', 'WNI', 'andi@gmail.com', '3213123153453', '2020-05-31 04:53:54', '2020-05-31 04:53:54'),
('1212', 'aa', '2020-06-09', 'L', 'aa', 'aa', 'aa', 'aa', 'WNI', 'a@a.com', '222', '2020-06-09 11:02:46', '2020-06-09 11:02:46'),
('3243', 'adi irawan', '2020-05-20', 'L', 'af', 'Paiton', 'Prob', 'Jatim', 'WNI', 'lindadewilinda@gmail.com', '122', '2020-05-31 04:56:34', '2020-05-31 04:56:34'),
('33', 'ss', '2020-06-11', 'P', 'ss', 'ss', 'ss', 'ss', 'WNI', 's@s.com', '2332', '2020-06-09 11:02:47', '2020-06-09 11:02:47'),
('3513120608980001', 'Lambang Arinanda Hadi', '2020-05-14', 'L', 'h', 'Paiton', 'Probolinggo', 'Jawa Timur', 'WNI', 'dr.naba.upptn@gmail.com', '3213123153453', '2020-05-31 03:56:26', '2020-05-31 03:56:26'),
('3544545', 'ridwan', '2020-06-01', 'L', 'paiton', 'paiton', 'prob', 'jatim', 'WNI', 'a@a.com', '222', '2020-06-15 00:02:54', '2020-06-15 00:02:54'),
('56563225677', 'regita', '2020-06-03', 'P', 'jupit', 'mars', 'mars', 'mars', 'WNI', 'c@a.com', '42267777755', '2020-06-15 00:02:54', '2020-06-15 00:02:54'),
('56767755', 'fandik', '2020-06-02', 'L', 'taoh', 'jateng', 'indo', 'jabar', 'WNI', 's@s.com', '7777555', '2020-06-15 00:02:54', '2020-06-15 00:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `atlet_aktif`
--

CREATE TABLE `atlet_aktif` (
  `id` int(5) NOT NULL,
  `koordinator_id` int(5) DEFAULT NULL,
  `nik_id` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atlet_aktif`
--

INSERT INTO `atlet_aktif` (`id`, `koordinator_id`, `nik_id`) VALUES
(8, NULL, '3513120608980001'),
(9, NULL, '12'),
(10, NULL, '3243'),
(12, 1, '1212'),
(13, 1, '33'),
(16, 4, '3544545'),
(17, 4, '56767755'),
(18, 4, '56563225677');

-- --------------------------------------------------------

--
-- Table structure for table `cabang_olahraga`
--

CREATE TABLE `cabang_olahraga` (
  `id` int(5) NOT NULL,
  `nama_or` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `kategori` int(5) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `foto` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang_olahraga`
--

INSERT INTO `cabang_olahraga` (`id`, `nama_or`, `url`, `deskripsi`, `kategori`, `tanggal_pelaksanaan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Sepak Bola', '', 'sepak bola adalah', 1, '2020-05-27', 'lomba-20200505124324.JPG', '2020-05-03 21:29:38', '2020-05-05 05:43:24'),
(5, 'kasti', 'kasti', 'akdfjafn', 5, '2020-05-22', 'lomba-20200601040303.jpg', '2020-05-09 05:12:53', '2020-05-31 21:03:03'),
(6, 'lari cepat', 'lari-cepat', 'kk', 1, '2020-05-22', 'lomba-20200509020525.jpg', '2020-05-09 07:05:25', '2020-05-09 07:05:25'),
(7, 'Voli Bola', 'voli-bola', 'klkkllk', 5, '2020-05-21', 'lomba-20200509020700.jpg', '2020-05-09 07:07:00', '2020-05-09 07:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_event`
--

CREATE TABLE `detail_event` (
  `id` int(5) NOT NULL,
  `atlet_aktif_id` int(11) NOT NULL,
  `sub_kategori_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembayaran`
--

CREATE TABLE `detail_pembayaran` (
  `id` int(5) NOT NULL,
  `no_invoice` int(5) NOT NULL,
  `atlet_aktif_id` int(5) NOT NULL,
  `kategori` int(5) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembayaran`
--

INSERT INTO `detail_pembayaran` (`id`, `no_invoice`, `atlet_aktif_id`, `kategori`, `harga`) VALUES
(6, 6, 8, 1, '50000'),
(7, 7, 9, 5, '10000'),
(8, 8, 10, 1, '50000'),
(10, 10, 12, 1, '50000'),
(11, 10, 13, 5, '10000'),
(14, 13, 16, 1, '50000'),
(15, 13, 17, 1, '50000'),
(16, 13, 18, 5, '10000');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `harga`) VALUES
(1, 'Pemula', '50000'),
(5, 'Dewasa', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE `komunitas` (
  `id` int(5) NOT NULL,
  `nama_komunitas` varchar(20) NOT NULL,
  `nama_koordinator` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten_kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`id`, `nama_komunitas`, `nama_koordinator`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `kecamatan`, `kabupaten_kota`, `provinsi`, `warga_negara`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Reinforce', 'Lambang Arinanda', '2020-06-09', 'L', 'Sumberanyar', 'Paiton', 'Probolinggo', 'Jawa Timur', 'WNI', 'dr.naba.upptn@gmail.com', '082331833848', '2020-06-09 11:02:46', '2020-06-09 11:02:46'),
(2, 'ronika', 'rahmat', '2020-06-08', 'L', 'sumberanyar', 'Paiton', 'Probolinggo', 'Jatim', 'WNI', 'oyong_hudae@yahoo.com', '3333233232333', '2020-06-15 00:01:46', '2020-06-15 00:01:46'),
(3, 'ronika', 'rahmat', '2020-06-08', 'L', 'sumberanyar', 'Paiton', 'Probolinggo', 'Jatim', 'WNI', 'oyong_hudae@yahoo.com', '3333233232333', '2020-06-15 00:02:28', '2020-06-15 00:02:28'),
(4, 'ronika', 'rahmat', '2020-06-08', 'L', 'sumberanyar', 'Paiton', 'Probolinggo', 'Jatim', 'WNI', 'oyong_hudae@yahoo.com', '3333233232333', '2020-06-15 00:02:53', '2020-06-15 00:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `koordinasi`
--

CREATE TABLE `koordinasi` (
  `id` int(5) NOT NULL,
  `value` enum('Individu','Komunitas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koordinasi`
--

INSERT INTO `koordinasi` (`id`, `value`) VALUES
(1, 'Individu'),
(2, 'Komunitas');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_invoice` int(5) NOT NULL,
  `total_bayar` varchar(10) NOT NULL,
  `nama_bank` varchar(20) DEFAULT NULL,
  `no_rekening` varchar(20) DEFAULT NULL,
  `nama_pemilik` varchar(40) DEFAULT NULL,
  `bukti_pembayaran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no_invoice`, `total_bayar`, `nama_bank`, `no_rekening`, `nama_pemilik`, `bukti_pembayaran`) VALUES
(6, '50000', NULL, NULL, NULL, NULL),
(7, '10000', NULL, NULL, NULL, NULL),
(8, '50000', NULL, NULL, NULL, NULL),
(9, '50000', NULL, NULL, NULL, NULL),
(10, '60101', 'bni', '123', 'rahmat', 'buktibyr-20200615075640.jpg'),
(13, '110101', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(5) NOT NULL,
  `kode_pendaftaran` varchar(50) DEFAULT NULL,
  `koordinator_id` int(5) DEFAULT NULL,
  `nik_id` varchar(18) NOT NULL,
  `koordinasi_id` int(5) NOT NULL,
  `pendaftaran_status_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `kode_pendaftaran`, `koordinator_id`, `nik_id`, `koordinasi_id`, `pendaftaran_status_id`) VALUES
(3, 'REG-3513120608980001-20200531105626', NULL, '3513120608980001', 1, 1),
(4, 'REG-12-20200531115355', NULL, '12', 1, 1),
(5, 'REG-3243-20200531115634', NULL, '3243', 1, 1),
(7, 'REG-20200609060246', 1, '1212', 2, 1),
(8, 'REG-20200609060246', 1, '33', 2, 1),
(11, 'REG-20200615070254', 4, '3544545', 2, 1),
(12, 'REG-20200615070254', 4, '56767755', 2, 1),
(13, 'REG-20200615070254', 4, '56563225677', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_status`
--

CREATE TABLE `pendaftaran_status` (
  `id` int(5) NOT NULL,
  `value` enum('Pending','Proses','Di Verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_status`
--

INSERT INTO `pendaftaran_status` (`id`, `value`) VALUES
(1, 'Pending'),
(2, 'Proses'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id` int(5) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `nama_subkat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id`, `kategori_id`, `nama_subkat`) VALUES
(1, 5, 'Sprint 100m'),
(4, 1, 'Sprint 200mm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `no_hp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@simba.com', NULL, '082331833848', '$2y$10$i.Xi4ecFHgvgMEsl5wM3Z.ewG1UKQyLYFCb729ATeeNr/UbtgXmnS', NULL, '2020-04-28 02:43:45', '2020-04-28 02:43:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`nik_id`);

--
-- Indexes for table `atlet_aktif`
--
ALTER TABLE `atlet_aktif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `koordinator_id` (`koordinator_id`),
  ADD KEY `nik_id` (`nik_id`);

--
-- Indexes for table `cabang_olahraga`
--
ALTER TABLE `cabang_olahraga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atlet_aktif_id` (`atlet_aktif_id`),
  ADD KEY `sub_kategori_id` (`sub_kategori_id`);

--
-- Indexes for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_invoice` (`no_invoice`),
  ADD KEY `atlet_aktif_id` (`atlet_aktif_id`),
  ADD KEY `kategori_id` (`kategori`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koordinasi`
--
ALTER TABLE `koordinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_invoice`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `koordinator_id` (`koordinator_id`),
  ADD KEY `nik_id` (`nik_id`),
  ADD KEY `koordinasi_id` (`koordinasi_id`),
  ADD KEY `pendaftaran_status_id` (`pendaftaran_status_id`);

--
-- Indexes for table `pendaftaran_status`
--
ALTER TABLE `pendaftaran_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atlet_aktif`
--
ALTER TABLE `atlet_aktif`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cabang_olahraga`
--
ALTER TABLE `cabang_olahraga`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_event`
--
ALTER TABLE `detail_event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `koordinasi`
--
ALTER TABLE `koordinasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `no_invoice` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendaftaran_status`
--
ALTER TABLE `pendaftaran_status`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atlet_aktif`
--
ALTER TABLE `atlet_aktif`
  ADD CONSTRAINT `atlet_aktif_ibfk_1` FOREIGN KEY (`nik_id`) REFERENCES `atlet` (`nik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atlet_aktif_ibfk_2` FOREIGN KEY (`koordinator_id`) REFERENCES `komunitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD CONSTRAINT `detail_event_ibfk_1` FOREIGN KEY (`sub_kategori_id`) REFERENCES `sub_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_event_ibfk_2` FOREIGN KEY (`atlet_aktif_id`) REFERENCES `atlet_aktif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD CONSTRAINT `detail_pembayaran_ibfk_1` FOREIGN KEY (`atlet_aktif_id`) REFERENCES `atlet_aktif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembayaran_ibfk_2` FOREIGN KEY (`no_invoice`) REFERENCES `pembayaran` (`no_invoice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembayaran_ibfk_3` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`koordinator_id`) REFERENCES `komunitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`pendaftaran_status_id`) REFERENCES `pendaftaran_status` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ibfk_3` FOREIGN KEY (`nik_id`) REFERENCES `atlet` (`nik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ibfk_4` FOREIGN KEY (`koordinasi_id`) REFERENCES `koordinasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
