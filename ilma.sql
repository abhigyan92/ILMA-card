-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2014 at 05:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ilma`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `atm_pin` int(4) NOT NULL,
  `bank_acc_no` int(20) NOT NULL,
  `card_no` int(20) NOT NULL,
  `balance` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `cust_name`, `user_id`, `password`, `email`, `atm_pin`, `bank_acc_no`, `card_no`, `balance`) VALUES
(1, 'abhigyan', 'ar1992', 'hahaha', 'abhigyan111190@gmail', 1111, 123456789, 987654321, 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `ilmasecurity`
--

CREATE TABLE IF NOT EXISTS `ilmasecurity` (
  `sid` int(11) NOT NULL,
  `cust_id` varchar(20) NOT NULL,
  `sec_key` varchar(20) NOT NULL,
  `qrcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_date`
--

CREATE TABLE IF NOT EXISTS `transaction_date` (
  `tid` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `tot` date NOT NULL,
  `dot` date NOT NULL,
  `amount_withdraw` int(11) NOT NULL,
  `amount_deposit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
