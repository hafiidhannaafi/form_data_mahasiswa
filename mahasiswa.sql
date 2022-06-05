-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2021 pada 16.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nim`, `nama`, `password`, `ttl`, `jeniskelamin`, `prodi`, `kewarganegaraan`, `status`, `ket`) VALUES
('M3119045', 'Hafiidh Annaafi Suratno', '12345', '2000-03-11', 'Wanita', 'Teknik Informatika', 'WNI', 'Mahasiswa Aktif', 'HALO'),
('M3119099', 'Dara Arafah', '23456', '2000-04-09', 'Wanita', ' Teknik Industri', 'WNI', 'Mahasiswa Aktif', 'halo bismillah'),
('', 'Dara Arafah', '23456', '0000-00-00', '', 'Teknik Informatika', 'WNA', 'Mahasiswa Aktif', ''),
('M3119067', 'Dara Arafah R', '234567', '2021-03-26', 'Wanita', 'Teknik Arsitektur', 'WNI', 'Mahasiswa Aktif', 'HAI'),
('M31187', 'Hamzah Haryo', '88888', '2021-04-08', 'Pria', ' Teknik Industri', 'WNI', 'Mahasiswa Aktif', 'semangat'),
('M3119056', 'Hanafi', '888889', '2021-03-20', 'Pria', 'Teknik Informatika', 'WNI', 'Mahasiswa Aktif', 'bismillah'),
('M3119068', 'Arya Adhi', '8888890', '2021-04-03', 'Pria', 'Teknik Mesin', 'WNI', 'Mahasiswa Aktif', 'Halo'),
('M3119067', 'Arya Adhin', '88888900', '2021-04-09', 'Wanita', 'Teknik Arsitektur', 'WNI', 'Mahasiswa Aktif', 'HALO'),
('M3119049', 'Halana', '09874', '2021-04-02', 'Wanita', ' Teknik Industri', 'WNI', 'Mahasiswa Aktif', 'Salam kenal'),
('', 'Arya Adhina SF', '8888890077', '0000-00-00', '', '', 'WNA', 'Aktif', ''),
('M3119056', 'Salma Rahmawati', '098654', '0000-00-00', 'Wanita', 'Teknik Arsitektur', 'WNA', 'Aktif', 'bismillah aku bisa pemweb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
