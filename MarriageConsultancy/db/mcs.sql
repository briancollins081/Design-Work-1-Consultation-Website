-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 03:30 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbanscomments`
--

CREATE TABLE `tbanscomments` (
  `anscommentid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `answerid` int(11) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbanscomments`
--

INSERT INTO `tbanscomments` (`anscommentid`, `questionid`, `answerid`, `comment`) VALUES
(1, 1, 1, 'Yeah that sounds probably a good solution provided you are both saved and God loving.'),
(2, 2, 2, 'Just in case your family members aren''t willing to help i think taking the issue to your local chief might help keep the guy off.');

-- --------------------------------------------------------

--
-- Table structure for table `tbanswers`
--

CREATE TABLE `tbanswers` (
  `answerid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `professionid` int(11) NOT NULL,
  `posted` datetime NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbanswers`
--

INSERT INTO `tbanswers` (`answerid`, `questionid`, `userid`, `professionid`, `posted`, `answer`) VALUES
(1, 1, 1, 2, '2018-03-01 00:00:00', 'I suggest you try to convince your husband to visit your religious leader who might offer further assistance. If this fails you might need to call your preacher at your place without his consent.'),
(2, 2, 2, 3, '2018-03-01 11:00:09', 'I suggest you approach some of the family elders if you have any and explain your problem to them. If you have none, you might want to use the law to restrain him. These are not times for wife inheritance.'),
(3, 1, 1, 1, '2018-03-07 00:28:00', 'iulhiulwr829149t'),
(4, 1, 2, 0, '2018-03-01 00:00:00', 'brayo ask him');

-- --------------------------------------------------------

--
-- Table structure for table `tbconsultationlevels`
--

CREATE TABLE `tbconsultationlevels` (
  `consultationlevelid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbconsultationlevels`
--

INSERT INTO `tbconsultationlevels` (`consultationlevelid`, `name`, `description`) VALUES
(1, 'Specialist Level', 'Here you get direct attention from the specialist.'),
(2, 'General Level', 'Here you post a general question for everyone to access and answer.');

-- --------------------------------------------------------

--
-- Table structure for table `tbflags`
--

CREATE TABLE `tbflags` (
  `flagid` int(11) NOT NULL,
  `flagname` varchar(255) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `tbflags`
--

INSERT INTO `tbflags` (`flagid`, `flagname`) VALUES
(1, 'Upvoted'),
(2, 'Downvoted'),
(3, 'RedFlagged');

-- --------------------------------------------------------

--
-- Table structure for table `tbprofapplication`
--

CREATE TABLE `tbprofapplication` (
  `profapplicationid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `shortdescription` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbprofession`
--

CREATE TABLE `tbprofession` (
  `professionid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbprofession`
--

INSERT INTO `tbprofession` (`professionid`, `name`) VALUES
(1, 'Administrator'),
(2, 'Marriage Specialist'),
(3, 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `tbqstcomments`
--

CREATE TABLE `tbqstcomments` (
  `qstcommentid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `posted` datetime NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbqstcomments`
--

INSERT INTO `tbqstcomments` (`qstcommentid`, `questionid`, `userid`, `posted`, `comment`) VALUES
(1, 1, 1, '2018-03-01 00:00:00', 'This seems to be a common problem in most traditional communities. We should be sure and serious about our marriages and religious standards.'),
(2, 2, 2, '2018-02-01 12:24:13', 'Just use the law, either the local chief or nearest police station. They might help you out. This is so unfortunate'),
(3, 1, 3, '2018-03-11 17:56:36', 'weeeddsds');

-- --------------------------------------------------------

--
-- Table structure for table `tbquestions`
--

CREATE TABLE `tbquestions` (
  `questionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `topicid` int(11) NOT NULL,
  `question` text NOT NULL,
  `posted` datetime NOT NULL,
  `consultationlevel` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbquestions`
--

INSERT INTO `tbquestions` (`questionid`, `userid`, `topicid`, `question`, `posted`, `consultationlevel`) VALUES
(1, 1, 1, 'My husband insists that we must go to his traditional home and participate in the family traditions that are against our religious practices. What should I do because the rituals seem to be more important to him than his current life?', '2018-03-08 00:00:00', 1),
(2, 2, 1, 'My brother in law wants to take me as his wife since my husband got diseased a year ago. I have held off for quite a while but he is still insisting on the matter. I have told him I am not interested to no vain. What''s the best way to get rid of him?', '2018-03-08 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbreasons`
--

