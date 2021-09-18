-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 09:56 PM
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
-- Table structure for table `ports`
--

CREATE TABLE `ports` (
  `Portid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ports`
--

INSERT INTO `ports` (`Portid`, `firstname`, `secondname`, `username`, `password`, `email`) VALUES
(8, 'elizabeth', 'nyale', 'elinyale', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(12, 'Timothy', 'Oloo', 'Toloo', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(13, 'lucy', 'katilo', 'Klucy', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(14, 'peter', 'Mkuku', 'Pkuku', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(15, 'janet', 'amina', 'janetamina', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(16, 'kirindi', 'odindo', 'Kodindo', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(17, 'zainab', 'eli', 'Zeli', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(18, 'rukia', 'abdala', 'rabdala', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(19, 'Nicholas', 'Abdi', 'nAbdi', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(20, '', NULL, 'Changamwe', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(21, '', NULL, 'bombolulu', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(22, '', NULL, 'maki', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(23, '', NULL, 'miki', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(24, '', NULL, 'Lucia', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(25, '', NULL, 'Asha', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(26, '', NULL, 'andrewwangu', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(27, '', NULL, 'andreww', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(28, '', NULL, 'pickme', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(29, '', NULL, 'Klucy2', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(30, '', NULL, 'wipi', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(31, '', NULL, 'eti', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(32, '', NULL, 'amina', 'fcea920f7412b5da7be0cf42b8c93759', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Postid` int(11) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Portid` int(11) DEFAULT NULL,
  `pdate` datetime NOT NULL DEFAULT current_timestamp(),
  `Blog` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Postid`, `Post`, `Portid`, `pdate`, `Blog`) VALUES
(14, 'sally', 14, '2021-09-18 17:21:40', 'My inspiration comes from music'),
(16, 'eating', 8, '2021-09-18 19:44:40', 'Meat, how do you live without'),
(17, 'dogs', 8, '2021-09-18 19:45:12', 'i dont like'),
(18, 'vegetarians', 32, '2021-09-18 19:47:16', 'what is wrong'),
(19, 'paper', 13, '2021-09-18 19:52:08', 'to write'),
(22, 'eating', 13, '2021-09-18 20:07:08', 'what is wrong'),
(23, 'vegetarina', 13, '2021-09-18 20:17:33', 'My inspiration comes from music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`Portid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Postid`),
  ADD KEY `Portid` (`Portid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ports`
--
ALTER TABLE `ports`
  MODIFY `Portid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`Portid`) REFERENCES `ports` (`Portid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
