-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 06:01 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'SEPRI ARIDAS', '2201182006', 'sepri@gmail.com', 'Teknik Mesin', 'rty.jpg'),
(2, 'Andina', '2201182002', 'andina@gmail', 'Teknik sipil', 'wlp.jpg'),
(3, 'Halil Nustadia', '2201183001', 'halil@gmail.com', 'Tatarias', 'gfgt.jpg'),
(4, 'Khairul Rizky', '2201183002', 'rizki@gmail.com', 'Tataboga', 'if.jpg'),
(18, 'agus', '2201183006', 'agus@gmail', 'Kedokteran', '6549dd0db5f3e.png'),
(19, 'aris', '2201183007', 'aris@gmail.com', 'Teknik Elektro', '6549deed1668f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$qX3wsNQnNERDwSvcSm3VeOc7AF4Lq6UipZmiujUkLqSkJgaI3W1Ci'),
(2, 'user', '$2y$10$LCSHGCJA36DACR0hanj3uOqsvSfI1IZE/bqnxU97EcDmiO4jGNUa2'),
(3, 'sepri', '$2y$10$kMpCiASi/FL22v7qRET/Xu4bzjPYKX2qQqmXp8zPLJpVaVSVZHGg.'),
(4, 'arif', '$2y$10$CWtHZX.8eNQdxmhwTri9qOzX8TBao/6RZhGJnUmrcjcw1QOd6REfy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
