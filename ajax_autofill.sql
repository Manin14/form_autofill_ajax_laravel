-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 04:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax_autofill`
--

-- --------------------------------------------------------

--
-- Table structure for table `latihan_autofill`
--

CREATE TABLE `latihan_autofill` (
  `nim` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jeniskelamin` varchar(225) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `notelp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latihan_autofill`
--

INSERT INTO `latihan_autofill` (`nim`, `nama`, `jeniskelamin`, `jurusan`, `notelp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
('1', 'satu', 'satu', 'satu', 'satu', 'satu', 'satu', '2021-03-08 02:48:31', '2021-03-08 02:48:31'),
('2', 'dua', 'dua', 'dua', 'dua', 'dua', 'dua', '2021-03-08 02:48:31', '2021-03-08 02:48:31'),
('3', 'manin', 'pria', 'informatika', '08986949835', 'manin@gmail.com', 'bogor', '2021-03-08 02:48:31', '2021-03-08 02:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` bigint(20) NOT NULL,
  `nim` bigint(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jeniskelamin` varchar(225) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `notelp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `jeniskelamin`, `jurusan`, `notelp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 0, 'satu', 'satu', 'satu', 'satu', 'satu', 'satu', '2021-03-07 19:49:29', '2021-03-07 19:49:29'),
(2, 0, 'dua', 'dua', 'dua', 'dua', 'dua', 'dua', '2021-03-07 19:49:58', '2021-03-07 19:49:58'),
(3, 0, 'manin', 'pria', 'informatika', '08986949835', 'manin@gmail.com', 'bogor', '2021-03-07 19:46:16', '2021-03-07 19:46:16'),
(4, 0, 'manin', 'pria', 'informatika', '08986949835', 'manin@gmail.com', 'bogor', '2021-03-07 19:53:56', '2021-03-07 19:53:56'),
(5, 0, 'manin', 'pria', 'informatika', '08986949835', 'manin@gmail.com', 'bogor', '2021-03-07 19:51:17', '2021-03-07 19:51:17'),
(6, 0, 'manin', 'pria', 'informatika', '08986949835', 'manin@gmail.com', 'bogor', '2021-03-07 19:52:25', '2021-03-07 19:52:25'),
(7, 3, 'manin', 'pria', 'informatika', '08986949835', 'manin@gmail.com', 'bogor', '2021-03-07 20:01:57', '2021-03-07 20:01:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latihan_autofill`
--
ALTER TABLE `latihan_autofill`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
