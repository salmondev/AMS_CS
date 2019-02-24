-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 04:14 AM
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
-- Database: `db_easyqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `building_table`
--

CREATE TABLE `building_table` (
  `BUILDING_RID` int(11) NOT NULL,
  `BUILDING_NAME` text NOT NULL,
  `BUILDING_LAT` float NOT NULL,
  `BUILDING_LONG` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `building_table`
--

INSERT INTO `building_table` (`BUILDING_RID`, `BUILDING_NAME`, `BUILDING_LAT`, `BUILDING_LONG`) VALUES
(1, 'ท.101\r\n', 13.8113, 100.505),
(2, 'ท.102\r\n', 13.8119, 100.505);

-- --------------------------------------------------------

--
-- Table structure for table `floor_table`
--

CREATE TABLE `floor_table` (
  `FLOOR_RID` int(11) NOT NULL,
  `FLOOR_NUMBER` int(11) NOT NULL,
  `BUILDING_RID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `floor_table`
--

INSERT INTO `floor_table` (`FLOOR_RID`, `FLOOR_NUMBER`, `BUILDING_RID`) VALUES
(1, 12, 1),
(2, 14, 1),
(3, 1, 2),
(4, 2, 2),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `history_table`
--

CREATE TABLE `history_table` (
  `HISTORY_RID` int(11) NOT NULL,
  `HISTORY_item_uid` text NOT NULL,
  `HISTORY_OWNER_UID` int(11) NOT NULL,
  `HISTORY_STATUS_NAME` text NOT NULL,
  `HISTORY_BUILDING_NAME` text NOT NULL,
  `HISTORY_BUILDING_LAT` float NOT NULL,
  `HISTORY_BUILDING_LONG` float NOT NULL,
  `HISTORY_FLOOR` int(11) NOT NULL,
  `HISTORY_ROOM` int(11) NOT NULL,
  `HISTORY_HOUR` int(11) NOT NULL,
  `HISTORY_MINUTE` int(11) NOT NULL,
  `HISTORY_DAY` int(11) NOT NULL,
  `HISTORY_MONTH` int(11) NOT NULL,
  `HISTORY_YEAR` int(11) NOT NULL,
  `HISTORY_POS_X` int(11) NOT NULL,
  `HISTORY_POS_Y` int(11) NOT NULL,
  `MAP_RID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_table`
--

CREATE TABLE `item_table` (
  `item_uid` text NOT NULL,
  `item_serial` text NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_table`
--

INSERT INTO `item_table` (`item_uid`, `item_serial`, `item_name`) VALUES
('1234567812345678-0000\r\n', 'FQKY104\r\n', 'PC TYPE A\r\n'),
('4122548563125484-0000\r\n', 'ABCJ201\r\n', 'PC TYPE B\r\n'),
('2216546541648649-0000\r\n', 'GGWS201\r\n', 'PC TYPE C\r\n'),
('7418896358874123-0000\r\n', 'QOSD201\r\n', 'PC TYPE B\r\n'),
('9336579494651648-0000\r\n', 'HJTR201\r\n', 'PC TYPE B\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `map_table`
--

CREATE TABLE `map_table` (
  `MAP_RID` int(11) NOT NULL,
  `MAP_IMG` blob NOT NULL,
  `MAP_NAME` text NOT NULL,
  `MAP_STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `map_table`
--

INSERT INTO `map_table` (`MAP_RID`, `MAP_IMG`, `MAP_NAME`, `MAP_STATUS`) VALUES
(1, '', 'ท.101/12/1201\r\n', 0),
(2, '', 'ท.101/14/1401\r\n', 1),
(3, '', 'ท.102/1/0101\r\n', 0),
(4, '', 'ท.102/1/0101\r\n', 1),
(5, '', 'ท.102/2/0101\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner_table`
--

CREATE TABLE `owner_table` (
  `OWNER_UID` varchar(100) NOT NULL,
  `OWNER_FNAME` varchar(100) NOT NULL,
  `OWNER_LNAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner_table`
--

INSERT INTO `owner_table` (`OWNER_UID`, `OWNER_FNAME`, `OWNER_LNAME`) VALUES
('00456312\r\n', 'Rittinan\r\n', 'Chanpen\r\n'),
('00752163\r\n', 'Ittison\r\n', 'Ngamwong\r\n'),
('00932451\r\n', 'Peeranut\r\n', 'Deejung\r\n'),
('00154262\r\n', 'Sukrit\r\n', 'Ampon\r\n'),
('00531452\r\n', 'Pairat\r\n', 'Paisan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `room_table`
--

CREATE TABLE `room_table` (
  `ROOM_RID` int(11) NOT NULL,
  `ROOM_NUMBER` int(11) NOT NULL,
  `FLOOR_RID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_table`
--

INSERT INTO `room_table` (`ROOM_RID`, `ROOM_NUMBER`, `FLOOR_RID`) VALUES
(1, 1401, 2),
(2, 1402, 2),
(3, 1403, 2),
(4, 1201, 1),
(5, 1202, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_table`
--

CREATE TABLE `status_table` (
  `STATUS_RID` int(11) NOT NULL,
  `STATUS_NAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_table`
--

INSERT INTO `status_table` (`STATUS_RID`, `STATUS_NAME`) VALUES
(1, 'ปกติ\r\n'),
(2, 'ชำรุด\r\n'),
(3, 'เสีย\r\n'),
(4, 'ซ่อม\r\n'),
(5, 'สูญหาย\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building_table`
--
ALTER TABLE `building_table`
  ADD PRIMARY KEY (`BUILDING_RID`),
  ADD KEY `BUILDING_RID` (`BUILDING_RID`);

--
-- Indexes for table `floor_table`
--
ALTER TABLE `floor_table`
  ADD PRIMARY KEY (`FLOOR_RID`),
  ADD KEY `BUILDING_RID` (`BUILDING_RID`);

--
-- Indexes for table `history_table`
--
ALTER TABLE `history_table`
  ADD PRIMARY KEY (`HISTORY_RID`),
  ADD KEY `MAP_RID` (`MAP_RID`);

--
-- Indexes for table `map_table`
--
ALTER TABLE `map_table`
  ADD PRIMARY KEY (`MAP_RID`);

--
-- Indexes for table `room_table`
--
ALTER TABLE `room_table`
  ADD PRIMARY KEY (`ROOM_RID`),
  ADD KEY `FLOOR_RID` (`FLOOR_RID`);

--
-- Indexes for table `status_table`
--
ALTER TABLE `status_table`
  ADD PRIMARY KEY (`STATUS_RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `floor_table`
--
ALTER TABLE `floor_table`
  MODIFY `FLOOR_RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history_table`
--
ALTER TABLE `history_table`
  MODIFY `HISTORY_RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_table`
--
ALTER TABLE `map_table`
  MODIFY `MAP_RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room_table`
--
ALTER TABLE `room_table`
  MODIFY `ROOM_RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_table`
--
ALTER TABLE `status_table`
  MODIFY `STATUS_RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `floor_table`
--
ALTER TABLE `floor_table`
  ADD CONSTRAINT `BUILDING_RID` FOREIGN KEY (`BUILDING_RID`) REFERENCES `building_table` (`BUILDING_RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_table`
--
ALTER TABLE `history_table`
  ADD CONSTRAINT `MAP_RID` FOREIGN KEY (`MAP_RID`) REFERENCES `map_table` (`MAP_RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_table`
--
ALTER TABLE `room_table`
  ADD CONSTRAINT `FLOOR_RID` FOREIGN KEY (`FLOOR_RID`) REFERENCES `floor_table` (`FLOOR_RID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
