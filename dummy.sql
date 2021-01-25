-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 06:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `student_timetable` (
  `program` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `student_timetable` VALUES
("BTech.", "CSE1", 8, "TT_BTech_8th_CSE2.png"), 
("BTech.", "CSE2", 8, "TT_BTech_8th_CSE2.png"),
("BTech.", "CSE1", 6, "TT_BTech_6th_CSE1.png"),
("BTech.", "CSE2", 6, "TT_BTech_6th_CSE2.png"),
("BTech.", "CSE1", 4, "TT_BTech_4th_CSE1.png"),
("BTech.", "CSE2", 4, "TT_BTech_4th_CSE2.png");

CREATE TABLE `attendance` (
  `program` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `tid` int(225) NOT NULL,
  `attendno` int(100) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sunnygkp10@gmail.com', '123456'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` int(255) NOT NULL,
  `ansid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
(1624, 516),
(1772, 690),
(1448, 564),
(1994, 874),
(1591, 501),
(1451, 923),
(1122, 561),
(1449, 817),
(1817, 615),
(1530, 619),
(1694, 743),
(1165, 763),
(1101, 588),
(1107, 769),
(1437, 605),
(1320, 739),
(1938, 708),
(1398, 770),
(1755, 766),
(1926, 845),
(1476, 927),
(1031, 806),
(1661, 717),
(1363, 949);

-- --------------------------------------------------------

--
-- Table structure for table `class_fb`
--

CREATE TABLE `class_fb` (
  `f_id` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tid` int(11) NOT NULL,
  `date` varchar(12) NOT NULL,
  `program` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `feedback` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_fb`
--

INSERT INTO `class_fb` (`f_id`, `tname`, `tid`, `date`, `program`, `branch`, `batch`, `semester`, `feedback`) VALUES
(1, 'Monika', 1, '2020-01-23', 'Btech.', 'CSE', '2016-2020', 8, 'CSE will have a class test on 2/02/2020.');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE `coursedetails` (
  `program` varchar(20) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL,
  `tid` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`program`, `branch`, `semester`, `tid`) VALUES
('Mtech.', 'AI', 1, '2'),
('Btech.', 'CSE2', 4, '1'),
('Btech.', 'CSE2', 8, '1'),
('Btech.', 'CSE2', 8, '3'),
('MTech.', 'AI', 2, ''),
('PhD', 'AI', 8, '1'),
('BTech.', 'CSE1', 6, '1'),
('Btech.', 'CSE1', 8, '2');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `date` varchar(12) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `date`, `sub_name`, `doc_name`, `doc`, `message`, `teacher_id`) VALUES
(15, '2020-02-06', 'MAP', 'Assignment 12', 'minor project research paper.pdf', 'Complete by tomorrow.', 1),
(16, '2020-02-07', 'OS', 'notes', 'aca file.docx', 'submit next monday', 3);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quizid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `right_ans` int(11) NOT NULL,
  `wrong_ans` int(11) NOT NULL,
  `unattempted` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `stud_ans` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `email`, `quizid`, `score`, `right_ans`, `wrong_ans`, `unattempted`, `date`, `stud_ans`) VALUES
(4, 's@gmail.com', 179, 2, 1, 1, 0, '2020-01-23', '3@8@'),
(5, 's@gmail.com', 188, 1, 1, 0, 0, '2020-01-23', 'contagious@'),
(6, 's@gmail.com', 188, 0, 0, 1, 0, '2020-01-24', 'randomly@'),
(7, 's@gmail.com', 188, 1, 1, 0, 0, '2020-01-24', 'contagious@'),
(8, 's@gmail.com', 188, 0, 0, 0, 1, '2020-01-25', 'Unattempted@'),
(10, 'n@gmail.com', 179, 0, 0, 1, 1, '2020-01-25', '3@Unattempted@'),
(11, 'n@gmail.com', 105, 8, 2, 0, 0, '2020-01-25', 'Intranet Message Access Protocol@none of the above@'),
(12, 'n@gmail.com', 105, 8, 2, 0, 0, '2020-01-25', 'Intranet Message Access Protocol@none of the above@'),
(13, 'r@gmail.com', 105, 8, 2, 0, 0, '2020-01-26', 'Intranet Message Access Protocol@none of the above@'),
(14, 'r@gmail.com', 105, 0, 0, 0, 2, '2020-01-26', 'Unattempted@'),
(15, 'r@gmail.com', 105, -2, 0, 2, 0, '2020-01-26', 'malware@'),
(16, 'r@gmail.com', 105, 8, 2, 0, 0, '2020-01-26', 'Intranet Message Access Protocol@none of the above@'),
(17, 's@gmail.com', 105, 8, 2, 0, 0, '2020-01-26', 'Intranet Message Access Protocol@none of the above@'),
(18, 's@gmail.com', 179, 0, 0, 1, 1, '2020-01-26', '2@Unattempted@'),
(19, 's@gmail.com', 179, 2, 1, 1, 0, '2020-01-26', '1@8@'),
(20, 's@gmail.com', 179, 2, 1, 1, 0, '2020-01-26', '5@7@'),
(21, 's@gmail.com', 105, 0, 0, 0, 2, '2020-01-26', 'Unattempted@'),
(22, 'rsmojha1997@gmail.com', 177, 0, 0, 0, 0, '2020-01-26', ''),
(23, 'rsmojha1997@gmail.com', 179, 2, 1, 1, 0, '2020-01-26', '3@8@'),
(24, '', 141, -1, 0, 1, 0, '2020-01-26', 'Q@'),
(25, '', 173, 0, 0, 0, 2, '2020-01-26', 'Unattempted@Unattempted@'),
(26, '', 187, 0, 0, 0, 2, '2020-01-26', 'Unattempted@Unattempted@'),
(27, 'rsmojha1997@gmail.com', 129, -1, 0, 1, 0, '2020-02-03', 'e@'),
(28, 'rsmojha1997@gmail.com', 105, -2, 0, 2, 0, '2020-02-03', 'malware@@'),
(29, 's@gmail.com', 141, -1, 0, 1, 0, '2020-02-12', 'W@'),
(30, 's@gmail.com', 619574, 2, 2, 1, 1, '2020-02-12', 'w@c@d@a@Unattempted@'),
(31, '', 619574, 2, 2, 2, 0, '2020-02-17', '3@d@a@a@c@'),
(32, 'n@gmail.com', 619574, 1, 1, 0, 3, '2020-02-19', 'Unattempted@Unattempted@a@Unattempted@'),
(33, 'an@gmail.com', 619574, 2, 2, 0, 2, '2020-02-20', 'b@Unattempted@Unattempted@c@'),
(34, 'an@gmail.com', 105, 0, 0, 0, 2, '2020-02-20', 'Unattempted@'),
(35, 'n@gmail.com', 129, 0, 0, 0, 1, '2020-02-20', 'Unattempted@');

-- --------------------------------------------------------

--
-- Table structure for table `login_faculty`
--

CREATE TABLE `login_faculty` (
  `id` int(255) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sec_ques` varchar(10000) NOT NULL,
  `sques_ans` varchar(100) NOT NULL,
  `meeting_url` varchar(100),
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_faculty`
--

INSERT INTO `login_faculty` (`id`, `tname`, `email`, `mob`, `password`, `sec_ques`, `sques_ans`, `image`) VALUES
(1, 'Tanya', 't@gmail.com', '123456789', 't', 'What is your pet\'s name?', 'Rocky', ''),
(2, 'Monika', 'm@gmail.com', '', 'monika', '', '', ''),
(3, 'Ankita', 'a@gmail.com', '', 'ankita', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `stu_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `program` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sec_ques` varchar(10000) NOT NULL,
  `sques_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`stu_id`, `name`, `rollno`, `email`, `mob`, `password`, `branch`, `program`, `semester`, `batch`, `image`, `sec_ques`, `sques_ans`) VALUES
(2, 'monika', '07401012016', 'rsmojha1997@gmail.com', 8447583022, 'monika', 'CSE1', 'Btech.', 8, '2016-2020', '', 'What is your pet\'s name?', 'Rocky'),
(4, 'Nikunj', '09201012018', 'n@gmail.com', 7785068889, '123n', 'CSE1', 'Btech.', 8, '2017-2021', '', '', ''),
(5, 'Shree', '0876510108', 's@gmail.com', 123456789, '123', 'CSE2', 'Btech.', 8, '2016-2020', '', 'What is your pet\'s name?', 'Rocky'),
(6, 'Rohit Sharma', '09201012016', 'r@gmail.com', 9310214958, 'rohit', 'CSE2', 'Btech.', 8, '2016-2020', 'Screenshot (1).png', '', ''),
(7, 'Romita', '06501012017', 'rom@gmail.com', 8787878787, 'rom', 'AI', 'Mtech.', 8, '2017-2021', 'Sketch.png', '', ''),
(8, 'Ananya', '09701012016', 'an@gmail.com', 111111111, 'an', 'CSE1', 'BTech.', 8, '2016-2020', 'Sketch.png', 'What is your favorite food?', 'momos'),
(9, 'Seema', '08001012017', 'seema@gmail.com', 222222222, 'seema', 'CSE1', 'BTech.', 6, '2017-2021', 'Screenshot (1).png', 'What is the name of the author of your favourite book ?', 'ruskin bond');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` int(255) NOT NULL,
  `option` varchar(1000) NOT NULL,
  `optionid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
(1624, 'contagious', 516),
(1624, 'non contagious', 965),
(1624, 'stride', 655),
(1624, 'randomly', 648),
(1772, '8', 690),
(1772, '7', 974),
(1772, '86', 720),
(1772, '0', 997),
(1448, '1', 964),
(1448, '2', 940),
(1448, '3', 885),
(1448, '5', 564),
(1994, 'a', 701),
(1994, '4', 737),
(1994, '5', 803),
(1994, 'e', 874),
(1591, 'pearl', 669),
(1591, 'adelina', 843),
(1591, 'nina', 501),
(1591, 'crow', 930),
(1451, '1', 923),
(1451, '2', 641),
(1451, '234', 556),
(1451, '4', 751),
(1122, 'g', 978),
(1122, 'r', 865),
(1122, 'e', 561),
(1122, 'w', 830),
(1449, 'virus', 986),
(1449, 'malware', 595),
(1449, 'worm', 905),
(1449, 'none of the above', 817),
(1817, 'spam', 615),
(1817, 'malware', 618),
(1817, 'virus', 729),
(1817, 'spyware', 848),
(1530, 'Phishing', 506),
(1530, 'Soliciting', 572),
(1530, 'DoS attacks', 619),
(1530, 'Stalking', 921),
(1694, 'Internet Messaging Application', 987),
(1694, 'Intranet Messaging Application', 817),
(1694, 'Internet Message Access Protocol', 743),
(1694, 'Intranet Message Access Protocol', 763),
(1165, 'virus', 847),
(1165, 'malware', 952),
(1165, 'worm', 573),
(1165, 'none of the above', 763),
(1101, 'virus', 980),
(1101, 'malware', 556),
(1101, 'worm', 535),
(1101, 'none of the above', 588),
(1107, 'Q', 943),
(1107, 'W', 676),
(1107, 'E', 769),
(1107, 'R', 777),
(1437, 'Q', 670),
(1437, 'W', 746),
(1437, 'E', 605),
(1437, 'R', 991),
(1320, 'tY', 739),
(1320, 'y', 632),
(1320, 'u', 802),
(1320, 'o', 998),
(1938, 'care', 708),
(1938, 'air', 676),
(1938, 'bear', 935),
(1938, 'dear', 609),
(1398, 'e', 668),
(1398, 'r', 622),
(1398, '', 630),
(1398, 'tu', 770),
(1755, '', 766),
(1755, '', 689),
(1755, '', 952),
(1755, '', 612),
(1926, '', 845),
(1926, '', 781),
(1926, '', 610),
(1926, '', 666),
(1476, 'a', 927),
(1476, 'b', 758),
(1476, 'c', 848),
(1476, 'd', 822),
(1031, 'a', 702),
(1031, 'b', 806),
(1031, 'c', 830),
(1031, 'd', 885),
(1661, 'a', 957),
(1661, 'b', 840),
(1661, 'c', 717),
(1661, 'd', 840),
(1363, 'a', 811),
(1363, 'b', 595),
(1363, 'c', 558),
(1363, 'd', 949);

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `qid` int(11) NOT NULL,
  `quizid` int(11) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`qid`, `quizid`, `ques`, `image`) VALUES
