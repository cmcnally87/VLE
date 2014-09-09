-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2012 at 04:52 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fName` varchar(25) NOT NULL,
  `sName` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fName`, `sName`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin', 'cmcnally87@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fName` varchar(25) NOT NULL,
  `sName` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`, `fName`, `sName`, `email`, `enable`) VALUES
(1, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'Student1', 'Student1', 'cmcnally87@gmail.com', 1),
(2, 'student2', 'student', 'student', 'student', 'student@hnod.com', 0),
(4, 'Ciaran', '21232f297a57a5a743894a0e4a801fc3', 'Ciaran', 'McNally', 'cmcnally87@gmail.com', 0),
(5, 'Niall', '5f4dcc3b5aa765d61d8327deb882cf99', 'Nial', 'Toal', 'test@testing.com', 0),
(6, 'Toal', '110d46fcd978c24f306cd7fa23464d73', 'Niall', 'Toal', 'toal07@hotmail.com', 1);
