-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2022 pada 09.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_badan_pemilihan_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenduduks`
--

CREATE TABLE `datapenduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapenduduks`
--

INSERT INTO `datapenduduks` (`id`, `nik`, `nama`, `alamat`, `jenis_kelamin`, `status`, `created_at`, `updated_at`) VALUES
(1, '1234567890123451', 'bayu', 'Bayolali', 'Laki', 'Belum', '2022-04-11 12:15:15', '2022-04-11 12:15:15'),
(3, '1234567890123452', 'BayuUser', 'LAKI LAKI', 'SUDAGARAN', 'sudah mendaftar', NULL, NULL),
(4, '1234567890123453', 'Dion', 'LAKI LAKI', 'SUDAGARAN', 'sudah mendaftar', NULL, NULL),
(5, '1234567890123454', 'Elang', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL),
(6, '1234567890123455', 'Faris', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL),
(7, '1234567890123456', 'Galih', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL),
(8, '1234567890123457', 'Habib', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL),
(9, '1234567890123458', 'Indra', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL),
(10, '1234567890123459', 'Joko', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL),
(11, '1234567890123410', 'Kenza', 'LAKI LAKI', 'SUDAGARAN', 'belum mendaftar', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidats`
--

CREATE TABLE `kandidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kandidats`
--

INSERT INTO `kandidats` (`id`, `nama`, `visi`, `misi`, `foto`, `created_at`, `updated_at`) VALUES
(16, 'fkjskd', 'demokratis', 'demokratis', 'ganjar.jpg', '2022-04-12 01:53:15', '2022-04-12 01:53:15'),
(17, 'soharto', 'maju , sejahterah', 'bb,m murah', 'marjoko.jpg', '2022-04-12 01:56:34', '2022-04-12 01:56:34');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2022_04_04_120603_create_datapenduduks_table', 1),
(21, '2022_04_05_030542_create_kandidats_table', 1),
(22, '2022_04_05_030646_create_panduans_table', 1),
(23, '2022_04_05_030730_create_pemilihandigitals_table', 1),
(24, '2022_04_05_030806_create_suarapemilihans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `panduans`
--

CREATE TABLE `panduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `panduans`
--

INSERT INTO `panduans` (`id`, `judul`, `visi`, `created_at`, `updated_at`) VALUES
(4, 'UMUR', 'Pemilih wajib berumur 17 TAHUN ', '2022-04-09 09:52:36', '2022-04-09 09:52:36');

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
-- Struktur dari tabel `pemilihandigitals`
--

CREATE TABLE `pemilihandigitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilihandigitals`
--

INSERT INTO `pemilihandigitals` (`id`, `judul`, `tema`, `status`, `created_at`, `updated_at`) VALUES
(10, 'pemilihan bupati 2023', 'demkratis bersama', 'sedang berlangsung', '2022-04-12 01:53:15', '2022-04-12 01:53:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suarapemilihans`
--

CREATE TABLE `suarapemilihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, '1234567890123450', 'bayuadmin@gmail.com', '$2y$10$VfajvfwVyToqNa1NyipfseeaFL6jTdCxRtUqWC872IV.ovztxfr/K', 'Admin', 'belum memilih', '2022-04-04 22:32:04', '2022-04-04 22:32:04'),
(22, '1234567890123451', 'bayuwijiana2@gmail.com', '$2y$10$J4DFj4WRV06SlDEGei5Y1.JNqyX1KOa5yjpwYuQcBPNoirfAXbI.u', 'User', 'belum memilih', '2022-04-10 08:30:01', '2022-04-10 08:30:01'),
(23, '1234567890123453', 'bayuwijiana5@gmail.com', '$2y$10$.0tql16/ieA/BBTCUc8FIe49lI7MPVPo1X59.pKrVM/VK5oyaN6eG', 'User', 'belum memilih', '2022-07-18 00:20:53', '2022-07-18 00:20:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapenduduks`
--
ALTER TABLE `datapenduduks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kandidats`
--
ALTER TABLE `kandidats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panduans`
--
ALTER TABLE `panduans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemilihandigitals`
--
ALTER TABLE `pemilihandigitals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suarapemilihans`
--
ALTER TABLE `suarapemilihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapenduduks`
--
ALTER TABLE `datapenduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kandidats`
--
ALTER TABLE `kandidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `panduans`
--
ALTER TABLE `panduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemilihandigitals`
--
ALTER TABLE `pemilihandigitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `suarapemilihans`
--
ALTER TABLE `suarapemilihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
