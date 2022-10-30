-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2022 at 07:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `subject` text NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `subject`, `date_created`, `date_updated`, `author`) VALUES
(1, 'this is first', 'hello world from web. hope it helps update', '0000-00-00 00:00:00', '2022-10-30 11:41:12', 1),
(2, 'this is second edit', 'hello world from web. hope it helps it works hope also date', '2022-10-29 16:52:54', '2022-10-30 11:39:50', 1),
(3, 'this is title note', 'works!!!!!! edit', '2022-10-29 16:54:35', '2022-10-30 11:40:36', 1),
(10, 'this title from teacher2', ' Iaculis eu non diam phasellus vestibulum lorem. Morbi tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin. Auctor urna nunc id cursus metus. Id donec ultrices tincidunt arcu non sodales.', '2022-10-30 19:23:56', '2022-10-30 19:23:56', 4),
(11, 'this title from teacher2', ' Iaculis eu non diam phasellus vestibulum lorem. Morbi tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin. Auctor urna nunc id cursus metus. Id donec ultrices tincidunt arcu non sodales.', '2022-10-30 19:23:56', '2022-10-30 19:23:56', 4),
(12, 'this title from teacher2', ' Iaculis eu non diam phasellus vestibulum lorem. Morbi tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin. Auctor urna nunc id cursus metus. Id donec ultrices tincidunt arcu non sodales.', '2022-10-30 19:23:56', '2022-10-30 19:23:56', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `job` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `job`) VALUES
(3, 'Marvy Ayman Halim', 'maro40meme@gmail.com', 'test', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pass` varchar(180) NOT NULL,
  `job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `pass`, `job`) VALUES
(1, 'teacher 1', 'teacher@gmail.com', '123456', 'teacher'),
(4, 'teacher 2', 'teacher2@gmail.com', 'test', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`author`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`author`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
