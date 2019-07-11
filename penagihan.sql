-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2018 at 08:46 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penagihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `nama`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `bulan_id` int(11) NOT NULL,
  `jumlahBayar` double NOT NULL,
  `kodeSewa` varchar(255) NOT NULL,
  `tglBayar` date NOT NULL,
  `kodeBayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `bulan_id`, `jumlahBayar`, `kodeSewa`, `tglBayar`, `kodeBayar`) VALUES
(2, 1, 500000, 'FdQdUgmMn8A7gVi', '2018-01-09', 'FyobPg4RAmBC9Zh'),
(3, 2, 300000, 'Tb1rIuuy2y0w1Q0', '2017-01-09', 'oPQfzTqXjzUZwxt'),
(4, 2, 300000, 'Tb1rIuuy2y0w1Q0', '2018-01-09', 'tLde6w5M2GcRHjH');

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
(1, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('robymasiver@gmail.com', '$2y$10$DrKGTDYdM/DFxC5DEXVMeOyyfLmm9d1H84.xGCIA6A58l/SDFeHg2', '2018-01-04 23:36:56'),
('robytau0@gmail.com', '$2y$10$LVRj4x/fTCdT3yV9pKTUSOxst4m4c28kKrkhtyXLRK1eFrUzqFvM6', '2018-01-05 04:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `bulan_id` int(11) NOT NULL,
  `bandwith` varchar(255) NOT NULL,
  `statusPetugasPenagihan` tinyint(4) NOT NULL,
  `kodeSewa` varchar(255) NOT NULL,
  `jumlahBayar` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `nohp`, `bulan_id`, `bandwith`, `statusPetugasPenagihan`, `kodeSewa`, `jumlahBayar`, `created_at`, `updated_at`) VALUES
(66, 'Desa Codeta', 'jln islmail Marzuki STMIK Bumigora Mataram', '083129978394', 1, '400 Mbps', 1, 'FdQdUgmMn8A7gVi', 500000, '2018-01-09 10:45:34', '2018-01-09 02:45:13'),
(67, 'Juen', 'Semat', '081909919838', 1, '5', 1, 'Tb1rIuuy2y0w1Q0', 300000, '2018-01-09 07:42:28', '2018-01-08 23:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `pembagianTugas`
--

CREATE TABLE `pembagianTugas` (
  `id` int(11) NOT NULL,
  `staf_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembagianTugas`
--

INSERT INTO `pembagianTugas` (`id`, `staf_id`, `pelanggan_id`) VALUES
(3, 5, 67),
(5, 5, 66);

--
-- Triggers `pembagianTugas`
--
DELIMITER $$
CREATE TRIGGER `ubahStatusPelanggan` AFTER INSERT ON `pembagianTugas` FOR EACH ROW BEGIN
	UPDATE pelanggan SET statusPetugasPenagihan	 = 1
    WHERE id = new.pelanggan_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kodeBayar` varchar(255) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `staf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kodeBayar`, `pelanggan_id`, `staf_id`) VALUES
