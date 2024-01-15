-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jan 15, 2024 at 12:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jms`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelamar`
--

CREATE TABLE `data_pelamar` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_loker` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_wawancara` int(11) DEFAULT NULL,
  `id_profil_pelamar` int(11) NOT NULL,
  `status` enum('Lanjut','Berhenti','Pending') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pelamar`
--

INSERT INTO `data_pelamar` (`id`, `id_loker`, `id_perusahaan`, `id_wawancara`, `id_profil_pelamar`, `status`, `created_at`, `updated_at`) VALUES
(27, 1, 1, NULL, 1, 'Lanjut', '2023-12-26 19:49:40', '2023-12-26 19:49:40'),
(28, 1, 1, NULL, 1, 'Pending', '2023-12-26 20:15:09', '2023-12-26 20:15:09'),
(29, 2, 2, NULL, 1, 'Pending', '2023-12-26 20:17:23', '2023-12-26 20:17:23'),
(30, 3, 2, NULL, 1, 'Pending', '2024-01-14 06:12:09', '2024-01-14 06:12:09'),
(31, 3, 2, NULL, 2, 'Pending', '2024-01-14 06:14:09', '2024-01-14 06:14:09'),
(34, 4, 1, NULL, 1, 'Pending', '2024-01-15 04:21:04', '2024-01-15 04:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_lamaran` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id`, `id_perusahaan`, `kategori`, `posisi`, `lulusan`, `syarat`, `deskripsi`, `batas_lamaran`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'game developer', 'Game Designer', 'S1 SISTEM INFORMASI, S1 TEKHNIK INFORMATIKA', 'S1', 'kmkdcnkewnc kewcn', '2023-12-26', 'knqwdndn', 'aktif', '2023-12-26 03:08:24', '2023-12-26 03:08:40'),
(2, 2, 'web developer', 'Front-End Junior', 'S1 SISTEM INFORMASI, S1 TEKHNIK INFORMATIKA', 'S1, D3', 'Saat ini kami sedang mencari full-stack developer terkemuka untuk berkembang bersama tim Pengembang kami. Fokus utama Anda adalah mengembangkan komponen antarmuka pengguna dan mengimplementasikannya mengikuti alur kerja React.js yang terkenal. Anda akan memastikan bahwa komponen-komponen ini dan keseluruhan aplikasi kuat dan mudah dirawat. Anda akan berkoordinasi dengan anggota tim lainnya yang mengerjakan berbagai lapisan infrastruktur. Oleh karena itu, komitmen terhadap pemecahan masalah secara kolaboratif, desain yang canggih, dan produk berkualitas adalah penting. Kami mencari seseorang yang akan terus menantang diri mereka sendiri untuk menjadi yang terdepan dalam teknologi baru dan mengembangkan pengetahuan tim tentang praktik terbaik. Tanggung jawab\r\n\r\nKembangkan aplikasi berbasis web yang dapat dipelihara, aman, terukur, teruji, dan ditulis dengan baik.\r\nBekerja secara lancar dengan tim lain khususnya tim Produk, Pengembang Backend, Desainer UI, dan tim QA.\r\nBekerja dengan tim produk dan desainer grafis untuk memahami interaksi pengguna\r\nMempertahankan komponen sistem desain kami yang akan digunakan di seluruh aplikasi', '2024-03-08', 'Jakarta', 'aktif', '2023-12-26 03:12:37', '2023-12-26 19:47:24'),
(3, 2, 'data scientist', 'Data Scientist Junior', 'S1 SISTEM INFORMASI, S1 TEKHNIK INFORMATIKA', 'S1, D3', 'jkkjk', '2023-12-27', 'Surabaya', 'aktif', '2023-12-26 20:13:12', '2023-12-26 20:13:12'),
(4, 1, 'security engineer', 'Security Engineer', 'S1, D3', 'S1 Sistem Informasi', 'Frashgraduate only', '2024-01-31', 'JL KUNTI NO 41', 'aktif', '2024-01-14 20:46:03', '2024-01-14 20:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_11_26_133955_create_lokers_table', 1),
(2, '2023_11_26_140005_create_perusahaans_table', 1),
(3, '2023_11_26_140436_create_pelamars_table', 1),
(4, '2023_11_26_150620_create_data_pelamars_table', 1),
(5, '2023_11_26_150802_create_wawancaras_table', 1),
(6, '2023_12_03_050407_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_institusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman_organisasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_diinginkan` int(11) NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `status_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `id_user`, `nama`, `alamat`, `ttl`, `jk`, `no_telp`, `email`, `password`, `pendidikan`, `nama_institusi`, `pengalaman_organisasi`, `pengalaman_kerja`, `skill`, `sertifikasi`, `gaji_diinginkan`, `lampiran`, `cv`, `foto`, `nik`, `status_nikah`, `created_at`, `updated_at`) VALUES
(1, 3, 'Aldi Age Hasani', 'JL KUNTI NO 41', '2023-12-26', 'Laki-Laki', 8772371723, 'aldih3029@gmail.com', '$2y$10$gzhpj5...3qSvVEnJ7l6We73Ch8Tev.2bxYtRXEMvyNJvLeA0yB3e', 'SMA/SMK/Sederajat', 'mkdnkn3wdnk2n', '3dom3mkem', 'end n 3d32n', 'e2kd k3kn', 'GAMELAB', 900000000, 'Lampiran-Aldi Age Hasani.pdf', 'CV-Aldi Age Hasani.pdf', 'Foto-Logo_GameLab_Portrait1.png', 9729620919898, 'Belum Menikah', '2023-12-26 03:14:32', '2023-12-26 03:14:32'),
(2, 4, 'Rena', 'JL KUNTI NO 41', '2024-01-06', 'Perempuan', 8772371723, 'rena@gmail.com', '$2y$10$AinXC1qQEUNM3zY1YqLcd.UyFlDYt6ZG1/ixbnPO.LRYNa6jAu9Q6', 'SMA/SMK/Sederajat', 'SMA MUJAHIDIN', 'AW c sac', 'wdclncn', 'w, NKN', 'GAMELAB 12', 900000000, 'Lampiran-Rena.pdf', 'CV-Rena.pdf', 'Foto-Logo_GameLab_Portrait1.png', 9729620919898, 'Belum Menikah', '2023-12-26 07:39:26', '2023-12-26 18:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` bigint(20) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `id_users`, `nama`, `alamat`, `no_telp`, `email`, `deskripsi`, `npwp`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, 'PT Sempurna', 'Surabaya', 92838291102, 'sempurna123@gmail.com', 'kwecmek8ncken', 209330, 'Logo_GameLab_Portrait1.png', '2023-12-26 03:06:50', '2023-12-26 03:07:34'),
(2, 2, 'PT Barokah1', 'Jakarta', 92838291102, 'barokah12@gmail.com', 'Perusahaan Gedde', 209330, 'logo (1).png', '2023-12-26 03:10:11', '2023-12-26 19:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','perusahaan','pelamar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelamar',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PT Sempurna', 'sempurna@gmail.com', '$2y$10$Qu8Kzf1H47wRj1vrFRsxp.66iGkzDEhS9YN/K.hwE1NhMVR8JwUW2', 'perusahaan', NULL, '2023-12-26 03:06:30', '2023-12-26 03:06:30'),
(2, 'PT Barokah1', 'barokah12@gmail.com', '$2y$10$Ky6e56KbluSQ/2i1NfITMurlP3iUnXzj8JYJtgjYpLLBxqYfliFYa', 'perusahaan', NULL, '2023-12-26 03:09:44', '2023-12-26 03:09:44'),
(3, 'Aldi Age Hasani', 'aldih3029@gmail.com', '$2y$10$gzhpj5...3qSvVEnJ7l6We73Ch8Tev.2bxYtRXEMvyNJvLeA0yB3e', 'pelamar', NULL, '2023-12-26 03:13:37', '2023-12-26 03:13:37'),
(4, 'Rena', 'rena@gmail.com', '$2y$10$AinXC1qQEUNM3zY1YqLcd.UyFlDYt6ZG1/ixbnPO.LRYNa6jAu9Q6', 'pelamar', NULL, '2023-12-26 07:38:17', '2023-12-26 07:38:17'),
(5, 'admin', 'admin@gmail.com', '$2y$10$qMXgzxfSC7BmvKvQZcIPUucICDFohENBOD5D.VNQwyHSUSed.LT2a', 'admin', NULL, '2023-12-26 20:00:36', '2023-12-26 20:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_data_pelamar` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_loker` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('diproses','diterima','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'diproses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`id`, `id_data_pelamar`, `id_pelamar`, `id_loker`, `id_perusahaan`, `jadwal`, `catatan`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 2, 2, '2023-12-27', 'jkjk', 'diterima', '2023-12-26 19:23:21', '2023-12-26 19:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelamar`
--
ALTER TABLE `data_pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perusahaan_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelamar`
--
ALTER TABLE `data_pelamar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wawancara`
--
ALTER TABLE `wawancara`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
