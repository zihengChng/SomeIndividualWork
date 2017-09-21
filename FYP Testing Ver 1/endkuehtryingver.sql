-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 08:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endkuehtryingver`
--
CREATE DATABASE IF NOT EXISTS `endkuehtryingver` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `endkuehtryingver`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(4) NOT NULL,
  `loginID` int(11) NOT NULL,
  `adm_firstName` varchar(50) NOT NULL,
  `adm_lastName` varchar(50) NOT NULL,
  `adm_email` text NOT NULL,
  `phone_prefix` varchar(11) NOT NULL,
  `adm_phone` varchar(11) NOT NULL,
  `handphone_prefix` varchar(11) NOT NULL,
  `adm_handPhone` varchar(11) NOT NULL,
  `adm_address` text NOT NULL,
  `adm_city` int(11) NOT NULL,
  `adm_postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `loginID`, `adm_firstName`, `adm_lastName`, `adm_email`, `phone_prefix`, `adm_phone`, `handphone_prefix`, `adm_handPhone`, `adm_address`, `adm_city`, `adm_postcode`) VALUES
(1, 2, 'Chng', 'Ziheng', 'zhChng@outlook.com', '07', '2365948', '010', '2788549', '#02-03, Lorong Melor Pangsapuri Teratai Taman Melor', 18, 81200),
(2, 3, 'Lee', 'LimLim', 'llLee@outlook.com', '04', '1234859', '017', '4785164', 'No., 1, Jalan Jelutong, Taman Batu Pahat, ', 7, 83000);

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartItemID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityId` int(11) NOT NULL,
  `cityName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityId`, `cityName`) VALUES
(1, 'Ayer Baloi'),
(2, 'Ayer Hitam'),
(3, 'Ayer Tawar 2'),
(4, 'Bandar Penawar'),
(5, 'Bandar Tenggara'),
(6, 'Batu Anam'),
(7, 'Batu Pahat'),
(8, 'Bekok'),
(9, 'Benut'),
(10, 'Bukit Gambir'),
(11, 'Bukit Pasir'),
(12, 'Chaah'),
(13, 'Endau'),
(14, 'Gelang Patah'),
(15, 'Gerisek'),
(16, 'Gugusan Taib Andak'),
(17, 'Jementah'),
(18, 'Johor Bahru'),
(19, 'Kahang'),
(20, 'Kluang'),
(21, 'Kota Tinggi'),
(22, 'Kukup'),
(23, 'Kulai'),
(24, 'Labis'),
(25, 'Layang-Layang'),
(26, 'Masai'),
(27, 'Mersing'),
(28, 'Muar'),
(29, 'Nusajaya'),
(30, 'Pagoh'),
(31, 'Paloh'),
(32, 'Panchor'),
(33, 'Parit Jawa'),
(34, 'Parit Raja'),
(35, 'Parit Sulong'),
(36, 'Pasir Gudang'),
(37, 'Pekan Nenas'),
(38, 'Pengerang'),
(39, 'Pontian'),
(40, 'Pulau Satu'),
(41, 'Rengam'),
(42, 'Rengit'),
(43, 'Segamat'),
(44, 'Semerah'),
(45, 'Senai'),
(46, 'Senggarang'),
(47, 'Seri Gading'),
(48, 'Seri Medan'),
(49, 'Simpang Rengam'),
(50, 'Sungai Mati'),
(51, 'Tangkak'),
(52, 'Ulu Tiram'),
(53, 'Yong Peng');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(4) NOT NULL,
  `cust_userName` varchar(100) NOT NULL,
  `cust_firstName` varchar(50) NOT NULL,
  `cust_lastName` varchar(50) NOT NULL,
  `cust_email` text NOT NULL,
  `cust_phone` int(11) NOT NULL,
  `cust_handPhone` int(11) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_city` int(11) NOT NULL,
  `cust_postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailyproduceproduct`
--

CREATE TABLE `dailyproduceproduct` (
  `actionID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `addedProductQuantity` int(11) NOT NULL,
  `addedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyproduceproduct`
--

INSERT INTO `dailyproduceproduct` (`actionID`, `adminID`, `productID`, `addedProductQuantity`, `addedDate`) VALUES
(1, 1, 1, 123, '2017-06-27 05:53:31'),
(2, 1, 1, 1, '2017-06-27 05:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredientsID` int(11) NOT NULL,
  `ingredientName` varchar(100) NOT NULL,
  `ing_quantity` int(11) NOT NULL,
  `ing_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredientsID`, `ingredientName`, `ing_quantity`, `ing_price`) VALUES
(1, 'all-purpose flour', 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginId` int(4) UNSIGNED NOT NULL,
  `loginEmail` text NOT NULL,
  `password` text NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `loginEmail`, `password`, `type`) VALUES
(1, 'boss@outlook.com', 'ceb8447cc4ab78d2ec34cd9f11e4bed2', 2),
(2, 'zhChng@outlook.com', 'fb7380cec853ded6d4ce51c0c2663cfc', 0),
(3, 'llLee@outlook.com', '5b39f0aeea26b9087bf8749aff6ebc81', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lostprodcutrecord`
--

CREATE TABLE `lostprodcutrecord` (
  `recordId` int(11) NOT NULL,
  `lost_prodcutId` int(11) NOT NULL,
  `lost_quantity` int(11) NOT NULL,
  `lostReason` int(11) NOT NULL,
  `lostDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderItemId` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `order_productId` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productDetail` text NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productDetail`, `productQuantity`, `productPrice`) VALUES
(1, 'Moho Kuih', 'Usually found in penang when the Qingming Festival Or Ghost Festival', 124, 1.1),
(2, 'Kuih Talam', 'The Kuih Made with pandan juices, coconut milk, various flour', 123, 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `purchaseOrderID` int(11) NOT NULL,
  `ingredientID` int(11) NOT NULL,
  `purc_quantity` int(11) NOT NULL,
  `purc_total` double NOT NULL,
  `adminIncharge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salesorder`
--

CREATE TABLE `salesorder` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `deliveryDate` date NOT NULL,
  `deliveryAddress` text NOT NULL,
  `deliveryCity` int(11) NOT NULL,
  `deliveryPostcode` int(11) NOT NULL,
  `refundRequestStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uncheckoutcart`
--

CREATE TABLE `uncheckoutcart` (
  `cartID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartItemID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `dailyproduceproduct`
--
ALTER TABLE `dailyproduceproduct`
  ADD PRIMARY KEY (`actionID`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredientsID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `lostprodcutrecord`
--
ALTER TABLE `lostprodcutrecord`
  ADD PRIMARY KEY (`recordId`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderItemId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`purchaseOrderID`);

--
-- Indexes for table `salesorder`
--
ALTER TABLE `salesorder`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `uncheckoutcart`
--
ALTER TABLE `uncheckoutcart`
  ADD PRIMARY KEY (`cartID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartItemID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dailyproduceproduct`
--
ALTER TABLE `dailyproduceproduct`
  MODIFY `actionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredientsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginId` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lostprodcutrecord`
--
ALTER TABLE `lostprodcutrecord`
  MODIFY `recordId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderItemId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `purchaseOrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salesorder`
--
ALTER TABLE `salesorder`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uncheckoutcart`
--
ALTER TABLE `uncheckoutcart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
