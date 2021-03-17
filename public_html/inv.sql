-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 09:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(11) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `adminname`, `password`) VALUES
(1, 'Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `segment` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `calculation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `segment`, `phone`, `address`, `payment`, `calculation`) VALUES
(1, 'Shreya', 'contractor', 55555, 'london', 'credit', 'Trader INCH to INCH'),
(2, 'Adtit', 'retailer', 888, 'taj', 'credit', 'MM to MM'),
(3, 'Nidhi', 'builder', 4534, 'svsd', 'credit', 'INCH to INCH'),
(4, 'Gondu', 'trader', 35346, 'dgdfh', 'credit', 'Trader INCH to INCH'),
(5, 'Niru', 'trader', 65768, 'zvdvz', 'credit', 'Trader regular'),
(6, 'Radha', 'trader', 68678, 'xfdsg', 'credit', 'Retail'),
(7, 'Vidit', 'contractor', 5654, 'xzdvfxh', 'credit', 'Stone'),
(8, 'Atharva', 'contractor', 3454, 'dsfsdgf', 'credit', 'INCH to INCH'),
(9, 'Adt', 'trader', 121435, 'dgdfhfd', 'cash', 'MM to MM'),
(10, 'Jake', 'builder', 123, 'abc', 'cash', 'Trader INCH to INCH'),
(11, 'Amy', 'trader', 65767, 'fdbf', 'credit', 'Trader regular'),
(12, 'Gina', 'contractor', 4676867, ' gfny', 'credit', 'INCH to INCH'),
(13, 'Boyle', 'builder', 123, 'abcd', 'cash', 'Stone'),
(14, 'Harsh', 'contractor', 324235, 'csdgfs', 'credit', 'Trader INCH to INCH'),
(15, 'Ajay', 'trader', 32435, 'cdvdfh', 'credit', 'Trader INCH to INCH'),
(16, 'Shubham', 'trader', 123243, 'fgjyjy', 'credit', 'INCH to INCH'),
(17, 'Rekha', 'trader', 2323, 'rghtr', 'cash', 'Trader regular'),
(18, 'llll', 'trader', 0, 'n', 'cash', 'MM to MM'),
(19, 'joker', 'trader', 5858, 'hfjjd', 'credit', 'Trader INCH to INCH'),
(20, 'Ankita', 'builder', 123, 'abc', 'cash', 'MM to MM'),
(21, 'Jaya', 'trader', 3235, 'dsfdg', 'cash', 'INCH to INCH'),
(22, 'RANI', 'builder', 123, 'ABC', 'cash', 'MM to MM'),
(23, 'Cathy', 'trader', 243253, 'gfngfdjj', 'credit', 'INCH to INCH'),
(24, 'Aditi Mangesh Joshi', 'retailer', 231412, 'fdgfdzb', 'credit', 'MM to MM'),
(25, 'ABCDEF', 'builder', 12, 'SB', 'credit', 'MM to MM'),
(26, 'Amjjjj', 'builder', 123, 'abc', 'cash', 'Stone'),
(27, 'smkkkk', 'trader', 123, 'abc', 'credit', 'Trader regular'),
(28, 'nbbb', 'builder', 8, 'nn', 'credit', 'Retail'),
(29, 'nv', 'trader', 12, '', 'cash', 'Trader INCH to INCH'),
(30, 'ppppp', 'contractor', 342, 'dsfsa', 'credit', 'Trader regular'),
(31, 'please work', 'contractor', 23243, 'fvtbeynye', 'credit', 'INCH to INCH'),
(32, 'zzzzz', 'contractor', 12332, 'xcdvdz', 'credit', 'INCH to INCH'),
(33, 'Abiza', 'contractor', 354654, ' cffbfdz', 'credit', 'MM to MM'),
(34, 'Paul', 'contractor', 436547, 'fnxjsrtj', 'credit', 'INCH to INCH'),
(35, 'riya', 'builder', 123, '11', 'cash', 'MM to MM'),
(36, 'whatevs', 'contractor', 65848, 'jbzxdvjksu', 'credit', 'INCH to INCH'),
(37, 'Yaay', 'trader', 5666575, 'fbgdfhsgtsr', 'credit', 'INCH to INCH'),
(38, 'Shreya K', 'retailer', 343523, 'fvfgb', 'cash', 'Trader INCH to INCH'),
(39, 'new contractor', 'contractor', 111111, 'aaaaaaa', 'credit', 'INCH to INCH'),
(40, 'abcxy', 'trader', 1, 'd', 'cash', 'MM to MM');

-- --------------------------------------------------------

--
-- Table structure for table `moulding_list`
--

CREATE TABLE `moulding_list` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `MouldingType` varchar(40) DEFAULT 'Regular',
  `FullRoundEdges` int(11) DEFAULT 0,
  `FullRoundPrice` float DEFAULT 0,
  `FullRoundRM` double NOT NULL DEFAULT 0,
  `FullRoundCalcP` double NOT NULL DEFAULT 0,
  `HalfRoundEdges` int(11) DEFAULT 0,
  `HalfRoundPrice` float DEFAULT 0,
  `HalfRoundRM` double NOT NULL,
  `HalfRoundCalcP` double NOT NULL,
  `StepHalfRoundEdges` int(11) DEFAULT 0,
  `StepHalfRoundPrice` float DEFAULT 0,
  `StepHalfRoundRM` double NOT NULL,
  `StepHalfRoundCalcP` double NOT NULL,
  `EdgePolishEdges` int(11) DEFAULT 0,
  `EdgePolishPrice` float DEFAULT 0,
  `EdgePolishRM` double NOT NULL,
  `EdgePolishCalcP` double NOT NULL,
  `SinkCuttingType` varchar(20) DEFAULT 'None',
  `SinkCuttingNo` int(11) DEFAULT 0,
  `SinkCuttingPrice` float DEFAULT 0,
  `SinkCuttingRemark` varchar(20) DEFAULT 'None',
  `HoleCuttingNo` int(11) DEFAULT 0,
  `HoleCuttingPrice` float DEFAULT 0,
  `HoleCuttingRemark` varchar(20) DEFAULT 'None',
  `FermaCuttingNo` int(11) DEFAULT 0,
  `FermaCuttingPrice` float DEFAULT 0,
  `FermaCuttingRemark` varchar(20) DEFAULT 'None',
  `TotalMouldingPrice` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moulding_list`
--

INSERT INTO `moulding_list` (`order_id`, `product_id`, `category_id`, `MouldingType`, `FullRoundEdges`, `FullRoundPrice`, `FullRoundRM`, `FullRoundCalcP`, `HalfRoundEdges`, `HalfRoundPrice`, `HalfRoundRM`, `HalfRoundCalcP`, `StepHalfRoundEdges`, `StepHalfRoundPrice`, `StepHalfRoundRM`, `StepHalfRoundCalcP`, `EdgePolishEdges`, `EdgePolishPrice`, `EdgePolishRM`, `EdgePolishCalcP`, `SinkCuttingType`, `SinkCuttingNo`, `SinkCuttingPrice`, `SinkCuttingRemark`, `HoleCuttingNo`, `HoleCuttingPrice`, `HoleCuttingRemark`, `FermaCuttingNo`, `FermaCuttingPrice`, `FermaCuttingRemark`, `TotalMouldingPrice`) VALUES
(21, 3, NULL, 'Water Polish', 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 'Small', 1, 1, '1', 1, 1, '1', 1, 1, '1', 0),
(21, 2, NULL, 'Regular', 2, 1, 15.5, 15.5, 0, 0, 0, 0, 1, 1, 7.75, 7.75, 0, 0, 0, 0, 'Small', 9, 8, '9', 0, 0, 'None', 0, 0, 'None', 0),
(21, 2, NULL, 'Regular', 2, 1, 15.5, 15.5, 0, 0, 0, 0, 1, 1, 7.75, 7.75, 0, 0, 0, 0, 'Small', 9, 8, '9', 0, 0, 'None', 0, 0, 'None', 0),
(54, 1, NULL, 'Water Polish', 1, 1, 7.75, 7.75, 0, 0, 0, 0, 1, 1, 7.75, 7.75, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0),
(57, 1, NULL, 'Regular', 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 'Big', 1, 1, '1', 1, 1, '1', 1, 1, '1', 33),
(58, 2, NULL, 'Water Polish', 0, 0, 0, 0, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 'Big', 1, 1, '1', 0, 0, 'None', 1, 1, '1', 24.5),
(58, 3, NULL, 'Regular', 1, 1, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7),
(59, 3, NULL, 'Regular', 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 1, 1, 7.5, 7.5, 11, 1, 82.5, 82.5, 'None', 0, 0, 'None', 0, 0, 'None', 1, 1, '1', 106),
(59, 2, NULL, 'Regular', 1, 1, 7, 7, 1, 1, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 1, 1, '1', 15),
(60, 3, NULL, 'Water Polish', 1, 1, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 4),
(60, 3, NULL, 'Regular', 1, 1, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 4),
(60, 4, NULL, 'Water Polish', 1, 1, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 1, 1, '1', 8),
(63, 7, NULL, 'Regular', 1, 2, 7.5, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 5, 2, 'proper', 17),
(64, 6, NULL, 'Water Polish', 1, 1, 7.5, 7.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.5),
(64, 6, NULL, 'Water Polish', 1, 1, 7.5, 7.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.5),
(64, 6, NULL, 'Water Polish', 1, 1, 7.5, 7.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.5),
(64, 6, NULL, 'Water Polish', 1, 1, 7.5, 7.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.5),
(66, 6, NULL, 'Water Polish', 1, 1, 7.75, 7.75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.75),
(69, 3, NULL, 'Water Polish', 4, 4, 31, 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 124),
(69, 7, NULL, 'Water Polish', 0, 0, 0, 0, 0, 0, 0, 0, 22, 33, 165, 5445, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 5445),
(70, 1, 3, 'Regular', 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 15, 30, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 30),
(70, 1, 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 1, 1, '22', 1),
(72, 1, 1, 'Regular', 1, 1, 7.5, 7.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.5),
(73, 3, 11, 'Regular', 1, 1, 7.5, 7.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Big', 9, 9, 'this is a big remark', 0, 0, 'None', 0, 0, 'None', 16.5),
(73, 7, 17, 'Regular', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 1, 1, '1', 1),
(75, 6, 16, 'Regular', 7, 7, 45.5, 318.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 318.5),
(77, 2, 7, 'Regular', 0, 0, 0, 0, 1, 2, 7.5, 15, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 1, 11, 'proper', 26),
(80, 3, 11, 'Regular', 1, 1, 7.75, 7.75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 0, 0, 'None', 7.75);

-- --------------------------------------------------------

--
-- Table structure for table `new_order`
--

CREATE TABLE `new_order` (
  `order_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_order`
--

INSERT INTO `new_order` (`order_id`, `id`) VALUES
(1, 1),
(16, 1),
(2, 2),
(36, 2),
(64, 2),
(72, 2),
(3, 3),
(69, 3),
(80, 3),
(4, 4),
(56, 4),
(5, 5),
(63, 5),
(6, 6),
(15, 6),
(60, 6),
(7, 7),
(8, 8),
(40, 8),
(75, 8),
(79, 8),
(9, 9),
(14, 9),
(17, 9),
(33, 9),
(34, 9),
(58, 9),
(10, 10),
(28, 10),
(42, 10),
(76, 10),
(11, 11),
(27, 11),
(43, 11),
(45, 11),
(67, 11),
(12, 12),
(53, 12),
(13, 13),
(18, 14),
(39, 14),
(41, 14),
(57, 14),
(19, 15),
(26, 15),
(31, 15),
(37, 15),
(59, 15),
(20, 16),
(71, 16),
(21, 17),
(30, 17),
(22, 18),
(23, 19),
(24, 20),
(70, 20),
(25, 21),
(65, 21),
(74, 21),
(29, 22),
(32, 23),
(35, 24),
(38, 25),
(44, 26),
(46, 27),
(77, 27),
(47, 28),
(48, 29),
(49, 30),
(50, 31),
(51, 32),
(52, 33),
(54, 34),
(55, 35),
(61, 36),
(66, 36),
(62, 37),
(68, 38),
(81, 38),
(73, 39),
(78, 40);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product`
--

CREATE TABLE `ordered_product` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT 0,
  `Measurements` varchar(10) DEFAULT NULL,
  `product_length` int(11) DEFAULT NULL,
  `product_width` int(11) DEFAULT NULL,
  `no_of_pieces` int(11) DEFAULT NULL,
  `product_price` double NOT NULL,
  `Square_feet` double NOT NULL,
  `calculated_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`order_id`, `product_id`, `category_id`, `Measurements`, `product_length`, `product_width`, `no_of_pieces`, `product_price`, `Square_feet`, `calculated_price`) VALUES
(1, 1, 1, 'MM', 47, 22, 11, 11111, 0, 0),
(1, 1, 1, 'MM', 47, 22, 11, 11111, 0, 0),
(2, 2, 5, 'MM', 47, 22, 2, 11, 0, 0),
(2, 2, 5, 'MM', 47, 22, 2, 11, 0, 0),
(2, 2, 5, 'MM', 47, 22, 2, 11, 0, 0),
(2, 2, 5, 'MM', 47, 22, 2, 11, 0, 156.31),
(3, 3, 9, 'MM', 83, 3, 2, 11, 0, 38.06),
(3, 3, 9, 'MM', 83, 3, 2, 11, 0, 38.06),
(3, 2, 5, 'Inch', 90, 4, 5, 1, 0, 12.5),
(3, 2, 5, 'Inch', 90, 4, 5, 1, 0, 12.5),
(3, 2, 5, 'Inch', 90, 4, 5, 1, 0, 12.5),
(3, 2, 5, 'Inch', 91, 23, 2, 1, 0, 29.07),
(3, 2, 5, 'Inch', 89, 5, 1, 1, 0, 3.09),
(3, 2, 5, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(3, 2, 6, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(3, 2, 5, 'Inch', 91, 23, 2, 1, 29.07, 29.07),
(4, 1, 2, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(4, 1, 2, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(4, 3, 9, 'MM', 48, 24, 2, 1, 16, 16),
(4, 3, 9, 'MM', 84, 3, 2, 1, 3.5, 3.5),
(5, 1, 1, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(5, 1, 1, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(5, 3, 10, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(5, 3, 10, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(5, 1, 1, 'Inch', 90, 9, 1, 1, 5.63, 5.63),
(5, 1, 1, 'Inch', 90, 7, 1, 1, 4.38, 4.38),
(5, 2, 5, 'MM', 84, 3, 2, 1, 3.5, 3.5),
(5, 2, 5, 'MM', 84, 3, 2, 1, 3.44, 3.44),
(6, 2, 6, 'MM', 84, 3, 2, 1, 3.5, 3.5),
(7, 1, 3, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(7, 3, 11, 'MM', 84, 6, 2, 1, 7, 7),
(19, 1, 1, 'Inch', 90, 75, 1, 1, 46.88, 46.88),
(20, 3, 9, 'Inch', 51, 24, 2, 1, 17, 17),
(21, 1, 1, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(21, 1, 1, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(21, 1, 1, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(21, 1, 1, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(21, 1, 1, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(21, 1, 1, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(21, 3, 10, 'Inch', 90, 4, 1, 1, 2.19, 2.19),
(21, 3, 10, 'Inch', 90, 4, 1, 1, 2.19, 2.19),
(21, 2, 5, 'Inch', 93, 23, 1, 1, 14.85, 14.85),
(21, 2, 5, 'Inch', 93, 23, 1, 1, 14.85, 14.85),
(23, 2, 5, 'Inch', 12, 75, 22, 44, 137.5, 6050),
(23, 2, 6, 'MM', 6, 1, 22, 22, 0.92, 20.24),
(28, 4, 13, 'MM', 3, 1, 1, 1, 0.02, 0.02),
(28, 4, 13, 'MM', 3, 1, 1, 1, 0.02, 0.02),
(29, 2, 6, 'Inch', 11, 67, 11, 7, 56.3, 394.1),
(30, 3, 9, 'MM', 3, 0, 34, 11, 0.31, 3.41),
(30, 3, 9, 'MM', 3, 0, 34, 11, 0.31, 3.41),
(30, 3, 9, 'MM', 3, 0, 34, 11, 0.31, 3.41),
(30, 3, 9, 'MM', 3, 0, 34, 11, 0.31, 3.41),
(31, 3, 10, 'MM', 3, 1, 1, 4, 0.02, 0.08),
(31, 3, 10, 'MM', 3, 1, 1, 4, 0.02, 0.08),
(32, 4, 13, 'MM', 1200, 550, 1, 1, 7.33, 7.33),
(32, 1, 3, 'Inch', 90, 1, 2, 11, 8.03, 88.33),
(32, 4, 13, 'MM', 1200, 550, 1, 1, 14.67, 14.67),
(33, 2, 5, 'MM', 2100, 75, 2, 1, 16, 16),
(34, 5, 14, 'MM', 48, 24, 2, 1, 8, 16),
(34, 2, 8, 'MM', 48, 24, 2, 1, 3.5, 16),
(34, 6, 16, 'Inch', 90, 4, 5, 1, 31, 31),
(34, 7, 17, 'Inch', 93, 24, 2, 1, 31, 31),
(34, 6, 16, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(39, 3, 10, 'MM', 48, 24, 2, 1, 16, 16),
(39, 3, 10, 'MM', 48, 24, 2, 1, 16, 16),
(40, 3, 10, 'MM', 83, 3, 2, 1, 14.67, 3.46),
(40, 1, 1, 'Inch', 91, 23, 2, 1, 29.07, 29.07),
(41, 5, 14, 'MM', 47, 22, 2, 1, 14.21, 14.21),
(42, 2, 6, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(42, 1, 3, 'Inch', 93, 24, 2, 1, 31, 31),
(42, 6, 16, 'Inch', 90, 5, 1, 1, 3.13, 3.13),
(42, 5, 14, 'MM', 48, 24, 2, 1, 16, 16),
(42, 4, 13, 'MM', 84, 3, 2, 1, 3.5, 3.5),
(43, 3, 9, 'Inch', 6, 1, 2, 1, 10.94, 0.08),
(44, 5, 14, 'Inch', 96, 24, 2, 1, 32, 32),
(44, 4, 13, 'MM', 48, 24, 2, 1, 16, 16),
(45, 5, 14, 'Inch', 93, 23, 2, 1, 29.71, 29.71),
(46, 3, 11, 'Inch', 93, 23, 2, 1, 29.71, 29.71),
(46, 5, 14, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(47, 2, 5, 'Inch', 93, 24, 2, 1, 31, 31),
(48, 5, 14, 'Inch', 93, 24, 2, 1, 31, 31),
(48, 6, 16, 'MM', 84, 3, 2, 1, 16, 3.5),
(49, 5, 14, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(49, 3, 11, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(50, 3, 9, 'MM', 2, 1, 2, 1, 36.67, 0.03),
(50, 5, 14, 'MM', 83, 3, 2, 1, 3.46, 3.46),
(50, 2, 6, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(51, 2, 5, 'Inch', 4, 1, 2, 1, 12.5, 0.06),
(53, 4, 13, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(53, 4, 13, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(53, 1, 1, 'MM', 48, 22, 2, 1, 14.67, 14.67),
(54, 1, 1, 'Inch', 91, 23, 2, 1, 29.07, 29.07),
(54, 4, 13, 'MM', 48, 22, 2, 1, 14.67, 14.67),
(56, 4, 13, 'MM', 48, 24, 2, 1, 16, 16),
(56, 4, 13, 'MM', 48, 24, 2, 1, 16, 16),
(56, 4, 13, 'Inch', 90, 4, 2, 1, 5, 5),
(56, 4, 13, 'Inch', 90, 4, 2, 1, 5, 5),
(56, 5, 14, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(56, 1, 1, 'Inch', 90, 5, 1, 1, 3.13, 3.13),
(57, 1, 1, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(59, 3, 9, 'Inch', 90, 5, 1, 1, 3.13, 3.13),
(60, 2, 5, 'Inch', 90, 6, 2, 1, 7.5, 7.5),
(60, 3, 10, 'MM', 48, 24, 2, 1, 16, 16),
(60, 4, 13, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(60, 4, 13, 'Inch', 90, 6, 5, 1, 18.75, 18.75),
(60, 3, 10, 'MM', 48, 24, 2, 1, 16, 16),
(60, 4, 13, 'MM', 84, 3, 2, 1, 3.5, 3.5),
(61, 1, 2, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(62, 2, 6, 'Inch', 90, 550, 2, 11, 687.5, 7562.5),
(62, 6, 16, 'MM', 48, 22, 5, 1, 36.67, 36.67),
(62, 2, 7, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(62, 7, 17, 'Inch', 2100, 75, 11, 22, 12031.25, 264687.5),
(63, 2, 8, 'Inch', 90, 6, 1, 1, 3.75, 3.75),
(63, 7, 17, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(64, 2, 6, 'Inch', 91, 23, 2, 1, 29.07, 29.07),
(64, 6, 16, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(64, 6, 16, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(64, 6, 16, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(64, 6, 16, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(64, 3, 11, 'MM', 47, 22, 2, 1, 14.21, 14.21),
(64, 2, 7, 'Inch', 90, 4, 1, 22, 2.19, 48.18),
(64, 2, 7, 'Inch', 90, 4, 1, 22, 2.19, 48.18),
(64, 1, 1, 'Inch', 1, 1, 1, 1, 0.01, 0.01),
(64, 1, 1, 'Inch', 1, 1, 1, 1, 0.01, 0.01),
(64, 1, 1, 'Inch', 1, 1, 1, 1, 0.01, 0.01),
(64, 3, 10, 'Inch', 2, 2, 2, 2, 0.06, 0.12),
(64, 3, 10, 'Inch', 2, 2, 2, 2, 0.06, 0.12),
(64, 3, 10, 'Inch', 2, 2, 2, 2, 0.06, 0.12),
(64, 6, 16, 'Inch', 66, 66, 66, 66, 1996.5, 131769),
(64, 6, 16, 'Inch', 66, 66, 66, 66, 1996.5, 131769),
(64, 6, 16, 'Inch', 66, 66, 66, 66, 1996.5, 131769),
(64, 2, 5, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(64, 2, 5, 'Inch', 90, 4, 5, 1, 10.94, 10.94),
(64, 2, 7, 'Inch', 90, 4, 1, 22, 2.19, 48.18),
(65, 2, 6, 'Inch', 91, 23, 2, 1, 29.07, 29.07),
(65, 3, 10, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(65, 4, 13, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(65, 6, 16, 'MM', 48, 22, 2, 1, 14.67, 14.67),
(65, 5, 14, 'MM', 83, 3, 2, 1, 3.46, 3.46),
(65, 5, 14, 'MM', 83, 3, 2, 1, 3.46, 3.46),
(65, 3, 11, 'MM', 83, 3, 2, 1, 3.46, 3.46),
(65, 3, 11, 'MM', 83, 3, 2, 1, 3.46, 3.46),
(65, 2, 8, 'Inch', 1200, 550, 2, 1, 9166.67, 9166.67),
(65, 1, 2, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(65, 4, 13, 'MM', 48, 22, 2, 1, 14.67, 14.67),
(66, 1, 1, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(66, 4, 13, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(66, 6, 16, 'Inch', 91, 23, 2, 1, 29.07, 29.07),
(67, 1, 1, 'MM', 48, 24, 2, 1, 16, 16),
(69, 3, 11, 'Inch', 91, 75, 11, 1, 521.35, 521.35),
(69, 7, 17, 'Inch', 89, 5, 5, 11, 15.45, 169.95),
(70, 1, 3, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(70, 1, 2, 'Inch', 90, 5, 1, 1, 3.13, 3.13),
(71, 2, 7, 'Inch', 91, 5, 2, 1, 6.32, 6.32),
(72, 1, 1, 'Inch', 90, 5, 1, 1, 3.13, 3.13),
(73, 2, 6, 'Inch', 91, 5, 1, 1, 3.16, 3.16),
(73, 2, 6, 'Inch', 2100, 5, 1, 1, 72.92, 72.92),
(73, 3, 11, 'Inch', 89, 5, 2, 1, 6.18, 6.18),
(73, 7, 17, 'MM', 48, 22, 2, 1, 14.67, 14.67),
(74, 7, 17, 'Inch', 90, 5, 1, 1, 3.13, 3.13),
(74, 2, 6, 'Inch', 89, 75, 2, 1, 92.71, 92.71),
(75, 1, 1, 'Inch', 90, 4, 2, 1, 5, 5),
(75, 2, 7, 'Inch', 90, 5, 2, 22, 6.25, 137.5),
(75, 4, 13, 'Inch', 1200, 5, 5, 1, 208.33, 208.33),
(75, 2, 6, 'Inch', 1200, 5, 2, 12, 83.33, 999.96),
(75, 6, 16, 'Inch', 77, 77, 7, 7, 288.22, 2017.54),
(76, 4, 13, 'Inch', 90, 552, 2, 1, 690, 690),
(77, 1, 1, 'Inch', 90, 6, 2, 22, 7.5, 165),
(77, 2, 7, 'Inch', 90, 4, 5, 1, 12.5, 12.5),
(77, 1, 2, 'MM', 48, 3, 2, 1, 2, 2),
(77, 3, 12, 'Inch', 12, 12, 11, 1, 11, 11),
(79, 2, 5, 'MM', 48, 1, 11, 1, 3.67, 3.67),
(80, 3, 11, 'Inch', 91, 5, 1, 1, 3.16, 3.16),
(80, 4, 13, 'Inch', 89, 5, 1, 1, 3.09, 3.09),
(81, 3, 10, 'Inch', 90, 552, 1, 1, 345, 345);

-- --------------------------------------------------------

--
-- Table structure for table `order_summary`
--

CREATE TABLE `order_summary` (
  `order_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `Cutting` varchar(5) DEFAULT NULL,
  `Moulding` varchar(5) DEFAULT NULL,
  `Delivery_date` date DEFAULT NULL,
  `Delivery_cost` int(11) DEFAULT NULL,
  `Total_amount` double NOT NULL DEFAULT 0,
  `cancelled` varchar(5) NOT NULL DEFAULT 'No',
  `cutting_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `moulding_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `dispatch_status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_summary`
--

INSERT INTO `order_summary` (`order_id`, `id`, `order_date`, `Cutting`, `Moulding`, `Delivery_date`, `Delivery_cost`, `Total_amount`, `cancelled`, `cutting_status`, `moulding_status`, `dispatch_status`) VALUES
(8, 8, '2021-03-04', 'Yes', 'No', '2021-03-13', 100, 0, 'yes', 'Pending', 'Pending', 'Pending'),
(9, 9, '2021-03-04', 'Yes', 'No', '2021-03-06', 500, 0, 'yes', 'Done', 'Done', 'Done'),
(10, 10, '2021-03-04', 'Yes', 'No', '2021-03-06', 100, 0, 'yes', 'Done', 'Pending', 'Done'),
(12, 12, '2021-03-04', 'Yes', 'No', '2021-03-06', 60, 0, 'yes', 'Done', 'Pending', 'Done'),
(12, 12, '2021-03-04', 'Yes', 'No', '2021-03-06', 60, 0, 'yes', 'Done', 'Pending', 'Done'),
(12, 12, '2021-03-04', 'Yes', 'No', '2021-03-06', 60, 0, 'yes', 'Done', 'Pending', 'Done'),
(13, 13, '2021-03-04', 'Yes', 'No', '2021-03-06', 10, 0, 'yes', 'Done', 'Pending', 'Done'),
(21, 17, '2021-03-05', 'Yes', 'Yes', '2021-03-06', 500, 0, 'No', 'Done', 'Done', 'Done'),
(21, 17, '2021-03-05', 'Yes', 'Yes', '2021-03-06', 500, 0, 'No', 'Done', 'Done', 'Done'),
(21, 17, '2021-03-05', 'Yes', 'No', '2021-03-06', 70, 0, 'No', 'Done', 'Done', 'Done'),
(22, 18, '2021-03-05', 'Yes', 'No', '2021-03-06', 10, 0, 'yes', 'Pending', 'Pending', 'Pending'),
(25, 21, '2021-03-05', 'Yes', 'No', '2021-03-27', 60, 0, 'yes', 'Pending', 'Pending', 'Pending'),
(26, 15, '2021-03-07', 'Yes', 'No', '2021-04-03', 1999, 0, 'No', 'Done', 'Pending', 'Done'),
(27, 11, '2021-03-07', 'Yes', 'No', '2021-03-20', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(28, 10, '2021-03-07', 'Yes', 'No', '2021-03-27', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(29, 22, '2021-03-07', 'Yes', 'No', '2021-03-26', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(30, 17, '2021-03-08', 'Yes', 'No', '2021-04-02', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(31, 15, '2021-03-08', 'Yes', 'No', '2021-03-26', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(32, 23, '2021-03-08', 'Yes', 'No', '2021-03-10', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(33, 9, '2021-03-08', 'Yes', 'No', '2021-03-20', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(34, 9, '2021-03-08', 'Yes', 'No', '2021-03-20', 12, 0, 'No', 'Done', 'Pending', 'Pending'),
(35, 24, '2021-03-08', 'Yes', 'No', '2021-03-21', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(36, 2, '2021-03-08', 'Yes', 'No', '2021-03-12', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(37, 15, '2021-03-08', 'Yes', 'No', '2021-03-20', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(38, 25, '2021-03-08', 'Yes', 'No', '2021-04-04', 2, 0, 'No', 'Pending', 'Pending', 'Pending'),
(39, 14, '2021-03-08', 'Yes', 'No', '2021-03-19', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(40, 8, '2021-03-08', 'Yes', 'No', '2021-03-27', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(41, 14, '2021-03-08', 'Yes', 'No', '2021-03-19', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(42, 10, '2021-03-08', 'Yes', 'No', '2021-04-04', 2, 0, 'No', 'Pending', 'Pending', 'Pending'),
(43, 11, '2021-03-08', 'Yes', 'No', '2021-04-11', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(44, 26, '2021-03-08', 'Yes', 'No', '2021-03-28', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(45, 11, '2021-03-08', 'Yes', 'No', '2021-04-02', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(46, 27, '2021-03-08', 'Yes', 'No', '2021-04-03', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(47, 28, '2021-03-08', 'Yes', 'No', '2021-03-28', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(48, 29, '2021-03-08', 'Yes', 'No', '2021-03-28', 1999, 0, 'No', 'Pending', 'Pending', 'Pending'),
(49, 30, '2021-03-08', 'Yes', 'No', '2021-03-17', 12, 0, 'No', 'Pending', 'Pending', 'Pending'),
(50, 31, '2021-03-08', 'Yes', 'No', '2021-03-19', 500, 0, 'No', 'Pending', 'Pending', 'Pending'),
(51, 32, '2021-03-09', 'Yes', 'No', '2021-03-20', 500, 0, 'No', 'Pending', 'Pending', 'Pending'),
(52, 33, '2021-03-09', 'Yes', 'No', '2021-03-19', 100, 0, 'No', 'Pending', 'Pending', 'Pending'),
(53, 12, '2021-03-09', 'Yes', 'No', '2021-03-11', 500, 0, 'No', 'Pending', 'Pending', 'Pending'),
(54, 34, '2021-03-09', 'Yes', 'Yes', '2021-03-13', 1, 1, 'No', 'Done', 'Done', 'Done'),
(55, 35, '2021-03-09', 'Yes', 'No', '2021-03-26', 1, 0, 'No', 'Pending', 'Pending', 'Pending'),
(56, 4, '2021-03-09', 'Yes', 'No', '2021-03-28', 1, 42, 'No', 'Pending', 'Pending', 'Pending'),
(58, 9, '2021-03-09', 'Yes', 'Yes', '2021-04-09', 70, 31.5, 'No', 'Done', 'Done', 'Done'),
(59, 15, '2021-03-09', 'Yes', 'Yes', '2021-04-08', 10, 124.13, 'No', 'Pending', 'Pending', 'Pending'),
(60, 6, '2021-03-09', 'Yes', 'Yes', '2021-03-28', 12, 27.5, 'No', 'Pending', 'Pending', 'Pending'),
(61, 36, '2021-03-10', 'Yes', 'No', '2021-03-11', 10, 12.5, 'No', 'Done', 'Pending', 'Done'),
(62, 37, '2021-03-10', 'Yes', 'No', '2021-04-02', 500, 7599.17, 'No', 'Pending', 'Pending', 'Pending'),
(63, 5, '2021-03-11', 'Yes', 'Yes', '2021-03-20', 45, 33.25, 'No', 'Pending', 'Pending', 'Pending'),
(64, 2, '2021-03-11', 'Yes', 'No', '2021-03-13', 10000, 395559.45, 'No', 'Pending', 'Pending', 'Pending'),
(65, 21, '2021-03-11', 'Yes', 'No', '2021-03-26', 20000, 9267.01, 'No', 'Pending', 'Pending', 'Pending'),
(66, 36, '2021-03-11', 'Yes', 'No', '2021-03-20', 10, 52.41, 'No', 'Pending', 'Pending', 'Pending'),
(67, 11, '2021-03-11', 'Yes', 'No', '2021-03-26', 70, 16, 'No', 'Pending', 'Pending', 'Pending'),
(68, 38, '2021-03-11', 'Yes', 'No', '2021-03-19', 3414, 0, 'No', 'Pending', 'Pending', 'Pending'),
(69, 3, '2021-03-11', 'Yes', 'Yes', '2021-03-12', 500, 6260.3, 'No', 'Pending', 'Pending', 'Pending'),
(70, 20, '2021-03-12', 'Yes', 'Yes', '2021-03-19', 500, 37.220000000001, 'No', 'Pending', 'Pending', 'Pending'),
(71, 16, '2021-03-13', 'Yes', 'No', '2021-03-26', 10, 6.32, 'No', 'Pending', 'Pending', 'Pending'),
(72, 2, '2021-03-13', 'Yes', 'Yes', '2021-03-27', 60, 10.63, 'No', 'Pending', 'Pending', 'Pending'),
(73, 39, '2021-03-13', 'Yes', 'No', '2021-03-28', 100, 114.43, 'No', 'Pending', 'Pending', 'Pending'),
(74, 21, '2021-03-15', 'Yes', 'No', '2021-03-26', 500, 3.13, 'No', 'Pending', 'Pending', 'Pending'),
(75, 8, '2021-03-15', 'Yes', 'No', '2021-03-20', 100, 3686.83, 'No', 'Pending', 'Pending', 'Pending'),
(76, 10, '2021-03-15', 'Yes', 'No', '2021-03-27', 10, 690, 'No', 'Pending', 'Pending', 'Pending'),
(77, 27, '2021-03-15', 'Yes', 'Yes', '2021-04-02', 500, 216.5, 'No', 'Pending', 'Pending', 'Pending'),
(79, 8, '2021-03-15', 'Yes', 'No', '2021-04-11', 70, 3.67, 'No', 'Pending', 'Pending', 'Pending'),
(80, 3, '2021-03-15', 'Yes', 'Yes', '2021-03-26', 1000, 14, 'No', 'Pending', 'Pending', 'Pending'),
(81, 38, '2021-03-16', 'Yes', 'No', '2021-03-25', 500, 345, 'No', 'Pending', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`) VALUES
(1, 'Granite'),
(2, 'Marble'),
(3, 'Stone'),
(4, 'Artificial Marble'),
(5, 'Granite Tiles'),
(6, 'Kitchen Sink'),
(7, 'Ceramic Tiles');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_category` varchar(30) DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `product_id`, `product_category`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 1, '3'),
(4, 1, '4'),
(5, 2, '1'),
(6, 2, '2'),
(7, 2, '3'),
(8, 2, '4'),
(9, 3, '1'),
(10, 3, '2'),
(11, 3, '3'),
(12, 3, '4'),
(13, 4, 'None'),
(14, 5, 'None'),
(16, 6, 'None'),
(17, 7, 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moulding_list`
--
ALTER TABLE `moulding_list`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `new_order`
--
ALTER TABLE `new_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `order_summary`
--
ALTER TABLE `order_summary`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `new_order`
--
ALTER TABLE `new_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moulding_list`
--
ALTER TABLE `moulding_list`
  ADD CONSTRAINT `moulding_list_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `new_order` (`order_id`),
  ADD CONSTRAINT `moulding_list_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `moulding_list_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`category_id`);

--
-- Constraints for table `new_order`
--
ALTER TABLE `new_order`
  ADD CONSTRAINT `new_order_ibfk_1` FOREIGN KEY (`id`) REFERENCES `client` (`id`);

--
-- Constraints for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD CONSTRAINT `ordered_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `new_order` (`order_id`),
  ADD CONSTRAINT `ordered_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `ordered_product_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`category_id`);

--
-- Constraints for table `order_summary`
--
ALTER TABLE `order_summary`
  ADD CONSTRAINT `order_summary_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `new_order` (`order_id`),
  ADD CONSTRAINT `order_summary_ibfk_2` FOREIGN KEY (`id`) REFERENCES `client` (`id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
