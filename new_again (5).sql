-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jan 2018 pada 11.42
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
-- Struktur dari tabel `bentuk`
--

CREATE TABLE `bentuk` (
  `id` int(11) NOT NULL,
  `nama_bentuk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bentuk`
--

INSERT INTO `bentuk` (`id`, `nama_bentuk`) VALUES
(1, 'Persegi'),
(3, 'Guling'),
(4, 'Persegi Panjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 6, '2018-01-22 16:25:16', '2018-01-22 16:25:16'),
(3, 7, '2018-01-22 16:35:00', '2018-01-22 16:35:00'),
(4, 10, '2018-01-26 23:11:35', '2018-01-26 23:11:35'),
(5, 8, '2018-01-26 23:15:57', '2018-01-26 23:15:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
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
(3, 2, 30, 1, '2018-01-18 17:00:00', '2018-01-18 20:03:08');

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
  `order_id` int(11) UNSIGNED NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `freelancer_payments`
--

INSERT INTO `freelancer_payments` (`id`, `order_id`, `pendapatan`, `created_at`, `updated_at`) VALUES
(9, 2, 30000, '2018-01-18 20:17:58', '2018-01-18 20:17:58'),
(10, 3, 45000, '2018-01-18 20:18:31', '2018-01-18 20:18:31');

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
  `freelancer_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `cart_id` int(11) UNSIGNED NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `product_id`, `cart_id`, `jenis_kertas`, `kuantitas`, `model`, `kain`, `ukuran`, `warna`, `jenis_cetak`, `bahan`, `sisi`, `jilid`, `lembar`, `cetak_depan`, `cetak_belakang`, `cetak_lengan_kanan`, `cetak_lengan_kiri`, `kaos_metode`, `created_at`, `updated_at`) VALUES
(6, 4, 2, 'Extra Fancy', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 16:25:42', '2018-01-22 16:25:42'),
(7, 7, 2, 'Standart', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 16:28:26', '2018-01-22 16:28:26'),
(8, 3, 4, 'Extra Fancy', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-26 23:11:35', '2018-01-26 23:11:35'),
(9, 7, 5, 'Standart', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-26 23:15:57', '2018-01-26 23:15:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `subcategory_id` int(11) UNSIGNED NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `jlh_pesanan` varchar(20) DEFAULT NULL,
  `jns_finishing` varchar(30) DEFAULT NULL,
  `harga` int(12) NOT NULL,
  `jns_kertas` varchar(50) DEFAULT NULL,
  `bentuk` varchar(50) DEFAULT NULL,
  `ukuran` varchar(50) DEFAULT NULL,
  `tipe_jilid` varchar(50) DEFAULT NULL,
  `jlh_lembar` varchar(50) DEFAULT NULL,
  `jns_material` varchar(50) DEFAULT NULL,
  `model_pegangan` varchar(50) DEFAULT NULL,
  `bahan` varchar(50) DEFAULT NULL,
  `sisi` varchar(50) DEFAULT NULL,
  `jns_mug` varchar(50) DEFAULT NULL,
  `model_bantal` varchar(50) DEFAULT NULL,
  `jenis_kain` varchar(50) DEFAULT NULL,
  `cetak_belakang` varchar(50) DEFAULT NULL,
  `cetak_depan` varchar(50) DEFAULT NULL,
  `cetak_lengan` varchar(50) DEFAULT NULL,
  `cetak_kiri` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`id`, `subcategory_id`, `satuan`, `jlh_pesanan`, `jns_finishing`, `harga`, `jns_kertas`, `bentuk`, `ukuran`, `tipe_jilid`, `jlh_lembar`, `jns_material`, `model_pegangan`, `bahan`, `sisi`, `jns_mug`, `model_bantal`, `jenis_kain`, `cetak_belakang`, `cetak_depan`, `cetak_lengan`, `cetak_kiri`, `created_at`, `updated_at`) VALUES
(89, 1, 'Kotak', '1', 'Laminating Doff', 30000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 2, 'Kotak', '1', 'Laminating Doff', 25000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 1, 'Kotak', '2', 'Laminating Doff', 30000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 17, 'Lusin ', '1', 'Print', 100000, NULL, NULL, 'XS - Extra Small', NULL, NULL, NULL, NULL, 'GILDAN POLO SHIRT', NULL, NULL, NULL, NULL, 'BACK 30X10CM', 'RIGHT CHEST', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mats`
--

CREATE TABLE `mats` (
  `id` int(11) NOT NULL,
  `subcategory_id` int(11) UNSIGNED NOT NULL,
  `jlh_pesanan` varchar(20) DEFAULT NULL,
  `jns_finishing` varchar(20) DEFAULT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mats`
--

INSERT INTO `mats` (`id`, `subcategory_id`, `jlh_pesanan`, `jns_finishing`, `harga`) VALUES
(1, 0, '50', '50', 112123);

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
  `product_id` int(11) UNSIGNED NOT NULL,
  `transaction_id` int(11) UNSIGNED NOT NULL,
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
  `status_frpay` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `transaction_id`, `jenis_kertas`, `kuantitas`, `model`, `kain`, `ukuran`, `warna`, `jenis_cetak`, `bahan`, `sisi`, `jilid`, `lembar`, `cetak_depan`, `cetak_belakang`, `cetak_lengan_kanan`, `cetak_lengan_kiri`, `kaos_metode`, `status_frpay`, `created_at`, `updated_at`) VALUES
(2, 21, 1, 'standart', 100, NULL, NULL, NULL, NULL, 'Pond', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-01-04 17:00:00', NULL),
(3, 22, 1, NULL, 2, NULL, NULL, '100 x 100 cm', NULL, 'Dgital Printing', 'FF CHina 340GR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-01-06 17:00:00', '2018-01-06 17:00:00'),
(4, 22, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-01-14 02:05:04', '2018-01-14 02:05:04'),
(32, 7, 31, 'Standart', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-01-26 00:15:10', '2018-01-26 00:15:10'),
(33, 2, 31, 'Standart', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-01-26 00:15:10', '2018-01-26 00:15:10'),
(34, 5, 31, 'Standart', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-01-26 00:15:10', '2018-01-26 00:15:10');

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
(1, 2, 1, 'Elegant Kartu Nama', 20000, 0, 'Keren', 'kartu nama 22.jpg', 1, '2017-12-04 16:57:22', '2017-12-11 03:48:32'),
(2, 2, 2, 'Elegant Square Card', 20000, 0, 'Keren', 'CRB-2052-Luxe-RC-SQBC-Page-Content-1-460x329.jpg', 1, '2017-12-04 16:59:09', '2017-12-04 17:09:34'),
(3, 2, 3, 'Elegant Amplop', 20000, 0, 'Keren', 'contoh-cetak-amplop-standar.jpg', 1, '2017-12-04 16:59:32', '2017-12-04 17:09:42'),
(4, 2, 4, 'Elegant Kop Surat', 20000, 0, 'Keren', 'download.jpg', 1, '2017-12-04 17:00:08', '2017-12-04 17:09:53'),
(5, 2, 5, 'Elegant Stempel', 20000, 0, 'Keren', '26.jpg', 1, '2017-12-04 17:00:37', '2017-12-04 17:10:24'),
(6, 2, 6, 'Elegant Kalender', 20000, 0, 'Keren', 'download (1).jpg', 1, '2017-12-04 17:01:08', '2017-12-04 17:10:32'),
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
(21, 4, 3, 'Mantap Amplop', 30000, 0, 'Keren dan Moderen', 'Contoh-Desain-Amplop-Em-Cartaz-Branding-557x332.jpg', 1, '2017-12-13 18:52:59', '2017-12-24 17:17:58'),
(22, 4, 13, 'Spanduk Promosi', 30000, 0, 'Cocok untuk unsaha yang akan mengadakna promosi', 'spanduk-promosi.jpg', 1, '2017-12-24 18:14:01', '2017-12-24 18:14:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_comments`
--

CREATE TABLE `report_comments` (
  `id` int(11) NOT NULL,
  `freelancer_id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `images` text,
  `address` varchar(200) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `city_name` varchar(200) DEFAULT NULL,
  `province` varchar(200) DEFAULT NULL,
  `postal_code` varchar(200) DEFAULT NULL,
  `kurir` varchar(200) DEFAULT NULL,
  `service` varchar(200) DEFAULT NULL,
  `biaya_kurir` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `status_cetak` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `bank_id`, `kode_invoice`, `images`, `address`, `city_id`, `city_name`, `province`, `postal_code`, `kurir`, `service`, `biaya_kurir`, `status`, `status_cetak`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '1234567890', '1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-01-04 17:00:00', '2018-01-15 16:57:27'),
(2, 6, 1, '12312434', 'hai.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2018-01-13 17:00:00', '2018-01-13 17:00:00'),
(31, 8, 1, '63gTfjPFZP', NULL, 'Jl. perwira No. 90 Gunung Krakatau Ujung', 278, 'Medan', 'Sumatera Utara', '20228', 'jne', 'REG', 24000, 0, 0, '2018-01-26 00:15:10', '2018-01-26 00:15:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran_bantal`
--

CREATE TABLE `ukuran_bantal` (
  `id` int(11) NOT NULL,
  `bentuk_id` int(11) UNSIGNED NOT NULL,
  `ukuran_bantal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukuran_bantal`
--

INSERT INTO `ukuran_bantal` (`id`, `bentuk_id`, `ukuran_bantal`) VALUES
(1, 1, '25 X 25 CM'),
(2, 1, '40 X 40 CM'),
(3, 1, '40 X 80 cm'),
(5, 4, '20 X 25 cm'),
(6, 4, '40 X 60 cm'),
(7, 4, '40 X 80 cm'),
(8, 3, 'Panjang 40 CM'),
(9, 3, 'Panjang 65 CM');

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
  `city_id` int(11) DEFAULT NULL,
  `city_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `province` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `username`, `email`, `password`, `api_token`, `photo`, `address`, `city_id`, `city_name`, `postal_code`, `province`, `type`, `gender`, `phone`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chairil Azmi', 'admin@admin.com', '$2y$10$P2GfvX9GKM5cetT7VK89IeLxJ31y25tcBQE05Hc7FsO4ly6ZSY.z2', NULL, NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 3, 'FihvAxblDN8SrFArbfhsI6loRL6JY1VZXT1hNfHvofiaAckS3IIQhpqIOx3c', '2017-12-04 03:14:24', '2017-12-04 03:14:24'),
(2, 'Reza Surya', 'reza@mail.com', '$2y$10$hjWto0qpOAHFyR08Ddnruu4UuZilAxdKV49MabvNn2muBLe48SuMK', 'B0D6iKUa9Gagyek6nmINkMXGH8t7bfHkmN26Lm7Nd8ps25DyXd8wugcNAH9b', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 2, 'rwDCxetWuR3TTRgyDvfjgcOaFji75RogXthDvga7SJD9g4DRMXa4knfg4dkt', '2017-12-04 16:48:22', '2017-12-04 16:49:28'),
(3, 'Andi', 'andi@mail.com', '$2y$10$0u.i0C/wcrOl47p91DEYbOfVWODzuPyf6gm1ffwI3ebs8/YwZ1k36', 'NkJeky8avr5OBDKZQTI0WnR58ad581zcRT3azbxEmRDSGIxzgINvtEDpUzOy', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, 'vaWcGvks1UCPYmkjAdDEAeqp0nsw7zT44SNX4Zf5qEYuwixezUFnj3EdhqU6', '2017-12-09 17:43:52', '2017-12-09 17:43:52'),
(4, 'Alvantesha Priliandi', 'alvan@mail.com', '$2y$10$zqSGNG5vwZikGMU9dub5F.ZdNjrSGGKftOI0i5P0o/wyH6bXGcaeC', '9m6TN9ApCQihcJhGnDDnhoO1LuLtTTuFxy6uUhLgliwnZpjNZpCdKAyxPB6I', 'DSC_0599.JPG', 'Jl. Medan - Binjai Km. 19 Kel. Tunggurono Kec. Binjai TImur Kota Binjai', 0, '', 0, NULL, NULL, 1, '081263506016', NULL, 2, '103P70S8hBfdPC67IuN0PttVKDyqU0RmVhoY1D2UMv4nAY0uOEYaKZorpZ48', '2017-12-13 18:49:40', '2018-01-15 08:26:11'),
(5, 'Bagus', 'bagus@mail.com', '$2y$10$Ow4gqB4p6o69bZg8Uh4ByO1rZDqmEZKl4E8yARYdVaYsWGE.EmWOW', 'LMxjrWktAXxrzgvWcLYkw32FEbDzAzRKwrT5tDSCT0pRwGrPGoQ6e0XM7vZD', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, 'RAELKGZPEb6oDe58jZNdRvGSwgdXYcUAWyC3OkusgwZIDXpejaBBEWi2ijUz', '2017-12-13 20:36:13', '2017-12-13 20:36:13'),
(6, 'Rani', 'rani@mail.com', '$2y$10$B.XI4nY1l7xg0m6h5miusu5gohyf9Pl42cTPripAD4WEKh43ujp5y', 'cYZw0yB5CFF3ubD4fSmBG6kjzgwpyRkf16CwDwCezvKgeaHNdwQaqevy0qAz', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, 'O7HhSh58PkHERYS7EEGFz7vP8ZmJQSbvanjGtZetjSkFapeRKdHOPGz5mE4s', '2017-12-14 02:39:26', '2017-12-14 02:39:26'),
(8, 'Chairil azmi', 'chairil@gmail.com', '$2y$10$yail/CEXs18xqFumbvD7..Hn6waVu3mvfMVr439Gb/KP43ADkNykK', 'ek1BeuOsZh3eifSuptgEq9Dsf1cZQIUMa0noB0St8372oancbDmHWR4258O3', NULL, 'Jl. perwira No. 90 Gunung Krakatau Ujung', 278, 'Medan', 20228, 'Sumatera Utara', 'Kota', NULL, NULL, NULL, 1, NULL, '2018-01-18 07:14:01', '2018-01-18 07:14:01'),
(9, 'Chairil wew', 'azmi@gmail.com', '$2y$10$fBQRk96YJVrxHmvNscZLLeGZmfB1gbfdPqQsL6VAZGvH39zcl71BC', 'R3LpbEcOJm5fxvtqxhzJKgSf2PHPmzM3IX6XxJf0DHzZwRepY5zWCv57u7Ux', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-01-18 08:21:22', '2018-01-18 08:21:22'),
(10, 'nisa', 'nisa@mail.com', '$2y$10$9UBw2BlHRHCRS5qVrmAWqel1rQi3M.o8mDhLX2Fy8hYB5yDJvXGoy', 'kVg0pyhxsWZv99sV82933M9EbzYs3fGHSdug0vV2lk0WxSUpsUk4fTIkNSaY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-01-26 01:13:26', '2018-01-26 01:13:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bentuk`
--
ALTER TABLE `bentuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mats`
--
ALTER TABLE `mats`
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
-- Indexes for table `report_comments`
--
ALTER TABLE `report_comments`
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
-- Indexes for table `ukuran_bantal`
--
ALTER TABLE `ukuran_bantal`
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
-- AUTO_INCREMENT for table `bentuk`
--
ALTER TABLE `bentuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cetaks`
--
ALTER TABLE `cetaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freelancer_payments`
--
ALTER TABLE `freelancer_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `mats`
--
ALTER TABLE `mats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `report_comments`
--
ALTER TABLE `report_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ukuran_bantal`
--
ALTER TABLE `ukuran_bantal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
