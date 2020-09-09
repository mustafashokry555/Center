-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 07:05 AM
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
-- Database: `mustafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `name` varchar(100) NOT NULL,
  `deg` int(4) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`name`, `deg`, `date`) VALUES
('Mustafa Mohamed Shokry Mohamed ', 100, '2020-08-07 10:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(14) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `job` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `password`, `job`) VALUES
(12345678901234, 'مصطفي محمد شكري محمد', '123456', 1),
(12345678912345, 'مصطفي طلعت شكري باشا', '123654', 0),
(14785203697412, 'مصطفي طلعت علي علي', '123654', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `name` varchar(100) NOT NULL,
  `mony` int(4) NOT NULL,
  `month` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`name`, `mony`, `month`) VALUES
('Mustafa Mohamed Shokry Mohamed', 50, '2020-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(100) NOT NULL,
  `phone` text DEFAULT NULL,
  `fphone` text DEFAULT NULL,
  `year` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `phone`, `fphone`, `year`, `date`) VALUES
('Mustafa Mohamed Shokry Mohamed ', '01157479852', NULL, 1, '2020-08-05 20:37:05'),
('محمود علي كلاي محمد', '01157479852', '', 1, '2020-08-24 04:16:10'),
('محمد علي كلاي محمد', '', '', 2, '2020-08-24 04:14:06'),
('مصطفي محمد شكري علي', '', '', 2, '2020-08-24 04:12:09'),
('مصطفي محمد شكري محمود', '01157479852', '01532479513', 3, '2020-08-24 04:12:46'),
('مصطفي محمد شكري محمد', '', '', 2, '2020-08-24 04:12:09'),
('محمد علي محمد محمد', '', '01532479513', 1, '2020-08-24 04:17:35'),
('مصطفي احمد شكري محمود', '', '', 1, '2020-08-24 04:31:31'),
('مصطفي حسن شكري محمد', '', '', 1, '2020-08-24 04:37:38'),
('محمد علي كلاي حسن', '', '', 2, '2020-08-24 04:38:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
