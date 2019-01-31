-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 10:46 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE IF NOT EXISTS `advisors` (
  `advisor_id` int(10) unsigned NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`advisor_id`, `name`, `phone`, `email`) VALUES
(10, 'Angela Watson', '555-1111', 'awatson@tru.edu'),
(20, 'Bill Stevens', '555-2222', 'bstevens@tru.edu'),
(30, 'Ralph Wilson', '555-3333', 'rwilson@tru.edu'),
(40, 'Amanda Tilton', '555-4444', 'atilton@tru.edu'),
(50, 'Madison Jarred', '555-5555', 'mjarred@tru.edu');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` smallint(4) unsigned NOT NULL,
  `first_name` varchar(24) NOT NULL,
  `last_name` varchar(24) NOT NULL,
  `hrs_completed` smallint(5) unsigned NOT NULL,
  `hrs_attempted` int(5) unsigned NOT NULL,
  `gpa_points` smallint(5) unsigned NOT NULL,
  `major` enum('CIT','EET','WEB','BUS') NOT NULL,
  `advisor_id` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `hrs_completed`, `hrs_attempted`, `gpa_points`, `major`, `advisor_id`, `email`) VALUES
(1121, 'Rita', 'Solertan', 20, 23, 51, 'CIT', '10', 'rsolertan@tru.edu'),
(1398, 'Rivka', 'Alexander', 39, 41, 103, 'EET', '20', 'ralexander@tru.edu'),
(1498, 'Ned', 'Ramos', 28, 28, 100, 'BUS', '30', 'nramos@tru.edu'),
(1675, 'Jon', 'Martinez', 36, 36, 86, 'WEB', '10', 'jmartinez@tru.edu'),
(1686, 'Carl', 'McElan', 51, 54, 155, 'WEB', '10', 'cmcelan@tru.edu'),
(1842, 'Bob', 'Palla', 17, 21, 36, 'CIT', '20', 'bpalla@tru.edu'),
(1870, 'Tilda', 'Downey', 30, 31, 86, 'CIT', '40', 'tdowney@tru.edu'),
(2051, 'Nemo', 'Albert', 50, 55, 100, 'CIT', '40', 'anemo@tru.edu'),
(2059, 'Mary', 'Proth', 33, 33, 105, 'CIT', '50', 'mproth@tru.edu'),
(2191, 'Zelda', 'Rowe', 12, 12, 39, 'BUS', '40', 'zrowe@tru.edu'),
(2268, 'Alice', 'Vonna', 7, 7, 22, 'CIT', '20', 'avonna@tru.edu'),
(2355, 'Manny', 'Alvarez', 48, 48, 192, 'CIT', '50', 'malvarez@tru.edu'),
(2453, 'Sally', 'Eldorodo', 53, 53, 168, 'CIT', '50', 'seldorodo@tru.edu'),
(2467, 'Jena', 'Hardy', 9, 14, 23, 'CIT', '10', 'jhardy@tru.edu'),
(2575, 'Donald', 'Bennett', 27, 27, 49, 'CIT', '30', 'dbennett@tru.edu'),
(2579, 'Jack', 'Bass', 55, 55, 200, 'CIT', '30', 'jbass@tru.edu'),
(2588, 'Rick', 'Cildaro', 47, 47, 140, 'BUS', '10', 'rcildaro@tru.edu'),
(2756, 'Dave', 'Bean', 14, 14, 44, 'CIT', '20', 'dbean@tru.edu'),
(3117, 'Jenn', 'Labanda', 21, 21, 44, 'EET', '40', 'jlabanda@tru.edu'),
(3726, 'Elle', 'Rose', 30, 34, 113, 'CIT', '50', 'erose@tru.edu'),
(3968, 'Larissa', 'Tolfer', 17, 19, 37, 'EET', '50', 'ltolfer@tru.edu'),
(3983, 'Jenna', 'Mamiya', 61, 61, 201, 'CIT', '30', 'jmamiya@tru.edu'),
(4235, 'Jayson', 'Matherson', 13, 16, 40, 'CIT', '40', 'jmatherson@tru.edu'),
(4982, 'Karl', 'Riccardo', 22, 24, 45, 'CIT', '10', 'kriccardo@tru.edu'),
(4991, 'Clevon', 'Forrester', 40, 44, 103, 'EET', '50', 'cforrester@tru.edu'),
(5435, 'Joyce', 'Harden', 21, 21, 75, 'CIT', '50', 'jharden@tru.edu'),
(5462, 'Moses', 'Fernandez', 32, 32, 99, 'WEB', '40', 'mfernandez@tru.edu'),
(6084, 'Albert', 'Morris', 21, 21, 67, 'CIT', '20', 'amorris@tru.edu'),
(6241, 'Aaron', 'Lee', 32, 32, 100, 'EET', '40', 'alee@tru.edu'),
(6645, 'Ellen', 'Alvarez', 27, 27, 100, 'CIT', '20', 'ealvarez@tru.edu'),
(6875, 'Jemma', 'Furfy', 26, 26, 99, 'CIT', '10', 'jfurfy@tru.edu'),
(6896, 'Jan', 'Hurzell', 54, 60, 176, 'CIT', '10', 'jhurzell@tru.edu'),
(6917, 'Morris', 'Subuman', 17, 17, 54, 'CIT', '20', 'msubuman@tru.edu'),
(6984, 'Mika', 'Stanton', 27, 27, 87, 'CIT', '50', 'mstanton@tru.edu'),
(7204, 'Paul', 'Brand', 29, 29, 88, 'CIT', '30', 'pbrand@tru.edu'),
(7205, 'Ilsa', 'Frost', 19, 22, 50, 'BUS', '50', 'ifrost@tru.edu'),
(7242, 'Boris', 'Berguin', 35, 35, 111, 'BUS', '30', 'bberguin@tru.edu'),
(7287, 'Carol', 'Ramos', 9, 12, 24, 'WEB', '10', 'cramos@tru.edu'),
(7617, 'Jack', 'Hall', 42, 44, 99, 'CIT', '10', 'jhall@tru.edu'),
(8058, 'Allan', 'Iberia', 17, 17, 59, 'CIT', '50', 'aiberia@tru.edu'),
(8290, 'Kelly', 'Fleischer', 28, 28, 100, 'EET', '30', 'kfleischer@tru.edu'),
(8340, 'Will', 'Wall', 35, 35, 91, 'CIT', '20', 'wwall@tru.edu'),
(8618, 'Frank', 'Zimmerman', 25, 25, 100, 'CIT', '50', 'fzimmerman@tru.edu'),
(8712, 'Sasha', 'Olson', 48, 53, 106, 'CIT', '10', 'solson@tru.edu'),
(8766, 'Len', 'Geng', 18, 18, 66, 'CIT', '40', 'lgeng@tru.edu'),
(8771, 'Ortiz', 'Prince', 23, 23, 88, 'EET', '20', 'oprince@tru.edu'),
(9007, 'Greer', 'David', 56, 50, 109, 'BUS', '30', 'dgreer@tru.edu'),
(9193, 'Tyler', 'Scott', 27, 27, 74, 'BUS', '20', 'tscott@tru.edu'),
(9451, 'Celest', 'Nguyen', 50, 55, 100, 'CIT', '40', 'cnguyen@tru.edu'),
(9547, 'Lind', 'Pam', 50, 50, 158, 'BUS', '30', 'plind@tru.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_id` (`student_id`,`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
