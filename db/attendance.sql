-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 06:33 PM
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
(1, 1, 1, 0, 1, 1, 1, 0);

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
(5, 'B.Sc. Physics', 'Bachelor of Physics. Lorem Ipsum'),
(6, 'B.com', 'Bachelor Of Commerce With Computer Application');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dept` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `name`, `dept`) VALUES
(3, 'Dr. Thomas Monoth', 1),
(4, 'Dr.Regi Francis M', 6);

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
(1, 'Anoop James', 'MM14CCSR22', 1, 3),
(2, 'Shobi P P', 'MM14CCSR13', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dept` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `dept`) VALUES
(1, 'Liji Joy', 1),
(7, 'Sabu O J', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `workingday_id` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `workingday_id`, `period`, `teacher_id`, `dept`, `batch`) VALUES
(1, 1, 1, 1, 1, 3),
(2, 1, 5, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workingdays`
--

CREATE TABLE `workingdays` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workingdays`
--

INSERT INTO `workingdays` (`id`, `date`, `dept`) VALUES
(1, '2016-12-01', 1),
(2, '2016-12-02', 1),
(3, '2016-12-05', 1),
(4, '2016-12-06', 1),
(5, '2016-12-07', 1),
(6, '2016-12-08', 1),
(7, '2016-12-09', 1),
(8, '2016-12-12', 1),
(9, '2016-12-13', 1),
(10, '2016-12-14', 1),
(11, '2016-12-15', 1),
(12, '2016-12-16', 1),
(13, '2016-12-19', 1),
(14, '2016-12-20', 1),
(15, '2016-12-21', 1),
(16, '2016-12-22', 1),
(17, '2016-12-23', 1),
(18, '2016-12-26', 1),
(19, '2016-12-27', 1),
(20, '2016-12-28', 1),
(21, '2016-12-29', 1),
(22, '2016-12-30', 1),
(23, '2017-01-02', 1),
(24, '2017-01-03', 1),
(25, '2017-01-04', 1),
(26, '2017-01-05', 1),
(27, '2017-01-06', 1),
(28, '2017-01-09', 1),
(29, '2017-01-10', 1),
(30, '2017-01-11', 1),
(31, '2017-01-12', 1),
(32, '2017-01-13', 1),
(33, '2017-01-16', 1),
(34, '2017-01-17', 1),
(35, '2017-01-18', 1),
(36, '2017-01-19', 1),
(37, '2017-01-20', 1),
(38, '2017-01-23', 1),
(39, '2017-01-24', 1),
(40, '2017-01-25', 1),
(41, '2017-01-26', 1),
(42, '2017-01-27', 1),
(43, '2017-01-30', 1),
(44, '2017-01-31', 1),
(45, '2017-02-01', 1),
(46, '2017-02-02', 1),
(47, '2017-02-03', 1),
(48, '2017-02-06', 1),
(49, '2017-02-07', 1),
(50, '2017-02-08', 1),
(51, '2017-02-09', 1),
(52, '2017-02-10', 1),
(53, '2017-02-13', 1),
(54, '2017-02-14', 1),
(55, '2017-02-15', 1),
(56, '2017-02-16', 1),
(57, '2017-02-17', 1),
(58, '2017-02-20', 1),
(59, '2017-02-21', 1),
(60, '2017-02-22', 1),
(61, '2017-02-23', 1),
(62, '2017-02-24', 1),
(63, '2017-02-27', 1),
(64, '2017-02-28', 1),
(65, '2017-03-01', 1),
(66, '2017-03-02', 1),
(67, '2017-03-03', 1),
(68, '2017-03-06', 1),
(69, '2017-03-07', 1),
(70, '2017-03-08', 1),
(71, '2017-03-09', 1),
(72, '2017-03-10', 1),
(73, '2017-03-13', 1),
(74, '2017-03-14', 1),
(75, '2017-03-15', 1),
(76, '2017-03-16', 1),
(77, '2017-03-17', 1),
(78, '2017-03-20', 1),
(79, '2017-03-21', 1),
(80, '2017-03-22', 1),
(81, '2017-03-23', 1),
(82, '2017-03-24', 1),
(83, '2017-03-27', 1),
(84, '2017-03-28', 1),
(85, '2017-03-29', 1),
(86, '2017-03-30', 1),
(87, '2017-03-31', 1),
(88, '2016-12-01', 5),
(89, '2016-12-02', 5),
(90, '2016-12-05', 5),
(91, '2016-12-06', 5),
(92, '2016-12-07', 5),
(93, '2016-12-08', 5),
(94, '2016-12-09', 5),
(95, '2016-12-12', 5),
(96, '2016-12-13', 5),
(97, '2016-12-14', 5),
(98, '2016-12-15', 5),
(99, '2016-12-16', 5),
(100, '2016-12-19', 5),
(101, '2016-12-20', 5),
(102, '2016-12-21', 5),
(103, '2016-12-22', 5),
(104, '2016-12-23', 5),
(105, '2016-12-26', 5),
(106, '2016-12-27', 5),
(107, '2016-12-28', 5),
(108, '2016-12-29', 5),
(109, '2016-12-30', 5),
(110, '2017-01-02', 5),
(111, '2017-01-03', 5),
(112, '2017-01-04', 5),
(113, '2017-01-05', 5),
(114, '2017-01-06', 5),
(115, '2017-01-09', 5),
(116, '2017-01-10', 5),
(117, '2017-01-11', 5),
(118, '2017-01-12', 5),
(119, '2017-01-13', 5),
(120, '2017-01-16', 5),
(121, '2017-01-17', 5),
(122, '2017-01-18', 5),
(123, '2017-01-19', 5),
(124, '2017-01-20', 5),
(125, '2017-01-23', 5),
(126, '2017-01-24', 5),
(127, '2017-01-25', 5),
(128, '2017-01-26', 5),
(129, '2017-01-27', 5),
(130, '2017-01-30', 5),
(131, '2017-01-31', 5),
(132, '2017-02-01', 5),
(133, '2017-02-02', 5),
(134, '2017-02-03', 5),
(135, '2017-02-06', 5),
(136, '2017-02-07', 5),
(137, '2017-02-08', 5),
(138, '2017-02-09', 5),
(139, '2017-02-10', 5),
(140, '2017-02-13', 5),
(141, '2017-02-14', 5),
(142, '2017-02-15', 5),
(143, '2017-02-16', 5),
(144, '2017-02-17', 5),
(145, '2017-02-20', 5),
(146, '2017-02-21', 5),
(147, '2017-02-22', 5),
(148, '2017-02-23', 5),
(149, '2017-02-24', 5),
(150, '2017-02-27', 5),
(151, '2017-02-28', 5),
(152, '2017-03-01', 5),
(153, '2017-03-02', 5),
(154, '2017-03-03', 5),
(155, '2017-03-06', 5),
(156, '2017-03-07', 5),
(157, '2017-03-08', 5),
(158, '2017-03-09', 5),
(159, '2017-03-10', 5),
(160, '2017-03-13', 5),
(161, '2017-03-14', 5),
(162, '2017-03-15', 5),
(163, '2017-03-16', 5),
(164, '2017-03-17', 5),
(165, '2017-03-20', 5),
(166, '2017-03-21', 5),
(167, '2017-03-22', 5),
(168, '2017-03-23', 5),
(169, '2017-03-24', 5),
(170, '2017-03-27', 5),
(171, '2017-03-28', 5),
(172, '2017-03-29', 5),
(173, '2017-03-30', 5),
(174, '2017-03-31', 5),
(175, '2016-12-01', 6),
(176, '2016-12-02', 6),
(177, '2016-12-05', 6),
(178, '2016-12-06', 6),
(179, '2016-12-07', 6),
(180, '2016-12-08', 6),
(181, '2016-12-09', 6),
(182, '2016-12-12', 6),
(183, '2016-12-13', 6),
(184, '2016-12-14', 6),
(185, '2016-12-15', 6),
(186, '2016-12-16', 6),
(187, '2016-12-19', 6),
(188, '2016-12-20', 6),
(189, '2016-12-21', 6),
(190, '2016-12-22', 6),
(191, '2016-12-23', 6),
(192, '2016-12-26', 6),
(193, '2016-12-27', 6),
(194, '2016-12-28', 6),
(195, '2016-12-29', 6),
(196, '2016-12-30', 6),
(197, '2017-01-02', 6),
(198, '2017-01-03', 6),
(199, '2017-01-04', 6),
(200, '2017-01-05', 6),
(201, '2017-01-06', 6),
(202, '2017-01-09', 6),
(203, '2017-01-10', 6),
(204, '2017-01-11', 6),
(205, '2017-01-12', 6),
(206, '2017-01-13', 6),
(207, '2017-01-16', 6),
(208, '2017-01-17', 6),
(209, '2017-01-18', 6),
(210, '2017-01-19', 6),
(211, '2017-01-20', 6),
(212, '2017-01-23', 6),
(213, '2017-01-24', 6),
(214, '2017-01-25', 6),
(215, '2017-01-26', 6),
(216, '2017-01-27', 6),
(217, '2017-01-30', 6),
(218, '2017-01-31', 6),
(219, '2017-02-01', 6),
(220, '2017-02-02', 6),
(221, '2017-02-03', 6),
(222, '2017-02-06', 6),
(223, '2017-02-07', 6),
(224, '2017-02-08', 6),
(225, '2017-02-09', 6),
(226, '2017-02-10', 6),
(227, '2017-02-13', 6),
(228, '2017-02-14', 6),
(229, '2017-02-15', 6),
(230, '2017-02-16', 6),
(231, '2017-02-17', 6),
(232, '2017-02-20', 6),
(233, '2017-02-21', 6),
(234, '2017-02-22', 6),
(235, '2017-02-23', 6),
(236, '2017-02-24', 6),
(237, '2017-02-27', 6),
(238, '2017-02-28', 6),
(239, '2017-03-01', 6),
(240, '2017-03-02', 6),
(241, '2017-03-03', 6),
(242, '2017-03-06', 6),
(243, '2017-03-07', 6),
(244, '2017-03-08', 6),
(245, '2017-03-09', 6),
(246, '2017-03-10', 6),
(247, '2017-03-13', 6),
(248, '2017-03-14', 6),
(249, '2017-03-15', 6),
(250, '2017-03-16', 6),
(251, '2017-03-17', 6),
(252, '2017-03-20', 6),
(253, '2017-03-21', 6),
(254, '2017-03-22', 6),
(255, '2017-03-23', 6),
(256, '2017-03-24', 6),
(257, '2017-03-27', 6),
(258, '2017-03-28', 6),
(259, '2017-03-29', 6),
(260, '2017-03-30', 6),
(261, '2017-03-31', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workingdays`
--
ALTER TABLE `workingdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
