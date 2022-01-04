-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2022 at 06:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ov`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(233) NOT NULL,
  `caddr` varchar(222) NOT NULL,
  `cphn` varchar(12) NOT NULL,
  `cbranch` varchar(222) NOT NULL,
  `apply` varchar(222) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`cid`, `cname`, `caddr`, `cphn`, `cbranch`, `apply`) VALUES
(1, 'algion', 'texas', '415556667', 'Mechanical', 'on'),
(2, 'eldiable', 'LA', '99887766', 'Civil', 'on'),
(3, 'Surya', 'jor4hat', '888877656', 'Mca', 'gen_sec');

-- --------------------------------------------------------

--
-- Table structure for table `fd`
--

DROP TABLE IF EXISTS `fd`;
CREATE TABLE IF NOT EXISTS `fd` (
  `Feedback` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` int(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin', 'admin1', '2021-11-15 14:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `email`, `voter_id`, `voted_for`) VALUES
(19, 'RohanSaikia', 'rohansikia75@gmail.com', 321654, 'PARTY_2'),
(20, 'AshishNath', 'ashish@gmail.com', 1234556, 'PARTY_1'),
(21, 'NibirBora', 'nibir@gmail.com', 5674321, 'PARTY_2'),
(22, 'ashishnath', 'ashish@gmail.com', 4443332, 'PARTY_1');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `vid` int(255) NOT NULL AUTO_INCREMENT,
  `vname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vadd` varchar(255) NOT NULL,
  `vphone` varchar(255) NOT NULL,
  `vemail` varchar(255) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`vid`, `vname`, `password`, `vadd`, `vphone`, `vemail`) VALUES
(1, 'Ashish Nath', 'asd', 'Tarajan', '9876543210', 'ashish@gmail.com'),
(2, 'Rohan Saikia', 'asd', 'Tarajan', '9877665541', 'rohan@gmail.com'),
(3, 'asdfadsf4e', 'asd', 'asefa4efasdf', '9876543210', 'aaa@a.com'),
(4, 'ASHISH NATH', 'asds', 'TARAJAN SONARI GAON NO.1 ROAD', '09854352458', 'ashishnath905@gmail.com'),
(5, 'arjun', '123456', 'jorhat', '9876543210', 'arj@gmail.com'),
(6, 'ASHISH NATH', 'asd', 'Tarajan', '9876543211', 'a@a.a'),
(7, 'Ashish Nath', '123ert456', 'tarajan', '9876543210', 'a@a.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
