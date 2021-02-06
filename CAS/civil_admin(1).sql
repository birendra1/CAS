-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 10:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civil_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('tapasmaharana@gmail.com', '3f0208724649d3337b01c4294bea9f4a');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(10) NOT NULL,
  `title` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `cdescription` varchar(200) NOT NULL,
  `file` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `complainby` varchar(70) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `dateResolved` date DEFAULT NULL,
  `completionDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `title`, `subject`, `cdescription`, `file`, `status`, `complainby`, `date`, `dateResolved`, `completionDate`) VALUES
(1, 'bjhgujhu', '', 'vhgyg', 'Complain/c8f71c70091ceffc0123174afa4fa5c81', 0, 'prangya.jhunu5@gmail.com', '2019-11-26', NULL, NULL),
(2, 'bjhgujhu', 'gfghfyh', 'vhgyg', 'Complain/c964e6b8d7eadc3270a9ca391adf8e828', 0, 'prangya.jhunu5@gmail.com', '2019-11-26', NULL, NULL),
(3, 'rrr', 'd', 'frgr3gr3g3rg', 'Complain/c1bbefcd9567a36dc8577f6f07af3ea1a', 4, 'birendrabehera1995@gmail.com', '2019-11-26', '2019-12-08', NULL),
(4, 'uiyydtf', 'uhuiuiou', 'gfuiufyyuugiu', '', 5, 'birendrabehera1995@gmail.com', '2019-11-26', '2019-12-01', NULL),
(5, 'jhczjhcjhzjhc', 'dvkdjskvjk', 'kdvkjsvkjdsijfisjc jkxdjksc', 'Complain/cfc3b25eab1c4cf6f1981f91831fb0629.png', 3, 'prangya.jhunu5@gmail.com', '2019-12-06', '2019-12-06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complainassign`
--

CREATE TABLE `complainassign` (
  `id` int(8) NOT NULL,
  `complainid` int(11) NOT NULL,
  `officerid` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainassign`
--

INSERT INTO `complainassign` (`id`, `complainid`, `officerid`, `date`) VALUES
(5, 4, 1705441255, '2019-11-26'),
(6, 5, 1705441255, '2019-12-06'),
(7, 3, 1705441255, '2019-12-08'),
(8, 5, 1705441255, '2019-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `complainlog`
--

CREATE TABLE `complainlog` (
  `id` bigint(20) NOT NULL,
  `complainid` bigint(20) NOT NULL,
  `complaindescription` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainlog`
--

INSERT INTO `complainlog` (`id`, `complainid`, `complaindescription`, `date`) VALUES
(5, 4, 'The complaint is Assigned', '2019-11-26'),
(6, 4, 'The complain is received by the authority', '2019-11-27'),
(7, 4, 'The work is in progress', '2019-12-01'),
(11, 4, 'The complain is resolved from authority side', '2019-12-01'),
(12, 4, 'The complain is resolved from authority side', '2019-12-01'),
(13, 4, 'The complain is resolved from authority side', '2019-12-01'),
(14, 4, 'The complain is resolved Completely', '2019-12-01'),
(15, 5, 'The complaint is Assigned', '2019-12-06'),
(16, 5, 'The complain is received by the authority', '2019-12-06'),
(17, 5, 'The work is in progress', '2019-12-06'),
(18, 5, 'The complain is resolved from authority side', '2019-12-06'),
(19, 5, 'The complain is resolved Completely', '2019-12-06'),
(20, 5, 'The complain is resolved Completely', '2019-12-06'),
(21, 5, 'The complain is resolved Completely', '2019-12-06'),
(22, 5, 'The complain is resolved Completely', '2019-12-06'),
(23, 5, 'The complain is resolved Completely', '2019-12-06'),
(24, 5, 'The complain is resolved Completely', '2019-12-06'),
(25, 3, 'The complaint is Assigned', '2019-12-08'),
(26, 3, 'The complain is received by the authority', '2019-12-08'),
(27, 3, 'The work is in progress', '2019-12-08'),
(28, 3, 'The complain is resolved from authority side', '2019-12-08'),
(29, 5, 'The complaint is Assigned', '2019-12-08'),
(30, 5, 'The complain is received by the authority', '2019-12-11'),
(31, 5, 'The complain is received by the authority', '2019-12-11'),
(32, 5, 'The work is in progress', '2019-12-11'),
(33, 5, 'The work is in progress', '2019-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) NOT NULL,
  `complainid` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `complainid`, `message`, `date`, `sender`) VALUES
(1, 5, 'fgvhfghfh ghvhghfgv', '2019-12-06', 'user'),
(2, 5, 'fsfsf dvfsfsfs', '2019-12-06', 'authority'),
(3, 5, 'frfrfrrvrrrggvvrbvrbbrbrvrvrrv', '2019-12-06', 'authority'),
(4, 5, 'Now', '2019-12-06', 'authority'),
(5, 5, 'After', '2019-12-06', 'authority'),
(6, 5, 'And this is final call', '2019-12-06', 'authority'),
(7, 5, 'And this is final call for user', '2019-12-06', 'authority'),
(8, 5, 'And this final call from user to authority', '2019-12-06', 'user'),
(9, 4, 'hi', '2019-12-11', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `name`, `address`, `phone`, `email`, `state`, `district`, `photo`, `status`, `password`) VALUES
('1705441255', 'hjh jhjh', 'kjhjb ghfttfrdt fgdrc Change it', 9655458877, 'iambiren00@gmail.com', 'odisha', 'jajpur', 'Authority/photo/a57b0b7e92b4b7471d36a1eb1b3d34d09.png', 1, 'c0617cc8e1471d4fc6d1577366fbf405');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `squestion` varchar(80) NOT NULL,
  `hanswer` varchar(100) NOT NULL,
  `photo` varchar(120) NOT NULL DEFAULT 'User/photo/user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `aadhar`, `address`, `password`, `gender`, `squestion`, `hanswer`, `photo`) VALUES
(4, 'prangya', 'prangya.jhunu5@gmail.com', 8018099457, 741852963148, 'dumuduma h.b colony', '3f0208724649d3337b01c4294bea9f4a', 'Female', 'What is your favorite mathematician?', 'jhunu', 'User/photo/u2ca0a9d0ae718edd64c6c6323a693a91'),
(5, 'Samir Panda', 'BIRENDRABEHERA1995@GMAIL.COM', 9654784522, 963212547725, 'Sample test', 'c0617cc8e1471d4fc6d1577366fbf405', 'Male', 'What is your favorite mathematician?', 'Napoleo', 'User/photo/user.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainassign`
--
ALTER TABLE `complainassign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainlog`
--
ALTER TABLE `complainlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complainassign`
--
ALTER TABLE `complainassign`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `complainlog`
--
ALTER TABLE `complainlog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
