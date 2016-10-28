-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2014 at 01:25 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1-log
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpunitdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`) VALUES
(78, 'Nilesh', 'Netaek', 'nilesh.netake', 'netake.nilesh@gmail.com', 'bee4dad369b914ac668bbe0e851fe8a7'),
(79, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(80, 'Petert', 'Netakle', 'testmode_45@hotmail.com', 'netake.nilesh@hotmail.com', '16d7a4fca7442dda3ad93c9a726597e4'),
(81, 'John', 'doe', 'john.doe', 'testmode_23@hotmail.com', '16d7a4fca7442dda3ad93c9a726597e4'),
(82, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(83, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(84, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(85, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(86, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(87, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(88, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(89, 'simo', 'pradhan', 'simo.pradhan', 'simo@gmail.com', '123456');
(90, 'Wita', 'karwila28', 'Witakarwila28', 'Witakarwila28@yahoo.co.id', '18672348902'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
