-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 06:49 PM
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
(3, 'Gulam Husain Chacha', '98986898989', 'Lucknow', '150', '2022-12-28 12:07:07.728293'),
(4, 'qadeer khan', '702688556', 'Mysore', '0', '2022-12-31 16:21:47.467232');

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
(7, 'Ansari Shahbaz ', '8149205281', 'malegaon', 0, '2022-12-29 16:25:50'),
(8, 'Shahzad', '70248156', 'Malegaon', 0, '2023-01-03 16:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sr` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(80) NOT NULL,
  `quantity` varchar(20) NOT NULL,
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
  `image` varchar(400) NOT NULL,
  `time` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sr`, `type`, `quantity`, `cust_name`, `del_date`, `vendor`, `emp_name`, `height`, `shoulder`, `chest`, `sleev`, `neck`, `bh`, `fix`, `stomach`, `seat`, `cuff`, `collar`, `rem`, `image`, `time`, `status`) VALUES
(6, '', '', 'ansari shahnawaz', '20/11/1998', 'zara-colaba', '', '25', '15', '15', '22', '15', '20', '36', '', '37', '3', '15', 'no pattern', '', '2023-01-03 16:43:16.35346', 0),
(8, '', '', 'ansari shahnawaz', '20/11/1998', '1', '', '25', '15', '15', '22', '15', '20', '36', '35', '37', '3', '15', 'no pattern', '', '2023-01-03 16:43:04.38859', 0),
(9, '', '', 'ansari shahnawaz', '20/11/1998', 'maaz', '', '25', '15', '15', '22', '15', '20', '36', '35', '37', '3', '15', 'yellow button', '', '2023-01-03 16:43:02.31550', 0),
(10, '', '', 'Irfan Khan Quddus Khan Dehelvi', '20/11/1998', 'saad', '', '25', '15', '15', '22', '15', '20', '36', '35', '37', '3', '15', 'yellow button', '', '2022-12-28 07:24:16.90324', 0),
(15, '', '', 'Gulam Husain Chacha', '29/12/2022', 'kashif', '', '125', '156', '15', '135', '156', '1586', '256', '1256', '5864', '584', '5', 'yellow button', '', '2022-12-29 08:58:56.67620', 0),
(16, 'shirt', '', 'ansari shahnawaz', '25/12', 'saad', '', '20', '158', '6', '55', '555', '887', '78', '782', '568', '255', '5', 'not', '', '2022-12-29 12:04:13.42398', 0),
(17, 'shirt', '', 'ansari shahnawaz', '25/12', 'saad', '', '20', '158', '6', '55', '555', '887', '78', '782', '568', '5', '5', 'not', '', '2023-01-03 06:29:03.25220', 0),
(18, 'shirt', '', 'Gulam Husain Chacha', '2022-12-29', 'kashif', '', '20', '158', '6', '55', '555', '887', '78', '782', '568', '255', '5', 'not', '', '2023-01-03 14:15:26.29113', 0),
(19, 'shirt', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-01', 'ansari shahnawaz', 'saud', '20', '11', '20', '21', '31', '25', '64', '25', '26', '25', '11', '24', '', '2023-01-03 14:15:34.36012', 0),
(20, 'shirt', '', 'qadeer khan', '2022-12-31', 'SD mens wear', 'Ansari Shahbaz ', '20', '158', '6', '55', '555', '887', '78', '782', '568', '255', '5', 'not', '', '2023-01-03 06:31:14.34252', 0),
(21, 'shirt', '', 'ansari shahnawaz', '2022-12-17', 'maaz', 'Ansari Shahbaz ', '20', '25', '230', '5', '55', '5', '5', '5', '5', '5', '5', '5', '', '2022-12-31 16:26:29.11657', 0),
(22, 'shirt', '', 'ansari shahnawaz', '2023-01-04', 'kashif', 'Ansari Shahbaz ', '20', '158', '230', '55', '555', '887', '78', '782', '568', '5', '5', 'not', '', '2023-01-03 06:16:19.54754', 0),
(23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00.00000', 0),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-01-03 06:25:58.66087', 0),
(25, 'shirt', '', 'qadeer khan', '2023-01-05', 'kashif', 'sameed', '20', '25', '6', '55', '55', '887', '5', '5', '5', '5', '5', 'not', '', '2023-01-03 06:41:04.30233', 0),
(26, 'shirt', '', 'ansari shahnawaz', '2023-01-13', 'saad', 'sameed', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '2023-01-03 06:54:30.53790', 0),
(27, 'shirt', '', 'select', '', 'select', 'select', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-01-03 08:05:33.02985', 0),
(28, 'shirt', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-19', 'saad', 'sameed', '20', '11', '25', '4585', '25', '256', '25', '625', '5', '25', '25', '5', '', '2023-01-03 09:39:10.84461', 0),
(29, 'shirt', '', 'select', '', 'select', 'select', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-01-03 13:22:50.08007', 0),
(30, '', '', 'qadeer khan', '2023-01-28', 'maaz', 'sameed', '25', '13', '32', '25', '15', '24', '26', '265', '2', '25', '25', '25', '', '2023-01-03 13:41:46.24002', 0),
(31, '', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-15', 'SD mens wear', 'Ansari Shahbaz ', '2', '3', '4', '5', '6', '7', '8', '9', '1', '11', '12', '13', '', '2023-01-03 13:44:31.71876', 0),
(32, 'shirt,kurta,sherwani,safari', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-07', 'kashif', 'saud', '25', '11', '32', '30', '18', '24', '23', '18', '25', '26', '23', '5', '', '2023-01-03 13:46:06.14507', 0),
(33, 'shirt,kurta', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-06', 'saad', 'sameed', '2', '3', '', '', '', '', '', '', '', '', '', '', 'dress_img/adhar.jpg', '2023-01-03 14:43:06.36951', 0),
(34, 'shirt', '', 'ansari shahnawaz', '2023-01-04', 'saad', 'sameed', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '', '2023-01-03 15:41:14.79250', 0),
(35, 'shirt', '', 'ansari shahnawaz', '2022-12-31', 'ansari shahnawaz', 'saud', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '5', '1', '', '2023-01-03 16:22:23.80713', 0),
(36, 'shirt', '', 'qadeer khan', '2023-01-21', 'kashif', 'Ansari Shahbaz ', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '21', '5', '', '2023-01-03 16:26:11.71986', 0),
(37, 'shirt', '', 'Irfan Khan Quddus Khan Dehelvi', '1987-11-20', 'maaz', 'saud', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '', '2023-01-03 16:33:11.12494', 0),
(38, 'shirt', '', 'Irfan Khan Quddus Khan Dehelvi', '1987-11-20', 'maaz', 'saud', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '', '2023-01-03 16:33:11.12762', 0),
(39, 'shirt,kurta', '', 'ansari shahnawaz', '2006-11-20', 'maaz', 'sameed', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '', '2023-01-03 16:38:08.02577', 0),
(41, 'shirt,kurta,sherwani', '', 'ansari shahnawaz', '2023-02-03', 'saad', 'sameed', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '', '2023-01-03 16:39:29.45656', 0),
(42, 'shirt,kurta,sherwani', '', 'ansari shahnawaz', '2023-02-03', 'saad', 'sameed', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '', '2023-01-03 16:39:29.45813', 0),
(43, 'shirt,kurta,sherwani', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-11-20', 'maaz', 'sameed', '1', '2', '3', '4', '5', '6', '87', '8', '9', '10', '11', '25', '', '2023-01-03 16:40:29.17891', 0),
(44, 'shirt,kurta,sherwani', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-11-20', 'maaz', 'sameed', '1', '2', '3', '4', '5', '6', '87', '8', '9', '10', '11', '25', '', '2023-01-03 16:40:29.18234', 0),
(45, 'shirt,kurta,sherwani', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-22', 'kashif', 'Shahzad', '1', '12', '3', '65', '4', '5', '6', '8', '6', '6', '6', '25', '', '2023-01-03 16:47:51.51437', 0),
(46, 'shirt,kurta,sherwani', '', 'Irfan Khan Quddus Khan Dehelvi', '2023-01-22', 'kashif', 'Shahzad', '1', '12', '3', '65', '4', '5', '6', '8', '6', '6', '6', '25', '', '2023-01-03 16:48:10.36440', 0),
(47, 'shirt,kurta,sherwani', '4', 'ansari shahnawaz', '2022-12-30', 'saad', 'Shahzad', '1', '2', '3', '4', '5', '', '', '', '', '', '', '', '', '2023-01-03 16:53:15.47561', 0),
(48, 'shirt,kurta,sherwani', '4', 'ansari shahnawaz', '2022-12-30', 'saad', 'Shahzad', '1', '2', '3', '4', '5', '', '', '', '', '', '', '', '', '2023-01-03 16:53:15.47775', 0),
(49, 'shirt,kurta', '2', 'Irfan Khan Quddus Khan Dehelvi', '2033-11-20', 'kashif', 'Shahzad', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 'dress_img/Haseeb pic.jpg', '2023-01-03 16:58:13.59045', 0),
(50, 'shirt,kurta', '2', 'Irfan Khan Quddus Khan Dehelvi', '2033-11-20', 'kashif', 'Shahzad', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 'dress_img/Haseeb pic.jpg', '2023-01-03 16:58:13.59300', 0),
(51, 'shirt,kurta', '2', 'ansari shahnawaz', '2023-11-20', 'saad', 'Shahzad', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 'dress_img/2.png', '2023-01-03 17:01:40.23211', 0),
(52, 'shirt,kurta', '2', 'ansari shahnawaz', '2023-11-20', 'saad', 'Shahzad', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 'dress_img/2.png', '2023-01-03 17:01:40.23507', 0);

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
(10, 'ansari shahnawaz', '7020481235', 'Malegaon', '2022-12-27 16:42:39'),
(11, 'SD mens wear', '720486875', 'Malegaon', '2022-12-31 16:22:24');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
