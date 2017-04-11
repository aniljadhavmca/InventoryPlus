-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 01:26 PM
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
  `mfg` varchar(200) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `mrp` varchar(20) NOT NULL,
  `per_price` varchar(20) NOT NULL,
  `m_type` varchar(20) NOT NULL,
  `no_item` varchar(20) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `purch_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `batch_no`, `ven_name`, `mfg`, `exp_date`, `mrp`, `per_price`, `m_type`, `no_item`, `qty`, `purch_date`) VALUES
(18, 'BF678', 'Medimix', 'Cadila', '22/04/2018', '10', '7', 'Soap', 'NA', '50', '10/04/2017'),
(19, 'HTY345', 'Numulide', 'Cipla', '22/04/2018', '24', '13', 'Capsules', '10', '5', '11/04/2017'),
(20, 'BF678', 'Corex', '', '22/04/2018', '2', '3', 'Capsules', '10', '5', '11/04/2017'),
(21, 'BF678', 'Omi', 'Cipla', '22/04/2018', '2', '10', 'Capsules', 'NA', '5', '11/04/2017'),
(22, 'BF6734', 'Corex', '', '22/04/2018', '29', '90', 'Capsules', '', '3', '11/04/2017'),
(23, 'CAT568', 'Combiflaum', '', '12/12/2018', '5', '3', 'Capsules', '5', '2', '11/04/2017'),
(24, 'CAT568', 'Parasitamol', '', '22/04/2018', '5', '5', 'Capsules', '5', '2', '11/04/2017'),
(25, 'EASA5060', 'PHENTROGON', 'Nicholas', '11/18/2017', '6.92', '5.60', 'Injection ', 'NA', '12', '11/04/2017'),
(26, 'BF6734', 'Colbol ', '', '2018-04-15', '12.60', '8.90', 'Capsules', '10', '20', '11-04-2017');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
