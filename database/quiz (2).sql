-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 09:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'php'),
(2, 'html'),
(3, 'css'),
(4, 'javascript'),
(5, 'jquery'),
(6, 'bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, ' What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'none of them', 0, 1),
(2, 'How do you write \"Hello World\" in PHP', 'echo \"Hello World\";', '\"Hello World\";', ' Document.Write(\"Hello World\");', 'none of them', 0, 1),
(3, ' The PHP syntax is most similar to:', 'Perl and C', 'VBScript', 'JavaScript', 'none of them', 0, 1),
(4, 'When using the POST method, variables are displayed in the URL:', 'true', 'false', 'none of them', 'return 1', 1, 1),
(5, 'PHP server scripts are surrounded by delimiters, which?', '&lt;?php...?&gt;', '&lt;?php&gt;...&lt;/?&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '&lt;script&gt;...&lt;/script&gt;', 0, 1),
(6, 'All variables in PHP start with which symbol?', '@', '%', '$', '&amp;', 2, 1),
(8, 'What is the correct way to end a PHP statement?', '.', ';', 'new line', '&lt;php&gt;', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'who is prime ,nister of india ?', 'rahul gandhi', 'amit shah', 'manmohan singh', 'narendra modi'),
(2, 'who is the cm of up ?', 'akhilesh yadav', 'mayawati', 'mulayam singh', 'yogi aadityanath'),
(3, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(4, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(5, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(6, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(7, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(8, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(9, '1', 'User', '0', '#user', 'fa fa-users menu-icon'),
(10, '1', 'User', '0', '#user', 'fa fa-users menu-icon');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `total_number_question` varchar(255) NOT NULL,
  `attempted_questions` varchar(255) NOT NULL,
  `right_result` varchar(255) NOT NULL,
  `wrong_result` varchar(255) NOT NULL,
  `no_result` varchar(255) NOT NULL,
  `your_result` varchar(255) NOT NULL,
  `college_id` varchar(255) NOT NULL,
  `test_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `total_number_question`, `attempted_questions`, `right_result`, `wrong_result`, `no_result`, `your_result`, `college_id`, `test_date`) VALUES
(2, '7', '7', '7', '2', '0', '5', '28.571428571429%', 'RAU001', '2020-05-12 05:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `savsoft_users`
--

CREATE TABLE `savsoft_users` (
  `uid` int(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `contact_no` varchar(1000) DEFAULT NULL,
  `connection_key` varchar(1000) DEFAULT NULL,
  `gid` int(11) NOT NULL DEFAULT 1,
  `su` int(11) NOT NULL DEFAULT 0,
  `subscription_expired` int(11) NOT NULL DEFAULT 0,
  `verify_code` int(11) NOT NULL DEFAULT 0,
  `wp_user` varchar(100) DEFAULT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(1000) DEFAULT NULL,
  `user_status` varchar(100) NOT NULL DEFAULT 'Active',
  `web_token` varchar(1000) DEFAULT NULL,
  `android_token` varchar(1000) DEFAULT NULL,
  `collage_name` varchar(255) NOT NULL,
  `collage_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savsoft_users`
--

INSERT INTO `savsoft_users` (`uid`, `password`, `email`, `first_name`, `last_name`, `contact_no`, `connection_key`, `gid`, `su`, `subscription_expired`, `verify_code`, `wp_user`, `registered_date`, `photo`, `user_status`, `web_token`, `android_token`, `collage_name`, `collage_id`) VALUES
(1, 'e10adc3949ba59abbe56e057f20f883e', 'admin@example.com', 'Admin', 'Admin', '1234567890', NULL, 1, 1, 1776290400, 0, '', '2017-04-20 11:22:38', NULL, 'Active', 'dnwIpQWkxyA:APA91bFZLhdxZnPcNareTyHnJRikJGqaT7qh9DF4jSmyKSOq1rv6k7uwgmaQ4_K7jT3WNNUeKRdRQYsNf_OZaQZ7i5nKI_CjA6QGPwPsL5_D7ShPTtsuIwTkr0CuGx0RS7oAVNg_bImc', NULL, '', ''),
(5, 'e10adc3949ba59abbe56e057f20f883e', 'user@example.com', 'User', 'User', '1234567890', '123', 1, 2, 2122569000, 0, '', '2017-04-20 11:22:38', NULL, 'Active', NULL, NULL, 'raush inter collage', 'RAU001'),
(7, 'e10adc3949ba59abbe56e057f20f883e', 'pradeep@gmail.com', 'pradeep', 'tiwari', '9911844349', NULL, 1, 3, 0, 0, NULL, '2020-05-09 10:57:45', NULL, 'Active', NULL, NULL, 'raush inter collage', 'RAU001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savsoft_users`
--
ALTER TABLE `savsoft_users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `savsoft_users`
--
ALTER TABLE `savsoft_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
