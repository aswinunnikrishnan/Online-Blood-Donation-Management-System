-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 10:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(500) NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `session_id`) VALUES
(1, 'test', 'test', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'ug03j7oh6g3gcvcrviei9saqjj');

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `id` int(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `units` int(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `priority` int(2) NOT NULL,
  `request_status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`id`, `blood_group`, `units`, `hospital`, `priority`, `request_status`) VALUES
(7, 'B+', 20, 'testt', 0, 'rejected'),
(8, 'AB+', 30, 'testt', 0, 'rejected'),
(21, 'B-', 20, 'testt', 1, 'approved'),
(22, 'B+', 10, 'idsjd', 1, 'approved'),
(23, 'B-', 10, 'test', 0, 'approved'),
(24, 'AB+', 20, 'test', 0, 'rejected'),
(25, 'AB-', 10, 'test', 0, 'pending'),
(26, 'O+', 10, 'test', 0, 'approved'),
(27, 'O-', 10, 'test', 0, 'rejected'),
(28, 'B+', 5, 'testt', 1, 'approved'),
(29, 'B-', 100, 'testt', 0, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `blood_units`
--

CREATE TABLE `blood_units` (
  `id` int(200) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `units` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_units`
--

INSERT INTO `blood_units` (`id`, `blood_group`, `units`) VALUES
(1, 'A+', 16),
(2, 'A-', 77),
(3, 'B+', 15),
(4, 'B-', 58),
(5, 'AB+', 9),
(6, 'AB-', 1),
(7, 'O+', 46),
(8, 'O-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_admin`
--

CREATE TABLE `contact_admin` (
  `id` int(200) NOT NULL,
  `query_name` varchar(30) NOT NULL,
  `query_phone` int(10) NOT NULL,
  `query_email` varchar(40) NOT NULL,
  `query_message` varchar(1000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `query_status` varchar(15) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_admin`
--

INSERT INTO `contact_admin` (`id`, `query_name`, `query_phone`, `query_email`, `query_message`, `date_time`, `query_status`) VALUES
(10, 'test', 2147483647, 'abcd@gmail.com', 'osdfojdso', '2023-06-29 15:22:31', 'resolved'),
(12, 'aisjas', 2147483647, 'u2004031@rajagiri.edu.in', 'nil', '2023-07-20 09:53:22', 'resolved');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `query_id` int(11) NOT NULL,
  `query_name` varchar(100) NOT NULL,
  `query_number` varchar(120) NOT NULL,
  `query_mail` char(11) NOT NULL,
  `query_message` longtext NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `query_status` varchar(11) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`query_id`, `query_name`, `query_number`, `query_mail`, `query_message`, `query_date`, `query_status`) VALUES
(6, 'test3', '7777777777', 'test@gmail.', 'hello this is a test mesage', '2023-06-08 17:21:39', 'read'),
(7, 'test3', '7777777777', 'test@gmail.', 'test', '2023-06-08 17:24:21', 'resolved'),
(10, 'ewoijowejf', '798798333', 'jasfajs@gma', 'aoijdoiasjdoijasoijdoasjodja', '2023-06-12 14:09:00', 'resolved'),
(11, 'ewoijowejf', '798798333', 'jasfajs@gma', 'aoijdoiasjdoijasoijdoasjodja', '2023-06-12 11:08:48', 'pending'),
(12, '', 'test@gmail.com', '', 'test message', '2023-06-29 14:37:02', 'pending'),
(13, 'test', 'test@gmail.com', '54545454545', 'test message\r\n', '2023-07-21 07:18:37', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `donors_pending`
--

CREATE TABLE `donors_pending` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `age` int(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors_pending`
--

INSERT INTO `donors_pending` (`id`, `name`, `mobile`, `mail_id`, `age`, `gender`, `blood_group`, `address`, `city`, `state`, `date_time`, `status`) VALUES
(2, 'aaaaa', '6666666666', 'aaa@gmail.com', 45, 'Male', 'B+', 'sdd', 'sds', 'Manipur', '2023-07-20 16:40:14', 'approved'),
(3, 'sdfo', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A+', 'sdd', 'sds', 'Meghalaya', '2023-07-20 16:40:14', 'rejected'),
(4, 'aaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A-', 'sdd', 'sds', 'Meghalaya', '2023-07-20 16:40:14', 'approved'),
(5, 'aaaaa', '7736480940', 'aaa@gmail.com', 20, 'Male', 'B-', 'sdd', 'sds', 'Manipur', '2023-07-20 16:40:14', 'pending'),
(6, 'aaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A-', 'sdd', 'sds', 'Mizoram', '2023-07-20 16:40:36', 'approved'),
(7, 'aaaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'B+', 'sdd', 'sds', 'Manipur', '2023-07-20 16:42:00', 'approved'),
(8, 'aaaaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A+', 'sdd', 'sds', 'Kerala', '2023-07-20 17:48:03', 'approved'),
(9, 'aaaaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'B+', 'sdd', 'sds', 'Meghalaya', '2023-07-20 17:48:24', 'rejected'),
(10, 'aaaaaa', '7736480940', 'aaa@gmail.com', 20, 'Male', 'AB+', 'sdd', 'sds', 'Haryana', '2023-07-20 17:50:10', 'approved'),
(11, 'aaaaaa', '7736480940', 'aaa@gmail.com', 20, 'Male', 'B-', 'sdd', 'sds', 'Mizoram', '2023-07-20 17:50:35', 'rejected'),
(13, 'aaaaaa', '2147483647', 'aaa@gmail.com', 20, 'Male', 'B+', 'sdd', 'sds', 'Madhya Pradesh', '2023-07-21 05:44:51', 'approved'),
(14, 'bbbbbb', '6666666666', 'bbb@gmail.com', 20, 'Male', '', 'tk', 'sds', 'Madhya Pradesh', '2023-07-21 06:50:44', 'rejected'),
(15, 'bbbbbb', '6666666666', 'bbb@gmail.com', 20, 'Male', 'B+', 'tk', 'sds', 'Madhya Pradesh', '2023-07-21 06:52:32', 'rejected'),
(16, 'aaaaaa', '2147483647', 'aaa@gmail.com', 20, '', '', 'sdd', 'sds', 'Meghalaya', '2023-07-21 07:27:33', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail_id` varchar(50) DEFAULT NULL,
  `age` int(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`id`, `name`, `mobile`, `mail_id`, `age`, `gender`, `blood_group`, `address`, `city`, `state`, `date`) VALUES
(226, 'testsss', '3333333333', 'test@gmail.com', 23, 'Male', 'B-', 'ww', 'qq', 'Odisha', '2023-07-21'),
(227, 'aaaaa', '3333333333', 'test@gmail.com', 23, 'Male', 'B-', 'ww', 'qq', 'Odisha', '2023-07-21'),
(228, 'testsss', '3333333333', 'test@gmail.com', 23, 'Male', 'B-', 'ww', 'qq', 'Odisha', '2023-07-21'),
(229, 'testsss', '3333333333', 'test@gmail.com', 23, 'Male', 'B-', 'ww', 'qq', 'Odisha', '2023-07-21'),
(230, 'testsss', '3333333333', 'test@gmail.com', 23, 'Male', 'B-', 'ww', 'qq', 'Odisha', '2023-07-21'),
(231, 'testsss', '3333333333', 'test@gmail.com', 23, 'Male', 'B-', 'ww', 'qq', 'Odisha', '2023-07-21'),
(265, 'aaaaaa', '6666666666', 'aaa@gmail.com', 45, 'Male', 'B+', 'sdd', 'sds', 'Manipur', '2023-07-21'),
(266, 'aaaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A-', 'sdd', 'sds', 'Mizoram', '2023-07-21'),
(267, 'aaaaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A+', 'sdd', 'sds', 'Kerala', '2023-07-21'),
(268, 'aaaaaa', '7736480940', 'aaa@gmail.com', 20, 'Male', 'AB+', 'sdd', 'sds', 'Haryana', '2023-07-21'),
(269, 'aaaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'B+', 'sdd', 'sds', 'Manipur', '2023-07-21'),
(270, 'aaaaa', '6666666666', 'aaa@gmail.com', 20, 'Male', 'A-', 'sdd', 'sds', 'Meghalaya', '2023-07-21'),
(271, 'aaaaaa', '2147483647', 'aaa@gmail.com', 20, 'Male', 'B+', 'sdd', 'sds', 'Madhya Pradesh', '2023-07-21'),
(272, 'aaaaaa', '2147483647', 'aaa@gmail.com', 20, '', '', 'sdd', 'sds', 'Meghalaya', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(100) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `user_name`, `name`, `phone`, `mail_id`, `password`, `session_id`) VALUES
(34, 'test', 'testt', '4444444444', 'test@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '74uek0rkr1mj83brbutbqsf9dg'),
(35, 'ab', 'abcd', '4444444444', 'abcd@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', ''),
(36, 'cyriiiiac', 'idsjd', '7736480940', 'u2004031@rajagiri.edu.in', 'b79fe7ec4db61f8c4339e6cd5c1d629964aa1cdb5fda73d05d5a3fc0aa69bbdd', 'fismgqh6lh1f0f8aqg0lthkk49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail_id` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `password` varchar(500) NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `mail_id`, `username`, `gender`, `blood_group`, `password`, `session_id`) VALUES
(4, 'aaaaaa', '2147483647', 'aaa@gmail.com', 'aaa', '', '', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '74uek0rkr1mj83brbutbqsf9dg'),
(14, 'bbbbbb', '6666666666', 'bbb@gmail.com', 'bbb', 'Male', 'B+', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '74uek0rkr1mj83brbutbqsf9dg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_units`
--
ALTER TABLE `blood_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_admin`
--
ALTER TABLE `contact_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `donors_pending`
--
ALTER TABLE `donors_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_requests`
--
ALTER TABLE `blood_requests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact_admin`
--
ALTER TABLE `contact_admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donors_pending`
--
ALTER TABLE `donors_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
