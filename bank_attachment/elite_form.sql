-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 12:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `family_information`
--

CREATE TABLE `family_information` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `annual_income` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_table`
--

CREATE TABLE `scholarship_table` (
  `id` int(50) NOT NULL,
  `form_type` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `contactnumber` int(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `reg_no` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `school_address` text NOT NULL,
  `mark_percentage` varchar(50) NOT NULL,
  `previous_marksheet` varchar(50) NOT NULL,
  `term_semester` varchar(100) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `scholarship_select` varchar(50) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `account_no` int(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `aadhar_number` int(50) NOT NULL,
  `bank_attachment` varchar(50) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `disease_select` varchar(50) NOT NULL,
  `disease_name` varchar(50) NOT NULL,
  `severity_disease` varchar(100) NOT NULL,
  `admission_date` varchar(50) NOT NULL,
  `approximate_expense` varchar(100) NOT NULL,
  `request_amount` varchar(100) NOT NULL,
  `hospital_report` text NOT NULL,
  `previous_medical_report` text NOT NULL,
  `insurance_scheme` varchar(50) NOT NULL,
  `government` varchar(50) NOT NULL,
  `private` varchar(50) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `approved_status` varchar(50) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `ratings` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship_table`
--

INSERT INTO `scholarship_table` (`id`, `form_type`, `fullname`, `dob`, `gender`, `fathername`, `mothername`, `contactnumber`, `address`, `email`, `city`, `district`, `state`, `school_name`, `reg_no`, `department`, `school_address`, `mark_percentage`, `previous_marksheet`, `term_semester`, `academic_year`, `scholarship_select`, `phone_no`, `student_email`, `account_no`, `bank_name`, `ifsc_code`, `aadhar_number`, `bank_attachment`, `hospital_name`, `disease_select`, `disease_name`, `severity_disease`, `admission_date`, `approximate_expense`, `request_amount`, `hospital_report`, `previous_medical_report`, `insurance_scheme`, `government`, `private`, `guardian_name`, `created_at`, `updated_at`, `created_by`, `approved_status`, `updated_by`, `ratings`) VALUES
(1, '', 'Abcd', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '1', 'Deepika Anbalagan', '2022-03-09', 'Female', 'teste', 'test', 1, 'resr', 'deepideep61@gmail.com', 'fdf', 'fdsf', 'fsd', 'trst', 0, 'test', 'tetg', '112', 'bullhorn.png', '12', '2022', '1', 86, '1234', 3434, 'sbi', 'hgfh', 1223, 'email-marketing.png', '', '', '', '', '', '', '', '', '', '', '', '', 'guardian', '2022-03-09 09:52:09', '2022-03-09 09:52:09', '', '', '', ''),
(3, '1', 'Testing', '2022-03-09', 'Male', 'tes', 'tes', 2323, 'etrt', 'testingggggggggdd@gmail.com', 'gdf', 'gdfg', 'gdf', 'dgdfg', 5, 'hgfh', '3543', '23', 'checklist.png', 'fghh', '233', '1', 5656, 'tret@gmai.com12345', 12357, 'iob', 'ioba002', 123454, 'graphic-design.png', '', '', '', '', '', '', '', '', '', '', '', '', 'Guardian', '2022-03-09 10:01:43', '2022-03-09 10:01:43', '', '', '', ''),
(4, '', 'trt', '2022-03-31', 'Female', 'gdg', 'fgg', 535, 'dg', 'deepideep61@gmail.com', 'gdf', 'gfdg', 'dgg', 'gf', 0, 'gg', 'gfg', '456', '', '56', '533', '2', 5754, 'dggy', 5574, 'sgfs', 'g46', 2147483647, 'graphic.png', '', '', '', '', '', '', '', '', '', '', '', '', 'gddg', '2022-03-09 10:24:40', '2022-03-09 10:24:40', '', '', '', ''),
(5, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 'expert', 0, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-09 10:26:14', '2022-03-09 10:26:14', '', '', '', ''),
(6, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 'expert', 0, '', 0, '', '', 0, 's', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-09 10:59:02', '2022-03-09 10:59:02', '', '', '', ''),
(7, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 'expert', 0, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-09 11:01:47', '2022-03-09 11:01:47', '', '', '', ''),
(8, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 'expert', 0, '', 0, '', '', 0, 'globe.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-09 11:03:13', '2022-03-09 11:03:13', '', '', '', ''),
(9, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 'expert', 0, '', 0, '', '', 0, 'checklist.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-09 11:04:58', '2022-03-09 11:04:58', '', '', '', ''),
(10, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 'expert', 0, '', 0, '', '', 0, 'smart.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-09 11:06:44', '2022-03-09 11:06:44', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `family_information`
--
ALTER TABLE `family_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship_table`
--
ALTER TABLE `scholarship_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `family_information`
--
ALTER TABLE `family_information`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship_table`
--
ALTER TABLE `scholarship_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
