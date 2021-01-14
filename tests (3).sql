-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-01-14 15:00:06
-- 服务器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tests`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `AdminID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `AdminID`, `password`) VALUES
(1, 'admin001', 'admin001');

-- --------------------------------------------------------

--
-- 表的结构 `appointment`
--

CREATE TABLE `appointment` (
  `id` int(5) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `room` varchar(15) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `student_id` varchar(8) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `approval` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `appointment`
--

INSERT INTO `appointment` (`id`, `faculty`, `date`, `time`, `room`, `teacher`, `student_id`, `student_name`, `approval`) VALUES
(43, 'Engineering', '2021-01-17', '8.00am', '115a', 'Lim Pei Geok', '', '', NULL),
(44, 'Engineering', '2021-01-17', '8.00am', '115a', 'Lim Pei Geok', 'D190250B', 'Alex Tan Boon Leng', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `designation`) VALUES
(14, 'Engineering', 'CS-OJT Coordinator'),
(16, 'Information Technology', 'Computer Security'),
(17, 'Management Studies', 'Elective 3'),
(19, 'Philosophy', 'Demo2'),
(20, 'Natural Science', 'Demo3'),
(21, 'Commerce', 'Demo4');

-- --------------------------------------------------------

--
-- 表的结构 `formrequest`
--

CREATE TABLE `formrequest` (
  `id` int(11) NOT NULL,
  `sid` varchar(8) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `request` varchar(255) NOT NULL DEFAULT 'Pending',
  `teacher` varchar(55) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `formrequest`
--

INSERT INTO `formrequest` (`id`, `sid`, `Title`, `file`, `size`, `request`, `teacher`, `comment`) VALUES
(16, 'D190250B', 'Final Year Project Management System', 'FYPMS.pdf', 140562, 'Approve', 'Lim Pei Geok', 'Good in php');

-- --------------------------------------------------------

--
-- 表的结构 `recordmeeting`
--

CREATE TABLE `recordmeeting` (
  `id` int(11) NOT NULL,
  `sid` varchar(8) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `size` int(11) NOT NULL,
  `issues` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `actionfeedback` varchar(255) NOT NULL,
  `matters` varchar(255) NOT NULL,
  `teacherName` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `room`
--

CREATE TABLE `room` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `room`
--

INSERT INTO `room` (`id`, `name`) VALUES
(1, '115a'),
(2, '115v'),
(3, '136j');

-- --------------------------------------------------------

--
-- 表的结构 `studentdetail`
--

CREATE TABLE `studentdetail` (
  `ID` int(11) NOT NULL,
  `TeacherID` varchar(11) NOT NULL DEFAULT '0',
  `DepartmentName` varchar(255) NOT NULL,
  `StudentID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `studentdetail`
--

INSERT INTO `studentdetail` (`ID`, `TeacherID`, `DepartmentName`, `StudentID`) VALUES
(19, 'T001A', 'Engineering', 'D190250B');

-- --------------------------------------------------------

--
-- 表的结构 `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `StudentID` varchar(8) NOT NULL,
  `Password` text NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Email` char(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `StudentID`, `Password`, `studentName`, `PhoneNumber`, `Email`) VALUES
(17, 'D180293B', '62d272c026521417b26da3edf705a531e03b4ade', 'Lim Yu Jie', '', ''),
(19, 'D190250B', 'ac2bdb56554421974666621364600be998f2934c', 'Alex Tan Boon Leng', '017-4139389', 'alex@gmail.com.my');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(5) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Name` varchar(25) NOT NULL,
  `DepartmentName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`ID`, `TeacherID`, `Password`, `Name`, `DepartmentName`) VALUES
(1, 'T001A', 'f5b9427750e1b49e7ea0572daf4908c4de6358c2', 'Lim Pei Geok', 'Engineering'),
(2, 'T002A', 'chan', 'Chan Ler-Kuan', 'Information Technology'),
(3, 'T003A', 'abc', 'Yang Chee Beng', 'Information Technology'),
(4, 'T004A', 'abc', 'Liao Hong Kai', 'Engineering'),
(5, 'T005A', 'a1001c', 'Ng Shu Ling', 'Commerce'),
(12, '123', 'f5b9427750e1b49e7ea0572daf4908c4de6358c2', '123', 'Engineering');

-- --------------------------------------------------------

--
-- 表的结构 `time`
--

CREATE TABLE `time` (
  `id` int(3) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `time`
--

INSERT INTO `time` (`id`, `time`) VALUES
(1, '8.00am'),
(2, '8.30am'),
(3, '9.00am'),
(4, '9.30am'),
(5, '10:00am'),
(6, '11:00am'),
(7, '12:00pm'),
(8, '1:00am'),
(9, '2:00pm'),
(10, '3:00pm'),
(11, '4:00pm'),
(12, '5:00pm'),
(13, '6:00pm');

-- --------------------------------------------------------

--
-- 表的结构 `uploadref`
--

CREATE TABLE `uploadref` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `SID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `uploadref`
--

INSERT INTO `uploadref` (`id`, `title`, `name`, `size`, `SID`) VALUES
(31, '', 'Revison2021.pdf', 140562, 'D190250B'),
(33, '', 'Revison2021 (1).pdf', 140562, 'D190250B'),
(34, '', 'Revison2021 (1).pdf', 140562, 'D190250B'),
(35, '11promax', 'Revison2021 (2).pdf', 140562, 'D190250B');

-- --------------------------------------------------------

--
-- 表的结构 `uploadreport`
--

CREATE TABLE `uploadreport` (
  `id` int(5) NOT NULL,
  `sid` varchar(8) NOT NULL,
  `filetitle` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `Rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `uploadreport`
--

INSERT INTO `uploadreport` (`id`, `sid`, `filetitle`, `name`, `size`, `comment`, `teacherName`, `date`, `Rating`) VALUES
(15, 'D190214B', '11promax', 'Revison2021 (2).pdf', 140562, '', '0', '0000-00-00', NULL),
(18, 'D190250B', '11promax', 'Revison2021 (1).pdf', 140562, '  nooob\r\n    ', 'T001A', '2021-01-16', 4);

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- 表的索引 `formrequest`
--
ALTER TABLE `formrequest`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `recordmeeting`
--
ALTER TABLE `recordmeeting`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `uploadref`
--
ALTER TABLE `uploadref`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `uploadreport`
--
ALTER TABLE `uploadreport`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用表AUTO_INCREMENT `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `formrequest`
--
ALTER TABLE `formrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用表AUTO_INCREMENT `recordmeeting`
--
ALTER TABLE `recordmeeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `studentdetail`
--
ALTER TABLE `studentdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用表AUTO_INCREMENT `time`
--
ALTER TABLE `time`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `uploadref`
--
ALTER TABLE `uploadref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 使用表AUTO_INCREMENT `uploadreport`
--
ALTER TABLE `uploadreport`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
