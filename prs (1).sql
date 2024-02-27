-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 11:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prs`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `ID` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `age` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`ID`, `name`, `position`, `age`, `address`, `email`, `status`) VALUES
(1, 'Mutebi Ashraf', 'CEO', '27', '', 'ashirafkagga@gmail.com', ''),
(2, 'ASHRAF KAGGA', 'Acountant', '25', '', 'ashiraf@gmail.com', ''),
(3, 'ASHKAM', 'Manager', '25', '', 'ash@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_type` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `number_positions` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expire_date` date NOT NULL,
  `edited_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_type`, `country`, `number_positions`, `date`, `expire_date`, `edited_by`) VALUES
(1, 'cleaner', 'Uganda', '25', '2023-11-24 14:34:46', '2023-11-30', 'Mutebi Ashraf');

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `id` int(11) NOT NULL,
  `names` varchar(25) NOT NULL,
  `pass_number` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pass_img` varchar(100) NOT NULL,
  `edited_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`id`, `names`, `pass_number`, `date`, `pass_img`, `edited_by`) VALUES
(10, 'ashraf', 'BKOD345E5RT', '2023-11-25 15:57:57', 'BKOD345E5RT.jpg', 'Mutebi Ashraf'),
(11, 'fred', 'BKOD345E5R', '2023-11-25 21:30:53', 'BKOD345E5R.jpg', 'Mutebi Ashraf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `names` varchar(25) NOT NULL,
  `pay_type` varchar(25) NOT NULL,
  `reason` varchar(25) NOT NULL,
  `amount_payied` varchar(25) NOT NULL,
  `balance` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recieved_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `names`, `pay_type`, `reason`, `amount_payied`, `balance`, `date`, `recieved_by`) VALUES
(1, 'ashraf', 'Cash', 'food', '50000', '', '2023-11-24 14:33:48', 'Mutebi Ashraf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `about` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL,
  `country` varchar(25) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `twitter` varchar(11) NOT NULL,
  `facebook` varchar(25) NOT NULL,
  `Instagram` varchar(25) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `profilepic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `about`, `username`, `password`, `country`, `contact`, `email`, `company`, `address`, `position`, `twitter`, `facebook`, `Instagram`, `linkedin`, `profilepic`) VALUES
(1, 'Mutebi Ashraf', 'another time recreating the table', 'mutebi', '123', 'Uganda', '0701324243', 'John@gmail.com', 'Professional Recruitement', 'Kampala Uganda', 'MD', 'twitter', 'facebook', 'Instagram', 'linkedin', 'assets/img/profilepics/sis.PNG'),
(2, 'ASHKAM', '', 'admin', '123', '', '', 'ashirafkagga@gmail.com', '', '', '', '', '', '', '', 'assets/img/profilepics/012A8589.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
