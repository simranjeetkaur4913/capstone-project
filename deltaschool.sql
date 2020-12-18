-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 05:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deltaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `city`) VALUES
(1, 'simran', '888-987-9876', 'simranjeetkaur14049@gmail.com', 'Kitchener'),
(2, 'simran', '', 'gurlabhkhinda@gmail.com', 'Kitchener'),
(3, 'simran', '999-098-9870', 'gurlabhkhinda@gmail.com', 'Kitchener');

-- --------------------------------------------------------

--
-- Table structure for table `contactreq`
--

CREATE TABLE `contactreq` (
  `id` int(11) NOT NULL,
  `visitors` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactreq`
--

INSERT INTO `contactreq` (`id`, `visitors`, `username`) VALUES
(1, 'simran', 'simranjeetkaur14049@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`message`) VALUES
('There is christmas holiday');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Simranjeet', 'Kaur', 'simran', '1234'),
(2, 'Simran', 'Kaur', 'simran1', '123456'),
(3, 'Simranjeet', 'Khinda', 'gkhinda', '123456'),
(14, 'Simranjeet1', 'Kaur1', 'simran12', '123456'),
(16, 'Simranjeet2', 'kaur', 'Simranjeet2', '12345677'),
(39, 'Simranjeet', 'Kaur', 'simranjeetkaur14049@gmail.com', 'Simr@n33331'),
(61, 'Simranjeet111111111', 'Kaur1111111', 'simranjeetkaur14049@gmail.com', 'Simr@n4441222'),
(66, 'rajdeep11111', 'Kaur1111', 'simran', '1234'),
(82, 'Simranjeet', 'Kaur', 'simranjeetkaur14049@gmail.com', 'Simr@n4441'),
(83, 'gurjeet', 'kaur', 'gurjeet@gmail.com', 'G@1234'),
(84, 'Simranjeet', 'Kaur', 'simranjeetkaur14049@gmail.com', 'Simr@n4441');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `email`, `department`, `phone`) VALUES
(4, 'rajdeep', 'kaur', 'raj@gmail.com', 'dfghj', '987-678-0987'),
(10, 'Simranjeet', 'Kaur', 'gurlabhkhinda@gmail.com', 'dfg', '4372467823'),
(25, 'rajdeep', 'Kaur', 'gurlabhkhinda@gmail.com', 'sdfgh', '987-897-6789');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `roll`, `class`) VALUES
(1, 'simran', '12', ''),
(2, 'simran', '13', '2'),
(3, 'simran', '12', '3'),
(4, 'simran', '12', '2'),
(5, 'simran', '12', '2'),
(6, 'simran', '12', '2'),
(7, 'simran', '12', '12'),
(8, 'simran', '12', '12'),
(9, 'simran', '12', '2'),
(10, 'simran', '12', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactreq`
--
ALTER TABLE `contactreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactreq`
--
ALTER TABLE `contactreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
