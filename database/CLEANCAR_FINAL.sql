-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 05:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
  `cust_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `home_tel_no` varchar(10) NOT NULL,
  `mobile_tel_no` varchar(10) NOT NULL,
  `no_of_reservations` int(11) NOT NULL,
  `registered_date` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `address`, `email`, `home_tel_no`, `mobile_tel_no`, `no_of_reservations`, `registered_date`, `password`) VALUES
(1001, 'John', 'Doe', 'No.600, Canterbury, Arizona', 'johndoe@gmail.com', '0112696969', '0711254730', 0, '2020-10-14', '614e00a6cf5e0a27838ec055ff89e945f681054f'),
(1043, 'Thenuka', 'Weerasinghe', '900 Zone 3', 'thenukaovin@gmail.com', '0112334511', '0711755793', 3, '2020-11-13', 'b480c074d6b75947c02681f31c90c668c46bf6b8'),
(1080, 'Thamoda', 'Dilhari', 'Mathugama', 'thamo@gmail.com', '0342287472', '0771122334', 0, '2021-01-06', '614e00a6cf5e0a27838ec055ff89e945f681054f'),
(1082, 'Sanchita', 'Chawla', 'Kegalle', 'tani@gmail.com', '0342267876', '0765443232', 2, '2021-01-06', '614e00a6cf5e0a27838ec055ff89e945f681054f'),
(9999, 'Guest', 'Guest', 'guest', 'cleancar@gmail.com', '0112224511', '0772325644', 1, '2020-10-14', '35675e68f4b5af7b995d9205ad0fc43842f16450');

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
  `tel_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_reservaton`
--

CREATE TABLE `emergency_reservaton` (
  `reservation_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `vehicle_category` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(12) NOT NULL
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
-- Table structure for table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `leave_date` date NOT NULL,
  `emp_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `leave_time` time NOT NULL,
  `is_accepted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_leave`
--

INSERT INTO `emp_leave` (`leave_date`, `emp_id`, `type`, `reason`, `leave_time`, `is_accepted`) VALUES
('2021-01-07', 2013, 'Short Leave', 'Parent\'s Meeting', '15:00:00', 'Accepted'),
('2021-01-15', 2013, 'Half Day', 'Party', '12:00:00', 'Rejected'),
('2021-01-20', 2013, 'Full_leave', 'Sick', '08:00:00', 'Accepted'),
('2021-01-26', 2003, 'Half Day', 'Funneral', '00:00:12', 'Accepted'),
('2021-01-30', 2013, 'Short_leave', 'Medical Channeling', '15:00:00', 'Accepted'),
('2021-02-02', 2001, 'Full_leave', 'Wedding', '08:00:00', 'Accepted'),
('2021-02-05', 2001, 'short_leave', 'Medical Channeling', '15:00:00', 'Accepted'),
('2021-02-10', 2013, 'Full Leave', 'Wedding', '08:00:00', 'Rejected'),
('2021-02-27', 2013, 'Full_Leave', 'Wedding', '08:00:00', 'Accepted'),
('2021-03-01', 2013, 'short_leave', 'Parent\'s meeting', '08:00:00', 'Accepted'),
('2021-03-02', 2013, 'Full_leave', 'Sick', '08:00:00', 'Rejected'),
('2021-04-08', 2013, 'Full_leave', 'Pirith Ceremony', '08:00:00', 'Accepted'),
('2021-04-17', 2013, 'short_leave', 'Channeling', '15:00:00', 'Accepted'),
('2021-05-05', 2013, 'Full_leave', 'Wedding', '08:00:00', 'Pending'),
('2021-05-14', 2013, 'Half_day', 'Alms giving', '12:00:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `vehicle_no` varchar(10) NOT NULL,
  `vehicle_model` varchar(10) NOT NULL,
  `service_type` varchar(25) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `service_charge` float NOT NULL,
  `aditional_charges` float NOT NULL,
  `advance_payment` int(10) NOT NULL,
  `net_amount` float NOT NULL,
  `bill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `reservation_id`, `vehicle_no`, `vehicle_model`, `service_type`, `customer_name`, `contact_no`, `emp_id`, `service_charge`, `aditional_charges`, `advance_payment`, `net_amount`, `bill_date`) VALUES
