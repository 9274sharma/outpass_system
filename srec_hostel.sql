-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 08:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srec_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `block` varchar(50) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`name`, `rollno`, `block`, `roomno`, `outpasstype`, `outdate`, `indate`, `outtime`, `intime`, `place`, `status`, `reason`) VALUES
('yash sharma', 209303293, 'B5', 123, 'hometown', '2022-12-14', '2022-12-27', '05:06', '06:07', 'zs', 'accepted', ''),
('yash sharma', 209303293, 'B5', 123, 'hometown', '2022-12-14', '2022-12-27', '05:06', '06:07', 'zs', 'declined', ''),
('yash sharma', 209303293, 'B5', 123, 'hometown', '2022-12-14', '2022-12-27', '05:06', '06:07', 'zs', 'declined', ''),
('yash sharma', 209303293, 'B5', 123, 'hometown', '2022-12-14', '2022-12-27', '05:06', '06:07', 'zs', 'declined', ''),
('yash sharma', 209303293, 'B1', 123, 'hometown', '2022-12-30', '2022-12-31', '01:37', '02:39', 'xcv', 'declined', ''),
('yash sharma', 209303293, 'B1', 123, 'hometown', '2022-12-30', '2022-12-31', '01:37', '02:39', 'xcv', 'accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` int(10) NOT NULL,
  `password` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roomno` int(11) NOT NULL,
  `htutor` varchar(20) NOT NULL,
  `ctutor` varchar(20) NOT NULL,
  `ac` varchar(20) NOT NULL,
  `hod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `roomno`, `htutor`, `ctutor`, `ac`, `hod`) VALUES
(209303293, 1234, 'Yash Sharma', 101, 'aman', 'alkhil', 'ajay', 'vijay dhaka'),
(209303193, 1234, 'vansh sharma', 214, 'aman', 'akhil', 'ajay', 'vijay dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `block` varchar(50) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestform`
--

INSERT INTO `requestform` (`name`, `rollno`, `block`, `roomno`, `outpasstype`, `outdate`, `indate`, `outtime`, `intime`, `place`, `status`) VALUES
('yash sharma', 123, 'B1', 123, 'hometown', '2022-12-23', '2022-12-27', '15:40', '19:40', 'jaipur', 'accepted'),
('yash sharma', 123, 'B1', 123, 'hometown', '2022-12-23', '2022-12-27', '15:40', '19:40', 'jaipur', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`rollno`) VALUES
(1901013),
(123),
(123),
(209303293),
(209303293),
(123),
(123),
(123),
(123),
(123),
(123);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`) VALUES
('AN20', 'Good@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
