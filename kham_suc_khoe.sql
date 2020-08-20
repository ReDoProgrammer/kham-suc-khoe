-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 03:49 PM
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

--
-- Dumping data for table `tbl_kham_suc_khoe`
--

INSERT INTO `tbl_kham_suc_khoe` (`nam`, `ma_nv`, `tien_su_benh`, `chieu_cao`, `can_nang`, `bmi`, `mach`, `huyet_ap`, `tl_phan_loai`, `tuan_hoan_kham`, `xl_tuan_hoan`, `bs_tuan_hoan`, `ho_hap_kham`, `xl_ho_hap`, `bs_ho_hap`, `tieu_hoa_kham`, `xl_tieu_hoa`, `bs_tieu_hoa`, `than_tiet_nieu_kham`, `xl_than_tiet_nieu`, `bs_than_tiet_nieu`, `noi_tiet_kham`, `xl_noi_tiet`, `bs_noi_tiet`, `co_xuong_khop_kham`, `xl_co_xuong_khop`, `bs_co_xuong_khop`, `than_kinh_kham`, `xl_than_kinh`, `bs_than_kinh`, `tam_than_kham`, `xl_tam_than`, `bs_tam_than`, `kk_mp_kham`, `kk_mt_kham`, `ck_mp_kham`, `ck_mt_kham`, `benh_mat_kham`, `xl_mat`, `bs_mat`, `tt_nt_kham`, `tt_nth_kham`, `tp_nt_kham`, `tp_nth_kham`, `tmh_benh`, `xl_tmh`, `bs_tmh`, `rhm_ht`, `rhm_hd`, `rhm_benh`, `xl_rhm`, `da_lieu_kham`, `xl_da_lieu`, `bs_da_lieu`, `bs_rhm`, `kq`, `dg`, `phan_loai`, `cac_benh_tat`, `bs_kl`) VALUES
(2020, 'baynd', 'Không có', '170', '65', '22.49', '90', '100', 'I', 'T1,T2 đều khỏe', 'I', 'Nguyễn Thị Thảo Như', 'Phổi không nghe ran', 'I', 'Nguyễn Thị Thảo Như', 'bụng mềm', 'I', 'Nguyễn Thị Thảo Như', 'chạm thận....???', 'I', 'Nguyễn Thị Thảo Như', 'bình thường', 'I', 'Nguyễn Thị Thảo Như', 'bình thường', 'I', 'Nguyễn Thị Thảo Như', 'tỉnh táo', 'I', 'Nguyễn Thị Thảo Như', 'tỉnh táo', 'I', 'Nguyễn Thị Thảo Như', '10/10', '10/10', '', '', 'không', 'I', 'Nguyễn Thị Thảo Như', '5m', '0.5m', '5m', '0.5m', 'không', 'I', 'Nguyễn Thị Thảo Như', 'sức nhai: 100%', 'sức nhai: 100%', 'không', 'I', 'Không có', 'I', 'Nguyễn Thị Thảo Như', 'Nguyễn Thị Thảo Như', 'kết quả cận lâm sàng', 'đánh giá kết quả cận lâm sàng', 'I', 'không có bệnh tật, sức khỏe tốt.', 'Nguyễn Thị Thảo Như'),
(2020, 'huydt', 'Không có', '175', '70', '22.86', '80', '80', 'I', 'T1,T2 đều khỏe', 'I', 'Nguyễn Thị Thảo Như', 'Phổi không nghe ran', 'I', 'Nguyễn Thị Thảo Như', 'bụng mềm', 'I', 'Nguyễn Thị Thảo Như', 'chạm thận....???', 'I', 'Nguyễn Thị Thảo Như', 'bình thường', 'I', 'Nguyễn Thị Thảo Như', 'bình thường', 'I', 'Nguyễn Thị Thảo Như', 'tỉnh táo', 'I', 'Nguyễn Thị Thảo Như', 'tỉnh táo', 'I', 'Nguyễn Thị Thảo Như', '10/10', '10/10', '', '', 'không', 'I', 'Nguyễn Thị Thảo Như', '5m', '0.5m', '5m', '0.5m', 'không', 'I', 'Nguyễn Thị Thảo Như', 'sức nhai: 100%', 'sức nhai: 100%', 'không', 'I', 'Không có', 'I', 'Nguyễn Thị Thảo Như', 'Nguyễn Thị Thảo Như', '', '', 'I', '', 'Nguyễn Thị Thảo Như');

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
