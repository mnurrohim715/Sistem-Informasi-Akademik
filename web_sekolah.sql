-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2020 pada 07.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_indo`
--

CREATE TABLE `b_indo` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `total` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_indo`
--

INSERT INTO `b_indo` (`id`, `name`, `kelas`, `n1`, `n2`, `n3`, `email`, `total`, `uts`, `uas`) VALUES
(1, 'siswa1', '10 IPA 1', 10, 10, 20, 'siswa1@gmail.com', 0, 0, 0),
(2, 'siswa2', '11 IPA 1', 0, 0, 0, 'siswa2@gmail.com', 0, 0, 0),
(3, 'siswa3', '12 IPA 1', 23, 45, 34, 'siswa3@gmail.com', 0, 77, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_inggris`
--

CREATE TABLE `b_inggris` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_inggris`
--

INSERT INTO `b_inggris` (`id`, `name`, `email`, `n1`, `n2`, `n3`, `total`, `kelas`, `uts`, `uas`) VALUES
(1, 'siswa1', 'siswa1@gmail.com', 34, 67, 0, 0, '10 IPA 1', 0, 0),
(2, 'siswa2', 'siswa2@gmail.com', 0, 0, 0, 0, '11 IPA 1', 0, 0),
(3, 'siswa3', 'siswa3@gmail.com', 79, 68, 90, 0, '12 IPA 1', 88, 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_mtk`
--

CREATE TABLE `b_mtk` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_mtk`
--

INSERT INTO `b_mtk` (`id`, `name`, `email`, `kelas`, `n1`, `n2`, `n3`, `total`, `uts`, `uas`) VALUES
(1, 'siswa1', 'siswa1@gmail.com', '10 IPA 1', 0, 0, 0, 0, 0, 0),
(2, 'siswa2', 'siswa2@gmail.com', '11 IPA 1', 0, 0, 0, 0, 0, 0),
(3, 'siswa3', 'siswa3@gmail.com', '12 IPA 1', 56, 88, 66, 0, 88, 99);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nip` varchar(20) NOT NULL,
  `mengajar` varchar(128) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rtrw` varchar(11) NOT NULL,
  `kel` varchar(128) NOT NULL,
  `kec` varchar(128) NOT NULL,
  `kab` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL,
  `kode_p` varchar(15) NOT NULL,
  `kelamin` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `wali_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `name`, `email`, `password`, `date_created`, `tempat_lahir`, `tanggal_lahir`, `nip`, `mengajar`, `hp`, `alamat`, `rtrw`, `kel`, `kec`, `kab`, `prov`, `kode_p`, `kelamin`, `agama`, `image`, `wali_kelas`) VALUES
(24, 'INDONESIA', 'guru1@gmail.com', 'guru1', 0, 'ergregr', '2020-06-03', '011', 'BAHASA INDONESIA', '05345', 'kp. bonisari', '323', 'ffsdfsdf', 'efdf', 'dfsd', 'banten', '15570', 'Laki-laki', 'Islam', 'guru.jpg', ''),
(25, 'INGGRIS', 'guru2@gmail.com', 'guru2', 0, 'tangerang', '2020-06-10', '002', 'BAHASA INGGRIS', '021xxxx', 'kp. bonisari', '02/02', 'dvdsv', 'dvdsv', 'efdd', 'dvdvdvdv', '453464', 'Laki-laki', 'Islam', 'guru2.jpg', ''),
(26, 'MATEMATIKA', 'guru3@gmail.com', 'guru3', 0, 'vdsvdvs', '2020-06-09', '003', 'MATEMATIKA', '343ccxxxx', 'esvssv', 'sdfefsdsd', 'dvvxvxdvd', 'jsfjzfdfjan', 'aerhsr gahr', 'rgr gert', '543345', 'Laki-laki', 'Islam', 'guru4.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rtrw` varchar(11) NOT NULL,
  `kel` varchar(128) NOT NULL,
  `kec` varchar(128) NOT NULL,
  `kab` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL,
  `kode_p` varchar(15) NOT NULL,
  `kelamin` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `wali_murid` varchar(128) NOT NULL,
  `hp_wali_murid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `name`, `email`, `password`, `date_created`, `tempat_lahir`, `tanggal_lahir`, `nisn`, `kelas`, `hp`, `alamat`, `rtrw`, `kel`, `kec`, `kab`, `prov`, `kode_p`, `kelamin`, `agama`, `image`, `wali_murid`, `hp_wali_murid`) VALUES
(8, 'siswa1', 'siswa1@gmail.com', 'siswa1', 0, 'tangerang', '2020-06-01', '1111', '10 IPA 1', '0822xxxxxxxx', 'kresek', '01/02', 'kresek', 'sindur', 'tangerang', 'banten', '0435', 'Laki-laki', 'Kristen', 'siswa.png', '', 0),
(9, 'siswa2', 'siswa2@gmail.com', 'siswa2', 0, '', '0000-00-00', '2222', '11 IPA 1', '', '', '', '', '', '', '', '', '', '', 'Bank_Central_Asia1.png', '', 0),
(10, 'siswa3', 'siswa3@gmail.com', 'siswa3', 0, '', '0000-00-00', '3333', '12 IPA 1', '', '', '', '', '', '', '', '', '', '', 'Bank_Central_Asia2.png', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'IPA', 'MIPA'),
(2, 'IPS', 'MIPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(2, 'bahasa inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `is_active` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_active`, `role_id`, `date_created`, `image`) VALUES
(59, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 1, 1, '', ''),
(64, 'guru1', '92afb435ceb16630e9827f54330c59c9', 'guru1@gmail.com', 1, 2, '', 'guru1.jpg'),
(69, 'guru2', '440a21bd2b3a7c686cf3238883dd34e9', 'guru2@gmail.com', 1, 2, '', 'guru3.jpg'),
(70, 'guru3', 'ba6e3bb0215b631f473dd97cd3de08b2', 'guru3@gmail.com', 1, 2, '', 'guru5.jpg'),
(80, 'siswa1', '013f0f67779f3b1686c604db150d12ea', 'siswa1@gmail.com', 1, 3, '', 'siswa1.png'),
(81, 'siswa2', '331633a246a4e1ceefc9539a71fcd124', 'siswa2@gmail.com', 1, 3, '', 'Bank_Central_Asia1.png'),
(82, 'siswa3', 'df8e1ec27c47f2b8223d984f87aa571e', 'siswa3@gmail.com', 1, 3, '', 'Bank_Central_Asia2.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `b_indo`
--
ALTER TABLE `b_indo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b_inggris`
--
ALTER TABLE `b_inggris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b_mtk`
--
ALTER TABLE `b_mtk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `b_indo`
--
ALTER TABLE `b_indo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `b_inggris`
--
ALTER TABLE `b_inggris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `b_mtk`
--
ALTER TABLE `b_mtk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
