-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2017 pada 14.48
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `BN_userid` int(10) UNSIGNED NOT NULL,
  `BN_productid` int(10) UNSIGNED NOT NULL,
  `BN_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BN_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BN_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BN_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BN_pemesanan` int(11) NOT NULL,
  `BN_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `BN_userid`, `BN_productid`, `BN_description`, `BN_images`, `BN_ukuran`, `BN_jenis`, `BN_pemesanan`, `BN_total`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'sdsdasd', '13712358_1001662456597793_58424149_n.jpg', '100 X 100 CM', 'FF Korea 440 GR', 1, 12312, '2017-12-08 19:03:31', '2017-12-08 19:03:31'),
(3, 2, 1, 'sdsadasda', 'appicns_iTunes.png', '60 X 160 CM', 'FF Korea 440 GR', 12, 213, '2017-12-08 20:05:20', '2017-12-08 20:05:20'),
(4, 3, 13, 'hai', 'appicns_iTunes.png', '100 x 200', 'FF Korea 440 GR', 2, 20000, '2017-12-11 03:44:52', '2017-12-11 03:44:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantalfotos`
--

CREATE TABLE `bantalfotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `BT_userid` int(10) UNSIGNED NOT NULL,
  `BT_productid` int(10) UNSIGNED NOT NULL,
  `BT_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BT_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BT_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BT_kain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BT_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BT_warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BT_pemesanan` int(11) NOT NULL,
  `BT_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `brosurs`
--

CREATE TABLE `brosurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `BR_userid` int(10) UNSIGNED NOT NULL,
  `BR_productid` int(10) UNSIGNED NOT NULL,
  `BR_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_pemesanan` int(11) NOT NULL,
  `BR_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_kertas` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_total` int(11) NOT NULL,
  `BR_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BR_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brosurs`
--

