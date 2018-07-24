-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 09:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL COMMENT 'ไอดีหลักของ item',
  `name` varchar(100) NOT NULL COMMENT 'ชื่อของ item',
  `detail` text NOT NULL COMMENT 'รายละเอียดของ item',
  `odate` date NOT NULL COMMENT 'วันที่เพิ่ม item'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id`, `name`, `detail`, `odate`) VALUES
(38, 'Computer', 'Compute floor 1F', '2018-07-23'),
(59, 'Computer', 'Computer 2F', '2018-07-18'),
(61, 'Computer', 'Computer 3F', '2018-07-18'),
(62, 'Printer', 'Printer 1F', '2018-07-18'),
(63, 'Scanner', 'Scanner 1F', '2018-07-18'),
(64, 'Printer', 'Printer 2F', '2018-07-18'),
(65, 'Server', 'Server 1F', '2018-07-18'),
(66, 'Server ', 'Server F5', '2018-07-19'),
(70, 'TEST', 'test', '2018-07-23'),
(72, 'Deleted', 'delete test', '2018-07-23'),
(73, 'date delete', 'date delete', '2018-07-23'),
(74, 'ADS', 'ADD', '2018-07-23'),
(75, 'C', 'CC', '2018-07-23'),
(76, 'XX', 'XX', '2018-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีหลักของ item', AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
