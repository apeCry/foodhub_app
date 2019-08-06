-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 08:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `un` varchar(50) DEFAULT NULL,
  `ps` text NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `verification_key` varchar(250) DEFAULT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `un`, `ps`, `email`, `verification_key`, `is_email_verified`) VALUES
(1, 'admin', 'a123', '836653179@qq.com', NULL, 'yes'),
(10, '555', 'a763d4c9159896cebac90c9733fd62e784325e34dd911c6c61b91b7907e1927233d061a53ff4d93945c4d0b3e9494e67aac7e7b3bdf18390c2484ad04e2545b3W4TROnCOGQZmfGsWxcSNu4dTkxqyElUOaxVJ3u8WXDI=', 'ntstatus0xff@gmail.com', '7c321c4864fe37a868a2c11b7443ba5a', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `order_booking`
--

CREATE TABLE `order_booking` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mno` varchar(20) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_booking`
--

INSERT INTO `order_booking` (`id`, `cname`, `address`, `city`, `email`, `mno`, `pname`, `price`, `type`) VALUES
(1, 'sss', 'unit 26/87 scott road', 'Herston', 'ntstatus0xff@gmail.com', '426824126', 'rice', '18', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(2, 'rice', '20'),
(3, 'shushi', '24'),
(4, 'dry noodle', '19'),
(5, 'fish', '78');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_booking`
--
ALTER TABLE `order_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_booking`
--
ALTER TABLE `order_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
