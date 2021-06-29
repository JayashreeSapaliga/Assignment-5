-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 04:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passport`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pno` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pno`, `fname`, `mname`, `lname`, `dob`, `nationality`, `address`, `gender`, `img`) VALUES
(111, 'Jayashree', 'S', 'Sapaliga', '1999-08-24', 'Indian', 'Jarigekatte padav, Mundkur', 'female', '	\r\nupload/BBJ4dWj.jpg'),
(112, 'Guru', 'Prasad', 'S', '2021-06-30', 'Indian', 'Belman', 'male', 'upload/BBJ4dWj.jpg'),
(115, 'Ganesh', 'M', 'T', '1995-07-12', 'Indian', 'Bengalore', 'male', 'upload/BBJ4iMf.jpg'),
(116, 'Keerthi', 'P', 'S', '1997-06-18', 'Indian', 'Kinnigoli, Mangalore', 'female', 'upload/BBJ49oI.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
