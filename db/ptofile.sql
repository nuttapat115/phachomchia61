-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 12:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidva`
--

-- --------------------------------------------------------

--
-- Table structure for table `ptofile`
--

CREATE TABLE `ptofile` (
  `id` bigint(11) NOT NULL,
  `name` text NOT NULL,
  `department` text NOT NULL,
  `qr` text NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptofile`
--

INSERT INTO `ptofile` (`id`, `name`, `department`, `qr`, `count`) VALUES
(61070501001, 'nuttapat chakpech', 'CPE', 'https://www.facebook.com/', 0),
(61070501002, 'aaaaaaa aaaaaaaa', 'EE', 'https://www.facebook.com/', 0),
(61070501003, 'bbbbbbb bbbbbbbb', 'ENE', 'https://www.facebook.com/', 0),
(61070501004, 'ccccccc cccccccccc', 'CE', 'https://www.facebook.com/', 0),
(61070501005, 'dddddd ddddddddd', 'CHE', 'https://www.facebook.com/', 0),
(61070501006, 'fffffffff fffffffffffff ', 'ME', 'https://www.facebook.com/', 0),
(61070501007, 'ggggggggg gggggggggggg', 'INC', 'https://www.facebook.com/', 0),
(61070501008, 'hhhhhhh hhhhhhhhhhh', 'ENV', 'https://www.facebook.com/', 0),
(61070501009, 'iiiiiiiii iiiiiiiiiii', 'PE&MCE', 'https://www.facebook.com/', 0),
(61070501010, 'jjjjjjjjjjj jjjjjjjjjjjjjj', 'TME', 'https://www.facebook.com/', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ptofile`
--
ALTER TABLE `ptofile`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
