-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 11:17 AM
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
('dimas', 'dimas', 'dimas', 'tokodimas', 'dimas@gmail.com', '066666666666'),
('neneng', 'neneng', 'neneng', 'toko neneng', 'nng@gmail.com', '086868686868'),
('orang', 'orang', 'bukanorang', 'tokoorang', 'orang@orang.com', '085608560856'),
('rapip', 'rapip', 'rapip', 'tokorapip', 'rapip@gmail.com', '088888888888');

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
('01', 'orang', 'laptop murah', 'laptop.jpg', 100000, 'wah ga tau', 'komputer'),
('02', 'orang', 'laptop 1M', 'lenovo-laptop-legion-y520-15-front.png', 1000000000, 'Masukkan deskripsi barang asdfsnda', 'komputer'),
('03', 'rapip', 'laptop agak murah', '1xe59pa.jpg', 10000000, 'Masukkan deskripsi dgbdbarang anda', 'komputer'),
('04', 'rapip', 'PC bagus', 'u_10164365.jpg', 100000000, 'Masukkan defeskripsi barang anda', 'komputer'),
('05', 'dimas', 'PC set', 'PC-studia.jpg', 13000000, 'Masukfskan deskripsi barang anda', 'komputer'),
('06', 'dimas', 'PC mahal', '16-CyberPowerPC-Gaming-Desktop-SOURCE-Amazon.jpg', 100000000, 'Masukkan deskripsdcsi barang anda', 'komputer'),
('07', 'neneng', 'PC gaming', 'amdgamepc_1.jpg', 12300000, 'Masuksdfkan deskripsi barang anda', 'komputer'),
('08', 'neneng', 'kaos', 'kaos-polos-katun-pria-o-neck-size-s-81402b-or-t-shirt-red-22.jpg', 50000, 'kaos polos', 'pakaian'),
('09', 'orang', 'jaket', 'jaket-almasy-biru-1_01956f9d-9080-4590-a46e-93c165524a69_394x.jpg', 100000, 'jaket', 'pakaian'),
('10', 'dimas', 'kemeja', '10740350.jpg', 100000, 'kemeja', 'pakaian'),
('11', 'rapip', 'basreng ma*cih', 'basreng1-510x600.png', 15000, 'basreng level 100', 'makanan'),
('12', 'neneng', 'sale pisang', 'download.jpg', 10000, 'sale pisang enak', 'makanan');

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
