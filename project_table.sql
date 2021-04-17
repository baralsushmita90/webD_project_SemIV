-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 15, 2021 at 02:25 PM
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
-- Table structure for table `project_table`
--

CREATE TABLE `project_table` (
  `code` varchar(1200) CHARACTER SET latin1 NOT NULL,
  `project_name` varchar(1200) CHARACTER SET latin1 NOT NULL,
  `project_link` varchar(1200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`code`, `project_name`, `project_link`) VALUES
('CS-104', 'Making Chrome Extensions', 'https://github.com/baralsushmita90/Plasma-Management-System'),
('CS-109', 'Plasma Management System', 'https://github.com/baralsushmita90/Plasma-Management-System'),
('CS-111', 'Airline Management Systems', 'https://github.com/baralsushmita90/Plasma-Management-System'),
('CS-113', 'Traffic Lights', 'https://github.com/baralsushmita90/Plasma-Management-System'),
('CS-114', 'Online Study Material', 'https://github.com/baralsushmita90/Plasma-Management-System'),
('CS-116', 'Transformations', 'https://github.com/baralsushmita90/Plasma-Management-System'),
('CS-120', 'Tic Tac Toe', 'https://github.com/baralsushmita90/Plasma-Management-System');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
