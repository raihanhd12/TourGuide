-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 11:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tourguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'About',
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapanggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `umur` tinyint(255) NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citacita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `pekerjaan`, `nama`, `namapanggilan`, `alamat`, `ttl`, `umur`, `jk`, `agama`, `hobi`, `citacita`, `nim`, `email`, `created_at`, `updated_at`) VALUES
(1, 'About', 'Mahasiswa Teknologi Informasi', 'Raihan Hidayatullah Djunaedi', 'Raihan', 'Jl. Puspa VI No.32 Mekarmukti, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530', '2002-02-12', 20, 'Laki - Laki', 'Islam', 'Bermain Game dan Mendengarkan Musik', 'Pemilik Perusahaan Besar', 2041720108, '2041720108@student.polimema.ac.id', '2022-04-11 02:34:27', '2022-04-13 08:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Contact',
  `namaLengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `namaLengkap`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Contact', 'Raihan Hidayatullah Djunaedi', 'itsmehannn@gmail.com', 'Kerja Bagus Bang!', '2022-04-11 06:42:21', '2022-04-11 06:42:21'),
(8, 'Contact', 'raihan', 'dilan01keren@gmail.com', 'teruskan hannn', '2022-04-13 08:15:11', '2022-04-13 08:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Home',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `gambar`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'profile-images/ozRZbwmMxwAQy0Fs0S4AIFXgund880LtMb9NA1x4.jpg', '🏖️Nusa Dua Bali🏖️', 'Pulau Seribu Dewa satu ini memang tidak perlu diragukan lagi terkait keindahan dan pesonanya dalam memikat para wisatawan dalam negeri maupun mancanegara. Di Bali, ada satu tempat wisata yang begitu cantik, yakni Nusa Dua.', '2022-04-12 17:00:00', '2022-04-13 23:12:17'),
(2, 'Home', 'profile-images/LnCQIidHPvg5lkkNjxeCfVg0I9PLuyvrJ5cLpn2q.jpg', '🌊Danau Toba🌊', 'Danau dengan keindahan yang tidak tertandingi ini merupakan danau vulkanik terbesar di Asia Tenggara dan terbesar kedua di dunia setelah Danau Victoria.\r\n                    Danau Toba sudah lama terkenal sebagai salah satu objek wisata Indonesia favorit yang sering dikunjungi sejak tahun 1980-an lho!', '2022-04-13 07:01:20', '2022-04-13 08:09:44'),
(3, 'Home', 'profile-images/ywSPf3rjX0CtdVpDnN7dnsDIo6DcQ2yJQcaRdlJM.jpg', '🛕Candi Borobudur🛕', 'Salah satu ikon wisata budaya Indonesia yang mendunia lainnya adalah Candi Borobudur. Sebagai candi Budha terbesar di dunia dengan luas tak kurang dari 123 X 123 meter, candi yang dibangun pada masa kerajaan Mataram kuno ini merupakan warisan budaya dan sejarah Indonesia yang terkenal akan arsitektur yang memukau', '2022-04-13 07:01:20', '2022-04-13 08:10:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_11_065234_create_homes_table', 1),
(6, '2022_04_11_092221_create_abouts_table', 2),
(7, '2022_04_11_094703_create_services_table', 3),
(8, '2022_04_11_095747_create_services_kupons_table', 4),
(9, '2022_04_11_101237_create_services_pakets_table', 5),
(10, '2022_04_11_102718_create_services_kupons_table', 6),
(11, '2022_04_11_103512_create_profiles_table', 7),
(12, '2022_04_11_133817_create_contacts_table', 8),
(13, '2022_04_11_151902_create_logins_table', 9),
(14, '2022_04_11_223320_create_registers_table', 10),
(15, '2022_04_12_052346_create_admins_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Profile',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `gambar`, `nama`, `lokasi`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Profile', 'profile-images/MJS7vF3efE6g4xFZlaiwwD3MH4YIhuhJX1hdbC0X.jpg', 'Parai Tenggiri', 'Bangka Belitung', 'Pasti diantara kamu sudah pernah menyaksikan film populer Laskar Pelangi yang berlatar di Pulang Belitung, bukan? Selain alur ceritanya yang menarik, lokasi film ini juga banyak menyita perhatian penonton. \r\n\r\nBerbeda dengan pantai lain pada umumnya, Parai Tenggiri memiliki struktur pantai yang landai dengan air laut berwarna hijau toska serta pasir putihnya yang lembut. Ombak di pantai ini juga tenang sehingga menjadi salah satu alasan yang menarik bagi wisatawan yang senang berenang. \r\n\r\nTidak hanya berenang, kamu juga bisa menikmati aktivitas memancing, parasailing, menyelam, snorkeling, dan masih banyak lainnya.', '2022-04-11 03:40:55', '2022-04-13 07:42:25'),
(36, 'Profile', 'profile-images/9VjLX8sCQOHPwCMBTiDXe8NstBrvbMYqypCHDWWd.jpg', 'Gunung Rinjani', 'Lombok, NTB', 'Selain Gili Trawangan, di Nusa Tenggara Barat juga terdapat wisata yang tak kalah populer dan cocok bagi kamu yang suka mendaki, yakni Gunung Rinjani. Gunung ini adalah gunung berapi tertinggi kedua yang ada di Indonesia. \r\n\r\nGunung Rinjani memiliki pemandangan terindah se-Asia dengan hamparan bunga edelweis dan Danau Segara Anak. Di tempat ini juga bisa menjadi spot menarik bagi para pendaki untuk mendirikan tenda, mandi air hangat, maupun memancing ikan. \r\n\r\nNamun sebelum itu, buatlah persiapan yang matang sebelum memutuskan untuk mendaki. Kamu juga perlu menyiapkan bekal mental dan stamina agar tidak menyerah di tengah jalan.', '2022-04-13 07:23:59', '2022-04-13 23:20:09'),
(38, 'Profile', 'profile-images/whL9NpumkEwsyFHqmMU8Ooz3jBiAP9RZKogH6llx.jpg', 'Taman Laut Bunaken', 'Sulawesi Utara', 'Destinasi wisata di Indonesia yang populer di mancanegara selanjutnya adalah Taman Laut Bunaken yang berada di Teluk Manado.\r\n\r\nBunaken menjadi salah satu objek wisata di Indonesia yang mengundang decak kagum karena keindahan taman bawah lautnya yang sulit ditemukan di negara lain.\r\n\r\nBerkunjung ke Taman Laut Bunaken, Toppers akan menemukan keindahan kehidupan di dalam laut yang membuat mata kamu tidak bisa berhenti memandangnya.', '2022-04-13 07:42:43', '2022-04-13 23:25:57'),
(39, 'Profile', 'profile-images/3HveIicHRviJ6ULcoq9Y3mHfP6L1JVVzZ3jZb6tx.jpg', 'Wakatobi', 'Sulawesi Tenggara', 'Masih di Pulau Sulawesi, Taman Nasional Wakatobi juga merupakan salah satu tujuan wisata bawah laut yang populer dan mendunia.\r\n\r\nDengan luas mencapai 13.900 km2, tujuan wisata terkenal asal Indonesia ini memiliki tak kurang dari 112 jenis terumbu karang yang bersimbiosis dengan ikan-ikan bawah laut sehingga menciptakan panorama bawah laut yang tiada tanding.\r\n\r\nSemuanya itu menjadikan Wakatobi sebagai salah satu surga menyelam bagi para traveler dari berbagai penjuru dunia.', '2022-04-13 08:11:23', '2022-04-13 23:22:03'),
(40, 'Profile', 'profile-images/pzoSPuyD19ciC44mXZMsSskpr7vLh6iM1QTrwncq.jpg', 'Kepulauan Raja Ampat', 'Papua Barat', 'Surga dunia di Indonesia selanjutnya adalah kepulauan Raja Ampat yang terletak di Papua Barat dengan kekayaan laut terlengkap di bumi.\r\n\r\nRaja Ampat atau Empat Raja merupakan 4 pulau indah yang merupakan penghasil lukisan batu kuno. Empat pulau utama yang dimaksud adalah Waigeo, Salawati, Batanta, dan Misool.\r\n\r\nNama-nama tersebut berasal dari mitos lokal dari warga di sekitar pulau Raja Ampat. Keindahan dan kemegahan dari objek wisata populer asal Indonesia ini mampu mengundang para wisatawan dari seluruh dunia untuk datang ke sini dan merasakan pengalaman sekaligus pemandangan yang tidak akan terlupakan.\r\n\r\nDengan wilayah pulau mencakup hingga 4,6 juta hektar tanah dan laut, kita bisa menemukan 540 jenis karang, 1.511 spesies ikan, serta 700 jenis moluska.\r\n\r\nPerlu diketahui Toppers, menurut laporan The Nature Conservancy and Conservation International, ada sekitar 75% spesies laut dunia yang tinggal di pulau indah nan menakjubkan ini.', '2022-04-13 23:22:48', '2022-04-13 23:22:48'),
(41, 'Profile', 'profile-images/W2wWIL3kCmHS8vesdbjeYrzow6SsMxIBRpnHknAD.jpg', 'Gunung Bromo', 'Jawa Timur', 'Kalau kamu pernah berkunjung ke Jawa Timur gak lengkap rasanya kalau belum menginjakkan kaki ke Gunung Bromo ini.\r\n\r\nSalah satu gunung berapi yang masih aktif ini memiliki pesona khas berupa gurun pasir yang sangat luat.\r\n\r\nMeskipun bukan salah satu gunung tertinggi di Indonesia, namun keindahan Gunung Bromo tidak ada duanya dan membuat para pengunjung dapat merasakan pemandangan yang fantastis dan spektakuler.\r\n\r\nWisatawan dapat berkuda dan mendaki gunung bromo untuk menikmati keindahan yang menawan saat matahari terbit dan terbenam.\r\nBisa jadi pengalaman secara langsung yang tidak terlupakan lho Toppers! Dengan keindahan yang menakjubkan itu tidak heran jika objek wisata di Indonesia satu ini menjadi para wisatawan mancanegara yang berkunjung ke Indonesia.', '2022-04-13 23:24:34', '2022-04-13 23:24:34'),
(42, 'Profile', 'profile-images/zloPFpQ6OXxQcKfkvhFERPyHcxBAvwMgA6xrsJwo.jpg', 'Pulau Komodo', 'Nusa Tenggara Timur', 'Destinasi wisata Indonesia yang tersohor di mata dunia selanjutnya adalah Pulau Komodo. Pulau yang berlokasi di Kepulauan Nusa Tenggara Timur ini merupakan rumah bagi ratusan Komodo, hewan endemik yang hanya ada di Indonesia.\r\n\r\nSelain bisa mengamati perilaku dan mengeksplorasi habitat dari hewan purba ini, Pulau Komodo juga menawarkan panorama alam yang menakjubkan.\r\n\r\nSalah satunya adalah pantai dengan pasir berwarna merah muda yang dikenal dengan nama “Pink Beach“.\r\n\r\nPantai seperti ini hanya terdapat tujuh di seluruh dunia sehingga menjadikannya sebagai salah satu tujuan wisata Indonesia yang mendunia.', '2022-04-13 23:25:25', '2022-04-13 23:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Register',
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `title`, `firstName`, `lastName`, `alamat`, `notelp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Register', 'r', 'r', 'r', '1', 'r', 'r', '2022-04-11 15:37:03', '2022-04-11 15:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `services_kupons`
--

CREATE TABLE `services_kupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kupon',
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalmulai` date NOT NULL,
  `tanggalberakhir` date NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_kupons`
--

INSERT INTO `services_kupons` (`id`, `title`, `nilai`, `tanggalmulai`, `tanggalberakhir`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'Kupon', '10', '2022-04-06', '2022-04-30', '844879944630493901', '2022-04-11 03:31:30', '2022-04-13 08:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `services_pakets`
--

CREATE TABLE `services_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Paket',
  `paket_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulkartu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_pakets`
--

INSERT INTO `services_pakets` (`id`, `title`, `paket_gambar`, `judulkartu`, `harga`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Paket', 'profile-images/z3KW0TcYHlWv3w0rAnQQaLlyUjDAlocZv188v9oR.jpg', '3D/2N Kawah Ijen - Jawa Timur - Tour', '200.000', 'Jawa Timur', '2022-04-11 03:17:45', '2022-04-13 23:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Portal Masuk',
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `firstName`, `lastName`, `alamat`, `notelp`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Portal Masuk', 'Admin', 'Admin', 'Rahasia', 'Rahasia Juga', 'admin@gmail.com', 'admin', '$2y$10$/Diej9jDo4Wd.bhGtJl9M.7PAiuBp.RSkjTfz1mLvEFY.CL2gRaTS', '2022-04-12 07:08:40', '2022-04-12 07:08:40'),
(45, 'Portal Masuk', 'Raihan', 'Hidayatullah D', 'Jl Puspa VI No.32', '081906781639', 'raihandjunaedi3@gmail.com', 'raihan', '$2y$10$hLkwogPCa0VjwTZDHJUyjeLXINwCN907jh/rcvDiPshXEGOnLpv42', '2022-04-12 01:19:51', '2022-04-12 01:19:51'),
(47, 'Portal Masuk', 'Raihan', 'Hidayatullah D', 'Jl. Puspa VI No.32 Mekarmukti, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530', '081906781639', 'raihandjunaedi3@gmail.com', 'raihan', '$2y$10$jYp1jHbkYFvXVpA9jCVwPuaaHRyVDx45Rd.FLtKJN6XD44RctM7t.', '2022-04-12 01:39:20', '2022-04-12 01:39:20'),
(55, 'Portal Masuk', 'Raihan', 'Coba1', 'Jl. Puspa VI No.32 Mekarmukti, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530', '081906781639', 'raihandjunaedi3@gmail.com', 'raihancoba1', '$2y$10$.4XVAhU1UxkF6uMPcP467uhsbv5ypAzJcMcJ9b6PvK2KqlbD9mOLG', '2022-04-12 03:14:20', '2022-04-12 03:14:20'),
(61, 'Portal Masuk', 'Keren', 'Raihan', 'jl Mana aja deh ya', '081906781639', 'itsmehannn@gmail.com', 'coba1', '$2y$10$WPH2FkYYVrnVtzd7wVfIBefYWa1kvMKteT2Vh/gdFclBXZOTqaLiO', '2022-04-13 22:39:42', '2022-04-13 22:39:42'),
(62, 'Portal Masuk', 'raihan', 'hd12', 'jl Puspa VI No 32 Cikarang Utara', '081906781639', 'dilan01keren@gmail.com', 'raihancoba2', '$2y$10$8nzXI5gLulG68QTRL/RkvevbAwxPmuKJWVWCcRv5kUid5xSMC6ugm', '2022-04-14 00:00:32', '2022-04-14 00:00:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_kupons`
--
ALTER TABLE `services_kupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_pakets`
--
ALTER TABLE `services_pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_kupons`
--
ALTER TABLE `services_kupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services_pakets`
--
ALTER TABLE `services_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
