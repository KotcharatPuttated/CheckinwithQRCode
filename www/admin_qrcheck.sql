-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 02:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_qrcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_act`
--

CREATE TABLE `tb_act` (
  `ID` int(1) NOT NULL,
  `act` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_act`
--

INSERT INTO `tb_act` (`ID`, `act`) VALUES
(1, 'ผ่าน'),
(2, 'ไม่ผ่าน');

-- --------------------------------------------------------

--
-- Table structure for table `tb_at`
--

CREATE TABLE `tb_at` (
  `ID_at` int(10) NOT NULL,
  `FK_ID_Student` varchar(10) NOT NULL,
  `Date_Check` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Criterion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_at`
--

INSERT INTO `tb_at` (`ID_at`, `FK_ID_Student`, `Date_Check`, `Criterion`) VALUES
(463, 'music', '2020-11-03 08:15:59', 1),
(464, 'music5', '2020-11-03 10:51:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_branch`
--

CREATE TABLE `tb_branch` (
  `ID_Branch` int(1) NOT NULL,
  `Name_Branch` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_branch`
--

INSERT INTO `tb_branch` (`ID_Branch`, `Name_Branch`) VALUES
(1, 'เทคนิคคอมพิวเตอร์'),
(2, 'คอมพิวเตอร์ฮาร์ดแวร์'),
(3, 'คอมพิวเตอร์ซอฟต์แวร์'),
(4, 'คอมพิวเตอร์มัลติมีเดีย'),
(5, 'คอมพิวเตอร์เครือข่าย'),
(6, 'ไม่มี');

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

CREATE TABLE `tb_class` (
  `ID_Class` int(1) NOT NULL,
  `Name_Class` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_class`
--

INSERT INTO `tb_class` (`ID_Class`, `Name_Class`, `level`) VALUES
(1, 'ระดับประกาศนียบัตรวิชาชีพชั้นปีที่ 1', 'ปวช. 1'),
(2, 'ระดับประกาศนียบัตรวิชาชีพชั้นปีที่ 2', 'ปวช. 2'),
(3, 'ระดับประกาศนียบัตรวิชาชีพชั้นปีที่ 3', 'ปวช. 3'),
(4, 'ระดับประกาศนียบัตรวิชาชีพชั้นสูงปีที่ 1', 'ปวส. 1'),
(5, 'ระดับประกาศนียบัตรวิชาชีพชั้นสูงปีที่ 2', 'ปวส. 2'),
(6, 'กศน.', 'กศน.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_count`
--

CREATE TABLE `tb_count` (
  `AD_ID` int(11) NOT NULL,
  `ID_C_Student` varchar(12) NOT NULL,
  `year` varchar(4) NOT NULL,
  `mount` varchar(2) NOT NULL,
  `day` varchar(100) NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_count`
--

INSERT INTO `tb_count` (`AD_ID`, `ID_C_Student`, `year`, `mount`, `day`, `count`) VALUES
(1, '6231282003', '2019', '9', '4,11,18,25', 5),
(2, '6231282004', '2019', '9', '4,11,18,25', 5),
(3, '6231282005', '2019', '9', '4,11,18', 4),
(4, '6231282006', '2019', '9', '4,11,18', 3),
(5, '6231282007', '2019', '9', '4,11,18,25', 4),
(6, '6231282008', '2019', '9', '4,11', 2),
(7, '6231282009', '2019', '9', '4,11,18,25', 4),
(8, '6231282010', '2019', '9', '4,11', 2),
(9, '6231282011', '2019', '9', '4,11,18,25', 4),
(10, '6231282012', '2019', '9', '4,11,18,25', 4),
(11, '6231282013', '2019', '9', '4,11,18,25', 4),
(12, '6231282014', '2019', '9', '4,11,18,25', 4),
(13, '6231282015', '2019', '9', '4,11,18,25', 4),
(14, '6231282016', '2019', '9', '4,11,18', 3),
(15, '6231282017', '2019', '9', '4,11,18,25', 4),
(16, '6231282018', '2019', '9', '4,11,18', 2),
(17, '6231282019', '2019', '9', '4,11,18,25', 4),
(18, '6231282020', '2019', '9', '4', 1),
(19, '6231282021', '2019', '9', '4,11,18,25', 4),
(20, '6231282022', '2019', '9', '4,11,18,25', 4),
(21, '6231282023', '2019', '9', '4,11,18,25', 4),
(22, '6231282024', '2019', '9', '4,11,18,25', 4),
(23, '6231282025', '2019', '9', '4,11,18,25', 4),
(24, '6231282026', '2019', '9', '4,11,18,25', 4),
(25, '6231282027', '2019', '9', '4,11,18,25', 4),
(26, '6231282028', '2019', '9', '4,11,18,25', 4),
(27, '6231282029', '2019', '9', '4,11,18,25', 4),
(28, '6231282030', '2019', '9', '4,11,18,25', 4),
(29, '6231282031', '2019', '9', '4,11,18,25', 4),
(30, '6231282032', '2019', '9', '4,11,18,25', 4),
(31, '6231282033', '2019', '9', '4,11,18,25', 4),
(36, '6231282003', '2019', '11', '6,13,20,27', 4),
(37, '6231282003', '2019', '10', '2,9,16,23,30', 5),
(38, '6231282003', '2019', '8', '28', 1),
(41, '6231282002', '2019', '12', '2', 1),
(42, '6231282001', '2019', '12', '3', 1),
(43, '6231282004', '2020', '11', '3', 1),
(44, '6231282011', '2020', '11', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_countt`
--

CREATE TABLE `tb_countt` (
  `AD_ID` int(11) NOT NULL,
  `ID_C_Student` varchar(12) NOT NULL,
  `year` varchar(4) NOT NULL,
  `mount` varchar(2) NOT NULL,
  `day` varchar(100) NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_countt`
--

INSERT INTO `tb_countt` (`AD_ID`, `ID_C_Student`, `year`, `mount`, `day`, `count`) VALUES
(1, '6231282003', '2019', '12', '4,11,18,25', 4),
(2, '6231282004', '2019', '12', '4,11,18,25', 4),
(3, '6231282005', '2019', '12', '4,11,18', 3),
(4, '6231282006', '2019', '12', '4,11,18', 3),
(5, '6231282007', '2019', '12', '4,11,18,25', 4),
(6, '6231282008', '2019', '12', '4,11', 2),
(7, '6231282009', '2019', '12', '4,11,18,25', 4),
(8, '6231282010', '2019', '12', '4,11', 2),
(9, '6231282011', '2019', '12', '4,11,18,25', 4),
(10, '6231282012', '2019', '12', '4,11,18,25', 4),
(11, '6231282013', '2019', '12', '4,11,18,25', 4),
(12, '6231282014', '2019', '12', '4,11,18,25', 4),
(13, '6231282015', '2019', '12', '4,11,18,25', 4),
(14, '6231282016', '2019', '12', '4,11,18', 3),
(15, '6231282017', '2019', '12', '4,11,18,25', 4),
(16, '6231282018', '2019', '12', '4', 2),
(17, '6231282019', '2019', '10', '4,11,18,25', 4),
(18, '6231282020', '2019', '12', '4', 1),
(19, '6231282021', '2019', '12', '4,11,18,25', 4),
(20, '6231282022', '2019', '12', '4,11,18,25', 4),
(21, '6231282023', '2019', '12', '4,11,18,25', 4),
(22, '6231282024', '2019', '12', '4,11,18,25', 4),
(23, '6231282025', '2019', '12', '4,11,18,25', 4),
(24, '6231282026', '2019', '12', '4,11,18,25', 4),
(25, '6231282027', '2019', '12', '4,11,18,25', 4),
(26, '6231282028', '2019', '12', '4,11,18,25', 4),
(27, '6231282029', '2019', '12', '4,11,18,25', 4),
(28, '6231282030', '2019', '12', '4,11,18,25', 4),
(29, '6231282031', '2019', '12', '4,11,18,25', 4),
(30, '6231282032', '2019', '12', '4,11,18,25', 4),
(31, '6231282033', '2019', '12', '4,11,18,25', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `ID_Stu` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `Branch` int(1) NOT NULL,
  `class` int(2) NOT NULL,
  `room` int(1) NOT NULL,
  `teacher` int(2) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL,
  `ID_act` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`ID_Stu`, `name`, `Branch`, `class`, `room`, `teacher`, `Phone`, `Email`, `img`, `ID_act`) VALUES
('2', '', 0, 0, 0, 0, '', '', '', 0),
('22', '', 0, 0, 0, 0, '', '', '', 0),
('3', '', 0, 0, 0, 0, '', '', '', 0),
('33', '', 0, 0, 0, 0, '', '', '', 0),
('4', '', 0, 0, 0, 0, '', '', '', 0),
('44', '', 0, 0, 0, 0, '', '', '', 0),
('5', '', 0, 0, 0, 0, '', '', '', 0),
('6112002419', 'นาย ณัฐพล กลางเมืองขวา', 6, 6, 0, 6, '0611346296', 'aumza445@gmail.com', '', 0),
('6112002558', 'อินทรักษ์ อิ้มคำ', 6, 6, 0, 0, '0614407283', 'varsianae@gmail.com', '', 0),
('6223002458', 'ดวงกมล มุ่งสิน', 6, 6, 0, 0, '0885993697', 'duakamol5175@gmai', '', 0),
('6231282001', 'ไกรสร นันทบุตร ', 1, 1, 1, 1, '0932434532', 'musicclubmiki@gmail.com', '201912021227421440669278.jpg', 0),
('6231282002', 'นางสาววรรณภา ยกแสง', 1, 1, 1, 6, '0968756475', 'vanapa@gmail.com', '20191203070631147975988.png', 0),
('6231282003', 'นางสาวทิฆัมพร พลีศักดิ์', 1, 1, 1, 2, '0876756675', 'sarapakorn@gmail.com', '201912030743431899522072.png', 0),
('6231282004', 'นายเกรียงไกร จันทสิงห์', 1, 1, 1, 2, '0989789898', 'kriang@gmail.com', '', 0),
('6231282005', 'นายวราวุธ พ่วงแพร', 1, 1, 1, 2, '0998879861', 'vravut@gmail.com', '', 0),
('6231282006', 'นางสาวภัสสร นามแสน', 1, 1, 1, 2, '0987654543', 'pusorn@gmail.com', '', 0),
('6231282007', 'นางสาวธัญวรัตน์ ยอดจันดา', 1, 1, 1, 2, '0879876767', 'tanvaluk@gmail.com', '', 0),
('6231282008', 'นายวีรพัชร์ ศรีพิสุทธิสกุล', 1, 1, 1, 2, '0993456574', 'verapus@gmail.com', '', 0),
('6231282009', 'นายศักรินทร์ วารินทร์', 1, 1, 1, 2, '0996564441', 'sukarin@gmail.com', '', 0),
('6231282010', 'นายคชรัตน์ พุทธเทศ', 1, 1, 1, 2, '0989988765', 'mosmoth123@gmail.com', '', 0),
('6231282011', 'นางสาวธิติมา ดีปราศัย', 1, 1, 1, 2, '0998786531', 'titima@gmail.com', '', 0),
('6231282012', 'นางสาวศรัญธรณ์ บุญหล้า', 1, 1, 1, 2, '0994352231', 'srunya@gmail.com', '', 0),
('6231282013', 'นายนครินทร์ กลมเกลี้ยง', 1, 1, 1, 2, '0897765463', 'nakarin@gmail.com', '', 0),
('6231282014', 'นายสุริยะ โพธิ์สุวรรณ', 1, 1, 1, 2, '0998785554', 'suriya@gmail.com', '', 0),
('6231282015', 'นางสาวหนึ่งฤทัย แสนเสาร์', 1, 1, 1, 2, '0998789776', 'onerithai@gmail.com', '', 0),
('6231282016', 'นางสาวสุพรรณิกา ห้วยใหญ่', 1, 1, 1, 2, '0991342342', 'supaarnika@gmail.com', '', 0),
('6231282017', 'นายศลิษฎ์ พวงจำปา', 1, 1, 1, 2, '0996575463', 'saridcarjopa@gmail.com', '', 0),
('6231282018', 'นายกานต์กวี	รูปคม', 1, 1, 2, 1, '0906176704', 'mothzneverdie@gmail.com', '1234.jpg', 0),
('6231282019', 'นายรุ่งโรจน์	เหล่าสุวรรณพงษ์	', 1, 1, 2, 3, '0906176704', 'mark@gmail.com', '1234.jpg', 0),
('6231282020', 'นางสาวอาริยา	โพธิ์ทา', 1, 1, 2, 1, '0926786704', 'mothzneverdie@gmail.com', '', 0),
('6231282021', 'นายวัชระ	อัมพุนันท์', 1, 1, 2, 3, '0896176704', 'mark@gmail.com', '', 0),
('6231282022', 'นายอนันต์	จันทอง', 1, 1, 2, 2, '0926785674', 'mark@gmail.com', '', 0),
('6231282023', 'นายศุภวิชญ์	พิมพกัณฑ์', 1, 1, 2, 3, '0906176704', 'mark@gmail.com', '', 0),
('6231282024', 'นายเจตนิพัทธ์	สมหมาย', 1, 1, 2, 4, '0926786704', 'mark@gmail.com', '', 0),
('6231282025', 'นายธีรนันท์	ขั้นทอง', 1, 1, 2, 4, '0906176704', 'mothzneverdie@gmail.com', '', 0),
('6231282026', 'นายภัคนันท์	ทองมา', 1, 1, 2, 2, '0896176704', 'mark@gmail.com', '', 0),
('6231282027', 'นายนวพล	มั่งคั่ง', 1, 1, 2, 1, '0896176704', 'mothzneverdie@gmail.com', '', 0),
('6231282028', 'นางสาวปทุมวดี	กาญจนรักษ์', 1, 1, 2, 1, '0926785674', 'mothzneverdie@gmail.com', '', 0),
('6231282029', 'นายยุทธพงษ์	กตะศิลา', 1, 1, 2, 1, '0896176704', 'moth123@gmail.com', '', 0),
('6231282030', 'นายสุกฤษฎ์	ศรีศิลป์', 1, 1, 2, 2, '0906176704', 'mark@gmail.com', '', 0),
('6231282031', 'นายวีรกรณ์ แฝงบุญ', 1, 1, 2, 1, '0998675454', 'virakorn@gmail.com', '', 0),
('6231282032', 'นางสาวศุภิสรา คำลุน', 1, 1, 2, 1, '0887676656', 'supisara@gmail.com', '', 0),
('6231282033', 'นายชัยสิทธิ์ ตังควัฒนา', 1, 1, 2, 1, '0997876656', 'siyasis@gmail.com', '', 0),
('admin', '', 0, 0, 0, 0, '', '', '', 0),
('checking', 'คชรัตน์ พุทธเทศ', 0, 0, 0, 0, '0987657345', 'MusicClubMiki@gmail.com', '', 0),
('music', '', 0, 0, 0, 0, '', '', '', 0),
('music2', '', 0, 0, 0, 0, '', '', '', 0),
('music3', '', 0, 0, 0, 0, '', '', '', 0),
('music5', '', 0, 0, 0, 0, '', '', '', 0),
('Pon2411', '', 0, 0, 0, 0, '', '', '', 0),
('teacher', 'นางสาวภัสสร นามแสน', 0, 0, 0, 0, '0667894567', 'tam@gmail.com', '', 0),
('test000001', '', 0, 0, 0, 0, '', '', '', 0),
('ttt', '', 0, 0, 0, 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `ID_Student` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`ID_Student`, `Password`, `Status`) VALUES
('6112002419', '827ccb0eea8a706c4c34a16891f84e7b', 'Student'),
('6112002558', '827ccb0eea8a706c4c34a16891f84e7b', 'Student'),
('6223002458', '827ccb0eea8a706c4c34a16891f84e7b', 'Student'),
('6231282001', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282002', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282003', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282004', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282005', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282006', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282007', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282008', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282009', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282010', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282011', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282012', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282013', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282014', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282015', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282016', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282017', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282018', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282019', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282020', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282021', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282022', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282023', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282024', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282025', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282026', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282027', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282028', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282029', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282030', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282031', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282032', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('6231282033', '25d55ad283aa400af464c76d713c07ad', 'Student'),
('admin', '0d3fda0bdbb9d619e09cdf3eecba7999', 'Admin'),
('checking', '0d3fda0bdbb9d619e09cdf3eecba7999', 'Checking'),
('music', '25f9e794323b453885f5181f1b624d0b', 'Student'),
('music2', '25f9e794323b453885f5181f1b624d0b', 'Student'),
('music3', '97b290acab82d5937fb87a28b06181a3', 'Student'),
('music5', '25f9e794323b453885f5181f1b624d0b', 'Student'),
('teacher', '0d3fda0bdbb9d619e09cdf3eecba7999', 'Teacher'),
('ttt', 'c4ca4238a0b923820dcc509a6f75849b', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qr`
--

CREATE TABLE `tb_qr` (
  `IDStudent` varchar(10) NOT NULL,
  `qr_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_qr`
--

INSERT INTO `tb_qr` (`IDStudent`, `qr_code`) VALUES
('2', '2e477bfafc89ee21efc67ae75284296d.png'),
('22', 'f0374a43d7c93c406f2a93144214b713.png'),
('3', 'db22cf2fc1deb60fb9a6b158772a0001.png'),
('33', '26627d1858ff9fa5ab3e754966eeb166.png'),
('4', 'bb3597977c8eaa11242340429446509e.png'),
('44', '73925bed3b37bdf158e08221110a41eb.png'),
('5', 'a8f77bdbc3d4568a65f7fd948481e967.png'),
('6112002419', 'e2a9ebfe01b1ff1cbd960a1aadb48dd6.png'),
('6112002558', '9f011a66ca4c35281f914d5b858c0c48.png'),
('6223002458', '51bc3ba7004adba901bb7563dcc5d1ad.png'),
('6231282001', '3c3c3c4688ebcbb91b2c71ed62b07042.png'),
('6231282002', '90ef931a487d1e2038247669a9c1bb3a.png'),
('6231282003', '86a7551d2d29a5f953a10a1ad910187f.png'),
('6231282004', 'd7838dafd81ccc9afec36930f685825a.png'),
('6231282005', '198860e56007e089ef28a477367a7e4e.png'),
('6231282006', 'ef5d92629375c3d69c785875d38be27a.png'),
('6231282007', '18de1c654bbe1fe931bb7107915a33a3.png'),
('6231282008', 'b3f7eb52d05e97fa03b4817cdfb74d97.png'),
('6231282009', '5495cbf9b0a98eb10c31ea649b1a939c.png'),
('6231282010', '31a921bdc9c41f93cf4a5e36e093ef56.png'),
('6231282011', '078b21f96ac87be68688757a4f17af26.png'),
('6231282012', 'e60a40ca636006a43a4652968222eec3.png'),
('6231282013', '89b5f6d1e41d8c5d047439b55bfe5a1e.png'),
('6231282014', 'f92775bc027f66438746355fd8be1ac1.png'),
('6231282015', 'bcfede794ffed7f00db69e3a206ab7c4.png'),
('6231282016', 'ae6047323ad3d6fd7fe4eca15b0f1488.png'),
('6231282017', '7af121651103ab3742fd9dd34ac9cd75.png'),
('6231282018', '6dfdbddbdefc8ee8a2c1093cf2e4c0f0.png'),
('6231282019', 'f4932b5c68a6172f0ebb98a9df6abb6a.png'),
('6231282020', '42386efa8ceace6963c57ba407212c6a.png'),
('6231282021', 'd25688f27657f4f0ead0877fc106677c.png'),
('6231282022', '690296d7b684e9182bebe05a2399e65f.png'),
('6231282023', 'b5ac3079cc69e154d216486298a62be5.png'),
('6231282024', '230105bc23295a5155f0fd37419be1f0.png'),
('6231282025', 'c5fe5d6038ad1d3cf59f9e8390ef8865.png'),
('6231282026', 'a394df4865a2fdf3ef02801530df9d94.png'),
('6231282027', 'abb063774e3308b84df02caa41f57578.png'),
('6231282028', 'fa4fbaea5a13d33421c8741330535d9d.png'),
('6231282029', '62fc1632bc9f100e2b23cb3c6d06581b.png'),
('6231282030', '79f5f64d7b9d4c77bb112f69888149bc.png'),
('6231282031', '62e156c264da43252ea30956ecccf085.png'),
('6231282032', 'ab90cf2a538e7f8e2ac9719a8b5f3319.png'),
('6231282033', '99cd8e565a3f045d1799cb90e4e9d67f.png'),
('music', 'd5b5d93d9e7b35821c388ee1b503900f.png'),
('music2', '316181965c9924cf7790c452e6df9d47.png'),
('music3', 'ce781258a3cf9e66bb2321af4836ff48.png'),
('music5', 'eef2cc07332fecd86350e33ebe6f1949.png'),
('Pon2411', '857057bebe5aabf8420f1a6620010781.png'),
('test000001', 'abdd9c2d92750c6661b48b0afa69339f.png'),
('ttt', 'a1a47f0d09824ede1c4b4ec57514bec6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `ID_Room` int(1) NOT NULL,
  `Num_Room` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`ID_Room`, `Num_Room`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_teacher`
--

CREATE TABLE `tb_teacher` (
  `ID_Teacher` int(2) NOT NULL,
  `Name_Teacher` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_teacher`
--

INSERT INTO `tb_teacher` (`ID_Teacher`, `Name_Teacher`) VALUES
(1, 'ภัทราภรณ์   เผือกนอก'),
(2, 'คุณากร   ปั้นปรีชา'),
(3, 'เอมอร   สิมาทอง'),
(4, 'วันชัย   ศุภธีรารักษ์'),
(5, 'ภัทรพงศ์   สารักษ์'),
(6, 'อาจารย์ กศน.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_term`
--

CREATE TABLE `tb_term` (
  `FK_IDStudent` varchar(10) NOT NULL,
  `term_one` varchar(10) NOT NULL,
  `term_two` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_year`
--

CREATE TABLE `tb_year` (
  `FK_ID_Stu` varchar(10) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `record_one` int(5) NOT NULL,
  `record_two` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_act`
--
ALTER TABLE `tb_act`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_at`
--
ALTER TABLE `tb_at`
  ADD PRIMARY KEY (`ID_at`);

--
-- Indexes for table `tb_branch`
--
ALTER TABLE `tb_branch`
  ADD PRIMARY KEY (`ID_Branch`);

--
-- Indexes for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`ID_Class`);

--
-- Indexes for table `tb_count`
--
ALTER TABLE `tb_count`
  ADD PRIMARY KEY (`AD_ID`);

--
-- Indexes for table `tb_countt`
--
ALTER TABLE `tb_countt`
  ADD PRIMARY KEY (`ID_C_Student`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`ID_Stu`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`ID_Student`);

--
-- Indexes for table `tb_qr`
--
ALTER TABLE `tb_qr`
  ADD PRIMARY KEY (`IDStudent`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`ID_Room`);

--
-- Indexes for table `tb_teacher`
--
ALTER TABLE `tb_teacher`
  ADD PRIMARY KEY (`ID_Teacher`);

--
-- Indexes for table `tb_term`
--
ALTER TABLE `tb_term`
  ADD PRIMARY KEY (`FK_IDStudent`);

--
-- Indexes for table `tb_year`
--
ALTER TABLE `tb_year`
  ADD PRIMARY KEY (`FK_ID_Stu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_act`
--
ALTER TABLE `tb_act`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_at`
--
ALTER TABLE `tb_at`
  MODIFY `ID_at` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `tb_branch`
--
ALTER TABLE `tb_branch`
  MODIFY `ID_Branch` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `ID_Class` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_count`
--
ALTER TABLE `tb_count`
  MODIFY `AD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `ID_Room` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_teacher`
--
ALTER TABLE `tb_teacher`
  MODIFY `ID_Teacher` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
