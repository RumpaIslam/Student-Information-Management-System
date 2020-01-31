-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 10:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p11`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(2) NOT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Age`, `sex`, `country`, `photo`) VALUES
('12345678', ' Mst. Rumpa Islam', 22, 'Female', 'Bangladesh', 'upload/IMG_20180628_183821.jpg'),
('2017', ' Rumpa islam', 22, 'Female', 'Canada', 'upload/IMG_20170628_165459.jpg'),
('2017100000085', 'Rumpa islam', 22, 'Female', 'Bangladesh', 'upload/5.jpg'),
('3', ' Asfia asfia', 24, 'Female', 'Bangladesh', 'upload/6.jpg'),
('444', 'Raisa', 22, 'Female', 'Bangladesh', 'upload/5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
