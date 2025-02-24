-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 09:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old`
--

-- --------------------------------------------------------

--
-- Table structure for table `act`
--

CREATE TABLE `act` (
  `act_id` int(11) NOT NULL,
  `act_img` varchar(500) NOT NULL,
  `act_name` varchar(50) NOT NULL,
  `act_description` varchar(1000) NOT NULL,
  `act_location` varchar(50) NOT NULL,
  `act_date` datetime NOT NULL,
  `act_count` int(11) NOT NULL DEFAULT 0,
  `act_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act`
--

INSERT INTO `act` (`act_id`, `act_img`, `act_name`, `act_description`, `act_location`, `act_date`, `act_count`, `act_type`) VALUES
(2, 'newscms_thaihealth_c_abijksvwy489.jpg', 'กิจกรรมสำหรับเด็กปฐมวัย', 'กิจกรรมที่เหมาะกับเด็กวัย 2-3 ปีขึ้นไป เพื่อพัฒนากล้ามเนื้อได้สมวัย เป็นสิ่งที่ผู้ปกครองควรให้ความสำคัญ โดยกิจกรรมดังต่อไปนี้จะเป็นตัวอย่างกิจกรรมที่เหมาะสมกับกับวัย และช่วยเสริมพัฒนาการ ใช้หลักการให้สามารถนำไปใช้ได้จริง สอดคล้องกับบริบท สะดวก ง่าย และมีค่าใช้จ่ายน้อย เหมาะสำหรับผู้ปกครองที่ต้องการจ', 'สวนสาธารณะประจำอำเภอ', '2022-09-13 16:30:00', 3, 'ออกกำลัง'),
(3, 'coverold2.jpg', 'สร้างคุณภาพชีวิตให้ผู้สูงอายุด้วยกิจกรรมนันทนาการ', 'พัฒนาทางร่างกาย จิตใจ อารมณ์ สติปัญญาและสังคม  รวมถึงการสร้างความผ่อนคลาย” เป็นข้อดีของการจัดกิจกรรมนันทนาการสำหรับผู้สูงอายุ  การนันทนาการสำหรับผู้สูงอายุ เป็นกิจกรรมยามว่างเพื่อการพักผ่อนหย่อนใจหรือความบันเทิง เพื่อให้มีคุณภาพชีวิตที่ดีขึ้นทั้งร่างกายและจิตใจ', 'สวนสาธารณะประจำอำเภอ', '2022-03-08 17:00:00', 2, 'นันทนาการ'),
(4, 'activitytest1.jpg', 'เชิญชวน ประกวดคลิป TikTok เป็นหนึ่ง ไม่พึ่งยา', 'คณะเทคโนโลยีสื่อสารมวลชน มหาวิทยาลัยเทคโนโลยีราชมงคล (มทร.) พระนคร ร่วมกับ บริษัทสิงห์ คอร์เปอเรชั่น จำกัด และบริษัท พาร์ทเนอร์ชิพ เซอร์วิส เซ็นเตอร์ แอนด์ แมนเนจเมนท์ จำกัด จัดการประกวด TikTok หัวข้อ “เป็นหนึ่ง ไม่พึ่งยา” โดยเปิดรับนักเรียนระดับมัธยมศึกษาตอนปลาย หรือเทียบเท่า รวมทีม ๆ ละ 1-3 คน สร้างสรรค์คลิป TiKTok หัวข้อ “เป็นหนึ่ง ไม่พึ่งยา” ความยาวไม่เกิน 60 วินาที ในโครงการประกวดสื่อ To Be No. 1 ชิงถ้วยประทานทูลกระหม่อมหญิงอุบลรัตนราชกัญญา สิริวัฒนาพรรณวดี ครั้งที่ 13 พร้อมทุนการศึกษามูลค่ากว่า 50,000 บาท และใบประกาศนียบัตร เปิดรับสมัครและส่งผลงานได้ตั้งแต่วันที่ 15 พฤศจิกายน – 23 ธันวาคม 2565 สมัครและส่งผลงานที่ลิงก์ https://shorturl.asia/w1BAZ และตัดสินผลการประกวดรอบชิงชนะเลิศวันที่ 18 มกราคม 2566 ในงานวันสถาปนามหาวิทยาลัย มทร.พระนคร', 'คณะเทคโนโลยีสื่อสารมวลชน มหาวิทยาลัยเทคโนโลยีราชมง', '2022-03-08 10:00:00', 2, 'นันทนาการ'),
(8, 'Screenshot 2023-09-29 145211.png', 'dsad', 'dsad', 'dsad', '2023-10-21 18:54:00', 1, 'ออกกำลัง'),
(9, 'Screenshot 2023-10-25 115815.png', 'dsad', 'dsasad', 'dsad', '2023-10-24 18:05:00', 1, 'นันทนาการ');

-- --------------------------------------------------------

--
-- Table structure for table `act_register`
--

CREATE TABLE `act_register` (
  `reg_id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  `reg_phone` varchar(10) NOT NULL,
  `act_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act_register`
