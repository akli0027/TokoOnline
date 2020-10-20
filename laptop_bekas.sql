-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2020 pada 17.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop_bekas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password_admin`, `email_admin`) VALUES
(1, 'akli', '12', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `diskon` int(11) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_pemasok` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `ukuran`, `merk`, `model`, `diskon`, `warna`, `gambar`, `id_pemasok`) VALUES
(25, 'sadikin', 200000, 800, 'LG', 'monitor', 0, 'hitam', 'm2.jpg', '1'),
(26, 'Rey', 180000, 1024, 'samsung', 'monitor', 0, 'hitam', 'samsung.jpg', '1'),
(27, 'Rahma', 310000, 900, 'acer 4K', 'monitor', 0, 'hitam', 'acer.jpg', '1'),
(28, 'afifi', 1150000, 1024, 'asus 4K', 'monitor', 0, 'Silver', 'asus.jpg', '1'),
(29, 'rasya', 20000, 10, 'Logitech', 'mouse', 0, 'hitam', 'logict.jpg', '1'),
(30, 'G en', 80000, 10, 'airshark', 'mouse', 0, 'Mix', 'AIRSHARK-416x416.jpg', '1'),
(31, 'Reno', 850000, 10, 'aliencraft', 'mouse', 0, 'hitam & merah', 'alienCraft.png', '1'),
(32, 'Moreno', 60000, 10, 'Alcatroz Asic', 'mouse', 0, '', 'alcatroz asic.jpg', '1'),
(33, 'aca', 131000, 80, 'acer', 'keyboard', 0, 'Silver', 'k2.jfif', '1'),
(34, 'Khamel', 250000, 90, 'asus', 'keyboard', 0, 'hitam', 'k3.jfif', '1'),
(35, 'Arga', 600000, 80, 'lenovo', 'keyboard', 0, 'hitam', 'k1.jfif', '1'),
(36, 'Nazwa', 800000, 0, 'zixer', 'speaker', 0, 'hitam', 's1.jfif', '1'),
(37, 'akli', 40000, 34, 'SONY', 'speaker', 0, 'biru', 's3.jfif', '1'),
(38, 'Nilson', 675000, 34, 'SONY', 'speaker', 0, 'hitam', 's2.jpg', '1'),
(39, 'Zada', 1700000, 20, 'ROG', 'ram', 0, 'HijauxHitam', 'r1.jpg', '1'),
(40, 'Riki', 180000, 54, 'ROG', 'mouse', 0, 'merah dan hitam', 'mo3.jfif', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasok`
--

CREATE TABLE `pemasok` (
  `id_pemasok` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasok`
--

INSERT INTO `pemasok` (`id_pemasok`, `nama`, `no_telepon`, `password`) VALUES
('1', 'akli', '081225853779', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `no_telepon`, `alamat`, `email`, `password`) VALUES
(991, 'sadikin', '081225853779', 'jalan imam bonjol selatan', 'muhammad_sadikin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struk`
--

CREATE TABLE `struk` (
  `id_pembeli` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `id_pemasok` (`id_pemasok`);

--
-- Indeks untuk tabel `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `struk`
--
ALTER TABLE `struk`
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=994;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `id_pemasok` FOREIGN KEY (`id_pemasok`) REFERENCES `pemasok` (`id_pemasok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `struk`
--
ALTER TABLE `struk`
  ADD CONSTRAINT `id_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kode_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
