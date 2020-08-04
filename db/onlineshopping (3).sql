-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 09:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `accbrand`
--

CREATE TABLE `accbrand` (
  `accbid` int(11) NOT NULL,
  `accbrandname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accbrand`
--

INSERT INTO `accbrand` (`accbid`, `accbrandname`) VALUES
(5, 'Acid Eye');

-- --------------------------------------------------------

--
-- Table structure for table `accgeneral`
--

CREATE TABLE `accgeneral` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `features` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `accmodel` (
  `accmid` int(11) NOT NULL,
  `accbid` int(11) NOT NULL,
  `accmodelname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `accproduct` (
  `accpid` int(11) NOT NULL,
  `accbid` int(11) NOT NULL,
  `accmid` int(11) NOT NULL,
  `acccategaryid` int(11) NOT NULL,
  `aproductname` varchar(500) NOT NULL,
  `aprice` varchar(200) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `featuresid` int(11) NOT NULL,
  `accfeatures` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `adminlogin` (
  `aid` int(11) NOT NULL,
  `adminname` varchar(200) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `mobileno` bigint(20) DEFAULT NULL,
  `img` varchar(2000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `adminname`, `lastname`, `mobileno`, `img`, `email`, `password`) VALUES
(1, 'abc', 'abc', 1234567890, NULL, 'xyz@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

CREATE TABLE `admin_contact` (
  `ac_id` int(11) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `phone1` bigint(20) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `advid` int(11) NOT NULL,
  `advimg` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `brand` (
  `bid` int(11) NOT NULL,
  `brandname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(5000) DEFAULT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `confirmpassword`) VALUES
(4, 'abc', 'abc', 1234567890, 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `cc_id` int(11) NOT NULL,
  `cname` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_acc_category`
--

CREATE TABLE `mobile_acc_category` (
  `acccid` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_acc_category`
--

INSERT INTO `mobile_acc_category` (`acccid`, `category`) VALUES
(4, 'headphone');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `mid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `modelname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `productuplode` (
  `pid` int(11) NOT NULL,
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
  `warranty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productuplode`
--

INSERT INTO `productuplode` (`pid`, `bid`, `mid`, `productname`, `price`, `ram`, `internalstorage`, `img1`, `img2`, `img3`, `img4`, `inthebox`, `modelnumber`, `color`, `brousetype`, `simtype`, `hybridsimslot`, `displaysize`, `resolution`, `resolutiontype`, `os`, `processortype`, `processercore`, `primarycamera`, `secondarycamera`, `networktype`, `supportednetwork`, `betterycapacity`, `width`, `height`, `depth`, `weight`, `warranty`) VALUES
(5, 4, 9, 'nokia lumia 797', '10000', '3 GB', '32 GB', 'Black_01Front-ed0dc.jpg', 'Black_02Back-3d0af.jpg', 'ad1.jpg', 'ad2.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 3, 8, 'Samsung Galaxy J7 Duo', '12,990', '4 GB', '32 GB', 'Black_02Back-3d0af.jpg', 'Black_01Front-ed0dc.jpg', 'Black_01Front-ed0dc.jpg', 'Black_02Back-3d0af.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accbrand`
--
ALTER TABLE `accbrand`
  ADD PRIMARY KEY (`accbid`);

--
-- Indexes for table `accgeneral`
--
ALTER TABLE `accgeneral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accmodel`
--
ALTER TABLE `accmodel`
  ADD PRIMARY KEY (`accmid`);

--
-- Indexes for table `accproduct`
--
ALTER TABLE `accproduct`
  ADD PRIMARY KEY (`accpid`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`advid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `mobile_acc_category`
--
ALTER TABLE `mobile_acc_category`
  ADD PRIMARY KEY (`acccid`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `productuplode`
--
ALTER TABLE `productuplode`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accbrand`
--
ALTER TABLE `accbrand`
  MODIFY `accbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `accgeneral`
--
ALTER TABLE `accgeneral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `accmodel`
--
ALTER TABLE `accmodel`
  MODIFY `accmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `accproduct`
--
ALTER TABLE `accproduct`
  MODIFY `accpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_contact`
--
ALTER TABLE `admin_contact`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `advid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mobile_acc_category`
--
ALTER TABLE `mobile_acc_category`
  MODIFY `acccid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `productuplode`
--
ALTER TABLE `productuplode`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