('FyobPg4RAmBC9Zh', 66, 5),
('oPQfzTqXjzUZwxt', 67, 5),
('tLde6w5M2GcRHjH', 67, 5);

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `nama`, `alamat`, `nohp`, `foto`, `username`, `password`, `role`, `remember_token`, `email`, `created_at`, `update_at`) VALUES
(3, 'Ali Baba', 'jln. Pariwisata Kuta dusun Merendeng', '0832256667890', '1514784951.jpg', 'alibaba', '$2y$10$ozgNTHnxUgL127Se.V3QPuUHXfMfpxeRmZLNef/mcks9IWUhnkCNW', 1, 'z65PlYaJzP8Y6FJg6yplhsAPTBLCNFg3wxoRcFm3ziLF7wZshW8DqB5PbIS7', 'alinew@gmail.com', '2018-01-06 07:26:00', '0000-00-00 00:00:00'),
(5, 'Roby Al Kutairy', 'kuta', '083129978399', '1515131840.png', 'roby', '$2y$10$Z6Zp8WIx2JoZU4YrE1/RY.xTVW/3cz0IYWL4E0RDUlojsuB2yBMBW', 0, 'DNfS6mdSOE6t0RLp6Jo9nCs9JMOECBVj7ZNaI7mODQC6UnXCfLWSBIRPzlZP', 'robyhuzwandar@gmail.com', '2018-01-06 07:26:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rekap`
--
CREATE TABLE `view_rekap` (
`pelangganNama` varchar(255)
,`tglBayar` date
,`bulanMulai` int(11)
,`pelangganId` int(11)
,`pelangganAlamat` varchar(255)
,`jumlahBayar` double
,`bulanNama` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rekapHasil`
--
CREATE TABLE `view_rekapHasil` (
`pelangganNama` varchar(255)
,`bulanMulai` int(11)
,`Januari` double
,`Februari` double
,`Maret` double
,`April` double
,`Mei` double
,`Juni` double
,`Juli` double
,`Agustus` double
,`September` double
,`Oktober` double
,`November` double
,`Desember` double
);

-- --------------------------------------------------------

--
-- Structure for view `view_rekap`
--
DROP TABLE IF EXISTS `view_rekap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rekap`  AS  select `p`.`nama` AS `pelangganNama`,`d`.`tglBayar` AS `tglBayar`,`p`.`bulan_id` AS `bulanMulai`,`p`.`id` AS `pelangganId`,`p`.`alamat` AS `pelangganAlamat`,`d`.`jumlahBayar` AS `jumlahBayar`,`b`.`nama` AS `bulanNama` from (`bulan` `b` left join ((`pembayaran` `pm` left join `pelanggan` `p` on((`p`.`id` = `pm`.`pelanggan_id`))) left join `details` `d` on((`d`.`kodeBayar` = `pm`.`kodeBayar`))) on((`b`.`id` = `d`.`bulan_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_rekapHasil`
--
DROP TABLE IF EXISTS `view_rekapHasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rekapHasil`  AS  select `vr`.`pelangganNama` AS `pelangganNama`,`vr`.`bulanMulai` AS `bulanMulai`,sum(if((`vr`.`bulanNama` = 'Januari'),`vr`.`jumlahBayar`,NULL)) AS `Januari`,sum(if((`vr`.`bulanNama` = 'Februari'),`vr`.`jumlahBayar`,NULL)) AS `Februari`,sum(if((`vr`.`bulanNama` = 'Maret'),`vr`.`jumlahBayar`,NULL)) AS `Maret`,sum(if((`vr`.`bulanNama` = 'April'),`vr`.`jumlahBayar`,NULL)) AS `April`,sum(if((`vr`.`bulanNama` = 'Mei'),`vr`.`jumlahBayar`,NULL)) AS `Mei`,sum(if((`vr`.`bulanNama` = 'Juni'),`vr`.`jumlahBayar`,NULL)) AS `Juni`,sum(if((`vr`.`bulanNama` = 'Juli'),`vr`.`jumlahBayar`,NULL)) AS `Juli`,sum(if((`vr`.`bulanNama` = 'Agustus'),`vr`.`jumlahBayar`,NULL)) AS `Agustus`,sum(if((`vr`.`bulanNama` = 'September'),`vr`.`jumlahBayar`,NULL)) AS `September`,sum(if((`vr`.`bulanNama` = 'Oktober'),`vr`.`jumlahBayar`,NULL)) AS `Oktober`,sum(if((`vr`.`bulanNama` = 'November'),`vr`.`jumlahBayar`,NULL)) AS `November`,sum(if((`vr`.`bulanNama` = 'Desember'),`vr`.`jumlahBayar`,NULL)) AS `Desember` from `view_rekap` `vr` group by `vr`.`pelangganNama` order by `vr`.`pelangganId` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bulan_id` (`bulan_id`),
  ADD KEY `kodeBayar` (`kodeBayar`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bulan_id` (`bulan_id`);

--
-- Indexes for table `pembagianTugas`
--
ALTER TABLE `pembagianTugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staf_id` (`staf_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kodeBayar`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `staf_id` (`staf_id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `pembagianTugas`
--
ALTER TABLE `pembagianTugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`kodeBayar`) REFERENCES `pembayaran` (`kodeBayar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `details_ibfk_3` FOREIGN KEY (`bulan_id`) REFERENCES `bulan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembagianTugas`
--
ALTER TABLE `pembagianTugas`
  ADD CONSTRAINT `pembagianTugas_ibfk_4` FOREIGN KEY (`staf_id`) REFERENCES `staf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembagianTugas_ibfk_5` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
