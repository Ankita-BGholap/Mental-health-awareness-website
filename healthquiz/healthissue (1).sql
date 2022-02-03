-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthissue`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_table`
--

CREATE TABLE `answer_table` (
  `ans_id` int(2) NOT NULL,
  `ans` varchar(40) DEFAULT NULL,
  `ans_points` int(1) DEFAULT NULL,
  `que_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer_table`
--

INSERT INTO `answer_table` (`ans_id`, `ans`, `ans_points`, `que_id`) VALUES
(1, 'Terrible,I’m fed up', 4, 1),
(2, 'I’m worried about some things', 2, 1),
(3, 'Antisocial', 3, 1),
(4, 'Pretty happy', 1, 1),
(5, 'Unhappy', 4, 2),
(6, 'Socially awkward', 2, 2),
(7, 'Happy', 1, 2),
(8, 'Cold', 3, 2),
(9, 'Well, I feel very sad a lot of the time', 4, 3),
(10, 'I’m worried that I’m too anxious', 2, 3),
(11, 'I don’t think so', 1, 3),
(12, 'I think I’m too antisocial', 3, 3),
(13, 'I don’t have a role,I’m an outsider', 3, 4),
(14, 'The sensible one', 2, 4),
(15, 'The fun,sociable one', 1, 4),
(16, 'The quiet one', 4, 4),
(17, 'Yes, if it’s with people I know', 2, 5),
(18, 'Yes,I love hanging out', 1, 5),
(19, 'No,I like being alone', 3, 5),
(20, 'If I can avoid it,I will', 4, 5),
(21, 'Life’s a bitch, then you die', 3, 6),
(22, 'Hard times reveal true friends', 4, 6),
(23, 'Worrying is as productive as chewing gum', 2, 6),
(24, 'Always look on the bright side of life', 1, 6),
(25, 'Yes,I,d say so', 4, 7),
(26, 'I don’t really have emotions', 3, 7),
(27, 'Yes,pretty much all of the time', 1, 7),
(28, 'Not really,no', 2, 7),
(29, 'Thinking about things', 2, 8),
(30, 'I love to watch horror ,ovies', 3, 8),
(31, 'Listening to music', 4, 8),
(32, 'Seeing friends and family', 1, 8),
(33, 'To always be this happy', 1, 9),
(34, 'To be on my own more', 3, 9),
(35, 'To be able to stop worrying', 2, 9),
(36, 'To at least feel content', 4, 9),
(37, 'I try,but it’s struggle for me', 4, 10),
(38, 'I do,but I wish it was easier', 2, 10),
(39, 'Yes, I really do', 1, 10),
(40, 'No, not really', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `que_id` int(2) NOT NULL,
  `que` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`que_id`, `que`) VALUES
(1, 'Describe your current mood?'),
(2, 'How Do people describe you?'),
(3, 'Do you think you have a mental health issue?'),
(4, 'What’s your role in your family?'),
(5, 'Do you like to socialize?'),
(6, 'Choose a quote?'),
(7, 'Are you in control of your emotions?'),
(8, 'How do you spend your free time ?'),
(9, 'Choose one wish?'),
(10, 'Do you Love life?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_table`
--
ALTER TABLE `answer_table`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`que_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
