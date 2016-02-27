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
-- Table structure for table `suspect_detail`
--

CREATE TABLE IF NOT EXISTS `suspect_detail` (
  `SUSPECT_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROSPECTID` int(11) NOT NULL,
  `PRODUCTID` char(18) NOT NULL,
  `SUSPECTID` int(11) NOT NULL,
  `QUANTITY` decimal(11,0) NOT NULL,
  `UOM` varchar(10) NOT NULL,
  `TRANSACTION_MODEL` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `ODDS` varchar(20) NOT NULL,
  `SEGMENT_ID` int(11) NOT NULL,
  PRIMARY KEY (`SUSPECT_DETAIL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `suspect_detail`
--

INSERT INTO `suspect_detail` (`SUSPECT_DETAIL_ID`, `PROSPECTID`, `PRODUCTID`, `SUSPECTID`, `QUANTITY`, `UOM`, `TRANSACTION_MODEL`, `STATUS`, `ODDS`, `SEGMENT_ID`) VALUES
(1, 2, '3', 1, 5, '6', '7', 'Picked', '9', 9),
(2, 0, '1212', 1, 1212, '1212', '', 'Open', '121212', 1212),
(3, 0, '', 0, 0, '', '', '', '', 0),
(4, 0, '121212', 3, 121212, '1212122', '', 'Open', '1212', 1212),
(5, 0, '1111', 3, 1111, '111', '', 'Open', '111', 112222),
(6, 0, '1111', 3, 1111, '111', '', 'Open', '111', 112),
(7, 0, '333', 3, 333, '333', '', 'Open', '33', 333),
(8, 0, '1111111111111', 17, 1, 'Unit', '', 'Open', 'asd', 2147483647),
(9, 0, '', 15, 0, '', '', 'Picked', '', 0),
(10, 0, '121212', 12, 121212, '1212', '', 'Open', '121212', 1212);
