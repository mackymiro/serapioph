-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 04:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serapioph`
--

-- --------------------------------------------------------

--
-- Table structure for table `serapioph_enrollment_form`
--

CREATE TABLE `serapioph_enrollment_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `amount_from_form` varchar(100) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `account_executive` varchar(255) DEFAULT NULL,
  `date_started` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `promo` varchar(100) DEFAULT NULL,
  `preferred_month` date DEFAULT NULL,
  `preferred_time` varchar(150) DEFAULT NULL,
  `reference_number` varchar(150) DEFAULT NULL,
  `is_paid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serapioph_enrollment_form`
--

INSERT INTO `serapioph_enrollment_form` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `user_address`, `contact_number`, `amount_from_form`, `category`, `institution`, `business_name`, `brand_name`, `address`, `account_executive`, `date_started`, `amount`, `promo`, `preferred_month`, `preferred_time`, `reference_number`, `is_paid`, `created_at`, `updated_at`) VALUES
(14, 2, 'Nikki', 'Shan', 'Miro', 'Cebu City', '09424570066', '100', '1', 'test institution', 'Accenture', 'Web development', '', 'Macky Miro', '2012', '100', '', '0000-00-00', '3', '1535429059541', 1, '2018-08-27 22:04:19', '0000-00-00 00:00:00'),
(15, 2, 'Macky', 'Galendez', 'Miro', 'Cebu City', '09424570066', '200', '2', 'test institution1', 'Facebook Inc', 'Web development', 'Cebu City', 'Nikki Shan', '2012', '200', '100', '0000-00-00', '8', '15354291202330', 1, '2018-08-27 22:05:20', '0000-00-00 00:00:00'),
(16, 2, 'Macky', 'Galendez', 'Miro', 'F.Llamas St. Cebu City, Philippines', '09424570066', '100', '1', 'test institution', 'Accenture', 'Web development', 'N bacalso St Cebu City', 'Macky Miro', '2012', '100', '200', NULL, '4', '15362086647410', 1, '2018-09-05 22:37:44', '0000-00-00 00:00:00'),
(17, 2, 'Macky', 'Galendez', 'Miro', 'F.Llamas St. Cebu City, Philippines', '09424570066', '300', '3', 'test institution 3', 'Ayala Lands', 'Ayala Group', 'Cebu City', 'Macky Miro', '2011', '300', '200', NULL, '4', '15362102924288', 1, '2018-09-05 23:04:52', '0000-00-00 00:00:00'),
(18, 2, 'Macky', 'Galendez', 'Miro', 'F.Llamas St. Cebu City, Philippines', '09424570066', '300', '3', 'test institution 3', 'Ayala Lands', 'Ayala Group', 'Cebu City', 'Macky Miro', '2011', '300', '200', NULL, '4', '15362103169437', 1, '2018-09-05 23:05:16', '0000-00-00 00:00:00'),
(19, 2, 'Macky', 'Galendez', 'Miro', 'F.Llamas St. Cebu City, Philippines', '09424570066', '300', '3', 'test institution 3', 'Primary Holdings Inc', 'Dakay Const Stuct', 'Cebu City', 'Nikki Shan', '2011', '300', '70', '2019-02-02', '5', '15362149461502', 1, '2018-09-06 00:22:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `serapioph_training_center_registration_form`
--

CREATE TABLE `serapioph_training_center_registration_form` (
  `id` int(11) NOT NULL,
  `user_status` varchar(150) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `business_name` varchar(250) DEFAULT NULL,
  `brand_name` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `account_executive` varchar(250) DEFAULT NULL,
  `year_started` varchar(150) DEFAULT NULL,
  `slot` varchar(100) DEFAULT NULL,
  `promo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serapioph_training_center_registration_form`
--

INSERT INTO `serapioph_training_center_registration_form` (`id`, `user_status`, `category`, `filename`, `business_name`, `brand_name`, `address`, `province`, `account_executive`, `year_started`, `slot`, `promo`, `created_at`, `updated_at`) VALUES
(5, 'admin', 3, NULL, 'Cebu Code Solutions', 'Web development', 'N bacalso St Cebu City', 'Cebu', 'Macky Miro', '2012', '10', '200', '2018-08-23 03:19:25', '2018-09-05 09:57:11'),
(6, 'admin', 2, NULL, 'NEC', 'Web development', 'N bacalso St Cebu City', 'Cebu', 'Macky Miro', '2012', '5', '100', '2018-08-23 07:39:50', '2018-09-05 09:57:24'),
(7, 'admin', 1, NULL, 'Accenture', 'Web development', 'N bacalso St Cebu City', 'Cebu', 'Macky Miro', '2012', '3', '200', '2018-08-23 07:49:14', '2018-09-14 03:25:02'),
(8, 'admin', 2, NULL, 'Facebook Inc', 'Web development', 'Cebu City', 'Cebu', 'Nikki Shan', '2012', '10', '100', '2018-08-23 09:14:04', '2018-09-05 09:57:52'),
(10, 'admin', 3, '4a6fe4cea357ec19312d3aa905599312.jpg', 'Primary Holdings Inc', 'Dakay Const Stuct', 'Cebu City', 'Cebu', 'Nikki Shan', '2011', '9', '70', '2018-09-04 02:10:02', '2018-09-06 06:22:28'),
(11, 'admin', 3, '8acde9e5b06de42767e51795dc4e5743.jpg', 'Ayala Lands', 'Ayala Group', 'Cebu City', 'Cebu', 'Macky Miro', '2011', '9', '200', '2018-09-04 09:57:52', '2018-09-06 05:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `serapioph_training_info`
--

CREATE TABLE `serapioph_training_info` (
  `id` int(11) NOT NULL,
  `user_status` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `institution` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serapioph_training_info`
--

INSERT INTO `serapioph_training_info` (`id`, `user_status`, `category`, `institution`, `amount`, `created_at`, `updated_at`) VALUES
(9, 'admin', '1', 'test institution', '100', '2018-08-23 08:50:04', '0000-00-00 00:00:00'),
(10, 'admin', '2', 'test institution1', '200', '2018-08-23 09:12:10', '0000-00-00 00:00:00'),
(11, 'admin', '3', 'test institution 3', '300', '2018-09-04 01:52:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `serapioph_users`
--

CREATE TABLE `serapioph_users` (
  `id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `members_number` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `random_code` varchar(255) DEFAULT NULL,
  `is_approved` int(11) NOT NULL,
  `reference_person` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serapioph_users`
--

INSERT INTO `serapioph_users` (`id`, `status`, `members_number`, `first_name`, `middle_name`, `last_name`, `address`, `contact_number`, `username`, `email_address`, `password`, `random_code`, `is_approved`, `reference_person`, `filename`, `created_at`, `updated_at`) VALUES
(2, NULL, '1', 'Macky', 'Galendez', 'Miro', 'F.Llamas St. Cebu City, Philippines', '09424570066', 'macky', 'ask.macky.miro@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 1, NULL, NULL, '2018-08-22 03:24:53', '2018-08-22 12:06:34'),
(3, NULL, '9', 'Maco', 'Galendez', 'Miro', 'F.Llamas St. Cebu City', '1234567', 'maco', 'macomiro@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 1, NULL, NULL, '2018-08-08 03:30:59', '2018-08-22 12:12:30'),
(4, 'admin', '0', 'Admin', 'Admin', 'Admin', 'F.Llamas St. Cebu City', '1234567', 'admin', 'admin@serapio.ph', '58f88c8a2a0406bf75b8d1060321ea43666a8743', NULL, 1, NULL, NULL, '2018-08-22 03:27:02', '2018-08-22 12:12:26'),
(5, NULL, '', 'Nikki', 'Shan', 'Miro', 'consolaction cebu', '09424570066', 'nikki', 'nikkishan@gmail.com', 'db8e92a56a196945eaf4ed0453fce69d4de82902', NULL, 1, 'Macky', '98fbd9e392cf0b090f7ec42481b46a0a.pdf', '2018-08-22 00:58:10', '2018-08-22 12:25:50'),
(6, NULL, '2345', 'Camille', 'Victoria', 'Reyes', 'Cebu City', '09234433222', 'camille', 'camille@gmail.com', '6c39579e8fe28516ba57713ef01cf1c6c43a04b4', NULL, 1, 'Macky', '5e0bbf3424abee8f6ad604e2d5806bfa.pdf', '2018-08-30 02:13:24', '2018-08-30 08:15:54'),
(7, NULL, '15361285823249', 'jyn', 'floresca', 'florentino', 'baybay, leyte', '09234433222', 'jynflo', 'jynflo@gmail.com', 'a0f2aae3ee57510f7ca1a81fa0fb9e168ec760e8', NULL, 0, 'Macky', 'a5b06b219eef1612bfc1deaeda86e67f.pdf', '2018-09-05 00:23:02', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serapioph_enrollment_form`
--
ALTER TABLE `serapioph_enrollment_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serapioph_training_center_registration_form`
--
ALTER TABLE `serapioph_training_center_registration_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serapioph_training_info`
--
ALTER TABLE `serapioph_training_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serapioph_users`
--
ALTER TABLE `serapioph_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serapioph_enrollment_form`
--
ALTER TABLE `serapioph_enrollment_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `serapioph_training_center_registration_form`
--
ALTER TABLE `serapioph_training_center_registration_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `serapioph_training_info`
--
ALTER TABLE `serapioph_training_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `serapioph_users`
--
ALTER TABLE `serapioph_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
