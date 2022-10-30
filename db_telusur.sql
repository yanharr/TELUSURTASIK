-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 29 Okt 2022 pada 20.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telusur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id_about_us` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `develop_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_develop_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_develop_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `develop_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_develop_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_develop_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `develop_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_develop_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_develop_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `develop_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_develop_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_develop_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `develop_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_develop_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_develop_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id_about_us`, `cover`, `judul`, `desc`, `develop_1`, `nim_develop_1`, `foto_develop_1`, `develop_2`, `nim_develop_2`, `foto_develop_2`, `develop_3`, `nim_develop_3`, `foto_develop_3`, `develop_4`, `nim_develop_4`, `foto_develop_4`, `develop_5`, `nim_develop_5`, `foto_develop_5`) VALUES
(1, '1655827472.jpg', 'TELUSUR TASIK', 'Berawal dari kurangnya akses informasi tentang pariwisata yang ada di kabupaten dan kota Tasikmalaya, kami berinisiatif untuk membuat sebuah wadah untuk menampung informasi yang lengkap tentang pariwisata yang ada di kota dan kabupaten Tasikmalaya yang bernama Telusurtasik. Telusurtasik merupakan website kemitraan yang bekerja sama dengan dinas pariwisata kota dan kabupaten Tasikmalaya. Harapannya, dengan adanya website ini, masyarakat bisa lebih mengenal mengenai pariwisata yang ada dan juga membantu menaikkan branding dari objek wisata yang ada di kota dan kabupaten Tasikmalaya.', 'Yanharr Alfirazi', '1202194280', '1655827496.jpg', 'Tasya Lu\'lu Armina Widyastuti', '1202194291', '1655827513.jpg', 'Denayu Tiara Annisa Faisal', '1202190066', '1655827534.jpg', 'Septia Mutiara Nur Salim', '1202190244', '1655827552.jpg', 'Rahma Karina M', '1202190150', '1655827570.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `helps`
--

CREATE TABLE `helps` (
  `id_question` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `helps`
--

INSERT INTO `helps` (`id_question`, `title`, `categories`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Cara mengubah foto profil', 'User', 'Masuk ke bagian pojok kanan di nama user lalu klik satu kali dan masuk ke myprofile lalu klik change photo', '2022-06-12', '2022-06-12'),
(2, 'Cara menambahkan lokasi pada wisata', 'Mitra', 'Masukkan lokasi pada kolom lokasi di halaman tambah wisata dan masukkan link maps di kolom maps', '2022-06-12', '2022-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_04_05_033914_create_wisatas_table', 1),
(13, '2022_04_05_034001_create_reviews_table', 1),
(14, '2022_04_10_055237_create_mitras_table', 1),
(15, '2022_05_21_130146_create_wishlists_table', 2),
(16, '2022_06_14_115129_create_about_us_table', 3),
(17, '2022_06_14_095647_create_recently_visit_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitras`
--

