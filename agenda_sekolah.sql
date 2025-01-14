-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 01:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`) VALUES
(1, 'A C A, S.Pd'),
(2, 'Heni Hadiati, S.Pd'),
(3, 'Nani Hasanah, S.Pd'),
(4, 'Nunung Lisnawati, S.Pd'),
(5, 'Saliman, S.Ag., MM.Pd.'),
(6, 'Engkus Kuswara, S.Pd'),
(7, 'Tuti Murdayani, S.Pd., MM.'),
(8, 'Yayat Ruhyat, S.Pd'),
(9, 'Hana Susanti, S.Pd'),
(10, 'Edy Santoso, ST., M.Pd'),
(11, 'Asep Sukmana, ST., M.M'),
(12, 'Nandang, S.Ag., MM.'),
(13, 'DR.Tia Novianty, S.Pd., MM'),
(14, 'Sri Mulyati, S.Pd'),
(15, 'Rohaeni Nur Eli, S.Si, M.Pd'),
(16, 'Ima Nurmayanti Ramdhianingsih, M.Pd'),
(17, 'Lilis Susanti, S.Pd., MM'),
(18, 'Yusi Siti Masitoh, S.Pd'),
(19, 'Kuswati, SE., MM.'),
(20, 'Tini Hernawati, S.Pd'),
(21, 'Andi Garnadi, S.Pd , M.Pd'),
(22, 'Asep Permana, M.Pd'),
(23, 'Agus Basuki, S.Pd'),
(24, 'Endro Tri Prasetyo, S.Pd'),
(25, 'Setiawan, S.Pd'),
(26, 'Agus Mochamad Sopyan, S.Pd., M.Pd.'),
(27, 'Rd. Rulyan Saptadji, S.Si'),
(28, 'Dadan Mahdan, M.Pd'),
(29, 'Syntia Mahyarani, S.Pd'),
(30, 'Wisnu Ramdhani, ST., MT.'),
(31, 'Nurrani Siswanti, M.Pd'),
(32, 'Gugum Gumilar, ST., MT'),
(33, 'Yana Cahya Kusumah, S.Kom., MT.'),
(34, 'Yulius Rudiana, S.Pd., MT.'),
(35, 'Rd. Irfan Santika Rahman, S.Pd., MT'),
(36, 'Dwisnaini Adriyos, S.Kom.'),
(37, 'Mariam Komalawati, S.Kom'),
(38, 'Utami Nurhayati, S.Si'),
(39, 'Dyah Kusumaningrum, ST.'),
(40, 'Julisa Irtina, S.Si, M.Pd'),
(41, 'Ridwan Yanuardi, S.Pd., M.Pd'),
(42, 'Asri Dena Veviani, S.Pd'),
(43, 'Dede Pamungkas, S.ST.'),
(44, 'Fajar Heriyanto, S.Pd'),
(45, 'Yayat Sudrajat, S.Pd'),
(46, 'Dedi Suhendar, S.Pd'),
(47, 'Dadang Rosadi, S.Pd'),
(48, 'Wahyu Sumirat Sumardi, S.Pd'),
(49, 'Moch. Gani Setiawan, S.Kom'),
(50, 'Syaifullah, S.Ds'),
(51, 'Eneng Sayidah, S.Pd., MM.'),
(52, 'Arum Pertiwi, S.Psi'),
(53, 'Raniutami Widiyanti, S.Pd.'),
(54, 'Ramdan Nurhaidir, ST.'),
(55, 'Astri Putri Perdana, S.Si., M.Pd'),
(56, 'Izma Yuliana, S.T.'),
(57, 'Pradina Diah Aryanti, S.Pd'),
(58, 'Siti Eftafiyana, S.Pd'),
(59, 'Gina Dwi Septiani, S.Pd., M.Pd'),
(60, 'Maya Karmila, S.Pd., M.Pd'),
(61, 'Siti Roidah, S.S'),
(62, 'Astri Hastriani, S.Pd'),
(63, 'Sandra Irawan, S.Pd'),
(64, 'Teti Suhartati, S.Pd'),
(65, 'Fajri Bani Fauzan, S.Sn'),
(66, 'Mutiara Sabariah, S.Psi'),
(67, 'Husni Mardiah, M.Pd'),
(68, 'Yudith Rahayu, S.Psi., M.Pd'),
(69, 'Durahman, S.Sos'),
(70, 'Ismita Ratnasari, S.ST., MM.'),
(71, 'Rahmat Santa, S.Kom., MM.'),
(72, 'Hani Handayani, S.Pd'),
(73, 'Neneng Fauziah, S.Ud'),
(74, 'Yuliani, ST'),
(75, 'Ratna Isnaeni Tesdy, S.Pd.'),
(76, 'Mas Yudi Riksa Kusumah, S.Pd'),
(77, 'Iwan Toni Saputro, S.Pd., M.T.'),
(78, 'Didit Ariadi, S.ST'),
(79, 'Agung Apriatna, S.Pd.'),
(80, 'Samsudin, S.T.'),
(81, 'Tati Julaeha Karwati, S.Pd'),
(82, 'Irma Rahmawati, S.Pd'),
(83, 'Kiki Juniantie, S.Pd'),
(84, 'Wulan Indah Pratiwi, M.Pd'),
(85, 'Susi Nur Susilawati S.Pd'),
(86, 'Iqbal Ramdani, S.Tr.T.'),
(87, 'Yulie Yulianti, S.Pd.i'),
(88, 'Adrianty Noorhanif, S.Pd'),
(89, 'Anom Jati Kusumo, S.Psi'),
(90, 'Erni Anggraeni, S.Pd'),
(91, 'Ririn Widiarti, S.Pd'),
(92, 'Dra. Cucu Lasmanawati'),
(93, 'Irvan Hilmi, S.S'),
(94, 'Neneng Isti Janiarti, S.Sn'),
(95, 'Fauzi Nugroho, S.Pd.'),
(96, 'Ridwan Firdaus, S.Pd.'),
(97, 'Daniel Adhi Hutomo, S.Tr.T'),
(98, 'Yudi Wahyudi, S.Pd'),
(99, 'Christin Agustini, S.T.'),
(100, 'Marsita Dahliani Putri, S.Pd.');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `kode_kehadiran` varchar(100) NOT NULL,
  `ket_kehadiran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `kode_kehadiran`, `ket_kehadiran`) VALUES
