-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2018 pada 03.32
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
(5, 8, '2018-01-26 23:15:57', '2018-01-26 23:15:57'),
(6, 11, '2018-01-29 04:54:55', '2018-01-29 04:54:55'),
(7, 12, '2018-01-29 18:49:35', '2018-01-29 18:49:35'),
(8, 5, '2018-01-30 04:38:34', '2018-01-30 04:38:34');

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
(2, 4, '123123', '2017-12-13 18:50:18', '2017-12-13 18:50:18'),
(3, 10, '0812343454', '2018-01-30 03:55:22', '2018-01-30 03:55:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `product_id`, `images`, `created_at`, `updated_at`) VALUES
(20, 53, 'contoh-cetak-amplop-standar.jpg', NULL, NULL),
(21, 54, 'maxresdefault.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `cart_id` int(11) UNSIGNED NOT NULL,
  `jenis_kertas` varchar(100) DEFAULT NULL,
  `material` varchar(200) DEFAULT NULL,
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
  `nama` varchar(200) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `no_telpon` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `logo` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `product_id`, `cart_id`, `jenis_kertas`, `material`, `kuantitas`, `model`, `kain`, `ukuran`, `warna`, `jenis_cetak`, `bahan`, `sisi`, `jilid`, `lembar`, `cetak_depan`, `cetak_belakang`, `cetak_lengan_kanan`, `cetak_lengan_kiri`, `kaos_metode`, `nama`, `nama_perusahaan`, `no_telpon`, `alamat`, `email`, `jabatan`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-29 03:22:22', '2018-01-29 03:22:22'),
(2, 23, 6, 'Standart', NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-29 04:54:55', '2018-01-29 04:54:55'),
(3, 23, 7, 'Medium', NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123123', '21312', '12312', '12312312', NULL, NULL, '2018-01-29 18:49:35', '2018-01-29 18:49:35'),
(4, 12, 7, NULL, NULL, 100, 'Landscape', 'wol', 'Extra Fancy', 'Merah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-29 18:49:54', '2018-01-29 18:49:54'),
(5, 2, 8, 'Standart', NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'andi', 'pt', '1355667', 'jl. medan', 'errt@mail.com', 'kp bagian', NULL, '2018-01-30 04:38:34', '2018-01-30 04:38:34'),
(6, 53, 8, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pt angin', '0812345', 'jl. medan', 'andi@mail.com', NULL, NULL, '2018-01-31 07:26:00', '2018-01-31 07:26:00'),
(7, 53, 8, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pt angin', '0812345', 'jl. medan', 'andi@mail.com', NULL, NULL, '2018-01-31 07:26:05', '2018-01-31 07:26:05'),
(8, 53, 8, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pt anging', '0912324', 'Jl. Medan', 'andi@mail.com', NULL, NULL, '2018-01-31 07:26:43', '2018-01-31 07:26:43'),
(9, 53, 8, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pt anging', '0912324', 'Jl. Medan', 'andi@mail.com', NULL, NULL, '2018-01-31 07:26:44', '2018-01-31 07:26:44'),
(10, 53, 8, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pt anging', '0912324', 'Jl. Medan', 'andi@mail.com', NULL, NULL, '2018-01-31 07:26:45', '2018-01-31 07:26:45'),
(11, 53, 8, 'Standart', NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pt anging', '0912324', 'Jl. Medan', 'andi@mail.com', NULL, NULL, '2018-01-31 07:27:13', '2018-01-31 07:27:13');

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
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`id`, `subcategory_id`, `satuan`, `jlh_pesanan`, `jns_finishing`, `harga`, `jns_kertas`, `bentuk`, `ukuran`, `tipe_jilid`, `jlh_lembar`, `jns_material`, `model_pegangan`, `bahan`, `sisi`, `jns_mug`, `model_bantal`, `jenis_kain`, `cetak_belakang`, `cetak_depan`, `cetak_lengan`, `cetak_kiri`, `berat`, `created_at`, `updated_at`) VALUES
(92, 17, 'Lusin ', '1', 'Print', 100000, NULL, NULL, 'XS - Extra Small', NULL, NULL, NULL, NULL, 'GILDAN POLO SHIRT', NULL, NULL, NULL, NULL, 'BACK 30X10CM', 'RIGHT CHEST', NULL, NULL, 0, NULL, NULL),
(96, 12, 'Buah ', '1', 'Digital printing dan Offset', 25000, NULL, NULL, '25 X 25 CM (Persegi)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rasfur', NULL, NULL, NULL, NULL, 0, NULL, NULL),
(102, 1, 'Kotak', '1', 'Laminating Doff', 25000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(103, 1, 'Kotak', '1', 'Laminating Glossy', 45000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(104, 1, 'Kotak', '1', 'Hot Print', 48000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(105, 1, 'Kotak', '1', 'Cetak Timbul Emboss ', 47000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(106, 1, 'Kotak', '1', 'UV Spot', 50000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(107, 1, 'Kotak', '1', 'Laminating Doff', 50000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(108, 1, 'Kotak', '1', 'Laminating Glossy', 52000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(109, 1, 'Kotak', '1', 'Hot Print', 54000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(110, 1, 'Kotak', '1', 'Cetak Timbul Emboss ', 56000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(111, 1, 'Kotak', '1', 'UV Spot', 58000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(112, 1, 'Kotak', '1', 'Laminating Doff', 60000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(113, 1, 'Kotak', '1', 'Laminating Glossy', 62000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(114, 1, 'Kotak', '1', 'Hot Print', 64000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(115, 1, 'Kotak', '1', 'Cetak Timbul Emboss ', 66000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(116, 1, 'Kotak', '1', 'Laminating Doff', 70000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(117, 1, 'Kotak', '1', 'Laminating Glossy', 72000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(118, 1, 'Kotak', '1', 'Hot Print', 74000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(119, 1, 'Kotak', '1', 'Cetak Timbul Emboss ', 76000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(120, 1, 'Kotak', '1', 'UV Spot', 78000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(121, 1, 'Kotak', '1', 'Laminating Doff', 80000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, '2018-01-30 21:58:43'),
(122, 1, 'Kotak', '1', 'Laminating Glossy', 80000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(123, 1, 'Kotak', '1', 'Hot Print', 82000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(124, 1, 'Kotak', '1', 'Cetak Timbul Emboss ', 86000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(125, 1, 'Kotak', '1', 'UV Spot', 88000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(126, 2, 'Kotak', '1', 'Laminating Doff', 20000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(127, 2, 'Kotak', '1', 'Laminating Glossy', 22000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(128, 2, 'Kotak', '1', 'Hot Print', 24000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(129, 2, 'Kotak', '1', 'Cetak Timbul Emboss ', 26000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(130, 2, 'Kotak', '1', 'Laminating Doff', 28000, 'Art Carton 260gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(131, 2, 'Kotak', '1', 'Laminating Doff', 30000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(132, 2, 'Kotak', '1', 'Laminating Glossy', 32000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(133, 2, 'Kotak', '1', 'Hot Print', 34000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(134, 2, 'Kotak', '1', 'Cetak Timbul Emboss ', 36000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(135, 2, 'Kotak', '1', 'UV Spot', 38000, 'BW 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(136, 2, 'Kotak', '1', 'Laminating Doff', 40000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(137, 2, 'Kotak', '1', 'Laminating Glossy', 42000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(138, 2, 'Kotak', '1', 'Hot Print', 44000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(139, 2, 'Kotak', '1', 'Cetak Timbul Emboss ', 46000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(140, 2, 'Kotak', '1', 'UV Spot', 48000, 'Splendorgel 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(141, 2, 'Kotak', '1', 'Laminating Doff', 50000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, '2018-01-30 22:09:13'),
(142, 2, 'Kotak', '1', 'Laminating Glossy', 52000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(143, 2, 'Kotak', '1', 'Hot Print', 54000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(144, 2, 'Kotak', '1', 'Cetak Timbul Emboss ', 56000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(145, 2, 'Kotak', '1', 'UV Spot', 58000, 'Linen 250gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(146, 2, 'Kotak', '1', 'Laminating Doff', 60000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(147, 2, 'Kotak', '1', 'Laminating Glossy', 62000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(148, 2, 'Kotak', '1', 'Hot Print', 64000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(149, 2, 'Kotak', '1', 'Cetak Timbul Emboss ', 66000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(150, 2, 'Kotak', '1', 'UV Spot', 68000, 'Nettuno 270gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, NULL),
(178, 4, 'Rim ', '1', '1 warna', 150000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'Folio (21.5 cm x 33 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(179, 4, 'Rim ', '1', '2 warna', 160000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'Folio (21.5 cm x 33 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(180, 4, 'Rim ', '1', '3 warna', 170000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'Folio (21.5 cm x 33 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(181, 4, 'Rim ', '1', 'full colour', 180000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'Folio (21.5 cm x 33 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(182, 4, 'Rim ', '1', '1 warna', 190000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'A4 (21 cm x 29.7 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(183, 4, 'Rim ', '1', '2 warna', 200000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'A4 (21 cm x 29.7 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(184, 4, 'Rim ', '1', '3 warna', 210000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'A4 (21 cm x 29.7 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(185, 4, 'Rim ', '1', 'full colour', 220000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'A4 (21 cm x 29.7 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(186, 4, 'Rim ', '1', '1 warna', 230000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:00:58'),
(187, 4, 'Rim ', '1', '2 warna', 240000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:01:07'),
(188, 4, 'Rim ', '1', '3 warna', 250000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:01:28'),
(189, 4, 'Rim ', '1', 'full colour', 260000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:02:00'),
(190, 4, 'Rim ', '1', '1 warna', 270000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:02:11'),
(191, 4, 'Rim ', '1', '2 warna', 280000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:02:22'),
(192, 4, 'Rim ', '1', '3 warna', 290000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:02:44'),
(193, 4, 'Rim ', '1', 'full colour', 300000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, '2018-01-31 00:02:54'),
(194, 4, 'Rim ', '1', '1 warna', 310000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(195, 4, 'Rim ', '1', '2 warna', 320000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(196, 4, 'Rim ', '1', '3 warna', 330000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(197, 4, 'Rim ', '1', 'full colour', 340000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(198, 4, 'Rim ', '1', '1 warna', 350000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(199, 4, 'Rim ', '1', '2 warna', 360000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(200, 4, 'Rim ', '1', '3 warna', 370000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(201, 4, 'Rim ', '1', 'full colour', 380000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, NULL),
(203, 5, 'Pics ', '1', 'Stempel Runaflek', 30000, NULL, NULL, 'Bulat(45x45mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(204, 5, 'Pics ', '1', 'Stempel Flash', 35000, NULL, NULL, 'Bulat(45x45mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(205, 5, 'Pics ', '1', 'Stempel Trodat', 40000, NULL, NULL, 'Bulat(45x45mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(206, 5, 'Pics ', '1', 'Stempel Runaflek', 32000, NULL, NULL, 'Bulat(40x40mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(207, 5, 'Pics ', '1', 'Stempel Flash', 37000, NULL, NULL, 'Bulat(40x40mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(208, 5, 'Pics ', '1', 'Stempel Trodat', 42000, NULL, NULL, 'Bulat(40x40mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(209, 5, 'Pics ', '1', 'Stempel Runaflek', 32000, NULL, NULL, 'Bulat(30x30mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(210, 5, 'Pics ', '1', 'Stempel Flash', 37000, NULL, NULL, 'Bulat(30x30mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(211, 5, 'Pics ', '1', 'Stempel Trodat', 42000, NULL, NULL, 'Bulat(30x30mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(212, 5, 'Pics ', '1', 'Stempel Runaflek', 32000, NULL, NULL, 'Oval (55x35mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(213, 5, 'Pics ', '1', 'Stempel Flash', 37000, NULL, NULL, 'Oval (55x35mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(214, 5, 'Pics ', '1', 'Stempel Trodat', 42000, NULL, NULL, 'Oval (55x35mm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(215, 5, 'Pics ', '1', 'Stempel Runaflek', 32000, NULL, NULL, 'Persegi Panjang (75x15)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(216, 5, 'Pics ', '1', 'Stempel Flash', 37000, NULL, NULL, 'Persegi Panjang (75x15)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(217, 5, 'Pics ', '1', 'Stempel Trodat', 42000, NULL, NULL, 'Persegi Panjang (75x15)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(218, 5, 'Pics ', '1', 'Stempel Runaflek', 32000, NULL, NULL, 'Persegi Panjang (70x25)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(219, 5, 'Pics ', '1', 'Stempel Flash', 37000, NULL, NULL, 'Persegi Panjang (70x25)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(220, 5, 'Pics ', '1', 'Stempel Trodat', 42000, NULL, NULL, 'Persegi Panjang (70x25)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(221, 5, 'Pics ', '1', 'Stempel Runaflek', 32000, NULL, NULL, 'Persegi Panjang (58x22)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(222, 5, 'Pics ', '1', 'Stempel Flash', 37000, NULL, NULL, 'Persegi Panjang (58x22)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, NULL, NULL),
(223, 5, 'Pics ', '1', 'Stempel Trodat', 42000, NULL, NULL, 'Persegi Panjang (58x22)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, NULL, NULL),
(225, 6, 'Buah ', '10', 'UV Vernish', 30000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(226, 6, 'Buah ', '10', 'Laminating Glossy', 25000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(227, 6, 'Buah ', '10', 'Laminating Doff', 25000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(228, 6, 'Buah ', '10', 'Jepit Kaleng', 23000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(229, 6, 'Buah ', '10', 'Spiral Gantung', 23000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(230, 6, 'Buah ', '10', 'UV Vernish', 32000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(231, 6, 'Buah ', '10', 'Laminating Glossy', 27000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(232, 6, 'Buah ', '10', 'Laminating Doff', 27000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(233, 6, 'Buah ', '10', 'Jepit Kaleng', 25000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(234, 6, 'Buah ', '10', 'Spiral Gantung', 25000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(235, 6, 'Buah ', '10', 'UV Vernish', 34000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(236, 6, 'Buah ', '10', 'Laminating Glossy', 29000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(237, 6, 'Buah ', '10', 'Laminating Doff', 29000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(238, 6, 'Buah ', '10', 'Jepit Kaleng', 27000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(239, 6, 'Buah ', '10', 'Spiral Gantung', 27000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(240, 6, 'Buah ', '10', 'UV Vernish', 36000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(241, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(242, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(243, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(244, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(245, 6, 'Buah ', '10', 'UV Vernish', 36000, 'Art Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(246, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'Art Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(247, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'Art Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(248, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'Art Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(249, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'Art Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(250, 6, 'Buah ', '10', 'UV Vernish', 38000, 'Art Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(251, 6, 'Buah ', '10', 'Laminating Glossy', 33000, 'Art Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(252, 6, 'Buah ', '10', 'Laminating Doff', 33000, 'Art Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(253, 6, 'Buah ', '10', 'Jepit Kaleng', 31000, 'Art Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(254, 6, 'Buah ', '10', 'Spiral Gantung', 31000, 'Art Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(255, 6, 'Buah ', '10', 'UV Vernish', 36000, 'Art Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(256, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'Art Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(257, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'Art Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(258, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'Art Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(259, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'Art Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(260, 6, 'Buah ', '10', 'UV Vernish', 38000, 'Art Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(261, 6, 'Buah ', '10', 'Laminating Glossy', 33000, 'Art Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(262, 6, 'Buah ', '10', 'Laminating Doff', 33000, 'Art Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(263, 6, 'Buah ', '10', 'Jepit Kaleng', 31000, 'Art Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(264, 6, 'Buah ', '10', 'Spiral Gantung', 31000, 'Art Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(265, 6, 'Buah ', '10', 'UV Vernish', 36000, 'Matt Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(266, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'Matt Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(267, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'Matt Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(268, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'Matt Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(269, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'Matt Paper 100 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(270, 6, 'Buah ', '10', 'UV Vernish', 38000, 'Matt Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(271, 6, 'Buah ', '10', 'Laminating Glossy', 33000, 'Matt Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(272, 6, 'Buah ', '10', 'Laminating Doff', 33000, 'Matt Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(273, 6, 'Buah ', '10', 'Jepit Kaleng', 31000, 'Matt Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(274, 6, 'Buah ', '10', 'Spiral Gantung', 31000, 'Matt Paper 100 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(275, 6, 'Buah ', '10', 'UV Vernish', 36000, 'Matt Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(276, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'Matt Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(277, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'Matt Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(278, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'Matt Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(279, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'Matt Paper 100 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(280, 6, 'Buah ', '10', 'UV Vernish', 38000, 'Matt Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(281, 6, 'Buah ', '10', 'Laminating Glossy', 33000, 'Matt Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(282, 6, 'Buah ', '10', 'Laminating Doff', 33000, 'Matt Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(283, 6, 'Buah ', '10', 'Jepit Kaleng', 31000, 'Matt Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(284, 6, 'Buah ', '10', 'Spiral Gantung', 31000, 'Matt Paper 100 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(285, 6, 'Buah ', '10', 'UV Vernish', 36000, 'Art Carton 190 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(286, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'Art Carton 190 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(287, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'Art Carton 190 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(288, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'Art Carton 190 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(289, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'Art Carton 190 Gsm', NULL, '31 cm x 48 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(290, 6, 'Buah ', '10', 'UV Vernish', 38000, 'Art Carton 190 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(291, 6, 'Buah ', '10', 'Laminating Glossy', 33000, 'Art Carton 190 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(292, 6, 'Buah ', '10', 'Laminating Doff', 33000, 'Art Carton 190 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(293, 6, 'Buah ', '10', 'Jepit Kaleng', 31000, 'Art Carton 190 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(294, 6, 'Buah ', '10', 'Spiral Gantung', 31000, 'Art Carton 190 Gsm', NULL, '37 cm x 54 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(295, 6, 'Buah ', '10', 'UV Vernish', 36000, 'Art Carton 190 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(296, 6, 'Buah ', '10', 'Laminating Glossy', 31000, 'Art Carton 190 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(297, 6, 'Buah ', '10', 'Laminating Doff', 31000, 'Art Carton 190 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(298, 6, 'Buah ', '10', 'Jepit Kaleng', 29000, 'Art Carton 190 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(299, 6, 'Buah ', '10', 'Spiral Gantung', 29000, 'Art Carton 190 Gsm', NULL, '60 cm x 40 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL),
(300, 6, 'Buah ', '10', 'UV Vernish', 38000, 'Art Carton 190 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(301, 6, 'Buah ', '10', 'Laminating Glossy', 33000, 'Art Carton 190 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(302, 6, 'Buah ', '10', 'Laminating Doff', 33000, 'Art Carton 190 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(303, 6, 'Buah ', '10', 'Jepit Kaleng', 31000, 'Art Carton 190 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(304, 6, 'Buah ', '10', 'Spiral Gantung', 31000, 'Art Carton 190 Gsm', NULL, '70 cm x 50 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500, NULL, NULL),
(306, 3, 'Kotak', '1', 'Pond', 150000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'Kabinet (11 cm x 23 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(307, 3, 'Kotak', '1', 'Lem', 160000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'A4 (23 cm x 31 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL),
(308, 3, 'Kotak', '1', 'Double Tape Lidah Penutup', 170000, 'HVS 80 Gsm - HVS 100 Gsm', NULL, 'Folio / F4 (23 cm x 34 cm)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL);

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
(40, 10, 12, 41, 'mohon konfirmasi', 'CRB-2052-Luxe-RC-SQBC-Page-Content-1-460x329.jpg', '2018-01-31 19:11:08', '2018-01-31 19:11:08');

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
  `material` varchar(200) DEFAULT NULL,
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
  `nama` varchar(200) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `no_telpon` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `images` text,
  `description` text,
  `status` int(1) NOT NULL DEFAULT '0',
  `status_frpay` int(1) NOT NULL DEFAULT '0',
  `ket` int(1) NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `transaction_id`, `jenis_kertas`, `material`, `kuantitas`, `model`, `kain`, `ukuran`, `warna`, `jenis_cetak`, `bahan`, `sisi`, `jilid`, `lembar`, `cetak_depan`, `cetak_belakang`, `cetak_lengan_kanan`, `cetak_lengan_kiri`, `kaos_metode`, `nama`, `nama_perusahaan`, `no_telpon`, `alamat`, `email`, `jabatan`, `images`, `description`, `status`, `status_frpay`, `ket`, `created_at`, `updated_at`) VALUES
(41, 54, 37, 'Art Carton 260gr', NULL, 1, NULL, NULL, 'Kabinet (11 cm x 23 cm)', NULL, ' 	Laminating Doff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Andre Taulani', 'PT. Alam Semesta', '081263506016', 'Jl. Medan-Binjai', 'andre@mail.com', 'Kepala Bagian Keuangan', NULL, NULL, 2, 0, 3, '2018-01-31 17:00:00', '2018-01-31 18:09:32');

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
  `harga_awal` int(10) NOT NULL,
  `harga_promo` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `freelancer_id`, `subcategory_id`, `jdl_Pdk`, `harga_awal`, `harga_promo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(54, 10, 1, 'Modern Kartunama', 20000, NULL, 'Selalu Tampil Percaya Diri Untuk Hasil Yang Maksimal', 1, '2018-01-31 16:53:08', '2018-01-31 16:56:03');

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
(37, 12, 1, '1234567890', '1.jpg', 'Jl. Medan - Binjai', 273, 'Medan', 'Sumatera Utara', '27707', 'JNE', 'REG', 20000, 0, 0, '2018-01-31 17:00:00', '2018-01-31 17:00:00');

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
(2, 'Reza Surya', 'reza@mail.com', '$2y$10$hjWto0qpOAHFyR08Ddnruu4UuZilAxdKV49MabvNn2muBLe48SuMK', 'B0D6iKUa9Gagyek6nmINkMXGH8t7bfHkmN26Lm7Nd8ps25DyXd8wugcNAH9b', 'harry_potter_icon_6825007.jpg', 'Jl. Medan tembung', 0, '', 0, NULL, NULL, 1, NULL, NULL, 2, '93mWqtihGzlOst6HSabBdWk7sEm1SnT3syndZkCkBZo3NXqL55lBeOv0nqMj', '2017-12-04 16:48:22', '2018-01-29 18:53:44'),
(3, 'Andi', 'andi@mail.com', '$2y$10$0u.i0C/wcrOl47p91DEYbOfVWODzuPyf6gm1ffwI3ebs8/YwZ1k36', 'NkJeky8avr5OBDKZQTI0WnR58ad581zcRT3azbxEmRDSGIxzgINvtEDpUzOy', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, 'vaWcGvks1UCPYmkjAdDEAeqp0nsw7zT44SNX4Zf5qEYuwixezUFnj3EdhqU6', '2017-12-09 17:43:52', '2017-12-09 17:43:52'),
(4, 'Alvantesha Priliandi', 'alvan@mail.com', '$2y$10$zqSGNG5vwZikGMU9dub5F.ZdNjrSGGKftOI0i5P0o/wyH6bXGcaeC', '9m6TN9ApCQihcJhGnDDnhoO1LuLtTTuFxy6uUhLgliwnZpjNZpCdKAyxPB6I', 'DSC_0599.JPG', 'Jl. Medan - Binjai Km. 19 Kel. Tunggurono Kec. Binjai TImur Kota Binjai', 0, '', 0, NULL, NULL, 1, '081263506016', NULL, 2, 'OcQ8JCDACe9kZNmSoHlhXSDwJKKvqurOIJsJbE6oygeM1LAHGtnx6clYn511', '2017-12-13 18:49:40', '2018-01-15 08:26:11'),
(5, 'Bagus', 'bagus@mail.com', '$2y$10$Ow4gqB4p6o69bZg8Uh4ByO1rZDqmEZKl4E8yARYdVaYsWGE.EmWOW', 'LMxjrWktAXxrzgvWcLYkw32FEbDzAzRKwrT5tDSCT0pRwGrPGoQ6e0XM7vZD', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, 'RAELKGZPEb6oDe58jZNdRvGSwgdXYcUAWyC3OkusgwZIDXpejaBBEWi2ijUz', '2017-12-13 20:36:13', '2017-12-13 20:36:13'),
(6, 'Rani', 'rani@mail.com', '$2y$10$B.XI4nY1l7xg0m6h5miusu5gohyf9Pl42cTPripAD4WEKh43ujp5y', 'cYZw0yB5CFF3ubD4fSmBG6kjzgwpyRkf16CwDwCezvKgeaHNdwQaqevy0qAz', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, 'O7HhSh58PkHERYS7EEGFz7vP8ZmJQSbvanjGtZetjSkFapeRKdHOPGz5mE4s', '2017-12-14 02:39:26', '2017-12-14 02:39:26'),
(8, 'Chairil azmi', 'chairil@gmail.com', '$2y$10$yail/CEXs18xqFumbvD7..Hn6waVu3mvfMVr439Gb/KP43ADkNykK', 'ek1BeuOsZh3eifSuptgEq9Dsf1cZQIUMa0noB0St8372oancbDmHWR4258O3', NULL, 'Jl. perwira No. 90 Gunung Krakatau Ujung', 278, 'Medan', 20228, 'Sumatera Utara', 'Kota', NULL, NULL, NULL, 1, NULL, '2018-01-18 07:14:01', '2018-01-18 07:14:01'),
(9, 'Chairil wew', 'azmi@gmail.com', '$2y$10$fBQRk96YJVrxHmvNscZLLeGZmfB1gbfdPqQsL6VAZGvH39zcl71BC', 'R3LpbEcOJm5fxvtqxhzJKgSf2PHPmzM3IX6XxJf0DHzZwRepY5zWCv57u7Ux', NULL, NULL, 0, '', 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-01-18 08:21:22', '2018-01-18 08:21:22'),
(10, 'nisa', 'nisa@mail.com', '$2y$10$9UBw2BlHRHCRS5qVrmAWqel1rQi3M.o8mDhLX2Fy8hYB5yDJvXGoy', 'kVg0pyhxsWZv99sV82933M9EbzYs3fGHSdug0vV2lk0WxSUpsUk4fTIkNSaY', 'c-6.jpg', 'jl. medan', 278, 'Medan', 20228, 'Sumatera Utara', 'Kota', 2, '081263506016', NULL, 2, 'zvehtOgTZL9ueu665K2smIysvxo46IEqQBm5UY4m9PSXXmkSwm8O7OXj4DN5', '2018-01-26 01:13:26', '2018-01-30 04:07:14'),
(11, 'Ibu Flo', 'ibuflo@mail.com', '$2y$10$QJZbE8kSGJBvdXsoq99LReXOzrp14LcD4mfdNF82vLC1HhaJFEdUu', 'kWlsyMiqb5tHaTAmWqF5YeCT2ZfENBynphGxilBoh46s90QKP4zkqTj3e1gi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-01-29 04:53:04', '2018-01-29 04:53:04'),
(12, 'andre', 'andre@mail.com', '$2y$10$GdG0CRsI7k.Xt/5OVJHcSurAFTpoUMCgvgjFKzh8q6kwLUpFlCexO', 'wbpYO2U1nlAX2JzmXnwed18zRNnG4nlcZjklxZgK1RkZlsTNZTjJ6Hj86GMZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-01-29 18:48:22', '2018-01-29 18:48:22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelances`
--
ALTER TABLE `freelances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `mats`
--
ALTER TABLE `mats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
