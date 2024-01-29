-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2024 at 04:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_concert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_fullname` varchar(255) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_role` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_fullname`, `ad_username`, `ad_role`, `ad_password`) VALUES
(1, 'วทัญญู เขียวชอุ่ม', 'Admin', 'ผู้ดูแล', '310744'),
(2, 'สวัสดี ตอนเช้า', 'GoodMorning', 'เช็คข้อมูล', '310844'),
(3, 'ฝันดี เพื่อนรัก', 'GoodNight', 'เพิ่มข้อมูลของคอนเสิร์ต', '1111'),
(4, 'สวัสดี ตอนเย็น', 'GoodDinner', 'แก้ไขข้อมูล,เช็คข้อมูล', '2345'),
(5, 'สวัสดี ตอนดึก', 'GoodMidnight', 'เพิ่มข้อมูลของผู้ดูแล', '6666');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `m_fullname` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_phone` text NOT NULL,
  `m_gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `m_age` int(10) NOT NULL,
  `m_occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `s_zone` varchar(255) NOT NULL,
  `s_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `m_fullname`, `m_email`, `m_phone`, `m_gender`, `birth_date`, `m_age`, `m_occupation`, `address`, `name`, `location`, `date`, `time`, `s_zone`, `s_price`) VALUES
(1, 'วทัญญู เขียวชอุ่ม', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', 'BTS DANCE MARATHON Concert in Thailand', 'อินดอร์สเตเดียม หัวหมาก', '17 กุมภาพันธ์ 2567', '17:00', 'B', 5000),
(2, 'วทัญญู เขียวชอุ่ม', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', 'ซนซน 40 ปีของแกรมมี่ คอนเสิร์ต', 'สยามพารากอน', '27 - 28 กรกฎาคม 2567', '19:00 / 17:00', 'A', 6000),
(3, 'วทัญญู เขียวชอุ่ม', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', 'GRAMMY X RS : Dance Non Stop Concert', 'อิมแพ็ค อารีน่า เมืองทองธานี', '29 - 30 กันยายน 2567', '19:00 / 17:00', 'B', 5000),
(4, 'วทัญญู เขียวชอุ่ม', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', 'GRAMMY X RS : DIVO DIVA CONCERT', 'อิมแพ็ค อารีน่า เมืองทองธานี', '27 - 28 กรกฎาคม 2567', '19:00 / 18:00', 'H', 900),
(5, 'วทัญญู เขียวชอุ่ม', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', '90 FOREVER CONCERT', 'อิมแพ็ค อารีน่า เมืองทองธานี', '24 กุมภาพันธ์ 2567', '19:00', 'H', 900),
(6, 'วทัญญู เขียวชอุ่ม', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', 'RS MEETING CONCERT 2024 MARATHON 2 ยกกำลังเต้น', 'อิมแพ็ค อารีน่า เมืองทองธานี', '17 กุมภาพันธ์ 2567', '17:00', 'A', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `data` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`id`, `name`, `data`, `location`, `date`, `time`) VALUES
(1, 'RS MEETING CONCERT 2024 MARATHON 2 ยกกำลังเต้น', 'เป็นคอนเสิร์ตที่เคยเป็นศิลปิน RS มาแล้ว การกลับมารวมตัวกันอีกครั้ง เต้นแบบ Non-Stop จัดเต็มยาวๆ พร้อมด้วยศิลปินแขกรับเชิญว่าเป็นใครเชิญมาดูคอนเสิร์ตได้แล้วครับทุกๆคน', 'อิมแพ็ค อารีน่า เมืองทองธานี', '17 กุมภาพันธ์ 2567', '17:00'),
(2, 'BTS DANCE MARATHON Concert in Thailand', 'เป็นคอนเสิร์ตจากเกาหลีใต้มาจัดคอนเสิร์ตที่ไทยแลนด์', 'อินดอร์สเตเดียม หัวหมาก', '30 มีนาคม 2567', '17:00'),
(3, 'RS MUSIC UPRISING HIT ALL MUSIC CONCERT', 'เป็นคอนเสิร์ตที่ตัวแทนศิลปินทุกสังกัดเอาเพลงเดิมที่นานๆที่สุดของไทยแลนด์มาใช้เสียงร้องเพลงแบบใหม่', 'อิมแพ็ค อารีน่า เมืองทองธานี', '31 มีนาคม 2567', '17:00'),
(4, 'XOXO HIT ALL MUSIC CONCERT', 'เป็นคอนเสิร์ตที่อยู่สังกัด XOXO Entertainment มารวมกัน จะได้หายคิดถึง', 'อิมแพ็ค อารีน่า เมืองทองธานี', '6-7 เมษายน 2567', '19:00 / 17:00'),
(5, 'The Golden Singer 1990-2024 Concert', 'เป็นคอนเสิร์ตที่ยิ่งใหญ่และพร้อมการกลับมาอีกครั้งของทุกคนเคยเป็นศิลปินแล้ว มีค่ายเพลงแล้ว เคยประกวดมาแล้วแต่ความฝันของตัวเองยังไม่ได้ประสบความสำเร็จ ปล่อยซิงเกิ้ลมาแล้ว และปล่อยอัลบั้มมาแล้ว และกลับมารวมตัวกันอีกครั้ง', 'สยามพารากอน', '28 - 29 เมษายน 2567', '19:00 / 17:00'),
(6, 'The Voice The Best of Artist The Voice All Season Concert', 'เป็นคอนเสิร์ตที่เคยประกวด The Voice ทั้ง 3 รุ่น มีทั้งรุ่นเด็ก,วัยรุ่นและรุ่นใหญ่', 'สยามพารากอน', '18 - 19 และ 25 - 26 พฤษภาคม 2567', '18:00 / 17:00'),
(7, 'BLACKPLNK The Concert Thailand 2024', 'เป็นคอนเสิร์ตแนว K-POP จากเกาหลีใต้มาเล่นคอนเสิร์ตที่ประเทศไทย เพื่อแฟนๆของวง BLACKPINK จะได้หายคิดถึง', 'สยามพารากอน', '15 มิถุนายน 2567', '19:00'),
(8, 'Gene Lab The Concert MARATHON 2024', 'เป็นคอนเสิร์ตที่อยู่ในค่าย Gene Lab มีผลงานมากมาย เจ้าของเพลงที่โด่งดังขึ้นป้ายไฟฟ้าใหญ่ของสหรัฐอเมริกา', 'สยามพารากอน', '22 - 23 มิถุนายน 2567', '19:00 / 17:00'),
(9, 'ซนซน 40 ปีของแกรมมี่ คอนเสิร์ต', 'เป็นคอนเสิร์ตที่มักจะเอาเพลงเดิมไป Cover ใหม่ อาทิ ใช้เนื้อเพลงแบบเดิมๆ,ใช้เนื้อเพลงแบบเดิมๆแต่มีการปรับแต่งเนื้อเพลงขึ้นใหม่', 'สยามพารากอน', '27 - 28 กรกฎาคม 2567', '19:00 / 17:00'),
(10, 'GRAMMY X RS : DIVO DIVA CONCERT', 'เป็นคอนเสิร์ตในปี 2024 ทั้ง 2 ค่ายดังมารวมกัน ทั้งแกรมมี่และอาร์เอส ที่มักจะเป็นศิลปินตัวพ่อตัวแม่ ทั้งรุ่นใหญ่ และรุ่นเล็ก จะต้องมาร้องเพลงของตัวเอง และสลับเพลง', 'อิมแพ็ค อารีน่า เมืองทองธานี', '27 - 28 กรกฎาคม 2567', '19:00 / 18:00'),
(11, 'GRAMMY X RS : Rock Forever Concert', 'เป็นคอนเสิร์ตที่มีชาวร็อคในยุค 90 - 2000 การรวมมือทั้ง 2 ค่ายดัง มารวมแรงใจกันและกัน เพื่อขวัญใจชาวร็อค', 'อิมแพ็ค อารีน่า เมืองทองธานี', '8 - 9 กันยายน 2567', '19:00 / 17:00'),
(12, 'GRAMMY X RS : Dance Non Stop Concert', 'เป็นคอนเสิร์ตที่มีวัยรุ่นแนวยุค 90 - 2000 เต้นแบบไม่มีหยุด และยาวไปจนถึงเพลงสุดท้าย', 'อิมแพ็ค อารีน่า เมืองทองธานี', '29 - 30 กันยายน 2567', '19:00 / 17:00'),
(13, 'GRAMMY X RS HIT100 Vol.2 Concert', 'เป็นคอนเสิร์ตที่มีเพลงฮิต 100 เพลงที่มักจะเคยได้ยินเพลงดังที่สุดของทั้ง 2 ค่าย การรวมมือแรงใจกันและกัน', 'อิมแพ็ค อารีน่า เมืองทองธานี', '28 - 29 ตุลาคม 2567', '19:00 / 17:00'),
(14, '90 FOREVER CONCERT', 'เป็นคอนเสิร์ตที่เคยเป็นศิลปิน GRAMMY ได้กลับมารวมกันอีกครั้ง และศิลปินรับเชิญจะได้หายคิดถึง', 'อิมแพ็ค อารีน่า เมืองทองธานี', '24 กุมภาพันธ์ 2567', '19:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `m_fullname` varchar(255) NOT NULL,
  `m_username` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_phone` text NOT NULL,
  `m_gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `m_age` int(11) NOT NULL,
  `m_occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `comfrim_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_fullname`, `m_username`, `m_email`, `m_phone`, `m_gender`, `birth_date`, `m_age`, `m_occupation`, `address`, `m_password`, `comfrim_password`) VALUES
