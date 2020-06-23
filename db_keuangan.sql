-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 06:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `harga`, `stok`, `tanggal`, `no_stok`) VALUES
(13, 'Kipas angin', 200000, 10, '0000-00-00', 7),
(14, 'Sepatu', 100000, 3, '0000-00-00', 6),
(15, 'pulpen', 4000, 3, '0000-00-00', 5),
(16, 'Buku', 6000, 12, '0000-00-00', 4),
(17, 'tas laptop', 180000, 20, '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `id_investor` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jumlah_dana` bigint(20) NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`id_investor`, `nama`, `jumlah_dana`, `persentase`) VALUES
(1, 'doni', 10000000, 9),
(2, 'joko', 20000000, 18),
(3, 'bowo', 30000000, 27),
(4, 'adi', 50000000, 45),
(5, 'nanda', 1000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `no_barang` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `no_transaksi`, `no_barang`, `nama_barang`, `harga`, `jumlah`, `total`) VALUES
(5, 7, 9, 'cabe', 12000, 10, 120000),
(6, 10, 8, 'laptop', 12000, 1, 12000),
(7, 14, 17, 'tas laptop', 180000, 1, 180000),
(8, 14, 16, 'Buku', 6000, 2, 12000),
(9, 14, 13, 'Kipas angin', 200000, 2, 400000),
(10, 14, 15, 'pulpen', 4000, 1, 4000),
(12, 13, 16, 'Buku', 6000, 1, 6000),
(13, 13, 13, 'Kipas angin', 200000, 1, 200000),
(14, 12, 13, 'Kipas angin', 200000, 2, 400000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no_pembelian` int(11) NOT NULL,
  `nama_pembeli` varchar(224) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `hari` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`no_pembelian`, `nama_pembeli`, `jumlah`, `harga`, `total`, `hari`, `tanggal`, `tanggal_upload`) VALUES
(6, 'jaya', 1200, 1200, 1440000, 'Minggu', '2020-04-05', '2020-04-08 08:49:02'),
(7, 'jaya', 122, 1221, 148962, 'Minggu', '2020-04-05', '2020-04-08 07:28:01'),
(8, 'doni', 2000, 2000, 4000000, 'Senin', '2020-04-06', '2020-04-06 18:29:39'),
(9, 'karwi', 1500, 1500, 2250000, 'Rabu', '2020-04-08', '2020-04-08 02:30:41'),
(10, 'doni', 2000, 2000, 4000000, 'Sabtu', '2020-02-29', '2020-04-11 13:47:19'),
(11, 'mawar', 1945, 1500, 2917500, 'Sabtu', '2020-04-04', '2020-04-11 13:46:49'),
(12, 'melati', 10000, 1200, 12000000, 'Sabtu', '2020-04-04', '2020-04-11 13:46:40'),
(13, 'sumadi', 5480, 1500, 8220000, 'Sabtu', '2020-03-28', '2020-04-11 13:46:33'),
(14, 'jefri', 11417, 1500, 17125500, 'Sabtu', '2019-12-28', '2020-04-11 13:46:16'),
(15, 'jokoo', 36500, 16000, 584000000, 'Sabtu', '2020-04-11', '2020-04-11 14:01:52'),
(17, 'mawar', 1200, 1400, 1680000, 'Sabtu', '2020-04-11', '2020-04-11 14:07:59'),
(18, 'doni', 5000, 1500, 7500000, 'Rabu', '2020-04-15', '2020-04-15 09:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_penjualan` int(11) NOT NULL,
  `nama_pembeli` varchar(225) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `hari` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_penjualan`, `nama_pembeli`, `jumlah`, `harga`, `hari`, `tanggal`, `total`) VALUES
(2, 'felix', 1000, 1600, 'Rabu', '2020-04-08', 1600000),
(3, 'Joko', 12400, 1800, 'Sabtu', '2020-04-11', 22320000),
(4, 'jaya', 80000, 1700, 'Sabtu', '2020-04-11', 136000000),
(6, 'mawar', 14000, 17600, 'Sabtu', '2019-12-21', 246400000),
(7, 'memey', 8950, 1460, 'Sabtu', '2020-04-11', 13067000),
(8, 'Joko', 12450, 1575, 'Sabtu', '2020-03-21', 19608750),
(9, 'mawar', 12000, 1700, 'Sabtu', '2020-04-11', 20400000),
(10, 'doni', 5000, 1890, 'Rabu', '2020-04-15', 9450000);

-- --------------------------------------------------------

--
-- Table structure for table `rekapitulasi`
--

CREATE TABLE `rekapitulasi` (
  `id_rekapitulasi` int(11) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `penjualan` bigint(20) NOT NULL,
  `pembelian` bigint(20) NOT NULL,
  `Keuntungan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`id_rekapitulasi`, `tgl_awal`, `tgl_akhir`, `penjualan`, `pembelian`, `Keuntungan`) VALUES
(6, '2020-04-15', '2020-04-15', 9450000, 7500000, 1950000),
(8, '2020-04-01', '2020-04-16', 202837000, 615936462, -413099462);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jumlah_barang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `nama_barang`, `harga_barang`, `jumlah_barang`) VALUES
(3, 'tas laptop', 120000, '12'),
(4, 'Buku', 10000, '100'),
(5, 'pulpen', 12, '3000'),
(6, 'Sepatu', 120000, '3'),
(7, 'Kipas angin', 140000, '13');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kode_transaksi` varchar(225) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jumlah_barang`, `id_barang`, `kode_transaksi`, `tanggal`) VALUES
(12, 0, 0, 'kode-26232605', '2020-06-23'),
(13, 0, 0, 'kode-34233405', '2020-06-23'),
(14, 0, 0, 'kode-57235706', '2020-06-23'),
(15, 0, 0, 'kode-20232006', '2020-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(225) NOT NULL,
  `akses_level` varchar(225) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_upload`) VALUES
(1, 'admin', 'klewang@gmail.com', 'klewang', '4a3b2cea7bb0ceb886d27765d3752e0537199643', 'Admin', '2020-06-14 16:00:35'),
(2, 'pimpinan', 'muhamad@gmail.com', 'pimpinan', 'a9ecd0eb1004e7f1fca778d5961b335e042073d4', 'Pimpinan', '2020-06-23 02:52:40'),
(3, 'kasir', 'investor@gmail.com', 'kasir', 'c0b65b9080d2adaba2d333bb26982183e4375b9f', 'Investor', '2020-06-23 02:52:12'),
(5, 'admin', 'admin@gmail.com', 'administrator', 'b3aca92c793ee0e9b1a9b0a5f5fc044e05140df3', 'Admin', '2020-04-11 14:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
