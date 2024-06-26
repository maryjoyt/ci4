-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 01:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dborder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jane Doe', 'jane@me.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2024-06-19 12:25:45', '2024-06-19 12:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Ergonomic Office Chair', 'A chair designed to provide comfort and support.', 49.75, '2024-06-09 19:25:24', '2024-06-09 19:25:24'),
(2, 'Standing Desk', 'A desk that allows users to switch between sitting and standing positions.', 59.5, '2024-06-10 17:23:28', '2024-06-10 17:23:28'),
(3, 'Wireless Keyboard and Mouse Combo', 'A set of wireless peripherals, including a keyboard and a mouse', 85, '2024-06-19 12:37:42', '2024-06-19 12:37:42'),
(4, 'Desk Lamp with Adjustable Brightness', 'A lamp designed for desk use.', 12, '2024-06-19 12:38:16', '2024-06-19 12:38:16'),
(6, 'All-in-One Printer', 'A multifunctional device that combines printing, scanning, copying, and faxing.', 50, '2024-06-19 12:39:31', '2024-06-19 12:39:31'),
(7, 'Noise-Canceling Headphones', 'Headphones equipped with noise-canceling technology.', 32, '2024-06-19 14:02:12', '2024-06-19 14:02:12'),
(8, 'File Organizer', 'A multi-compartment organizer for sorting and storing documents, files, and folders.', 45, '2024-06-19 14:03:38', '2024-06-19 14:03:38'),
(12, 'Whiteboard with Markers', 'A dry-erase whiteboard used for writing and displaying notes.', 123, '2024-06-20 14:20:17', '2024-06-20 14:20:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
