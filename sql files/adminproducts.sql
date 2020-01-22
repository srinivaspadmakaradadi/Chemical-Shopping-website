-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:09 AM
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
-- Table structure for table `adminproducts`
--

CREATE TABLE `adminproducts` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `cas` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `molecularweight` varchar(255) NOT NULL,
  `molecularformula` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminproducts`
--

INSERT INTO `adminproducts` (`id`, `productname`, `cas`, `cat`, `molecularweight`, `molecularformula`) VALUES
(1, 'Alfuzosin HCL', '81403-68-1', 'VSLS-ALF-STD', '425.91', 'C19H28ClN5O4'),
(2, 'Asprin Impurity', '99-96-7 ', 'VSLS-ASP-A ', '138.12', 'C7H6O3'),
(3, 'isoproternol', '12345636366', 'gshdhfytedebcwhe', 'gwbdhbhd', 'c6h1206');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminproducts`
--
ALTER TABLE `adminproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminproducts`
--
ALTER TABLE `adminproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
