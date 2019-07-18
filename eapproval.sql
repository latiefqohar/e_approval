-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 08:28 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eapproval`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_surat`, `status`, `nama`, `jabatan`, `waktu`) VALUES
(1, 4, 'approve', 'lee', 'kasubag', '2019-07-17 11:27:28'),
(2, 4, 'reject', 'sandi', 'kabag', '2019-07-17 11:28:25'),
(3, 5, 'approve', 'sandi', 'kabag', '2019-07-17 15:58:27'),
(4, 4, 'Updated', 'salsa', 'staff', '2019-07-17 17:47:44'),
(5, 4, 'approve', 'lee', 'kasubag', '2019-07-17 17:48:09'),
(6, 4, 'approve', 'sandi', 'kabag', '2019-07-17 17:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `lampiran` int(11) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `pembuka` varchar(500) NOT NULL,
  `tanggal_undangan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `acara` varchar(30) NOT NULL,
  `penutup` varchar(500) NOT NULL,
  `mengetahui` varchar(30) NOT NULL,
  `tembusan` varchar(30) NOT NULL,
  `status_approve` int(11) NOT NULL DEFAULT '0',
  `tgl_update` datetime NOT NULL,
  `penolak` varchar(30) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status_baca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `sifat`, `lampiran`, `perihal`, `tanggal_surat`, `kepada`, `pembuka`, `tanggal_undangan`, `waktu`, `tempat`, `acara`, `penutup`, `mengetahui`, `tembusan`, `status_approve`, `tgl_update`, `penolak`, `note`, `status_baca`) VALUES
(1, 0, 'biasa', 0, 'tes db ', '0000-00-00', 'semua asn ', 'lorem ipsum', '2019-07-07', '13:35:56', 'gedung serbaguna ', ' gatau', 'terimakasih', 'asn ', 'asn ', 4, '0000-00-00 00:00:00', '', '', '1'),
(4, 0, 'penting', 1, 'ini tes  ', '2019-07-16', 'semua manusia baper  ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2019-07-16', '02:01:00', 'Gedung serbaguna  ', 'asik asik aja  ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 'Bos  ', 'Bos  ', 2, '2019-07-17 17:50:32', 'kabag', ' terserah lu ajalah', '1'),
(5, 0, 'biasa', 475, 'Inventore omnis pariatur at.', '2019-10-11', 'Quo facere dolore similique qu', 'Placeat quia esse ut et et labore.', '2019-07-17', '00:31:00', 'Pariatur accusantium dolorum v', 'Quia vitae quis suscipit ipsum', 'Et repellat ut illo quia nisi.', 'Adipisci omnis laborum delectu', 'Esse ea eos numquam error id e', 2, '2019-07-17 15:58:27', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `alamat`, `departemen`, `jabatan`, `username`, `password`) VALUES
(1, 5215162, 'lee', 'tangerang', 'organisasi', 'kasubag', 'kasubag', '143ad2695caf8f2368b5d9ef03d37ee8'),
(2, 5626, 'salsa', '', 'organisasi', 'staff', 'staff', '1253208465b1efa876f982d8a9e73eef'),
(3, 1516, 'sandi', '', 'organisasi', 'kabag', 'kabag', '1a50ef14d0d75cd795860935ee0918af'),
(4, 1848452, 'joko', '', 'organisasi', 'asisten', 'asda', 'adbf5a778175ee757c34d0eba4e932bc'),
(5, 456231, 'trio', '', 'organisasi', 'sekda', 'sekda', '143853039dad575c9fe430499b8bf2a4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
