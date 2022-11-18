-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 04:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapsody`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinacija`
--

CREATE TABLE `destinacija` (
  `destinacijaID` int(11) NOT NULL,
  `grad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opisGrada` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destinacija`
--

INSERT INTO `destinacija` (`destinacijaID`, `grad`, `opisGrada`) VALUES
(1, 'Budva', 'Jedan od najboljih gradova Crne Gore za putovanje mladih. '),
(2, 'Kusadasi', 'Najbolje party letovanje je definitivno u ovom gradu!'),
(3, 'Budimpesta', 'Grad pun znamenitosti i kulture!'),
(4, 'Atina', 'Najlepsi grad Grcke! Opisuje kulturu ove divne zemlje!'),
(5, 'Novi Sad', 'Najlepsi grad nase zemlje Srbije!');

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `ponudaID` int(11) NOT NULL,
  `cena` double NOT NULL,
  `datumOD` date NOT NULL,
  `datumDO` date NOT NULL,
  `destinacijaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`ponudaID`, `cena`, `datumOD`, `datumDO`, `destinacijaID`) VALUES
(2, 300, '2018-11-14', '2018-11-29', 3),
(3, 200, '2018-02-18', '2018-02-28', 2),
(6, 777, '2018-11-21', '2018-11-29', 3),
(7, 250, '2022-11-16', '2022-11-25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacija`
--
ALTER TABLE `destinacija`
  ADD PRIMARY KEY (`destinacijaID`);

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`ponudaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacija`
--
ALTER TABLE `destinacija`
  MODIFY `destinacijaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `ponudaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
