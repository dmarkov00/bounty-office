-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 03:38 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bountyoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `JOBOFFER_ID` int(11) NOT NULL,
  `BH_USER_ID` int(11) NOT NULL,
  `CANDIDATE_ID` int(11) NOT NULL,
  `CANDIDATE_DESCRIPTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bhusers`
--

CREATE TABLE `bhusers` (
  `B_USER_ID` int(11) NOT NULL,
  `FNAME` int(11) NOT NULL,
  `LNAME` int(11) NOT NULL,
  `EMAIL` int(11) NOT NULL,
  `AREA` int(11) NOT NULL,
  `LOCATION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corpusers`
--

CREATE TABLE `corpusers` (
  `C_USER_ID` int(11) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `FNAME` varchar(25) NOT NULL,
  `LNAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `joboffer`
--

CREATE TABLE `joboffer` (
  `job_id` int(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  `reward` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='joboffering table';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corpusers`
--
ALTER TABLE `corpusers`
  ADD PRIMARY KEY (`C_USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corpusers`
--
ALTER TABLE `corpusers`
  MODIFY `C_USER_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
