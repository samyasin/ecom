-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2018 at 03:47 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `email`) VALUES
(1, 'sss', 'sssss', 'a@a'),
(3, 'salameh', 'salameh', 's@s'),
(4, 'hehe2', 'hehe', 'he@he2'),
(5, 'me2', 'meme', 'me@me2'),
(9, 'test2', 'test2', 'test2@test2');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(16, 'clothes'),
(17, 'shoes'),
(18, 'accessories'),
(19, 'men'),
(20, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

DROP TABLE IF EXISTS `order_table`;
CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` int(3) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `product_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `qty` int(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_desc` text NOT NULL,
  `cat_id` int(3) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `product_image`, `product_desc`, `cat_id`) VALUES
(20, 'sh2', 222, 'download (1).jpg', 'sh2 with price', 17),
(19, 'sh1', 111, 'download (2).jpg', 'sh1 with price', 17),
(18, 'c33', 333, 'images.jpg', 'c33 with price 333', 16),
(17, 'c22', 222, 'download (2).jpg', 'c22 with price 345', 16),
(16, 'c11', 112233, 'download (1).jpg', 'c11 with price 12234', 16),
(10, 'cloth1', 100, 'ssssssagg.jpg', 'cloth with price 100', 16),
(11, 'shoe2', 200, 'ssssssagg.jpg', 'shoe with price 200', 17),
(12, 'shoe3', 300, 'ssssssagg.jpg', 'shoe with price 300', 17),
(13, 'acessories3', 300, '8e577c6aa9b4436b0f889eae27aeceaf.jpg', 'acessories with price 300', 18),
(14, 'c1', 111, '0cdc1d96194ba29cbd133fdac199f344.jpg', 'price 111', 16),
(15, 'c2', 222, 'ssssssagg.jpg', 'price 222', 16),
(21, 'sh3', 333, 'images (2).jpg', 'sh3 with price', 17),
(22, 'ac1', 111, 'download (1).jpg', 'ac 1 with price', 18),
(23, 'ac2', 222, 'download.jpg', 'ac2 with price', 18),
(24, 'ac3', 333, 'images (1).jpg', 'ac3 with price', 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
