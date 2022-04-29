-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 06:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`fname`, `lname`, `email`, `addr`, `pincode`, `total`) VALUES
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '', '0', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'qqqq', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'qqqq', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 355),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 355),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 355),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 355),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 375),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 535),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 70),
('Chinmay', 'Teli', 'ch@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 355),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 370),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 150),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 150),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 150),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 255),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 395),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 395),
('', '', '', '', '', 0),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 125),
('Chinmay', 'Teli', 'ch@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 125),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 125),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 20),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 470),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 470),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 470),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 470),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 470);

-- --------------------------------------------------------

--
-- Table structure for table `finalcheck`
--

CREATE TABLE `finalcheck` (
  `id` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finalcheck`
--

INSERT INTO `finalcheck` (`id`, `total`, `email`, `addr`, `pincode`, `fname`, `lname`) VALUES
('1', '355', '', '', '', '', ''),
('1', '355', '', '', '', '', ''),
('1', '375', '', '', '', '', ''),
('1', '375', '', '', '', '', ''),
('2085102097', '375', '', '', '', '', ''),
('1040764444', '', '', '', '', '', ''),
('1119493778', '375', '', '', '', '', ''),
('2071610157', '375', '', '', '', '', ''),
('707790330', '375', '', '', '', '', ''),
('803307123', '375', '', '', '', '', ''),
('1126378655', '535', '', '', '', '', ''),
('146139600', '70', '', '', '', '', ''),
('1266691773', '355', '', '', '', '', ''),
('789448910', '370', '', '', '', '', ''),
('1090975932', '150', '', '', '', '', ''),
('1135093996', '150', '', '', '', '', ''),
('92571051', '150', '', '', '', '', ''),
('1182025369', '255', '', '', '', '', ''),
('1118092957', '255', '', '', '', '', ''),
('1890276114', '255', '', '', '', '', ''),
('1153065927', '255', '', '', '', '', ''),
('1938439780', '255', '', '', '', '', ''),
('1943881160', '255', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('24979308', '', '', '', '', '', ''),
('97317594', '395', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('1778323538', '395', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('992988773', '', '', '', '', '', ''),
('1815362141', '125', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('469938659', '125', 'ch@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('908316394', '125', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('1827239504', '20', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('589455915', '470', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('860069148', '470', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('397284650', '470', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('1551759363', '470', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli'),
('1203193048', '470', 'telichinmay02@gmail.com', '13, Smruti\r\nTejpal Scheme Road No.5, Vile Parle East', '400057', 'Chinmay', 'Teli');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `amount` int(10) NOT NULL,
  `pay_id` int(70) NOT NULL,
  `pay_status` int(20) NOT NULL,
  `date_added` int(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Prize` int(30) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `taste` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Prize`, `Quantity`, `color`, `taste`) VALUES
(1, 'Banana', 20, 5, 'yellow', 'sweet'),
(2, 'Apple', 50, 5, 'red', 'sweet'),
(3, 'orange', 55, 5, 'orange', 'citric'),
(4, 'onion', 35, 5, 'maroon', 'spicy'),
(5, 'potato', 30, 5, 'brown', 'normal'),
(6, 'milk', 40, 5, 'white', 'sweet'),
(7, 'curd', 45, 5, 'white', 'normal'),
(8, 'paneer', 70, 5, 'white', 'sweet'),
(9, 'Bread', 37, 5, 'brown', 'sweet'),
(10, 'cashew', 150, 5, 'white', 'sweet'),
(11, 'almond', 180, 5, 'brown', 'sweet'),
(12, 'dates', 180, 5, 'brown', 'sweet'),
(13, 'raisins', 200, 5, 'brown', 'sweet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `uid`, `passwd`) VALUES
('', '', '', '', ''),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 'chinmayt09', 'pass@123456'),
('', '', '', '', ''),
('', '', '', '', ''),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 'chinmayt09', 'pass@12345555'),
('Johhn', 'Donovan', 'john@gmail.com', 'johnd0302', 'john@12345'),
('Trial', 'Run', 'trialrun@gmail.com', 'trial@1234', 'run@123456'),
('', '', '', '', 'hd'),
('', '', '', '', 'jdjdjd'),
('Bhavya', 'Sura', 'telichinmay02@gmail.com', 'bab1', 'bab2'),
('Chinmay', 'Teli', 'ch@gmail.com', '22', '22'),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 's', 'ss'),
('abc', 'teli', 'telichinmay02@gmail.com', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaa'),
('c', 'c', 'c@g.com', 'cc211212', 'ccccccccccc'),
('Chinmay', 'Teli', 'chinmay.teli@somaiya.edu', 'chinmayt09', 'pass@1233456'),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 'chinmayt09', 'pass@123456'),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 'chinmayt09', 'pass@123456'),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 'chinmayt09', 'pass@1234566'),
('Chinmay', 'Teli', 'telichinmay02@gmail.com', 'chinmayt09', 'pass@1234456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
