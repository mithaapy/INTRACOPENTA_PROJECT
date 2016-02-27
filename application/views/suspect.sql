-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2015 at 08:35 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inta310815`
--

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

CREATE TABLE IF NOT EXISTS `suspect` (
  `SUSPECTID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATEDATE` date NOT NULL,
  `CREATENAME` varchar(30) NOT NULL,
  `COMPANY` char(10) NOT NULL,
  `BRANCH` varchar(30) NOT NULL,
  `LEADSID` char(10) NOT NULL,
  `LEADSDETAILID` int(11) NOT NULL,
  `ITMNO` int(1) NOT NULL,
  `SALESID` int(11) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `LAST_UPDATE` date NOT NULL,
  PRIMARY KEY (`SUSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`SUSPECTID`, `CREATEDATE`, `CREATENAME`, `COMPANY`, `BRANCH`, `LEADSID`, `LEADSDETAILID`, `ITMNO`, `SALESID`, `DESCRIPTION`, `STAGEID`, `CUSTOMERID`, `STATUS`, `LAST_UPDATE`) VALUES
(3, '0000-00-00', '', '3', '4', '', 0, 0, 0, '2222', 0, 0, '', '0000-00-00'),
(4, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(5, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(6, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(7, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(8, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(9, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(10, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(11, '0000-00-00', '', '3', '4', '', 0, 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(12, '2015-08-10', 'kuncoro', '', '1', '6', 0, 0, 2, '12121211212', 4, 2, 'Verified', '0000-00-00'),
(13, '0000-00-00', '', '', '1', '', 0, 0, 0, '12121212AAAAA', 0, 0, '', '0000-00-00'),
(14, '0000-00-00', '', '', '1', '5', 0, 0, 2, '1211212111', 2, 0, '', '0000-00-00'),
(15, '2015-08-13', 'kuncoro', '', '1', '49', 0, 0, 1, 'Salesman picked goods', 4, 1, 'Verified', '0000-00-00'),
(16, '0000-00-00', '', '', '', '', 0, 0, 0, '', 0, 0, '', '0000-00-00'),
(17, '2015-08-13', 'kuncoro', '', '1', '51', 0, 0, 1, 'asdasdas', 3, 1, 'Picked', '0000-00-00'),
(18, '2015-08-13', 'kuncoro', '', '1', '6', 0, 0, 1, 'Salesman Picked Up', 3, 1, 'Picked', '0000-00-00'),
(19, '2015-08-31', 'kuncoro', '', '1', '52', 0, 0, 1, '121212', 3, 1, 'Picked', '0000-00-00'),
(20, '2015-08-31', 'kuncoro', '', '1', '52', 0, 0, 1, '121212', 3, 1, 'Picked', '0000-00-00'),
(21, '2015-08-31', '', '1', '2015-08-29', '1', 1, 0, 2, '', 0, 1, 'Picked', '0000-00-00');
