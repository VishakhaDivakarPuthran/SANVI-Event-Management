-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanvi_event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `apassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apassword`) VALUES
(1, 'sanvi', '$2y$10$GrU8geT26gfsh1ZlWauQtuUoHY/S96mRzr8pq8coQNuuwVvVfg9O6');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pincode` int(6) NOT NULL,
  `noofunits` int(10) NOT NULL,
  `amount` int(30) NOT NULL,
  `bdate` datetime NOT NULL DEFAULT current_timestamp(),
  `btime` time NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `state` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL,
  `catdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catdate`, `status`) VALUES
(1, 'Baby shower', '2023-05-26 19:34:15', ''),
(2, 'Bridal shower', '2023-05-26 19:34:33', ''),
(3, 'Engagement ceremony', '2023-05-26 19:34:54', ''),
(4, 'Pool party', '2023-05-26 19:35:31', ''),
(5, 'Birthday party', '2023-05-26 19:36:40', ''),
(6, 'Concerts', '2023-05-26 19:37:34', ''),
(7, 'Private party', '2023-05-26 19:38:17', ''),
(8, 'Baby naming ceremony', '2023-05-26 19:41:25', ''),
(9, 'Pre-wedding rituals', '2023-05-26 19:42:57', ''),
(10, 'Reception', '2023-05-26 19:43:10', ''),
(11, 'Annual festival', '2023-06-03 18:30:38', ''),
(12, 'College day', '2023-06-03 18:31:00', ''),
(13, 'Exhibition', '2023-06-03 18:31:14', ''),
(14, 'Seminar', '2023-06-03 18:31:31', ''),
(15, 'Brand promotion', '2023-06-03 18:32:37', ''),
(16, 'Corporate events', '2023-06-03 18:33:04', ''),
(17, 'Family Trips', '2023-06-03 18:33:41', ''),
(18, 'Corporate tours', '2023-06-03 18:33:57', ''),
(19, 'Other', '2023-06-03 18:38:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `address` varchar(156) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `message` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `amount` int(12) NOT NULL,
  `advanceamount` int(40) NOT NULL,
  `balanceamt` int(40) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(40) NOT NULL,
  `paymethod` varchar(30) NOT NULL,
  `transid` int(22) NOT NULL,
  `cardname` varchar(11) NOT NULL,
  `cardno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sid` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `description` varchar(600) NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `cid`, `sname`, `description`, `amount`, `image`, `date`, `status`) VALUES
(2, 2, 'Make up artist', 'I want a simple yet elegant look for my ceremany ,provide a great mua for the occasion.', 4000, 'upload/Screenshot (227).png', '2023-06-03 03:20:53', ''),
(3, 5, 'Photography', 'I want a simple yet elegant photography at my cousins wedding.Please send a relative photographer.', 2340, 'upload/Screenshot (209).png', '2023-06-03 03:24:03', ''),
(4, 7, 'Catering', 'There is private party at my friends birthday party.', 8000, 'upload/Screenshot (177).png', '2023-06-03 18:37:59', ''),
(5, 6, 'Stage Decoration and Equipment', 'There is concert at my karavali ground so we require relevant decorations as shown in the figure.', 50000, 'upload/Screenshot (178).png', '2023-06-03 18:42:05', ''),
(6, 6, 'Stage sound and music Equipmen', 'we want a proper music system at the event please provide the needfull.', 10000, 'upload/Screenshot (179).png', '2023-06-03 18:45:58', ''),
(7, 6, 'Live performance ', 'There is concert at my karavali please arrange for live performance.', 1000000, 'upload/Screenshot (181).png', '2023-06-03 18:47:57', ''),
(8, 6, 'Lightings', 'There is concert at my karavali ground so please provide lightings .', 100000, 'upload/Screenshot (182).png', '2023-06-03 18:49:54', ''),
(9, 9, 'Live performance', 'My cousin is getting married on 6th of this month and we require a live performance for the function.', 100000, 'upload/Screenshot (185).png', '2023-06-03 18:52:33', ''),
(10, 9, 'Live performance', 'My cousin is getting married on 7th of this month.', 100000, 'upload/Screenshot (185).png', '2023-06-03 18:52:33', ''),
(11, 10, 'Photography', 'My cousin is getting married and we reqire a photographer with excellent skills.', 10000, 'upload/Screenshot (202).png', '2023-06-03 18:56:02', ''),
(12, 1, 'Photography', 'We want a pre baby shower shoot so please provide a relevent photographer.', 10000, 'upload/Screenshot (207).png', '2023-06-03 18:58:10', ''),
(13, 3, 'Catering', 'We want a Catering service at our ceremony please provide the delicasies on time.', 100000, 'upload/Screenshot (213).png', '2023-06-03 19:00:05', ''),
(14, 10, 'Catering', 'We want a Catering service for our function.', 10000, 'upload/Screenshot (217).png', '2023-06-03 19:02:53', ''),
(15, 5, 'Catering', 'I want a simple yet elegant food for my function .Please provide the needfull.', 8000, 'upload/Screenshot (214).png', '2023-06-05 14:32:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `uphoneno` bigint(10) NOT NULL,
  `uemail` varchar(40) NOT NULL,
  `uaddress` varchar(156) NOT NULL,
  `upassword` varchar(10) NOT NULL,
  `udate` datetime NOT NULL DEFAULT current_timestamp(),
  `ustatus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
