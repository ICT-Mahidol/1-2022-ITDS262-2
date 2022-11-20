-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 01:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_ID` int(100) NOT NULL,
  `P_TYPE` enum('Hotel','Car','Flight') NOT NULL,
  `P_NAME` varchar(255) NOT NULL,
  `P_DETAIL` text NOT NULL DEFAULT 'Don\'t setting on mysql server.!!!',
  `P_IMAGES` text NOT NULL DEFAULT 'null.jpg',
  `P_PRICE` varchar(255) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_ID`, `P_TYPE`, `P_NAME`, `P_DETAIL`, `P_IMAGES`, `P_PRICE`) VALUES
(1, 'Hotel', 'Pattaya Hotel', 'พัทยา Hotel ชั้นนำแห่งประเทศไทยที่มีผู้คนที่เข้ามาใช้บริการมากที่สุด วิวสวยๆจากมุมตึก บอกเห็นป้าย พัทยา ซิตี้ อย่างสวยงาม', 'null.png', '100'),
(2, 'Hotel', 'U and me Hotel', 'ยู แอน มี เป็น Hotel ที่กำลังถูกจัดสร้างแถวนนทบุรี ถ.บางกรวย-ไทรน้อย', 'null.png', '100'),
(3, 'Hotel', 'Bangkok Hotel', 'กรุงเทพ Hotel ชั้นนำสำหรับสายเที่ยวในเมืองหลวงอย่าง กรุงเทพ เป็นที่สำหรับผู้คนที่อาศัยอยู่เขตกรุงเทพ', 'null.png', '100'),
(4, 'Hotel', 'Changmai Hotel', 'เชียงใหม่ Hotel ชั้นนำที่มองเห็นบรรยากาศในภูเขา หมอกจางๆ สวยงาม แถมกาแฟดีๆสุดๆ กินแล้วคายตายทันที', 'null.png', '100'),
(5, 'Hotel', 'Nonthaburi Hotel', 'นนทบุรี Hotel เป็นที่ยอดนิยมสำหรับผู้คนอาศัยอยู่ที่แถวนั้น แนะนำโดยยายหมียายมอย', 'null.png', '100'),
(6, 'Hotel', 'Chonburi Hotel', 'ชลบุรี ใครๆก็รู้เมืองแห่งฉลาม เป็นสถานที่ที่ผู้คนมักไปพักผ่อนไปกับทะเล ที่ชลบุรี', 'null.png', '100'),
(7, 'Hotel', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.png', '100'),
(8, 'Hotel', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.png', '100'),
(9, 'Hotel', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(10, 'Hotel', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(11, 'Hotel', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(12, 'Hotel', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(13, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(14, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(15, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(16, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(17, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(18, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(19, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(20, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(21, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(22, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(23, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100'),
(24, 'Car', '555', 'GTR R34 รถยุค90\'s ที่หลายๆคนใฝ่ฝันที่อยากจะขับมันและครอบครองมัน ใน ตอนนี้ ถูกนำมาให้เช่าแล้ว ใน ขณะนี้', 'null.jpg', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payment` varchar(16) NOT NULL,
  `payment_date` varchar(25) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `payment`, `payment_date`, `staff`, `status`, `create_at`) VALUES
(4, 'Amonchai Srichaichu', 'test@test.com', 'MTIzNDU2', '2312301230123402', '05/25', 'user', '0', '2022-11-20 11:12:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
