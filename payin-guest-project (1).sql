-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 05:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payin-guest-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('AdminGH', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(200) NOT NULL,
  `post_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `booking_approval` varchar(100) NOT NULL,
  `date_of_booking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `post_id`, `username`, `booking_approval`, `date_of_booking`) VALUES
(1699443444, 4, 'sanny', 'requested', '2023-11-08'),
(1699443445, 5, 'momo', 'checkout', '2023-11-08'),
(1699443447, 3, 'momo', 'approved', '2023-11-09'),
(1699443448, 1, 'momo', 'checkout', '2023-11-09'),
(1699443449, 654, 'momo', 'requested', '2023-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `chekin_checkout`
--

CREATE TABLE `chekin_checkout` (
  `ID` int(200) NOT NULL,
  `booking_id` int(200) NOT NULL,
  `checkin_status` varchar(100) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_status` varchar(150) NOT NULL,
  `checkout_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chekin_checkout`
--

INSERT INTO `chekin_checkout` (`ID`, `booking_id`, `checkin_status`, `checkin_date`, `checkout_status`, `checkout_date`) VALUES
(5, 1699443448, 'yes', '2023-11-11', 'yes', '2023-11-12'),
(6, 1699443445, 'yes', '2023-11-12', 'yes', '2023-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `guestregistation`
--

CREATE TABLE `guestregistation` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guestregistation`
--

INSERT INTO `guestregistation` (`name`, `email`, `phone`, `address`, `gender`, `username`, `password`) VALUES
('momojtaj', 'hogamari754@gmail.com', 1792542061, 'mirpur', 'female', 'momo', 'momo@2023'),
('shariar', 'shariarhosain131529@gmail.com', 1757525035, 'mirpur14', 'male', 'sanny', 'sanny#123'),
('shariar', 'dheke62772@hotmail.com', 1792542060, 'mirpur14', 'male', 'selina', 'selina@123');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(150) NOT NULL,
  `booking_id` int(200) NOT NULL,
  `checkin_checkout_id` int(200) NOT NULL,
  `guest_username` varchar(200) NOT NULL,
  `host_username` varchar(200) NOT NULL,
  `housenumber` varchar(100) NOT NULL,
  `number_of_room` int(150) NOT NULL,
  `rent` int(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `host_review` varchar(150) DEFAULT NULL,
  `guest_review` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `booking_id`, `checkin_checkout_id`, `guest_username`, `host_username`, `housenumber`, `number_of_room`, `rent`, `address`, `host_review`, `guest_review`) VALUES
(2, 1699443445, 6, 'momo', 'selina', '506', 2, 5600, 'mirpur14', 'nice', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `hostregistation`
--

CREATE TABLE `hostregistation` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostregistation`
--

INSERT INTO `hostregistation` (`name`, `email`, `phone`, `address`, `gender`, `username`, `password`) VALUES
('shariar', 'dheke62772@hotmail.com', 1757525035, 'mirpur13', 'male', 'sanny', 'sanny@2023'),
('selina', 'robin8363@outlook.com', 1757525034, 'mirpur14', 'female', 'selina', 'selina@2023');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `House_Number` varchar(150) NOT NULL,
  `Number_of_Rooms` varchar(100) NOT NULL,
  `Prafareble_Gender` varchar(100) NOT NULL,
  `Rent` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `username` varchar(150) NOT NULL,
  `Booking_Status` varchar(100) NOT NULL,
  `Date_of_Post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `House_Number`, `Number_of_Rooms`, `Prafareble_Gender`, `Rent`, `Address`, `username`, `Booking_Status`, `Date_of_Post`) VALUES
(1, '502', '1', 'female', '2500', 'Mirpur14,boubazar', 'selina', 'empty', '2023-11-05'),
(3, '406', '1', 'female', '2600', 'mirpur7', 'selina', 'booked', '2023-11-05'),
(4, '752', '2', 'both', '9000', 'mirpur7', 'sanny', 'booked', '2023-11-06'),
(5, '506', '2', 'female', '5600', 'mirpur14', 'selina', 'empty', '2023-11-05'),
(654, '758', '2', 'both', '2600', 'mirpur12', 'sanny', 'booked', '2023-11-09'),
(6550, '789', '3', 'both', '2000', 'mirpur14', 'selina', 'empty', '2023-11-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `chekin_checkout`
--
ALTER TABLE `chekin_checkout`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `guestregistation`
--
ALTER TABLE `guestregistation`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `checkin_checkout_id` (`checkin_checkout_id`),
  ADD KEY `guest_username` (`guest_username`),
  ADD KEY `host_username` (`host_username`);

--
-- Indexes for table `hostregistation`
--
ALTER TABLE `hostregistation`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1699443450;

--
-- AUTO_INCREMENT for table `chekin_checkout`
--
ALTER TABLE `chekin_checkout`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`username`) REFERENCES `guestregistation` (`username`);

--
-- Constraints for table `chekin_checkout`
--
ALTER TABLE `chekin_checkout`
  ADD CONSTRAINT `chekin_checkout_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`checkin_checkout_id`) REFERENCES `chekin_checkout` (`ID`),
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`guest_username`) REFERENCES `guestregistation` (`username`),
  ADD CONSTRAINT `history_ibfk_4` FOREIGN KEY (`host_username`) REFERENCES `hostregistation` (`username`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`username`) REFERENCES `hostregistation` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
