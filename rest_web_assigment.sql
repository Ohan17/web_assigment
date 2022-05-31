-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 31, 2022 at 04:33 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_web_assigment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  `ans_a` varchar(200) NOT NULL,
  `ans_b` varchar(200) NOT NULL,
  `ans_c` varchar(200) NOT NULL,
  `ans_d` varchar(200) NOT NULL,
  `ans_correct` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`id`, `content`, `topic`, `level`, `ans_a`, `ans_b`, `ans_c`, `ans_d`, `ans_correct`) VALUES
(27, '1', '1', 1, '11', '1', '1', '1', '1'),
(28, '1', '1', 1, '11', '1', '1', '1', '1'),
(29, '1', '1', 1, '11', '1', '1', '1', '1'),
(30, '1', '1', 1, '11', '1', '1', '1', '1'),
(31, '1', '1', 1, '11', '1', '1', '1', '1'),
(32, '1', '1', 1, '11', '1', '1', '1', '1'),
(33, '1', '1', 1, '11', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `privillege` varchar(200) NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `name`, `password`, `privillege`) VALUES
(1, 'v.hieu-had test', '123123', 'moderator'),
(3, 'dao', '123123', 'admin'),
(7, 'van', '123123', 'normal'),
(9, 'dao van hieu', '123123\r\n', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Questions`
--
ALTER TABLE `Questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
