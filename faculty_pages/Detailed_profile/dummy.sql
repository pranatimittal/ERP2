-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 09:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

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

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(142403, 407324),
(1772884, 1568165),
(924139, 1831904),
(13296, 1162892);

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
('BTech.', 'CSE2', 8, '1'),
('BTech.', 'CSE2', 8, '2'),
('BTech.', 'CSE1', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(11) NOT NULL,
  `dname` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '12-03-2020', 'MAP', 'Assignment 1', '', 'Complete by next week', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualification` longtext NOT NULL,
  `area_of_sp` longtext NOT NULL,
  `did` int(11) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `email` varchar(180) NOT NULL,
  `office_loc` varchar(10000) NOT NULL,
  `cur_teaching` mediumtext NOT NULL,
  `interests` mediumtext NOT NULL,
  `prof_society` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `designation`, `qualification`, `area_of_sp`, `did`, `profile_name`, `email`, `office_loc`, `cur_teaching`, `interests`, `prof_society`) VALUES
(1, 'Prof.', 'MIT\r\nIITD\r\n', 'ML\r\nDL\r\nNLP', 1, 'Prof. Tanya Sharma', 't@gmail.com', 'Room no.101, CSE block , IGDTUW', 'Btech. CSE 3,4 Year', 'ML\r\nAI', 'CSI,IEEE  '),
(2, 'Prof.', 'Btech CSE, Mtech Cse, PhD in Embedded Systems from Harvard', 'AI,NLP,IoT', 1, 'Prof. Monika Ojha', 'm@gmail.com', 'Room no.102, CSE block , IGDTUW', 'Btech. CSE 1,3,4 Year', 'Deep Learning, Networks', 'CSI,IEEE');

-- --------------------------------------------------------

--
-- Table structure for table `f_achievement`
--

CREATE TABLE `f_achievement` (
  `aid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `value` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_achievement`
--

INSERT INTO `f_achievement` (`aid`, `fid`, `value`) VALUES
(1, 1, 'rtdfgfygthhghj');

-- --------------------------------------------------------

--
-- Table structure for table `f_books`
--

CREATE TABLE `f_books` (
  `bid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `year` varchar(6) NOT NULL,
  `bookname` text NOT NULL,
  `publisher` varchar(1000) NOT NULL,
  `author` text NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_books`
--

INSERT INTO `f_books` (`bid`, `fid`, `year`, `bookname`, `publisher`, `author`, `isbn`, `link`) VALUES
(1, 1, '2222', 'wer', 'sdf', 'edf', '1', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `f_complete_funding`
--

CREATE TABLE `f_complete_funding` (
  `com_id` int(100) NOT NULL,
  `fid` int(255) NOT NULL,
  `completed_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_complete_funding`
--

INSERT INTO `f_complete_funding` (`com_id`, `fid`, `completed_project`) VALUES
(1, 1, 'Completed feedback management system.. '),
(2, 1, 'complete'),
(3, 1, 'fund');

-- --------------------------------------------------------

--
-- Table structure for table `f_conference`
--

CREATE TABLE `f_conference` (
  `cid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `year` varchar(6) NOT NULL,
  `paper` mediumtext NOT NULL,
  `link` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_conference`
--

INSERT INTO `f_conference` (`cid`, `fid`, `year`, `paper`, `link`) VALUES
(1, 1, '2222', 'qwsdfgb', 'fdffrgfgrfgdfdrgtfsrgt');

-- --------------------------------------------------------

--
-- Table structure for table `f_cons_ass_funding`
--

CREATE TABLE `f_cons_ass_funding` (
  `cons_id` int(100) NOT NULL,
  `fid` int(255) NOT NULL,
  `cons_ass` varchar(2552) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_cons_ass_funding`
--

INSERT INTO `f_cons_ass_funding` (`cons_id`, `fid`, `cons_ass`) VALUES
(2, 1, 'consult'),
(5, 1, 'jijs has given me assignment '),
(6, 1, 'mad');

-- --------------------------------------------------------

--
-- Table structure for table `f_current_funding`
--

CREATE TABLE `f_current_funding` (
  `cur_id` int(100) NOT NULL,
  `fid` int(255) NOT NULL,
  `current_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_current_funding`
--

INSERT INTO `f_current_funding` (`cur_id`, `fid`, `current_project`) VALUES
(1, 1, 'currently running faculty information management system..'),
(2, 1, 'current project'),
(3, 1, 'funding');

-- --------------------------------------------------------

--
-- Table structure for table `f_equipment_funding`
--

CREATE TABLE `f_equipment_funding` (
  `equip_id` int(100) NOT NULL,
  `fid` int(255) NOT NULL,
  `equipment_grant` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_equipment_funding`
--

INSERT INTO `f_equipment_funding` (`equip_id`, `fid`, `equipment_grant`) VALUES
(1, 1, 'equipment granted successfully..'),
(2, 1, 'fund'),
(5, 1, 'silly');

-- --------------------------------------------------------

--
-- Table structure for table `f_journal`
--

CREATE TABLE `f_journal` (
  `jid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `year` varchar(6) NOT NULL,
  `papertitle` mediumtext NOT NULL,
  `indexing` varchar(1000) NOT NULL,
  `impactfactor` varchar(10) NOT NULL,
  `publisher` varchar(10000) NOT NULL,
  `volume` varchar(1000) NOT NULL,
  `isbn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_journal`
--

INSERT INTO `f_journal` (`jid`, `fid`, `year`, `papertitle`, `indexing`, `impactfactor`, `publisher`, `volume`, `isbn`) VALUES
(1, 1, '2020', 'qwertyuio', '1', '1', 'qwertyujm', '12345', '676543');

-- --------------------------------------------------------

--
-- Table structure for table `f_research`
--

CREATE TABLE `f_research` (
  `rid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `year` varchar(6) NOT NULL,
  `p_name` longtext NOT NULL,
  `link` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_research`
--

INSERT INTO `f_research` (`rid`, `fid`, `year`, `p_name`, `link`) VALUES
(2, 1, '2017', 'Dawit Mamo Alemu, Dr. M. Madhavi Latha (2020); Design and Implementation of Acoustic Echo Cancellation on Xilinx Zynq for FPGA Co-simulation using LMS Adaptive Filter; International Journal of Scientific and Research Publications (IJSRP) 10(03) (ISSN: 2250-3153)', 'http://dx.doi.org/10.29322/IJSRP.10.03.2020.p9903'),
(3, 2, '2017', 'Osamah, Ibrahim & Khalaf, Osamah & Abdulsahib, Ghaida. (2020). Optimization of Wireless Sensor Network Coverage using the Bee Algorithm. Journal of Information Science and Engineering. 36. 377-386. 10.6688/JISE.202003_36(2).0015. ', 'https://www.researchgate.net/publication/339774310_Optimization_of_Wireless_Sensor_Network_Coverage_using_the_Bee_Algorithm/citation/download');

-- --------------------------------------------------------

--
-- Table structure for table `f_student`
--

CREATE TABLE `f_student` (
  `sid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `type` varchar(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `topic` text NOT NULL,
  `university` varchar(500) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_student`
--

INSERT INTO `f_student` (`sid`, `fid`, `type`, `name`, `topic`, `university`, `date`) VALUES
(1, 1, 'PhD', 'Roopam Tyagi', 'Machine Learning', 'IGDTUW', '2020-03-03'),
(3, 1, 'Masters', 'Deepak Chaurasiya', 'Iot & AI', 'DTU', '2019-04-01'),
(5, 1, 'Research', 'Gargi Mukherjee', 'Embedded Systems', 'IGDTUW', '2004-01-17'),
(7, 2, 'PhD', 'Rohit Sharma', 'Embedded Systems', 'DTU', '2019-02-06'),
(8, 2, 'Research', 'Rohini Prabhakar', 'Image Processing', 'IGDTUW', '2020-03-24');

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
(1, '', 0, 0, 0, 0, 0, '12-03-2020', ''),
(2, 's1@gmail.com', 384326, 1, 1, 2, 1, '12-03-2020', 'l@a@Unattempted@w@'),
(3, 'n@gmail.com', 384326, 2, 2, 1, 1, '12-03-2020', 'n@Unattempted@Unattempted@w@'),
(4, 'a@gmail.com', 384326, 0, 0, 0, 4, '20-03-2020', 'Unattempted@Unattempted@Unattempted@Unattempted@'),
(5, 's@gmail.com', 384326, 2, 2, 1, 1, '20-03-2020', 'a@x@f@Unattempted@'),
(6, 't@gmail.com', 384326, 1, 1, 2, 1, '20-03-2020', 'a@Unattempted@f@n@');

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
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_faculty`
--

INSERT INTO `login_faculty` (`id`, `tname`, `email`, `mob`, `password`, `sec_ques`, `sques_ans`, `image`) VALUES
(1, 'Tanya', 't@gmail.com', '12345', 't', 'What is your favorite food?', 'momos', 'Sketch.png'),
(2, 'Monika', 'm@gmail.com', '12345', 'm', 'What is the name of the author of your favourite book ?', 'book', 'Screenshot (1).png');

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
(1, 'tanya', '12', 't@gmail.com', 12345, 't', 'CSE2', 'BTech.', 8, '2016-2020', 'Screenshot (1).png', 'What is your favorite food?', 'momos'),
(2, 'Nikunj', '101', 'n@gmail.com', 12345, 'n', 'CSE2', 'BTech.', 8, '2016-2020', 'Sketch.png', 'What was the name of your primary school?', 'sps'),
(3, 'Shree', '102', 's@gmail.com', 12345, '123s', 'CSE2', 'BTech.', 8, '2016-2020', 'Sketch.png', 'What was the name of your primary school?', 'sps');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_research`
--

CREATE TABLE `ongoing_research` (
  `orid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `research` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ongoing_research`
--

INSERT INTO `ongoing_research` (`orid`, `fid`, `research`) VALUES
(1, 1, ' Online Formative Assessment is one of the process to boost the quality of curriculum and learning English language as a second language in Malaysian classroom environment. The aim of using online assessment tool is to attract the studentsâ€™ interest and passion in learning English. Therefore, this study is executed to find out the studentsâ€™ perceptions towards the use of online formative assessment tool, Quizziz. '),
(3, 2, 'Nanda, Smruti & Reza, Hassan. (2020). Deriving Scalability Tactics for Development of Data-Intensive Systems. Enforcing scalability quality attribute to an existing developed data-intensive software system is a diffi-cult task. This paper proposes a methodology that reverses the traditional procedure by reframing sca-lability tactics. The scalability tactics are derived from existing scalable data-intensive system deve-lopment practices and are presented in the format of a utility tree. These tactics can be analyzed against arc-hitectural patterns which are design decessions for software development. This will maximize the hold of scalability attributes in end software product be-fore its actual development. The tactics derived in this paper will help an architect to have the correct design decision for data-intensive system develop-ment. Tactics alone may not solve the problem but when contrasted with architectural patterns, they will help in determining if the system is scalable.');

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
(142403, 'a', 407324),
(142403, 'b', 298354),
(142403, 'c', 50076),
(142403, 'd', 625588),
(1772884, 'w', 1964143),
(1772884, 'x', 1568165),
(1772884, 'y', 635953),
(1772884, 'z', 917081),
(924139, 'e', 1225940),
(924139, 'f', 1831904),
(924139, 'g', 1513861),
(924139, 'h', 1817310),
(13296, 'l', 1853425),
(13296, 'm', 255503),
(13296, 'n', 1162892),
(13296, 'o', 566321);

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
(13296, 384326, 'lmno', ''),
(142403, 384326, 'abcd', 'Sketch.png'),
(924139, 384326, 'efgh', ''),
(1772884, 384326, 'wxyz', '');

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
  `date` varchar(20) NOT NULL,
  `testkey` varchar(10) NOT NULL,
  `teacher_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizid`, `subjcode`, `name`, `title`, `intro`, `totalques`, `correct`, `wrong`, `time`, `date`, `testkey`, `teacher_id`) VALUES
(384326, 'BCS302', 'MAP', 'Test1', 'GOOD LUCK', 4, 1, 0, 5, '12-03-2020', '123', 1);

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
('', 0),
('s@gmail.com', 1),
('n@gmail.com', 1);

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
(1, 'BCS 302', 'Mobile Architecture and Progra', '1', 'Tanya'),
(2, 'BCS 306', 'Network Programming', '2', 'Monika'),
(3, 'BCS 302', 'Mobile Architecture and Progra', '', '');

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
(1, 384326, 's@gmail.com', 5, 4, 5, 4, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `counter` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `counter`) VALUES
(1, 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_fb`
--
ALTER TABLE `class_fb`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `f_achievement`
--
ALTER TABLE `f_achievement`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `f_books`
--
ALTER TABLE `f_books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `f_complete_funding`
--
ALTER TABLE `f_complete_funding`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `f_conference`
--
ALTER TABLE `f_conference`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `f_cons_ass_funding`
--
ALTER TABLE `f_cons_ass_funding`
  ADD PRIMARY KEY (`cons_id`);

--
-- Indexes for table `f_current_funding`
--
ALTER TABLE `f_current_funding`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indexes for table `f_equipment_funding`
--
ALTER TABLE `f_equipment_funding`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `f_journal`
--
ALTER TABLE `f_journal`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `f_research`
--
ALTER TABLE `f_research`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `f_student`
--
ALTER TABLE `f_student`
  ADD PRIMARY KEY (`sid`);

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
-- Indexes for table `ongoing_research`
--
ALTER TABLE `ongoing_research`
  ADD PRIMARY KEY (`orid`);

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
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_fb`
--
ALTER TABLE `class_fb`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_achievement`
--
ALTER TABLE `f_achievement`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_books`
--
ALTER TABLE `f_books`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_complete_funding`
--
ALTER TABLE `f_complete_funding`
  MODIFY `com_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_conference`
--
ALTER TABLE `f_conference`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_cons_ass_funding`
--
ALTER TABLE `f_cons_ass_funding`
  MODIFY `cons_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f_current_funding`
--
ALTER TABLE `f_current_funding`
  MODIFY `cur_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_equipment_funding`
--
ALTER TABLE `f_equipment_funding`
  MODIFY `equip_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `f_journal`
--
ALTER TABLE `f_journal`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_research`
--
ALTER TABLE `f_research`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_student`
--
ALTER TABLE `f_student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_faculty`
--
ALTER TABLE `login_faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_student`
--
ALTER TABLE `login_student`
  MODIFY `stu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongoing_research`
--
ALTER TABLE `ongoing_research`
  MODIFY `orid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_fb`
--
ALTER TABLE `teacher_fb`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_fb`
--
ALTER TABLE `test_fb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
