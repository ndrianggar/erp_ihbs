-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 04:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihbs_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen_siswa`
--

CREATE TABLE `tb_absen_siswa` (
  `kd_absen_siswa` int(11) NOT NULL,
  `nipd` bigint(30) NOT NULL,
  `kd_kls_paralel` int(10) NOT NULL,
  `kd_jadwal` int(10) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `kd_thn_akademik` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `sts_kehadiran` enum('H','I','S') NOT NULL,
  `guru` varchar(50) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen_siswa`
--

INSERT INTO `tb_absen_siswa` (`kd_absen_siswa`, `nipd`, `kd_kls_paralel`, `kd_jadwal`, `kd_mapel`, `kd_thn_akademik`, `tanggal`, `sts_kehadiran`, `guru`, `last_update`) VALUES
(1, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-01', 'H', '2012206166', '2019-02-18 08:37:49'),
(2, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-01', 'H', '2012206166', '2019-02-18 08:37:49'),
(3, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-01', 'H', '2012206166', '2019-02-18 08:37:49'),
(4, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-02', 'H', '2012206166', '2019-02-18 08:37:56'),
(5, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-02', 'H', '2012206166', '2019-02-18 08:37:56'),
(6, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-02', 'H', '2012206166', '2019-02-18 08:37:56'),
(7, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-03', 'H', '2012206166', '2019-02-18 08:38:14'),
(8, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-03', 'H', '2012206166', '2019-02-18 08:38:14'),
(9, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-03', 'H', '2012206166', '2019-02-18 08:38:14'),
(10, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-04', 'H', '2012206166', '2019-02-18 08:38:23'),
(11, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-04', 'H', '2012206166', '2019-02-18 08:38:23'),
(12, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-04', 'H', '2012206166', '2019-02-18 08:38:23'),
(13, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-05', 'H', '2012206166', '2019-02-18 08:38:47'),
(14, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-05', 'H', '2012206166', '2019-02-18 08:38:47'),
(15, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-05', 'H', '2012206166', '2019-02-18 08:38:47'),
(16, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-06', 'I', '2012206166', '2019-02-18 08:38:57'),
(17, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-06', 'H', '2012206166', '2019-02-18 08:38:57'),
(18, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-06', 'H', '2012206166', '2019-02-18 08:38:57'),
(19, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-07', 'H', '2012206166', '2019-02-18 08:39:06'),
(20, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-07', 'I', '2012206166', '2019-02-18 08:39:06'),
(21, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-07', 'H', '2012206166', '2019-02-18 08:39:06'),
(22, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-08', 'H', '2012206166', '2019-02-18 08:39:15'),
(23, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-08', 'H', '2012206166', '2019-02-18 08:39:15'),
(24, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-08', 'I', '2012206166', '2019-02-18 08:39:15'),
(25, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-09', 'H', '2012206166', '2019-02-18 08:39:23'),
(26, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-09', 'H', '2012206166', '2019-02-18 08:39:23'),
(27, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-09', 'H', '2012206166', '2019-02-18 08:39:23'),
(28, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-10', 'S', '2012206166', '2019-02-18 08:39:36'),
(29, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-10', 'H', '2012206166', '2019-02-18 08:39:36'),
(30, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-10', 'H', '2012206166', '2019-02-18 08:39:36'),
(31, 1, 1, 9, 'MP001/BI/VII', 1, '2019-02-11', 'H', '2012206166', '2019-02-18 08:39:51'),
(32, 100, 1, 9, 'MP001/BI/VII', 1, '2019-02-11', 'H', '2012206166', '2019-02-18 08:39:51'),
(33, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-02-11', 'H', '2012206166', '2019-02-18 08:39:51'),
(34, 1, 1, 9, 'MP001/BI/VII', 1, '2019-03-01', 'H', '2012206166', '2019-02-19 14:41:08'),
(35, 100, 1, 9, 'MP001/BI/VII', 1, '2019-03-01', 'H', '2012206166', '2019-02-19 14:41:08'),
(36, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-03-01', 'H', '2012206166', '2019-02-19 14:41:08'),
(37, 1, 1, 9, 'MP001/BI/VII', 1, '2019-03-02', 'H', '2012206166', '2019-02-19 15:21:15'),
(38, 100, 1, 9, 'MP001/BI/VII', 1, '2019-03-02', 'H', '2012206166', '2019-02-19 15:21:15'),
(39, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-03-02', 'S', '2012206166', '2019-02-19 15:21:15'),
(40, 1, 1, 9, 'MP001/BI/VII', 1, '2019-04-01', 'H', '2012206166', '2019-02-20 08:47:07'),
(41, 100, 1, 9, 'MP001/BI/VII', 1, '2019-04-01', 'H', '2012206166', '2019-02-20 08:47:07'),
(42, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-04-01', 'H', '2012206166', '2019-02-20 08:47:07'),
(43, 1, 1, 9, 'MP001/BI/VII', 1, '2019-05-01', 'H', '2012206166', '2019-02-20 08:48:39'),
(44, 100, 1, 9, 'MP001/BI/VII', 1, '2019-05-01', 'H', '2012206166', '2019-02-20 08:48:39'),
(45, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-05-01', 'H', '2012206166', '2019-02-20 08:48:39'),
(46, 1, 1, 9, 'MP001/BI/VII', 1, '2019-06-01', 'H', '2012206166', '2019-02-20 08:49:00'),
(47, 100, 1, 9, 'MP001/BI/VII', 1, '2019-06-01', 'H', '2012206166', '2019-02-20 08:49:00'),
(48, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-06-01', 'H', '2012206166', '2019-02-20 08:49:00'),
(49, 1, 1, 9, 'MP001/BI/VII', 1, '2019-07-01', 'H', '2012206166', '2019-02-20 08:50:15'),
(50, 100, 1, 9, 'MP001/BI/VII', 1, '2019-07-01', 'H', '2012206166', '2019-02-20 08:50:15'),
(51, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-07-01', 'H', '2012206166', '2019-02-20 08:50:15'),
(52, 1, 1, 8, 'MP003/BA/VII', 1, '2019-02-20', 'H', '2012206166', '2019-02-20 09:24:17'),
(53, 100, 1, 8, 'MP003/BA/VII', 1, '2019-02-20', 'H', '2012206166', '2019-02-20 09:24:17'),
(54, 2012804166, 1, 8, 'MP003/BA/VII', 1, '2019-02-20', 'H', '2012206166', '2019-02-20 09:24:17'),
(55, 1, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:05'),
(56, 100, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:05'),
(57, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:05'),
(58, 1, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:19'),
(59, 100, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:19'),
(60, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:19'),
(61, 1, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:23'),
(62, 100, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:23'),
(63, 2012804166, 1, 9, 'MP001/BI/VII', 1, '2019-04-20', 'H', '2012206166', '2019-04-20 11:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gedung`
--

CREATE TABLE `tb_gedung` (
  `kd_gedung` int(11) NOT NULL,
  `nm_gedung` varchar(50) NOT NULL,
  `jml_lantai` int(10) NOT NULL,
  `panjang` int(10) NOT NULL,
  `tinggi` int(10) NOT NULL,
  `lebar` int(10) NOT NULL,
  `unit` enum('SD','SMP','SMA') NOT NULL,
  `deleted` enum('false','true','','') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gedung`
--

INSERT INTO `tb_gedung` (`kd_gedung`, `nm_gedung`, `jml_lantai`, `panjang`, `tinggi`, `lebar`, `unit`, `deleted`) VALUES
(1, 'Gedung A', 3, 3, 3, 3, 'SMP', 'false'),
(2, 'Gedung SD', 0, 0, 0, 0, 'SD', 'true'),
(3, 'GEdung', 0, 0, 0, 0, 'SD', 'true'),
(4, 'Gedung', 0, 0, 0, 0, 'SD', 'true'),
(5, 'Gedung', 1, 2, 3, 4, 'SMP', 'false'),
(6, 'Gedung', 0, 0, 0, 0, 'SMP', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kd_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_guru` varchar(150) DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `niy_nigk` varchar(50) DEFAULT NULL,
  `nuptk` varchar(50) DEFAULT NULL,
  `status_kepegawaian` varchar(50) DEFAULT NULL,
  `jenis_ptk` varchar(50) DEFAULT NULL,
  `pengawas_bidang_studi` varchar(150) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Budha','Hindu') DEFAULT NULL,
  `alamat` text,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kd_pos` varchar(10) DEFAULT NULL,
  `no_tlp` varchar(30) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `tugas_tambahan` text,
  `status_keaktifan` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif',
  `sk_cpns` varchar(150) DEFAULT NULL,
  `tanggal_cpns` date DEFAULT NULL,
  `sk_pengangkatan` varchar(150) DEFAULT NULL,
  `tmt_pengangkatan` date DEFAULT NULL,
  `lembaga_pengangkatan` varchar(150) DEFAULT NULL,
  `golongan` varchar(30) DEFAULT NULL,
  `keahlian_laboratorium` varchar(150) DEFAULT NULL,
  `sumber_gaji` varchar(150) DEFAULT NULL,
  `nama_ibu_kandung` varchar(100) DEFAULT NULL,
  `status_pernikahan` enum('Single','Nikah','Duda/Janda') DEFAULT NULL,
  `nama_suami_istri` varchar(100) DEFAULT NULL,
  `nip_suami_istri` varchar(50) DEFAULT NULL,
  `pekerjaan_suami_istri` varchar(100) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `lisensi_kepsek` varchar(50) DEFAULT NULL,
  `jumlah_sekolah_binaan` int(5) DEFAULT NULL,
  `diklat_kepengawasan` varchar(50) DEFAULT NULL,
  `mampu_handle_kk` varchar(50) DEFAULT NULL,
  `keahlian_breile` varchar(50) DEFAULT NULL,
  `keahlian_bahasa_isyarat` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `photo_guru` text,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI','Lembaga') DEFAULT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kd_guru`, `nip`, `nama_guru`, `gender`, `tempat_lahir`, `tanggal_lahir`, `nik`, `niy_nigk`, `nuptk`, `status_kepegawaian`, `jenis_ptk`, `pengawas_bidang_studi`, `agama`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `kd_pos`, `no_tlp`, `email`, `tugas_tambahan`, `status_keaktifan`, `sk_cpns`, `tanggal_cpns`, `sk_pengangkatan`, `tmt_pengangkatan`, `lembaga_pengangkatan`, `golongan`, `keahlian_laboratorium`, `sumber_gaji`, `nama_ibu_kandung`, `status_pernikahan`, `nama_suami_istri`, `nip_suami_istri`, `pekerjaan_suami_istri`, `tmt_pns`, `lisensi_kepsek`, `jumlah_sekolah_binaan`, `diklat_kepengawasan`, `mampu_handle_kk`, `keahlian_breile`, `keahlian_bahasa_isyarat`, `npwp`, `kewarganegaraan`, `photo_guru`, `unit`, `deleted`) VALUES
(1, '2012206166', 'Choyrul1', 'Laki-laki', 'Tangerang', '2019-01-01', '3600012323260001', 'test', 'etsts', 'Test', 'test', 'test', 'Islam', 'test', '02', '02', 'sukasuka', 'sukaluyu', 'test', '02232', '05232321323232', 'test@gmail.com', 'test', 'Aktif', 'test', '2019-01-01', 'test', '2000-10-02', 'test', 'test', 'test', 'test', 'test', '', 'test', 'test', 'test', '2019-01-01', 'test', 1, 'test', 'test', 'test', 'test', '1223', 'Indonesia', '1ed777150900cc5e9221cb4358d7b90f.jpg', 'SMP PUTRA', 'false'),
(3, '1234', 'test', '', 'tesa', '2000-02-02', '1233', '', '', 'test', '', '', 'Islam', '', '', '', '', '', '', '', '0878786005', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 'Indonesia', 'e94b93356ccca256fdda21b85fe7b110.png', 'SMP PUTRA', 'true'),
(10, '2012804166', '2012804166', '', 'Tangerang', '2000-12-02', 'Laki-laki', 'Islam', 'SMP', 'VII', '1', NULL, 'Kristen', 'Taman Balaraja', '21252', '2', '3', 'Parahu', 'Sukamulya', 'Tangerang', '15610', 'Non', '0', '', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'false'),
(5, '321', 'Choyrul', 'Laki-laki', 'tangerang', '2019-01-29', '3600012323260001', 'test', 'etsts', 'Tenaga Honor Sekolah', 'Guru Kelas', 'test', 'Islam', 'test', '02', '08', 'sukasuka', 'sukaluyu', 'test', '02232', '008', 'test@gmail.com', 'test', 'Aktif', NULL, NULL, 'test', '2019-01-01', 'test', 'test', 'test', 'test', 'test', 'Single', 'test', 'test', 'test', '2018-12-31', 'test', 0, 'test', 'test', 'test', '', '1223', 'Indonesia', NULL, 'SMP PUTRA', 'false'),
(6, '321', 'Choyrul', 'Laki-laki', 'tangerang', '2019-01-29', '3600012323260001', 'test', 'etsts', 'Tenaga Honor Sekolah', 'Guru Kelas', 'test', 'Islam', 'test', '02', '08', 'sukasuka', 'sukaluyu', 'test', '02232', '008', 'test@gmail.com', 'test', 'Aktif', NULL, NULL, 'test', '2019-01-01', 'test', 'test', 'test', 'test', 'test', 'Single', 'test', 'test', 'test', '2018-12-31', 'test', 0, 'test', 'test', 'test', '', '1223', 'Indonesia', NULL, 'SMP PUTRA', 'false'),
(9, '111', 'test', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru1`
--

CREATE TABLE `tb_guru1` (
  `kd_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `niy_nigk` varchar(50) NOT NULL,
  `nuptk` varchar(50) NOT NULL,
  `status_kepegawaian` varchar(50) NOT NULL,
  `jenis_ptk` varchar(50) NOT NULL,
  `pengawas_bidang_studi` varchar(150) NOT NULL,
  `tugas_tambahan` varchar(100) NOT NULL,
  `status_keaktifan` varchar(50) NOT NULL,
  `sk_cpns` varchar(150) NOT NULL,
  `tanggal_cpns` date NOT NULL,
  `sk_pengangkatan` varchar(150) NOT NULL,
  `tmt_pengangkatan` date NOT NULL,
  `lembaga_pengangkatan` varchar(150) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `keahlian_laboratorium` varchar(150) NOT NULL,
  `sumber_gaji` varchar(150) NOT NULL,
  `nama_suami_istri` varchar(100) NOT NULL,
  `nip_suami_istri` varchar(30) NOT NULL,
  `pekerjaan_suami_istri` varchar(100) NOT NULL,
  `tmt_pns` date NOT NULL,
  `lisensi_kepsek` varchar(20) NOT NULL,
  `jumlah_sekolah_binaan` int(5) NOT NULL,
  `diklat_kepengawasan` varchar(20) NOT NULL,
  `mampu_handle_kk` varchar(20) NOT NULL,
  `keahlian_breile` varchar(20) NOT NULL,
  `keahlian_bahasa_isyarat` varchar(20) NOT NULL,
  `unit` enum('TK','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI','LEMBAGA','SD') DEFAULT NULL,
  `photo_guru` text NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru1`
--

INSERT INTO `tb_guru1` (`kd_guru`, `nip`, `niy_nigk`, `nuptk`, `status_kepegawaian`, `jenis_ptk`, `pengawas_bidang_studi`, `tugas_tambahan`, `status_keaktifan`, `sk_cpns`, `tanggal_cpns`, `sk_pengangkatan`, `tmt_pengangkatan`, `lembaga_pengangkatan`, `golongan`, `keahlian_laboratorium`, `sumber_gaji`, `nama_suami_istri`, `nip_suami_istri`, `pekerjaan_suami_istri`, `tmt_pns`, `lisensi_kepsek`, `jumlah_sekolah_binaan`, `diklat_kepengawasan`, `mampu_handle_kk`, `keahlian_breile`, `keahlian_bahasa_isyarat`, `unit`, `photo_guru`, `deleted`) VALUES
(1, '123', 'test', 'test', '0', '0', 'test', 'test', '0', 'test', '2000-10-10', '1', '2000-12-12', 'test', '0', 'test', 'test', 'test', 'test', 'test', '0000-00-00', 'test', 1, 'test', 'test', 'test', 'tesat', 'SMP PUTRA', 'c2993a5dac77773b30cce5bec04088c0.png', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hari`
--

CREATE TABLE `tb_hari` (
  `kd_hari` int(11) NOT NULL,
  `nm_hari` varchar(30) NOT NULL,
  `nm_hari_eng` varchar(30) NOT NULL,
  `nm_hari_arb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hari`
--

INSERT INTO `tb_hari` (`kd_hari`, `nm_hari`, `nm_hari_eng`, `nm_hari_arb`) VALUES
(1, 'Senin', 'Monday', ''),
(2, 'Selasa', 'Tuesday', ''),
(3, 'Rabu', 'Wednesday', ''),
(4, 'Kamis', 'Thursday', ''),
(5, 'Jumat', 'Friday', ''),
(6, 'Sabtu', 'Saturday', ''),
(7, 'Minggu', 'Sunday', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_id_sekolah`
--

CREATE TABLE `tb_id_sekolah` (
  `kd_sekolah` int(11) NOT NULL,
  `nm_sekolah` varchar(100) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `nss` varchar(50) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `kd_pos` int(6) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI') NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_id_sekolah`
--

INSERT INTO `tb_id_sekolah` (`kd_sekolah`, `nm_sekolah`, `npsn`, `nss`, `alamat_sekolah`, `kd_pos`, `desa`, `kecamatan`, `kota`, `no_tlp`, `fax`, `email`, `website`, `unit`, `deleted`) VALUES
(1, 'SMP IBNU HAJAR BOARDING SCHOOL', '123', '123', 'JLn Musholah Fatul Ulum No. 11', 13850, 'Munjul', 'Cipayung', 'Jakarta Timur', '(021) 84312279', '(021) 84312279', 'info@ihbs.org', 'www.ihbs.sch.id', 'SMP PUTRA', 'false'),
(2, 'Ibnu Hajar', '123', '123', 'Munjul', 123, 'Munjul', 'Cipayung', 'Jakarta Timur', '123', '123', 'email@gmail.com', 'www', 'SD', 'false'),
(3, 'test', '', '', '', 0, '', '', '', '', '', '', '', 'SD', 'true'),
(4, 'test', '', '', '', 0, '', '', '', '', '', '', '', 'SD', 'true'),
(5, 'testst', '', '', '', 0, '', '', '', '', '', '', '', 'SD', 'true'),
(6, 'baru test 3', '', '', 'testa', 0, 'munjul', 'Cipayung', 'tangerang', '1234', '', 'ucok@gmail.com', '', '', 'true'),
(7, 'ysa baru ni', '', '', '', 0, '', '', '', '', '', '', '', '', 'true'),
(8, 'test', '', '', '', 0, '', '', '', '', '', '', '', 'SD', 'true'),
(9, '123', '', '', '', 0, '', '', '', '', '', '', '', 'SD', 'true'),
(10, '12121', '', '', '', 0, '', '', '', '', '', '', '', '', 'true'),
(11, '', '', '', '', 0, '', '', '', '', '', '', '', '', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kd_jadwal` int(11) NOT NULL,
  `hari` int(3) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `kd_ruangan` int(11) NOT NULL,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI') NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `kd_kls_paralel` int(11) NOT NULL,
  `kd_thn_akademik` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `deleted` enum('false','true','','') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`kd_jadwal`, `hari`, `kd_mapel`, `mulai`, `selesai`, `kd_ruangan`, `unit`, `kd_kls`, `kd_kls_paralel`, `kd_thn_akademik`, `status`, `deleted`) VALUES
(7, 1, 'MP003/BA/VII', '08:00:00', '09:00:00', 1, 'SMP PUTRA', 'VII', 1, 1, 'Tidak Aktif', 'true'),
(8, 1, 'MP003/BA/VII', '08:00:00', '09:00:00', 1, 'SMP PUTRA', 'VII', 1, 1, 'Aktif', 'false'),
(9, 1, 'MP001/BI/VII', '08:00:00', '09:00:00', 1, 'SMP PUTRA', 'VII', 1, 1, 'Tidak Aktif', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_cbt`
--

CREATE TABLE `tb_jenis_cbt` (
  `kd_jenis_cbt` int(11) NOT NULL,
  `nm_jenis_cbt` varchar(50) NOT NULL,
  `deleted` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_cbt`
--

INSERT INTO `tb_jenis_cbt` (`kd_jenis_cbt`, `nm_jenis_cbt`, `deleted`) VALUES
(1, 'Try Out', 'false'),
(2, 'PAT 2', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kd_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL,
  `bidang_keahlian` text NOT NULL,
  `kopetensi_umum` text NOT NULL,
  `kopetensi_khusus` text NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kd_jurusan`, `jurusan`, `nm_jurusan`, `bidang_keahlian`, `kopetensi_umum`, `kopetensi_khusus`, `deleted`) VALUES
(1, 'IPA', 'ILMU PENGETAHUAN ALAM', '', '', '', 'false'),
(2, 'IPS', 'ILMU PENGETAHUAN SOSIAL', '', '', '', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Budha','Hindu') NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRi','Lembaga') NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kd_pos` varchar(10) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `status_nikah` enum('Single','Nikah','Duda / Janda') NOT NULL,
  `jml_anak` int(2) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `mulai_tugas` date NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `thn_lulus` year(4) NOT NULL,
  `nm_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `status_pegawai` varchar(30) NOT NULL,
  `photo_pegawai` text NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nip`, `nama`, `agama`, `gender`, `jabatan`, `unit`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `kd_pos`, `no_tlp`, `email`, `tempat_lahir`, `tgl_lahir`, `nik`, `npwp`, `kewarganegaraan`, `status_nikah`, `jml_anak`, `nm_ibu`, `mulai_tugas`, `pendidikan`, `thn_lulus`, `nm_sekolah`, `jurusan`, `ipk`, `masa_kerja`, `status_pegawai`, `photo_pegawai`, `deleted`) VALUES
('123', 'Choyrul Annam', 'Islam', 'Laki-laki', '', 'SMP PUTRA', 'Taman Balaraja', '01', '02', 'Munjul', 'Ciracas', 'Jakarta Timur', '13850', '08121212323', 'test@gmail.com', 'tangerang1', '2018-11-01', '123', '123', 'Indonesia', 'Single', 0, 'Ummu Fulan', '2018-07-31', 'S1', 2016, 'UI', 'Information System', '4.0', '1 Bulan', 'non', '', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kls` varchar(10) NOT NULL,
  `angka` int(11) NOT NULL,
  `nm_kelas` varchar(30) NOT NULL,
  `unit` enum('SD','SMP','SMA') NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kls`, `angka`, `nm_kelas`, `unit`, `deleted`) VALUES
('I', 1, 'Kelas I', 'SD', 'false'),
('II', 2, 'Kelas II', 'SD', 'false'),
('III', 3, 'Kelas III', 'SD', 'false'),
('IV', 4, 'Kelas IV', 'SD', 'false'),
('IX', 9, 'Kelas IX', 'SMP', 'false'),
('V', 5, 'Kelas V', 'SD', 'false'),
('VI', 6, 'Kelas VI', 'SD', 'false'),
('VII', 7, 'Kelas VII', 'SMP', 'false'),
('VIII', 8, 'Kelas VIII', 'SMP', 'false'),
('X', 10, 'Kelas X', 'SMA', 'false'),
('XI', 11, 'Kelas XI', 'SMA', 'false'),
('XII', 12, 'Kelas XII', 'SMA', 'false'),
('XIII', 13, 'Kelas XIII', 'SMA', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelompok_mapel`
--

CREATE TABLE `tb_kelompok_mapel` (
  `kd_kelompok_mapel` int(11) NOT NULL,
  `kelompok` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelompok_mapel`
--

INSERT INTO `tb_kelompok_mapel` (`kd_kelompok_mapel`, `kelompok`, `keterangan`, `status`, `deleted`) VALUES
(1, 'A', 'Kelompok A', 'Aktif', 'false'),
(2, 'B', 'Kelompok B', 'Aktif', 'false'),
(3, 'B', 'Kelompok B2', 'Aktif', 'true'),
(4, 'C', 'Kelompok C', 'Aktif', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepsek`
--

CREATE TABLE `tb_kepsek` (
  `kd_kepsek` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `kd_sekolah` int(11) NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kepsek`
--

INSERT INTO `tb_kepsek` (`kd_kepsek`, `nip`, `kd_sekolah`, `deleted`) VALUES
(1, '2012206166', 1, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kls_paralel`
--

CREATE TABLE `tb_kls_paralel` (
  `kd_kls_paralel` int(11) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `nm_kls_paralel` varchar(20) NOT NULL,
  `wali_kelas` int(30) NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kls_paralel`
--

INSERT INTO `tb_kls_paralel` (`kd_kls_paralel`, `kd_kls`, `nm_kls_paralel`, `wali_kelas`, `deleted`) VALUES
(1, 'VII', 'VII-B', 123, 'false'),
(2, 'I', 'I-A', 123, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kd_mapel` varchar(20) NOT NULL,
  `nm_mapel` varchar(50) DEFAULT NULL,
  `nm_mapel_eng` varchar(50) DEFAULT NULL,
  `nm_mapel_arb` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_mapel` varchar(30) DEFAULT NULL,
  `sub_mapel` varchar(50) DEFAULT NULL,
  `nip_guru` varchar(50) DEFAULT NULL,
  `unit` enum('TK','SD','SMP','SMA') DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `urutan` varchar(3) DEFAULT NULL,
  `kkm` varchar(3) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `nm_mapel`, `nm_mapel_eng`, `nm_mapel_arb`, `status_mapel`, `sub_mapel`, `nip_guru`, `unit`, `kelas`, `jurusan`, `urutan`, `kkm`, `status`, `deleted`) VALUES
('MP001/BI/VII', 'Bahasa Inggris', 'English', 'التسمیة', 'Tunggal', NULL, '2012206166', 'SMP', 'VII', '', '1', '75', 'Aktif', 'false'),
('MP002/BI/VII', 'Bahasa Inggris2', 'English1', 'التسمیة', 'Tunggal', NULL, '321', 'SMA', 'XII', 'IPA', '1', '75', 'Aktif', 'false'),
('MP003/BA/VII', 'Bahasa Arab', '', '', 'Tunggal', NULL, '2012206166', 'SMP', 'VII', NULL, '1', '75', 'Aktif', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `kd_materi` int(11) NOT NULL,
  `kd_mapel` varchar(30) NOT NULL,
  `judul_materi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`kd_materi`, `kd_mapel`, `judul_materi`, `created_by`, `last_update`, `deleted`) VALUES
(1, 'MP003/BA/VII', 'دروس اللغة العربية لي الفال', '2012206166', '2019-03-08 09:52:13', 'false'),
(2, 'MP003/BA/VII', '2 دروس اللغة العربية لغير الناطقين بها', '2012206166', '2019-03-06 08:42:20', 'false'),
(3, 'MP001/BI/VII', '2 دروس اللغة العربية لغير الناطقين بها', '2012206166', '2019-03-06 08:42:20', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `kd_ortu` int(11) NOT NULL,
  `nipd` int(11) NOT NULL,
  `nm_bpk` varchar(50) DEFAULT NULL,
  `nm_ibu` varchar(50) DEFAULT NULL,
  `thn_lahir_bpk` date DEFAULT NULL,
  `thn_lahir_ibu` date DEFAULT NULL,
  `pendidikan_bpk` varchar(20) DEFAULT NULL,
  `pendidikan_ibu` varchar(20) DEFAULT NULL,
  `pekerjaan_bpk` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `no_tlp_bpk` varchar(30) DEFAULT NULL,
  `no_tlp_ibu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ortu`
--

INSERT INTO `tb_ortu` (`kd_ortu`, `nipd`, `nm_bpk`, `nm_ibu`, `thn_lahir_bpk`, `thn_lahir_ibu`, `pendidikan_bpk`, `pendidikan_ibu`, `pekerjaan_bpk`, `pekerjaan_ibu`, `no_tlp_bpk`, `no_tlp_ibu`) VALUES
(1, 151607008, 'Abu Fulan', 'Ummu Fulan', '1970-01-02', '1970-01-01', 'S1', 'S1', 'Wirausaha', 'IRT', '008', '008'),
(2, 151607007, 'Abu Fulan Test', 'Ummu Fulan', '1970-01-02', '1970-01-01', 'S1', 'S1', 'Wirausaha', 'IRT', '008', '008'),
(3, 123456, 'Ayahku', '1', '2015-01-01', '0000-00-00', 'S1', '1', 'Swasta', '1', '0846232323', '1'),
(4, 2012804166, 'Ayahku', '1', '2015-01-01', '0000-00-00', '', '1', 'Swasta', '1', '0846232323', '1'),
(5, 12, 'Ayahku', '1', '2015-01-01', '0000-00-00', 'S1', '11', 'Swasta', '1', '0846232323', '1'),
(6, 8, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '0121'),
(7, 7, 'Ayahku', 'Ibu Ku', '2015-02-02', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '0121'),
(8, 1, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '0121'),
(9, 100, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '081626262626'),
(10, 0, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(11, 2, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(12, 1010, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '081626262626'),
(13, 1, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '0121'),
(14, 2, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '081626262626'),
(15, 3, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '081626262626'),
(16, 4, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '081626262626'),
(17, 5, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '081626262626'),
(18, 6, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(19, 7, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(20, 8, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(21, 9, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(22, 10, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(23, 11, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(24, 12, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(25, 13, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(26, 14, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(27, 15, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(28, 16, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(29, 17, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(30, 18, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(31, 19, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(32, 20, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(33, 21, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(34, 22, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(35, 1, 'Ayahku', 'Ibu Ku', '2015-01-01', '2018-02-12', 'S1', 'SD', 'Swasta', 'IRT', '0846232323', '0121'),
(36, 2, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(37, 0, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(38, 2018, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(39, 321, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(40, 12, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
(41, 123456, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_predikat`
--

CREATE TABLE `tb_predikat` (
  `kd_predikat` int(11) NOT NULL,
  `int_awal` int(5) NOT NULL,
  `int_akhir` int(5) NOT NULL,
  `predikat` varchar(2) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `kd_thn_akademik` int(11) NOT NULL,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_predikat`
--

INSERT INTO `tb_predikat` (`kd_predikat`, `int_awal`, `int_akhir`, `predikat`, `keterangan`, `kd_thn_akademik`, `unit`) VALUES
(1, 80, 90, 'A', 'Baik', 2, 'SMP PUTRA'),
(2, 70, 80, 'B', 'Cukup Baik', 2, 'SMP PUTRA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `kd_ruangan` int(11) NOT NULL,
  `kd_gedung` int(11) NOT NULL,
  `nm_ruangan` varchar(50) NOT NULL,
  `kapasitas` int(10) NOT NULL,
  `unit` enum('SD','SMP','SMA') NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`kd_ruangan`, `kd_gedung`, `nm_ruangan`, `kapasitas`, `unit`, `deleted`) VALUES
(1, 1, 'Kelas 1', 30, 'SMP', 'false'),
(2, 5, 'test', 20, 'SD', 'true'),
(3, 1, 'test', 21, 'SD', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nipd` bigint(30) NOT NULL,
  `nisn` bigint(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') DEFAULT NULL,
  `kd_kls` varchar(10) DEFAULT NULL,
  `kd_kls_paralel` int(10) DEFAULT NULL,
  `kd_jurusan` int(10) DEFAULT NULL,
  `angkatan` int(5) DEFAULT NULL,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI') DEFAULT NULL,
  `alamat` text,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kd_pos` varchar(10) DEFAULT NULL,
  `status_kps` varchar(30) DEFAULT NULL,
  `no_kps` varchar(30) DEFAULT NULL,
  `skhun` varchar(30) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `photo` text,
  `password` text,
  `status` enum('Aktif','Unaktif','Lulus','') DEFAULT 'Aktif',
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nipd`, `nisn`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `kd_kls`, `kd_kls_paralel`, `kd_jurusan`, `angkatan`, `unit`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `kd_pos`, `status_kps`, `no_kps`, `skhun`, `no_tlp`, `photo`, `password`, `status`, `deleted`) VALUES
(1, 123456, '123456', 'FARADJ FARIZI', 'Tangerang', '2015-02-02', 'Laki-laki', 'Islam', 'VII', 1, 1, 20, '', 'Taman Balaraja Blok A9A No 5', '03', '03', 'parahu', 'Ciracas', 'Jakarta Timur', '15610', 'Non', '11', '123456', '085826232323', 'f54f7b53620b344f75f479f4e4fee29f.jpg', NULL, 'Aktif', 'false'),
(12, 201355, '', '', '', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'Aktif', 'false'),
(100, NULL, NULL, 'test', NULL, NULL, '', NULL, NULL, 1, 1, 1, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aktif', 'false'),
(2018, 0, '', '', '', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'Aktif', 'false'),
(123456, 0, '', '', '', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'Aktif', 'false'),
(2012804166, 201545113, '2012804166', 'Choyrul Annam', 'Tangerang', '2000-12-02', 'Laki-laki', 'Islam', 'VII', 1, NULL, 2, 'SMP PUTRA', 'Taman Balaraja', '2', '3', 'Parahu', 'Sukamulya', 'Tangerang', '15610', 'Non', '0', '1323653', '212525323', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'Aktif', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_essay`
--

CREATE TABLE `tb_soal_essay` (
  `kd_soal_essay` int(11) NOT NULL,
  `kd_mapel` varchar(50) NOT NULL,
  `kd_topik_soal` int(11) NOT NULL,
  `kd_kls` int(11) NOT NULL,
  `pertanyaan_essay` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pembahasan_essay` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bobot_essay` varchar(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal_essay`
--

INSERT INTO `tb_soal_essay` (`kd_soal_essay`, `kd_mapel`, `kd_topik_soal`, `kd_kls`, `pertanyaan_essay`, `pembahasan_essay`, `bobot_essay`, `user`, `last_update`, `deleted`) VALUES
(1, 'MP003/BA/VII', 1, 0, '<p>test test mulu&nbsp;</p>\n', '<p>iya bener</p>\n', '10', '111', '2019-04-25 07:13:27', 'false'),
(2, 'MP003/BA/VII', 1, 0, '<p>test</p>\n', '<p>iya bener</p>\n', '10', '111', '2019-04-25 07:18:52', 'false'),
(3, 'MP003/BA/VII', 1, 0, 'Siapa yang akan memenangkan pilpres', 'siapa aja boleh', '100', '111', '2019-05-01 06:55:12', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_pg`
--

CREATE TABLE `tb_soal_pg` (
  `kd_soal_pg` int(11) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `kd_topik_soal` int(11) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `pertanyaan_pg` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawab_a` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawab_b` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawab_c` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawab_d` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawab_e` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `bobot_pg` varchar(10) NOT NULL,
  `pembahasan_pg` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal_pg`
--

INSERT INTO `tb_soal_pg` (`kd_soal_pg`, `kd_mapel`, `kd_topik_soal`, `kd_kls`, `pertanyaan_pg`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `kunci`, `bobot_pg`, `pembahasan_pg`, `user`, `last_update`, `deleted`) VALUES
(1, 'MP003/BA/VII', 1, 'VII', '<p>Ini Apa&nbsp; Ya Bro?</p>\n', '<p>A</p>\n', '<p>B</p>\n', '<p>C</p>\n', '<p>D</p>\n', '<p>E</p>\n', 'A', '10', '<p>Testimoni</p>\n', '111', '2019-04-25 07:12:08', 'false'),
(2, 'MP003/BA/VII', 1, 'VII', '<p>Ini Apa ?</p>\n', '<p>A</p>\n', '<p>B</p>\n', '<p>C</p>\n', '<p>D</p>\n', '<p>E</p>\n', 'B', '10', '<p>Test</p>\n', '111', '2019-04-25 07:13:27', 'false'),
(3, 'MP003/BA/VII', 1, 'VII', '<p>Ini Apa ?</p>\n', '<p>A</p>\n', '<p>B</p>\n', '<p>C</p>\n', '<p>D</p>\n', '<p>E</p>\n', 'A', '10', '<p>Test</p>\n', '111', '2019-04-25 07:18:52', 'false'),
(4, 'MP003/BA/VII', 1, 'VII', '<p>Ini itu</p>\n', '<p>Ada</p>\n', '<p>Ada Aja</p>\n', '<p>Nih</p>\n', '<p>Noh</p>\n', '<p>Ada</p>\n', 'A', '10', '<p>A u</p>\n', '111', '2019-04-26 02:32:10', 'false'),
(5, 'MP003/BA/VII', 1, 'VII', 'test', 'tesat', 'test', 'testa', 'tsea', 'teast', 'A', '10', 'testa', '111', '2019-05-01 06:22:13', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_materi`
--

CREATE TABLE `tb_sub_materi` (
  `kd_sub_materi` int(11) NOT NULL,
  `kd_materi` int(11) NOT NULL,
  `judul_sub_materi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sub_materi`
--

INSERT INTO `tb_sub_materi` (`kd_sub_materi`, `kd_materi`, `judul_sub_materi`, `content`, `created_by`, `last_update`, `deleted`) VALUES
(19, 0, '', '', '111', '2019-04-11 14:26:50', 'false'),
(20, 0, '', '', '111', '2019-04-11 14:27:43', 'false'),
(21, 0, '', '', '111', '2019-04-11 14:28:27', 'false'),
(23, 0, '', '', '111', '2019-04-11 14:58:11', 'false'),
(25, 1, 'Aqidah', '<p>Kata akidah atau&nbsp;<em>i&rsquo;tiqod</em>&nbsp;secara bahasa berasal dari kata&nbsp;<em>al &lsquo;aqdu</em>&nbsp;yang artinya berputar sekitar makna kokoh, kuat, dan erat.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote1sym\" name=\"sdfootnote1anc\"><sup>1</sup></a>&nbsp;Adapun secara istilah umum, kata akidah bermakna keyakinan yang kokoh akan sesuatu, tanpa ada keraguan<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote2sym\" name=\"sdfootnote2anc\"><sup>2</sup></a>. Jika keyakinan tersebut sesuai dengan realitas yang ada maka akidah tersebut benar, namun jika tidak sesuai maka akidah tersebut bathil.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote3sym\" name=\"sdfootnote3anc\"><sup>3</sup></a></p>\n\n<p>Setiap pemeluk suatu agama memiliki suatu akidah tertentu. Namun kebenaran akidah hanya ada dalam islam. Karena dia bersumber dari Dzat yang Maha Mengetahui, yaitu Allah&nbsp;<em>ta&rsquo;ala</em>. Sehingga karenanya tidak ada perbedaan antara akidah yang dibawa oleh para Nabi dari masa ke masa.</p>\n\n<p>Adapun akidah yang bathil, mencakup semua akidah yang bertentangan dengan wahyu. Yaitu akidah yang hanya bersumber dari akal manusia, atau berasal dari wahyu namun dirubah dan diselewengkan. Seperti akidahnya orang yahudi bahwa Uzair adalah anak Allah, atau akidahnya orang Nashroni bahwa al masih adalah anak Allah, atau akidah syiah yang berkeyakinan bahwa Allah menyesal setelah berkehendak, yang dinamakan akidah bada&rsquo;.</p>\n\n<p>Dalam definisi syar&rsquo;i, akidah dalam agama islam bermakna masalah masalah&nbsp;<em>ilmiyah</em>&nbsp;yang berasal dari Allah dan Rosulnya, yang wajib bagi setiap muslim untuk meyakininya sebagai pembenaran terhadap Allah dan Rosul Nya.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote4sym\" name=\"sdfootnote4anc\"><sup>4</sup></a></p>\n\n<p>Meskipun kata akidah dalam hal ini merupakan istilah baru<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote5sym\" name=\"sdfootnote5anc\"><sup>5</sup></a>&nbsp;yang tidak dikenal dalam Al Qur&rsquo;an maupun Sunnah<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote6sym\" name=\"sdfootnote6anc\"><sup>6</sup></a>, namun para ulama menggunakan istilah ini. Yang menunjukan kebolehan penggunaan istilah ini. Toh, tidak ada masalah dalam penggunaan istilah jika maknanya dipahami.</p>\n\n<p>Diantara para ulama yang menggunakan istilah ini adalah Imam Al Laalakaai (418 H) dalam kitabnya&nbsp;<em>Syarhul ushul I&rsquo;tiqod ahlu sunnah wal jama&rsquo;ah</em><em>,&nbsp;</em>kemudian Imam As Shobuni (449 H) dalam kitabnya&nbsp;<em>Aqidas Salaf Ashaabul Hadits</em><strong>.</strong></p>\n\n<p>Kemudian ada beberapa istilah yang semakna dengan akidah yang juga digunakan oleh para ulama, diantaranya :</p>\n\n<h5><strong>Al Fiqhul Akbar</strong></h5>\n\n<p>Pada awal kemunculannya kata fiqih dimaksudkan kepada ilmu tentang agama islam secara umum, dan terkhusus ilmu berkenaan dengan akherat, masalah masalah hati, penghancur amal dan sebagainya.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote7sym\" name=\"sdfootnote7anc\"><sup>7</sup></a>&nbsp;Namun kemudian makna ini berubah menjadi ilmu tentang hukum hukum dhohir praktis syar&rsquo;I yang sekarang dikenal dengan ilmu fiqih.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote8sym\" name=\"sdfootnote8anc\"><sup>8</sup></a></p>\n\n<p>Sehingga karenanya ilmu fiqih di masa dahulu mencakup seluruh ilmu agama baik ilmu akidah yang bersifat&nbsp;<em>bathin</em>&nbsp;maupun ilmu hukum-hukum yang bersifat zahir<em>.&nbsp;</em>Dari sinilah kemudian muncul istilah&nbsp;<em>Fiqhul Akbar</em>&nbsp;yang dimaksudkan ilmu akidah. Karena ilmu akidah lebih agung dibandingkan ilmu cabang hukum-hukum zahir yang merupakan&nbsp;<em>Fiqhul Ashghor.</em></p>\n\n<p>Ulama yang pertama kali menggunakan istilah ini adalah Abu Hanifah (150 H) dalam kitabnya&nbsp;<em>Al Fiqhul Akbar</em><strong>.&nbsp;</strong>Beliau berkata, &ldquo;<em>Al Fiqhul Akbar</em>&nbsp;dalam agama lebih baik dari fiqih dalam ilmu, seseorang faqih tentang bagaimana cara beribadah kepada Rabb nya lebih baik dari mengumpulkan seluruh ilmu&rdquo;<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote9sym\" name=\"sdfootnote9anc\"><sup>9</sup></a></p>\n\n<h5><strong>Al Iman</strong></h5>\n\n<p>Iman secara bahasa<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote10sym\" name=\"sdfootnote10anc\"><sup>10</sup></a>&nbsp;bermakna&nbsp;<em>At Tashdiq</em>&nbsp;(pembenaran)<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote11sym\" name=\"sdfootnote11anc\"><sup>11</sup></a>&nbsp;dan&nbsp;<em>Al Iqroor</em>&nbsp;(penetapan)<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote12sym\" name=\"sdfootnote12anc\"><sup>12</sup></a>. Adapun secara istilah syar&rsquo;i iman adalah pembenaran dan penetapan serta ketundukan terhadap kebenaran yang berasal dari wahyu.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote13sym\" name=\"sdfootnote13anc\"><sup>13</sup></a>&nbsp;Dan para ulama sepakat bahwa Iman mencakup perkataan dan perbuatan, perkataan hati dan lisan, perbuatan hati dan anggota badan.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote14sym\" name=\"sdfootnote14anc\"><sup>14</sup></a></p>\n\n<p>Istilah iman merupakan kata yang paling sering disebutkan dalam Al Qur&rsquo;an maupun sunnah. Diantara para ulama yang menggunakan istilah ini adalah Ibnu Mandah (395 H) dalam kitabnya&nbsp;<em>Kitabul Iman</em>, dan Syaikhul Islam Ibnu Taimiyah (728 H) juga dalam dua kitabnya yaitu&nbsp;<em>Al Iman Ausath</em>&nbsp;dan&nbsp;<em>Al Imanul Kabir</em>, kemudian juga Imam Bukhori dalam&nbsp;<em>S-</em>&nbsp;nya membuat bab di awal sohihnya dengan nama&nbsp;<em>kitabul iman</em>.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote15sym\" name=\"sdfootnote15anc\"><sup>15</sup></a></p>\n\n<h5><strong>As Sunnah</strong></h5>\n\n<p>Kata sunnah memiliki makna yang bermacam macam tergantung disiplin ilmu masing masing<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote16sym\" name=\"sdfootnote16anc\"><sup>16</sup></a>. Dalam ilmu fiqih sunnah adalah hal hal yang jika dikerjakan mendapatkan pahala, dan jika ditinggalkan tidak apa apa. Dalam ilmu ushul fiqih assunnah bermakna sumber wahyu kedua setelah Al Qur&rsquo;an. Dalam ilmu hadits assunnah merupakan persamaan kata dari akidah, dan seterusnya. Terkadang juga sunnah digunakan sebagai antitesa dari kata bid&rsquo;ah. Namun kemudian banyak ulama yang menggunakan istilah sunnah ditunjukan kepada makna akidah dikarenakan urgensi ilmu akidah yang merupakan pokok agama islam. Diantara para ulama yang menggunakan istilah sunnah adalah Imam Ahlus Sunnah Ahmad bin Hambal (327 H) dalam&nbsp;<em>kitabus Sunnah&nbsp;</em>dan Imam Al Barbahaari (329 H) dalam kitabnya&nbsp;<em>Syarhus Sunnah</em><strong>.</strong></p>\n\n<h5><strong>At Tauhid</strong></h5>\n\n<p>Kata tauhid terdapat dalam hadits Mu&rsquo;adz ketika diutus ke yaman diatas. Diantara para ulama yang menggunakan kata ini adalah Ibnu Khuzaimah (311 H) dalam&nbsp;<em>Kitabut Tauhid Wa Itsbaatu Shifaatir Rabb &lsquo;Azza Wa Jalla&nbsp;</em>, juga Imam Al Maqriizi (845 H) dalam kitabnya&nbsp;<em>Tajridut Tauhid Al Mufid</em>, serta Syaikhul Islam Muhammad bin Abdul Wahhab (1206 H) dalam&nbsp;<em>Kitabut Tauhid Alladzi Huwa Haqqullah &lsquo;Alal &lsquo;Abid</em><strong>.</strong>&nbsp;Kitab kitab yang ditulis dengan istilah tauhid hanya membahas hal hal yang berkaitan dengan tauhid dengan ketiga macamnya, yang merupakan bagian dari ilmu akidah. Sehingga kitab kitab akidah lebih bersifat komprehensif (<em>syumul</em>). Selain membahas masalah tauhid, kitab kitab Akidah juga membahas hal hal lain seperti iman dan rukun rukunnya, islam dan rukun rukunnya, hal hal yang bersifat ghoib, kaidah kaidah dalam akidah yang pasti yang disepakati para ulama, wala dan baro, bantahan terhadap aliran sesat dll.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote17sym\" name=\"sdfootnote17anc\"><sup>17</sup></a></p>\n\n<h5><strong>As syari&rsquo;ah</strong></h5>\n\n<p>Secara umum akidah seperti sunnah, terkadang dimaksudkan seluruh yang disyariatkan oleh Allah kepada hambanya berupa hukum hukum yang disampaikan oleh para nabi. Terkadang dimaksudkan hanya masalah akidah, dan terkadang dimaksudkan masalah amaliyah fiqhiyah saja. Dalam Al Qur&rsquo;an pun makna Syariah berbeda beda, terkadang syariat bermakna seluruh ajaran yang dibawa para nabi<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote18sym\" name=\"sdfootnote18anc\"><sup>18</sup></a>, terkadang dikhususkan ajaran setiap nabi yang berbeda antara satu nabi dengan yang lainnya<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote19sym\" name=\"sdfootnote19anc\"><sup>19</sup></a>, dan terkadang dikhususkan kepada kesamaan da&rsquo;wah seluruh nabi yaitu tauhid.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote20sym\" name=\"sdfootnote20anc\"><sup>20</sup></a></p>\n\n<p>Adapun secara khusus makna Syari&rsquo;ah adalah akidah yang diyakini oleh ahlu sunnah wal Jama&rsquo;ah. Dan ini lah yang dimaksud oleh para ulama ketika menulis kitab kitab akidah dengan nama As Syari&rsquo;ah. Diantara ulama yang menggunakan istilah ini adalah Imam Al Ajurri (360 H) dalam kitab beliau&nbsp;<em>As Syarii&rsquo;ah&nbsp;</em>dan Ibnu Bathoh (387 H) dalam kitab beliau&nbsp;<em>Al Ibaanah &lsquo;Alaa Syarii&rsquo;ati Firqotun Naajiyah.</em></p>\n\n<h5><strong>Ushulud Din</strong></h5>\n\n<p>Ashlu atau pokok adalah apa yang dibangun diatasnya sesuatu. Maka ushulud din adalah sesuatu yang agama dibangun diatasnya. Dan agama islam dibangun diatas akidah yang benar. Sehingga para ulama menggunakan istilah ini dengan makna ilmu akidah. Dan ini yang kita kenal dalam perguruan perguruan tinggi di timur tengah, saudi arabia khususnya fakultas yang berkonsentrasi membahas akidah adalah fakultas ushuluddin. Diantara ulama yang menggunakan istilah ini adalah Abu Hasan Al Asy&rsquo;ari (324 H)dalam kitab beliau&nbsp;<em>Al Ibanah &lsquo;An Ushulid Diyanah</em><strong>,&nbsp;</strong>dan Ibnu Bathoh<strong>&nbsp;</strong>(387 H) dalam kitabnya&nbsp;<em>Asy Syarhu wal Ibanag &lsquo;An Ushulis sunnah Wad Diyanah</em>.&nbsp;<em>Wallahu &lsquo;Alam.</em></p>\n\n<p><br />\n<br />\nBaca selengkapnya&nbsp;<a href=\"https://muslim.or.id/24808-makna-akidah.html\">https://muslim.or.id/24808-makna-akidah.html</a></p>\n', '111', '2019-04-11 15:03:24', 'false'),
(26, 1, 'Aqidah2', '<p>Kata akidah atau&nbsp;<em>i&rsquo;tiqod</em>&nbsp;secara bahasa berasal dari kata&nbsp;<em>al &lsquo;aqdu</em>&nbsp;yang artinya berputar sekitar makna kokoh, kuat, dan erat.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote1sym\" name=\"sdfootnote1anc\"><sup>1</sup></a>&nbsp;Adapun secara istilah umum, kata akidah bermakna keyakinan yang kokoh akan sesuatu, tanpa ada keraguan<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote2sym\" name=\"sdfootnote2anc\"><sup>2</sup></a>. Jika keyakinan tersebut sesuai dengan realitas yang ada maka akidah tersebut benar, namun jika tidak sesuai maka akidah tersebut bathil.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote3sym\" name=\"sdfootnote3anc\"><sup>3</sup></a></p>\n\n<p>Setiap pemeluk suatu agama memiliki suatu akidah tertentu. Namun kebenaran akidah hanya ada dalam islam. Karena dia bersumber dari Dzat yang Maha Mengetahui, yaitu Allah&nbsp;<em>ta&rsquo;ala</em>. Sehingga karenanya tidak ada perbedaan antara akidah yang dibawa oleh para Nabi dari masa ke masa.</p>\n\n<p>Adapun akidah yang bathil, mencakup semua akidah yang bertentangan dengan wahyu. Yaitu akidah yang hanya bersumber dari akal manusia, atau berasal dari wahyu namun dirubah dan diselewengkan. Seperti akidahnya orang yahudi bahwa Uzair adalah anak Allah, atau akidahnya orang Nashroni bahwa al masih adalah anak Allah, atau akidah syiah yang berkeyakinan bahwa Allah menyesal setelah berkehendak, yang dinamakan akidah bada&rsquo;.</p>\n\n<p>Dalam definisi syar&rsquo;i, akidah dalam agama islam bermakna masalah masalah&nbsp;<em>ilmiyah</em>&nbsp;yang berasal dari Allah dan Rosulnya, yang wajib bagi setiap muslim untuk meyakininya sebagai pembenaran terhadap Allah dan Rosul Nya.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote4sym\" name=\"sdfootnote4anc\"><sup>4</sup></a></p>\n\n<p>Meskipun kata akidah dalam hal ini merupakan istilah baru<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote5sym\" name=\"sdfootnote5anc\"><sup>5</sup></a>&nbsp;yang tidak dikenal dalam Al Qur&rsquo;an maupun Sunnah<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote6sym\" name=\"sdfootnote6anc\"><sup>6</sup></a>, namun para ulama menggunakan istilah ini. Yang menunjukan kebolehan penggunaan istilah ini. Toh, tidak ada masalah dalam penggunaan istilah jika maknanya dipahami.</p>\n\n<p>Diantara para ulama yang menggunakan istilah ini adalah Imam Al Laalakaai (418 H) dalam kitabnya&nbsp;<em>Syarhul ushul I&rsquo;tiqod ahlu sunnah wal jama&rsquo;ah</em><em>,&nbsp;</em>kemudian Imam As Shobuni (449 H) dalam kitabnya&nbsp;<em>Aqidas Salaf Ashaabul Hadits</em><strong>.</strong></p>\n\n<p>Kemudian ada beberapa istilah yang semakna dengan akidah yang juga digunakan oleh para ulama, diantaranya :</p>\n\n<h5><strong>Al Fiqhul Akbar</strong></h5>\n\n<p>Pada awal kemunculannya kata fiqih dimaksudkan kepada ilmu tentang agama islam secara umum, dan terkhusus ilmu berkenaan dengan akherat, masalah masalah hati, penghancur amal dan sebagainya.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote7sym\" name=\"sdfootnote7anc\"><sup>7</sup></a>&nbsp;Namun kemudian makna ini berubah menjadi ilmu tentang hukum hukum dhohir praktis syar&rsquo;I yang sekarang dikenal dengan ilmu fiqih.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote8sym\" name=\"sdfootnote8anc\"><sup>8</sup></a></p>\n\n<p>Sehingga karenanya ilmu fiqih di masa dahulu mencakup seluruh ilmu agama baik ilmu akidah yang bersifat&nbsp;<em>bathin</em>&nbsp;maupun ilmu hukum-hukum yang bersifat zahir<em>.&nbsp;</em>Dari sinilah kemudian muncul istilah&nbsp;<em>Fiqhul Akbar</em>&nbsp;yang dimaksudkan ilmu akidah. Karena ilmu akidah lebih agung dibandingkan ilmu cabang hukum-hukum zahir yang merupakan&nbsp;<em>Fiqhul Ashghor.</em></p>\n\n<p>Ulama yang pertama kali menggunakan istilah ini adalah Abu Hanifah (150 H) dalam kitabnya&nbsp;<em>Al Fiqhul Akbar</em><strong>.&nbsp;</strong>Beliau berkata, &ldquo;<em>Al Fiqhul Akbar</em>&nbsp;dalam agama lebih baik dari fiqih dalam ilmu, seseorang faqih tentang bagaimana cara beribadah kepada Rabb nya lebih baik dari mengumpulkan seluruh ilmu&rdquo;<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote9sym\" name=\"sdfootnote9anc\"><sup>9</sup></a></p>\n\n<h5><strong>Al Iman</strong></h5>\n\n<p>Iman secara bahasa<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote10sym\" name=\"sdfootnote10anc\"><sup>10</sup></a>&nbsp;bermakna&nbsp;<em>At Tashdiq</em>&nbsp;(pembenaran)<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote11sym\" name=\"sdfootnote11anc\"><sup>11</sup></a>&nbsp;dan&nbsp;<em>Al Iqroor</em>&nbsp;(penetapan)<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote12sym\" name=\"sdfootnote12anc\"><sup>12</sup></a>. Adapun secara istilah syar&rsquo;i iman adalah pembenaran dan penetapan serta ketundukan terhadap kebenaran yang berasal dari wahyu.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote13sym\" name=\"sdfootnote13anc\"><sup>13</sup></a>&nbsp;Dan para ulama sepakat bahwa Iman mencakup perkataan dan perbuatan, perkataan hati dan lisan, perbuatan hati dan anggota badan.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote14sym\" name=\"sdfootnote14anc\"><sup>14</sup></a></p>\n\n<p>Istilah iman merupakan kata yang paling sering disebutkan dalam Al Qur&rsquo;an maupun sunnah. Diantara para ulama yang menggunakan istilah ini adalah Ibnu Mandah (395 H) dalam kitabnya&nbsp;<em>Kitabul Iman</em>, dan Syaikhul Islam Ibnu Taimiyah (728 H) juga dalam dua kitabnya yaitu&nbsp;<em>Al Iman Ausath</em>&nbsp;dan&nbsp;<em>Al Imanul Kabir</em>, kemudian juga Imam Bukhori dalam&nbsp;<em>S-</em>&nbsp;nya membuat bab di awal sohihnya dengan nama&nbsp;<em>kitabul iman</em>.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote15sym\" name=\"sdfootnote15anc\"><sup>15</sup></a></p>\n\n<h5><strong>As Sunnah</strong></h5>\n\n<p>Kata sunnah memiliki makna yang bermacam macam tergantung disiplin ilmu masing masing<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote16sym\" name=\"sdfootnote16anc\"><sup>16</sup></a>. Dalam ilmu fiqih sunnah adalah hal hal yang jika dikerjakan mendapatkan pahala, dan jika ditinggalkan tidak apa apa. Dalam ilmu ushul fiqih assunnah bermakna sumber wahyu kedua setelah Al Qur&rsquo;an. Dalam ilmu hadits assunnah merupakan persamaan kata dari akidah, dan seterusnya. Terkadang juga sunnah digunakan sebagai antitesa dari kata bid&rsquo;ah. Namun kemudian banyak ulama yang menggunakan istilah sunnah ditunjukan kepada makna akidah dikarenakan urgensi ilmu akidah yang merupakan pokok agama islam. Diantara para ulama yang menggunakan istilah sunnah adalah Imam Ahlus Sunnah Ahmad bin Hambal (327 H) dalam&nbsp;<em>kitabus Sunnah&nbsp;</em>dan Imam Al Barbahaari (329 H) dalam kitabnya&nbsp;<em>Syarhus Sunnah</em><strong>.</strong></p>\n\n<h5><strong>At Tauhid</strong></h5>\n\n<p>Kata tauhid terdapat dalam hadits Mu&rsquo;adz ketika diutus ke yaman diatas. Diantara para ulama yang menggunakan kata ini adalah Ibnu Khuzaimah (311 H) dalam&nbsp;<em>Kitabut Tauhid Wa Itsbaatu Shifaatir Rabb &lsquo;Azza Wa Jalla&nbsp;</em>, juga Imam Al Maqriizi (845 H) dalam kitabnya&nbsp;<em>Tajridut Tauhid Al Mufid</em>, serta Syaikhul Islam Muhammad bin Abdul Wahhab (1206 H) dalam&nbsp;<em>Kitabut Tauhid Alladzi Huwa Haqqullah &lsquo;Alal &lsquo;Abid</em><strong>.</strong>&nbsp;Kitab kitab yang ditulis dengan istilah tauhid hanya membahas hal hal yang berkaitan dengan tauhid dengan ketiga macamnya, yang merupakan bagian dari ilmu akidah. Sehingga kitab kitab akidah lebih bersifat komprehensif (<em>syumul</em>). Selain membahas masalah tauhid, kitab kitab Akidah juga membahas hal hal lain seperti iman dan rukun rukunnya, islam dan rukun rukunnya, hal hal yang bersifat ghoib, kaidah kaidah dalam akidah yang pasti yang disepakati para ulama, wala dan baro, bantahan terhadap aliran sesat dll.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote17sym\" name=\"sdfootnote17anc\"><sup>17</sup></a></p>\n\n<h5><strong>As syari&rsquo;ah</strong></h5>\n\n<p>Secara umum akidah seperti sunnah, terkadang dimaksudkan seluruh yang disyariatkan oleh Allah kepada hambanya berupa hukum hukum yang disampaikan oleh para nabi. Terkadang dimaksudkan hanya masalah akidah, dan terkadang dimaksudkan masalah amaliyah fiqhiyah saja. Dalam Al Qur&rsquo;an pun makna Syariah berbeda beda, terkadang syariat bermakna seluruh ajaran yang dibawa para nabi<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote18sym\" name=\"sdfootnote18anc\"><sup>18</sup></a>, terkadang dikhususkan ajaran setiap nabi yang berbeda antara satu nabi dengan yang lainnya<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote19sym\" name=\"sdfootnote19anc\"><sup>19</sup></a>, dan terkadang dikhususkan kepada kesamaan da&rsquo;wah seluruh nabi yaitu tauhid.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote20sym\" name=\"sdfootnote20anc\"><sup>20</sup></a></p>\n\n<p>Adapun secara khusus makna Syari&rsquo;ah adalah akidah yang diyakini oleh ahlu sunnah wal Jama&rsquo;ah. Dan ini lah yang dimaksud oleh para ulama ketika menulis kitab kitab akidah dengan nama As Syari&rsquo;ah. Diantara ulama yang menggunakan istilah ini adalah Imam Al Ajurri (360 H) dalam kitab beliau&nbsp;<em>As Syarii&rsquo;ah&nbsp;</em>dan Ibnu Bathoh (387 H) dalam kitab beliau&nbsp;<em>Al Ibaanah &lsquo;Alaa Syarii&rsquo;ati Firqotun Naajiyah.</em></p>\n\n<h5><strong>Ushulud Din</strong></h5>\n\n<p>Ashlu atau pokok adalah apa yang dibangun diatasnya sesuatu. Maka ushulud din adalah sesuatu yang agama dibangun diatasnya. Dan agama islam dibangun diatas akidah yang benar. Sehingga para ulama menggunakan istilah ini dengan makna ilmu akidah. Dan ini yang kita kenal dalam perguruan perguruan tinggi di timur tengah, saudi arabia khususnya fakultas yang berkonsentrasi membahas akidah adalah fakultas ushuluddin. Diantara ulama yang menggunakan istilah ini adalah Abu Hasan Al Asy&rsquo;ari (324 H)dalam kitab beliau&nbsp;<em>Al Ibanah &lsquo;An Ushulid Diyanah</em><strong>,&nbsp;</strong>dan Ibnu Bathoh<strong>&nbsp;</strong>(387 H) dalam kitabnya&nbsp;<em>Asy Syarhu wal Ibanag &lsquo;An Ushulis sunnah Wad Diyanah</em>.&nbsp;<em>Wallahu &lsquo;Alam.</em></p>\n\n<p><br />\n<br />\nBaca selengkapnya&nbsp;<a href=\"https://muslim.or.id/24808-makna-akidah.html\">https://muslim.or.id/24808-makna-akidah.html</a></p>\n', '111', '2019-04-11 15:05:03', 'false'),
(28, 1, 'Fiqih', '<p style=\"text-align:center\"><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/BHq3F9LnSXk\" width=\"560\"></iframe></p>\n', '111', '2019-04-12 09:11:54', 'false'),
(29, 1, 'Aqidah Aja', '<p>Test</p>\n\n<p>Kata akidah atau&nbsp;<em>i&rsquo;tiqod</em>&nbsp;secara bahasa berasal dari kata&nbsp;<em>al &lsquo;aqdu</em>&nbsp;yang artinya berputar sekitar makna kokoh, kuat, dan erat.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote1sym\" name=\"sdfootnote1anc\"><sup>1</sup></a>&nbsp;Adapun secara istilah umum, kata akidah bermakna keyakinan yang kokoh akan sesuatu, tanpa ada keraguan<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote2sym\" name=\"sdfootnote2anc\"><sup>2</sup></a>. Jika keyakinan tersebut sesuai dengan realitas yang ada maka akidah tersebut benar, namun jika tidak sesuai maka akidah tersebut bathil.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote3sym\" name=\"sdfootnote3anc\"><sup>3</sup></a></p>\n\n<p>Setiap pemeluk suatu agama memiliki suatu akidah tertentu. Namun kebenaran akidah hanya ada dalam islam. Karena dia bersumber dari Dzat yang Maha Mengetahui, yaitu Allah&nbsp;<em>ta&rsquo;ala</em>. Sehingga karenanya tidak ada perbedaan antara akidah yang dibawa oleh para Nabi dari masa ke masa.</p>\n\n<p>Adapun akidah yang bathil, mencakup semua akidah yang bertentangan dengan wahyu. Yaitu akidah yang hanya bersumber dari akal manusia, atau berasal dari wahyu namun dirubah dan diselewengkan. Seperti akidahnya orang yahudi bahwa Uzair adalah anak Allah, atau akidahnya orang Nashroni bahwa al masih adalah anak Allah, atau akidah syiah yang berkeyakinan bahwa Allah menyesal setelah berkehendak, yang dinamakan akidah bada&rsquo;.</p>\n\n<p>Dalam definisi syar&rsquo;i, akidah dalam agama islam bermakna masalah masalah&nbsp;<em>ilmiyah</em>&nbsp;yang berasal dari Allah dan Rosulnya, yang wajib bagi setiap muslim untuk meyakininya sebagai pembenaran terhadap Allah dan Rosul Nya.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote4sym\" name=\"sdfootnote4anc\"><sup>4</sup></a></p>\n\n<p>Meskipun kata akidah dalam hal ini merupakan istilah baru<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote5sym\" name=\"sdfootnote5anc\"><sup>5</sup></a>&nbsp;yang tidak dikenal dalam Al Qur&rsquo;an maupun Sunnah<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote6sym\" name=\"sdfootnote6anc\"><sup>6</sup></a>, namun para ulama menggunakan istilah ini. Yang menunjukan kebolehan penggunaan istilah ini. Toh, tidak ada masalah dalam penggunaan istilah jika maknanya dipahami.</p>\n\n<p>Diantara para ulama yang menggunakan istilah ini adalah Imam Al Laalakaai (418 H) dalam kitabnya&nbsp;<em>Syarhul ushul I&rsquo;tiqod ahlu sunnah wal jama&rsquo;ah</em><em>,&nbsp;</em>kemudian Imam As Shobuni (449 H) dalam kitabnya&nbsp;<em>Aqidas Salaf Ashaabul Hadits</em><strong>.</strong></p>\n\n<p>Kemudian ada beberapa istilah yang semakna dengan akidah yang juga digunakan oleh para ulama, diantaranya :</p>\n\n<h5><strong>Al Fiqhul Akbar</strong></h5>\n\n<p>Pada awal kemunculannya kata fiqih dimaksudkan kepada ilmu tentang agama islam secara umum, dan terkhusus ilmu berkenaan dengan akherat, masalah masalah hati, penghancur amal dan sebagainya.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote7sym\" name=\"sdfootnote7anc\"><sup>7</sup></a>&nbsp;Namun kemudian makna ini berubah menjadi ilmu tentang hukum hukum dhohir praktis syar&rsquo;I yang sekarang dikenal dengan ilmu fiqih.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote8sym\" name=\"sdfootnote8anc\"><sup>8</sup></a></p>\n\n<p>Sehingga karenanya ilmu fiqih di masa dahulu mencakup seluruh ilmu agama baik ilmu akidah yang bersifat&nbsp;<em>bathin</em>&nbsp;maupun ilmu hukum-hukum yang bersifat zahir<em>.&nbsp;</em>Dari sinilah kemudian muncul istilah&nbsp;<em>Fiqhul Akbar</em>&nbsp;yang dimaksudkan ilmu akidah. Karena ilmu akidah lebih agung dibandingkan ilmu cabang hukum-hukum zahir yang merupakan&nbsp;<em>Fiqhul Ashghor.</em></p>\n\n<p>Ulama yang pertama kali menggunakan istilah ini adalah Abu Hanifah (150 H) dalam kitabnya&nbsp;<em>Al Fiqhul Akbar</em><strong>.&nbsp;</strong>Beliau berkata, &ldquo;<em>Al Fiqhul Akbar</em>&nbsp;dalam agama lebih baik dari fiqih dalam ilmu, seseorang faqih tentang bagaimana cara beribadah kepada Rabb nya lebih baik dari mengumpulkan seluruh ilmu&rdquo;<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote9sym\" name=\"sdfootnote9anc\"><sup>9</sup></a></p>\n\n<h5><strong>Al Iman</strong></h5>\n\n<p>Iman secara bahasa<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote10sym\" name=\"sdfootnote10anc\"><sup>10</sup></a>&nbsp;bermakna&nbsp;<em>At Tashdiq</em>&nbsp;(pembenaran)<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote11sym\" name=\"sdfootnote11anc\"><sup>11</sup></a>&nbsp;dan&nbsp;<em>Al Iqroor</em>&nbsp;(penetapan)<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote12sym\" name=\"sdfootnote12anc\"><sup>12</sup></a>. Adapun secara istilah syar&rsquo;i iman adalah pembenaran dan penetapan serta ketundukan terhadap kebenaran yang berasal dari wahyu.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote13sym\" name=\"sdfootnote13anc\"><sup>13</sup></a>&nbsp;Dan para ulama sepakat bahwa Iman mencakup perkataan dan perbuatan, perkataan hati dan lisan, perbuatan hati dan anggota badan.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote14sym\" name=\"sdfootnote14anc\"><sup>14</sup></a></p>\n\n<p>Istilah iman merupakan kata yang paling sering disebutkan dalam Al Qur&rsquo;an maupun sunnah. Diantara para ulama yang menggunakan istilah ini adalah Ibnu Mandah (395 H) dalam kitabnya&nbsp;<em>Kitabul Iman</em>, dan Syaikhul Islam Ibnu Taimiyah (728 H) juga dalam dua kitabnya yaitu&nbsp;<em>Al Iman Ausath</em>&nbsp;dan&nbsp;<em>Al Imanul Kabir</em>, kemudian juga Imam Bukhori dalam&nbsp;<em>S-</em>&nbsp;nya membuat bab di awal sohihnya dengan nama&nbsp;<em>kitabul iman</em>.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote15sym\" name=\"sdfootnote15anc\"><sup>15</sup></a></p>\n\n<h5><strong>As Sunnah</strong></h5>\n\n<p>Kata sunnah memiliki makna yang bermacam macam tergantung disiplin ilmu masing masing<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote16sym\" name=\"sdfootnote16anc\"><sup>16</sup></a>. Dalam ilmu fiqih sunnah adalah hal hal yang jika dikerjakan mendapatkan pahala, dan jika ditinggalkan tidak apa apa. Dalam ilmu ushul fiqih assunnah bermakna sumber wahyu kedua setelah Al Qur&rsquo;an. Dalam ilmu hadits assunnah merupakan persamaan kata dari akidah, dan seterusnya. Terkadang juga sunnah digunakan sebagai antitesa dari kata bid&rsquo;ah. Namun kemudian banyak ulama yang menggunakan istilah sunnah ditunjukan kepada makna akidah dikarenakan urgensi ilmu akidah yang merupakan pokok agama islam. Diantara para ulama yang menggunakan istilah sunnah adalah Imam Ahlus Sunnah Ahmad bin Hambal (327 H) dalam&nbsp;<em>kitabus Sunnah&nbsp;</em>dan Imam Al Barbahaari (329 H) dalam kitabnya&nbsp;<em>Syarhus Sunnah</em><strong>.</strong></p>\n\n<h5><strong>At Tauhid</strong></h5>\n\n<p>Kata tauhid terdapat dalam hadits Mu&rsquo;adz ketika diutus ke yaman diatas. Diantara para ulama yang menggunakan kata ini adalah Ibnu Khuzaimah (311 H) dalam&nbsp;<em>Kitabut Tauhid Wa Itsbaatu Shifaatir Rabb &lsquo;Azza Wa Jalla&nbsp;</em>, juga Imam Al Maqriizi (845 H) dalam kitabnya&nbsp;<em>Tajridut Tauhid Al Mufid</em>, serta Syaikhul Islam Muhammad bin Abdul Wahhab (1206 H) dalam&nbsp;<em>Kitabut Tauhid Alladzi Huwa Haqqullah &lsquo;Alal &lsquo;Abid</em><strong>.</strong>&nbsp;Kitab kitab yang ditulis dengan istilah tauhid hanya membahas hal hal yang berkaitan dengan tauhid dengan ketiga macamnya, yang merupakan bagian dari ilmu akidah. Sehingga kitab kitab akidah lebih bersifat komprehensif (<em>syumul</em>). Selain membahas masalah tauhid, kitab kitab Akidah juga membahas hal hal lain seperti iman dan rukun rukunnya, islam dan rukun rukunnya, hal hal yang bersifat ghoib, kaidah kaidah dalam akidah yang pasti yang disepakati para ulama, wala dan baro, bantahan terhadap aliran sesat dll.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote17sym\" name=\"sdfootnote17anc\"><sup>17</sup></a></p>\n\n<h5><strong>As syari&rsquo;ah</strong></h5>\n\n<p>Secara umum akidah seperti sunnah, terkadang dimaksudkan seluruh yang disyariatkan oleh Allah kepada hambanya berupa hukum hukum yang disampaikan oleh para nabi. Terkadang dimaksudkan hanya masalah akidah, dan terkadang dimaksudkan masalah amaliyah fiqhiyah saja. Dalam Al Qur&rsquo;an pun makna Syariah berbeda beda, terkadang syariat bermakna seluruh ajaran yang dibawa para nabi<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote18sym\" name=\"sdfootnote18anc\"><sup>18</sup></a>, terkadang dikhususkan ajaran setiap nabi yang berbeda antara satu nabi dengan yang lainnya<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote19sym\" name=\"sdfootnote19anc\"><sup>19</sup></a>, dan terkadang dikhususkan kepada kesamaan da&rsquo;wah seluruh nabi yaitu tauhid.<a href=\"https://muslim.or.id/24808-makna-akidah.html#sdfootnote20sym\" name=\"sdfootnote20anc\"><sup>20</sup></a></p>\n\n<p>Adapun secara khusus makna Syari&rsquo;ah adalah akidah yang diyakini oleh ahlu sunnah wal Jama&rsquo;ah. Dan ini lah yang dimaksud oleh para ulama ketika menulis kitab kitab akidah dengan nama As Syari&rsquo;ah. Diantara ulama yang menggunakan istilah ini adalah Imam Al Ajurri (360 H) dalam kitab beliau&nbsp;<em>As Syarii&rsquo;ah&nbsp;</em>dan Ibnu Bathoh (387 H) dalam kitab beliau&nbsp;<em>Al Ibaanah &lsquo;Alaa Syarii&rsquo;ati Firqotun Naajiyah.</em></p>\n\n<h5><strong>Ushulud Din</strong></h5>\n\n<p>Ashlu atau pokok adalah apa yang dibangun diatasnya sesuatu. Maka ushulud din adalah sesuatu yang agama dibangun diatasnya. Dan agama islam dibangun diatas akidah yang benar. Sehingga para ulama menggunakan istilah ini dengan makna ilmu akidah. Dan ini yang kita kenal dalam perguruan perguruan tinggi di timur tengah, saudi arabia khususnya fakultas yang berkonsentrasi membahas akidah adalah fakultas ushuluddin. Diantara ulama yang menggunakan istilah ini adalah Abu Hasan Al Asy&rsquo;ari (324 H)dalam kitab beliau&nbsp;<em>Al Ibanah &lsquo;An Ushulid Diyanah</em><strong>,&nbsp;</strong>dan Ibnu Bathoh<strong>&nbsp;</strong>(387 H) dalam kitabnya&nbsp;<em>Asy Syarhu wal Ibanag &lsquo;An Ushulis sunnah Wad Diyanah</em>.&nbsp;<em>Wallahu &lsquo;Alam.</em></p>\n\n<p><br />\n<br />\nBaca selengkapnya&nbsp;<a href=\"https://muslim.or.id/24808-makna-akidah.html\">https://muslim.or.id/24808-makna-akidah.html</a></p>\n', '111', '2019-04-12 15:59:04', 'false'),
(30, 0, '', '', '111', '2019-04-15 09:18:41', 'false'),
(31, 0, '', '', '111', '2019-04-15 09:18:55', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_thn_akademik`
--

CREATE TABLE `tb_thn_akademik` (
  `kd_thn_akademik` int(11) NOT NULL,
  `nm_thn_akademik` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` enum('Aktif','Non_aktif') NOT NULL,
  `unit` enum('TK','SD','SMP PUTRA','SMP PUTRI','SMA PUTRA','SMA PUTRI') NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_thn_akademik`
--

INSERT INTO `tb_thn_akademik` (`kd_thn_akademik`, `nm_thn_akademik`, `keterangan`, `status`, `unit`, `deleted`) VALUES
(1, 'Semester Ganjil 2018/2019', '2018/2019', 'Aktif', 'SMP PUTRA', 'false'),
(2, 'Semester Genap 2018/2019', '2018/2019', 'Aktif', 'SMP PUTRA', 'false'),
(3, 'Semester Genap 2019/2020', 'Test', 'Aktif', '', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tb_topik_soal`
--

CREATE TABLE `tb_topik_soal` (
  `kd_topik_soal` int(11) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `nm_topik_soal` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_topik_soal`
--

INSERT INTO `tb_topik_soal` (`kd_topik_soal`, `kd_mapel`, `nm_topik_soal`) VALUES
(1, 'MP003/BA/VII', 'Isim Isyarah'),
(3, 'MP003/BA/VII', 'Fiil Madhi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `kd_unit` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `deleted` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kd_user` int(11) NOT NULL,
  `nip` int(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `section` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  `deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `nip`, `username`, `password`, `section`, `jabatan`, `level`, `deleted`) VALUES
(1, 111, 'superadmin', 'e10adc3949ba59abbe56e057f20f883e', 'superadmin', 'IT', '1', 'false'),
(2, 123, '123', 'd41d8cd98f00b204e9800998ecf8427e', 'akademik', 'Guru', '2', 'false'),
(3, 321, '321', '123', 'akademik', 'Guru', '3', 'false'),
(4, 111, '111', '202cb962ac59075b964b07152d234b70', 'akademik', 'Guru', '3', 'false'),
(5, 111, '111', '202cb962ac59075b964b07152d234b70', 'akademik', 'Guru', '3', 'false'),
(6, 111, '111', '202cb962ac59075b964b07152d234b70', 'akademik', 'Guru', '3', 'false'),
(7, 111, 'Baru2', 'd41d8cd98f00b204e9800998ecf8427e', 'akademik', 'Admin', '1', 'true'),
(8, 2012804166, '2012804166', '70ba17e8828243244f7373c4084853eb', 'akademik', 'Guru', '3', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen_siswa`
--
ALTER TABLE `tb_absen_siswa`
  ADD PRIMARY KEY (`kd_absen_siswa`);

--
-- Indexes for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
  ADD PRIMARY KEY (`kd_gedung`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `tb_guru1`
--
ALTER TABLE `tb_guru1`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `tb_hari`
--
ALTER TABLE `tb_hari`
  ADD PRIMARY KEY (`kd_hari`);

--
-- Indexes for table `tb_id_sekolah`
--
ALTER TABLE `tb_id_sekolah`
  ADD PRIMARY KEY (`kd_sekolah`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indexes for table `tb_jenis_cbt`
--
ALTER TABLE `tb_jenis_cbt`
  ADD PRIMARY KEY (`kd_jenis_cbt`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kls`);

--
-- Indexes for table `tb_kelompok_mapel`
--
ALTER TABLE `tb_kelompok_mapel`
  ADD PRIMARY KEY (`kd_kelompok_mapel`);

--
-- Indexes for table `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  ADD PRIMARY KEY (`kd_kepsek`);

--
-- Indexes for table `tb_kls_paralel`
--
ALTER TABLE `tb_kls_paralel`
  ADD PRIMARY KEY (`kd_kls_paralel`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`kd_materi`);

--
-- Indexes for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`kd_ortu`);

--
-- Indexes for table `tb_predikat`
--
ALTER TABLE `tb_predikat`
  ADD PRIMARY KEY (`kd_predikat`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`kd_ruangan`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nipd`);

--
-- Indexes for table `tb_soal_essay`
--
ALTER TABLE `tb_soal_essay`
  ADD PRIMARY KEY (`kd_soal_essay`);

--
-- Indexes for table `tb_soal_pg`
--
ALTER TABLE `tb_soal_pg`
  ADD PRIMARY KEY (`kd_soal_pg`);

--
-- Indexes for table `tb_sub_materi`
--
ALTER TABLE `tb_sub_materi`
  ADD PRIMARY KEY (`kd_sub_materi`);

--
-- Indexes for table `tb_thn_akademik`
--
ALTER TABLE `tb_thn_akademik`
  ADD PRIMARY KEY (`kd_thn_akademik`);

--
-- Indexes for table `tb_topik_soal`
--
ALTER TABLE `tb_topik_soal`
  ADD PRIMARY KEY (`kd_topik_soal`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`kd_unit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen_siswa`
--
ALTER TABLE `tb_absen_siswa`
  MODIFY `kd_absen_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
  MODIFY `kd_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_guru1`
--
ALTER TABLE `tb_guru1`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_hari`
--
ALTER TABLE `tb_hari`
  MODIFY `kd_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_id_sekolah`
--
ALTER TABLE `tb_id_sekolah`
  MODIFY `kd_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `kd_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jenis_cbt`
--
ALTER TABLE `tb_jenis_cbt`
  MODIFY `kd_jenis_cbt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `kd_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelompok_mapel`
--
ALTER TABLE `tb_kelompok_mapel`
  MODIFY `kd_kelompok_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  MODIFY `kd_kepsek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kls_paralel`
--
ALTER TABLE `tb_kls_paralel`
  MODIFY `kd_kls_paralel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `kd_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `kd_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_predikat`
--
ALTER TABLE `tb_predikat`
  MODIFY `kd_predikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `kd_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_soal_essay`
--
ALTER TABLE `tb_soal_essay`
  MODIFY `kd_soal_essay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_soal_pg`
--
ALTER TABLE `tb_soal_pg`
  MODIFY `kd_soal_pg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sub_materi`
--
ALTER TABLE `tb_sub_materi`
  MODIFY `kd_sub_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_thn_akademik`
--
ALTER TABLE `tb_thn_akademik`
  MODIFY `kd_thn_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_topik_soal`
--
ALTER TABLE `tb_topik_soal`
  MODIFY `kd_topik_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `kd_unit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
