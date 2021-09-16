-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 03:15 PM
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
-- Database: `bankms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `type` text NOT NULL,
  `balance` int(200) NOT NULL,
  `date` text NOT NULL,
  `branchID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `userid`, `type`, `balance`, `date`, `branchID`) VALUES
(3, 1, 'Salary', 90000, '15/08/21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(20) NOT NULL,
  `Country` text NOT NULL,
  `Divisions` text NOT NULL,
  `zipcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `Country`, `Divisions`, `zipcode`) VALUES
(1, 'Bangladesh', 'Rajshahi', '6250'),
(2, 'Bangladesh', 'Dhaka', '6522'),
(3, 'Bangladesh', 'Khulna', '5562');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `ID` int(50) NOT NULL,
  `addressid` int(50) NOT NULL,
  `vacancy` int(50) DEFAULT NULL,
  `employees` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`ID`, `addressid`, `vacancy`, `employees`) VALUES
(1, 0, 70, NULL),
(3, 0, 70, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `salary` int(200) NOT NULL,
  `branchid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `accountid` int(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `transactiontype` text NOT NULL,
  `Branchid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `userid`, `accountid`, `amount`, `transactiontype`, `Branchid`) VALUES
(1, 1, 3, 10000, 'addmoney', 1),
(2, 3, 3, 500, 'addmoney', 1),
(3, 1, 3, 500, 'withdrow', 1);

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
(1, 'abcd', 'ab', '123', '01234567892', 'abc@gmail.com', 'male', '1995-08-09', 'Customer'),
(5, 'ABCDEF', 'xyz', '444', '01750096696', 'xyzzz@gmail.com', 'male', '2012-06-05', 'Customer'),
(6, 'ABCDEF', 'xyz', '1', '01750096696', 'xyzz@gmail.com', 'male', '2012-06-05', 'Customer'),
(9, 'Supper Admin', 'admin', '1', '01750096696', 'admin@gmail.com', 'Male', '8/10/95', 'Admin'),
(10, 'admin mini', 'admin2', '1230', '01750096696', 'admin2@gmail.com', 'male', '2018-10-09', 'Admin'),
(11, 'ac db', 'axx', '12345', '01750096696', 'aaaa@gmail.com', 'male', '2021-09-02', 'Customer'),
(12, 'Empo 1', 'empo', '0000', '00000000000', 'empo@gmail.com', 'other', '2021-08-11', 'Employee'),
(13, 'Toufiqul', '', '123', '17500966960', 'sams', 'other', '2021-08-11', 'Customer'),
(14, 'ee eee eee', 'eee', '121', '01750096696', 'sams52tas@gmail.com', 'male', '1997-10-21', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