(51, 10001, '65-5846', 'Toyota', 'Body Wash', 'Tharindu  Withanage', 711565953, 2001, 6000, 2500, 500, 8000, '2021-03-25'),
(52, 10009, '65-5846', 'Toyota', 'Body Wash', 'Tharindu  Withanage', 711565953, 2001, 8000, 2000, 500, 9500, '2021-03-26'),
(53, 0, '301-5861', 'Toyota', 'Full Service', 'Sasindu Nirmala', 711565984, 2013, 8000, 2500, 0, 10500, '2021-03-27'),
(55, 0, 'CAB-7777', 'Toyota', 'Normal Service', 'Ashan Shanaka', 711584698, 2003, 8000, 2500, 0, 10500, '2021-03-28'),
(56, 0, '252-9859', 'Toyota', 'Full Service', 'Susara Ranawaka', 711589466, 2013, 10000, 2500, 0, 12500, '2021-03-29'),
(57, 10007, 'CAA-4565', 'daihatsu', 'Body Wash', 'Thenuka Weerasinghe', 711755793, 2001, 6000, 2500, 0, 8500, '2021-03-30'),
(59, 0, 'HA-4682', 'Toyota', 'Body Wash', 'Minuri Yasara', 711206680, 2004, 6000, 3000, 0, 9000, '2021-03-30'),
(60, 0, 'CAB-2888', 'Toyota', 'Body Wash', 'Dilshan Ranawaka', 768941875, 2013, 1000, 500, 0, 1500, '2021-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `lift`
--

CREATE TABLE `lift` (
  `lift_no` int(11) NOT NULL,
  `vehicle_category` varchar(10) NOT NULL,
  `employees` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lift`
--

INSERT INTO `lift` (`lift_no`, `vehicle_category`, `employees`, `description`) VALUES
(1, 'Motor Car', 3, ''),
(2, 'Motor Car', 3, ''),
(3, 'Motor Car', 3, '');

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
  `home_tel_no` varchar(10) NOT NULL,
  `mobile_tel_no` varchar(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(11) NOT NULL,
  `no_of_leaves_halfday` int(11) NOT NULL,
  `no_of_leaves_fullday` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `designation` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`emp_id`, `first_name`, `last_name`, `address`, `email`, `home_tel_no`, `mobile_tel_no`, `NIC_no`, `no_of_leaves_short`, `no_of_leaves_halfday`, `no_of_leaves_fullday`, `enrollment_date`, `designation`, `password`) VALUES
('M001', 'Buthsara', 'Madhushanka', 'No 3,Matara', 'manager123@gmail.com', ' 011546788', ' 078987121', '875542103V', 5, 4, 7, '2020-09-23', 'MBA', 'a5c297c15e40ac3881db51277613aea3731b673a');

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
  `home_tel_no` varchar(11) NOT NULL,
  `mobile_tel_no` varchar(11) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `no_of_leaves_short` int(11) NOT NULL,
  `no_of_leaves_halfday` int(11) NOT NULL,
  `no_of_leaves_fullday` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`emp_id`, `first_name`, `last_name`, `address`, `email`, `home_tel_no`, `mobile_tel_no`, `NIC_no`, `no_of_leaves_short`, `no_of_leaves_halfday`, `no_of_leaves_fullday`, `enrollment_date`, `qualification`, `password`) VALUES
('R001', 'Receptionist', 'one', 'r 4 gh trd ef', 'receptionist@gmail.com', '112547896', '764872522', '902457414V', 5, 4, 4, '2020-10-01', 'SQL', '3b6f5b1c6ffdf5e9d335132d6b6ae9dbca0fd269');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `is_advance_paid` tinyint(1) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `is_advance_paid`, `cust_id`, `added_date`, `service_id`) VALUES
(10025, 1, 1043, '2021-03-30', 2),
(10026, 0, 9999, '2021-03-30', 2),
(10027, 0, 1082, '2021-03-30', 2),
(10028, 0, 1082, '2021-03-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_time_slot`
--

CREATE TABLE `reservation_time_slot` (
  `reservation_id` int(11) NOT NULL,
  `timeslot_no` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_time_slot`
--

INSERT INTO `reservation_time_slot` (`reservation_id`, `timeslot_no`, `date`) VALUES
(10025, 13, '2021-03-31'),
(10025, 14, '2021-03-31'),
(10025, 15, '2021-03-31'),
(10025, 16, '2021-03-31'),
(10026, 5, '2021-04-01'),
(10026, 6, '2021-04-01'),
(10026, 7, '2021-04-01'),
(10026, 8, '2021-04-01'),
(10027, 23, '2021-04-01'),
(10027, 24, '2021-04-01'),
(10027, 25, '2021-04-01'),
(10027, 26, '2021-04-01'),
(10028, 9, '2021-04-02'),
(10028, 10, '2021-04-02'),
(10028, 11, '2021-04-02'),
(10028, 12, '2021-04-02');

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
  `home_tel_no` varchar(11) NOT NULL,
  `mobile_tel_no` varchar(11) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `no_of_leaves_short` int(11) NOT NULL,
  `no_of_leaves_halfday` int(11) NOT NULL,
  `no_of_leaves_fullday` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `special_area` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_employee`
--

INSERT INTO `service_employee` (`emp_id`, `first_name`, `last_name`, `address`, `email`, `home_tel_no`, `mobile_tel_no`, `NIC_no`, `gender`, `dob`, `no_of_leaves_short`, `no_of_leaves_halfday`, `no_of_leaves_fullday`, `enrollment_date`, `special_area`, `password`) VALUES
(2001, 'Tharindu', 'Dulshan', 'No.27, Samagi Mw, Kalutara ', 'tdwithanage97@gmail.com', '0412241190', '0711565953', '973009757v', 'Male', '1997-10-26', 3, 5, 0, '2020-11-10', '', 'f638e2789006da9bb337fd5689e37a265a70f359'),
(2003, 'Buthsara', 'Madushanka', '\"nisala\", akuressa, Matara', 'buthsara@gmail.com', '0412259876', '0756982646', '886005648v', 'Female', '1988-04-09', 5, 0, 8, '2020-11-10', '', '14993032bd035408dd9ab6f6e6ad0b023eced296'),
(2004, 'Thenuka', 'Ovin', 'Millennium city, Athurugiriya, Malabe.', 'thenukaovin@gmail.com', '0114875695', '0789564213', '982503324v', 'Male', '1998-09-06', 10, 6, 4, '2020-11-10', '', '04f081741466827161bede82a374af0ec9a39e31'),
(2006, 'Dinula', 'Ransika', '\"Shanika\", Akurugoda, Tellijjawila.', 'dinularansika@gmail.com', '0412241190', '0711565953', '973537574v', 'Male', '1997-12-18', 0, 0, 3, '2020-11-21', '', '0d1e92ece8e9c44a4be8971bae7abe6b6bceac3f'),
(2013, 'Minuri', 'Wickramanayaka', 'Sri Dewananda Mw, Dodangoda, Kalutara', 'yasarawickramanayaka@gmail.com', '0342287472', '0769226787', '966180056v', 'Female', '1996-04-27', 4, 0, 3, '2021-03-21', '', '00ea68c9fe86e4bcb8cc0ec7fbbeed530b2d9214'),
(2014, 'Dinuka', 'Randula', 'N0.23, Kristine Park, Kegalle', 'dinuka@gmail.com', '0352255222', '0772233421', '973432217v', 'Male', '1997-12-08', 20, 20, 20, '2021-03-29', '', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8'),
(2015, 'Chiran', 'Bashana', 'Elvin Place, Nugegoda', 'chiran@gmail.com', '0112342222', '0711565950', '852201176v', 'Male', '1985-08-07', 2, 6, 3, '2021-03-29', '', 'd528fca3b163c05703e88b5285440bec28ecf185'),
(2016, 'Rushara', 'Duvith', 'No. 23, Sudasa Road, Borella', 'rushara@gmail.com', '0112323211', '0712288828', '903023378v', 'Male', '1990-10-28', 7, 2, 0, '2021-03-29', '', 'fbe16cf4f2be1e696e9832b7f3c80cf58abb0591'),
(2017, 'Sachini ', 'Amanda', 'Usswatta Rd, Kalutara', 'sachini@gmail.com', '0342267874', '0771122330', '966223418v', 'Female', '1996-05-01', 1, 5, 2, '2021-03-29', '', 'cc4723995ce819915e734147a77850427a9e95f9'),
(2018, 'Dulashan', 'Withanage', 'No.23, Raja Uyana, Malabe', 'dulsh@gmail.com', '0703333352', '0112234553', '801432217v', 'Male', '1980-05-22', 0, 0, 0, '2021-03-29', '', 'aacf6f5ded37d144562be1a9c23aa0e1e7c77bd9');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `vehicle_category` varchar(50) NOT NULL,
  `no_of_emp` int(11) NOT NULL,
  `duration` time NOT NULL,
  `lift_no` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`type_id`, `type_name`, `vehicle_category`, `no_of_emp`, `duration`, `lift_no`, `price`) VALUES
(1, 'Full Service', 'Motor Car', 3, '02:30:00', 1, 9000),
(2, 'Normal Service', 'Motor Car', 2, '02:00:00', 2, 4000),
(3, 'Body Wash', 'Motor Car', 2, '01:00:00', 3, 1000),
(4, 'Full Service', 'Van', 4, '02:30:00', 1, 9000),
(5, 'Normal Service', 'Motor Car', 3, '02:00:00', 2, 4000),
(6, 'Body Wash', 'Van', 2, '01:00:00', 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `timeslot_no` int(11) NOT NULL,
  `lift_no` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`timeslot_no`, `lift_no`, `start_time`, `end_time`) VALUES
(1, 1, '08:00:00', '08:30:00'),
(2, 1, '08:30:00', '09:00:00'),
(3, 1, '09:00:00', '09:30:00'),
(4, 1, '09:30:00', '10:00:00'),
(5, 1, '10:00:00', '10:30:00'),
(6, 1, '10:30:00', '11:00:00'),
(7, 1, '11:00:00', '11:30:00'),
(8, 1, '11:30:00', '12:00:00'),
(9, 1, '12:00:00', '12:30:00'),
(10, 1, '12:30:00', '13:00:00'),
(11, 1, '13:00:00', '13:30:00'),
(12, 1, '13:30:00', '14:00:00'),
(13, 1, '14:00:00', '14:30:00'),
(14, 1, '14:30:00', '15:00:00'),
(15, 1, '15:00:00', '15:30:00'),
(16, 1, '15:30:00', '16:00:00'),
(17, 1, '16:00:00', '16:30:00'),
(18, 1, '16:30:00', '17:00:00'),
(19, 2, '08:00:00', '08:30:00'),
(20, 2, '08:30:00', '09:00:00'),
(21, 2, '09:00:00', '09:30:00'),
(22, 2, '09:30:00', '10:00:00'),
(23, 2, '10:00:00', '10:30:00'),
(24, 2, '10:30:00', '11:00:00'),
(25, 2, '11:00:00', '11:30:00'),
(26, 2, '11:30:00', '12:00:00'),
(27, 2, '12:00:00', '12:30:00'),
(28, 2, '12:30:00', '13:00:00'),
(29, 2, '13:00:00', '13:30:00'),
(30, 2, '13:30:00', '14:00:00'),
(31, 2, '14:00:00', '14:30:00'),
(32, 2, '14:30:00', '15:00:00'),
(33, 2, '15:00:00', '15:30:00'),
(34, 2, '15:30:00', '16:00:00'),
(35, 2, '16:00:00', '16:30:00'),
(36, 2, '16:30:00', '17:00:00'),
(37, 3, '08:00:00', '08:30:00'),
(38, 3, '08:30:00', '09:00:00'),
(39, 3, '09:00:00', '09:30:00'),
(40, 3, '09:30:00', '10:00:00'),
(41, 3, '10:00:00', '10:30:00'),
(42, 3, '10:30:00', '11:00:00'),
(43, 3, '11:00:00', '11:30:00'),
(44, 3, '11:30:00', '12:00:00'),
(45, 3, '12:00:00', '12:30:00'),
(46, 3, '12:30:00', '13:00:00'),
(47, 3, '13:00:00', '13:30:00'),
(48, 3, '13:30:00', '14:00:00'),
(49, 3, '14:00:00', '14:30:00'),
(50, 3, '14:30:00', '15:00:00'),
(51, 3, '15:00:00', '15:30:00'),
(52, 3, '15:30:00', '16:00:00'),
(53, 3, '16:00:00', '16:30:00'),
(54, 3, '16:30:00', '17:00:00');

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
(1043, 'CAA-4565', 'Motor Car'),
(1043, 'KB-1024', 'Motor Car'),
(1080, 'AB-2399', 'Motor Van'),
(1082, 'CCB-2253', 'Motor Car'),
(9999, 'CAD-9791', 'Motor Car');

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
-- Indexes for table `emergency_reservaton`
--
ALTER TABLE `emergency_reservaton`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `employee_per_service`
--
ALTER TABLE `employee_per_service`
  ADD PRIMARY KEY (`emp_id`,`bill_no`) USING BTREE,
  ADD KEY `t7` (`bill_no`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`leave_date`,`emp_id`) USING BTREE,
  ADD KEY `t10` (`emp_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `invoice` (`emp_id`);

--
-- Indexes for table `lift`
--
ALTER TABLE `lift`
  ADD PRIMARY KEY (`lift_no`);

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
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `reservation_time_slot`
--
ALTER TABLE `reservation_time_slot`
  ADD PRIMARY KEY (`reservation_id`,`timeslot_no`) USING BTREE,
  ADD KEY `t9` (`timeslot_no`);

--
-- Indexes for table `service_employee`
--
ALTER TABLE `service_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `lift_no` (`lift_no`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`timeslot_no`),
  ADD KEY `lift_no` (`lift_no`);

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
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT for table `emergency_reservaton`
--
ALTER TABLE `emergency_reservaton`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10029;

--
-- AUTO_INCREMENT for table `service_employee`
--
ALTER TABLE `service_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `timeslot_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `t1` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_per_service`
--
ALTER TABLE `employee_per_service`
  ADD CONSTRAINT `t6` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`),
  ADD CONSTRAINT `t7` FOREIGN KEY (`bill_no`) REFERENCES `invoice` (`invoice_no`);

--
-- Constraints for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD CONSTRAINT `t10` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice` FOREIGN KEY (`emp_id`) REFERENCES `service_employee` (`emp_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service_type` (`type_id`),
  ADD CONSTRAINT `t2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `reservation_time_slot`
--
ALTER TABLE `reservation_time_slot`
  ADD CONSTRAINT `t8` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t9` FOREIGN KEY (`timeslot_no`) REFERENCES `time_slot` (`timeslot_no`);

--
-- Constraints for table `service_type`
--
ALTER TABLE `service_type`
  ADD CONSTRAINT `service_type_ibfk_1` FOREIGN KEY (`lift_no`) REFERENCES `lift` (`lift_no`);

--
-- Constraints for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD CONSTRAINT `time_slot_ibfk_1` FOREIGN KEY (`lift_no`) REFERENCES `lift` (`lift_no`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `t5` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
