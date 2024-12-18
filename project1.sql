-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2013 at 09:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `query` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `query`) VALUES
(1, 'ranjna', 'nmm', 'nnekr,'),
(2, 'vvf', 'fdsfs', 'dsfs'),
(3, 'ranjana', 'nkmsks', 'ffdvrfgrtgv');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `comments` varchar(20) NOT NULL,
  `id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `type`, `comments`, `id`) VALUES
('rubina', 'rr@gmail.com', 'suggestion', 'gfjugkhkjhj\r\nhgvjghj', 1),
('ranju', 'a@gmail.com', 'suggestion', 'dcnvdlkcd', 2),
('ranjana', 'ranjana.cgc@gmail.co', 'suggestion', 'fejhfekjfkefm', 8),
('kamal', 'g@gmail.com', 'suggestion', 'hello', 9),
('kartik', 'garg@gmail.com', 'feedback', 'great site', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(30) NOT NULL,
  `eventdate` varchar(30) NOT NULL,
  `eventlocation` varchar(30) NOT NULL,
  `eventgathering` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `clientname` varchar(30) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `eventname`, `eventdate`, `eventlocation`, `eventgathering`, `total`, `clientname`) VALUES
(1, 'meeting', '19/06/2014', 'Chandigarh', '200', '20000', 'kamalgarg '),
(2, 'Birthday', '4/03/2014', 'Mumbai', '400', '17000', 'kamalgarg '),
(3, 'Marriage', '18/05/2013', 'Delhi', '200', '20000', 'kamal garg '),
(4, 'Engagement', '7/06/2014', 'Chandigarh', '400', '22000', 'kamal garg '),
(5, 'Engagement', '3/05/2014', 'Chandigarh', '200', '30000', 'kamalgarg'),
(6, 'Marriage', '4/01/2014', 'Chandigarh', '200', '10000', 'kamalgarg'),
(7, 'Engagement', '6/08/2016', 'Pune', '100', '8000', 'kamalgarg'),
(8, 'Engagement', '6/08/2016', 'Pune', '100', '8000', 'kamalgarg'),
(9, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `orderid` int(40) NOT NULL,
  `servicename` varchar(30) NOT NULL,
  `pending` varchar(30) NOT NULL,
  `sername` varchar(30) NOT NULL,
  `vemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`orderid`, `servicename`, `pending`, `sername`, `vemail`) VALUES
(1, 'softdrinks', 'booked', 'catering', 'pooja@gmail.com'),
(2, 'firework', 'pending', 'firework', '-----'),
(2, 'rockband', 'booked', 'dj/sound', 'g@gmail.com'),
(3, 'classical', 'booked', 'dj/sound', 'g@gmail.com'),
(3, 'firework', 'pending', 'firework', '-----'),
(4, 'classical', 'pending', 'dj/sound', '-----'),
(4, 'firework', 'pending', 'firework', '-----'),
(4, 'ballondecoration', 'pending', 'decoration', '-----'),
(5, 'bridalmakeup', 'pending', 'parlour', '-----'),
(5, 'bridalmakeup', 'pending', 'parlour', '-----'),
(5, 'bridalmakeup', 'pending', 'parlour', '-----'),
(6, 'bridalmakeup', 'pending', 'parlour', '-----'),
(7, 'djsystem', 'pending', 'dj/sound', '-----'),
(8, 'djsystem', 'pending', 'dj/sound', '-----');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `regid` int(30) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(56) NOT NULL,
  `pcode` varchar(30) NOT NULL,
  `pno` varchar(60) NOT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`regid`, `fname`, `lname`, `uname`, `pwd`, `gender`, `address`, `pcode`, `pno`) VALUES
(2, 'kamal', 'garg', 'garg@gmail.com', 'kamalgarg', '', 'ambala', '135136', '2147483647'),
(3, '', '', '', '', '', '', '', ''),
(4, 'kamal', 'garg', 's@gmail.com', 'kamalgarg', '', 'ambala', '135136', '9034965556');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `barat` varchar(20) NOT NULL,
  `fireworks` varchar(20) NOT NULL,
  `decoration` varchar(20) NOT NULL,
  `caterering` varchar(20) NOT NULL,
  `parlourservice` varchar(20) NOT NULL,
  `tent` varchar(20) NOT NULL,
  `lighting` varchar(20) NOT NULL,
  `card design` varchar(20) NOT NULL,
  `transport service` varchar(20) NOT NULL,
  `doli service` varchar(20) NOT NULL,
  `bakery service` varchar(20) NOT NULL,
  `hall` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--