(1, 'วทัญญู เขียวชอุ่ม', 'Watanyu6411', 'watanyu.kh@gmail.com', '0956639451', 'ชาย', '2001-07-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', '31072544', '31072544'),
(2, 'ฝันดี เพื่อนรัก', 'Goodnight', 'goodnight@gmail.com', '0872346766', 'ชาย', '2001-01-24', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', '111', '111'),
(3, 'สวัสดี ตอนเย็น', 'Gooddinner', 'gooddinner@gmail.com', '0983212332', 'ชาย', '2024-02-07', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', '6666', '6666'),
(4, 'สวัสดี เช้าตรู่', 'morn1234', 'morn@gmail.com', '0653214444', 'ชาย', '2024-03-31', 1, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', '7744', '7744'),
(5, 'เพื่อนของเรา เพื่อนรัก', 'OurFriend', 'ourfriend@gmail.com', '0987666543', 'ชาย', '2024-01-31', 22, 'นักศึกษา', '148/456 ถนนรามคำแหง 190 แขวงมีนบุรี เขตมีนบุรี กรุงเทพมหานคร 10510', '00001111', '00001111');

-- --------------------------------------------------------

--
-- Table structure for table `seat_zone`
--

CREATE TABLE `seat_zone` (
  `s_id` int(11) NOT NULL,
  `s_zone` varchar(255) NOT NULL,
  `s_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `seat_zone`
--

INSERT INTO `seat_zone` (`s_id`, `s_zone`, `s_price`) VALUES
(1, 'A', 6000),
(2, 'B', 5000),
(3, 'C', 4500),
(4, 'D', 3500),
(5, 'E', 2500),
(6, 'F', 1500),
(7, 'G', 1000),
(8, 'H', 900),
(9, 'I', 850);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `seat_zone`
--
ALTER TABLE `seat_zone`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seat_zone`
--
ALTER TABLE `seat_zone`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