(1031, 619574, 'B', ''),
(1165, 105, 'Firewall', ''),
(1320, 173, 'image', 'hPLjH8C.jpg'),
(1363, 619574, 'D', ''),
(1398, 129, 'hgeugd', 'IMGP2899_Car_678x452.jpg'),
(1437, 141, 'TREE', '5923258-mac-wallpaper.jpg'),
(1448, 179, '5', ''),
(1476, 619574, 'A', ''),
(1624, 188, 'arrays are stored in ____ memory location', ''),
(1661, 619574, 'C', ''),
(1755, 187, '', 'download.jpg'),
(1772, 179, '8+0', ''),
(1926, 187, 'dgggggggggggg', ''),
(1938, 173, 'uuuuuuuuu', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizid` int(255) NOT NULL,
  `subjcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `totalques` int(100) NOT NULL,
  `correct` int(100) NOT NULL,
  `wrong` int(100) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `testkey` varchar(10) NOT NULL,
  `teacher_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizid`, `subjcode`, `name`, `title`, `intro`, `totalques`, `correct`, `wrong`, `time`, `date`, `testkey`, `teacher_id`) VALUES
(105, 'BCS401', 'Cyber Security Management', 'CSM Test-1', 'this test is of unit1', 1, 4, 1, 2, '2020-01-25 16:49:56', 'csm1', 0),
(129, 'monk', 't', 'y', '123', 1, 2, 1, 3, '2020-01-26 19:23:12', '12', 0),
(141, 'BCS074', 'Mix', 'aa', 'Attepmt ALL', 3, 4, 1, 6, '2020-01-26 19:10:40', '123', 0),
(173, 'BCS104', 'ACA', 'ss', 'Q', 2, 2, 1, 2, '2020-01-26 19:20:36', '12', 0),
(177, 'BCS401', 'Cyber Security Management', 'CSM Test-1', 'abc', 1, 1, 0, 2, '2020-01-25 19:11:55', 'csm2', 0),
(179, 'bcs123', 'cn2', 'cn2', '', 2, 2, 0, 7, '2019-11-21 18:26:29', '123', 0),
(187, 'a', 'r', 'r', 'w', 2, 2, 1, 1, '2020-01-26 19:29:29', '11', 0),
(188, 'bcs208', 'c++', 'c++ programming', '', 2, 1, 0, 5, '2019-11-16 09:53:15', '', 0),
(619574, 'BCS111', 'ABC', 'Test', '', 4, 1, 0, 5, '2020-02-12 09:04:28', '123', 1),
(1632584, 'BCS104', 'ACA', 'aa', 'w', 1, 2, 1, 1, '2020-02-01 12:11:51', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`) VALUES
('rsmojha1997@gmail.com', -64),
('s@gmail.com', 135),
('', 3),
('n@gmail.com', 15),
('r@gmail.com', 14),
('an@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sname` varchar(100) NOT NULL,
  `srollno` varchar(15) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `smob` varchar(12) NOT NULL,
  `program` varchar(15) NOT NULL,
  `semester` int(4) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sname`, `srollno`, `semail`, `smob`, `program`, `semester`, `branch`) VALUES
('Monika ', '074', 'rsmojha1997@gmail.com', '8447583022', 'B.tech', 4, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjid` int(11) NOT NULL,
  `subjcode` varchar(10) NOT NULL,
  `subjname` varchar(30) NOT NULL,
  `tid` varchar(12) NOT NULL,
  `tname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjid`, `subjcode`, `subjname`, `tid`, `tname`) VALUES
