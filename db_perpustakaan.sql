-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 05:34 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user`, `password`) VALUES
('', ''),
('dhoha', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(100) NOT NULL,
  `nama_anggota` varchar(250) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `Tempat_lahir` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama_anggota`, `alamat`, `jenis_kelamin`, `agama`, `pekerjaan`, `Tempat_lahir`, `tanggal_lahir`, `tanggal_daftar`) VALUES
('P0012020', 'Dhaharotul Fadhilah', 'Tegalsambi RT 05 rw 01 ', 'Perempuan', 'Islam', 'Mahasiswa', 'Jepara', '1998-07-26', '2020-04-14'),
('P0022020', 'Aulia', 'Solo', 'Perempuan', 'islam', 'mahasiswi', 'jepara', '1998-12-26', '2020-04-15'),
('P0032020', 'Agus', 'Krapyak Jepara', 'Laki-laki', 'Islam', 'Wiraswasta', 'Surabaya', NULL, '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(100) NOT NULL,
  `judul_buku` varchar(250) DEFAULT NULL,
  `pengarang` varchar(250) DEFAULT NULL,
  `penerbit` varchar(10) DEFAULT NULL,
  `jumlah_halaman` int(10) DEFAULT NULL,
  `tahun_terbit` char(10) DEFAULT NULL,
  `asal_perolehan` varchar(200) DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `jumlah_halaman`, `tahun_terbit`, `asal_perolehan`, `tanggal_input`) VALUES
('B001', 'Sistem basis Data', 'Ahmad Fauzan', 'Sinar Jaya', 500, '2019', 'Hibah', '2020-04-21'),
('B002', 'Manajemen Proses', 'Ahmad Supandi', 'Gramedia', 450, '2020', 'dana hibah', '2019-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_anggota` varchar(100) DEFAULT NULL,
  `id_buku` varchar(100) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_anggota`, `id_buku`, `tanggal_peminjaman`) VALUES
('P0012020', 'B001', '2020-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `id_anggota` varchar(100) DEFAULT NULL,
  `id_buku` varchar(100) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengembalian`
--

INSERT INTO `tb_pengembalian` (`id_anggota`, `id_buku`, `tgl_pengembalian`) VALUES
('P0012020', 'B001', '2020-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id_anggota` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id_anggota`, `password`) VALUES
(NULL, NULL),
('P0012020', 'P012020'),
('P0032020', 'P0032020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`) VALUES
('Trans001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_paswd` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `nama`, `u_name`, `u_paswd`, `role`) VALUES
(1, 'dhoha', 'dhohaadmin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user admin', 'user', '21232f297a57a5a743894a0e4a801fc3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD KEY `tb_pengunjung_ibfk_1` (`id_anggota`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`),
  ADD CONSTRAINT `tb_peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`);

--
-- Constraints for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD CONSTRAINT `tb_pengembalian_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`),
  ADD CONSTRAINT `tb_pengembalian_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`);

--
-- Constraints for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD CONSTRAINT `tb_pengunjung_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
