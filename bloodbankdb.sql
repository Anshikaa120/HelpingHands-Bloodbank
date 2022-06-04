-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 11:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `requestid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`requestid`, `name`, `contact`, `bloodtype`, `doctor`, `hospital`, `city`, `time`) VALUES
(2, 'Harsh Koli', 56565656, 'A+', 'Vedant More', 'Chrisite Joyson', 'Mumbai', '2021-12-11 10:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstorage`
--

CREATE TABLE `bloodstorage` (
  `id` int(11) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `units` int(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `bankLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodstorage`
--

INSERT INTO `bloodstorage` (`id`, `bloodtype`, `units`, `cost`, `bankLocation`) VALUES
(1, 'A+', 2, 790, 'Mumbai'),
(2, 'A-', 3, 750, 'Mumbai'),
(5, 'B+', 3, 790, 'Mumbai'),
(6, 'B-', 3, 750, 'Mumbai'),
(7, 'AB+', 3, 790, 'Mumbai'),
(8, 'AB-', 3, 750, 'Mumbai'),
(9, 'O+', 2, 790, 'Mumbai'),
(10, 'O-', 3, 750, 'Mumbai'),
(11, 'A+', 2, 790, 'Indore'),
(12, 'A-', 3, 750, 'Indore'),
(13, 'B+', 2, 790, 'Indore'),
(14, 'B-', 3, 750, 'Indore'),
(15, 'AB+', 2, 790, 'Indore'),
(16, 'AB-', 3, 750, 'Indore'),
(17, 'O+', 3, 790, 'Indore'),
(18, 'O-', 3, 750, 'Indore'),
(19, 'A+', 2, 790, 'Bhopal'),
(20, 'A-', 3, 750, 'Bhopal'),
(21, 'B+', 2, 790, 'Bhopal'),
(22, 'B-', 3, 750, 'Bhopal'),
(23, 'AB+', 2, 790, 'Bhopal'),
(24, 'AB-', 3, 750, 'Bhopal'),
(25, 'O+', 7, 790, 'Bhopal'),
(26, 'O-', 3, 750, 'Bhopal'),
(27, 'A+', 2, 790, 'Jalandhar'),
(28, 'A-', 3, 750, 'Jalandhar'),
(29, 'B+', 2, 790, 'Jalandhar'),
(30, 'B-', 3, 750, 'Jalandhar'),
(31, 'AB+', 2, 790, 'Jalandhar'),
(32, 'AB-', 3, 750, 'Jalandhar'),
(33, 'O+', 2, 790, 'Jalandhar'),
(34, 'O-', 3, 750, 'Jalandhar'),
(35, 'A+', 2, 790, 'Delhi'),
(36, 'A-', 3, 750, 'Delhi'),
(37, 'B+', 3, 790, 'Delhi'),
(38, 'B-', 3, 750, 'Delhi'),
(39, 'AB+', 2, 790, 'Delhi'),
(40, 'AB-', 3, 750, 'Delhi'),
(41, 'O+', 2, 790, 'Delhi'),
(42, 'O-', 3, 750, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `concern` varchar(255) NOT NULL,
  `yourself` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `concern`, `yourself`) VALUES
(1, 'vedant@more.com', ' i dont get blood\r\n', 'I need blood'),
(2, 'vedant@more.com', ' i dont get blood\r\n', 'I need blood'),
(3, 'vedant@more.com', 'Needs Blood', 'Vedant');

-- --------------------------------------------------------

--
-- Table structure for table `donardata`
--

CREATE TABLE `donardata` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bankLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donardata`
--

INSERT INTO `donardata` (`id`, `name`, `contact`, `bloodtype`, `time`, `bankLocation`) VALUES
(6, 'Vedant', '32323', 'O+', '2021-12-11 10:04:23', 'Indore'),
(7, 'Vedant', '56565656', 'O+', '2021-12-11 10:41:18', 'Bhopal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`requestid`);

--
-- Indexes for table `bloodstorage`
--
ALTER TABLE `bloodstorage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donardata`
--
ALTER TABLE `donardata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `requestid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloodstorage`
--
ALTER TABLE `bloodstorage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donardata`
--
ALTER TABLE `donardata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
