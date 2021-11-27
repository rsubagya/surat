-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 05:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_surat_masuk` int(11) NOT NULL,
  `tanggal_disposisi` date NOT NULL,
  `disposisi_ke` varchar(25) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_surat_masuk`, `tanggal_disposisi`, `disposisi_ke`, `keterangan`) VALUES
(0, '0000-00-00', 'dfd', 'dfbd'),
(19, '2021-09-14', 'Atasan', 'Sudah selesai'),
(33, '2021-09-08', 'Atasan', 'Sudah selesai');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `ringkasan_surat` varchar(255) NOT NULL,
  `tanggal_dikeluarkan` date NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `jenis_surat`, `no_surat`, `ringkasan_surat`, `tanggal_dikeluarkan`, `tujuan_surat`, `status`) VALUES
(1, 'Tugas', 'VI/72/XII/A', 'Surat izin tugas', '2017-05-01', 'Dinas Kesehatan', 'Disetujui'),
(2, 'Surat Pengantar', 'VI/014/A/X', 'Penambahan Obat', '2017-05-03', 'PT. Angkasa Jaya', 'Belum Disetujui'),
(4, 'Surat Tugas', 'VI/014/A/XX', 'Pengajuan Izin Tugas', '2017-05-01', 'Kementrian Kesehatan', 'Belum Disetujui'),
(6, 'Surat Izin Penelitian', 'VI/014/A/XX', 'Permohonan Pengajuan Izin Penelitian', '2017-05-04', 'RS Aulia', 'Disetujui'),
(7, 'Surat Izin Penelitian', 'VI/014/A/VIII', 'Permohonan pengajuan penelitian', '2017-05-07', 'RS Aulia', 'Disetujui'),
(8, 'Surat Izin Penelitian', 'VI/014/A/VIII', 'Izin pengajuan penelitian', '2017-05-10', 'RS Aulia', 'Disetujui'),
(9, 'Surat Pengantar', 'VI/014/A/II', 'Pengajuan penambahan obat', '2017-05-26', 'PT. Kimia Farma', 'Disetujui'),
(10, 'Surat Pengantar', 'VI/014/A/XXX', 'Surat pengantar penelitian', '2017-06-01', 'RS Aulia', 'Disetujui'),
(11, 'Surat Izin Penelitian', 'VI/014/A/IXXX', 'Permohonan Penelitian', '2017-06-06', 'RS Awal Bros', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(11) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal_surat` varchar(255) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `asal_surat`, `no_surat`, `perihal_surat`, `tanggal_terima`, `tujuan_surat`) VALUES
(4, 'Dinas Kesehatan', 'VI/014/A/VIII', 'Pengumuman', '2017-05-16', 'TUA'),
(5, 'Dinas Pasar', 'VI/014/A/V', 'Pemberitahuan', '2017-05-07', 'Bagian Umum'),
(8, 'PT. Dinal', 'VI/014/A/VIII3', 'Pegumuman', '2017-06-15', 'Umum'),
(11, 'PT. Sosro', 'VI/014/A/VIII6', 'Penambahan Minuman', '2017-06-07', 'Umum'),
(12, 'Dinas Kesehatan', 'VI/014/A/VIII7', 'Pengumuman penggunaan masker', '2017-01-01', 'Umum'),
(13, 'PT. Kimia Farma', 'VI/014/A/VIII8', 'Penambahan Obat', '2017-04-04', 'Apotik'),
(14, 'RSUD Arifin Achmad', 'VI/014/A/VIII9', 'Pengumuman', '2017-02-15', 'Pimpinan'),
(15, 'Dinas Pasar', 'VI/014/A/VIII10', 'Pengumuman', '2017-05-23', 'Umum'),
(17, 'PT. Kimia Farma', 'VI/014/A/VIII12', 'Penambahan Obat', '2017-01-02', 'Apotik'),
(18, 'PT Kimia Farma', 'VI/014/A/IXI', 'Penambahan Obat', '2017-06-03', 'Apotik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama`, `nip`, `jenis_kelamin`, `alamat`, `email`, `hp`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'Kang Admin', 0, 'L', 'Jl. Pandau', 'kangadmin@gmail.com', '084415520529', ''),
(2, 'pegawai', '12345', 'pegawai', 'Kang Pegawai', 199504032008012022, 'L', 'Jl. Hr Subrantas Perum Trilogi', 'kangpegawai@gmail.com', '08532106904123', ''),
(3, 'iqbal', 'iqbal', 'pimpinan', 'M. Iqbal Mardhotillah', 199404032008012022, 'L', 'Jl. Merpati Sakti Gg Dayun', 'm.iqbal.mardhotillah@students.uin-suska.ac.id', '082169555496', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
