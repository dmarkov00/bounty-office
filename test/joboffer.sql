-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobvacancies`
--

-- --------------------------------------------------------

--
-- Структура на таблица `joboffer`
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
-- Схема на данните от таблица `joboffer`
--

INSERT INTO `joboffer` (`job_id`, `job_title`, `category`, `area`, `skills`, `language`, `reward`, `experience`, `education`) VALUES
(1, 'asdasdasd', 'asd', '', 'sad', 'asd', '2000', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joboffer`
--
ALTER TABLE `joboffer`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joboffer`
--
ALTER TABLE `joboffer`
  MODIFY `job_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
