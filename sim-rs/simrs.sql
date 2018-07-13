-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 08:56 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `password`, `hak_akses`, `created`, `modified`) VALUES
(3, 'arinil', '321', 'dokter', '2018-06-05 05:57:01', '2018-06-05 06:05:17'),
(4, 'andy', '123', 'admin', '2018-06-05 00:00:00', '2018-06-05 00:00:00'),
(5, 'anfel', '1234', 'front office', '2018-06-04 00:00:00', '2018-06-04 00:00:00'),
(6, 'fitri', '321', 'keuangan', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departement`
--

CREATE TABLE `tb_departement` (
  `id_departement` int(11) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_departement`
--

INSERT INTO `tb_departement` (`id_departement`, `departement`, `created`, `modified`) VALUES
(2, 'kesehatan', '2018-05-30 03:41:39', '2018-05-30 03:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gedung`
--

CREATE TABLE `tb_gedung` (
  `id_gedung` int(11) NOT NULL,
  `gedung` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gedung`
--

INSERT INTO `tb_gedung` (`id_gedung`, `gedung`, `created`, `modified`) VALUES
(2, 'kantor', '2018-05-30 03:52:05', '2018-05-30 03:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `jabatan`, `created`, `modified`) VALUES
(2, 'jabatan', '2018-05-30 03:11:58', '2018-05-30 03:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenjang`
--

CREATE TABLE `tb_jenjang` (
  `id_jenjang` int(11) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`id_jenjang`, `jenjang`, `created`, `modified`) VALUES
(1, 'jenjang', '2018-05-30 02:46:34', '2018-05-30 02:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kd_kategori` varchar(100) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kd_kategori`, `nm_kategori`, `deskripsi`, `created`, `modified`) VALUES
(2, 'KT', 'kursi Tunggu', '', '2018-06-05 09:47:40', '2018-06-05 09:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `id_merk` int(11) NOT NULL,
  `kd_merk` varchar(100) NOT NULL,
  `nm_merk` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `kd_merk`, `nm_merk`, `catatan`, `created`, `modified`) VALUES
(2, 'bcbg', 'gdbdg', 'dgsg', '2018-06-06 05:59:37', '2018-06-06 05:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `no_ktp` int(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(50) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pddkn_terakhir` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nm_pegawai`, `no_ktp`, `pangkat`, `jabatan`, `alamat`, `telp`, `tmpt_lahir`, `tgl_lahir`, `agama`, `pddkn_terakhir`, `created`, `modified`) VALUES
(2, 'hsghsgh', 987654, '', '', '', 0, '', '0000-00-00', '', '', '2018-06-05 08:32:10', '2018-06-05 08:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pensiun`
--

CREATE TABLE `tb_pensiun` (
  `id_pensiun` int(11) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `tgl_pensiun` date NOT NULL,
  `catatan` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pensiun`
--

INSERT INTO `tb_pensiun` (`id_pensiun`, `nm_pegawai`, `tgl_pensiun`, `catatan`, `created`, `modified`) VALUES
(1, 'hsghsgh', '2018-06-10', '', '2018-06-05 08:40:34', '2018-06-05 08:40:34'),
(2, '', '0000-00-00', 'ghsghgha', '2018-06-05 08:55:18', '2018-06-05 08:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(11) NOT NULL,
  `poli` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `poli`, `created`, `modified`) VALUES
(2, 'anak', '2018-05-30 03:19:52', '2018-05-30 03:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rawat`
--

CREATE TABLE `tb_rawat` (
  `id_rawat` int(11) NOT NULL,
  `rawat` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rawat`
--

INSERT INTO `tb_rawat` (`id_rawat`, `rawat`, `created`, `modified`) VALUES
(2, 'melati', '2018-05-30 04:01:30', '2018-05-30 08:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regpasien`
--

CREATE TABLE `tb_regpasien` (
  `id_reg` int(11) NOT NULL,
  `no_rekmedis` int(255) NOT NULL,
  `nm_pasien` varchar(50) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `stts_menikah` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regpasien`
--

INSERT INTO `tb_regpasien` (`id_reg`, `no_rekmedis`, `nm_pasien`, `jk`, `gol_darah`, `tmpt_lahir`, `tgl_lahir`, `nm_ibu`, `alamat`, `agama`, `no_hp`, `pekerjaan`, `stts_menikah`, `created`, `modified`) VALUES
(6, 1, 'alex', 'Laki-Laki', 'AB', 'gowa', '1992-06-08', 'ander', 'pallangga', 'Hindu', 9567562, 'Petani', 'Belum Kawin', '2018-05-29 05:57:55', '2018-05-29 05:57:55'),
(7, 9, 'as', 'Perempuan', 'B', 'piierce', '1999-02-21', 'hati', 'jghkdhs', 'Hindu', 2147483647, 'Pegawai Swasta', 'Belum Kawin', '2018-05-29 06:52:42', '2018-05-29 07:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesialis`
--

CREATE TABLE `tb_spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spesialis`
--

INSERT INTO `tb_spesialis` (`id_spesialis`, `spesialis`, `created`, `modified`) VALUES
(2, 'kulit', '2018-05-30 03:32:01', '2018-05-30 08:20:25'),
(3, 'jantung', '2018-05-30 08:20:55', '2018-05-30 08:20:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_departement`
--
ALTER TABLE `tb_departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Indexes for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD PRIMARY KEY (`id_rawat`);

--
-- Indexes for table `tb_regpasien`
--
ALTER TABLE `tb_regpasien`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indexes for table `tb_spesialis`
--
ALTER TABLE `tb_spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_departement`
--
ALTER TABLE `tb_departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_merk`
--
ALTER TABLE `tb_merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  MODIFY `id_pensiun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  MODIFY `id_rawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_regpasien`
--
ALTER TABLE `tb_regpasien`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_spesialis`
--
ALTER TABLE `tb_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
