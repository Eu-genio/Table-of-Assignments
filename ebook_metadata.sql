-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs230`
--

-- --------------------------------------------------------

--
-- Table structure for table `ebook_metadata`
--

CREATE TABLE `ebook_metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `language` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook_metadata`
--

INSERT INTO `ebook_metadata` (`id`, `creator`, `title`, `type`, `identifier`, `date`, `language`, `description`) VALUES
(1, 'Jk Rowling', 'Harry Potter', 'Fiction', 'ISBN13409', '1996-06-26', 'English', 'Harry is written as an orphan living with his only remaining family, the Dursleys, who are neglectful and abusive. On his eleventh birthday in 1991, Harry learns he is a wizard when Rubeus Hagrid arrives to tell him that he is to attend Hogwarts School of'),
(2, 'J. R. R. Tolkie', '', 'Young Adult', '', '1954-07-29', '', 'A fellowship of hobbits, elves, dwarfs, and men is formed to destroy the ring by casting it into the volcanic fires of the Crack of Doom, where it was forged. They are opposed on their harrowing mission by the evil Sauron and his Black Riders.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
