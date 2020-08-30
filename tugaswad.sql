-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 30, 2018 at 10:28 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaswad`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputan`
--

CREATE TABLE `inputan` (
  `no` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputan`
--

INSERT INTO `inputan` (`no`, `name`, `email`, `message`) VALUES
(1, 'manal', 'immanuelacip@gmail.com', 'yaaay'),
(2, 'hmm', 'hmm', 'hmmm'),
(3, 'lala', 'yeye', 'yaaaaaaaa'),
(4, 'lala', 'yeye', 'yaaaaaaaa'),
(5, 'lala', 'yeye', 'yaaaaaaaa'),
(8, 'isidulu', 'isidulu@gmail.com', 'isidulu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputan`
--
ALTER TABLE `inputan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputan`
--
ALTER TABLE `inputan`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
