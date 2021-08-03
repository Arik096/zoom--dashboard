-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 06:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoom--dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `zoom_classes`
--

CREATE TABLE `zoom_classes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zoom_classes`
--

INSERT INTO `zoom_classes` (`id`, `title`, `teacher`, `type`, `link`) VALUES
(1, 'English', 'Sp sir', 'Coaching', 'https://bdren.zoom.us/j/9390369526?pwd=RnFjV0FueG1HWnlVeFdIaDJLQ3JTdz09'),
(2, 'Malnutrition', 'rwrw', 'College', 'https://shujog.xyz/'),
(4, 'General Healthcare', 'rwrw', 'College', 'https://shujog.xyz/'),
(6, 'ark', 'arik', 'College', 'https://shujog.xyz/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zoom_classes`
--
ALTER TABLE `zoom_classes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zoom_classes`
--
ALTER TABLE `zoom_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
