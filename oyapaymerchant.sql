-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 05:40 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oyapaymerchant`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_agent`
--

CREATE TABLE `add_agent` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_agent`
--

INSERT INTO `add_agent` (`uid`, `name`, `phonenumber`) VALUES
(1, 'Kareem Musa', '08145541007'),
(2, 'Yahya Jumia', '08145541007'),
(3, 'OyaPay Agent', '08145541007');

-- --------------------------------------------------------

--
-- Table structure for table `agent_account`
--

CREATE TABLE `agent_account` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `businessname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_account`
--

INSERT INTO `agent_account` (`uid`, `fullname`, `businessname`, `phonenumber`, `password`) VALUES
(1, 'Kamaru Adio', 'KA Enterprises', '08145541007', '$2y$10$vORP2tIvxD7WFUXwCb0byOvud.uF44Up33Tmm3qirZ7lrr8IPqqQy');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `businessname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`uid`, `fullname`, `phonenumber`, `businessname`, `password`) VALUES
(3, 'Lanre Billionaire', '08145541007', 'African Economic Mandate Project', '$2y$10$Ym820VU4WQlg8ppml9MVl.Fx7Ov2KCaRbZdD1vecI1h1BjupcH1Me'),
(5, 'Kingsley West', '08145541007', 'King West Company', '$2y$10$cwnPbSUrFpQyZQqjUuswQulHF1sZH7SOsZJmDA1IrR8O58k1XBksO'),
(6, 'Admin Merchant', '08145541007', 'OyaPay Services', '$2y$10$PmFX52kDVBdjaaag.aepiOa2B5LCDSRBpc8Rg5LxdME.ww/J5/0gC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_agent`
--
ALTER TABLE `add_agent`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `agent_account`
--
ALTER TABLE `agent_account`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_agent`
--
ALTER TABLE `add_agent`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agent_account`
--
ALTER TABLE `agent_account`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
