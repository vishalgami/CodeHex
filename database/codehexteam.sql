-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2019 at 11:51 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codehexteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `date`) VALUES
(1, 'Computer Engineering', '2019-09-21 05:06:24'),
(2, 'civil', '2019-09-17 18:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` varchar(255) NOT NULL,
  `subject_id` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapter_id`, `chapter_name`, `subject_id`, `date`) VALUES
(1, 'networking', '5', '2019-09-18 11:07:35'),
(4, 'light', '1', '2019-09-18 11:14:21'),
(5, 'Basic of python', '9', '2019-09-21 02:34:17'),
(6, 'Advance topic', '9', '2019-09-21 02:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` bigint(20) NOT NULL,
  `subject_name` varchar(256) NOT NULL,
  `chapter_name` varchar(256) NOT NULL,
  `branch_id` varchar(256) NOT NULL,
  `semester` varchar(256) NOT NULL,
  `question` text NOT NULL,
  `marks` varchar(256) NOT NULL,
  `level` varchar(256) NOT NULL,
  `faculty_id` varchar(256) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `subject_name`, `chapter_name`, `branch_id`, `semester`, `question`, `marks`, `level`, `faculty_id`, `created_date`) VALUES
(8, '2', '1', '1', '1', '2019 Â© Codehex Team Privacy & Terms   2019 Â© Codehex Team Privacy & Terms  2019 Â© Codehex Team Privacy & Terms  2019 Â© Codehex Team Privacy & Terms', '2', 'Low', '3', '2019-09-20 22:25:05'),
(7, '2', '1', '1', '1', ' 2019 Â© Codehex Team Privacy & Terms', '2', 'Low', '3', '2019-09-20 21:50:56'),
(5, '2', '1', '1', '1', ' 2019 Â© Codehex Team Privacy & Terms', '2', 'Low', '3', '2019-09-20 23:09:05'),
(9, '9', '5', '4', '7', 'What is extension of python', '2', 'Low', '30', '2019-09-21 06:06:13'),
(10, '9', '6', '4', '7', 'What are libraries of python', '2', 'Medium', '30', '2019-09-21 06:06:08'),
(11, '9', '5', '4', '7', 'What is disadvantage of python', '2', 'Low', '3', '2019-09-21 02:44:05'),
(12, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:52:47'),
(13, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:52:47'),
(14, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:52:55'),
(15, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:52:55'),
(16, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:11'),
(17, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:11'),
(18, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:20'),
(19, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:20'),
(20, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:27'),
(21, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:27'),
(22, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:38'),
(23, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:38'),
(24, '2', '1', '1', '1', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:53'),
(25, '', '', '', '', 'this is test purpse question', '1', 'Low', '3', '2019-09-21 04:53:53'),
(26, '2', '1', '1', '1', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:33'),
(27, '', '', '', '', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:33'),
(28, '2', '1', '1', '1', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:39'),
(29, '', '', '', '', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:39'),
(30, '2', '1', '1', '1', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:44'),
(31, '', '', '', '', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:44'),
(32, '2', '1', '1', '1', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:51'),
(33, '', '', '', '', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:51'),
(34, '2', '1', '1', '1', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:58'),
(35, '', '', '', '', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:54:58'),
(36, '2', '1', '1', '1', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:55:07'),
(37, '', '', '', '', 'this is test purpse question', '3', 'Low', '3', '2019-09-21 04:55:07'),
(38, '2', '1', '1', '1', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:27'),
(39, '', '', '', '', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:27'),
(40, '2', '1', '1', '1', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:47'),
(41, '', '', '', '', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:47'),
(42, '2', '1', '1', '1', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:53'),
(43, '', '', '', '', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:53'),
(44, '2', '1', '1', '1', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:58'),
(45, '', '', '', '', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:55:58'),
(46, '2', '1', '1', '1', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:56:05'),
(47, '', '', '', '', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:56:05'),
(48, '2', '1', '1', '1', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:22'),
(49, '', '', '', '', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:22'),
(50, '2', '1', '1', '1', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:37'),
(51, '', '', '', '', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:37'),
(52, '2', '1', '1', '1', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:42'),
(53, '', '', '', '', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:42'),
(54, '2', '1', '1', '1', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:50'),
(55, '', '', '', '', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:56:50'),
(56, '2', '1', '1', '1', 'this is test purpse question', '8', 'Low', '3', '2019-09-21 04:57:05'),
(57, '', '', '', '', 'this is test purpse question', '8', 'Low', '3', '2019-09-21 04:57:05'),
(58, '2', '1', '1', '1', 'this is test purpse question', '8', 'Low', '3', '2019-09-21 04:57:19'),
(59, '', '', '', '', 'this is test purpse question', '8', 'Low', '3', '2019-09-21 04:57:19'),
(60, '2', '1', '1', '1', 'this is test purpse question', '8', 'Low', '3', '2019-09-21 04:57:25'),
(61, '', '', '', '', 'this is test purpse question', '8', 'Low', '3', '2019-09-21 04:57:25'),
(62, '2', '1', '1', '1', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:57:44'),
(63, '', '', '', '', 'this is test purpse question', '6', 'Low', '3', '2019-09-21 04:57:44'),
(64, '2', '1', '1', '1', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:57:58'),
(65, '', '', '', '', 'this is test purpse question', '4', 'Low', '3', '2019-09-21 04:57:58'),
(66, '9', '5', '4', '7', 'hghggjg', '5', 'Low', '30', '2019-09-21 05:06:37'),
(67, '9', '5', '1', '7', 'python', '3', 'Low', '30', '2019-09-21 05:08:52'),
(68, '9', '5', '1', '7', 'python basic', '8', 'Low', '30', '2019-09-21 05:10:27'),
(69, '9', '5', '1', '7', 'python 8 marks', '8', 'Low', '30', '2019-09-21 05:10:54'),
(70, '9', '5', '1', '', 'vishal', '8', 'Low', '30', '2019-09-21 05:11:21'),
(71, '9', '5', '1', '7', 'vishal patel', '8', 'Low', '30', '2019-09-21 05:11:43'),
(72, '9', '5', '1', '7', ' 6 marks question', '6', 'Low', '30', '2019-09-21 05:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `question_label`
--

CREATE TABLE `question_label` (
  `question_label_id` int(11) NOT NULL,
  `question_label_name` varchar(556) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_label`
--

INSERT INTO `question_label` (`question_label_id`, `question_label_name`, `date`) VALUES
(1, 'Low', '2019-09-19 05:14:49'),
(2, 'Medium', '2019-09-19 05:14:49'),
(3, 'Difficult', '2019-09-19 20:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`, `date`) VALUES
(1, '1st Semester', '2019-09-20 21:48:49'),
(2, '2nd Semester', '2019-09-20 21:49:04'),
(3, '3rd Semester', '2019-09-20 21:49:07'),
(4, '4th Semester', '2019-09-20 21:49:11'),
(5, '5th Semester', '2019-09-20 21:49:32'),
(6, '6th Semester', '2019-09-20 21:49:38'),
(7, '7th Semester', '2019-09-20 21:49:41'),
(8, '8th Semester', '2019-09-20 21:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `branch_id` varchar(255) NOT NULL,
  `semester_id` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_code`, `branch_id`, `semester_id`, `date`) VALUES
(1, 'Engineering Drawing', 'BT101', 'civil', '2nd semester', '2019-09-20 19:01:44'),
(2, 'Cloud Computing', 'BT501', 'computer science', '6th semester', '2019-09-20 19:01:55'),
(3, 'Networking', 'BT401', 'Computer Science', '5th Semester', '2019-09-20 21:51:21'),
(4, 'Data structure', 'BT301', 'Computer Science', '3rd Semester', '2019-09-20 21:51:26'),
(7, 'Mobile Computing', '01ce0303', 'Computer Engineer', '7th Semester', '2019-09-21 02:23:02'),
(8, 'Dmir', '01ce0201', 'Computer Engineering', '7th Semester', '2019-09-21 02:33:39'),
(9, 'Python', '01ce0405', 'Computer Engineering', '7th Semester', '2019-09-21 02:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(556) NOT NULL,
  `full_name` varchar(556) NOT NULL,
  `password` varchar(556) NOT NULL,
  `mail_id` varchar(556) NOT NULL,
  `mobile_no` varchar(556) NOT NULL,
  `profile_pic` varchar(556) NOT NULL,
  `status` varchar(556) NOT NULL,
  `member` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date_of_registation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `full_name`, `password`, `mail_id`, `mobile_no`, `profile_pic`, `status`, `member`, `branch`, `subject`, `date_of_registation`) VALUES
(1, 'amit6368', 'AMIT PATEL', '123456789', 'amit6368@gmail.com', '123456789', 'promo_5a2c4571667842d8d18dfe9f396a4081.jpg', '2', 'admin', '', '', '2019-07-19 20:16:07'),
(2, 'admin', 'Super Admin', '123456789', 'admin@gmail.com', '9424377809', 'promo_adc20f54e251ecb1be5691b84d7d71da.png', '1', 'admin', '', '', '2019-09-17 23:35:32'),
(3, 'faculty123', 'Faculty User', '123456789', 'faculty@gmail.com', '1234567800', 'promo_950e86382404d9cc87dbe38fdab1d5ac.png', '2', 'faculty', '', '', '2019-09-21 05:45:33'),
(5, 'sonu6368@gmail.com', 'SONU PATEL', '123456789', 'sonu6368@gmail.com', '1234567890', 'profile_pic2.png', '1', 'faculty', '', '', '2019-09-17 18:00:03'),
(29, 'amit6368@gmail.com', 'AMIT PATEL', 'P9gMBebaE8Qq14ke', 'amit6368@gmail.com', '8002106547', 'profile_pic2.png', '1', 'faculty', 'Computer Science', 'Engineering Drawing', '2019-09-17 21:41:16'),
(30, 'vishal', 'Vishal Gami', '123456789', 'itsmevishal4@gmail.com', '9429631961', 'profile_pic2.png', '1', 'faculty', 'Computer Engineering', 'Dmir', '2019-09-21 02:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_label`
--
ALTER TABLE `question_label`
  ADD PRIMARY KEY (`question_label_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `question_label`
--
ALTER TABLE `question_label`
  MODIFY `question_label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
