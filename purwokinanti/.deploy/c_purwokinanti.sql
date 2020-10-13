-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2020 pada 01.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_purwokinanti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `avatar`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'public/Admin/profile-default.jpg', 'superadmin', '$2y$10$IasZR4Dh1KBojwYe/bZszOjGdaEj7JDFEgpv4pUYSPWYIcP1.wsE6', 'superadmin', '2020-10-12 23:12:39', '2020-10-12 23:12:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agendas`
--

INSERT INTO `agendas` (`id`, `title`, `slug`, `description`, `time`, `date`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Agenda pertama', 'agenda-pertama', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.', '08:00', '2020-10-09 00:00:00', 'rumah pak lontong', '2020-10-12 23:12:35', '2020-10-12 23:12:35'),
(2, 'Agenda kedua', 'agenda-kedua', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.', '22:00', '2020-12-09 00:00:00', 'rumah pak bupati', '2020-10-12 23:12:35', '2020-10-12 23:12:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `slug`, `thumbnail`, `excerpt`, `visitor`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Berita pertama', 'berita-pertama', 'foto-pertama.jpg', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, officiis.', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.', '2020-10-12 23:12:34', '2020-10-12 23:12:34'),
(2, 'Berita kedua', 'berita-kedua', 'foto-kedua.jpg', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, officiis.', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.', '2020-10-12 23:12:34', '2020-10-12 23:12:34');

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
-- Struktur dari tabel `keluargas`
--

CREATE TABLE `keluargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kependudukan_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `kb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak terdaftar',
  `ks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak terdaftar',
  `pus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak terdaftar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keluargas`
--

INSERT INTO `keluargas` (`id`, `kependudukan_id`, `kb`, `ks`, `pus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tidak terdaftar', 'Tidak terdaftar', 'Tidak terdaftar', '2020-10-12 23:12:35', '2020-10-12 23:12:35'),
(2, 4, 'Tidak terdaftar', 'Tidak terdaftar', 'Tidak terdaftar', '2020-10-12 23:12:35', '2020-10-12 23:12:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kependudukans`
--

CREATE TABLE `kependudukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluarga_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kependudukans`
--

INSERT INTO `kependudukans` (`id`, `name`, `born`, `gender`, `nik`, `status`, `job`, `education`, `address`, `keluarga_id`, `created_at`, `updated_at`) VALUES
(1, 'Pak jarwo', 'eyJpdiI6Ii9PVUxyQmdQUlpXcy9kU00xWUQwQVE9PSIsInZhbHVlIjoiSVU3bXo4RW5vc3Q0TGp3UmE0eFFvZz09IiwibWFjIjoiNjc4MDlmOTAyOWRhMDUwYmQ4Nzk5ODZhNjNhZWIxYmJhNWFmMjdkOWI1NWJhODgzZDM5ZTA5YjYzZjZhZjkyYyJ9', 'Laki-Laki', 'eyJpdiI6InlyUG5TbEkwRWkybC9FcU5LTUx0S3c9PSIsInZhbHVlIjoiNzVWSzRoWjFwblFlZUNuRW1kS1lsL3NreVhPa3Z6TGVqMFdIZzFsbVBVcz0iLCJtYWMiOiI0YTY1Y2E5YTVhOWU3MjQ4OGY4YTlmNmQzMzNlOGM5NzcyZWVmZTJjOWEzN2U4MjhkMmE2ZDcyYTc4ZDY0Y2I0In0=', 'Suami', 'PNS/ASN', 'S2', 'address1', 1, '2020-10-12 23:12:36', '2020-10-12 23:12:36'),
(2, 'Siska', 'eyJpdiI6Ikc2QmFxT01NSXZzSXRiRURFcUxBdmc9PSIsInZhbHVlIjoiUlhBVDFwSjB2bXRLRXpuUXY5MmNRdz09IiwibWFjIjoiYzIxN2QxODU4ODA1NzQ3YTIwODA0Y2U5OTJlMzg4NDUzZTQwMTQzZDY4YTY4MWUzNzBhMWVjZDczMGE3OGIwOSJ9', 'Perempuan', 'eyJpdiI6IlJRSC8yUGl0cXRRZEZibzREUWsxd0E9PSIsInZhbHVlIjoiSWF6KzNnN1dNVFRhY3dTcE5EcG9EdXV2SXVSOHhPTmJlWXR5R3lucktUVT0iLCJtYWMiOiI1ZDNkNDNhZjE2MDk3NGY5Y2VjMjVlODY2NzEyOWIwNzdkMjRjMGI3NTkwMTU2ZmRhODVhYjFiODRjZGJjMzllIn0=', 'Istri', 'PNS/ASN', 'S2', 'address1', 1, '2020-10-12 23:12:37', '2020-10-12 23:12:37'),
(3, 'Rifqi', 'eyJpdiI6ImxhSjYxT2ZSamYwTXdmL0JDTXBPcFE9PSIsInZhbHVlIjoiOGthZW9mNDZWYzRUcVB3a2doTWNkQT09IiwibWFjIjoiNTA0MDYyZTllZDNkNjM2NzRkOGNhZjAyZDZkOTZjODE2YjJiZjBmMTg3NDQ1YmFmYTk3OGE0MWIzYTU4MDRlNiJ9', 'Laki-Laki', 'eyJpdiI6IjJZZXB5NEZqbVp3Q1YyY1l2VjVzZ0E9PSIsInZhbHVlIjoiS2VoV2h1RTk5cURXeXdFWjUyQWFhb1hVN25LSlRFeUpvQ1VkMUVCSTBLaz0iLCJtYWMiOiJmMTAwNGQyMWJkYTkyMjA2M2I2M2Q1MzMyMTMzMTM1MjI0YWU4M2I4YzhhMzUzYmFhZGVhODJjODYwYjM3YzA0In0=', 'Anak', 'Pelajar', 'SD', 'address1', 1, '2020-10-12 23:12:37', '2020-10-12 23:12:37'),
(4, 'Pak Irwan', 'eyJpdiI6Im1oREtqTmhJQ0dwVXdHZ1dLdTI0UUE9PSIsInZhbHVlIjoidUM1S05BbW1iM2x1c1dDZkQ4L3hRZz09IiwibWFjIjoiM2IzOGIyZmFiMjI1YTc2ZTAzN2NkNTA5Mjc3OGM2ZjlkNmY4OThhZjhjZWU0NzJkNTQyNDA2MzI2Y2NjN2NiZSJ9', 'Laki-Laki', 'eyJpdiI6IkxYQjk3TVVYSUM5dk02VHZDUjdJMkE9PSIsInZhbHVlIjoibm55UDd4RVhNMEl3ckphVW54ek83Mk53dDUvYmM1Ry94QVh5YXlaRTBOdz0iLCJtYWMiOiI1ZTNjNGIyZDBmNGU2Mjg1NzVkOTExYWQyZDIyYWU2MmEwMTY4MDNhNDZkYjJhMGEzMDY2ZjEzZWFmZjZhNDk0In0=', 'Suami', 'Karyawan swasta', 'SMA', 'address2', 2, '2020-10-12 23:12:38', '2020-10-12 23:12:38'),
(5, 'Lina', 'eyJpdiI6ImwwQVNTSjhyQk1hOHNDbTRFYXdZa2c9PSIsInZhbHVlIjoiUU1qcGVJcFhLeXN3emp1N0hTd05tZz09IiwibWFjIjoiY2JhMWQyMDA3ZWUzM2EyMGJmNjEzMzI0NDIzZDY0ZTBjNjk0YTM0Nzg0YjNjMDNiZDVlZjYzZWE4ODdjY2UzZSJ9', 'Perempuan', 'eyJpdiI6IkYvbmVENzhJK2VlNVdDZVVtMGozZFE9PSIsInZhbHVlIjoiRTJPcjBvcTNVb1pScU9XVXZMRWtYakYrT2J2Um1xZjJYaTlGaEV6V0hBZz0iLCJtYWMiOiI4MTRkNTczNWEyYmE3ZGFlMGZiZWY3NDk2Mjg2NGMyZTY4ZjcyNDRjY2RjMTg0ZTExYmZiMDRlOGU0OGY3MGVmIn0=', 'Istri', 'Buruh', 'SMA', 'address2', 2, '2020-10-12 23:12:38', '2020-10-12 23:12:38'),
(6, 'Angel', 'eyJpdiI6IitQZ0V2VUlJSkZBd3NqTjVtMWpHdXc9PSIsInZhbHVlIjoiSHh1YjhaQ0hmcVZPVGpXaTcrVDF4QT09IiwibWFjIjoiZmFiNDYyZmM4MGQyYjE4YWFjM2M0NDM2OTQ0MmNjMjQ4MGRjYjg1MDAzYWE1NTEzNjMyMTA5NmEyYzA0MzE3NyJ9', 'Perempuan', 'eyJpdiI6InJvSlZuMVczWDd2b1lIMHJiaXA3cXc9PSIsInZhbHVlIjoiRzNSblNic2xSUVlzazlraWo3SWtKV3F3OGFYSDdLMkFXeXdrUmszRFpVVT0iLCJtYWMiOiJkZjA5M2U5Mjc3MDYyMDFkOTI3ZTQ0ZWQzYjg1YjJjZDc3YzRiZGU5NzIzNDIxMmNhNzI0OGU2NDA1YmMyOGZkIn0=', 'Anak', 'Pelajar', 'SMP', 'address2', 2, '2020-10-12 23:12:38', '2020-10-12 23:12:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepengurusans`
--

CREATE TABLE `kepengurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kepengurusans`
--

INSERT INTO `kepengurusans` (`id`, `avatar`, `name`, `position`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'public/Kepengurusan/profile-default.jpg', 'Pak surya', 'Lurah', '1', '2020-10-12 23:12:39', '2020-10-12 23:12:39');

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
(11, '2020_10_10_043537_create_table_kepengurusan', 1),
(265, '2014_10_12_000000_create_users_table', 2),
(266, '2014_10_12_100000_create_password_resets_table', 2),
(267, '2019_08_19_000000_create_failed_jobs_table', 2),
(268, '2020_10_07_152058_create_admins_table', 2),
(269, '2020_10_07_152131_create_beritas_table', 2),
(270, '2020_10_07_152159_create_visitors_table', 2),
(271, '2020_10_07_152219_create_agendas_table', 2),
(272, '2020_10_07_152501_create_pages_table', 2),
(273, '2020_10_08_143231_create_keluargas_table', 2),
(274, '2020_10_08_150746_create_kependudukans_table', 2),
(275, '2020_10_11_111027_add_kependudukan_id_to_keluargas', 2),
(276, '2020_10_11_120711_create_kepengurusans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `image`, `title`, `description`, `location`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Portal kelurahan purwokinanti', NULL, 'general_title', '2020-10-12 23:12:41', '2020-10-12 23:12:41'),
(2, 'favicon', NULL, NULL, 'general_favicon', '2020-10-12 23:12:42', '2020-10-12 23:12:42'),
(3, NULL, 'Kelurahan Purwokinanti', 'Portal Informasi berita dan Data Kependudukan di lingkungan RW 07 Purwanggan\n\n                RW 07 Purwanggan, Kelurahan Purwokinanti, Kecamatan Pakualaman,Yogyakarta, DIY\n                \n                Kontak :\n                No HP : 08995089179\n                Email :saiful11411@gmail.com', 'general_footer', '2020-10-12 23:12:43', '2020-10-12 23:12:43'),
(4, 'public/Pages/taman-sari.jpg', 'Kelurahan Purwokinanti', 'Selamat datang di portal informasi kelurahan purwokinanti, Mari kita bangun bersama!', 'home_jumbotron', '2020-10-12 23:12:44', '2020-10-12 23:12:44'),
(5, NULL, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et amet non ipsum assumenda, explicabo praesentium nulla nobis animi velit enim adipisci sunt eaque ad asperiores maxime iusto eius soluta nesciunt deleniti? Ab fugit itaque saepe quasi omnis distinctio neque qui molestiae at illo! Consequuntur alias nihil odio quia nostrum in optio maxime, mollitia molestias sequi facere in ducimus quisquam soluta iusto dicta magni qui delectus asperiores dolores. Error quam rem, necessitatibus asperiores sit iure recusandae ipsum quia.totam laudantium inventore! Cumque esse quisquam aspernatur! Exercitationem eius est totam ducimus animi tenetur sapiente. Illum reprehenderit fuga ad delectus nisi labore sint dolor voluptates error. Optio deserunt cum ducimus laborum delectus magnam deleniti repudiandae nesciunt doloribus, fugiat voluptatem sit tempore! Molestias velit officia dignissimos minima necessitatibus provident numquam, hic ipsam corporis voluptatibus, eaque dolor rem laboriosam inventore eveniet commodi. Quam voluptatibus quidem commodi illo', 'home_about', '2020-10-12 23:12:44', '2020-10-12 23:12:44');

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
-- Struktur dari tabel `table_kepengurusan`
--

CREATE TABLE `table_kepengurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-10-12 23:12:40', '2020-10-12 23:12:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indeks untuk tabel `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agendas_slug_unique` (`slug`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_title_unique` (`title`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `keluargas`
--
ALTER TABLE `keluargas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kependudukans`
--
ALTER TABLE `kependudukans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kependudukans_keluarga_id_foreign` (`keluarga_id`);

--
-- Indeks untuk tabel `kepengurusans`
--
ALTER TABLE `kepengurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_location_unique` (`location`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `table_kepengurusan`
--
ALTER TABLE `table_kepengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluargas`
--
ALTER TABLE `keluargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kependudukans`
--
ALTER TABLE `kependudukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kepengurusans`
--
ALTER TABLE `kepengurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `table_kepengurusan`
--
ALTER TABLE `table_kepengurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kependudukans`
--
ALTER TABLE `kependudukans`
  ADD CONSTRAINT `kependudukans_keluarga_id_foreign` FOREIGN KEY (`keluarga_id`) REFERENCES `keluargas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
