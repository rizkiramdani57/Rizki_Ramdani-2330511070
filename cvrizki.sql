-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 03:05 AM
-- Server version: 11.4.9-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvrizki`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) UNSIGNED NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `tahun_mulai` varchar(20) NOT NULL,
  `tahun_selesai` varchar(20) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `urutan` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `tingkat`, `institusi`, `tahun_mulai`, `tahun_selesai`, `deskripsi`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'Sekolah Menengah Atas', 'SMA Negeri 2 Kota Sukabumi', '2020', '2023', 'Jurusan IPS dengan fokus pada ilmu sosial dan perilaku manusia.', 1, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(2, 'Sekolah Menengah Pertama', 'SMP Negeri 5 Sukabumi', '2018', '2020', 'Fokus Pada Pengembangan Diri', 2, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(3, 'Sarjana Teknik Informatika', 'Universitas Muhammadiyah Kota Sukabumi', '2023', '2027', 'Fokus pada pengembangan perangkat lunak, algoritma, dan sistem informasi. Aktif dalam organisasi mahasiswa dan berbagai proyek pengembangan aplikasi.', 0, '2025-11-14 14:35:42', '2025-11-14 14:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) UNSIGNED NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tahun_mulai` varchar(20) NOT NULL,
  `tahun_selesai` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `urutan` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `jabatan`, `perusahaan`, `lokasi`, `tahun_mulai`, `tahun_selesai`, `deskripsi`, `urutan`, `created_at`, `updated_at`) VALUES
(10, 'Proyek Pribadi - Website Portfolio', 'Proyek Belajar Mandiri', 'Remote', '2024', NULL, 'Mengembangkan website portfolio pribadi menggunakan HTML, CSS, dan JavaScript\nBelajar responsive design dan modern web development\nMengimplementasikan animasi dan interaktifitas menggunakan JavaScript\nMenggunakan Git untuk version control\nMempelajari deployment website ke hosting\nMenggunakan framework Bootstrap untuk mempercepat development', 4, '2025-11-15 02:41:12', '2025-11-15 02:41:12');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-11-14-203700', 'App\\Database\\Migrations\\CreateProfileTable', 'default', 'App', 1763130908, 1),
(2, '2024-11-14-203701', 'App\\Database\\Migrations\\CreateEducationTable', 'default', 'App', 1763130909, 1),
(3, '2024-11-14-203702', 'App\\Database\\Migrations\\CreateExperienceTable', 'default', 'App', 1763130909, 1),
(4, '2024-11-14-203703', 'App\\Database\\Migrations\\CreateSkillsTable', 'default', 'App', 1763130909, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `email`, `telepon`, `alamat`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Mochamad Rizki Ramdani', 'rzkrmdn069@email.com', '+62 896-6883-6100', 'Jl Bhayangkara Gg Karya 1 Kota Sukabumi, Indonesia', 'Mahasiswa Teknik Informatika yang sedang belajar dan mengembangkan kemampuan dalam bidang pengembangan perangkat lunak. Memiliki minat yang tinggi terhadap teknologi web development dan terus belajar untuk meningkatkan skill programming.', NULL, '2025-11-15 02:41:12', '2025-11-15 02:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tingkat` int(3) NOT NULL DEFAULT 0 COMMENT 'Persentase skill 0-100',
  `urutan` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `nama`, `tingkat`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'Frontend Development', 60, 1, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(2, 'Backend Development', 60, 2, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(3, 'UI/UX Design', 75, 3, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(5, 'Project Management', 70, 5, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(6, 'Microsoft Excel', 85, 6, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(7, 'PHP', 70, 7, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(10, 'MySQL', 70, 10, '2025-11-14 14:35:42', '2025-11-14 14:35:42'),
(13, 'HTML', 75, 1, '2025-11-15 02:41:12', '2025-11-15 02:41:12'),
(14, 'CSS', 70, 2, '2025-11-15 02:41:12', '2025-11-15 02:41:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
