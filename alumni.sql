-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 11:54 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `passward` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `type` tinyint(1) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `passward`, `date`, `type`, `is_active`) VALUES
(1, 'sharif', '1', '2016-02-01', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `administrator_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `passward` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`administrator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `username`, `passward`, `date`, `type`) VALUES
(1, 'jahid', '1', '2016-02-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `post_id`, `comment`, `date_time`) VALUES
(28, 1, 59, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i', '2016-02-21 17:38:39'),
(29, 20, 60, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students ', '2016-02-21 17:43:26'),
(31, 1, 60, 'Ou can any kind Hello students i have a plane for you ....you can any kind Hello students iHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can an', '2016-02-21 17:53:33'),
(33, 1, 59, 'hhhhhhhhhhhhh', '2016-02-21 19:19:05'),
(39, 20, 61, 'no sharif its not right', '2016-02-21 19:33:41'),
(40, 20, 62, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ', '2016-02-21 19:48:06'),
(43, 20, 63, 'Please inform other students who r not aware of this message', '2016-02-22 16:22:18'),
(44, 1, 63, 'thanks azmi', '2016-02-22 16:29:20'),
(45, 1, 63, '.Please inform other students', '2016-02-22 17:21:22'),
(46, 1, 65, 'tnx sharif', '2016-02-24 18:08:54'),
(47, 32, 66, 'sharif we will do it next time', '2016-02-24 18:36:28'),
(48, 1, 69, 'd tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mi', '2016-02-29 19:51:10'),
(50, 1, 71, 'am, quis nostrud exercitation', '2016-03-01 06:50:58'),
(52, 3, 72, 'Thanks sharif', '2016-03-01 10:39:28'),
(53, 3, 71, 'aboris nisi ut aliquip ex ea  ', '2016-03-01 10:42:46'),
(55, 4, 73, 'm veniam, quis nostrud exercitation ullamco laboris nisi u', '2016-03-01 17:57:03'),
(56, 1, 74, 'Ut enim ad minim veni', '2016-03-02 07:05:06'),
(57, 1, 68, 'asdfasdfasdf', '2016-03-09 04:51:42'),
(58, 1, 74, 'tional University of Business Agriculture and Technology is the first non-government unive', '2016-03-12 06:38:05'),
(59, 33, 73, 'sfdasdf', '2016-03-14 07:44:00'),
(60, 33, 77, 'gadfgsdfg', '2016-03-14 08:00:03'),
(61, 33, 73, 'asdfasdfasdfasdf', '2016-03-14 08:01:51'),
(63, 36, 78, 'friend look at my status very carefully :)\r\n   ', '2016-03-14 08:06:34'),
(64, 36, 77, 'fasdfasdf', '2016-03-14 08:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(60) NOT NULL,
  `event_detail` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_detail`, `date`) VALUES
(1, 'Iubat history', 'asdfasdfasdfadsfsdfadsfadsfasdf', '2016-03-14 18:00:00'),
(2, 'Iubat addmission', 'asdfasdfasdfasdf', '2016-03-15 18:00:00'),
(3, 'Welcome to IUBAT University', 'IUBATâ€”International University of Business Agriculture and Technology is the first non-government university established in Bangladesh. The initial planning began in 1989 and the university was established in 1991. Degree programs started in 1992 with agreement with Assumption University of Bangkok, Thailand. IUBAT University now operates as a government approved university under the Non-Government University Act of 1992.\r\n\r\nThe overall mission of IUBAT University is human resources development through appropriate teaching, training and guidance as well as creation of knowledge conducive to socio-agro- economic development of developing societies in general and that of Bangladesh in particular. This overall mission is being attained through offering courses and curricula relating to various aspects of knowledge as well as providing opportunities for individuals to acquire skill and relevant experience in the chosen field of specialization. Besides, the University provides opportunities for promotion of scholasticism through research in different subject areas and application of knowledge in the context of Bangladesh.', '2016-03-09 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(60) NOT NULL,
  `post_of_job` varchar(60) NOT NULL,
  `education` varchar(50) NOT NULL,
  `experience` varchar(60) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `user_id`, `job_title`, `post_of_job`, `education`, `experience`, `date`) VALUES
(1, 5, 'labib group', 'assistant officer', 'BCSE', '2-5 years', '2016-03-15'),
(2, 1, 'Era cell limited', 'Executive - Accounts & Finance', 'Masters in Accounting/ M.B.A (Accounts/ Finance). ', '2-5 years', '2016-03-10'),
(3, 1, 'Buildtrade Engineering Ltd.', 'Design Engineer/ Sr. Design Engineer - Buildtrade Engineerin', 'B. Sc in Civil Engineering from any local or forei', 'B. Sc in Civil Engineering from any local or foreign reputed', '2016-03-22'),
(4, 1, 'Bakila tranasport', 'Executive - Accounts & Finance', 'BSC in tranasport', '100 years', '2016-03-09'),
(5, 1, 'Robi call center', 'Design Engineer/ Sr. Design Engineer - Buildtrade Engineerin', 'Masters in Accounting/ M.B.A (Accounts/ Finance). ', '2-5 years', '2016-03-09'),
(6, 1, 'Baycliffe Consultants Ltd.', 'Senior C# Developer.', 'Bachelors Degree in Engineering, Computer Science,', '1 to 2 year(s)', '2016-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `details`, `date_time`, `user_id`) VALUES
(39, 'Hello students welcome to our alumni management ', '2016-02-19 23:03:57', 1),
(40, 'Hello students welcome to our alumni management\r\n', '2016-02-19 23:04:14', 1),
(41, 'Hello students welcome to our alumni management\r\n', '2016-02-19 23:04:23', 1),
(42, 'Hello students welcome to our alumni management\r\nHello stude', '2016-02-19 23:04:36', 1),
(43, 'Hello students welcome to our alumni management\r\nHello stude', '2016-02-19 23:04:50', 1),
(44, 'Next day is our 21st february', '2016-02-20 13:39:21', 20),
(45, 'Hello students i have a plane for you ....you can any kind o', '2016-02-20 15:27:33', 25),
(47, 'Hello students i have a plane for you ....you can any kind \r\nHello students i have a plane for you ....you can any kind \r\nHello students i have a plane for you ....you can any kind \r\nHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind ', '2016-02-20 16:09:36', 25),
(48, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello ', '2016-02-20 16:38:15', 1),
(49, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello', '2016-02-20 16:45:40', 31),
(51, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i habib', '2016-02-21 09:12:58', 31),
(53, 'hi', '2016-02-21 08:36:13', 1),
(54, 'hi', '2016-02-21 08:36:36', 1),
(55, 'hiiiiiiiiiiiiiiiiiii', '2016-02-21 08:51:30', 1),
(56, 'vxcvxdfv', '2016-02-21 08:53:46', 1),
(57, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i habib', '2016-02-21 09:23:33', 1),
(58, 'welcome', '2016-02-21 17:23:19', 20),
(59, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i ', '2016-02-21 17:32:50', 1),
(60, 'Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students iHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students iHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i haHello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i', '2016-02-21 17:43:15', 20),
(61, 's have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hello students i have a plane for you ....you can any kind Hel ', '2016-02-21 19:47:20', 1),
(62, 'exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   ', '2016-02-21 20:00:37', 20),
(63, 'Tomorrow is our 70 orientation will be held in our varsity .........Please inform other students who r not aware of this messager', '2016-02-22 15:48:09', 1),
(64, 'Tomorrow is our 70 orientation will be held in our varsity .........Please inform other students who r not aware of this messagerTomorrow is our 70 orientation will be held in our varsity .........Please inform other students who r not aware of this messagerTomorrow is our 70 orientation will be held in our varsity .........Please inform other students who r not aware of this messagerTomorrow is our 70 orientation will be held in our varsity .........Please inform other students who r not aware of this messager', '2016-02-22 17:07:25', 1),
(65, 'hi sabbir', '2016-02-24 18:08:13', 1),
(66, 'Yes you r wright.....sharif we will do it', '2016-02-24 18:36:03', 32),
(68, '', '2016-02-26 18:37:37', 1),
(69, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', '2016-02-29 19:51:00', 1),
(70, 'nim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in ', '2016-03-01 05:41:12', 20),
(71, 'enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '2016-03-01 05:54:10', 3),
(73, 'M ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint m ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ', '2016-03-01 17:12:17', 4),
(77, 'IUBATasdfasdfasdfasdf', '2016-03-14 07:59:57', 33),
(78, 'IUBATâ€”International University of Business Agriculture and Technology is the first non-government university established in Bangladesh. The initial planning began in 1989 and the university was established in 1991. Degree programs started in 1992 with agreement with Assumption University of Bangkok, Thailand. IUBAT University strongly lobbied for the creation of non-government universities and supported the initiative of the Government of Bangladesh in passing legislation for formal establishment of non-government universities in the country. IUBAT University now operates as a government approved university under the Non-Government University Act of 1992.', '2016-03-14 08:05:56', 36),
(79, 'IUBATâ€”International University of Business Agriculture and Technology is the first non-government university established in Bangladesh. The initial planning began in 1989 and the university was established in 1991. Degree programs started in 1992 with ', '2016-03-16 08:30:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `replay_comment`
--

CREATE TABLE IF NOT EXISTS `replay_comment` (
  `replay_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `replay_comment` text NOT NULL,
  PRIMARY KEY (`replay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE IF NOT EXISTS `studentinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(40) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `batch` varchar(60) NOT NULL,
  `year` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `passward` varchar(60) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `student_id`, `fullname`, `email`, `department`, `batch`, `year`, `username`, `passward`, `type`, `is_active`) VALUES
(1, '123', 'adsf', 'adf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `batch` varchar(60) NOT NULL,
  `year` varchar(40) NOT NULL,
  `passing_year` date NOT NULL,
  `username` varchar(60) NOT NULL,
  `passward` varchar(60) NOT NULL,
  `type` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `user_id`, `fullname`, `email`, `department`, `batch`, `year`, `passing_year`, `username`, `passward`, `type`, `is_active`, `image`) VALUES
(1, 13103175, 'Mohammad shariful islam ', 'sharifcse57@gmail.com', 'BCSE', 'Fall', '2012', '2016-02-02', 'sharif', '1', 2, 1, ''),
(3, 13103143, 'Farzana islam jui', 'jui@gmail.com', 'BCSE', 'Spring', '2013', '2016-12-15', 'jui', '2', 2, 1, ''),
(4, 13103177, 'Mahfuza Begum', 'mafi@gmail.com', 'BCSE', 'Fall', '2014', '2016-02-19', 'mahfuza', '3', 2, 1, ''),
(5, 13103172, 'jahid hasan', 'sharif114200@yahoo.com', 'BCSE', 'Sparing', '2015', '2016-02-18', 'jahid', '4', 2, 0, ''),
(6, 13103177, 'Farzana islam jui', 'sharif114200@yahoo.com', 'BCSE', 'Fall', '2014', '2020-01-01', 'jui', '12', 2, 0, ''),
(7, 13103177, 'Farzana islam jui', 'sharif114200@yahoo.com', 'BCSE', 'summer', '2016', '2014-09-13', 'sabbir', '8', 2, 0, ''),
(8, 13103177, 'Farzana islam jui', 'sharif114200@yahoo.com', 'BCSE', 'Spring', '2017', '2017-05-17', 'a', '1', 2, 1, ''),
(13, 12106095, 'Jakaria Hossain', 'jakaria@iubat.edu', 'BSCE', 'Spring', '2012', '2015-12-15', 'jakaria', '1', 2, 0, ''),
(19, 13103155, 'nozrul', 'sharifcse57@gmail.com', 'BSEEE', 'Spring', '2010', '2012-01-02', 'nozrul', '1', 0, 0, ''),
(20, 12106095, 'Azmi', 'sharifcse57@gmail.com', 'BSAG', 'Spring', '2012', '2014-01-07', 'aman', '1', 2, 1, ''),
(22, 13103155, 'Farzana islam jui', 'sharif114200@yahoo.com', 'BSEEE', 'Spring', 'Year', '2016-02-09', 'a', 'a', 0, 0, ''),
(25, 13103177, 'Mohammad shamim', 'sharif114200@yahoo.com', 'BSAG', 'Summer', '2010', '2016-02-08', 'shamim', '1', 2, 1, ''),
(28, 13103172, 'arif', 'asdf@asdf.com', 'BATHM', 'Summer', '2011', '2016-02-09', 'arif', '1', 2, 1, ''),
(29, 1130580, 'Mamun Molla', 'Mamun@yahoo.com', 'BSAG', 'Fall', '2011', '2016-02-09', 'Mamun', '88888', 2, 1, ''),
(30, 13103177, 'Farzana islam jui', 'sharif114200@yahoo.com', 'BCSE', 'Spring', '2011', '2016-02-09', 'mmmmm', '11111', 2, 1, ''),
(32, 1250412, 'Mamun', 'sharif114200@yahoo.com', 'BSAG', 'Fall', 'Year', '2016-02-09', 'Mamun', '1', 2, 1, ''),
(33, 15106095, 'aman', 'sharif114200@yahoo.com', 'BSAG', 'Batch', '2015', '0000-00-00', 'aman', 'aman', 3, 1, ''),
(34, 13103155, 'munna', 'sharif114200@yahoo.com', 'BCSE', 'Spring', '2011', '0000-00-00', 'munna', '1', 3, 1, ''),
(36, 13103155, 'sumon', 'zahidhasanzayed@iubat.edu', 'BSAG', 'Summer', '2010', '2014-01-06', 'sumon', '1', 2, 1, 'img/Desert.jpg'),
(37, 13103155, 'jannatul baki', 'apple13103172@gmail.com', 'BSEEE', 'Spring', '2010', '2014-01-01', 'baki', '123', 2, 1, 'img/Desert.jpg'),
(39, 13103177, 'baki', 'sharifcse57@gmail.com', 'BSEEE', 'Summer', '2010', '2014-01-28', 'jannat', '1', 2, 0, 'img/Chrysanthemum.jpg'),
(40, 13103155, 'Mohammad shariful islam', 'sharif114200@yahoo.com', 'BCSE', 'Spring', '2011', '2016-03-16', 'faruk', '1', 2, 1, 'img/falling.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
