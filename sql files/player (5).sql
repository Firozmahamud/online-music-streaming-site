-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 07:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `player`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userID`, `user`, `pass`) VALUES
(1, 'tushar', '123'),
(2, 'mehedi', '456'),
(3, 'asdsda', 'asdsad'),
(4, 'sadsad', 'sadsadsa'),
(5, 'asdasdasdsa', 'asdasdasdasdas'),
(16, 'tushar33', 'asassa'),
(19, 'tusharasasas', 'asassa'),
(20, 'tusharasasassasasa', 'assasaassa');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songID` int(11) NOT NULL,
  `songName` varchar(50) NOT NULL,
  `artist` varchar(30) DEFAULT NULL,
  `cover` varchar(30) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songID`, `songName`, `artist`, `cover`) VALUES
(2, 'bondho janala.mp3', 'shironamhin', 'shironamhin.jpg'),
(6, 'hasimukh.mp3', 'shiromanhin', 'poster1.jpg'),
(27, 'Quadukka-I-Mayyas.mp3', 'Jesse Cook', 'default.jpg'),
(30, 'Afterhours.mp3', 'TroyBoi', 'troy.jpg'),
(31, 'Bailamos.mp3', 'Enrique Iglesias', 'enrique.jpg'),
(32, 'careless whisper.MP3', 'George Michael', 'default.jpg'),
(33, 'Fast Lane.mp3', 'Eminem', 'eminem.jpg'),
(34, 'Khola janala.MP3', 'Tahsin', 'default.jpg'),
(35, 'Majhe Majhe.mp3', 'Arnob', 'default.jpg'),
(36, 'moves like jagger.mp3', 'Maroon 5', 'maroon 5.jpg'),
(37, 'Monster.mp3', 'imagine dragons', 'imagine.jpg'),
(38, 'Stairway to heaven.mp3', 'Led Zeppelin', 'ledzeppelin.jpg'),
(39, 'Staright out of line.mp3', 'Godsmack', 'default.jpg'),
(40, 'The men who sold the world.mp3', 'Nirvana', 'nirvana.jpg'),
(41, 'Titanium.mp3', 'Sia', 'sia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
