-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-12-21 12:39:16
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
-- 数据库： `test`
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
  `student_id` varchar(15) NOT NULL,
  `student_name` varchar(15) NOT NULL,
  `approval` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `appointment`
--

INSERT INTO `appointment` (`id`, `faculty`, `date`, `time`, `room`, `teacher`, `student_id`, `student_name`, `approval`) VALUES
(31, 'Information Technology', '2020-11-26', '9.00am', '115a', 'Chan Ler-Kuan', '', '', 'Approve'),
(32, 'Engineering', '0000-00-00', '8.00am', '115a', 'Lim Pei Geok', '', '', NULL);

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
-- 表的结构 `sem`
--

CREATE TABLE `sem` (
  `id` int(5) NOT NULL,
  `sem_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `sem`
--

INSERT INTO `sem` (`id`, `sem_name`) VALUES
(1, '2020A'),
(2, '2020B'),
(3, '2020C');

-- --------------------------------------------------------

--
-- 表的结构 `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `StudentID` varchar(8) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Email` char(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `StudentID`, `Password`, `PhoneNumber`, `Email`) VALUES
(1, 'D190250B', 'CC07836R', '017-4139389', 'alex@gmail.com.my');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `facultyid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `facultyid`) VALUES
(1, 'Lim Pei Geok', 16),
(2, 'Chan Ler-Kuan', 20);

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
-- 表的结构 `timeslot`
--

CREATE TABLE `timeslot` (
  `id` int(5) NOT NULL,
  `student_id` varchar(8) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `sem_name` varchar(5) NOT NULL,
  `from_time` varchar(7) NOT NULL,
  `to_time` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `timeslot`
--

INSERT INTO `timeslot` (`id`, `student_id`, `student_name`, `teacher_name`, `sem_name`, `from_time`, `to_time`) VALUES
(16, 'D180293B', 'Lim Yu Jie', 'Lim Pei Geok', '2020A', '8.00am', '8.00am');

-- --------------------------------------------------------

--
-- 表的结构 `uploadref`
--

CREATE TABLE `uploadref` (
  `id` int(11) NOT NULL,
  `filetitle` varchar(11) NOT NULL,
  `file` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `uploadref`
--

INSERT INTO `uploadref` (`id`, `filetitle`, `file`) VALUES
(14, '11promax', '3766-11-pro');

-- --------------------------------------------------------

--
-- 表的结构 `uploadreport`
--

CREATE TABLE `uploadreport` (
  `id` int(5) NOT NULL,
  `sid` varchar(8) NOT NULL,
  `filetitle` varchar(30) NOT NULL,
  `file` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `teacherName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `uploadreport`
--

INSERT INTO `uploadreport` (`id`, `sid`, `filetitle`, `file`, `comment`, `teacherName`) VALUES
(1, 'D190250B', '11promax', '8109-1.png', '', '0'),
(3, '', '11promax', '5164-11-pro-max-2.jpg', '', '0'),
(4, '', '11promax', '1158-Apple_announce-iphone12pro_10132020.jpg.landing-big_2x.jpg', '', 'Lim Pei Geok'),
(5, 'D190250B', 'Ayam Goreng McD™ Regular (9pcs', '4135-618ZI2Xyw+L._AC_SL1500_.jpg', '', 'Chan Ler-Kuan');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'lim', '123');

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
-- 表的索引 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `sem`
--
ALTER TABLE `sem`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- 表的索引 `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `timeslot`
--
ALTER TABLE `timeslot`
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
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用表AUTO_INCREMENT `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `sem`
--
ALTER TABLE `sem`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `time`
--
ALTER TABLE `time`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `uploadref`
--
ALTER TABLE `uploadref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `uploadreport`
--
ALTER TABLE `uploadreport`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