--

INSERT INTO `act_register` (`reg_id`, `reg_date`, `reg_name`, `reg_phone`, `act_id`, `u_id`) VALUES
(10, '2023-09-16 15:16:22', 'user1', '0999999999', 2, 1),
(13, '2023-09-16 15:22:00', '1231231', '0999999999', 3, 2),
(21, '2023-10-05 02:49:21', 'aa', '5555555555', 2, 6),
(22, '2023-10-05 02:54:34', 'aa', '5555555555', 4, 6),
(28, '2023-10-19 15:44:00', 'aa', '5555555554', 3, 6),
(64, '2023-10-28 19:55:00', 'pp', '5555555555', 3, 7),
(69, '2023-10-25 10:36:09', 'aa', '5555555555', 8, 6),
(76, '2023-10-25 13:35:03', 'ss', '5555555555', 4, 7),
(77, '2023-11-05 12:01:17', 'bbb', '5555555554', 9, 20);

-- --------------------------------------------------------

--
-- Table structure for table `act_type`
--

CREATE TABLE `act_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act_type`
--

INSERT INTO `act_type` (`type_id`, `type_name`) VALUES
(1, 'ออกกำลัง'),
(2, 'นันทนาการ'),
(7, 'dsad');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `c_content` text NOT NULL,
  `n_id` int(11) NOT NULL,
  `c_sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `c_content`, `n_id`, `c_sender`) VALUES
(3, 'asdasd', 1, 'user1'),
(4, '5', 2, 'ss'),
(5, 'asdasd', 1, 'user1'),
(6, 'a', 1, 'ss'),
(7, 'ว้าววววววว', 1, 'bbb');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `in_id` int(11) NOT NULL,
  `in_chat` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `u_id` int(11) NOT NULL,
  `in_date` datetime NOT NULL,
  `in_name` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`in_id`, `in_chat`, `u_id`, `in_date`, `in_name`) VALUES
(1, 'kkdf', 0, '0000-00-00 00:00:00', ''),
(2, 'jgvhyhf', 0, '0000-00-00 00:00:00', ''),
(3, '', 0, '2023-11-05 09:38:51', ''),
(4, '', 0, '2023-11-05 09:39:20', ''),
(5, '555', 0, '2023-11-05 09:40:03', ''),
(6, '555', 0, '2023-11-05 09:41:52', ''),
(7, '55555', 0, '2023-11-05 09:42:02', ''),
(8, '55555', 0, '2023-11-05 09:42:40', ''),
(9, '567', 0, '2023-11-05 09:42:49', ''),
(10, '123', 0, '2023-11-05 09:44:22', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `u_Fname` varchar(100) NOT NULL,
  `u_Lname` varchar(100) NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_address` varchar(1000) NOT NULL,
  `u_gender` enum('ชาย','หญิง','อื่นๆ') NOT NULL,
  `u_age` int(3) NOT NULL,
  `u_level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`u_id`, `username`, `password`, `u_Fname`, `u_Lname`, `u_phone`, `u_address`, `u_gender`, `u_age`, `u_level`) VALUES
(1, 'user1', 'user1', 'user1', 'user1', '0877888778', '55/5 ม.5 ต.เข้าห้า อ.หนองห้า จ.เพชรห้า', 'ชาย', 55, 'user'),
(2, 'admin1', 'admin1', 'admin1', 'admin1', 'sd', 'sd', 'ชาย', 55, 'admin'),
(5, 'user1', 'user1', 'user1', 'user1', '0899988989', '', 'ชาย', 55, 'user'),
(7, 'ss', 'ss', 'ss', 'ss', '5555555555', '', 'ชาย', 55, 'admin'),
(13, 'cc', 'cc', 'cc', 'cc', '', '', 'ชาย', 55, 'user'),
(14, 'mm', 'mm', 'mm', 'mm', '', '', 'ชาย', 55, 'user'),
(20, 'tee', '123456', 'bbb', 'aaa', '5555555554', '12345', 'ชาย', 55, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_img` varchar(500) NOT NULL,
  `n_name` varchar(100) NOT NULL,
  `n_description` varchar(1000) NOT NULL,
  `n_date` datetime NOT NULL,
  `n_view` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_img`, `n_name`, `n_description`, `n_date`, `n_view`) VALUES
(1, '317465946_512992210850904_5345234658083713740_n.jpg', 'บริการฉีดวัคซีน Covid-19 เดือน ธันวาคม 2565', '\"บริการฉีดวัคซีน Covid-19 เดือน ธันวาคม 2565\r\nทุกวันอังคาร เวลา 8.30-11.30 น.\r\nโถงหน้าห้องประชุมชั้น 10 อาคารสนับสนุนบริการพร้อมที่จอดรถ โรงพยาบาลหัวหิน\r\n** กรุณาเตรียม บัตรประชาชน หรือสูติบัตร หรือพาสปอร์ต พร้อมประวัติการฉีดวัคซีนมาด้วยเพื่อความสะดวกรวดเร็วในการเข้ารับบริการ\r\n******************************************\r\nCovid 19 vaccine Walk in on December 2022\r\nEvery Tuesday 8.30 A.M.to 11.30 A.M. at 10th floor parking building Huahin hospital\"', '2022-11-29 11:00:00', 365),
(2, 'ปกข่าว4คำ-สีขาว-Edit-Recovered-Recovered-Recovered.jpg', 'กรมอุตุนิยมวิทยา ประกาศเตือนฉบับ 6 เริ่มวันนี้ อุณหภูมิ ลดฮวบ 8 องศา ถึง 20 ธ.ค.นี้', 'กรมอุตุนิยมวิทยา ประกาศเตือนฉบับ 6 เริ่มวันนี้ อุณหภูมิ เหนือ-อีสาน ลดฮวบ 6-8 องศา ด้าน 14 จังหวัดภาคใต้ ฝนถล่มหนัก แนะระวังน้ำท่วม เมื่อเวลา 05.00 น. วันที่ 17 ธ.ค.65 กรมอุตุนิยมวิทยา ประกาศกรมอุตุนิยมวิทยา เรื่อง อากาศหนาวเย็นบริเวณประเทศไทยตอนบน และคลื่นลมแรงบริเวณอ่าวไทย ฉบับที่ 6 (352/2565) (มีผลกระทบตั้งแต่วันที่ 17 – 20 ธันวาคม 2565) ความว่า ในช่วงวันที่ 17-20 ธันวาคม 2565 บริเวณความกดอากาศสูงหรือมวลอากาศเย็นกำลังแรงอีกระลอกจากประเทศจีนจะแผ่เสริมลงมาปกคลุมประเทศไทยตอนบน ทำให้ประเทศไทยตอนบนมีอากาศเย็นถึงหนาว และอุณหภูมิจะลดลงกับมีลมแรง', '2022-06-21 12:14:42', 31),
(3, 'เว็บรีบเลี้ยว.jpg', 'รีบเลี้ยวเข้าปั๊มด่วน! พรุ่งนี้น้ำมันขึ้นอีกแล้ว 30 สตางค์/ลิตร เว้นดีเซลคงเดิม', '\"เย็นนี้เลี้ยวเข้าปั๊มให้ไว พรุ่งนี้น้ำมันขึ้นอีกแล้ว พีทีที สเตชั่น – บางจาก ประกาศปรับราคาขายปลีกน้ำมันกลุ่มเบนซิน และ แก๊สโซฮอล์ ทุกชนิดขึ้น 30 สตางค์/ลิตร ยกเว้นดีเซลคงเดิม\r\n\r\nวันที่ 15 ธ.ค.2565 ผู้สื่อข่าวรายงาน พีทีที สเตชั่น และ บางจาก ปรับราคาขายปลีกน้ำมันกลุ่มเบนซิน และแก๊สโซฮอล์ ทุกชนิดขึ้น 30 สตางค์/ลิตร ส่งผลให้เบนซินอยู่ที่ 42.16 บาท/ลิตร แก๊สโซฮอล์ 95 อยู่ที่ 34.75 บาท/ลิตร\r\nแก๊สโซฮอล์ 91 อยู่ที่ 34.48 บาท/ลิตร พรีเมี่ยม แก๊สโซฮอล์ 95 อยู่ที่ 40.24 บาท/ลิตร E20 อยู่ที่ 32.84 บาท/ลิตร E85 อยู่ที่ 32.99 บาท/ลิตร มีผลวันที่ 16 ธ.ค.2565 เวลา 05.00 น. เป็นต้นไป\r\n\r\nกลุ่มดีเซลคงเดิม โดยดีเซล B7 อยู่ที่ 34.94 บาท/ลิตร ดีเซล B10 อยู่ที่ 34.94 บาท/ลิตร ดีเซล B20 อยู่ที่ 34.94 บาท/ลิตร และพรีเมี่ยมดีเซล B7 อยู่ที่ 43.66 บาท/ลิตร\"', '2022-12-15 17:20:00', 74);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `que_id` int(11) NOT NULL,
  `que_body` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que_body`) VALUES
