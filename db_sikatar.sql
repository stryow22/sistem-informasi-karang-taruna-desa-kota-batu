-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2021 at 11:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sisfordesci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `idaspirasi` int(11) NOT NULL,
  `judulaspirasi` varchar(255) NOT NULL,
  `isiaspirasi` varchar(10000) NOT NULL,
  `slugaspirasi` varchar(255) DEFAULT NULL,
  `namauseraspirasi` varchar(256) NOT NULL,
  `alamataspirasi` varchar(256) NOT NULL,
  `emailuseraspirasi` varchar(256) NOT NULL,
  `kategoriaspirasi` varchar(50) NOT NULL,
  `created_at_aspirasi` datetime DEFAULT NULL,
  `updated_at_aspirasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`idaspirasi`, `judulaspirasi`, `isiaspirasi`, `slugaspirasi`, `namauseraspirasi`, `alamataspirasi`, `emailuseraspirasi`, `kategoriaspirasi`, `created_at_aspirasi`, `updated_at_aspirasi`) VALUES
(8, 'Website Bagus Terus', '<script>alert(\'Selamat datang di duniailkom\')</script>', 'website-bagus-terus', 'Satriyo Witjaksono', 'Muara Tegal', '12193001@bsi.ac.id', '', '2021-04-15 01:14:53', '2021-04-15 01:14:53'),
(9, '<script>alert(\'Selamat datang di duniailkom\')</script>', 'asd', 'alertselamat-datang-di-duniailkom', 'sad', 'asd', '12193001@bsi.ac.id', '', '2021-04-15 01:22:06', '2021-04-15 01:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'regular user'),
(3, 'superadmin', 'Super Sekali');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'sw22', 1, '2021-04-09 03:34:59', 0),
(2, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 03:36:29', 1),
(3, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 03:41:13', 1),
(4, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 03:52:45', 1),
(5, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 04:06:40', 1),
(6, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 04:07:55', 1),
(7, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 04:19:28', 1),
(8, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 04:22:10', 1),
(9, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 04:34:33', 1),
(10, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 04:35:16', 1),
(11, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 04:39:36', 1),
(12, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 05:54:53', 1),
(13, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 05:57:18', 1),
(14, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:12:50', 1),
(15, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:14:53', 1),
(16, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:16:17', 1),
(17, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:17:12', 1),
(18, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 06:17:52', 1),
(19, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:18:45', 1),
(20, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 06:21:04', 1),
(21, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:21:17', 1),
(22, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 06:21:25', 1),
(23, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:21:38', 1),
(24, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 06:25:52', 1),
(25, '::1', 'sw22', NULL, '2021-04-09 07:02:54', 0),
(26, '::1', 'satriyowitjaksono2205@gmail.com', 2, '2021-04-09 07:03:02', 1),
(27, '::1', 'naufal2021@bsi.ac.id', 3, '2021-04-09 07:26:39', 1),
(28, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 07:29:34', 1),
(29, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 08:02:45', 1),
(30, '::1', 'naufal2021@bsi.ac.id', 3, '2021-04-09 08:10:44', 1),
(31, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 10:22:06', 1),
(32, '::1', 'idlzsatriyo2205@gmail.com', 4, '2021-04-09 10:35:02', 1),
(33, '::1', '12193001@bsi.ac.id', 1, '2021-04-09 10:47:05', 1),
(34, '::1', '12193001@bsi.ac.id', 5, '2021-04-09 11:00:19', 1),
(35, '::1', '12193001@bsi.ac.id', 5, '2021-04-09 11:02:25', 1),
(36, '::1', '12193001@bsi.ac.id', 6, '2021-04-09 11:11:08', 1),
(37, '::1', '12193001@bsi.ac.id', 6, '2021-04-09 11:11:32', 1),
(38, '::1', '12193001@bsi.ac.id', 6, '2021-04-12 02:37:03', 1),
(39, '::1', 'satriyowitjaksono2205@gmail.com', 1, '2021-04-12 02:39:34', 1),
(40, '::1', 'naufal2021@bsi.ac.id', 7, '2021-04-12 02:40:19', 1),
(41, '::1', 'naufal2021@bsi.ac.id', 7, '2021-04-12 02:54:59', 1),
(42, '::1', 'satriyowitjaksono2205@gmail.com', 1, '2021-04-12 02:56:05', 1),
(43, '::1', '12193001@bsi.ac.id', 6, '2021-04-12 04:29:56', 1),
(44, '::1', '12193001@bsi.ac.id', 6, '2021-04-13 10:21:55', 1),
(45, '::1', '12193001@bsi.ac.id', 6, '2021-04-13 17:15:01', 1),
(46, '::1', '12193001@bsi.ac.id', 6, '2021-04-13 22:21:22', 1),
(47, '::1', '12193001@bsi.ac.id', 6, '2021-04-14 13:02:06', 1),
(48, '::1', '12193001@bsi.ac.id', 6, '2021-04-14 13:04:00', 1),
(49, '::1', '12193001@bsi.ac.id', 6, '2021-04-14 14:10:07', 1),
(50, '::1', '12193001@bsi.ac.id', 6, '2021-04-14 19:11:25', 1),
(51, '::1', '12193001@bsi.ac.id', 6, '2021-04-14 19:52:01', 1),
(52, '::1', '12193001@bsi.ac.id', 6, '2021-04-15 00:25:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage-all-users'),
(2, 'manage-profile', 'all users');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '12193001@bsi.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36 Edg/89.0.774.75', '2e76eff9275b54bbf599dc96283fb014', '2021-04-12 04:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL,
  `judulberita` varchar(255) NOT NULL,
  `deskripsisingkatberita` varchar(256) NOT NULL,
  `isiberita` varchar(10000) NOT NULL,
  `slugberita` varchar(255) DEFAULT NULL,
  `gambarberita` varchar(255) NOT NULL,
  `created_at_berita` datetime DEFAULT NULL,
  `updated_at_berita` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judulberita`, `deskripsisingkatberita`, `isiberita`, `slugberita`, `gambarberita`, `created_at_berita`, `updated_at_berita`) VALUES
