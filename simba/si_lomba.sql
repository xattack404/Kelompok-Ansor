-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 03:42 AM
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
('122121221333', 'apoy', '2020-07-22', 'L', 'wqw', 'Grujukan', 'Probolinggo', 'Jatim', 'WNI', 'admin@simba.com', '1', '2020-07-02 18:31:24', '2020-07-02 18:31:24'),
('2233223', 'qqqq', '2020-07-21', 'L', 'qwww', 'Paiton', 'Probolinggo', 'Jatim', 'WNI', 'admin@simba.com', '3333233232333', '2020-07-02 22:30:25', '2020-07-02 22:30:25'),
('36728826288221', 'Wahid', '1988-06-09', 'L', 'jalan tangkuban', 'kedopok', 'probolinggo', 'jawa timur', 'WNI', 'wahis@gmail.com', '081728822722', '2020-07-02 03:51:56', '2020-07-02 03:51:56'),
('3819928919911', 'hari tanu', '1995-07-04', 'L', 'kedompak', 'kedopok', 'probolinggo', 'jawa timur', 'WNI', 'hari@gmail.com', '0828893821', '2020-07-02 03:11:00', '2020-07-02 03:11:00'),
('389478192822', 'tahajjudin fajri', '1999-12-28', 'L', 'JL Mangga', 'Kedopok', 'bondowoso', 'Jawa Timur', 'WNI', 'tahajjudin28@gmail.com', '082330044949', '2020-07-02 03:44:16', '2020-07-02 03:44:16'),
('3918829202002', 'joko', '1998-08-27', 'L', 'jl cendrawasih', 'kademnagan', 'probolinggo', 'jawa timur', 'WNI', 'joko@gmail.com', '0828377182881', '2020-07-02 03:11:00', '2020-07-02 03:11:00'),
('3990929202922', 'Rohman', '2002-05-09', 'L', 'JL Durian', 'kedopok', 'probolinggo', 'jawa timur', 'WNI', 'rohman@gmail.com', '08273837393733', '2020-07-02 03:51:56', '2020-07-02 03:51:56');

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
(26, 6, '3819928919911'),
(27, 6, '3918829202002'),
(29, NULL, '389478192822'),
(32, NULL, '122121221333'),
(34, NULL, '2233223');

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
(11, 'Lomba Lari Jarak Menengah', 'lomba-lari-jarak-menengah', 'lomba walikota probolinggo', 5, '2020-08-08', 'lomba-20200702095733.jpg', '2020-07-02 02:57:33', '2020-07-02 02:57:33'),
(13, 'lomb lari 201 M', 'lomb-lari-201-m', 'lomba walikota bondowoso', 5, '2020-08-05', 'lomba-20200702015546.jpg', '2020-07-02 02:59:20', '2020-07-02 06:55:46'),
(14, 'Lomba Lari cepat 2', 'lomba-lari-cepat-2', 'lomba lari walkot probolinggo', 5, '2020-08-08', 'lomba-20200702105835.jpg', '2020-07-02 03:58:35', '2020-07-02 03:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `detail_event`
--

CREATE TABLE `detail_event` (
  `id` int(5) NOT NULL,
  `atlet_aktif_id` int(11) NOT NULL,
  `sub_kategori_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_event`
--

INSERT INTO `detail_event` (`id`, `atlet_aktif_id`, `sub_kategori_id`) VALUES
(14, 29, 1);

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
(24, 17, 26, 5, '10000'),
(25, 17, 27, 5, '10000'),
(27, 19, 29, 5, '10000'),
(30, 21, 32, 5, '10000'),
(32, 23, 34, 8, '20000');

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
(5, 'Dewasa', '10000'),
(8, 'veteran', '20000');

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
(6, 'Golden ways', 'mario teguh', '1987-11-04', 'L', 'JL Mangga', 'Kedopok', 'Probolinggo', 'Jawa Timur', 'WNI', 'teguh@gmail.com', '082738818827', '2020-07-02 03:10:58', '2020-07-02 03:10:58');

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
(17, '20101', NULL, NULL, NULL, NULL),
(19, '10000', 'BRI', '092829922', 'tahajjudin', 'buktibyr-20200702104645.jpg'),
(21, '10000', NULL, NULL, NULL, NULL),
(22, '20000', NULL, NULL, NULL, NULL),
(23, '20000', NULL, NULL, NULL, NULL);

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
(21, 'REG-20200702101100', 6, '3819928919911', 2, 1),
(22, 'REG-20200702101100', 6, '3918829202002', 2, 1),
(24, 'REG-389478192822-20200702104418', NULL, '389478192822', 1, 3),
(27, 'REG-122121221333-20200703013124', NULL, '122121221333', 1, 1),
(29, 'REG-2233223-20200703053026', NULL, '2233223', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_status`
--

CREATE TABLE `pendaftaran_status` (
  `id` int(5) NOT NULL,
  `value` enum('Pending','Proses','Di Verifikasi','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_status`
--

INSERT INTO `pendaftaran_status` (`id`, `value`) VALUES
(1, 'Pending'),
(2, 'Proses'),
(3, 'Di Verifikasi'),
(4, 'Ditolak');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cabang_olahraga`
--
ALTER TABLE `cabang_olahraga`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_event`
--
ALTER TABLE `detail_event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `no_invoice` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pendaftaran_status`
--
ALTER TABLE `pendaftaran_status`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
