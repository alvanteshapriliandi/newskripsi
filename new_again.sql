-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jan 2018 pada 09.06
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
-- Database: `new_again`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banks`
--

CREATE TABLE `banks` (
  `id` int(11) UNSIGNED NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `name_bank` varchar(20) NOT NULL,
  `images_bank` text NOT NULL,
  `no_rekening` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banks`
--

INSERT INTO `banks` (`id`, `atas_nama`, `name_bank`, `images_bank`, `no_rekening`, `created_at`, `updated_at`) VALUES
(1, 'Techno Grhapic', 'Mandiri', 'Bank-Mandiri-Logo-Vector-Image.png', '1234567', '2018-01-04 17:00:00', NULL);

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
-- Struktur dari tabel `cetaks`
--

CREATE TABLE `cetaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `message_id` int(11) UNSIGNED NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cetaks`
--

INSERT INTO `cetaks` (`id`, `order_id`, `message_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 30, 0, '2018-01-14 17:00:00', '2018-01-14 17:00:00');

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
-- Struktur dari tabel `freelancer_payments`
--

CREATE TABLE `freelancer_payments` (
  `id` int(11) NOT NULL,
  `cetak_id` int(11) UNSIGNED NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `freelances`
--

CREATE TABLE `freelances` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `freelances`
--

INSERT INTO `freelances` (`id`, `user_id`, `no_rekening`, `created_at`, `updated_at`) VALUES
(1, 2, '1234567890', '2017-12-04 16:49:28', '2017-12-04 16:49:28'),
(2, 4, '123123', '2017-12-13 18:50:18', '2017-12-13 18:50:18');

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
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `fr_user_id` int(10) UNSIGNED NOT NULL,
  `to_user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `fr_user_id`, `to_user_id`, `order_id`, `message`, `images`, `created_at`, `updated_at`) VALUES
(26, 4, 5, 2, 'kofirmasi desain', NULL, '2018-01-12 08:30:20', '2018-01-12 08:30:20'),
(30, 4, 5, 2, 'mohon di cek', '13712358_1001662456597793_58424149_n.jpg', '2018-01-12 08:48:22', '2018-01-12 08:48:22');

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
(122, '2017_12_11_235211_create_payments_table', 3),
(123, '2017_12_15_045046_create_cetaks_table', 4),
(124, '2017_12_15_235102_create_messages_table', 4),
(125, '2017_12_23_024724_create_pengirimen_table', 5),
(126, '2017_12_23_024756_create_ulasans_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `Transaction_id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `nama_perushaan` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_telepon` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jenis_kertas` varchar(100) DEFAULT NULL,
  `kuantitas` int(10) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `kain` varchar(100) DEFAULT NULL,
  `ukuran` varchar(100) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `jenis_cetak` varchar(50) DEFAULT NULL,
  `bahan` varchar(100) DEFAULT NULL,
  `sisi` varchar(50) DEFAULT NULL,
  `jilid` varchar(25) DEFAULT NULL,
  `lembar` varchar(25) DEFAULT NULL,
  `cetak_depan` varchar(25) DEFAULT NULL,
  `cetak_belakang` varchar(25) DEFAULT NULL,
  `cetak_lengan_kanan` varchar(25) DEFAULT NULL,
  `cetak_lengan_kiri` varchar(25) DEFAULT NULL,
  `kaos_metode` varchar(50) DEFAULT NULL,
  `images` text,
  `description` text,
  `total` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `ket` int(1) NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `Transaction_id`, `nama`, `jabatan`, `nama_perushaan`, `alamat`, `no_telepon`, `email`, `jenis_kertas`, `kuantitas`, `model`, `kain`, `ukuran`, `warna`, `jenis_cetak`, `bahan`, `sisi`, `jilid`, `lembar`, `cetak_depan`, `cetak_belakang`, `cetak_lengan_kanan`, `cetak_lengan_kiri`, `kaos_metode`, `images`, `description`, `total`, `status`, `ket`, `created_at`, `updated_at`) VALUES
