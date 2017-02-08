-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 08:16 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `p1` int(11) NOT NULL DEFAULT '1',
  `p2` int(11) NOT NULL DEFAULT '1',
  `p3` int(11) NOT NULL DEFAULT '1',
  `p4` int(11) NOT NULL DEFAULT '1',
  `p5` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date_id`, `student_id`, `p1`, `p2`, `p3`, `p4`, `p5`) VALUES
(1, 46, 5, 1, 1, 1, 1, 1),
(2, 46, 6, 1, 1, 1, 1, 1),
(3, 46, 7, 1, 1, 1, 1, 1),
(4, 46, 8, 1, 1, 1, 1, 1),
(5, 46, 9, 1, 1, 1, 1, 1),
(6, 46, 10, 1, 1, 1, 1, 1),
(7, 46, 11, 1, 1, 1, 1, 1),
(8, 46, 12, 1, 1, 1, 1, 1),
(9, 46, 13, 1, 1, 1, 1, 1),
(10, 46, 14, 1, 1, 1, 1, 1),
(11, 46, 2, 1, 1, 1, 1, 1),
(12, 46, 15, 1, 1, 1, 1, 1),
(13, 46, 16, 1, 1, 1, 1, 1),
(14, 46, 17, 1, 1, 1, 1, 1),
(15, 46, 18, 1, 1, 1, 1, 1),
(16, 46, 19, 1, 1, 1, 1, 1),
(17, 46, 20, 1, 1, 1, 1, 1),
(18, 46, 21, 1, 1, 1, 1, 1),
(19, 46, 1, 1, 1, 1, 1, 1),
(20, 46, 22, 1, 1, 1, 1, 1),
(21, 46, 23, 1, 1, 1, 1, 1),
(22, 46, 3, 1, 1, 1, 1, 1),
(23, 46, 24, 1, 1, 1, 1, 1),
(24, 46, 25, 1, 1, 1, 1, 1),
(361, 48, 5, 0, 0, 0, 0, 0),
(362, 48, 6, 0, 0, 0, 0, 0),
(363, 48, 7, 0, 0, 0, 0, 0),
(364, 48, 8, 0, 0, 0, 0, 0),
(365, 48, 9, 0, 0, 0, 0, 0),
(366, 48, 10, 0, 0, 0, 0, 0),
(367, 48, 11, 0, 0, 0, 0, 0),
(368, 48, 12, 0, 0, 0, 0, 0),
(369, 48, 13, 0, 0, 0, 0, 0),
(370, 48, 14, 0, 0, 0, 0, 0),
(371, 48, 2, 0, 0, 0, 0, 0),
(372, 48, 15, 0, 0, 0, 0, 0),
(373, 48, 16, 0, 0, 0, 0, 0),
(374, 48, 17, 0, 0, 0, 0, 0),
(375, 48, 18, 0, 0, 0, 0, 0),
(376, 48, 19, 0, 0, 0, 0, 0),
(377, 48, 20, 0, 0, 0, 0, 0),
(378, 48, 21, 0, 0, 0, 0, 0),
(379, 48, 1, 0, 0, 0, 0, 0),
(380, 48, 22, 0, 0, 0, 0, 0),
(381, 48, 23, 0, 0, 0, 0, 0),
(382, 48, 3, 0, 0, 0, 0, 0),
(383, 48, 24, 0, 0, 0, 0, 0),
(384, 48, 25, 0, 0, 0, 0, 0),
(385, 50, 5, 1, 1, 1, 1, 1),
(386, 50, 6, 1, 1, 1, 1, 1),
(387, 50, 7, 1, 1, 1, 1, 1),
(388, 50, 8, 0, 1, 1, 1, 1),
(389, 50, 9, 1, 1, 1, 1, 1),
(390, 50, 10, 0, 1, 1, 1, 1),
(391, 50, 11, 1, 1, 1, 1, 1),
(392, 50, 12, 1, 1, 1, 1, 1),
(393, 50, 13, 1, 1, 1, 1, 1),
(394, 50, 14, 1, 1, 1, 1, 1),
(395, 50, 2, 0, 1, 1, 1, 1),
(396, 50, 15, 0, 1, 1, 1, 1),
(397, 50, 16, 1, 1, 1, 1, 1),
(398, 50, 17, 1, 1, 1, 1, 1),
(399, 50, 18, 1, 1, 1, 1, 1),
(400, 50, 19, 1, 1, 1, 1, 1),
(401, 50, 20, 1, 1, 1, 1, 1),
(402, 50, 21, 1, 1, 1, 1, 1),
(403, 50, 1, 1, 1, 1, 1, 1),
(404, 50, 22, 1, 1, 1, 1, 1),
(405, 50, 23, 1, 1, 1, 1, 1),
(406, 50, 3, 1, 1, 1, 1, 1),
(407, 50, 24, 1, 1, 1, 1, 1),
(408, 50, 25, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `descr`) VALUES
(1, 'Computer Science', 'CS batch, Oldest Batch'),
(5, 'B.Sc. Physics', 'Bachelor of Physics. '),
(6, 'B.com', 'Bachelor Of Commerce With Computer Application'),
(7, 'B.A English', 'Bachelor Of Arts in English'),
(8, 'B.Sc.Mathematics', 'Mathematics'),
(9, 'B.Sc chemistry', 'Bachelor of chemistry'),
(10, 'B.Sc zoology', 'zlgy'),
(11, 'Msc. Computer Science', 'Master of Science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `regno` varchar(12) NOT NULL,
  `dept` int(2) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `regno`, `dept`, `batch`) VALUES
(1, 'ANOOP JAMES', 'MM14CCSR22', 1, 3),
(2, 'SHOBI P P', 'MM14CCSR13', 1, 3),
(3, 'FEBIN SANIL', 'MM14CCSR25', 1, 3),
(5, 'ATHIRA P T', 'MM14CCSR01', 1, 3),
(6, 'KRISHNAVENI M ', 'MM14CCSR03', 1, 3),
(7, 'LAYA R MOHAN', 'MM14CCSR04', 1, 3),
(8, 'MUHSEENA ', 'MM14CCSR05', 1, 3),
(9, 'NIMMY JOSE', 'MM14CCSR06', 1, 3),
(10, 'RASHIDA V', 'MM14CCSR07', 1, 3),
(11, 'AJAY GEO K CHACKO', 'MM14CCSR08', 1, 3),
(12, 'AJINS JOY', 'MM14CCSR09', 1, 3),
(13, 'JUWEL SAJI', 'MM14CCSR10', 1, 3),
(14, 'PRANAV T R', 'MM14CCSR11', 1, 3),
(15, 'AMALU JOSEPH', 'MM14CCSR14', 1, 3),
(16, 'ANJU K C', 'MM14CCSR15', 1, 3),
(17, 'ARSHITHA C K', 'MM14CCSR16', 1, 3),
(18, 'ASHMIDHA U N', 'MM14CCSR17', 1, 3),
(19, 'MANJUSHA R K', 'MM14CCSR19', 1, 3),
(20, 'NIKHILA VIJAY', 'MM14CCSR20', 1, 3),
(21, 'STIGINA P D', 'MM14CCSR21', 1, 3),
(22, 'ASWIN BHIMNATH', 'MM14CCSR23', 1, 3),
(23, 'EBIN K BABY', 'MM14CCSR24', 1, 3),
(24, 'MUHAMMAD ANSHAD', 'MM14CCSR26', 1, 3),
(25, 'NIDHEESH SCARIA', 'MM14CCSR27', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dept` int(2) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `dept`, `level`) VALUES
(1, 'Liji Joy', 1, 0),
(7, 'Sabu O J', 1, 0),
(8, 'Dr. Thomas Monoth', 1, 1),
(9, 'Dr. Regi Francis M', 6, 1),
(10, 'Dr. Savio James', 1, 2),
(14, 'Bessy', 5, 1),
(15, 'Biju Joseph', 7, 1),
(16, 'Pamy Sebastian', 8, 1),
(26, 'Dr Ramya Krishnan M', 6, 0),
(27, 'JUNY THOMAS', 1, 0),
(28, 'LISHA A', 1, 0),
(30, 'BIBIN JOSE', 1, 0),
(31, 'JISHA T E', 1, 0),
(32, 'Dr. THOMAS MONOTH', 1, 0),
(33, 'RAJITHA XAVIOR', 6, 0),
(34, 'BESSY T MARKOSE', 5, 0),
(35, 'ASWINI SREEDHARAN', 5, 0),
(36, 'ASWINI SREEDHARAN', 5, 0),
(37, 'Dr. RAJEEV THOMAS', 9, 0),
(38, 'SRIJINA P S', 9, 0),
(39, 'SREEPRIYA M', 9, 0),
(40, 'NISHIDHA GOUDHAMAN', 9, 0),
(41, 'PRIYANKA K S', 9, 0),
(42, 'BIJU JOSEPH', 7, 0),
(43, 'GEORGE THOMAS', 7, 0),
(44, 'TOBY K JOSEPH', 7, 0),
(45, 'SRUTHY C BABU', 7, 0),
(46, 'DILSHA K DAS', 7, 0),
(47, 'BINOY JOSEPH', 8, 0),
(48, 'MINI THOMAS', 8, 0),
(49, 'AMALA MARIA K CHACKO', 8, 0),
(50, 'Dr Sr BINDHU K THOMAS', 8, 0),
(51, 'VISHNA P', 8, 0),
(52, 'HAIRUNNISA K', 8, 0),
(53, 'Dr MERCY IDNATIUS', 10, 0),
(54, 'MARY NIRMALA BORGIA', 10, 0),
(55, 'ARUSHA K', 10, 0),
(56, 'ASHLY KURIAN', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `day` varchar(3) NOT NULL,
  `period` int(11) NOT NULL,
  `dept` int(11) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `teacher_id`, `day`, `period`, `dept`, `batch`) VALUES
