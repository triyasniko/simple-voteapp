-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2019 at 09:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_list`
--

CREATE TABLE `tb_list` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto_kandidat` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `suara` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_list`
--

INSERT INTO `tb_list` (`id`, `nama`, `foto_kandidat`, `deskripsi`, `suara`) VALUES
(1, 'Boku No Hero', 'pict1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 15),
(2, 'Shingeki No Kyoujin', 'pict2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 12),
(3, 'Violet Evergarden', 'pict3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_list`
--
ALTER TABLE `tb_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_list`
--
ALTER TABLE `tb_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
