-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 09, 2021 at 08:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
-- Table structure for table `sem1_notes`
--

CREATE TABLE `sem1_notes` (
  `id` int(255) NOT NULL,
  `code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pdf_name` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1_notes`
--

INSERT INTO `sem1_notes` (`id`, `code`, `title`, `pdf_name`) VALUES
(1, 'CS-101', 'Digital Logic', '13Oct-13Jan2020-2021.pdf'),
(1, 'CS-102', 'Discrete Mathematics', '13Oct-13Jan2020-2021.pdf'),
(1, 'CS-103', 'Numerical Computing', '13Oct-13Jan2020-2021.pdf'),
(1, 'CS-104', 'Programming using C', '13Oct-13Jan2020-2021.pdf'),
(2, 'CS-105', 'Probability and Statistics', '13Oct-13Jan2020-2021.pdf'),
(2, 'CS-107', 'Data Structures', ''),
(2, 'CS-111', 'Database Management Systems', ''),
(2, 'CS-113', 'Microprocessors', ''),
(2, 'CS-119', 'Formal Languages and Automata Theory', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sem1_notes`
--
ALTER TABLE `sem1_notes`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
