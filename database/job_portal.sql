-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 10:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyprofile`
--

CREATE TABLE `companyprofile` (
  `id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `who_we_are` text NOT NULL,
  `location` text NOT NULL,
  `our_goals` text NOT NULL,
  `Company_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyprofile`
--

INSERT INTO `companyprofile` (`id`, `Name`, `who_we_are`, `location`, `our_goals`, `Company_id`) VALUES
(1, 'Monkey Bite. inc', 'dfghjk', 'vbnm,', ' fghjk', '0'),
(2, 'Data-sys', 'we are the mid-level software company', 'Mirpur-10', ' to achive ndjnjndjnvjnjdnj', '0'),
(4, 'Monkey Bite. inc', 'nmncvmmcnvmn', 'mbvmbmbvm', ' mcbmmvbm', '0'),
(5, 'cvbnm,./', 'fghj,.', 'cm,', ' nvjjb', '0'),
(6, 'kmvkmfkkvk', 'nfjn', 'jvfnvnkfnk', ' jngnifnkgni', '0'),
(7, 'sdfghjk', 'sdfghjk', 'sdfghj', ' sdfghj', '0'),
(8, 'RRAD', 'jvnjnkvn', 'nvnknck', ' nknkcnkn', '0'),
(9, 'fghjkl', 'gvvhjb', 'jbjbj', ' jbjbj', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `job_type` text NOT NULL,
  `Description` text NOT NULL,
  `ComName` text NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`ID`, `Title`, `job_type`, `Description`, `ComName`, `Date`) VALUES
(5, 'Java developer', 'Full-Time', 'Maximum 5 years experience', 'Rokomari.com', '2020-09-09'),
(6, 'Senior Web developer', 'Full-Time', 'We need professional', 'JBHUH', '2020-09-09'),
(7, '.net developer', 'Part-Time', 'kknvknkvndknvkdknvk', 'knkndknvknknvnknvk', '2020-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Serial` int(5) NOT NULL,
  `Full_Name` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` text NOT NULL,
  `Chose_optn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Serial`, `Full_Name`, `Email`, `Phone`, `Password`, `Chose_optn`) VALUES
(6, 'Tanvir Hossain', 'mdtanvirh32@gmail.com', '01834567899', 'tanvir123', 0),
(8, 'Tanvir ahmed', 'tanvirahmed@gmail.com', '1232123456', 'tanvir321', 0),
(13, 'Tanvir', 'ft@gmail.com', '849839895', '9589485984', 1),
(14, 'Tanvir', 'Tanvir@gmail.com', '0191778344', 'tanvir123', 2),
(15, 'Mishel', 'mishel@gmail.com', '01812234561', 'mishel123', 1),
(16, 'Tanvir', 'Tanvir@gmail.com', '0191778344', 'nnnnnnfknk', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyprofile`
--
ALTER TABLE `companyprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyprofile`
--
ALTER TABLE `companyprofile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
