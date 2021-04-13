-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 13, 2021 at 08:20 PM
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
  `notes_pdf` varchar(1200) NOT NULL,
  `syllabus_pdf` varchar(1200) CHARACTER SET latin1 NOT NULL,
  `books_pdf` varchar(1200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1_notes`
--

INSERT INTO `sem1_notes` (`id`, `code`, `title`, `notes_pdf`, `syllabus_pdf`, `books_pdf`) VALUES
(6, '-', 'Project Work', '', '', ''),
(1, 'CS-101', 'Digital Logic', '13Oct-13Jan2020-2021.pdf', 'digital_logic.pdf', 'Morris Mano Digital Design 3rd Edition.pdf'),
(1, 'CS-102', 'Discrete Mathematics', '13Oct-13Jan2020-2021.pdf', 'discrete_mathematics.pdf', 'NA'),
(1, 'CS-103', 'Numerical Computing', '13Oct-13Jan2020-2021.pdf', 'numerical_computing.pdf', 'Numerical Computing MK Jain.pdf'),
(1, 'CS-104', 'Programming using C', '13Oct-13Jan2020-2021.pdf', 'programming_using_c.pdf', 'Dennis Ritche C Prog.pdf'),
(2, 'CS-105', 'Probability and Statistics', '13Oct-13Jan2020-2021.pdf', '', 'NA'),
(3, 'CS-106', 'Computer Architecture', '', '', 'Morris Mano CSA.pdf'),
(2, 'CS-107', 'Data Structures', '', '', 'NA'),
(3, 'CS-109', 'Object Oriented Programming', '', '', ''),
(3, 'CS-110', 'Operating Systems', '', '', 'Operating_System Galvin.pdf'),
(2, 'CS-111', 'Database Management Systems', '', '', 'Database-System-Concepts-Silberschatz.pdf'),
(3, 'CS-112', 'Computer Networks', '', '', 'computer networks.pdf'),
(2, 'CS-113', 'Microprocessors', '', '', 'microprocessor ramesh-s-gaonkarpdf_compress.pdf'),
(4, 'CS-114', 'Web Based Programming', '', '', ''),
(3, 'CS-115', 'Design and Analysis of Algorithms', '', '', 'Algo Cormen.pdf'),
(4, 'CS-116', 'Computer Graphics', '', '', ''),
(5, 'CS-117', 'Parallel and Distributed Systems', '', '', ''),
(4, 'CS-118', 'Software Engineering', '', '', 'Software Engineering by Rajib'),
(2, 'CS-119', 'Formal Languages and Automata Theory', '', '', 'Formal Language.pdf'),
(4, 'CS-120', 'Artificial Intelligence', '', '', 'Aritifical Intelligence by Russel and Norvig.pdf'),
(5, 'CS-148', 'Principles of Compiler Design', '', '', ''),
(4, 'CS-149', 'Software Testing', '', '', '');

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
