-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 11:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_day`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `career` varchar(100) NOT NULL,
  `three_words` varchar(100) NOT NULL,
  `repo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `email`, `first_name`, `last_name`, `program`, `website`, `hometown`, `career`, `three_words`, `repo`) VALUES
(1, 'loganada5@gmail.com', 'Adam', 'Logan', 'Web Development', 'adamlogan.net', 'Urbandale, IA', 'Aspire to be a Drupal or PHP Developer.', 'Determined, Clever, Coach-able. ', 'https://github.com/loganada'),
(2, 'djschneider1@dmacc.edu', 'Dan', 'Schneider', 'Web Development', '', '', '', '', ''),
(19, 'j', '', '', 'Please select and option', '', '      ', '', '      ', ''),
(20, 'j', '', '', 'Please select and option', '', '      ', '      ', '            ', ''),
(21, 'j', '', '', 'Please select and option', '', '            ', '      ', '                  ', ''),
(22, 'k', '', '', 'Please select and option', '', '      ', '', '      ', ''),
(23, 'loganada5@gmail.com', 'Adam', 'Logan', 'Photography', 'www.adamlogan.net', '             liek           ', 'urbandale', '               d         ', 'www.github.vom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
