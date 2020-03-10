-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 09:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registeruser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `productname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE IF NOT EXISTS `deliveryboy` (
  `nic` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `orderdate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `orderName` varchar(255) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentId` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  PRIMARY KEY (`paymentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `actualprice` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `manufacturer`, `product_category`, `actualprice`, `product_price`, `product_qty`, `product_image`, `description`) VALUES
(9, 'Samsung Galaxy Note 10', 'Samsung', 'Mobile Phone', '170000.00', '160000.00', 100, 'Resourses/product/pr9.jpg', ''),
(8, 'Apple Airpod', 'Apple', 'Handfree', '4500.00', '4000.00', 1, 'Resourses/product/pr8.jpg', ''),
(7, 'Samsung Wireless Charger', 'Samsung', 'Charger', '1000.00', '950.00', 1, 'Resourses/product/pr7.jpg', ''),
(1, 'Samsung Galaxy M20', 'Samsung', 'Mobile Phone', '50000.00', '45000.00', 1, 'Resourses/product/pr1.jpg', ''),
(2, 'Huawei P30', 'Huawei', 'Mobile Phone', '34000.00', '30000.00', 1, 'Resourses/product/pr2.jpg', ''),
(3, 'Oppo F15', 'Oppo', 'Mobile Phone', '45000.00', '40000.00', 1, 'Resourses/product/pr3.jpg', ''),
(4, 'Nokia 6.1 Plus (Nokia X6)', 'Nokia', 'Mobile Phone', '24000.00', '22000.00', 1, 'Resourses/product/pr4.jpg', ''),
(5, 'Apple Iphone Charger', 'Apple', 'Charger', '4000.00', '3000.00', 1, 'Resourses/product/pr5.jpg', ''),
(6, 'Pinang Handfree', 'Pinang', 'Handfree', '600.00', '550.00', 1, 'Resourses/product/pr6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Reg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`Reg_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Reg_ID`, `fname`, `lname`, `username`, `email`, `contactNo`, `address`, `user_type`, `password`) VALUES
(1, 'Hashitha', 'Niroshan', 'hash', 'hash@gmail.com', 718712004, 'Temple road,matara', 'user', '202cb962ac59075b964b07152d234b70'),
(2, 'Dasith', 'Deelaka', 'deelaka', 'deelakajagoda@gmail.com', 778257254, 'NO 5/B2/11, IETI Quarters,Thelawala road Angulana, Mount Lavinia.\r\nColombo', 'user', 'f9104f7b975259fd53223fd4b3d5bf07'),
(3, 'Andress', 'Iniesta', 'iniesta8', 'iniesta8@gmail.com', 112345678, 'Barcelona,Spain', 'user', '4849ef68cba71d52b56694cc2f88bb11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
