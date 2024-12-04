-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 02:36 AM
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
(3, 1, 'striped scarf', 'King Cole DK pink, King Cole DK white', 2, 10, ''),
(4, 1, 'granny', 'King', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tier` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `tier`) VALUES
(1, 'agu', 'agu', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'cheem', '1111', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `yarn`
--

CREATE TABLE `yarn` (
  `yarnId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `yarnType` varchar(40) NOT NULL,
  `yarnColor` varchar(40) NOT NULL,
  `yarnWeight` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `dyeLot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yarn`
--

INSERT INTO `yarn` (`yarnId`, `userId`, `yarnType`, `yarnColor`, `yarnWeight`, `quantity`, `location`, `dyeLot`) VALUES
(1, 1, 'stylecraft', 'white', 2, 5, 'Box', 234),
(3, 1, 'Sir Sirdar', 'yellow', 2, 1, 'Box 2', 235),
(10, 1, 'stylecraft wondersoft', 'blue', 2, 5, 'Box', 234);

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
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `yarn`
--
ALTER TABLE `yarn`
  MODIFY `yarnId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
