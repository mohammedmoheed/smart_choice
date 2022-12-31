-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 07:32 AM
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
-- Database: `smartchoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_name`, `mobile`, `city`, `payment`, `time`) VALUES
(1, 'ansari shahnawaz', '7020481235', 'malegaon', '0', '0000-00-00 00:00:00.000000'),
(2, 'Irfan Khan Quddus Khan Dehelvi', '95766854785', 'Delhi ', '0', '2022-12-28 07:17:25.655681'),
(3, 'Gulam Husain Chacha', '98986898989', 'Lucknow', '150', '2022-12-28 12:07:07.728293');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(191) NOT NULL,
  `mobile` varchar(21) NOT NULL,
  `city` varchar(191) NOT NULL,
  `payment` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `mobile`, `city`, `payment`, `time`) VALUES
(2, 'sameed', '134584531', 'malegaon', 1230, '2022-12-22 09:57:44'),
(3, 'saud', '15314564', 'Malegaon', 1000, '2022-12-22 18:24:50'),
(7, 'Ansari Shahbaz ', '8149205281', 'malegaon', 0, '2022-12-29 16:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sr` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(15) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `del_date` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `emp_name` varchar(32) NOT NULL,
  `height` varchar(15) NOT NULL,
  `shoulder` varchar(15) NOT NULL,
  `chest` varchar(15) NOT NULL,
  `sleev` varchar(15) NOT NULL,
  `neck` varchar(15) NOT NULL,
  `bh` varchar(15) NOT NULL,
  `fix` varchar(15) NOT NULL,
  `stomach` varchar(15) NOT NULL,
  `seat` varchar(15) NOT NULL,
  `cuff` varchar(15) NOT NULL,
  `collar` varchar(15) NOT NULL,
  `rem` varchar(255) NOT NULL,
  `time` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sr`, `type`, `cust_name`, `del_date`, `vendor`, `emp_name`, `height`, `shoulder`, `chest`, `sleev`, `neck`, `bh`, `fix`, `stomach`, `seat`, `cuff`, `collar`, `rem`, `time`) VALUES
(6, '', 'ansari shahnawaz', '20/11/1998', 'zara-colaba', '', '25', '15', '15', '22', '15', '20', '36', '', '37', '3', '15', 'no pattern', '2022-12-27 11:55:28.15901'),
(8, '', 'ansari shahnawaz', '20/11/1998', '1', '', '25', '15', '15', '22', '15', '20', '36', '35', '37', '3', '15', 'no pattern', '2022-12-27 16:15:15.04004'),
(9, '', 'ansari shahnawaz', '20/11/1998', 'maaz', '', '25', '15', '15', '22', '15', '20', '36', '35', '37', '3', '15', 'yellow button', '2022-12-27 16:20:16.90106'),
(10, '', 'Irfan Khan Quddus Khan Dehelvi', '20/11/1998', 'saad', '', '25', '15', '15', '22', '15', '20', '36', '35', '37', '3', '15', 'yellow button', '2022-12-28 07:24:16.90324'),
(15, '', 'Gulam Husain Chacha', '29/12/2022', 'kashif', '', '125', '156', '15', '135', '156', '1586', '256', '1256', '5864', '584', '5', 'yellow button', '2022-12-29 08:58:56.67620'),
(16, 'shirt', 'ansari shahnawaz', '25/12', 'saad', '', '20', '158', '6', '55', '555', '887', '78', '782', '568', '255', '5', 'not', '2022-12-29 12:04:13.42398'),
(17, 'shirt', 'ansari shahnawaz', '25/12', 'saad', '', '20', '158', '6', '55', '555', '887', '78', '782', '568', '5', '5', 'not', '2022-12-29 15:39:26.88808'),
(18, 'shirt', 'Gulam Husain Chacha', '2022-12-29', 'kashif', '', '20', '158', '6', '55', '555', '887', '78', '782', '568', '255', '5', 'not', '2022-12-29 15:57:25.12130'),
(19, 'shirt', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-01', 'ansari shahnawaz', 'saud', '20', '11', '20', '21', '31', '25', '64', '25', '26', '25', '11', '24', '2022-12-29 16:13:22.77170');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `sr` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`sr`, `name`) VALUES
(1, 'sanu'),
(2, 'sanu'),
(3, 'sanu'),
(4, 'shahnawaz2');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `ven_name` varchar(191) NOT NULL,
  `mobile` varchar(21) NOT NULL,
  `city` varchar(191) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `ven_name`, `mobile`, `city`, `time`) VALUES
(1, 'saad', '1234567', 'malegaon', '2022-12-24 10:59:28'),
(2, 'maaz', '9546793', 'male', '2022-12-24 10:59:28'),
(3, 'kashif', '13489745', 'malegaon', '2022-12-24 10:59:28'),
(10, 'ansari shahnawaz', '7020481235', 'Malegaon', '2022-12-27 16:42:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `sr` (`sr`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD UNIQUE KEY `sr` (`sr`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
