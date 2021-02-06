-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2021 pada 07.36
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siaka-dipa`
--
CREATE DATABASE IF NOT EXISTS `siaka-dipa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `siaka-dipa`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `gelar`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(3, 8, 'Asrul', 'Syam', 'L', 'S.Si.,M.Si', '-', '0811-4499-066', '2021-02-05 10:28:08', '2021-02-05 10:28:08'),
(4, 10, 'Sri', 'Wahyuni', 'P', 'S.Kom.,MT', '-', '0812-4264-0622', '2021-02-05 10:31:33', '2021-02-05 10:31:33'),
(5, 11, 'Asran', '.', 'L', 'ST., MT.', 'KINABALU', '085255566909', '2021-02-05 10:37:38', '2021-02-05 10:37:38');

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
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah_id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `mahasiswa_id`, `matakuliah_id`, `dosen_id`, `kelas`, `hari`, `jam`, `ruang`, `created_at`, `updated_at`) VALUES
(6, 1, 6, 3, '1TKAL-O', 'Senin', '07.30-09.10', 'B102', '2021-02-05 10:36:27', '2021-02-05 10:36:27'),
(7, 1, 18, 5, '2TKAL-O', 'Senin', '11.00-12.50', 'B113', '2021-02-05 10:38:28', '2021-02-05 10:38:28'),
(8, 1, 20, 4, '3TWEB-N', 'Selasa', '11.00-12.50', '203', '2021-02-05 10:39:16', '2021-02-05 10:39:16'),
(9, 1, 20, 3, '3TWEB-N', 'Kamis', '11.00-12.50', '202', '2021-02-05 10:39:42', '2021-02-05 10:39:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '2021-02-02 18:52:48', '2021-02-02 18:52:48'),
(2, 'Sistem Informasi', '2021-02-03 07:25:40', '2021-02-03 07:25:40'),
(3, 'RPL', '2021-02-03 07:25:46', '2021-02-03 07:25:46'),
(4, 'D3', '2021-02-03 07:25:51', '2021-02-03 07:25:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `jurusan_id` int(10) NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `jurusan_id`, `foto`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '1612452529.jpg', 'Aldi', 'Susanto', 'L', 'Ujung Pandang', '0895334255395', '2021-02-02 18:57:36', '2021-02-04 07:28:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_matakuliah`
--

CREATE TABLE `mahasiswa_matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa_matakuliah`
--

INSERT INTO `mahasiswa_matakuliah` (`id`, `mahasiswa_id`, `matakuliah_id`, `nilai`, `created_at`, `updated_at`) VALUES
(9, 1, 6, 'C', '2021-02-05 10:16:14', '2021-02-05 10:16:14'),
(10, 1, 17, 'B', '2021-02-05 10:16:36', '2021-02-05 10:16:36'),
(11, 1, 9, 'A', '2021-02-05 10:16:48', '2021-02-05 10:16:48'),
(12, 1, 11, 'A', '2021-02-05 10:16:57', '2021-02-05 10:16:57'),
(13, 1, 15, 'A', '2021-02-05 10:17:12', '2021-02-05 10:17:12'),
(14, 1, 8, 'A', '2021-02-05 10:17:28', '2021-02-05 10:17:28'),
(15, 1, 12, 'B', '2021-02-05 10:17:46', '2021-02-05 10:17:46'),
(16, 1, 13, 'A', '2021-02-05 10:18:00', '2021-02-05 10:18:00'),
(17, 1, 16, 'B', '2021-02-05 10:18:12', '2021-02-05 10:18:12'),
(18, 1, 10, 'A', '2021-02-05 10:18:31', '2021-02-05 10:18:31'),
(19, 1, 14, 'A', '2021-02-05 10:18:43', '2021-02-05 10:18:43'),
(20, 1, 14, 'A', '2021-02-05 10:18:43', '2021-02-05 10:18:43'),
(22, 1, 19, 'A', '2021-02-05 10:34:43', '2021-02-05 10:34:43'),
(23, 1, 20, 'A', '2021-02-05 10:34:57', '2021-02-05 10:34:57'),
(24, 1, 21, 'A', '2021-02-05 10:35:08', '2021-02-05 10:35:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `kode_matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(1) NOT NULL,
  `wajib_opsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `jurusan_id`, `kode_matakuliah`, `nama_matakuliah`, `sks`, `wajib_opsi`, `semester`, `created_at`, `updated_at`) VALUES
(6, 1, 'A1012-T', 'KALKULUS I', 2, 'W', 'Semester 1', '2021-02-05 10:08:56', '2021-02-05 10:08:56'),
(8, 1, 'K1212-T', 'PRAK. PTI & PLA', 2, 'W', 'Semester 1', '2021-02-05 10:09:33', '2021-02-05 10:09:33'),
(9, 1, 'E2011-T', 'PRAK. ELEKTRONIKA ANALOG', 1, 'W', 'Semester 1', '2021-02-05 10:11:42', '2021-02-05 10:11:42'),
(10, 1, 'U1102-T', 'PENGEMBANGAN DIRI', 2, 'W', 'Semester 1', '2021-02-05 10:12:00', '2021-02-05 10:12:00'),
(11, 1, 'E2012-T', 'ELEKTRONIKA ANALOG', 2, 'W', 'Semester 1', '2021-02-05 10:12:34', '2021-02-05 10:12:34'),
(12, 1, 'P1042-T', 'PRAK. ALGORITMA DAN PEMROGRAMAN', 2, 'W', 'Semester 1', '2021-02-05 10:12:50', '2021-02-05 10:12:50'),
(13, 1, 'P1044-T', 'ALGORITMA DAN PEMROGRAMAN', 4, 'W', 'Semester 1', '2021-02-05 10:13:30', '2021-02-05 10:13:30'),
(14, 1, 'U2042-T', 'PANCASILA DAN KEWARGANEGARAAN', 2, 'W', 'Semester 1', '2021-02-05 10:13:49', '2021-02-05 10:13:49'),
(15, 1, 'K1112-T', 'PENGENALAN TEKNOLOGI INFORMASI', 2, 'W', 'Semester 1', '2021-02-05 10:14:12', '2021-02-05 10:14:12'),
(16, 1, 'U1012-T', 'PENDIDIKAN AGAMA ISLAM', 2, 'W', 'Semester 1', '2021-02-05 10:14:49', '2021-02-05 10:14:49'),
(17, 1, 'B1022-T', 'BAHASA INGGRIS I', 2, 'W', 'Semester 1', '2021-02-05 10:15:05', '2021-02-05 10:15:05'),
(18, 1, 'A2612-T', 'KALKULUS II', 2, 'W', 'Semester 2', '2021-02-05 10:32:32', '2021-02-05 10:32:32'),
(19, 1, 'K3052-T', 'SISTEM BASIS DATA', 2, 'W', 'Semester 2', '2021-02-05 10:33:02', '2021-02-05 10:33:02'),
(20, 1, 'P3064-T', 'PEMROGRAMAN WEB', 4, 'W', 'Semester 3', '2021-02-05 10:33:48', '2021-02-05 10:33:48'),
(21, 1, 'P3062-T', 'PRAK. PEMROGRAMAN WEB', 2, 'W', 'Semester 3', '2021-02-05 10:34:15', '2021-02-05 10:34:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_01_064036_create_mahasiswa_table', 1),
(5, '2021_02_02_032355_create_dosen_table', 1),
(6, '2021_02_02_073835_create_matakuliah_table', 1),
(7, '2021_02_02_083825_create_jurusan_table', 1),
(8, '2021_02_03_015543_create_mahasiswa_matkul_table', 1),
(9, '2021_02_03_042435_create_mahasiswa_matkul_table', 2),
(10, '2021_02_03_063141_create_mahasiswa_matakuliah_table', 3),
(11, '2021_02_03_080459_create_jadwal_table', 4);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'aldisusanto648@gmail.com', NULL, '$2y$10$Ql4icnbYsAj1mEdArtF/NuhJ7gpYS70rz6gw3kSWXPe7apxJ1qeiW', 'xgSc0u8mp6rPVHXy0dXidKvFsnrJ9LaU2yyTg5fCRkq71wtFqlI30iDmAeDA', '2021-02-02 18:52:27', '2021-02-02 18:52:27'),
(5, 'mahasiswa', '192529', 'aldisusanto549@gmail.com', NULL, '$2y$10$AusiH5zZbnKtLpOEwk4A/.8z0wJ6WeVbsxcZUW5TKZIY1O6nIrxPm', 'BJqvPUh7w6KfXyawXGVk8KANwagOcuQowBSArJmGysYfXZ5C2cUVEoV6GF50', '2021-02-02 18:57:36', '2021-02-02 18:57:36'),
(8, 'dosen', '05210142', 'asrulsyam12@gmail.com', NULL, '$2y$10$qCk2uYSmI3nD/u0crutyROj5z9/GBAqsTe/.pLUcEBKaZ5nOT0DoC', 'WpclbxMEYxMCL5ossHBhNWDKyWx2Fvhy4dXtDm6Aw6CgV9fGfeoEX6OF3ZUC', '2021-02-05 10:28:08', '2021-02-05 10:28:08'),
(10, 'dosen', '0931039002', 'sriwahyuni122@gmail.com', NULL, '$2y$10$dffzfulZcaJmkIawKMPzYuPGldevLMvqO770EFfRzEHQtIzQpGwzu', 'eP6KHgY4AQPdDu4XDaaD74k7VFr8U4jFYH6YuLHwRSsJ8Lcu0qxk7kYNyXsd', '2021-02-05 10:31:33', '2021-02-05 10:31:33'),
(11, 'dosen', '05207067', 'asran12@gmail.com', NULL, '$2y$10$J7sTuq3ZoewHnOHtF20u4eQBgPFaJ0dk/5cdut.YKZRrjVj4EGo/W', 'akFTm9YznqxNryIJkCK2MxMNuC8tqLtCPkK9N0fMIMkZ2PazK3aUHBj30GR0', '2021-02-05 10:37:38', '2021-02-05 10:37:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `jadwal_matakuliah_id_foreign` (`matakuliah_id`),
  ADD KEY `jadwal_dosen_id_foreign` (`dosen_id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa_matakuliah`
--
ALTER TABLE `mahasiswa_matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_matakuliah_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `mahasiswa_matakuliah_matakuliah_id_foreign` (`matakuliah_id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa_matakuliah`
--
ALTER TABLE `mahasiswa_matakuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `jadwal_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `jadwal_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa_matakuliah`
--
ALTER TABLE `mahasiswa_matakuliah`
  ADD CONSTRAINT `mahasiswa_matakuliah_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `mahasiswa_matakuliah_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
