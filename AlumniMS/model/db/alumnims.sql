-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 07:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnims`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(50) NOT NULL,
  `uid` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `uid`, `username`, `post`) VALUES
(1, '1', 'Iffath', 'HI I am IFFATH.\r\nThis is my WT final project.\r\nThis project is about Alumni Managment System.\r\nThank you.\r\n.\r\n.\r\n.\r\n\r\n\r\nBye'),
(3, '2', 'alum', 'HI I am Alumni\r\nBatch: 12-1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(50) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `userType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `username`, `password`, `phone`, `email`, `gender`, `dob`, `userType`) VALUES
(1, 'iffath jahan iffath', 'Iffath', '123', '01723348895', 'Iffathjahan@gmail.com', 'female', '1998-10-13', 'Student'),
(2, 'al umni', 'alum', '22', '01750096698', 'alu@gmail.com', 'male', '1995-10-23', 'Alumni'),
(3, 'Super Admin', 'Sadmin', '3', '01750096696', 'admin@gmail.com', 'male', '8/10/97', 'Admin'),
(4, 'admin lite', 'adminl', '333', '01700348895', 'admin2@gmail.com', 'female', '1991-06-10', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
