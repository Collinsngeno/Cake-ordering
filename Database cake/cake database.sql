-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 11:03 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `email`, `usertype`) VALUES
('colly', '0000', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cakeorders`
--

CREATE TABLE `cakeorders` (
  `Id` int(30) NOT NULL,
  `Cakename` varchar(45) NOT NULL,
  `Quantity` varchar(45) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Phonenumber` int(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Orderdate` date NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'origi', 'origi@gmail.com', 'nice cakes'),
(2, 'trey', 'trey@gmail.com', 'lower the prices please'),
(3, 'whiteny', 'whitney@yahoo.com', 'nice cakes lower the prices');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Productcode` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Productcode`, `Name`, `Email`, `Address`, `Phone`) VALUES
(260, 'Kendagor', 'obadiah@yahoo.com', 'Seminary Towers', '0700200400'),
(189, 'trevor', 'noah@gmail.com', 'box 09', '0708009080'),
(190, 'cheptoo', 'chep@gmail.com', 'box 80', '0709543213'),
(192, 'beatrice', 'btee@yahoo.com', 'box 50 Langata', '0700120500'),
(199, 'kevin', 'voke@yahoo.com', 'kemuhub nairobi', '0701200300'),
(200, 'john', 'johnte@gmail.com', 'Viewpark towers 16th floor', '0702314500'),
(201, 'nelly', 'nelly@gmail.com', 'Youthfund 8th floor nbk building', '0709560900'),
(202, 'chris', 'kris@gmail.com', 'Kemutowers 12th floor', '0703200400'),
(203, 'bird', 'man@gmail.com', 'Carnivore grounds', ''),
(204, 'bird', 'man@gmail.com', 'Carnivore grounds', ''),
(205, 'chemutai', 'mutai@gmail.com', 'ihub nairobi', ''),
(206, 'chemutai', 'mutai@gmail.com', 'ihub nairobi', ''),
(207, 'toto', 'billy@gmail.com', 'Ecobank towers 8th floor', ''),
(208, 'rex', 'cia@gmail.com', 'Aon building', ''),
(209, 'rex', 'cia@gmail.com', 'Aon building', ''),
(210, 'sum', 'sum@yahoo.com', 'Mountkenya uni towers', ''),
(211, 'sum', 'sum@yahoo.com', 'Mountkenya uni towers', ''),
(214, 'ronaldo', 'ronald@gmail.com', 'kemuhub 4th floor', ''),
(215, 'oti', 'otieno@gmail.com', 'kemutowers ', ''),
(261, 'Franco', 'kimanzai@gmail.com', 'View Park Towers Nairobi', '0733600700'),
(218, 'gloria', 'glory@gmail.com', 'Afya center 2nd floor', '0719700400'),
(263, 'Brian', 'brayo@gmail.com', 'Emmanuel Towers', '0712300800'),
(220, 'ian', 'ian@gmail.com', 'anniversary towers 18th floor', 'fhehgef'),
(221, 'krul', 'krul@gmail.com', 'kemuhub 4th floor', '0708700900'),
(222, 'timo', 'moo@gmail.com', '2nd floor kemu towers', '0701200900'),
(223, 'steve', 'stevo@gmail.com', 'tickles sports lounge langata', '0705600700'),
(224, 'mary', 'mary@yahoo.com', 'viewpark towers 5th floor', '0701200400'),
(225, 'collo', 'tigercollins30@yahoo.com', 'tickles sports lounge', '0721900800'),
(226, 'collo', 'tigercollins30@yahoo.com', 'tickle', '0701200400'),
(227, 'collo', 'tigercollins30@yahoo.com', '2nd floor nhif building\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '0725265595'),
(228, 'collo', 'tigercollins30@yahoo.com', 'knls building', '0700200500'),
(229, 'leakey risasi', 'risasi@gmail.com', 'huduma centre gpo nairobi', '0704500600'),
(230, 'leakey risasi', 'leakey@yahoo.com', '2nd floor kemu towers', '0708900800'),
(231, 'tom', 'kamau@gmail.com', 'tickles sports lounge langata', '0700130900'),
(232, 'collinso', 'cole@gmail.com', '4th floor kemuhub', '0711800900'),
(233, 'hosea chief', 'chief@gmail.com', '2nd floor viewpark towers', '0725265595'),
(234, 'grace', 'mwangi@gmail.com', '123\r\n', '0700130900'),
(235, 'richard', 'branson@gmail.com', '3rd floor kemuhub', '0710800900'),
(236, 'collinso', 'tigercollins30@yahoo.com', '4th floor kemuhub', '0700200900'),
(237, 'tracy morgan', 'tracy@yahoo.com', '15th floor viewpark towers', '0709112300'),
(238, 'tommy', 'tom@yahoo.com', ' tickles sports lounge langata', '0701300400'),
(239, 'hosea kamau', 'kamau@yahoo.com', '12th floor kemu towers', '0702300800'),
(240, 'tom', 'tommy@yahoo.com', '2nd floor kemu towers', '0705500700'),
(241, 'tom njangi', 'njangi@gmail.com', '4th floor kemuhub', '0701345600'),
(242, 'harry', 'kane@gmail.com', 'hazina towers', '0710200500'),
(243, 'trevor', 'noah@gmail.com', 'kcb building', '0710300400'),
(244, 'Peter', 'kev@gmail.com', 'barclays building', '0712400600'),
(245, 'charles', 'charly@gmail.com', 'Posta plaza', '0723900700'),
(246, 'Leakey', 'risasi@yahoo.com', 'Java House', '0715900700'),
(247, 'loyce', 'cherono@gmail.com', 'Mama ngina Towers', '0726700800'),
(248, 'Clinton', 'kibet@gmail.com', 'Sarova Building', '0714789700'),
(249, 'Rachel', 'brenda@yahoo.com', 'Ndege Chai', '0719000500'),
(250, 'collinso', 'collo@gmail.com', 'Prestige Plaza', '0718900900'),
(251, 'Bill', 'gates@gmail.com', 'Riverside Towers', '0724590400'),
(252, 'kove', 'bean@gmail.com', 'Signature Apartments', '0712300900'),
(253, 'ken', 'kevi@gmail.com', 'Mt sinai Court', '0710230890'),
(254, 'ken', 'kevi@gmail.com', 'Mt sinai Court', '0710230890'),
(255, 'ken', 'kevi@gmail.com', 'Mt sinai Court', '0710230890'),
(256, 'ken', 'oger@gmail.com', 'Mt Sinai Court', '0700400500'),
(257, 'ken', 'oger@gmail.com', 'Mt Sinai Court', '0700400500'),
(258, 'Tony', 'wagwan@gmail.com', 'Ochimo Towers Nairobi', '0713890900'),
(259, 'Joe', 'kim@gmail.com', 'Trinity Building Mombasa', '0710460800'),
(262, 'Gloria', 'nyakweba@gmail.com', 'Kemuhub,Nairobi', '0723467890');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `usertype`) VALUES
(32, 'cris', 'ronald', 'cristiano', 'ronaldo', '34535355', '5466646', ''),
(1, 'collo', '123', '', '', '', '', 'member'),
(29, 'admin', '000', '', '', '', '', 'admin'),
(30, 'briar', '1234', 'briar', 'rose', 'brirose34', '4353535', 'member'),
(34, 'tig', '44656', 'collo', 'cole', '2312131', '0713971589', ''),
(46, '123', '', 'rose', 'cherono', 'box 10 langata', '0709080020', 'member'),
(54, '12', '', 'john', 'ndegwa', 'p.o box 11 langata', '0701200400', 'member'),
(62, 'tommy', '123', 'tom', 'kiprop', 'p.o box 20 langata', '0703400900', 'member'),
(63, 'kevo', '123', 'kev', 'bravo', 'p.o box 340,Nairobi', '254725670800', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` int(11) NOT NULL,
  `Productid` int(11) NOT NULL,
  `Cakename` varchar(80) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Total` int(20) NOT NULL,
  `Physicaladdress` varchar(80) NOT NULL,
  `Phone` int(30) NOT NULL,
  `Date` date NOT NULL,
  `Mpesareceipt` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`OrderID`, `Productid`, `Cakename`, `Quantity`, `Price`, `Total`, `Physicaladdress`, `Phone`, `Date`, `Mpesareceipt`) VALUES
(1, 11, 'Whiteforest1/2kg', 2, 1200, 3400, 'box 78', 725265595, '2015-03-24', ''),
(2, 22, 'Bananacake1kg', 2, 2000, 4000, 'box 7 olepolos', 701300400, '2015-03-25', ''),
(4, 9, 'Redvelvetcake3kg', 3, 3900, 11700, 'box 30 Karen', 714500600, '2015-03-26', ''),
(5, 26, 'Chocolatefudge1/2kg', 1, 1200, 12900, 'box 30 Karen', 714500600, '2015-03-26', ''),
(6, 5, 'Blackforest4kg', 2, 3500, 7000, 'kemuhub nairobi', 701200300, '2015-03-27', ''),
(7, 31, 'Fruitcake1/2kg', 3, 1200, 3600, 'Kemutowers 12th floor', 703200400, '2015-03-27', ''),
(8, 19, 'Blueberry3kg', 2, 4000, 8000, 'Afya center 2nd floor', 719700400, '2015-03-27', ''),
(9, 34, 'Fruitcake3kg', 2, 4000, 8000, 'kemuhub 4th floor', 708700900, '2015-03-27', ''),
(14, 8, 'Redevelvetcake2kg', 4, 2800, 11200, 'Signature Apartments', 712300900, '2017-09-18', ''),
(15, 3, 'Blackforest 2kg', 4, 2600, 10400, 'Mt Sinai Court', 700400500, '2017-09-18', ''),
(16, 1, 'Blackforest1/2kg', 3, 1200, 3600, 'Mt Sinai Court', 700400500, '2017-09-18', ''),
(17, 7, 'Redvelvet1kg', 2, 1800, 3600, 'Ochimo Towers Nairobi', 713890900, '2017-09-18', ''),
(18, 5, 'Blackforest4kg', 2, 3500, 7000, 'Trinity Building Mombasa', 710460800, '2017-09-18', ''),
(19, 2, 'Blackforest 1kg', 3, 1800, 5400, 'Seminary Towers', 700200400, '2017-09-18', ''),
(20, 7, 'Redvelvet1kg', 2, 1800, 3600, 'View Park Towers Nairobi', 733600700, '2017-09-18', ''),
(21, 9, 'Redvelvetcake3kg', 4, 3900, 15600, 'Kemuhub,Nairobi', 723467890, '2017-09-18', ''),
(22, 23, 'Bananacake2kg', 2, 2800, 5600, 'Emmanuel Towers', 712300800, '2017-09-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Productcode` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Productcode`, `Date`, `Customerid`) VALUES
(178, '2015-03-24', 176),
(202, '2015-03-27', 200),
(201, '2015-03-27', 199),
(199, '2015-03-26', 197),
(200, '2015-03-27', 198),
(142, '2015-03-22', 140),
(198, '2015-03-26', 196),
(197, '2015-03-26', 195),
(139, '2015-03-22', 137),
(196, '2015-03-26', 194),
(137, '2015-03-22', 135),
(195, '2015-03-25', 193),
(179, '2015-03-24', 177),
(180, '2015-03-24', 178),
(181, '2015-03-24', 179),
(182, '2015-03-24', 180),
(183, '2015-03-24', 181),
(184, '2015-03-24', 182),
(185, '2015-03-24', 183),
(186, '2015-03-24', 184),
(187, '2015-03-24', 185),
(188, '2015-03-24', 186),
(189, '2015-03-24', 187),
(190, '2015-03-24', 188),
(191, '2015-03-24', 189),
(192, '2015-03-24', 190),
(193, '2015-03-25', 191),
(194, '2015-03-25', 192),
(203, '2015-03-27', 201),
(204, '2015-03-27', 202),
(205, '2015-03-27', 203),
(206, '2015-03-27', 204),
(207, '2015-03-27', 205),
(208, '2015-03-27', 206),
(209, '2015-03-27', 207),
(210, '2015-03-27', 208),
(211, '2015-03-27', 209),
(212, '2015-03-27', 210),
(213, '2015-03-27', 211),
(214, '2015-03-27', 212),
(215, '2015-03-27', 213),
(216, '2015-03-27', 214),
(217, '2015-03-27', 0),
(218, '2015-03-27', 0),
(219, '2015-03-27', 215),
(220, '2015-03-27', 216),
(221, '2015-03-27', 0),
(222, '2015-03-27', 0),
(223, '2015-03-27', 0),
(224, '2015-03-27', 217),
(225, '2015-03-27', 218),
(226, '2015-03-27', 219),
(227, '2015-03-27', 220),
(228, '2015-03-27', 221),
(229, '2015-03-27', 222),
(230, '2015-03-29', 223),
(231, '2015-03-29', 224),
(232, '2015-03-31', 225),
(233, '2015-03-31', 226),
(234, '2015-04-05', 227),
(235, '2015-04-06', 228),
(236, '2015-04-07', 229),
(237, '2015-04-09', 230),
(238, '2015-04-09', 231),
(239, '2015-04-10', 232),
(240, '2015-04-11', 233),
(241, '2015-04-13', 234),
(242, '2015-04-14', 235),
(243, '2015-04-14', 236),
(244, '2015-04-14', 237),
(245, '2015-04-15', 238),
(246, '2015-04-15', 239),
(247, '2015-04-16', 240),
(248, '2015-04-16', 241),
(249, '2017-09-18', 0),
(250, '2017-09-18', 0),
(251, '2017-09-18', 0),
(252, '2017-09-18', 0),
(253, '2017-09-18', 0),
(254, '2017-09-18', 0),
(255, '2017-09-18', 0),
(256, '2017-09-18', 0),
(257, '2017-09-18', 0),
(258, '2017-09-18', 0),
(259, '2017-09-18', 0),
(260, '2017-09-18', 0),
(261, '2017-09-18', 0),
(262, '2017-09-18', 0),
(263, '2017-09-18', 0),
(264, '2017-09-18', 0),
(265, '2017-09-18', 0),
(266, '2017-09-18', 0),
(267, '2017-09-18', 0),
(268, '2017-09-18', 0),
(269, '2017-09-18', 0),
(270, '2017-09-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `Productcode` int(30) NOT NULL,
  `Cakename` varchar(30) DEFAULT NULL,
  `Quantity` varchar(30) DEFAULT NULL,
  `Price` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`Productcode`, `Cakename`, `Quantity`, `Price`) VALUES
(1, 'Blackforest', '1/2kg', 1000),
(2, 'Blackforest', '1kg', 1700),
(3, 'Blackforest', '2kg', 2600),
(4, 'Blackforest', '3kg', 3000),
(5, 'Blackforest', '4kg', 3500),
(6, 'Red Velvet cake', '1/2kg', 1200),
(7, 'Red Velvet cake', '1kg', 1800),
(8, 'Red Velvet cake', '2kg', 2800),
(9, 'Red Velvet cake', '3kg', 3900),
(10, 'Red Velvet cake', '4kg', 4200),
(11, 'White forest cake', '1/2kg', 1200),
(12, 'White forest cake', '1kg', 1800),
(13, 'White forest cake', '2kg', 2800),
(14, 'White forest cake', '3kg', 3200),
(15, 'White forest cake', '4kg', 3700),
(16, 'Blueberry', '1/2kg', 1400),
(17, 'Blueberry', '1kg', 2100),
(18, 'Blueberry', '2kg', 3000),
(19, 'Blueberry', '3kg', 4000),
(20, 'Blueberry', '4kg', 4600),
(21, 'Banana cake', '1/2kg', 1200),
(22, 'Banana cake', '1kg', 2000),
(23, 'Banana cake', '2kg', 2800),
(24, 'Banana cake', '3kg', 3800),
(25, 'Banana cake', '4kg', 4200),
(26, 'Chocolate fudge', '1/2kg', 1200),
(27, 'Chocolate fudge', '1kg', 2000),
(28, 'Chocolate fudge', '2kg', 2800),
(29, 'Chocolate fudge', '3kg', 3900),
(30, 'Chocolate fudge', '4kg', 4200),
(31, 'Fruit cake', '1/2kg', 1200),
(32, 'Fruit cake', '1kg', 2000),
(33, 'Fruit cake', '2kg', 3000),
(34, 'Fruit cake', '3kg', 4000),
(35, 'Fruit cake', '4kg', 4500),
(36, 'Coffee cake', '1/2kg', 1200),
(37, 'Coffee cake', '1kg', 2000),
(38, 'Coffee cake', '2kg', 3000),
(39, 'Coffee cake', '3kg', 3900);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Productcode` int(11) NOT NULL,
  `Cakename` varchar(20) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Productcode`, `Cakename`, `Description`, `Price`) VALUES
(1, 'Blackforest1/2kg', 'nice', '1200.00'),
(2, 'Blackforest 1kg', '', '1800.00'),
(3, 'Blackforest 2kg', '', '2600.00'),
(4, 'Blackforest 3kg', '', '3000.00'),
(5, 'Blackforest4kg', '', '3500.00'),
(6, 'Redvelvetcake1/2kg', '', '1200.00'),
(7, 'Redvelvet1kg', '', '1800.00'),
(8, 'Redevelvetcake2kg', '', '2800.00'),
(9, 'Redvelvetcake3kg', '', '3900.00'),
(10, 'Redvelvet4kg', '', '4200.00'),
(11, 'Whiteforest1/2kg', '', '1200.00'),
(12, 'Whiteforest1kg', '', '1800.00'),
(13, 'Whiteforest2kg', '', '2800.00'),
(14, 'Whiteforest3kg', '', '3200.00'),
(15, 'Whiteforest4kg', '', '3700.00'),
(16, 'Blueberry1/2kg', '', '1400.00'),
(17, 'Blueberry1kg', '', '2100.00'),
(18, 'Blueberry2kg', '', '3000.00'),
(19, 'Blueberry3kg', '', '4000.00'),
(20, 'Blueberry4kg', '', '4600.00'),
(21, 'Bananacake1/2kg', '', '1200.00'),
(22, 'Bananacake1kg', '', '2000.00'),
(23, 'Bananacake2kg', '', '2800.00'),
(24, 'Bananacake3kg', '', '3800.00'),
(25, 'Bananacake4kg', '', '4200.00'),
(26, 'Chocolatefudge1/2kg', '', '1200.00'),
(27, 'Chocolatefudge1kg', '', '2000.00'),
(28, 'Chocolatefudge2kg', '', '2800.00'),
(29, 'Chocolatefudge3kg', '', '3900.00'),
(30, 'Chocolatefudge4kg', '', '4200.00'),
(31, 'Fruitcake1/2kg', '', '1200.00'),
(32, 'Fruitcake1kg', '', '2000.00'),
(33, 'Fruitcake2kg', '', '3000.00'),
(34, 'Fruitcake3kg', '', '4000.00'),
(35, 'Fruitcake4kg', '', '4500.00'),
(36, 'Coffeecake1/2kg', '', '1200.00'),
(37, 'Coffeecake1kg', '', '2000.00'),
(38, 'Coffecake2kg', '', '3000.00'),
(39, 'Coffeecake3kg', '', '3900.00'),
(40, 'Coffeecake4kg', '', '4700.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cakeorders`
--
ALTER TABLE `cakeorders`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `cakename` (`Cakename`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fullname` (`fullname`,`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Productcode`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Productcode`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`Productcode`),
  ADD UNIQUE KEY `Productcode` (`Productcode`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Productcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakeorders`
--
ALTER TABLE `cakeorders`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `Productcode` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
