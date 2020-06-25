-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 04:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup_record`
--

CREATE TABLE `signup_record` (
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postal_code` varchar(30) DEFAULT NULL,
  `size` varchar(300) DEFAULT NULL,
  `heard` varchar(100) DEFAULT NULL,
  `price` varchar(300) DEFAULT NULL,
  `inlineRadioOptions` varchar(100) DEFAULT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_record`
--

INSERT INTO `signup_record` (`first_name`, `last_name`, `email`, `phone_number`, `city`, `postal_code`, `size`, `heard`, `price`, `inlineRadioOptions`, `lastUpdated`) VALUES
('daniel', 'smile', 'dan@hotmail.com', '333-333-3333', 'btown', 'm1m1m1', 'hurr', 'hurr', 'hurr', 'NO', '2020-06-25 14:13:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
