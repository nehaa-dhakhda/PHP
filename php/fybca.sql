-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 10:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fybca`
--

-- --------------------------------------------------------

--
-- Table structure for table `produc`
--

CREATE TABLE `produc` (
  `pro_id` int(10) NOT NULL,
  `pro_nm` varchar(9) NOT NULL,
  `pro_price` int(6) NOT NULL,
  `pro_des` text NOT NULL,
  `pro_quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produc`
--

INSERT INTO `produc` (`pro_id`, `pro_nm`, `pro_price`, `pro_des`, `pro_quantity`) VALUES
(0, '', 0, '', 0),
(685, '678567', 8756, 'fhchjk', 7956),
(685, '678567', 8756, 'fhchjk', 7956),
(8990, 'sfg', 678, 'fjhyujdtyjiyjk', 68);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sf_id` int(10) NOT NULL,
  `sf_nm` text NOT NULL,
  `sf_desg` text NOT NULL,
  `sf_ex` int(2) NOT NULL,
  `sf_ag` int(2) NOT NULL,
  `sf_sl` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sf_id`, `sf_nm`, `sf_desg`, `sf_ex`, `sf_ag`, `sf_sl`) VALUES
(685, 'gjnmcghkj', ' manger', 2, 25, 4000),
(4567657, 'fghj', ' accountant', 4, 34, 10000),
(436768, 'hjxrfgjh', ' clerk', 5, 31, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(19) NOT NULL,
  `s_name` text NOT NULL,
  `s_class` text NOT NULL,
  `s_city` text NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_adress` varchar(50) NOT NULL,
  `s_dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_class`, `s_city`, `s_email`, `s_adress`, `s_dob`) VALUES
(0, '', 'BCA', 'junagadh', '', 't_ar', 'dob'),
(6858, 'yjfyhji', 'BA', 'junagadh', 'mannratanpara@gmail.com', 't_ar', 'dob');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
