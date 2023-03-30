-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 06:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pubg`
--

-- --------------------------------------------------------

--
-- Table structure for table `pubg_user`
--

CREATE TABLE `pubg_user` (
  `id` int(8) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pubg_user`
--

INSERT INTO `pubg_user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'me@me.me', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'agung1', 'agung@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'diva', 'diva123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'pp', 'texts', '202cb962ac59075b964b07152d234b70'),
(5, 'ghaida', 'ghaida@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id` int(11) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `nominal` text NOT NULL,
  `wa` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id`, `metode`, `nominal`, `wa`) VALUES
(1231321, 'ShopeePay', '788 UC = Rp. 138.000', 23232323),
(12345345, 'OVO', '525 UC = Rp. 96.000', 0),
(231231455, 'ShopeePay', '263 UC = Rp. 50.000', 0),
(1616616161, 'Gopay', '2425 UC = Rp. 406.000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pubg_user`
--
ALTER TABLE `pubg_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pubg_user`
--
ALTER TABLE `pubg_user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
