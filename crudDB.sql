-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2024 at 05:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(50) NOT NULL,
  `pub_date` date NOT NULL DEFAULT current_timestamp(),
  `creator` varchar(128) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `type`, `description`, `price`, `pub_date`, `creator`, `contact`) VALUES
(1, 'Armagedon', 'Djokaa', 'drama', 'Example desc', 100, '2023-12-03', 'admin@admin.com', 'Example desc'),
(2, 'Popaj', 'Pero', 'Adventure', 'Example desc', 20, '2023-12-04', 'admin@admin.com', 'Example desc'),
(5, 'Dragon', 'dada', 'Adventure', 'dad', 22, '2023-12-04', 'brad@example.com', 'dada2'),
(9, 'david', 'dsds', 'Adventure', 'asda', 22, '2023-12-04', 'brad@example.com', 'insta:dadvid2'),
(10, 'Griffon', 'Dragan', 'Drama', 'Example desc', 250, '2023-12-04', 'brad@example.com', 'insta:dadvid2'),
(11, 'Fjodor', 'Dostojevski', 'SciFi', 'Example desc', 10, '2023-12-04', 'brad@example.com', 'insta:dadvid2'),
(12, 'Hreni', 'Hrast', 'Horror', 'Example desc', 44, '2023-12-04', 'brad@example.com', '093'),
(13, 'Jojo', 'Jaro', 'Fantasy', 'Example desc', 25, '2023-12-04', 'brad@example.com', 'insta:dadvid2'),
(14, 'Zimzeleni', 'Moja mama', 'Fantasy', 'Example desc', 20, '2023-12-12', 'markic@gmail.com', 'instagra:markan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
