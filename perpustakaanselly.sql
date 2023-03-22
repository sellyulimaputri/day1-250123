-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaanselly`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `kode_anggota` varchar(9) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jk_anggota` char(50) DEFAULT NULL,
  `jurusan_anggota` varchar(50) DEFAULT NULL,
  `no_telp_anggota` varchar(13) DEFAULT NULL,
  `alamat_anggota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kode_anggota`, `nama_anggota`, `jk_anggota`, `jurusan_anggota`, `no_telp_anggota`, `alamat_anggota`) VALUES
(3, '0003', 'Nisa Fitriyani', 'Perempuan', 'Teknik Komputer dan Jaringan', '8897423426626', 'Jl.Agus Salim No.6 Baki'),
(6, '0006', 'Rotod', 'Laki laki', 'Rekayasa Perangkat Lunak', '09887466437', 'Indonesi'),
(7, '0009', 'Lucass', 'Perempuan', 'Rekayasa Perangkat Lunak', '0987654321', 'Indonesia'),
(9, '10', 'Ramadhani Pangestu', 'Perempuan', 'Rekayasa Perangkat Lunak', '9876543234567', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` char(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_penerbit` char(4) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_penerbit`, `stok`) VALUES
(1, '0001', 'Interesting Person', 'Heri', 'Real Books', '2015', 16),
(2, '0002', 'Pemrograman WEB dengan HTML', 'Betha Sidik', 'Informatika', '2005', 165),
(3, '0003', 'Pangan Dan Gizi Untuk Kesehatan', 'Prof. Dr. Ir. Ali Khomsan', 'PT. RAJAGRAFINDO PERSADA', '2011', 16),
(4, '0004', 'Buku Pintar Olahraga', 'Teguh Sutanto', 'Pustaka Baru Press', '2016', 389),
(6, '7', 'Matahari Minor', 'Selly Ulima', 'Gramedia', '2015', 55),
(8, '10', 'Matahari Minor', 'Selly Ulima', 'Gramedia', '2015', 55),
(9, '44', 'sdfg', 'sdfgh', 'wfghj', '1234', 345);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(50) NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `jumlah_pinjam` int(50) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_anggota` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah_pinjam`, `id_buku`, `id_anggota`) VALUES
(7, '2023-02-01', '2023-02-01', 1, 1, 6),
(8, '2023-02-15', '2023-02-06', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `denda` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jabatan_petugas` varchar(50) DEFAULT NULL,
  `no_telp_petugas` char(13) DEFAULT NULL,
  `alamat_petugas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jabatan_petugas`, `no_telp_petugas`, `alamat_petugas`) VALUES
(1, 'Paul', 'Pengadministrasi', '08163826667', '31.Mawar No.4 Surakarta'),
(2, 'Patrick Alderado', 'Pengelola Keuangan', '08274892227', 'Jl. Soetomo No.445 Banjarsari'),
(3, 'Adnan Alfarezi', 'Customer Service', '0895677733', 'Jl.Kemerdekaan No.47 Surakarta'),
(4, 'Citra Putri', 'Perdata', '08378223768', '31.Sudirman No.998 Jakarta'),
(5, 'Suci', 'Customer Service', '081472827688', 'J1.Sawo No.2 Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(50) NOT NULL,
  `lokasi_rak` varchar(50) NOT NULL,
  `id_buku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `kode_anggota` (`kode_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