(2, 5, 21, 1, NULL, NULL, 'PT. Sukses Bersama', 'jl. Medan Binjai', '081263506016', 'alvan@mail.com', 'standart', 100, NULL, NULL, NULL, NULL, 'Pond', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'appicns_iTunes.png', 'Instagram : @alvan', 100000, 1, 3, '2018-01-04 17:00:00', NULL),
(3, 5, 22, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, '100 x 100 cm', NULL, 'Dgital Printing', 'FF CHina 340GR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c-6.jpg', 'Selamat Datang', 150000, 0, 3, '2018-01-06 17:00:00', '2018-01-06 17:00:00'),
(4, 6, 22, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100000, 0, 3, '2018-01-14 02:05:04', '2018-01-14 02:05:04');

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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `freelancer_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `jdl_Pdk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_awal` int(11) NOT NULL,
  `harga_promo` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `freelancer_id`, `subcategory_id`, `jdl_Pdk`, `harga_awal`, `harga_promo`, `description`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Elegant Kartu Nama', 0, 0, 'Keren', 'kartu nama 22.jpg', 1, '2017-12-04 16:57:22', '2017-12-11 03:48:32'),
(2, 2, 2, 'Elegant Square Card', 0, 0, 'Keren', 'CRB-2052-Luxe-RC-SQBC-Page-Content-1-460x329.jpg', 1, '2017-12-04 16:59:09', '2017-12-04 17:09:34'),
(3, 2, 3, 'Elegant Amplop', 0, 0, 'Keren', 'contoh-cetak-amplop-standar.jpg', 1, '2017-12-04 16:59:32', '2017-12-04 17:09:42'),
(4, 2, 4, 'Elegant Kop Surat', 0, 0, 'Keren', 'download.jpg', 1, '2017-12-04 17:00:08', '2017-12-04 17:09:53'),
(5, 2, 5, 'Elegant Stempel', 0, 0, 'Keren', '26.jpg', 1, '2017-12-04 17:00:37', '2017-12-04 17:10:24'),
(6, 2, 6, 'Elegant Kalender', 0, 0, 'Keren', 'download (1).jpg', 1, '2017-12-04 17:01:08', '2017-12-04 17:10:32'),
(7, 2, 7, 'Elegant Brosur', 0, 0, 'Keren', 'template.jpg', 1, '2017-12-04 17:01:55', '2017-12-04 17:10:41'),
(8, 2, 8, 'Elegant Stiker', 0, 0, 'Keren', 'Stiker_Label_Produk__ukuran_bulat_7_cm_.png', 1, '2017-12-04 17:02:26', '2017-12-04 17:10:59'),
(9, 2, 9, 'Elegant Poster', 0, 0, 'Keren', 'poster seminar 2.jpg', 1, '2017-12-04 17:03:01', '2017-12-04 17:10:49'),
(10, 2, 10, 'Elegant Goodle Bag', 0, 0, 'Keren', 'Spooktacular_goodiebag_LatishaYoast.jpg', 1, '2017-12-04 17:03:41', '2017-12-04 17:11:09'),
(11, 2, 11, 'Elegant Mug', 0, 0, 'Keren', 'img_20131113_120031.jpg', 1, '2017-12-04 17:04:10', '2017-12-04 17:11:16'),
(12, 2, 12, 'Elegant Bantal Foto', 0, 0, 'Keren', 'e15f606d04ba8e21ebcdd2c0673e2f8416c8f5d1a635efb504c9add154938d6a.jpg', 1, '2017-12-04 17:04:44', '2017-12-04 17:11:43'),
(13, 2, 13, 'Elegant Spanduk', 0, 0, 'Keren', 'spanduk.jpg', 1, '2017-12-04 17:05:21', '2017-12-04 17:11:52'),
(14, 2, 14, 'Elegant X-Banner', 0, 0, 'Keren', 'contoh-x-banner-design-designhub.jpg', 1, '2017-12-04 17:05:57', '2017-12-04 17:12:01'),
(15, 2, 15, 'Elegant Roll Up Banner', 0, 0, 'Keren', 'roll-up-banner1.jpg', 1, '2017-12-04 17:06:29', '2017-12-04 17:12:12'),
(16, 2, 16, 'Elegant Kaos', 0, 0, 'Keren', 'blogger-image--1642318615.jpg', 1, '2017-12-04 17:07:28', '2017-12-04 17:12:22'),
(17, 2, 17, 'Elegant Polo T-Shirt', 0, 0, 'Keren', 'RASED2polo3.jpg', 1, '2017-12-04 17:08:05', '2017-12-04 17:12:32'),
(18, 2, 3, 'Master Amplop', 0, 0, 'tampil percaya diri', 'Contoh-Desain-Amplop-Em-Cartaz-Branding-557x332.jpg', 1, '2017-12-08 15:33:19', '2017-12-08 15:34:26'),
(19, 2, 3, 'Collect Amplop', 0, 0, 'tampil percaya diri', 'Contoh-Desain-Amplop-Em-Cartaz-Branding-557x332.jpg', 1, '2017-12-08 15:36:38', '2017-12-08 15:37:04'),
(20, 2, 1, 'Collect Kartu Nama', 0, 0, 'tampil percaya diri', 'maxresdefault.jpg', 1, '2017-12-08 15:47:55', '2017-12-08 15:48:53'),
(21, 4, 3, 'Mantap Amplop', 0, 0, 'Keren dan Moderen', 'Contoh-Desain-Amplop-Em-Cartaz-Branding-557x332.jpg', 1, '2017-12-13 18:52:59', '2017-12-24 17:17:58'),
(22, 4, 13, 'Spanduk Promosi', 0, 0, 'Cocok untuk unsaha yang akan mengadakna promosi', 'spanduk-promosi.jpg', 1, '2017-12-24 18:14:01', '2017-12-24 18:14:20');

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
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `bank_id` int(11) UNSIGNED NOT NULL,
  `kode_invoice` varchar(10) NOT NULL,
  `images` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `status_cetak` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `bank_id`, `kode_invoice`, `images`, `status`, `status_cetak`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '1234567890', '1.jpg', 1, 1, '2018-01-04 17:00:00', '2018-01-15 16:57:27'),
(2, 6, 1, '12312434', 'hai.jpg', 2, 1, '2018-01-13 17:00:00', '2018-01-13 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasans`
--

