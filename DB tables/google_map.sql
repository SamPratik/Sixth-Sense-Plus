-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2016 at 06:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sixth_sens_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `google_map`
--

CREATE TABLE IF NOT EXISTS `google_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `keywords` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `google_map`
--

INSERT INTO `google_map` (`id`, `lat`, `lng`, `hospital_name`, `keywords`) VALUES
(1, 23.7541, 90.3675, 'Euro Bangla Heart Hospital', 'euro bangla heart'),
(2, 23.804, 90.3619, 'National Heart Foundation', 'national heart foundation'),
(3, 23.8102, 90.4312, 'Apollo Hospital', 'apollo hospital'),
(4, 23.7506, 90.3699, ' Bangladesh Medical College', 'bangladesh medical college');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
