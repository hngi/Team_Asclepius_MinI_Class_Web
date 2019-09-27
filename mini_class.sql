-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2019 at 01:49 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `assignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(255) NOT NULL,
  `assignment_title` varchar(255) NOT NULL,
  `assignment_file` varchar(255) NOT NULL,
  `id_number` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `course_code`, `assignment_title`, `assignment_file`, `id_number`, `created_at`) VALUES
(1, 'CEG313', 'Assignment One', '', 'stu268174', '2019-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(20) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `credit_unit` int(5) NOT NULL,
  `dept_code` varchar(20) NOT NULL,
  `faculty_code` varchar(20) NOT NULL,
  `id_number` varchar(20) NOT NULL,
  `created_at` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_title`, `course_description`, `credit_unit`, `dept_code`, `faculty_code`, `id_number`, `created_at`) VALUES
(1, 'CEG313', 'strength of materials', 'dEscribing the stregnth of different materials in civil eng.', 4, 'CEG', 'ENG', '123456', '2019-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(20) NOT NULL,
  `note_title` varchar(200) NOT NULL,
  `note_file` varchar(255) NOT NULL,
  `id_number` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `course_code`, `note_title`, `note_file`, `id_number`, `created_at`) VALUES
(2, 'CEG313', 'strength of materials', '', 'lec123456', '2019-09-24'),
(3, 'Maths', 'Note number 2', '', 'stu268174', '2019-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `id_number` varchar(30) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `dept_code` varchar(30) NOT NULL,
  `faculty_code` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `fullname`, `role`, `id_number`, `courses`, `dept_code`, `faculty_code`, `password`, `image`, `hash`, `created_at`, `status`) VALUES
(1, 'agughalamDavis@yahoo.com', 'davis', 'lecturer', 'stu268174', '[\"CEG313\",\"Maths\",\"chemistry\"]', '', '', '$2y$10$zfn8D0aTk7IVdSiluDTz/e3cIOl8JXGGqNYEXDka6DvT5k3nkHnUS', '', '2ab56412b1163ee131e1246da0955bd1', '2019-09-23', 1),
(2, 'agughalamDav@yahoo.com', 'davis', 'lecturer', '295629', '', '', '', '$2y$10$yFFny7GDAQyiLJ2RWFGtR.AcQqp9hhP.6SbSbosun24iv0CXWgCs2', '', 'd1f255a373a3cef72e03aa9d980c7eca', '2019-09-23', 0),
(3, 'Moses@yahoo.com', 'Ridwan Moses', 'lecturer', 'lec267785', '', '', '', '$2y$10$YIGpjww.YDSy6nIFoGvAHuQjGgLe2Gfon9oBiunY3D.X0RlC8EePO', '', '82aa4b0af34c2313a562076992e50aa3', '2019-09-27', 0),
(5, 'Jonmoses@yahoo.com', 'John Moses', 'lecturer', 'lec410727', '', '', '', '$2y$10$WrCo1CGJoT8h4YKjUICaJer6TcDTyBAbtnpiVBg.O2iG/MlaKw.uK', '', '138bb0696595b338afbab333c555292a', '2019-09-27', 1),
(6, 'babylon@yahoo.com', 'Babylon', 'lecturer', 'lec200868', '', '', '', '$2y$10$dcat0hj/v4ypznZP4VPsF.CbOmDoVAT7apgJJzSpLJWWZtd/W.xT.', '', 'ccb1d45fb76f7c5a0bf619f979c6cf36', '2019-09-27', 0),
(7, 'booboo@yahoo.com', 'booboo', 'lecturer', 'lec384110', '', '', '', '$2y$10$dHFn17NalkZz8RrTXFwUgOvHrshl5l1uK61Vh4shssWRpphldC6tW', '', 'a64c94baaf368e1840a1324e839230de', '2019-09-27', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
