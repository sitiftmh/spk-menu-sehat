-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jun 15, 2023 at 06:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_menusehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobotkriteria`
--

CREATE TABLE `bobotkriteria` (
  `id` bigint(50) UNSIGNED NOT NULL,
  `bobot_kriteria` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bobotkriteria`
--

INSERT INTO `bobotkriteria` (`id`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jawabanuser` bigint(255) UNSIGNED NOT NULL,
  `hasil_rekomendasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawab`
--

CREATE TABLE `jawab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(50) NOT NULL,
  `rasa` varchar(50) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `protein` varchar(50) DEFAULT NULL,
  `kalori` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategorimenu`
--

CREATE TABLE `kategorimenu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_menu` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorimenu`
--

INSERT INTO `kategorimenu` (`id`, `kategori_menu`, `created_at`, `updated_at`) VALUES
(1, 'Makanan Berat', '2023-05-03 22:13:36', '2023-05-03 22:13:36'),
(2, 'Minuman', '2023-05-05 04:37:33', '2023-05-06 01:46:52'),
(3, 'Cemilan', '2023-05-05 04:37:42', '2023-05-06 01:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `id_bobotkriteria` int(50) NOT NULL,
  `tipe_kriteria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `id_bobotkriteria`, `tipe_kriteria`, `created_at`, `updated_at`) VALUES
(24, 'C1', 'Harga', 20, 'Cost', '2023-05-10 06:08:41', '2023-05-10 06:08:41'),
(25, 'C2', 'Rasa', 20, 'Benefit', '2023-05-10 06:10:02', '2023-05-10 06:10:02'),
(26, 'C3', 'Tingkat Popularitas', 20, 'Benefit', '2023-05-10 06:10:23', '2023-05-10 06:10:23'),
(27, 'C4', 'Protein', 20, 'Benefit', '2023-05-10 06:10:45', '2023-05-10 06:10:45'),
(28, 'C5', 'Kalori', 20, 'Cost', '2023-05-10 06:18:03', '2023-05-10 06:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_menu` varchar(100) NOT NULL,
  `daftar_menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rasa` varchar(100) NOT NULL,
  `tingkat_popularitas` varchar(100) NOT NULL,
  `protein` varchar(100) NOT NULL,
  `kalori` varchar(100) NOT NULL,
  `id_kategorimenu` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `kode_menu`, `daftar_menu`, `harga`, `rasa`, `tingkat_popularitas`, `protein`, `kalori`, `id_kategorimenu`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Nasi Sop', '13.000', 'Biasa', 'Biasa', '0.09 gr', '60 Kkal', 'Makanan Berat', '2023-05-12 18:31:49', '2023-05-12 18:31:49'),
(2, 'A02', 'Bakso', '15.000', 'Terfavorit', 'Terfavorit', '3.47 gr', '57 Kkal', 'Makanan Berat', '2023-05-12 18:33:24', '2023-05-12 18:33:24'),
(3, 'A03', 'Mie Ayam', '13.000', 'Terfavorit', 'Terfavorit', '16.7 gr', '421 Kkal', 'Makanan Berat', '2023-05-12 18:34:30', '2023-05-14 09:13:52'),
(4, 'A04', 'Lalapan', '15.000', 'Memuaskan', 'Memuaskan', '2.05 gr', '46 Kkal', 'Makanan Berat', '2023-05-12 18:35:40', '2023-05-12 18:35:40'),
(5, 'A05', 'Nasi Pecel', '14.000', 'Enak', 'Sedang', '6.58 gr', '230 Kkal', 'Makanan Berat', '2023-05-12 18:36:59', '2023-05-12 18:36:59'),
(6, 'A06', 'Nasi Kuning', '14.000', 'Enak', 'Biasa', '2.99 gr', '150 Kkal', 'Makanan Berat', '2023-05-12 18:38:29', '2023-05-12 18:38:29'),
(7, 'A07', 'Rawon', '16.000', 'Enak', 'Biasa', '9.6 gr', '119 Kkal', 'Makanan Berat', '2023-05-12 18:39:42', '2023-05-12 18:39:42'),
(8, 'A08', 'Mie Goreng', '5.000', 'Terfavorit', 'Terfavorit', '7.26 gr', '219 Kkal', 'Makanan Berat', '2023-05-12 18:40:41', '2023-05-12 18:40:41'),
(9, 'A09', 'Ayam Geprek', '10.000', 'Terfavorit', 'Biasa', '17.61 gr', '263 Kkal', 'Makanan Berat', '2023-05-12 18:43:16', '2023-05-12 18:43:16'),
(10, 'A10', 'Nasi Bakar', '12.000', 'Biasa', 'Biasa', '28.99 gr', '563 Kkal', 'Makanan Berat', '2023-05-12 18:47:17', '2023-05-12 18:47:17'),
(11, 'A11', 'Ikan Goreng', '10.000', 'Enak', 'Sedang', '14.91 gr', '84 Kkal', 'Makanan Berat', '2023-05-12 18:48:15', '2023-05-12 18:48:15'),
(12, 'A12', 'Mie Instan', '6.000', 'Memuaskan', 'Memuaskan', '8.00 gr', '280 Kkal', 'Makanan Berat', '2023-05-12 18:49:08', '2023-05-12 18:49:08'),
(13, 'A13', 'Nasi Ayam', '14.000', 'Terfavorit', 'Terfavorit', '29.00 gr', '450 Kkal', 'Makanan Berat', '2023-05-12 18:50:09', '2023-05-12 18:50:09'),
(14, 'A14', 'Nasi Goreng', '14.000', 'Biasa', 'Biasa', '12.47 gr', '333 Kkal', 'Makanan Berat', '2023-05-12 18:51:24', '2023-05-12 18:51:24'),
(15, 'A15', 'Nasi Bistik Ayam', '14.000', 'Enak', 'Sedang', '29.00 gr', '548 Kkal', 'Makanan Berat', '2023-05-12 18:52:10', '2023-05-12 18:52:10'),
(16, 'A16', 'Telur Goreng', '6.000', 'Biasa', 'Biasa', '6.2 gr', '89 Kkal', 'Makanan Berat', '2023-05-12 18:52:59', '2023-05-12 18:52:59'),
(17, 'A17', 'Udang Masak', '8.000', 'Memuaskan', 'Memuaskan', '1.38 gr', '7 Kkal', 'Makanan Berat', '2023-05-12 18:56:16', '2023-05-12 18:56:16'),
(18, 'A18', 'Ikan Sambal Matah', '12.000', 'Terfavorit', 'Terfavorit', '7 gr', '200 Kkal', 'Makanan Berat', '2023-05-12 18:58:47', '2023-05-12 18:58:47'),
(19, 'A19', 'Ayam Sambal matah', '10.000', 'Terfavorit', 'Terfavorit', '26,00 gr', '298 Kkal', 'Makanan Berat', '2023-05-12 19:00:58', '2023-05-12 19:00:58'),
(20, 'A20', 'Sayur Bening', '5.000', 'Enak', 'Biasa', '1.79 gr', '36 Kkal', 'Makanan Berat', '2023-05-12 19:05:36', '2023-05-12 19:05:36'),
(21, 'A21', 'Bihun', '5.000', 'Enak', 'Sedang', '26,00 gr', '298 Kkal', 'Makanan Berat', '2023-05-12 19:06:41', '2023-05-12 19:06:41'),
(22, 'A22', 'Gado - Gado', '10.000', 'Enak', 'Sedang', '7.14 gr', '132 Kkal', 'Makanan Berat', '2023-05-12 19:14:20', '2023-05-12 19:14:20'),
(23, 'A23', 'Air Mineral', '4.000', 'Biasa', 'Biasa', '0,00 gr', '0 Kkal', 'Minuman', '2023-05-12 19:16:09', '2023-05-12 19:16:09'),
(24, 'A24', 'Teh Tawar', '2.000', 'Biasa', 'Biasa', '0.02 gr', '2 Kkal', 'Minuman', '2023-05-12 19:17:10', '2023-05-12 19:31:09'),
(25, 'A25', 'Teh Manis', '3.000', 'Memuaskan', 'Memuaskan', '0,00 gr', '55 Kkal', 'Minuman', '2023-05-12 19:30:39', '2023-05-12 19:30:39'),
(26, 'A26', 'Sirup', '3.000', 'Enak', 'Sedang', '0,00 gr', '53 Kkal', 'Minuman', '2023-05-12 19:31:51', '2023-05-12 19:31:51'),
(27, 'A27', 'Jeruk Peras', '5.000', 'Enak', 'Sedang', '1,74 gr', '112 Kkal', 'Minuman', '2023-05-12 19:33:34', '2023-05-12 19:33:34'),
(28, 'A28', 'Susu Coklat', '4.000', 'Terfavorit', 'Terfavorit', '7,70 gr', '190 Kkal', 'Minuman', '2023-05-12 19:34:39', '2023-05-12 19:34:39'),
(29, 'A29', 'Susu Putih', '4.000', 'Biasa', 'Biasa', '7,86 gr', '140 Kkal', 'Minuman', '2023-05-12 19:35:57', '2023-05-12 19:35:57'),
(30, 'A30', 'Kopi', '4.000', 'Biasa', 'Biasa', '0,28 gr', '2 Kkal', 'Minuman', '2023-05-12 19:37:02', '2023-05-12 19:37:02'),
(31, 'A31', 'Teh Susu', '6.000', 'Enak', 'Biasa', '1.19 gr', '50 Kkal', 'Minuman', '2023-05-12 19:38:38', '2023-05-12 19:38:38'),
(32, 'A32', 'Nutrisari', '3.000', 'Terfavorit', 'Terfavorit', '0,00 gr', '50 Kkal', 'Minuman', '2023-05-12 19:39:51', '2023-05-12 19:39:51'),
(33, 'A33', 'Kerupuk', '1.000', 'Biasa', 'Biasa', '0,02 gr', '15 Kkal', 'Cemilan', '2023-05-12 19:40:35', '2023-05-12 19:40:35'),
(34, 'A34', 'Keripik', '2.000', 'Biasa', 'Biasa', '2,10 gr', '485 Kkal', 'Cemilan', '2023-05-12 19:41:26', '2023-05-12 19:41:26'),
(35, 'A35', 'Gorengan', '1. 500', 'Terfavorit', 'Terfavorit', '2,23 gr', '35 Kkal', 'Cemilan', '2023-05-12 19:42:10', '2023-05-14 09:14:24'),
(36, 'A36', 'Bolu', '2.000', 'Enak', 'Biasa', '4,60 gr', '187 Kkal', 'Cemilan', '2023-05-12 19:42:41', '2023-05-12 19:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2023_03_28_133106_create_menu_table', 2),
(7, '2023_04_04_030144_create_kriteria_table', 4),
(8, '2023_04_04_030222_create_keriteria_table', 4),
(10, '2014_10_12_000000_create_users_table', 5),
(11, '2014_10_12_100000_create_password_resets_table', 5),
(12, '2019_08_19_000000_create_failed_jobs_table', 5),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(14, '2023_04_04_033402_create_menu_table', 6),
(15, '2023_04_04_035633_create_kriteria_table', 7),
(16, '2023_04_04_055400_create_nilaikriteria_table', 8),
(17, '2023_04_13_152016_create_bobotperalternatif_table', 9),
(18, '2023_04_14_132408_create_hasil_table', 10),
(19, '2023_04_15_163308_create_bobotalternatif_table', 11),
(20, '2023_04_15_163522_create_bobotkriteria_table', 12),
(21, '2023_04_16_051729_create_jawaban_table', 13),
(22, '2023_04_17_061554_create_nilaikriteria_table', 14),
(23, '2023_04_20_143138_create_nilaicrips_table', 15),
(24, '2023_04_20_174148_create_kriteria_table', 16),
(25, '2023_05_04_031525_create_kriteriaharga_table', 17),
(26, '2023_05_04_032052_create_kategorimenu_table', 18),
(27, '2023_05_06_095541_create_jawabanuser_table', 19),
(28, '2023_05_12_163613_create_menuu_table', 20),
(29, '2023_05_12_181337_create_menu_table', 21),
(30, '2023_05_12_181719_create_menu_table', 22),
(31, '2023_05_13_015428_create_menu_table', 23),
(32, '2023_05_14_172835_create_jawaban_table', 24),
(33, '2023_05_15_035524_create_jawab_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `nilaicrips`
--

CREATE TABLE `nilaicrips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `nilai_crips` varchar(255) NOT NULL,
  `id_nilaikriteria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaicrips`
--

INSERT INTO `nilaicrips` (`id`, `id_kriteria`, `nilai_crips`, `id_nilaikriteria`, `created_at`, `updated_at`) VALUES
(1, 'Harga', '≤ Rp. 2.000', '4', '2023-04-20 06:35:59', '2023-05-10 06:25:05'),
(2, 'Harga', 'Rp. 3.000 – Rp. 8.000', '3', '2023-04-20 06:36:09', '2023-04-20 09:16:46'),
(3, 'Harga', 'Rp. 9.000 – Rp. 15. 000', '2', '2023-04-20 06:36:38', '2023-04-20 09:16:53'),
(4, 'Harga', 'Rp. 16.000', '1', '2023-04-20 06:36:48', '2023-04-20 09:17:11'),
(5, 'Rasa', 'Biasa', '1', '2023-04-20 06:38:04', '2023-04-20 09:17:32'),
(6, 'Rasa', 'Enak', '2', '2023-04-20 08:07:50', '2023-04-20 09:18:12'),
(7, 'Rasa', 'Terfavorit', '3', '2023-04-20 08:08:24', '2023-04-20 09:18:55'),
(8, 'Rasa', 'Memuaskan', '4', '2023-04-20 08:08:35', '2023-04-20 09:18:35'),
(9, 'Tingkat Popularitas', 'Biasa', '1', '2023-04-20 08:09:19', '2023-04-20 09:19:11'),
(10, 'Tingkat Popularitas', 'Sedang', '2', '2023-04-20 08:11:36', '2023-04-20 09:19:22'),
(11, 'Tingkat Popularitas', 'Terfavorit', '3', '2023-04-20 08:11:48', '2023-04-20 09:19:35'),
(12, 'Tingkat Popularitas', 'Memuaskan', '4', '2023-04-20 08:11:59', '2023-04-20 09:19:46'),
(13, 'Protein', '0,00 gr - 1,19 gr', '1', '2023-05-02 18:07:20', '2023-05-02 18:31:07'),
(14, 'Protein', '1,20 gr - 4,60 gr', '2', NULL, NULL),
(15, 'Protein', '4,61 gr - 8,00 gr', '3', NULL, NULL),
(16, 'Protein', '8,01 gr - 29,00 gr', '4', NULL, NULL),
(17, 'Kalori', '0 Kkal – 53 Kkal', '4', NULL, NULL),
(18, 'Kalori', '54 Kkal – 140 Kkal', '3', NULL, NULL),
(19, 'Kalori', '141 Kkal – 230 Kkal', '2', NULL, '2023-05-12 16:25:05'),
(20, 'Kalori', '231 Kkal – 563 Kkal', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilaikriteria`
--

CREATE TABLE `nilaikriteria` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `nilai_kriteria` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaikriteria`
--

INSERT INTO `nilaikriteria` (`id`, `nilai_kriteria`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-05-12 16:24:22'),
(2, 2, NULL, '2023-05-12 16:24:28'),
(3, 3, NULL, '2023-05-12 16:24:33'),
(4, 4, NULL, '2023-05-12 16:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rank` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_menu` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `rank`, `created_at`, `updated_at`, `id_menu`) VALUES
(1, 53.7, NULL, NULL, 1),
(2, 80.5, NULL, NULL, 2),
(3, 65.5, NULL, NULL, 3),
(4, 65.5, NULL, NULL, 4),
(5, 58.9, NULL, NULL, 5),
(6, 45.5, NULL, NULL, 6),
(7, 41, NULL, NULL, 7),
(8, 65.33, NULL, NULL, 8),
(9, 52.1, NULL, NULL, 9),
(10, 53.7, NULL, NULL, 10),
(11, 60.5, NULL, NULL, 11),
(12, 40.33, NULL, NULL, 12),
(13, 65.5, NULL, NULL, 13),
(14, 38.7, NULL, NULL, 14),
(15, 60.5, NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` bigint(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_kategorimenu` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `rasa` varchar(100) DEFAULT NULL,
  `tingkat` varchar(100) DEFAULT NULL,
  `protein` varchar(100) DEFAULT NULL,
  `kalori` varchar(100) DEFAULT NULL,
  `id_nilaikriteria` longtext DEFAULT NULL,
  `dataks` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `tanggal`, `id_kategorimenu`, `harga`, `rasa`, `tingkat`, `protein`, `kalori`, `id_nilaikriteria`, `dataks`) VALUES
(1, '2023-06-15', 'Makanan Berat', '≤ Rp. 2.000', 'Terfavorit', 'Memuaskan', '1,20 gr - 4,60 gr', '0 Kkal – 53 Kkal', '[\"4\",\"3\",\"4\",\"2\",\"4\"]', '[{\"kode_menu\":\"A08\",\"daftar_menu\":\"Mie Goreng\",\"harga\":\"5.000\",\"rasa\":\"Terfavorit\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Siti Fatimah', 'admin', 'admin123', 'admin@gmail.com', NULL, '$2y$10$Rc9rBZFyl4veyfoBzkodZuun0Uqa4xg7163P0ykjnlpa5IUh0.Nl6', 'NRjt1ubgnnsNAOMWI9o5I1jh1qpxJEz1OAJ9ZdXU0cqXNcBuJS35fKdAcVT3', '2023-04-11 08:56:52', '2023-04-11 08:56:52'),
(2, 'Fatimah Siti', 'user', 'user123', 'user@gmail.com', NULL, '$2y$10$dAmln0feQFM0Z2LIhAhOi.0vh6DLN0F6XkuTyBO4SK7PfoGjY4S1m', '61b3nEYf26LDJBze8TYjHSIJEeElNkaZXGuIWDKM49T2lSNkTa96oGL9GuQh', '2023-05-10 19:21:22', '2023-05-10 19:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobotkriteria`
--
ALTER TABLE `bobotkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jawaban` (`id_jawabanuser`),
  ADD KEY `id_jawabanuser` (`id_jawabanuser`);

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bobotkriteria` (`id_bobotkriteria`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaicrips`
--
ALTER TABLE `nilaicrips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nilaikriteria` (`id_nilaikriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `nilaikriteria`
--
ALTER TABLE `nilaikriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobotkriteria`
--
ALTER TABLE `bobotkriteria`
  MODIFY `id` bigint(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `nilaicrips`
--
ALTER TABLE `nilaicrips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nilaikriteria`
--
ALTER TABLE `nilaikriteria`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_jawabanuser`) REFERENCES `jawaban` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