(1, 'BCS401', 'Cyber Security Management', '1', 'Tanya'),
(2, 'BCS402', 'Real Time Systems', '3', 'Ankita'),
(3, 'BCS201', 'Operating Systems', '1', 'Tanya'),
(4, 'MCS101', 'Natural Language Processing', '2', 'Monika');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(12) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `email`, `date`, `feedback`) VALUES
(1, 'Monika', 'rsmojha1997@gmail.com', '', 'dmwhvd');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_fb`
--

CREATE TABLE `teacher_fb` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_rollno` varchar(15) NOT NULL,
  `f_subject` varchar(100) NOT NULL,
  `teaching_skill` decimal(10,0) NOT NULL,
  `personal_attributes` decimal(10,0) NOT NULL,
  `presentation_skills` decimal(10,0) NOT NULL,
  `Qoflecture` decimal(10,0) NOT NULL,
  `beyond_class` decimal(10,0) NOT NULL,
  `gq1` decimal(10,0) NOT NULL,
  `gq2` decimal(10,0) NOT NULL,
  `practical_section` decimal(10,0) NOT NULL,
  `suggestions` varchar(1000) NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_fb`
--

INSERT INTO `teacher_fb` (`f_id`, `f_name`, `fac_id`, `s_name`, `s_rollno`, `f_subject`, `teaching_skill`, `personal_attributes`, `presentation_skills`, `Qoflecture`, `beyond_class`, `gq1`, `gq2`, `practical_section`, `suggestions`, `date`) VALUES
(28, 'Ankita', 3, 'Shree', '0876510108', 'csm', '4', '4', '3', '3', '3', '1', '1', '3', 'ABCDEFGH', '2020-01-23'),
(29, 'Tanya', 1, 'Shree', '0876510108', 'Cyber', '4', '4', '3', '5', '5', '0', '1', '5', 'hfhfyjfjugkgkj', '2020-01-30'),
(30, 'Tanya', 1, 'Nikunj', '09201012016', 'Cyber', '2', '4', '5', '3', '4', '1', '1', '2', 'nn', '2020-02-03'),
(31, 'Tanya', 1, 'Nikunj', '09201012016', 'Cyber', '5', '3', '5', '3', '2', '1', '0', '3', 'ss', '2020-01-30'),
(32, 'Tanya', 1, 'Nikunj', '09201012016', 'OS', '2', '4', '3', '5', '3', '1', '1', '2', '3d', '2020-02-03'),
(35, 'Tanya', 0, 'Shree', '0876510108', 'Operating Systems', '0', '5', '0', '0', '0', '0', '0', '5', '', '0000-00-00'),
(36, 'Tanya', 0, 'Shree', '0876510108', 'Operating Systems', '1', '5', '2', '3', '4', '0', '0', '0', '', '0000-00-00'),
(37, 'Ankita', 3, 'Shree', '0876510108', 'Real Time Systems', '0', '0', '0', '0', '5', '0', '0', '0', '', '0000-00-00'),
(38, 'Tanya', 3, 'Shree', '0876510108', 'Cyber Security Management', '0', '0', '3', '5', '0', '0', '0', '0', '', '0000-00-00'),
(39, 'Tanya', 3, 'Shree', '0876510108', 'Operating Systems', '0', '0', '0', '0', '0', '1', '0', '0', '', '0000-00-00'),
(40, 'Tanya', 3, 'Shree', '0876510108', 'Cyber Security Management', '0', '5', '0', '0', '0', '0', '0', '0', '', '21-02-2020'),
(41, 'Tanya', 3, 'Shree', '0876510108', 'Cyber Security Management', '3', '0', '0', '0', '4', '1', '1', '0', 'hjhgjgjvhj', '21-02-2020'),
(42, 'Tanya', 3, 'Shree', '0876510108', 'Cyber Security Management', '5', '0', '0', '0', '0', '0', '0', '0', '', '21-02-2020'),
(43, 'Tanya', 1, 'Shree', '0876510108', 'Cyber Security Management', '5', '4', '0', '0', '0', '1', '0', '0', '', '21-02-2020'),
(44, 'Monika', 2, 'Nikunj', '09201012018', 'Natural Language Processing', '0', '5', '0', '0', '0', '1', '1', '5', '', '21-02-2020');

-- --------------------------------------------------------

--
-- Table structure for table `test_fb`
--

CREATE TABLE `test_fb` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `text` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_fb`
--