CREATE TABLE `mitras` (
  `id_mitra` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_mitra` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `recently_visit`
--

CREATE TABLE `recently_visit` (
  `id_recently_visit` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `recently_visit`
--

INSERT INTO `recently_visit` (`id_recently_visit`, `id_user`, `id_wisata`, `created_at`, `updated_at`) VALUES
(2, 4, 5, '2022-06-21 08:30:31', '2022-06-21 08:30:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `show` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `id_user`, `id_wisata`, `desc`, `created_at`, `updated_at`, `status`, `show`) VALUES
(1, 3, 8, 'Curug yang sangat indah', '2022-05-26 22:03:13', '2022-06-13 08:13:53', 'no', 0),
(3, 5, 7, 'Beragam jenis wisata ada', '2022-05-09 05:11:58', '2022-06-13 21:22:17', 'no', 0),
(4, 4, 3, 'Pantai yang sangat indah', '2022-05-05 05:11:58', '2022-06-13 08:13:57', 'no', 0),
(5, 6, 4, 'Kopi enak dan varian banyak', '2022-05-02 05:14:42', '2022-06-10 01:20:28', 'yes', 0),
(7, 1, 5, 'view sunset yang memanjakan mata', '2022-06-13 22:11:00', NULL, 'no', 4),
(8, 3, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis pretium accumsan.', '2022-06-18 20:38:50', NULL, 'no', 4),
(11, 17, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis pretium accumsan.', '2022-08-18 21:16:20', NULL, 'no', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `no_hp`, `password`, `photo_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 2, '085647945601', '$2y$10$oeNfzI/FZfhAJPuLemeUy.PDOllbcyC6etsPLAg7tt7afwK8eaIRS', '1655372655.jpg', NULL, '2022-04-17 08:28:03', '2022-06-16 02:44:15'),
(2, 'Caca Marica', 'cacamarica@gmail.com', NULL, 1, '085647945609', '$2y$10$kQ3lsvX1MyXA6TjPRXZxd.ATOYR26Qs8xzxNsQx.rvAupEQwoq26S', '1654853202.jpg', NULL, '2022-04-17 08:28:03', '2022-06-13 22:29:00'),
(3, 'Zeza Marica', 'zezamonroe@gmail.com', NULL, 0, '085647945603', '$2y$10$egI8Wqvvco6y5linCvrLLOK39a16xAGFXK8ZAcRL24lveLy74AUva', '1653628094.jpg', NULL, '2022-04-17 08:28:03', '2022-05-26 22:08:14'),
(4, 'Tatang Kyoto', 'tatangkyoto@gmail.com', NULL, 0, '085647945604', '$2y$10$Matgnz0UUAW4XeIkVor5HOgW2AmjdEUsyrNUcu/ZPkJKSDJkIBcYm', 'tst-image1.jpg', NULL, '2022-04-17 09:01:30', '2022-04-17 09:01:30'),
(5, 'Asep Sunandar', 'asepsunandar@gmail.com', NULL, 0, '085647945605', '$2y$10$/CPNVspKguLmVsjrc3MbjePDXlpV3hxhUK9Poin.oVlFerI4oeIiO', 'tst-image4.jpg', NULL, '2022-04-17 09:09:59', '2022-04-17 09:09:59'),
(6, 'Jajang Gypsum', 'jajanggypsum@gmail.com', NULL, 0, '085647945606', '$2y$10$VUDmP49asrVMguHINONnKuFf1nG1wX.IwMw/.oZG0CVr7rxNcAdt2', '1653742315.jpg', NULL, '2022-04-17 09:21:48', '2022-04-17 09:21:48'),
(7, 'Yudi Asbes', 'yudiasbes@gmail.com', NULL, 1, '085647945607', '$2y$10$1uv/cEJKF0i3nPBqCmZv5OApDsw8AcpG.a1XfxR2yAuXbtaNTUsPG', 'default.png', NULL, '2022-04-18 03:10:08', '2022-04-18 03:10:08'),
(15, 'marsyal', 'marsyal@gmail.com', NULL, 0, '12345678', '$2y$10$k0P51zFsLbVlDQMfK5ZLBO0Lbas2/XZAcwnx62Sr87eo8vRip0Dlm', 'default.png', NULL, '2022-07-07 23:28:20', '2022-07-07 23:28:20'),
(16, 'yanhar', 'yanhar@gmail.com', NULL, 0, '08123123', '$2y$10$KaPu7pXWy2GUHehxw2cJkuYd3QTiw/XZTPPXhihGiGthmGV4csfRW', 'default.png', NULL, '2022-07-21 20:42:53', '2022-07-21 20:42:53'),
(17, 'ucup', 'ucup@gmail.com', NULL, 0, '123456', '$2y$10$cW96Q3yvpfO0xYEVXRgguOP9fTxJRnumpN07fSAsbmmcq3z5FRTMq', 'default.png', NULL, '2022-08-19 09:15:35', '2022-08-19 09:15:35'),
(20, 'ahmad', 'ahmad@gmail.com', NULL, 0, '08122390', '$2y$10$f8BeusRbCls7uJyBLajTT.QprNR1XVqtnBQGUGcXE7iNlDSI5ZRWC', 'default.png', NULL, '2022-10-04 01:32:56', '2022-10-04 01:32:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id_wisata` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id_wisata`, `id_user`, `title`, `categorie`, `location`, `desc`, `status`, `picture`, `created_at`, `updated_at`, `maps`) VALUES
(3, 2, 'Pantai Sindangkerta', 'Pantai', 'Cipatujah', 'Keindahan pantai berpasir putih dengan ciri pantai yang landai seakan begitu tepat dijadikan sebagai area wisata terbaik untuk anda dan keluarga.', 'Accepted', 'pantaisindangkerta.jpg', '2022-04-18 12:15:15', '2022-04-18 12:15:15', 'https://g.page/kopisarasa?share'),
(4, 2, 'Kopi Sarasa', 'Caffe', 'Cisayong', 'Kopi Sarasa menjadi hits di sepanjang tahun 2019. Tempatnya yang unik dengan konsep outdoor membuat Kopi Sarasa ramai dikunjungi pengunjung.', 'Accepted', 'kopisarasa.jpg', '2022-04-18 12:16:39', '2022-06-13 22:19:34', 'https://g.page/kopisarasa?share'),
(5, 2, 'Pantai Cipatujah', 'Pantai', 'Cipatujah', 'Pantai yang membentang luas dan birunya air yang menyegarkan. Cocok untuk sekadar berkumpul bersama menikmati keindahan yang ada.', 'Accepted', 'pantaicipatujah.jpg', '2022-04-18 12:18:26', '2022-04-18 12:18:26', 'https://goo.gl/maps/6cZYRcvXDYU8Knhf7'),
(7, 2, 'Kampung Naga', 'Kampung Wisata', 'Salawu', 'Merupakan perkampungan yang dihuni oleh sekelompok masyarakat yang sangat kuat dalam memegang adat istiadat peninggalan leluhur sunda nya.', 'Accepted', 'kampungnaga.jpg', '2022-04-18 12:20:59', '2022-06-13 22:21:13', 'https://goo.gl/maps/narzLDmBv7RNZPBV6'),
(8, 2, 'Curug Ciparay', 'Curug', 'Cigalontang', 'Meskipun perjalanannya cukup menguras tenaga, Namun panorama alamnya mampu membayarnya dengan kontan.', 'Accepted', 'curugciparay.jpg', '2022-04-18 12:22:20', '2022-04-18 12:22:20', 'https://goo.gl/maps/tBNyuNHkRy3yiXUa8'),
(9, 2, 'Kind Culture', 'Caffe', 'Cisayong', 'Memadukan kedai kopi dan alam menjadi satu, Kind Culture salah satu cafe yang memadukan kedai kopi dengan sentuhan bernuansa alam.', 'Accepted', 'kindculture.jpg', '2022-04-18 12:27:54', '2022-06-13 22:19:11', 'https://goo.gl/maps/DPDPmnLvnvdM7koq7'),
(11, 2, 'Curug Pamutuh', 'Curug', 'Leuwisari', 'memiliki keunikan seperti air terjun pada umumnya, yakni berada di samping tebing dan airnya langsung terjun kebawah pada bagian kolam.', 'Accepted', 'curugpamutuh.jpg', '2022-04-18 12:52:51', '2022-04-18 12:52:51', 'https://goo.gl/maps/hd6XnXfzeV81vBy37'),
(13, 2, 'Tonjong Canyon', 'Sungai', 'Cipatujah', 'Tonjong Canyon merupakan sebuah aliran sungai dengan kanan kirinya adalah tebing tinggi dan air yang hijau', 'Pending', 'tonjongcanyon.jpg', '2022-06-13 22:28:12', '2022-06-13 22:28:12', 'https://goo.gl/maps/2k912Gzs8ffVpueC7'),
(14, NULL, 'Masjid Agung', 'Cagar Budaya', 'Tasik', 'Masjid agung kebanggaan kota tasikmalaya', 'Accepted', 'Masjid-Agung-Kota-Tasikmalaya.png', '2022-07-05 20:12:26', '2022-07-05 20:12:26', 'https://goo.gl/maps/1oHsFaSgjgdwTGg68');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wishlists`
--

INSERT INTO `wishlists` (`id`, `id_user`, `id_wisata`, `created_at`, `updated_at`) VALUES
(3, 3, 5, '2022-05-26 22:02:27', '2022-05-26 22:02:27'),
(4, 3, 8, '2022-05-26 22:02:47', '2022-05-26 22:02:47'),
(5, 3, 7, '2022-05-26 22:05:38', '2022-05-26 22:05:38'),
(6, 2, 3, '2022-06-10 02:01:05', '2022-06-10 02:01:05'),
(7, 1, 5, '2022-06-13 22:11:12', '2022-06-13 22:11:12'),
(8, 1, 4, '2022-06-15 08:12:21', '2022-06-15 08:12:21'),
(10, 4, 5, '2022-06-21 08:30:30', '2022-06-21 08:30:30'),
(12, 17, 7, '2022-08-19 09:16:27', '2022-08-19 09:16:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id_about_us`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id_question`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitras`
--
ALTER TABLE `mitras`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `recently_visit`
--
ALTER TABLE `recently_visit`
  ADD PRIMARY KEY (`id_recently_visit`),
  ADD KEY `recently_visit_id_user_foreign` (`id_user`),
  ADD KEY `recently_visit_id_wisata_foreign` (`id_wisata`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_id_user_foreign` (`id_user`),
  ADD KEY `reviews_id_wisata_foreign` (`id_wisata`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id_wisata`),
  ADD UNIQUE KEY `id_wisata` (`id_wisata`),
  ADD KEY `users_id` (`id_user`);

--
-- Indeks untuk tabel `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_id_user_foreign` (`id_user`),
  ADD KEY `wishlists_id_wisata_foreign` (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id_about_us` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `helps`
--
ALTER TABLE `helps`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `mitras`
--
ALTER TABLE `mitras`
  MODIFY `id_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `recently_visit`
--
ALTER TABLE `recently_visit`
  MODIFY `id_recently_visit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id_wisata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `recently_visit`
--
ALTER TABLE `recently_visit`
  ADD CONSTRAINT `recently_visit_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recently_visit_id_wisata_foreign` FOREIGN KEY (`id_wisata`) REFERENCES `wisatas` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_id_wisata_foreign` FOREIGN KEY (`id_wisata`) REFERENCES `wisatas` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD CONSTRAINT `users_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_id_wisata_foreign` FOREIGN KEY (`id_wisata`) REFERENCES `wisatas` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
