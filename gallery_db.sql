-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 12:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(5, 17, 'author5', 'new comment'),
(6, 18, 'new user', 'comment2'),
(7, 18, 'new user', 'comment3'),
(9, 18, 'new author', 'jsut a new comment test'),
(10, 22, 'new author5', 'new test message2'),
(11, 22, 'new author5', 'new test message2'),
(12, 22, 'newtest', 'test test'),
(13, 18, 'new user234', 'asdasdasd'),
(14, 20, 'new author5', 'asdasd'),
(15, 20, 'primoz', 'asdasd'),
(16, 20, 'new author5', 'asdasd'),
(17, 20, 'dsfsdfsd', 'fsdfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`) VALUES
(17, 'car112', 'car image112', '<p>description of image edited</p>', 'images-16 copy.jpg', 'car11 image alternate text2', 'image/jpeg', 21133),
(18, 'image27', '', '', 'images-27.jpg', '', 'image/jpeg', 17662),
(20, 'another photo', '', '', 'images-39.jpg', '', 'image/jpeg', 24969),
(22, 'photo5', '', '', 'images-50.jpg', '', 'image/jpeg', 21652),
(23, 'largeimg2', '', '', '_large_image_2.jpg', '', 'image/jpeg', 309568),
(25, '', '', '', 'images-16.jpg', '', 'image/jpeg', 21133),
(26, '', '', '', 'images-17 copy.jpg', '', 'image/jpeg', 22792),
(27, '', '', '', 'images-17.jpg', '', 'image/jpeg', 22792),
(28, '', '', '', 'images-21.jpg', '', 'image/jpeg', 19957),
(29, '', '', '', 'images-21 copy.jpg', '', 'image/jpeg', 19957),
(30, '', '', '', 'images-20.jpg', '', 'image/jpeg', 22942),
(31, '', '', '', 'images-22 copy.jpg', '', 'image/jpeg', 21133),
(32, '', '', '', 'images-7.jpg', '', 'image/jpeg', 24140),
(33, '', '', '', 'images-7 copy.jpg', '', 'image/jpeg', 24140),
(34, '', '', '', 'images-8.jpg', '', 'image/jpeg', 20810),
(35, '', '', '', 'images-8 copy.jpg', '', 'image/jpeg', 20810),
(36, '', '', '', 'images-9 copy.jpg', '', 'image/jpeg', 21108),
(37, '', '', '', 'images-9.jpg', '', 'image/jpeg', 21108),
(38, '', '', '', 'images-10 copy.jpg', '', 'image/jpeg', 20401),
(39, '', '', '', 'images-10.jpg', '', 'image/jpeg', 20401),
(40, '', '', '', 'images-11 copy.jpg', '', 'image/jpeg', 27916),
(41, '', '', '', 'images-11.jpg', '', 'image/jpeg', 27916),
(42, '', '', '', 'images-12 copy.jpg', '', 'image/jpeg', 18540),
(43, '', '', '', 'images-12.jpg', '', 'image/jpeg', 18540),
(44, '', '', '', 'images-13 copy.jpg', '', 'image/jpeg', 22082),
(45, '', '', '', 'images-13.jpg', '', 'image/jpeg', 22082),
(46, '', '', '', 'images-14 copy.jpg', '', 'image/jpeg', 21992),
(47, '', '', '', 'images-14.jpg', '', 'image/jpeg', 21992),
(48, '', '', '', 'images-15 copy.jpg', '', 'image/jpeg', 28466),
(49, '', '', '', 'images-15.jpg', '', 'image/jpeg', 28466),
(50, '', '', '', 'images-18 copy.jpg', '', 'image/jpeg', 27595),
(51, '', '', '', 'images-19 copy.jpg', '', 'image/jpeg', 22792),
(52, '', '', '', 'images-19.jpg', '', 'image/jpeg', 22792),
(53, '', '', '', 'images-20 copy.jpg', '', 'image/jpeg', 22942);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(2, 'primoz2second', '123123', 'second', 'updated second lastname', 'image1.jpg'),
(24, 'name', '123123', 'primoz', 'babsek', 'images-16%20copy.jpg'),
(25, 'newuser1', '123123', 'name1', 'last2', '_large_image_2.jpg'),
(29, 'newsuer1', '123123', 'first10', 'last10', '_large_image_3.jpg'),
(31, 'newuser11', '123123', 'fiurstr11', 'last11', '_large_image_1.jpg'),
(32, 'primoz1@gmail.com', '123123', 'first13', 'last13', 'images-23 copy.jpg'),
(33, 'user', '123123', 'test_first', 'test_last', 'images-16%20copy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
