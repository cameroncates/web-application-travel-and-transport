-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 04:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_and_transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `ANAME` varchar(111) NOT NULL COMMENT 'AGENT NAME',
  `AADDRESS` varchar(111) NOT NULL COMMENT 'ADDRESS OF AGENT',
  `ANO` varchar(111) NOT NULL COMMENT 'NO OF AGENT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `DRIVERID` int(111) NOT NULL,
  `LICENCE` varchar(111) NOT NULL COMMENT 'NO OF BUS',
  `ROUTE` varchar(111) NOT NULL COMMENT 'ROUTE OF THE BUS',
  `MODEL` varchar(255) DEFAULT NULL COMMENT 'model of the bus',
  `trip_per_month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`DRIVERID`, `LICENCE`, `ROUTE`, `MODEL`, `trip_per_month`) VALUES
(2, 'BC-098', 'From Peshawar To Islamabad', 'HINO', '2017-12-04'),
(5, 'IY-954', 'From Peshawar To Faisalabad', 'Daewoo', '2017-12-11'),
(3, 'OI-076', 'From Lahore To Peshawar', 'Toyota ', '2017-12-13'),
(1, 'PO-299', 'From Islamabad To Lahore', 'Daewoo', '2017-12-04'),
(4, 'YG-876', 'From Islamabad To Faisalabad', 'Youtang', '2017-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVERID` int(111) NOT NULL,
  `DRIVERNAME` varchar(111) NOT NULL,
  `LICENCE` varchar(111) NOT NULL,
  `RATINGID` int(111) NOT NULL,
  `STATUS_ID` int(111) NOT NULL,
  `SALARY` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRIVERID`, `DRIVERNAME`, `LICENCE`, `RATINGID`, `STATUS_ID`, `SALARY`) VALUES
(1, 'arsalan kaleem', 'PO-299', 2, 3, 45000),
(2, 'Arsala Khan', 'BC-098', 3, 2, 76000),
(3, 'Khwaja', 'OI-076', 4, 4, 91000),
(4, 'Usama', 'YG-876', 2, 1, 62000),
(5, 'Sajid', 'IY-954', 1, 2, 86000);

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `DETPNO` varchar(111) NOT NULL COMMENT 'SHOW THE DEPT NO',
  `OWNERNO` varchar(111) NOT NULL COMMENT 'SHOW NO OF OWNER',
  `TAXNO` varchar(111) NOT NULL COMMENT 'SHOW THE TAXT NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `INCIDENTID` int(111) NOT NULL,
  `INCIDENTTYPEID` int(111) NOT NULL,
  `DRIVERID` int(111) NOT NULL,
  `REPORTEDDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`INCIDENTID`, `INCIDENTTYPEID`, `DRIVERID`, `REPORTEDDATE`) VALUES
(1, 1, 3, '2017-12-13 07:16:22'),
(2, 2, 5, '2017-12-13 03:09:13'),
(3, 3, 1, '2017-12-03 08:20:13'),
(4, 4, 4, '2017-12-29 11:32:26'),
(5, 5, 1, '2017-12-05 21:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `incident_type`
--

CREATE TABLE `incident_type` (
  `INCIDENTNAME` varchar(111) NOT NULL,
  `INCIDENTTYPEID` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident_type`
--

INSERT INTO `incident_type` (`INCIDENTNAME`, `INCIDENTTYPEID`) VALUES
('Turn Over', 1),
('Collision', 2),
('Tire Blast', 3),
('Break Fails', 4),
('Out Of Fuel', 5);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `PNAME` varchar(111) DEFAULT NULL COMMENT 'shows name of the passenger',
  `PADDRESS` varchar(111) DEFAULT NULL COMMENT 'shows the address of passenger',
  `ROUTE` varchar(111) DEFAULT NULL COMMENT 'it show the route name',
  `DEPARTURETIME` varchar(111) DEFAULT NULL COMMENT 'CHOOSE TIME OF DEPARTURE',
  `LICENCE` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RATINGNAME` varchar(50) NOT NULL,
  `RATINGID` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RATINGNAME`, `RATINGID`) VALUES
('Poor', 1),
('Good', 2),
('Very Good', 3),
('Very Poor', 4);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `phone` int(111) NOT NULL,
  `country` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `name`) VALUES
(1, 'Quit'),
(2, 'Applied'),
(3, 'Terminated'),
(4, 'Incompatible');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`LICENCE`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRIVERID`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`INCIDENTID`);

--
-- Indexes for table `incident_type`
--
ALTER TABLE `incident_type`
  ADD PRIMARY KEY (`INCIDENTTYPEID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RATINGID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `DRIVERID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `incident`
--
ALTER TABLE `incident`
  MODIFY `INCIDENTID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `incident_type`
--
ALTER TABLE `incident_type`
  MODIFY `INCIDENTTYPEID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RATINGID` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