(6, 'Makin Marak', 'sdaawdwadwaddddddddddddddd Bootstrap is the most popular, free, and open-source HTML, CSSBootstrap is the most popular, free, and open-source HTML, CSSBootstrap is the most popular, free, and open-source HTML, CSS', '2', 'makin-marak', '1618337103_1e31bc6ec255f7f983ae.png', '2021-04-13 12:15:33', '2021-04-13 13:05:03'),
(8, 'Info Gempa Terkini: Guncangan Pertama di Bulan Ramadan 2021', 'Badan Meteorologi Klimatologi dan Geofisika atau BMKG merekam gempa pertama di bulan Ramadan tahun ini terjadi di Bulukumba, Sulawesi Selatan. Gempa dicatat terjadi dinihari tadi, pukul 02.08 WITA, Selasa 13 April 2021.', 'TEMPO.CO, Jakarta - Badan Meteorologi Klimatologi dan Geofisika atau BMKG merekam gempa pertama di bulan Ramadan tahun ini terjadi di Bulukumba, Sulawesi Selatan. Gempa dicatat terjadi dinihari tadi, pukul 02.08 WITA, Selasa 13 April 2021.\r\n\r\nGempa terukur berkekuatan 4,3 Magnitudo dan memberi guncangan lemah saja (skala II MMI) di Bulukumba. Menurut BMKG, pusat gempa berada di laut, 60 kilometer timur laut Bulukumba, pada kedalaman 7 kilometer. \r\n\r\nCatatan BMKG juga mengungkap terjadi sejumlah gempa yang bisa dirasakan antara kejadian gempa Malang pada Sabtu-Minggu dan Bulukumba hari ini. Di antaranya adalah dua gempa di Banda, Maluku Tengah, dan dua kali pula di Tanggamus, Lampung.\r\n\r\nDua gempa di Banda terjadi berurutan pada Minggu pukul 12.13 dan 12.14 WIB atau 14.13 dan 14.14 waktu setempat. Kekuatannya 3,3 dan 3,5 M dan memberi guncangan pada skala III MMI. Pusat gempa disebutkan berada di laut pada jarak 10 dan 9 kilometer barat Banda dengan kedalaman sama, 10 kilometer.\r\n\r\nDua gempa di Tanggamus juga berasal dari laut, masing-masing, pada Minggu pukul 17.44 WIB dan Senin pukul 08.52 WIB. Berkekuatan 4,8 M dan berasal dari kedalaman 26 kilometer, guncangan gempa pada Minggu bisa dirasakan pula di Liwa, Limau dan Pematang Sawah.\r\n\r\nSedang gempa Tanggamus pada Senin lebih kuat yakni 5,2 M tapi hiposentrum lebih dalam, 95 kilometer. Guncangannya dirasa di Tanggamus dan Liwa, seluruhnya pada skala yang sama: II MMI.    ', 'info-gempa-terkini-guncangan-pertama-di-bulan-ramadan-2021', '1618337250_e7a1164c26cb40a5ffa5.png', '2021-04-13 13:07:30', '2021-04-13 13:07:30'),
(9, 'Berita Awal', 'Wakil Ketua DPR Azis Syamsuddin mendukung langkah pemerintah menerbitkan Keputusan Presiden Nomor 6 Tahun 2021 tentang pembentukan Satuan Tugas  Penanganan Hak Tagih Negara Dana Bantuan Likuiditas Bank Indonesia.', 'Suara.com - Wakil Ketua DPR Azis Syamsuddin mendukung langkah pemerintah menerbitkan Keputusan Presiden Nomor 6 Tahun 2021 tentang pembentukan Satuan Tugas  Penanganan Hak Tagih Negara Dana Bantuan Likuiditas Bank Indonesia.\r\n\r\n\"Saya mendukung kebijakan Presiden, bahwa ini untuk menagih perjanjian yang sudah ditandatangani untuk penyerahan dana dan aset yang masih belum terselesaikan,\" kata Azis dalam pernyataan pers di Jakarta, Selasa (13/4/2021).\r\n\r\nDia menilai langkah Presiden tersebut menunjukkan pemerintah berkomitmen untuk menyelesaikan kasus BLBI yang sudah cukup lama tidak kunjung selesai.\r\n\r\nAzis berharap satgas tersebut dapat menjalankan tugas dengan optimal untuk mengembalikan dana BLBI dari para obligor.\r\n\r\nBaca Juga:\r\nKepres Tagih Utang BLBI Rp 108 Triliun Bisa Jadi Transaksional Baru\r\n\r\n\"Pemerintah menjelaskan struktur dan mekanisme kerja dari Satgas Penanganan Hak Tagih Negara Dana BLBI, sehingga tujuan dan target pembentukan Satgas dapat dicapai secara maksimal,\" ujarnya.\r\n\r\nAzis meminta satgas penanganan Hak Tagih Negara Dana BLBI itu bersinergi dengan seluruh stakeholder agar dana dan aset negara dapat segera dikembalikan.\r\n\r\nSelain itu menurut dia agar para pelaku yang terlibat kasus BLBI dapat ditindak hukum.\r\n\r\n\"Pemerintah perlu melakukan pengawasan kuat dan evaluasi berkala terhadap kinerja dari satgas tersebut sehingga penyelesaian kasus BLBI dapat diselesaikan sesuai target waktu yang sudah ditentukan,\" katanya.\r\n\r\nAzis menilai satgas dan pemerintah harus melakukan keterbukaan informasi mengenai perkembangan penyelesaian kasus BLBI.\r\n\r\n\r\nBaca Juga:\r\nDPR Minta Pemerintah Pastikan Pekerja Dapat THR Sesuai Aturan\r\n\r\nLangkah itu menurut dia agar publik dapat memantau dan mengawasi proses penyelesaian kasus BLBI, pemerintah untuk berkomitmen menyelesaikan kasus BLBI tersebut dengan tuntas, tidak hanya sekedar retorika saja.', 'berita-awal', '1618353665_2b0fe6abed3114411f4c.png', '2021-04-13 17:41:05', '2021-04-13 17:41:05'),
(10, 'Hasil Liga Champions: Kalah, PSG dan Chelsea Tetap Lolos ke Semifinal', 'Dua pertandingan Liga Champions 2020/21 leg kedua babak perempat final tersaji pada Rabu dinihari WIB, 14 April 2021. Paris Saint-Germain (PSG) dan Chelsea sama-sama kalah, tapi lolos ke semifinal berkat keunggulan agregat.', 'TEMPO.CO, Jakarta - Dua pertandingan Liga Champions 2020/21 leg kedua babak perempat final tersaji pada Rabu dinihari WIB, 14 April 2021. Paris Saint-Germain (PSG) dan Chelsea sama-sama kalah, tapi lolos ke semifinal berkat keunggulan agregat.\r\n\r\nInilah hasil selengkapnya:\r\n\r\nPSG vs Bayern Munchen 0-1\r\n\r\nBayern Munchen berhasil memebalas kekelahan di kandang PSG, Parc des Princes, Paris. Mereka menang 1-0 berkat gol Eric Maxim Choupo-Moting pada menit ke-40.\r\n\r\nSayang hasil itu tak cukup buat meloloskan tim juara bertahan itu. Skor agregat menjadi 3-3 dan PSG lolos berkat keunggulan gol tandang.\r\n\r\nDi semifinal, PSG akan menantikan pemenang laga Manchester City vs Borussia Dortmund, yang akan bermain Kamis dinihari nanti.\r\n\r\nChelsea vs FC Porto 0-1\r\n\r\nFC Porto berhasil mengalahkan Chelsea 1-0 dalam laga di Stadion Ramon Sanchez Pizjuan, Sevilla, Spanyol. Mereka menang berkat gol Mehdi Taremi pada injury time.\r\n\r\nNamun, hasil itu tak mampu meloloskan klub asal Portugal itu. Skor agregat menjadi 2-1 dan Chelsea berhak lolos ke babak semifinal.\r\n\r\nDi babak empat besar, Chelsea akan menantikan pemenang laga Real Madrid vs Liverpool, yang akan bermain Kamis dinihari nanti.\r\n\r\nSelanjutnya: hasil selengkapnya', 'hasil-liga-champions-kalah-psg-dan-chelsea-tetap-lolos-ke-semifinal', '1618354401_4d8599149743c957cd38.png', '2021-04-13 17:52:14', '2021-04-14 12:53:41'),
(11, 'Reshuffle, Ngabalin Sebut Jokowi Akan Lantik Mendikbud-Ristek', ' Tenaga Ahli Utama Kantor Staf Presiden (KSP) Ali Mochtar Ngabalin menyebut Presiden Joko Widodo akan melantik menteri baru di posisi Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi (Mendikbud-Ristek) pada kocok ulang atau reshuffle kabinet.', 'Jakarta, CNN Indonesia -- Tenaga Ahli Utama Kantor Staf Presiden (KSP) Ali Mochtar Ngabalin menyebut Presiden Joko Widodo akan melantik menteri baru di posisi Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi (Mendikbud-Ristek) pada kocok ulang atau reshuffle kabinet.\r\nNgabalin juga menyampaikan akan ada menteri baru untuk jabatan Menteri Investasi. Menurutnya, menteri itu akan merangkap jabatan di Badan Koordinasi Penanaman Modal (BKPM).\r\n\r\nLihat juga: Ngabalin Pastikan Jokowi Reshuffle Kabinet Pekan Ini\r\n\"Presiden Insyaallah akan melantik menteri baru Menteri Dikbud/Ristek, Menteri Investasi/Kepala BKPM,\" kata Ngabalin lewat akun Twitter @AliNgabalinNew, Rabu (14/4). Ngabalin telah mengizinkan cuitannya dikutip CNNIndonesia.com.\r\n\r\n\r\nNgabalin menjelaskan pelantikan dua nama menteri baru itu menyusul perubahan kementerian. Perubahan nomenklatur kementerian itu telah disepakati pemerintah dan DPR RI pekan lalu.\r\n\r\nMeski begitu, Ngabalin mengaku belum tahu apakah dua menteri yang menjabat saat ini, Nadiem Makarim dan Bahlil Lahadalia terimbas reshuffle kabinet. Dia mengatakan belum tahu siapa nama menteri yang akan dilantik dalam dua jabatan baru tersebut.\r\n\r\n\"Nomenklatur kementerian itu Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi, orangnya kan kita belum tahu. Tapi pasti Presiden melantik Menteri Investasi/Kepala BKPM. Siapa orangnya? kita belum tahu,\" ucap Ngabalin saat dihubungi CNNIndonesia.com.\r\n\r\n\r\n\r\nLihat juga: Sekjen NasDem: Reshuffle Kabinet Lebih Cepat Lebih Baik\r\nNgabalin menyampaikan reshuffle kabinet kemungkinan digelar pekan ini. Akan tetapi, ia tak tahu detail perombakan kabinet yang direncanakan Jokowi.\r\n\r\n\"Kalau pun ada menteri lain atau ada yang digeser sana, geser sini, menurut pasal 17 itu UUD Negara Republik Indonesia Tabun 1945, beliau memiliki kewenangan yang namanya hak prerogatif,\" ucapnya.\r\n\r\nSebelumnya, kabar reshuffle kabinet muncul ke publik setelah ada perubahan nomenklatur sejumlah kementerian. Perubahan itu berdasarkan persetujuan pemerintah dan DPR RI yang disahkan pada Jumat (9/4).\r\n\r\nDalam kesepakatan itu, Kemenristek akan dilebur ke dalam Kemendikbud. Selain itu, ada pembentukan lembaga negara baru bernama Kementerian Investasi.\r\n\r\nPara pimpinan partai politik koalisi pemerintahan menyerahkan reshuffle sepenuhnya pada Jokowi. Namun, Sekjen Partai Nasdem Johnny G. Plate mendorong reshuffle dilakukan pekan ini.\r\n\r\nLihat juga: Parpol Koalisi soal Reshuffle Kabinet: Hak Prerogatif Jokowi\r\n\"Tentu perlu dilakukan reshuffle kabinet, baik terbatas atau bahkan bisa lebih luas. Untuk kepastian jalannya pemerintahan, maka lebih cepat akan lebih baik,\" tulis Johnny dalan pesan singkat kepada CNNIndonesia.com, Selasa (13/4).\r\n\r\n(dhf/pmg)\r\n', 'reshuffle-ngabalin-sebut-jokowi-akan-lantik-mendikbud-ristek', '1618372288_74a487bc82133b5eda0f.jpg', '2021-04-13 22:51:28', '2021-04-13 22:51:28'),
(12, 'Jejak Vaksin Nusantara Terawan: Dijegal BPOM, Didukung DPR', 'Vaksin Nusantara Terawan Agus Putranto kembali mengemuka ke publik. Vaksin virus corona yang diklaim sebagai buatan anak negeri itu kini mulai digunakan relawan, termasuk politikus senior Partai Golkar Aburizal Bakrie.\r\nPengenalan vaksin berbasis sel dendr', 'Jakarta, CNN Indonesia -- Vaksin Nusantara Terawan Agus Putranto kembali mengemuka ke publik. Vaksin virus corona yang diklaim sebagai buatan anak negeri itu kini mulai digunakan relawan, termasuk politikus senior Partai Golkar Aburizal Bakrie.\r\nPengenalan vaksin berbasis sel dendritik itu dimulai saat Terawan bersama Komisi IX DPR RI menyambangi RSUP dr Kariadi Semarang untuk meninjau persiapan uji klinis II pada 16 Februari 2021.\r\n\r\nLihat juga: Aburizal Bakrie Disuntik Vaksin Nusantara: Saya Pertama Kali\r\nNamun demikian, dalam perjalanan untuk mendapatkan Persetujuan Pelaksanaan Uji Klinik (PPUK) uji klinis fase II tak berjalan mulus. Badan Pengawas Obat dan Makanan (BPOM) tak langsung memberi restu. BPOM menilai dokumen Cara Pembuatan Obat yang Baik (CPOB) hingga hasil penelitian uji klinis fase I vaksin nusantara belum sesuai kaidah penelitian.\r\n\r\n\r\nKeputusan BPOM itu lantas sempat menimbulkan kontroversi antara BPOM dan Komisi IX DPR RI. Mayoritas para anggota legislatif itu menuding BPOM seolah berusaha menghalangi vaksin karya anak bangsa hingga dinilai tak lagi independen.\r\n\r\nCNNIndonesia.com merangkum perjalanan dan jejak kontroversi vaksin nusantara sebagai berikut:\r\n\r\nAwal Kemunculan\r\nBadan Litbang Kesehatan bersama PT Rama Emerald Multi Sukses (Rama Pharma) menandatangani kerja sama uji klinik vaksin sel dendritik SARS-CoV-2 di Kantor Gedung Kementerian Kesehatan pada 22 Oktober 2020.\r\n\r\nPenandatanganan kala itu dilakukan oleh Kepala Badan Litbang Kesehatan Slamet dengan General Manager Rama Pharma Sim Eng Siu. Terawan yang kala itu masih menjabat sebagai menteri kesehatan juga ikut hadir dalam agenda tersebut.\r\n\r\nPenandatangan itu menyusul penetapan Tim Penelitian Uji Klinis Vaksin Sel Dendritik oleh Kemenkes KMK No. HK.01.07/MENKES/2646/2020 pada 12 Oktober 2020.\r\n\r\nTerawan mengatakan kerja sama itu dilakukan karena penularan virus corona terus bertambah di Indonesia. Sementara Indonesia belum memiliki kemandirian vaksin lewat penciptaan vaksin buatan anak negeri.\r\n\r\nPenamaan vaksin Nusantara juga baru diketahui pada Februari 2021. Sebelumnya, dalam rilis Rama Pharma, nama vaksin itu akan dinamai \'Joglosemar\', diambil dari kata \'Joglo\' rumah tradisional masyarakat Jawa dan \'Semar\' tokoh pewayangan Jawa.\r\n\r\nLihat juga: Anggota DPR Terima Vaksin Nusantara, Sampel Darah Mulai Dicek\r\nUji Klinis Fase I\r\nTerawan kala itu menjelaskan rangkaian uji klinis fase I itu dimulai dengan penyuntikan uji klinis fase pertama hingga 11 Januari 2021. Selanjutnya 3 Februari 2021 dilakukan monitoring dan evaluasi.\r\n\r\nUji klinis vaksin itu merupakan kerja sama antara Rama Pharma bersama AIVITA Biomedical asal Amerika Serikat, Universitas Diponegoro (Undip), dan RSUP dr. Kariadi Semarang.\r\n\r\n\"Uji klinis I yang selesai dengan hasil baik, imunitas baik dan hasil safety. Kan, uji klinis I mengontrol safety dari pasien. Dari 30 pasien imunogenitasnya baik,\" kata Terawan seperti dikutip dari detikcom, Selasa (17/2).\r\n\r\nSesuai rencana, jika vaksin ini disetujui, maka untuk selanjutnya akan membutuhkan 180 relawan untuk uji klinis II. Sedangkan uji klinis tahap III dibutuhkan 1.600 relawan.\r\n\r\nCara Kerja Vaksin Dendritik\r\nVaksin Nusantara diperkenalkan dengan metode sel dendritik. Metode ini cukup baru digunakan untuk vaksin Covid-19, sebab pengujian vaksin lain kebanyakan menggunakan metode virus inactivated, mRNA, protein rekombinan, hingga adenovirus.\r\n\r\nVaksin ini nantinya akan membentuk kekebalan seluler pada sel limfosit T. Tim peneliti menjelaskan, cara kerja vaksin ini dibangun dari sel dendritik autolog atau komponen dari sel darah putih, yang kemudian dipaparkan dengan antigen dari Sars-Cov-2.\r\n\r\nNantinya, setiap orang akan diambil sampel darahnya untuk kemudian dipaparkan dengan kit vaksin yang dibentuk dari sel dendritik. Cara kerjanya, sel yang telah mengenal antigen akan diinkubasi selama 3-7 hari.\r\n\r\nHasilnya kemudian akan diinjeksikan ke dalam tubuh kembali. Di dalam tubuh, sel dendritik tersebut akan memicu sel-sel imun lain untuk membentuk sistem pertahanan memori terhadap Sars Cov-2.\r\n\r\nLihat juga: IDI Ragu Antibodi Vaksin Nusantara Terawan Tahan Seumur Hidup\r\nKlaim Antibodi Seumur Hidup\r\nAnggota Tim Uji Klinis Vaksin Nusantara Jajang Edi Prayitno mengklaim vaksin Nusantara bisa menciptakan antibodi atau daya kekebalan tubuh yang mampu bertahan hingga seumur hidup.\r\n\r\nSelain itu, Jajang menjelaskan salah satu inisiatif pembuatan vaksin ini adalah untuk menyasar golongan warga yang memiliki komorbid alias penyakit penyerta. Selain itu vaksin nusantara diproyeksikan pasti aman untuk segala usia.\r\n\r\nTak hanya itu, Jajang menyebut vaksin Nusantara yang berbasis sel dendritik tidak akan mengalami penurunan fungsi manakala virus mengalami evolusi atau mutasi. Dengan temuan itu, Jajang menilai vaksin Nusantara dapat digunakan bilamana muncul epidemi hingga pandemi baru di kemudian hari.\r\n\r\n\"Kita satu-satunya di dunia sebenarnya, kalau ini nanti kita bisa berhasil dalam uji fase pertama sampai ketiga dan sampai produksi. Berarti kita termasuk dalam tujuh negara di dunia yang punya kedaulatan pembuatan vaksin,\" kata Jajang, Rabu (17/2).\r\n\r\nKritik Transparansi Data\r\nEpidemiolog Universitas Airlangga Windhu Purnomo mengatakan seharusnya tim uji klinis secara gamblang melaporkan dan memublikasikan sedari pra klinik hingga perampungan uji klinis fase I.\r\n\r\nApalagi setelah tim vaksin Nusantara mengklaim daya tahan antibodi mampu bertahan seumur hidup. Maka dengan transparansi, Windhu menilai upaya itu akan mengurangi pertanyaan dan keraguan publik terhadap hasil keamanan vaksin karya anak bangsa tersebut.\r\n\r\nIa juga menyoroti model vaksin Nusantara yang dinilai tidak cocok untuk pelaksanaan vaksinasi Covid-19 massal. Metode sel dendritik yang bersifat individual itu menurutnya bakal memperlambat proses vaksinasi.\r\n\r\nLihat juga: Ahli Pertanyakan Terawan soal Data Vaksin Nusantara\r\nKritik juga datang dari Ketua Satgas Covid-19 Ikatan Dokter Indonesia (IDI) Zubairi Djoerban. Ia meminta tim uji klinis vaksin Nusantara tak mengeluarkan klaim sepihak sebelum keseluruhan uji klinis selesai. Menurutnya, semua pihak harus bersabar menunggu hasil dari uji klinis I, II, hingga III.\r\n\r\nZubairi menyebut sejauh ini belum ada satupun pengembang vaksin virus corona di dunia yang secara gamblang sudah berani membuktikan daya jangkauan dan ketahanan antibodi vaksin usai disuntikkan ke tubuh manusia.', 'jejak-vaksin-nusantara-terawan-dijegal-bpom-didukung-dpr', '1618372598_d9e38bb68864988bf536.jpg', '2021-04-13 22:56:38', '2021-04-14 20:27:34'),
(20, 'BUMDes jadi Motor Penggerak Ekonomi Desa', 'Untuk menjalankan hal itu, diperlukan peran Badan Usaha Milik Desa (BUMDes) di desa – desa.', 'Liputan6.com, Jakarta Pandemi membuat semua sektor harus berjalan pelan. Alhasil, banyak bisnis dan usaha harus gulung tikar karena merugi. Melihat hal itu, pemerintah mengimbau usaha mikro, kecil, dan menengah (UMKM) untuk terjun ke dunia online. Dengan begitu, roda perekonomian bisa berjalan dengan stabil.\r\n\r\nUntuk menjalankan hal itu, diperlukan peran Badan Usaha Milik Desa (BUMDes) di desa – desa.\r\n\r\nBACA JUGA\r\nDukung Program Pemerintah, Swasta Komitmen Hemat Air hingga 35 Persen\r\nMelihat hal itu, PT Bank Rakyat Indonesia (Persero) konsisten untuk mendorong sektor usaha mikro, kecil, dan menengah (UMKM) naik kelas, merangkul pelaku UMKM di Desa, dan menjadikan sentra produksi nasional.\r\n\r\nProgram itu adalah Desa BRIlian. Program tersebut memberikan kesempatan kepada desa-desa di Indonesia untuk menjadi percontohan karena bisa dianggap tanggap, tangguh, dan selalu berinovasi.\r\n\r\nSetidaknya terdapat lebih dari 500 desa yang telah diseleksi oleh Bank BRI bersama kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi (Kemendesa). Pada tahun 2020, dari seleksi itu, terdapat 125 desa yang memenuhi kriteria ikut pelatihan dan peningkatan kapasitas Desa.\r\n\r\nPada program tersebut BRI melakukan pendampingan, pelatihan, dan mengenalkan literasi keuangan digital. Bicara pemberdayaan Desa, BRI mengembangkan ekosistem desa yang dibangun melalui 4 pilar. Mulai dari perangkat desa, Badan Usaha Milik Desa (BUMdes(, UMKM desa dan pasar.\r\n\r\nUntuk BUMDES, pilar pengembangan ekonomi desa idealnya BUMDes dapat menjadi pusat produksi dan distribusi ekonomi di desa.  Maka dari itu, melalui pengembangan BUMDES, akan menjadi wadah bagi UMKM untuk menjadi social enterprise dan membangkitkan UMKM dan usaha kecil di desa.\r\n\r\nJadi, bisa dibilang BUMDES bakal melahirkan UMKM yang produktif, dan mampu membuka lapangan kerja bagi warga desa. Selain itu, dengan mengembangkan BUMDes, BRI mengakuisisi BUMDes melalui agen branchless banking, atau bisa dikenal dengan Agen BRILink.\r\n\r\nAdanya Desa BRILian mendukung pembangunan berkelanjutan di desa dengan mengandalkan BUMDes sebagai penggerak utamanya. Melalui pendampingan dan kolaborasi yang dilakukan, diharapkan BUMDes dan masyarakat desa akan semakin mudah dalam mengakses layanan keuangan.\r\n\r\n \r\n\r\n(*)', 'bumdes-jadi-motor-penggerak-ekonomi-desa', '1618375472_d01c487f18eea5620545.jpg', '2021-04-14 11:44:32', '2021-04-14 11:44:32'),
(21, 'Test Berita Gambar Default', 'Test Berita Gambar Default', 'Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default \r\n\r\nTest Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default \r\n\r\nTest Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default \r\n\r\nTest Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default \r\n\r\nTest Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default Test Berita Gambar Default ', 'test-berita-gambar-default', 'default.png', '2021-04-14 12:59:05', '2021-04-14 12:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `idgalery` int(11) NOT NULL,
  `judulgalery` varchar(255) NOT NULL,
  `sluggalery` varchar(255) DEFAULT NULL,
  `gambargalery` varchar(255) DEFAULT NULL,
  `created_at_galery` datetime DEFAULT NULL,
  `updated_at_galery` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`idgalery`, `judulgalery`, `sluggalery`, `gambargalery`, `created_at_galery`, `updated_at_galery`) VALUES
