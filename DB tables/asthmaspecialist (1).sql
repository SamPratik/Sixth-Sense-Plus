-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2016 at 03:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sixth_sens_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `asthmaspecialist`
--

CREATE TABLE IF NOT EXISTS `asthmaspecialist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `organization` varchar(250) DEFAULT NULL,
  `chamber` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `asthmaspecialist`
--

INSERT INTO `asthmaspecialist` (`id`, `doc_name`, `designation`, `organization`, `chamber`, `location`, `phone`, `keywords`) VALUES
(1, 'Dr. A.F.M.Imran Chowdhury ', 'Assistant Professor', 'Bangladesh Medical College & Hospital', 'Rainbow Allergie Consultation Center', 'Dhanmondi,Dhaka', '+880-2-9115602, 9131207, 8158607 ( Chamber )  Memb', 'Bangladesh Rainbow Dhanmondi'),
(2, 'Dr. A.H.M. Anamul Haque Sunny', 'Consultant', 'Apollo Hospitals Dhaka', 'AFMC -  Armed Forces Medical College', 'Plot # 81, Block # E, Basundhara R/A, Dhaka - 1229', '+880-2-8401661, 8845242, Cell: +880 1841276556, Ho', 'Apollo Armed Forces Basundhara'),
(3, 'Dr. Affan Ahmed', 'Specialist', 'National Heart Foundation, Dhaka', 'Saic Digital Diagnostic Lab', '14, Sweden Plaza , Main Road, Mirpur- 1, Dhaka', '+ 880-2-9015122-3  Members Only (Mobile no)', 'sweden plaza mirpur-1 saic digital diagnostic'),
(4, 'Dr. Shihab Mahmood', 'Consultant, Interventional & Clinical', '', 'Euro-Bangla Heart Hospital Ltd.', 'House No # 5/7, Block # D, Lalmatia, Dhaka, Bangladesh', '+880-2-8159711, 8159712, +880 1711822986  Members ', 'euro bangla lalmatia '),
(5, 'Dr. Arnob Mallik', 'Consultant', 'Apollo Hospitals Dhaka', 'Armed Force Medical College', 'Plot # 81, Block # E, Basundhara R/A, Dhaka - 1229', '+880-2-8401661, 8845242, Cell: +880 1841276556, Ho', 'Apollo Armed Force Basundhara'),
(6, 'Dr. Anamul Haque Sunny', 'Consultant', 'Apollo Hospitals Dhaka', 'Armed Force Medical College', 'Plot # 81, Block # E, Basundhara R/A, Dhaka - 1229', '+880-2-8401661, 8845242, Cell: +880 1841276556, Ho', 'Apollo Armed Force Basundhara');
