-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 11:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofbsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `airline_id` int(11) NOT NULL,
  `airline_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`airline_id`, `airline_name`) VALUES
(1, 'Vistara'),
(2, 'Air india'),
(3, 'Akasa'),
(4, 'SpiceJet'),
(5, 'Etihad Airways'),
(9, 'IndiGo'),
(10, 'Qatar Airways'),
(11, 'AirAsia'),
(12, 'Lufthansa'),
(13, 'Kingfisher'),
(14, 'Deccan charters');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(20) NOT NULL,
  `state` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`, `state`) VALUES
('Ahmedabad', 'Gujarat'),
('Banglore', 'Karnataka'),
('Belgaum', 'Karnataka'),
('Chennai', 'Tamil Nadu'),
('Goa', 'Goa'),
('Hyderabad', 'Telangana'),
('Jaipur', 'Rajasthan'),
('Kolkata', 'West Bengal'),
('Mumbai', 'Maharashtra'),
('Pune', 'Maharashtra'),
('Surat', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` int(11) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `seats_available` bigint(20) NOT NULL,
  `aeroplane_type` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `arrival`, `departure`, `Destination`, `source`, `seats_available`, `aeroplane_type`, `duration`, `Price`) VALUES
(1, '2022-06-30', '2022-06-30', 'Bangalore', 'Mumbai', 109, 'Airbus A220', '1', 175),
(2, '2022-07-05', '2022-07-05', 'Mumbai', 'Banglore', 109, 'Airbus A220', '1', 185),
(3, '2022-07-05', '2022-07-05', 'Banglore', 'Belgaum', 109, 'Airbus A220', '2', 205),
(4, '2022-07-05', '2022-07-05', 'Chennai', 'Banglore', 120, 'Airbus A330', '1', 155),
(5, '2022-07-05', '2022-07-05', 'Mumbai', 'Hyderabad', 120, 'Airbus A330', '3', 326),
(6, '2022-07-05', '2022-07-05', 'Hyderabad', 'Kolkata', 120, 'Airbus A330', '2', 285),
(7, '2022-07-05', '2022-07-05', 'Kolkata', 'Pune', 150, 'Airbus A350', '2', 265),
(8, '2022-07-06', '2022-07-05', 'Jaipur', 'Surat', 150, 'Airbus A350', '7', 615),
(9, '2022-07-05', '2022-07-05', 'Belgaum', 'Goa', 150, 'Airbus A350', '1', 155),
(10, '2022-07-06', '2022-07-06', 'Goa', 'Banglore', 248, 'Boeing 787', '2', 200),
(11, '2022-07-05', '2022-07-05', 'Goa', 'Kolkata', 248, 'Boeing 787', '1', 165),
(12, '2022-07-05', '2022-07-05', 'Belgaum', 'Jaipur', 248, 'Boeing 787', '2', 320),
(13, '2022-07-05', '2022-07-05', 'Surat', 'Mumbai', 215, 'Boeing 737 NG', '1', 110),
(14, '2022-07-05', '2022-07-05', 'Pune', 'Hyderabad', 215, 'Boeing 737 NG', '2', 195),
(15, '2022-07-05', '2022-07-05', 'Mumbai', 'Belgaum', 215, 'Boeing 767-300F', '2', 125);

-- --------------------------------------------------------

--
-- Table structure for table `flight_airline`
--

CREATE TABLE `flight_airline` (
  `flight_id` int(20) NOT NULL,
  `airline_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_airline`
--

INSERT INTO `flight_airline` (`flight_id`, `airline_id`) VALUES
(1, 1),
(2, 1),
(2, 3),
(2, 2),
(4, 14),
(9, 10),
(14, 10),
(11, 13),
(7, 12),
(1, 10),
(10, 13),
(14, 11),
(8, 3),
(2, 9),
(8, 12),
(7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `flight_cities`
--

CREATE TABLE `flight_cities` (
  `flight_id` int(20) NOT NULL,
  `city` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_cities`
--

INSERT INTO `flight_cities` (`flight_id`, `city`) VALUES
(1, 'Belgaum'),
(2, 'Banglore'),
(4, 'Ahmedabad'),
(9, 'Hyderabad'),
(10, 'Pune'),
(11, 'Kolkata'),
(12, 'Hyderabad'),
(12, 'Surat'),
(13, 'Goa'),
(14, 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_profile`
--

CREATE TABLE `passenger_profile` (
  `user_id` int(11) NOT NULL,
  `aadhar_no` int(20) NOT NULL,
  `mobile` varchar(110) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `Sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `passenger_profile`
--

INSERT INTO `passenger_profile` (`user_id`, `aadhar_no`, `mobile`, `f_name`, `l_name`, `Sex`) VALUES
(1, 1, '2147483647', 'Anshuk', 'Jirli', ''),
(2, 2, '2147483647', 'Kartik', 'Mastiholi', ''),
(3, 3, '2147483647', 'Rishab', 'Malalikar', ''),
(4, 4, '2147483647', 'Shubham', 'Reddy', ''),
(5, 2, '7854444411', 'Steven', 'Noronha', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_no` varchar(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `expiry_date` varchar(5) NOT NULL,
  `amount` int(11) NOT NULL,
  `airline_id` int(20) NOT NULL,
  `ticket_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_no`, `user_id`, `flight_id`, `expiry_date`, `amount`, `airline_id`, `ticket_id`) VALUES
('1010555677851111', 4, 2, '', 350, 1, 1),
('1111888889897778', 2, 3, '', 370, 2, 4),
('1400565800004478', 2, 8, '', 1230, 5, 5),
('1458799990001450', 3, 2, '', 185, 3, 3),
('4204558500014587', 1, 1, '', 205, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `class` varchar(3) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `flight_id`, `user_id`, `seat_no`, `class`, `Price`) VALUES
(55, 2, 1, '21A', 'bus', 185),
(56, 2, 1, '21A', 'bus', 185),
(57, 2, 1, '21A', 'bus', 185),
(69, 3, 4, '12A', 'B', 205),
(70, 2, 1, '11B', 'B', 185),
(71, 2, 1, '11B', 'B', 185);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Anshuk', 'anshuk@mail.com', 'anshuk123'),
(2, 'Kartik', 'kartik@mail.com', 'kartik123'),
(3, 'Rishab', 'rishab@mail.com', 'rishab123'),
(4, 'Shubham', 'Shubham@mail.com', 'shubham123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city`,`state`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`),
  ADD KEY `Price` (`Price`);

--
-- Indexes for table `flight_airline`
--
ALTER TABLE `flight_airline`
  ADD KEY `flight_id` (`flight_id`),
  ADD KEY `airline_id` (`airline_id`);

--
-- Indexes for table `flight_cities`
--
ALTER TABLE `flight_cities`
  ADD KEY `flight_id` (`flight_id`,`city`);

--
-- Indexes for table `passenger_profile`
--
ALTER TABLE `passenger_profile`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`card_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `flight_id` (`flight_id`),
  ADD KEY `airline_id` (`airline_id`,`ticket_id`),
  ADD KEY `amount` (`amount`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `flight_id` (`flight_id`),
  ADD KEY `Price` (`Price`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `passenger_profile`
--
ALTER TABLE `passenger_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_airline`
--
ALTER TABLE `flight_airline`
  ADD CONSTRAINT `flight_airline_ibfk_1` FOREIGN KEY (`airline_id`) REFERENCES `airline` (`airline_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `flight_airline_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`);

--
-- Constraints for table `flight_cities`
--
ALTER TABLE `flight_cities`
  ADD CONSTRAINT `flight_cities_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `flight_cities_ibfk_2` FOREIGN KEY (`city`) REFERENCES `cities` (`city`) ON DELETE CASCADE;

--
-- Constraints for table `passenger_profile`
--
ALTER TABLE `passenger_profile`
  ADD CONSTRAINT `passenger_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `passenger_profile` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
