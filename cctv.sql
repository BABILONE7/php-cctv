-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 11:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cctv`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `c_id` int(10) NOT NULL COMMENT 'ไอดีกล้อง',
  `c_name` varchar(15) NOT NULL COMMENT 'ชื่อกล้อง',
  `c_ip` varchar(15) NOT NULL COMMENT 'ไอพีกล้อง',
  `c_port` int(10) NOT NULL COMMENT 'พอร์ตกล้อง',
  `c_brand` varchar(10) NOT NULL COMMENT 'ยี่ห้อ',
  `c_no` varchar(20) NOT NULL COMMENT 'รุ่น',
  `c_sn` varchar(20) NOT NULL COMMENT 'ซีเรียลนัมเบอร์',
  `c_tax` varchar(30) NOT NULL COMMENT 'เลขพัสดุ',
  `c_date` varchar(10) NOT NULL COMMENT 'วันที่ติดตั้ง',
  `lo_name_place` varchar(40) NOT NULL COMMENT 'ฃื่อสถานที่',
  `c_pic` varchar(120) NOT NULL COMMENT 'รูปภาพ',
  `c_note` varchar(250) DEFAULT NULL COMMENT 'หมายเหตุ',
  `c_status` varchar(15) NOT NULL COMMENT 'สถานะ',
  `c_import` date NOT NULL DEFAULT current_timestamp() COMMENT 'เวลาที่บันทึกข้อมูล',
  `c_import_year` year(4) NOT NULL DEFAULT current_timestamp() COMMENT 'ปี',
  `c_fix` varchar(20) NOT NULL COMMENT 'ส่งซ่อมล่าสุด',
  `c_finish` varchar(20) NOT NULL COMMENT 'ซ่อมเสร็จล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`c_id`, `c_name`, `c_ip`, `c_port`, `c_brand`, `c_no`, `c_sn`, `c_tax`, `c_date`, `lo_name_place`, `c_pic`, `c_note`, `c_status`, `c_import`, `c_import_year`, `c_fix`, `c_finish`) VALUES
(4444789, 'cam1', '192.354.2454', 8000, 'joji', '', 'หกด4ห5ด54หก1ด2', 'หกด4หก4212แอ', '04/28/2020', 'ช่องทาง จ.๑', 'wallmount_camera_64px.png', '', 'ใช้งานได้', '2020-04-28', 2020, '2020-04-30 15:32:13', '2020-04-30 15:38:42'),
(4444791, 'cam2', '192.468.2.5', 8000, 'joji', '', 'sdf54512154g', 'dsfgfd655g65', '04/30/2020', 'สวนน้ำจิตตระการ', 'bullet_camera_48px.png', '', 'ใช้งานได้', '2020-04-30', 2020, '2020-04-30 12:19:36', '2020-04-30 12:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `fixing`
--

CREATE TABLE `fixing` (
  `f_id` int(5) NOT NULL COMMENT 'รหัสกล้อง',
  `f_idnum` varchar(10) NOT NULL COMMENT 'หมายเลขกล้อง',
  `f_name` varchar(25) NOT NULL COMMENT 'ชื่อกล้อง',
  `f_ip` varchar(20) NOT NULL COMMENT 'ไอพี',
  `f_port` varchar(4) NOT NULL COMMENT 'port',
  `f_brand` varchar(20) NOT NULL COMMENT 'ยี่ห้อ',
  `f_no` varchar(20) NOT NULL COMMENT 'รุ่น',
  `f_sn` varchar(20) NOT NULL COMMENT 'Serial number',
  `f_tax` varchar(20) NOT NULL COMMENT 'เลขพัสดุ',
  `f_place` varchar(40) NOT NULL COMMENT 'สถานที่ติดตั้ง',
  `f_note` varchar(40) NOT NULL COMMENT 'อาการเสีย',
  `f_fix_place` varchar(50) NOT NULL COMMENT 'สถานที่ซ่อม',
  `f_import` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่เสีย',
  `f_import_year` year(4) DEFAULT current_timestamp() COMMENT 'ปีที่เสีย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fixing`
--

INSERT INTO `fixing` (`f_id`, `f_idnum`, `f_name`, `f_ip`, `f_port`, `f_brand`, `f_no`, `f_sn`, `f_tax`, `f_place`, `f_note`, `f_fix_place`, `f_import`, `f_import_year`) VALUES
(32, '4444789', 'cam1', '192.354.2454', '8000', 'joji', '', 'หกด4ห5ด54หก1ด2', 'หกด4หก4212แอ', 'ช่องทาง จ.๑', 'ชำรุดเสียหาย', 'ซ่อมเองที่บ้าน', '2020-04-30', 2020),
(33, '4444791', 'cam2', '192.468.2.5', '8000', 'joji', '', 'sdf54512154g', 'dsfgfd655g65', 'สวนน้ำจิตตระการ', 'ส่งเคลม', 'ส่งเคลมกับบริษัท', '2020-04-30', 2020),
(34, '4444789', 'cam1', '192.354.2454', '8000', 'joji', '', 'หกด4ห5ด54หก1ด2', 'หกด4หก4212แอ', 'ช่องทาง จ.๑', 'ชำรุดเสียหาย', 'ซ่อมเองที่บ้าน', '2020-04-30', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lo_id` int(10) NOT NULL COMMENT 'ไอดีสถานที่',
  `lo_name` varchar(60) NOT NULL COMMENT 'ชื่อสถานที่',
  `lo_pic` varchar(250) NOT NULL COMMENT 'รูปสถานที่',
  `lo_tkname` varchar(30) NOT NULL COMMENT 'ชื่อผู้รับผิดชอบ',
  `lo_tklast` varchar(20) NOT NULL COMMENT 'นามสกุลผู้ดูแล',
  `lo_tktel` varchar(15) NOT NULL COMMENT 'เบอร์ผู้ดูแล',
  `lo_tkline` varchar(10) NOT NULL COMMENT 'ไลน์ผู้ดูแล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lo_id`, `lo_name`, `lo_pic`, `lo_tkname`, `lo_tklast`, `lo_tktel`, `lo_tkline`) VALUES
