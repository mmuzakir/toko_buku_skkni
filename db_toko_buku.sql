-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 06:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `Id_Buku` varchar(6) NOT NULL,
  `Kategori` varchar(40) NOT NULL,
  `Nama_Buku` varchar(60) NOT NULL,
  `Pengarang_Buku` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Id_Penerbit` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`Id_Buku`, `Kategori`, `Nama_Buku`, `Pengarang_Buku`, `Harga`, `Stok`, `Id_Penerbit`) VALUES
('BK1001', 'Contemporary Fiction', 'Kafka On The Shore', 'Haruki Murakami', 200000, 60, 'PN01'),
('BK1002', 'Contemporary Fiction', 'Norwegian Wood', 'Haruki Murakami', 180000, 60, 'PN01'),
('BK1003', 'Contemporary Fiction', 'The Wind-up Bird Chronicle', 'Haruki Murakami', 225000, 25, 'PN01'),
('BK2001', 'Contemporary Fiction', 'The Alchemist', 'Paulo Coelho', 200000, 40, 'PN02'),
('BK2002', 'Crime Fiction', 'And The There Were None', 'Agatha Christie', 140000, 40, 'PN02'),
('BK2003', 'Crime Fiction', 'Murder on the Orient Express', 'Agatha Christie', 150000, 35, 'PN02'),
('BK3001', 'Classic', 'To Kill A Mockingbird', 'Harper Lee', 345000, 20, 'PN03'),
('BK3002', 'Classic', 'A Tale Of two Cities', 'Charles Dickens', 170000, 15, 'PN04'),
('BK3003', 'Classic', 'Animal Farm', 'George Orwell', 160000, 20, 'PN04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penerbit`
--

CREATE TABLE `tabel_penerbit` (
  `Id_Penerbit` varchar(4) NOT NULL,
  `Nama_Penerbit` varchar(60) NOT NULL,
  `Negara` varchar(30) NOT NULL,
  `Kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_penerbit`
--

INSERT INTO `tabel_penerbit` (`Id_Penerbit`, `Nama_Penerbit`, `Negara`, `Kota`) VALUES
('PN01', 'Vintage Publishing', 'United Kingdom', 'London'),
('PN02', 'HarperCollins Publisher Inc', 'United State', 'New York'),
('PN03', 'Cornerstone', 'United Kingdom', 'London'),
('PN04', 'Penguin Books Ltd', 'United Kingdom', 'London');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`Id_Buku`);

--
-- Indexes for table `tabel_penerbit`
--
ALTER TABLE `tabel_penerbit`
  ADD PRIMARY KEY (`Id_Penerbit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