(68, 'Peta Desa Kota Batu', 'peta-desa-kota-batu', '1618380266_f8708f5997e79a7fc547.jpg', '2021-04-14 13:04:26', '2021-04-14 13:04:26'),
(69, 'Logo Kabupaten Bogor', 'logo-kabupaten-bogor', 'default.png', '2021-04-14 13:04:40', '2021-04-14 13:04:40'),
(70, 'Kantor Desa Kota Batu', 'kantor-desa-kota-batu', '1618380306_207bc8479f7e02a5c2dc.jpg', '2021-04-14 13:05:06', '2021-04-14 13:05:06'),
(72, 'Pengabdian Masyarakat Di Desa Kota Batu', 'pengabdian-masyarakat-di-desa-kota-batu', '1618380353_feb13276f274cdbf085b.jpg', '2021-04-14 13:05:53', '2021-04-14 13:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1617956146, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idpengumuman` int(11) NOT NULL,
  `judulpengumuman` varchar(255) NOT NULL,
  `isipengumuman` varchar(256) NOT NULL,
  `slugpengumuman` varchar(255) DEFAULT NULL,
  `created_at_pengumuman` datetime DEFAULT NULL,
  `updated_at_pengumuman` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`idpengumuman`, `judulpengumuman`, `isipengumuman`, `slugpengumuman`, `created_at_pengumuman`, `updated_at_pengumuman`) VALUES
