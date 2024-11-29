-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 05:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_luaswilayah`
--

CREATE TABLE `tb_luaswilayah` (
  `id` int(10) NOT NULL,
  `adm` varchar(50) NOT NULL,
  `ibu_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_luaswilayah`
--

INSERT INTO `tb_luaswilayah` (`id`, `adm`, `ibu_kota`, `provinsi`, `luas`) VALUES
(1, 'Kota Bandar Lampung', 'Tanjung Karang', 'Lampung', 169),
(2, 'Kabupaten Lampung Selatan', 'Kalianda', 'Lampung', 2109),
(3, 'Lampung Barat', 'Liwa', 'Lampung', 216.01),
(4, 'Lampung Timur', 'Sukadana', 'Lampung', 3867.43),
(5, 'Tanggamus', 'Kota Agung', 'Lampung', 2901.98),
(6, 'Mesuji', 'Wiralaga Mulya', 'Lampung', 2200.51);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
