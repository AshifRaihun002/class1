-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 12:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` longtext NOT NULL,
  `rent_price` double NOT NULL,
  `date_a` date NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `email`, `address`, `rent_price`, `date_a`, `phone_no`, `image`) VALUES
(0, 'jbh', 'kkk@gg.comdfdfd', 'ytrtff', 12365, '2018-12-08', '123456', 0x696d672f342e6a7067),
(0, 'jbh', 'kkk@gg.comdfdfd', 'bjhbhghhj', 12345, '2018-12-07', '123456', 0x696d672f312e6a7067),
(0, 'xzxx', 'xZX@dfd.com', 'asdasd', 12345, '2018-12-20', '123456', 0x696d672f352e6a7067),
(0, 'ss', 'xZX@dfd.com', 'sdsd', 12345, '2018-12-20', '1234569', 0x696d672f3235363078313630302d31363933372d6769726c2d68642d77616c6c70617065725f5f6769726c2d68642d77616c6c70617065722e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `un` varchar(10) CHARACTER SET latin1 NOT NULL,
  `address` longtext NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `pw` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `name`, `email`, `un`, `address`, `phone_no`, `pw`) VALUES
(5, 'Nawroz', 'nawroz.mians@gmail.com', '', 'Dhaka', '4586259685', ''),
(6, 'Nawroz', 'nawroz.mians@gmail.com', '', 'Dhaka', '4586259685', ''),
(7, 'Fairuz', 'fairuz@gmail.com', '', 'Dhaka', '01253694', ''),
(8, 'maruf', 'mn@gmail.com', 'mn', 'Dhaha', '123456', '123456'),
(9, 'maruf', 'md.marufmf555@yahoo.com', 'mnd', 'Dhaha', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'maruf', 'md.marufmf555@yahoo.com', 'mnd', 'Dhaha', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'maruf', 'md.marufmf555@yahoo.com', 'mnd', 'Dhaha', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Raihun', 'aaa@ggg.com', 'ra', 'adasdasd', '123456', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
