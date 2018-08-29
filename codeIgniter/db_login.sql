-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Aug 29, 2018 at 08:03 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `pass`, `level`) VALUES
(120000, 'Joko', 'e10adc3949ba59abbe56e057f20f883e', 1),
(120001, 'Budi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `prodi` varchar(50) NOT NULL DEFAULT 'Informatika',
  `kelas` varchar(2) NOT NULL DEFAULT 'A2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `pass`, `prodi`, `kelas`) VALUES
(41155050160111, 'Hafidh Pradipta Arrasyid', '41155050160111', 'informatika', 'A2'),
(41155050160112, 'Ujang', '41155050160111', 'Informatika', 'A2'),
(41155050160113, 'Yusuf Maulana', '41155050160113', 'Informatika', 'A2'),
(41155050160114, 'Arifal Hidayat', '41155050160114', 'Informatika', 'A2'),
(41155050160115, 'Andri Sofiana', '41155050160115', 'Informatika', 'A2'),
(41155050160116, 'Banun Raffi', '41155050160116', 'Informatika', 'A2'),
(41155050160117, 'Lia Juliantini', '41155050160117', 'Informatika', 'A2'),
(41155050160118, 'Dwi Prasetya', '41155050160118', 'Informatika', 'A2'),
(41155050160119, 'Ridwan Rohaman', '41155050160119', 'Informatika', 'A2'),
(41155050160120, 'Agung M Nurdin', '41155050160120', 'Informatika', 'A2'),
(41155050160121, 'Ares Wahyu Wiguna', '41155050160121', 'Informatika', 'A2'),
(41155050160122, 'Muhammad Oeloen', '41155050160122', 'Informatika', 'A2'),
(41155050160123, 'M Dzikri', '41155050160123', 'Informatika', 'A2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nip` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120002;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41155050160124;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
