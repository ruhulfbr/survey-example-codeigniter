-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 05:55 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `__ci_last_regenerate` varchar(200) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pesha` varchar(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `__ci_last_regenerate`, `name`, `email`, `city`, `gender`, `phone`, `pesha`, `nation`, `age`) VALUES
(1, '1552764041', 'Md.Ruhul A', 'ruhul11bd@gmail.com', 'Dhaka', 'Male', '01749769449', 'job', 'BD', '24'),
(6, '1552764806', 'ruhul', 'a_shati@yahoo.com', 'Barisal', 'Male', '01751358127', 'Strudent', 'Barisali', '24'),
(7, '1552764938', 'Md.Ruhul A', 'ruhulamin.imran', 'Barisal', 'Male', '01751358127', 'Strudent', 'Barisali', '24'),
(17, '1552765203', 'Md.Ruhul A', 'ruhulamin.imran', 'Dhaka', 'Male', '01749769449', 'job', 'BD', '24'),
(18, '1552765299', 'Md.Ruhul A', 'ruhulamin.imran', 'Dhaka', 'Male', '01749769449', 'Strudent', 'BD', '24'),
(20, '1552765489', 'ruhul', 'saddam312514@gmail.com', 'Barisal', 'Male', '01749769449', 'Strudent', 'BD', '24'),
(21, '1552765519', 'Dhaka Rege', 'ruhul11bd@gmail.com', 'Dhaka', 'Male', '01751358127', 'job', 'BD', '24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
