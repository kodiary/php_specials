-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 03:16 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_specials`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`) VALUES
(1, 'Anwar Ali', 'anwar@kodiary.com', 'male'),
(2, 'Adam', 'adam@gmail.com', 'male'),
(3, 'Adolf', 'adolf@gmail.com', 'male'),
(4, 'Alba', 'alba@gmail.com', 'female'),
(5, 'Alma', 'alma@gmail.com', 'female'),
(6, 'Andrea', 'andrea@gmail.com', 'female'),
(7, 'Caesar', 'caesar@gmail.com', 'male'),
(8, 'Cain', 'cain@gmail.com', 'male'),
(9, 'Calvin', 'calvin@gmail.com', 'male'),
(10, 'Cammilla', 'cammilla@gmail.com', 'female'),
(11, 'Dabria', 'dabria@gmail.com', 'female'),
(12, 'David', 'david@gmail.com', 'male'),
(13, 'Dallas', 'dallas@gmail.com', 'female'),
(14, 'Dame', 'dame@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
