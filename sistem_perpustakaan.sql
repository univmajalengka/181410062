-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2020 pada 11.18
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `No_Anggota` int(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_Telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`No_Anggota`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Telepon`) VALUES
(1, 'Firman', 'Majalengka', '2020-03-12', 'kertajati', '085223786456'),
(2, 'Raihan', 'Majalengka', '2020-03-20', 'Babakan', '081332485444');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `Kode_Buku` int(10) NOT NULL,
  `Judul_Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`Kode_Buku`, `Judul_Buku`, `Pengarang`, `Penerbit`) VALUES
(512001, 'Biologi Lingkungan', 'Rukaesih Achmad', 'Andi'),
(512012, 'Kimia', 'Istamar Syamsuri', 'Erlangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `No_Anggota` int(100) NOT NULL,
  `Kode_Buku` int(50) NOT NULL,
  `Tanggal_Pinjam` date NOT NULL,
  `Tanggal_Harus_Kembali` date NOT NULL,
  `Tanggal_Kembali` date NOT NULL,
  `Denda` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `denda`
--

INSERT INTO `denda` (`No_Anggota`, `Kode_Buku`, `Tanggal_Pinjam`, `Tanggal_Harus_Kembali`, `Tanggal_Kembali`, `Denda`) VALUES
(1, 512001, '2020-03-02', '2020-03-09', '2020-03-11', 1500),
(2, 512012, '2020-03-03', '2020-03-10', '2020-03-09', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `No_Anggota` int(100) NOT NULL,
  `Kode_Buku` int(50) NOT NULL,
  `Tanggal_Pimjam` date NOT NULL,
  `Tanggal_Harus_Kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`No_Anggota`, `Kode_Buku`, `Tanggal_Pimjam`, `Tanggal_Harus_Kembali`) VALUES
(1, 512001, '2020-03-02', '2020-03-09'),
(2, 512012, '2020-03-03', '2020-03-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `No_Anggota` int(11) NOT NULL,
  `Kode_Buku` int(11) NOT NULL,
  `Tanggal_Pinjam` date NOT NULL,
  `Tanggal_Harus_Kembali` date NOT NULL,
  `Tanggal_Kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`No_Anggota`, `Kode_Buku`, `Tanggal_Pinjam`, `Tanggal_Harus_Kembali`, `Tanggal_Kembali`) VALUES
(1, 512001, '2020-03-02', '2020-03-09', '2020-03-11'),
(2, 512012, '2020-03-03', '2020-03-10', '2020-03-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpanjangan`
--

CREATE TABLE `perpanjangan` (
  `No_Anggota` int(100) NOT NULL,
  `Kode_Buku` int(50) NOT NULL,
  `Tanggal_Kembali` date NOT NULL,
  `Tanggal_Pinjam` date NOT NULL,
  `Tanggal_Harus_Kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perpanjangan`
--

INSERT INTO `perpanjangan` (`No_Anggota`, `Kode_Buku`, `Tanggal_Kembali`, `Tanggal_Pinjam`, `Tanggal_Harus_Kembali`) VALUES
(1, 512001, '2020-03-11', '2020-03-02', '2020-03-09'),
(2, 512012, '2020-03-09', '2020-03-03', '2020-03-10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`Kode_Buku`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- Indeks untuk tabel `perpanjangan`
--
ALTER TABLE `perpanjangan`
  ADD PRIMARY KEY (`No_Anggota`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`No_Anggota`) REFERENCES `anggota` (`No_Anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