INSERT INTO `test_fb` (`id`, `tid`, `semail`, `q1`, `q2`, `q3`, `q4`, `q5`, `text`) VALUES
(2, 105, 'r@gmail.com', 5, 4, 5, 4, 5, 'good interface'),
(3, 105, 's@gmail.com', 4, 5, 4, 4, 5, 'good'),
(4, 179, 's@gmail.com', 4, 3, 5, 5, 4, ''),
(5, 179, 's@gmail.com', 5, 5, 1, 4, 5, 'i really liked t.'),
(6, 105, 's@gmail.com', 4, 5, 2, 5, 4, 'abcd'),
(7, 179, 'rsmojha1997@gmail.com', 3, 5, 4, 4, 5, 'okk'),
(8, 129, 'rsmojha1997@gmail.com', 5, 5, 0, 0, 0, ''),
(9, 619574, 's@gmail.com', 4, 5, 5, 5, 4, ''),
(10, 619574, '', 5, 5, 4, 4, 4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_fb`
--
ALTER TABLE `class_fb`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `login_faculty`
--
ALTER TABLE `login_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_student`
--
ALTER TABLE `login_student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjid`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_fb`
--
ALTER TABLE `teacher_fb`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `test_fb`
--
ALTER TABLE `test_fb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_fb`
--
ALTER TABLE `class_fb`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `login_faculty`
--
ALTER TABLE `login_faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_student`
--
ALTER TABLE `login_student`
  MODIFY `stu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_fb`
--
ALTER TABLE `teacher_fb`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `test_fb`
--
ALTER TABLE `test_fb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