(1, 'HP', 'Hadir Penuh'),
(2, 'HS', 'Hadir Sebagian'),
(3, 'TM', 'Tidak Hadir Memberikan Tugas'),
(4, 'TT', 'Tidak Hadir Tidak Memberikan Tugas');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `id_user`) VALUES
(1, 'X RPL A', 1),
(2, 'X RPL B', 2),
(3, 'X DKV - A', 3),
(4, 'X DKV - B', 4),
(5, 'X DKV - C', 5),
(6, 'X ANIMASI - A', 6),
(7, 'X ANIMASI - B', 7),
(8, 'X KIMIA INDUSTRI - A', 8),
(9, 'X KIMIA INDUSTRI - B', 9),
(10, 'X KIMIA INDUSTRI - C', 10),
(11, 'X TEKNIK PEMESINAN - A', 11),
(12, 'X TEKNIK PEMESINAN - B', 12),
(13, 'X MEKATRONIKA - A', 13),
(14, 'X MEKATRONIKA - B', 14),
(15, 'X MEKATRONIKA - C', 15),
(16, 'X MEKATRONIKA - D', 16),
(17, 'XI RPL A', 17),
(18, 'XI RPL B', 18),
(19, 'XI DKV - A', 19),
(20, 'XI DKV - B', 20),
(21, 'XI DKV - C', 21),
(22, 'XI ANIMASI - A', 22),
(23, 'XI ANIMASI - B', 23),
(24, 'XI KIMIA INDUSTRI - A', 24),
(25, 'XI KIMIA INDUSTRI - B', 25),
(26, 'XI KIMIA INDUSTRI - C', 26),
(27, 'XI TEKNIK PEMESINAN-A', 27),
(28, 'XI TEKNIK PEMESINAN-B', 28),
(29, 'XI MEKATRONIKA - A', 29),
(30, 'XI MEKATRONIKA - B', 30),
(31, 'XI MEKATRONIKA - C', 31),
(32, 'XI MEKATRONIKA - D', 32),
(33, 'XII RPL A', 33),
(34, 'XII RPL B', 34),
(35, 'XII DKV - A', 35),
(36, 'XII DKV - B', 36),
(37, 'XII DKV - C', 37),
(38, 'XII ANIMASI - A', 38),
(39, 'XII ANIMASI - B', 39),
(40, 'XII KIMIA INDUSTRI - A', 40),
(41, 'XII KIMIA INDUSTRI - B', 41),
(42, 'XII KIMIA INDUSTRI - C', 42),
(43, 'XII TEKNIK PEMESINAN-A', 43),
(44, 'XII TEKNIK PEMESINAN-B', 44),
(45, 'XII MEKATRONIKA - A', 45),
(46, 'XII MEKATRONIKA - B', 46),
(47, 'XII MEKATRONIKA - C', 47),
(48, 'XII MEKATRONIKA - D', 48),
(49, 'admin', 49);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`) VALUES
(1, 'Pendidikan Agama Islam dan Budi Pekerti'),
(2, 'Pendidikan Pancasila'),
(3, 'Bahasa Indonesia'),
(4, 'Pendidikan Jasmani, Olahraga, dan Kesehatan'),
(5, 'Sejarah'),
(6, 'Seni Budaya'),
(7, 'Mulok Basa Sunda'),
(8, 'Koordinator P5'),
(9, 'Pilihan Bahasa Jepang'),
(10, 'Mulok Pendidikan Lingkungan Hidup'),
(11, 'Matematika'),
(12, 'Bahasa Inggris'),
(13, 'IPAS'),
(14, 'Informatika PPL&Gim'),
(15, 'Dasar-dasar PPL&Gim'),
(16, 'Konsentrasi Keahlian RPL 11-1'),
(17, 'Konsentrasi Keahlian RPL 11-2'),
(18, 'Konsentrasi Keahlian RPL 11-3'),
(19, 'Konsentrasi Keahlian RPL 11-4'),
(20, 'Konsentrasi Keahlian RPL 11-5'),
(21, 'Konsentrasi Keahlian RPL 12-1'),
(22, 'Konsentrasi Keahlian RPL 12-2'),
(23, 'Konsentrasi Keahlian RPL 12-3'),
(24, 'Konsentrasi Keahlian RPL 12-4'),
(25, 'Konsentrasi Keahlian RPL 12-5'),
(26, 'PKK11 RPL'),
(27, 'PKK12 RPL'),
(28, 'PIL RPL 11 UI_UX'),
(29, 'PIL RPL 12 KOMDAT'),
(30, 'Informatika DKV'),
(31, 'Dasar-dasar DKV'),
(32, 'Informatika'),
(33, 'Dasar DKV - Sketsa, Ilustrasi dan Komputer Grafis'),
(34, 'Dasar DKV - Typography dan Fotografi'),
(35, 'Konsentrasi Keahlian - Desain Grafis'),
(36, 'Konsentrasi Keahlian - Videografi'),
(37, 'Konsentrasi Keahlian - Pengolahan Audio'),
(38, 'Konsentrasi Keahlian - Desain Gerak'),
(39, 'Konsentrasi Keahlian - 1'),
(40, 'Konsentrasi Keahlian - 2'),
(41, 'Konsentrasi Keahlian - 3'),
(42, 'Konsentrasi Keahlian - 4'),
(43, 'Produk Kreatif dan Kewirausahaan - 1'),
(44, 'Produk Kreatif dan Kewirausahaan - 2'),
(45, 'Produk Kreatif dan Kewirausahaan - 1'),
(46, 'Produk Kreatif dan Kewirausahaan - 2'),
(47, 'Pilihan - Pembuatan Aset 3D'),
(48, 'Pilihan'),
(49, 'Konsentrasi Keahlian Desain Grafis'),
(50, 'Konsentrasi Keahlian Videografi'),
(51, 'Konsentrasi Keahlian Pengolahan Audio'),
(52, 'Konsentrasi Keahlian Desain Gerak'),
(53, 'Konsentrasi Keahlian-121'),
(54, 'Konsentrasi Keahlian-122'),
(55, 'Konsentrasi Keahlian-123'),
(56, 'Konsentrasi Keahlian-124'),
(57, 'PKK11 DKV'),
(58, 'PKK12 DKV'),
(59, 'Pilihan11-DKV-Aset 3D'),
(60, 'Pilihan12-DKV-Aset 3D'),
(61, 'Informatika Animasi'),
(62, 'Dasar-dasar Animasi'),
(63, 'KK-Animasi-11'),
(64, 'KK-Animasi-12'),
(65, 'PKK1 Animasi'),
(66, 'PKK2 Animasi'),
(67, 'Pilihan-A Animasi'),
(68, 'Pilihan-B Animasi'),
(69, 'Informatika Kimia Industri'),
(70, 'KK-T-Kimia Industri-111-OTK'),
(71, 'KK-T-Kimia Industri-112-AIK'),
(72, 'KK-T-Kimia Industri-113-PIK'),
(73, 'KK-T-Kimia Industri-121-OTK'),
(74, 'KK-T-Kimia Industri-122-AIK'),
(75, 'KK-T-Kimia Industri-123-PIK'),
(76, 'PKK1 Teknik Kimia Industri'),
(77, 'PKK2 Teknik Kimia Industri'),
(78, 'Pilihan-A Teknik Kimia Industri'),
(79, 'Pilihan-B Teknik Kimia Industri'),
(80, 'Informatika Mesin'),
(81, 'Dasar Teknik Mesin-PDTM'),
(82, 'Dasar Teknik Mesin-Gamtek'),
(83, 'Dasar Teknik Mesin-DPTM'),
(84, 'KK12 T- Pemesinan-FRAIS'),
(85, 'KK11 T- Pemesinan-BUBUT'),
(86, 'KK14 T- Pemesinan-GTM'),
(87, 'KK13 T- Pemesinan-CNC'),
(88, 'KK22 T- Pemesinan-FRAIS'),
(89, 'KK21 T- Pemesinan-BUBUT'),
(90, 'KK24 T- Pemesinan-GTM'),
(91, 'KK23 T- Pemesinan-CNC'),
(92, 'KK25 T- Pemesinan-GERINDA'),
(93, 'PKK1 T-Pemesinan'),
(94, 'PKK2 T-Pemesinan'),
(95, 'Pilihan-A Teknik Pemesinan MOLD DESIGN'),
(96, 'Pilihan-B Teknik Pemesinan PENGELASAN'),
(97, 'Informatika Elektronika'),
(98, 'DDEL-Dasar Keslistrikan'),
(99, 'DDEL-Dasar Elektronika'),
(100, 'DDEL-Kerja Bangku&Gamtek'),
(101, 'KKMK11-Sistem Robotik'),
(102, 'KKMK11-Sistem Kontrol Mekatronik'),
(103, 'KKMK11-CAE'),
(104, 'KKMK12-Sistem Robotik'),
(105, 'KKMK12-Sistem Kontrol Mekatronik'),
(106, 'KKMK12-CAE'),
(107, 'KKMK12-Perawatan'),
(108, 'PKK11 Mekatronika'),
(109, 'PKK12 Mekatronika'),
(110, 'Pilihan MK-11-IIOT'),
(111, 'Pilihan MK-12-IIOT'),
(112, 'BP/BK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam_akhir`
--