CREATE TABLE `ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `freelance_id` int(10) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Chairil Azmi', 'admin@admin.com', '$2y$10$P2GfvX9GKM5cetT7VK89IeLxJ31y25tcBQE05Hc7FsO4ly6ZSY.z2', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'XWj6COb6IO0NQKui49jkf9K8mwmlYGCfhlorBoQG7VjRlyI3rKtemz7AK6KV', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(2, 'Reza Surya', 'reza@mail.com', '$2y$10$hjWto0qpOAHFyR08Ddnruu4UuZilAxdKV49MabvNn2muBLe48SuMK', 'B0D6iKUa9Gagyek6nmINkMXGH8t7bfHkmN26Lm7Nd8ps25DyXd8wugcNAH9b', NULL, NULL, NULL, NULL, NULL, 2, 'rwDCxetWuR3TTRgyDvfjgcOaFji75RogXthDvga7SJD9g4DRMXa4knfg4dkt', '2017-12-04 16:48:22', '2017-12-04 16:49:28'),
(3, 'Andi', 'andi@mail.com', '$2y$10$0u.i0C/wcrOl47p91DEYbOfVWODzuPyf6gm1ffwI3ebs8/YwZ1k36', 'NkJeky8avr5OBDKZQTI0WnR58ad581zcRT3azbxEmRDSGIxzgINvtEDpUzOy', NULL, NULL, NULL, NULL, NULL, 1, 'vaWcGvks1UCPYmkjAdDEAeqp0nsw7zT44SNX4Zf5qEYuwixezUFnj3EdhqU6', '2017-12-09 17:43:52', '2017-12-09 17:43:52'),
(4, 'Alvantesha Priliandi', 'alvan@mail.com', '$2y$10$zqSGNG5vwZikGMU9dub5F.ZdNjrSGGKftOI0i5P0o/wyH6bXGcaeC', '9m6TN9ApCQihcJhGnDDnhoO1LuLtTTuFxy6uUhLgliwnZpjNZpCdKAyxPB6I', 'DSC_0599.JPG', 'Jl. Medan - Binjai Km. 19 Kel. Tunggurono Kec. Binjai TImur Kota Binjai', 1, '081263506016', NULL, 2, 'YO7z2FxNtJOGYRwI6C86pyuxOTpeyM76E3hCVEhnWvqsueeCNU69BW6Ld2eZ', '2017-12-13 18:49:40', '2018-01-15 08:26:11'),
(5, 'Bagus', 'bagus@mail.com', '$2y$10$Ow4gqB4p6o69bZg8Uh4ByO1rZDqmEZKl4E8yARYdVaYsWGE.EmWOW', 'LMxjrWktAXxrzgvWcLYkw32FEbDzAzRKwrT5tDSCT0pRwGrPGoQ6e0XM7vZD', NULL, NULL, NULL, NULL, NULL, 1, 'RAELKGZPEb6oDe58jZNdRvGSwgdXYcUAWyC3OkusgwZIDXpejaBBEWi2ijUz', '2017-12-13 20:36:13', '2017-12-13 20:36:13'),
(6, 'Rani', 'rani@mail.com', '$2y$10$B.XI4nY1l7xg0m6h5miusu5gohyf9Pl42cTPripAD4WEKh43ujp5y', 'cYZw0yB5CFF3ubD4fSmBG6kjzgwpyRkf16CwDwCezvKgeaHNdwQaqevy0qAz', NULL, NULL, NULL, NULL, NULL, 1, 'O7HhSh58PkHERYS7EEGFz7vP8ZmJQSbvanjGtZetjSkFapeRKdHOPGz5mE4s', '2017-12-14 02:39:26', '2017-12-14 02:39:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cetaks`
--
ALTER TABLE `cetaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancer_payments`
--
ALTER TABLE `freelancer_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelances`
--
ALTER TABLE `freelances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasans`
--
ALTER TABLE `ulasans`
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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cetaks`
--
ALTER TABLE `cetaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freelancer_payments`
--
ALTER TABLE `freelancer_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelances`
--
ALTER TABLE `freelances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
