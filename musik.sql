-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 04:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musik`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pasword` varchar(18) NOT NULL,
  `nama` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `pasword`, `nama`) VALUES
(1, 'novadian', '1234', ''),
(2, 'novadian', 'dudu@jiji', 'intan ayuni d'),
(3, 'namjoon', 'dudu@jiji', 'jhgjhg'),
(4, 'jungkook', '1234@123', 'dudu'),
(5, 'suga', '1234', 'min yoongi'),
(6, 'novadian', '1234', ''),
(7, 'buwung', 'buwung', 'buwung'),
(8, 'buwung', 'buwung', 'buwung'),
(9, 'buwung', 'buwung', 'buwung'),
(10, 'buwung', 'buwung', ''),
(11, 'buwung', 'buwung', '');

-- --------------------------------------------------------

--
-- Table structure for table `nama_band`
--

CREATE TABLE `nama_band` (
  `ID_BAND` int(11) NOT NULL,
  `nama_band` enum('BTS','EXO','TXT','GOT7') NOT NULL,
  `personil` varchar(225) NOT NULL,
  `judul_lagu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nama_band`
--
ALTER TABLE `nama_band`
  ADD PRIMARY KEY (`ID_BAND`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nama_band`
--
ALTER TABLE `nama_band`
  MODIFY `ID_BAND` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
