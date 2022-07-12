-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 05:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_tb`
--

CREATE TABLE `customers_tb` (
  `Customer_ID` int(10) NOT NULL,
  `lname` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `province` text NOT NULL,
  `city` text NOT NULL,
  `barangay` text NOT NULL,
  `street` varchar(15) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_tb`
--

INSERT INTO `customers_tb` (`Customer_ID`, `lname`, `fname`, `mname`, `province`, `city`, `barangay`, `street`, `zip_code`, `contact_no`) VALUES
(1, 'asdh', 'adas', 'dasf', 'asd', 'fasd', 'fasd', 'faasd', 9504, 12312123);

-- --------------------------------------------------------

--
-- Table structure for table `products_tb`
--

CREATE TABLE `products_tb` (
  `Barcode_No` int(20) NOT NULL,
  `Product_desc` varchar(100) NOT NULL,
  `Unit_Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_tb`
--

INSERT INTO `products_tb` (`Barcode_No`, `Product_desc`, `Unit_Price`, `Quantity`) VALUES
(1211, 'toothpaste', 11, 1322),
(1568432132, 'Eraser', 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_tb`
--

CREATE TABLE `suppliers_tb` (
  `ID` int(20) NOT NULL,
  `Company_Name` text NOT NULL,
  `Company_Contact` int(11) NOT NULL,
  `province` text NOT NULL,
  `city` text NOT NULL,
  `barangay` text NOT NULL,
  `street` text NOT NULL,
  `zip_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers_tb`
--

INSERT INTO `suppliers_tb` (`ID`, `Company_Name`, `Company_Contact`, `province`, `city`, `barangay`, `street`, `zip_code`) VALUES
(6, 'asdas', 123, 'asdad', 'asd', 'asd', 'asd', 1),
(7, 'aaaa', 123, 'asdfdfg', 'xvsd', 'gasda', 'gdfg', 12311);

-- --------------------------------------------------------

--
-- Table structure for table `transactions_tb`
--

CREATE TABLE `transactions_tb` (
  `Transaction_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Barcode_No` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions_tb`
--

INSERT INTO `transactions_tb` (`Transaction_ID`, `Customer_ID`, `Barcode_No`, `Quantity`) VALUES
(2, 1, 123, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tb`
--
ALTER TABLE `customers_tb`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `products_tb`
--
ALTER TABLE `products_tb`
  ADD PRIMARY KEY (`Barcode_No`);

--
-- Indexes for table `suppliers_tb`
--
ALTER TABLE `suppliers_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transactions_tb`
--
ALTER TABLE `transactions_tb`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tb`
--
ALTER TABLE `customers_tb`
  MODIFY `Customer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers_tb`
--
ALTER TABLE `suppliers_tb`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions_tb`
--
ALTER TABLE `transactions_tb`
  MODIFY `Transaction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
