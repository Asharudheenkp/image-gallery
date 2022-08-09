-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220727.b0c4426a43
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 06:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `images`
--
CREATE DATABASE IF NOT EXISTS `images` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `images`;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(211) NOT NULL,
  `name` varchar(211) NOT NULL,
  `about` varchar(211) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `name`, `about`, `date`) VALUES
(1, 'pexels-jess-loiterton-8650280-min.jpg', 'mike ross', 'sea', '2022-07-15 08:09:49'),
(2, 'pexels-luis-del-río-15286-min.jpg', 'jojo', 'woods', '2022-07-15 08:11:27'),
(3, 'pexels-andy-vu-3244513-min.jpg', 'Rafi k', 'darkness', '2022-07-15 08:12:12'),
(4, 'pexels-eberhard-grossgasteiger-572897-min.jpg', 'harish v', 'ice / cold', '2022-07-15 08:13:16'),
(5, 'pexels-tomáš-malík-3509971-min.jpg', 'jhonath jhon', 'peace', '2022-07-15 08:13:43'),
(6, 'pexels-sam-kolder-2387873-min.jpg', 'Ram Mohan', 'waterfall', '2022-07-15 08:15:04'),
(8, 'ladybug-7284337_1920.jpg', 'adnan kp', 'bug', '2022-07-18 19:57:53'),
(10, 'jellyfish-7320516_1920.jpg', 'ashar', 'jelly fish', '2022-07-20 20:36:20'),
(11, 'woman-7320390_1920.jpg', 'jojo', 'field', '2022-07-20 20:44:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
