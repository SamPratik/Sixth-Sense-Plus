-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 01:41 AM
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
-- Table structure for table `cardiologist`
--

CREATE TABLE IF NOT EXISTS `cardiologist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `organization` varchar(250) DEFAULT NULL,
  `chamber` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `keywords` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cardiologist`
--

INSERT INTO `cardiologist` (`id`, `doc_name`, `designation`, `organization`, `chamber`, `location`, `phone`, `keywords`) VALUES
(1, 'Dr. A.F.M.Imran Chowdhury ', 'Assistant Professor', 'Bangladesh Medical College & Hospital', 'Rainbow Allergie Consultation Center', 'Dhanmondi,Dhaka', '+880-2-9115602, 9131207, 8158607 ( Chamber )  Members Only (Mobile no)', 'Bangladesh Rainbow Dhanmondi'),
(2, 'Dr. A.H.M. Anamul Haque Sunny', 'Consultant', 'Apollo Hospitals Dhaka', 'AFMC -  Armed Forces Medical College', 'Plot # 81, Block # E, Basudhara R/A, Dhaka - 1229', '+880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678  Members Only', 'Apollo Armed Forces Basudhara'),
(3, 'Dr. Affan Ahmed', 'Specialist', 'National Heart Foundation, Dhaka', 'Saic Digital Diagnostic Lab', '14, Sweden Plaza , Main Road, Mirpur- 1, Dhaka', '+ 880-2-9015122-3  Members Only (Mobile no)', 'sweden plaza mirpur-1 saic digital diagnostic'),
(4, 'Dr. Shihab Mahmood', 'Consultant, Interventional & Clinical', '', 'Euro-Bangla Heart Hospital Ltd.', 'House No # 5/7, Block # D, Lalmatia, Dhaka, Bangladesh', '+880-2-8159711, 8159712, +880 1711822986  Members Only (Mobile no)', 'euro bangla lalmatia ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
