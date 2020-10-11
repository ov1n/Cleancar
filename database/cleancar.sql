-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 11:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleancar`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` varchar(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `home_tel_no` int(10) NOT NULL,
  `mobile_tel_no` int(10) NOT NULL,
  `no_of_reservations` int(10) NOT NULL,
  `registered_date` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `address`, `e-mail`, `home_tel_no`, `mobile_tel_no`, `no_of_reservations`, `registered_date`, `password`) VALUES
('C00001', 'Thenuka', 'Ovin', 'Athurugiriya', 'thenuka@gmail.com', 112345678, 771234567, 3, '2020-09-02', '123');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `emp_id` varchar(4) NOT NULL,
  `relationship` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_per_service`
--

CREATE TABLE `employee_per_service` (
  `emp_id` varchar(4) NOT NULL,
  `bill_no` int(12) NOT NULL,
  `no_of_hours_worked` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `bill_no` int(12) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `vehicle_no` varchar(15) NOT NULL,
  `vehicle_model` varchar(10) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `net_amount` double(10,2) NOT NULL,
  `reservation_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `emp_id` varchar(4) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `home_tel_no` int(10) NOT NULL,
  `mobile_tel_no` int(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(10) NOT NULL,
  `no_of_leaves_halfday` int(10) NOT NULL,
  `no_of_leaves_fullday` int(10) NOT NULL,
  `enrollment_date` date NOT NULL,
  `designation` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `emp_id` varchar(4) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `home_tel_no` int(10) NOT NULL,
  `mobile_tel_no` int(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(10) NOT NULL,
  `no_of_leaves_halfday` int(10) NOT NULL,
  `no_of_leaves_fullday` int(10) NOT NULL,
  `enrollment_date` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(12) NOT NULL,
  `is_advance_paid` tinyint(1) NOT NULL,
  `cust_id` varchar(6) NOT NULL,
  `emp_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_time_slot`
--

CREATE TABLE `reservation_time_slot` (
  `reservation_id` int(12) NOT NULL,
  `timeslot_no` int(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(12) NOT NULL,
  `service_type` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `vehicle_category` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `lift_no` int(10) NOT NULL,
  `no_of_timeslots` int(10) NOT NULL,
  `no_of_employees` int(10) NOT NULL,
  `cust_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_employee`
--

CREATE TABLE `service_employee` (
  `emp_id` varchar(4) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `home_tel_no` int(10) NOT NULL,
  `mobile_tel_no` int(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(10) NOT NULL,
  `no_of_leaves_halfday` int(10) NOT NULL,
  `no_of_leaves_fullday` int(10) NOT NULL,
  `enrollment_date` date NOT NULL,
  `special_area` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `timeslot_no` int(12) NOT NULL,
  `lift_no` int(12) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`emp_id`,`relationship`) USING BTREE;

--
-- Indexes for table `employee_per_service`
--
ALTER TABLE `employee_per_service`
  ADD PRIMARY KEY (`emp_id`,`bill_no`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `t4` (`reservation_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `t1` (`cust_id`),
  ADD KEY `t2` (`emp_id`);

--
-- Indexes for table `reservation_time_slot`
--
ALTER TABLE `reservation_time_slot`
  ADD PRIMARY KEY (`reservation_id`,`timeslot_no`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `t3` (`cust_id`);

--
-- Indexes for table `service_employee`
--
ALTER TABLE `service_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`timeslot_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `t5` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `t4` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `t1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `t2` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `t3` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
