-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2024 pada 08.42
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin EBOOK, dapat melakukan CRUD pada buku, user, dan penulis'),
(2, 'user', 'User biasa, hanya dapat melihat dan men download buku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(9, '::1', 'jamal@gmail.com', 3, '2024-10-19 01:38:41', 1),
(10, '::1', 'dummy@gmail.com', 4, '2024-10-19 01:57:49', 1),
(11, '::1', 'dummy', NULL, '2024-10-19 02:08:38', 0),
(12, '::1', 'admindummy@gmail.com', 5, '2024-10-19 02:09:31', 1),
(13, '::1', 'admindummy@gmail.com', 5, '2024-10-19 03:30:09', 1),
(14, '::1', 'dummy', NULL, '2024-10-19 03:33:33', 0),
(15, '::1', 'user@gmail.com', 6, '2024-10-19 03:35:52', 1),
(16, '::1', 'dummy', NULL, '2024-10-19 09:27:19', 0),
(17, '::1', 'dummy12', NULL, '2024-10-19 09:27:27', 0),
(18, '::1', 'admindummy@gmail.com', 5, '2024-10-19 09:27:42', 1),
(19, '::1', 'dummy12', NULL, '2024-10-19 13:40:40', 0),
(20, '::1', 'admindummy@gmail.com', 5, '2024-10-19 13:41:12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-penulis', 'dapat melakukan CRUD pada penulis\r\n'),
(2, 'manage-user', 'dapat melakukan CRUD pada user'),
(3, 'manage-profile', 'dapat melakukan edit profile'),
(4, 'manage-ebook', 'dapat melakukan CRUD pada ebook');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) DEFAULT NULL,
  `halaman` int(11) UNSIGNED DEFAULT NULL,
  `bahasa` varchar(255) DEFAULT NULL,
  `sinopsis` varchar(2000) NOT NULL,
  `viewers` int(11) NOT NULL DEFAULT 0,
  `sampul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `badge` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id`, `judul`, `slug`, `kategori`, `tahun_terbit`, `halaman`, `bahasa`, `sinopsis`, `viewers`, `sampul`, `file`, `badge`, `created_at`, `updated_at`) VALUES
