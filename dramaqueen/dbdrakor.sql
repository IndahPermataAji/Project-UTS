-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 07:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdrakor`
--

-- --------------------------------------------------------

--
-- Table structure for table `complete`
--

CREATE TABLE `complete` (
  `id` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlah_ep` int(5) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complete`
--

INSERT INTO `complete` (`id`, `judul`, `tahun`, `jumlah_ep`, `genre`, `negara`, `gambar`) VALUES
(1, 'School 2015', 2015, 16, 'School, Romance', 'Korea Selatan', '2810202007520426102020064951School-2015.jpg'),
(2, 'Hotel Del Luna', 2019, 16, 'Horor, Romance', 'Korea Selatan', '281020200604335d45044834825.jpg'),
(3, 'Goblin', 2018, 16, 'Romance, Fantasy', 'Korea Selatan', '28102020072326goblin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing`
--

CREATE TABLE `ongoing` (
  `id` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlah_ep` int(5) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongoing`
--

INSERT INTO `ongoing` (`id`, `judul`, `tahun`, `jumlah_ep`, `genre`, `negara`, `gambar`) VALUES
(1, '18 Again', 2020, 16, 'Fantasy,School,Romance', 'Korea Selatan', '28102020060056921362624.jpeg'),
(2, 'Flower Of Evil', 2020, 16, 'Romance, Mystery', 'Korea Selatan', '28102020060353flower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'Indah', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Permata', 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complete`
--
ALTER TABLE `complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongoing`
--
ALTER TABLE `ongoing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complete`
--
ALTER TABLE `complete`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ongoing`
--
ALTER TABLE `ongoing`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
