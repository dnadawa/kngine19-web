-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 09:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kngine19`
--

-- --------------------------------------------------------

--
-- Table structure for table `codecom`
--

CREATE TABLE `codecom` (
  `schoolname` varchar(100) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `competitorname` varchar(100) NOT NULL,
  `competitoremail` varchar(100) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `projectfile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cybercombat`
--

CREATE TABLE `cybercombat` (
  `schoolname` varchar(100) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `teamleader_name` varchar(100) NOT NULL,
  `teamleader_email` varchar(100) NOT NULL,
  `teamleader_cont` int(10) NOT NULL,
  `player1name` varchar(100) NOT NULL,
  `player1cont` int(10) NOT NULL,
  `player2name` varchar(100) NOT NULL,
  `player2cont` int(10) NOT NULL,
  `player3name` varchar(100) NOT NULL,
  `player3cont` int(10) NOT NULL,
  `player4name` varchar(100) NOT NULL,
  `player4cont` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dexigner`
--

CREATE TABLE `dexigner` (
  `schoolname` varchar(100) NOT NULL,
  `projectname` varchar(75) NOT NULL,
  `competitorname` varchar(100) NOT NULL,
  `competitoremail` varchar(100) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `projectfile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tshirtorder`
--

CREATE TABLE `tshirtorder` (
  `TName` varchar(100) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `contactnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('kngine19admin', 'admin@kngine');

-- --------------------------------------------------------

--
-- Table structure for table `webdezign`
--

CREATE TABLE `webdezign` (
  `schoolname` varchar(100) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `competitorname` varchar(100) NOT NULL,
  `competitoremail` varchar(100) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `projectfile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codecom`
--
ALTER TABLE `codecom`
  ADD PRIMARY KEY (`schoolname`,`competitoremail`,`contactnumber`);

--
-- Indexes for table `cybercombat`
--
ALTER TABLE `cybercombat`
  ADD PRIMARY KEY (`schoolname`,`teamname`,`teamleader_cont`,`player1cont`,`player2cont`,`player3cont`,`player4cont`,`teamleader_email`);

--
-- Indexes for table `dexigner`
--
ALTER TABLE `dexigner`
  ADD PRIMARY KEY (`schoolname`,`competitoremail`,`contactnumber`);

--
-- Indexes for table `tshirtorder`
--
ALTER TABLE `tshirtorder`
  ADD PRIMARY KEY (`TName`,`emailaddress`,`contactnumber`);

--
-- Indexes for table `webdezign`
--
ALTER TABLE `webdezign`
  ADD PRIMARY KEY (`schoolname`,`competitoremail`,`contactnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
