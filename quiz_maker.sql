-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 07:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Type` varchar(5) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Active` int(11) NOT NULL DEFAULT 0,
  `Point` int(11) NOT NULL,
  `Choice1` varchar(250) DEFAULT NULL,
  `Choice2` varchar(250) DEFAULT NULL,
  `Choice3` varchar(250) DEFAULT NULL,
  `Choice4` varchar(250) DEFAULT NULL,
  `SoloAnswer` varchar(250) DEFAULT NULL,
  `CheckAnswer` tinyint(1) DEFAULT NULL,
  `ChoiceAnswerKey` char(1) DEFAULT NULL,
  `QuizID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ID`, `Title`, `Type`, `Duration`, `Active`, `Point`, `Choice1`, `Choice2`, `Choice3`, `Choice4`, `SoloAnswer`, `CheckAnswer`, `ChoiceAnswerKey`, `QuizID`) VALUES
(1, 'ff', 'TypeB', 30000, 0, 67, NULL, NULL, NULL, NULL, 'tre', NULL, NULL, '1E6HVi0P'),
(2, 'erika', 'TypeA', 30000, 0, 25, 'aa', 'cc', 'bb', 'dd', NULL, NULL, 'd', '79cwHvdD'),
(3, 'erika', 'TypeA', 30000, 0, 25, 'aa', 'cc', 'bb', 'dd', NULL, NULL, 'd', 'sZxIv9Hc'),
(4, 'cue', 'TypeA', 60000, 0, 25, 'nn', 'uu', 'cc', 'mm', NULL, NULL, 'c', 'sZxIv9Hc'),
(5, 'question', 'TypeB', 120000, 0, 40, NULL, NULL, NULL, NULL, '500', NULL, NULL, 'JdmEe2TG'),
(6, 'agsagasgaga', 'TypeC', 120000, 0, 40, NULL, NULL, NULL, NULL, NULL, 0, NULL, '9crxheYT'),
(7, 'bbb', 'TypeC', 120000, 0, 40, NULL, NULL, NULL, NULL, NULL, 0, NULL, '4gmGVw2F'),
(8, 'agaga', 'TypeA', 30000, 0, 13131, 'aga', 'aavvv', 'agag', '131', NULL, NULL, 'd', '4gmGVw2F'),
(9, 'bbb', 'TypeB', 120000, 0, 50, NULL, NULL, NULL, NULL, '50', NULL, NULL, '4gmGVw2F'),
(10, '131', 'TypeA', 30000, 0, 3131, '131', '313131', '31', '31', NULL, NULL, 'b', 'HDa8Uznk'),
(11, '31', 'TypeA', 30000, 0, 3131, '31', '1313', '3', '3131313131', NULL, NULL, 'd', 'QzJq8dBX'),
(12, '31', 'TypeA', 30000, 0, 3131, '31', '1313', '3', '3131313131', NULL, NULL, 'd', 'XEMlNz3c');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Code` varchar(8) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `DateCreated` date NOT NULL DEFAULT current_timestamp(),
  `TeacherUsername` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Code`, `Status`, `DateCreated`, `TeacherUsername`) VALUES
('', 0, '2021-10-20', 'erikasong'),
('1E6HVi0P', 0, '2021-10-20', 'erikasong'),
('49VG1Prq', 0, '2021-10-20', 'erikasong'),
('4gmGVw2F', 0, '2021-10-20', 'erikasong'),
('79cwHvdD', 0, '2021-10-20', 'erikasong'),
('9crxheYT', 0, '2021-10-20', 'erikasong'),
('bgvA5oBt', 0, '2021-10-20', 'erikasong'),
('fcIUFqnt', 0, '2021-10-20', 'erikasong'),
('fK40j4J6', 0, '2021-10-20', 'erikasong'),
('HDa8Uznk', 0, '2021-10-20', 'erikasong'),
('HGMF6JHv', 0, '2021-10-20', 'erikaraymundo'),
('JdmEe2TG', 0, '2021-10-20', 'erikasong'),
('Jxuipf3K', 0, '2021-10-20', 'erikaraymundo'),
('pQQcBMBP', 0, '2021-10-20', 'erikasong'),
('QzJq8dBX', 0, '2021-10-20', 'erikasong'),
('RG5Tmqii', 0, '2021-10-20', 'erikasong'),
('sSVXZvSr', 0, '2021-10-20', 'erikasong'),
('sZxIv9Hc', 0, '2021-10-20', 'erikasong'),
('X7uNgYT4', 0, '2021-10-20', 'erikasong'),
('XEMlNz3c', 0, '2021-10-20', 'erikasong');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Nickname` varchar(100) NOT NULL,
  `Points` int(11) NOT NULL DEFAULT 0,
  `QuizCode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Username` varchar(25) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Username`, `Name`, `Password`) VALUES
('erikaraymundo', '13131', '131'),
('erikasong', 'Erika Raymundo', '1234'),
('erikasong25', 'Raymundo, Erika S.', '1234'),
('erikasong251', 'Team Sakahanda', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `QuizID` (`QuizID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `TeacherID` (`TeacherUsername`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `QuizCode` (`QuizCode`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`QuizID`) REFERENCES `quiz` (`Code`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`TeacherUsername`) REFERENCES `teacher` (`Username`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`QuizCode`) REFERENCES `quiz` (`Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
