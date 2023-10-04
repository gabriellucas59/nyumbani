-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 11:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakupanga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(60) NOT NULL,
  `size` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nyumbani`
--

CREATE TABLE `nyumbani` (
  `number` int(20) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `path` varchar(70) NOT NULL,
  `description` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `bei` int(20) NOT NULL,
  `wilaya` varchar(200) NOT NULL,
  `mahali` varchar(200) NOT NULL,
  `size` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nyumbani`
--

INSERT INTO `nyumbani` (`number`, `picture`, `path`, `description`, `phone`, `bei`, `wilaya`, `mahali`, `size`) VALUES
(1, '2.jfif', 'images/2.jfif', 'nyumba inakodishwa/ pangishwa', 2147483647, 450000, 'temeke', 'buza kanisani', 4),
(2, '2.jfif', 'images/2.jfif', 'kodishwa', 687999366, 450000, 'Temeke', 'buza kanisani', 5),
(3, '1.jfif', 'images/1.jfif', 'inauzwa', 2147483647, 45000000, 'Ilala', 'BUURUNI', 6);

-- --------------------------------------------------------

--
-- Table structure for table `watumiaji`
--

CREATE TABLE `watumiaji` (
  `id` int(11) NOT NULL,
  `jina` varchar(200) NOT NULL,
  `simu` int(20) NOT NULL,
  `jinsia` text NOT NULL,
  `wilaya` varchar(20) NOT NULL,
  `passcode` varchar(20) NOT NULL,
  `kazi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watumiaji`
--

INSERT INTO `watumiaji` (`id`, `jina`, `simu`, `jinsia`, `wilaya`, `passcode`, `kazi`) VALUES
(1, 'juma abdul', 687999366, 'Mwanamke', '', '1234', 'dalali'),
(4, 'crala mopoa', 789567788, 'Mwanamke', '', '1234567', 'Mmiliki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nyumbani`
--
ALTER TABLE `nyumbani`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `watumiaji`
--
ALTER TABLE `watumiaji`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `simu` (`simu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nyumbani`
--
ALTER TABLE `nyumbani`
  MODIFY `number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `watumiaji`
--
ALTER TABLE `watumiaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
