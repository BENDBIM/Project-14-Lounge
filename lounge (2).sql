-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 03:06 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `danga`
--

CREATE TABLE `danga` (
  `id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `time` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `time`, `size`, `submittedby`) VALUES
(1, '2019-08-30 05:21:39', 'arjun', 23, 'apple'),
(2, '2019-09-30 00:56:00', 'arjun', 52, 'apple'),
(3, '2019-09-30 01:07:59', '1:99', 12, 'apple'),
(4, '2019-09-30 01:29:38', 'arjun', 23, 'apple'),
(5, '2019-09-30 01:32:04', 'jaki', 12, 'apple'),
(6, '2019-09-30 01:54:11', '1:00', 2, 'apple'),
(7, '2019-09-30 01:56:54', '1:00', 2, 'apple'),
(8, '2019-09-30 02:09:17', '2:00', 3, 'apple'),
(9, '2019-09-30 02:10:04', '2:00', 3, 'apple'),
(10, '2019-09-30 02:14:36', 'Booking Time', 0, 'apple'),
(11, '2019-09-30 02:14:45', '2:00', 3, 'apple'),
(12, '2019-09-30 02:17:13', '2:00', 3, 'apple'),
(13, '2019-09-30 02:18:20', '2:00', 3, 'apple'),
(14, '2019-09-30 02:19:48', '2:00', 3, 'apple'),
(15, '2019-09-30 02:20:32', '2:00', 3, 'apple'),
(16, '2019-09-30 02:28:26', '1:00', 2, 'apple'),
(17, '2019-09-30 02:32:21', '2:00', 3, 'apple'),
(18, '2019-09-30 02:38:15', '2:00', 3, 'apple'),
(19, '2019-09-30 03:04:52', '1:00', 2, ''),
(20, '2019-09-30 03:07:07', '1:00', 2, ''),
(21, '2019-09-30 03:09:40', '1:00', 2, ''),
(22, '2019-09-30 03:10:23', '1:00', 2, ''),
(23, '2019-09-30 03:10:36', '1:00', 2, ''),
(24, '2019-09-30 03:14:48', '1:00', 2, ''),
(25, '2019-09-30 03:22:41', '1:00', 2, '\".$_SESSION[\"username\"].\"'),
(26, '2019-09-30 03:28:24', '6:00', 6, '\".$_SESSION[\"username\"].\"'),
(27, '2019-09-30 03:36:09', '3:00', 3, '\".$_SESSION[\"username\"].\"'),
(28, '2019-09-30 03:50:45', '4:00', 4, '\".$_SESSION[\"username\"].\"'),
(29, '2019-09-30 03:53:30', '5:00', 5, '\".$_SESSION[\"username\"].\"'),
(30, '2019-09-30 03:54:52', '4:00', 4, ''),
(31, '2019-09-30 03:56:36', '4:00', 4, ''),
(32, '2019-09-30 04:10:15', '4:00', 4, ''),
(33, '2019-09-30 04:11:02', '4:00', 4, ''),
(34, '2019-09-30 04:11:08', '6:00', 6, ''),
(35, '2019-09-30 04:53:06', '4:00', 4, ''),
(36, '2019-09-30 04:53:52', '4:00', 4, ''),
(37, '2019-09-30 04:54:40', '4:00', 4, '\".$_POST[\"username\"].\"'),
(38, '2019-09-30 04:54:50', '3:00', 6, '\".$_POST[\"username\"].\"'),
(39, '2019-09-30 05:05:45', '1:00', 2, '\".$_POST[\"username\"].\"'),
(40, '2019-09-30 05:06:37', '1:00', 2, 'apple'),
(41, '2019-09-30 05:45:13', '1:00', 2, ''),
(42, '2019-09-30 05:46:18', '1:00', 2, ''),
(43, '2019-09-30 06:03:28', '1:00', 2, ''),
(44, '2019-09-30 06:04:15', '1:00', 2, ''),
(45, '2019-09-30 06:05:58', '1:00', 2, ''),
(46, '2019-09-30 06:09:26', '1:00', 2, ''),
(47, '2019-09-30 06:09:42', '1:00', 2, ''),
(48, '2019-09-30 06:10:01', '1:00', 2, ''),
(49, '2019-09-30 06:10:26', '1:00', 2, ''),
(50, '2019-09-30 06:10:58', '1:00', 2, '$_SESSION[\"username\"]'),
(51, '2019-09-30 06:11:00', '1:00', 2, '$_SESSION[\"username\"]'),
(52, '2019-09-30 06:11:31', '1:00', 2, '\".$_SESSION[\"username\"].\"'),
(53, '2019-09-30 06:11:33', '1:00', 2, '\".$_SESSION[\"username\"].\"'),
(54, '2019-09-30 06:11:56', '1:00', 2, ''),
(55, '2019-09-30 06:12:29', '1:00', 2, ''),
(56, '2019-09-30 06:12:42', '1:00', 2, ''),
(57, '2019-09-30 06:13:45', '1:00', 2, ''),
(58, '2019-09-30 06:15:17', '1:00', 2, 'GLOBALS $user[\"username\"]'),
(59, '2019-09-30 06:20:16', '3:00', 4, 'GLOBALS $user[\"username\"]'),
(60, '2019-09-30 06:23:18', '3:00', 4, ''),
(61, '2019-09-30 06:24:00', '3:00', 4, ''),
(62, '2019-09-30 06:24:16', '3:00', 4, ''),
(63, '2019-09-30 06:25:27', '3:00', 4, ''),
(64, '2019-09-30 06:26:05', '1:00', 2, ''),
(65, '2019-09-30 06:26:31', '1:00', 2, ''),
(66, '2019-09-30 06:26:40', '1:00', 2, ''),
(67, '2019-09-30 06:37:49', '1:00', 2, ''),
(68, '2019-09-30 06:40:03', '1:00', 2, ''),
(69, '2019-09-30 06:40:54', '1:00', 2, ''),
(70, '2019-09-30 06:40:56', '1:00', 2, ''),
(71, '2019-09-30 06:41:19', '1:00', 2, ''),
(72, '2019-09-30 06:46:19', '1:00', 2, ''),
(73, '2019-09-30 06:46:44', '2:00', 3, ''),
(74, '2019-09-30 06:50:47', '2:00', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `raila`
--

CREATE TABLE `raila` (
  `id` int(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raila`
--

INSERT INTO `raila` (`id`, `username`, `fname`, `lname`, `password`, `address`, `age`, `phone`) VALUES
(1, 'asd', 'dsa', 'dfg', '123', 'bab', '12', '87192371'),
(2, 'apple', 'Steve', 'jobs', 'apple123', 'usa', '52', '1234567'),
(3, 'ball', 'mark', 'juckerberg', 'facebook', 'usa', '43', '121212'),
(4, 'cat', 'mark', 'twain', 'cat123', 'usa', '34', '1231312'),
(5, 'user1', 'userisme', 'andme', 'passwordme', 'kath', '23', '12345678'),
(6, 'user2', 'userisyou', 'andme', 'passwordyou', 'adddd', '34', '123334'),
(7, 'admin1', 'adminster', 'privilege', 'admin1', 'adfadf', '12', '123214');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danga`
--
ALTER TABLE `danga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raila`
--
ALTER TABLE `raila`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danga`
--
ALTER TABLE `danga`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `raila`
--
ALTER TABLE `raila`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
