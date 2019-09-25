-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 02:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kls` varchar(10) NOT NULL,
  `angka` int(11) NOT NULL,
  `nm_kelas` varchar(30) NOT NULL,
  `unit` enum('SD','SMP','SMA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kls`, `angka`, `nm_kelas`, `unit`) VALUES
('I', 1, 'Kelas I', 'SD'),
('II', 2, 'Kelas II', 'SD'),
('III', 3, 'Kelas III', 'SD'),
('IV', 4, 'Kelas IV', 'SD'),
('IX', 9, 'Kelas IX', 'SMP'),
('V', 5, 'Kelas V', 'SD'),
('VI', 6, 'Kelas VI', 'SD'),
('VII', 7, 'Kelas VII', 'SMP'),
('VIII', 8, 'Kelas VIII', 'SMP'),
('X', 10, 'Kelas X', 'SMA'),
('XI', 11, 'Kelas XI', 'SMA'),
('XII', 12, 'Kelas XII', 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kls_paralel`
--

CREATE TABLE `tb_kls_paralel` (
  `kd_kls_paralel` int(11) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nm_kls_paralel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `kd_ortu` int(11) NOT NULL,
  `nipd` int(11) NOT NULL,
  `nm_bpk` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `thn_lahir_bpk` date NOT NULL,
  `thn_lahir_ibu` date NOT NULL,
  `pendidikan_bpk` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `pekerjaan_bpk` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `no_tlp_bpk` varchar(30) NOT NULL,
  `no_tlp_ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ortu`
--

INSERT INTO `tb_ortu` (`kd_ortu`, `nipd`, `nm_bpk`, `nm_ibu`, `thn_lahir_bpk`, `thn_lahir_ibu`, `pendidikan_bpk`, `pendidikan_ibu`, `pekerjaan_bpk`, `pekerjaan_ibu`, `no_tlp_bpk`, `no_tlp_ibu`) VALUES
(1, 151607008, 'Abu Fulan', 'Ummu Fulan', '1970-01-02', '1970-01-01', 'S1', 'S1', 'Wirausaha', 'IRT', '008', '008');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nipd` bigint(30) NOT NULL,
  `nisn` bigint(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `kd_kls_paralel` int(10) NOT NULL,
  `kd_jurusan` int(10) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kd_pos` int(10) NOT NULL,
  `status_kps` varchar(30) NOT NULL,
  `no_kps` int(30) NOT NULL,
  `skhun` int(30) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `photo` text NOT NULL,
  `password` text NOT NULL,
  `status` enum('Aktif','Unaktif','Lulus','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nipd`, `nisn`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `kd_kls`, `kd_kls_paralel`, `kd_jurusan`, `angkatan`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `kd_pos`, `status_kps`, `no_kps`, `skhun`, `no_tlp`, `photo`, `password`, `status`) VALUES
(151607008, 26354847, 123456789, 'FARADJ FARIZI', 'Tangerang', '2000-12-30', 'Laki-laki', 'Islam', 'VII', 0, 0, 12, 'Jl. Buni No. 1, Cibubur, Ciracas, Munjul, Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13850', '01', '02', 'Munjul', 'Ciracas', 'Jakarta Timur', 13850, 'Non', 123456789, 123456789, 123456789, '', 'e10adc3949ba59abbe56e057f20f883e', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kls`);

--
-- Indexes for table `tb_kls_paralel`
--
ALTER TABLE `tb_kls_paralel`
  ADD PRIMARY KEY (`kd_kls_paralel`);

--
-- Indexes for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`kd_ortu`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nipd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kls_paralel`
--
ALTER TABLE `tb_kls_paralel`
  MODIFY `kd_kls_paralel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `kd_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
