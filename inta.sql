-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2015 at 03:02 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inta`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BRANCH_ID` int(11) NOT NULL,
  `BRANCH_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BRANCH_ID`, `BRANCH_NAME`) VALUES
(1, 'BRANCH A'),
(2, 'BRANCH B');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `COMPANY` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` char(50) NOT NULL,
  PRIMARY KEY (`COMPANY`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANY`, `COMPANY_NAME`) VALUES
(1, 'INTI'),
(2, 'IPPS'),
(3, 'IPW'),
(4, 'CCI'),
(5, 'TFI'),
(6, 'KSR'),
(7, 'IBF');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CUSTOMERID` int(11) NOT NULL AUTO_INCREMENT,
  `CONTACTID` int(11) NOT NULL,
  `CUSTOMERNAME` varchar(100) NOT NULL,
  `CREATENAME` varchar(30) NOT NULL,
  `CREATEDATE` date NOT NULL,
  `ADDRESS1` varchar(80) NOT NULL,
  `ADDRESS2` varchar(80) NOT NULL,
  `CITY` varchar(80) NOT NULL,
  `EMAIL` varchar(80) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `MOBILE` varchar(50) NOT NULL,
  `FAX` varchar(50) NOT NULL,
  `POSTCODE` int(11) NOT NULL,
  `LOCATIONSITE` varchar(80) NOT NULL,
  `INDUSTRYID` int(11) NOT NULL,
  `SEGMENTID` int(11) NOT NULL,
  `CUSTOMER_GROUP` varchar(50) NOT NULL,
  `CUST_TYPE` int(11) NOT NULL,
  `CUST_WID` int(11) NOT NULL,
  PRIMARY KEY (`CUSTOMERID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMERID`, `CONTACTID`, `CUSTOMERNAME`, `CREATENAME`, `CREATEDATE`, `ADDRESS1`, `ADDRESS2`, `CITY`, `EMAIL`, `PHONE`, `MOBILE`, `FAX`, `POSTCODE`, `LOCATIONSITE`, `INDUSTRYID`, `SEGMENTID`, `CUSTOMER_GROUP`, `CUST_TYPE`, `CUST_WID`) VALUES
(1, 0, 'Perusahaan A', '', '0000-00-00', '', '', '', '', '', '', '', 0, '', 0, 0, '', 0, 0),
(2, 0, 'Perusahaan B', '', '0000-00-00', '', '', '', '', '', '', '', 0, '', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE IF NOT EXISTS `lead` (
  `LEADSID` int(11) NOT NULL AUTO_INCREMENT,
  `REFID` varchar(200) DEFAULT NULL,
  `SOURCEID` varchar(200) NOT NULL,
  `CREATEDATE` date NOT NULL,
  `CREATENAME` varchar(50) NOT NULL,
  `STAGEID` int(1) NOT NULL,
  `COMPANY_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL,
  `PROJECT_NAME` varchar(50) NOT NULL,
  `PROJECT_DESCRIPTION` varchar(1000) NOT NULL,
  `PROJECT_STATUS` varchar(20) NOT NULL,
  `CONST_MONTH` int(11) NOT NULL,
  `CONST_YEAR` int(4) NOT NULL,
  `CONST_END_MONTH` int(11) NOT NULL,
  `CONST_END_YEAR` int(4) NOT NULL,
  `PROJECT_PROVINCE` varchar(30) NOT NULL,
  `TOWN` varchar(30) NOT NULL,
  `PROJECT_ADDRESS` varchar(100) NOT NULL,
  `PROJECT_CATEGORY` varchar(20) NOT NULL,
  `PROJECT_STAGE` varchar(30) NOT NULL,
  `ARCHITECDESIGNER` varchar(2000) NOT NULL,
  `PROJECT_PUBLISH_DATE` datetime NOT NULL,
  `DEVPROP_MANAGER` varchar(4000) NOT NULL,
  `ENGINER_CONSULTANT` varchar(2000) NOT NULL,
  `MAIN_CONTRACTOR` varchar(4000) NOT NULL,
  `SUB_CONTRACTOR` varchar(2000) NOT NULL,
  `PROJECT_VALUE` int(15) NOT NULL,
  `ADDRESSABLE_VALUE` int(15) NOT NULL,
  `PICKUPDATE` date NOT NULL,
  `QUALITY` varchar(30) NOT NULL,
  `ASSIGNTYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`LEADSID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`LEADSID`, `REFID`, `SOURCEID`, `CREATEDATE`, `CREATENAME`, `STAGEID`, `COMPANY_ID`, `BRANCH_ID`, `PROJECT_NAME`, `PROJECT_DESCRIPTION`, `PROJECT_STATUS`, `CONST_MONTH`, `CONST_YEAR`, `CONST_END_MONTH`, `CONST_END_YEAR`, `PROJECT_PROVINCE`, `TOWN`, `PROJECT_ADDRESS`, `PROJECT_CATEGORY`, `PROJECT_STAGE`, `ARCHITECDESIGNER`, `PROJECT_PUBLISH_DATE`, `DEVPROP_MANAGER`, `ENGINER_CONSULTANT`, `MAIN_CONTRACTOR`, `SUB_CONTRACTOR`, `PROJECT_VALUE`, `ADDRESSABLE_VALUE`, `PICKUPDATE`, `QUALITY`, `ASSIGNTYPE`) VALUES
