-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 05:29 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1001, 'John', 'Doe', 'No.600, Canterbury, Arizona', 'johndoe@gmail.com', '112696969', '711254730', 0, '2020-10-14', '5f4dcc3b5aa765d61d8327deb882cf99'),
(1002, 'Jane', 'Doe', '876/5, Baker Street, London', 'janedoe@gmail.com', '112543467', '692696969', 0, '2020-10-15', 'a8c0d2a9d332574951a8e4a0af7d516f'),
(1012, 'Maithreepala', 'White', 'UCSC Building Complex', 'user1@gmail.com', '714567890', '114567890', 0, '2020-10-15', 'd81f9c1be2e08964bf9f24b15f0e4900'),
(1031, 'daaew', 'fags', 'fager', 'userd@gmail.com', '3457', '3457', 0, '2020-10-15', '17d965747c701d6ffb406cad0f4265dc'),
(1034, 'hah', 'gah', 'farr', '2018cs145@gmail.com', '774545590', '114545590', 0, '2020-10-15', '7815696ecbf1c96e6894b779456d330e'),
(1037, 'sherlock', 'holmes', '221b baker', 'sher@j.b', '714567890', '114567890', 0, '2020-10-16', '155d1a1c98b0f860a26b80ff6ab941fe'),
(1038, 'amara', 'bandu', 'rupa', 'rupa@g.c', '654', '654', 0, '2020-10-18', '2a6571da26602a67be14ea8c5ab82349'),
(1039, 'Dada', 'Far', 'qwerty', 'rat@g.c', '931', '931', 0, '2020-10-27', '44f437ced647ec3f40fa0841041871cd'),
(1040, 'Buwa', 'R', 'Gampaha', 'buwa@g.c', '114567891', '114567891', 0, '2020-10-29', '6227cb5c2107ccad85351676a6c8dd80'),
(1042, 'asdad', 'asdas', 'asdgt', 'gt@f.c', '4', '4', 0, '2020-10-30', '6865aeb3a9ed28f9a79ec454b259e5d0'),
(1043, 'Thenuka', 'Weerasinghe', '900 Zone 3', 'thenukaovin@gmail.com', '112334511', '711755793', 3, '2020-11-13', 'a8f68a7d03245c5e7f4d090abb01853e43dbfac5'),
(1076, 'Minuri', 'Wickramanayaka', 'Kegalle', 'minuri@gmail.com', '342287472', '769226787', 0, '2020-12-27', '8a62b7c940f895985dc66836150cce72'),
(1077, 'Tharindu', 'Withanage', 'Matara', 't@gmail.com', '342287472', '771122334', 0, '2020-12-27', '$2y$11$iEpQVb1365W9jtaQfIa1Y.9he'),
(1078, 'Yasara', 'Wickramanayaka', 'Kegalle', 'yasara@gmail.com', '342287472', '765443232', 0, '2020-12-27', '$2y$10$iUjrDr1gZTFDQ3p2mRs4t.u42BkRrAt24rxFhawogRXstXGbJSAuO\r\n'),
(1079, 'Sachini', 'Amanda', 'Kalutara', 'sa@gmail.com', '342267876', '769226787', 0, '2020-12-27', '$2y$10$7Iew2nQNWqckeUK0QK7kOuGZfKiL9UMxoA4mTlGyjyHcIIjYYycxi'),
(1080, 'Thamoda', 'Dilhari', 'Mathugama', 'thamo@gmail.com', '342287472', '771122334', 0, '2021-01-06', '614e00a6cf5e0a27838ec055ff89e945f681054f'),
(1082, 'Taniya ', 'Sonali', 'Kegalle', 'tani@gmail.com', '342267876', '765443232', 0, '2021-01-06', 'cd19ee9e3fe04fdc3fcc0449a832e8bbd89c022f'),
(1086, 'Thenuka', 'Weerasinghe', '900 Zone 3', 'thenukaovin@gmail.com', '0112772511', '0711755793', 0, '2021-03-15', 'b480c074d6b75947c02681f31c90c668c46bf6b8'),
(1087, 'Thenuka', 'Weerasinghe', '900 Zone 3', 'thenukaovin@gmail.com', '0112772511', '0711755793', 0, '2021-03-15', 'b480c074d6b75947c02681f31c90c668c46bf6b8');

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
('2021-01-16', 2011, 'Full_leave', 'pirith ceremony', '08:00:00', 'accepted'),
('2021-01-26', 2003, 'Half Day', 'wedding', '00:00:12', 'accepted'),
('2021-02-02', 2001, 'Full_leave', 'party', '08:00:00', ''),
('2021-02-05', 2001, 'Full_leave', 'nnnnnnn', '08:00:00', 'accepted'),
('2021-02-27', 2011, 'Full_leave', 'medical', '08:00:00', ''),
('2021-03-04', 2011, 'Full_leave', 'party', '08:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `vehicle_no` varchar(10) NOT NULL,
  `vehicle_model` varchar(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `service_charge` float NOT NULL,
  `aditional_charges` float NOT NULL,
  `net_amount` float NOT NULL,
  `bill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `reservation_id`, `vehicle_no`, `vehicle_model`, `customer_name`, `contact_no`, `emp_id`, `service_charge`, `aditional_charges`, `net_amount`, `bill_date`) VALUES
(1, 1, 'GT-5942', 'van', 'Yasara', 342287472, 2000, 12000, 3000, 15000, '2021-03-01'),
(2, 2, 'CCC-1234', 'car', 'Tharindu', 453322113, 2001, 8000, 2000, 10000, '2021-03-02'),
(3, 3, 'CAR-5653', 'car', 'Thenuka', 11233445, 2003, 16000, 2000, 18000, '2021-03-03'),
(4, 4, 'CC-2345', 'van', 'Buthsara', 432211456, 2006, 16000, 4000, 20000, '2021-03-03'),
(5, 5, 'AC-4567', 'car', 'acbn', 342287492, 2011, 16000, 2000, 18000, '2021-03-04'),
(6, 1, '57-8933', 'Toyota', 'Mr.Perera', 758946523, 2004, 10000, 4000, 14000, '2020-11-12'),
(7, 3, '57-8956', 'Toyota', 'Mr.Ovin', 758946523, 2005, 16000, 0, 16000, '2020-11-12'),
(8, 3, '57-8956', 'Toyota', 'Mr.Ovin', 758946523, 2006, 12000, 4500, 16500, '2020-11-12'),
(9, 2, '57-8956', 'Toyota', 'Mr.Buthsara', 758946523, 2001, 2000, 300, 2300, '2020-11-12'),
(10, 4, '57-8933', 'Toyota', 'upadi', 758946523, 2000, 1500, 250, 1750, '2020-11-12');

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
('M001', 'Manager', 'Sample', 'manager 23', 'manager123@gmail.com', '115467887', '789871212', '875542103V', 5, 4, 7, '2020-09-23', 'MBA', '1a8565a9dc72048ba03b4156be3e569f22771f23');

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
(10002, 0, 1043, '2021-03-15', 2),
(10003, 0, 1043, '2021-03-15', 1),
(10004, 0, 1043, '2021-03-15', 2);

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
(2000, 'Saman', 'Kumara', 'Kandakadu', 'employee1@gmail.com', '342287472', '765443232', '56452102v', 'Male', '5645-07-28', 4, 2, 10, '2020-09-17', 'Mechanics', 'employee'),
(2001, 'Tharindu', 'Dulshan', 'shanika, Akurugoda, Tellijjawila.', 'tdwithanage97@gmail.com', '412241190', '711565953', '971400757v', '', '0000-00-00', 3, 5, 6, '2020-11-10', 'L_001', '6368ad93c9fa22ab35bf311477f74bd3'),
(2003, 'Buthsara', 'Madushanka', '"nisala", akuressa, Matara', 'buthsara@gmail.com', '412259876', '756982646', '972564844v', '', '0000-00-00', 5, 6, 8, '2020-11-10', 'L_003 ', 'd41d8cd98f00b204e9800998ecf8427e'),
(2004, 'Thenuka', 'Ovin', 'Millennium city, Athurugiriya, Malabe.', 'thenukaovin@gmail.com', '114875695', '789564213', '2000764902', '', '0000-00-00', 4, 6, 4, '2020-11-10', 'L_004', 'd41d8cd98f00b204e9800998ecf8427e'),
(2005, 'asindu', 'chamika', 'hbfweiyfhwei', 'tdwithanage97@gmail.com', '412259874', '711565984', '5621265456', '', '0000-00-00', 6, 8, 12, '2020-11-11', 'L_001', 'd41d8cd98f00b204e9800998ecf8427e'),
(2006, 'Tharindu', 'Madushanka', 'shanika, Akurugoda, Tellijjawila.', 'tdwithanage97@gmail.com', '412241190', '711565953', '971400757v', 'Male', '2020-11-21', 0, 0, 0, '2020-11-21', '', '25d55ad283aa400af464c76d713c07ad'),
(2011, 'Minuri', 'Wickramanayaka', 'Kalutara', 'yasarawickramanayaka@gmail.com', '342287472', '769226787', '966180056v', 'Female', '1996-04-27', 1, 2, 0, '2021-01-06', '', '85b77a2d069048802e427113acf327f6972603e5');

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
(1, 'Full Service', 'Motor Car', 3, '02:30:00', 1, 12000),
(2, 'Normal Service', 'Motor Car', 2, '02:00:00', 1, 8000),
(3, 'Body Wash', 'Motor Car', 2, '01:00:00', 1, 2000),
(4, 'Full Service', 'Van', 4, '02:30:00', 2, 15000),
(5, 'Normal Service', 'Motor Car', 3, '02:00:00', 2, 8000),
(6, 'Body Wash', 'Van', 2, '01:00:00', 2, 3000),
(7, 'body wash', 'Motor Car', 2, '01:00:00', 3, 4000);

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
(1031, '44444', 'light vehi'),
(1034, 'g23', 'light vehi'),
(1037, '221b', 'light vehi'),
(1038, 'r1', 'light vehi'),
(1039, '812', 'light vehi'),
(1040, '6969', 'light vehi'),
(1043, 'CAA-4565', 'Motor Car'),
(1043, 'KB-1024', 'Car'),
(1076, 'GT-9944', 'Car'),
(1077, 'GT-1234', 'Car'),
(1078, 'GT-9944', 'Car'),
(1079, 'ab-2399', 'Car'),
(1080, 'ab-2399', ''),
(1082, 'CCB-2253', 'Motor Car');

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
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1088;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;
--
-- AUTO_INCREMENT for table `service_employee`
--
ALTER TABLE `service_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;