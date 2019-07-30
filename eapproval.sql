-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 05:42 AM
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
(9, 6, 'approve', 'lee', 'kasubag', '2019-07-19 11:08:17'),
(10, 11, 'approve', 'lee', 'kasubag', '2019-07-19 19:47:52'),
(11, 11, 'reject', 'sandi', 'kabag', '2019-07-19 19:56:38'),
(13, 11, 'approve', 'trio', 'sekda', '2019-07-19 19:58:37'),
(14, 12, 'approve', 'sandi', 'kabag', '2019-07-24 10:39:27'),
(15, 15, 'approve', 'sandi', 'kabag', '2019-07-24 14:19:21'),
(16, 12, 'reject', 'joko', 'asisten', '2019-07-24 14:39:21'),
(17, 14, 'approve', 'joko', 'asisten', '2019-07-24 15:04:46'),
(18, 15, 'reject', 'joko', 'asisten', '2019-07-24 15:05:18'),
(19, 14, 'approve', 'trio', 'sekda', '2019-07-24 15:16:38'),
(20, 14, 'approve', 'trio', 'sekda', '2019-07-24 17:20:28'),
(21, 14, 'approve', 'trio', 'sekda', '2019-07-24 17:20:32'),
(22, 17, 'approve', 'lee', 'kabag', '2019-07-25 18:37:41');

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
  `pembuka` varchar(1000) NOT NULL,
  `tanggal_undangan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `acara` varchar(30) NOT NULL,
  `penutup` varchar(1000) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `status_approve` int(11) NOT NULL DEFAULT '0',
  `tgl_update` datetime NOT NULL,
  `penolak` varchar(30) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status_baca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `sifat`, `lampiran`, `perihal`, `tanggal_surat`, `kepada`, `pembuka`, `tanggal_undangan`, `waktu`, `tempat`, `acara`, `penutup`, `departemen`, `status_approve`, `tgl_update`, `penolak`, `note`, `status_baca`) VALUES
(6, 0, 'biasa', 1, 'undangan rapat', '2019-07-26', 'semua pegawai', ' Sehubungan dengan surat Saudara tanggal 22 Juli 2003, No. 225/U.IV/2003 tentang permintaan tenaga pengajar bahasa Indonesia untuk orang asing. Kami ingin menanggapi sebagai berikut.', '2019-07-19', '09:00:00', 'Gedung serbaguna', 'rapat', 'demikian surat ini kami buat agar dapat dipahami, atas perhatiannya kami ucapkan terimakasih', '', 4, '2019-07-19 11:08:17', '', '', '1'),
(11, 0, 'penting', 234, 'Eum rerum nemo porro quidem ni', '2019-07-19', 'Officia incidunt quas sapiente', 'Et tempora sit deserunt sit quo qui excepturi assumenda iusto.', '2019-09-18', '01:07:00', 'Illo harum dolores eum corpori', 'Provident excepturi est velit ', 'Molestias et ut atque voluptas.', '', 4, '2019-07-19 19:58:37', 'kabag', ' tanggalnya ganti wey', '1'),
(12, 0, 'biasa', 1, 'asda', '2019-07-24', 'semua manusia baper', 'adadacscsa', '2019-07-22', '13:00:00', 'sadas', 'adadxz', 'xasdxeaf3crdfewdfcwefcweaswa', 'organisasi', 6, '2019-07-24 14:39:21', 'asisten', ' ', '1'),
(14, 0, 'biasa', 339, 'Laudantium officia cum.', '2019-07-24', 'Hic aut autem omnis.', 'Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf os', '2019-10-01', '02:00:00', 'Et eveniet suscipit eveniet. S', 'Mollitia est rerum ut. Sit sae', 'Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Voluptas numquam similique alias repellendus et voluptates nemo officiis.', 'umum', 4, '2019-07-24 17:20:32', '', '', '1'),
(15, 0, 'biasa', 182, 'Unde rerum nesciunt omnis sed ', '2019-07-24', 'Harum dolores aliquid deserunt', 'Vero nulla facere officiis quo in eligendi hic molestias.', '2019-07-23', '02:04:00', 'Similique occaecati sint modi ', 'Deserunt autem officiis nisi q', 'Nisi dolor ut enim.', 'organisasi', 6, '2019-07-24 15:05:15', 'asisten', ' ini beda user staff', '1'),
(16, 0, 'biasa', 37, 'Laborum sed provident.', '2019-07-25', 'Suscipit est magnam dolor aut ', 'Accusantium sunt ipsam qui aut.', '2018-12-15', '16:59:00', 'Dolore eum quia voluptates dig', 'Exercitationem deserunt est au', 'Qui et aut.', 'umum', 0, '0000-00-00 00:00:00', '', '', '1'),
(17, 0, 'penting', 322, 'Vel nam earum sunt quia quis o', '2019-07-25', 'Distinctio quaerat eveniet sit', 'Assumenda aut illum iste.', '2019-11-09', '08:05:00', 'Perferendis non mollitia imped', 'Modi et in dolore. Possimus ut', 'Sed quia aut ullam.', 'umum', 2, '2019-07-25 18:37:40', '', '', '0');

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
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `alamat`, `departemen`, `jabatan`, `username`, `password`, `email`) VALUES
(1, 5215162, 'lee', 'tangerang', 'umum', 'kabag', 'kabagumum', '0a97543a52f5154db472f3ec4b3ed8b2', ''),
(2, 5626, 'salsa', '', 'organisasi', 'staff', 'staff', '1253208465b1efa876f982d8a9e73eef', 'shintanura8@gmail.com'),
(3, 1516, 'sandi', '', 'organisasi', 'kabag', 'kabag', '1a50ef14d0d75cd795860935ee0918af', ''),
(4, 1848452, 'joko', '', '', 'asisten', 'asda', 'adbf5a778175ee757c34d0eba4e932bc', ''),
(5, 456231, 'trio', '', '', 'sekda', 'sekda', '143853039dad575c9fe430499b8bf2a4', ''),
(6, 56216, 'ani', 'jakarta', 'umum', 'staff', 'staffumum', 'f9885d6dc89802b608a1db6169e1f32f', 'nuramaliashinta@gmail.com');

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
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