(1, '', '6', '2015-08-05', 'kuncoro', 5, 0, 1, '1212', '121212', '1212', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '1212', '1212', '', '', '0000-00-00 00:00:00', '11', '11222', '111', '111', 0, 0, '2015-08-15', 'Quality', 'Open'),
(2, '', '3', '2015-08-03', '2', 3, 0, 0, '3', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(3, '', '3', '2015-08-03', '2', 3, 0, 0, '3', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(4, '', '3', '2015-08-03', '2', 3, 0, 0, '3', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(5, '', '3', '2015-08-03', '2', 3, 0, 0, '3', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(6, '', '3', '2015-08-03', '2', 3, 0, 1, '3', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(7, '', '0', '2015-08-03', 'kuncoro', 0, 0, 0, '1212', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(8, '', '4', '2015-08-05', 'Kuncoro Wicaksono', 3, 0, 0, '222', '222', '222', 2015, 0, 2015, 0, 'DKI Jakarta', 'Kota 1', '1212', '1212', '12121', '121212', '2015-08-21 00:00:00', '111', '111', '111', '111', 11, 11, '2015-08-19', 'Quality', 'Open'),
(9, '', '4', '2015-08-05', 'Kuncoro Wicaksono', 3, 0, 0, '222', '222', '222', 2015, 0, 2015, 0, 'DKI Jakarta', 'Kota 1', '1212', '1212', '12121', '121212', '2015-08-21 00:00:00', '111', '111', '111', '111', 11, 11, '2015-08-19', 'Quality', 'Open'),
(10, '', '4', '2015-08-05', 'Kuncoro Wicaksono', 3, 0, 0, '222', '222', '222', 2015, 0, 2015, 0, 'DKI Jakarta', 'Kota 1', '1212', '1212', '12121', '121212', '2015-08-21 00:00:00', '111', '111', '111', '111', 11, 11, '2015-08-19', 'Quality', 'Open'),
(11, '', '2', '2015-08-10', 'kuncoro', 2, 2, 1, 'Project Name', 'Project Desc', 'Project Status', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(12, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(13, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(14, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(15, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(16, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(17, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(18, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(19, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(20, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(21, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(22, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(23, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(24, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(25, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(26, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(27, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(28, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(29, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(30, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(31, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(32, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(33, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(34, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(35, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(36, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(37, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(38, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(39, '', '1', '2015-08-10', 'kuncoro', 2, 2, 1, '', '', '', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(40, '', '2', '2015-08-10', 'kuncoro', 2, 2, 1, 'Project Kuncoro', 'Project Description', 'Project Status', 0, 0, 0, 0, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', 'Kuncoro', 'Kuncoro', 'Kuncoro', 'Kuncoro', 1000000, 1000000, '0000-00-00', 'Quality', 'Open'),
(41, '1', '2', '0000-00-00', '4', 5, 0, 0, '6', '7', '8', 0, 0, 0, 0, '11', '12', '13', '14', '15', '16', '0000-00-00 00:00:00', '18', '19', '20', '21', 22, 23, '0000-00-00', '25', '26'),
(42, NULL, '3', '2015-08-10', 'kuncoro', 0, 2, 1, 'Test', 'Test', 'Test', 9, 2016, 3, 2017, 'DKI Jakarta', 'Kota 1', 'Test', 'Test', 'Test', 'Test', '0000-00-00 00:00:00', 'Test', 'Test', 'Test', 'Test', 0, 0, '0000-00-00', 'Quality', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `lead_detail`
--

CREATE TABLE IF NOT EXISTS `lead_detail` (
  `LEAD_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LEADSID` char(10) NOT NULL,
  `ITMNO` int(1) NOT NULL,
  `COMPANY` char(10) NOT NULL,
  `CUSTOMERID` int(1) NOT NULL,
  `SALESID` int(1) NOT NULL,
  `PICKUP_DATE` date NOT NULL,
  `BRANCH` varchar(30) NOT NULL,
  `QUALITY` varchar(20) NOT NULL,
  `LEAD_STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`LEAD_DETAIL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lead_detail`
--

INSERT INTO `lead_detail` (`LEAD_DETAIL_ID`, `LEADSID`, `ITMNO`, `COMPANY`, `CUSTOMERID`, `SALESID`, `PICKUP_DATE`, `BRANCH`, `QUALITY`, `LEAD_STATUS`) VALUES
(1, '1', 2, '321', 4, 5, '2015-08-20', '2015-08-29', 'Quality', 'Open'),
(2, '2', 0, '3121', 0, 5, '2015-08-27', '2015-08-27', 'Quality', 'Open'),
(3, '', 0, 'XMNT', 0, 10, '2015-08-13', '2015-08-26', 'Quality', 'Open'),
(4, '', 0, '1212', 0, 121212, '0000-00-00', '', 'Quality', 'Open'),
(5, '', 0, '200', 0, 111, '0000-00-00', '', 'Quality', 'Open'),
(6, '1', 0, 'TEST #2', 200, 200, '2015-08-07', '2015-08-26', 'Qualified', 'Picked');

-- --------------------------------------------------------

--
-- Table structure for table `lead_history`
--

CREATE TABLE IF NOT EXISTS `lead_history` (
  `LEADSID` char(10) NOT NULL,
  `ITMNO` int(11) NOT NULL AUTO_INCREMENT,
  `MODIFYDATE` date NOT NULL,
  `MODIFYNAME` varchar(50) NOT NULL,
  `HISTORY_TYPE` varchar(30) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `REMARKS` varchar(100) NOT NULL,
  PRIMARY KEY (`ITMNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `lead_history`
--

INSERT INTO `lead_history` (`LEADSID`, `ITMNO`, `MODIFYDATE`, `MODIFYNAME`, `HISTORY_TYPE`, `STAGEID`, `REMARKS`) VALUES
('0', 1, '2015-08-03', '2', 'INSERT', 0, ''),
('0', 2, '2015-08-03', '12121', 'INSERT', 0, ''),
('1', 3, '2015-08-03', '1212', 'UPDATE', 0, ''),
('1', 4, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 5, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 6, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 7, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 8, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 9, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 10, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('1', 11, '2015-08-03', 'kuncoro', 'UPDATE', 0, ''),
('0', 12, '2015-08-05', 'Kuncoro Wicaksono', 'INSERT', 0, ''),
('0', 13, '2015-08-05', 'Kuncoro Wicaksono', 'INSERT', 0, ''),
('0', 14, '2015-08-05', 'Kuncoro Wicaksono', 'INSERT', 0, ''),
('1', 15, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 16, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 17, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 18, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 19, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 20, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 21, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 22, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('1', 23, '2015-08-05', 'kuncoro', 'UPDATE', 0, ''),
('0', 24, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 25, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 26, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 27, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 28, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 29, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 30, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 31, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 32, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 33, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 34, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 35, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 36, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 37, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 38, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 39, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 40, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 41, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 42, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 43, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 44, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 45, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 46, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 47, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 48, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 49, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 50, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 51, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 52, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 53, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('0', 54, '2015-08-10', 'kuncoro', 'INSERT', 0, ''),
('42', 55, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 56, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 57, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 58, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 59, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 60, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 61, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 62, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 63, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('42', 64, '2015-08-10', 'kuncoro', 'UPDATE', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `month_master`
--

CREATE TABLE IF NOT EXISTS `month_master` (
  `MONTHID` int(11) NOT NULL AUTO_INCREMENT,
  `MONTHNAME` varchar(11) NOT NULL,
  PRIMARY KEY (`MONTHID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `month_master`
--

INSERT INTO `month_master` (`MONTHID`, `MONTHNAME`) VALUES
(1, 'January'),
(2, 'Ferburary'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `prospect`
--

CREATE TABLE IF NOT EXISTS `prospect` (
  `PROSPECTID` int(11) NOT NULL AUTO_INCREMENT,
  `SUSPECTID` int(11) NOT NULL,
  `QUOTATIONNO` varchar(50) NOT NULL,
  `CREATEDATE` date NOT NULL,
  `CREATENAME` varchar(30) NOT NULL,
  `COMPANY` char(10) NOT NULL,
  `SALESID` int(11) NOT NULL,
  `BRANCH` int(11) NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `STARTDATE` date NOT NULL,
  `EXPIREDATE` date NOT NULL,
  `CURRENCY` varchar(10) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `APPROVDATE` date NOT NULL,
  `APPROVBY` varchar(30) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `LAST_UPDATE` datetime NOT NULL,
  `DECISION_DATE` date NOT NULL,
  `EXPECT_DELIVERY_DATE` date NOT NULL,
  `CUSTOMER_TYPE` varchar(30) NOT NULL,
  `LEVEL2` tinyint(1) DEFAULT NULL,
  `WEB_PID` varchar(30) NOT NULL,
  PRIMARY KEY (`PROSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prospect`
--

INSERT INTO `prospect` (`PROSPECTID`, `SUSPECTID`, `QUOTATIONNO`, `CREATEDATE`, `CREATENAME`, `COMPANY`, `SALESID`, `BRANCH`, `CUSTOMERID`, `DESCRIPTION`, `STARTDATE`, `EXPIREDATE`, `CURRENCY`, `STAGEID`, `APPROVDATE`, `APPROVBY`, `STATUS`, `LAST_UPDATE`, `DECISION_DATE`, `EXPECT_DELIVERY_DATE`, `CUSTOMER_TYPE`, `LEVEL2`, `WEB_PID`) VALUES
(1, 1, '2', '0000-00-00', '4', '5', 6, 1, 7, '8', '0000-00-00', '0000-00-00', '11', 12, '0000-00-00', '14', '15', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '19', 20, '21');

-- --------------------------------------------------------

--
-- Table structure for table `prospect_detail`
--

CREATE TABLE IF NOT EXISTS `prospect_detail` (
  `PROSPECTID` int(11) NOT NULL AUTO_INCREMENT,
  `ITMNO` int(11) NOT NULL,
  `PRODUCTID` char(18) NOT NULL,
  `PRODUCTNAME` varchar(80) NOT NULL,
  `QUANTITY` decimal(11,0) NOT NULL,
  `UOM` varchar(10) NOT NULL,
  `UNITVALUE` decimal(25,0) NOT NULL,
  `TRANSACTION_MODEL` varchar(20) NOT NULL,
  `PROSPECT_DETAIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`PROSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prospect_detail`
--

INSERT INTO `prospect_detail` (`PROSPECTID`, `ITMNO`, `PRODUCTID`, `PRODUCTNAME`, `QUANTITY`, `UOM`, `UNITVALUE`, `TRANSACTION_MODEL`, `PROSPECT_DETAIL_ID`) VALUES
(1, 1, '1', '2', 2, '2', 2, '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales_master`
--

CREATE TABLE IF NOT EXISTS `sales_master` (
  `SALESID` int(11) NOT NULL,
  `SALESNAME` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `MOBILE` varchar(50) NOT NULL,
  `EMAIL` varchar(80) NOT NULL,
  `SUBSID` char(10) NOT NULL,
  `ACTIVE` int(11) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `PINBB` varchar(50) NOT NULL,
  PRIMARY KEY (`SALESID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_master`
--

INSERT INTO `sales_master` (`SALESID`, `SALESNAME`, `PHONE`, `MOBILE`, `EMAIL`, `SUBSID`, `ACTIVE`, `NIK`, `PINBB`) VALUES
(1, 'Salesman 1', '', '', '', '', 1, '', ''),
(2, 'Salesman 2', '', '', '', '', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `source_master`
--

CREATE TABLE IF NOT EXISTS `source_master` (
  `SOURCEID` int(11) NOT NULL AUTO_INCREMENT,
  `SOURCENAME` varchar(200) NOT NULL,
  PRIMARY KEY (`SOURCEID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `source_master`
--

INSERT INTO `source_master` (`SOURCEID`, `SOURCENAME`) VALUES
(1, 'Source ID'),
(2, 'Paid Info'),
(3, 'Referral / Word of mouth'),
(4, 'Internet Web Site / Search Engine'),
(5, 'Job Site / Work Site'),
(6, 'Highway Advertisment'),
(7, 'Exhibition / Trade Show'),
(8, 'Product Seminar'),
(9, 'Newspapaer / magazine');

-- --------------------------------------------------------

--
-- Table structure for table `stage_master`
--

CREATE TABLE IF NOT EXISTS `stage_master` (
  `STAGEID` int(11) NOT NULL AUTO_INCREMENT,
  `STAGENAME` varchar(200) NOT NULL,
  PRIMARY KEY (`STAGEID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stage_master`
--

INSERT INTO `stage_master` (`STAGEID`, `STAGENAME`) VALUES
(1, 'Stage'),
(2, 'Leads'),
(3, 'Suspect'),
(4, 'Prospect'),
(5, 'Non Qualified Leads');

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
  `ITMNO` int(1) NOT NULL,
  `SALESID` int(11) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `LAST_UPDATE` date NOT NULL,
  PRIMARY KEY (`SUSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`SUSPECTID`, `CREATEDATE`, `CREATENAME`, `COMPANY`, `BRANCH`, `LEADSID`, `ITMNO`, `SALESID`, `DESCRIPTION`, `STAGEID`, `CUSTOMERID`, `STATUS`, `LAST_UPDATE`) VALUES
(3, '0000-00-00', '', '3', '4', '', 0, 0, '2222', 0, 0, '', '0000-00-00'),
(4, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(5, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(6, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(7, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(8, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(9, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(10, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(11, '0000-00-00', '', '3', '4', '', 0, 0, '10002111ccccc121212', 0, 0, '', '0000-00-00'),
(12, '2015-08-10', 'kuncoro', '', '1', '6', 0, 2, '12121211212', 4, 2, 'Verified', '0000-00-00'),
(13, '0000-00-00', '', '', '1', '', 0, 0, '12121212AAAAA', 0, 0, '', '0000-00-00'),
(14, '0000-00-00', '', '', '1', '5', 0, 2, '1211212111', 2, 0, '', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
(7, 0, '333', 3, 333, '333', '', 'Open', '33', 333);

-- --------------------------------------------------------

--
-- Table structure for table `suspect_history`
--

CREATE TABLE IF NOT EXISTS `suspect_history` (
  `SUSPECT_HISTORYID` int(11) NOT NULL AUTO_INCREMENT,
  `SUSPECTID` int(11) NOT NULL,
  `ITMNO` int(11) NOT NULL,
  `MODIFYDATE` date NOT NULL,
  `MODIFYNAME` varchar(30) NOT NULL,
  `HISTORY_TYPE` varchar(30) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `REMARKS` varchar(100) NOT NULL,
  PRIMARY KEY (`SUSPECT_HISTORYID`),
  KEY `SUSPECTID` (`SUSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `suspect_history`
--

INSERT INTO `suspect_history` (`SUSPECT_HISTORYID`, `SUSPECTID`, `ITMNO`, `MODIFYDATE`, `MODIFYNAME`, `HISTORY_TYPE`, `STAGEID`, `REMARKS`) VALUES
(1, 14, 0, '2015-08-05', '0', 'UPDATE', 0, ''),
(2, 14, 0, '2015-08-05', '0', 'UPDATE', 0, ''),
(3, 14, 0, '2015-08-05', '0', 'UPDATE', 0, ''),
(4, 14, 0, '2015-08-05', '0', 'UPDATE', 0, ''),
(5, 12, 0, '2015-08-05', '0', 'UPDATE', 0, ''),
(6, 12, 0, '2015-08-05', '0', 'UPDATE', 0, ''),
(7, 12, 0, '2015-08-10', '0', 'UPDATE', 0, ''),
(8, 12, 0, '2015-08-10', '0', 'UPDATE', 0, ''),
(9, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(10, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(11, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(12, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(13, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(14, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(15, 12, 0, '0000-00-00', '0', 'UPDATE', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses`
--

CREATE TABLE IF NOT EXISTS `tbl_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `aplikasi` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5576 ;

--
-- Dumping data for table `tbl_akses`
--

INSERT INTO `tbl_akses` (`id`, `nama`, `aplikasi`) VALUES
(4588, 'elauvre', 'whkpi'),
(5097, 'eabjami', 'transportprice'),
(5096, 'eabjami', 'snapshot'),
(5450, 'eimahen', 'whoccupancy'),
(5449, 'eimahen', 'whlist'),
(5448, 'eimahen', 'whkpi'),
(5447, 'eimahen', 'whaccuracy'),
(4169, 'qsurmah', 'whkpi'),
(4170, 'qsurmah', 'whlist'),
(4171, 'qsurmah', 'whoccupancy'),
(5349, 'zfebrai', 'lccreport'),
(5095, 'eabjami', 'productivity'),
(5093, 'eabjami', 'mom'),
(4172, 'qsurmah', 'whprice'),
(113, 'wdm', 'dspkpi'),
(114, 'wdm', 'dspshare'),
(4168, 'qsurmah', 'whaccuracy'),
(4167, 'qsurmah', 'inven'),
(298, 'warehouse', 'whlist'),
(297, 'warehouse', 'whkpi'),
(296, 'warehouse', 'whaccuracy'),
(295, 'warehouse', 'snapshot'),
(294, 'warehouse', 'productivity'),
(293, 'warehouse', 'mom'),
(4852, 'erihwir', 'whkpi'),
(4851, 'erihwir', 'whaccuracy'),
(4850, 'erihwir', 'transportprice'),
(743, 'ceva', 'whoccupancy'),
(741, 'ceva', 'whkpi'),
(740, 'ceva', 'whaccuracy'),
(739, 'ceva', 'snapshot'),
(738, 'ceva', 'productivity'),
(5094, 'eabjami', 'catalogue'),
(5348, 'zfebrai', 'ipay'),
(4164, 'qsurmah', 'snapshot'),
(5505, 'eadhnin', 'whkpi'),
(5504, 'eadhnin', 'whaccuracy'),
(5217, 'ehilhil', 'inven'),
(5216, 'ehilhil', 'transportprice'),
(5215, 'ehilhil', 'tms'),
(5214, 'ehilhil', 'snapshot'),
(5213, 'ehilhil', 'productivity'),
(5212, 'ehilhil', 'catalogue'),
(737, 'ceva', 'momceva'),
(299, 'warehouse', 'whoccupancy'),
(300, 'EMUHWAD', 'asset'),
(301, 'EMUHWAD', 'contact'),
(302, 'EMUHWAD', 'dspkpi'),
(303, 'EMUHWAD', 'dspshare'),
(304, 'EMUHWAD', 'forecast'),
(305, 'EMUHWAD', 'ibast'),
(306, 'EMUHWAD', 'ipay'),
(307, 'EMUHWAD', 'mom'),
(308, 'EMUHWAD', 'catalogue'),
(309, 'EMUHWAD', 'productivity'),
(310, 'EMUHWAD', 'snapshot'),
(311, 'EMUHWAD', 'transportprice'),
(312, 'EMUHWAD', 'whaccuracy'),
(313, 'EMUHWAD', 'whkpi'),
(314, 'EMUHWAD', 'whlist'),
(315, 'EMUHWAD', 'whoccupancy'),
(316, 'EMUHWAD', 'whprice'),
(5560, 'kuncoro', 'otrequest'),
(5559, 'kuncoro', 'inn'),
(5558, 'kuncoro', 'momtnt'),
(5557, 'kuncoro', 'momsch'),
(5556, 'kuncoro', 'momdsc'),
(5555, 'kuncoro', 'momdgf'),
(5092, 'eabjami', 'lccreport'),
(5211, 'ehilhil', 'plantspec'),
(356, 'EIDDGF', 'mom'),
(5210, 'ehilhil', 'otrequest'),
(375, 'yanto', 'dspkpi'),
(376, 'yanto', 'dspshare'),
(5554, 'kuncoro', 'momceva'),
(5553, 'kuncoro', 'mom'),
(5209, 'ehilhil', 'inn'),
(5208, 'ehilhil', 'mom'),
(5552, 'kuncoro', 'pslead'),
(5207, 'ehilhil', 'lccreport'),
(2071, 'dspdummy', 'ideabox'),
(2070, 'dspdummy', 'dspkpi'),
(2384, 'eid.ceva', 'whaccuracy'),
(2383, 'eid.ceva', 'snapshot'),
(1494, 'eid.dsc', 'ipay'),
(1493, 'eid.dsc', 'dspkpi'),
(1498, 'dsp.dgf', 'ipay'),
(1502, 'eid.tnt', 'ipay'),
(1501, 'eid.tnt', 'dspkpi'),
(1506, 'eid.sch', 'ipay'),
(1505, 'eid.sch', 'dspkpi'),
(4803, 'esyasya', 'whlist'),
(4587, 'elauvre', 'whaccuracy'),
(4586, 'elauvre', 'transportprice'),
(4585, 'elauvre', 'snapshot'),
(4581, 'elauvre', 'mom'),
(5551, 'kuncoro', 'lccreport'),
(5550, 'kuncoro', 'ilcc'),
(5347, 'zfebrai', 'forecast'),
(5346, 'zfebrai', 'dspkpi'),
(5291, 'zbamsuk', 'momdgf'),
(5091, 'eabjami', 'ilcc'),
(5206, 'ehilhil', 'ilcc'),
(1497, 'dsp.dgf', 'dspkpi'),
(5205, 'ehilhil', 'ipay'),
(5204, 'ehilhil', 'ioutbound'),
(3423, 'james.cowcher', 'whoccupancy'),
(3422, 'james.cowcher', 'whlist'),
(3421, 'james.cowcher', 'whkpi'),
(3420, 'james.cowcher', 'whaccuracy'),
(3419, 'james.cowcher', 'transportprice'),
(3418, 'james.cowcher', 'snapshot'),
(3417, 'james.cowcher', 'productivity'),
(3416, 'james.cowcher', 'ipay'),
(3415, 'james.cowcher', 'ibast'),
(3414, 'james.cowcher', 'dspreport'),
(3413, 'james.cowcher', 'dspshare'),
(3412, 'james.cowcher', 'dspkpi'),
(5089, 'eabjami', 'ibastprice'),
(2382, 'eid.ceva', 'productivity'),
(2381, 'eid.ceva', 'momceva'),
(2380, 'eid.ceva', 'contact'),
(5549, 'kuncoro', 'ipay'),
(5090, 'eabjami', 'ipay'),
(4166, 'qsurmah', 'transportprice'),
(4165, 'qsurmah', 'tms'),
(4163, 'qsurmah', 'productivity'),
(4162, 'qsurmah', 'catalogue'),
(4668, 'qfersap', 'dspkpi'),
(4687, 'qfersap', 'transportprice'),
(4686, 'qfersap', 'tms'),
(4685, 'qfersap', 'snapshot'),
(4684, 'qfersap', 'productivity'),
(4683, 'qfersap', 'catalogue'),
(4682, 'qfersap', 'plantspec'),
(4681, 'qfersap', 'mom'),
(4680, 'qfersap', 'lccreport'),
(4818, 'qekodes', 'snapshot'),
(4817, 'qekodes', 'productivity'),
(4816, 'qekodes', 'catalogue'),
(4815, 'qekodes', 'mom'),
(4814, 'qekodes', 'lccreport'),
(4813, 'qekodes', 'ilcc'),
(4812, 'qekodes', 'ipay'),
(4811, 'qekodes', 'ibast'),
(742, 'ceva', 'whlist'),
(5503, 'eadhnin', 'transportprice'),
(5502, 'eadhnin', 'snapshot'),
(4707, 'eadirac', 'whlist'),
(4706, 'eadirac', 'whkpi'),
(4918, 'eagusap', 'whkpi'),
(4917, 'eagusap', 'whaccuracy'),
(4916, 'eagusap', 'snapshot'),
(4915, 'eagusap', 'productivity'),
(4914, 'eagusap', 'catalogue'),
(4913, 'eagusap', 'inn'),
(4912, 'eagusap', 'mom'),
(4705, 'eadirac', 'whaccuracy'),
(4721, 'qagusis', 'whaccuracy'),
(4720, 'qagusis', 'transportprice'),
(4719, 'qagusis', 'snapshot'),
(4718, 'qagusis', 'productivity'),
(4717, 'qagusis', 'catalogue'),
(4716, 'qagusis', 'mom'),
(4990, 'qaidfaz', 'whoccupancy'),
(4989, 'qaidfaz', 'whlist'),
(4988, 'qaidfaz', 'whkpi'),
(4987, 'qaidfaz', 'whaccuracy'),
(4986, 'qaidfaz', 'transportprice'),
(4985, 'qaidfaz', 'snapshot'),
(4984, 'qaidfaz', 'productivity'),
(4983, 'qaidfaz', 'catalogue'),
(4982, 'qaidfaz', 'mom'),
(4981, 'qaidfaz', 'lccreport'),
(3827, 'qdadris', 'whoccupancy'),
(3826, 'qdadris', 'whlist'),
(3825, 'qdadris', 'whkpi'),
(3824, 'qdadris', 'whaccuracy'),
(3823, 'qdadris', 'transportprice'),
(3822, 'qdadris', 'snapshot'),
(3821, 'qdadris', 'productivity'),
(3820, 'qdadris', 'catalogue'),
(4752, 'edimapr', 'transportprice'),
(4751, 'edimapr', 'snapshot'),
(4750, 'edimapr', 'productivity'),
(4749, 'edimapr', 'catalogue'),
(4748, 'edimapr', 'mom'),
(4747, 'edimapr', 'lccreport'),
(4746, 'edimapr', 'ilcc'),
(5100, 'eabjami', 'whlist'),
(5099, 'eabjami', 'whkpi'),
(5098, 'eabjami', 'whaccuracy'),
(5501, 'eadhnin', 'productivity'),
(5500, 'eadhnin', 'catalogue'),
(5548, 'kuncoro', 'ioutbound'),
(4679, 'qfersap', 'ilcc'),
(4785, 'eleotam', 'whaccuracy'),
(4784, 'eleotam', 'transportprice'),
(4783, 'eleotam', 'snapshot'),
(4782, 'eleotam', 'productivity'),
(4781, 'eleotam', 'catalogue'),
(4780, 'eleotam', 'mom'),
(4779, 'eleotam', 'lccreport'),
(947, 'emuhfai', 'contact'),
(948, 'emuhfai', 'dspkpi'),
(949, 'emuhfai', 'forecast'),
(950, 'emuhfai', 'mom'),
(951, 'emuhfai', 'catalogue'),
(952, 'emuhfai', 'productivity'),
(953, 'emuhfai', 'snapshot'),
(954, 'emuhfai', 'whaccuracy'),
(955, 'emuhfai', 'whkpi'),
(956, 'emuhfai', 'whlist'),
(957, 'emuhfai', 'whoccupancy'),
(4883, 'emaryon', 'whaccuracy'),
(4881, 'emaryon', 'snapshot'),
(4882, 'emaryon', 'transportprice'),
(4880, 'emaryon', 'productivity'),
(4879, 'emaryon', 'catalogue'),
(4878, 'emaryon', 'mom'),
(4768, 'etrirac', 'transportprice'),
(4767, 'etrirac', 'snapshot'),
(4766, 'etrirac', 'productivity'),
(4765, 'etrirac', 'catalogue'),
(4764, 'etrirac', 'mom'),
(4763, 'etrirac', 'lccreport'),
(4762, 'etrirac', 'ilcc'),
(4849, 'erihwir', 'snapshot'),
(4848, 'erihwir', 'productivity'),
(4847, 'erihwir', 'catalogue'),
(4846, 'erihwir', 'mom'),
(4845, 'erihwir', 'lccreport'),
(4844, 'erihwir', 'ilcc'),
(991, 'esolsol', 'contact'),
(992, 'esolsol', 'dspkpi'),
(993, 'esolsol', 'forecast'),
(994, 'esolsol', 'mom'),
(995, 'esolsol', 'catalogue'),
(996, 'esolsol', 'productivity'),
(997, 'esolsol', 'snapshot'),
(998, 'esolsol', 'whaccuracy'),
(999, 'esolsol', 'whkpi'),
(1000, 'esolsol', 'whlist'),
(1001, 'esolsol', 'whoccupancy'),
(4547, 'suyanto', 'whlist'),
(4546, 'suyanto', 'whkpi'),
(4545, 'suyanto', 'whaccuracy'),
(4544, 'suyanto', 'transportprice'),
(4541, 'suyanto', 'catalogue'),
(1019, 'esyafsy', 'contact'),
(1020, 'esyafsy', 'dspkpi'),
(1021, 'esyafsy', 'forecast'),
(1022, 'esyafsy', 'mom'),
(1023, 'esyafsy', 'catalogue'),
(1024, 'esyafsy', 'productivity'),
(1025, 'esyafsy', 'snapshot'),
(1026, 'esyafsy', 'whaccuracy'),
(1027, 'esyafsy', 'whkpi'),
(1028, 'esyafsy', 'whlist'),
(1029, 'esyafsy', 'whoccupancy'),
(5365, 'etauism', 'snapshot'),
(5364, 'etauism', 'productivity'),
(5363, 'etauism', 'catalogue'),
(5362, 'etauism', 'mom'),
(5361, 'etauism', 'lccreport'),
(5360, 'etauism', 'ilcc'),
(5359, 'etauism', 'ideabox'),
(4867, 'ejultri', 'whaccuracy'),
(4865, 'ejultri', 'snapshot'),
(4866, 'ejultri', 'transportprice'),
(4864, 'ejultri', 'productivity'),
(4863, 'ejultri', 'catalogue'),
(4862, 'ejultri', 'mom'),
(4584, 'elauvre', 'productivity'),
(5499, 'eadhnin', 'mom'),
(5498, 'eadhnin', 'lccreport'),
(5497, 'eadhnin', 'ilcc'),
(5496, 'eadhnin', 'ipay'),
(5495, 'eadhnin', 'iclaim'),
(5494, 'eadhnin', 'ibast'),
(5493, 'eadhnin', 'forecast'),
(5446, 'eimahen', 'transportprice'),
(5445, 'eimahen', 'snapshot'),
(5444, 'eimahen', 'ispend'),
(4161, 'qsurmah', 'plantspec'),
(4160, 'qsurmah', 'inn'),
(4159, 'qsurmah', 'momtnt'),
(5547, 'kuncoro', 'iadmoutbound'),
(4802, 'esyasya', 'whkpi'),
(4801, 'esyasya', 'whaccuracy'),
(4800, 'esyasya', 'transportprice'),
(4799, 'esyasya', 'snapshot'),
(4798, 'esyasya', 'productivity'),
(5088, 'eabjami', 'ibast'),
(5087, 'eabjami', 'forecast'),
(4713, 'qagusis', 'ipay'),
(4714, 'qagusis', 'ilcc'),
(4911, 'eagusap', 'lccreport'),
(4910, 'eagusap', 'ilcc'),
(4909, 'eagusap', 'ideabox'),
(4704, 'eadirac', 'transportprice'),
(5492, 'eadhnin', 'employee'),
(5491, 'eadhnin', 'ecom'),
(5490, 'eadhnin', 'dspkpi'),
(5489, 'eadhnin', 'contact'),
(5086, 'eabjami', 'dspshare'),
(5085, 'eabjami', 'dspkpi'),
(5084, 'eabjami', 'contact'),
(1612, 'ehehend', 'contact'),
(1609, 'EVERTOB', 'contact'),
(1607, 'egenpra', 'contact'),
(1241, 'emuzhas', 'contact'),
(1242, 'emuzhas', 'iclaim'),
(5546, 'kuncoro', 'ideabox'),
(4796, 'esyasya', 'mom'),
(4797, 'esyasya', 'catalogue'),
(4795, 'esyasya', 'lccreport'),
(4794, 'esyasya', 'ilcc'),
(4793, 'esyasya', 'ipay'),
(4808, 'qekodes', 'dspshare'),
(1306, 'qwords', 'inven'),
(4810, 'qekodes', 'forecast'),
(4809, 'qekodes', 'employee'),
(1310, 'qnureri', 'mom'),
(1504, 'eid.sch', 'contact'),
(1496, 'dsp.dgf', 'contact'),
(1492, 'eid.dsc', 'contact'),
(1500, 'eid.tnt', 'contact'),
(5443, 'eimahen', 'productivity'),
(5442, 'eimahen', 'catalogue'),
(5441, 'eimahen', 'plantspec'),
(5198, 'ehilhil', 'ibast'),
(5199, 'ehilhil', 'ibastprice'),
(5200, 'ehilhil', 'inbound'),
(5201, 'ehilhil', 'iclaim'),
(5202, 'ehilhil', 'ideabox'),
(5488, 'eadhnin', 'complaintdesk'),
(5487, 'eadhnin', 'idistcheckperform'),
(5486, 'eadhnin', 'asset'),
(3819, 'qdadris', 'mom'),
(3818, 'qdadris', 'ilcc'),
(3817, 'qdadris', 'ipay'),
(4678, 'qfersap', 'ipay'),
(5203, 'ehilhil', 'iadmoutbound'),
(5196, 'ehilhil', 'forecast'),
(4543, 'suyanto', 'snapshot'),
(4542, 'suyanto', 'productivity'),
(4540, 'suyanto', 'mom'),
(4539, 'suyanto', 'lccreport'),
(1495, 'eid.dsc', 'momdsc'),
(1499, 'dsp.dgf', 'momdgf'),
(1503, 'eid.tnt', 'momtnt'),
(1507, 'eid.sch', 'momsch'),
(5545, 'kuncoro', 'iclaim'),
(5544, 'kuncoro', 'inbound'),
(5543, 'kuncoro', 'ibastprice'),
(1538, 'dara', 'contact'),
(1539, 'dara', 'dspkpi'),
(1540, 'dara', 'ipay'),
(1541, 'dara', 'momsch'),
(4158, 'qsurmah', 'momsch'),
(4157, 'qsurmah', 'momdsc'),
(4156, 'qsurmah', 'momdgf'),
(4155, 'qsurmah', 'momceva'),
(4154, 'qsurmah', 'mom'),
(4153, 'qsurmah', 'lccreport'),
(4152, 'qsurmah', 'ilcc'),
(4151, 'qsurmah', 'ispend'),
(5542, 'kuncoro', 'ibast'),
(5541, 'kuncoro', 'ibastforceva'),
(1602, 'eharvra', 'iadmoutbound'),
(1603, 'eharvra', 'ioutbound'),
(1604, 'dalbert', 'contact'),
(1605, 'dalbert', 'ibastforceva'),
(1606, 'EIDTEAB', 'contact'),
(4715, 'qagusis', 'lccreport'),
(4861, 'ejultri', 'lccreport'),
(4860, 'ejultri', 'ilcc'),
(4859, 'ejultri', 'ipay'),
(4150, 'qsurmah', 'ipay'),
(4149, 'qsurmah', 'ioutbound'),
(4148, 'qsurmah', 'ideabox'),
(5192, 'ehilhil', 'dspshare'),
(4583, 'elauvre', 'catalogue'),
(4582, 'elauvre', 'inn'),
(4580, 'elauvre', 'lccreport'),
(4416, 'eyulrah', 'whlist2'),
(4579, 'elauvre', 'ilcc'),
(4712, 'qagusis', 'forecast'),
(4711, 'qagusis', 'dspkpi'),
(5540, 'kuncoro', 'forecast'),
(5539, 'kuncoro', 'employee'),
(5440, 'eimahen', 'otrequest'),
(5439, 'eimahen', 'inn'),
(5438, 'eimahen', 'mom'),
(4980, 'qaidfaz', 'ilcc'),
(4979, 'qaidfaz', 'ipay'),
(3816, 'qdadris', 'forecast'),
(3815, 'qdadris', 'dspkpi'),
(3814, 'qdadris', 'contact'),
(3813, 'qdadris', 'complaintdesk'),
(4577, 'elauvre', 'ideabox'),
(4792, 'esyasya', 'forecast'),
(4791, 'esyasya', 'dspkpi'),
(4790, 'esyasya', 'contact'),
(4538, 'suyanto', 'ilcc'),
(4537, 'suyanto', 'ipay'),
(4536, 'suyanto', 'forecast'),
(4147, 'qsurmah', 'iclaim'),
(4146, 'qsurmah', 'inbound'),
(4144, 'qsurmah', 'forecast'),
(4877, 'emaryon', 'lccreport'),
(4876, 'emaryon', 'ilcc'),
(4875, 'emaryon', 'ipay'),
(4778, 'eleotam', 'ilcc'),
(4777, 'eleotam', 'ipay'),
(4677, 'qfersap', 'iadmoutbound'),
(2205, 'ERITHUT', 'catalogue'),
(2204, 'ERITHUT', 'iclaim'),
(2203, 'ERITHUT', 'contact'),
(2014, 'ekuskus', 'plantspec'),
(5538, 'kuncoro', 'ecom'),
(5437, 'eimahen', 'lccreport'),
(5436, 'eimahen', 'ilcc'),
(5435, 'eimahen', 'ipay'),
(2072, 'dspdummy', 'momceva'),
(5537, 'kuncoro', 'dspreport'),
(5536, 'kuncoro', 'dspshare'),
(5535, 'kuncoro', 'dspkpi'),
(5197, 'ehilhil', 'ibastforceva'),
(3144, 'kuncoro2', 'dspkpi'),
(5434, 'eimahen', 'ideabox'),
(5433, 'eimahen', 'iclaim'),
(2206, 'ERITHUT', 'whlist'),
(2207, 'ERITHUT', 'whlist2'),
(4908, 'eagusap', 'iclaim'),
(4907, 'eagusap', 'ecom'),
(4905, 'eagusap', 'dspshare'),
(4578, 'elauvre', 'ipay'),
(4576, 'elauvre', 'forecast'),
(4575, 'elauvre', 'ecom'),
(4574, 'elauvre', 'dspshare'),
(5358, 'etauism', 'iclaim'),
(5357, 'etauism', 'forecast'),
(5356, 'etauism', 'dspreport'),
(5355, 'etauism', 'dspshare'),
(5354, 'etauism', 'dspkpi'),
(5353, 'etauism', 'contact'),
(5195, 'ehilhil', 'employee'),
(5194, 'ehilhil', 'ecom'),
(5290, 'zbamsuk', 'ipay'),
(5289, 'zbamsuk', 'forecast'),
(5431, 'eimahen', 'ibast'),
(5432, 'eimahen', 'inbound'),
(2367, 'zandtob', 'dspkpi'),
(4842, 'erihwir', 'forecast'),
(4841, 'erihwir', 'ecom'),
(2385, 'eid.ceva', 'whkpi'),
(2386, 'eid.ceva', 'whlist'),
(2387, 'eid.ceva', 'whoccupancy'),
(2388, 'zaansup', 'contact'),
(2389, 'zaansup', 'momceva'),
(2390, 'zaansup', 'productivity'),
(2391, 'zaansup', 'snapshot'),
(2392, 'zaansup', 'whaccuracy'),
(2393, 'zaansup', 'whkpi'),
(2394, 'zaansup', 'whlist'),
(2395, 'zaansup', 'whoccupancy'),
(2396, 'zabdwah', 'contact'),
(2397, 'zabdwah', 'momceva'),
(2398, 'zabdwah', 'productivity'),
(2399, 'zabdwah', 'snapshot'),
(2400, 'zabdwah', 'whaccuracy'),
(2401, 'zabdwah', 'whkpi'),
(2402, 'zabdwah', 'whlist'),
(2403, 'zabdwah', 'whoccupancy'),
(2404, 'zadamus', 'contact'),
(2405, 'zadamus', 'momceva'),
(2406, 'zadamus', 'productivity'),
(2407, 'zadamus', 'snapshot'),
(2408, 'zadamus', 'whaccuracy'),
(2409, 'zadamus', 'whkpi'),
(2410, 'zadamus', 'whlist'),
(2411, 'zadamus', 'whoccupancy'),
(2412, 'zagumar', 'contact'),
(2413, 'zagumar', 'momceva'),
(2414, 'zagumar', 'productivity'),
(2415, 'zagumar', 'snapshot'),
(2416, 'zagumar', 'whaccuracy'),
(2417, 'zagumar', 'whkpi'),
(2418, 'zagumar', 'whlist'),
(2419, 'zagumar', 'whoccupancy'),
(2420, 'zahmmul', 'contact'),
(2421, 'zahmmul', 'momceva'),
(2422, 'zahmmul', 'productivity'),
(2423, 'zahmmul', 'snapshot'),
(2424, 'zahmmul', 'whaccuracy'),
(2425, 'zahmmul', 'whkpi'),
(2426, 'zahmmul', 'whlist'),
(2427, 'zahmmul', 'whoccupancy'),
(2428, 'zalbkei', 'contact'),
(2429, 'zalbkei', 'momceva'),
(2430, 'zalbkei', 'productivity'),
(2431, 'zalbkei', 'snapshot'),
(2432, 'zalbkei', 'whaccuracy'),
(2433, 'zalbkei', 'whkpi'),
(2434, 'zalbkei', 'whlist'),
(2435, 'zalbkei', 'whoccupancy'),
(2595, 'zaridam', 'whaccuracy'),
(2594, 'zaridam', 'snapshot'),
(2593, 'zaridam', 'productivity'),
(2592, 'zaridam', 'momceva'),
(2591, 'zaridam', 'contact'),
(2443, 'zbusfac', 'contact'),
(2444, 'zbusfac', 'momceva'),
(2445, 'zbusfac', 'productivity'),
(2446, 'zbusfac', 'snapshot'),
(2447, 'zbusfac', 'whaccuracy'),
(2448, 'zbusfac', 'whkpi'),
(2449, 'zbusfac', 'whlist'),
(2450, 'zbusfac', 'whoccupancy'),
(2451, 'zyudles', 'contact'),
(2452, 'zyudles', 'momceva'),
(2453, 'zyudles', 'productivity'),
(2454, 'zyudles', 'snapshot'),
(2455, 'zyudles', 'whaccuracy'),
(2456, 'zyudles', 'whkpi'),
(2457, 'zyudles', 'whlist'),
(2458, 'zsepmal', 'contact'),
(2459, 'zsepmal', 'momceva'),
(2460, 'zsepmal', 'productivity'),
(2461, 'zsepmal', 'snapshot'),
(2462, 'zsepmal', 'whaccuracy'),
(2463, 'zsepmal', 'whkpi'),
(2464, 'zsepmal', 'whlist'),
(2465, 'zsepmal', 'whoccupancy'),
(2466, 'zmuhjai', 'contact'),
(2467, 'zmuhjai', 'momceva'),
(2468, 'zmuhjai', 'productivity'),
(2469, 'zmuhjai', 'snapshot'),
(2470, 'zmuhjai', 'whaccuracy'),
(2471, 'zmuhjai', 'whkpi'),
(2472, 'zmuhjai', 'whlist'),
(2473, 'zmarsah', 'contact'),
(2474, 'zmarsah', 'momceva'),
(2475, 'zmarsah', 'productivity'),
(2476, 'zmarsah', 'snapshot'),
(2477, 'zmarsah', 'whaccuracy'),
(2478, 'zmarsah', 'whkpi'),
(2479, 'zmarsah', 'whlist'),
(2480, 'zmarsah', 'whoccupancy'),
(2481, 'zjupisk', 'contact'),
(2482, 'zjupisk', 'momceva'),
(2483, 'zjupisk', 'productivity'),
(2484, 'zjupisk', 'snapshot'),
(2485, 'zjupisk', 'whaccuracy'),
(2486, 'zjupisk', 'whkpi'),
(2487, 'zjupisk', 'whlist'),
(2488, 'zjupisk', 'whoccupancy'),
(4480, 'zjultam', 'whaccuracy'),
(4479, 'zjultam', 'snapshot'),
(4478, 'zjultam', 'productivity'),
(4477, 'zjultam', 'inn'),
(4476, 'zjultam', 'momceva'),
(4475, 'zjultam', 'contact'),
(2497, 'zirwsia', 'contact'),
(2498, 'zirwsia', 'momceva'),
(2499, 'zirwsia', 'productivity'),
(2500, 'zirwsia', 'snapshot'),
(2501, 'zirwsia', 'whaccuracy'),
(2502, 'zirwsia', 'whkpi'),
(2503, 'zirwsia', 'whlist'),
(2504, 'zirwsia', 'whoccupancy'),
(2505, 'zhushaf', 'contact'),
(2506, 'zhushaf', 'momceva'),
(2507, 'zhushaf', 'productivity'),
(2508, 'zhushaf', 'snapshot'),
(2509, 'zhushaf', 'whaccuracy'),
(2510, 'zhushaf', 'whkpi'),
(2511, 'zhushaf', 'whlist'),
(2512, 'zhushaf', 'whoccupancy'),
(2513, 'zhersan', 'contact'),
(2514, 'zhersan', 'momceva'),
(2515, 'zhersan', 'productivity'),
(2516, 'zhersan', 'snapshot'),
(2517, 'zhersan', 'whaccuracy'),
(2518, 'zhersan', 'whkpi'),
(2519, 'zhersan', 'whlist'),
(2520, 'zhersan', 'whoccupancy'),
(2521, 'zfen', 'contact'),
(2522, 'zfen', 'momceva'),
(2523, 'zfen', 'productivity'),
(2524, 'zfen', 'snapshot'),
(2525, 'zfen', 'whaccuracy'),
(2526, 'zfen', 'whkpi'),
(2527, 'zfen', 'whlist'),
(2528, 'zfen', 'whoccupancy'),
(2543, 'zfebher', 'whlist'),
(2542, 'zfebher', 'whkpi'),
(2541, 'zfebher', 'whaccuracy'),
(2540, 'zfebher', 'snapshot'),
(2539, 'zfebher', 'productivity'),
(2538, 'zfebher', 'momceva'),
(2537, 'zfebher', 'contact'),
(2544, 'zfebher', 'whoccupancy'),
(2545, 'zekosur', 'contact'),
(2546, 'zekosur', 'momceva'),
(2547, 'zekosur', 'productivity'),
(2548, 'zekosur', 'snapshot'),
(2549, 'zekosur', 'whaccuracy'),
(2550, 'zekosur', 'whkpi'),
(2551, 'zekosur', 'whlist'),
(2552, 'zekosur', 'whoccupancy'),
(2553, 'zdz%20dja', 'contact'),
(2554, 'zdz%20dja', 'momceva'),
(2555, 'zdz%20dja', 'productivity'),
(2556, 'zdz%20dja', 'snapshot'),
(2557, 'zdz%20dja', 'whaccuracy'),
(2558, 'zdz%20dja', 'whkpi'),
(2559, 'zdz%20dja', 'whlist'),
(2560, 'zdz%20dja', 'whoccupancy'),
(2561, 'zdicwib', 'contact'),
(2562, 'zdicwib', 'momceva'),
(2563, 'zdicwib', 'productivity'),
(2564, 'zdicwib', 'snapshot'),
(2565, 'zdicwib', 'whaccuracy'),
(2566, 'zdicwib', 'whkpi'),
(2567, 'zdicwib', 'whlist'),
(2568, 'zdicwib', 'whoccupancy'),
(2569, 'zdenich', 'contact'),
(2570, 'zdenich', 'momceva'),
(2571, 'zdenich', 'productivity'),
(2572, 'zdenich', 'snapshot'),
(2573, 'zdenich', 'whaccuracy'),
(2574, 'zdenich', 'whkpi'),
(2575, 'zdenich', 'whlist'),
(2576, 'zdenich', 'whoccupancy'),
(2577, 'zchosar', 'contact'),
(2578, 'zchosar', 'momceva'),
(2579, 'zchosar', 'productivity'),
(2580, 'zchosar', 'snapshot'),
(2581, 'zchosar', 'whkpi'),
(2582, 'zchosar', 'whoccupancy'),
(2583, 'zsahsah', 'contact'),
(2584, 'zsahsah', 'momceva'),
(2585, 'zsahsah', 'productivity'),
(2586, 'zsahsah', 'snapshot'),
(2587, 'zsahsah', 'whaccuracy'),
(2588, 'zsahsah', 'whkpi'),
(2589, 'zsahsah', 'whlist'),
(2590, 'zsahsah', 'whoccupancy'),
(2596, 'zaridam', 'whkpi'),
(2597, 'zaridam', 'whlist'),
(2598, 'zaridam', 'whoccupancy'),
(2599, 'zalvmar', 'contact'),
(2600, 'zalvmar', 'dspkpi'),
(2601, 'zalvmar', 'ipay'),
(2602, 'zalvmar', 'momsch'),
(2603, 'zdarpus', 'contact'),
(2604, 'zdarpus', 'dspkpi'),
(2605, 'zdarpus', 'ipay'),
(2606, 'zdarpus', 'momsch'),
(2607, 'zdewpus', 'contact'),
(2608, 'zdewpus', 'dspkpi'),
(2609, 'zdewpus', 'ipay'),
(2610, 'zdewpus', 'momsch'),
(2611, 'zfensan', 'contact'),
(2612, 'zfensan', 'dspkpi'),
(2613, 'zfensan', 'ipay'),
(2614, 'zfensan', 'momsch'),
(2615, 'zharisk', 'contact'),
(2616, 'zharisk', 'dspkpi'),
(2617, 'zharisk', 'ipay'),
(2618, 'zharisk', 'momsch'),
(2619, 'zindhar', 'contact'),
(2620, 'zindhar', 'dspkpi'),
(2621, 'zindhar', 'ipay'),
(2622, 'zindhar', 'momsch'),
(2623, 'ziwasug', 'contact'),
(2624, 'ziwasug', 'dspkpi'),
(2625, 'ziwasug', 'ipay'),
(2626, 'ziwasug', 'momsch'),
(2627, 'zlougil', 'contact'),
(2628, 'zlougil', 'dspkpi'),
(2629, 'zlougil', 'ipay'),
(2630, 'zlougil', 'momsch'),
(2631, 'zsyodal', 'contact'),
(2632, 'zsyodal', 'dspkpi'),
(2633, 'zsyodal', 'ipay'),
(2634, 'zsyodal', 'momsch'),
(2635, 'zratyas', 'contact'),
(2636, 'zratyas', 'dspkpi'),
(2637, 'zratyas', 'ipay'),
(2638, 'zratyas', 'momsch'),
(2646, 'zwulakm', 'momsch'),
(2645, 'zwulakm', 'ipay'),
(2644, 'zwulakm', 'dspkpi'),
(2643, 'zwulakm', 'contact'),
(2647, 'zadikal', 'contact'),
(2648, 'zadikal', 'dspkpi'),
(2649, 'zadikal', 'ipay'),
(2650, 'zadikal', 'momtnt'),
(2651, 'zahmsya', 'contact'),
(2652, 'zahmsya', 'dspkpi'),
(2653, 'zahmsya', 'ipay'),
(2654, 'zahmsya', 'momtnt'),
(2655, 'zaliyul', 'contact'),
(2656, 'zaliyul', 'dspkpi'),
(2657, 'zaliyul', 'ipay'),
(2658, 'zaliyul', 'momtnt'),
(2659, 'zedysug', 'contact'),
(2660, 'zedysug', 'dspkpi'),
(2661, 'zedysug', 'ipay'),
(2662, 'zedysug', 'momtnt'),
(2663, 'zharsoe', 'contact'),
(2664, 'zharsoe', 'dspkpi'),
(2665, 'zharsoe', 'ipay'),
(2666, 'zharsoe', 'momtnt'),
(2667, 'ziwaset', 'contact'),
(2668, 'ziwaset', 'dspkpi'),
(2669, 'ziwaset', 'ipay'),
(2670, 'ziwaset', 'momtnt'),
(2671, 'zjuljul', 'contact'),
(2672, 'zjuljul', 'dspkpi'),
(2673, 'zjuljul', 'ipay'),
(2674, 'zjuljul', 'momtnt'),
(2675, 'zluttar', 'contact'),
(2676, 'zluttar', 'dspkpi'),
(2677, 'zluttar', 'ipay'),
(2678, 'zluttar', 'momtnt'),
(2679, 'zriohar', 'contact'),
(2680, 'zriohar', 'dspkpi'),
(2681, 'zriohar', 'ipay'),
(2682, 'zriohar', 'momtnt'),
(2683, 'zrizriz', 'contact'),
(2684, 'zrizriz', 'dspkpi'),
(2685, 'zrizriz', 'ipay'),
(2686, 'zrizriz', 'momtnt'),
(2687, 'zrulrul', 'contact'),
(2688, 'zrulrul', 'dspkpi'),
(2689, 'zrulrul', 'ipay'),
(2690, 'zrulrul', 'momtnt'),
(2691, 'ztrianw', 'contact'),
(2692, 'ztrianw', 'dspkpi'),
(2693, 'ztrianw', 'ipay'),
(2694, 'ztrianw', 'momtnt'),
(2695, 'ztrimau', 'contact'),
(2696, 'ztrimau', 'dspkpi'),
(2697, 'ztrimau', 'ipay'),
(2698, 'ztrimau', 'momtnt'),
(2699, 'zandand', 'contact'),
(2700, 'zandand', 'dspkpi'),
(2701, 'zandand', 'ipay'),
(2702, 'zandand', 'momdsc'),
(5458, 'zasemur', 'lccreport'),
(5457, 'zasemur', 'ipay'),
(5456, 'zasemur', 'dspkpi'),
(5455, 'zasemur', 'contact'),
(2707, 'zdedsya', 'contact'),
(2708, 'zdedsya', 'dspkpi'),
(2709, 'zdedsya', 'ipay'),
(2710, 'zdedsya', 'momdsc'),
(2711, 'zdenwah', 'contact'),
(2712, 'zdenwah', 'dspkpi'),
(2713, 'zdenwah', 'ipay'),
(2714, 'zdenwah', 'momdsc'),
(2715, 'zidridr', 'contact'),
(2716, 'zidridr', 'dspkpi'),
(2717, 'zidridr', 'ipay'),
(2718, 'zidridr', 'momdsc'),
(2719, 'zindind', 'contact'),
(2720, 'zindind', 'dspkpi'),
(2721, 'zindind', 'ipay'),
(2722, 'zindind', 'momdsc'),
(2723, 'zkerpas', 'contact'),
(2724, 'zkerpas', 'dspkpi'),
(2725, 'zkerpas', 'ipay'),
(2726, 'zkerpas', 'momdsc'),
(5177, 'zlakpur', 'lccreport'),
(5176, 'zlakpur', 'ipay'),
(5175, 'zlakpur', 'dspkpi'),
(5174, 'zlakpur', 'contact'),
(2731, 'zmohnur', 'contact'),
(2732, 'zmohnur', 'dspkpi'),
(2733, 'zmohnur', 'ipay'),
(2734, 'zmohnur', 'momdsc'),
(2735, 'zmurjay', 'contact'),
(2736, 'zmurjay', 'dspkpi'),
(2737, 'zmurjay', 'ipay'),
(2738, 'zmurjay', 'momdsc'),
(2739, 'znurnur', 'contact'),
(2740, 'znurnur', 'dspkpi'),
(2741, 'znurnur', 'ipay'),
(2742, 'znurnur', 'momdsc'),
(2743, 'zprisin', 'contact'),
(2744, 'zprisin', 'dspkpi'),
(2745, 'zprisin', 'ipay'),
(2746, 'zprisin', 'momdsc'),
(2747, 'zsyumam', 'contact'),
(2748, 'zsyumam', 'dspkpi'),
(2749, 'zsyumam', 'ipay'),
(2750, 'zsyumam', 'momdsc'),
(2751, 'zwaikha', 'contact'),
(2752, 'zwaikha', 'dspkpi'),
(2753, 'zwaikha', 'ipay'),
(2754, 'zwaikha', 'momdsc'),
(3123, 'qransar', 'dspreport'),
(4840, 'erihwir', 'dspkpi'),
(4839, 'erihwir', 'contact'),
(4838, 'erihwir', 'complaintdesk'),
(2789, 'zdanfra', 'contact'),
(2790, 'zdanfra', 'momceva'),
(2791, 'zdanfra', 'productivity'),
(2792, 'zdanfra', 'snapshot'),
(2793, 'zdanfra', 'whaccuracy'),
(2794, 'zdanfra', 'whkpi'),
(2795, 'zdanfra', 'whlist'),
(2796, 'zdanfra', 'whoccupancy'),
(2797, 'eadaomp', 'ibastforceva'),
(2798, 'eadaomp', 'whlist2'),
(2799, 'eimaran', 'ibastforceva'),
(2800, 'eimaran', 'whlist2'),
(4703, 'eadirac', 'snapshot'),
(4702, 'eadirac', 'productivity'),
(4701, 'eadirac', 'catalogue'),
(4700, 'eadirac', 'mom'),
(4699, 'eadirac', 'lccreport'),
(4698, 'eadirac', 'ilcc'),
(4697, 'eadirac', 'ipay'),
(4696, 'eadirac', 'forecast'),
(4695, 'eadirac', 'dspkpi'),
(4694, 'eadirac', 'contact'),
(4693, 'eadirac', 'complaintdesk'),
(4145, 'qsurmah', 'ibast'),
(4143, 'qsurmah', 'employee'),
(4141, 'qsurmah', 'dspreport'),
(4142, 'qsurmah', 'ecom'),
(5193, 'ehilhil', 'dspreport'),
(5191, 'ehilhil', 'dspkpi'),
(5190, 'ehilhil', 'contact'),
(4676, 'qfersap', 'ideabox'),
(4675, 'qfersap', 'iclaim'),
(4674, 'qfersap', 'inbound'),
(4673, 'qfersap', 'ibast'),
(4672, 'qfersap', 'forecast'),
(4671, 'qfersap', 'employee'),
(4670, 'qfersap', 'ecom'),
(4140, 'qsurmah', 'dspshare'),
(3124, 'qransar', 'productivity'),
(3122, 'qransar', 'dspkpi'),
(5430, 'eimahen', 'forecast'),
(4573, 'elauvre', 'dspkpi'),
(4572, 'elauvre', 'contact'),
(4906, 'eagusap', 'dspreport'),
(4904, 'eagusap', 'dspkpi'),
(5352, 'etauism', 'complaintdesk'),
(5351, 'etauism', 'idistcheckperform'),
(3070, 'zfenfen', 'contact'),
(3071, 'zfenfen', 'momceva'),
(3072, 'zfenfen', 'productivity'),
(3073, 'zfenfen', 'snapshot'),
(3074, 'zfenfen', 'whaccuracy'),
(3075, 'zfenfen', 'whkpi'),
(3076, 'zfenfen', 'whlist'),
(3077, 'zfenfen', 'whoccupancy'),
(3078, 'ekakami', 'complaintdesk'),
(3079, 'ekakami', 'contact'),
(3080, 'ekakami', 'dspkpi'),
(3081, 'ekakami', 'forecast'),
(3082, 'ekakami', 'mom'),
(3083, 'ekakami', 'catalogue'),
(3084, 'ekakami', 'productivity'),
(3085, 'ekakami', 'snapshot'),
(3086, 'ekakami', 'whaccuracy'),
(3087, 'ekakami', 'whkpi'),
(3088, 'ekakami', 'whlist'),
(3089, 'ekakami', 'whoccupancy'),
(4952, 'ewidnug', 'whoccupancy'),
(4951, 'ewidnug', 'whlist2'),
(4950, 'ewidnug', 'whlist'),
(4949, 'ewidnug', 'whkpi'),
(4776, 'eleotam', 'forecast'),
(4775, 'eleotam', 'dspkpi'),
(4978, 'qaidfaz', 'forecast'),
(4977, 'qaidfaz', 'dspkpi'),
(3125, 'qransar', 'whaccuracy'),
(3126, 'qransar', 'whkpi'),
(3128, 'zdwinov', 'contact'),
(3129, 'zdwinov', 'dspkpi'),
(3130, 'zdwinov', 'ipay'),
(3131, 'zdwinov', 'momtnt'),
(5534, 'kuncoro', 'contactwinshuttle'),
(5533, 'kuncoro', 'contact'),
(4843, 'erihwir', 'ipay'),
(4535, 'suyanto', 'dspkpi'),
(4534, 'suyanto', 'contact'),
(4533, 'suyanto', 'complaintdesk'),
(5519, 'ekunbar', 'momdsc'),
(5518, 'ekunbar', 'ecom'),
(5517, 'ekunbar', 'dspkpi'),
(5532, 'kuncoro', 'complaintdesk'),
(5188, 'ehilhil', 'idistcheckperform'),
(5531, 'kuncoro', 'idistcheckperform'),
(5530, 'kuncoro', 'asset'),
(5485, 'eadhnin', 'dporefreshment'),
(4139, 'qsurmah', 'dspkpi'),
(4137, 'qsurmah', 'complaintdesk'),
(4138, 'qsurmah', 'contact'),
(3424, 'james.cowcher', 'whprice'),
(3425, 'ejamcow', 'contact'),
(3426, 'ejamcow', 'dspkpi'),
(3427, 'ejamcow', 'dspshare'),
(3428, 'ejamcow', 'ecom'),
(3429, 'ejamcow', 'ibast'),
(3430, 'ejamcow', 'ipay'),
(3431, 'ejamcow', 'catalogue'),
(3432, 'ejamcow', 'productivity'),
(3433, 'ejamcow', 'snapshot'),
(3434, 'ejamcow', 'transportprice'),
(3435, 'ejamcow', 'inven'),
(3436, 'ejamcow', 'whkpi'),
(3437, 'ejamcow', 'whlist2'),
(3438, 'ejamcow', 'whoccupancy'),
(3439, 'ejamcow', 'whprice'),
(3441, 'eharfad', 'plantspec'),
(3991, 'EMAYYUA', 'ecom'),
(3443, 'erintya', 'contact'),
(3444, 'erintya', 'mom'),
(3445, 'eabdmol', 'complaintdesk'),
(3446, 'eabdmol', 'contact'),
(3447, 'eabdmol', 'dspkpi'),
(3448, 'eabdmol', 'employee'),
(3449, 'eabdmol', 'forecast'),
(3450, 'eabdmol', 'iclaim'),
(3451, 'eabdmol', 'ideabox'),
(3452, 'eabdmol', 'ipay'),
(3453, 'eabdmol', 'mom'),
(3454, 'eabdmol', 'catalogue'),
(3455, 'eabdmol', 'productivity'),
(3456, 'eabdmol', 'snapshot'),
(3457, 'eabdmol', 'whaccuracy'),
(3458, 'eabdmol', 'whlist'),
(3459, 'eabdmol', 'whoccupancy'),
(3460, 'emohdjo', 'complaintdesk'),
(3461, 'emohdjo', 'contact'),
(3462, 'emohdjo', 'dspkpi'),
(3463, 'emohdjo', 'employee'),
(3464, 'emohdjo', 'forecast'),
(3465, 'emohdjo', 'iclaim'),
(3466, 'emohdjo', 'ideabox'),
(3467, 'emohdjo', 'ipay'),
(3468, 'emohdjo', 'mom'),
(3469, 'emohdjo', 'catalogue'),
(3470, 'emohdjo', 'productivity'),
(3471, 'emohdjo', 'snapshot'),
(3472, 'emohdjo', 'whaccuracy'),
(3473, 'emohdjo', 'whlist'),
(3474, 'emohdjo', 'whoccupancy'),
(5426, 'eimahen', 'dspkpi'),
(5529, 'kuncoro', 'dsarefreshment'),
(5083, 'eabjami', 'complaintdesk'),
(5082, 'eabjami', 'idistcheckperform'),
(5186, 'ehilhil', 'dporefreshment'),
(4136, 'qsurmah', 'idistcheckperform'),
(4135, 'qsurmah', 'asset'),
(4858, 'ejultri', 'forecast'),
(4857, 'ejultri', 'dspkpi'),
(4856, 'ejultri', 'contact'),
(4855, 'ejultri', 'complaintdesk'),
(4789, 'esyasya', 'complaintdesk'),
(4761, 'etrirac', 'ipay'),
(4760, 'etrirac', 'forecast'),
(4759, 'etrirac', 'dspkpi'),
(4758, 'etrirac', 'contact'),
(4757, 'etrirac', 'complaintdesk'),
(4874, 'emaryon', 'forecast'),
(4873, 'emaryon', 'dspkpi'),
(4872, 'emaryon', 'contact'),
(4871, 'emaryon', 'complaintdesk'),
(4774, 'eleotam', 'contact'),
(4773, 'eleotam', 'complaintdesk'),
(4669, 'qfersap', 'dspshare'),
(4667, 'qfersap', 'contact'),
(4666, 'qfersap', 'complaintdesk'),
(4819, 'qekodes', 'transportprice'),
(4807, 'qekodes', 'dspkpi'),
(4806, 'qekodes', 'contact'),
(4805, 'qekodes', 'idistcheckperform'),
(4745, 'edimapr', 'ipay'),
(4744, 'edimapr', 'forecast'),
(4743, 'edimapr', 'dspkpi'),
(4742, 'edimapr', 'contact'),
(4741, 'edimapr', 'complaintdesk'),
(4976, 'qaidfaz', 'contact'),
(4710, 'qagusis', 'contact'),
(4709, 'qagusis', 'complaintdesk'),
(5189, 'ehilhil', 'complaintdesk'),
(5187, 'ehilhil', 'asset'),
(5429, 'eimahen', 'employee'),
(5428, 'eimahen', 'ecom'),
(3992, 'EMAYYUA', 'mom'),
(5528, 'kuncoro', 'dporefreshment'),
(5185, 'ehilhil', 'mrstatsrefreshment'),
(4903, 'eagusap', 'contact'),
(4902, 'eagusap', 'complaintdesk'),
(4901, 'eagusap', 'idistcheckperform'),
(4948, 'ewidnug', 'whaccuracy'),
(4945, 'ewidnug', 'mom'),
(4946, 'ewidnug', 'inn'),
(4947, 'ewidnug', 'transportprice'),
(4415, 'eyulrah', 'whlist'),
(4414, 'eyulrah', 'whkpi'),
(4401, 'EAGUDWI', 'whlist'),
(4400, 'EAGUDWI', 'whkpi'),
(4399, 'EAGUDWI', 'whaccuracy'),
(4398, 'EAGUDWI', 'transportprice'),
(4397, 'EAGUDWI', 'inn'),
(4396, 'EAGUDWI', 'mom'),
(4395, 'EAGUDWI', 'lccreport'),
(4394, 'EAGUDWI', 'ilcc'),
(4393, 'EAGUDWI', 'forecast'),
(4392, 'EAGUDWI', 'dspkpi'),
(4391, 'EAGUDWI', 'contact'),
(4429, 'eyanpra', 'whlist'),
(4428, 'eyanpra', 'whkpi'),
(4427, 'eyanpra', 'whaccuracy'),
(4426, 'eyanpra', 'transportprice'),
(4425, 'eyanpra', 'inn'),
(4424, 'eyanpra', 'mom'),
(4423, 'eyanpra', 'lccreport'),
(4422, 'eyanpra', 'ilcc'),
(4421, 'eyanpra', 'forecast'),
(4420, 'eyanpra', 'dspkpi'),
(4419, 'eyanpra', 'contact'),
(4413, 'eyulrah', 'whaccuracy'),
(4412, 'eyulrah', 'transportprice'),
(4411, 'eyulrah', 'inn'),
(4410, 'eyulrah', 'mom'),
(4409, 'eyulrah', 'lccreport'),
(4408, 'eyulrah', 'ilcc'),
(4407, 'eyulrah', 'forecast'),
(4406, 'eyulrah', 'dspkpi'),
(4405, 'eyulrah', 'contact'),
(4932, 'qutanin', 'whaccuracy'),
(4931, 'qutanin', 'transportprice'),
(4930, 'qutanin', 'inn'),
(4929, 'qutanin', 'mom'),
(4928, 'qutanin', 'lccreport'),
(4927, 'qutanin', 'ilcc'),
(4926, 'qutanin', 'ibast'),
(4925, 'qutanin', 'ibastforceva'),
(4385, 'edyocam', 'whlist'),
(4384, 'edyocam', 'whkpi'),
(4383, 'edyocam', 'whaccuracy'),
(4382, 'edyocam', 'transportprice'),
(4381, 'edyocam', 'inn'),
(4380, 'edyocam', 'mom'),
(4379, 'edyocam', 'lccreport'),
(4378, 'edyocam', 'ilcc'),
(4377, 'edyocam', 'forecast'),
(4376, 'edyocam', 'dspkpi'),
(4375, 'edyocam', 'contact'),
(4443, 'emahlau', 'whlist'),
(4442, 'emahlau', 'whkpi'),
(4441, 'emahlau', 'whaccuracy'),
(4440, 'emahlau', 'transportprice'),
(4439, 'emahlau', 'inn'),
(4438, 'emahlau', 'mom'),
(4437, 'emahlau', 'lccreport'),
(4436, 'emahlau', 'ilcc'),
(4435, 'emahlau', 'forecast'),
(4434, 'emahlau', 'dspkpi'),
(4433, 'emahlau', 'contact'),
(4944, 'ewidnug', 'lccreport'),
(4943, 'ewidnug', 'ilcc'),
(4942, 'ewidnug', 'ibast'),
(4941, 'ewidnug', 'ibastforceva'),
(4924, 'qutanin', 'forecast'),
(4923, 'qutanin', 'dspkpi'),
(4922, 'qutanin', 'contact'),
(4386, 'edyocam', 'whlist2'),
(4387, 'edyocam', 'whoccupancy'),
(4388, 'edyocam', 'whprice'),
(5452, 'eachyuh', 'contact'),
(4402, 'EAGUDWI', 'whlist2'),
(4403, 'EAGUDWI', 'whoccupancy'),
(4404, 'EAGUDWI', 'whprice'),
(4417, 'eyulrah', 'whoccupancy'),
(4418, 'eyulrah', 'whprice'),
(4430, 'eyanpra', 'whlist2'),
(4431, 'eyanpra', 'whoccupancy'),
(4432, 'eyanpra', 'whprice'),
(4444, 'emahlau', 'whlist2'),
(4445, 'emahlau', 'whoccupancy'),
(4446, 'emahlau', 'whprice'),
(4461, 'EIDDODI', 'contact'),
(4462, 'EIDDODI', 'dspkpi'),
(4463, 'EIDDODI', 'forecast'),
(4464, 'EIDDODI', 'ilcc'),
(4465, 'EIDDODI', 'lccreport'),
(4466, 'EIDDODI', 'mom'),
(4467, 'EIDDODI', 'inn'),
(4468, 'EIDDODI', 'transportprice'),
(4469, 'EIDDODI', 'whaccuracy'),
(4470, 'EIDDODI', 'whkpi'),
(4471, 'EIDDODI', 'whlist'),
(4472, 'EIDDODI', 'whlist2'),
(4473, 'EIDDODI', 'whoccupancy'),
(4474, 'EIDDODI', 'whprice'),
(4481, 'zjultam', 'whkpi'),
(4482, 'zjultam', 'whlist'),
(4483, 'zjultam', 'whoccupancy'),
(4665, 'qfersap', 'idistcheckperform'),
(4664, 'qfersap', 'asset'),
(5081, 'eabjami', 'dporefreshment'),
(5080, 'eabjami', 'lccrefreshment'),
(4548, 'suyanto', 'whoccupancy'),
(4571, 'elauvre', 'complaintdesk'),
(4570, 'elauvre', 'idistcheckperform'),
(4589, 'elauvre', 'whlist'),
(4590, 'elauvre', 'whoccupancy'),
(5288, 'zbamsuk', 'dspkpi'),
(5287, 'zbamsuk', 'contact'),
(4940, 'ewidnug', 'forecast'),
(4939, 'ewidnug', 'dspkpi'),
(4938, 'ewidnug', 'contact'),
(4688, 'qfersap', 'whaccuracy'),
(4689, 'qfersap', 'whkpi'),
(4690, 'qfersap', 'whlist'),
(4691, 'qfersap', 'whoccupancy'),
(4692, 'qfersap', 'whprice'),
(4708, 'eadirac', 'whoccupancy'),
(4722, 'qagusis', 'whkpi'),
(4723, 'qagusis', 'whlist'),
(4724, 'qagusis', 'whoccupancy'),
(4975, 'qaidfaz', 'complaintdesk'),
(4753, 'edimapr', 'whaccuracy'),
(4754, 'edimapr', 'whkpi'),
(4755, 'edimapr', 'whlist'),
(4756, 'edimapr', 'whoccupancy'),
(4769, 'etrirac', 'whaccuracy'),
(4770, 'etrirac', 'whkpi'),
(4771, 'etrirac', 'whlist'),
(4772, 'etrirac', 'whoccupancy'),
(4786, 'eleotam', 'whkpi'),
(4787, 'eleotam', 'whlist'),
(4788, 'eleotam', 'whoccupancy'),
(4804, 'esyasya', 'whoccupancy'),
(4820, 'qekodes', 'whaccuracy'),
(4821, 'qekodes', 'whkpi'),
(4822, 'qekodes', 'whlist'),
(4823, 'qekodes', 'whoccupancy'),
(5527, 'kuncoro', 'mrstatsrefreshment'),
(5526, 'kuncoro', 'lccrefreshment'),
(4853, 'erihwir', 'whlist'),
(4854, 'erihwir', 'whoccupancy'),
(4868, 'ejultri', 'whkpi'),
(4869, 'ejultri', 'whlist'),
(4870, 'ejultri', 'whoccupancy'),
(4884, 'emaryon', 'whkpi'),
(4885, 'emaryon', 'whlist'),
(4886, 'emaryon', 'whoccupancy'),
(4887, 'ekurhar', 'contact'),
(4888, 'ekurhar', 'dspkpi'),
(4889, 'ekurhar', 'forecast'),
(4890, 'ekurhar', 'iclaim'),
(4891, 'ekurhar', 'ipay'),
(4892, 'ekurhar', 'lccreport'),
(4893, 'ekurhar', 'mom'),
(4894, 'ekurhar', 'catalogue'),
(4895, 'ekurhar', 'productivity'),
(4896, 'ekurhar', 'snapshot'),
(4897, 'ekurhar', 'transportprice'),
(4898, 'ekurhar', 'whaccuracy'),
(4899, 'ekurhar', 'whlist2'),
(4900, 'ekurhar', 'whoccupancy'),
(4919, 'eagusap', 'whlist'),
(4920, 'eagusap', 'whlist2'),
(4921, 'eagusap', 'whoccupancy'),
(4933, 'qutanin', 'whkpi'),
(4934, 'qutanin', 'whlist'),
(4935, 'qutanin', 'whlist2'),
(4936, 'qutanin', 'whoccupancy'),
(4937, 'qutanin', 'whprice'),
(4953, 'ewidnug', 'whprice'),
(4991, 'zdjosur', 'complaintdesk'),
(4992, 'zdjosur', 'contact'),
(4993, 'zdjosur', 'dspkpi'),
(4994, 'zdjosur', 'forecast'),
(4995, 'zdjosur', 'ipay'),
(4996, 'zdjosur', 'ilcc'),
(4997, 'zdjosur', 'lccreport'),
(4998, 'zdjosur', 'mom'),
(4999, 'zdjosur', 'catalogue'),
(5000, 'zdjosur', 'productivity'),
(5001, 'zdjosur', 'snapshot'),
(5002, 'zdjosur', 'transportprice'),
(5003, 'zdjosur', 'whaccuracy'),
(5004, 'zdjosur', 'whkpi'),
(5005, 'zdjosur', 'whlist'),
(5006, 'zdjosur', 'whoccupancy'),
(5101, 'eabjami', 'whoccupancy'),
(5102, 'eabjami', 'whprice'),
(5184, 'ehilhil', 'lccrefreshment'),
(5183, 'ehilhil', 'dspkpirefreshment'),
(5427, 'eimahen', 'dspshare'),
(5425, 'eimahen', 'contactwinshuttle'),
(5424, 'eimahen', 'contact'),
(5423, 'eimahen', 'complaintdesk'),
(5178, 'zlakpur', 'momdsc'),
(5350, 'zfebrai', 'momdgf'),
(5345, 'zfebrai', 'contact'),
(5218, 'ehilhil', 'whaccuracy'),
(5219, 'ehilhil', 'whkpi'),
(5220, 'ehilhil', 'whlist2'),
(5221, 'ehilhil', 'whlist'),
(5222, 'ehilhil', 'whoccupancy'),
(5223, 'ehilhil', 'whprice'),
(5422, 'eimahen', 'idistcheckperform'),
(5421, 'eimahen', 'asset'),
(5366, 'etauism', 'transportprice'),
(5367, 'etauism', 'whaccuracy'),
(5368, 'etauism', 'whkpi'),
(5369, 'etauism', 'whlist'),
(5370, 'etauism', 'whlist2'),
(5371, 'etauism', 'whoccupancy'),
(5525, 'kuncoro', 'dspkpirefreshment'),
(5451, 'eimahen', 'whprice'),
(5453, 'eachyuh', 'contactwinshuttle'),
(5454, 'eachyuh', 'inn'),
(5459, 'zasemur', 'momdsc'),
(5484, 'eadhnin', 'lccrefreshment'),
(5506, 'eadhnin', 'whlist'),
(5507, 'eadhnin', 'whoccupancy'),
(5511, 'edesima', 'ilcc'),
(5510, 'edesima', 'contact'),
(5516, 'ekunbar', 'contact'),
(5520, 'eariirs', 'contact'),
(5521, 'eariirs', 'momceva'),
(5522, 'eariirs', 'productivity'),
(5523, 'eariirs', 'snapshot'),
(5524, 'eariirs', 'whaccuracy'),
(5561, 'kuncoro', 'catalogue'),
(5562, 'kuncoro', 'productivity'),
(5563, 'kuncoro', 'psprospect'),
(5564, 'kuncoro', 'ispend'),
(5565, 'kuncoro', 'snapshot'),
(5566, 'kuncoro', 'pssuspect'),
(5567, 'kuncoro', 'tms'),
(5568, 'kuncoro', 'transportprice'),
(5569, 'kuncoro', 'inven'),
(5570, 'kuncoro', 'whaccuracy'),
(5571, 'kuncoro', 'whkpi'),
(5572, 'kuncoro', 'whlist'),
(5573, 'kuncoro', 'whlist2'),
(5574, 'kuncoro', 'whoccupancy'),
(5575, 'kuncoro', 'whprice');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akseswidget`
--

CREATE TABLE IF NOT EXISTS `tbl_akseswidget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `widget` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tbl_akseswidget`
--

INSERT INTO `tbl_akseswidget` (`id`, `nama`, `widget`) VALUES
(31, 'ekunbar', 'kpi'),
(32, 'ekunbar', 'whprodsnap'),
(6, 'imahen', 'whprodsnap'),
(41, 'kuncoro', 'monmom'),
(33, 'ekunbar', 'monmom'),
(40, 'kuncoro', 'whprodsnap'),
(39, 'kuncoro', 'kpi'),
(42, 'eimahen', 'kpi'),
(43, 'eimahen', 'whprodsnap'),
(44, 'eimahen', 'monmom'),
(45, 'user', 'kpi'),
(46, 'user', 'whprodsnap'),
(47, 'user', 'monmom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aplikasi`
--

CREATE TABLE IF NOT EXISTS `tbl_aplikasi` (
  `id_app` varchar(20) NOT NULL,
  `name_app` varchar(100) NOT NULL,
  `Desc` varchar(255) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `group` varchar(20) NOT NULL,
  PRIMARY KEY (`id_app`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aplikasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint` (
  `id_complaint` int(11) NOT NULL AUTO_INCREMENT,
  `date_complaint` datetime DEFAULT NULL,
  `site` varchar(1000) DEFAULT NULL,
  `category` varchar(1000) DEFAULT NULL,
  `task` varchar(1000) DEFAULT NULL,
  `update` varchar(1555) DEFAULT NULL,
  `anycomment` varchar(5) DEFAULT NULL,
  `person_responsibility` varchar(100) DEFAULT NULL,
  `person_details` varchar(200) DEFAULT NULL,
  `person_report` varchar(100) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `mr` varchar(10) DEFAULT NULL,
  `dsp` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_complaint`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_complaint`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signum` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_dashboard_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_dashboard_notification` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `title_notif` varchar(155) NOT NULL,
  `desc_notif` varchar(2000) NOT NULL,
  `images` varchar(550) NOT NULL,
  `status` varchar(55) NOT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_dashboard_notification`
--

INSERT INTO `tbl_dashboard_notification` (`id_notif`, `title_notif`, `desc_notif`, `images`, `status`) VALUES
(1, 'New images for MoM (Beta Version)', 'From now, You will see another view of MoM. MoM changed because of the needed for the future use. So if you login to eidwhd you will now get notification for your "open MoM" (not yet finished) and make you more easily to catch it.\n\nI am so apologize if there will be still another bug. and if you catch the bug, please tell me on E-Fast for a faster response from me. Thankyou', '100', 'Not Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_popupafterlogin`
--

CREATE TABLE IF NOT EXISTS `tbl_popupafterlogin` (
  `id_popup` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `grouppopup` varchar(11) NOT NULL,
  PRIMARY KEY (`id_popup`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_popupafterlogin`
--

INSERT INTO `tbl_popupafterlogin` (`id_popup`, `username`, `grouppopup`) VALUES
(5, 'eimahen', 'popupwidget'),
(6, 'ejultri', 'popupwidget'),
(7, 'ehilhil', 'popupwidget'),
(8, 'qfersap', 'popupwidget'),
(9, 'erihwir', 'popupwidget'),
(10, 'esyasya', 'popupwidget'),
(11, 'zdjosur', 'popupwidget'),
(12, 'kuncoro', 'popupwidget'),
(13, 'emaryon', 'popupwidget'),
(14, 'user', 'popupwidget');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistics`
--

CREATE TABLE IF NOT EXISTS `tbl_statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(52) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `section` varchar(32) DEFAULT NULL,
  `action` varchar(250) DEFAULT NULL,
  `when` varchar(55) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `tbl_statistics`
--

INSERT INTO `tbl_statistics` (`id`, `user`, `project_id`, `section`, `action`, `when`, `uri`) VALUES
(1, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-07-30 20:52:12', NULL),
(2, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-07-30 20:53:37', NULL),
(3, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-07-31 17:37:21', NULL),
(4, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 02:29:46', NULL),
(5, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:24:08', NULL),
(6, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:34:31', NULL),
(7, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:38:45', NULL),
(8, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:38:50', NULL),
(9, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:39:35', NULL),
(10, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:40:20', NULL),
(11, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:40:26', NULL),
(12, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:41:13', NULL),
(13, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 14:59:20', NULL),
(14, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-01 17:36:28', NULL),
(15, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 01:52:45', NULL),
(16, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 03:32:46', NULL),
(17, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 04:14:14', NULL),
(18, 'user', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 04:18:12', NULL),
(19, 'user', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 04:18:28', NULL),
(20, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 05:03:51', NULL),
(21, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 08:24:14', NULL),
(22, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-03 10:54:16', NULL),
(23, 'kuncoro', NULL, NULL, 'http://localhost/intacom/index.php/frontpage/login', '2015-08-04 04:29:44', NULL),
(24, 'user', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 08:41:20', NULL),
(25, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 09:09:33', NULL),
(26, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 09:25:21', NULL),
(27, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 10:37:43', NULL),
(28, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:12:42', NULL),
(29, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:13:51', NULL),
(30, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:16:53', NULL),
(31, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:17:05', NULL),
(32, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:28:01', NULL),
(33, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:28:18', NULL),
(34, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-04 11:32:50', NULL),
(35, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-05 09:35:15', NULL),
(36, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-05 10:02:11', NULL),
(37, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-05 10:03:48', NULL),
(38, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-05 10:04:06', NULL),
(39, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-05 17:36:14', NULL),
(40, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-05 18:07:54', NULL),
(41, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-06 02:08:54', NULL),
(42, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-06 02:09:24', NULL),
(43, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-06 02:51:54', NULL),
(44, 'kuncoro', NULL, NULL, 'http://localhost/crystallball/index.php/frontpage/login', '2015-08-06 13:34:49', NULL),
(45, 'kuncoro', NULL, NULL, 'http://localhost/crystallball/index.php/frontpage/login', '2015-08-06 13:52:24', NULL),
(46, 'kuncoro', NULL, NULL, 'http://localhost/crystallball/index.php/frontpage/login', '2015-08-06 14:05:34', NULL),
(47, 'kuncoro', NULL, NULL, 'http://localhost/crystallball/index.php/frontpage/login', '2015-08-06 14:11:21', NULL),
(48, 'kuncoro', NULL, NULL, 'http://localhost/crystallball/index.php/frontpage/login', '2015-08-06 14:15:38', NULL),
(49, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-07 04:58:13', NULL),
(50, 'kuncoro', NULL, NULL, 'http://localhost/crystallball/index.php/frontpage/login', '2015-08-07 05:08:48', NULL),
(51, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-07 15:47:19', NULL),
(52, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-07 15:56:21', NULL),
(53, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-07 16:07:25', NULL),
(54, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-08 17:32:09', NULL),
(55, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-09 14:08:00', NULL),
(56, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 09:37:39', NULL),
(57, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 09:37:55', NULL),
(58, 'user', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 09:38:05', NULL),
(59, 'user', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 09:43:18', NULL),
(60, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 11:26:46', NULL),
(61, 'kuncoro', NULL, NULL, 'http://localhost/intracheck/index.php/frontpage/login', '2015-08-10 11:51:34', NULL),
(62, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 14:30:47', NULL),
(63, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-10 17:22:51', NULL),
(64, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-11 13:45:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_widget`
--

CREATE TABLE IF NOT EXISTS `tbl_widget` (
  `id_widget` varchar(20) NOT NULL,
  `name_widget` varchar(100) NOT NULL,
  `Desc` varchar(255) DEFAULT NULL,
  `group` varchar(20) NOT NULL,
  PRIMARY KEY (`id_widget`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_widget`
--

INSERT INTO `tbl_widget` (`id_widget`, `name_widget`, `Desc`, `group`) VALUES
('whprodsnap', 'Warehouse Productivity & Snapshot', '<img src="http://eidwhd.com/assets/img/widget/widgetsnap.jpg" style=''height:200px;float:right''/>', 'Warehouse'),
('kpi', 'DSP KPI', '<img src="http://eidwhd.com/assets/img/widget/widgetkpi.jpg" style=''height:200px;float:right''/>', 'Distribution');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `FIRSTNAME` varchar(20) DEFAULT NULL,
  `COMPANYID` int(11) NOT NULL,
  `BRANCH` int(11) NOT NULL,
  `ADMIN` tinyint(1) NOT NULL,
  `KODENEGARA` varchar(3) NOT NULL,
  `PICT` varchar(150) NOT NULL,
  `ekunbar_theme` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`ID`, `USERNAME`, `PASSWORD`, `FIRSTNAME`, `COMPANYID`, `BRANCH`, `ADMIN`, `KODENEGARA`, `PICT`, `ekunbar_theme`) VALUES
(4, 'eimahen', 'dfd38feff048b336cc06564cb166f8e14a1e2ad8', 'Imanuel Hendarto', 0, 0, 1, 'EID', 'download', NULL),
(37, 'eabjami', 'd43a3578d4ea3a3f939dd52fdff99e54428f6b20', 'Abdul Jamil', 0, 0, 0, 'EID', '', NULL),
(229, 'eadaomp', 'd318f44739dced66793b1a603028133a76ae680e', 'Adam Baringin Ompusu', 0, 0, 0, 'EID', '', NULL),
(20, 'eadhnin', 'ebad4f48c21248c4ce461421e05fb0b76f70b8cd', 'Adhi Karsa Ning', 0, 0, 1, 'EID', 'DSC_2033', NULL),
(25, 'ehilhil', 'da7d92af384148c156d2f5f02b7a2a0f49559c81', 'Hilalludin', 0, 0, 1, 'EID', '1f3fd8ef-7dc4-4e11-82a9-83e1f608cf8e', NULL),
(23, 'emuhwad', '0ce2d44e5f35d28264b4791db99357dfb6dfd732', 'Farid', 1, 0, 0, 'EID', '', NULL),
(24, 'kuncoro', '8415eb56eaf45462c9bdb6e23afe9a7c4470cfef', 'Kuncoro Wicaksono', 2, 1, 1, 'EID', 'C360_2012-09-08-16-22-54', NULL),
(34, 'elauvre', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Vrenzo Lauda', 0, 0, 0, 'EID', '', NULL),
(41, 'edimapr', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Dimas Prabowo', 0, 0, 0, 'EID', '', NULL),
(45, 'eleotam', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Leonard Tambun', 0, 0, 0, 'EID', '', NULL),
(46, 'ejultri', '5f80211ccb43cd491c4e2ffbbda4c7f6ba0ff604', 'Tri Julianto', 0, 0, 0, 'EID', 'IMG_20140829_174522_1', NULL),
(57, 'eagusap', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Agus Saputra', 0, 0, 0, 'EID', '', NULL),
(54, 'eadirac', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Adi Rachman', 0, 0, 0, 'EID', 'DSC_1', NULL),
(59, 'egenpra', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Genta Fajar Prakoso', 0, 0, 0, 'EID', 'Genta', NULL),
(226, 'eabdmol', '0ce2d44e5f35d28264b4791db99357dfb6dfd732', 'Abdul Hamid', 0, 0, 0, 'EID', '', NULL),
(66, 'eharvra', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Harvit Purnomo Rahar', 0, 0, 0, 'EID', '', NULL),
(67, 'dalbert', 'e615dd8b315f226b0ac21a288ee0500aa3abe49f', 'Dalbert Darmawan', 0, 0, 0, 'EID', '', NULL),
(68, 'eidteab', '2617f801b593fae7d8da24d28d56224ba1fd44cc', 'Teviko Abiarto', 0, 0, 0, 'EID', 'eagle', NULL),
(70, 'eachyuh', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Yuhendra Achyar', 0, 0, 0, 'EID', '', NULL),
(71, 'ehehend', '5b947e69c3effcfd215a1d0a24fefa7af70098e7', 'Hendra', 0, 0, 0, 'EID', '', NULL),
(228, 'eimaran', 'd318f44739dced66793b1a603028133a76ae680e', 'Imanuel Roni Rante', 0, 0, 0, 'EID', '', NULL),
(230, 'ekakami', 'd318f44739dced66793b1a603028133a76ae680e', 'Kamil', 0, 0, 0, '', '', NULL),
(251, 'EIDDODI', '73505f411a7be72debb46dfdbb29e6177d62d272', 'Dodi Haryadi', 0, 0, 0, '', '', NULL),
(237, 'ekunbar', '8415eb56eaf45462c9bdb6e23afe9a7c4470cfef', 'Kuncoro Wicaksono', 0, 0, 0, '', '', NULL),
(238, 'ejamcow', 'd318f44739dced66793b1a603028133a76ae680e', 'James COWCHER', 0, 0, 0, '', '', NULL),
(239, 'eharfad', 'd318f44739dced66793b1a603028133a76ae680e', 'Harits Fadillah', 0, 0, 0, '', '', NULL),
(244, 'EAGUDWI', 'd318f44739dced66793b1a603028133a76ae680e', 'Agus Dwihantoro', 0, 0, 0, '', '', NULL),
(247, 'edyocam', 'd318f44739dced66793b1a603028133a76ae680e', 'Dyota Prabatha Camer', 0, 0, 0, '', '', NULL),
(252, 'akuncoro', '8415eb56eaf45462c9bdb6e23afe9a7c4470cfef', 'Kuncoro Wicaksono', 0, 0, 0, '', '', NULL),
(254, 'ekurhar', 'd318f44739dced66793b1a603028133a76ae680e', 'Kurnia Hardi', 0, 0, 0, '', '', NULL),
(258, 'edesima', '5f80211ccb43cd491c4e2ffbbda4c7f6ba0ff604', 'Desi Maryati', 0, 0, 0, '', '', NULL),
(259, 'eariirs', 'd318f44739dced66793b1a603028133a76ae680e', 'Arief Irsyad', 0, 0, 0, '', '', NULL),
(260, 'user', 'd318f44739dced66793b1a603028133a76ae680e', 'user', 1, 1, 0, '', '', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suspect_history`
--
ALTER TABLE `suspect_history`
  ADD CONSTRAINT `suspect_history_ibfk_1` FOREIGN KEY (`SUSPECTID`) REFERENCES `suspect` (`SUSPECTID`);
