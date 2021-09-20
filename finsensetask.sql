-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 04:05 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finsensetask`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Postid` int(11) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Portid` int(11) DEFAULT NULL,
  `pdate` datetime NOT NULL DEFAULT current_timestamp(),
  `Blog` varchar(3000) NOT NULL,
  `uname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Postid`, `Post`, `Portid`, `pdate`, `Blog`, `uname`) VALUES
(25, 'Life', 34, '2021-09-20 11:44:32', 'Not how long, but how well you have lived', ''),
(27, 'Choices', 34, '2021-09-20 11:46:31', 'You make a choice when you decide how you will react to any given situation. If you’re choosing (sometimes subconsciously) to complain and think negatively, your natural reaction will be to dwell on the negatives of every situation.', ''),
(28, 'Patience', 35, '2021-09-20 11:51:55', 'The way I see it, if you want the rainbow, you better keep up with the sun', ''),
(29, 'A relationship with God', 36, '2021-09-20 12:01:32', 'DEVELOPING A LOVE RELATIONSHIP WITH GOD: 2 WEEK CHALLENGE! FALL DEEPER IN LOVE WITH JESUS I want to invite YOU to take the 2-week challenge. No matter where you are with God, you can benefit from this challenge. Personally speaking, this challenge has me focusing even more on His Love, Presence, Grace, and Power and Beauty', ''),
(31, 'Inspiration', 34, '2021-09-20 12:45:35', 'My number one greatest inspiration comes from the lord', 'Lucia');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `Portid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Portid`, `firstname`, `secondname`, `username`, `password`, `email`) VALUES
(34, '', NULL, 'Lucia', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(35, '', NULL, 'Amina', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(36, '', NULL, 'Anita', 'fcea920f7412b5da7be0cf42b8c93759', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Postid`),
  ADD KEY `Portid` (`Portid`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`Portid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `Portid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`Portid`) REFERENCES `usertable` (`Portid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
