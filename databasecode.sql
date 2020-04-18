
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 07:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tabaq_Coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_number` int() NOT NULL,
  `item_category` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `menu` (`item_number`, `item_category`, `item_name`, `item_price`) VALUES
(1, 'Coffee', 'Hazelnut Latte', 300),
(2, 'Coffee', 'Caramel Latte', 250);

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(250) NOT NULL,
  `joining_date` varchar(250) NOT NULL,
  `employee_contactnum` int(11) NOT NULL,
  `employee_address` varchar(500) NOT NULL,
  `employee_` varchar(250) NOT NULL



) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'sayeem', 'sayeem');