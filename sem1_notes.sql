-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 14, 2021 at 06:56 PM
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
  `title` varchar(255) CHARACTER SET latin1 DEFAULT 'NA',
  `notes_pdf` varchar(1200) DEFAULT 'NA',
  `syllabus_pdf` varchar(1200) CHARACTER SET latin1 DEFAULT 'NA',
  `books_pdf` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `project_name` varchar(1200) CHARACTER SET latin1 NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1_notes`
--

INSERT INTO `sem1_notes` (`id`, `code`, `title`, `notes_pdf`, `syllabus_pdf`, `books_pdf`, `project_name`) VALUES
(1, 'CS-101', 'Digital Logic', 'NA', 'digital_logic.pdf', 'Morris Mano Digital Design 3rd Edition.pdf', 'NA'),
(1, 'CS-102', 'Discrete Mathematics', 'NA', 'discrete_mathematics.pdf', 'NA', 'NA'),
(1, 'CS-103', 'Numerical Computing', 'NA', 'numerical_computing.pdf', 'Numerical Computing MK Jain.pdf', 'NA'),
(1, 'CS-104', 'Programming using C', 'NA', 'programming_using_c.pdf', 'Dennis Ritche C Prog.pdf', 'Making Chrome extension'),
(2, 'CS-105', 'Probability and Statistics', 'NA', 'NA', 'NA', 'NA'),
(3, 'CS-106', 'Computer Architecture', 'NA', 'NA', 'Morris Mano CSA.pdf', 'NA'),
(2, 'CS-107', 'Data Structures', 'NA', 'NA', 'NA', 'NA'),
(3, 'CS-109', 'Object Oriented Programming', 'NA', 'NA', 'NA', 'Plasma Management System'),
(3, 'CS-110', 'Operating Systems', 'NA', 'NA', 'Operating_System Galvin.pdf', 'NA'),
(2, 'CS-111', 'Database Management Systems', 'NA', 'NA', 'Database-System-Concepts-Silberschatz.pdf', 'Airline Management System'),
(3, 'CS-112', 'Computer Networks', 'NA', 'NA', 'computer networks.pdf', 'NA'),
(2, 'CS-113', 'Microprocessors', 'NA', 'NA', 'microprocessor ramesh-s-gaonkarpdf_compress.pdf', 'NA'),
(4, 'CS-114', 'Web Based Programming', 'NA', 'NA', 'NA', 'Online study material'),
(3, 'CS-115', 'Design and Analysis of Algorithms', 'NA', 'NA', 'Algo Cormen.pdf', 'NA'),
(4, 'CS-116', 'Computer Graphics', 'NA', 'NA', 'NA', 'NA'),
(5, 'CS-117', 'Parallel and Distributed Systems', 'NA', 'NA', 'NA', 'NA'),
(4, 'CS-118', 'Software Engineering', 'NA', 'NA', 'Software Engineering by Rajib.pdf', 'NA'),
(2, 'CS-119', 'Formal Languages and Automata Theory', 'NA', 'NA', 'Formal Language.pdf', 'NA'),
(4, 'CS-120', 'Artificial Intelligence', 'NA', 'NA', 'Aritifical Intelligence by Russel and Norvig.pdf', 'Tic-Tac-Toe game'),
(5, 'CS-148', 'Principles of Compiler Design', 'NA', 'NA', 'NA', 'NA'),
(4, 'CS-149', 'Software Testing', 'NA', 'NA', 'NA', 'NA');

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
