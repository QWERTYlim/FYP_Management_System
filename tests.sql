-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-01-08 05:53:12
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

-- --------------------------------------------------------

--
-- 表的结构 `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `designation`) VALUES
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
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `request` varchar(255) NOT NULL,
  `teacher` varchar(55) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `formrequest`
--

INSERT INTO `formrequest` (`id`, `sid`, `file`, `size`, `request`, `teacher`, `comment`) VALUES
(4, 'D190250B', 'jar_files.zip', 124066, 'Approve', 'Lim Pei Geok', 'try'),
(5, 'D190250B', 'jar_files.rer', 547007, 'Approve', 'Lim Pei Geok', 'today'),
(6, 'D190250B', 'jar_files.zip', 547007, 'Approve', 'Lim Pei Geok', 'done'),
(7, 'D180293B', 'jar_files.zip', 121859, 'Approve', 'MuMu', 'all'),
(8, 'D180293B', 'jar_files.zip', 121859, 'Approve', 'MuMu', 'want to be ur student');

-- --------------------------------------------------------

--
-- 表的结构 `recordmeeting`
--

CREATE TABLE `recordmeeting` (
  `id` int(11) NOT NULL,
  `sid` varchar(8) NOT NULL,
  `file` varchar(255) NOT NULL,
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

INSERT INTO `recordmeeting` (`id`, `sid`, `file`, `size`, `issues`, `feedback`, `actionfeedback`, `matters`, `teacherName`, `created_at`, `updated_at`, `seen`) VALUES
(1, 'D190250B', 'Project Documents (1).zip', 836026, 'a', 'a', 'a', 'a', '', '2020-12-29 20:10:26', '2020-12-29 20:10:26', ''),
(3, 'D190250B', 'Test2020C (1).pdf', 124066, 'a', 'a', 'a', 'a', '123', '2020-12-29 20:10:52', '2020-12-29 20:10:52', 'seen'),
(4, 'D190250B', 'Test2020C.pdf', 124066, 'b', 'b', 'b', 'b', '123', '2020-12-29 20:11:34', '2020-12-29 20:11:34', 'seen'),
(5, 'D190250B', 'Test2020C (1).pdf', 124066, 'a', 'a', 'a', 'a', '123', '2020-12-29 20:53:38', '2020-12-29 20:53:38', 'seen');

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
  `DepartmentID` int(11) NOT NULL,
  `StudentID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `studentdetail`
--

INSERT INTO `studentdetail` (`ID`, `TeacherID`, `DepartmentID`, `StudentID`) VALUES
(1, 0, 16, 'D180293B'),
(2, 0, 14, 'D190250B');

-- --------------------------------------------------------

--
-- 表的结构 `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `StudentID` varchar(8) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Email` char(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `StudentID`, `Password`, `studentName`, `PhoneNumber`, `Email`) VALUES
(1, 'D190250B', 'CC07836R', 'Alex Tan Boon Leng', '017-4139389', 'alex@gmail.com.my'),
(2, 'D180293B', 'DV48845T', 'Lim Yu Jie', '014-3883654', 'ashjfd@hh.com');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(5) NOT NULL,
  `TeacherID` varchar(255) NOT NULL,
  `Password` varchar(55) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `FacultyID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`ID`, `TeacherID`, `Password`, `Name`, `FacultyID`) VALUES
(1, '123', 'lim', 'Lim Pei Geok', 14),
(2, '456', 'chan', 'Chan Ler-Kuan', 16),
(3, '789', 'abc', 'MuMu', 16),
(4, '14', 'abc', 'hk', 14);

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
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `SID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `uploadref`
--

INSERT INTO `uploadref` (`id`, `name`, `size`, `downloads`, `SID`) VALUES
(24, 'Macdonald.rar', 547007, 6, 'D180293B'),
(25, 'Chp12.zip', 5117, 0, 'D180293B'),
(26, 'Macdonald.rar', 547007, 0, 'D190250B'),
(27, 'Macdonald.rar', 547007, 0, 'D190250B'),
(28, 'New folder (3).zip', 2994, 0, ''),
(29, 'New folder (3).zip', 2994, 0, ''),
(30, 'New folder (3).zip', 2994, 0, '');

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
  `teacherName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `uploadreport`
--

INSERT INTO `uploadreport` (`id`, `sid`, `filetitle`, `name`, `size`, `comment`, `teacherName`) VALUES
(14, 'D190250B', 'fyp', 'Test2020C (1).pdf', 124066, '    stupid       asddddd', '123');

--
-- 转储表的索引
--

--
-- 表的索引 `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

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
-- 使用表AUTO_INCREMENT `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用表AUTO_INCREMENT `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `formrequest`
--
ALTER TABLE `formrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `recordmeeting`
--
ALTER TABLE `recordmeeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `studentdetail`
--
ALTER TABLE `studentdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `time`
--
ALTER TABLE `time`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `uploadref`
--
ALTER TABLE `uploadref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用表AUTO_INCREMENT `uploadreport`
--
ALTER TABLE `uploadreport`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