CREATE TABLE `tb_jam_akhir` (
  `id_akhir` int(11) NOT NULL,
  `ket_akhir` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_jam_akhir`
--

INSERT INTO `tb_jam_akhir` (`id_akhir`, `ket_akhir`) VALUES
(1, '7.45'),
(2, '8.30'),
(3, '9.15'),
(4, '10.00'),
(5, '11.00'),
(6, '11.45'),
(7, '13.30'),
(8, '14.00'),
(9, '14.30'),
(10, '15.00'),
(11, '15.30'),
(12, '16.00'),
(13, '16.20'),
(14, '16.40'),
(15, '17.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam_awal`
--

CREATE TABLE `tb_jam_awal` (
  `id_awal` int(11) NOT NULL,
  `ket_awal` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_jam_awal`
--

INSERT INTO `tb_jam_awal` (`id_awal`, `ket_awal`) VALUES
(1, '7.00'),
(2, '7.45'),
(3, '8.30'),
(4, '9.15'),
(5, '10.15'),
(6, '11.00'),
(7, '13.00'),
(8, '13.30'),
(9, '14.00'),
(10, '14.30'),
(11, '15.00'),
(12, '15.30'),
(13, '16.00'),
(14, '16.20'),
(15, '16.40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_awal` int(11) NOT NULL,
  `id_akhir` int(11) NOT NULL,
  `materi` text NOT NULL,
  `id_kehadiran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`id_riwayat`, `id_kelas`, `id_guru`, `id_mapel`, `tanggal`, `id_awal`, `id_akhir`, `materi`, `id_kehadiran`) VALUES
(1, 1, 3, 5, '0000-00-00', 3, 6, '0', 1),
(2, 1, 1, 5, '2025-01-14', 2, 7, 'sdawfsasadwsdas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'X RPL A', 'XRPLA', 'XRPLA', 'siswa'),
(2, 'X RPL B', 'XRPLB', 'XRPLB', 'siswa'),
(3, 'X DKV - A', 'XDKVA', 'XDKVA', 'siswa'),
(4, 'X DKV - B', 'XDKVB', 'XDKVB', 'siswa'),
(5, 'X DKV - C', 'XDKVC', 'XDKVC', 'siswa'),
(6, 'X ANIMASI - A', 'XANIMASIA', 'XANIMASIA', 'siswa'),
(7, 'X ANIMASI - B', 'XANIMASIB', 'XANIMASIB', 'siswa'),
(8, 'X KIMIA INDUSTRI - A', 'XKIMIAINDUSTRIA', 'XKIMIAINDUSTRIA', 'siswa'),
(9, 'X KIMIA INDUSTRI - B', 'XKIMIAINDUSTRIB', 'XKIMIAINDUSTRIB', 'siswa'),
(10, 'X KIMIA INDUSTRI - C', 'XKIMIAINDUSTRIC', 'XKIMIAINDUSTRIC', 'siswa'),
(11, 'X TEKNIK PEMESINAN - A', 'XTEKNIKPEMESINANA', 'XTEKNIKPEMESINANA', 'siswa'),
(12, 'X TEKNIK PEMESINAN - B', 'XTEKNIKPEMESINANB', 'XTEKNIKPEMESINANB', 'siswa'),
(13, 'X MEKATRONIKA - A', 'XMEKATRONIKAA', 'XMEKATRONIKAA', 'siswa'),
(14, 'X MEKATRONIKA - B', 'XMEKATRONIKAB', 'XMEKATRONIKAB', 'siswa'),
(15, 'X MEKATRONIKA - C', 'XMEKATRONIKAC', 'XMEKATRONIKAC', 'siswa'),
(16, 'X MEKATRONIKA - D', 'XMEKATRONIKAD', 'XMEKATRONIKAD', 'siswa'),
(17, 'XI RPL A', 'XIRPLA', 'XIRPLA', 'siswa'),
(18, 'XI RPL B', 'XIRPLB', 'XIRPLB', 'siswa'),
(19, 'XI DKV - A', 'XIDKVA', 'XIDKVA', 'siswa'),
(20, 'XI DKV - B', 'XIDKVB', 'XIDKVB', 'siswa'),
(21, 'XI DKV - C', 'XIDKVC', 'XIDKVC', 'siswa'),
(22, 'XI ANIMASI - A', 'XIANIMASIA', 'XIANIMASIA', 'siswa'),
(23, 'XI ANIMASI - B', 'XIANIMASIB', 'XIANIMASIB', 'siswa'),
(24, 'XI KIMIA INDUSTRI - A', 'XIKIMIAINDUSTRIA', 'XIKIMIAINDUSTRIA', 'siswa'),
(25, 'XI KIMIA INDUSTRI - B', 'XIKIMIAINDUSTRIB', 'XIKIMIAINDUSTRIB', 'siswa'),
(26, 'XI KIMIA INDUSTRI - C', 'XIKIMIAINDUSTRIC', 'XIKIMIAINDUSTRIC', 'siswa'),
(27, 'XI TEKNIK PEMESINAN-A', 'XITEKNIKPEMESINANA', 'XITEKNIKPEMESINANA', 'siswa'),
(28, 'XI TEKNIK PEMESINAN-B', 'XITEKNIKPEMESINANB', 'XITEKNIKPEMESINANB', 'siswa'),
(29, 'XI MEKATRONIKA - A', 'XIMEKATRONIKAA', 'XIMEKATRONIKAA', 'siswa'),
(30, 'XI MEKATRONIKA - B', 'XIMEKATRONIKAB', 'XIMEKATRONIKAB', 'siswa'),
(31, 'XI MEKATRONIKA - C', 'XIMEKATRONIKAC', 'XIMEKATRONIKAC', 'siswa'),
(32, 'XI MEKATRONIKA - D', 'XIMEKATRONIKAD', 'XIMEKATRONIKAD', 'siswa'),
(33, 'XII RPL A', 'XIIRPLA', 'XIIRPLA', 'siswa'),
(34, 'XII RPL B', 'XIIRPLB', 'XIIRPLB', 'siswa'),
(35, 'XII DKV - A', 'XIIDKVA', 'XIIDKVA', 'siswa'),
(36, 'XII DKV - B', 'XIIDKVB', 'XIIDKVB', 'siswa'),
(37, 'XII DKV - C', 'XIIDKVC', 'XIIDKVC', 'siswa'),
(38, 'XII ANIMASI - A', 'XIIANIMASIA', 'XIIANIMASIA', 'siswa'),
(39, 'XII ANIMASI - B', 'XIIANIMASIB', 'XIIANIMASIB', 'siswa'),
(40, 'XII KIMIA INDUSTRI - A', 'XIIKIMIAINDUSTRIA', 'XIIKIMIAINDUSTRIA', 'siswa'),
(41, 'XII KIMIA INDUSTRI - B', 'XIIKIMIAINDUSTRIB', 'XIIKIMIAINDUSTRIB', 'siswa'),
(42, 'XII KIMIA INDUSTRI - C', 'XIIKIMIAINDUSTRIC', 'XIIKIMIAINDUSTRIC', 'siswa'),
(43, 'XII TEKNIK PEMESINAN-A', 'XIITEKNIKPEMESINANA', 'XIITEKNIKPEMESINANA', 'siswa'),
(44, 'XII TEKNIK PEMESINAN-B', 'XIITEKNIKPEMESINANB', 'XIITEKNIKPEMESINANB', 'siswa'),
(45, 'XII MEKATRONIKA - A', 'XIIMEKATRONIKAA', 'XIIMEKATRONIKAA', 'siswa'),
(46, 'XII MEKATRONIKA - B', 'XIIMEKATRONIKAB', 'XIIMEKATRONIKAB', 'siswa'),
(47, 'XII MEKATRONIKA - C', 'XIIMEKATRONIKAC', 'XIIMEKATRONIKAC', 'siswa'),
(48, 'XII MEKATRONIKA - D', 'XIIMEKATRONIKAD', 'XIIMEKATRONIKAD', 'siswa'),
(49, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_jam_akhir`
--
ALTER TABLE `tb_jam_akhir`
  ADD PRIMARY KEY (`id_akhir`);

--
-- Indexes for table `tb_jam_awal`
--
ALTER TABLE `tb_jam_awal`
  ADD PRIMARY KEY (`id_awal`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_awal` (`id_awal`),
  ADD KEY `id_akhir` (`id_akhir`),
  ADD KEY `id_kehadiran` (`id_kehadiran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tb_jam_akhir`
--
ALTER TABLE `tb_jam_akhir`
  MODIFY `id_akhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_jam_awal`
--
ALTER TABLE `tb_jam_awal`
  MODIFY `id_awal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD CONSTRAINT `tb_riwayat_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `tb_riwayat_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `tb_riwayat_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `tb_riwayat_ibfk_4` FOREIGN KEY (`id_awal`) REFERENCES `tb_jam_awal` (`id_awal`),
  ADD CONSTRAINT `tb_riwayat_ibfk_5` FOREIGN KEY (`id_akhir`) REFERENCES `tb_jam_akhir` (`id_akhir`),
  ADD CONSTRAINT `tb_riwayat_ibfk_6` FOREIGN KEY (`id_kehadiran`) REFERENCES `kehadiran` (`id_kehadiran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