(3, 8, 'Mon', 1, 1, 3),
(273, 1, 'Mon', 1, 1, 3),
(274, 1, 'Mon', 2, 1, 3),
(275, 1, 'Mon', 3, 1, 3),
(276, 1, 'Mon', 4, 1, 3),
(277, 1, 'Mon', 5, 1, 3),
(278, 1, 'Tue', 1, 0, 0),
(279, 1, 'Tue', 2, 0, 0),
(280, 1, 'Tue', 3, 0, 0),
(281, 1, 'Tue', 4, 0, 0),
(282, 1, 'Tue', 5, 0, 0),
(283, 1, 'Wed', 1, 0, 0),
(284, 1, 'Wed', 2, 0, 0),
(285, 1, 'Wed', 3, 0, 0),
(286, 1, 'Wed', 4, 0, 0),
(287, 1, 'Wed', 5, 0, 0),
(288, 1, 'Thu', 1, 0, 0),
(289, 1, 'Thu', 2, 0, 0),
(290, 1, 'Thu', 3, 0, 0),
(291, 1, 'Thu', 4, 0, 0),
(292, 1, 'Thu', 5, 0, 0),
(293, 1, 'Fri', 1, 0, 0),
(294, 1, 'Fri', 2, 0, 0),
(295, 1, 'Fri', 3, 0, 0),
(296, 1, 'Fri', 4, 0, 0),
(297, 1, 'Fri', 5, 0, 0),
(298, 7, 'Mon', 1, 0, 0),
(299, 7, 'Mon', 2, 0, 0),
(300, 7, 'Mon', 3, 0, 0),
(301, 7, 'Mon', 4, 0, 0),
(302, 7, 'Mon', 5, 0, 0),
(303, 7, 'Tue', 1, 0, 0),
(304, 7, 'Tue', 2, 0, 0),
(305, 7, 'Tue', 3, 0, 0),
(306, 7, 'Tue', 4, 0, 0),
(307, 7, 'Tue', 5, 0, 0),
(308, 7, 'Wed', 1, 1, 3),
(309, 7, 'Wed', 2, 0, 0),
(310, 7, 'Wed', 3, 1, 3),
(311, 7, 'Wed', 4, 0, 0),
(312, 7, 'Wed', 5, 0, 0),
(313, 7, 'Thu', 1, 0, 0),
(314, 7, 'Thu', 2, 0, 0),
(315, 7, 'Thu', 3, 0, 0),
(316, 7, 'Thu', 4, 0, 0),
(317, 7, 'Thu', 5, 0, 0),
(318, 7, 'Fri', 1, 0, 0),
(319, 7, 'Fri', 2, 0, 0),
(320, 7, 'Fri', 3, 0, 0),
(321, 7, 'Fri', 4, 0, 0),
(322, 7, 'Fri', 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `teacher_id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `teacher_id`, `email`, `password`) VALUES
(1, 10, 'admin@admin.com', 'admin'),
(7, 1, 'liji@liji.com', 'liji'),
(8, 7, 'sabu@sabu.com', 'sabu'),
(9, 8, 'tmonoth@yahoo.com', 'ttt'),
(10, 9, 'regi@regi.com', 'regi'),
(11, 16, 'pamy@gmail.com', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `workingdays`
--

CREATE TABLE `workingdays` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `dept` int(11) NOT NULL,
  `remark` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workingdays`
--

INSERT INTO `workingdays` (`id`, `date`, `dept`, `remark`) VALUES
(1, '2016-12-01', 1, NULL),
(2, '2016-12-02', 1, NULL),
(3, '2016-12-05', 1, NULL),
(4, '2016-12-06', 1, NULL),
(5, '2016-12-07', 1, NULL),
(6, '2016-12-08', 1, NULL),
(7, '2016-12-09', 1, NULL),
(8, '2016-12-12', 1, NULL),
(9, '2016-12-13', 1, NULL),
(10, '2016-12-14', 1, NULL),
(11, '2016-12-15', 1, NULL),
(12, '2016-12-16', 1, NULL),
(13, '2016-12-19', 1, NULL),
(14, '2016-12-20', 1, 'Strike'),
(15, '2016-12-21', 1, NULL),
(16, '2016-12-22', 1, NULL),
(17, '2016-12-23', 1, NULL),
(18, '2016-12-26', 1, 'Christmas Leave'),
(19, '2016-12-27', 1, NULL),
(20, '2016-12-28', 1, NULL),
(21, '2016-12-29', 1, NULL),
(22, '2016-12-30', 1, NULL),
(23, '2017-01-02', 1, NULL),
(24, '2017-01-03', 1, NULL),
(25, '2017-01-04', 1, NULL),
(26, '2017-01-05', 1, NULL),
(27, '2017-01-06', 1, NULL),
(28, '2017-01-09', 1, NULL),
(29, '2017-01-10', 1, NULL),
(30, '2017-01-11', 1, NULL),
(31, '2017-01-12', 1, NULL),
(32, '2017-01-13', 1, NULL),
(33, '2017-01-16', 1, NULL),
(34, '2017-01-17', 1, NULL),
(35, '2017-01-18', 1, NULL),
(36, '2017-01-19', 1, NULL),
(37, '2017-01-20', 1, NULL),
(38, '2017-01-23', 1, NULL),
(39, '2017-01-24', 1, NULL),
(40, '2017-01-25', 1, NULL),
(41, '2017-01-26', 1, NULL),
(42, '2017-01-27', 1, NULL),
(43, '2017-01-30', 1, NULL),
(44, '2017-01-31', 1, NULL),
(45, '2017-02-01', 1, NULL),
(46, '2017-02-02', 1, NULL),
(47, '2017-02-03', 1, NULL),
(48, '2017-02-06', 1, NULL),
(49, '2017-02-07', 1, NULL),
(50, '2017-02-08', 1, NULL),
(51, '2017-02-09', 1, NULL),
(52, '2017-02-10', 1, NULL),
(53, '2017-02-13', 1, NULL),
(54, '2017-02-14', 1, NULL),
(55, '2017-02-15', 1, NULL),
(56, '2017-02-16', 1, NULL),
(57, '2017-02-17', 1, NULL),
(58, '2017-02-20', 1, NULL),
(59, '2017-02-21', 1, NULL),
(60, '2017-02-22', 1, NULL),
(61, '2017-02-23', 1, NULL),
(62, '2017-02-24', 1, NULL),
(63, '2017-02-27', 1, NULL),
(64, '2017-02-28', 1, NULL),
(65, '2017-03-01', 1, NULL),
(66, '2017-03-02', 1, NULL),
(67, '2017-03-03', 1, NULL),
(68, '2017-03-06', 1, NULL),
(69, '2017-03-07', 1, NULL),
(70, '2017-03-08', 1, NULL),
(71, '2017-03-09', 1, NULL),
(72, '2017-03-10', 1, NULL),
(73, '2017-03-13', 1, NULL),
(74, '2017-03-14', 1, NULL),
(75, '2017-03-15', 1, NULL),
(76, '2017-03-16', 1, NULL),
(77, '2017-03-17', 1, NULL),
(78, '2017-03-20', 1, NULL),
(79, '2017-03-21', 1, NULL),
(80, '2017-03-22', 1, NULL),
(81, '2017-03-23', 1, NULL),
(82, '2017-03-24', 1, NULL),
(83, '2017-03-27', 1, NULL),
(84, '2017-03-28', 1, NULL),
(85, '2017-03-29', 1, NULL),
(86, '2017-03-30', 1, NULL),
(87, '2017-03-31', 1, NULL),
(88, '2016-12-01', 5, NULL),
(89, '2016-12-02', 5, NULL),
(90, '2016-12-05', 5, NULL),
(91, '2016-12-06', 5, NULL),
(92, '2016-12-07', 5, NULL),
(93, '2016-12-08', 5, NULL),
(94, '2016-12-09', 5, NULL),
(95, '2016-12-12', 5, NULL),
(96, '2016-12-13', 5, NULL),
(97, '2016-12-14', 5, NULL),
(98, '2016-12-15', 5, NULL),
(99, '2016-12-16', 5, NULL),
(100, '2016-12-19', 5, NULL),
(101, '2016-12-20', 5, NULL),
(102, '2016-12-21', 5, NULL),
(103, '2016-12-22', 5, NULL),
(104, '2016-12-23', 5, NULL),
(105, '2016-12-26', 5, NULL),
(106, '2016-12-27', 5, NULL),
(107, '2016-12-28', 5, NULL),
(108, '2016-12-29', 5, NULL),
(109, '2016-12-30', 5, NULL),
(110, '2017-01-02', 5, NULL),
(111, '2017-01-03', 5, NULL),
(112, '2017-01-04', 5, NULL),
(113, '2017-01-05', 5, NULL),
(114, '2017-01-06', 5, NULL),
(115, '2017-01-09', 5, NULL),
(116, '2017-01-10', 5, NULL),
(117, '2017-01-11', 5, NULL),
(118, '2017-01-12', 5, NULL),
(119, '2017-01-13', 5, NULL),
(120, '2017-01-16', 5, NULL),
(121, '2017-01-17', 5, NULL),
(122, '2017-01-18', 5, NULL),
(123, '2017-01-19', 5, NULL),
(124, '2017-01-20', 5, NULL),
(125, '2017-01-23', 5, NULL),
(126, '2017-01-24', 5, NULL),
(127, '2017-01-25', 5, NULL),
(128, '2017-01-26', 5, NULL),
(129, '2017-01-27', 5, NULL),
(130, '2017-01-30', 5, NULL),
(131, '2017-01-31', 5, NULL),
(132, '2017-02-01', 5, NULL),
(133, '2017-02-02', 5, NULL),
(134, '2017-02-03', 5, NULL),
(135, '2017-02-06', 5, NULL),
(136, '2017-02-07', 5, NULL),
(137, '2017-02-08', 5, NULL),
(138, '2017-02-09', 5, NULL),
(139, '2017-02-10', 5, NULL),
(140, '2017-02-13', 5, NULL),
(141, '2017-02-14', 5, NULL),
(142, '2017-02-15', 5, NULL),
(143, '2017-02-16', 5, NULL),
(144, '2017-02-17', 5, NULL),
(145, '2017-02-20', 5, NULL),
(146, '2017-02-21', 5, NULL),
(147, '2017-02-22', 5, NULL),
(148, '2017-02-23', 5, NULL),
(149, '2017-02-24', 5, NULL),
(150, '2017-02-27', 5, NULL),
(151, '2017-02-28', 5, NULL),
(152, '2017-03-01', 5, NULL),
(153, '2017-03-02', 5, NULL),
(154, '2017-03-03', 5, NULL),
(155, '2017-03-06', 5, NULL),
(156, '2017-03-07', 5, NULL),
(157, '2017-03-08', 5, NULL),
(158, '2017-03-09', 5, NULL),
(159, '2017-03-10', 5, NULL),
(160, '2017-03-13', 5, NULL),
(161, '2017-03-14', 5, NULL),
(162, '2017-03-15', 5, NULL),
(163, '2017-03-16', 5, NULL),
(164, '2017-03-17', 5, NULL),
(165, '2017-03-20', 5, NULL),
(166, '2017-03-21', 5, NULL),
(167, '2017-03-22', 5, NULL),
(168, '2017-03-23', 5, NULL),
(169, '2017-03-24', 5, NULL),
(170, '2017-03-27', 5, NULL),
(171, '2017-03-28', 5, NULL),
(172, '2017-03-29', 5, NULL),
(173, '2017-03-30', 5, NULL),
(174, '2017-03-31', 5, NULL),
(175, '2016-12-01', 6, NULL),
(176, '2016-12-02', 6, NULL),
(177, '2016-12-05', 6, NULL),
(178, '2016-12-06', 6, NULL),
(179, '2016-12-07', 6, NULL),
(180, '2016-12-08', 6, NULL),
(181, '2016-12-09', 6, NULL),
(182, '2016-12-12', 6, NULL),
(183, '2016-12-13', 6, NULL),
(184, '2016-12-14', 6, NULL),
(185, '2016-12-15', 6, NULL),
(186, '2016-12-16', 6, NULL),
(187, '2016-12-19', 6, NULL),
(188, '2016-12-20', 6, NULL),
(189, '2016-12-21', 6, NULL),
(190, '2016-12-22', 6, NULL),
(191, '2016-12-23', 6, NULL),
(192, '2016-12-26', 6, NULL),
(193, '2016-12-27', 6, NULL),
(194, '2016-12-28', 6, NULL),
(195, '2016-12-29', 6, NULL),
(196, '2016-12-30', 6, NULL),
(197, '2017-01-02', 6, NULL),
(198, '2017-01-03', 6, NULL),
(199, '2017-01-04', 6, NULL),
(200, '2017-01-05', 6, NULL),
(201, '2017-01-06', 6, NULL),
(202, '2017-01-09', 6, NULL),
(203, '2017-01-10', 6, NULL),
(204, '2017-01-11', 6, NULL),
(205, '2017-01-12', 6, NULL),
(206, '2017-01-13', 6, NULL),
(207, '2017-01-16', 6, NULL),
(208, '2017-01-17', 6, NULL),
(209, '2017-01-18', 6, NULL),
(210, '2017-01-19', 6, NULL),
(211, '2017-01-20', 6, NULL),
(212, '2017-01-23', 6, NULL),
(213, '2017-01-24', 6, NULL),
(214, '2017-01-25', 6, NULL),
(215, '2017-01-26', 6, NULL),
(216, '2017-01-27', 6, NULL),
(217, '2017-01-30', 6, NULL),
(218, '2017-01-31', 6, NULL),
(219, '2017-02-01', 6, NULL),
(220, '2017-02-02', 6, NULL),
(221, '2017-02-03', 6, NULL),
(222, '2017-02-06', 6, NULL),
(223, '2017-02-07', 6, NULL),
(224, '2017-02-08', 6, NULL),
(225, '2017-02-09', 6, NULL),
(226, '2017-02-10', 6, NULL),
(227, '2017-02-13', 6, NULL),
(228, '2017-02-14', 6, NULL),
(229, '2017-02-15', 6, NULL),
(230, '2017-02-16', 6, NULL),
(231, '2017-02-17', 6, NULL),
(232, '2017-02-20', 6, NULL),
(233, '2017-02-21', 6, NULL),
(234, '2017-02-22', 6, NULL),
(235, '2017-02-23', 6, NULL),
(236, '2017-02-24', 6, NULL),
(237, '2017-02-27', 6, NULL),
(238, '2017-02-28', 6, NULL),
(239, '2017-03-01', 6, NULL),
(240, '2017-03-02', 6, NULL),
(241, '2017-03-03', 6, NULL),
(242, '2017-03-06', 6, NULL),
(243, '2017-03-07', 6, NULL),
(244, '2017-03-08', 6, NULL),
(245, '2017-03-09', 6, NULL),
(246, '2017-03-10', 6, NULL),
(247, '2017-03-13', 6, NULL),
(248, '2017-03-14', 6, NULL),
(249, '2017-03-15', 6, NULL),
(250, '2017-03-16', 6, NULL),
(251, '2017-03-17', 6, NULL),
(252, '2017-03-20', 6, NULL),
(253, '2017-03-21', 6, NULL),
(254, '2017-03-22', 6, NULL),
(255, '2017-03-23', 6, NULL),
(256, '2017-03-24', 6, NULL),
(257, '2017-03-27', 6, NULL),
(258, '2017-03-28', 6, NULL),
(259, '2017-03-29', 6, NULL),
(260, '2017-03-30', 6, NULL),
(261, '2017-03-31', 6, NULL),
(262, '2016-12-01', 7, NULL),
(263, '2016-12-02', 7, NULL),
(264, '2016-12-05', 7, NULL),
(265, '2016-12-06', 7, NULL),
(266, '2016-12-07', 7, NULL),
(267, '2016-12-08', 7, NULL),
(268, '2016-12-09', 7, NULL),
(269, '2016-12-12', 7, NULL),
(270, '2016-12-13', 7, NULL),
(271, '2016-12-14', 7, NULL),
(272, '2016-12-15', 7, NULL),
(273, '2016-12-16', 7, NULL),
(274, '2016-12-19', 7, NULL),
(275, '2016-12-20', 7, NULL),
(276, '2016-12-21', 7, NULL),
(277, '2016-12-22', 7, NULL),
(278, '2016-12-23', 7, NULL),
(279, '2016-12-26', 7, NULL),
(280, '2016-12-27', 7, NULL),
(281, '2016-12-28', 7, NULL),
(282, '2016-12-29', 7, NULL),
(283, '2016-12-30', 7, NULL),
(284, '2017-01-02', 7, NULL),
(285, '2017-01-03', 7, NULL),
(286, '2017-01-04', 7, NULL),
(287, '2017-01-05', 7, NULL),
(288, '2017-01-06', 7, NULL),
(289, '2017-01-09', 7, NULL),
(290, '2017-01-10', 7, NULL),
(291, '2017-01-11', 7, NULL),
(292, '2017-01-12', 7, NULL),
(293, '2017-01-13', 7, NULL),
(294, '2017-01-16', 7, NULL),
(295, '2017-01-17', 7, NULL),
(296, '2017-01-18', 7, NULL),
(297, '2017-01-19', 7, NULL),
(298, '2017-01-20', 7, NULL),
(299, '2017-01-23', 7, NULL),
(300, '2017-01-24', 7, NULL),
(301, '2017-01-25', 7, NULL),
(302, '2017-01-26', 7, NULL),
(303, '2017-01-27', 7, NULL),
(304, '2017-01-30', 7, NULL),
(305, '2017-01-31', 7, NULL),
(306, '2017-02-01', 7, NULL),
(307, '2017-02-02', 7, NULL),
(308, '2017-02-03', 7, NULL),
(309, '2017-02-06', 7, NULL),
(310, '2017-02-07', 7, NULL),
(311, '2017-02-08', 7, NULL),
(312, '2017-02-09', 7, NULL),
(313, '2017-02-10', 7, NULL),
(314, '2017-02-13', 7, NULL),
(315, '2017-02-14', 7, NULL),
(316, '2017-02-15', 7, NULL),
(317, '2017-02-16', 7, NULL),
(318, '2017-02-17', 7, NULL),
(319, '2017-02-20', 7, NULL),
(320, '2017-02-21', 7, NULL),
(321, '2017-02-22', 7, NULL),
(322, '2017-02-23', 7, NULL),
(323, '2017-02-24', 7, NULL),
(324, '2017-02-27', 7, NULL),
(325, '2017-02-28', 7, NULL),
(326, '2017-03-01', 7, NULL),
(327, '2017-03-02', 7, NULL),
(328, '2017-03-03', 7, NULL),
(329, '2017-03-06', 7, NULL),
(330, '2017-03-07', 7, NULL),
(331, '2017-03-08', 7, NULL),
(332, '2017-03-09', 7, NULL),
(333, '2017-03-10', 7, NULL),
(334, '2017-03-13', 7, NULL),
(335, '2017-03-14', 7, NULL),
(336, '2017-03-15', 7, NULL),
(337, '2017-03-16', 7, NULL),
(338, '2017-03-17', 7, NULL),
(339, '2017-03-20', 7, NULL),
(340, '2017-03-21', 7, NULL),
(341, '2017-03-22', 7, NULL),
(342, '2017-03-23', 7, NULL),
(343, '2017-03-24', 7, NULL),
(344, '2017-03-27', 7, NULL),
(345, '2017-03-28', 7, NULL),
(346, '2017-03-29', 7, NULL),
(347, '2017-03-30', 7, NULL),
(348, '2017-03-31', 7, NULL),
(349, '2016-12-01', 8, NULL),
(350, '2016-12-02', 8, NULL),
(351, '2016-12-05', 8, NULL),
(352, '2016-12-06', 8, NULL),
(353, '2016-12-07', 8, NULL),
(354, '2016-12-08', 8, NULL),
(355, '2016-12-09', 8, NULL),
(356, '2016-12-12', 8, NULL),
(357, '2016-12-13', 8, NULL),
(358, '2016-12-14', 8, NULL),
(359, '2016-12-15', 8, NULL),
(360, '2016-12-16', 8, NULL),
(361, '2016-12-19', 8, NULL),
(362, '2016-12-20', 8, NULL),
(363, '2016-12-21', 8, NULL),
(364, '2016-12-22', 8, NULL),
(365, '2016-12-23', 8, NULL),
(366, '2016-12-26', 8, NULL),
(367, '2016-12-27', 8, NULL),
(368, '2016-12-28', 8, NULL),
(369, '2016-12-29', 8, NULL),
(370, '2016-12-30', 8, NULL),
(371, '2017-01-02', 8, NULL),
(372, '2017-01-03', 8, NULL),
(373, '2017-01-04', 8, NULL),
(374, '2017-01-05', 8, NULL),
(375, '2017-01-06', 8, NULL),
(376, '2017-01-09', 8, NULL),
(377, '2017-01-10', 8, NULL),
(378, '2017-01-11', 8, NULL),
(379, '2017-01-12', 8, NULL),
(380, '2017-01-13', 8, NULL),
(381, '2017-01-16', 8, NULL),
(382, '2017-01-17', 8, NULL),
(383, '2017-01-18', 8, NULL),
(384, '2017-01-19', 8, NULL),
(385, '2017-01-20', 8, NULL),
(386, '2017-01-23', 8, NULL),
(387, '2017-01-24', 8, NULL),
(388, '2017-01-25', 8, NULL),
(389, '2017-01-26', 8, NULL),
(390, '2017-01-27', 8, NULL),
(391, '2017-01-30', 8, NULL),
(392, '2017-01-31', 8, NULL),
(393, '2017-02-01', 8, NULL),
(394, '2017-02-02', 8, NULL),
(395, '2017-02-03', 8, NULL),
(396, '2017-02-06', 8, NULL),
(397, '2017-02-07', 8, NULL),
(398, '2017-02-08', 8, NULL),
(399, '2017-02-09', 8, NULL),
(400, '2017-02-10', 8, NULL),
(401, '2017-02-13', 8, NULL),
(402, '2017-02-14', 8, NULL),
(403, '2017-02-15', 8, NULL),
(404, '2017-02-16', 8, NULL),
(405, '2017-02-17', 8, NULL),
(406, '2017-02-20', 8, NULL),
(407, '2017-02-21', 8, NULL),
(408, '2017-02-22', 8, NULL),
(409, '2017-02-23', 8, NULL),
(410, '2017-02-24', 8, NULL),
(411, '2017-02-27', 8, NULL),
(412, '2017-02-28', 8, NULL),
(413, '2017-03-01', 8, NULL),
(414, '2017-03-02', 8, NULL),
(415, '2017-03-03', 8, NULL),
(416, '2017-03-06', 8, NULL),
(417, '2017-03-07', 8, NULL),
(418, '2017-03-08', 8, NULL),
(419, '2017-03-09', 8, NULL),
(420, '2017-03-10', 8, NULL),
(421, '2017-03-13', 8, NULL),
(422, '2017-03-14', 8, NULL),
(423, '2017-03-15', 8, NULL),
(424, '2017-03-16', 8, NULL),
(425, '2017-03-17', 8, NULL),
(426, '2017-03-20', 8, NULL),
(427, '2017-03-21', 8, NULL),
(428, '2017-03-22', 8, NULL),
(429, '2017-03-23', 8, NULL),
(430, '2017-03-24', 8, NULL),
(431, '2017-03-27', 8, NULL),
(432, '2017-03-28', 8, NULL),
(433, '2017-03-29', 8, NULL),
(434, '2017-03-30', 8, NULL),
(435, '2017-03-31', 8, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date_id` (`date_id`,`student_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workingdays`
--
ALTER TABLE `workingdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `workingdays`
--
ALTER TABLE `workingdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
