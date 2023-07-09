-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 08, 2023 at 10:38 AM
-- Server version: 10.6.7-MariaDB-1:10.6.7+maria~focal
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Administrator Web', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `aktif`) VALUES
(1, 'Biologi', 'Y'),
(2, 'Matematika', 'Y'),
(3, 'Fisika', 'Y'),
(4, 'Kimia', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

DROP TABLE IF EXISTS `materi`;
CREATE TABLE `materi` (
  `id_materi` bigint(20) UNSIGNED NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_path` varchar(255) DEFAULT NULL,
  `aktif` enum('Y','T') DEFAULT 'Y',
  `order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `sub_judul`, `deskripsi`, `gambar`, `gambar_path`, `aktif`, `order`) VALUES
(1, 'Kompetensi & Tujuan Pembelajaran', '<table style=\"border-collapse: collapse; width: 100.022%; height: 56px; border-width: 0px;\" border=\"1\"><colgroup><col style=\"width: 1.32015%;\"><col style=\"width: 1.32015%;\"><col style=\"width: 97.3611%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px; border-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">1</span></td>\r\n<td style=\"height: 18.4px; border-width: 0px;\">.</td>\r\n<td style=\"height: 18.4px; border-width: 0px;\"><span style=\"font-size: 12pt; font-family: \'Times New Roman\'; color: rgb(0, 0, 0);\">Kompetensi Inti (KI)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></td>\r\n<td style=\"border-width: 0px;\">&nbsp;</td>\r\n<td style=\"border-width: 0px;\">\r\n<table style=\"border-collapse: collapse; width: 100.044%; height: 220.8px;\" border=\"0\"><colgroup><col style=\"width: 3.22381%;\"><col style=\"width: 2.07245%;\"><col style=\"width: 94.6419%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">K1</span></td>\r\n<td style=\"height: 18.4px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Menghayati dan mengamalkan ajaran agama yang dianutnya*).</span></td>\r\n</tr>\r\n<tr style=\"height: 55.2px;\">\r\n<td style=\"height: 55.2px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">K2</span></td>\r\n<td style=\"height: 55.2px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 55.2px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (gotong royong, kerjasama, toleran, damai), santun, responsif, dan pro-aktif sebagai bagian dari solusi atasberbagai permasalahan dalam berinteraksi secara efektif dengan lingkungan sosial dan alamserta menempatkan diri sebagai cerminan bangsa dalam pergaulan dunia&rdquo;.</span></td>\r\n</tr>\r\n<tr style=\"height: 92px;\">\r\n<td style=\"height: 92px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">K3</span></td>\r\n<td style=\"height: 92px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 92px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Memahami, menerapkan, dan menganalisis pengetahuan faktual, konseptual, prosedural, dan metakognitif berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya, dan humaniora dengan wawasan kemanusiaan, kebangsaan,kenegaraan, dan peradaban terkait penyebab fenomena dan kejadian, serta menerapkan pengetahuan prosedural pada bidang kajian yang spesifik sesuai dengan bakat dan minatnya untuk memecahkan masalah. </span></td>\r\n</tr>\r\n<tr style=\"height: 55.2px;\">\r\n<td style=\"height: 55.2px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">K4</span></td>\r\n<td style=\"height: 55.2px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 55.2px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Mengolah, menalar, menyaji, dan mencipta dalam ranah konkret dan ranah abstrakterkait dengan pengembangan dari yang dipelajarinya di sekolah secara mandiri sertabertindak secara efektif dan kreatif, dan mampu menggunakan metoda sesuai kaidah keilmuan. </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px; border-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">2</span></td>\r\n<td style=\"height: 18.4px; border-width: 0px;\">.</td>\r\n<td style=\"height: 18.4px; border-width: 0px;\"><span style=\"font-size: 12pt; font-family: \'Times New Roman\'; color: rgb(0, 0, 0);\">Kompetensi Dasar (KD)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></td>\r\n<td style=\"border-width: 0px;\">&nbsp;</td>\r\n<td style=\"border-width: 0px;\">\r\n<table style=\"border-collapse: collapse; width: 99.9986%;\" border=\"0\"><colgroup><col style=\"width: 3.17358%;\"><col style=\"width: 2.38072%;\"><col style=\"width: 94.423%;\"></colgroup>\r\n<tbody>\r\n<tr>\r\n<td><span style=\"color: rgb(0, 0, 0);\">3.7</span></td>\r\n<td><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td><span style=\"color: rgb(0, 0, 0);\">Mengelompokkan jamur berdasarkan ciri-ciri, cara reproduksi, dan mengaitkan peranannya dalam kehidupan sehari-hari </span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"color: rgb(0, 0, 0);\">4.7</span></td>\r\n<td><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td><span style=\"color: rgb(0, 0, 0);\">Menyajikan laporan hasil investigasi tentang keanekaragaman jamur dan perananya dalam kehidupan </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 19.2px;\">\r\n<td style=\"height: 19.2px; border-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">3</span></td>\r\n<td style=\"height: 19.2px; border-width: 0px;\">.</td>\r\n<td style=\"height: 19.2px; border-width: 0px;\"><span style=\"font-size: 12pt; font-family: \'Times New Roman\'; color: rgb(0, 0, 0);\"><span style=\"font-size: 12pt; font-family: Cambria, serif; color: rgb(0, 0, 0);\">Tujuan Pembelajaran</span></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></td>\r\n<td style=\"border-width: 0px;\">&nbsp;</td>\r\n<td style=\"border-width: 0px;\">\r\n<table style=\"border-collapse: collapse; width: 99.9986%; height: 110.4px;\" border=\"0\"><colgroup><col style=\"width: 3.28724%;\"><col style=\"width: 2.38226%;\"><col style=\"width: 94.3078%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">1</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">Menjelaskan ciri-ciri umum Divisio dalam Kingdom Fungi. </span></td>\r\n</tr>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">2</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">Menjelaskan struktur tubuh jamur.</span></td>\r\n</tr>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">3</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">Mengelompokkan jamur berdasarkan ciri-ciri morfologinya.</span></td>\r\n</tr>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">4</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">Mengetahui cara hidup jamur.</span></td>\r\n</tr>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">5</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">Menjelaskan perkembangbiakan jamur.</span></td>\r\n</tr>\r\n<tr style=\"height: 18.4px;\">\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">6</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">:</span></td>\r\n<td style=\"height: 18.4px;\"><span style=\"color: rgb(0, 0, 0);\">Mengetahui peranan jamur dalam kehidupan manusia.</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<span style=\"font-size: 12pt; font-family: \'Times New Roman\'; color: rgb(0, 0, 0);\"><span style=\"font-size: 12pt; font-family: Cambria, serif; color: rgb(0, 0, 0);\"><br></span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, NULL, 'Y', 1),
(2, 'Ciri-ciri & Klasifikasi Jamur', '<ol><li><p style=\"text-align: justify;\"><strong>Pengertian Jamur</strong></p></li></ol><p style=\"padding-left: 40px; text-align: justify;\">Kata jamur berasal dari kata latin yakni fungi. Jamur (fungi) adalah yang sifatnya eukariotik dan tidak berklorofil. jamur (fungi) ini reproduksi dengan secara aseksual yang menghasilkan spora, kuncup, dan fragmentasi. Sedangkan dengan secara seksual dengan zigospora, askospora, dan basidiospora. Jamur (fungi) ini hidupnya ditempat- tempat yang berlembap, air laut, air tawar, ditempat yang asam dan bersimbosis dengan ganggang yang membentuk lumut (lichenes<strong>).</strong></p><ol style=\"text-align: justify;\" start=\"2\"><li><p><strong>Ciri &ndash; ciri Jamur (Fungi)</strong></p></li></ol><p style=\"padding-left: 40px; text-align: justify;\">Fungi (jamur) merupakan organisme eukariot, kebanyakan multiseluler, beberapa uniseluler, tidak berklorofil, dinding selnya mengandung kitin dan glukan. Jamur bersifat heterotrof yaitu sebagai saprofit, parasit, dan hidup bersimbiosis dengan organisme lain. Jamur banyak terdapat dilingkungan, bentuknya macam- macam, ada yang seperti bola, gada, payung, dan sebagainya. Jamur berhabitat ditempat lembab, kurang cahaya, dan mengandung sisa- sisa organik, pada kayu yang lapuk dan tempat buangan sampah<strong>.</strong></p><ol style=\"text-align: justify;\" start=\"3\"><li><p><strong>Struktur Tubuh Jamur</strong></p></li></ol><p style=\"padding-left: 40px; text-align: justify;\">Struktur tubuh jamur te rgantung pada jenisnya. Ada jamur yang uniseluler, misalnya khamir, ada pula jamur yang multiseluler membentuk tubuh buah besar yang ukurannya mencapai satu meter, contohnya jamur kayu. Tubuh jamur tersusun dari komponen dasar yang disebut hifa. Hifa membentuk jaringan yang disebut miselium. Miselium menyusun jalinan-jalinan semu menjadi tubuh buah.</p><p style=\"padding-left: 40px; text-align: justify;\">Hifa adalah struktur menyerupai benang yang tersusun dari dinding berbentuk pipa. Dinding ini menyelubungi membran plasma dan sitoplasma hifa. Sitoplasmanya mengandung organel eukariotik. Kebanyakan hifa dibatasi oleh dinding melintang atau septa. Septa mempunyai pori besar yang cukup untuk dilewati ribosom, mitokondria, dan kadangkala inti sel yang mengalir dari sel ke sel. Akan tetapi, adapula hifa yang tidak bersepta atau hifa senositik. Struktur hifa senositik dihasilkan oleh pembelahan inti sel berkali-kali yang tidak diikuti dengan pembelahan sitoplasma.</p><p style=\"text-align: justify; padding-left: 40px;\">Hifa pada jamur yang bersifat parasit biasanya mengalami modifikasi menjadi haustoria yang merupakan organ penyerap makanan dari substrat; haustoria dapat menembus jaringan substrat. Pada beberapa jamur, dinding hifa mengandung selulosa, tetapi pada umumnya terutama terdiri atas nitrogen organic, yaitu kitin.</p><p style=\"text-align: justify;\">&nbsp;</p>', '', NULL, 'Y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(2) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

DROP TABLE IF EXISTS `tabel_nilai`;
CREATE TABLE `tabel_nilai` (
  `id_nilai` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `benar` int(4) NOT NULL,
  `salah` int(4) NOT NULL,
  `kosong` int(4) NOT NULL,
  `point` int(4) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_user`, `id_kategori`, `benar`, `salah`, `kosong`, `point`, `tanggal`) VALUES
(38, 30, 4, 2, 0, 0, 10, '2017-07-24'),
(39, 30, 3, 0, 2, 0, -1, '2017-07-24'),
(40, 30, 4, 0, 0, 2, -1, '2017-08-01'),
(41, 30, 4, 2, 0, 0, 10, '2017-08-01'),
(42, 31, 4, 1, 0, 0, 10, '2023-06-28'),
(43, 31, 4, 0, 1, 0, -1, '2023-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_soal`
--

DROP TABLE IF EXISTS `tabel_soal`;
CREATE TABLE `tabel_soal` (
  `id_soal` int(4) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `publish` enum('yes','no') NOT NULL,
  `tipe` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_soal`
--

INSERT INTO `tabel_soal` (`id_soal`, `id_kategori`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `publish`, `tipe`) VALUES
(10, 4, 'Apa Nama Burung Yang Terkenal Di Papua', 'Beo', 'Merpati', 'Garuda', 'Cendera Wasih', 'D', 'yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

DROP TABLE IF EXISTS `tabel_user`;
CREATE TABLE `tabel_user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gambar_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `asalsekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `gambar_user`, `username`, `password`, `nisn`, `asalsekolah`, `alamat`) VALUES
(30, 'Aldi', './gambar/user_online.jpg', 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9', '1234', 'SMA N 4 KISARAN', 'Jalan Budi Utomo, Lk.IV'),
(31, 'Ibnu Tuharea', './gambar/user_online.jpg', 'ibent95', '1b8703bf3395138ead0245d5da376a5c', '1234', 'Ambon', 'Ambon');

-- --------------------------------------------------------

--
-- Table structure for table `timers`
--

DROP TABLE IF EXISTS `timers`;
CREATE TABLE `timers` (
  `id_timers` int(5) NOT NULL,
  `timers` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timers`
--

INSERT INTO `timers` (`id_timers`, `timers`) VALUES
(1, 3600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  MODIFY `id_soal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
