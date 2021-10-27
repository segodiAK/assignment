-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysurvey`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodtable`
--

CREATE TABLE `foodtable` (
  `contactNum` int(10) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `age` int(3) NOT NULL,
  `favFood` varchar(255) NOT NULL,
  `meals` int(12) NOT NULL,
  `movie` int(12) NOT NULL,
  `tv` int(12) NOT NULL,
  `radio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodtable`
--

INSERT INTO `foodtable` (`contactNum`, `surname`, `firstName`, `date`, `age`, `favFood`, `meals`, `movie`, `tv`, `radio`) VALUES
(660689000, 'SEGODI', 'ADOLF', '2021-10-26', 22, 'Pizza,Pasta,Chicken', 1, 1, 1, 1),
(660689026, 'SEGODI', 'ADOLF', '2021-10-26', 31, 'Pizza,Pasta', 1, 1, 1, 5),
(660689067, 'SEGODI', 'KHUTSO', '2021-10-26', 19, 'Chicken,Beef', 4, 4, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodtable`
--
ALTER TABLE `foodtable`
  ADD PRIMARY KEY (`contactNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodtable`
--
ALTER TABLE `foodtable`
  MODIFY `contactNum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=860689027;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