CREATE TABLE `tbreasons` (
  `reasonid` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `tbreasons`
--

INSERT INTO `tbreasons` (`reasonid`, `name`) VALUES
(1, 'Dirty Language or Abusive'),
(2, 'Out of Topic'),
(3, 'Bullying'),
(4, 'Not Respective'),
(5, 'Correct Answer'),
(6, 'Advanced Answer'),
(7, 'Good Description');

-- --------------------------------------------------------

--
-- Table structure for table `tbstories`
--

CREATE TABLE `tbstories` (
  `userid` int(11) NOT NULL,
  `topicid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text,
  `posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbtopics`
--

CREATE TABLE `tbtopics` (
  `topicid` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtopics`
--

INSERT INTO `tbtopics` (`topicid`, `topic`) VALUES
(1, 'Family Issues'),
(2, 'Community Issues'),
(3, 'Children Issues'),
(4, 'Marital Issues'),
(5, 'Property Issues'),
(6, 'Divorce Issues');

-- --------------------------------------------------------

--
-- Table structure for table `tbuserflags`
--

CREATE TABLE `tbuserflags` (
  `userflagid` int(11) NOT NULL,
  `flagid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `reasonid` int(11) NOT NULL,
  `flagged` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `tbuserflags`
--

INSERT INTO `tbuserflags` (`userflagid`, `flagid`, `userid`, `reasonid`, `flagged`) VALUES
(1, 2, 3, 1, '2018-03-01 00:00:00'),
(2, 2, 1, 2, '2018-03-04 19:42:26'),
(3, 1, 3, 7, '2018-03-11 18:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `regdate` datetime NOT NULL,
  `professionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`userid`, `username`, `password`, `fname`, `lname`, `email`, `phone`, `regdate`, `professionid`) VALUES
(1, 'testuser081', 'testuser081', 'testuser081', 'testuser081', 'testuser081@gmail.com', '0798211567', '2018-03-03 00:00:00', 1),
(2, 'testuser082', 'testuser082', 'testuser082', 'testuser082', 'testuser082@gmail.com', '0765543129', '2018-03-09 00:00:00', 1),
(3, 'briancollins081', 'd859c8365ef551495addd2851a91dae21d0b34db', 'briancollins081', 'briancollins081', 'briancollins081@gmail.com', '0788945321', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbanscomments`
--
ALTER TABLE `tbanscomments`
  ADD PRIMARY KEY (`anscommentid`);

--
-- Indexes for table `tbanswers`
--
ALTER TABLE `tbanswers`
  ADD PRIMARY KEY (`answerid`);

--
-- Indexes for table `tbconsultationlevels`
--
ALTER TABLE `tbconsultationlevels`
  ADD PRIMARY KEY (`consultationlevelid`);

--
-- Indexes for table `tbprofapplication`
--
ALTER TABLE `tbprofapplication`
  ADD PRIMARY KEY (`profapplicationid`);

--
-- Indexes for table `tbprofession`
--
ALTER TABLE `tbprofession`
  ADD PRIMARY KEY (`professionid`);

--
-- Indexes for table `tbqstcomments`
--
ALTER TABLE `tbqstcomments`
  ADD PRIMARY KEY (`qstcommentid`);

--
-- Indexes for table `tbquestions`
--
ALTER TABLE `tbquestions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `tbstories`
--
ALTER TABLE `tbstories`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbtopics`
--
ALTER TABLE `tbtopics`
  ADD PRIMARY KEY (`topicid`);

--
-- Indexes for table `tbuserflags`
--
ALTER TABLE `tbuserflags`
  ADD PRIMARY KEY (`userflagid`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbanscomments`
--
ALTER TABLE `tbanscomments`
  MODIFY `anscommentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbanswers`
--
ALTER TABLE `tbanswers`
  MODIFY `answerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbconsultationlevels`
--
ALTER TABLE `tbconsultationlevels`
  MODIFY `consultationlevelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbprofapplication`
--
ALTER TABLE `tbprofapplication`
  MODIFY `profapplicationid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbprofession`
--
ALTER TABLE `tbprofession`
  MODIFY `professionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbqstcomments`
--
ALTER TABLE `tbqstcomments`
  MODIFY `qstcommentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbquestions`
--
ALTER TABLE `tbquestions`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbstories`
--
ALTER TABLE `tbstories`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbtopics`
--
ALTER TABLE `tbtopics`
  MODIFY `topicid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbuserflags`
--
ALTER TABLE `tbuserflags`
  MODIFY `userflagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
