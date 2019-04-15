-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 01:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_pass` varchar(10) NOT NULL,
  `ad_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_pass`, `ad_status`) VALUES
(1, 'nirmala Vimukthi', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `status`) VALUES
(1, 'BOC', 1),
(2, 'Kandy', 0),
(3, 'HNB', 1),
(4, 'Sampath Bank', 1),
(5, 'NSB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_branch`
--

CREATE TABLE `bank_branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_address` varchar(150) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_branch`
--

INSERT INTO `bank_branch` (`branch_id`, `branch_name`, `branch_address`, `bank_id`, `status`) VALUES
(2, 'Kandy', 'kandy', 1, 0),
(3, 'Kandy-main', 'Main street, kandy town', 3, 1),
(4, 'Kandy', 'kandy town', 3, 0),
(5, 'Kandy', 'yatunuwars steet- Kandy', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(200) NOT NULL,
  `emp_email` varchar(200) NOT NULL,
  `emp_photo` varchar(100) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_password` varchar(8) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_photo`, `emp_address`, `emp_password`, `branch_id`, `status`) VALUES
(4, 'nirmala vimu', 'Nirmala@mail.com', 'images/or.jpg', 'kandy', '1234', 2, 0),
(16, 'emp_name', 'emp_email', 'images/ep_5cb38bd841c8f3.43479220.jpg', 'emp_address', 'emp_pass', 2, 0),
(17, 'emp_name', 'emp_email', '', 'emp_address', 'emp_pass', 2, 0),
(18, 'emp_name', 'emp_email', 'emp_photo', 'emp_address', 'emp_pass', 2, 0),
(19, 'emp_name', '.$emp_email.', '', 'emp_address', 'emp_pass', 2, 0),
(20, 'emp_name', 'mt@test.com', 'emp_photo', 'emp_address', 'emp_pass', 2, 0),
(21, 'nuwan', 'mt@test.com', '', '45- thalathuoya', '', 2, 0),
(22, 'aluth para', 'test@test.com', 'images/ep_5cb39d38a591d9.59821916.jpg', 'thalwatte- kandy', '<br /><b', 2, 0),
(23, 'vimukthi Bandara', 'nirmalavimukthi@hotmail.com', 'images/ep_5cb46b8d7e4970.81420332.png', '123- new town.', '1234', 3, 1),
(24, 'vimukthi', 'nirmalavimukthi@hotmail.com', 'images/ep_5cb2fe3cadc883.72757679.jpg', '123- new town.', '1234', 2, 0),
(25, 'aluth', 'mt@test.com', 'images/ep_5cb46bd32f0c56.74963200.jpg', 'thalathuoya@kandy.com', '1234', 3, 1),
(26, 'jayanatha', 'pseranga@hotmail.com', 'images/ep_5cb46bfc385687.24510542.jpg', '123-thal road.', '1234', 5, 1),
(27, 'sandun', 'nirmalavimukthi@hotmail.com', 'images/ep_5cb46c0943eea4.78358279.jpg', 'new address ', '12344', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bank_branch`
--
ALTER TABLE `bank_branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bank_branch`
--
ALTER TABLE `bank_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_branch`
--
ALTER TABLE `bank_branch`
  ADD CONSTRAINT `bank_branch_ibfk_1` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`bank_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `bank_branch` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
