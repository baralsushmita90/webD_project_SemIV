-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 12:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mca`
--

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pdf` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`code`, `title`, `pdf`) VALUES
('CS-101', 'Digital Logic Mid Sem', 'digital_logic_mid'),
('CS-111', 'DBMS Mid Semester ', 'dbms_midsem'),
('CS-111', 'DBMS End Semester', 'dbms_endsem'),
('CS-107', 'Data Structures End Sem', 'ds_endsem'),
('CS-107', 'Data Structure Lab Mid Sem', 'ds_lab_midsem'),
('CS-107', 'Data Structures Mid Sem', 'ds_midsem'),
('CS-119', 'Formal Language Mid Sem', 'formal_language_mid_sem'),
('CS-113', 'Microprocessors End Term', 'micro_endterm'),
('CS-113', 'Microprocessors Mid Term', 'micro_midterm'),
('CS-105', 'Probability and Statistics End Sem', 'prob_stats_endsem'),
('CS-105', 'Probability and Statistics Mid 1', 'prob_stats_mid1'),
('CS-105', 'Probabilty and Statistics Mid 2', 'prob_stat_mid2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD KEY `code` (`code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `papers`
--
ALTER TABLE `papers`
  ADD CONSTRAINT `papers_ibfk_1` FOREIGN KEY (`code`) REFERENCES `sem1_notes` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
