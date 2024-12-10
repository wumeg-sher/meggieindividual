-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 06:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yarn`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `projectName` varchar(40) NOT NULL,
  `yarnUsed` text NOT NULL,
  `hoursSpent` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `userId`, `projectName`, `yarnUsed`, `hoursSpent`, `progress`, `notes`) VALUES
(1, 1, 'waffle blanket', 'King Cole DK pink, King Cole DK white', 20, 90, 'finish border'),
(2, 1, 'a', 'a', 1, 1, 'a'),
(3, 1, 'a', 'a', 1, 1, 'a'),
(9, 1, 'bolero shrug', 'stylecraft wondersoft', 2, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `tier`) VALUES
(1, 'agu', 'agu', 'admin'),
(2, 'guest', 'guest', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `yarn`
--

CREATE TABLE `yarn` (
  `yarnId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `yarnType` varchar(30) NOT NULL,
  `yarnColor` varchar(20) NOT NULL,
  `yarnWeight` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `dyeLot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yarn`
--

INSERT INTO `yarn` (`yarnId`, `userId`, `yarnType`, `yarnColor`, `yarnWeight`, `quantity`, `location`, `dyeLot`) VALUES
(2, 1, 'King Cole DK', 'Pure pink', 2, 7, 'Box 2', 234536),
(3, 1, 'Sir Sidar', 'Yellow', 2, 1, 'Box 1', 2343),
(4, 1, 'Stylecraft wondersof', 'white', 2, 6, 'Box 2', 2345),
(5, 1, 'paintbox', 'spearmine', 4, 1, 'box 3', 7246),
(6, 1, 'drops', 'green', 3, 0, '', 0),
(7, 2, 'bernat blanket', 'white', 6, 4, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `yarn`
--
ALTER TABLE `yarn`
  ADD PRIMARY KEY (`yarnId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yarn`
--
ALTER TABLE `yarn`
  MODIFY `yarnId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
