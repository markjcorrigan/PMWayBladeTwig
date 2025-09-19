-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2017 at 02:54 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `firstname`, `lastname`, `email`, `gender`, `age`) VALUES
(5, 'Vivek', 'Vengala', 'vivek@codingcyber.com', 'male', '24'),
(6, 'Teresa', 'Day', 'teresa.day81@example.com', 'female', '28'),
(7, 'Nora', 'Nora Castillo', 'nora.castillo59@example.com', 'female', '30'),
(12, 'Mr.Vivek', 'Vengala', 'vivek@codingcyber.com', 'male', '28'),
(13, 'Mr.Vivek', 'Vengala', 'vivek@codingcyber.com', 'male', '28'),
(14, 'Mr.Vivek', 'Vengala', 'vivek@codingcyber.com', 'male', '28'),
(16, 'Vivek', 'Vengala', 'vivek1@codingcyber.com', 'female', '24'),
(18, 'Mr.Vivek', 'Vengala', 'vivek@codingcyber.com', 'male', '29'),
(19, 'Yvonne', 'Ramos', 'yvonne.ramos34@example.com', 'female', '23'),
(20, 'Brandon', 'Craig', 'brandon.craig42@example.com', 'male', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