(1, 'Kumpulan Eksperimen Sains', 'kumpulan_eksperimen_sains', 'Sains', '2021', 216, 'Bahasa Indonesia', 'Pembelajaran eksperimen sains khususnya bagi siswa SD/MI dapat menarik apabila semua elemen pembelajaran  mendukung. Hadirnya buku ini diharapkan dapat mendukung dan memaksimalkan media pembelajaran khususnya bagi mahasiswa PGMI dan mahasiswa IAIN Metro', 6, '1638335971_f37b254ae82e8079a81c.png', '1638335971_9eb1e00081315d3cc4e3.pdf', 'badge-dark', '2024-10-19 02:06:31', '2024-10-19 02:06:31'),
(2, 'Physical Science with Earth Science', 'physical_science_with_earth_science', 'Sains', '2008', 334, 'English', 'Douglas Fisher, Ph.D., is a Professor in the Department of Teacher  Education at San Diego State University. He is the recipient of an  International Reading Association Celebrate Literacy Award as well  as a Christa McAuliffe award for Excellence in Teacher Education.', 1, '1638350340_9d5277cf2c4df7aee406.png', '1638350340_030069b2b92b8e3774aa.pdf', 'badge-dark', '2021-12-01 16:19:00', '2021-12-01 16:19:04'),
(3, 'ENCYCLOPEDIA OF Mathematics', 'encyclopedia_of_mathematics', 'Sains', '2010', 577, 'English', 'Mathematics is often presented as a large collection of disparate facts to be absorbed (memorized!) and used only with very specific applications in mind. Yet the development of mathematics has been a journey that has engaged the human mind and spirit for thousands of years, offering joy, play, and creative invention.', 1, '1638350438_c5c61fda8d7134f282f7.png', '1638350438_63527d9e34640a7522df.pdf', 'badge-dark', '2021-12-01 16:20:38', '2021-12-01 17:37:59'),
(4, 'HACKING Beginner to Expert Guide', 'hacking_beginner_to_expert_guide', 'Teknologi', '2016', 93, 'English', 'This book will teach you how you can protect yourself from most common hacking attacks -- by knowing how hacking actually works! After all, in order to prevent your system from being compromised, you need to stay a step ahead of any criminal hacker. You can do that by learning how to hack and how to do a counter-hack', 1, '1638350574_3c66abdb084c588e4412.png', '1638350574_0a3c9619b697903ef631.pdf', 'badge-info', '2021-12-01 16:22:54', '2021-12-01 16:23:00'),
(5, 'Python Programming: An Introduction to Computer Science', 'python_programming_an_introduction_to_computer_science', 'Teknologi', '2012', 261, 'English', 'Almost everyone has used a computer at one time or another.Perhaps you have played computer games or used a computer to write a paper or balance your checkbook. Computers are used to predict the weather, design airplanes, make movies, run businesses, perform financial transactions, and control factories.', 1, '1638350746_59801b6ce46263ce5889.png', '1638350746_657dff3f844d5f5330c7.pdf', 'badge-info', '2021-12-01 16:25:46', '2021-12-01 16:25:50'),
(6, 'Information Technology', 'information_technology', 'Teknologi', '2012', 673, 'English', 'Although project management has been an established field for many years, managing information technology requires ideas and information that go beyond standard project management.', 5, '1638355011_3978871aff41323efd9c.png', '1638355011_991ef4d99768be601275.pdf', 'badge-info', '2024-10-19 03:35:56', '2024-10-19 03:35:56'),
(7, 'Oligarki', 'oligarki', 'Sosial', '2011', 505, 'Bahasa Indonesia', 'Banyak orang berbicara tentang demokrasi Indonesia yang disfungsional. Mengupas secara kritis problematik yang boleh dikatakan bersifat universal itu, Jeffrey Winters memaparkan adanya kerancuan konseptual tentang oligarki. Baginya, demokrasi dan oligarki tidak saling meniadakan, tapi justru dapat berkohabitasi seperti yang berlangsung di negeri kita sekarang. Karya ini wajib dibaca oleh mereka yang mendambakan perubahan mendasar di Indonesia', 9, '1638356257_7d8939aa60a2591cf357.png', '1638355486_d93687a7eba4b10b3fe4.pdf', 'badge-warning', '2024-10-19 02:06:23', '2024-10-19 02:06:23'),
(8, 'The Social Animal', 'the_social_animal', 'Sosial', '2007', 530, 'English', 'The purpose of this volume is unashamedly (but with some trepidation) to spell out the relevance that sociopsychological research might have for some of the problems besetting contemporary society. Most of the data discussed in this volume are based on experiments; most of the illustrations and examples, however, are derived from current social problems—including prejudice, propaganda, war, alienation, aggression, unrest, and politic ', 3, '1638356403_40d1eb393a1246440eb9.png', '1638356403_6c6ab4a96bf4166636f7.pdf', 'badge-warning', '2024-10-19 02:06:39', '2024-10-19 02:06:39'),
(9, 'Hukum Agraria dan Masyarakat Indonesia', 'hukum_agraria_dan_masyarakat_indonesia', 'Sosial', '2010', 418, 'Bahasa Indonesia ', 'Undang-Undang Pokok Agraria No. 5 tahun 1960 yang menggantikan Agrarische Wet 1870 telah berusia setengah abad. Situasi dan  kondisi ketika Undang Undang Pokok Agraria itu dilahirkan berlainan dengan keadaan sekarang. Jumlah penduduk Indonesia yang pada waktu itu baru sekitar 60 juta jiwa sekarang telah menjadi 220 juta jiwa, sementara tanah tidak bertambah luasnya.', 1, '1638356511_20c84bf86d7310a47713.png', '1638356511_8bfd8ada11d0b54770b0.pdf', 'badge-warning', '2021-12-01 18:01:51', '2021-12-01 18:02:02'),
(10, 'Climate Change and Migration', 'climate_change_and_migration', 'Lingkungan', '2014', 287, 'English', 'Do households living in climate-affected areas in the Middle East and North Africa (MENA) region believe that changes in climate patterns and their environment are taking place? Have households been affected by extreme weather events, and in that case to what extent and which events have had the largest impact? ', 1, '1638356753_fbaae28f77b801e56eb2.png', '1638356753_6c9625ab892f4e32f1f6.pdf', 'badge-success', '2021-12-01 18:05:53', '2021-12-01 18:06:02'),
(11, 'Collapse: Runtuhnya Peradaban-Peradaban Dunia', 'collapse_runtuhnya_peradaban-peradaban_dunia', 'Lingkungan', '2014', 784, 'Bahasa Indonesia', 'Beberapa musim panas lalu saya mengunjungi dua peternakan  sapi, Peternakan Huls dan Peternakan Gardar, yang meskipun  terpisah ribuan mil jauhnya, tetap sangat mirip dalam hal kekuatan dan kerapuhannya. Keduanya merupakan peternakan paling besar, paling makmur, berteknologi paling maju di daerah masing-masing.', 2, '1638356840_c2da3a0eb865172458c7.png', '1638356840_0a821484c7d91ad2a7c3.pdf', 'badge-success', '2021-12-01 18:07:20', '2021-12-01 18:10:06'),
(12, 'Essentials of Ecology', 'essentials_of_ecology', 'Lingkungan', '2021', 383, 'English', 'Welcome to environmental science—an interdiscipliary study of how the earth works, how we interact with the earth, and how we can deal with the environmental problems we face. Because environmental issues affect every part of your life, the concepts, information, and issues discussed in this book and the course you are taking will be useful to you now and throughout your life', 0, '1638356958_ee09ce83da817324a3bc.png', '1638356959_4153263f837f3fe6fe31.pdf', 'badge-success', '2021-12-01 18:09:19', '2021-12-01 18:09:19'),
(13, 'Drawing Cartoons & Comics For Dummies', 'drawing_cartoons_comics_for_dummies', 'Kesenian', '2009', 363, 'English', 'This book is dedicated to all those individuals who love to draw and have grown up (and are still growing up) with a passion for drawing cartoons. Thank you to all the cartoonists who inspired me as a kid with all the wonderful and fantastic art that made me', 1, '1638357164_18f2cd373ef2de332134.png', '1638357164_fac9e05f303315fe6871.pdf', 'badge-primary', '2021-12-01 18:12:44', '2021-12-01 18:12:49'),
(14, 'Peta Kesenian dan Budaya Bali', 'peta_kesenian_dan_budaya_bali', 'Kesenian', '2021', 164, 'Bahasa Indonesia', 'Kami sangat mengapresiasi karya buku ini, karena memperoleh momentum yang tepat dan reflektif tentang linkage antara modal dasar kebudayaan dengan Pesta Kesenian Bali, Bali Mahalango dan Visi Bali Mandara dalam memajukan Bali “The Island of Art”. Kini dan ke depan, paradigma yang mengusung keseimbangan dalam kemajuan Ekonomi, Teknologi, Ekologi, Edukasi dan Kebudayaan makin memperoleh aksentuasi dan apresiasi, karena makin mampu memberi  makna bagi kemanusiaan, kehidupan danpenghidupan berkelanjutan', 3, '1638357285_e3a63eb88ea728e45c41.png', '1638357267_867fd0050d5fcfe92382.pdf', 'badge-primary', '2024-10-19 03:36:47', '2024-10-19 03:36:47'),
(15, 'Kesenian Glipang Lumajang', 'kesenian_glipang_lumajang', 'Kesenian', '2015', 143, 'Bahasa Indonesia', 'Buku tentang “Kesenian Glipang Lumajang (Bentuk Pertunjukan dan Eksistensi Grup Bintang Budaya), tulisan Th. Esti Wuryansaridan Ernawati Purwaningsih menguraikan tentang bagaimana sebuah kesenian tradisi masih bertahan di tengah gempuran budaya global yang sedang melanda saat ini. Kesenian Glipang yang menjadi kekhasan Kabupaten Lumajang menjadi bukti bahwa seni tradisi masih memiliki penonton dan penggemarnya.', 1, '1638357398_5b6759094597b36e1fc7.png', '1638357398_c28d1809ed7152f8beea.pdf', 'badge-primary', '2021-12-01 18:16:38', '2021-12-01 18:16:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook_has_penulis`
--

CREATE TABLE `ebook_has_penulis` (
  `id_buku` int(11) UNSIGNED NOT NULL,
  `id_penulis` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `ebook_has_penulis`
--

INSERT INTO `ebook_has_penulis` (`id_buku`, `id_penulis`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-11-23-074549', 'App\\Database\\Migrations\\CreateEbook', 'default', 'App', 1729272593, 1),
(2, '2021-11-23-074559', 'App\\Database\\Migrations\\CreatePenulis', 'default', 'App', 1729272593, 1),
(3, '2021-11-24-040049', 'App\\Database\\Migrations\\CreateEbookHasPenulis', 'default', 'App', 1729272593, 1),
(4, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1729272614, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id`, `nama_penulis`, `created_at`, `updated_at`) VALUES
(1, 'A. Bobby Chandra', '2021-12-01 12:15:44', '2021-12-01 12:15:44'),
(2, 'Douglas Fisher', '2021-12-01 12:16:05', '2021-12-01 12:16:05'),
(3, 'James Tanton', '2021-12-01 12:16:16', '2021-12-01 12:16:16'),
(4, 'James Patterson', '2021-12-01 16:21:37', '2021-12-01 16:21:37'),
(5, 'Katy Schwalbe', '2021-12-01 16:21:43', '2021-12-01 16:21:43'),
(6, 'John M. Zelle', '2021-12-01 16:21:51', '2021-12-01 16:21:51'),
(7, 'Jeffrey A Winters', '2021-12-01 17:40:52', '2021-12-01 17:40:52'),
(8, 'Elliot Aronson', '2021-12-01 17:41:02', '2021-12-01 17:41:02'),
(9, 'Erman Rajagukguk', '2021-12-01 17:41:12', '2021-12-01 17:41:12'),
(10, 'Quentin Wodon', '2021-12-01 18:04:06', '2021-12-01 18:04:06'),
(11, 'Jared Diamond', '2021-12-01 18:04:17', '2021-12-01 18:04:17'),
(12, 'Scott E. Spoolman', '2021-12-01 18:04:43', '2021-12-01 18:04:43'),
(13, 'Brian Fairrington', '2021-12-01 18:11:19', '2021-12-01 18:11:19'),
(14, 'I Nyoman Astita', '2021-12-01 18:11:27', '2021-12-01 18:11:27'),
(15, 'Th. Esti Wuryansari Ernawati Purwaningsih', '2021-12-01 18:11:35', '2021-12-01 18:11:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `nama_user`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'admindummy@gmail.com', 'dummy12', 'dummy12', '$2y$10$IXJYgkvGyLKQbt4lt9vQrO4BbodLArERsBjnnGwLF3hCdPwgH3ZPG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-19 02:08:31', '2024-10-19 02:08:31', NULL),
(6, 'user@gmail.com', 'user1', 'user', '$2y$10$FpMxc4xmmndl0fB7P3fn6udaJtBo3b6PVS6p7KBGW6bCxQX8EmYWC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-19 03:35:39', '2024-10-19 03:35:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_download`
--

CREATE TABLE `user_download` (
  `id` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_buku` int(11) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_download`
--

INSERT INTO `user_download` (`id`, `id_user`, `id_buku`, `created_at`) VALUES
(5, 5, 6, '2024-10-19 02:09:46'),
(6, 6, 6, '2024-10-19 03:35:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ebook_has_penulis`
--
ALTER TABLE `ebook_has_penulis`
  ADD KEY `ebook_has_penulis_id_buku_foreign` (`id_buku`),
  ADD KEY `ebook_has_penulis_id_penulis_foreign` (`id_penulis`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `user_download`
--
ALTER TABLE `user_download`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_ebook` (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_download`
--
ALTER TABLE `user_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ebook_has_penulis`
--
ALTER TABLE `ebook_has_penulis`
  ADD CONSTRAINT `ebook_has_penulis_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `ebook` (`id`),
  ADD CONSTRAINT `ebook_has_penulis_id_penulis_foreign` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_download`
--
ALTER TABLE `user_download`
  ADD CONSTRAINT `fk_ebook` FOREIGN KEY (`id_buku`) REFERENCES `ebook` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
