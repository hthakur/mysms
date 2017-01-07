-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 08:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mysms_contact`
--

CREATE TABLE `mysms_contact` (
  `con_id` int(11) NOT NULL,
  `con_signid` int(11) DEFAULT NULL,
  `con_groupid` int(11) DEFAULT NULL,
  `con_name` varchar(100) DEFAULT NULL,
  `con_number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysms_contact`
--

INSERT INTO `mysms_contact` (`con_id`, `con_signid`, `con_groupid`, `con_name`, `con_number`) VALUES
(1, 7, 3, 'Heeral', 9930572460),
(2, 7, 2, 'Dhruv', 9930572499),
(3, 7, 5, 'Kartik', 9930572466),
(4, 7, 3, 'Ritu', 9930578460),
(6, 7, 3, 'Geeta Thakur', 9985072460),
(8, 7, 2, 'kanka', 8520724600),
(9, 7, 3, 'Shruti', 9930572446),
(10, 4, 1, 'Yogi', 9930572466),
(11, 7, 2, 'lalu', 9933007766),
(12, 7, 7, 'lali', 9977661145),
(13, 7, 4, 'Sita', 9930572460);

-- --------------------------------------------------------

--
-- Table structure for table `mysms_group`
--

CREATE TABLE `mysms_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `group_signid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysms_group`
--

INSERT INTO `mysms_group` (`group_id`, `group_name`, `group_signid`) VALUES
(1, 'College', 4),
(2, 'Family', 7),
(3, 'School', 7),
(4, 'College', 7),
(5, 'Classmates', 7),
(6, 'kids', 4),
(7, 'Tutions', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mysms_library`
--

CREATE TABLE `mysms_library` (
  `lib_id` int(11) NOT NULL,
  `lib_name` varchar(100) DEFAULT NULL,
  `lib_signid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysms_library`
--

INSERT INTO `mysms_library` (`lib_id`, `lib_name`, `lib_signid`) VALUES
(1, 'Diwali', 4),
(2, 'Holi', 7),
(3, 'Christmas', 7),
(4, 'Eid', 7),
(5, 'Hloi', 4),
(6, 'Diwali', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mysms_login`
--

CREATE TABLE `mysms_login` (
  `sign_id` int(11) NOT NULL,
  `sign_name` varchar(100) DEFAULT NULL,
  `sign_email` varchar(100) DEFAULT NULL,
  `sign_mob` bigint(20) DEFAULT NULL,
  `sign_pass` varchar(100) DEFAULT NULL,
  `sign_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysms_login`
--

INSERT INTO `mysms_login` (`sign_id`, `sign_name`, `sign_email`, `sign_mob`, `sign_pass`, `sign_time`) VALUES
(4, 'han', 'han@gmail.com', 9930572460, '8a2f14e37a82cbd244ede122cdc258f5b9924014', '2016-10-20 19:13:45'),
(5, 'Pope', 'poo123@gmail.com', 9930572460, '8a2f14e37a82cbd244ede122cdc258f5b9924014', '2016-10-24 06:13:26'),
(6, 'kanchu', 'kanchu1@gmail.com', 9930572460, 'fbfe0725a822de722934178e00c6fbfeb550cec0', '2016-11-09 12:01:49'),
(7, 'heeral', 'hee@gmail.com', 9930572460, '8a2f14e37a82cbd244ede122cdc258f5b9924014', '2016-11-10 15:15:20'),
(8, 'Geeta', 'geeta12@gmail.com', 9821134401, '8a2f14e37a82cbd244ede122cdc258f5b9924014', '2016-11-11 15:27:16'),
(10, 'geet', 'gee@gmail.com', 9930572460, '8a2f14e37a82cbd244ede122cdc258f5b9924014', '2016-11-11 15:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `mysms_msg`
--

CREATE TABLE `mysms_msg` (
  `msg_id` int(11) NOT NULL,
  `msg_libid` int(11) DEFAULT NULL,
  `msg_signid` int(11) DEFAULT NULL,
  `msg_description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysms_msg`
--

INSERT INTO `mysms_msg` (`msg_id`, `msg_libid`, `msg_signid`, `msg_description`) VALUES
(1, 2, 7, 'Happy Happy Holi my folks '),
(3, 2, 7, 'Happy Holi my lovely folks '),
(4, 4, 7, 'Eid mubarak guys !'),
(5, 3, 7, 'This is a festival of happiness and hopes'),
(6, 3, 7, 'This is a festival of happiness and hopes'),
(7, 3, 7, 'Happy Happy Christmas my folks '),
(8, 3, 7, 'Christmas or Christmas Day is an annual festival commemorating the birth of Jesus Christ, observed most commonly on December 25 as a religious and cultural ...'),
(9, 2, 7, 'Holi (pronunciation: /ËˆhoÊŠliË/; Sanskrit: à¤¹à¥‹à¤²à¥€ HolÄ«) is a Hindu spring festival in India and Nepal, also known as the festival of colours or the festival of sharing love.'),
(10, 2, 7, 'One of the major festivals of India, Holi is celebrated with enthusiasm and gaiety on the full moon day in the month of Phalgun which is the month of March as per ...'),
(11, 3, 7, 'One of the major festivals of India, Holi is celebrated with enthusiasm and gaiety on the full moon day in the month of Phalgun which is the month of March as per ...'),
(12, 3, 7, 'One of the major festivals of India, Holi is celebrated with enthusiasm and gaiety on the full moon day in the month of Phalgun which is the month of March as per ...'),
(13, 4, 7, 'One of the major festivals of India, Holi is celebrated with enthusiasm and gaiety on the full moon day in the month of Phalgun which is the month of March as per ...'),
(14, 6, 7, 'Happy Happy Diwali everyone ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mysms_contact`
--
ALTER TABLE `mysms_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `mysms_group`
--
ALTER TABLE `mysms_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `mysms_library`
--
ALTER TABLE `mysms_library`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indexes for table `mysms_login`
--
ALTER TABLE `mysms_login`
  ADD PRIMARY KEY (`sign_id`);

--
-- Indexes for table `mysms_msg`
--
ALTER TABLE `mysms_msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mysms_contact`
--
ALTER TABLE `mysms_contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mysms_group`
--
ALTER TABLE `mysms_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mysms_library`
--
ALTER TABLE `mysms_library`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mysms_login`
--
ALTER TABLE `mysms_login`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mysms_msg`
--
ALTER TABLE `mysms_msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