-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE IF NOT EXISTS `subservices` (
  `ss_id` varchar(30) NOT NULL,
  `ss_name` varchar(30) NOT NULL,
  `ss_price` varchar(30) NOT NULL,
  `servicename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subservices`
--

INSERT INTO `subservices` (`ss_id`, `ss_name`, `ss_price`, `servicename`) VALUES
('baraat2', 'baratband', '1000', 'baraat'),
('baraat1', 'ghori', '1500', 'baraat'),
('firework1', 'firework', '10000', 'firework'),
('parlour1', 'bridalmakeup', '10000', 'parlour'),
('parlour2', 'hairstyle', '3000', 'parlour'),
('parlour3', 'jewellery', '7000', 'parlour'),
('parlour4', 'mehandi', '2000', 'parlour'),
('decoration4', 'stagedecoration', '20000', 'decoration'),
('decoration3', 'carddecoration', '4000', 'decoration'),
('decoration2', 'ballondecoration', '2000', 'decoration'),
('decoration1', 'vanuedecoration', '10000', 'decoration'),
('djsound1', 'celibrityshow', '12000', 'dj/sound'),
('djsound2', 'rockband', '7000', 'dj/sound'),
('djsound3', 'djsystem', '8000', 'dj/sound'),
('djsound4', 'classical', '10000', 'dj/sound'),
('cater1', 'vegiterian', '30000', 'catering'),
('cater2', 'non-vegiterian', '20000', 'catering'),
('cater3', 'southindian', '10000', 'catering'),
('cater4', 'softdrinks', '20000', 'catering'),
('cater5', 'sweetdish', '20000', 'catering'),
('cater6', 'snaks', '10000', 'catering'),
('lighting', 'lighting', '25000', 'lighting'),
('tent1', 'entrencetent', '45000', 'tentservice'),
('tent2', 'mandap', '11000', 'tentservice'),
('tent3', 'diningtent', '2300', 'tentservice'),
('tent4', 'maintent', '45000', 'tentservice'),
('transport1', 'busservice', '13000', 'transport'),
('transport2', 'limousine', '10000', 'transport'),
('transport3', 'hondacity', '9500', 'transport'),
('transport4', 'mercedes', '15000', 'transport'),
('card1', 'Type1', '200', 'card'),
('card2', 'Type2', '300', 'card'),
('card3', 'Type3', '500', 'card'),
('card4', 'Type4', '600', 'card'),
('bakery1', 'cake', '1000', 'bakery'),
('bakery2', 'candles', '500', 'bakery'),
('bakery3', 'pastries', '500', 'bakery'),
('bakery4', 'patties', '700', 'bakery'),
('bakery5', 'cake', '600', 'bakery'),
('doli1', 'TYPE1', '3500', 'doli'),
('doli2', 'TYPE2', '2000', 'doli'),
('doli3', 'TYPE3', '5000', 'doli'),
('hall1', 'achall', '15000', 'hall'),
('hall2', 'Normal_hall', '10000', 'hall');

-- --------------------------------------------------------

--
-- Table structure for table `vendor3`
--

CREATE TABLE IF NOT EXISTS `vendor3` (
  `vname` varchar(30) NOT NULL,
  `vcategory` varchar(30) NOT NULL,
  `vaddress` varchar(30) NOT NULL,
  `vphoneno` varchar(30) NOT NULL,
  `vemail` varchar(30) NOT NULL,
  `vpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor3`
--

INSERT INTO `vendor3` (`vname`, `vcategory`, `vaddress`, `vphoneno`, `vemail`, `vpassword`) VALUES
('pooja', 'catering', 'abc', '9034965556', 'pooja@gmail.com', 'poojarani'),
('abc', 'dj/sound', 'aahjghhj', '9034965556', 'g@gmail.com', 'abcabc');

-- --------------------------------------------------------

--
-- Table structure for table `visited`
--

CREATE TABLE IF NOT EXISTS `visited` (
  `id` int(67) NOT NULL AUTO_INCREMENT,
  `email` varchar(98) NOT NULL,
  `vi` varchar(98) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `visited`
--

INSERT INTO `visited` (`id`, `email`, `vi`) VALUES
(1, 'garg@gmail.com', '7');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE IF NOT EXISTS `welcome` (
  `ename` varchar(30) NOT NULL,
  `doevent` varchar(30) NOT NULL,
  `elocation` varchar(30) NOT NULL,
  `egathering` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`ename`, `doevent`, `elocation`, `egathering`) VALUES
('Engagement', '6/aug/2018', 'Calcutta', 'ksld'),
('Marriage', '1/jan/2011', 'Chandigarh', ''),
('', '//', '', ''),
('', '//', '', ''),
('Engagement', '14/jan/2011', 'Calcutta', '56'),
('Engagement', '1/july/2017', 'Calcutta', '789'),
('Marriage', '1/jan/2011', 'Chandigarh', '899999'),
('Marriage', '1/jan/2011', 'Chandigarh', '899999'),
('Engagement', '14/jan/2011', 'Amritsar', '5454'),
('Engagement', '14/jan/2011', 'Amritsar', '5454'),
('Anniversary', '1/aug/2020', 'Amritsar', '1234'),
('Engagement', '1/sep/2011', 'Faridabad', '8988'),
('Marriage', '1/jan/2011', 'Chandigarh', '34'),
('Marriage', '1/jan/2011', 'Chandigarh', '56'),
('Marriage', '1/jan/2011', 'Chandigarh', '45'),
('Inogration', '6/dec/2012', 'Jaipur', '99'),
('Inogration', '1/sep/2011', 'Chandigarh', '67768'),
('Engagement', '15/nov/2020', 'Faridabad', '456565'),
('Inogration', '13/jan/2011', 'Calcutta', '45'),
('Marriage', '1/jan/2015', 'Chandigarh', '21321'),
('Anniversary', '1/oct/2011', 'Chandigarh', '566'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '100'),
('Birthday', '4/may/2015', 'Calcutta', '100'),
('Anniversary', '1/jan/2011', 'Chandigarh', '300'),
('Marriage', '1/jan/2011', 'Chandigarh', '100'),
('Inogration', '2/april/2011', 'Jaipur', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '10000'),
('Engagement', '13/dec/2015', 'Chandigarh', '50'),
('Marriage', '1/jan/2011', 'Chandigarh', '123'),
('Birthday', '7/aug/2013', 'Calcutta', '300'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('meeting', '1/jan/2011', 'Jaipur', '200'),
('', '//', '', ''),
('', '//', '', ''),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('meeting', '6/jan/2014', 'Calcutta', '200'),
('Engagement', '4/jan/2011', 'Delhi', '1000'),
('Anniversary', '3/may/2014', 'Mumbai', '100'),
('Anniversary', '3/may/2014', 'Mumbai', '100'),
('Anniversary', '3/may/2014', 'Mumbai', '100'),
('Anniversary', '3/may/2014', 'Mumbai', '100'),
('meeting', '1/jan/2011', 'Mumbai', '2000'),
('Engagement', '1/jan/2011', 'Chandigarh', '300'),
('Engagement', '1/jan/2011', 'Chandigarh', '300'),
('Marriage', '1/jan/2011', 'Chandigarh', '200'),
('Marriage', '5/06/2015', 'Chandigarh', '200'),
('Marriage', '1/01/2011', 'Chandigarh', '100'),
('Engagement', '8/04/2013', 'Chandigarh', '200'),
('meeting', '19/06/2014', 'Chandigarh', '200'),
('Birthday', '4/03/2014', 'Mumbai', '400'),
('Marriage', '1/01/2011', 'Chandigarh', '300'),
('Anniversary', '4/04/2013', 'Chandigarh', '300'),
('Marriage', '18/05/2013', 'Delhi', '200'),
('Engagement', '7/06/2014', 'Chandigarh', '400'),
('Engagement', '7/06/2014', 'Chandigarh', '400'),
('Engagement', '7/06/2014', 'Chandigarh', '400'),
('Engagement', '7/06/2014', 'Chandigarh', '400'),
('Marriage', '1/01/2011', 'Chandigarh', '20'),
('Engagement', '3/05/2014', 'Chandigarh', '200'),
('Marriage', '4/01/2014', 'Chandigarh', '200'),
('Engagement', '6/08/2016', 'Pune', '100'),
('Marriage', '1/01/2015', 'Chandigarh', '300'),
('Marriage', '1/01/2015', 'Chandigarh', '300'),
('Marriage', '1/01/2015', 'Chandigarh', '300');
