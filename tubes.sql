-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 06:33 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_pembeli`
--

CREATE TABLE `akun_pembeli` (
  `username` varchar(20) NOT NULL,
  `password` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_pembeli`
--

INSERT INTO `akun_pembeli` (`username`, `password`, `nama`, `email`, `no_hp`, `alamat`) VALUES
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `akun_penjual`
--

CREATE TABLE `akun_penjual` (
  `username` varchar(20) NOT NULL,
  `password` varchar(18) NOT NULL,
  `nama_penjual` varchar(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_penjual`
--

INSERT INTO `akun_penjual` (`username`, `password`, `nama_penjual`, `nama_toko`, `email`, `no_hp`) VALUES
('orang', 'orang', 'bukanorang', 'tokoorang', 'orang@orang.com', '085608560856');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `username`, `nama_barang`, `images`, `harga`, `deskripsi`, `kategori`) VALUES
('1', 'orang', 'laptop', 'laptop.jpg', 100000, 'wah ga tau', 'komputer'),
('2', '', 'dfvdv', '1_md5YYw2WZ39LWnDtE2Vb5A1.png', 123, 'Masukkan deskripsi barang asdfsnda', ''),
('3', '', 'svg', '1_md5YYw2WZ39LWnDtE2Vb5A2.png', 213, 'Masukkan deskripsi dgbdbarang anda', 'pakaian'),
('4', '', 'fsdf', '_77388838_006508633-14.jpg', 3423, 'Masukkan defeskripsi barang anda', 'pakaian'),
('5', '', 'sd', 'About_-_Konten_140915001.jpg', 13, 'Masukfskan deskripsi barang anda', 'pakaian'),
('6', '', 'dc', 'DSYZL9SWsAAUPBt.jpg', 123, 'Masukkan deskripsdcsi barang anda', 'pakaian'),
('7', '', 'edf', 'DSYZL9cXUAERZBk1.jpg', 123, 'Masuksdfkan deskripsi barang anda', 'pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `username` varchar(20) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`username`, `id_barang`, `nama_barang`, `images`, `harga`, `kategori`) VALUES
('lala', '1', 'laptop', 'laptop.jpg', 100000, 'komputer'),
('lala', '3', 'svg', '1_md5YYw2WZ39LWnDtE2Vb5A2.png', 213, 'pakaian'),
('lili', '4', 'fsdf', '_77388838_006508633-14.jpg', 3423, 'pakaian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_pembeli`
--
ALTER TABLE `akun_pembeli`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `akun_penjual`
--
ALTER TABLE `akun_penjual`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
