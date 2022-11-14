-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 02:32 PM
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
-- Database: `fitstop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `username`, `password`) VALUES
('0001', 'admin', 'admin', 'admin'),
('0002', 'admin@gmail.com', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `workoutclass_id` varchar(50) NOT NULL,
  `workoutclass_name` varchar(50) NOT NULL,
  `workoutclass_rate` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `workoutclass_description` varchar(2042) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`workoutclass_id`, `workoutclass_name`, `workoutclass_rate`, `time`, `workoutclass_description`) VALUES
('PROG_202210001', 'Archery', '', '00:00:00', 'Archery'),
('PROG_202210002', 'Zumba', '', '00:00:00', 'Zumba');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_middlename` varchar(50) NOT NULL,
  `client_lastname` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_birthdate` date NOT NULL,
  `client_contactNumber` varchar(15) NOT NULL,
  `client_type` varchar(50) NOT NULL,
  `client_class` varchar(50) NOT NULL,
  `client_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `discount_id` varchar(50) NOT NULL,
  `discount_name` varchar(50) NOT NULL,
  `discount` double NOT NULL,
  `discount_description` varchar(2042) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_discount`
--

INSERT INTO `tbl_discount` (`discount_id`, `discount_name`, `discount`, `discount_description`) VALUES
('DISC_202210001', 'Student', 20, 'This Discount is exclusive only for student who have student ID.'),
('DISC_202210002', 'Senior Citizen', 20, 'This Discount is exclusive only for Senior Citizen who Senior Citizen ID. OKAY!'),
('DISC_202210003', 'PWD', 10, 'This Discount is exclusive only for PWD who have PWD ID. OKAY!.'),
('DISC_202210004', 'full discount', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `equipment_id` varchar(50) NOT NULL,
  `equipment_name` varchar(200) NOT NULL,
  `equipment_quantity` int(50) NOT NULL,
  `equipment_damage` double NOT NULL,
  `equipment_remarks` varchar(2042) NOT NULL,
  `equipment_stock` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`equipment_id`, `equipment_name`, `equipment_quantity`, `equipment_damage`, `equipment_remarks`, `equipment_stock`) VALUES
('EQPT_202210001', 'Dumbells', 100, 0, '', 0),
('EQPT_202210002', 'Rope', 200, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `eventCategory` varchar(50) NOT NULL,
  `event_venue` varchar(50) NOT NULL,
  `eventInstructor` varchar(50) NOT NULL,
  `event_timeStart` time NOT NULL,
  `event_timeEnd` time NOT NULL,
  `event_date` date NOT NULL,
  `event_fee` varchar(50) NOT NULL,
  `event_description` varchar(2042) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_name`, `eventCategory`, `event_venue`, `eventInstructor`, `event_timeStart`, `event_timeEnd`, `event_date`, `event_fee`, `event_description`) VALUES
('EVNT_202210001', 'The Battle ', 'PROG_202210002', 'STI COLLEGE OR ORMOC', 'INST_202210002', '18:11:00', '18:10:00', '2022-11-15', '150.00', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instructor`
--

CREATE TABLE `tbl_instructor` (
  `instructor_id` varchar(50) NOT NULL,
  `instructor_program` varchar(50) NOT NULL,
  `instructor_firstname` varchar(50) NOT NULL,
  `instructor_middlename` varchar(50) NOT NULL,
  `instructor_lastname` varchar(50) NOT NULL,
  `instructor_contactnumber` varchar(15) NOT NULL,
  `instructor_birthdate` date NOT NULL,
  `instructor_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_instructor`
--

INSERT INTO `tbl_instructor` (`instructor_id`, `instructor_program`, `instructor_firstname`, `instructor_middlename`, `instructor_lastname`, `instructor_contactnumber`, `instructor_birthdate`, `instructor_email`) VALUES
('INST_202210001', 'PROG_202210002', 'Lee Carlo', 'Regio', 'Tajores', '09650885764', '2001-05-22', 'leecarlotajores@gmail.com'),
('INST_202210002', 'PROG_202210001', 'Denise', 'Hyde', 'Cosesn', '09557538793', '2001-05-22', 'denise@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `promo_id` varchar(50) NOT NULL,
  `promo_name` varchar(50) NOT NULL,
  `promo_discount` double NOT NULL,
  `promo_durationStart` date NOT NULL,
  `promo_durationEnd` date NOT NULL,
  `promo_description` varchar(2042) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`promo_id`, `promo_name`, `promo_discount`, `promo_durationStart`, `promo_durationEnd`, `promo_description`) VALUES
('PROMO_202210001', 'Charter Day Promo', 20, '2022-11-05', '2022-11-10', 'asdasdasdas'),
('PROMO_202210002', 'Ormoc Day', 10, '2022-11-10', '2022-11-15', 'fgdfgwerwer'),
('PROMO_202210003', 'Baybay Day', 10, '2022-11-18', '2022-11-11', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`workoutclass_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `eventCategory` (`eventCategory`),
  ADD KEY `eventInstructor` (`eventInstructor`);

--
-- Indexes for table `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `instructor_program` (`instructor_program`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`promo_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD CONSTRAINT `tbl_event_ibfk_1` FOREIGN KEY (`eventCategory`) REFERENCES `tbl_category` (`workoutclass_id`),
  ADD CONSTRAINT `tbl_event_ibfk_2` FOREIGN KEY (`eventInstructor`) REFERENCES `tbl_instructor` (`instructor_id`);

--
-- Constraints for table `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  ADD CONSTRAINT `tbl_instructor_ibfk_1` FOREIGN KEY (`instructor_program`) REFERENCES `tbl_category` (`workoutclass_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
