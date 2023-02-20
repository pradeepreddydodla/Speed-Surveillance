-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 09:39 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `number` varchar(30) DEFAULT NULL,
  `currspeed` int(11) DEFAULT NULL,
  `speedlimit` int(11) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`number`, `currspeed`, `speedlimit`, `location`, `time`) VALUES
('MH04AW5476', 70, 40, '59.33 || 95.58', '2017-12-20'),
('AP03BE4312', 100, 80, '55.9 || 82.33', '2017-12-20'),
('MH04AW5476', 70, 40, '59.33 || 95.58', '2017-12-20'),
('AP03BE4312', 100, 80, '55.9 || 82.33', '2017-12-20'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 00:58:58'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:45:46'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `number` varchar(30) DEFAULT NULL,
  `currspeed` int(11) DEFAULT NULL,
  `speedlimit` int(11) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`number`, `currspeed`, `speedlimit`, `location`, `time`) VALUES
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:55:46'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:55:30'),
('TS07AE2417', 50, 60, '0 | 0', '2017-12-20 14:49:03'),
('TS07AE2417', 50, 60, '0 | 0', '2017-12-20 14:48:48'),
('TS07AE2417', 50, 60, '0 | 0', '2017-12-20 14:47:47'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:47:32'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:45:46'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 14:45:30'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 00:58:58'),
('TS07AE2417', 80, 60, '0 | 0', '2017-12-20 00:58:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
