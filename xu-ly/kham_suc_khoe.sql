-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 05:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kham_suc_khoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bac_si_kham`
--

CREATE TABLE `tbl_bac_si_kham` (
  `ma_nv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_bac_si_kham`
--

INSERT INTO `tbl_bac_si_kham` (`ma_nv`, `ho_ten`) VALUES
('nhuntt', 'Nguyễn Thị Thảo Như'),
('thampth', 'Phạm Thị Hồng Thắm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kham_suc_khoe`
--

CREATE TABLE `tbl_kham_suc_khoe` (
  `nam` int(11) NOT NULL,
  `ma_nv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tien_su_benh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `chieu_cao` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `can_nang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bmi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mach` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `huyet_ap` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tl_phan_loai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tuan_hoan_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_tuan_hoan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_tuan_hoan` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ho_hap_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_ho_hap` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_ho_hap` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tieu_hoa_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_tieu_hoa` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_tieu_hoa` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `than_tiet_nieu_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_than_tiet_nieu` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_than_tiet_nieu` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `noi_tiet_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_noi_tiet` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_noi_tiet` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `co_xuong_khop_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_co_xuong_khop` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_co_xuong_khop` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `than_kinh_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_than_kinh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_than_kinh` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tam_than_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_tam_than` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_tam_than` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `kk_mp_kham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kk_mt_kham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ck_mp_kham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ck_mt_kham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `benh_mat_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_mat` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_mat` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tt_nt_kham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tt_nth_kham` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tp_nt_kham` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tp_nth_kham` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tmh_benh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_tmh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bs_tmh` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `rhm_ht` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rhm_hd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rhm_benh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `xl_rhm` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `da_lieu_kham` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `xl_da_lieu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bs_da_lieu` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bs_rhm` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `kq` text COLLATE utf8_unicode_ci NOT NULL,
  `dg` text COLLATE utf8_unicode_ci NOT NULL,
  `phan_loai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cac_benh_tat` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bs_kl` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `ma_nv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`ma_nv`, `ho_ten`) VALUES
('huydt', 'Đoàn Thanh Huy'),
('baynd', 'Nguyễn Đức Bảy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xep_loai`
--

CREATE TABLE `tbl_xep_loai` (
  `id` int(11) NOT NULL,
  `loai` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_xep_loai`
--

INSERT INTO `tbl_xep_loai` (`id`, `loai`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kham_suc_khoe`
--
ALTER TABLE `tbl_kham_suc_khoe`
  ADD PRIMARY KEY (`nam`,`ma_nv`);

--
-- Indexes for table `tbl_xep_loai`
--
ALTER TABLE `tbl_xep_loai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_xep_loai`
--
ALTER TABLE `tbl_xep_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
