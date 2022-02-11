-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 04:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konganacademy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainings_tbl`
--

CREATE TABLE `trainings_tbl` (
  `id` int(11) NOT NULL,
  `TypeId` int(10) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `TrainingTitle` varchar(255) NOT NULL,
  `Speaker` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainings_tbl`
--

INSERT INTO `trainings_tbl` (`id`, `TypeId`, `CategoryId`, `TrainingTitle`, `Speaker`, `Date`, `Address`, `Url`) VALUES
(1, 1, 1, 'Sample Training 1', 'Sample Speaker 1 ', '2022-02-01', 'Sample Address 1', '#'),
(2, 1, 2, 'Training Title 2', 'Speaker 2', '2022-02-11', 'Sample Address 2', '#'),
(3, 2, 3, 'Sample Training Title 3', 'Sample Speaker 3', '2022-02-25', 'Sample Address 3', '#'),
(4, 2, 4, 'Sample Training 4', 'Sample Speaker 4', '2021-12-24', 'Sample Address 4', '#'),
(5, 1, 5, 'Sample Training 5', 'Sample Speaker 5', '2022-03-11', 'Sample Address', '#'),
(6, 1, 6, 'Sample Training 6', 'Sample Speaker 6', '2022-03-26', 'Sample Address 6', '#'),
(7, 1, 7, 'sample Training 7', 'Sample Speaker 7', '2022-02-26', 'Sample Address 7', '#'),
(8, 2, 8, 'Sample Training 8', 'Speaker 8', '2022-02-26', 'Sample Address 8', '#'),
(9, 2, 9, 'Sample Training 9', 'Speaker 9', '2022-04-28', 'Sample Address', '#'),
(10, 2, 10, 'Sample training 10', 'Sample Speaker 10', '2022-03-31', 'Sample Address 10', '#');

-- --------------------------------------------------------

--
-- Table structure for table `trainingtype_tbl`
--

CREATE TABLE `trainingtype_tbl` (
  `id` int(11) NOT NULL,
  `TrainingTypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainingtype_tbl`
--

INSERT INTO `trainingtype_tbl` (`id`, `TrainingTypeName`) VALUES
(1, 'Whole Day'),
(2, 'Half Day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainings_tbl`
--
ALTER TABLE `trainings_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainings_tbl`
--
ALTER TABLE `trainings_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
