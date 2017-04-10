-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 01:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventoryplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `ven_name` varchar(50) NOT NULL,
  `mfg_date` varchar(20) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `mrp` varchar(20) NOT NULL,
  `per_price` varchar(20) NOT NULL,
  `m_type` varchar(20) NOT NULL,
  `no_item` varchar(20) NOT NULL,
  `total_perch` varchar(30) NOT NULL,
  `purch_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `batch_no`, `ven_name`, `mfg_date`, `exp_date`, `mrp`, `per_price`, `m_type`, `no_item`, `total_perch`, `purch_date`) VALUES
(2, 'BF678', 'Omi', '21/90/2017', '22/04/2018', '27', '20', 'Capsules', '10', '', ''),
(3, 'BF6734', 'Roxid-150', '21/90/2017', '22/04/2018', '27', '20', 'Capsules', '10', '', ''),
(4, 'BF678', 'Corex', '21/90/2017', '22/04/2018', '27', '20', 'Saline', 'NA', '', ''),
(5, 'BF678', 'Medimi', '21/90/2017', '22/04/2018', '27', '20', 'Soap', 'NA', '', ''),
(15, 'BF678', 'Roxeio', '21/90/2017', '22/04/2018', '27', '20', 'Injection ', 'NA', '', ''),
(16, 'BF6734', 'Parasitamol', '21/90/2017', '22/04/2018', '27', '20', 'Capsules', '10', '', ''),
(17, 'BF678', 'Omi', '21/90/2017', '22/04/2018', '27', '20', 'Injection ', '10', '', ''),
(18, 'BF678', 'Medimix', '21/90/2017', '22/04/2018', '10', '7', 'Soap', 'NA', '50', '10/04/2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
