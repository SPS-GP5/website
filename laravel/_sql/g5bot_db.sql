-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2016 at 10:58 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `g5bot_db`
--
CREATE DATABASE IF NOT EXISTS `g5bot_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `g5bot_db`;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `duration` time NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `firstName`, `lastName`, `time`, `duration`, `description`) VALUES
(1, 'Patrick', 'Keller', '2016-03-14 19:57:04', '00:30:00', 'Test'),
(2, 'Alen', 'Kocaj', '2016-03-14 19:59:48', '00:00:00', 'Test_Test'),
(3, 'Michael', 'Ester', '2016-03-14 19:59:48', '01:30:00', 'Validation'),
(4, 'Daniel', 'Stigler', '2016-03-14 19:59:48', '00:00:50', 'HAHA'),
(5, 'Patrick', 'Keller', '2016-03-14 20:15:52', '01:50:00', 'TESTnachTest');

-- --------------------------------------------------------

--
-- Table structure for table `statsview`
--

CREATE TABLE IF NOT EXISTS `statsview` (
  `id` int(11) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `timeSpent` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

