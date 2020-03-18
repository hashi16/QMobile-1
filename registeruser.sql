-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 01:49 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registeruser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `fname`, `lname`, `email`, `password`) VALUES
('iniesta8', 'Dasith', 'Deelaka', 'deelakajagoda@gmail.com', '4849ef68cba71d52b56694cc2f88bb11'),
('farook', 'farook', 'fazni', 'farookfazni@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE `deliveryboy` (
  `nic` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `firstname`, `lastname`, `contactno`, `email`, `subject`, `feedback`) VALUES
(1, 'fazni', 'farook', '0779794020', 'faznifarook@gmail.com', 'Problem in Product', 'I need to replace my phone charger its not working properly but phone is great I used it by charging it from another charger help me to fix it ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `orderdate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `orderName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `orderdate`, `status`, `orderName`, `price`) VALUES
(19, '2020-03-18', 'Paid', 'Hwaie P30 Lite', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `actualprice` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `manufacturer`, `product_category`, `actualprice`, `product_price`, `product_qty`, `product_image`, `description`) VALUES
(1, 'Samsung Galaxy M20', 'Samsung', 'Mobile Phone', '50000.00', '45000.00', 100, 'Resourses/product/pr1.jpg', ''),
(2, 'Huawei P30', 'Huawei', 'Mobile Phone', '34000.00', '30000.00', 100, 'Resourses/product/pr2.jpg', ''),
(3, 'Oppo F15', 'Oppo', 'Mobile Phone', '45000.00', '40000.00', 100, 'Resourses/product/pr3.jpg', ''),
(4, 'Nokia 6.1 Plus (Nokia X6)', 'Nokia', 'Mobile Phone', '24000.00', '22000.00', 100, 'Resourses/product/pr4.jpg', ''),
(7, 'Samsung Wireless Charger', 'Samsung', 'Charger', '1000.00', '950.00', 100, 'Resourses/product/pr7.jpg', ''),
(5, 'Apple Iphone Charger', 'Apple', 'Charger', '4000.00', '3000.00', 100, 'Resourses/product/pr5.jpg', ''),
(6, 'Pinang Handfree', 'Pinang', 'Handfree', '600.00', '550.00', 100, 'Resourses/product/pr6.jpg', ''),
(9, 'Samsung Galaxy Note 10', 'Samsung', 'Mobile Phone', '170000.00', '160000.00', 100, 'Resourses/product/pr9.jpg', ''),
(8, 'Apple Airpod', 'Apple', 'Handfree', '4500.00', '4000.00', 100, 'Resourses/product/pr8.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Reg_ID` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Reg_ID`, `fname`, `lname`, `username`, `email`, `contactNo`, `address`, `user_type`, `password`) VALUES
(1, 'Hashitha', 'Niroshan', 'hash', 'hash@gmail.com', 718712004, 'Temple road,matara', 'user', '202cb962ac59075b964b07152d234b70'),
(2, 'Dasith', 'Deelaka', 'deelaka', 'deelakajagoda@gmail.com', 778257254, 'NO 5/B2/11, IETI Quarters,Thelawala road Angulana, Mount Lavinia.\r\nColombo', 'user', 'f9104f7b975259fd53223fd4b3d5bf07'),
(3, 'Andress', 'Iniesta', 'iniesta8', 'iniesta8@gmail.com', 112345678, 'Barcelona,Spain', 'user', '4849ef68cba71d52b56694cc2f88bb11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Reg_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Reg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