INSERT INTO `brosurs` (`id`, `BR_userid`, `BR_productid`, `BR_perusahaan`, `BR_alamat`, `BR_tlp`, `BR_email`, `BR_pemesanan`, `BR_ukuran`, `BR_kertas`, `BR_total`, `BR_description`, `BR_images`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'asasdasd', 'adsasdas', '1312323343', 'asd@mail.com', 1, 'A3 (29.7 X 42 cm)', 'Standart', 1233434, 'sdasdasda', 'c-4.jpg', '2017-12-08 16:10:38', '2017-12-08 16:10:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kartu Nama', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(2, 'Office Stationery', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(3, 'Marketing Material', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(4, 'Promotional Gifts', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(5, 'Banner & Signs', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(6, 'Clothings', '2017-12-04 03:14:25', '2017-12-04 03:14:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `freelancers`
--

INSERT INTO `freelancers` (`id`, `username`, `email`, `password`, `api_token`, `photo`, `address`, `gender`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harmony Pouros', 'cfay@hahn.com', '$2y$10$.KExq9B0Fp.1DX4KeJK4ku6SFK8K731nl806gXQiuldDchgMy936C', 'huOJ6b5a1rYirc9GLxHJyokwt5kAGz6ulhA5ZxDz2wv2XKBIqd4T8VaJy90K', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:26', '2017-12-04 03:14:26'),
(2, 'Briana Emmerich', 'bradly.kris@yahoo.com', '$2y$10$NxGyPHdkRitC0fCw0E.up.ujxMlTn7VpwvX4QL2THGSzokU.Icf1O', 'rvsbka3GAHN8Yq53OxDl8eMmaOOljFl4PXFqcyoqb3C7HMBjcF4vFsf1mdvN', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:26', '2017-12-04 03:14:26'),
(3, 'Dahlia Schultz', 'rhianna.johnston@yahoo.com', '$2y$10$aIefB3YrwMfu6eORY03YtOqZvAeiMoOWZKB96p1dvkPNt8qaOvH/C', '1dlr8imcOmSJdKIVWfbb8vII4UlNvb7zu3pEZCeTiCJDUzr8MBAaQVmpYN7u', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:26', '2017-12-04 03:14:26'),
(4, 'Damien Grant', 'lehner.edgardo@breitenberg.com', '$2y$10$uUH6xhcRw3xaMkrAl/MO8eZGpcwpvU/dY2Ewsy6tw63e0pUtEw9/G', 'va0yFYcLzZGEa0UfVuBN45wr6NLznGSpFlxVeUL3E6Kl1YABXEegel0ev3vH', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27'),
(5, 'Prof. Edwin Weissnat', 'williamson.rae@hotmail.com', '$2y$10$woRG7rHnb1cHv3.oOfU.3epZ02ouTEnB1eNrFqXWeJIsg8zcGyVBq', 'RDRNnQY38ocogrrIq4iDw1ecIxjv2XW1k1btqKHtOKqTGE24NCbYGVOIXSwm', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27'),
(6, 'Naomi Maggio III', 'jamil.braun@connelly.com', '$2y$10$W/nfQgk0FtDdspJHskDhhOwKPW1kCG1NPOuVAj..EdUq.Zh1hqCBW', 'Ddv9GSAUauHWIN2cNSmEotIPa8D33djSduPwNiT2dxKfi826JbWrIz7oMrb8', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27'),
(7, 'Dr. Max Gorczany MD', 'santino95@gutmann.info', '$2y$10$xLof6EMvUy3vgdCxbRQrfucrFvl5xKbrfVjwT5Cy4890qPHAe9Mj2', 'YHlyPJ0ECTIuV4iNXjtfAaoOGR3aYTA8Ws0Kevc4XXD9cQQZ9BcCWUfo89cb', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27'),
(8, 'Doyle Crooks', 'rodriguez.robert@yahoo.com', '$2y$10$xuaXs/WKAMkrssB.f2JgFecBRXAtmOEYwOhz893STggQeohvZ3wvO', 'G8G2U2DgABftqQPdX6OK5KmZPyvI69mOCGho2T90oHYlID9r2MONjwf7Mi6k', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27'),
(9, 'Kaela Steuber', 'leffler.jedediah@green.org', '$2y$10$w.7IJ70suVoADzDLqzFtjORPglcb6xpN3xOkYgYVFWKEPQsJA8t9C', 'pJcrklaxbuE18o5qIYyVBV949CyLd3TNz6gzqvqBPyiVDNpnV9ADjP8cjocz', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27'),
(10, 'Samanta D\'Amore', 'rsanford@gmail.com', '$2y$10$y4QRQBmgwPSWh0ANdVFrWeBwF.1XGB66sPG22rOEPRHjjPU9C.bVm', '5ZJlwFc6X9BviZn25JB442yIpxLqcbTr8qX4y5Fnd1O8Dn3yxfH9GQouPcVx', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 03:14:27', '2017-12-04 03:14:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `freelances`
--

CREATE TABLE `freelances` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `freelances`
--

INSERT INTO `freelances` (`id`, `user_id`, `alamat`, `no_tlp`, `no_rekening`, `images`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jl. Medan-Binjai Km. 15', '081263506016', '1234567890', 'c-8.jpg', '2017-12-04 16:49:28', '2017-12-04 16:49:28'),
(2, 4, 'Jl. medan', '12312', '123123', 'c-4.jpg', '2017-12-13 18:50:18', '2017-12-13 18:50:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `goodlebags`
--

CREATE TABLE `goodlebags` (
  `id` int(10) UNSIGNED NOT NULL,
  `GD_userid` int(10) UNSIGNED NOT NULL,
  `GD_productid` int(10) UNSIGNED NOT NULL,
  `GD_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_bahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_sisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_warna` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_total` int(11) NOT NULL,
  `GD_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `GD_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalenders`
--

CREATE TABLE `kalenders` (
  `id` int(10) UNSIGNED NOT NULL,
  `KL_userid` int(10) UNSIGNED NOT NULL,
  `KL_productid` int(10) UNSIGNED NOT NULL,
  `KL_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_pemesanan` int(11) NOT NULL,
  `KL_jilid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_kertas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_lembar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_total` int(11) NOT NULL,
  `KL_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KL_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaos`
--

CREATE TABLE `kaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `KS_userid` int(10) UNSIGNED NOT NULL,
  `KS_productid` int(10) UNSIGNED NOT NULL,
  `KS_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_bahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KS_pemesanan` int(11) NOT NULL,
  `KS_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartus`
--

CREATE TABLE `kartus` (
  `id` int(10) UNSIGNED NOT NULL,
  `KR_userid` int(10) UNSIGNED NOT NULL,
  `KR_productid` int(10) UNSIGNED NOT NULL,
  `KR_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_pemesanan` int(11) NOT NULL,
  `KR_kertas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KR_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KR_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kartus`
--

INSERT INTO `kartus` (`id`, `KR_userid`, `KR_productid`, `KR_nama`, `KR_jabatan`, `KR_perusahaan`, `KR_alamat`, `KR_tlp`, `KR_email`, `KR_pemesanan`, `KR_kertas`, `KR_total`, `KR_description`, `KR_images`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'asdasa', 'asdasdas', 'sdasdas', 'asdadsasd', '123123', 'as@mail.com', 50, 'Standart', '12312', 'qweqwe', 'download (1).png', '2017-12-08 17:19:12', '2017-12-08 17:19:12'),
(2, 2, 1, 'asdasd', 'asdas', 'asdasdas', 'wadasd', '123123', 'sad@mail.com', 100, 'Standart', '2312', 'asdasdadasasd', 'appicns_iTunes.png', '2017-12-08 19:07:29', '2017-12-08 19:07:29');

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
(67, '2017_11_02_021331_create_cards_table', 1),
(102, '2014_10_12_000000_create_users_table', 2),
(103, '2014_10_12_100000_create_password_resets_table', 2),
(104, '2017_07_22_092811_create_images_table', 2),
(105, '2017_07_23_074027_create_product_table', 2),
(106, '2017_08_04_045713_create_categories_table', 2),
(107, '2017_08_04_085544_create_subcategories_table', 2),
(108, '2017_11_26_100530_create_freelances_table', 2),
(109, '2017_11_30_025902_create_goodlebags_table', 2),
(110, '2017_11_30_030020_create_mugs_table', 2),
(111, '2017_11_30_030045_create_bantalfotos_table', 2),
(112, '2017_11_30_030602_create_kaos_table', 2),
(113, '2017_11_30_030621_create_polos_table', 2),
(114, '2017_11_30_030824_create_stempels_table', 2),
(115, '2017_11_30_030942_create_kalenders_table', 2),
(116, '2017_11_30_030957_create_brosurs_table', 2),
(117, '2017_11_30_031021_create_stikers_table', 2),
(118, '2017_11_30_031032_create_posters_table', 2),
(119, '2017_11_30_054430_create_kartus_table', 2),
(120, '2017_11_30_054509_create_offices_table', 2),
(121, '2017_11_30_054522_create_banners_table', 2),
(122, '2017_12_11_235211_create_payments_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mugs`
--

CREATE TABLE `mugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `MG_userid` int(10) UNSIGNED NOT NULL,
  `MG_productid` int(10) UNSIGNED NOT NULL,
  `MG_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MG_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MG_jenis_mug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MG_jumlah_mug` int(11) NOT NULL,
  `MG_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `offices`
--

CREATE TABLE `offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `OF_userid` int(10) UNSIGNED NOT NULL,
  `OF_productid` int(10) UNSIGNED NOT NULL,
  `OF_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_pemesanan` int(11) NOT NULL,
  `OF_kertas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_total` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `OF_status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `offices`
--

INSERT INTO `offices` (`id`, `OF_userid`, `OF_productid`, `OF_perusahaan`, `OF_alamat`, `OF_tlp`, `OF_email`, `OF_pemesanan`, `OF_kertas`, `OF_total`, `OF_description`, `OF_images`, `OF_status`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 'sdadasd', 'asdasd', '1243214', 'as@mail.com', 50, 'standart', '12312', 'sdfsfdsfsdf', 'c-8.jpg', 0, '2017-12-08 17:27:52', '2017-12-08 17:27:52'),
(4, 5, 21, 'Hai', 'Jalan Medan', '0812313423', 'asd@mail.com', 50, 'standart', '30000', 'blom ada', 'download (2).jpg', 1, '2017-12-13 20:37:20', '2017-12-14 03:21:39'),
(5, 6, 21, 'cilukba', 'Jln. Medan binjai', '0912321', 'cilukba@mail.com', 100, 'medium', '200000', 'pin BB; 7f4gd23', 'appicns_iTunes.png', 1, '2017-12-14 02:40:57', '2017-12-14 03:09:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `paymentId` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `BN_ID` int(11) UNSIGNED DEFAULT NULL,
  `BT_ID` int(11) UNSIGNED DEFAULT NULL,
  `BR_ID` int(11) UNSIGNED DEFAULT NULL,
  `GD_ID` int(11) UNSIGNED DEFAULT NULL,
  `KL_ID` int(11) UNSIGNED DEFAULT NULL,
  `KS_ID` int(11) UNSIGNED DEFAULT NULL,
  `KR_ID` int(11) UNSIGNED DEFAULT NULL,
  `MG_ID` int(11) UNSIGNED DEFAULT NULL,
  `OF_ID` int(11) UNSIGNED DEFAULT NULL,
  `PL_ID` int(11) UNSIGNED DEFAULT NULL,
  `PT_ID` int(11) UNSIGNED DEFAULT NULL,
  `SM_ID` int(11) UNSIGNED DEFAULT NULL,
  `ST_ID` int(11) UNSIGNED DEFAULT NULL,
  `kd_invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaBank` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payments`
--

INSERT INTO `payments` (`paymentId`, `user_id`, `BN_ID`, `BT_ID`, `BR_ID`, `GD_ID`, `KL_ID`, `KS_ID`, `KR_ID`, `MG_ID`, `OF_ID`, `PL_ID`, `PT_ID`, `SM_ID`, `ST_ID`, `kd_invoice`, `namaBank`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `images`, `status`, `created_at`, `updated_at`) VALUES
(9, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, 'BNSzv3VL', 'Mandiri', 'Jl. Masjid Lk. V', 'Jati Karya', 'Binjai Utara', 'Binjai', '13712358_1001662456597793_58424149_n.jpg', 0, '2017-12-14 03:09:35', '2017-12-14 03:09:35'),
(12, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, 'P7YBa7wH', 'BRI', 'Jl. Medan Binjai KM. 19', 'Tunggurono', 'Binjai Timur', 'Binjai', 'basketball-wallpaper-1280x768-1180x768.jpg', 0, '2017-12-14 03:22:11', '2017-12-14 03:22:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polos`
--

CREATE TABLE `polos` (
  `id` int(10) UNSIGNED NOT NULL,
  `PL_userid` int(10) UNSIGNED NOT NULL,
  `PL_productid` int(10) UNSIGNED NOT NULL,
  `PL_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_metode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_lengan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_Belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL_pemesanan` int(11) NOT NULL,
  `PL_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `polos`
--

INSERT INTO `polos` (`id`, `PL_userid`, `PL_productid`, `PL_description`, `PL_images`, `PL_material`, `PL_metode`, `PL_depan`, `PL_lengan`, `PL_Belakang`, `PL_warna`, `PL_ukuran`, `PL_pemesanan`, `PL_total`, `created_at`, `updated_at`) VALUES
(1, 3, 17, 'Mantapz', 'math.png', 'GILDAN POLO SHIRT', 'Print', 'RIGHT CHEST', 'NONE', 'BACK 30X10CM', 'Dark Brown', 'XL - Extra Large', 50, 100000, '2017-12-14 00:30:35', '2017-12-14 00:30:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posters`
--

CREATE TABLE `posters` (
  `id` int(10) UNSIGNED NOT NULL,
  `PT_userid` int(10) UNSIGNED NOT NULL,
  `PT_productid` int(10) UNSIGNED NOT NULL,
  `PT_pemesanan` int(11) NOT NULL,
  `PT_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PT_kertas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PT_total` int(11) NOT NULL,
  `PT_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PT_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posters`
--

INSERT INTO `posters` (`id`, `PT_userid`, `PT_productid`, `PT_pemesanan`, `PT_ukuran`, `PT_kertas`, `PT_total`, `PT_description`, `PT_images`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 21312, 'B2 (50 x 70.7 cm)', 'Standart', 1231231, 'sdsdsad', '13712358_1001662456597793_58424149_n.jpg', '2017-12-08 18:38:23', '2017-12-08 18:38:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `freelancer_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `jdl_Pdk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `freelancer_id`, `subcategory_id`, `jdl_Pdk`, `description`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Elegant Kartu Nama', 'Keren', 'kartu nama 22.jpg', 1, '2017-12-04 16:57:22', '2017-12-11 03:48:32'),
(2, 2, 2, 'Elegant Square Card', 'Keren', 'CRB-2052-Luxe-RC-SQBC-Page-Content-1-460x329.jpg', 1, '2017-12-04 16:59:09', '2017-12-04 17:09:34'),
(3, 2, 3, 'Elegant Amplop', 'Keren', 'contoh-cetak-amplop-standar.jpg', 1, '2017-12-04 16:59:32', '2017-12-04 17:09:42'),
(4, 2, 4, 'Elegant Kop Surat', 'Keren', 'download.jpg', 1, '2017-12-04 17:00:08', '2017-12-04 17:09:53'),
(5, 2, 5, 'Elegant Stempel', 'Keren', '26.jpg', 1, '2017-12-04 17:00:37', '2017-12-04 17:10:24'),
(6, 2, 6, 'Elegant Kalender', 'Keren', 'download (1).jpg', 1, '2017-12-04 17:01:08', '2017-12-04 17:10:32'),
(7, 2, 7, 'Elegant Brosur', 'Keren', 'template.jpg', 1, '2017-12-04 17:01:55', '2017-12-04 17:10:41'),
(8, 2, 8, 'Elegant Stiker', 'Keren', 'Stiker_Label_Produk__ukuran_bulat_7_cm_.png', 1, '2017-12-04 17:02:26', '2017-12-04 17:10:59'),
(9, 2, 9, 'Elegant Poster', 'Keren', 'poster seminar 2.jpg', 1, '2017-12-04 17:03:01', '2017-12-04 17:10:49'),
(10, 2, 10, 'Elegant Goodle Bag', 'Keren', 'Spooktacular_goodiebag_LatishaYoast.jpg', 1, '2017-12-04 17:03:41', '2017-12-04 17:11:09'),
(11, 2, 11, 'Elegant Mug', 'Keren', 'img_20131113_120031.jpg', 1, '2017-12-04 17:04:10', '2017-12-04 17:11:16'),
(12, 2, 12, 'Elegant Bantal Foto', 'Keren', 'e15f606d04ba8e21ebcdd2c0673e2f8416c8f5d1a635efb504c9add154938d6a.jpg', 1, '2017-12-04 17:04:44', '2017-12-04 17:11:43'),
(13, 2, 13, 'Elegant Spanduk', 'Keren', 'spanduk.jpg', 1, '2017-12-04 17:05:21', '2017-12-04 17:11:52'),
(14, 2, 14, 'Elegant X-Banner', 'Keren', 'contoh-x-banner-design-designhub.jpg', 1, '2017-12-04 17:05:57', '2017-12-04 17:12:01'),
(15, 2, 15, 'Elegant Roll Up Banner', 'Keren', 'roll-up-banner1.jpg', 1, '2017-12-04 17:06:29', '2017-12-04 17:12:12'),
(16, 2, 16, 'Elegant Kaos', 'Keren', 'blogger-image--1642318615.jpg', 1, '2017-12-04 17:07:28', '2017-12-04 17:12:22'),
(17, 2, 17, 'Elegant Polo T-Shirt', 'Keren', 'RASED2polo3.jpg', 1, '2017-12-04 17:08:05', '2017-12-04 17:12:32'),
(18, 2, 3, 'Master Amplop', 'tampil percaya diri', 'Contoh-Desain-Amplop-Em-Cartaz-Branding-557x332.jpg', 1, '2017-12-08 15:33:19', '2017-12-08 15:34:26'),
(19, 2, 3, 'Collect Amplop', 'tampil percaya diri', 'Contoh-Desain-Amplop-Em-Cartaz-Branding-557x332.jpg', 1, '2017-12-08 15:36:38', '2017-12-08 15:37:04'),
(20, 2, 1, 'Collect Kartu Nama', 'tampil percaya diri', 'maxresdefault.jpg', 1, '2017-12-08 15:47:55', '2017-12-08 15:48:53'),
(21, 4, 3, 'Mantp Amplop', 'Keren dan Moderen', '13712358_1001662456597793_58424149_n.jpg', 1, '2017-12-13 18:52:59', '2017-12-13 18:53:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stempels`
--

CREATE TABLE `stempels` (
  `id` int(10) UNSIGNED NOT NULL,
  `SM_userid` int(10) UNSIGNED NOT NULL,
  `SM_productid` int(10) UNSIGNED NOT NULL,
  `SM_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SM_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SM_pemesanan` int(11) NOT NULL,
  `SM_warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SM_total` int(11) NOT NULL,
  `SM_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SM_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stempels`
--

INSERT INTO `stempels` (`id`, `SM_userid`, `SM_productid`, `SM_perusahaan`, `SM_ukuran`, `SM_pemesanan`, `SM_warna`, `SM_total`, `SM_description`, `SM_images`, `created_at`, `updated_at`) VALUES
(2, 3, 5, 'Coffe Day', '58 x 22 mm', 3, 'Merah', 30000, 'Jl. medan Binjai hubungi : 081263506016', 'c-8.jpg', '2017-12-11 02:53:37', '2017-12-11 02:53:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stikers`
--

CREATE TABLE `stikers` (
  `id` int(10) UNSIGNED NOT NULL,
  `ST_userid` int(10) UNSIGNED NOT NULL,
  `ST_productid` int(10) UNSIGNED NOT NULL,
  `ST_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ST_material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ST_total` int(11) NOT NULL,
  `ST_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ST_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kartu Nama', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(2, 1, 'Square Card', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(3, 2, 'Amplop', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(4, 2, 'Kop Surat', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(5, 2, 'Stempel', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(6, 3, 'Kalender', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(7, 3, 'Brosur', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(8, 3, 'Stiker', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(9, 3, 'Poster', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(10, 4, 'Goodle Bag', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(11, 4, 'Mug', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(12, 4, 'Bantal Foto', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(13, 5, 'Spanduk', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(14, 5, 'X-banner', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(15, 5, 'Roll Up Banner', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(16, 6, 'Kaos', '2017-12-04 03:14:25', '2017-12-04 03:14:25'),
(17, 6, 'Polo Shirt', '2017-12-04 03:14:26', '2017-12-04 03:14:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `api_token`, `photo`, `address`, `gender`, `phone`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alvantesha Priliandi', 'admin@admin.com', '$2y$10$P2GfvX9GKM5cetT7VK89IeLxJ31y25tcBQE05Hc7FsO4ly6ZSY.z2', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Sz1lUr0f3nAljVbA3dAfWxJcYo6N6j1dCd3f8nxVdsDlmGfdZXWX1ukiuRBE', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(2, 'Reza Surya', 'reza@mail.com', '$2y$10$hjWto0qpOAHFyR08Ddnruu4UuZilAxdKV49MabvNn2muBLe48SuMK', 'B0D6iKUa9Gagyek6nmINkMXGH8t7bfHkmN26Lm7Nd8ps25DyXd8wugcNAH9b', NULL, NULL, NULL, NULL, NULL, 2, 'RfNcTTX40P7vQvOiBuulI865QcFfas5tEnnhAWDwDVF2RGs8iTjpG5Q7VPDt', '2017-12-04 16:48:22', '2017-12-04 16:49:28'),
(3, 'Andi', 'andi@mail.com', '$2y$10$0u.i0C/wcrOl47p91DEYbOfVWODzuPyf6gm1ffwI3ebs8/YwZ1k36', 'NkJeky8avr5OBDKZQTI0WnR58ad581zcRT3azbxEmRDSGIxzgINvtEDpUzOy', NULL, NULL, NULL, NULL, NULL, 1, 'vaWcGvks1UCPYmkjAdDEAeqp0nsw7zT44SNX4Zf5qEYuwixezUFnj3EdhqU6', '2017-12-09 17:43:52', '2017-12-09 17:43:52'),
(4, 'Agus', 'agus@mail.com', '$2y$10$zqSGNG5vwZikGMU9dub5F.ZdNjrSGGKftOI0i5P0o/wyH6bXGcaeC', '9m6TN9ApCQihcJhGnDDnhoO1LuLtTTuFxy6uUhLgliwnZpjNZpCdKAyxPB6I', NULL, NULL, NULL, NULL, NULL, 2, 'XQgCPGXtKwYt3Hh40c5qsbwY1NZhvkTG8Slw4hNEigp0hEVg5o2CnZByXq5K', '2017-12-13 18:49:40', '2017-12-13 18:50:18'),
(5, 'Bagus', 'bagus@mail.com', '$2y$10$Ow4gqB4p6o69bZg8Uh4ByO1rZDqmEZKl4E8yARYdVaYsWGE.EmWOW', 'LMxjrWktAXxrzgvWcLYkw32FEbDzAzRKwrT5tDSCT0pRwGrPGoQ6e0XM7vZD', NULL, NULL, NULL, NULL, NULL, 1, 'QdOJlrssuZDTUPuY9RF2oKXkwVrCAkU25QvVJDuXARu0Nlq65EwCymCefvxi', '2017-12-13 20:36:13', '2017-12-13 20:36:13'),
(6, 'Rani', 'rani@mail.com', '$2y$10$B.XI4nY1l7xg0m6h5miusu5gohyf9Pl42cTPripAD4WEKh43ujp5y', 'cYZw0yB5CFF3ubD4fSmBG6kjzgwpyRkf16CwDwCezvKgeaHNdwQaqevy0qAz', NULL, NULL, NULL, NULL, NULL, 1, 'YyH8enLseclHsxfknn4uRUw4AG97U7rduCPLnPyhXvnWiWyyGjHF0i0DIIaU', '2017-12-14 02:39:26', '2017-12-14 02:39:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bantalfotos`
--
ALTER TABLE `bantalfotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brosurs`
--
ALTER TABLE `brosurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelances`
--
ALTER TABLE `freelances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goodlebags`
--
ALTER TABLE `goodlebags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalenders`
--
ALTER TABLE `kalenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaos`
--
ALTER TABLE `kaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartus`
--
ALTER TABLE `kartus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mugs`
--
ALTER TABLE `mugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `polos`
--
ALTER TABLE `polos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stempels`
--
ALTER TABLE `stempels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stikers`
--
ALTER TABLE `stikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bantalfotos`
--
ALTER TABLE `bantalfotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brosurs`
--
ALTER TABLE `brosurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freelances`
--
ALTER TABLE `freelances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goodlebags`
--
ALTER TABLE `goodlebags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kalenders`
--
ALTER TABLE `kalenders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kaos`
--
ALTER TABLE `kaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartus`
--
ALTER TABLE `kartus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `mugs`
--
ALTER TABLE `mugs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `polos`
--
ALTER TABLE `polos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stempels`
--
ALTER TABLE `stempels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stikers`
--
ALTER TABLE `stikers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
