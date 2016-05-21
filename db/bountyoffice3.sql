-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.10-MariaDB
-- PHP Version: 5.6.19

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
-- Структура на таблица `applications`
--

CREATE TABLE `applications` (
  `JOBOFFER_ID` int(11) NOT NULL,
  `BH_USER_ID` int(11) NOT NULL,
  `CANDIDATE_ID` int(11) NOT NULL,
  `CANDIDATE_DESCRIPTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `bhusers`
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
-- Структура на таблица `candidates`
--

CREATE TABLE `candidates` (
  `application_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `corpusers`
--

CREATE TABLE `corpusers` (
  `C_USER_ID` int(11) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `FNAME` varchar(25) NOT NULL,
  `LNAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `firends`
--

CREATE TABLE `firends` (
  `friend_id` int(11) NOT NULL,
  `bhuser_id` int(11) NOT NULL,
  `friend_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `degree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `firends`
--

INSERT INTO `firends` (`friend_id`, `bhuser_id`, `friend_name`, `category`, `area`, `skills`, `languages`, `degree`) VALUES
(1, 1, 'Ivan', 'High Tech', 'Eindhoven', 'JavaEE JEE Scrum', 'English', 'Bachelor'),
(2, 2, 'John', 'e-Commerce', 's-Hertogenbosch', 'HTML5 CSS2 CSS3 Javascript PHP LESS', 'Dutch English', 'Bachelor'),
(3, 1, 'Albert', 'FMCG', 'Eindhoven', 'FMCG Energetic Representative', 'Dutch', 'Master'),
(4, 1, 'Tony', 'FMCG', 'Eindhoven', 'FMCG Energetic Representative', 'Dutch', 'Bachelor');

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

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `fname`, `lname`, `email`, `location`, `country`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(1, 'linkedin', 'DF16fy2N1T', 'Atanas', 'Naydenov', 'jacknasoko@abv.bg', 'Apeldoorn Area, Netherlands', 'nl', 'https://media.licdn.com/mpr/mprx/0_7bSuVpiCOcTZx-RjQbRCNwNCRcyZxikl7_JuyHz_01DJV1ngQ9vCtwD_4Q-JsKLr_bJuNMmi-KfMpFm86qeK-HifBKf4pF-y6qe7Jd9GylVN9AdhE5O3Mg41cLzHvF5S7B28YcW2BEq', 'https://www.linkedin.com/in/atanas-naydenov-6b5303121', '2016-05-21 00:50:49', '2016-05-21 17:11:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corpusers`
--
ALTER TABLE `corpusers`
  ADD PRIMARY KEY (`C_USER_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corpusers`
--
ALTER TABLE `corpusers`
  MODIFY `C_USER_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