(1, 'การออกแบบเว็บไซต์ มีความเหมาะสมและสวยงาม'),
(2, 'การจัดรูปแบบเว็บไซต์ มีความง่ายต่อการอ่าน และใช้งาน'),
(3, 'ปริมาณเนื้อหา มีเพียงพอ ต่อความต้องการ'),
(4, 'การประชาสัมพันธ์ ข่าวสาร รูปภาพ มีความเหมาะสม และ น่าสนใจ'),
(5, 'การจัดหมวดหมู่ ง่ายต่อการ ค้นหา และทำความเข้าใจ');

-- --------------------------------------------------------

--
-- Table structure for table `ques_answer`
--

CREATE TABLE `ques_answer` (
  `ques_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ques_answer` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ques_answer`
--

INSERT INTO `ques_answer` (`ques_id`, `user_id`, `ques_answer`) VALUES
(12, 5, 5),
(13, 5, 5),
(14, 5, 3),
(15, 5, 1),
(16, 5, 1),
(12, 7, 4),
(13, 7, 5),
(14, 7, 4),
(15, 7, 1),
(16, 7, 3),
(12, 7, 5),
(13, 7, 3),
(14, 7, 1),
(15, 7, 5),
(16, 7, 5),
(12, 8, 5),
(13, 8, 3),
(14, 8, 2),
(15, 8, 2),
(16, 8, 3),
(12, 11, 5),
(13, 11, 4),
(14, 11, 2),
(15, 11, 1),
(16, 11, 1),
(12, 11, 5),
(13, 11, 1),
(14, 11, 4),
(15, 11, 1),
(16, 11, 3),
(12, 14, 5),
(13, 14, 3),
(14, 14, 3),
(15, 14, 2),
(16, 14, 2),
(12, 21, 5),
(13, 21, 1),
(14, 21, 2),
(15, 21, 3),
(16, 21, 3),
(12, 25, 5),
(13, 25, 5),
(14, 25, 5),
(15, 25, 2),
(16, 25, 3),
(12, 1, 2),
(13, 1, 5),
(14, 1, 5),
(15, 1, 5),
(16, 1, 3),
(29, 1, 3),
(30, 1, 3),
(31, 1, 2),
(32, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ques_do`
--

CREATE TABLE `ques_do` (
  `que_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `que_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `ques_do`
--

INSERT INTO `ques_do` (`que_id`, `u_id`, `que_level`) VALUES
(0, 0, 0),
(0, 0, 0),
(0, 20, 0),
(0, 0, 0),
(0, 7, 0),
(0, 20, 0),
(0, 20, 0),
(0, 20, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 20, 0),
(0, 20, 0),
(0, 20, 0),
(0, 20, 0),
(1, 20, 5),
(2, 20, 4),
(3, 20, 5),
(4, 20, 2),
(5, 20, 3),
(1, 20, 5),
(2, 20, 4),
(3, 20, 5),
(4, 20, 2),
(5, 20, 3),
(1, 20, 5),
(2, 20, 5),
(3, 20, 5),
(4, 20, 3),
(5, 20, 3),
(1, 20, 5),
(2, 20, 5),
(3, 20, 5),
(4, 20, 5),
(5, 20, 5),
(1, 20, 1),
(2, 20, 1),
(3, 20, 1),
(4, 20, 1),
(5, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `wb_id` int(11) NOT NULL,
  `wb_content` varchar(200) CHARACTER SET utf8 NOT NULL,
  `u_id` int(11) NOT NULL,
  `wb_sender` varchar(11) NOT NULL,
  `wb_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `webboard`
--

INSERT INTO `webboard` (`wb_id`, `wb_content`, `u_id`, `wb_sender`, `wb_date`) VALUES
(104, 'ดีคับๆ', 20, 'bbb', '2023-11-05 14:53:21'),
(105, 'เหงาๆอ่ะคับ', 20, 'bbb', '2023-11-05 14:54:12'),
(106, 'ihfigh', 0, '', '2023-11-05 15:32:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `act`
--
ALTER TABLE `act`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `act_register`
--
ALTER TABLE `act_register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `act_type`
--
ALTER TABLE `act_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `ques_answer`
--
ALTER TABLE `ques_answer`
  ADD KEY `answer_ques` (`ques_id`),
  ADD KEY `answer_user` (`user_id`);

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`wb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `act`
--
ALTER TABLE `act`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `act_register`
--
ALTER TABLE `act_register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `act_type`
--
ALTER TABLE `act_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `webboard`
--
ALTER TABLE `webboard`
  MODIFY `wb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
