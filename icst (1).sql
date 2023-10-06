-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icst`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `passWord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `email`, `userName`, `passWord`) VALUES
(1, 'jordan05delacruz@gmail.com', 'Jordan', '18jordan_5');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'email@gmail.com', '18313', 1695916974),
(2, 'jordan05delacruz@gmail.com', '24999', 1695917040),
(3, 'jordan05delacruz@gmail.com', '93832', 1695917508),
(4, 'jordan05delacruz@gmail.com', '79532', 1695917828),
(5, 'email@gmail.com', '92192', 1695950797),
(6, 'jordan05delacruz@gmail.com', '34079', 1695977737),
(7, 'jordan05delacruz@gmail.com', '11424', 1695977790),
(8, 'jordan05delacruz@gmail.com', '24898', 1695980710),
(9, '14fayecruz@gmail.com', '28954', 1695980828),
(10, '14fayecruz@gmail.com', '15874', 1695981058),
(11, 'jordan05delacruz@gmail.com', '42342', 1695981488),
(12, 'jordan05delacruz@gmail.com', '34008', 1695981574),
(13, 'jordan05delacruz@gmail.com', '62978', 1695981691),
(14, 'jordan05delacruz@gmail.com', '95105', 1695981694),
(15, 'jordan05delacruz@gmail.com', '22520', 1695981786),
(16, 'jordan05delacruz@gmail.com', '71101', 1695981976),
(17, 'jordan05delacruz@gmail.com', '21326', 1695982175),
(18, 'jordan05delacruz@gmail.com', '33944', 1695982282),
(19, 'jordan05delacruz@gmail.com', '79214', 1695982465),
(20, 'jordan05delacruz@gmail.com', '45391', 1695983289),
(21, 'jordan05delacruz@gmail.com', '90113', 1695983542),
(22, 'jordan05delacruz@gmail.com', '58219', 1695983613),
(23, 'jordan05delacruz@gmail.com', '69549', 1695983696),
(24, 'jordan05delacruz@gmail.com', '98993', 1695983798);

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `Id` int(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passWord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`Id`, `userName`, `email`, `passWord`) VALUES
(1, 'teacher', 'jorgz18druz@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expire`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
