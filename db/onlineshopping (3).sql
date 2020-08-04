-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2018 at 06:43 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `accbrand`
--

DROP TABLE IF EXISTS `accbrand`;
CREATE TABLE IF NOT EXISTS `accbrand` (
  `accbid` int(11) NOT NULL AUTO_INCREMENT,
  `accbrandname` varchar(200) NOT NULL,
  PRIMARY KEY (`accbid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accbrand`
--

INSERT INTO `accbrand` (`accbid`, `accbrandname`) VALUES
(5, 'Acid Eye');

-- --------------------------------------------------------

--
-- Table structure for table `accgeneral`
--

DROP TABLE IF EXISTS `accgeneral`;
CREATE TABLE IF NOT EXISTS `accgeneral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `features` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accgeneral`
--

INSERT INTO `accgeneral` (`id`, `mid`, `features`) VALUES
(21, 4, 'color'),
(22, 4, 'Month of warranty'),
(26, 4, 'Operating System Supported'),
(25, 4, 'type');

-- --------------------------------------------------------

--
-- Table structure for table `accmodel`
--

DROP TABLE IF EXISTS `accmodel`;
CREATE TABLE IF NOT EXISTS `accmodel` (
  `accmid` int(11) NOT NULL AUTO_INCREMENT,
  `accbid` int(11) NOT NULL,
  `accmodelname` varchar(200) NOT NULL,
  PRIMARY KEY (`accmid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accmodel`
--

INSERT INTO `accmodel` (`accmid`, `accbid`, `accmodelname`) VALUES
(1, 1, 'nokia X'),
(2, 2, 'MI'),
(3, 4, 'J4'),
(4, 5, 'Blue Bluetooth Headphone');

-- --------------------------------------------------------

--
-- Table structure for table `accproduct`
--

DROP TABLE IF EXISTS `accproduct`;
CREATE TABLE IF NOT EXISTS `accproduct` (
  `accpid` int(11) NOT NULL AUTO_INCREMENT,
  `accbid` int(11) NOT NULL,
  `accmid` int(11) NOT NULL,
  `acccategaryid` int(11) NOT NULL,
  `aproductname` varchar(500) NOT NULL,
  `aprice` varchar(200) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `featuresid` int(11) NOT NULL,
  `accfeatures` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`accpid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accproduct`
--

INSERT INTO `accproduct` (`accpid`, `accbid`, `accmid`, `acccategaryid`, `aproductname`, `aprice`, `img1`, `img2`, `img3`, `featuresid`, `accfeatures`) VALUES
(18, 5, 4, 4, 'Acid Eye Blue Bluetooth Headphone SH-12 Smart Headphones', '4000', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzf6yznsmnc.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfjwvastza.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfyg5e5pcf.jpeg', 21, 'blue'),
(19, 5, 4, 4, 'Acid Eye Blue Bluetooth Headphone SH-12 Smart Headphones', '4000', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzf6yznsmnc.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfjwvastza.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfyg5e5pcf.jpeg', 22, '6 month'),
(20, 5, 4, 4, 'Acid Eye Blue Bluetooth Headphone SH-12 Smart Headphones', '4000', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzf6yznsmnc.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfjwvastza.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfyg5e5pcf.jpeg', 26, 'Android,IOS,Windows'),
(21, 5, 4, 4, 'Acid Eye Blue Bluetooth Headphone SH-12 Smart Headphones', '4000', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzf6yznsmnc.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfjwvastza.jpeg', 'blue-bluetooth-headphone-sh-12-acid-eye-original-imaevdzfyg5e5pcf.jpeg', 25, 'Wireless');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(200) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `mobileno` bigint(20) DEFAULT NULL,
  `img` varchar(2000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `adminname`, `lastname`, `mobileno`, `img`, `email`, `password`) VALUES
(1, 'Malvika', 'Nannavare', 8487045482, NULL, 'nannavaremalvika@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

DROP TABLE IF EXISTS `admin_contact`;
CREATE TABLE IF NOT EXISTS `admin_contact` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(500) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `phone1` bigint(20) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `advid` int(11) NOT NULL AUTO_INCREMENT,
  `advimg` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`advid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`advid`, `advimg`) VALUES
(1, 'ad3.jpg'),
(2, 'ad2.jpg'),
(3, 'ad1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bid`, `brandname`) VALUES
(3, 'Samsung'),
(4, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `productname` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(5000) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `confirmpassword`) VALUES
(4, 'nitu', 'soni', 9723380853, 'nitu@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

DROP TABLE IF EXISTS `customer_contact`;
CREATE TABLE IF NOT EXISTS `customer_contact` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`cc_id`, `cname`, `email`, `subject`, `message`) VALUES
(1, 'malvika l. nannavare', 'nannavaremalvika@gmail.com', 'mobile not work proparly', 'my mobile is not work proparly so give me a new one or repair my mobile or give me refund');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_acc_category`
--

DROP TABLE IF EXISTS `mobile_acc_category`;
CREATE TABLE IF NOT EXISTS `mobile_acc_category` (
  `acccid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`acccid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_acc_category`
--

INSERT INTO `mobile_acc_category` (`acccid`, `category`) VALUES
(4, 'headphone');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `modelname` varchar(500) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`mid`, `bid`, `modelname`) VALUES
(5, 2, 'nokia X'),
(7, 4, 'minot 4'),
(8, 3, 'Samsung Galaxy J7 Duo'),
(9, 4, 'nokia lumia');

-- --------------------------------------------------------

--
-- Table structure for table `productuplode`
--

DROP TABLE IF EXISTS `productuplode`;
CREATE TABLE IF NOT EXISTS `productuplode` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `ram` varchar(500) DEFAULT NULL,
  `internalstorage` varchar(500) DEFAULT NULL,
  `img1` varchar(5000) DEFAULT NULL,
  `img2` varchar(5000) DEFAULT NULL,
  `img3` varchar(5000) DEFAULT NULL,
  `img4` varchar(5000) DEFAULT NULL,
  `inthebox` varchar(2000) DEFAULT NULL,
  `modelnumber` varchar(200) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `brousetype` varchar(100) DEFAULT NULL,
  `simtype` varchar(50) DEFAULT NULL,
  `hybridsimslot` varchar(20) DEFAULT NULL,
  `displaysize` varchar(100) DEFAULT NULL,
  `resolution` varchar(100) DEFAULT NULL,
  `resolutiontype` varchar(100) DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `processortype` varchar(200) DEFAULT NULL,
  `processercore` varchar(200) DEFAULT NULL,
  `primarycamera` varchar(50) DEFAULT NULL,
  `secondarycamera` varchar(50) DEFAULT NULL,
  `networktype` varchar(100) DEFAULT NULL,
  `supportednetwork` varchar(100) DEFAULT NULL,
  `betterycapacity` varchar(100) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `depth` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productuplode`
--

INSERT INTO `productuplode` (`pid`, `bid`, `mid`, `productname`, `price`, `ram`, `internalstorage`, `img1`, `img2`, `img3`, `img4`, `inthebox`, `modelnumber`, `color`, `brousetype`, `simtype`, `hybridsimslot`, `displaysize`, `resolution`, `resolutiontype`, `os`, `processortype`, `processercore`, `primarycamera`, `secondarycamera`, `networktype`, `supportednetwork`, `betterycapacity`, `width`, `height`, `depth`, `weight`, `warranty`) VALUES
(5, 4, 9, 'nokia lumia 797', '10000', '3 GB', '32 GB', 'Black_01Front-ed0dc.jpg', 'Black_02Back-3d0af.jpg', 'ad1.jpg', 'ad2.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 3, 8, 'Samsung Galaxy J7 Duo', '12,990', '4 GB', '32 GB', 'Black_02Back-3d0af.jpg', 'Black_01Front-ed0dc.jpg', 'Black_01Front-ed0dc.jpg', 'Black_02Back-3d0af.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
