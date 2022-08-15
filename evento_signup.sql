-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 04:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evento_signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(100) NOT NULL,
  `id2` int(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `nom` int(100) NOT NULL,
  `pay` int(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `id2`, `event`, `name`, `p_no`, `nom`, `pay`, `date`, `email`) VALUES
(19, 72, 'Freshers 2022', 'Yug Dave', '8469655400', 2, 850, '2022-04-10', 'daveyug2002@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `c_name`, `c_email`, `c_phone`, `subject`, `message`) VALUES
(5, 'Yug D. DAVE', 'daveyug2002@gmail.com', '2147483647', 'Hello', 'Hello Yug'),
(8, '', '', '', '', ''),
(9, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `evento_event`
--

CREATE TABLE `evento_event` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` text NOT NULL,
  `venue` text NOT NULL,
  `address` text NOT NULL,
  `capacity` int(255) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `set_time` int(255) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `poster` varchar(512) NOT NULL,
  `pay` int(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evento_event`
--

INSERT INTO `evento_event` (`id`, `user_id`, `name`, `contact`, `date`, `time`, `description`, `venue`, `address`, `capacity`, `event_type`, `set_time`, `contact_person`, `image`, `poster`, `pay`, `status`) VALUES
(107, 19, 'Yug Dave', '8469655400', '2021-12-28', '17:00:00', 'Welcome to a Live Webinar on Professional Video Production from Scratch  ', 'Online', 'Online', 0, 'Video Production', 0, 'Yug Dave', 'LIVE WEBINAR.png', '84942-Live Webinar-Video.pdf', 0, 'pending'),
(108, 3, 'Karan Bhatt', '1234567890', '2021-12-31', '21:00:00', 'Welcome to New Year eve with Music Concert featuring Karan Bhatt', 'Karelibaug', 'Vadodara', 0, 'New Year Eve', 0, 'Karan', 'New Year Eve Music Concert.png', '57154-Karan Bhatt invites you.pdf', 0, 'pending'),
(111, 19, 'Yug Dharmeshkumar Dave', '8469655400', '2022-01-22', '15:00:00', 'Freshers Party !!!', 'Surya Palace', 'Vadodara', 0, 'Freshers 2022', 0, 'Karan Bhatt', 'background.jpg', '97128-background.jpg', 0, 'pending'),
(112, 19, 'MR.X', '32435454', '2022-01-21', '13:20:00', 'KSKFD', 'VADODARA', 'VADODARA', 0, 'HELLO', 0, 'SK', 'download.png', '50700-Resume.pdf', 0, 'pending'),
(113, 19, 'Mr. X', '8469655400', '2022-07-20', '13:00:00', 'It is a Python Webinar !!\r\nMost Welcome', 'VADODARA', 'Vadodara', 850, 'Python Webinar', 0, 'Yug Dave', 'Untitled design.png', '53235-error.png', 0, 'pending'),
(121, 36, 'Yug Dharmeshkumar Dave', '8469655400', '2022-04-10', '10:00:00', 'Hello Freshies', 'Surya', 'Athar', 850, 'Freshers 2022', 0, 'Yug Dave', 'background.jpg', '48566-chosen-sprite.png', 0, 'approved'),
(122, 19, 'Yug Dave', '8469655400', '2022-07-15', '10:00:00', 'Hello Freshies', 'Laxmi', 'Surat', 850, 'Freshers 2022', 0, 'Yug Dave', 'background.jpg', '26966-chosen-sprite.png', 0, 'pending'),
(124, 19, 'Utsav', '8469655400', '0022-04-20', '12:00:00', 'Freshers Prarty', 'Orchid', 'Surat', 850, 'Freshers 2022', 0, 'Karan Bhatt', 'Screenshot_2022-04-06-21-39-42-56_e307a3f9df9f380ebaf106e1dc980bb6.jpg', '73284-Screenshot_2022-04-06-21-39-58-74_e307a3f9df9f380ebaf106e1dc980bb6.jpg', 0, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `pp`
--

CREATE TABLE `pp` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `time` time NOT NULL,
  `description` varchar(250) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `cb1` int(50) NOT NULL,
  `cb2` int(50) NOT NULL,
  `cb3` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pp`
--

INSERT INTO `pp` (`id`, `username`, `name`, `contact`, `time`, `description`, `venue`, `address`, `price`, `contact_person`, `contact_email`, `cb1`, `cb2`, `cb3`) VALUES
(7, 'abc', 'Yug Dharmeshkumar Dave', '2147483647', '09:00:00', 'fdjvkfjvksjvlcjvlxk', 'Surya', 'XYZ', 400, 'Yug Dave', 'daveyug2002@gmail.com', 80, 30, 10),
(8, 'abcd', 'Yug Dave', '8469655400', '10:00:00', 'Hello', 'Orchid', 'Surat', 400, 'Yug Dave', 'daveyug2002@gmail.com', 80, 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(3, 'Karan', 'karanbhatt@gmail.com', 'user', 'dd70b610a42159196ee3b7db7228d936'),
(12, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(19, 'the_Yug020', 'daveyug2002@gmail.com', 'user', 'c7fd3f8bd328fe80fefb61bb3d7b13cf'),
(25, 'Mr_X', 'abc@gmail.com', 'organiser', 'a906449d5769fa7361d7ecc6aa3f6d28'),
(32, 'Org', 'Org@gmail.com', 'organiser', '9e003b727324136d2a1d65277e6672e1'),
(33, 'organisation', 'org@gmail.com', 'organiser', '5bc78acd6d978da9526f76aaee13b857'),
(34, 'yugdave', 'daveyug2002@gmail.com', 'user', 'c7fd3f8bd328fe80fefb61bb3d7b13cf'),
(35, 'Mr_X', 'daveyug2002@gmail.com', 'organiser', '138cfe09d04bf461d169ed0ef1607cda'),
(36, 'abc', 'daveyug2002@gmail.com', 'organiser', 'e99a18c428cb38d5f260853678922e03'),
(37, 'Mr_Y', 'daveyug2002@gmail.com', 'organiser', '29bc8ce195ad057eb51532cec0d76394'),
(38, 'abcd', 'daveyug2002@gmail.com', 'organiser', '79cfeb94595de33b3326c06ab1c7dbda');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `time` time NOT NULL,
  `description` varchar(250) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `price` int(10) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `username`, `name`, `contact`, `time`, `description`, `venue`, `address`, `price`, `contact_person`, `contact_email`, `image`) VALUES
(3, '', 'Mr_Y', '2147483647', '09:00:00', 'sjcnjdncj', 'Blue', 'Ahmedabad', 499, 'Yug Dave', 'daveyug2002@gmail.com', 'fancybox_loading.gif'),
(4, 'Mr_Y', 'Yug Dave', '2147483647', '10:00:00', 'sjndkcjnkxcnk', 'Laxmi', 'Surat', 150, 'Yug Dave', 'daveyug2002@gmail.com', 'background.jpg'),
(7, 'abc', 'Yug Dharmeshkumar Dave', '2147483647', '09:00:00', 'fdjvkfjvksjvlcjvlxk', 'Surya', 'XYZ', 400, 'Yug Dave', 'daveyug2002@gmail.com', 'surya.jpg'),
(8, 'abcd', 'Yug Dave', '8469655400', '10:00:00', 'Hello', 'Orchid', 'Surat', 400, 'Yug Dave', 'daveyug2002@gmail.com', 'Screenshot_2022-04-06-21-39-42-56_e307a3f9df9f380ebaf106e1dc980bb6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evento_event`
--
ALTER TABLE `evento_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id2` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `evento_event`
--
ALTER TABLE `evento_event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
