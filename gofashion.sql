-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 05:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gofashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_agen` char(50) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id_agen`, `nama`, `alamat`, `nohp`, `keterangan`) VALUES
('AB203', 'Jessica', 'Jl. Veteran, Tasikmalaya', '08922354167', 'Blouse'),
('AD432', 'Melissa', 'Jl. Tentara Pelajar, Tasikmalaya', '08672345617', 'Denim'),
('AD667', 'Reni', 'Jl. Kertajaya, Surabaya', '08567243165', 'Daster Anak'),
('AD854', 'Dani', 'Jl. Serayu, Malang', '08134256712', 'Daster'),
('AK098', 'Gani', 'Jl. Sriwijaya, Semarang', '08567435617', 'Kaos'),
('AKJ776', 'Henny', 'Jl. Surapati, Bandung', '08943678124', 'Kemeja');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(5, 'Kemeja'),
(6, 'Daster'),
(8, 'Piyama Wanita'),
(9, 'Kaos'),
(10, 'Jaket'),
(12, 'Piyama Anak'),
(13, 'Blouse');

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `kode_pakaian` char(50) NOT NULL,
  `nama` text NOT NULL,
  `bahan` text NOT NULL,
  `jenis` text NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`kode_pakaian`, `nama`, `bahan`, `jenis`, `stok`, `harga`, `produk`) VALUES
('B223', 'Blouse Wanita', 'Kain Rayon', 'Blouse', 40, 50000, 'blouse.jfif'),
('BL098', 'Blouse Wanita', 'Katun', 'Blouse', 32, 65000, 'blouse1.jfif'),
('D209', 'Daster Anak', 'Katun Jepang', 'Daster', 34, 40000, 'daster anak.jpg'),
('J109', 'Jaket Pria', 'Kain Taslan', 'Jaket', 20, 65000, 'jakett.jfif'),
('K101', 'Kemeja Wanita', 'Katun', 'Kemeja', 32, 55000, 'kemeja.jpg'),
('KA107', 'Kaos ', 'Katun Jepang', 'Kaos', 33, 35000, 'kaos.jpeg'),
('KAN450', 'Kaos Anak', 'Katun', 'Kaos', 30, 40000, 'kaosanak.jfif'),
('KP203', 'Kaos', 'Katun Jepang', 'Kaos', 33, 35000, 'kaoss.jfif'),
('KP303', 'Kemeja Batik Pria', 'Katun', 'Kemeja', 31, 55000, 'kemeja_batik_pria_kombinasi_Polos_lengan_pendek.jpg'),
('PA209', 'Piyama Anak ', 'Katun Jepang', 'Piyama Anak', 29, 45000, 'piayamanak.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `kode_pakaian` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `ukuran` char(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `kode_pakaian`, `nama`, `alamat`, `ukuran`, `harga`, `status`) VALUES
(13, 'PA209', 'Sarah', 'Jl. Tentara Pelajar, Tasikmalaya', 'L', 45000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'admin', '01488dd067097083f80f32761c0ad802');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`kode_pakaian`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
