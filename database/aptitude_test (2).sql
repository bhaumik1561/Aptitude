-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 10:52 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aptitude_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `loginid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `loginid`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `back`
--

CREATE TABLE IF NOT EXISTS `back` (
  `userid` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `back`
--

INSERT INTO `back` (`userid`, `value`) VALUES
(0, 50),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(60, 2),
(62, 2),
(65, 2),
(70, 2),
(71, 2),
(73, 2),
(74, 0),
(75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `logical_reasoning`
--

CREATE TABLE IF NOT EXISTS `logical_reasoning` (
  `id` int(11) NOT NULL,
  `question` varchar(450) NOT NULL,
  `A` varchar(50) NOT NULL,
  `B` varchar(50) NOT NULL,
  `C` varchar(50) NOT NULL,
  `D` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logical_reasoning`
--

INSERT INTO `logical_reasoning` (`id`, `question`, `A`, `B`, `C`, `D`, `answer`) VALUES
(6, 'Mara runs faster than Gail.Lily runs faster than Mara.Gail runs faster than Lily.If the first two statements are true, the third statement is', 'true', 'false', 'uncertain', 'none', 'B'),
(8, 'The Kingston Mall has more stores than the Galleria.\r\nThe Four Corners Mall has fewer stores than the Galleria.\r\nThe Kingston Mall has more stores than the Four Corners Mall.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(9, 'Apartments in the Riverdale Manor cost less than apartments in The Gaslight Commons.\r\nApartments in the Livingston Gate cost more than apartments in the The Gaslight Commons.\r\nOf the three apartment buildings, the Livingston Gate costs the most.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(10, 'During the past year, Josh saw more movies than Stephen.\r\nStephen saw fewer movies than Darren.\r\nDarren saw more movies than Josh.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'C'),
(11, 'Rover weighs less than Fido.\r\nRover weighs more than Boomer.\r\nOf the three dogs, Boomer weighs the least.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(13, ' Tanya is older than Eric. Cliff is older than Tanya. Eric is older than Cliff. If the first two statements are true, the third statement is', 'true', 'false', 'uncertain', 'none', 'B'),
(14, 'Blueberries cost more than strawberries.\r\nBlueberries cost less than raspberries.\r\nRaspberries cost more than strawberries and blueberries.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(15, 'All the trees in the park are flowering trees.\r\nSome of the trees in the park are dogwoods.\r\nAll dogwoods in the park are flowering trees.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(16, 'All the offices on the 9th floor have wall-to-wall carpeting.\r\nNo wall-to-wall carpeting is pink.\r\nNone of the offices on the 9th floor has pink wall-to-wall carpeting.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(18, 'Find odd one out\r\n3 5 11 14 17 21', '21', '17', '14', '3', 'C'),
(19, 'Father is aged 3 times more than his son ronit. After 8 years he would be 2 and a half times of Ronit''s age.After further 8 years, how many times would he be of Ronit''s age ', '2', '2.5', '2.75', '3', 'D'),
(20, 'What % of numbers from 1 to 17 have 1 or 9 in the units digit?', '1', '14', '20', '21', 'C'),
(21, 'A student multiplied a number by 3/5 instead of 5/3. What is the % error in calculation?', '34', '44', '54', '64', 'C'),
(22, 'A person crosses a 600m long street in 5 minutes.What is his speed in km per hour?', '2700', '2900', '3000', '3100', 'A'),
(23, 'a car travelling with 5/7 of its actual speed covers 42 km in 1 hr 40 min 48 seconds. find actual speed of the car:', '17*6/7', '25', '30', '35', 'C'),
(24, 'this is a question', 'sd', 'ad', 'xa', 'fd', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `quantitative_reasoning`
--

CREATE TABLE IF NOT EXISTS `quantitative_reasoning` (
  `id` int(11) NOT NULL,
  `question` varchar(350) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantitative_reasoning`
--

INSERT INTO `quantitative_reasoning` (`id`, `question`, `A`, `B`, `C`, `D`, `answer`) VALUES
(2, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?\r\n', '3.6', '7.2', '8.4', '10', 'B'),
(3, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of (in kmph):\r\n', '300', '360', '600', '720', 'D'),
(4, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:\r\n', '300', '360', '600', '720', 'D'),
(5, 'If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:\r\n', '50', '56', '70', '80', 'A'),
(6, 'Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?\r\n', '9', '10', '12', '20', 'B'),
(7, 'A sum of money at simple interest amounts to Rs. 815 in 3 years and to Rs. 854 in 4 years. The sum is:\r\n', '650', '690', '698', '700', 'C'),
(8, 'Mr. Thomas invested an amount of Rs. 13,900 divided in two different schemes A and B at the simple interest rate of 14% p.a. and 11% p.a. respectively. If the total amount of simple interest earned in 2 years be Rs. 3508, what was the amount invested in Scheme B?\r\n', '6400', '6500', '7200', '7500', 'A'),
(9, 'A sum fetched a total simple interest of Rs. 4016.25 at the rate of 9 p.c.p.a. in 5 years. What is the sum?\r\n', '4462', '8032', '8900', '8925', 'D'),
(10, 'How much time will it take for an amount of Rs. 450 to yield Rs. 81 as interest at 4.5% per annum of simple interest?\r\n', '3.5 years', '4 years', '4.5 years', '5 years', 'B'),
(11, 'Reena took a loan of Rs. 1200 with simple interest for as many years as the rate of interest. If she paid Rs. 432 as interest at the end of the loan period, what was the rate of interest?\r\n', '3.6', '6', '18', 'cannot be determined', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `test` varchar(50) NOT NULL,
  `percent` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `userid`, `name`, `test`, `percent`) VALUES
(33, 12, 'xyz', 'logical reasoning', 10),
(34, 12, 'xyz', 'verbal reasoning', 22.222222222222),
(35, 12, 'xyz', 'quantitative reasoning', 30),
(51, 40, 'def', 'logical reasoning', 30),
(52, 40, 'def', 'verbal reasoning', 30),
(53, 40, 'def', 'quantitative reasoning', 40),
(129, 43, 'aaa', 'logical reasoning', 100),
(130, 43, 'aaa', 'verbal reasoning', 70),
(131, 43, 'aaa', 'quantitative reasoning', 30),
(132, 44, 'ms', 'logical reasoning', 0),
(133, 44, 'ms', 'verbal reasoning', 0),
(134, 44, 'ms', 'quantitative reasoning', 0),
(135, 44, 'ms', 'logical reasoning', 50),
(136, 44, 'ms', 'verbal reasoning', 0),
(137, 44, 'ms', 'quantitative reasoning', 0),
(177, 46, 'manan', 'logical reasoning', 10),
(178, 46, 'manan', 'verbal reasoning', 0),
(179, 46, 'manan', 'quantitative reasoning', 0),
(180, 46, 'manan', 'logical reasoning', 10),
(181, 46, 'manan', 'verbal reasoning', 0),
(182, 46, 'manan', 'quantitative reasoning', 0),
(183, 47, 'ab', 'logical reasoning', 10),
(184, 47, 'ab', 'verbal reasoning', 20),
(185, 47, 'ab', 'quantitative reasoning', 40),
(186, 49, 'nimmi', 'logical reasoning', 0),
(187, 49, 'nimmi', 'verbal reasoning', 0),
(188, 49, 'nimmi', 'quantitative reasoning', 0),
(189, 50, 'Prit', 'logical reasoning', 10),
(190, 50, 'Prit', 'verbal reasoning', 0),
(191, 50, 'Prit', 'quantitative reasoning', 30),
(192, 51, 'nimmi', 'logical reasoning', 90),
(193, 51, 'nimmi', 'verbal reasoning', 60),
(194, 51, 'nimmi', 'quantitative reasoning', 30),
(195, 51, 'nimmi', 'logical reasoning', 90),
(196, 51, 'nimmi', 'verbal reasoning', 60),
(197, 51, 'nimmi', 'quantitative reasoning', 30),
(198, 51, 'nimmi', 'logical reasoning', 90),
(199, 51, 'nimmi', 'verbal reasoning', 60),
(200, 51, 'nimmi', 'quantitative reasoning', 30),
(201, 52, 'ms', 'logical reasoning', 80),
(202, 52, 'ms', 'verbal reasoning', 40),
(203, 52, 'ms', 'quantitative reasoning', 0),
(204, 55, 'motorola', 'logical reasoning', 20),
(205, 55, 'motorola', 'verbal reasoning', 30),
(206, 55, 'motorola', 'quantitative reasoning', 30),
(207, 56, 'nokia', 'logical reasoning', 20),
(208, 56, 'nokia', 'verbal reasoning', 0),
(209, 56, 'nokia', 'quantitative reasoning', 0),
(210, 57, 'spice', 'logical reasoning', 20),
(211, 57, 'spice', 'verbal reasoning', 20),
(212, 57, 'spice', 'quantitative reasoning', 40),
(213, 58, 'xolo', 'logical reasoning', 20),
(214, 58, 'xolo', 'verbal reasoning', 40),
(215, 58, 'xolo', 'quantitative reasoning', 30),
(216, 58, 'xolo', 'logical reasoning', 20),
(217, 58, 'xolo', 'verbal reasoning', 40),
(218, 58, 'xolo', 'quantitative reasoning', 30),
(219, 59, 'lemon', 'logical reasoning', 50),
(220, 59, 'lemon', 'verbal reasoning', 50),
(221, 59, 'lemon', 'quantitative reasoning', 20),
(222, 60, 'Bhaumik', 'logical reasoning', 70),
(223, 60, 'Bhaumik', 'verbal reasoning', 30),
(224, 60, 'Bhaumik', 'quantitative reasoning', 30),
(225, 62, 'Asus', 'logical reasoning', 40),
(226, 62, 'Asus', 'verbal reasoning', 20),
(227, 62, 'Asus', 'quantitative reasoning', 20),
(228, 62, 'Asus', 'logical reasoning', 40),
(229, 62, 'Asus', 'verbal reasoning', 20),
(230, 62, 'Asus', 'quantitative reasoning', 20),
(231, 0, '', '', 100),
(232, 0, '', '', 0),
(233, 0, '', '', 50),
(234, 65, 'Micromax', 'logical reasoning', 20),
(235, 65, 'Micromax', 'verbal reasoning', 20),
(236, 65, 'Micromax', 'quantitative reasoning', 30),
(237, 70, 'Sahdev', 'logical reasoning', 50),
(238, 70, 'Sahdev', 'verbal reasoning', 30),
(239, 70, 'Sahdev', 'quantitative reasoning', 50),
(240, 71, 'Ishaan', 'logical reasoning', 10),
(241, 71, 'Ishaan', 'verbal reasoning', 30),
(242, 71, 'Ishaan', 'quantitative reasoning', 30),
(243, 72, 'yash', 'logical reasoning', 30),
(244, 72, 'yash', 'verbal reasoning', 20),
(245, 72, 'yash', 'quantitative reasoning', 40),
(246, 73, 'Binit', 'logical reasoning', 90),
(247, 73, 'Binit', 'verbal reasoning', 30),
(248, 73, 'Binit', 'quantitative reasoning', 10),
(249, 73, 'Binit', 'logical reasoning', 90),
(250, 73, 'Binit', 'verbal reasoning', 30),
(251, 73, 'Binit', 'quantitative reasoning', 10);

-- --------------------------------------------------------

--
-- Table structure for table `test_date`
--

CREATE TABLE IF NOT EXISTS `test_date` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_date`
--

INSERT INTO `test_date` (`id`, `date`) VALUES
(1, '2016-04-02 01:00:00'),
(2, '2016-04-04 14:52:00'),
(3, '2016-04-10 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test_lr`
--

CREATE TABLE IF NOT EXISTS `test_lr` (
  `id` int(11) NOT NULL,
  `question` varchar(350) NOT NULL,
  `A` varchar(110) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_lr`
--

INSERT INTO `test_lr` (`id`, `question`, `A`, `B`, `C`, `D`, `answer`) VALUES
(1, ' Tanya is older than Eric. Cliff is older than Tanya. Eric is older than Cliff. If the first two statements are true, the third statement is', 'true', 'false', 'uncertain', 'none', 'B'),
(2, 'Blueberries cost more than strawberries.\r\nBlueberries cost less than raspberries.\r\nRaspberries cost more than strawberries and blueberries.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(3, 'All the trees in the park are flowering trees.\r\nSome of the trees in the park are dogwoods.\r\nAll dogwoods in the park are flowering trees.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(4, 'All the trees in the park are flowering trees.\r\nSome of the trees in the park are dogwoods.\r\nAll dogwoods in the park are flowering trees.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(5, 'Mara runs faster than Gail.\r\nLily runs faster than Mara.\r\nGail runs faster than Lily.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'B'),
(6, 'The Kingston Mall has more stores than the Galleria.\r\nThe Four Corners Mall has fewer stores than the Galleria.\r\nThe Kingston Mall has more stores than the Four Corners Mall.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(7, 'Apartments in the Riverdale Manor cost less than apartments in The Gaslight Commons.\r\nApartments in the Livingston Gate cost more than apartments in the The Gaslight Commons.\r\nOf the three apartment buildings, the Livingston Gate costs the most.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(8, 'During the past year, Josh saw more movies than Stephen.\r\nStephen saw fewer movies than Darren.\r\nDarren saw more movies than Josh.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'C'),
(9, 'Rover weighs less than Fido.\r\nRover weighs more than Boomer.\r\nOf the three dogs, Boomer weighs the least.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A'),
(10, 'All the offices on the 9th floor have wall-to-wall carpeting.\r\nNo wall-to-wall carpeting is pink.\r\nNone of the offices on the 9th floor has pink wall-to-wall carpeting.\r\nIf the first two statements are true, the third statement is\r\n', 'true', 'false', 'uncertain', 'none', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `test_qr`
--

CREATE TABLE IF NOT EXISTS `test_qr` (
  `id` int(11) NOT NULL,
  `question` varchar(350) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_qr`
--

INSERT INTO `test_qr` (`id`, `question`, `A`, `B`, `C`, `D`, `answer`) VALUES
(1, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?\r\n', '3.6', '7.2', '8.4', '10', 'B'),
(2, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of (in kmph):\r\n', '300', '360', '600', '720', 'D'),
(3, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:\r\n', '300', '360', '600', '720', 'D'),
(4, 'If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:\r\n', '50', '56', '70', '80', 'A'),
(5, 'Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?\r\n', '9', '10', '12', '20', 'B'),
(6, 'A sum of money at simple interest amounts to Rs. 815 in 3 years and to Rs. 854 in 4 years. The sum is:\r\n', '650', '690', '698', '700', 'C'),
(7, 'Mr. Thomas invested an amount of Rs. 13,900 divided in two different schemes A and B at the simple interest rate of 14% p.a. and 11% p.a. respectively. If the total amount of simple interest earned in 2 years be Rs. 3508, what was the amount invested in Scheme B?\r\n', '6400', '6500', '7200', '7500', 'A'),
(8, 'A sum fetched a total simple interest of Rs. 4016.25 at the rate of 9 p.c.p.a. in 5 years. What is the sum?\r\n', '4462', '8032', '8900', '8925', 'D'),
(9, 'How much time will it take for an amount of Rs. 450 to yield Rs. 81 as interest at 4.5% per annum of simple interest?\r\n', '3.5 years', '4 years', '4.5 years', '5 years', 'B'),
(10, 'Reena took a loan of Rs. 1200 with simple interest for as many years as the rate of interest. If she paid Rs. 432 as interest at the end of the loan period, what was the rate of interest?\r\n', '3.6', '6', '18', 'cannot be determined', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `test_vr`
--

CREATE TABLE IF NOT EXISTS `test_vr` (
  `id` int(11) NOT NULL,
  `question` varchar(350) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_vr`
--

INSERT INTO `test_vr` (`id`, `question`, `A`, `B`, `C`, `D`, `answer`) VALUES
(1, 'Vincent has a paper route. Each morning, he delivers 37 newspapers to customers in his neighborhood. It takes Vincent 50 minutes to deliver all the papers. If Vincent is sick or has other plans, his friend Thomas, who lives on the same street, will sometimes deliver the papers for him.', 'Vincent and Thomas live in the same neighborhood.', 'It takes Thomas more than 50 minutes to deliver the papers.', 'It is dark outside when Vincent begins his deliveries.', 'Thomas would like to have his own paper route.', 'B'),
(2, 'The Pacific yew is an evergreen tree that grows in the Pacific Northwest. The Pacific yew has a fleshy, poisonous fruit. Recently, taxol, a substance found in the bark of the Pacific yew, was discovered to be a promising new anticancer drug.\r\n', 'Taxol is poisonous when taken by healthy people.	', 'Taxol has cured people from various diseases.', 'People should not eat the fruit of the Pacific yew.', 'The Pacific yew was considered worthless until taxol was discovered.', 'C'),
(3, 'A train always has\r\n', 'Rails', 'Driver', 'Guard', 'Engine', 'D'),
(4, 'A song always has\r\n', 'word', 'chorus', 'musician', 'tymbal', 'A'),
(5, 'Yesterday I saw an ice cube which had already melted due to heat of a nearby furnace.\r\n', 'Always', 'never', 'often', 'sometimes', 'B'),
(6, 'What is found necessarily in milk?\r\n', 'cream', 'curd', 'water', 'whiteness', 'D'),
(7, '	\r\nA boy is sitting at the back seat of a car. When the driver suddenly starts moving the car (in forward direction), the boy experiences a backward force?', 'Always', 'never', 'often', 'sometimes', 'A'),
(8, 'Which one of the following is always found in "Wonder"?', 'crowd', 'lumber', 'astonishment', 'rustic', 'C'),
(9, 'Disclosure always involves', 'Agents', 'Display', 'exposition', 'secrets', 'D'),
(10, 'Which one of the following is always with "Bargain"?', 'exchange', 'sumptuousness', 'trivality', 'eloquence', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `percent` double NOT NULL,
  `percentile` float NOT NULL,
  `qoruq` varchar(52) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `phone`, `city`, `percent`, `percentile`, `qoruq`) VALUES
(12, 'xyz', 'xyz', 'vwxyz', '9999999999', 'vadodara', 20.689655172414, 21.7391, 'UNQUALIFIED'),
(40, 'def', 'def', 'defdef', '9376902529', 'surat', 33.333333333333, 65.2174, 'QUALIFIED'),
(43, 'aaa', 'aaa', 'aaaaaa', '5555555555', 'ksdnfkwenr', 66.666666666667, 99.9996, 'QUALIFIED'),
(44, 'ms', 'ms', 'msmsms', '1111111111', 'ahmedabad', 40, 78.2609, 'QUALIFIED'),
(46, 'manan', 'manan', 'manan', '8888888888', 'vadodara', 3.3333333333333, 8.69565, 'UNQUALIFIED'),
(47, 'ab', 'ab', 'abababab', '1111111111', 'qdce', 23.333333333333, 34.7826, 'UNQUALIFIED'),
(50, 'Prit', 'Prit', 'PritPrit', '1111111111', 'wdhcuw', 13.333333333333, 17.3913, 'UNQUALIFIED'),
(51, 'nimmi', 'nimmi', 'nimmi', '1111111111', 'vadodara', 60, 95.6522, 'QUALIFIED'),
(52, 'ms', 'ms', 'msmsms', '1111111111', 'vadodara', 40, 78.2609, 'QUALIFIED'),
(55, 'motorola', 'motorola', 'motorola', '1111111111', 'vadodara', 26.666666666667, 52.1739, 'QUALIFIED'),
(56, 'nokia', 'nokia', 'nokia', '1111111111', 'vadodara', 6.6666666666667, 13.0435, 'UNQUALIFIED'),
(57, 'spice', 'spice', 'spice', '1111111111', 'vadodara', 26.666666666667, 52.1739, 'QUALIFIED'),
(58, 'xolo', 'xolo', 'xoloxolo', '1111111111', 'vadodara', 30, 60.8696, 'QUALIFIED'),
(59, 'lemon', 'lemon', 'lemon', '9999999999', 'vadodara', 40, 78.2609, 'QUALIFIED'),
(60, 'Bhaumik', 'Bhaumik', 'Bhaumik', '1111111111', 'vadodara', 43.333333333333, 91.3043, 'QUALIFIED'),
(62, 'Asus', 'Asus', 'AsusAsus', '1111111111', 'vadodara', 26.666666666667, 52.1739, 'QUALIFIED'),
(65, 'Micromax', 'Micromax', 'Micromax', '1111111111', 'vadodara', 23.333333333333, 34.7826, 'UNQUALIFIED'),
(69, 'tarshish', 'tarshish', 'tarshish', '1111111111', 'vadodara', 0, 4.34783, 'UNQUALIFIED'),
(70, 'Sahdev', 'Sahdev', 'Sahdev', '1111111111', 'vadodara', 43.333333333333, 91.3043, 'QUALIFIED'),
(71, 'Ishaan', 'Ishaan', 'Ishaan', '1111111111', 'vadodara', 23.333333333333, 34.7826, 'UNQUALIFIED'),
(72, 'yash', 'yash', 'yashyash', '1111111111', 'vadodara', 30, 60.8696, 'QUALIFIED'),
(73, 'Binit', 'Binit', 'Binit', '1111111111', 'vadodara', 43.333333333333, 91.3043, 'QUALIFIED');

-- --------------------------------------------------------

--
-- Table structure for table `verbal_reasoning`
--

CREATE TABLE IF NOT EXISTS `verbal_reasoning` (
  `id` int(11) NOT NULL,
  `question` varchar(350) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `answer` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verbal_reasoning`
--

INSERT INTO `verbal_reasoning` (`id`, `question`, `A`, `B`, `C`, `D`, `answer`) VALUES
(3, 'The Pacific yew is an evergreen tree that grows in the Pacific Northwest. The Pacific yew has a fleshy, poisonous fruit. Recently, taxol, a substance found in the bark of the Pacific yew, was discovered to be a promising new anticancer drug.', 'Taxol is poisonous when taken by healthy people.	', 'Taxol has cured people from various diseases.', 'People should not eat the fruit of the Pacific yew.', 'The Pacific yew was considered worthless until taxol was discovered.', 'C'),
(4, 'A train always has\r\n', 'Rails', 'Driver', 'Guard', 'Engine', 'D'),
(5, 'A song always has\r\n', 'word', 'chorus', 'musician', 'tymbal', 'A'),
(6, 'Yesterday I saw an ice cube which had already melted due to heat of a nearby furnace.\r\n', 'Always', 'never', 'often', 'sometimes', 'B'),
(7, 'What is found necessarily in milk?\r\n', 'cream', 'curd', 'water', 'whiteness', 'D'),
(9, '	\r\nA boy is sitting at the back seat of a car. When the driver suddenly starts moving the car (in forward direction), the boy experiences a backward force?', 'Always', 'never', 'often', 'sometimes', 'A'),
(10, 'Which one of the following is always found in "Wonder"?', 'crowd', 'lumber', 'astonishment', 'rustic', 'C'),
(11, 'Disclosure always involves', 'Agents', 'Display', 'exposition', 'secrets', 'D'),
(12, 'if a person walks at 14 km/hr instead of 10 km/hr, he would have walk 20 km more. the actual distance travelled by him is: ', '50', '56', '70', '80', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `back`
--
ALTER TABLE `back`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `logical_reasoning`
--
ALTER TABLE `logical_reasoning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantitative_reasoning`
--
ALTER TABLE `quantitative_reasoning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_date`
--
ALTER TABLE `test_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_lr`
--
ALTER TABLE `test_lr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_qr`
--
ALTER TABLE `test_qr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_vr`
--
ALTER TABLE `test_vr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `verbal_reasoning`
--
ALTER TABLE `verbal_reasoning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logical_reasoning`
--
ALTER TABLE `logical_reasoning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `quantitative_reasoning`
--
ALTER TABLE `quantitative_reasoning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `test_date`
--
ALTER TABLE `test_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test_lr`
--
ALTER TABLE `test_lr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test_qr`
--
ALTER TABLE `test_qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test_vr`
--
ALTER TABLE `test_vr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `verbal_reasoning`
--
ALTER TABLE `verbal_reasoning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
