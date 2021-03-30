-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.byetcluster.com
-- Generation Time: Dec 16, 2020 at 12:12 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26947581_localhost`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_emp`
--

CREATE TABLE `area_emp` (
  `area_id` int(11) NOT NULL,
  `area_name` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `employer_address` text COLLATE utf8_unicode_ci NOT NULL,
  `employer_duration` int(11) NOT NULL,
  `employer_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `area_emp`
--

INSERT INTO `area_emp` (`area_id`, `area_name`, `contact_person`, `employer_address`, `employer_duration`, `employer_name`) VALUES
(1, 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '038303120', 'à¸•à¸³à¸šà¸¥ à¸«à¸²à¸”à¸žà¸¥à¸² à¸­à¸³à¹€à¸ à¸­à¸šà¹‰à¸²à¸™à¸‰à¸²à¸‡ à¸ˆà¸±à¸‡à¸«à¸§à¸±à¸” à¸£à¸°à¸¢à¸­à¸‡ 21130', 95000, 'SERENE PHLA HOTEL'),
(5, 'à¸à¸£à¸µà¸™à¹„à¸™à¸™à¹Œ', '-', 'à¹€à¸”à¸­à¸° à¸à¸£à¸µà¸™ à¹„à¸™à¸™à¹Œ à¸žà¸£à¸°à¸£à¸²à¸¡ 9 - à¸„à¸­à¸™à¹‚à¸” à¹à¸‚à¸§à¸‡ à¸šà¸²à¸‡à¸à¸°à¸›à¸´ à¹€à¸‚à¸•à¸«à¹‰à¸§à¸¢à¸‚à¸§à¸²à¸‡ à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£ 10310 à¸šà¸²à¸‡à¸à¸°à¸›à¸´, à¸«à¹‰à¸§à¸¢à¸‚à¸§à¸²à¸‡, à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£.', 67000, 'à¸„à¸­à¸™à¹‚à¸”à¸¡à¸´à¹€à¸™à¸µà¸¢à¸¡à¸à¸£à¸µà¸™à¹„à¸™à¸™à¹Œ');

-- --------------------------------------------------------

--
-- Table structure for table `employee_emp`
--

CREATE TABLE `employee_emp` (
  `emp_id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `citizen_id` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `first_name_th` text COLLATE utf8_unicode_ci NOT NULL,
  `last_name_th` text COLLATE utf8_unicode_ci NOT NULL,
  `first_name_en` text COLLATE utf8_unicode_ci NOT NULL,
  `last_name_en` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `work_start_date` date NOT NULL,
  `work_stop_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee_emp`
--

INSERT INTO `employee_emp` (`emp_id`, `address`, `birth_date`, `citizen_id`, `first_name_th`, `last_name_th`, `first_name_en`, `last_name_en`, `tel`, `work_start_date`, `work_stop_date`) VALUES
(1, '55/51 à¸«à¸¡à¸¹à¹ˆ 2 à¸•.à¸šà¹‰à¸²à¸™à¸‰à¸²à¸‡ à¸­.à¹€à¸¡à¸·à¸­à¸‡ à¸ˆ.à¸›à¸—à¸¸à¸¡à¸˜à¸²à¸™à¸µ', '2511-11-20', '3100501371528', 'à¸­à¸™à¸±à¸™à¸•à¹Œ', 'à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', 'Anan', 'Sringoenyuang', '0616120841', '2558-08-20', '0000-00-00'),
(2, '84/2 à¸•à¸£à¸­à¸à¸§à¸±à¸”à¸žà¸£à¸°à¸¢à¸²à¸¢à¸±à¸‡ à¹à¸‚à¸§à¸‡à¸–à¸™à¸™à¹€à¸žà¸Šà¸£à¸šà¸¸à¸£à¸µ à¹€à¸‚à¸•à¸£à¸²à¸Šà¹€à¸—à¸§à¸µ à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '2536-02-10', '1480300133655', 'à¸™à¸´à¸£à¸¡à¸±à¸¢', 'à¸¨à¸£à¸µà¸—à¸­à¸‡', 'Niramai', 'Seethong', '0960036091', '2559-02-13', '0000-00-00'),
(3, '84/2 à¸§à¸±à¸”à¸žà¸£à¸°à¸¢à¸²à¸¢à¸±à¸‡ à¹à¸‚à¸§à¸‡à¸–à¸™à¸™à¹€à¸žà¸Šà¸£à¸šà¸¸à¸£à¸µ à¹€à¸‚à¸•à¸£à¸²à¸Šà¹€à¸—à¸§à¸µ à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '2534-06-23', '1100800773788', 'à¸›à¸§à¸´à¸Š', 'à¸žà¸£à¸¡à¸›à¸£à¸°à¹‚à¸„à¸™', 'Pawit', 'Promprakhon', '0958132765', '2559-02-12', '0000-00-00'),
(4, '43 à¸«à¸¡à¸¹à¹ˆà¸—à¸µà¹ˆ 4 à¸•.à¹€à¸¡à¸·à¸­à¸‡à¹à¸  à¸ª.à¸ªà¸•à¸¶à¸  à¸ˆ.à¸šà¸¸à¸£à¸µà¸£à¸±à¸¡à¸¢à¹Œ', '2501-08-01', '3900200289183', 'à¸ªà¸¸à¹€à¸—à¸ž', 'à¸ªà¸±à¸‡à¸‚à¹Œà¸„à¸³', 'Suthep', 'Sangkham', '0927364186', '2560-01-20', '0000-00-00'),
(5, '109 à¸«à¸¡à¸¹à¹ˆà¸—à¸µà¹ˆ 10 à¸•.à¸ªà¸­à¸‡à¸«à¹‰à¸­à¸‡ à¸­.à¹€à¸¡à¸·à¸­à¸‡à¸šà¸¸à¸£à¸µà¸£à¸±à¸¡à¸¢à¹Œ à¸ˆ.à¸šà¸¸à¸£à¸µà¸£à¸±à¸¡à¸¢à¹Œ', '2523-01-03', '3310100459724', 'à¸ªà¸³à¹€à¸¥à¸´à¸‡', 'à¹‚à¸Šà¸•à¸´à¸¢à¸²', 'Samlerng', 'Chotiya', '0857963732', '2560-11-30', '0000-00-00'),
(6, '46 à¸«à¸¡à¸¹à¹ˆà¸—à¸µà¹ˆ 1  à¸•.à¸žà¸°à¹€à¸™à¸²  à¸­.à¹€à¸¡à¸·à¸­à¸‡à¸™à¸„à¸£à¸£à¸²à¸Šà¸ªà¸µà¸¡à¸²  à¸ˆ.à¸™à¸„à¸£à¸£à¸²à¸Šà¸ªà¸µà¸¡à¸²', '2527-03-24', '2309900031079', 'à¸£à¸±à¸•à¸™à¸žà¸¥', 'à¸‚à¹ˆà¸­à¸¢à¸‡à¸²à¸¡', 'Rattanapol', 'Khoingam', '0985724194', '2560-03-24', '0000-00-00'),
(7, '119 à¸«à¸¡à¸¹à¹ˆà¸—à¸µà¹ˆ 7  à¸•.à¸¡à¹ˆà¸§à¸‡à¹„à¸‚à¹ˆ  à¸­.à¸žà¸±à¸‡à¹‚à¸„à¸™  à¸ˆ.à¸ªà¸à¸¥à¸™à¸„à¸£', '2559-03-15', '3430600108130', 'à¸¨à¸±à¸à¸”à¸´à¹Œà¸ªà¸´à¸—à¸˜à¸´à¹Œ', 'à¸šà¸¸à¸à¸ˆà¸¹', 'Saksit', 'Boonju', '0945825069', '2560-08-11', '0000-00-00'),
(8, '68/1  à¸«à¸¡à¸¹à¹ˆà¸—à¸µà¹ˆ 3  à¸•.à¸‹à¸²à¸à¸­  à¸­.à¸¨à¸£à¸µà¸ªà¸²à¸„à¸£  à¸ˆ.à¸™à¸£à¸²à¸˜à¸´à¸§à¸²à¸ª', '2534-06-01', '2960700011402', 'à¸¡à¸°à¸¡à¸µà¸‹à¸µ', 'à¸ªà¸°à¸­à¸¸', 'Mamesee', 'Sau', '0983833703', '2561-09-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `ID` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`ID`, `password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `operation_schedule`
--

CREATE TABLE `operation_schedule` (
  `ID_operation` int(11) NOT NULL,
  `area_name` text COLLATE utf8_unicode_ci NOT NULL,
  `work_time` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emp_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `operation_schedule`
--

INSERT INTO `operation_schedule` (`ID_operation`, `area_name`, `work_time`, `emp_name`) VALUES
(1, 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '06.00 - 18.00 à¸™.', 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡'),
(2, 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '18.00 - 06.00 à¸™.', 'à¸™à¸´à¸£à¸¡à¸±à¸¢ à¸¨à¸£à¸µà¸—à¸­à¸‡'),
(3, 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '06.00 - 18.00 à¸™.', 'à¸›à¸§à¸´à¸Š à¸žà¸£à¸¡à¸›à¸£à¸°à¹‚à¸„à¸™'),
(6, 'à¸à¸£à¸µà¸™à¹„à¸™à¸™à¹Œ', '06.00 - 18.00 à¸™.', 'à¸ªà¸¸à¹€à¸—à¸ž à¸ªà¸±à¸‡à¸‚à¹Œà¸„à¸³'),
(7, 'à¸à¸£à¸µà¸™à¹„à¸™à¸™à¹Œ', '06.00 - 18.00 à¸™.', 'à¸ªà¸³à¹€à¸¥à¸´à¸‡ à¹‚à¸Šà¸•à¸´à¸¢à¸²'),
(8, 'à¸à¸£à¸µà¸™à¹„à¸™à¸™à¹Œ', '18.00 - 06.00 à¸™.', 'à¸¨à¸±à¸à¸”à¸´à¹Œà¸ªà¸´à¸—à¸˜à¸´à¹Œ à¸šà¸¸à¸à¸ˆà¸¹');

-- --------------------------------------------------------

--
-- Table structure for table `patrol_emp`
--

CREATE TABLE `patrol_emp` (
  `patrol_id` int(11) NOT NULL,
  `patrol_fname_th` text COLLATE utf8_unicode_ci NOT NULL,
  `patrol_lname_th` text COLLATE utf8_unicode_ci NOT NULL,
  `patrol_fname_en` text COLLATE utf8_unicode_ci NOT NULL,
  `patrol_lname_en` text COLLATE utf8_unicode_ci NOT NULL,
  `patrol_tel` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `patrol_rank` text COLLATE utf8_unicode_ci NOT NULL,
  `police_station` text COLLATE utf8_unicode_ci NOT NULL,
  `checkTime` time NOT NULL,
  `checkDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patrol_emp`
--

INSERT INTO `patrol_emp` (`patrol_id`, `patrol_fname_th`, `patrol_lname_th`, `patrol_fname_en`, `patrol_lname_en`, `patrol_tel`, `patrol_rank`, `police_station`, `checkTime`, `checkDate`) VALUES
(1, 'à¸Šà¸¸à¸•à¸´à¹€à¸”à¸Š', 'à¸¨à¸£à¸±à¸¢à¸£à¸±à¸à¸©à¹Œ', 'Chutidet', 'Sailak', '0922496022', 'à¸ˆà¹ˆà¸²à¸ªà¸´à¸šà¹€à¸­à¸', 'à¸à¸£à¸¡à¸à¸²à¸£à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸—à¸«à¸²à¸£', '00:00:00', '0000-00-00'),
(2, 'à¸—à¸™à¸‡à¸¨à¸±à¸à¸”à¸´à¹Œ', 'à¹‚à¸•à¸›à¸±à¸à¸à¸²à¸§à¸¸à¸˜', 'Thanongsak', 'Thophanyawut', '0863919081', 'à¸ˆà¹ˆà¸²à¸ªà¸´à¸šà¹€à¸­à¸', 'à¸à¸£à¸¡à¸à¸²à¸£à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸—à¸«à¸²à¸£', '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `patrol_login`
--

CREATE TABLE `patrol_login` (
  `ID` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patrol_login`
--

INSERT INTO `patrol_login` (`ID`, `password`) VALUES
('patrol', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `patrol_time_stamp`
--

CREATE TABLE `patrol_time_stamp` (
  `id_stamp_patrol` int(11) NOT NULL,
  `emp_name` text COLLATE utf8_unicode_ci NOT NULL,
  `area_name` text COLLATE utf8_unicode_ci NOT NULL,
  `work_date` date NOT NULL,
  `work_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `record_discipline` text COLLATE utf8_unicode_ci NOT NULL,
  `work_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `patrol_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patrol_time_stamp`
--

INSERT INTO `patrol_time_stamp` (`id_stamp_patrol`, `emp_name`, `area_name`, `work_date`, `work_time`, `record_discipline`, `work_status`, `patrol_name`) VALUES
(1, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-10-15', '06.00 - 18.00 à¸™.', '', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™à¸ˆà¸£à¸´à¸‡', 'à¸Šà¸¸à¸•à¸´à¹€à¸”à¸Š à¸¨à¸£à¸±à¸¢à¸£à¸±à¸à¸©à¹Œ'),
(3, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-12-01', '06.00 - 18.00 à¸™.', '-', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™à¸ˆà¸£à¸´à¸‡', 'à¸Šà¸¸à¸•à¸´à¹€à¸”à¸Š à¸¨à¸£à¸±à¸¢à¸£à¸±à¸à¸©à¹Œ');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_login`
--

CREATE TABLE `supervisor_login` (
  `ID` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supervisor_login`
--

INSERT INTO `supervisor_login` (`ID`, `password`) VALUES
('supervisor', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_time_stamp`
--

CREATE TABLE `supervisor_time_stamp` (
  `id_stamp_super` int(11) NOT NULL,
  `emp_name` text COLLATE utf8_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `stop_time` time NOT NULL,
  `record_discipline` text COLLATE utf8_unicode_ci NOT NULL,
  `area_name` text COLLATE utf8_unicode_ci NOT NULL,
  `work_date` date NOT NULL,
  `worktime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `work_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supervisor_time_stamp`
--

INSERT INTO `supervisor_time_stamp` (`id_stamp_super`, `emp_name`, `start_time`, `stop_time`, `record_discipline`, `area_name`, `work_date`, `worktime`, `work_status`) VALUES
(1, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', '06:00:00', '15:26:00', '', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-10-15', '06.00 - 18.00 à¸™.', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™'),
(12, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', '06:00:00', '18:00:00', '-', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-12-12', '06.00 - 18.00 à¸™.', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™'),
(3, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', '06:00:00', '15:29:00', '', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-10-16', '06.00 - 18.00 à¸™.', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™'),
(4, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', '06:00:00', '15:32:00', '', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-10-17', '06.00 - 18.00 à¸™.', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™'),
(5, 'à¸›à¸§à¸´à¸Š à¸žà¸£à¸¡à¸›à¸£à¸°à¹‚à¸„à¸™', '06:00:00', '15:33:00', '', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-10-18', '06.00 - 18.00 à¸™.', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™'),
(7, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', '08:38:00', '20:38:00', '', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-11-09', '06.00 - 18.00 à¸™.', 'à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™'),
(11, 'à¸­à¸™à¸±à¸™à¸•à¹Œ à¸¨à¸£à¸µà¹€à¸‡à¸´à¸™à¸¢à¸§à¸‡', '00:00:00', '00:00:00', 'à¹„à¸¡à¹ˆà¸¡à¸²à¸—à¸³à¸‡à¸²à¸™à¹‚à¸”à¸¢à¹„à¸¡à¹ˆà¹à¸ˆà¹‰à¸‡à¸¥à¹ˆà¸§à¸‡à¸«à¸™à¹‰à¸²', 'à¸«à¸²à¸”à¸žà¸²à¸£à¸²', '2020-11-13', '06.00 - 18.00 à¸™.', 'à¹„à¸¡à¹ˆà¸›à¸à¸´à¸šà¸±à¸•à¸´à¸‡à¸²à¸™');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_emp`
--
ALTER TABLE `area_emp`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `employee_emp`
--
ALTER TABLE `employee_emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `operation_schedule`
--
ALTER TABLE `operation_schedule`
  ADD PRIMARY KEY (`ID_operation`);

--
-- Indexes for table `patrol_emp`
--
ALTER TABLE `patrol_emp`
  ADD PRIMARY KEY (`patrol_id`);

--
-- Indexes for table `patrol_login`
--
ALTER TABLE `patrol_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patrol_time_stamp`
--
ALTER TABLE `patrol_time_stamp`
  ADD PRIMARY KEY (`id_stamp_patrol`);

--
-- Indexes for table `supervisor_login`
--
ALTER TABLE `supervisor_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supervisor_time_stamp`
--
ALTER TABLE `supervisor_time_stamp`
  ADD PRIMARY KEY (`id_stamp_super`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_emp`
--
ALTER TABLE `area_emp`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_emp`
--
ALTER TABLE `employee_emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `operation_schedule`
--
ALTER TABLE `operation_schedule`
  MODIFY `ID_operation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patrol_emp`
--
ALTER TABLE `patrol_emp`
  MODIFY `patrol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patrol_time_stamp`
--
ALTER TABLE `patrol_time_stamp`
  MODIFY `id_stamp_patrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supervisor_time_stamp`
--
ALTER TABLE `supervisor_time_stamp`
  MODIFY `id_stamp_super` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
