-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:08 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logintest`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `confirm_password` varchar(128) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email_id`, `username`, `password`, `confirm_password`, `companyname`, `phonenumber`, `token`) VALUES
(1, 'chaitanya', 'chaitanyasurabhi7@gmail.com', 'chaitanya97', '0', '123', 'qwwe', 9490929396, 'qicvj0kh39'),
(2, 'dadipadmakarasrinivas', 'dadipadmakarasrinivas@gmail.com', 'dadi.p.srinivas', 'qwerty', '123456', 'asas', 9672329029, 'ilfgdwx6h8'),
(3, 'santosh', 'santosh@gmil.com', 'santosh', '123', '123', 'qwerty', 9672329029, NULL),
(4, 'harihanth', 'harihanthjulakanti@gmail.com', 'harihanth julakanti', '12345', '12345', 'qwerty', 9672329029, NULL),
(5, 'thapan', 'thapan@gmail.com', 'thapan', '123456', '123456', 'qwerty', 9672329029, NULL),
(6, 'sathvik', 'sathvik@gmail.com', 'sathvik', '123456', '123456', 'asa', 9672329029, NULL),
(7, 'lohiya', 'lohiya@gmail.com', 'lohiya', '123456', '123456', 'asa', 9672329029, NULL),
(8, 'amit', 'amitkumar@gmail.com', 'amitsir', 'amitsir', 'amitsir', 'niituniversity', 7825262622, NULL),
(9, 'sharan', 'sharan@gmail.com', 'sharan.s', '123456', '123456', 'niituniversity', 728452627828, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
