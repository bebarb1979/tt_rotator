-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 03:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tt_rotator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bitcoincash_faucets`
--

CREATE TABLE IF NOT EXISTS `bitcoincash_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` double NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bitcoin_faucets`
--

CREATE TABLE IF NOT EXISTS `bitcoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bitcore_faucets`
--

CREATE TABLE IF NOT EXISTS `bitcore_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blackcoin_faucets`
--

CREATE TABLE IF NOT EXISTS `blackcoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dash_faucets`
--

CREATE TABLE IF NOT EXISTS `dash_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dogecoin_faucets`
--

CREATE TABLE IF NOT EXISTS `dogecoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ethereum_faucets`
--

CREATE TABLE IF NOT EXISTS `ethereum_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `litecoin_faucets`
--

CREATE TABLE IF NOT EXISTS `litecoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peercoin_faucets`
--

CREATE TABLE IF NOT EXISTS `peercoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `potcoin_faucets`
--

CREATE TABLE IF NOT EXISTS `potcoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `primecoin_faucets`
--

CREATE TABLE IF NOT EXISTS `primecoin_faucets` (
`faucet_id` int(11) NOT NULL,
  `faucet_name` varchar(50) NOT NULL,
  `owner_name` varchar(30) DEFAULT NULL,
  `faucet_timer` varchar(20) NOT NULL,
  `direct_payout` tinyint(1) NOT NULL,
  `admin_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `frames` tinyint(1) NOT NULL,
  `pop_ups` tinyint(1) NOT NULL,
  `shortlink_req` tinyint(1) NOT NULL,
  `empty_disabled` tinyint(1) NOT NULL,
  `captcha_type` varchar(30) NOT NULL,
  `admin_verified` tinyint(1) NOT NULL,
  `last_verified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bitcoincash_faucets`
--
ALTER TABLE `bitcoincash_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `bitcoin_faucets`
--
ALTER TABLE `bitcoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `bitcore_faucets`
--
ALTER TABLE `bitcore_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `blackcoin_faucets`
--
ALTER TABLE `blackcoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `dash_faucets`
--
ALTER TABLE `dash_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `dogecoin_faucets`
--
ALTER TABLE `dogecoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `ethereum_faucets`
--
ALTER TABLE `ethereum_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `litecoin_faucets`
--
ALTER TABLE `litecoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `peercoin_faucets`
--
ALTER TABLE `peercoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `potcoin_faucets`
--
ALTER TABLE `potcoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- Indexes for table `primecoin_faucets`
--
ALTER TABLE `primecoin_faucets`
 ADD PRIMARY KEY (`faucet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bitcoincash_faucets`
--
ALTER TABLE `bitcoincash_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bitcoin_faucets`
--
ALTER TABLE `bitcoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `bitcore_faucets`
--
ALTER TABLE `bitcore_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blackcoin_faucets`
--
ALTER TABLE `blackcoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dash_faucets`
--
ALTER TABLE `dash_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dogecoin_faucets`
--
ALTER TABLE `dogecoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `ethereum_faucets`
--
ALTER TABLE `ethereum_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `litecoin_faucets`
--
ALTER TABLE `litecoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `peercoin_faucets`
--
ALTER TABLE `peercoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `potcoin_faucets`
--
ALTER TABLE `potcoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `primecoin_faucets`
--
ALTER TABLE `primecoin_faucets`
MODIFY `faucet_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
