-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 02:33 PM
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
-- Database: `tilapia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `userPassword` text NOT NULL,
  `role` text NOT NULL,
  `status` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `email`, `userPassword`, `role`, `status`, `created`) VALUES
(1, 'Technician', 'admin@gmail.com', 'admin', 'admin', 'active', '2022-08-08 12:13:44'),
(2, 'Owner', 'owner@gmail.com', 'Owner', 'Owner', 'active', '2022-08-08 12:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `e_id` int(11) NOT NULL,
  `expense` varchar(35) NOT NULL,
  `amount` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`e_id`, `expense`, `amount`) VALUES
(2, 'Fry Cost', 1500),
(3, 'Probiotic Cost', 2500),
(4, 'Feeds Cost', 25000),
(5, 'Other Cost', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `f_id` int(11) NOT NULL,
  `years` int(20) NOT NULL,
  `months` varchar(20) NOT NULL,
  `total_sales` int(12) NOT NULL,
  `inventories` int(12) NOT NULL,
  `sof` int(12) NOT NULL,
  `pro` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `total_expenses` int(12) NOT NULL,
  `net` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`f_id`, `years`, `months`, `total_sales`, `inventories`, `sof`, `pro`, `total`, `total_expenses`, `net`) VALUES
(2, 2022, 'September', 1000000, 100, 50, 50, 0, 150000, 9500000),
(3, 2022, 'August', 1000000, 200, 20, 50, 150, 120000, 880000);

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE `harvest` (
  `h_id` int(11) NOT NULL,
  `pond` int(12) NOT NULL,
  `schedule` date NOT NULL,
  `sizing` int(12) NOT NULL,
  `pricing` int(12) NOT NULL,
  `total_sales` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`h_id`, `pond`, `schedule`, `sizing`, `pricing`, `total_sales`) VALUES
(4, 1, '2022-09-14', 2, 250, '250000'),
(5, 2, '2022-09-14', 200, 200, '280000'),
(6, 3, '2022-09-14', 50, 150, '190000');

-- --------------------------------------------------------

--
-- Table structure for table `probiotic`
--

CREATE TABLE `probiotic` (
  `p_id` int(5) NOT NULL,
  `pond` int(11) NOT NULL,
  `typed` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `probiotic`
--

INSERT INTO `probiotic` (`p_id`, `pond`, `typed`) VALUES
(0, 1, 'Type A'),
(0, 2, 'Type B'),
(0, 3, 'Type C');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `p_id` int(15) NOT NULL,
  `pond_number` int(12) NOT NULL,
  `fingerlings` int(12) NOT NULL,
  `stock_date` date NOT NULL,
  `survival_rate` decimal(12,0) NOT NULL,
  `biomass` decimal(5,0) NOT NULL,
  `abw` decimal(10,0) NOT NULL,
  `fcr` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`p_id`, `pond_number`, `fingerlings`, `stock_date`, `survival_rate`, `biomass`, `abw`, `fcr`) VALUES
(1, 1, 1000, '2022-09-14', '78', '15', '10', '10'),
(2, 2, 1500, '2022-09-15', '85', '20', '10', '15'),
(3, 3, 2500, '2022-09-14', '100', '15', '15', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `harvest`
--
ALTER TABLE `harvest`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `harvest`
--
ALTER TABLE `harvest`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
