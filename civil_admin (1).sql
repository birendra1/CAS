-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 05:46 PM
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
('bkb0997@gmail.com', 'c0617cc8e1471d4fc6d1577366fbf405');

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
(7, 'Health Releted problem in our locality', 'unknown disease affect people', 'People in our local area affected by a serious disease since last 15 days and 2 people are already died so, require an urgent attention', '', 1, 'birendrabehera1995@gmail.com', '2019-12-14', NULL, NULL),
(8, 'Reconstruction of road', 'Newly constructed road damaged so badly needs reconstruction', 'In mangalpur area road construction completed since 10 days , now the roads damaged so badly  needs reconstruction', '', 3, 'birendrabehera1995@gmail.com', '2019-12-14', NULL, NULL),
(9, 'Waste', 'Waste is not properly collected', 'In our area dustbin gets overflow before the waste is collected from dustbin', '', 0, 'prangya.jhunu5@gmail.com', '2019-12-14', NULL, NULL),
(10, 'Road', 'Road Damage', 'Inour area most of the roads are damange . sothat we face a lot of problems for transpotation', '', 5, 'prangya.jhunu5@gmail.com', '2019-12-14', NULL, NULL),
(11, 'Powercut', 'Undeclared powercut in hinjilcut area', 'At night several times undeclared powercut occurs which creates problem in study and increase changes of threft', '', 0, 'prangya.jhunu5@gmail.com', '2019-12-14', NULL, NULL);

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
(11, 10, 1705441255, '2019-12-14'),
(12, 10, 1705441255, '2019-12-14'),
(13, 7, 11111111, '2019-12-14'),
(14, 8, 1705441255, '2019-12-14');

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
(40, 10, 'The complaint is Assigned', '2019-12-14'),
(41, 10, 'The complaint is Assigned', '2019-12-14'),
(42, 7, 'The complaint is Assigned', '2019-12-14'),
(43, 10, 'The complain is received by the authority', '2019-12-14'),
(44, 10, 'The complain is received by the authority', '2019-12-14'),
(45, 10, 'The work is in progress', '2019-12-14'),
(46, 10, 'The work is in progress', '2019-12-14'),
(47, 10, 'The complain is resolved from authority side', '2019-12-14'),
(48, 8, 'The complaint is Assigned', '2019-12-14'),
(49, 10, 'The complain is resolved Completely', '2019-12-14'),
(50, 8, 'The complain is received by the authority', '2019-12-14'),
(51, 8, 'The work is in progress', '2019-12-14'),
(52, 8, 'The work is in progress', '2019-12-14'),
(53, 8, 'The work is in progress', '2019-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) NOT NULL,
  `complainid` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `complainid`, `message`, `date`, `sender`) VALUES
(71, 10, 'Good morning sir, I am not satisfied with the resolved issue', '2019-12-14 11:43:42', 'user'),
(72, 10, 'hello', '2019-12-14 11:46:10', 'authority');

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
('10000200', 'Bikash Das', 'sahipada,puri', 9645123355, 'sujitpatra393@gmail.com', 'odisha', 'puri', '', 1, '64ab5806637b1dccc8d72ff1c9c30419'),
('11111111', 'tapas', 'dhsbdsh hjwgdukg jhjwd', 7418529630, 'tapasmaharana422@gmail.com', 'odisha', 'Ganjam', '', 1, 'c0617cc8e1471d4fc6d1577366fbf405'),
('1364676', 'Sujit das', 'Bsjsj', 9866331455, 'sujitpatra@gmail.com', 'Odisha', 'Khordha', '', 0, ''),
('1705441255', 'Mukesh Roul', 'satabdi sahi , binjharpur', 9655458877, 'iambiren00@gmail.com', 'odisha', 'jajpur', 'Authority/photo/a57b0b7e92b4b7471d36a1eb1b3d34d09.png', 1, 'c0617cc8e1471d4fc6d1577366fbf405');

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
(4, 'prangya', 'prangya.jhunu5@gmail.com', 8018099457, 741852963148, 'dumuduma h.b colony', '84d0a4bed194546ea919c26dd617e4ef', 'Female', 'What is your favorite mathematician?', 'jhunu', 'User/photo/u2ca0a9d0ae718edd64c6c6323a693a91'),
(5, 'Samir Panda', 'BIRENDRABEHERA1995@GMAIL.COM', 9654784522, 963212547725, 'Sample test', 'c0617cc8e1471d4fc6d1577366fbf405', 'Male', 'Who is your favorite mathematician?', 'Euler', 'User/photo/user.jpg'),
(6, 'Abhishek Mishra', 'haidjrockabhishek@gmail.com', 9658486575, 125455668812, 'bandamunda,rourkela', '8371f69bdcc49cb926f09c9f4a061082', 'Male', 'What is your nic name?', 'abhi', 'User/photo/user.jpg'),
(7, 'Samir Panda', 'pandasamir553@gmail.com', 9658486575, 123456789012, 'bhanjanagar,odisha', 'b284919af3d2bd9e984ad6109b8af329', 'Male', 'What is your favorite mathematician?', 'Euler', 'User/photo/user.jpg'),
(8, 'Sabhih Das', 'subhit12@gmail.com', 9654445548, 234569785612, 'bhoi sahi', 'c0617cc8e1471d4fc6d1577366fbf405', 'Male', 'What is your favorite mathematician?', 'Napoleo', 'User/photo/user.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `complainassign`
--
ALTER TABLE `complainassign`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complainlog`
--
ALTER TABLE `complainlog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
