-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 05:01 PM
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
-- Database: `sac`
--

-- --------------------------------------------------------

--
-- Table structure for table `back`
--

CREATE TABLE `back` (
  `s.no` int(11) NOT NULL,
  `stars` varchar(225) NOT NULL,
  `review` varchar(225) NOT NULL,
  `summary` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `back`
--

INSERT INTO `back` (`s.no`, `stars`, `review`, `summary`) VALUES
(59, '1', 'werty', 'erty'),
(60, '1', 'w', ''),
(61, '4', 'werty', 'erty'),
(62, '4', '', ''),
(63, '4', 'kjehwekrjhwke', 'jfshkjfdhkhk'),
(64, '5', 'kjehwekrjhwke', 'jfshkjfdhkhk'),
(65, '3', 'kjehwekrjhwke', 'jfshkjfdhkhk'),
(66, '5', 'kjehwekrjhwke', 'jfshkjfdhkhk'),
(67, '2', 'dilip', '5'),
(68, '3', 'qwerty', 'qwerty'),
(69, '5', 'good and qulality', 'very good'),
(70, '5', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `back`
--
ALTER TABLE `back`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `back`
--
ALTER TABLE `back`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
