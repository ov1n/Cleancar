-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 03:04 PM
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
-- Database: `cleancar`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `home_tel_no` int(11) NOT NULL,
  `mobile_tel_no` int(11) NOT NULL,
  `no_of_reservations` int(11) NOT NULL,
  `registered_date` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `address`, `email`, `home_tel_no`, `mobile_tel_no`, `no_of_reservations`, `registered_date`, `password`) VALUES
(1001, 'John', 'Doe', 'No.600, Canterbury, Arizona', 'johndoe@gmail.com', 112696969, 711254730, 0, '2020-10-14', 'password'),
(1002, 'Jane', 'Doe', '876/5, Baker Street, London', 'janedoe@gmail.com', 112543467, 692696969, 0, '2020-10-15', 'janedoe'),
(1012, 'Maithreepala', 'White', 'UCSC Building Complex', 'user1@gmail.com', 714567890, 114567890, 0, '2020-10-15', '345'),
(1031, 'daaew', 'fags', 'fager', 'userd@gmail.com', 3457, 3457, 0, '2020-10-15', 'far'),
(1034, 'hah', 'gah', 'farr', '2018cs145@gmail.com', 774545590, 114545590, 0, '2020-10-15', 'asd'),
(1037, 'sherlock', 'holmes', '221b baker', 'sher@j.b', 714567890, 114567890, 0, '2020-10-16', 'sher'),
(1038, 'amara', 'bandu', 'rupa', 'rupa@g.c', 654, 654, 0, '2020-10-18', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `emp_id` int(11) NOT NULL,
  `relationship` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_per_service`
--

CREATE TABLE `employee_per_service` (
  `emp_id` int(11) NOT NULL,
  `bill_no` int(11) NOT NULL,
  `no_of_hours_worked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `bill_no` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `vehicle_no` varchar(10) NOT NULL,
  `vehicle_model` varchar(10) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `net_amount` float NOT NULL,
  `reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `emp_id` varchar(4) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `home_tel_no` int(11) NOT NULL,
  `mobile_tel_no` int(11) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(11) NOT NULL,
  `no_of_leaves_halfday` int(11) NOT NULL,
  `no_of_leaves_fullday` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `designation` varchar(10) NOT NULL,
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
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `home_tel_no` int(11) NOT NULL,
  `mobile_tel_no` int(11) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(11) NOT NULL,
  `no_of_leaves_halfday` int(11) NOT NULL,
  `no_of_leaves_fullday` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `is_advance_paid` tinyint(1) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_time_slot`
--

CREATE TABLE `reservation_time_slot` (
  `reservation_id` int(11) NOT NULL,
  `timeslot_no` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_type` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `vehicle_category` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `lift_no` varchar(5) NOT NULL,
  `no_of_timeslots` int(11) NOT NULL,
  `no_of_employees` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_employee`
--

CREATE TABLE `service_employee` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `home_tel_no` int(11) NOT NULL,
  `mobile_tel_no` int(11) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(11) NOT NULL,
  `no_of_leaves_halfday` int(11) NOT NULL,
  `no_of_leaves_fullday` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `special_area` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `timeslot_no` int(11) NOT NULL,
  `lift_no` int(11) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `cust_id` int(11) NOT NULL,
  `vehicle_num` varchar(10) NOT NULL,
  `vehicle_category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`cust_id`, `vehicle_num`, `vehicle_category`) VALUES
(1031, '44444', 'light vehi'),
(1034, 'g23', 'light vehi'),
(1037, '221b', 'light vehi'),
(1038, 'r1', 'light vehi');

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
  ADD PRIMARY KEY (`relationship`,`emp_id`) USING BTREE,
  ADD KEY `t1` (`emp_id`);

--
-- Indexes for table `employee_per_service`
--
ALTER TABLE `employee_per_service`
  ADD PRIMARY KEY (`emp_id`,`bill_no`) USING BTREE,
  ADD KEY `t7` (`bill_no`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`bill_no`);

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
  ADD KEY `t2` (`cust_id`),
  ADD KEY `t3` (`emp_id`);

--
-- Indexes for table `reservation_time_slot`
--
ALTER TABLE `reservation_time_slot`
  ADD PRIMARY KEY (`reservation_id`,`timeslot_no`) USING BTREE,
  ADD KEY `t9` (`timeslot_no`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `t4` (`cust_id`);

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
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`cust_id`,`vehicle_num`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_employee`
--
ALTER TABLE `service_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `timeslot_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `t1` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`);

--
-- Constraints for table `employee_per_service`
--
ALTER TABLE `employee_per_service`
  ADD CONSTRAINT `t6` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`),
  ADD CONSTRAINT `t7` FOREIGN KEY (`bill_no`) REFERENCES `invoice` (`bill_no`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `t2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `t3` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`);

--
-- Constraints for table `reservation_time_slot`
--
ALTER TABLE `reservation_time_slot`
  ADD CONSTRAINT `t8` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`),
  ADD CONSTRAINT `t9` FOREIGN KEY (`timeslot_no`) REFERENCES `time_slot` (`timeslot_no`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `t4` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `t5` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