(194, 'ช่องทาง จ.๑', '01.png', 'นาย ก', 'กกก', '(041) 458-7556', 'fff'),
(195, 'สวนน้ำจิตตระการ', '02.jpg', 'นาง ญ', 'ดดเ', '(095) 859-4855', 'ffrrtff'),
(198, 'อาคารอเนกประสงค์แสนเมือง', '155be96bd1f01bb0fbab609ac6a56d60.jpg', 'ggg', 'ggg', '(999) 999-9999', 'RRR'),
(199, 'สวนกล้วยไม้ โรงเรียนการบิน', '09.jpg', 'UUU', 'UUU', '(999) 999-9999', 'UUU'),
(200, 'ช่องทาง จ.๙', '05.jpg', 'EEE', 'EEE', '(999) 999-9999', 'TTT'),
(201, 'กองฝึกการบิน', '06.jpg', 'WWW', 'WWW', '(999) 999-9999', 'WWW'),
(202, 'จุดรักษาการณ์ที่3(หนองกร่าง)', '155be96bd1f01bb0fbab609ac6a56d60.jpg', 'YYY', 'YYY', '(999) 999-9999', 'OOO'),
(203, 'จุดรักษาการณ์ที่1(โพธิ์งาม)', '05.jpg', 'PPP', 'PPP', '(878) 889-8989', 'LLL'),
(204, 'เรือนรับรองที่ประทับ', '03.jpg', 'LLL', 'LLL', '(888) 888-8888', 'OOOO'),
(205, 'จุดรักษาการณ์ที่8(ทุ่งคอก)', '01.png', 'III', 'III', '(777) 777-7777', 'RET'),
(206, 'จุดรักษาการณ์ที่9(หมู่บ้านสวัสดิการ ทอ. โครงการ 1)', '11.jpg', 'TTT', 'TTT', '(898) 989-8997', 'PPP'),
(207, 'จุดรักษาการณ์ที่11(หน้า โรงพยาบาล จันทรุเบกษา)', '07.jpg', 'UUU', 'UUU', '(555) 555-5555', 'QWE'),
(208, 'จุดรักษาการณ์ที่11(หน้า โรงพยาบาล จันทรุเบกษา)', '07.jpg', 'UUU', 'UUU', '(555) 555-5555', 'QWE'),
(209, 'บก.รร.การบิน', '08.jpg', 'PPP', 'PPP', '(898) 998-9898', 'FFF');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(6) NOT NULL COMMENT 'ไอดี',
  `m_sername` varchar(20) NOT NULL COMMENT 'ชื่อจริง',
  `m_lastname` varchar(20) NOT NULL COMMENT 'นามสกุล',
  `m_work` varchar(50) NOT NULL COMMENT 'ตำแหน่งงาน',
  `m_pic` varchar(250) NOT NULL COMMENT 'รูปถ่าย',
  `m_tel` varchar(15) DEFAULT NULL COMMENT 'เบอร์โทร',
  `m_email` varchar(20) NOT NULL COMMENT 'อีเมล',
  `m_lineid` varchar(15) NOT NULL COMMENT 'ไลน์',
  `m_status` varchar(5) NOT NULL COMMENT 'สถานะสมาชิก',
  `m_iduser` varchar(15) NOT NULL COMMENT 'ไอดีเนม',
  `m_password` varchar(20) NOT NULL COMMENT 'รหัสผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_sername`, `m_lastname`, `m_work`, `m_pic`, `m_tel`, `m_email`, `m_lineid`, `m_status`, `m_iduser`, `m_password`) VALUES
(21, 'นาย ชชgg', 'ชั่ย', 'รอง ผบ.ทอ', '69262470_2335472980034577_4941237085227974656_n.jpg', '(023) 698-7455', 'ddd@gmail.com', 'ggrtt', 'admin', 'aaa', 'aaa'),
(22, 'คณิศasdsd', 'ทนานนท์', 'CEO', 'icons8_user_40px.png', '(454) 122-2222', 'zxadee44', '4587', 'user', 'ddd', 'ddd'),
(26, 'kns', 'tnn', 'student', '67925793_10157498030494100_305442560669646848_n.jpg', '(025) 699-8887', 'zxadee44@gmail.com', 'ffgghh', 'admin', 'ggg', 'ggg'),
(27, 'นาง จ', 'สสสสสสสส', 'หัวหน้าฝ่ายบำรุง', '75307988_535855530480715_7297038290740314112_n.jpg', '(125) 888-8888', 'fafa@gmail.com', 'ddret', 'admin', 'rrrr', 'rrrr'),
(28, 'นาย คณิศร ', 'ทนานนท์', 'นักศึกษา', '84627302_107899930777591_3971323978189897728_n.jpg', '(064) 521-2397', 'zxadee44@gmail.com', 'zxatoey', 'admin', 'zxatoey', 'zxa21086');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `fixing`
--
ALTER TABLE `fixing`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีกล้อง', AUTO_INCREMENT=4444792;

--
-- AUTO_INCREMENT for table `fixing`
--
ALTER TABLE `fixing`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกล้อง', AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lo_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีสถานที่', AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
