-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 05:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `ID` int(11) NOT NULL,
  `ROLLNO` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `PHONE` int(20) NOT NULL,
  `STANDERD` int(11) NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`ID`, `ROLLNO`, `NAME`, `CITY`, `PHONE`, `STANDERD`, `IMAGE`) VALUES
(2, 102, 'JANNATUL MITU', 'TONGI', 1642953542, 2, 'pori.jpg'),
(5, 120, 'JANNATUL DI KOSTA', 'DHAKA', 1957522353, 3, 'pinky.jpg'),
(7, 206, 'JANNATUL SRODDA', 'DHAKA', 1966462558, 2, 'srodda.jfif'),
(8, 201, 'ANABIL HANSIKHA', 'MUMBI', 1966462557, 3, 'hanshika.jfif'),
(9, 222, 'ANABIL KAJAKL', 'INDIA', 1966458225, 3, 'kajal.jfif'),
(11, 302, 'MD FAMIDA SRKAR NISI', 'MIRPUR 12', 1646958535, 6, 'nisi (2).jpg'),
(12, 301, 'ANIK', 'DHAKA', 1966462449, 6, 'anik (2).jpg'),
(13, 257, 'FARJANA LIZA', 'DHAKA', 1649953642, 3, 'liza.jpg'),
(14, 105, 'SALMAN KHAN', 'DHAKA', 1966458225, 3, 'salman.jpg'),
(15, 103, 'TIGER SHOK', 'DHAKA', 177856993, 3, 'tiger.jpg'),
(16, 409, 'URBOSI RATUL', 'INDIA', 1955874446, 3, 'urbo.jpg'),
(17, 401, 'KATRINA KAIF', 'INDIA', 1588963559, 3, 'catrina.jpg'),
(18, 402, 'SONAKSI SINHA', 'INDIA', 1755896655, 7, 'sonak.jpg'),
(19, 403, 'DEIJE SHA', 'INDIA', 185523669, 7, 'disha.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
