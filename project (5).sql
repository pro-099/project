-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2023 at 11:01 AM
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
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `apdate` date NOT NULL,
  `amount` int NOT NULL,
  `emp_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bstatus` int NOT NULL,
  `uname` varchar(35) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `apdate`, `amount`, `emp_id`, `bstatus`, `uname`) VALUES
(1, '0000-00-00', 27, '500', 0, '1'),
(2, '0000-00-00', 27, '500', 2023, '1'),
(3, '0000-00-00', 27, '500', 2023, '1'),
(4, '0000-00-00', 31, '500', 2023, '1'),
(5, '0000-00-00', 31, '500', 2023, '1'),
(6, '0000-00-00', 27, '500', 2023, '1'),
(7, '2023-11-17', 0, '27', 500, '1'),
(8, '2023-11-15', 0, '27', 500, '1'),
(9, '2023-11-15', 500, 'febin', 27, '1'),
(10, '2023-11-16', 500, 'febin', 27, '1'),
(11, '2023-11-16', 500, '33', 1, 'febin'),
(12, '2023-11-16', 500, '33', 1, 'febin'),
(13, '2023-11-29', 500, '33', 1, 'febin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(15) NOT NULL,
  `img` varchar(1000) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `img`) VALUES
(13, 'elctritician', '2ad64c3d0c9c5d757145db6c7fcaa817_dd246bac258c6db696.jpg'),
(12, 'plumbers', '08d38d99b300773d06d7a9516780d7db_13ad70d7f1cd56a549.jpg'),
(14, 'welder', 'e73c2f1e36c4b1b7c4dea5ba82e4568e_3d9eed3a1084.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int NOT NULL AUTO_INCREMENT,
  `ename` varchar(25) NOT NULL,
  `eage` int NOT NULL,
  `eimage` varchar(1000) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `eage`, `eimage`) VALUES
(1, 'dona', 18, ''),
(2, 'kkk', 18, ''),
(3, 'jack', 12, 'c0face40d465fa6685bff6e36a992229_dd15776774ded27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

DROP TABLE IF EXISTS `empreg`;
CREATE TABLE IF NOT EXISTS `empreg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ename` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ephone` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `designation` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`id`, `emp_id`, `ename`, `ephone`, `designation`, `password`, `img`, `status`) VALUES
(27, 'employee1@gmail.com', 'jack', '9400576285', 'elctritician', '111', '865ea1a7748987969d243e2f713c251c_6e3fe0794c2ae.avif', 1),
(33, 'employee2@gmail.com', 'jill', '9555455635', 'elctritician', '112', 'fff253c2d678c14b800240f27416d598_98347ad1819c4.jpg', 1),
(29, 'employee3@gmail.com', 'mohan', '9400789456', 'elctritician', '113', '8acdb6f2d306ace3eb82c355ac698452_379d2f08dee47b46519.jpg', 1),
(30, 'employee4@gmail.com', 'david', '9400123456', 'plumbers', '114', 'd8e2f0c73678947be1b643d114764263_ad66a6d72c6c4343b.jpg', 1),
(31, 'employee5@gmail.com', 'don', '9400789123', 'plumbers', '115', '2196aaae807d33adbfb645a248fd979e_c7e973a7f2945d7b79b.avif', 1),
(32, 'employee6@gmail.com', 'jim', '9400455635', 'plumbers', '116', 'c32b40bb1123fc28c7cc8a21058a252b_4ae4019cdd.avif', 1),
(34, 'employee7@gmail.com', 'hamas', '9555455609', 'elctritician', '118', '0f968078d4cbe483adffb411bbbbc838_dda74cff8050b19d79cf.jpg', 1),
(35, 'employee8@gmail.com', 'kim', '9551055609', 'elctritician', '110', 'a2147baeb84b16b46e243b874eb112cd_81bfafc369ec25.avif', 1),
(36, 'employee9@gmail.com', 'Anto', '9551055609', 'elctritician', '1115', 'ca45dc9804db625c97034cb8041f8c02_d89b64efc966ec.avif', 1),
(37, 'employee10@gmail.com', 'james', '9301055609', 'plumbers', '1112', '6b7ecbb8d2d9764850faf2f686e53029_cbe479bd9e06f7e073.avif', 1),
(38, 'employee11@gmail.com', 'jacob', '9301077609', 'plumbers', '1118', '6a64a2bfe155feaf39801d9a93268060_a52cc5c234d765da.jpg', 1),
(39, 'employee13@gmail.com', 'johny', '8001077609', 'plumbers', '1113', '2cf72be459d772a92a35321f3177834c_1168d8fed972.jpg', 1),
(40, 'employee14@gmail.com', 'hasan', '8001077609', 'welder', '1234', '19db8bf0ec492a75a3de4ef8122062b7_5b5db378c44e585.jpg', 1),
(41, 'employee15@gmail.com', 'hari', '8001177609', 'welder', '12346', 'd1e6d06019e167ae39fb7af5901dce78_3938a06f8b86d14c.jpg', 1),
(42, 'employee16@gmail.com', 'ben', '8066776091', 'welder', '147896', '691cf2cbf0e2a557a892b366ec9c3ecf_4fb577426f41ecb741b3.jpg', 1),
(43, 'employee17@gmail.com', 'john', '8053776091', 'welder', '963214', '071dee22a9f5f84091f61ae99edb8330_b646f8772ea.jpg', 1),
(44, 'employee18@gmail.com', 'jude', '8053456091', 'welder', '85236', '50782e9e467d3aa637ca57c4869cdc8f_6012c6ae258189.jpg', 1),
(45, 'employee19@gmail.com', 'solvin', '8053586091', 'welder', '753159', 'b40c4b5e4619ae22c32166cc274f64cb_3a2fa686eabec358.jpg', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `wage`
--

DROP TABLE IF EXISTS `wage`;
CREATE TABLE IF NOT EXISTS `wage` (
  `wid` int NOT NULL AUTO_INCREMENT,
  `duration` varchar(20) NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wage`
--

INSERT INTO `wage` (`wid`, `duration`, `amount`) VALUES
(1, 'HALF DAY AM', 500),
(2, 'HALF DAY PM', 500),
(3, 'FULL DAY', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
