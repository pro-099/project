-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2023 at 10:01 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(15) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'plumbers'),
(2, 'welder'),
(3, 'Electrician');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int NOT NULL AUTO_INCREMENT,
  `ename` varchar(25) NOT NULL,
  `eage` int NOT NULL,
  `job` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ephone` int NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `profilep` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `eage`, `job`, `address`, `ephone`, `certificate`, `profilep`, `password`) VALUES
(1, 'dona', 18, '', '', 2147483647, '', '', ''),
(2, 'kkk', 18, '', '', 2147483647, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

DROP TABLE IF EXISTS `empreg`;
CREATE TABLE IF NOT EXISTS `empreg` (
  `emp_id` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ename` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ephone` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `designation` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `aadhar` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `photo` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `password` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`emp_id`, `ename`, `ephone`, `designation`, `aadhar`, `photo`, `password`) VALUES
('e81@gmail.com', 'kkk', '8977676678', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'kkk', '8977676678', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'kkk', '7902598059', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'kkk', '7902598059', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'dona', '7902598059', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'dona', '7902598059', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'dona', '7902598059', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'kkk', '8977676678', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'kkk', '8977676678', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'kkk', '8977676678', 'welder', NULL, NULL, '123456'),
('e81@gmail.com', 'jees', '7902598059', 'welder', NULL, NULL, '123456'),
('eker81@gmail.com', 'dona', '7902598059', '1', NULL, NULL, '123456'),
('eker81@gmail.com', 'dona', '7902598059', '1', NULL, NULL, '123456'),
('e81@gmail.com', 'abin', '7902598059', 'plumbers', NULL, NULL, '123456'),
('eker81@gmail.com', 'kkk', '7902598059', 'plumbers', NULL, NULL, '123456'),
('eker81@gmail.com', 'athul', '7902598059', 'Electrician', NULL, NULL, '123456'),
('eker81@gmail.com', 'kkk', '7902598059', 'Electrician', NULL, NULL, '123456'),
('eker81@gmail.com', 'kjire', '7902598010', '3', NULL, NULL, '1233'),
('eker81@gmail.com', 'kjire', '7902598010', '3', NULL, NULL, '1233'),
('eker81@gmail.com', 'hhha', '7902598059', 'Electrician', NULL, NULL, '1223'),
('offical81@gmail.com', 'hari', '1234567897', 'Electrician', NULL, NULL, '1122');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

DROP TABLE IF EXISTS `userreg`;
CREATE TABLE IF NOT EXISTS `userreg` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` int NOT NULL,
  `phone_no` int NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`uid`, `uname`, `address`, `password`, `phone_no`) VALUES
(1, 'febin', 'angamaly p.o', 122, 1234567891),
(2, 'febin dup', 'angamaly p.o', 1122, 1234567891);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
