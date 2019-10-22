-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 03:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngvv`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `events_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `events_date` date NOT NULL,
  `events_time` time NOT NULL,
  `events_disc` text COLLATE utf8_bin NOT NULL,
  `events_location` varchar(255) COLLATE utf8_bin NOT NULL,
  `events_time_added` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `events_name`, `events_date`, `events_time`, `events_disc`, `events_location`, `events_time_added`) VALUES
(4, 'abc', '2019-10-23', '04:01:00', 'dfg', 'hierzo', '2019-10-21 15:03:39'),
(3, 'halloween', '2019-10-31', '20:00:00', 'Trick or Treat', 'hierzo', '2019-10-21 15:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `event_participation`
--

CREATE TABLE `event_participation` (
  `event_participation_id` int(11) NOT NULL,
  `event_participation_member_id` int(11) NOT NULL,
  `event_participation_member_comment` int(11) NOT NULL,
  `event_participation_events_id` int(11) NOT NULL,
  `event_participation_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `members_id` int(11) NOT NULL,
  `members_email` varchar(155) COLLATE utf8_bin NOT NULL,
  `members_username` varchar(55) COLLATE utf8_bin NOT NULL,
  `members_password` varchar(100) COLLATE utf8_bin NOT NULL,
  `members_rank` int(10) NOT NULL,
  `members_dob` date NOT NULL,
  `members_function` varchar(255) COLLATE utf8_bin NOT NULL,
  `members_extra` text COLLATE utf8_bin NOT NULL,
  `members_date_added` datetime DEFAULT NULL,
  `members_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `members_surname` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `members_email`, `members_username`, `members_password`, `members_rank`, `members_dob`, `members_function`, `members_extra`, `members_date_added`, `members_name`, `members_surname`) VALUES
(1, '', 'admin', 'admin', 0, '0000-00-00', 'super user', 'applicatie admin en beheer', NULL, 'admin', 'admin'),
(3, 'kajhorseling@hotmail.nl', 'Grimdotcom', 'admin', 2, '0000-00-00', 'admin', '', '2019-10-22 14:54:26', 'Kaj', 'Horseling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `event_participation`
--
ALTER TABLE `event_participation`
  ADD PRIMARY KEY (`event_participation_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_participation`
--
ALTER TABLE `event_participation`
  MODIFY `event_participation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
