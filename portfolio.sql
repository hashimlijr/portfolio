-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2022 at 06:45 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(2) NOT NULL,
  `background` text,
  `education` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `background`, `education`) VALUES
(1, 'Passionate machine learning engineer with 4+ years of experience in predictive modeling and data mining. Excited to implement statistical machine learning solutions for Macro Globe. At Stack Intellect, implemented demand forecasting models improving forecast accuracy by 34%.', 'PhD in Machine Learning\r\n\r\nCarnegie Mellon\r\n\r\n2010-2014\r\n\r\n    Research paper: Machine Learning, Probabilities Explained published in Journal of Cryptology, June 2017\r\n    Senior data mining project written up in TechCrunch.\r\n    Excelled in database and data structure coursework.\r\n\r\n \r\n\r\nMaster of Science in Machine Learning\r\n\r\nCarnegie Mellon\r\n\r\n2008–2010\r\n\r\n \r\n\r\nBachelor of Science in Computer Science\r\n\r\nUniversity of Washington\r\n\r\n2004–2008');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `username`, `email`, `password`) VALUES
(1, 'Sahil', 'Hashimli', 'hashimlijr', 'hashimlisahil@gmail.com', 'nocode0911');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `github` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) NOT NULL,
  `slogan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `surname`, `username`, `phone`, `email`, `address`, `facebook`, `twitter`, `linkedin`, `github`, `nationality`, `slogan`) VALUES
(1, 'Sahil', 'Hashimli', 'hashimlijr', '+994 51 328 11 12', 'hashimlisahil@gmail.com', 'Baku', 'https://www.facebook.com/HashimliS/', 'https://twitter.com/hashimlijr', 'https://www.linkedin.com/in/hashimlijr', 'https://github.com/hashimlijr', 'Azerbaijan', 'Whatever, nevermind.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(2) NOT NULL,
  `skill_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`) VALUES
(1, 'Python'),
(2, 'Django'),
(3, 'Django REST Framework'),
(4, 'Object-Oriented Programming (OOP)'),
(5, 'TenserFlow'),
(6, 'NumPy'),
(7, 'Pandas'),
(8, 'Machine Learning Models'),
(9, 'Data visualization'),
(10, 'Keras'),
(11, 'SciKit Learn'),
(12, 'MATLAB'),
(13, 'Pytorch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `index` (`username`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
