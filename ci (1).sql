-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2021 pada 16.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampus`
--

CREATE TABLE `kampus` (
  `no` int(3) NOT NULL,
  `nim_mhs` varchar(13) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `fakultas_mhs` varchar(20) NOT NULL,
  `jurusan_mhs` varchar(20) NOT NULL,
  `semester_mhs` int(5) NOT NULL,
  `jumlah_sks` varchar(5) NOT NULL,
  `kelompok` varchar(5) NOT NULL,
  `matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kampus`
--

INSERT INTO `kampus` (`no`, `nim_mhs`, `nama_mhs`, `fakultas_mhs`, `jurusan_mhs`, `semester_mhs`, `jumlah_sks`, `kelompok`, `matkul`) VALUES
(0, 'G.231.18.0117', 'Rissa Ayu Penggalih', 'FTIK', 'Teknik Informatika', 7, '23', 'B', 'Etika Profesi'),
(0, 'G.231.18.0116', 'Noval Anafi', 'FTIK', 'Teknik Informatika', 7, '20', 'B', 'Rekayasa Web'),
(0, 'G.231.18.0115', 'Dyan Sinung Prabowo', 'FTIK', 'Teknik Informatika', 7, '19', 'B', 'Mobile Application');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `kode_buku` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_buku`
--

INSERT INTO `tabel_buku` (`kode_buku`, `judul_buku`, `penerbit`, `isbn`, `stok_buku`) VALUES
('01', 'data mining teori dan aplikasi', 'gava media', '123456', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
