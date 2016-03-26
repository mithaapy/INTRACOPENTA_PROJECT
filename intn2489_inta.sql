-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2016 at 09:46 AM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intn2489_inta`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories_choosed`
--

CREATE TABLE IF NOT EXISTS `accessories_choosed` (
  `CHOOSEDID` int(11) NOT NULL AUTO_INCREMENT,
  `PROSPECTID` int(11) NOT NULL,
  `ACCESORIESID` char(18) NOT NULL,
  `CATEGORYID` char(10) NOT NULL,
  `ACCESORIESNAME` varchar(80) NOT NULL,
  `BRAND` varchar(50) NOT NULL,
  `SPECIFICATION` varchar(4000) NOT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `PRICE` bigint(20) DEFAULT NULL,
  `UOM` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`CHOOSEDID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `accessories_choosed`
--

INSERT INTO `accessories_choosed` (`CHOOSEDID`, `PROSPECTID`, `ACCESORIESID`, `CATEGORYID`, `ACCESORIESNAME`, `BRAND`, `SPECIFICATION`, `QUANTITY`, `PRICE`, `UOM`) VALUES
(22, 15, 'RT/B', '', 'ROTARY LIGHT / BRACKET', '', 'ROTARY LIGHT / BRACKET', NULL, 34000000, NULL),
(20, 15, 'FSFL', '', 'FAST FUEL', '', 'FAST FUEL', NULL, 200000000, NULL),
(21, 15, 'SLL', '', 'STROBO LIGHT LED', '', 'STROBO LIGHT LED', NULL, 20000000, NULL),
(31, 18, 'WLL/B', '', 'WORKING LIGHT LED 2 PCS / BRACKET', '', 'WORKING LIGHT LED 2 PCS / BRACKET', NULL, 54000000, NULL),
(30, 18, 'RT/B', '', 'ROTARY LIGHT / BRACKET', '', 'ROTARY LIGHT / BRACKET', NULL, 34000000, NULL),
(29, 18, 'FSFL', '', 'FAST FUEL', '', 'FAST FUEL', NULL, 200000000, NULL),
(32, 18, 'SLL', '', 'STROBO LIGHT LED', '', 'STROBO LIGHT LED', NULL, 20000000, NULL),
(33, 2, 'FSFL', '', 'FAST FUEL', '', 'FAST FUEL', NULL, 200000000, NULL),
(34, 2, 'RT/B', '', 'ROTARY LIGHT / BRACKET', '', 'ROTARY LIGHT / BRACKET', NULL, 34000000, NULL),
(35, 2, 'FSFL', '', 'FAST FUEL', '', 'FAST FUEL', NULL, 200000000, NULL),
(36, 2, 'WLL/B', '', 'WORKING LIGHT LED 2 PCS / BRACKET', '', 'WORKING LIGHT LED 2 PCS / BRACKET', NULL, 54000000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accessories_structure`
--

CREATE TABLE IF NOT EXISTS `accessories_structure` (
  `ACCESORIESID` char(18) NOT NULL,
  `CATEGORYID` char(10) NOT NULL,
  `ACCESORIESNAME` varchar(80) NOT NULL,
  `BRAND` varchar(50) NOT NULL,
  `SPECIFICATION` varchar(4000) NOT NULL,
  `PRICE` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ACCESORIESID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories_structure`
--

INSERT INTO `accessories_structure` (`ACCESORIESID`, `CATEGORYID`, `ACCESORIESNAME`, `BRAND`, `SPECIFICATION`, `PRICE`) VALUES
('FSFL', 'FSFL', 'FAST FUEL', 'SINOTRUCK', 'FAST FUEL', 200000000),
('RT/B', 'RT/B', 'ROTARY LIGHT / BRACKET', 'SINOTRUCK ', 'ROTARY LIGHT / BRACKET', 34000000),
('WLL/B', 'WLL/B', 'WORKING LIGHT LED 2 PCS / BRACKET', 'SINOTRUCK ', 'WORKING LIGHT LED 2 PCS / BRACKET\r\n', 54000000),
('SLL', 'SLL', 'STROBO LIGHT LED', 'BOBCAT', 'STROBO LIGHT LED\r\n', 20000000);

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
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `CATEGORYID` char(10) NOT NULL,
  `CATEGORYNAME` varchar(80) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `COMPANY` char(10) NOT NULL,
  PRIMARY KEY (`CATEGORYID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `COMPANY` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` char(50) NOT NULL,
  PRIMARY KEY (`COMPANY`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
(7, 'IBF'),
(8, 'INTA');

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
(1, 1, 'Perusahaan A', '', '0000-00-00', 'Jl. Test Perusahaan 1', '', 'Jakarta', '', '', '', '', 0, '', 0, 0, '', 0, 0),
(2, 1, 'Perusahaan B', '', '0000-00-00', 'Jl. Test Perusahaan 1', '', 'Surabaya', '', '', '', '', 0, '', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact_person`
--

CREATE TABLE IF NOT EXISTS `customer_contact_person` (
  `CONTACTID` int(1) NOT NULL,
  `CONTACTNAME` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `POSITION` varchar(80) NOT NULL,
  `HOBBY` varchar(80) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `EMAIL` varchar(80) NOT NULL,
  PRIMARY KEY (`CONTACTID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact_person`
--

INSERT INTO `customer_contact_person` (`CONTACTID`, `CONTACTNAME`, `PHONE`, `POSITION`, `HOBBY`, `BIRTHDATE`, `EMAIL`) VALUES
(1, 'CONTACT NAME 1 (TEST)', '08121214197', 'Manager 1', '', '0000-00-00', 'coroo,wicaksono@gmail.com');

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
  `PROJECT_VALUE` bigint(35) NOT NULL,
  `ADDRESSABLE_VALUE` bigint(35) NOT NULL,
  `PICKUPDATE` date NOT NULL,
  `QUALITY` varchar(30) NOT NULL,
  `ASSIGNTYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`LEADSID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`LEADSID`, `REFID`, `SOURCEID`, `CREATEDATE`, `CREATENAME`, `STAGEID`, `COMPANY_ID`, `BRANCH_ID`, `PROJECT_NAME`, `PROJECT_DESCRIPTION`, `PROJECT_STATUS`, `CONST_MONTH`, `CONST_YEAR`, `CONST_END_MONTH`, `CONST_END_YEAR`, `PROJECT_PROVINCE`, `TOWN`, `PROJECT_ADDRESS`, `PROJECT_CATEGORY`, `PROJECT_STAGE`, `ARCHITECDESIGNER`, `PROJECT_PUBLISH_DATE`, `DEVPROP_MANAGER`, `ENGINER_CONSULTANT`, `MAIN_CONTRACTOR`, `SUB_CONTRACTOR`, `PROJECT_VALUE`, `ADDRESSABLE_VALUE`, `PICKUPDATE`, `QUALITY`, `ASSIGNTYPE`) VALUES
(1, NULL, '5', '2015-08-31', 'kuncoro', 2, 2, 1, 'INTAXSALES1', 'INTAXSALES cool meeen', ' - belum jelas -', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', 'Jalan Jalan', 'Category Category', '', 'PT. INTA THIRD PARTY', '0000-00-00 00:00:00', 'PT. INTA THIRD PARTY', 'PT. INTA THIRD PARTY', 'PT. INTA THIRD PARTY', 'PT. INTA THIRD PARTY', 200000, 5000, '0000-00-00', 'Quality', 'Open'),
(2, NULL, '7', '2015-09-01', 'user', 2, 1, 1, 'Test 1', 'Deskripsi 1', '', 10, 2015, 12, 2015, 'Jawa Tengah', 'Kota 2', 'Jl. 1', 'Infrastructure', 'Lelang', '', '2015-09-01 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(3, NULL, '4', '2015-09-01', 'kuncoro', 3, 2, 1, 'BRIDGE KALI MANGSENG BEKASI', 'MAIN CONTRACT AWARDED | CONSTRUCTION COMMENCED \n\n     •   Bridge construct (30 m length x 8 m width)\n     •   Bridge abutment\n     •   Girder bridge\n     •   Bridge approach slab\n     •   Surface line marking\n     •   Bridge safety barriers\n\n\n\nPembangunan jembatan struktur beton bertulang dengan total panjang sekitar 30 meter dan lebar 8 meter. Perkiraan biaya: Rp 500 Juta . Pekerjaan diharapkan mulai September 2015 dan selesai Desember 2015.', '', 9, 2015, 12, 2015, 'DKI Jakarta', 'Kota 1', 'JALAN RAYA KALIABANG TENGAH BEKASI', 'Infrastructure', 'Construction: Main Contract Aw', 'Dinas Pekerjaan Umum', '0000-00-00 00:00:00', ' binamarga', '', ' binamarga', '', 500000, 0, '2015-09-01', 'Quality', 'Picked'),
(4, NULL, '8', '2015-09-01', 'kuncoro', 2, 2, 1, ' Gorong Gorong Kaliabang', 'Pembangunan gorong gorong struktur baja dengan total panjang sekitar 55 meter dan lebar 7 meter. Pekerjaan dimulai Agustus 2015 dan diharapkan selesai Desember 2015.', 'Construction Commenc', 8, 2015, 11, 2015, 'Jawa Tengah', 'Kota 3', 'Jalan Raya Ramai Sangat , Kelurahan Budi Luhur', 'Infrastructure', 'Construction: Main Contract Aw', '', '2015-09-01 00:00:00', '', '', 'PORORO Contractor', '', 350, 0, '0000-00-00', 'Not', 'Open'),
(5, NULL, '3', '2015-09-01', 'kuncoro', 3, 2, 1, 'Pemasangan pipa gas Muara Karang - Muara Tawar', 'Pemasangan pipa gas Muara Karang - Muara Tawar untuk PGN', '', 10, 2015, 10, 2015, 'DKI Jakarta', 'Kota 1', 'Cakung Cilincing', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '2015-09-01', 'Quality', 'Picked'),
(6, NULL, '9', '2015-09-01', 'eariirs', 2, 3, 2, 'Pembukaan lahan sawit', 'Pembukaan lahan sawit di Jambi', '', 10, 2015, 11, 2015, 'DKI Jakarta', 'Kota 1', 'Jl. Damai 11', '', '', '', '2015-09-01 00:00:00', '', '', '', '', 0, 0, '0000-00-00', 'Quality', 'Open'),
(7, NULL, '9', '2015-09-01', 'user', 2, 1, 1, 'Bandung BIP Fly Over', 'Fly Over ', '', 9, 2015, 1, 2017, 'DKI Jakarta', 'Kota 1', '', 'INFRASTRUCTURE', 'CONSTRUCTION', '', '0000-00-00 00:00:00', '', '', '', '', 2147483647, 200000000, '0000-00-00', 'Qualified', 'Open'),
(8, NULL, '4', '2015-09-01', 'eariirs', 2, 3, 2, 'Pembangunan Jembatan Batu Tatal ', 'Pembangunan Jembatan Batu Tatal Kecamatan Bulik - Lamandau (Kab.)', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 2000000000, 400000000, '0000-00-00', 'Quality', 'Open'),
(9, NULL, '4', '2015-09-01', 'eariirs', 2, 3, 2, 'Pembangunan Jembatan Sekombulan ', 'Pembangunan Jembatan Sekombulan 	\nKecamatan Delang - Lamandau (Kab.)', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 2147483647, 0, '0000-00-00', 'Quality', 'Open'),
(10, NULL, '4', '2015-09-01', 'eariirs', 2, 3, 2, 'PEMBUATAN JALAN AKSES PKP-PK VOLUME 572 M2', 'PEMBUATAN JALAN AKSES PKP-PK VOLUME 572 M2 BANDAR UDARA NAMROLE - Buru Selatan (Kab.)', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', 'BANDAR UDARA NAMROLE - Buru Selatan (Kab.)', '', 'Pengumuman Pascakualifikasi', '', '0000-00-00 00:00:00', '', '', '', '', 500, 0, '0000-00-00', 'Quality', 'Open'),
(11, NULL, '4', '2015-09-01', 'eariirs', 2, 3, 2, 'Pembangunan Dermaga Penyeberangan Di Pulau Sebuku ', 'Pembangunan Dermaga Penyeberangan Di Pulau Sebuku Kabupaten Kotabaru Tahap III (Ketiga) APBN-P Tahun 2015. Kecamatan Pulau Sebuku - Kota Baru (Kab.)', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', 'Kecamatan Pulau Sebuku - Kota Baru (Kab.)', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 2147483647, 2147483647, '0000-00-00', 'Quality', 'Open'),
(12, NULL, '4', '2015-09-01', 'eariirs', 2, 3, 2, 'Perpanjangan Runway 30 M x 200 M, Pemantapan Strip', 'Perpanjangan Runway 30 M x 200 M, Pemantapan Strip dan Pembuatan Jalan Access PKP-PK (Lelang Tidak Mengikat) 	\nBandara Maratua, Pulau Maratua, Kab. Berau - Berau (Kab.)', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', '	\nBandara Maratua, Pulau Maratua, Kab. Berau - Berau (Kab.)', '', '', '', '2015-09-01 00:00:00', '', '', '', '', 2147483647, 0, '0000-00-00', 'Quality', 'Open'),
(13, NULL, '5', '2015-09-01', 'kuncoro', 2, 2, 1, 'BCI-BRIDGE LOVE BEKASI', 'Peningkatan jembatan struktur beton dengan total panjang sekitar 15 meter dan lebar 8 meter. Perkiraan biaya: tidak dinyatakan. Pekerjaan diharapkan mulai September 2015 dan selesai Desember 2015.', 'On-track', 9, 2015, 12, 2015, 'Jawa Barat', 'Kota 2', 'JALAN PRIMA HARAPAN BLOK I1 NO 12', 'Infrastructure', 'Post tender', ' Mr Tri ', '2015-09-01 00:00:00', '  Dinas Bina Marga', ' Mr Tri ', '', '', 99, 0, '0000-00-00', 'Not', 'Open'),
(14, NULL, '3', '2015-09-03', 'eariirs', 2, 3, 2, 'Pembuatan turap Sungai Ciliwung Kp. Pulo', 'Pembuatan turap Sungai Ciliwung Kp. Pulo', '', 8, 2015, 8, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 2147483647, 2000000000, '0000-00-00', '', ''),
(15, NULL, '4', '2015-09-03', 'kuncoro', 2, 2, 1, 'BCI-COBA LAGI AWARD', 'COBA LAGI AWARD1', 'PROJECT COBA COBA ON', 1, 2015, 8, 2015, 'Jawa Barat', 'Kota 2', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(16, NULL, '3', '2015-09-03', 'user', 2, 1, 1, 'Jembatan Comal 1', 'Pembuatan jembatan alternatif', '', 3, 2015, 6, 2016, 'Jawa Tengah', 'Kota 1', 'comal', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 2147483647, 0, '0000-00-00', '', ''),
(17, NULL, '3', '2015-09-03', 'edesima', 2, 8, 1, 'Pengerukan Kali Sekretaris', 'Pengerukan Kali Sekretaris sepanjang 5 km', '', 10, 2015, 10, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 1000000000, 200000000, '0000-00-00', '', ''),
(18, NULL, '4', '2015-09-03', 'kuncoro', 2, 2, 1, 'PROJECT TETAP CEMANGKA KAKA...', 'PROJECT TETAP CEMANGKA KAKA... PROJECT TETAP CEMANGKA KAKA...PROJECT TETAP CEMANGKA KAKA...PROJECT TETAP CEMANGKA KAKA...', 'CEMANGKA KAKA...', 1, 2015, 12, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(19, 'DWI001', '1', '2042-00-09', 'Kim Ray', 0, 0, 0, 'Project Upload1', 'Project Upload1 Description', 'Ya Begitu lah', 0, 2015, 3, 2015, 'Jawa Pinggir', 'Kota 1', 'Jalan Besar', 'Infrastructur', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(20, 'DWI002', '2', '2042-00-06', 'Kim Ray', 0, 0, 0, 'Project Upload1', 'Project Upload2 Description', 'Ya Begitu lah 2', 0, 2015, 3, 2015, 'Jawa Tengah', 'Kota 1', 'Jalan Besar', 'Infrastructur', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, 0, '0000-00-00', '', ''),
(21, NULL, '2', '2015-09-03', 'kuncoro', 2, 2, 1, 'TEST 1', 'TEST 1 TEST 1TEST 1TEST 1TEST 1TEST 1', 'On Tracking', 1, 2015, 3, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 2147483647, 2147483647, '0000-00-00', '', ''),
(22, NULL, '2', '2015-09-03', 'kuncoro', 2, 2, 1, '111111111111', '1111111111111111111111111111', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', '', '11111111', '11111111', '', '0000-00-00 00:00:00', '', '', '', '', 100000000000, 200000000000, '0000-00-00', '', ''),
(23, NULL, '2', '2015-09-03', 'kuncoro', 2, 2, 1, '1201291410', '1201291410', '', 1, 2015, 1, 2015, 'DKI Jakarta', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 1201291410, 1201291410, '0000-00-00', '', ''),
(24, NULL, '9', '2015-09-23', 'user', 2, 1, 1, 'Flyover Bulak Kapal', 'Fly over di atas jalan Ir Juanda, menghubungkan Joyo Martono dengan Jl Pahlawan', '', 9, 2015, 9, 2016, 'Jawa Barat', 'Kota 1', '', '', '', '', '0000-00-00 00:00:00', 'Government Implementing Agency: Dinas Pekerjaan Umum Propinsi Jawa Barat - Satuan Kerja Pelaksanaan Jalan Nasional Wilayah II Wilayah Jawa Barat, Mr Arif Budiyono  - Kepala Satuan Kerja - Project Coordinator  (Address: Jalan Asia Afrika No. 79 Lantai IV, Bandung, West Java 40111, Indonesia Phone: 62 22 422 0690 / 624 7763 Email: pan_srip_jbrbang@yahoo.com) || Tender Office: ; Ms Linda Widianti  - Ketua PPK Jatinangor - Sumedang - Kadipaten  (Address: Jalan Asia Afrika No. 79 Lantai IV, Bandung, West Java 40111, Indonesia Phone: 62 22 422 0690 / 624 7763 Email: pan_srip_jbrbang@yahoo.com) || Supervisory Consultant: Yodya Karya (Persero) PT - Bandung, Mr M. Ridwan Kholid  - Head of Branch Officer  (Address: Jalan Sekar Tonggeret No. 16, Buah Batu, Bandung, West Java, Indonesia Phone: 62 22 731 7395 Email: cab.lima@yodyakarya.co.id) ; Mr Nusirwan  - Project Manager  (Address: Jalan Sekar Tonggeret No. 16, Buah Batu, Bandung, West Java, Indonesia Phone: 62 22 731 7395 Email: cab.lima@yodyakarya.co.id) Perencana Marga Pratama PT, Mr Asep Mulyana Kosasih  - Director  (Address: Jalan BKR No. 78, Bandung, West Java 40254, Indonesia Phone: 62 22 6182 7922 Email: pmpratama2010@yahoo.com) ; Mr Bianti Priatia  - Finance Staff  (Address: Jalan BKR No. 78, Bandung, West Java 40254, Indonesia Phone: 62 22 6182 7922 Email: pmpratama2010@yahoo.com)', '', '', '', 0, 0, '0000-00-00', '', ''),
(25, NULL, '3', '2015-09-25', 'eariirs', 2, 3, 2, 'Training Manager Leader', 'Kebutuhan Training Manager Leader untuk 10 orang', '', 11, 2015, 11, 2015, 'DKI Jakarta', 'Kota 1', 'Jl. apalah', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 100000000, 100000000, '0000-00-00', '', '');

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
  `CUSTOMERPLANNED` varchar(555) DEFAULT NULL,
  `SALESID` varchar(55) DEFAULT NULL,
  `PICKUP_DATE` date NOT NULL,
  `BRANCH` varchar(30) NOT NULL,
  `QUALITY` varchar(20) NOT NULL,
  `LEAD_STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`LEAD_DETAIL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `lead_detail`
--

INSERT INTO `lead_detail` (`LEAD_DETAIL_ID`, `LEADSID`, `ITMNO`, `COMPANY`, `CUSTOMERID`, `CUSTOMERPLANNED`, `SALESID`, `PICKUP_DATE`, `BRANCH`, `QUALITY`, `LEAD_STATUS`) VALUES
(1, 'INTAXSALES', 0, '2', 2, NULL, 'Kuncoro Wicaksono', '2015-08-20', '1', 'Qualified', 'Verified'),
(2, '1', 0, '1', 1, NULL, '1', '2015-08-07', '1', 'Qualified', 'Verified'),
(3, '1', 0, '1', 1, NULL, '1', '2015-09-17', '1', 'Quality', 'Verified'),
(4, '2', 0, '3', 0, 'TEST', 'user', '2015-09-14', '1', 'Not', 'Picked'),
(5, 'MAIN CONTR', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '0000-00-00', '1', 'Qualified', 'Verified'),
(6, '4', 0, '2', 1, NULL, '1', '0000-00-00', '1', 'Quality', 'Picked'),
(7, '4', 0, '2', 1, NULL, '2', '0000-00-00', '1', 'Qualified', 'Picked'),
(8, '4', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '0000-00-00', '1', 'Qualified', 'Verified'),
(9, '5', 0, '3', 1, NULL, '0', '0000-00-00', '1', 'Quality', 'Verified'),
(10, '6', 0, '3', 2, NULL, '0', '0000-00-00', '2', 'Qualified', 'Verified'),
(11, '7', 0, '3', 1, NULL, '2', '2015-09-01', '1', 'Quality', 'Picked'),
(12, '8', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '0000-00-00', '2', 'Qualified', 'Verified'),
(13, '9', 0, '3', 0, NULL, 'Arief Irsyad', '0000-00-00', '2', 'Qualified', 'Verified'),
(14, '8', 0, '3', 0, NULL, NULL, '0000-00-00', '2', 'Qualified', 'Verified'),
(15, '8', 0, '5', 0, NULL, '0', '0000-00-00', '2', 'Quality', 'Open'),
(16, '7', 0, '2', 2, NULL, '1', '0000-00-00', '1', 'Qualified', 'Picked'),
(17, '10', 0, '3', 0, '', 'Arief Irsyad', '2015-09-22', '2', 'Qualified', 'Verified'),
(18, '10', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '0000-00-00', '2', 'Qualified', 'Verified'),
(19, '13', 0, '2', 1, NULL, '2', '0000-00-00', '1', 'Not', 'Picked'),
(20, '13', 0, '7', 1, NULL, '0', '0000-00-00', '1', 'Not', 'Open'),
(21, '14', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '2015-09-23', '2', 'Qualified', 'Picked'),
(22, '14', 0, '3', 0, NULL, '0', '0000-00-00', '2', 'Qualified', 'Picked'),
(23, '15', 0, '2', 2, NULL, '1', '0000-00-00', '1', 'Qualified', 'Verified'),
(24, '15', 0, '7', 2, NULL, '1', '0000-00-00', '1', 'Not', 'Open'),
(25, '16', 0, '3', 1, NULL, '2', '0000-00-00', '1', 'Qualified', 'Verified'),
(26, '17', 0, '3', 0, NULL, '0', '0000-00-00', '1', 'Quality', 'Verified'),
(27, '18', 0, '1', 1, NULL, '1', '0000-00-00', '1', 'Quality', 'Verified'),
(28, '18', 0, '2', 1, NULL, '2', '0000-00-00', '1', 'Quality', 'Picked'),
(29, '18', 0, '5', 1, NULL, '1', '0000-00-00', '1', 'Quality', 'Open'),
(30, '0', 0, '1', 2, NULL, '0', '2015-09-23', '1', 'Qualified', 'Verified'),
(31, '22', 0, '1', 1, NULL, '0', '0000-00-00', '1', 'Quality', 'Picked'),
(32, '23', 0, '3', 1, NULL, '0', '0000-00-00', '1', 'Not', 'Verified'),
(33, '1', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '2015-09-24', '1', 'Qualified', 'Verified'),
(34, '3', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '2017-09-10', '1', 'Qualified', 'Verified'),
(35, '1', 0, '1', 1, NULL, 'user', '0000-00-00', '1', 'Not', 'Picked'),
(36, '2', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '2015-10-01', '1', 'Qualified', 'Verified'),
(37, '3', 0, '2', 2, NULL, 'Kuncoro Wicaksono', '2015-09-30', '1', 'Qualified', 'Verified'),
(38, '1', 0, '2', 2, NULL, 'Kuncoro Wicaksono', '2015-09-11', '1', 'Qualified', 'Verified'),
(39, '1', 0, '2', 1, NULL, 'Kuncoro Wicaksono', '2015-09-11', '1', 'Qualified', 'Verified'),
(40, '1', 0, '2', 1, NULL, 'user', '2015-09-11', '1', 'Qualified', 'Verified'),
(41, '1', 0, '2', 2, '', 'Kuncoro Wicaksono', '2015-09-22', '1', 'Qualified', 'Verified'),
(42, '1', 0, '1', 1, 'CUSTOMER A', 'user', '2015-09-14', '1', 'Qualified', 'Verified'),
(43, '2', 0, '1', 0, 'Perusahaan ABC', 'user', '2015-09-15', '1', 'Qualified', 'Verified'),
(44, '24', 0, '2', 0, 'PT Dwi Nagaratama', 'Kuncoro Wicaksono', '2015-09-23', '1', 'Qualified', 'Verified'),
(45, '24', 0, '3', 0, 'PT Duta Sakti', 'user', '0000-00-00', '1', 'Not', 'Open'),
(46, '24', 0, '2', 0, 'PT Alaska Reska', 'Kuncoro Wicaksono', '2015-09-23', '1', 'Qualified', 'Verified'),
(47, '25', 0, '1', 0, 'PT Apalah', 'user', '2015-09-25', '2', 'Qualified', 'Verified'),
(48, '0', 0, '1', 0, 'lll', 'Kuncoro Wicaksono', '0000-00-00', '1', 'Not', 'Picked');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

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
('42', 64, '2015-08-10', 'kuncoro', 'UPDATE', 0, ''),
('0', 65, '2015-08-13', 'kuncoro', 'INSERT', 0, ''),
('51', 66, '2015-08-13', 'kuncoro', 'UPDATE', 0, ''),
('51', 67, '2015-08-13', 'kuncoro', 'UPDATE', 0, ''),
('1', 68, '2015-08-31', 'kuncoro', 'UPDATE', 0, ''),
('1', 69, '2015-08-31', 'kuncoro', 'UPDATE', 0, ''),
('1', 70, '2015-08-31', 'kuncoro', 'UPDATE', 0, ''),
('0', 71, '2015-08-31', 'kuncoro', 'INSERT', 0, ''),
('0', 72, '2015-09-01', 'user', 'INSERT', 0, ''),
('0', 73, '2015-09-01', 'kuncoro', 'INSERT', 0, ''),
('3', 74, '2015-09-01', 'kuncoro', 'UPDATE', 0, ''),
('3', 75, '2015-09-01', 'kuncoro', 'UPDATE', 0, ''),
('3', 76, '2015-09-01', 'kuncoro', 'UPDATE', 0, ''),
('0', 77, '2015-09-01', 'kuncoro', 'INSERT', 0, ''),
('0', 78, '2015-09-01', 'kuncoro', 'INSERT', 0, ''),
('5', 79, '2015-09-01', 'user', 'UPDATE', 0, ''),
('5', 80, '2015-09-01', 'user', 'UPDATE', 0, ''),
('0', 81, '2015-09-01', 'eariirs', 'INSERT', 0, ''),
('0', 82, '2015-09-01', 'user', 'INSERT', 0, ''),
('7', 83, '2015-09-01', 'user', 'UPDATE', 0, ''),
('7', 84, '2015-09-01', 'user', 'UPDATE', 0, ''),
('7', 85, '2015-09-01', 'user', 'UPDATE', 0, ''),
('7', 86, '2015-09-01', 'user', 'UPDATE', 0, ''),
('0', 87, '2015-09-01', 'eariirs', 'INSERT', 0, ''),
('8', 88, '2015-09-01', 'eariirs', 'UPDATE', 0, ''),
('7', 89, '2015-09-01', 'user', 'UPDATE', 0, ''),
('0', 90, '2015-09-01', 'eariirs', 'INSERT', 0, ''),
('8', 91, '2015-09-01', 'eariirs', 'UPDATE', 0, ''),
('9', 92, '2015-09-01', 'eariirs', 'UPDATE', 0, ''),
('9', 93, '2015-09-01', 'eariirs', 'UPDATE', 0, ''),
('7', 94, '2015-09-01', 'user', 'UPDATE', 0, ''),
('0', 95, '2015-09-01', 'eariirs', 'INSERT', 0, ''),
('0', 96, '2015-09-01', 'eariirs', 'INSERT', 0, ''),
('11', 97, '2015-09-01', 'eariirs', 'UPDATE', 0, ''),
('11', 98, '2015-09-01', 'eariirs', 'UPDATE', 0, ''),
('0', 99, '2015-09-01', 'eariirs', 'INSERT', 0, ''),
('0', 100, '2015-09-01', 'kuncoro', 'INSERT', 0, ''),
('1', 101, '2015-09-01', 'kuncoro', 'UPDATE', 0, ''),
('10', 102, '2015-09-01', '0', 'UPDATE', 0, ''),
('0', 103, '2015-09-03', 'eariirs', 'INSERT', 0, ''),
('0', 104, '2015-09-03', 'kuncoro', 'INSERT', 0, ''),
('0', 105, '2015-09-03', 'user', 'INSERT', 0, ''),
('0', 106, '2015-09-03', 'edesima', 'INSERT', 0, ''),
('0', 107, '2015-09-03', 'kuncoro', 'INSERT', 0, ''),
('0', 108, '2015-09-03', 'kuncoro', 'INSERT', 0, ''),
('0', 109, '2015-09-03', 'kuncoro', 'INSERT', 0, ''),
('0', 110, '2015-09-03', 'kuncoro', 'INSERT', 0, ''),
('1', 111, '2015-09-10', '0', 'UPDATE', 0, ''),
('8', 112, '2015-09-10', '0', 'UPDATE', 0, ''),
('0', 113, '2015-09-23', 'user', 'INSERT', 0, ''),
('0', 114, '2015-09-25', 'eariirs', 'INSERT', 0, '');

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
-- Table structure for table `product_structure`
--

CREATE TABLE IF NOT EXISTS `product_structure` (
  `PRODUCTID` char(18) NOT NULL,
  `CATEGORYID` char(10) NOT NULL,
  `PRODUCTNAME` varchar(80) NOT NULL,
  `BRAND` varchar(50) NOT NULL,
  `SPECIFICATION` varchar(4000) NOT NULL,
  `PRICE` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`PRODUCTID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_structure`
--

INSERT INTO `product_structure` (`PRODUCTID`, `CATEGORYID`, `PRODUCTNAME`, `BRAND`, `SPECIFICATION`, `PRICE`) VALUES
('S371-1', 'SNTR-UN', '371 TIPPER 6x4', 'SINOTRUCK', 'Model     :  ZZ3257N3847B  Turbo Charging & Intercooling\r\nEngine   :  Sinotruk WD615.47 Euro II Emission Standard \r\nHorse Power  :  371 HP @ 2200 rpm according to DIN\r\nStroke & Cylinder  :  4 Stroke Direct Injection, 6 Cylinder in Line\r\nTransmission  :  ZF 16S 1670, Syncromesh 10 F / 2 R\r\nSteering : ZF8098\r\nFront axle : HF9 / 9 Ton\r\nRear axle : HC16 Ratio 5.73 / 16 Ton\r\nTyre : 12.00-24 tube\r\nWith : Safety belt, A/C\r\nBody size : 6000 × 2300 × 1500\r\nHyva Front Lift System\r\nRear axle cooling system\r\nEngine Protector\r\nStandard Cabin, Without Sheeper Bed\r\nTotal size  :  8614 × 2496 × 3386 mm\r\nColour  :  White\r\n', 200000000),
('S420-1', 'SNTR-UN', '371 TIPPER 6x4', 'SINOTRUCK ', 'Drive Type : 8 × 4\r\nModel     :  ZZ3317N3061Turbo Charging & Intercooling\r\nEngine   :  Sinotruk WD615.47 Euro II Emission Standard \r\nHorse Power  :  371 HP @ 2200 rpm according to DIN\r\nStroke & Cylinder  :  4 Stroke Direct Injection, 6 Cylinder in Line\r\nTransmission  :  ZF 16S 1670, Syncromesh 10 F / 2 R\r\nSteering : ZF8098\r\nFront axle : HF9 / 9 Ton\r\nRear axle : HC16 Ratio 5.73 / 16 Ton\r\nTyre : 12.00-24 tube\r\nWith : Safety belt, A/C\r\nBody size : 7000 × 2300 × 1500\r\nHyva Front Lift System\r\nRear axle cooling system\r\nEngine Protector\r\nStandard Cabin, Without Sheeper Bed\r\nTotal size  :  9730 × 2496 × 3870 mm\r\nColour  :  White\r\n', 34000000),
('S266-1', 'SNTR-UN', 'C&C 266 HP 6X2 ', 'SINOTRUCK ', 'DriveType:6x2\r\nModel : 2213257M3M1 Turbo Charging & lntercooling\r\nEngine : Sinotruk WD615.62 Euro ll Emission Standard\r\nHorse Power : 266 HP @220O rqm\r\nStroke & Cylinder : 4 Stroke Direct lnjection, 6 Cylinder in Line\r\nTransmission : HW ''19710T, Syncromesh 10 F / 2 R\r\nSteering : 2F8098\r\nFrontaile:HF9/9Ton\r\nRear axle : HC16 Ratio 5.73 / 16 Ton\r\nTyre: 11.00-R 20 tube\r\nWith : Safety belt, A/C\r\nRear a*e cooling system\r\nEngine Protector\r\nStandard Cabin, Without Sheeper Bed\r\nColour : White\r\n', 54000000),
('BE42-1', 'BCEX-UN', 'E42', 'BOBCAT', 'I. OPERATIONAL SPECIFICATION\r\nOperating Weight (w/ Canopy) 9246 lb (4194 kg)\r\nBucket Size 0.12 cubic meter\r\nGround Pressure 4.3 psi (29.8 kPA)\r\nBucket Breakout Fource 9105 lb-f (45000 N)\r\nTravel Speed - Low Range 1.8 mph (2.9 km/h)\r\nTravel Speed - High Range 2.8 mph (4.5 km/h)\r\nSlew Speed 9.0 rpm\r\nII. WORKING RANGE\r\nMax Blade Depth 16.6" (421 mm) standard\r\nMax Reach at Ground Level 207.0" (5259 mm) standard\r\nMax Digging Depth 126.2 " (3205 mm)\r\nMax Digging Height 205.2" (5212 mm)\r\nIII. ENGINE & ELECTRICAL\r\nEngine Make/Model Kubota V2403-M-DI-E3B-BC-5 Diesel\r\nCooling Liquid (Propolyene Glycol & water mix)\r\nHorsepower @ rated RPM 41.8 HP (31.2 kW) @ 1400 rpm\r\nTorque @ rated RPM 115.1 ft-lb (155.9 Nm) @ 1400 rpm\r\nFuel Tank Capacity 21.1 GAL (79.9 L)\r\nProtection Feature Machine Shutdown & Battery Rundown\r\nIV. STANDARD FEATURE \r\nTOPS / ROPS Canopy\r\nControl Console Locks\r\nDozer Blade - With Float\r\nEngine/Hydraulic Monitor (w/ Shutdown)\r\nAuxiliary Hydraulic (w/ Quick Couplers)\r\nControl Pattern Selector Valve\r\n', 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `prospect`
--

CREATE TABLE IF NOT EXISTS `prospect` (
  `PROSPECTID` int(11) NOT NULL AUTO_INCREMENT,
  `SUSPECTID` int(11) NOT NULL,
  `SUSPECT_DETAIL_ID` int(11) NOT NULL,
  `QUOTATIONNO` varchar(50) NOT NULL,
  `CREATEDATE` date NOT NULL,
  `CREATENAME` varchar(30) NOT NULL,
  `COMPANY` char(10) NOT NULL,
  `SALESID` varchar(55) DEFAULT NULL,
  `BRANCH` int(11) NOT NULL,
  `CUSTOMERID` int(11) DEFAULT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `STARTDATE` date NOT NULL,
  `EXPIREDATE` date NOT NULL,
  `CURRENCY` varchar(10) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `APPROVDATE` date NOT NULL,
  `APPROVBY` varchar(30) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `ITMNO` int(11) DEFAULT NULL,
  `PRODUCTID` varchar(20) DEFAULT NULL,
  `PRODUCTNAME` varchar(200) DEFAULT NULL,
  `QUANTITY` decimal(11,0) DEFAULT NULL,
  `UOM` varchar(10) DEFAULT NULL,
  `UNITVALUE` decimal(25,0) NOT NULL,
  `ACCESORIESID` varchar(55) DEFAULT NULL,
  `TRANSACTION_MODEL` varchar(20) NOT NULL,
  `PRICEUNITNOTES` varchar(255) DEFAULT NULL,
  `DELIVERYNOTES` varchar(255) DEFAULT NULL,
  `PAYMENTNOTES` varchar(255) DEFAULT NULL,
  `WARRANTYNOTES` varchar(255) DEFAULT NULL,
  `VALIDITYNOTES` varchar(255) DEFAULT NULL,
  `LAST_UPDATE` datetime NOT NULL,
  `DECISION_DATE` date NOT NULL,
  `EXPECT_DELIVERY_DATE` date NOT NULL,
  `CUSTOMER_TYPE` varchar(30) NOT NULL,
  `LEVEL2` tinyint(1) DEFAULT NULL,
  `WEB_PID` varchar(30) NOT NULL,
  PRIMARY KEY (`PROSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `prospect`
--

INSERT INTO `prospect` (`PROSPECTID`, `SUSPECTID`, `SUSPECT_DETAIL_ID`, `QUOTATIONNO`, `CREATEDATE`, `CREATENAME`, `COMPANY`, `SALESID`, `BRANCH`, `CUSTOMERID`, `DESCRIPTION`, `STARTDATE`, `EXPIREDATE`, `CURRENCY`, `STAGEID`, `APPROVDATE`, `APPROVBY`, `STATUS`, `ITMNO`, `PRODUCTID`, `PRODUCTNAME`, `QUANTITY`, `UOM`, `UNITVALUE`, `ACCESORIESID`, `TRANSACTION_MODEL`, `PRICEUNITNOTES`, `DELIVERYNOTES`, `PAYMENTNOTES`, `WARRANTYNOTES`, `VALIDITYNOTES`, `LAST_UPDATE`, `DECISION_DATE`, `EXPECT_DELIVERY_DATE`, `CUSTOMER_TYPE`, `LEVEL2`, `WEB_PID`) VALUES
(1, 1, 1, '1', '2015-09-03', 'Kuncoro Wicaksono', '2', '1', 1, 2, '', '2015-09-17', '2015-09-25', '', 5, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(2, 3, 5, '2', '2015-09-03', 'user', '3', '2', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Very', NULL, NULL, NULL, '5', NULL, '120000000', NULL, '', 'TEST 1', 'TEST 2', 'TEST 3', 'TEST 4', 'TEST 5', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(3, 4, 0, '', '0000-00-00', '', '', '0', 0, 0, 'Buat quotation', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(4, 3, 5, '', '2015-09-03', 'user', '3', '2', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(5, 24, 12, '', '2015-09-10', 'Kuncoro Wicaksono', '2', NULL, 1, 1, 'Pembangunan gorong gorong struktur baja dengan total panjang sekitar 55 meter dan lebar 7 meter. Pek', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(6, 25, 0, '', '2015-09-10', 'Kuncoro Wicaksono', '2', NULL, 1, 2, 'INTAXSALES cool meeen', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(7, 26, 14, '', '2015-09-10', 'Kuncoro Wicaksono', '2', NULL, 1, 1, 'INTAXSALES cool meeen', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(8, 27, 15, '', '0000-00-00', 'u', 'u', NULL, 1, NULL, 'u', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(9, 29, 17, '', '0000-00-00', 'u', 'u', 'u', 1, NULL, 'u', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(15, 3, 5, '', '2015-09-03', 'user', '3', 'user', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, 'S266-1', NULL, '2', 'Un', '34000500', NULL, 'New', 'TEST PRICE NOTE', 'TEST DELIVERY NOTE', 'TEST PAYMENT NOTE', 'TEST WARRANTY NOTE', 'TEST VALIDITY NOTE', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(16, 3, 0, '', '2015-09-03', 'user', '3', 'user', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, 'BE42-1', NULL, '2', 'Un', '42500000', NULL, 'New', 'TEST PRICE NOTE', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(17, 30, 19, '', '2015-09-22', 'Arief Irsyad', '3', 'Arief Irsyad', 2, 0, 'PEMBUATAN JALAN AKSES PKP-PK VOLUME 572 M2 BANDAR UDARA NAMROLE - Buru Selatan (Kab.)', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, 'S371-1', NULL, '1', 'Un', '0', NULL, 'New', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(18, 3, 5, '', '2015-09-03', 'user', '3', 'user', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, 'S266-1', NULL, '1', 'Un', '5000000', NULL, 'New', 'TEST PRICE NOTE', 'TEST DELIVERY NOTE', 'TEST PAYMENT NOTE', 'TEST WARRANTY NOTE', 'TEST VALIDITY NOTE', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(19, 32, 22, '', '2015-09-23', 'Kuncoro Wicaksono', '2', 'Kuncoro Wicaksono', 1, 1, 'Fly over di atas jalan Ir Juanda, menghubungkan Joyo Martono dengan Jl Pahlawan', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', NULL, 'S371-1', NULL, NULL, 'Un', '0', NULL, 'New', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `prospect_backup`
--

CREATE TABLE IF NOT EXISTS `prospect_backup` (
  `PROSPECTID` int(11) NOT NULL AUTO_INCREMENT,
  `SUSPECTID` int(11) NOT NULL,
  `SUSPECT_DETAIL_ID` int(11) NOT NULL,
  `QUOTATIONNO` varchar(50) NOT NULL,
  `CREATEDATE` date NOT NULL,
  `CREATENAME` varchar(30) NOT NULL,
  `COMPANY` char(10) NOT NULL,
  `SALESID` varchar(55) DEFAULT NULL,
  `BRANCH` int(11) NOT NULL,
  `CUSTOMERID` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `prospect_backup`
--

INSERT INTO `prospect_backup` (`PROSPECTID`, `SUSPECTID`, `SUSPECT_DETAIL_ID`, `QUOTATIONNO`, `CREATEDATE`, `CREATENAME`, `COMPANY`, `SALESID`, `BRANCH`, `CUSTOMERID`, `DESCRIPTION`, `STARTDATE`, `EXPIREDATE`, `CURRENCY`, `STAGEID`, `APPROVDATE`, `APPROVBY`, `STATUS`, `LAST_UPDATE`, `DECISION_DATE`, `EXPECT_DELIVERY_DATE`, `CUSTOMER_TYPE`, `LEVEL2`, `WEB_PID`) VALUES
(1, 1, 1, '1', '2015-09-03', 'Kuncoro Wicaksono', '2', '1', 1, 2, '', '2015-09-17', '2015-09-25', '', 5, '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(2, 3, 5, '2', '2015-09-03', 'user', '3', '2', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Very', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(3, 4, 0, '', '0000-00-00', '', '', '0', 0, 0, 'Buat quotation', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(4, 3, 5, '', '2015-09-03', 'user', '3', '2', 1, 1, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(5, 24, 12, '', '2015-09-10', 'Kuncoro Wicaksono', '2', NULL, 1, 1, 'Pembangunan gorong gorong struktur baja dengan total panjang sekitar 55 meter dan lebar 7 meter. Pek', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(6, 25, 0, '', '2015-09-10', 'Kuncoro Wicaksono', '2', NULL, 1, 2, 'INTAXSALES cool meeen', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(7, 26, 14, '', '2015-09-10', 'Kuncoro Wicaksono', '2', NULL, 1, 1, 'INTAXSALES cool meeen', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(8, 27, 15, '', '0000-00-00', 'u', 'u', NULL, 1, NULL, 'u', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, ''),
(9, 29, 17, '', '0000-00-00', 'u', 'u', 'u', 1, NULL, 'u', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', '', 'Prospect', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '', NULL, '');

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
(1, 1, '1', '2', '2', '2', '2', '2', 2);

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
-- Table structure for table `segment`
--

CREATE TABLE IF NOT EXISTS `segment` (
  `SEGMENTID` int(1) NOT NULL,
  `INDUSTRY_SEGMENT` varchar(30) NOT NULL,
  `SUB_SEGMENT` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(80) NOT NULL,
  PRIMARY KEY (`SEGMENTID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `segment`
--

INSERT INTO `segment` (`SEGMENTID`, `INDUSTRY_SEGMENT`, `SUB_SEGMENT`, `DESCRIPTION`) VALUES
(1, 'SEGMENT 1', 'SUB SEGMENT 1', 'DESC 1 CHECK'),
(2, 'SEGMENT 2', 'SUB SEGMENT 2', 'DESC 2'),
(3, 'SEGMENT 3', 'SUB SEGMENT 3', 'DESC 3');

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
(1, ' - Choose Source ID -'),
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
  `LEADSDETAILID` int(11) NOT NULL,
  `ITMNO` int(1) NOT NULL,
  `SALESID` varchar(55) DEFAULT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `STAGEID` int(11) NOT NULL,
  `CUSTOMERPLANNED` varchar(555) DEFAULT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `LAST_UPDATE` date NOT NULL,
  PRIMARY KEY (`SUSPECTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`SUSPECTID`, `CREATEDATE`, `CREATENAME`, `COMPANY`, `BRANCH`, `LEADSID`, `LEADSDETAILID`, `ITMNO`, `SALESID`, `DESCRIPTION`, `STAGEID`, `CUSTOMERPLANNED`, `CUSTOMERID`, `STATUS`, `LAST_UPDATE`) VALUES
(1, '2015-09-03', 'Kuncoro Wicaksono', '2', '1', '1', 1, 0, '1', '', 3, NULL, 2, 'Verified', '0000-00-00'),
(2, '2015-09-03', 'Kuncoro Wicaksono', '2', '1', '23', 15, 0, '1', '', 3, NULL, 2, 'Verified', '0000-00-00'),
(3, '2015-09-03', 'user', '3', '1', '25', 16, 0, '2', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(4, '2015-09-03', 'Arief Irsyad', '3', '2', '10', 6, 0, '0', '', 3, NULL, 2, 'Verified', '0000-00-00'),
(5, '2015-09-03', 'Arief Irsyad', '3', '1', '9', 5, 0, '0', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(6, '2015-09-03', 'Arief Irsyad', '2', '1', '5', 3, 0, '1', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(7, '2015-09-03', 'Arief Irsyad', '3', '1', '26', 17, 0, '0', '', 3, NULL, 0, 'Verified', '0000-00-00'),
(8, '2015-09-03', 'Kuncoro Wicaksono', '1', '1', '27', 18, 0, '1', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(9, '2015-09-03', 'Kuncoro Wicaksono', '3', '1', '32', 23, 0, '0', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(10, '2015-09-03', 'Kuncoro Wicaksono', '1', '1', '3', 1, 0, '1', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(11, '2015-09-03', 'Kuncoro Wicaksono', '1', '1', '2', 1, 0, '1', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(12, '2015-09-03', 'user', '1', '1', '30', 0, 0, '0', '', 3, NULL, 2, 'Verified', '0000-00-00'),
(13, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '33', 1, 0, '0', '', 3, NULL, 1, 'Picked', '0000-00-00'),
(14, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '33', 1, 0, '0', '', 3, NULL, 1, 'Verified', '0000-00-00'),
(15, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '5', 0, 0, '0', 'MAIN CONTRACT AWARDED | CONSTRUCTION COMMENCED \n\n     •   Bridge construct (30 m length x 8 m width)', 3, NULL, 1, 'Verified', '0000-00-00'),
(16, '2015-09-10', 'Kuncoro Wicaksono', '2', '2', '12', 8, 0, '0', 'Pembangunan Jembatan Batu Tatal Kecamatan Bulik - Lamandau (Kab.)', 3, NULL, 1, 'Verified', '0000-00-00'),
(17, '2015-09-10', 'Kuncoro Wicaksono', '2', '2', '18', 10, 0, '0', 'PEMBUATAN JALAN AKSES PKP-PK VOLUME 572 M2 BANDAR UDARA NAMROLE - Buru Selatan (Kab.)', 3, NULL, 1, 'Verified', '0000-00-00'),
(18, '2015-09-10', 'Arief Irsyad', '3', '2', '13', 9, 0, 'Arief Irsyad', 'Pembangunan Jembatan Sekombulan 	\nKecamatan Delang - Lamandau (Kab.)', 3, NULL, 0, 'Verified', '0000-00-00'),
(19, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '34', 3, 0, 'Kuncoro Wicaksono', 'MAIN CONTRACT AWARDED | CONSTRUCTION COMMENCED \n\n     •   Bridge construct (30 m length x 8 m width)', 3, NULL, 1, 'Verified', '0000-00-00'),
(20, '2015-09-10', '0', '3', '2', '14', 8, 0, NULL, '', 3, NULL, 0, 'Verified', '0000-00-00'),
(21, '2015-09-10', 'Kuncoro Wicaksono', '2', '2', '21', 14, 0, 'Kuncoro Wicaksono', '', 3, NULL, 1, 'Picked', '0000-00-00'),
(22, '0000-00-00', '', '2', '1', '2', 36, 0, 'Kuncoro Wicaksono', 'Deskripsi 1', 0, NULL, 1, 'Verified', '0000-00-00'),
(23, '0000-00-00', '', '2', '1', '3', 37, 0, 'Kuncoro Wicaksono', 'MAIN CONTRACT AWARDED | CONSTRUCTION COMMENCED \n\n     •   Bridge construct (30 m length x 8 m width)', 0, NULL, 2, 'Verified', '0000-00-00'),
(24, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '4', 8, 0, 'Kuncoro Wicaksono', 'Pembangunan gorong gorong struktur baja dengan total panjang sekitar 55 meter dan lebar 7 meter. Pek', 0, NULL, 1, 'Verified', '0000-00-00'),
(25, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '1', 38, 0, 'Kuncoro Wicaksono', 'INTAXSALES cool meeen', 0, NULL, 2, 'Verified', '0000-00-00'),
(26, '2015-09-10', 'Kuncoro Wicaksono', '2', '1', '1', 39, 0, 'Kuncoro Wicaksono', 'INTAXSALES cool meeen', 0, NULL, 1, 'Verified', '0000-00-00'),
(27, '0000-00-00', 'u', 'u', 'u', 'u', 40, 0, 'u', 'u', 0, NULL, 0, 'u', '0000-00-00'),
(28, '2015-09-14', 'user', '1', '1', '1', 42, 0, 'user', 'INTAXSALES cool meeen', 3, 'CUSTOMER A', 0, 'Verified', '0000-00-00'),
(29, '0000-00-00', 'u', 'u', 'u', 'u', 43, 0, 'u', 'u', 0, 'u', 0, 'u', '0000-00-00'),
(30, '2015-09-22', 'Arief Irsyad', '3', '2', '10', 17, 0, 'Arief Irsyad', 'PEMBUATAN JALAN AKSES PKP-PK VOLUME 572 M2 BANDAR UDARA NAMROLE - Buru Selatan (Kab.)', 3, '', 0, 'Verified', '0000-00-00'),
(31, '2015-09-22', 'Kuncoro Wicaksono', '2', '1', '1', 41, 0, 'Kuncoro Wicaksono', 'INTAXSALES cool meeen', 3, '', 2, 'Verified', '0000-00-00'),
(32, '2015-09-23', 'Kuncoro Wicaksono', '2', '1', '24', 44, 0, 'Kuncoro Wicaksono', 'Fly over di atas jalan Ir Juanda, menghubungkan Joyo Martono dengan Jl Pahlawan', 3, 'PT Dwi Nagaratama', 1, 'Verified', '0000-00-00'),
(33, '2015-09-23', 'Kuncoro Wicaksono', '2', '1', '24', 46, 0, 'Kuncoro Wicaksono', 'Fly over di atas jalan Ir Juanda, menghubungkan Joyo Martono dengan Jl Pahlawan', 3, 'PT Alaska Reska', 0, 'Verified', '0000-00-00'),
(34, '2015-09-25', 'user', '1', '2', '25', 47, 0, 'user', 'Kebutuhan Training Manager Leader untuk 10 orang', 3, 'PT Apalah', 0, 'Verified', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `suspect_detail`
--

INSERT INTO `suspect_detail` (`SUSPECT_DETAIL_ID`, `PROSPECTID`, `PRODUCTID`, `SUSPECTID`, `QUANTITY`, `UOM`, `TRANSACTION_MODEL`, `STATUS`, `ODDS`, `SEGMENT_ID`) VALUES
(1, 0, 'S371-1', 1, '100', 'Un', 'New', 'Create_Quotation', '111', 222),
(2, 0, 'S420-1', 2, '1', 'Un', 'New', 'Verified', '', 0),
(3, 0, 'BE42-1', 2, '5', 'Un', 'Rental', 'Verified', '', 0),
(4, 0, 'BE42-1', 4, '1', 'Un', 'New', 'Verified', '', 0),
(5, 0, 'S266-1', 3, '2', 'Un', 'New', 'Create_Quotation', '', 1),
(6, 0, 'S371-1', 8, '1', 'Un', 'New', 'Verified', '', 0),
(7, 0, 'BE42-1', 8, '100', 'Un', 'New', 'Verified', '', 0),
(8, 0, 'S371-1', 12, '1', 'Un', 'New', 'Create_Quotation', '', 0),
(9, 0, 'S420-1', 12, '0', 'Un', 'New', 'Verified', '', 0),
(10, 0, 'S371-1', 18, '2', 'Un', 'New', 'Verified', '', 0),
(11, 0, 'S371-1', 19, '2', 'Un', 'New', 'Create_Quotation', '12395395', 0),
(12, 0, 'S371-1', 24, '2', 'Un', 'New', 'Create_Quotation', '21212', 121212),
(13, 0, 'S266-1', 25, '2', 'Un', 'New', 'Create_Quotation', '', 121212),
(14, 0, 'S371-1', 26, '2', 'Un', 'New', 'Create_Quotation', '', 0),
(15, 0, 'S371-1', 27, '2', 'Un', 'New', 'Create_Quotation', '121212', 121212),
(16, 0, 'S371-1', 28, '0', 'Un', 'New', 'Verified', '', 0),
(17, 0, 'S371-1', 29, '2', 'Un', 'New', 'Create_Quotation', '121', 121212),
(18, 0, 'BE42-1', 3, '3', 'Un', 'New', 'Create_Quotation', '50', 2),
(19, 0, 'S371-1', 30, '1', 'Un', 'New', 'Create_Quotation', '', 1),
(20, 0, 'S266-1', 31, '1', 'Un', 'New', 'Verified', '', 1),
(21, 0, 'S266-1', 32, '2', 'Un', 'New', 'Verified', '50%', 1),
(22, 0, 'S371-1', 32, '1', 'Un', 'New', 'Create_Quotation', '70', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

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
(15, 12, 0, '0000-00-00', '0', 'UPDATE', 0, ''),
(18, 16, 0, '2015-08-13', '0', 'UPDATE', 0, ''),
(19, 15, 0, '2015-08-13', '0', 'UPDATE', 0, ''),
(21, 0, 0, '2015-08-31', '0', 'INSERT', 0, ''),
(22, 1, 0, '2015-08-31', '0', 'UPDATE', 0, ''),
(23, 2, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(24, 6, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(25, 9, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(26, 5, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(27, 11, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(28, 12, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(29, 11, 0, '2015-09-01', '0', 'UPDATE', 0, ''),
(30, 27, 0, '2015-09-10', '0', 'UPDATE', 0, ''),
(31, 29, 0, '2015-09-15', '0', 'UPDATE', 0, ''),
(32, 31, 0, '2015-09-22', 'Kuncoro Wicaksono', 'UPDATE', 0, ''),
(33, 32, 0, '2015-09-23', 'Kuncoro Wicaksono', 'UPDATE', 0, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(14, 'user', 'popupwidget'),
(15, 'eariirs', 'popupwidget');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

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
(64, 'kuncoro', NULL, NULL, 'http://localhost/intraco/index.php/frontpage/login', '2015-08-11 13:45:38', NULL),
(65, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-13 09:44:21', NULL),
(66, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-13 09:45:58', NULL),
(67, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-13 10:41:23', NULL),
(68, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-13 10:48:55', NULL),
(69, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-13 13:13:17', NULL),
(70, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-20 10:21:55', NULL),
(71, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-20 10:24:45', NULL),
(72, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-23 12:03:03', NULL),
(73, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-25 12:05:41', NULL),
(74, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-25 13:06:02', NULL),
(75, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-25 13:07:26', NULL),
(76, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-25 16:37:24', NULL),
(77, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-25 19:29:50', NULL),
(78, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-30 12:08:40', NULL),
(79, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-30 19:03:06', NULL),
(80, 'kuncoro', NULL, NULL, 'http://localhost/inta310815/index.php/frontpage/login', '2015-08-31 06:44:55', NULL),
(81, 'user', NULL, NULL, 'http://localhost/inta310815/index.php/frontpage/login', '2015-08-31 16:45:53', NULL),
(82, 'kuncoro', NULL, NULL, 'http://localhost/inta310815/index.php/frontpage/login', '2015-08-31 16:46:16', NULL),
(83, 'kuncoro', NULL, NULL, 'http://localhost/inta310815/index.php/frontpage/login', '2015-08-31 17:15:37', NULL),
(84, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-31 22:46:47', NULL),
(85, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-31 22:47:38', NULL),
(86, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-08-31 22:59:11', NULL),
(87, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 07:38:29', NULL),
(88, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 07:54:12', NULL),
(89, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 08:37:27', NULL),
(90, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 10:17:46', NULL),
(91, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 10:19:31', NULL),
(92, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 10:44:45', NULL),
(93, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 11:38:30', NULL),
(94, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 12:03:41', NULL),
(95, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 12:44:18', NULL),
(96, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 13:02:36', NULL),
(97, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 13:15:31', NULL),
(98, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 13:56:20', NULL),
(99, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 14:39:19', NULL),
(100, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 15:09:51', NULL),
(101, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-01 16:30:26', NULL),
(102, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-02 21:58:59', NULL),
(103, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 07:17:21', NULL),
(104, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 11:27:19', NULL),
(105, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 11:30:36', NULL),
(106, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 11:37:44', NULL),
(107, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 13:00:36', NULL),
(108, 'edesima', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 13:22:16', NULL),
(109, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 15:16:43', NULL),
(110, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 15:40:52', NULL),
(111, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 15:42:36', NULL),
(112, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 15:48:48', NULL),
(113, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 16:20:29', NULL),
(114, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 16:54:42', NULL),
(115, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-03 16:56:47', NULL),
(116, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 00:05:55', NULL),
(117, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 08:27:18', NULL),
(118, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 09:03:43', NULL),
(119, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 10:41:06', NULL),
(120, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 10:43:43', NULL),
(121, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 11:12:01', NULL),
(122, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 12:15:26', NULL),
(123, 'Kuncoro ', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 12:28:47', NULL),
(124, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 13:14:35', NULL),
(125, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 13:49:05', NULL),
(126, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-10 14:06:29', NULL),
(127, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-11 15:01:41', NULL),
(128, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 07:50:23', NULL),
(129, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 15:36:24', NULL),
(130, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 21:51:23', NULL),
(131, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 21:51:42', NULL),
(132, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 22:00:49', NULL),
(133, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 22:02:14', NULL),
(134, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-14 22:13:13', NULL),
(135, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-15 12:03:32', NULL),
(136, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-15 15:10:24', NULL),
(137, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-16 14:23:50', NULL),
(138, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-16 14:36:58', NULL),
(139, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-16 15:00:28', NULL),
(140, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-16 21:24:43', NULL),
(141, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-17 11:40:05', NULL),
(142, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-21 23:45:42', NULL),
(143, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 08:02:04', NULL),
(144, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 08:16:58', NULL),
(145, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 08:41:51', NULL),
(146, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 09:26:24', NULL),
(147, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 09:48:11', NULL),
(148, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 10:45:13', NULL),
(149, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-22 13:04:52', NULL),
(150, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-23 11:09:14', NULL),
(151, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-23 12:55:04', NULL),
(152, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-24 18:01:19', NULL),
(153, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-25 08:54:14', NULL),
(154, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-25 08:54:15', NULL),
(155, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-25 08:59:31', NULL),
(156, 'eariirs', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-25 09:04:08', NULL),
(157, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-25 09:05:05', NULL),
(158, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-26 12:01:23', NULL),
(159, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-28 09:43:37', NULL),
(160, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-09-28 22:57:22', NULL),
(161, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-01 11:51:39', NULL),
(162, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-02 14:09:09', NULL),
(163, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-07 08:24:57', NULL),
(164, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-09 08:55:47', NULL),
(165, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-09 08:57:16', NULL),
(166, 'User', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-09 09:28:34', NULL),
(167, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-09 09:39:12', NULL),
(168, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-09 13:49:08', NULL),
(169, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-09 13:53:17', NULL),
(170, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-10 18:20:35', NULL),
(171, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-10 18:30:01', NULL),
(172, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-13 10:05:10', NULL),
(173, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-13 15:17:21', NULL),
(174, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-13 15:19:42', NULL),
(175, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-15 01:04:14', NULL),
(176, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-15 11:22:22', NULL),
(177, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-15 11:24:21', NULL),
(178, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-15 16:17:59', NULL),
(179, 'User', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-15 16:25:16', NULL),
(180, 'User', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-15 18:32:58', NULL),
(181, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-19 08:54:24', NULL),
(182, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-20 09:16:30', NULL),
(183, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-20 14:41:23', NULL),
(184, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-21 19:59:46', NULL),
(185, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-22 13:55:37', NULL),
(186, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-29 13:48:44', NULL),
(187, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-10-30 13:35:13', NULL),
(188, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-02 20:32:51', NULL),
(189, 'kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-03 13:57:09', NULL),
(190, 'user', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-10 16:03:52', NULL),
(191, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-20 11:06:25', NULL),
(192, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-22 21:39:04', NULL),
(193, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-23 11:11:15', NULL),
(194, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-11-23 11:21:04', NULL),
(195, 'Kuncoro', NULL, NULL, 'http://inta-x-sales.com/index.php/frontpage/login', '2015-12-01 14:51:33', NULL);

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
-- Table structure for table `tdat_accessories`
--

CREATE TABLE IF NOT EXISTS `tdat_accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `currency` varchar(20) NOT NULL,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tdat_accessories`
--

INSERT INTO `tdat_accessories` (`id`, `name`, `description`, `price`, `currency`, `active`) VALUES
(1, 'ROTARY LIGHT / BRACKET', 'Description Rotary Light / Bracket', 34000000, 'IDR', 'Active'),
(2, 'FAST FUEL', 'Description Fast Fuel', 200000000, 'IDR', 'Active'),
(3, 'STROBO LIGHT LED', 'Description Strobo Light LED', 20000000, 'IDR', 'Active'),
(4, 'WORKING LIGHT LED 2 PCS / BRACKET', 'DescriptionWorking Light LED 2 pcs / Bracket', 54000000, 'IDR', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_branches`
--

CREATE TABLE IF NOT EXISTS `tdat_branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `idcity` int(11) NOT NULL,
  `idcountry` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idcompany` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tdat_branches`
--

INSERT INTO `tdat_branches` (`id`, `code`, `name`, `address`, `idcity`, `idcountry`, `phone`, `fax`, `email`, `idcompany`) VALUES
(1, 'BR1', 'Branch 1', 'Jl. Branch1 No1 ', 19, 69, '1234567', '7654321', 'Branch1@satu.com', 1),
(2, 'BR2', 'Branch 2', 'Jl. Branch 2 No.2', 31, 69, '1122334', '4433221', 'Branch2@dua.com', 7),
(3, 'BR3', 'Branch 3', 'Jl. Branch 3 No.3', 43, 69, '66778899', '99887766', 'Branch3@tiga.com', 4),
(4, 'BR4', 'Branch 4', 'Jl. Branch 4 No.4', 11, 69, '11441144', '44334433', 'Branch4@empat.com', 6),
(5, 'BR5', 'Branch 5', 'Jl. Branch 5 No.5', 64, 69, '66778877', '99009988', 'Branch5@lima.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_categories`
--

CREATE TABLE IF NOT EXISTS `tdat_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tdat_categories`
--

INSERT INTO `tdat_categories` (`id`, `name`, `brand`, `idcompany`, `description`) VALUES
(1, 'Categories 1', 'Brand Categories 1', 1, 'Description Categories 1'),
(2, 'Categories 2', 'Brand Categories 2', 3, 'Description Categories 2'),
(3, 'Categories 3', 'Brand Categories 3', 6, 'Description Categories 3'),
(4, 'Categories 4', 'Brand Categories 4', 5, 'Description Categories 4'),
(5, 'ARTICULATE DUMP TRUCK', 'VOLVO CE', 2, 'Articulated Dump Truck '),
(6, 'EXCAVATOR VCE', 'VOLVO CE', 2, 'Excavator'),
(7, 'TRUCK', 'SINO TRUK', 3, 'Truck - CNHTC');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_cities`
--

CREATE TABLE IF NOT EXISTS `tdat_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `idcountry` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `tdat_cities`
--

INSERT INTO `tdat_cities` (`id`, `code`, `name`, `description`, `idcountry`) VALUES
(6, 'AMB', 'Ambon', 'Ambon', 69),
(7, 'BAL', 'Balikpapan', 'Balikpapan', 69),
(8, 'BAC', 'Banda Aceh', 'Banda Aceh', 69),
(9, 'BLA', 'Bandar Lampung', 'Bandar Lampung', 69),
(10, 'BDG', 'Bandung', 'Bandung', 69),
(11, 'BJR', 'Banjar', 'Banjar', 69),
(12, 'BJB', 'Banjarbaru', 'Banjarbaru', 69),
(13, 'BJM', 'Banjarmasin', 'Banjarmasin', 69),
(14, 'BTM', 'Batam', 'Batam', 69),
(15, 'BAT', 'Batu', 'Batu', 69),
(16, 'BAU', 'Bau-Bau', 'Bau-Bau', 69),
(17, 'BKS', 'Bekasi', 'Bekasi', 69),
(18, 'BKL', 'Bengkulu', 'Bengkulu', 69),
(19, 'BIM', 'Bima', 'Bima', 69),
(20, 'BJI', 'Binjai', 'Binjai', 69),
(21, 'BIT', 'Bitung', 'Bitung', 69),
(22, 'BLT', 'Blitar', 'Blitar', 69),
(23, 'BGR', 'Bogor', 'Bogor', 69),
(24, 'BTG', 'Bontang', 'Bontang', 69),
(25, 'BKT', 'Bukittinggi', 'Bukittinggi', 69),
(26, 'CLG', 'Cilegon', 'Cilegon', 69),
(27, 'CMH', 'Cimahi', 'Cimahi', 69),
(28, 'CRB', 'Cirebon', 'Cirebon', 69),
(29, 'DPS', 'Denpasar', 'Denpasar', 69),
(30, 'DPK', 'Depok', 'Depok', 69),
(31, 'DMI', 'Dumai', 'Dumai', 69),
(32, 'GTL', 'Gorontalo', 'Gorontalo', 69),
(33, 'GSI', 'Gunungsitoli', 'Gunungsitoli', 69),
(34, 'JKB', 'Jakarta Barat', 'Jakarta Barat', 69),
(35, 'JKP', 'Jakarta Pusat', 'Jakarta Pusat', 69),
(36, 'JKS', 'Jakarta Selatan', 'Jakarta Selatan', 69),
(37, 'JKT', 'Jakarta Timur', 'Jakarta Timur', 69),
(38, 'JKU', 'Jakarta Utara', 'Jakarta Utara', 69),
(39, 'JMB', 'Jambi', 'Jambi', 69),
(40, 'JYP', 'Jayapura', 'Jayapura', 69),
(41, 'KDR', 'Kediri', 'Kediri', 69),
(42, 'KND', 'Kendari', 'Kendari', 69),
(43, 'KBG', 'Kotamobagu', 'Kotamobagu', 69),
(44, 'KPG', 'Kupang', 'Kupang', 69),
(45, 'LGS', 'Langsa', 'Langsa', 69),
(46, 'LSW', 'Lhokseumawe', 'Lhokseumawe', 69),
(47, 'LLG', 'Lubuklinggau', 'Lubuklinggau', 69),
(48, 'MDU', 'Madiun', 'Madiun', 69),
(49, 'MGG', 'Magelang', 'Magelang', 69),
(50, 'MKS', 'Makassar', 'Makassar', 69),
(51, 'MLG', 'Malang', 'Malang', 69),
(52, 'MND', 'Manado', 'Manado', 69),
(53, 'MTR', 'Mataram', 'Mataram', 69),
(54, 'MDN', 'Medan', 'Medan', 69),
(55, 'MTO', 'Metro', 'Metro', 69),
(56, 'MJK', 'Mojokerto', 'Mojokerto', 69),
(57, 'PDG', 'Padang', 'Padang', 69),
(58, 'PPG', 'Padangpanjang', 'Padangpanjang', 69),
(59, 'PSP', 'Padangsidempuan', 'Padangsidempuan', 69),
(60, 'PAL', 'Pagar Alam', 'Pagar Alam', 69),
(61, 'PGR', 'Palangka Raya', 'Palangka Raya', 69),
(62, 'PLB', 'Palembang', 'Palembang', 69),
(63, 'PLP', 'Palopo', 'Palopo', 69),
(64, 'PAU', 'Palu', 'Palu', 69),
(65, 'PPN', 'Pangkal Pinang', 'Pangkal Pinang', 69),
(66, 'PAR', 'Parepare', 'Parepare', 69),
(67, 'PMN', 'Pariaman', 'Pariaman', 69),
(68, 'PSR', 'Pasuruan', 'Pasuruan', 69),
(69, 'PYK', 'Payakumbuh', 'Payakumbuh', 69),
(70, 'PKL', 'Pekalongan', 'Pekalongan', 69),
(71, 'PKB', 'Pekanbaru', 'Pekanbaru', 69),
(72, 'PMS', 'Pematangsiantar', 'Pematangsiantar', 69),
(73, 'PTK', 'Pontianak', 'Pontianak', 69),
(74, 'PBH', 'Prabumulih', 'Prabumulih', 69),
(75, 'PBG', 'Probolinggo', 'Probolinggo', 69),
(76, 'SBG', 'Sabang', 'Sabang', 69),
(77, 'SLT', 'Salatiga', 'Salatiga', 69),
(78, 'SMD', 'Samarinda', 'Samarinda', 69),
(79, 'SWL', 'Sawahlunto', 'Sawahlunto', 69),
(80, 'SMG', 'Semarang', 'Semarang', 69),
(81, 'SRG', 'Serang', 'Serang', 69),
(82, 'SBL', 'Sibolga', 'Sibolga', 69),
(83, 'SKG', 'Singkawang', 'Singkawang', 69),
(84, 'SLK', 'Solok', 'Solok', 69),
(85, 'SRO', 'Sorong', 'Sorong', 69),
(86, 'SLS', 'Subulussalam', 'Subulussalam', 69),
(87, 'SKB', 'Sukabumi', 'Sukabumi', 69),
(88, 'SPN', 'Sungai Penuh', 'Sungai Penuh', 69),
(89, 'SBY', 'Surabaya', 'Surabaya', 69),
(90, 'SRT', 'Surakarta', 'Surakarta', 69),
(91, 'TSL', 'Tangerang Selatan', 'Tangerang Selatan', 69),
(92, 'TGR', 'Tangerang', 'Tangerang', 69),
(93, 'TJP', 'Tanjung Pinang', 'Tanjung Pinang', 69),
(94, 'TJB', 'Tanjungbalai', 'Tanjungbalai', 69),
(95, 'TRK', 'Tarakan', 'Tarakan', 69),
(96, 'TKL', 'Tasikmalaya', 'Tasikmalaya', 69),
(97, 'TGT', 'Tebing Tinggi', 'Tebing Tinggi', 69),
(98, 'TGL', 'Tegal', 'Tegal', 69),
(99, 'TRN', 'Ternate', 'Ternate', 69),
(100, 'TDK', 'Tidore Kepulauan', 'Tidore Kepulauan', 69),
(101, 'TMH', 'Tomohon', 'Tomohon', 69),
(102, 'TUA', 'Tual', 'Tual', 69),
(103, 'YGK', 'Yogyakarta', 'Yogyakarta', 69);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_companies`
--

CREATE TABLE IF NOT EXISTS `tdat_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_companies`
--

INSERT INTO `tdat_companies` (`id`, `code`, `name`, `description`, `logo`) VALUES
(1, 'INTI', 'PT. INTA RESOURCES', 'COAL BUSINESS SOLUTIONS\r\nInta is getting ready to join the coal mining business. The company believes that the business will bring significant value to the company for the long term, as well as completing Inta Group’s value ', 'assets/pictures/companies/INTI.jpg'),
(2, 'IPPS', 'PT. INTRACO PENTA PRIMA SERVIS', 'HEAVY EQUIPMENT TRADING SOLUTIONS\r\nPT Intraco Penta Prima Servis (IPPS) focuses on sales distribution and after sales service for Volvo and SDLG heavy equipment products.', 'assets/pictures/companies/IPPS.jpg'),
(3, 'IPW', 'PT. INTRACO PENTA WAHANA', 'HEAVY EQUIPMENT TRADING SOLUTIONS\r\nPT Intraco Penta Wahana (IPW) focuses on sales distribution and after sales service for Sinotruk, Bobcat, Doosan, Mahindra and Palfinger heavy equipment products.', 'assets/pictures/companies/IPW.jpg'),
(4, 'CCI', 'PT. COLUMBIA CHROME INDONESIA', 'MANUFACTURING SOLUTIONS\r\nPT Columbia Chrome Indonesia focuses on the manufacturing of heavy equipment, such as hard chrome plating services, fabrication and of heavy equipment, as truck devices. ', 'assets/pictures/companies/CCI.jpg'),
(5, 'TFI', 'PT. TERRA FACTOR INDONESIA', 'RENTAL SOLUTIONS\r\nPT Terra Factor Indonesia is one of the largest heavy equipment rental companies in Indonesia. Terra Factor has built a high level of customer trust and satisfaction through equipment availability and reliability, as well as premium services. ', 'assets/pictures/companies/TFI.jpg'),
(6, 'KSR', 'PT. KARYA LESTARI SUMBER ALAM (KASUARI)', 'MINING CONTRACTING SOLUTIONS\r\nThe long track record of PT Karya Lestari Sumber Alam (Kasuari) includes application and maintenance or mining equipment, as the important key to establishing itself as a highly competent national mining contractor. ', 'assets/pictures/companies/KSR.jpg'),
(7, 'IBF', 'PT. INTAN BARUPRANA FINANCE', 'FINANCING SOLUTIONS\r\nAs a leasing company, PT Intan Baruprana Finance (IBF) offers an array of financing services include: new heavy equipment and used heavy equipment. ', 'assets/pictures/companies/IBF.jpg'),
(8, 'INTA', 'PT. INTRACO PENTA, Tbk', 'SUSTAINABLE STAKEHOLDER''S VALUE', 'assets/pictures/companies/INTA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_competitions`
--

CREATE TABLE IF NOT EXISTS `tdat_competitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idprospect` int(11) NOT NULL,
  `competee1` int(11) NOT NULL,
  `competee2` int(11) NOT NULL,
  `competee3` int(11) NOT NULL,
  `competee4` int(11) NOT NULL,
  `probability` varchar(500) NOT NULL,
  `competeewin` int(11) NOT NULL,
  `lossnotes` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tdat_competitions`
--

INSERT INTO `tdat_competitions` (`id`, `idprospect`, `competee1`, `competee2`, `competee3`, `competee4`, `probability`, `competeewin`, `lossnotes`) VALUES
(1, 8, 1, 2, 3, 4, 'Competee 4 can win', 4, 'Customer doesn''t accept the offered price Test'),
(2, 10, 5, 6, 7, 4, 'Competee 4 can win', 3, 'test loss notes. Please check.');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_competitors`
--

CREATE TABLE IF NOT EXISTS `tdat_competitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `strength` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tdat_competitors`
--

INSERT INTO `tdat_competitors` (`id`, `name`, `description`, `strength`) VALUES
(1, 'PT Competitor1', 'PT Competitor1 Description', 'Middle'),
(2, 'PT Competitor2', 'PT Competitor2 Description', 'Weak'),
(3, 'PT Competitor3', 'PT Competitor3 Description', 'Strength'),
(4, 'PT Competitor4', 'PT Competitor4 Description', 'Strength'),
(5, 'PT Competitor5', 'PT Competitor5 Description', 'Middle'),
(6, 'PT Competitor6', 'PT Competitor6 Description', 'Middle'),
(7, 'PT Competitor7', 'PT Competitor7 Description', 'Weak');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_countries`
--

CREATE TABLE IF NOT EXISTS `tdat_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `tdat_countries`
--

INSERT INTO `tdat_countries` (`id`, `code`, `name`, `description`) VALUES
(69, 'INA', 'Indonesia', 'Indonesia - Asia');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_customercp`
--

CREATE TABLE IF NOT EXISTS `tdat_customercp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `hobby` varchar(500) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tdat_customercp`
--

INSERT INTO `tdat_customercp` (`id`, `firstname`, `lastname`, `gender`, `birthdate`, `phone`, `ext`, `mobile`, `email`, `position`, `hobby`, `idcustomer`) VALUES
(1, 'Customer 1', 'Contact Person 1', 'Male', '2008-12-29', '2233445', '111', '5566554', 'Customers1@customers.com', 'Contact Person Position1', 'Contact Person Hobby1', 1),
(2, 'Customer 1', 'Contact Person 1', 'Female', '2008-12-28', '4455667', '222', '6677665', 'Customers1@customers.com', 'Contact Person Position2', 'Contact Person Hobby2', 1),
(3, 'Customer 2', 'Contact Person 1', 'Male', '2013-06-11', '222222', '333', '556655', 'Customers2@customers.com', 'Contact Person Position2', 'Contact Person Hobby2', 2),
(4, 'Customer 2', 'Contact Person 2', 'Female', '1988-12-26', '3344443', '444', '34534533', 'Customers2@customers.com', 'Contact Person Position2', 'Contact Person Hobby2', 2),
(5, 'John', 'Doe', 'Male', '1980-06-11', '800032', '021', '0877627123', 'john@doe.com', 'Sales', 'read', 11),
(6, 'Jhon', 'Doe', 'Male', '1990-01-30', '8002233', '021', '0817789987', 'jhondoe@test.com', 'Purchasing', '', 14),
(7, 'Arinda', 'Wijaya', 'Female', '1980-06-03', '80090090', '021', '0817789987', 'arinda@test.com', 'manager', 'read', 10),
(8, 'Dipta', 'Satwika', 'Male', '1988-10-26', '8009090', '021', '0812345566', 'dipta@gmail.com', 'marketing', 'read', 17),
(9, 'Budi', 'Agus', 'Male', '1980-01-01', '401408', '6700', '081213141516', 'budi@cci.co.id', '', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_customergroups`
--

CREATE TABLE IF NOT EXISTS `tdat_customergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tdat_customergroups`
--

INSERT INTO `tdat_customergroups` (`id`, `name`, `description`) VALUES
(1, 'Customer Group1', 'Description Customer Group1'),
(2, 'Customer Group2', 'Description Customer Group2'),
(3, 'Customer Group3', 'Description Customer Group3'),
(4, 'Customer Group4', 'Description Customer Group4'),
(5, 'Customer Group5', 'Description Customer Group5');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_customers`
--

CREATE TABLE IF NOT EXISTS `tdat_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `idindustry` int(11) NOT NULL,
  `idsegment` int(11) NOT NULL,
  `idcustomergroup` int(11) NOT NULL,
  `idcustomertype` int(11) NOT NULL,
  `CUST_WID` int(11) NOT NULL,
  `address` text NOT NULL,
  `idcity` int(11) NOT NULL,
  `idcountry` int(11) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `locationsite` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tdat_customers`
--

INSERT INTO `tdat_customers` (`id`, `name`, `idindustry`, `idsegment`, `idcustomergroup`, `idcustomertype`, `CUST_WID`, `address`, `idcity`, `idcountry`, `postalcode`, `phone`, `fax`, `email`, `locationsite`) VALUES
(1, 'Customers 1', 3, 3, 3, 20, 112233, 'Address Customers 1', 10, 69, '11111', '11223344', '11223344', 'Customers1@customers.com', 'Customers Locations 1'),
(2, 'Customers 2', 1, 2, 5, 4, 223344, 'Address Customers 2', 21, 69, '112233', '44556677', '99008877', 'Customers2@customers.com', 'Customers Locations 2'),
(3, 'Pt Aetra', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(4, 'Adhi Karya', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(5, 'dfghjk', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(6, 'Paijo', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(7, 'PT. Brantas Abipraya', 0, 0, 0, 0, 0, 'Jl. Agus no. 123', 12, 69, '', '08129900936', '12345678', 'budi@cci.co.id', ''),
(8, '', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(9, 'example', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(10, 'dev test', 2, 3, 2, 41, 2, 'Jl. Gatot Subroto Jakarta Pusat', 35, 69, '14431', '021390090', '0219009000', 'devtes@gmail.com', 'Jakarta'),
(11, 'Agung Sedayu Grup', 2, 1, 2, 1, 2, 'Jalan Boulevard kelapa Gading \nJakarta Utara', 38, 69, '14567', '8003311', '7546744', 'agungsedayu@gmail.com', 'jakarta'),
(12, 'AKUH', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(13, 'test', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(14, 'Test cus', 2, 2, 2, 1, 2, 'Jl. Gatot Subroto Jakarta Pusat', 35, 69, '14421', '8900982', '8098909', 'testcust@test.com', 'Jakarta'),
(15, 'PAMA', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(16, 'Test Cust', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(17, 'bla bla bla', 2, 1, 1, 42, 9, 'Jl. Jendral Sudirman Jakarta Pusat', 35, 69, '14432', '0218004567', '0218009090', 'info@blabla.com', 'Jakarta'),
(18, 'Customer Email', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(19, 'Dr Blah blah', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(20, 'MEY', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(21, 'PT AB Corp', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(22, 'PT ABC Corp', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(23, 'PT. Aetra', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(24, 'PT. ABIYASA', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(25, 'CV. Karya sentosa', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(26, 'PT.Coba-cola', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(27, 'PT Angolana', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(28, 'PT Utama Satu', 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_customertypes`
--

CREATE TABLE IF NOT EXISTS `tdat_customertypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level1` varchar(50) NOT NULL,
  `level2` varchar(50) NOT NULL,
  `level3` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tdat_customertypes`
--

INSERT INTO `tdat_customertypes` (`id`, `level1`, `level2`, `level3`, `description`) VALUES
(5, 'Contractor', 'Local/Provincial', 'Large,Fleet size >100 Units total fleet', 'test'),
(6, 'Contractor', 'Local/Provincial', 'Medium, Fleet size 10-100 units total fleet', 'test'),
(7, 'Contractor', 'Local/Provincial', 'Small, Fleet size 2 - <10 units total fleet', 'test'),
(8, 'Contractor', 'Local/Provincial', 'Owner Operator, Fleet size <2 units total fleet', 'test'),
(9, 'Contractor', 'National', 'Large, Fleet size >100 Units total fleet', 'test'),
(10, 'Contractor', 'National', 'Medium, Fleet size 10-100 units total fleet', 'test'),
(11, 'Contractor', 'National', 'Small, Fleet size 2 - <10 units total fleet', 'test'),
(12, 'Contractor', 'National', 'Owner Operator, Fleet size <2 units total fleet', 'test'),
(13, 'Contractor', 'Multi National, Global', 'Large, Fleet size >100 Units total fleet', 'test'),
(14, 'Contractor', 'Multi National, Global', 'Medium, Fleet size 10-100 units total fleet', 'test'),
(15, 'Contractor', 'Multi National, Global', 'Small, Fleet size 2 - <10 units total fleet', 'test'),
(16, 'Contractor', 'Multi National, Global', 'Owner Operator, Fleet size <2 units total fleet', 'test'),
(17, 'Producer', 'Local/Provincial', 'Large,Fleet size >100 Units total fleet', 'test'),
(18, 'Producer', 'Local/Provincial', 'Medium, Fleet size 10-100 units total fleet', 'test'),
(19, 'Producer', 'Local/Provincial', 'Small, Fleet size 2 - <10 units total fleet', 'test'),
(20, 'Producer', 'Local/Provincial', 'Owner Operator, Fleet size <2 units total fleet', 'test'),
(21, 'Producer', 'National', 'Large, Fleet size >100 Units total fleet', 'test'),
(22, 'Producer', 'National', 'Medium, Fleet size 10-100 units total fleet', 'test'),
(23, 'Producer', 'National', 'Small, Fleet size 2 - <10 units total fleet', 'test'),
(24, 'Producer', 'National', 'Owner Operator, Fleet size <2 units total fleet', 'test'),
(25, 'Producer', 'Multi National and Global', 'Large, Fleet size >100 Units total fleet', 'test'),
(26, 'Producer', 'Multi National and Global', 'Medium, Fleet size 10-100 units total fleet', 'test'),
(27, 'Producer', 'Multi National and Global', 'Small, Fleet size 2 - <10 units total fleet', 'test'),
(28, 'Producer', 'Multi National and Global', 'Owner Operator, Fleet size <2 units total fleet', 'test'),
(29, 'Rental Provider', 'Local/Provincial', 'Independent & Plant Hire', 'test'),
(30, 'Rental Provider', 'Local/Provincial', 'Dealer Owned Rental Fleet (DORF)', 'test'),
(31, 'Rental Provider', 'National', 'Independent & Plant Hire', 'test'),
(32, 'Rental Provider', 'National', 'Dealer Owned Rental Fleet (DORF)', 'test'),
(33, 'Rental Provider', 'Multi National', 'Independent & Plant Hire', 'test'),
(34, 'Rental Provider', 'Multi National', 'Dealer or Manufacturer Owned Rental Fleet', 'test'),
(35, 'Governmental', 'Local (Junior Govt)', 'Aid/Rescue/Development', 'test'),
(36, 'Governmental', 'Local (Junior Govt)', 'Maintenance', 'test'),
(37, 'Governmental', 'Regional (Senior Govt)', 'Aid/Rescue/Development', 'test'),
(38, 'Governmental', 'Regional (Senior Govt)', 'Maintenance', 'test'),
(39, 'Governmental', 'Federal/National Govt', 'Aid/Rescue/Development', 'test'),
(40, 'Governmental', 'Federal/National Govt', 'Defence, Peace-keeping', 'test'),
(41, 'Governmental', 'International Govt', 'Aid/Rescue/Development', 'test'),
(42, 'Governmental', 'International Govt', 'Defence, Peace-keeping', 'test'),
(43, 'Other', 'OEM', '.', 'test'),
(44, 'Other', 'Traders/Auction Houses', '.', 'test'),
(45, 'Other', 'NGOs and Schools', '.', 'test'),
(46, 'Other', 'Unspecified', '.', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_discounts`
--

CREATE TABLE IF NOT EXISTS `tdat_discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prospect_id` int(11) NOT NULL,
  `quotation_no` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `discount_price` varchar(50) NOT NULL,
  `discount_per` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tdat_discounts`
--

INSERT INTO `tdat_discounts` (`id`, `prospect_id`, `quotation_no`, `total_price`, `discount_price`, `discount_per`) VALUES
(1, 20, '1CC/INTI /BR1 -AA/II-2016', '112233', '110000', ''),
(2, 19, '3CC/IPW /BR1 -11111 /02-2016', '200112233', '200000000', ''),
(3, 1, '', '188130684', '', ''),
(4, 4, '', '275309000', '', ''),
(5, 18, '8CC/INTA /BR1 -54321 /02-2016', '274112233', '', ''),
(6, 21, '2CC/IPPS /BR2 -AA/II-2016', '891088', '', ''),
(7, 13, '4CC/CCI /BR3 -12345 /02-2016', '445544', '', ''),
(8, 14, '1CC/INTI /BR2 -54321 /02-2016', '2227720', '', ''),
(9, 7, '', '2227720', '', ''),
(10, 6, '', '238000', '', ''),
(11, 12, '6CC/KSR /BR1 -54321 /02-2016', '221190000', '220000000', '0.507560679195'),
(12, 5, '', '2380000', '2200000', '1.98961089876'),
(13, 22, '1CC/INTI /BR1 -AA/II-2016', '54891088', '53000000', '3.44516399456'),
(14, 15, '6CC/KSR /BR1 -54321 /02-2016', '66775570', '65000000', '2.66386392504'),
(15, 17, '3CC/IPW /BR1 -54321 /02-2016', '66778899', '', ''),
(16, 10, '01/01/01', '20224466', '', ''),
(19, 8, '', '448932', '', ''),
(20, 11, '', '1190000', '', ''),
(21, 23, '1CC/INTI /BR1 -PM/III-2016', '782476000', '710000000', '2.53625376814'),
(22, 24, '3CC/IPW /BR1 -AA/III-2016', '119000', '', ''),
(23, 26, '2CC/IPPS /BR3 -AA/III-2016', '446677557', '6500000', '2.65901137197'),
(24, 25, '3CC/IPW /BR1 -AA/III-2016', '119000', '', ''),
(25, 29, '005/IPPS /BR4 -AA/III-2016', '66775570', '', ''),
(26, 30, '006/IPPS /BR4 -AA/III-2016', '66775570', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_incentives`
--

CREATE TABLE IF NOT EXISTS `tdat_incentives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlead` int(11) NOT NULL,
  `iduser` varchar(100) NOT NULL,
  `value` varchar(40) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `idprospect` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tdat_incentives`
--

INSERT INTO `tdat_incentives` (`id`, `idlead`, `iduser`, `value`, `currency`, `idprospect`) VALUES
(1, 7, '54321 - Paramitha Megarani', '2227720', 'IDR', 7),
(2, 3, '54321 - Paramitha Megarani', '238000', 'IDR', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_industries`
--

CREATE TABLE IF NOT EXISTS `tdat_industries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tdat_industries`
--

INSERT INTO `tdat_industries` (`id`, `code`, `name`, `description`) VALUES
(1, 'MIN', 'Mining', 'Mining Industries'),
(2, 'CON', 'Construction', 'Construction Industries'),
(3, 'GIN', 'General Industry', 'General Industries'),
(4, 'ACU', 'Agri Culture', 'Agri Culture Industries'),
(5, 'TRA', 'Transportation', 'Transportation Industries'),
(6, 'OAG', 'Oil and Gas', 'Oil and Gas Industries'),
(7, 'PAP', 'Pulp and Paper', 'Pulp and Paper Industries'),
(8, 'AQU', 'Aggregate/Quarries', 'Aggregate/Quarries Industries'),
(9, 'GOV', 'Goverment', 'Goverment Industries'),
(10, 'OTH', 'Other', 'Other Industries');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_leaddetails`
--

CREATE TABLE IF NOT EXISTS `tdat_leaddetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlead` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `pickupdate` date NOT NULL,
  `pickupby` int(11) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `idstatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tdat_leaddetails`
--

INSERT INTO `tdat_leaddetails` (`id`, `idlead`, `idcompany`, `idbranch`, `idcustomer`, `pickupdate`, `pickupby`, `quality`, `idstatus`) VALUES
(1, 1, 4, 3, 2, '2015-12-03', 1, '100', 3),
(4, 2, 8, 1, 3, '2016-01-19', 45, 'good', 3),
(5, 3, 5, 1, 4, '2016-01-26', 2, 'ok', 3),
(6, 7, 3, 4, 4, '2016-01-26', 2, 'high', 3),
(7, 4, 2, 1, 1, '2016-01-31', 2, 'ok', 3),
(8, 10, 3, 1, 5, '2016-02-01', 2, 'ertt', 3),
(10, 14, 2, 1, 6, '2016-02-11', 45, 'Okeh', 3),
(11, 8, 1, 2, 7, '2016-02-12', 2, '20', 3),
(12, 11, 6, 1, 8, '2016-02-15', 2, '12', 3),
(13, 12, 5, 1, 9, '2016-02-16', 45, '900', 1),
(14, 17, 1, 1, 13, '2016-03-15', 45, '', 4),
(15, 12, 1, 1, 10, '2016-02-15', 45, '800', 3),
(16, 15, 8, 1, 11, '2016-02-15', 2, '90', 3),
(17, 18, 3, 1, 12, '2016-02-16', 45, 'BAGUS DEH', 3),
(18, 19, 1, 1, 14, '2016-02-16', 45, '10', 3),
(19, 9, 2, 2, 15, '2016-02-17', 45, 'qualified', 3),
(20, 16, 6, 2, 16, '2016-03-15', 45, '99', 1),
(21, 20, 1, 1, 14, '2016-03-04', 45, '10', 1),
(22, 21, 1, 1, 17, '2016-03-07', 2, '80', 3),
(23, 22, 6, 1, 18, '2016-03-22', 2, '90', 3),
(24, 23, 3, 1, 19, '2016-03-08', 45, 'good', 3),
(25, 23, 2, 0, 8, '2016-03-08', 45, 'good', 4),
(26, 24, 3, 1, 20, '2016-03-08', 45, 'GOOD', 3),
(27, 27, 2, 2, 21, '2016-03-08', 45, '', 1),
(28, 28, 2, 3, 22, '2016-03-08', 45, '', 3),
(29, 29, 2, 3, 22, '0000-00-00', 0, '', 1),
(30, 30, 1, 0, 3, '0000-00-00', 0, '', 1),
(31, 31, 2, 3, 23, '0000-00-00', 0, '', 1),
(32, 32, 3, 1, 24, '2016-03-16', 45, 'qulified', 3),
(33, 33, 3, 2, 25, '2016-03-16', 45, 'qualified', 3),
(35, 34, 3, 3, 26, '2016-03-16', 45, 'poor', 4),
(36, 35, 2, 4, 27, '2016-03-16', 45, 'Good', 3),
(37, 35, 3, 4, 28, '2016-03-16', 45, 'good', 4),
(38, 36, 3, 1, 8, '0000-00-00', 0, 'GOOD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_leadhistories`
--

CREATE TABLE IF NOT EXISTS `tdat_leadhistories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlead` int(11) NOT NULL,
  `modifieddate` date NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `historytype` varchar(30) NOT NULL,
  `idstage` int(11) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdat_leads`
--

CREATE TABLE IF NOT EXISTS `tdat_leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsource` int(11) NOT NULL,
  `projectno` int(11) NOT NULL,
  `createddate` date NOT NULL,
  `createdby` int(11) NOT NULL,
  `idstage` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `projectdescription` varchar(1000) NOT NULL,
  `projectstatus` varchar(20) NOT NULL,
  `constdate` varchar(30) NOT NULL,
  `constenddate` varchar(30) NOT NULL,
  `projectprovince` varchar(100) NOT NULL,
  `projecttown` varchar(100) NOT NULL,
  `projectaddress` varchar(100) NOT NULL,
  `projectcategory` varchar(20) NOT NULL,
  `projectstage` varchar(30) NOT NULL,
  `architechdesigner` varchar(2000) NOT NULL,
  `projectpublishdate` date NOT NULL,
  `devpropmanager` varchar(5000) NOT NULL,
  `engineerconsultant` varchar(5000) NOT NULL,
  `maincontractor` varchar(5000) NOT NULL,
  `subcontractor` varchar(5000) NOT NULL,
  `projectvalue` bigint(35) NOT NULL,
  `addressablevalue` bigint(35) NOT NULL,
  `quality` varchar(30) NOT NULL,
  `assigntype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tdat_leads`
--

INSERT INTO `tdat_leads` (`id`, `idsource`, `projectno`, `createddate`, `createdby`, `idstage`, `idcompany`, `idbranch`, `projectname`, `projectdescription`, `projectstatus`, `constdate`, `constenddate`, `projectprovince`, `projecttown`, `projectaddress`, `projectcategory`, `projectstage`, `architechdesigner`, `projectpublishdate`, `devpropmanager`, `engineerconsultant`, `maincontractor`, `subcontractor`, `projectvalue`, `addressablevalue`, `quality`, `assigntype`) VALUES
(1, 4, 111111, '2016-01-23', 45, 3, 0, 0, 'OK Test New', 'Ok Test Description', 'Ok project Status', '2016-01-23', '2016-01-30', 'Bali', 'Sudirman', 'Ok Address', 'Ok Category', 'Ok Project Stage', 'Ok Designer', '2016-02-16', 'Ok Dev Manager', 'Dev Test', 'Dev Cont test', 'dev Sub Cont Test', 10000000, 10000000, 'Qdev Qulified', 'Dev Assign ok Test'),
(2, 1, 101, '2016-01-19', 45, 4, 0, 0, 'Proyek MRT Lebak Bulus-Kota', 'Test Project Description', 'Status Test', 'Januari 2015', 'Januari 2017', 'DKI Jakarta', 'Jakarta Timur', 'Jalan jalan', 'Test project', 'Post Tender', 'Wika', '2016-01-19', 'Engineer: Buana Archicon PT, Mr Arif Palurui  - Project Coordinator  (Address: Gedung Buana Lantai 2, Jalan Ciputat Raya No. 163 Pondok Pinang, Jakarta Selatan, Jakarta 12310, Indonesia Phone: 62 21 7581 6606 Email: buanarchie@yahoo.com) || Environmental Impact Assessment: Tribina Matra Carya Cipta PT, Mr Teguh Mulyanto  - Architect  (Address: Jalan Melawai X No 9, Kebayoran Baru, Jakarta, Jakarta 12120, Indonesia Phone: 62 21 722 9319) || Feasibility Consultant: Virama Karya (Persero) PT, (Address: Jalan Hang Tuah Raya No. 26, Kebayoran Baru, Jakarta Selatan, Jakarta 12120, Indonesia Phone: 62 21 739 7545 Email: info@viramakarya.co.id) || Design Engineer: Indec Internusa PT, Mr Taruna Jaya  - Deputi Operasional  (Address: Jalan Cikutra No. 229, Bandung, West Java 40124, Indonesia Phone: 62 22 720 3428 Email: indecbdg@indo.net.id)', 'Adhi Karya', 'Waskita', 'Waskita', 100000000, 100000, 'Qualified', 'BID'),
(3, 5, 122222, '2016-01-23', 45, 4, 0, 0, 'OK Subha Test', 'Ok Test Description Subha', 'ok project Status  S', '2016-01-24', '2016-01-31', 'Belur', 'Hooghly', 'ok Address Subha', 'ok Category Subha', 'ok Project Stage Subha', 'ok Designer Subha', '2016-02-18', 'ok Dev Manager Subha', 'Dev Test Subha', 'Dev Cont test Subha', 'dev Sub Cont Test Subha', 2000000, 200000, 'Qdev Qulified Subha', 'dev Assign ok Test Subha'),
(4, 4, 645, '2016-01-23', 45, 8, 0, 0, 'OK Test', 'Ok Test Description', 'Ok project Status', '2016-01-23', '2016-01-30', 'Bali', 'Sudirman', 'Ok Address', 'Ok Category', 'Ok Project Stage', 'Ok Designer', '2016-02-16', 'Ok Dev Manager', 'Dev Test', 'Dev Cont test', 'dev Sub Cont Test', 10000000, 10000000, 'Qdev Qulified', 'Dev Assign ok Test'),
(7, 8, 108, '2016-01-26', 2, 4, 1, 1, 'Project test tuesday', 'loremipsum', 'Status Test', 'Januari 2016', 'Januari 2017', 'DKI Jakarta', 'Jakarta Pusat', 'jalanjalan', 'Test project', 'Post Tender', 'Wika', '2016-01-12', 'Engineer: Buana Archicon PT, Mr Arif Palurui  - Project Coordinator  (Address: Gedung Buana Lantai 2, Jalan Ciputat Raya No. 163 Pondok Pinang, Jakarta Selatan, Jakarta 12310, Indonesia Phone: 62 21 7581 6606 Email: buanarchie@yahoo.com) || Environmental Impact Assessment: Tribina Matra Carya Cipta PT, Mr Teguh Mulyanto  - Architect  (Address: Jalan Melawai X No 9, Kebayoran Baru, Jakarta, Jakarta 12120, Indonesia Phone: 62 21 722 9319) || Feasibility Consultant: Virama Karya (Persero) PT, (Address: Jalan Hang Tuah Raya No. 26, Kebayoran Baru, Jakarta Selatan, Jakarta 12120, Indonesia Phone: 62 21 739 7545 Email: info@viramakarya.co.id) || Design Engineer: Indec Internusa PT, Mr Taruna Jaya  - Deputi Operasional  (Address: Jalan Cikutra No. 229, Bandung, West Java 40124, Indonesia Phone: 62 22 720 3428 Email: indecbdg@indo.net.id)', 'Adhi Karya', 'Waskita', 'Waskita', 100000000, 100000, 'Qualified', 'BID'),
(8, 1, 144313001, '2016-02-17', 45, 1, 0, 0, 'ROADWORKS - upgrade (GAMBUT - PULAU SARI ROAD IMPR', '* Road upgrade (approx. 8 km length x 9 m width) * Hotmix asphalt overlay * Surface marking', 'Construction Commenc', '42078', '42231', 'South Kalimantan', 'Banjar', 'Gambut - Pulau Sari', 'Infrastructure', 'Construction: Main Contract Aw', 'null', '0000-00-00', 'Supervisory Consultant: Dharma Cipta Pratama CV, Mr Muhammad Anshari  - Director  (Address: Jalan Dharma Bakti V B No 40 A, Banjarmasin, South Kalimantan 70112, Indonesia Phone: 62 511 335 1374 Fax: 62 511 335 1374 Email: dharma_cp2001@yahoo.co.id) || Government Implementing Agency: Dinas Pekerjaan Umum Propinsi Kalimantan Selatan - Sub Dinas Bina Marga, Mr Gusti Tahmidillah  - Project Coordinator - Kepala PPK  (Address: Jalan DI Panjaitan No 8, Banjarmasin, South Kalimantan 70114, Indonesia Phone: 62 511 335 1456 Fax: 62 511 335 4684) || Supervisory Consultant: Dharma Cipta Pratama CV, Mr Diding  - Architect/ Engineer  (Address: Jalan Dharma Bakti V B No 40 A, Banjarmasin, South Kalimantan 70112, Indonesia Phone: 62 511 335 1374 Fax: 62 511 335 1374 Email: dharma_cp2001@yahoo.co.id)', 'Civil Engineer: Matra Estetika Rekayasa PT, Mr H Supar ST  - Director - Architect  (Address: Jalan Gatot Subroto Barat I No 29, Banjarmasin, South Kalimantan 70234, Indonesia Phone: 62 511 325 2476 Fax: 62 511 325 5680 Email: matra_mer@yahoo.co.id) ; Mrs Rini Ulfa  - Staff of Administration Project  (Address: Jalan Gatot Subroto Barat I No 29, Banjarmasin, South Kalimantan 70234, Indonesia Phone: 62 511 325 2476 Fax: 62 511 325 5680 Email: matra_mer@yahoo.co.id)', 'Road Work Contractor: Putra Kanca PT, Mr Rudy Firmansyah  - Director  (Address: Jalan H. Zafri Zam zam No.12 Kompleks Wartawan, Banjarmasin, South Kalimantan 70116, Indonesia Phone: 62 511 755 3532 Fax: Not available) ; Mr M. Gifariyono  - Project Manager  (Address: Jalan H. Zafri Zam zam No.12 Kompleks Wartawan, Banjarmasin, South Kalimantan 70116, Indonesia Phone: 62 511 755 3532 Fax: Not available)', 'null', 19200, 3840, 'null', ''),
(9, 0, 144313002, '2016-02-17', 45, 3, 0, 0, 'ROADWORKS - upgrade (JALAN ASAM BARU - SIMPANG BAN', '* Road upgrade (approx. 3 km length x 12 m width) * Hotmix asphalt overlay * Earthworks * Surface line marking', 'Contract not yet Let', '42461', '42614', 'Central Kalimantan', 'Seruyan', 'Jalan Asam Baru - Simpang Bangkal', 'Infrastructure', 'Post tender', '', '0000-00-00', 'Supervisory Consultant: Anugerah Kridapradana PT, Mr Gunawan Wibisono  - Director  (Address: Jalan Petogogan II No. 45, Kebayoran Baru, Jakarta Selatan, Jakarta 12170, Indonesia Phone: 62 21 7279 4150 Email: pt_anugerah_kridapradana@yahoo.com) || Government Implementing Agency: Dinas Pekerjaan Umum Propinsi Kalimantan Tengah - Perencanaan dan Pengawasan Jalan Nasional, Mr Kurnia Halomoan  - Kepala Satker  (Address: Jalan Letjen S. Parman No. 02, Lantai 03, Palangkaraya, Central Kalimantan 73112, Indonesia Phone: 62 536 322 0767 / 322 0678 Email: pokjap2jnkalteng@gmail.com) || Supervisory Consultant: Epadascon Permata PT, Mr Sutriono Hadi  - Director - Operational Manager  (Address: Jalan Ciputat Raya No. 33 - D, Pondok Pinang, Jakarta Selatan, Jakarta 12310, Indonesia Phone: 62 21 750 5925 / 750 5916 Email: epadascon@gmail.com) Purnajasa Bimapratama PT - Jakarta, Mr Kusno Sulaeman  - Project Director  (Address: Komplek Primkopti Blok C4 No. 18, Setu, Cipayung, Jakarta Timur, Jakarta 13880, Indonesia Phone: 62 21 8497 6467 Email: pt.bimapratama@yahoo.com) Wesitan Konsultasi Pembangunan PT, Mrs Desy  - Procurement Staff  (Address: Jalan Bontoramba No. 10, Gunung Sari Baru, Makassar, South Sulawesi 90221, Indonesia Phone: 62 411 830 897 / 830 898 Email: wesitan@gmail.com) Wiranta Bhuana Raya PT, Mr Ngakan Made Gunawan  - Director  (Address: Komplek Bougenville Block C14, Jalan Sukanegara No. 28, Antapani II, Bandung, West Java 40291, Indonesia Phone: 62 22 720 5913 / 720 4209 Email: wirantabhuanaraya@gmail.com) || Government Implementing Agency: Dinas Pekerjaan Umum Propinsi Kalimantan Tengah - SNVT Pelaksanaan Jalan Nasional Wilayah I, Mr Ir. Kalimonang MT  - Kepala Satker  (Address: Jalan Tjilik Riwut No. 14 Km. 3, Palangkaraya, Central Kalimantan 73112, Indonesia Phone: 62 536 322 0767 / 322 0678) || Tender Office: ; Mr Rooswandy Juniawan  - Member of Tender Committee  (Address: Jalan Tjilik Riwut No. 14 Km. 3, Palangkaraya, Central Kalimantan 73112, Indonesia Phone: 62 536 322 0767 / 322 0678) || Government Implementing Agency: Dinas Pekerjaan Umum Propinsi Kalimantan Tengah - PPK 04 Asam Baru - Km 65 (Simpang Bangkal) - Batas Kota Sampit, Mr Lambak ST.  - Project Coordinator  (Address: Jalan Tjilik Riwut No. 14 Km. 3, Palangkaraya, Central Kalimantan 73112, Indonesia Phone: 62 536 322 0767 / 322 0678) || Tender Office: Dinas Pekerjaan Umum Propinsi Kalimantan Tengah - Perencanaan dan Pengawasan Jalan Nasional, Mr Endy ST. MT.  - Member of Tender Committee  (Address: Jalan Letjen S. Parman No. 02, Lantai 03, Palangkaraya, Central Kalimantan 73112, Indonesia Phone: 62 536 322 0767 / 322 0678 Email: pokjap2jnkalteng@gmail.com)', 'TEST ===OK===?', '', '', 28604, 5721, '', ''),
(10, 8, 1344, '2016-02-01', 2, 3, 0, 0, 'weeee', 'hhrhrhrr', 'vbn', 'janu', '', 'fghjk', 'rty', 'fghjk', 'qwwww', 'tyhj', '', '2016-02-01', '', '', '', '', 0, 0, 'Qualified', ''),
(11, 1, 12345, '2016-02-02', 2, 4, 0, 0, 'Test Project 1', 'tesss', 'tes', 'januari 2015', 'juli 2015', 'jakarta', 'www', 'www', 'j', 'sss', 's', '0000-00-00', 's', 's', 's', 'subcontractor', 1100, 1000, 'high', 'dd'),
(12, 2, 12356, '2016-02-02', 2, 3, 0, 0, 'Test Project baru', 'tesss', 'tes', 'januari 2015', 'juli 2015', 'jakarta', 'j', 'j', 'j', 'j', 'jj', '0000-00-00', 'ggg', 'gg', 'gg', 'gg', 11011, 121, 'high', 'df'),
(14, 0, 546002, '2016-02-10', 45, 8, 0, 0, 'DW1:ROADWORKS - new (BAWEN - SOLO TOLL ROAD (SEMAR', '* Toll road construct (approx. 7.8 km length x 21 m width) * Concrete rigid pavement * Inner road shoulder / outer road shoulder * Earthworks * Surface marking * Traffic management', 'Tenders Called', 'July 2016', 'July 2017', 'Central Java', 'Boyolali', 'Boyolali - Kartasuro (STA 67+000 â€“ 74+800)', 'Infrastructure', 'Post tender', 'Architect: Grha Matra Desain Indonesia PT, Mr Benyamin Aris Nugraha  - Director  (Address: Jalan Budi Raya No.7 E, Kemanggisan, Jakarta, Jakarta 11410, Indonesia Phone: 62 21 5366 6277 Email: gmdi.konsultan@gmail.com) Portal Engineering Perkasa PT, Mr Jackson OH Mboe  - Director  (Address: Jalan Sungai Tami No. 1B Dok VIII, Jayapura, Papua 99116, Indonesia Phone: 62 967 543 363 Email: portal_eng@yahoo.com)', '0000-00-00', 'Developer: Hutama Karya (Persero) PT - Pengembangan Jalan Tol (JT HAKA), Mr Rizal Sucipto  - Kepala Divisi Pengembangan Jalan Tol  (Address: Hutama Karya Building 6th Floor, Jalan M.T. Haryono Kavling 8, Jakarta Timur, Jakarta 13630, Indonesia Phone: 62 21 819 3708 ext 679) ; Mr Ilham D Satria  - Project Manager  (Address: Hutama Karya Building 6th Floor, Jalan M.T. Haryono Kavling 8, Jakarta Timur, Jakarta 13630, Indonesia Phone: 62 21 819 3708 ext 679) ; Mr Krisna Aditya Yudha  - Procurment Staff  (Address: Hutama Karya Building 6th Floor, Jalan M.T. Haryono Kavling 8, Jakarta Timur, Jakarta 13630, Indonesia Phone: 62 21 819 3708 ext 679)', 'Environmental Impact Assessment: Kanta Karya Utama PT, Mr Zaenal Mustofa  - Director  (Address: Jalan Duren Tiga Selatan VII No. 9, Warung Buncit, Jakarta Selatan, Jakarta 12760, Indonesia Phone: 62 21 798 7946 Email: kantakarya@gmail.com) || Civil Engineer: Perentjana Djaja PT, Ms Irza Ratna Sari  - Head of Toll Road Division  (Address: Wisma Pede 3 - 4th Floor, Jalan M.T. Haryono, Kavling 17, Jakarta Selatan, Jakarta 12810, Indonesia Phone: 62 21 829 0442 / 830 1101 Email: office@perentjanadjaja.co.id) || Environmental Impact Assessment: Kanta Karya Utama PT, Mr Opik Hidayat  - Technical Division / Purchasing Staff  (Address: Jalan Duren Tiga Selatan VII No. 9, Warung Buncit, Jakarta Selatan, Jakarta 12760, Indonesia Phone: 62 21 798 7946 Email: kantakarya@gmail.com)', '?', '?', 1000000, 200000, '?', 'BID'),
(15, 5, 2989002, '2016-02-10', 45, 3, 0, 0, 'DW2:ROADWORKS - new (BAWEN - SOLO TOLL ROAD (SEMAR', '* Toll road construct (approx. 24.5 km length x 21 m width) * Concrete rigid pavement * Inner road shoulder / outer road shoulder * Road separator * Earthworks * Surface marking', 'Tenders Called', 'July 2016', 'July 2017', 'Central Java', 'Salatiga', 'Salatiga - Boyolali (STA 39+000 â€“ 63+500)', 'Infrastructure', 'Post tender', 'Architect: Architeam Design Center PT, Mr Soni Sumarsono  - Chief Architect  (Address: Jalan Tamansari No. 70, Bandung, West Java 40132, Indonesia Phone: 62 22 250 2365 Email: architeamdc@gmail.com) || Master Planner: Indulexco PT - Cabang Balikpapan, Mr Sudjatmiko  - Project Director  (Address: Jalan R. E. Martadinata No. 8, Mekar Sari, Balikpapan, East Kalimantan 76122, Indonesia Phone: 62 542 422 961) || Architect: Architeam Design Center PT, Mr Supriyanto  - Architect  (Address: Jalan Tamansari No. 70, Bandung, West Java 40132, Indonesia Phone: 62 22 250 2365 Email: architeamdc@gmail.com) || Master Planner: Indulexco PT - Cabang Balikpapan, Mr Bonti  - Architect  (Address: Jalan R. E. Martadinata No. 8, Mekar Sari, Balikpapan, East Kalimantan 76122, Indonesia Phone: 62 542 422 961)', '0000-00-00', 'Developer: Citra Marga Nusaphala Persada Tbk PT, Mr Andi Mayoriko  - Procurement Manager & Tender  (Address: Gedung CMNP Lantai Dasar, Jalan Komplek L Yos Sudarso Kav 28, Sunter Agung, Jakarta Utara, Jakarta 14350, Indonesia Phone: 62 21 6530 6930 / 6530 6369) || Government Implementing Agency: Kementerian Pekerjaan Umum dan Perumahan Rakyat Indonesia - Badan Pengatur Jalan Tol (BPJT), Mr Achmad Gani Ghazali A  - Head Officer  (Address: Gedung Balai Krida, Jalan Iskandarsyah Raya No. 35, Jakarta, Jakarta 12110, Indonesia Phone: 62 21 725 8063) || Pre-Qualification Office: ; Mr Eka Priya Anas  - Head of Tender Committee  (Address: Gedung Balai Krida, Jalan Iskandarsyah Raya No. 35, Jakarta, Jakarta 12110, Indonesia Phone: 62 21 725 8063) || Developer: Jasa Marga (Persero) Tbk PT, Ms Truli Nawangsasi  - Head of Toll Road Business Development Division  (Address: Plaza Tol Taman Mini Indonesia Indah, Jalan Tol Jagorawi, Jakarta, Jakarta 13550, Indonesia Phone: 62 21 841 3630 / 841 3526 Email: jasmar@jasamarga.com) Bangun Tjipta Sarana PT, Mr Faturahman  - Project Director  (Address: Gedung Bangun Tjipta 6th Floor, Jalan Gatot Subroto Kav 54, Kuningan Timur, Setiabudi, Jakarta Selatan, Jakarta 12950, Indonesia Phone: 62 21 570 9091 / 5365 3078 / 5367 2244)', '?', '?', '?', 565600, 113120, '?', 'BID'),
(16, 4, 5071002, '2016-02-10', 45, 1, 0, 0, 'DW3:ROADWORKS - new (BAWEN - SOLO TOLL ROAD (SEMAR', '* Toll road construct (approx. 17.3 km length x 21 m width) * Concrete rigid pavement * Inner road shoulder / outer road shoulder * Earthworks * Surface marking * Traffic management', 'Tenders Called', 'July 2016', 'July 2017', 'Central Java', 'Salatiga', 'Bawen - Salatiga (STA 23+100 â€“ 40+400)', 'Infrastructure', 'Post tender', 'Master Planner: Atrya Swascipta Rekayasa PT, Mr Agus Rochimat  - Director  (Address: Jalan Cikapayang No. 11, Dago, Bandung, West Java 40124, Indonesia Phone: 62 22 421 4122 Email: global@atrya.co.id)', '0000-00-00', 'Developer: Kresna Kusuma Dyandra Marga PT - Waskita Toll Road, Mr Herwi Diakto  - Director  (Address: Ruko Exclusive, Jalan Raden Inten Kav 21, Duren Sawit, Kalimalang, Jakarta Timur, Jakarta 11450, Indonesia Phone: 62 21 8661 5577 Email: kamilla.rambitan@gmail.com) ; Mr Purma Yoserizal  - Planning Manager  (Address: Ruko Exclusive, Jalan Raden Inten Kav 21, Duren Sawit, Kalimalang, Jakarta Timur, Jakarta 11450, Indonesia Phone: 62 21 8661 5577 Email: kamilla.rambitan@gmail.com) ; Mr Dwi Pratikto  - Project Manager  (Address: Ruko Exclusive, Jalan Raden Inten Kav 21, Duren Sawit, Kalimalang, Jakarta Timur, Jakarta 11450, Indonesia Phone: 62 21 8661 5577 Email: kamilla.rambitan@gmail.com)', 'Design Engineer: Buana Archicon PT, Mr Arif Palurui  - Project Coordinator  (Address: Gedung Buana Lantai 2, Jalan Ciputat Raya No. 163 Pondok Pinang, Jakarta Selatan, Jakarta 12310, Indonesia Phone: 62 21 7581 6606 Email: buanarchie@yahoo.com)', 'Piling & Foundation Contractor: Berdikari Pondasi Perkasa PT, Mr Ir. Mahmud  - Project Manager  (Address: Jalan Pangeran Tubagus Angke No. 99, Jelambar, Jakarta Barat, Jakarta 11460, Indonesia Phone: 62 21 566 2756 / 566 4415 / 566 3952 Email: berdikari_pp@telkom.net) || Road Work Contractor: Waskita Karya (Persero) Tbk PT - Divisi Sipil, Mr Sigit Purwanto  - Project Manager  (Address: Gedung Waskita 5th Floor, Jalan M.T. Haryono Kavling No. 10, Jakarta, Jakarta 13340, Indonesia Phone: 62 21 819 8158 / 819 1617 Email: div-sipil@waskita.co.id) || Piling & Foundation Contractor: Grant Surya Multi Sarana PT, Mr Taufik Akbar  - Project Manager  (Address: Jalan Kapuk Kamal Muara No. 8D, Kompleks Kapuk Berlian, Penjaringan, Jakarta Utara, Jakarta 14470, Indonesia Phone: 62 21 5595 1180 Email: grant_surya@yahoo.com) || Road Work Contractor: Waskita Karya (Persero) Tbk PT - Divisi Sipil, Ms Diana Ulfi  - Staff Bagian Pengendalian  (Address: Gedung Waskita 5th Floor, Jalan M.T. Haryono Kavling No. 10, Jakarta, Jakarta 13340, Indonesia Phone: 62 21 819 8158 / 819 1617 Email: div-sipil@waskita.co.id)', 'Sub-Contractor: Waskita Beton Precast PT, Mr Edison Sianturi  - Project Manager  (Address: Graha Dirgantara Building 2nd Floor, Jalan Protokol Halim Perdana Kusuma No 8, Jakarta Timur, Jakarta 13610, Indonesia Phone: 62 21 2983 8020 / 2983 8021 / 2983 8022 / 2983 8023 Email: info@waskitaprecast.co.id)', 3771429, 754286, 'Qualified', 'BID'),
(17, 7, 12, '2016-02-15', 45, 1, 0, 0, 'Test Dev', 'Testing, please ignore it.', 'Ok project Status', '2016-02-15', '2016-02-25', 'Bali', 'Sudirman', 'Test Address', 'Dev', 'Ok Project Stage', 'Dev developer', '2016-02-16', 'Dev developer', 'Dev developer', 'Dev developer', 'Dev developer', 10000000, 10000000, 'Qualified', 'Dev Assign ok Test'),
(18, 6, 2001, '2016-02-16', 45, 3, 0, 0, 'PROJECT KU DW04', 'PROJECT KU DW04', 'SDFSDFS', 'JAN 2016', 'MAR 2016', 'JAWA BARAT', 'BEKASI', 'DISINI', 'INDUSTRY', 'DSFSDFDS', 'SDFSFS', '2016-02-01', 'SDFSFS', 'SDFSFS', 'SDFSFS', 'SDFSFS', 3432423432, 23424234, 'Not Qualified', 'BID'),
(19, 2, 555555, '2016-02-16', 45, 3, 0, 0, 'Deb & Subha', 'fyukbvjujhyuyfi,l kuh uyhciouy ukjuguygk', 'Normal', '2016-02-18', '2016-02-25', 'Belur', 'Belur', 'sdjfgvdbjsbhvbvjcsdbvjhsdbzjvj', 'Dev Cat', 'Normal', 'general-des', '2016-02-18', 'General-man', 'General-eng', 'General', 'sub-general', 120000000, 150000000, 'Qualified', 'General-Assign'),
(20, 3, 1007, '2016-03-03', 45, 1, 0, 0, 'web', 'web web web web web web web web web web web web web web web web', 'web status', '01-03-2016', '01-03-2016', 'web town', 'p web town', 'web address', 'cat web', 'web stage', 'web designer', '2016-03-25', 'web manager', 'web consultant', 'web main contractor', 'web sub contractor', 1200000000, 1200000000, 'Qualified', 'web assign type'),
(21, 5, 0, '2016-03-03', 45, 4, 0, 0, 'jalan tol antasari depok', '', '', '05-03-2016', '05-03-2019', '', '', 'Antasari Depok', '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', ''),
(22, 6, 0, '2016-03-08', 2, 3, 0, 0, 'Test New Project', 'Proejct test email', '', 'Maret 2016', 'Maret 2017', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 0, 'Qualified', ''),
(23, 7, 2001, '2016-03-08', 45, 3, 0, 0, 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', '01 Jan 2015', '30 mei 2016', 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', '2016-03-01', 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', 'Blah blah blah', 500, 500, 'Not Qualified', 'bid'),
(24, 0, 21546002, '2016-03-08', 45, 3, 0, 0, 'D01:ROADWORKS - new (BAWEN - SOLO TOLL ROAD (SEMAR', '* Toll road construct (approx. 7.8 km length x 21 m width) * Concrete rigid pavement * Inner road shoulder / outer road shoulder * Earthworks * Surface marking * Traffic management', 'Tenders Called', 'July 2016', 'July 2017', 'Central Java', 'Boyolali', 'Boyolali - Kartasuro (STA 67+000 â€“ 74+800)', 'Infrastructure', 'Post tender', 'Architect: Grha Matra Desain Indonesia PT, Mr Benyamin Aris Nugraha  - Director  (Address: Jalan Budi Raya No.7 E, Kemanggisan, Jakarta, Jakarta 11410, Indonesia Phone: 62 21 5366 6277 Email: gmdi.konsultan@gmail.com) Portal Engineering Perkasa PT, Mr Jackson OH Mboe  - Director  (Address: Jalan Sungai Tami No. 1B Dok VIII, Jayapura, Papua 99116, Indonesia Phone: 62 967 543 363 Email: portal_eng@yahoo.com)', '0000-00-00', 'Developer: Hutama Karya (Persero) PT - Pengembangan Jalan Tol (JT HAKA), Mr Rizal Sucipto  - Kepala Divisi Pengembangan Jalan Tol  (Address: Hutama Karya Building 6th Floor, Jalan M.T. Haryono Kavling 8, Jakarta Timur, Jakarta 13630, Indonesia Phone: 62 21 819 3708 ext 679) ; Mr Ilham D Satria  - Project Manager  (Address: Hutama Karya Building 6th Floor, Jalan M.T. Haryono Kavling 8, Jakarta Timur, Jakarta 13630, Indonesia Phone: 62 21 819 3708 ext 679) ; Mr Krisna Aditya Yudha  - Procurment Staff  (Address: Hutama Karya Building 6th Floor, Jalan M.T. Haryono Kavling 8, Jakarta Timur, Jakarta 13630, Indonesia Phone: 62 21 819 3708 ext 679)', 'Environmental Impact Assessment: Kanta Karya Utama PT, Mr Zaenal Mustofa  - Director  (Address: Jalan Duren Tiga Selatan VII No. 9, Warung Buncit, Jakarta Selatan, Jakarta 12760, Indonesia Phone: 62 21 798 7946 Email: kantakarya@gmail.com) || Civil Engineer: Perentjana Djaja PT, Ms Irza Ratna Sari  - Head of Toll Road Division  (Address: Wisma Pede 3 - 4th Floor, Jalan M.T. Haryono, Kavling 17, Jakarta Selatan, Jakarta 12810, Indonesia Phone: 62 21 829 0442 / 830 1101 Email: office@perentjanadjaja.co.id) || Environmental Impact Assessment: Kanta Karya Utama PT, Mr Opik Hidayat  - Technical Division / Purchasing Staff  (Address: Jalan Duren Tiga Selatan VII No. 9, Warung Buncit, Jakarta Selatan, Jakarta 12760, Indonesia Phone: 62 21 798 7946 Email: kantakarya@gmail.com)', '?', '?', 1000000, 200000, '?', 'BID'),
(25, 0, 212989002, '2016-03-08', 45, 1, 0, 0, 'D02:ROADWORKS - new (BAWEN - SOLO TOLL ROAD (SEMAR', '* Toll road construct (approx. 24.5 km length x 21 m width) * Concrete rigid pavement * Inner road shoulder / outer road shoulder * Road separator * Earthworks * Surface marking', 'Tenders Called', 'July 2016', 'July 2017', 'Central Java', 'Salatiga', 'Salatiga - Boyolali (STA 39+000 â€“ 63+500)', 'Infrastructure', 'Post tender', 'Architect: Architeam Design Center PT, Mr Soni Sumarsono  - Chief Architect  (Address: Jalan Tamansari No. 70, Bandung, West Java 40132, Indonesia Phone: 62 22 250 2365 Email: architeamdc@gmail.com) || Master Planner: Indulexco PT - Cabang Balikpapan, Mr Sudjatmiko  - Project Director  (Address: Jalan R. E. Martadinata No. 8, Mekar Sari, Balikpapan, East Kalimantan 76122, Indonesia Phone: 62 542 422 961) || Architect: Architeam Design Center PT, Mr Supriyanto  - Architect  (Address: Jalan Tamansari No. 70, Bandung, West Java 40132, Indonesia Phone: 62 22 250 2365 Email: architeamdc@gmail.com) || Master Planner: Indulexco PT - Cabang Balikpapan, Mr Bonti  - Architect  (Address: Jalan R. E. Martadinata No. 8, Mekar Sari, Balikpapan, East Kalimantan 76122, Indonesia Phone: 62 542 422 961)', '0000-00-00', 'Developer: Citra Marga Nusaphala Persada Tbk PT, Mr Andi Mayoriko  - Procurement Manager & Tender  (Address: Gedung CMNP Lantai Dasar, Jalan Komplek L Yos Sudarso Kav 28, Sunter Agung, Jakarta Utara, Jakarta 14350, Indonesia Phone: 62 21 6530 6930 / 6530 6369) || Government Implementing Agency: Kementerian Pekerjaan Umum dan Perumahan Rakyat Indonesia - Badan Pengatur Jalan Tol (BPJT), Mr Achmad Gani Ghazali A  - Head Officer  (Address: Gedung Balai Krida, Jalan Iskandarsyah Raya No. 35, Jakarta, Jakarta 12110, Indonesia Phone: 62 21 725 8063) || Pre-Qualification Office: ; Mr Eka Priya Anas  - Head of Tender Committee  (Address: Gedung Balai Krida, Jalan Iskandarsyah Raya No. 35, Jakarta, Jakarta 12110, Indonesia Phone: 62 21 725 8063) || Developer: Jasa Marga (Persero) Tbk PT, Ms Truli Nawangsasi  - Head of Toll Road Business Development Division  (Address: Plaza Tol Taman Mini Indonesia Indah, Jalan Tol Jagorawi, Jakarta, Jakarta 13550, Indonesia Phone: 62 21 841 3630 / 841 3526 Email: jasmar@jasamarga.com) Bangun Tjipta Sarana PT, Mr Faturahman  - Project Director  (Address: Gedung Bangun Tjipta 6th Floor, Jalan Gatot Subroto Kav 54, Kuningan Timur, Setiabudi, Jakarta Selatan, Jakarta 12950, Indonesia Phone: 62 21 570 9091 / 5365 3078 / 5367 2244)', '?', '?', '?', 565600, 113120, '?', 'BID'),
(26, 0, 215071002, '2016-03-08', 45, 1, 0, 0, 'D03:ROADWORKS - new (BAWEN - SOLO TOLL ROAD (SEMAR', '* Toll road construct (approx. 17.3 km length x 21 m width) * Concrete rigid pavement * Inner road shoulder / outer road shoulder * Earthworks * Surface marking * Traffic management', 'Tenders Called', 'July 2016', 'July 2017', 'Central Java', 'Salatiga', 'Bawen - Salatiga (STA 23+100 â€“ 40+400)', 'Infrastructure', 'Post tender', 'Master Planner: Atrya Swascipta Rekayasa PT, Mr Agus Rochimat  - Director  (Address: Jalan Cikapayang No. 11, Dago, Bandung, West Java 40124, Indonesia Phone: 62 22 421 4122 Email: global@atrya.co.id)', '0000-00-00', 'Developer: Kresna Kusuma Dyandra Marga PT - Waskita Toll Road, Mr Herwi Diakto  - Director  (Address: Ruko Exclusive, Jalan Raden Inten Kav 21, Duren Sawit, Kalimalang, Jakarta Timur, Jakarta 11450, Indonesia Phone: 62 21 8661 5577 Email: kamilla.rambitan@gmail.com) ; Mr Purma Yoserizal  - Planning Manager  (Address: Ruko Exclusive, Jalan Raden Inten Kav 21, Duren Sawit, Kalimalang, Jakarta Timur, Jakarta 11450, Indonesia Phone: 62 21 8661 5577 Email: kamilla.rambitan@gmail.com) ; Mr Dwi Pratikto  - Project Manager  (Address: Ruko Exclusive, Jalan Raden Inten Kav 21, Duren Sawit, Kalimalang, Jakarta Timur, Jakarta 11450, Indonesia Phone: 62 21 8661 5577 Email: kamilla.rambitan@gmail.com)', 'Design Engineer: Buana Archicon PT, Mr Arif Palurui  - Project Coordinator  (Address: Gedung Buana Lantai 2, Jalan Ciputat Raya No. 163 Pondok Pinang, Jakarta Selatan, Jakarta 12310, Indonesia Phone: 62 21 7581 6606 Email: buanarchie@yahoo.com)', 'Piling & Foundation Contractor: Berdikari Pondasi Perkasa PT, Mr Ir. Mahmud  - Project Manager  (Address: Jalan Pangeran Tubagus Angke No. 99, Jelambar, Jakarta Barat, Jakarta 11460, Indonesia Phone: 62 21 566 2756 / 566 4415 / 566 3952 Email: berdikari_pp@telkom.net) || Road Work Contractor: Waskita Karya (Persero) Tbk PT - Divisi Sipil, Mr Sigit Purwanto  - Project Manager  (Address: Gedung Waskita 5th Floor, Jalan M.T. Haryono Kavling No. 10, Jakarta, Jakarta 13340, Indonesia Phone: 62 21 819 8158 / 819 1617 Email: div-sipil@waskita.co.id) || Piling & Foundation Contractor: Grant Surya Multi Sarana PT, Mr Taufik Akbar  - Project Manager  (Address: Jalan Kapuk Kamal Muara No. 8D, Kompleks Kapuk Berlian, Penjaringan, Jakarta Utara, Jakarta 14470, Indonesia Phone: 62 21 5595 1180 Email: grant_surya@yahoo.com) || Road Work Contractor: Waskita Karya (Persero) Tbk PT - Divisi Sipil, Ms Diana Ulfi  - Staff Bagian Pengendalian  (Address: Gedung Waskita 5th Floor, Jalan M.T. Haryono Kavling No. 10, Jakarta, Jakarta 13340, Indonesia Phone: 62 21 819 8158 / 819 1617 Email: div-sipil@waskita.co.id)', 'Sub-Contractor: Waskita Beton Precast PT, Mr Edison Sianturi  - Project Manager  (Address: Graha Dirgantara Building 2nd Floor, Jalan Protokol Halim Perdana Kusuma No 8, Jakarta Timur, Jakarta 13610, Indonesia Phone: 62 21 2983 8020 / 2983 8021 / 2983 8022 / 2983 8023 Email: info@waskitaprecast.co.id)', 3771429, 754286, 'Qualified', 'BID'),
(27, 3, 0, '2016-03-08', 45, 1, 0, 0, 'Project ABC', 'Project ABC site DEF', '', 'Mar 2016', 'Sep 2016', 'Sulawesi Utara', 'Manado', 'Site DEF ', '', '', 'PT ABC', '0000-00-00', '', '', '', '', 0, 0, '', ''),
(28, 4, 0, '2016-03-08', 45, 8, 0, 0, 'Project ABD', 'Project ABD site EFG', '', 'Apr 2016', 'Sep 2016', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', ''),
(29, 2, 0, '2016-03-08', 45, 1, 0, 0, 'Pemasangan Turap Kali Sekretaris', ' Pemasangan Turap Kali Sekretaris', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', ''),
(30, 0, 0, '2016-03-08', 45, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', ''),
(31, 1, 0, '2016-03-08', 45, 1, 0, 0, 'Project A Team', 'Project A Team', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', ''),
(32, 0, 148290002, '2016-03-17', 45, 1, 0, 0, 'ROADWORKS - upgrade (JALAN SENTUL - KISARAP ROAD I', '* Road upgrade (approx. 2.5 km length x 7 m width) * Concrete rigid pavement * Surface line marking', 'Tenders Called', '42461', 'December 2016', 'Banten', 'Serang', 'Kecamatan Cikeusal', 'Infrastructure', 'Post tender', 'architechdesigner', '0000-00-00', 'Government Implementing Agency: Dinas Pekerjaan Umum Kabupaten Serang, Mr Irawan Noor  - Acting as Head Officer  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363) || Tender Office: ; Mr Bambang  - Member of Tender Committee  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363)', 'eng_consultan', 'maincontractor', 'subcontractor', 45000, 9000, 'Good', 'No'),
(33, 0, 148331002, '2016-03-17', 45, 3, 0, 0, 'ROADWORKS - upgrade (JALAN MALABAR - JUNTI ROAD IM', '* Road upgrade (approx. 2 km length x 7 m width) * Concrete rigid pavement * Surface line marking', 'Tenders Called', '42461', 'December 2016', 'Banten', 'Serang', 'Jalan Malabar - Junti, Kecamatan Bandung', 'Infrastructure', 'Post tender', 'architechdesigner', '0000-00-00', 'Government Implementing Agency: Dinas Pekerjaan Umum Kabupaten Serang, Mr Irawan Noor  - Acting as Head Officer  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363) || Tender Office: ; Mr Bambang  - Member of Tender Committee  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363)', 'eng_consultan', 'PT. UTOMO MARGO', 'CV. MARGO UTOMO', 45000, 9000, 'Good', 'No'),
(34, 0, 148334002, '2016-03-17', 45, 1, 0, 0, 'ROADWORKS - upgrade (JALAN JAWILAN - PAMARAYAN ROA', '* Road upgrade (approx. 2 km length x 6 m width) * Concrete rigid pavement * Surface line marking', 'Tenders Called', '42461', 'December 2016', 'Banten', 'Serang', 'Jalan Jawilan - Pamarayan, Kecamatan Jawilan', 'Infrastructure', 'Post tender', 'architechdesigner', '0000-00-00', 'Government Implementing Agency: Dinas Pekerjaan Umum Kabupaten Serang, Mr Irawan Noor  - Acting as Head Officer  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363) || Tender Office: ; Mr Bambang  - Member of Tender Committee  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363)', 'eng_consultan', 'maincontractor', 'subcontractor', 4850, 970, 'Good', 'No'),
(35, 0, 148385002, '2016-03-17', 45, 3, 0, 0, 'ROADWORKS - upgrade (JALAN SENTUL - SILEBU ROAD IM', '* Road construct (approx. 1.2 km length x 6 m width) * Hotmix asphalt overlay * Earthworks * Surface line marking', 'Tenders Called', '42461', 'December 2016', 'Banten', 'Kabupaten Serang', 'Jalan Sentul - Silebu, Kecamatan Kragilan', 'Infrastructure', 'Post tender', 'architechdesigner', '0000-00-00', 'Government Implementing Agency: Dinas Pekerjaan Umum Kabupaten Serang, Mr Irawan Noor  - Acting as Head Officer  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363) || Tender Office: ; Mr Bambang  - Member of Tender Committee  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363)', 'eng_consultan', 'maincontractor', 'subcontractor', 4850, 970, 'Good', 'No'),
(36, 1, 148389002, '2016-03-17', 45, 1, 0, 0, 'ROADWORKS - upgrade (JALAN GORDA - WEWULUH ROAD IM', '* Road upgrade (approx. 1.5 km length x 7 m width) * Hotmix asphalt overlay * Surface marking', 'Tenders Called', '42461', 'December 2016', 'Banten', 'Kabupaten Serang', 'Jalan Gorda - Wewuluh, Kecamatan Kibin', 'Infrastructure', 'Post tender', 'architechdesigner', '0000-00-00', 'Government Implementing Agency: Dinas Pekerjaan Umum Kabupaten Serang, Mr Irawan Noor  - Acting as Head Officer  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363) || Tender Office: ; Mr Bambang  - Member of Tender Committee  (Address: Jalan Sama''un Bakri, Serang, Banten 42100, Indonesia Phone: 62 254 200 431 / 200 363)', 'eng_consultan', 'maincontractor', 'subcontractor', 7680, 1536, 'Good', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_models`
--

CREATE TABLE IF NOT EXISTS `tdat_models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `idcategory` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tdat_models`
--

INSERT INTO `tdat_models` (`id`, `code`, `name`, `description`, `idcategory`) VALUES
(1, 'MO1', 'Model 1', 'Description Model 1', 2),
(2, 'MO2', 'Model 2', 'Description Model 2', 1),
(3, 'MO3', 'Model 3', 'Description Model 3', 3),
(4, 'EC210', 'VCE EXCAVATOR 20 TON', 'Excavator 20 Ton', 6),
(5, 'A40', 'ARTICULATE DUMP TRUCK 40 TON', 'ARTICULATE DUMP TRUCK 40 TON', 5),
(6, 'TIPPER', 'TIPPER', 'Tipper\n', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_privileges`
--

CREATE TABLE IF NOT EXISTS `tdat_privileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrole` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tdat_privileges`
--

INSERT INTO `tdat_privileges` (`id`, `idrole`, `name`, `value`) VALUES
(1, 1, 'TempSidebarSubmenu31', 'display:none;');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_productprices`
--

CREATE TABLE IF NOT EXISTS `tdat_productprices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) NOT NULL,
  `listprice` int(11) NOT NULL,
  `netprice` int(11) NOT NULL,
  `idcountry` int(11) NOT NULL,
  `idcity` int(11) NOT NULL,
  `validdatestart` date NOT NULL,
  `validdateend` date NOT NULL,
  `currency` varchar(10) NOT NULL,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_productprices`
--

INSERT INTO `tdat_productprices` (`id`, `idproduct`, `listprice`, `netprice`, `idcountry`, `idcity`, `validdatestart`, `validdateend`, `currency`, `active`) VALUES
(1, 1, 119000, 112233, 69, 12, '2015-12-23', '2015-12-25', 'IDR', 'Active'),
(2, 1, 112233, 112233, 69, 9, '2016-01-07', '2016-01-29', 'IDR', 'Active'),
(3, 3, 445544, 445544, 69, 36, '2016-01-08', '2016-01-26', 'IDR', 'Active'),
(4, 3, 6677557, 66778899, 69, 21, '2016-01-04', '2016-01-31', 'IDR', 'Active'),
(5, 2, 6677557, 66778899, 69, 16, '2015-12-22', '2015-12-23', 'IDR', 'Active'),
(6, 6, 600000000, 800000000, 69, 38, '2016-03-16', '2016-05-16', 'IDR', 'Active'),
(7, 5, 2147483647, 2147483647, 69, 38, '2016-03-17', '2016-06-16', 'IDR', 'Active'),
(8, 4, 1150000000, 1300000000, 69, 38, '2016-03-17', '2016-06-16', 'IDR', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_productpromotions`
--

CREATE TABLE IF NOT EXISTS `tdat_productpromotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `validdatestart` date NOT NULL,
  `validdateend` date NOT NULL,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tdat_productpromotions`
--

INSERT INTO `tdat_productpromotions` (`id`, `idproduct`, `name`, `description`, `validdatestart`, `validdateend`, `active`) VALUES
(1, 1, 'Promotion 1', 'Description Promotion 1', '2015-12-24', '2016-03-08', 'Active'),
(2, 2, 'Promotion 2', 'Description Promotion 2', '2015-12-18', '2015-12-19', 'Active'),
(3, 2, 'Promotion 3', 'Description Promotion 3', '2015-11-10', '2016-01-09', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_products`
--

CREATE TABLE IF NOT EXISTS `tdat_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `specification` text NOT NULL,
  `idmodel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tdat_products`
--

INSERT INTO `tdat_products` (`id`, `name`, `uom`, `specification`, `idmodel`) VALUES
(1, 'C&C 266 HP 6X2', 'unit', '<p><strong>DriveType:6x2</strong><br />Model&nbsp; : 2213257M3M1 Turbo Charging &amp; lntercooling<br />Engine : Sinotruk WD615.62 Euro ll Emission Standard<br />Horse Power&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 266 HP @220O rqm<br />Stroke &amp; Cylinder : 4 Stroke Direct lnjection, 6 Cylinder in Line<br />Transmission : HW ''19710T, Syncromesh 10 F / 2 R<br />Steering&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 2F8098<br />Frontaile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : HF9/9Ton<br />Rear axle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: HC16 Ratio 5.73 / 16 Ton<br />Tyre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 11.00-R 20 tube<br />With&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Safety belt, A/C<br />Rear a*e cooling system<br />Engine Protector<br />Standard Cabin, Without Sheeper Bed<br />Colour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : White</p>', 2),
(2, '371 TIPPER 6x4', 'unit', '<p>Model : ZZ3257N3847B Turbo Charging &amp; Intercooling<br />Engine : Sinotruk WD615.47 Euro II Emission Standard <br />Horse Power : 371 HP @ 2200 rpm according to DIN<br />Stroke &amp; Cylinder : 4 Stroke Direct Injection, 6 Cylinder in Line<br />Transmission : ZF 16S 1670, Syncromesh 10 F / 2 R<br />Steering : ZF8098<br />Front axle : HF9 / 9 Ton<br />Rear axle : HC16 Ratio 5.73 / 16 Ton<br />Tyre : 12.00-24 tube<br />With : Safety belt, A/C<br />Body size : 6000 &times; 2300 &times; 1500<br />Hyva Front Lift System<br />Rear axle cooling system<br />Engine Protector<br />Standard Cabin, Without Sheeper Bed<br />Total size : 8614 &times; 2496 &times; 3386 mm<br />Colour : White</p>', 3),
(3, 'E42', 'unit', '<ol style="list-style-type: upper-roman;">\n<li>OPERATIONAL SPECIFICATION<ol style="list-style-type: lower-roman;">\n<li>Operating Weight (w/ Canopy) 9246 lb (4194 kg)<br />Bucket Size 0.12 cubic meter<br />Ground Pressure 4.3 psi (29.8 kPA)<br />Bucket Breakout Fource 9105 lb-f (45000 N)<br />Travel Speed - Low Range 1.8 mph (2.9 km/h)<br />Travel Speed - High Range 2.8 mph (4.5 km/h)<br />Slew Speed 9.0 rpm</li>\n</ol></li>\n<li>WORKING RANGE<ol style="list-style-type: lower-roman;">\n<li>Max Blade Depth 16.6" (421 mm) standard<br />Max Reach at Ground Level 207.0" (5259 mm) standard<br />Max Digging Depth 126.2 " (3205 mm)<br />Max Digging Height 205.2" (5212 mm)</li>\n</ol></li>\n<li>ENGINE &amp; ELECTRICAL<ol style="list-style-type: lower-roman;">\n<li>Engine Make/Model Kubota V2403-M-DI-E3B-BC-5 Diesel<br />Cooling Liquid (Propolyene Glycol &amp; water mix)<br />Horsepower @ rated RPM 41.8 HP (31.2 kW) @ 1400 rpm<br />Torque @ rated RPM 115.1 ft-lb (155.9 Nm) @ 1400 rpm<br />Fuel Tank Capacity 21.1 GAL (79.9 L)<br />Protection Feature Machine Shutdown &amp; Battery Rundown</li>\n</ol></li>\n<li>STANDARD FEATURE&nbsp;<ol style="list-style-type: lower-roman;">\n<li>TOPS / ROPS Canopy<br />Control Console Locks<br />Dozer Blade - With Float<br />Engine/Hydraulic Monitor (w/ Shutdown)<br />Auxiliary Hydraulic (w/ Quick Couplers)<br />Control Pattern Selector Valve</li>\n</ol></li>\n</ol>\n<p>&nbsp;</p>', 1),
(4, 'EC210 BLC', 'UNIT', '<p><br />&nbsp;I.PERFORMANCE<br />&nbsp;&nbsp;&nbsp; Bucket Capacity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.92 cu meter (GP Bucket)<br />&nbsp;&nbsp;&nbsp; Operating Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 21,325 kg<br />&nbsp;&nbsp;&nbsp; Arm Length / Boom Length&nbsp;&nbsp; 2.9 m / 5.7 m<br />&nbsp;&nbsp;&nbsp; &nbsp;Max Swing Speed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;11.6 rpm (w/ automatic swing holding)<br />&nbsp;II.ENGINE&nbsp;&nbsp;&nbsp;&nbsp;VOLVO D6E Turbocharged &amp; Intercooled<br />&nbsp;&nbsp;&nbsp; &nbsp;Power (SAE J1995 Gross)&nbsp;&nbsp;&nbsp; 123 kW (167 HP) @ 1800 rpm<br />&nbsp;&nbsp;&nbsp;&nbsp; Torque&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Max 730 Nm @ 1350 rpm<br />&nbsp;&nbsp;&nbsp; &nbsp;Feature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Automatic Idling System<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electric Engine Shut Off<br />&nbsp;III.HYDRAULIC SYSTEM<br />&nbsp;&nbsp; &nbsp;Main Pump&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Max flow 2 x 200 l/min<br />&nbsp;&nbsp;&nbsp; Feature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contronic &amp; Auto-Sensing Work Mode<br />&nbsp;IV.UNDERCARRIAGE &amp; TRACKS<br />&nbsp;&nbsp;&nbsp; Shoe Width&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;800 mm Triple Grouser<br />&nbsp;&nbsp;&nbsp; Ground Pressure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.34 kg/cm3<br />&nbsp;&nbsp; &nbsp;Track Length&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;4170 mm (greased &amp; sealed chain)<br />&nbsp;V.SERVICES<br />&nbsp;&nbsp;&nbsp; Fuel Tank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 350 liter<br />&nbsp;&nbsp;&nbsp; Fuel Filler Pump&nbsp;Standard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 35 l / min<br />&nbsp;VI.ELECTRONIC CONTROL SYSTEMAdvanced Mode Control<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "Power Max" Mode<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Self Diagnostic System</p>', 4),
(5, 'A40F', 'UNIT', '<p>I.ENGINE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engine Type : Volvo D16FA<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6 Cyld with Turbo Charger Diesel Engine<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Directed Injection, Electronic Control<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Eng Retarder&nbsp; with VEB and EPG<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Power: (SAEJ 1349) 347 KW /465 HP<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Max. Torque. 2500 Nm/at 1050 RPM<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Displacement 16.1 L<br />II.DRIVE TRAIN :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Transmission type PT 2519<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Volvo Power Tronic Planettery 9F/3R.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dropbox IL2, with diff lock<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Axle Volvo type ARB H35/H40 and AWB<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Build in Automatic Track Control (ATC)<br />III.ELECTRIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Voltage 24 Volt (2X12Volt)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Battery 2X170AH, 80A Alternator<br />IV.HYDRAULIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Steering, Dumping,and&nbsp; Fan cooling<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Working Press.250 Bar<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hyd piston Pump No. 5 + 1 pump.<br />V.SERVICE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tires tube less 29.5 X R25&nbsp; E-3<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cabin with ROPS and FOPS<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AC and Radio CD player<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GPS control by Volvo Care track 3 years<br />VI.PERFORMANCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Body Heaped 2:1 : 24 M3<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Load Capacity : 39.000 Kg<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Load Dump Brake is Volvo patented<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Steering emergency ( ISO 5010 )</p>', 5),
(6, 'TIPPER 6X4  290 HP', 'UNIT', '<p>I.Basic Specification<br />&nbsp;&nbsp; Drive Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6 &times; 4&nbsp; GVW 41000 kg<br />&nbsp; &nbsp;Model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ZZ3257M3641<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Turbo Charging &amp; Intercooling<br />&nbsp;&nbsp; Engine&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sinotruk WD615.87<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Euro II Emission Standard<br />&nbsp;&nbsp; Maximum output&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 290 HP at 2200 rpm<br />&nbsp; &nbsp;Maximum torque&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1160Nm at 1100-1600 rpm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Bore&nbsp; 126mm, Stroke&nbsp; 130mm<br />&nbsp; &nbsp;Displacement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9.726L<br />&nbsp; &nbsp;Transmission&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HW 19710T, Synchromesh 10 F / 2 R<br />&nbsp;&nbsp; Steering&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ZF 8089<br />&nbsp; &nbsp;Front axle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; HF9 - 9 ton<br />&nbsp; &nbsp;Rear axle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; HC16 - 16 ton, Ratio 4.8<br />&nbsp; &nbsp;Tyre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 11.00-20 radial tyre<br />&nbsp;&nbsp; With&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Safety belt, A/C<br />&nbsp; &nbsp;Body size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 5600 &times; 2300 &times; 1500 mm<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Hyva Front Lift System<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Engine Protector<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Standard Cabin, Without Sleeper Bed<br />&nbsp; &nbsp;Overall Dimension&nbsp;&nbsp;&nbsp; 8214 &times; 2496 &times; 3386 mm<br />&nbsp;&nbsp; Colour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; White</p>\n<p>&nbsp;</p>', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_prospectaccessories`
--

CREATE TABLE IF NOT EXISTS `tdat_prospectaccessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idaccessories` int(11) NOT NULL,
  `idprospect` int(11) NOT NULL,
  `accquantity` int(11) NOT NULL DEFAULT '1',
  `is_display_pdf` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tdat_prospectaccessories`
--

INSERT INTO `tdat_prospectaccessories` (`id`, `idaccessories`, `idprospect`, `accquantity`, `is_display_pdf`) VALUES
(3, 3, 1, 1, 'Y'),
(4, 4, 1, 1, 'Y'),
(5, 2, 4, 1, 'Y'),
(6, 4, 4, 1, 'Y'),
(7, 3, 4, 1, 'Y'),
(15, 1, 1, 1, 'Y'),
(16, 2, 12, 1, 'Y'),
(17, 3, 12, 1, 'Y'),
(18, 2, 18, 1, 'Y'),
(19, 3, 18, 1, 'Y'),
(20, 4, 18, 1, 'Y'),
(21, 2, 19, 1, 'Y'),
(22, 3, 10, 1, 'Y'),
(23, 3, 20, 1, 'Y'),
(24, 1, 20, 1, 'Y'),
(25, 1, 22, 1, 'N'),
(26, 3, 22, 1, 'Y'),
(27, 2, 23, 3, 'N'),
(28, 3, 23, 3, 'Y'),
(30, 1, 23, 2, 'N'),
(31, 4, 23, 1, 'Y'),
(32, 2, 26, 2, 'Y'),
(33, 3, 26, 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_prospectalls`
--

CREATE TABLE IF NOT EXISTS `tdat_prospectalls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idprospect` int(11) NOT NULL,
  `customerpono` varchar(50) NOT NULL,
  `podate` date NOT NULL,
  `dpdate` date NOT NULL,
  `dpvalue` double NOT NULL,
  `bankcash` varchar(100) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `leasename` varchar(100) NOT NULL,
  `leasepono` varchar(100) NOT NULL,
  `leasevalue` double NOT NULL,
  `confirmdate` date NOT NULL,
  `deliverydate` date NOT NULL,
  `deliveryby` varchar(100) NOT NULL,
  `deliveryno` varchar(100) NOT NULL,
  `bastno` varchar(100) NOT NULL,
  `incentiveno` varchar(100) NOT NULL,
  `idstage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tdat_prospectalls`
--

INSERT INTO `tdat_prospectalls` (`id`, `idprospect`, `customerpono`, `podate`, `dpdate`, `dpvalue`, `bankcash`, `bankname`, `leasename`, `leasepono`, `leasevalue`, `confirmdate`, `deliverydate`, `deliveryby`, `deliveryno`, `bastno`, `incentiveno`, `idstage`) VALUES
(1, 1, '12345', '2016-01-23', '2016-01-31', 200000, 'Test', 'BCA', 'Leasing Company', '1010', 10000, '0000-00-00', '0000-00-00', '', '', '', '', 6),
(2, 5, '2345', '2016-01-24', '2016-02-04', 0, 'Test', 'Test-ok', 'IBF', 'IBF/01', 100000000, '0000-00-00', '0000-00-00', '', '', '', '', 0),
(4, 4, '456', '2016-01-25', '2016-02-01', 10000, 'Test', 'Mandiri', 'Leasing Company A', '1125', 800000, '0000-00-00', '0000-00-00', '', '', '', '', 6),
(7, 6, '54321', '2016-01-26', '0000-00-00', 0, '', '', 'Leasing Company A', '123', 900, '0000-00-00', '0000-00-00', 'test', '123', '12', '99', 7),
(10, 7, '1223', '2016-01-28', '0000-00-00', 0, '', '', 'TEST', '123', 100000000, '0000-00-00', '0000-00-00', 'test', '123', '12', '123456', 7),
(17, 9, '12222', '2016-02-23', '2016-02-17', 90, 'rrrr', 'BCA', 'Leasing Company B', '1010', 90000, '2016-02-10', '2016-02-29', 'Delivery Vendor', '10', '101111', '10', 7),
(18, 23, '909012', '2016-03-16', '2016-03-31', 100000000, 'BNI', 'BNI', 'Leasing dept', '90', 12, '0000-00-00', '0000-00-00', 'Test', '321', '3211', '3212', 7),
(19, 26, 'PO 021/001/16', '2016-03-08', '2016-03-08', 10000000, '', 'BCA', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', 5),
(20, 26, 'PO 021/001/16', '2016-03-08', '2016-03-14', 100000, 'cash test', 'name test', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', 0),
(21, 12, '123', '2016-03-15', '0000-00-00', 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', 4),
(22, 27, 'ABY/PO/HE/16/03/0001', '2016-03-17', '2016-03-17', 1, 'cash test', 'name test', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_prospecthistories`
--

CREATE TABLE IF NOT EXISTS `tdat_prospecthistories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idprospect` int(11) NOT NULL,
  `idsuspect` int(11) NOT NULL,
  `idsuspectdetail` int(11) NOT NULL,
  `quotationno` varchar(50) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `startdate` date NOT NULL,
  `expireddate` date NOT NULL,
  `currency` varchar(10) NOT NULL,
  `idstage` int(11) NOT NULL,
  `approveddate` date NOT NULL,
  `approvedby` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `quatity` int(11) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `unitvalue` int(11) NOT NULL,
  `transactionmodel` varchar(500) NOT NULL,
  `note1` varchar(500) NOT NULL,
  `note2` varchar(500) NOT NULL,
  `note3` varchar(500) NOT NULL,
  `note4` varchar(500) NOT NULL,
  `note5` varchar(500) NOT NULL,
  `desiciondate` date NOT NULL,
  `expecteddeliverydate` date NOT NULL,
  `customertype` varchar(100) NOT NULL,
  `level2` int(11) NOT NULL,
  `webpid` varchar(500) NOT NULL,
  `idsegment` int(11) NOT NULL,
  `odds` varchar(500) NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifieddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdat_prospectpromotions`
--

CREATE TABLE IF NOT EXISTS `tdat_prospectpromotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpromotion` int(11) NOT NULL,
  `idprospect` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_prospectpromotions`
--

INSERT INTO `tdat_prospectpromotions` (`id`, `idpromotion`, `idprospect`) VALUES
(1, 1, 23),
(2, 2, 23),
(4, 3, 24),
(5, 2, 24),
(7, 2, 8),
(8, 2, 26);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_prospects`
--

CREATE TABLE IF NOT EXISTS `tdat_prospects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsuspect` int(11) NOT NULL,
  `idsuspectdetail` int(11) NOT NULL,
  `quotationno` varchar(50) NOT NULL,
  `createddate` date NOT NULL,
  `createdby` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `startdate` date NOT NULL,
  `expireddate` date NOT NULL,
  `currency` varchar(10) NOT NULL,
  `idstage` int(11) NOT NULL,
  `approveddate` date NOT NULL,
  `approvedby` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `unitvalue` int(11) NOT NULL,
  `transactionmodel` varchar(500) NOT NULL,
  `note1` varchar(500) NOT NULL,
  `note2` varchar(500) NOT NULL,
  `note3` varchar(500) NOT NULL,
  `note4` varchar(500) NOT NULL,
  `note5` varchar(500) NOT NULL,
  `decisiondate` date NOT NULL,
  `expecteddeliverydate` date NOT NULL,
  `customertype` varchar(100) NOT NULL,
  `level2` int(11) NOT NULL,
  `webpid` varchar(500) NOT NULL,
  `idsegment` int(11) NOT NULL,
  `odds` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tdat_prospects`
--

INSERT INTO `tdat_prospects` (`id`, `idsuspect`, `idsuspectdetail`, `quotationno`, `createddate`, `createdby`, `idcompany`, `iduser`, `idbranch`, `idcustomer`, `description`, `startdate`, `expireddate`, `currency`, `idstage`, `approveddate`, `approvedby`, `idstatus`, `idproduct`, `productname`, `quantity`, `uom`, `unitvalue`, `transactionmodel`, `note1`, `note2`, `note3`, `note4`, `note5`, `decisiondate`, `expecteddeliverydate`, `customertype`, `level2`, `webpid`, `idsegment`, `odds`) VALUES
(1, 2, 1, '', '2015-12-03', 1, 4, 1, 3, 2, '', '0000-00-00', '0000-00-00', '', 6, '0000-00-00', 0, 15, 2, '', 12, '', 0, 'Rental', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 3, '50'),
(4, 2, 4, '', '2015-12-06', 1, 4, 1, 3, 2, '', '0000-00-00', '0000-00-00', '', 6, '0000-00-00', 0, 15, 1, '', 11, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 5, '50'),
(5, 3, 7, '', '2016-01-19', 45, 8, 45, 1, 3, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', 0, 15, 1, '', 20, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 4, '25'),
(6, 4, 8, '', '2016-01-26', 2, 5, 2, 1, 4, '', '0000-00-00', '0000-00-00', '', 7, '0000-00-00', 0, 15, 1, '', 2, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25'),
(7, 5, 9, '', '2016-01-26', 2, 3, 2, 4, 4, '', '0000-00-00', '0000-00-00', '', 7, '0000-00-00', 0, 15, 3, '', 5, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 2, '25'),
(8, 6, 10, '', '2016-01-31', 2, 2, 2, 1, 1, '', '2016-01-31', '2016-02-05', 'IDR', 8, '0000-00-00', 0, 15, 1, '', 4, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', 'Test', 2, 'ww', 1, '0'),
(9, 7, 11, '', '2016-02-01', 2, 3, 2, 1, 5, '', '0000-00-00', '0000-00-00', '', 7, '0000-00-00', 0, 15, 1, '', 12, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 4, '75'),
(10, 8, 12, '01/01/01', '2016-02-11', 45, 2, 45, 1, 6, '', '0000-00-00', '0000-00-00', 'IDR', 8, '0000-00-00', 0, 15, 1, '', 2, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', 'CUST GALAK', 0, '0000', 1, '25'),
(11, 9, 13, '', '2016-02-12', 2, 1, 2, 2, 7, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 1, '', 10, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '50'),
(12, 10, 15, '6CC/KSR /BR1 -54321 /02-2016', '2016-02-15', 2, 6, 2, 1, 8, '', '0000-00-00', '0000-00-00', '', 4, '0000-00-00', 0, 15, 1, '', 10, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', 'Test', 2, '12', 1, '50'),
(13, 2, 6, '4CC/CCI /BR3 -12345 /02-2016', '2016-02-15', 45, 4, 1, 3, 2, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 3, '', 16, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 6, '50'),
(14, 9, 14, '1CC/INTI /BR2 -54321 /02-2016', '2016-02-15', 45, 1, 2, 2, 7, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 3, '', 5, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 2, '50'),
(15, 10, 16, '6CC/KSR /BR1 -54321 /02-2016', '2016-02-15', 45, 6, 2, 1, 8, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 2, '', 10, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '50'),
(16, 2, 5, '4CC/CCI /BR3 -12345 /02-2016', '2016-02-15', 45, 4, 1, 3, 2, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 2, '', 15, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 2, '50'),
(17, 7, 17, '3CC/IPW /BR1 -54321 /02-2016', '2016-02-15', 45, 3, 2, 1, 5, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 2, '', 10, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 2, '75'),
(18, 11, 18, '8CC/INTA /BR1 -54321 /02-2016', '2016-02-15', 2, 8, 2, 1, 11, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 1, '', 5, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25'),
(19, 12, 19, '3CC/IPW /BR1 -11111 /02-2016', '2016-02-16', 45, 3, 45, 1, 12, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 1, '', 1, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '50'),
(20, 13, 20, '1CC/INTI /BR1 -AA/II-2016', '2016-02-16', 45, 1, 45, 1, 14, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 1, '', 10, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25'),
(21, 14, 21, '2CC/IPPS /BR2 -AA/II-2016', '2016-02-22', 2, 2, 45, 2, 15, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 3, '', 2, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25'),
(22, 15, 22, '1CC/INTI /BR1 -AA/II-2016', '2016-02-29', 2, 1, 45, 1, 10, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 3, '', 2, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 2, '25'),
(23, 16, 23, '1CC/INTI /BR1 -PM/III-2016', '2016-03-07', 2, 1, 2, 1, 17, '', '2016-03-07', '2016-03-29', 'IDR', 7, '0000-00-00', 0, 16, 1, '', 4, '', 2, 'New', '', '', '', '', '', '2016-03-08', '2016-03-31', 'TEST', 2, 'WW', 1, '25'),
(24, 17, 24, '3CC/IPW /BR1 -AA/III-2016', '2016-03-08', 45, 3, 45, 1, 19, '', '0000-00-00', '0000-00-00', 'IDR', 3, '0000-00-00', 0, 16, 1, '', 1, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', 'HGHGFJHF', 0, '1234', 1, '25'),
(25, 18, 25, '3CC/IPW /BR1 -AA/III-2016', '2016-03-08', 45, 3, 45, 1, 20, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 1, '', 1, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25'),
(26, 19, 26, '2CC/IPPS /BR3 -AA/III-2016', '2016-03-08', 45, 2, 45, 3, 22, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', 0, 15, 2, '', 1, '', 200000000, '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'type cust', 0, '123', 0, '25'),
(27, 20, 27, '3CC/IPW /BR1 -AA/III-2016', '2016-03-17', 45, 3, 45, 1, 24, '', '0000-00-00', '0000-00-00', '', 5, '0000-00-00', 0, 15, 6, '', 1, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '1114', 0, 'IPW-2016', 1, '25'),
(28, 21, 28, '8/IPW /BR2 -AA/III-2016', '2016-03-18', 45, 3, 45, 2, 25, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 1, '', 10, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25'),
(29, 22, 29, '005/IPPS /BR4 -AA/III-2016', '2016-03-18', 45, 2, 45, 4, 27, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 2, '', 10, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '50'),
(30, 22, 29, '006/IPPS /BR4 -AA/III-2016', '2016-03-21', 45, 2, 45, 4, 27, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 2, '', 10, '', 0, 'Used', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '50'),
(31, 23, 30, '003/KSR /BR1 -PM/III-2016', '2016-03-22', 2, 6, 2, 1, 18, '', '0000-00-00', '0000-00-00', '', 3, '0000-00-00', 0, 15, 5, '', 10, '', 0, 'New', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, '', 1, '25');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_quotationnotes`
--

CREATE TABLE IF NOT EXISTS `tdat_quotationnotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prospect_id` int(11) NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `quotation_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tdat_quotationnotes`
--

INSERT INTO `tdat_quotationnotes` (`id`, `prospect_id`, `quotation_id`, `quotation_desc`) VALUES
(12, 22, 4, '12 months / 2500 hours whichever comes first'),
(3, 20, 2, 'Ready stock Jakarta (Subject to Prior Sales)ds'),
(13, 22, 5, '15 days'),
(11, 22, 3, '20% Down Payment & 80% Cash or thru Leasing'),
(7, 12, 4, '12 months / 2500 hours whichever comes first'),
(15, 23, 2, 'Ready stock Jakarta (Subject to Prior Sales)ds'),
(16, 23, 4, '12 months / 2500 hours whichever comes first'),
(14, 23, 1, 'The price offered is LDP Jakarta, include 10% VAT'),
(18, 12, 2, 'Ready stock Jakarta (Subject to Prior Sales)ds'),
(17, 12, 1, 'The price offered is LDP Jakarta, include 10% VAT'),
(23, 26, 2, 'Ready stock Jakarta (Subject to Prior Sales)ds'),
(21, 11, 2, 'Ready stock Jakarta (Subject to Prior Sales)ds'),
(20, 14, 1, 'The price offered is LDP Jakarta, include 10% VAT'),
(31, 24, 1, 'The price offered is LDP Jakarta, include 10% VAT'),
(27, 26, 4, '12 months / 2500 hours whichever comes first');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_quotations`
--

CREATE TABLE IF NOT EXISTS `tdat_quotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idprospect` int(11) NOT NULL,
  `idquotationtext` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tdat_quotations`
--

INSERT INTO `tdat_quotations` (`id`, `idprospect`, `idquotationtext`, `description`) VALUES
(1, 1, 0, ''),
(4, 4, 0, ''),
(5, 5, 0, ''),
(6, 6, 0, ''),
(7, 7, 0, ''),
(8, 8, 0, ''),
(9, 9, 0, ''),
(10, 10, 0, ''),
(11, 11, 0, ''),
(12, 12, 0, ''),
(13, 13, 0, ''),
(14, 14, 0, ''),
(15, 15, 0, ''),
(16, 16, 0, ''),
(17, 17, 0, ''),
(18, 18, 0, ''),
(19, 19, 0, ''),
(20, 20, 0, ''),
(21, 21, 0, ''),
(22, 22, 0, ''),
(23, 23, 0, ''),
(24, 24, 0, ''),
(25, 25, 0, ''),
(26, 26, 0, ''),
(27, 27, 0, ''),
(28, 28, 0, ''),
(29, 29, 0, ''),
(30, 30, 0, ''),
(31, 31, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_quotationtext`
--

CREATE TABLE IF NOT EXISTS `tdat_quotationtext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_quotationtext`
--

INSERT INTO `tdat_quotationtext` (`id`, `name`, `description`) VALUES
(1, 'Price per-unit', 'The price offered is LDP Jakarta, include 10% VAT'),
(2, 'Delivery', 'Ready stock Jakarta (Subject to Prior Sales)'),
(3, 'Payment', '20% Down Payment & 80% Cash or thru Leasing'),
(4, 'Warranty', '12 months / 2500 hours whichever comes first'),
(5, 'Validity', '15 days'),
(6, 'WARRANTY', 'Unlimited Hours or one (1) Year, which ever comes first'),
(7, 'TRAINING', 'Free Operational & Maintenance Training'),
(8, 'SERVICE', 'Free periodic service inspection within 12 months');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_roles`
--

CREATE TABLE IF NOT EXISTS `tdat_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `maxdiscount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_roles`
--

INSERT INTO `tdat_roles` (`id`, `name`, `description`, `maxdiscount`) VALUES
(1, 'General', 'General', 0),
(2, 'Salesman', 'Salesman', 5),
(3, 'Head of Branch', 'Head of Branch', 7),
(4, 'HO Sales Manager', 'HO Sales Manager', 10),
(5, 'HO Director / GM', 'HO Director / GM', 15),
(6, 'Marketing', 'Marketing', 12),
(7, 'Administrator', 'Administrator', 0),
(8, 'Holding', 'Holding', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_salesactivities`
--

CREATE TABLE IF NOT EXISTS `tdat_salesactivities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idvisitschedule` int(11) NOT NULL,
  `idlead` int(11) NOT NULL,
  `idsuspect` int(11) NOT NULL,
  `idprospect` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `datetimestart` datetime NOT NULL,
  `datetimeend` datetime NOT NULL,
  `idvisitpurpose` int(11) NOT NULL,
  `visitresult` text NOT NULL,
  `nextaction` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tdat_salesactivities`
--

INSERT INTO `tdat_salesactivities` (`id`, `idvisitschedule`, `idlead`, `idsuspect`, `idprospect`, `iduser`, `idcustomer`, `datetimestart`, `datetimeend`, `idvisitpurpose`, `visitresult`, `nextaction`) VALUES
(1, 1, 0, 0, 0, 45, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'sssss', 'aaaaabbb'),
(2, 1, 0, 0, 26, 45, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'sssss', 'aaaaabbb');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_salescustomers`
--

CREATE TABLE IF NOT EXISTS `tdat_salescustomers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcustomer` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `assigndate` date NOT NULL,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tdat_salescustomers`
--

INSERT INTO `tdat_salescustomers` (`id`, `idcustomer`, `iduser`, `idcompany`, `idbranch`, `assigndate`, `active`) VALUES
(1, 1, 2, 0, 0, '2015-12-03', 'Active'),
(2, 2, 45, 0, 0, '2015-12-03', 'Active'),
(3, 2, 2, 0, 0, '2015-12-03', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_salestargethistories`
--

CREATE TABLE IF NOT EXISTS `tdat_salestargethistories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsalestarget` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `targetyear` int(11) NOT NULL,
  `yearplanvalue` int(11) NOT NULL,
  `yearplanqty` int(11) NOT NULL,
  `monthplanvalue` int(11) NOT NULL,
  `monthplanqty` int(11) NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdat_salestargets`
--

CREATE TABLE IF NOT EXISTS `tdat_salestargets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `targetyear` int(11) NOT NULL,
  `yearplanvalue` int(11) NOT NULL,
  `yearplanqty` int(11) NOT NULL,
  `monthplanvalue` int(11) NOT NULL,
  `monthplanqty` int(11) NOT NULL,
  `actyear` int(11) NOT NULL,
  `yearactvalue` varchar(30) NOT NULL,
  `yearactqty` int(11) NOT NULL,
  `monthactvalue` varchar(30) NOT NULL,
  `monthactqty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tdat_salestargets`
--

INSERT INTO `tdat_salestargets` (`id`, `iduser`, `targetyear`, `yearplanvalue`, `yearplanqty`, `monthplanvalue`, `monthplanqty`, `actyear`, `yearactvalue`, `yearactqty`, `monthactvalue`, `monthactqty`) VALUES
(1, 1, 2014, 11500000, 11, 9500000, 5, 2014, '10500000', 9, '8900000', 4),
(2, 2, 2015, 12000000, 12, 9000000, 3, 2015, '10000000', 10, '8500000', 2),
(3, 2, 2016, 13000000, 10, 8500000, 4, 2016, '11000000', 7, '7500000', 3),
(4, 2, 2016, 200000, 10, 10000, 1, 2016, '650000', 20, '25000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_segments`
--

CREATE TABLE IF NOT EXISTS `tdat_segments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `segment` varchar(100) NOT NULL,
  `subsegment` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tdat_segments`
--

INSERT INTO `tdat_segments` (`id`, `segment`, `subsegment`, `description`) VALUES
(1, 'Segment 1', 'Subsegment 1', 'Desc1'),
(2, 'Segment 2', 'Subsegment 2', 'Desc2'),
(3, 'Segment 3', 'Subsegment 3', 'Desc3'),
(4, 'Segment 4', 'Subsegment 4', 'Desc4'),
(5, 'Segment 5', 'Subsegment 5', 'Desc5'),
(6, 'Segment 6', 'Subsegment 6', 'Desc6');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_sources`
--

CREATE TABLE IF NOT EXISTS `tdat_sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_sources`
--

INSERT INTO `tdat_sources` (`id`, `code`, `name`, `description`) VALUES
(1, 'PI', 'Paid info', 'Description Source 1'),
(2, 'RW', 'Referral / word of Mouth', 'Description Source 2'),
(3, 'ISE', 'Internet Web Site / Search Engine', 'Description Source 3'),
(4, 'JSW', 'Job SIte / Work Site', 'Description Source 4'),
(5, 'HA', 'Highway Advertisement', 'Description Source 5'),
(6, 'ETS', 'Exhibition / Trade Show', 'description'),
(7, 'PS', 'Product Seminar', 'Description'),
(8, 'NM', 'Newspaper / Magazine', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_stages`
--

CREATE TABLE IF NOT EXISTS `tdat_stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tdat_stages`
--

INSERT INTO `tdat_stages` (`id`, `code`, `name`, `description`) VALUES
(1, 'LEA', 'Leads', 'Leads'),
(2, 'SUS', 'Suspects', 'Suspects'),
(3, 'PRO', 'Prospects', 'Prospects'),
(4, 'OOH', 'Order On Hand', 'Order On Hand'),
(5, 'VLI', 'Very Likely', 'Very Likely'),
(6, 'OCO', 'Order Confirmed', 'Order Confirmed'),
(7, 'DEL', 'Delivery', 'Delivery'),
(8, 'LOS', 'Loss', 'Loss');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_statuses`
--

CREATE TABLE IF NOT EXISTS `tdat_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idstage` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tdat_statuses`
--

INSERT INTO `tdat_statuses` (`id`, `idstage`, `code`, `name`, `description`) VALUES
(1, 1, 'OPE', 'Open', 'Lead is Open'),
(2, 1, 'BID', 'Bid/Pick-up', 'Lead is Bid/Pick-up'),
(3, 1, 'VER', 'Verified', 'Lead is Verified'),
(4, 1, 'DIS', 'Disqualified', 'Lead is Disqualified'),
(5, 1, 'CLO', 'Closed', 'Lead is Closed'),
(6, 2, 'ATC', 'Attempted to Contact', 'Suspect is Attempted to Contact'),
(7, 2, 'CIF', 'Contact in Future', 'Suspect is Contact in Future'),
(8, 2, 'CON', 'Contacted', 'Suspect is Contacted'),
(9, 2, 'NCO', 'Not Contacted', 'Suspect is Not Contacted'),
(10, 2, 'PQU', 'Pre Qualified', 'Suspect is Pre Qualified'),
(11, 2, 'NST', 'Not Started', 'Suspect is Not Started'),
(12, 2, 'DEF', 'Deferred', 'Suspect is Deferred'),
(13, 2, 'WOS', 'Waiting on Someone Else', 'Suspect is Waiting on Someone Else'),
(14, 2, 'NAS', 'Need Analysis', 'Suspect is Need Analysis'),
(15, 3, 'NRE', 'Negotiation/Review', 'Prospect is Negotiation/Review'),
(16, 3, 'PPQ', 'Proposal/Price Quote', 'Prospect is Proposal/Price Quote'),
(17, 3, 'VPR', 'Value Proposition', 'Prospect is Value Proposition'),
(18, 3, 'NAP', 'Need Analysis', 'Prospect is Need Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_suspectdetails`
--

CREATE TABLE IF NOT EXISTS `tdat_suspectdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) NOT NULL,
  `idsuspect` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `transactionmodel` varchar(50) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `odds` varchar(5000) NOT NULL,
  `idsegment` int(11) NOT NULL,
  `stage` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tdat_suspectdetails`
--

INSERT INTO `tdat_suspectdetails` (`id`, `idproduct`, `idsuspect`, `quantity`, `uom`, `transactionmodel`, `idstatus`, `odds`, `idsegment`, `stage`) VALUES
(1, 2, 2, 12, 'unit', 'Rental', 6, '50', 3, 'prospect'),
(4, 1, 2, 11, 'unit', 'Used', 6, '50', 5, 'prospect'),
(5, 2, 2, 15, 'unit', 'Used', 6, '50', 2, 'prospect'),
(6, 3, 2, 16, 'unit', 'New', 6, '50', 6, 'prospect'),
(7, 1, 3, 20, 'UOM', 'Used', 6, '25', 4, 'prospect'),
(8, 1, 4, 2, 'UOM', 'New', 6, '25', 1, 'prospect'),
(9, 3, 5, 5, 'UOM', 'Used', 6, '25', 2, 'prospect'),
(10, 1, 6, 4, 'unit', 'New', 6, '0', 1, 'prospect'),
(11, 1, 7, 12, 'unit', 'New', 6, '75', 4, 'prospect'),
(12, 1, 8, 2, 'unit', 'New', 6, '25', 1, 'prospect'),
(13, 1, 9, 10, 'unit', 'New', 6, '50', 1, 'prospect'),
(14, 3, 9, 5, 'unit', 'New', 6, '50', 2, 'prospect'),
(15, 1, 10, 10, 'unit', 'New', 6, '50', 1, 'prospect'),
(16, 2, 10, 10, 'unit', 'New', 6, '50', 1, 'prospect'),
(17, 2, 7, 10, 'unit', 'Used', 6, '75', 2, 'prospect'),
(18, 1, 11, 5, 'unit', 'New', 6, '25', 1, 'prospect'),
(19, 1, 12, 1, 'unit', 'New', 9, '50', 1, ''),
(20, 1, 13, 10, 'unit', 'New', 6, '25', 1, 'prospect'),
(21, 3, 14, 2, 'unit', 'New', 6, '25', 1, 'prospect'),
(22, 3, 15, 2, 'unit', 'New', 6, '25', 2, 'prospect'),
(23, 1, 16, 4, 'unit', 'New', 6, '25', 1, 'prospect'),
(24, 1, 17, 1, 'unit', 'New', 6, '25', 1, 'prospect'),
(25, 1, 18, 1, 'unit', 'New', 6, '25', 1, 'prospect'),
(26, 2, 19, 1, 'unit', '', 13, '25', 0, 'prospect'),
(27, 6, 20, 1, 'UNIT', 'New', 8, '25', 1, 'prospect'),
(28, 1, 21, 10, 'unit', 'New', 6, '25', 1, 'prospect'),
(29, 2, 22, 10, 'unit', 'Used', 14, '50', 1, 'prospect'),
(30, 5, 23, 10, 'UNIT', 'New', 6, '25', 1, 'prospect');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_suspecthistories`
--

CREATE TABLE IF NOT EXISTS `tdat_suspecthistories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsuspect` int(11) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `idlead` int(11) NOT NULL,
  `idleaddetail` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `idstage` int(11) NOT NULL,
  `customerplanned` varchar(1000) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `modifieddate` date NOT NULL,
  `modifiedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdat_suspects`
--

CREATE TABLE IF NOT EXISTS `tdat_suspects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createddate` date NOT NULL,
  `createdby` varchar(30) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `idlead` int(11) NOT NULL,
  `idleaddetail` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `idstage` int(11) NOT NULL,
  `customerplanned` varchar(1000) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tdat_suspects`
--

INSERT INTO `tdat_suspects` (`id`, `createddate`, `createdby`, `idcompany`, `idbranch`, `idlead`, `idleaddetail`, `iduser`, `description`, `idstage`, `customerplanned`, `idcustomer`) VALUES
(2, '2015-12-03', '1', 4, 3, 1, 1, 1, '', 3, 'Customer Planned 2', 2),
(3, '2016-01-19', '45', 8, 1, 2, 4, 45, '', 4, 'Aetra', 3),
(4, '2016-01-26', '2', 5, 1, 3, 5, 2, '', 4, 'yes', 4),
(5, '2016-01-26', '2', 3, 4, 7, 6, 2, '', 4, '', 4),
(6, '2016-01-31', '2', 2, 1, 4, 7, 2, '', 8, '', 1),
(7, '2016-02-01', '2', 3, 1, 10, 8, 2, '', 3, '', 5),
(8, '2016-02-11', '45', 2, 1, 14, 10, 45, '', 8, '', 6),
(9, '2016-02-12', '2', 1, 2, 8, 11, 2, '', 3, '', 7),
(10, '2016-02-15', '2', 6, 1, 11, 12, 2, '', 4, '', 8),
(11, '2016-02-15', '2', 8, 1, 15, 16, 2, '', 3, 'Agung Sedayu Grup', 11),
(12, '2016-02-16', '45', 3, 1, 18, 17, 45, '', 3, '', 12),
(13, '2016-02-16', '45', 1, 1, 19, 18, 45, '', 3, '', 14),
(14, '2016-02-17', '45', 2, 2, 9, 19, 45, '', 3, '', 15),
(15, '2016-02-15', '45', 1, 1, 12, 15, 45, '', 3, '', 10),
(16, '2016-03-07', '2', 1, 1, 21, 22, 2, '', 4, 'yes', 17),
(17, '2016-03-08', '45', 3, 1, 23, 24, 45, '', 3, '', 19),
(18, '2016-03-08', '45', 3, 1, 24, 26, 45, '', 3, '', 20),
(19, '2016-03-08', '45', 2, 3, 28, 28, 45, '', 8, '', 22),
(20, '2016-03-16', '45', 3, 1, 32, 32, 45, '', 4, '', 24),
(21, '2016-03-16', '45', 3, 2, 33, 33, 45, '', 3, '', 25),
(22, '2016-03-16', '45', 2, 4, 35, 36, 45, '', 3, '', 27),
(23, '2016-03-22', '2', 6, 1, 22, 23, 2, '', 3, '', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tdat_users`
--

CREATE TABLE IF NOT EXISTS `tdat_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pinbbm` varchar(10) NOT NULL,
  `idcompany` int(11) NOT NULL,
  `idbranch` int(11) NOT NULL,
  `idrole` int(11) NOT NULL,
  `idcountry` int(11) NOT NULL,
  `idcity` int(11) NOT NULL,
  `picture` varchar(5000) NOT NULL,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `tdat_users`
--

INSERT INTO `tdat_users` (`id`, `nik`, `username`, `password`, `firstname`, `lastname`, `gender`, `birthdate`, `phone`, `mobile`, `email`, `pinbbm`, `idcompany`, `idbranch`, `idrole`, `idcountry`, `idcity`, `picture`, `active`) VALUES
(1, '12345', 'mulki12345', 'mulki12', 'Mulki', 'Fadhiylah', 'Male', '1990-05-06', '1234567', '12345678900', 'mulki.fadhiylah.mcs@gmail.com', '22fde44', 6, 1, 7, 69, 6, 'assets/pictures/users/mulki12345.jpg', 'Active'),
(2, '54321', 'paramitha54321', 'mitamita', 'Paramitha', 'Megarani', 'Female', '1992-05-11', '7654321', '00987654321', 'paramithamegarani@gmail.com', '2rrr457', 1, 3, 2, 69, 8, 'assets/pictures/users/paramitha54321.jpg', 'Active'),
(45, '11111', 'admin11111', 'admin', 'Admin', 'Admin', 'Female', '1990-01-30', '111111', '111111', 'admin@admin.admin', '2ff22ff', 8, 1, 2, 69, 17, 'assets/pictures/users/admin11111.jpg', 'Active'),
(46, '333333', 'system333333', 'asd123', 'System', 'System', 'Male', '2008-12-28', '123456', '12345678900', 'asdf@asd.ad', '22fde44', 1, 1, 2, 69, 15, 'assets/pictures/users/system333333.', 'Active'),
(47, '112233', 'generals112233', '12345', 'Generals', 'Generals', 'Male', '2008-12-29', '123123', '123123123', 'generals@generals.generals', '123ff', 1, 2, 1, 69, 20, 'assets/pictures/users/generals112233.', 'Active'),
(48, '001', 'head of001', 'johndoe', 'Head of', 'Branch', 'Male', '1960-02-03', '8990', '3', 'erwe@fff.com', '2ef4599d', 2, 1, 3, 69, 23, 'assets/pictures/users/john001.', 'Active'),
(49, '002', 'sales002', 'sales', 'Head of', 'Branch', 'Male', '2010-02-02', '8003311', '0876666', 'debjyoti@okwebsolution.com', '2we24d33', 3, 1, 3, 69, 76, 'assets/pictures/users/sales002.', 'Active'),
(50, '003', 'ho003', 'sales', 'HO', 'Director', 'Male', '1974-07-18', '4534545', '666666', 'sdfsds@fff.vom', '454rdw', 3, 5, 5, 69, 93, 'assets/pictures/users/ho003.', 'Active'),
(51, '004', 'marketing004', 'marketing', 'Marketing', 'Person', 'Female', '1979-01-01', '2323323', '454566788', 'gogogoi@ymail.com', '343sdf554', 4, 2, 6, 69, 79, 'assets/pictures/users/marketing004.', 'Active'),
(52, '005', 'holding005', 'holding', 'Holding', 'Person', 'Female', '1975-07-24', '3434343', '5667788', 'erwe@fferrrcom', 'dfdf33', 4, 3, 8, 69, 73, 'assets/pictures/users/holding005.', 'Active'),
(53, '12345', 'ertu12345', 'rty', 'ertu', 'iuy', 'Male', '1991-03-06', '45678', '456789', 'ggg@ghj', '678', 3, 2, 2, 69, 54, 'assets/pictures/users/ertu12345.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_visitpurposes`
--

CREATE TABLE IF NOT EXISTS `tdat_visitpurposes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tdat_visitpurposes`
--

INSERT INTO `tdat_visitpurposes` (`id`, `name`, `description`) VALUES
(1, 'Visit Purposes 1', 'Description Visit Purposes 1'),
(2, 'Visit Purposes 2', 'Description Visit Purposes 2'),
(3, 'Visit Purposes 3', 'Description Visit Purposes 3'),
(4, 'Visit Purposes 4', 'Description Visit Purposes 4');

-- --------------------------------------------------------

--
-- Table structure for table `tdat_visitschedules`
--

CREATE TABLE IF NOT EXISTS `tdat_visitschedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `datetimestart` datetime NOT NULL,
  `datetimeend` datetime NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idvisitpurpose` int(11) NOT NULL,
  `idstage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tdat_visitschedules`
--

INSERT INTO `tdat_visitschedules` (`id`, `iduser`, `datetimestart`, `datetimeend`, `idcustomer`, `idvisitpurpose`, `idstage`) VALUES
(1, 2, '2015-12-04 00:00:00', '2015-12-12 00:00:00', 2, 3, 1),
(2, 45, '2016-01-01 00:00:00', '2016-01-29 00:00:00', 2, 1, 4),
(3, 45, '2015-12-25 00:00:00', '2015-12-26 00:00:00', 1, 2, 2),
(4, 45, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'test3'),
(2, 'test3');

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
(258, 'edesima', 'd318f44739dced66793b1a603028133a76ae680e', 'Desi Maryati', 8, 1, 0, '', '', NULL),
(259, 'eariirs', 'd318f44739dced66793b1a603028133a76ae680e', 'Arief Irsyad', 3, 2, 0, '', '', NULL),
(260, 'user', 'd318f44739dced66793b1a603028133a76ae680e', 'user', 1, 1, 0, '', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
