-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 10:55 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedspace_female`
--

CREATE TABLE `bedspace_female` (
  `bedspace_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_reg` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedspace_female`
--

INSERT INTO `bedspace_female` (`bedspace_id`, `user_id`, `user_reg`, `user_firstname`, `user_lastname`, `user_level`) VALUES
(42, 32, 'csc/2015/011', 'Timilehin', 'Suavehhhh', 500),
(43, 22, 'csc/2015/001', 'timi', 'fola', 100);

-- --------------------------------------------------------

--
-- Table structure for table `bedspace_male`
--

CREATE TABLE `bedspace_male` (
  `bedspace_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_reg` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedspace_male`
--

INSERT INTO `bedspace_male` (`bedspace_id`, `user_id`, `user_reg`, `user_firstname`, `user_lastname`, `user_level`) VALUES
(1, 34, 'csc/2015/012', 'timi', 'folayemi', 300),
(2, 22, 'csc/2015/001', 'timi', 'fola', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_reg` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_department` varchar(255) NOT NULL,
  `user_faculty` varchar(255) NOT NULL,
  `user_program` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_reg`, `user_password`, `user_firstname`, `user_lastname`, `user_image`, `user_department`, `user_faculty`, `user_program`, `user_level`, `user_role`) VALUES
(22, 'csc/2015/001', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'timi', 'fola', 'IMG_20180705_140641.jpg', 'computer science withe Economics', 'technology', 'computer science', '100', 'Student'),
(23, 'csc/2015/002', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'dola', 'Suavehhhh', 'IMG_20171021_220013_075.jpg', 'computer science withe mathematics', 'Technology', 'Economics Education', '100', 'Student'),
(24, 'csc/2015/003', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'ogige', 'folayemi', 'img1494798366737.jpg', 'computer science withe mathematics', 'Technology', 'Computer science and Engineering ', '100', 'Student'),
(25, 'csc/2015/004', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Sola', 'fola', 'IMG_20180705_140641.jpg', 'computer science withe Economics', 'Technology', 'Computer science and Engineering ', '100', 'Student'),
(26, 'csc/2015/005', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Timilehin', 'folayemi', 'IMG_20180705_140721.jpg', 'computer science withe Economics', 'Technology', 'Economics Education', '100', 'Student'),
(27, 'csc/2015/006', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'dola', 'Suavehhhh', 'IMG_20171117_111918.jpg', 'computer science withe mathematics', 'Technology', 'Computer science and Engineering ', '100', 'Student'),
(28, 'csc/2015/007', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'dola', 'Suavehhhh', 'IMG_20180526_133953.jpg', 'computer', 'technology', 'Economics Education', '100', 'Student'),
(29, 'csc/2015/008', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'sola', 'fola', 'IMG_20180705_140641.jpg', 'computer science withe Economics', 'Technology', 'Economics Education', '200', 'Student'),
(30, 'csc/2015/009', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Timilehin', 'folayemi', 'IMG_20180705_140641.jpg', 'computer science withe Economics', 'technology', 'Computer science and Engineering ', '300', 'Student'),
(31, 'csc/2015/010', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'ogige', 'Suavehhhh', 'IMG_20180705_140650.jpg', 'computer science withe Economics', 'Technology', 'Computer science and Engineering ', '400', 'Student'),
(32, 'csc/2015/011', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Timilehin', 'Suavehhhh', 'IMG_20180526_133953.jpg', 'Economics Education', 'Technology', 'Computer science and Engineering ', '500', 'Student'),
(34, 'csc/2015/012', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'timi', 'folayemi', 'IMG_20171117_111918.jpg', 'computer science withe Economics', 'Technology', 'Computer science and Engineering ', '300', 'Student'),
(36, 'csc/2015/013', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'sola', 'folayemi', 'IMG_20171117_111918.jpg', 'computer', 'technology', 'computer science', '500', 'Student'),
(37, 'csc/2015/014', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'dola', 'adeboye', 'IMG_20180526_133953.jpg', 'computer science withe mathematics', 'technology', 'computer science', '300', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedspace_female`
--
ALTER TABLE `bedspace_female`
  ADD PRIMARY KEY (`bedspace_id`);

--
-- Indexes for table `bedspace_male`
--
ALTER TABLE `bedspace_male`
  ADD PRIMARY KEY (`bedspace_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bedspace_female`
--
ALTER TABLE `bedspace_female`
  MODIFY `bedspace_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `bedspace_male`
--
ALTER TABLE `bedspace_male`
  MODIFY `bedspace_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
