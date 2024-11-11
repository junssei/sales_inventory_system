-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 01:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigcasmgmt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `email`, `role`) VALUES
(1, 'June Vincent', 'Fernandez', 'admin', '$2y$10$DOy85BUDuJ6u4esTMqjMo.nYTpTqu/hH8h8Bn2rm8hhVeeM5vYrTm', 'fernandez@gmail.com', 'admin'),
(2, 'June Vincent', 'Fernandez', 'junevincent', '$2y$10$qg0HpTmreBkQiDMad65u4.9MLqMfj1zGtoc/H3XgEwvFFY33303qO', 'junevincent@gmail.com', 'unassigned'),
(3, 'Jessa Mae', 'Bigcas', 'jessmae', '$2y$10$vkkk2YHItyiW4V9YbfTj0OLM64setJ6iinCsa81WMgzhKNivLlx2a', 'jessamae@gmail.com', 'unassigned'),
(4, 'Kiervy', 'Estole', 'kiervy', '$2y$10$kxUfiQb9CuFWC/nMevYKoOpV71ejYVsVNqykQKDj2V/N94a94Qbzi', 'kiervyestole@gmail.com', 'unassigned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
