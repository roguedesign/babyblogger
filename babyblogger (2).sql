-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 04:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `babyblogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(11) NOT NULL,
  `postName` varchar(250) NOT NULL,
  `postComment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `postName`, `postComment`, `date`, `user_id`, `thread_id`) VALUES
(6, 'Help!', 'Unsure of what to use...', '2014-12-11 04:52:37', 5, 1),
(7, 'Is this better than that?', 'What do you reckon?', '2014-12-11 04:53:44', 2, 3),
(8, 'Dont know!', 'How do i do this?!', '2014-12-11 05:01:46', 2, 1),
(9, 'Ok so this happened...', 'Sings song', '2014-12-15 05:33:32', 6, 4),
(10, 'What?', 'Pass the what now?', '2014-12-15 05:40:20', 6, 3),
(11, 'teeth', 'im having a problem with my little one! what should i be using! help!', '2014-12-16 04:39:55', 6, 1),
(13, 'bump', 'bumps into everything!', '2014-12-16 04:44:11', 8, 2),
(14, '76547', '764764764764', '2015-03-05 03:30:37', 0, 0),
(15, 'Help!', 'Unsure of what to use... EDIT', '2015-03-19 03:39:56', 0, 0),
(16, 'Help!', 'Unsure of what to use... EDIT', '2015-03-19 03:41:19', 0, 0),
(17, 'Help!', 'Unsure of what to use... EDIT', '2015-03-19 03:41:34', 0, 0),
(18, 'Thing', 'things', '2015-03-19 03:42:06', 0, 0),
(19, 'Help!', 'Unsure of what to use', '2015-03-19 03:48:21', 0, 0),
(20, 'Help!', 'Unsure of what to use', '2015-03-19 03:51:51', 0, 0),
(21, 'Help!', 'Unsure of what to use', '2015-03-19 03:54:21', 0, 0),
(22, 'Help!', 'Unsure of what to use', '2015-03-19 03:55:07', 0, 0),
(23, 'Help!', 'Unsure of what to use', '2015-03-19 03:56:26', 0, 0),
(24, 'Help!', 'Unsure of what t', '2015-03-19 04:02:16', 0, 0),
(25, 'Help!', 'Unsure of ', '2015-03-19 04:29:17', 0, 0),
(26, 'Help!', 'Unsure of what to use...', '2015-03-19 04:48:58', 0, 0),
(27, 'Help!', 'Unsure of what to .', '2015-03-19 04:49:05', 0, 0),
(28, 'Help!', 'Un', '2015-03-19 04:56:10', 0, 0),
(29, 'gf', 'gfgfgfgfg', '2015-03-19 05:31:25', 0, 0),
(30, 'ggg', 'ggg', '2015-03-19 05:37:43', 0, 0),
(31, 'nerw', 'hello', '2015-03-20 02:14:54', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
`id` int(11) NOT NULL,
  `threadName` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `threadName`) VALUES
(1, 'teething'),
(2, 'walking'),
(3, 'eating'),
(4, 'terrible_twos');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`, `birthdate`) VALUES
(1, 'Jupiter', 'Bean', 'jupiterbean@hotmail.com', 'jupiterbean', '1968-04-02'),
(2, 'Pauline', 'Robuster', 'paulinerobuster@hotmail.com', 'paulinerobuster', '1973-12-08'),
(4, 'Carol', 'Hang', 'diditgreat@hotmail.com', 'cat', '2012-09-23'),
(5, 'Shelly', 'Bobcat', 'shellybobcat@hotmail.com', 'shellybobcat', '0000-00-00'),
(6, 'Bob', 'Bing', 'bobbing@hotmail.com', 'bobbing', '0000-00-00'),
(7, 'Some Ting', 'Wong', 'sometingwong', 'sometingwong', '0000-00-00'),
(8, 'Bob', 'Sat', 'bobsat@hotmail.com', 'bobsat', '0000-00-00'),
(9, 'bob', 'cat', 'sitting@hotmail.com', 'ona', '0000-00-00'),
(23, 'fdsa', 'fdAs', 'fda', 'fdsa', '0000-00-00'),
(24, 'fdsa', 'fdsa', 'fdsa', 'fdas', '0000-00-00'),
(25, 'fgds', 'gsa', 'gfd', 'gfd', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`,`postName`,`date`), ADD KEY `postName` (`postName`), ADD KEY `id_2` (`id`,`postName`,`date`), ADD KEY `user_id` (`user_id`), ADD KEY `user_id_2` (`user_id`), ADD KEY `thread_id` (`thread_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
