-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2024 at 08:59 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tier` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `tier`) VALUES
(1, 'agu', 'agu', 'admin'),
(2, 'user1', 'user1', 'user'),
(3, 'wah', '1111', 'user'),
(4, 'meg', '1111', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `yarn`
--

CREATE TABLE `yarn` (
  `yarnId` int NOT NULL,
  `yarnType` varchar(40) NOT NULL,
  `yarnColor` varchar(30) NOT NULL,
  `yarnWeight` int NOT NULL,
  `quantity` int NOT NULL,
  `location` varchar(20) NOT NULL,
  `dyeLot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `yarn`
--

INSERT INTO `yarn` (`yarnId`, `yarnType`, `yarnColor`, `yarnWeight`, `quantity`, `location`, `dyeLot`) VALUES
(1, 'Stylecraft Wondersoft', 'White', 2, 5, 'Box 2', 33),
(2, 'King Cole Baby DK', 'Pure Pink', 2, 7, 'Shelf 1', 244);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `yarn`
--
ALTER TABLE `yarn`
  MODIFY `yarnId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