(10, 'Pengumuman April, 6 2021', 'JL. MELATI KOMPLEK PASPAMPRES RT. 002/009 KOTA BATU CIOMAS BOGOR KODEPOS 16610 KECAMATAN CIOMAS KABUPATEN BOGOR', 'pengumuman-april-6-2021', '2021-04-06 06:46:55', '2021-04-15 00:38:08'),
(11, 'SBMPTN 2021', 'Pelaksanaan UTBK diselenggarakan sebanyak dua gelombang yakni gelombang satu pada 12 April hingga 18 April 2021 dan gelombang dua pada 26 April hingga 2 Mei 2021. Pengumuman hasil seleksi jalur SBMPTN pada 14 Juni 2021.', 'sbmptn-2021', '2021-04-14 20:31:13', '2021-04-14 20:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'profile.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '12193001@bsi.ac.id', 'stryow220500', NULL, 'profile.svg', '$2y$10$ZvVdy6CmcEYsIt6mLx3O.eQzxhT5.LsPPOy9f0s6cFYXqufnZLzH.', NULL, '2021-04-12 04:29:50', NULL, NULL, NULL, NULL, 1, 0, '2021-04-09 11:06:56', '2021-04-12 04:29:50', NULL),
(7, 'naufal2021@bsi.ac.id', 'gogopal', NULL, 'profile.svg', '$2y$10$4Cac4J0BqO6TvlAF2kwm9.4tK2lFXRa0f/J8S0tF/hfspsfFgDDTy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-12 02:40:14', '2021-04-12 02:40:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`idaspirasi`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idgalery`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`idpengumuman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `idaspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `idgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idpengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
