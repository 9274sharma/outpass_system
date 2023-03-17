-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 05:54 AM
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
-- Database: `srec_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `block` varchar(10) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`name`, `rollno`, `block`, `roomno`, `outpasstype`, `outdate`, `indate`, `outtime`, `intime`, `place`, `status`, `reason`) VALUES
('Yash Sharma', 209303293, 'B1', 123, 'ON', '123243', '12345', '1234567', 'Q3456', 'JASIFSD', 'ACCEPT', ''),
('yaash shaerma', 1234567, 'B1', 1234, 'od', '2023-02-27', '2023-03-27', '21:36', '23:36', 'asd', 'accepted', ''),
('yash sharma', 1234567, 'B1', 12, 'hometown', '2023-03-07', '2023-03-22', '22:09', '21:13', 'sdf', 'accepted', ''),
('yash Sharma', 209303293, 'B1', 123, 'hometown', '2023-02-05', '2023-02-28', '12:23', '14:23', 'jaipur', 'declined', ''),
('yash Sharma', 209303293, 'B1', 123, 'hometown', '2023-02-07', '2023-02-27', '17:49', '16:54', 'JAIPUR', 'declined', ''),
('yash Sharma', 209303293, 'B1', 123, 'hometown', '2023-03-06', '2023-03-23', '02:24', '23:29', 'aASDF', 'declined', ''),
('yash Sharma', 209303293, 'B1', 1234, 'od', '2023-03-13', '2023-04-05', '10:39', '14:39', 'asgthr', 'declined', ''),
('yaash shaerma', 0, 'B1', 0, 'od', '2023-02-27', '2023-03-27', '21:36', '23:36', 'asd', 'declined', ''),
('yash sharma', 1234, 'B1', 0, 'localouting', '2023-02-19', '2023-03-28', '23:32', '20:37', 'qwer', 'accepted', ''),
('yash Sharma', 209303293, 'B1', 1234, 'od', '2023-03-13', '2023-04-05', '10:39', '14:39', 'asgthr', 'accepted', ''),
('yash Sharma', 123456, 'B1', 12345678, 'od', '2023-03-19', '2023-03-29', '23:30', '02:30', 'as', 'accepted', ''),
('yash Sharma', 123456, 'B1', 12345678, 'od', '2023-03-19', '2023-03-29', '23:30', '02:30', 'as', 'declined', ''),
('yash Sharma', 123456, 'B1', 12345678, 'od', '2023-03-19', '2023-03-29', '23:30', '02:30', 'as', 'declined', ''),
('yash Sharma', 123456, 'B1', 12345678, 'od', '2023-03-19', '2023-03-29', '23:30', '02:30', 'as', 'accepted', ''),
('vansh Sharma', 123456, 'B1', 12345678, 'od', '2023-03-19', '2023-03-29', '23:30', '02:30', 'as', 'accepted', ''),
('anSH', 12345, 'B1', 2345, 'od', '2023-03-07', '2023-03-21', '04:23', '06:23', 'awert', 'declined', ''),
('ujjwal sharma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'JAIPUR', 'declined', ''),
('ujjwal sharma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'JAIPUR', '', 'i dont lnow'),
('ujjwal verma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'sdmldkvafnjba', '', 'hello sdwrbwrsfb'),
('ajay verma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'sdmldkvafnjba', 'declined', 'heheheh'),
(' yashverma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'sdmldkvafnjba', 'accepted', ''),
(' yash krma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'sdmldkvafnjba', 'accepted', ''),
(' krma', 209303239, 'B3', 324, 'localouting', '2023-03-18', '2023-03-19', '06:07', '08:07', 'sdmldkvafnjba', 'accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` int(10) NOT NULL,
  `password` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roomno` int(11) NOT NULL,
  `teacher_gaurdian` varchar(20) NOT NULL,
  `hod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `roomno`, `teacher_gaurdian`, `hod`) VALUES
(1901013, 123, 'Annar', 325, 'Geetha', 'JHG'),
(209303293, 1234, 'Yash Sharma', 123, 'Vivek sharma', 'V.S. Dhaka'),
(209303199, 124, 'Vansh Sharma', 126, 'Vivek sharma', 'V.S. Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `block` varchar(10) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`rollno`) VALUES
(1901013),
(1234),
(1234),
(1234),
(1234),
(1234),
(1234),
(1234),
(1234),
(1234),
(1234),
(1234),
(209303293),
(209303293),
(209303293),
(209303293),
(1234567),
(1234567),
(1234),
(209303293),
(123456),
(123456),
(123456),
(209303239),
(209303239),
(209303239);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`) VALUES
('Vivek123', 'Manipal@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
