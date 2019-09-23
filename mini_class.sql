-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2019 at 10:20 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `fullname`, `role`, `id_number`, `courses`, `dept_code`, `faculty_code`, `password`, `image`, `hash`, `created_at`, `status`) VALUES
(1, 'agughalamDavis@yahoo.com', 'davis', 'lecturer', '268174', '', '', '', '$2y$10$zfn8D0aTk7IVdSiluDTz/e3cIOl8JXGGqNYEXDka6DvT5k3nkHnUS', '', '2ab56412b1163ee131e1246da0955bd1', '2019-09-23', 1),
(2, 'agughalamDav@yahoo.com', 'davis', 'lecturer', '295629', '', '', '', '$2y$10$yFFny7GDAQyiLJ2RWFGtR.AcQqp9hhP.6SbSbosun24iv0CXWgCs2', '', 'd1f255a373a3cef72e03aa9d980c7eca', '2019-09-23', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
