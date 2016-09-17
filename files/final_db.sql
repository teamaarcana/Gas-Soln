-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2016 at 05:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aarcana_LPG`
--

-- --------------------------------------------------------

--
-- Table structure for table `ind_user_info`
--

CREATE TABLE `ind_user_info` (
  `citizenshop_no` varchar(12) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lpg_import`
--

CREATE TABLE `lpg_import` (
  `S.N.` int(10) NOT NULL,
  `LPG_name` varchar(30) NOT NULL,
  `Qty` int(4) NOT NULL,
  `Import_date` date NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lpg_sell`
--

CREATE TABLE `lpg_sell` (
  `S.N.` int(10) NOT NULL,
  `LPG_name` varchar(40) NOT NULL,
  `Qty` int(4) NOT NULL,
  `price_per_unit` int(4) NOT NULL,
  `sell_date` date NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Lpg_stock`
--

CREATE TABLE `Lpg_stock` (
  `S.N.` int(7) NOT NULL,
  `LPG_name` varchar(40) NOT NULL,
  `Qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lpg_user`
--

CREATE TABLE `lpg_user` (
  `S.N.` int(7) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `LPG_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `org_user_info`
--

CREATE TABLE `org_user_info` (
  `citizenship_no` varchar(40) NOT NULL,
  `org_owner` varchar(40) NOT NULL,
  `orgn_name` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_info`
--

CREATE TABLE `store_info` (
  `pan_no` varchar(25) NOT NULL,
  `store_name` varchar(40) NOT NULL,
  `store_addr` varchar(40) NOT NULL,
  `store_owner` varchar(40) NOT NULL,
  `owner_addr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usr_reg_ind`
--

CREATE TABLE `usr_reg_ind` (
  `citizenship_no` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Phone_no` int(10) DEFAULT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Email_addr` varchar(40) DEFAULT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usr_reg_org`
--

CREATE TABLE `usr_reg_org` (
  `PAN_no` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `org_owner` varchar(30) NOT NULL,
  `org_name` varchar(40) NOT NULL,
  `org_address` varchar(40) NOT NULL,
  `Phone_no` int(9) DEFAULT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Email_org` varchar(40) DEFAULT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ind_user_info`
--
ALTER TABLE `ind_user_info`
  ADD PRIMARY KEY (`citizenshop_no`);

--
-- Indexes for table `lpg_import`
--
ALTER TABLE `lpg_import`
  ADD PRIMARY KEY (`S.N.`);

--
-- Indexes for table `lpg_sell`
--
ALTER TABLE `lpg_sell`
  ADD PRIMARY KEY (`S.N.`);

--
-- Indexes for table `Lpg_stock`
--
ALTER TABLE `Lpg_stock`
  ADD PRIMARY KEY (`S.N.`);

--
-- Indexes for table `lpg_user`
--
ALTER TABLE `lpg_user`
  ADD PRIMARY KEY (`S.N.`);

--
-- Indexes for table `org_user_info`
--
ALTER TABLE `org_user_info`
  ADD PRIMARY KEY (`citizenship_no`);

--
-- Indexes for table `usr_reg_ind`
--
ALTER TABLE `usr_reg_ind`
  ADD PRIMARY KEY (`citizenship_no`);

--
-- Indexes for table `usr_reg_org`
--
ALTER TABLE `usr_reg_org`
  ADD PRIMARY KEY (`PAN_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lpg_import`
--
ALTER TABLE `lpg_import`
  MODIFY `S.N.` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lpg_sell`
--
ALTER TABLE `lpg_sell`
  MODIFY `S.N.` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Lpg_stock`
--
ALTER TABLE `Lpg_stock`
  MODIFY `S.N.` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lpg_user`
--
ALTER TABLE `lpg_user`
  MODIFY `S.N.` int(7) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
