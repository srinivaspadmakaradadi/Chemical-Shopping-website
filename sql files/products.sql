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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `companyname` varchar(20) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `package` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `phone`, `companyname`, `weight`, `package`, `quantity`) VALUES
(9, 'werg', 'fgh', 123456789, 'erttttttttt', '', 'rtyuj', 5),
(10, 'werg', 'fgh', 123456789, 'erttttttttt', '', 'rtyuj', 5),
(11, 'dadipadmakarasrinivas', 'dadipadmakarasrinivas@gmail.com', 8500973619, 'asdf', '', 'is', 0),
(12, 'dadipadmakarasrinivas', 'dadipadmakarasrinivas@gmail.com', 9672329029, 'qwerty', '', 'isoproternol', 0),
(13, 'chaitanya', 'chaitanyasurabhi7@gmail.com', 8500973619, 'zxcvb', 'mg', 'isoproternol', 14),
(14, 'chaitanya', 'chaitanyasurabhi7@gmail.com', 8500973619, 'capstone', 'mg', 'isoproternol', 12),
(16, 'chaitanya', 'chaitanyasurabhi7@gmail.com', 8500973619, 'asd', 'mg', 'isoproternol', 1),
(18, 'santosh', 'santosh@gmail.com', 12345678, 'niituniversity', 'Mg', 'bortezoimb', 100),
(19, 'chaitanya', 'chaitanyasurabhi7@gmail.com', 9441416149, 'webtiq', 'mg', 'chaitanya', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
