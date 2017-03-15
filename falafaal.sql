-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 01:52 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falafaal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

DROP TABLE IF EXISTS `adminpanel`;
CREATE TABLE IF NOT EXISTS `adminpanel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `username`, `password`, `email`, `date`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '2016-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(2, 'dhiraj', 'raj', 'dhiraj@gmail.com', 'dhiraj', 'raj'),
(8, 'satish', 'chaudhary', 'satish4link@gmail.com', 'satishc132', 'aaaaa'),
(10, 'aman', 'chaudhary', 'aman@gmail.com', 'aman1', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `prod_id`, `cust_name`, `prod_name`, `price`, `qty`, `total`) VALUES
(6, 16, 'aman1', 'Fish', 3, 6, 18),
(7, 9, 'aman1', 'Product 4', 2, 4, 8),
(8, 15, 'aman1', 'Blackforest', 5, 4, 20),
(9, 15, 'satishc132', 'Blackforest', 5, 5, 25),
(10, 9, 'satishc132', 'Product 4', 2, 6, 12),
(11, 9, 'aman1', 'Product 4', 2, 5, 10),
(12, 13, 'dhiraj', 'Chicken Wings', 4, 5, 20),
(13, 13, 'dhiraj', 'Chicken Wings', 4, 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_rate` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `shop_id`, `product_name`, `product_rate`, `product_image`, `description`) VALUES
(16, 12, 'Fish', 3, 'fishmonger.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet. Nam lacinia semper mi sed bibendum. Fusce scelerisque fermentum aliquet. Nulla nec dapibus dui. Nam eleifend lectus vitae tincidunt '),
(9, 13, 'Product 4', 2, 'bakery.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet. Nam lacinia semper mi sed bibendum. Fusce scelerisque fermentum aliquet. Nulla nec dapibus dui. Nam eleifend lectus vitae tincidunt '),
(15, 13, 'Blackforest', 5, 'blackforest.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet. Nam lacinia semper mi sed bibendum. Fusce scelerisque fermentum aliquet. Nulla nec dapibus dui. Nam eleifend lectus vitae tincidunt '),
(13, 10, 'Chicken Wings', 4, 'chickenwings.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet. Nam lacinia semper mi sed bibendum. Fusce scelerisque fermentum aliquet. Nulla nec dapibus dui. Nam eleifend lectus vitae tincidunt '),
(14, 11, 'Cauliflower', 2, 'cauli.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet. Nam lacinia semper mi sed bibendum. Fusce scelerisque fermentum aliquet. Nulla nec dapibus dui. Nam eleifend lectus vitae tincidunt ');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `traders_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_image` varchar(255) NOT NULL,
  `shop_status` text NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `traders_id`, `shop_name`, `shop_image`, `shop_status`) VALUES
(11, 3, 'Greengrocer', 'greengrocer.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet.'),
(10, 4, 'Buchers Shop', 'buchershop.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet.'),
(12, 2, 'Fishmonger', 'fishmonger.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet.'),
(13, 1, 'Bakery', 'bakery.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet.'),
(14, 4, 'Delicatessen', 'delicatessen.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum odio vel sem dignissim, nec porta purus aliquet.');

-- --------------------------------------------------------

--
-- Table structure for table `traders`
--

DROP TABLE IF EXISTS `traders`;
CREATE TABLE IF NOT EXISTS `traders` (
  `traders_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(128) NOT NULL,
  `t_username` varchar(32) NOT NULL,
  `t_password` varchar(32) NOT NULL,
  `t_email` varchar(128) NOT NULL,
  PRIMARY KEY (`traders_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traders`
--

INSERT INTO `traders` (`traders_id`, `full_name`, `t_username`, `t_password`, `t_email`) VALUES
(1, 'Satish Chaudhary', 'satish4link', 'traders', 'satish4link@gmail.com'),
(2, 'Kujolhang Limbu', 'limbu123', 'traders', 'kujolhang@gmail.com'),
(3, 'Tapish Lochan Adhikari', 'lochan123', 'traders', 'tapish@gmail.com'),
(4, 'William Riwaj Lamichhane', 'riwaj123', 'traders', 'william@gmail.com'),
(5, 'Sagar Kafle', 'Kafle123', 'traders', 'sagar@gmail.com'),
(6, 'Amit Gurung', 'Gurung123', 'traders', 'amitgurung@gmail.com'),
(7, 'Ajhil Joshi', 'joshi123', 'traders', 'ajhiljoshi@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
