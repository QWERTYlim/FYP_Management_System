-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-01-14 11:58:00
-- 服务器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.0

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
(41, 'Engineering', '2021-01-14', '8.00am', '115a', 'Lim Pei Geok', 'D190250B', 'Alex Tan Boon Leng', 'Approve'),
(42, 'Engineering', '2021-01-13', '8.00am', '115a', 'Lim Pei Geok', 'D190250B', 'Alex Tan Boon Leng', NULL);

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
(4, 'D190250B', 'FYPMS', 'jar_files.zip', 124066, 'Approve', 'Lim Pei Geok', 'Good'),
(13, 'D190214B', 'FYPMS', 'HatchfulExport-All.zip', 30717, 'Reject', 'Lim Pei Geok', 'Pro in php');

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

--
-- 转存表中的数据 `recordmeeting`
--

INSERT INTO `recordmeeting` (`id`, `sid`, `file`, `date`, `size`, `issues`, `feedback`, `actionfeedback`, `matters`, `teacherName`, `created_at`, `updated_at`, `seen`) VALUES
(1, 'D190250B', 'Project Documents (1).zip', NULL, 836026, 'a', 'a', 'a', 'a', '', '2020-12-29 20:10:26', '2020-12-29 20:10:26', ''),
(3, 'D190250B', 'Test2020C (1).pdf', NULL, 124066, 'a', 'a', 'a', 'a', '123', '2020-12-29 20:10:52', '2020-12-29 20:10:52', 'Approve'),
(4, 'D190250B', 'Test2020C.pdf', NULL, 124066, 'b', 'b', 'b', 'b', '123', '2020-12-29 20:11:34', '2020-12-29 20:11:34', 'Approve'),
(5, 'D190250B', 'Test2020C (1).pdf', NULL, 124066, 'a', 'a', 'a', 'a', '123', '2020-12-29 20:53:38', '2020-12-29 20:53:38', 'approve'),
(6, 'D190250B', 'Revison2021 (2).pdf', '2021-01-12', 140562, 'alex', 'yj', 'jw', 't', '123', '2021-01-12 15:05:50', '2021-01-12 15:05:50', 'approve');

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
  `TeacherID` int(11) NOT NULL DEFAULT 0,
  `DepartmentName` varchar(255) NOT NULL,
  `StudentID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `studentdetail`
--

INSERT INTO `studentdetail` (`ID`, `TeacherID`, `DepartmentName`, `StudentID`) VALUES
(1, 456, 'Information Technology', 'D180293B'),
(2, 123, 'Engineering', 'D190250B'),
(5, 123, 'Engineering', 'D190214B'),
(6, 0, 'Information Technology', 'D190241B'),
(7, 0, 'Natural Science', 'D190242B'),
(8, 0, 'Information Technology', 'D190243B'),
(9, 0, 'Management Studies', 'yyyyy'),
(10, 0, 'Engineering', 'aaaaa'),
(11, 0, 'Engineering', 'bbbbb'),
(12, 0, 'Engineering', 'dfgdfg'),
(13, 0, 'Engineering', 'dfgdfg'),
(14, 0, 'Engineering', 'dfgdfg'),
(15, 0, 'Engineering', 'dfgdfg'),
(16, 0, 'Engineering', 'lim'),
(17, 0, 'Information Technology', 'D180293B');

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
(17, 'D180293B', '62d272c026521417b26da3edf705a531e03b4ade', 'Lim Yu Jie', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(5) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  `Password` varchar(55) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `DepartmentName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`ID`, `TeacherID`, `Password`, `Name`, `DepartmentName`) VALUES
(1, '123', 'lim', 'Lim Pei Geok', 'Engineering'),
(2, '456', 'chan', 'Chan Ler-Kuan', 'Information Technology'),
(3, '789', 'abc', 'MuMu', 'Information Technology'),
(4, '14', 'abc', 'hk', 'Engineering'),
(5, 'T100001c', 'a1001c', 'yj', 'Commerce');

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
(14, 'D190250B', 'fyp', 'Test2020C (1).pdf', 124066, '    456', '123', NULL, 4.4),
(15, 'D190214B', '11promax', 'Revison2021 (2).pdf', 140562, '', '0', '0000-00-00', NULL),
(16, 'D190250B', '11promax', 'Revison2021 (2).pdf', 140562, '    123    ', '123', '0000-00-00', 3.6),
(17, 'D190250B', '11promax', 'Revison2021 (2).pdf', 140562, '', '123', '2021-01-13', 3.7);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 使用表AUTO_INCREMENT `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `formrequest`
--
ALTER TABLE `formrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
