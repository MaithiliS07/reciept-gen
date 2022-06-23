-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 06:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reciept_gen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

CREATE TABLE `admin_form` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_form`
--

INSERT INTO `admin_form` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_details`
--

CREATE TABLE `receipt_details` (
  `FirmName` varchar(50) NOT NULL,
  `FirmAddress` varchar(50) NOT NULL,
  `BillTo` varchar(30) NOT NULL,
  `BillToAddress` varchar(50) NOT NULL,
  `Discount` int(3) NOT NULL,
  `SubtotalDiscount` int(3) NOT NULL,
  `TaxRate` int(5) NOT NULL,
  `Shipping` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt_details`
--

INSERT INTO `receipt_details` (`FirmName`, `FirmAddress`, `BillTo`, `BillToAddress`, `Discount`, `SubtotalDiscount`, `TaxRate`, `Shipping`) VALUES
('PDS', 'Pune', 'xyz', 'Mumbai', 10, 10, 100, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `reciept_items`
--

CREATE TABLE `reciept_items` (
  `Discription` varchar(50) NOT NULL,
  `Quantity` int(4) NOT NULL,
  `UnitPrice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciept_items`
--

INSERT INTO `reciept_items` (`Discription`, `Quantity`, `UnitPrice`) VALUES
('books', 5, 50),
('3122', 132, 123),
('sdada', 0, 0),
('', 0, 0),
('', 0, 0),
('qeq', 0, 0),
('', 0, 0),
('', 0, 0),
('fsfsfs', 3232, 23324),
('', 0, 0),
('qeqe', 0, 0),
('eqeqqeq', 131, 313),
('eqeqqeq', 131, 313),
('', 0, 0),
('', 0, 0),
('', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`) VALUES
(1, 'Adarsh', 'adarsh4909jaiswal@gmail.com', '123'),
(2, 'A', 'ada@gmail.com', '12'),
(3, 'assd', 'asdsa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_form`
--
ALTER TABLE `admin_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_form`
--
ALTER TABLE `admin_form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
