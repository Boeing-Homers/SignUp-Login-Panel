-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 06, 2020 at 07:57 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebitdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
CREATE TABLE IF NOT EXISTS `attributes` (
  `signup_name` varchar(25) NOT NULL,
  `signup_email` varchar(20) NOT NULL,
  `age` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`signup_name`, `signup_email`, `age`, `gender`, `country`) VALUES
('Shivam', 'Shivam@gmail.com', '24', 'Male', 'latvia');

-- --------------------------------------------------------

--
-- Table structure for table `testform1`
--

DROP TABLE IF EXISTS `testform1`;
CREATE TABLE IF NOT EXISTS `testform1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signup_name` char(50) DEFAULT NULL,
  `signup_email` varchar(25) NOT NULL,
  `signup_password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `testform1`
--

INSERT INTO `testform1` (`id`, `signup_name`, `signup_email`, `signup_password`) VALUES
(127, 'Shivam', 'Shivam@gmail.com', '123123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
