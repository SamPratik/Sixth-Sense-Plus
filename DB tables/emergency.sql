-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 05:28 PM
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
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_name` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `address` text,
  `contact` varchar(250) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `hos_name`, `link`, `address`, `contact`, `keywords`) VALUES
(1, 'Govt. Unani & Ayurbedik Medical College & Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=1002&id=5129', 'It is 300 gauges (9000 Feet) south from Mirpur-10 circle.\r\n\r\nMirpur-13, Kafrul, Dhaka.', '8012048', 'mirpur kafrul'),
(2, 'Kidney Foundation Bangladesh', 'http://www.online-dhaka.com/index.php?parent=80&cid=1002&id=4503', 'Plot-5/2, Road-1, Section-2, Mirpur, Dhaka-1216.', '8055827', 'mirpur'),
(3, 'Harun Eye Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=2612', 'House-12/A, Road-5, Mirpur Road, Dhanmondi, Dhaka-1205.', '01552-397518', 'mirpur dhanmondi'),
(4, 'Square Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=1752', '18/F, West Panthopath, Dhaka-1205.', '8129338', 'panthopath'),
(5, 'City Hospital Limited', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=24417', '1/8, Block-E, Lalmatia, Sat Masjid Road, Mohammadpur, Dhaka-1207.', '8143312', 'mohammadpur lalmatia'),
(6, 'Shamorita Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=1757', '89/1, Panthopath, Dhaka-1215', '9131901', 'panthopath'),
(7, 'Lever Foundation of Bangladesh', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=2772', '150, Green Road, Panthopath (3rd Floor), Dhaka-1215.', '9146537', 'panthopath'),
(8, 'Patient Care Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=2894', 'House-90, Sector-9, Sonargaon Janopath Road, Uttara, Dhaka.', '892121', 'uttara'),
(9, 'Pedicure Neonatal & Child Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=2545', 'House-55, Road-1, Sector-9, Uttara, Dhaka-1230.', '8914676', 'uttara'),
(10, 'National Heart Foundation of Bangladesh', NULL, 'Plot-7/2, Section-2, Mirpur, Dhaka-1216.', '8061314-6', 'mirpur'),
(11, 'National Eye Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=2812', 'House-‘Ka’, Road-27, Sector-7, Uttara, Dhaka', '8957247', 'uttara'),
(12, 'Uttara Crescent Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=1729', 'House-21, Road-15, Sector-3, Uttara, Dhaka-1230.', '8912700', 'uttara'),
(13, 'Uttara Central Hospital & Diagnostic Center', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=1728', 'House-1, Road-7, Sector-1, Uttara, Dhaka-1230.', '8918778', 'uttara'),
(14, 'Delta Hospital Ltd.', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=24062', '26/2, Principal Abul Kasem Road (Ex. Darussalam Road), Mirpur-1, Dhaka-1216.', '8017151-52', 'mirpur'),
(15, 'Green Life Medical College & Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=4812', '32, Bir Uttam K.M. Shafiullah Road, Green Road, Dhanmondi, Dhaka-1205.', '9612345', 'dhanmondi'),
(16, 'Case Hospital', 'http://www.online-dhaka.com/index.php?parent=80&cid=81&id=2918', '2/1 A, Iqbal Road, Mohammadpur, Dhaka.', '9132548', 'mohammadpur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
