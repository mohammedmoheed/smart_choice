-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 06:32 PM
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
  `sr` bigint(100) UNSIGNED NOT NULL,
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
  `status` int(1) NOT NULL,
  `paint_emp_name` varchar(50) NOT NULL,
  `paint_type` varchar(50) NOT NULL,
  `pquantity` varchar(15) NOT NULL,
  `pheight` varchar(5) NOT NULL,
  `pseat` varchar(5) NOT NULL,
  `waist` varchar(5) NOT NULL,
  `thighs` varchar(5) NOT NULL,
  `bottom` varchar(5) NOT NULL,
  `fh` varchar(5) NOT NULL,
  `sh` varchar(5) NOT NULL,
  `pbh` varchar(5) NOT NULL,
  `kn` varchar(5) NOT NULL,
  `plates` varchar(5) NOT NULL,
  `pocket` varchar(5) NOT NULL,
  `prem` varchar(5) NOT NULL,
  `paint_image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sr`, `type`, `quantity`, `cust_name`, `del_date`, `vendor`, `emp_name`, `height`, `shoulder`, `chest`, `sleev`, `neck`, `bh`, `fix`, `stomach`, `seat`, `cuff`, `collar`, `rem`, `image`, `time`, `status`, `paint_emp_name`, `paint_type`, `pquantity`, `pheight`, `pseat`, `waist`, `thighs`, `bottom`, `fh`, `sh`, `pbh`, `kn`, `plates`, `pocket`, `prem`, `paint_image`) VALUES
(87, 'shirt,kurta', '1', 'ansari shahnawaz', '2023-01-20', 'saad', 'sameed', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'dress_img/IMG-20230105-WA0001.jpg', '2023-01-05 17:11:58.36212', 0, 'sameed', 'paint,pajama', '14', '15\r\n', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', 'paint_img/IMG-20230105-WA0002.jpg'),
(89, 'shirt,kurta,sherwani', '1', 'ansari shahnawaz', '2023-01-07', 'ansari shahnawaz', 'Ansari Shahbaz ', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'dress_img/', '2023-01-05 16:59:51.59613', 0, 'sameed', 'paint,pajama', '1', '14\r\n', '25', '1', '17', '18', '19', '20', '12', '22', '23', '24', '25', 'paint_img/');

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
  MODIFY `sr` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
