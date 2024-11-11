-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 11 พ.ย. 2024 เมื่อ 01:57 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_delivery`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `img`, `firstname`, `surname`) VALUES
(6, 'admin', '$2y$10$xSrOqZxmxmYHuA./m.3gBeLvpULdSwp.ZkPImQiR6nPaSC1wqtCzy', '1513901774.png', 'Pitinai', 'chainaras');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `food`
--

CREATE TABLE `food` (
  `ID` int(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `res_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `food`
--

INSERT INTO `food` (`ID`, `foodname`, `img`, `price`, `type`, `res_id`) VALUES
(1, 'น้ำมะนาว11', '1131650697.jpg', 5011, 'อาหารตามสั่ง', '6'),
(2, ' ชานมไข่มุก', '288538544.jpg', 600, 'เครื่องดื่ม', '6');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `food_type`
--

CREATE TABLE `food_type` (
  `ID` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `res_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `food_type`
--

INSERT INTO `food_type` (`ID`, `type`, `img`, `res_id`) VALUES
(1, 'อาหารตามสั่ง', '1382801391.png', 6),
(2, 'เครื่องดื่ม', '2130730604.jpg', 6);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `restaurant`
--

CREATE TABLE `restaurant` (
  `ID` int(255) NOT NULL,
  `resname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `restaurant`
--

INSERT INTO `restaurant` (`ID`, `resname`, `firstname`, `surname`, `email`, `password`, `img`, `location`, `phone`, `type`, `status`) VALUES
(6, 'ร้านเจ๊จูน', 'เจ๊', 'จูน', 'jejoon@gmail.com', '1234', '1361424473.jpg', '123 ต.บ่อเป็ด อ.นครวัด จ.พระนครอโยธยา', '09231425527', 'อาหารตามสั่ง', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `restype`
--

CREATE TABLE `restype` (
  `ID` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `restype`
--

INSERT INTO `restype` (`ID`, `type`, `img`) VALUES
(1, 'อาหารตามสั่ง', '363687271.png'),
(2, 'ของหวาน', '249265059.jpg');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `rider`
--

CREATE TABLE `rider` (
  `ID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `rider`
--

INSERT INTO `rider` (`ID`, `firstname`, `surname`, `email`, `password`, `img`, `location`, `phone`, `status`) VALUES
(1, 'ระพีภัทร', 'แก้วไม่สุก', 'rider@gmail.com', '$2y$10$c23VfFK4h00rfUTSOpCUYOdspprZ8H0JJhwIAK15uC3t.DRJhniP.', '1581545895.png', '145/26 ตลาดปลา อ.นครเหนือ จ.พระนครอโยธยา', '099741184', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`ID`, `firstname`, `surname`, `email`, `password`, `img`, `location`, `phone`, `status`) VALUES
(1, 'ก้องกาย', 'วงศ์มอญ', 'Kongkuy@gmail.com', '$2y$10$LU1Us3VBCJFeWoas0bXeM.onbNKcH9jrWvRFVdQPAzbl4cVSPcuvO', '1881240505.png', '123 ต.บ่อเป็ด อ.นครวัด จ.พระนครอโยธยา', '0926079113', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `restype`
--
ALTER TABLE `restype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restype`
--
ALTER TABLE `restype`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
