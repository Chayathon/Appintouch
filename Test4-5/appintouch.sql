-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 02:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appintouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` varchar(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CountryCode` varchar(2) NOT NULL,
  `Budget` varchar(100) NOT NULL,
  `Used` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `CountryCode`, `Budget`, `Used`) VALUES
('C001', 'Will Peter', 'will.p@hotmail.com', 'TH', '1000000', '600000'),
('C002', 'John Smith', 'john.smith@hotmail.com', 'EN', '2000000', '800000'),
('C003', 'Jame Born', 'jame.born@hotmail.com', 'US', '3000000', '600000'),
('C004', 'Charlie Angel', 'charlie.angle@hotmail.com', 'US', '4000000', '1000000'),
('C005', 'Mickey Brown', 'mickey.b@hotmail.com', 'JP', '5000000', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` varchar(4) NOT NULL,
  `Date` date NOT NULL,
  `CustomerID` varchar(4) NOT NULL,
  `Amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `Date`, `CustomerID`, `Amount`) VALUES
('O001', '2019-10-08', 'C002', '50000'),
('O002', '2019-10-08', 'C002', '45000'),
('O003', '2019-11-20', 'C003', '50000'),
('O004', '2019-05-20', 'C004', '40000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
