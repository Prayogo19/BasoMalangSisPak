-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 09:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basomalang`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` varchar(2) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `nama_gejala`) VALUES
('G1', 'Usia Kehamilan < 20 Minggu'),
('G2', 'Terjadi Pendarahan pada Vagina'),
('G3', 'Pendarahan pada Vagina Tidak Terlalu banyak'),
('G4', 'Pendarahan pada Vagina Bertambah Banyak'),
('G5', 'Pendarahan yang Keluar dari Vagina Berwarna Kecokelatan'),
('G6', 'Pendarahan yang Keluar dari Vagina Berwarna Merah Segar'),
('G7', 'Perut Tidak Terasa Nyeri atau Kram'),
('G8', 'Perut Terasa Nyeri Ringan Seperti Kontraksi Saat Persalinan'),
('G9', 'Terbukanya Mulut Rahim (Serviks)'),
('G1', 'Darah Bercampur Lendir');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` varchar(2) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `nama_penyakit`) VALUES
('P1', 'Abortus Imminens'),
('P2', 'Abortus Insipiens');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `tanggal_lahir`, `alamat`, `level`) VALUES
(7, 'namauser', 'user1234', 'Yanti', '1995-06-20', 'alamat test', 'user'),
(8, 'admin', 'admin', 'basomalang', '2017-10-16', 'alamatadmin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
