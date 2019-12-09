-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2019 at 05:01 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_xlldeal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'piyalibasu', 'ca34cb452c9c12090f552f15b70d7763'),
(3, 'anupam', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `catrgories`
--

CREATE TABLE IF NOT EXISTS `catrgories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catrgories`
--

INSERT INTO `catrgories` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Fruits', '70e3af92f42d99d5d3022a6e968393ff.jpg'),
(2, 'Veggies', '2a2107d1bcb556a30424faede85797a2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cod_location`
--

CREATE TABLE IF NOT EXISTS `cod_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `pin` int(6) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `cod_location`
--

INSERT INTO `cod_location` (`location_id`, `pin`, `location`) VALUES
(11, 700001, 'Kolkatta G.P.O'),
(12, 700002, 'Cossipore H.O'),
(13, 700003, 'Baghbazar S.O'),
(14, 700004, 'R.G.Kar Medical College S.O'),
(15, 700005, 'Hatkhola S.O'),
(16, 700006, 'Sahitya Parisad S.O'),
(17, 700007, 'Barabazar H.O'),
(18, 700008, 'Barisha S.O'),
(19, 700010, 'Joramandir S.O'),
(20, 700012, 'Yogayog Bhawan S.O'),
(21, 700013, 'Dharmatala S.O'),
(22, 700014, 'Bamboovila S.O'),
(23, 700014, 'Intally S.O'),
(24, 700015, 'Sales Tax Building S.O'),
(25, 700015, 'Seal Lane S.O'),
(26, 700016, 'Park Street H.O'),
(27, 700017, 'Jhowtala S.O'),
(28, 700018, 'Rabindra Nagar S.O (Kolkata)'),
(29, 700019, 'Ballygunge S.O'),
(30, 700020, 'L.R.Sarani S.O'),
(31, 700021, 'Fort William S.O'),
(32, 700022, 'Hastings S.O'),
(33, 700023, 'Mansatala S.O'),
(34, 700024, 'P.G.Reach S.O'),
(35, 700025, 'Bhawanipore S.O'),
(36, 700026, 'Sahanagar S.O (Kolkata)'),
(37, 700027, 'Natioinal Library S.O'),
(38, 700028, 'Dumdum S.O'),
(39, 700029, 'Rash Behari Avenue S.O'),
(40, 700030, 'Purba Sinthee S.O'),
(41, 700031, 'Dhakuria S.O'),
(42, 700032, 'Jadavpur University S.O'),
(43, 700033, 'Tollygunge H.O'),
(44, 700034, 'Panchanantala S.O'),
(45, 700035, 'Alambazar S.O'),
(46, 700036, 'Baranagar S.O'),
(47, 700037, 'Belgachia S.O'),
(48, 700038, 'Sahapur S.O'),
(49, 700041, 'Sirity S.O'),
(50, 700042, 'Kasba S.O (Kolkata)'),
(51, 700043, 'Sonai S.O (Kolkata)'),
(52, 700044, 'Badartala S.O'),
(53, 700045, 'Lake Gardens S.O'),
(54, 700046, 'Gobinda Khatick Road S.O'),
(55, 700047, 'Naktala S.O'),
(56, 700050, 'South Sinhee S.O'),
(57, 700052, 'Kolkata Airport S.O'),
(58, 700053, 'N.R.Avenue S.O'),
(59, 700054, 'Cmda Abasan S.O'),
(60, 700060, 'Mahendra Banerjee Road S.O'),
(61, 700061, 'Sarsoona S.O'),
(62, 700062, 'W.B.Governors Camp. S.O'),
(63, 700063, 'Paschim Barisha S.O'),
(64, 700063, 'Thakurpukur S.O'),
(65, 700065, 'Rabindra Nagar S.O (Bankura)'),
(66, 700066, 'Bidhangarh S.O'),
(67, 700067, 'Lily Biscuit S.O'),
(68, 700068, 'Jodhpur Park S.O'),
(69, 700069, 'Income Tax Building S.O'),
(70, 700071, 'Little Russel Street S.O'),
(71, 700072, 'Princep Street S.O'),
(72, 700073, 'Colootola S.O'),
(73, 700074, 'Motijheel S.O (Bankura)'),
(74, 700075, 'Santoshpur Avenue S.O'),
(75, 700077, 'Bediapara S.O'),
(76, 700078, 'Haltu S.O'),
(77, 700078, 'Jadavgarh S.O'),
(78, 700080, 'Mall Road'),
(79, 700082, 'Haridevpur S.O'),
(80, 700085, 'K.G Bose Sarani S.O'),
(81, 700086, 'Baghajatin S.O'),
(82, 700087, 'New Market S.O'),
(83, 700088, 'Taratala Road S.O'),
(84, 700090, 'Noapara S.O (Bankura)'),
(85, 700092, 'Regent Estate S.O'),
(86, 700094, 'S.R.F.T.I. S.O'),
(87, 700095, 'Golf Green S.O'),
(88, 700099, 'Mukundapur S.O'),
(89, 700107, 'E.K.T S.O'),
(90, 700108, 'ISI Po S.O'),
(91, 700084, 'Jadavpur');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_name` varchar(255) NOT NULL,
  `collection_banner` varchar(255) NOT NULL,
  `collection_thumble` varchar(255) NOT NULL,
  `collection_details` text NOT NULL,
  PRIMARY KEY (`collection_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`collection_id`, `collection_name`, `collection_banner`, `collection_thumble`, `collection_details`) VALUES
(1, 'Fuits collection', '258751af1eef4a2f85c22416c3d3ab36.jpg', 'f39ae9ff3a81f499230c4126e01f421b.jpg', 'All fresh Fruits'),
(2, 'Veggies', '7f1de29e6da19d22b51c68001e7e0e54.jpg', 'f40438b554cc0e3d96ee6064c5798f55.jpg', 'Veggies collection'),
(3, 'dog food', '50cf0fe63e0ff857e1c9d01d827267ca.jpg', 'cfee398643cbc3dc5eefc89334cacdc1.jpg', 'doog food'),
(5, 'home appliances', '3695c15033a98875d655072649e59b27.jpg', 'f5ef2786b0fea10efe543e7bba170c12.jpg', 'home appliances'),
(6, 'Bakery Products', '29524de15c2dd7ad71bcec153fcb3717.jpg', '5aaa384f657cd101b3a1752998130672.jpg', 'Bakery Products'),
(7, 'immetation jewellery', 'ea970b934031dcce24ca218b017a5503.jpg', '1368ba1ab6ed38bb1f26f36673739d54.jpg', 'immetation jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `front_banner`
--

CREATE TABLE IF NOT EXISTS `front_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `front_banner`
--

INSERT INTO `front_banner` (`banner_id`, `url`, `image`) VALUES
(4, 'http://balaskolkata.com/allproduct.php', '15957af9757b8c7b1a29c6863249979c.jpg'),
(5, 'http://balaskolkata.com/allproduct.php', 'c853ffc1de0403ee042d915a74737330.jpg'),
(8, 'http://balaskolkata.com/allproduct.php', '488bf06df2d76318387c2796c0b2e9be.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`record_id`, `product_id`, `category_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 4, 1),
(4, 5, 2),
(5, 6, 2),
(6, 7, 1),
(7, 8, 1),
(8, 9, 1),
(9, 10, 1),
(10, 12, 1),
(11, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_collection`
--

CREATE TABLE IF NOT EXISTS `product_collection` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product_collection`
--

INSERT INTO `product_collection` (`record_id`, `product_id`, `collection_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 4, 1),
(4, 5, 1),
(5, 6, 1),
(6, 7, 1),
(7, 8, 1),
(8, 9, 1),
(9, 10, 1),
(10, 11, 6),
(11, 12, 1),
(12, 13, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `review_by(email)` varchar(255) NOT NULL,
  `review_by(name)` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `rate` float NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `xll_cart`
--

CREATE TABLE IF NOT EXISTS `xll_cart` (
  `Cart_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`Cart_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `xll_cart`
--

INSERT INTO `xll_cart` (`Cart_ID`, `User_ID`, `product_id`, `product_price`, `qty`, `status`) VALUES
(7, '37945dd3dc09197f46.43371714', 13, 37, 1, 'pending'),
(8, '316515dd3de10b7cdb2.51711677', 1, 80, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `xll_newsletter`
--

CREATE TABLE IF NOT EXISTS `xll_newsletter` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_by` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `xll_order`
--

CREATE TABLE IF NOT EXISTS `xll_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` varchar(255) NOT NULL,
  `order_by` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `pin` varchar(6) NOT NULL,
  `state` varchar(255) NOT NULL,
  `totalamount` float NOT NULL,
  `deliverycharge` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `mode` varchar(255) NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT '0',
  `current_status` varchar(255) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `xll_product`
--

CREATE TABLE IF NOT EXISTS `xll_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `selling` float NOT NULL,
  `special` tinyint(1) DEFAULT NULL,
  `SKU` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `xll_product`
--

INSERT INTO `xll_product` (`product_id`, `product_name`, `description`, `image`, `price`, `selling`, `special`, `SKU`) VALUES
(1, 'Brinjal', 'asudhiuassgdukh', 'ab2d3ab32b06ce52072a27ea0b60fc6f.jpg', 100, 80, 1, 'jsba'),
(2, 'look', 'erftgyuiytfvdbnjs', 'db49d990bff2b2c5e1ac041cba78b21c.jpg', 12, 12, 1, '65'),
(3, 'Strawberry', 'Strawberries', '8248a99e81e752cb9b41da3fc43fbe7f.jpg', 100, 80, 1, 'N80'),
(4, 'Strawberry', 'asjkndjkasndkj', '30875cf3491d376f2b9815c231b3e1a5.jpg', 150, 120, 1, 'N40'),
(5, 'banana', 'Chillies', 'c77704219ca3bd62e309f297b3c39fd9.jpg', 50, 40, 1, 'N40'),
(6, 'apple', 'apples', '7f43dabbd5526a44dd31130911a57322.jpg', 100, 80, 1, 'N41'),
(7, 'cherry', 'cherries ', '601040bb131db3d614d140f9cd43c242.jpg', 110, 85, 1, 'N42'),
(8, 'guvava', 'guvava', '2417dc8af8570f274e6775d4d60496da.jpg', 30, 18, 1, 'N43'),
(9, 'peach', 'peach', '52935de5832759231c25292dd6c3b841.jpg', 250, 210, 1, 'N44'),
(10, 'muskmelon', 'muskmelon', 'cbdf0b0d70ec00ff3d9e02bc628c01a4.jpg', 80, 65, 1, 'N45'),
(11, 'Bread', 'ahsosdhaohdno', 'f1e2b2c9255d552500a833ac828cd635.jpg', 35, 30, 1, 'N50'),
(12, 'jackfruit', 'jackfruit', 'd118d975f3cdf403187a078f3a06f866.jpg', 100, 80, 0, 'N49'),
(13, 'Bread', 'Brown breads', '500739868ce9f7f0857260404eab4d41.jpg', 40, 37, 0, 'N55');

-- --------------------------------------------------------

--
-- Table structure for table `xll_productimage`
--

CREATE TABLE IF NOT EXISTS `xll_productimage` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `xll_user`
--

CREATE TABLE IF NOT EXISTS `xll_user` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `xll_user`
--

INSERT INTO `xll_user` (`customer_id`, `customer_email`, `customer_name`, `customer_number`, `password`, `billing_address`, `shipping_address`) VALUES
(5, 'info2programmer@gmail.com', 'Sakat Bhadury', '9547763998', '202cb962ac59075b964b07152d234b70', 'Hello User', 'Hello '),
(6, 'prasun@php.net', 'Prasun Pal', '9874563210', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(7, 'admin@demo.com', 'Demo', '9874563210', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(8, 'saikat@visioncreative.co.in', 'Saikat Bhadury', '9547763998', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(9, 'piyalibasu70@gmail.com', 'Piyali Basu', '9830728668', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL),
(10, 'basu.sanjukta20@gmail.com', 'Sanjukta Basu', '8697446967', '76a6154889322e08f5bb1f950de4eeac', NULL, NULL),
(11, 'pallabi.mazumder.90@gmail.com', 'Pallabi Basu', '8100841382', 'd6dc56c840eb849a69c854b139c55011', NULL, NULL),
(12, 'romaroy.smart@gmail.com', 'Roma Roy', '9836808231', '2b01203e83a71e724533e861c8373705', NULL, NULL),
(13, 'deblinadas.89@gmail.com', 'Deblina Das', '8197552532', '29f13b5a475e90cb52338ef1f3c7f282', 'C105, Golden Nest Apartment, JCRLAYOUT, 2ndCross, Panathur Main Road,', ''),
(14, 'moumitamitra945@gmail.com', 'moumita mitra', '9804806521', '3063cf1ca25e85ded38bcc0064b77f51', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
