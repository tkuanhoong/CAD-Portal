-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: free-tier-database.czkhwj8hop4d.ap-southeast-1.rds.amazonaws.com:3306
-- Generation Time: Nov 24, 2021 at 11:56 AM
-- Server version: 8.0.23
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadutmkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `mission1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `mission1`, `mission2`, `mission3`, `mission4`, `vision1`, `vision2`, `vision3`, `vision4`, `created_at`, `updated_at`) VALUES
(1, 'Continuously promote Art category in Universiti Teknologi Malaysia Kuala Lumpur', 'To exploit potentialities on students\' creativity', 'Cultivating the budding talents of UTMKL students', 'Creating programs for UTMKL students to take part in and students literally enjoy in our programs', 'Making art a routine in UTMKL', 'Becoming the most popular Art club in UTMKL', 'Exploring talents in UTMKL', 'Creating exhilarating programs for students to have different experience', '2021-11-12 18:35:48', '2021-11-19 22:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Nicholas', 'tan2001@graduate.utm.my', '01111486899', 'Uploading files', 'I have problem with uploading files', '2021-11-18 16:40:50', '2021-11-18 16:40:50'),
(5, 'Harry Williams', 'harrywilliamwork7@gmail.com', '9316839977', 'Viewing Content', 'Hey,\r\n\r\nYour website design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority, I can also get on a call.\r\n\r\nPlease share your “Phone Number\" and a suitable time to talk, so I can help you in that.\r\n\r\nRegards\r\nHarry Williams\r\nDigital Marketing Expert', '2021-11-24 07:06:47', '2021-11-24 07:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `address`, `phone`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Sultan Yahya Petra, Kampung Datuk Keramat, 54100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '+6018-2038004', 'cadutmkl@gmail.com', 'https://www.cadutmkl.com', '2021-11-12 18:35:48', '2021-11-18 17:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `attendance_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `availability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `banner`, `title`, `short_description`, `description`, `location`, `organizer`, `category`, `date`, `time`, `fee`, `attendance_link`, `whatsapp_link`, `meeting_link`, `created_at`, `updated_at`, `availability`) VALUES
(1, 'event4_1637134845.jpeg', 'HENNA DESIGN CONTEST', 'HENNA DESIGN CONTEST SHORT DESCRIPTION', '<h3 style=\"color: black;\">HENNA DESIGN CONTEST</h3>\r\n<p>1st Place : RM 100<br />2nd Place: RM 50<br />3rds Place: RM 10</p>', 'Google Meet', 'Miss Syira', 'competition', '2021-12-17', '14:00:00', '5.00', 'https://forms.gle/UFKG3FYQDQQJ85k7A', 'https://chat.whatsapp.com/GMbFuOZPvQUG2m5CsNsYQc', 'https://meet.google.com/htt-uads-awv', '2021-11-17 15:40:45', '2021-11-17 21:26:48', 'unavailable'),
(4, 'event3_1637225221.jpeg', 'ART CRAFT', 'ART CRAFT Short Description', '<h3 style=\"color: black;\">Event Title</h3>\r\n<p>Prizes:<br />1st: RM 100<br />2nd: RM 60<br />3nd: RM 40</p>', 'Google Meet', 'Miss Syira', 'free', '2021-12-29', '10:00:00', '0.00', 'https://forms.gle/UFKG3FYQDQQJ85k7A', 'https://chat.whatsapp.com/GMbFuOZPvQUG2m5CsNsYQc', 'https://meet.google.com/htt-uads-awv', '2021-11-18 16:47:01', '2021-11-21 20:48:17', 'unavailable'),
(5, 'event2_1637225493.jpeg', 'DIY CRAFT Competition', 'DIY Craft Competition Short Description', '<p>DIY CRAFT Competition</p>', 'Google Meet', 'Miss Syira', 'competition', '2021-12-28', '08:00:00', '5.00', 'https://forms.gle/UFKG3FYQDQQJ85k7A', 'https://chat.whatsapp.com/GMbFuOZPvQUG2m5CsNsYQc', 'https://meet.google.com/htt-uads-awv', '2021-11-18 16:51:33', '2021-11-21 20:57:50', 'unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint UNSIGNED NOT NULL,
  `upcoming_programs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programs_completed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `upcoming_programs`, `programs_completed`, `members`, `years`, `facebook_link`, `instagram_link`, `telegram_link`, `created_at`, `updated_at`) VALUES
(1, '200', '100', '5000', '3', 'https://www.facebook.com/cadutmkl186', 'https://www.instagram.com/cad_utmkl/', 'https://t.me/cadutmkl', '2021-11-12 18:35:48', '2021-11-19 22:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_03_081353_create_roles_table', 1),
(5, '2021_09_03_081532_create_role_user_table', 1),
(6, '2021_09_03_143742_create_foreign_keys_for_role_user_table', 1),
(7, '2021_09_14_062512_add_avatar_column_to_users_table', 1),
(8, '2021_09_19_125316_create_contacts_table', 1),
(9, '2021_09_26_184902_add_verification_column_to_users_table', 1),
(10, '2021_10_07_214519_create_events_table', 1),
(11, '2021_10_07_220414_create_event_user_table', 1),
(12, '2021_10_07_220600_create_foreign_keys_for_event_user_table', 1),
(13, '2021_10_26_195024_create_homes_table', 1),
(14, '2021_10_27_182932_create_about_pages_table', 1),
(15, '2021_10_27_213607_create_contact_pages_table', 1),
(16, '2021_11_01_205555_create_organizations_table', 1),
(17, '2021_11_01_211004_create_tops_table', 1),
(18, '2021_11_03_225701_add_availability_column_to_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CAD CLUB COUNCIL SESSION 21/22', '2021-11-12 18:35:48', '2021-11-19 22:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint UNSIGNED NOT NULL,
  `event_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ic_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `event_id`, `user_id`, `full_name`, `email`, `phone_number`, `ic_number`, `matric_number`, `payment_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'TAN KUAN HOONG', 'tkh88y@hotmail.com', '01111486899', '011229011095', 'A19DW0150', '6.22', '2021-11-17 18:45:21', '2021-11-17 18:45:21'),
(3, 4, 2, 'TAN KUAN HOONG', 'hoong@graduate.utm.my', '01111486899', '011229011095', 'A19DW0150', NULL, '2021-11-18 16:55:18', '2021-11-18 16:55:18'),
(4, 5, 2, 'TAN KUAN HOONG', 'hoong@graduate.utm.my', '01111486899', '011229011095', 'A19DW0150', '6.22', '2021-11-18 16:57:44', '2021-11-18 16:57:44'),
(5, 4, 7, 'LUCAS SONG', 'lucassong63@gmail.com', '0123353283', '010603010451', 'A19DW0308', NULL, '2021-11-21 20:47:12', '2021-11-21 20:47:12'),
(6, 5, 7, 'LUCAS SONG', 'lucassong63@gmail.com', '0123353283', '010603010451', 'A19DW0308', '6.22', '2021-11-21 20:54:36', '2021-11-21 20:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-11-12 18:35:48', '2021-11-17 18:58:25'),
(2, 'user', '2021-11-12 18:35:48', '2021-11-18 17:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tops`
--

CREATE TABLE `tops` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tops`
--

INSERT INTO `tops` (`id`, `name`, `position`, `image`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'NUR SYAHIRA AMIRA BINTI MOHD AZHARI', 'Club Advisor of Creative Art & Design Club', 'NUR SYAHIRA AMIRA BINTI MOHD AZHARI.jpeg', 1, '2021-11-12 18:35:48', '2021-11-17 19:12:20'),
(2, 'YASMIEN MAISARAH BINTI DZULKIFLY', 'President of Creative Art & Design Club', 'YASMIEN MAISARAH BINTI DZULKIFLY.jpeg', 2, '2021-11-12 18:35:48', '2021-11-17 19:11:29'),
(3, 'AUNI AFIFAH BINTI KHUZAIRY', 'Vice President (Internal)', 'AUNI AFIFAH BINTI KHUZAIRY.jpg', 3, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(4, 'MA ATHIRAH BINTI SAPAWI', 'Vice President (External)', 'MA ATHIRAH BINTI SAPAWI.JPG', 4, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(5, 'SYAHIRAH AMIRAH BINTI ABU BAKAR', 'Secretary', 'SYAHIRAH AMIRAH BINTI ABU BAKAR.jpg', 5, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(6, 'TAN WOON ZHE', 'Treasurer', 'TAN WOON ZHE.png', 6, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(7, 'SUFEA NUR BINTI MOHD ASRI', 'Exco Multimedia and Publicity 1', 'SUFEA NUR BINTI MOHD ASRI.jpg', 7, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(8, 'FISA AIMANNURAIN BINTI ARIS FADILAH', 'Exco Multimedia and Publicity 2', 'FISA AIMANNURAIN BINTI ARIS FADILAH.jpeg', 8, '2021-11-12 18:35:48', '2021-11-17 20:38:23'),
(9, 'MUHAMMAD FARIS BIN SARIZAL', 'Exco Activity', 'MUHAMMAD FARIS BIN SARIZAL.jpg', 9, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(10, 'FURQAN QADRI', 'Exco Cooperate Relations', 'FURQAN QADRI.jpg', 10, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(11, 'GHAYATHRI UMASANGARAN', 'Exco Entrepreneurship', 'GHAYATHRI UMASANGARAN.jpeg', 11, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(12, 'SHUVEINEEA A/P GUNASEKARAN', 'Exco Special Task', 'SHUVEINEEA.JPG', 12, '2021-11-12 18:35:48', '2021-11-12 18:35:48'),
(13, 'TAN KUAN HOONG', 'Exco Website Manager 1', 'TAN KUAN HOONG_1637332277.jpeg', 13, '2021-11-12 18:35:48', '2021-11-19 22:31:17'),
(14, 'NG QING XIAN', 'Exco Website Manager 2', 'NG QING XIAN_1637148222.jpeg', 14, '2021-11-12 18:35:48', '2021-11-17 19:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'userLogo.png',
  `verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `verification`) VALUES
(1, 'TAN KUAN HOONG', 'tkuanhoong@gmail.com', NULL, '$2y$10$w/xgSs2rev45JVTrbK/CTuNR2R.s9DFPko/OjVKVvHrhEQoC5gg6G', 'e4MF1DvxgPqavBTaMW17JC01Hk2r0qJgi4yVgOwmnLvP2o3jMe3pyVQvQa6O', '2021-11-12 18:35:48', '2021-11-18 17:06:08', 'girl_1637225564.png', 'verified'),
(2, 'Generic User', 'tkh88y@hotmail.com', NULL, '$2y$10$aly5OwLiDMu3hPGWtpN5euDlrFhxWJtmhw6AFFHUc9JXb/IFEuB1C', 'Vs8Ol4eBfzjUeXnCJpRWdV4Nuc2tUs0Iw3ai3y8YQ97MPFMP4fVU9WvOZuT9', '2021-11-12 18:35:48', '2021-11-18 16:42:32', 'boy_1637138815.png', 'verified'),
(6, 'Nicholas Tan 1', 'tan2001@graduate.utm.my', NULL, '$2y$10$3Udwfq23pgL1ARZ8Jekhvu52utPLKQ6BylmqhG5UmqrunjahIlorG', NULL, '2021-11-18 16:37:39', '2021-11-18 16:39:54', 'boy_1637224767.png', 'verified'),
(7, 'Lucas Song', 'lucassong63@gmail.com', NULL, '$2y$10$UEc95sVwXprWD/DL..nao.RfWDchvf0kVJs6WrREgx9CD0fknYgd6', NULL, '2021-11-21 20:33:46', '2021-11-21 20:33:46', 'userLogo.png', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_event_id_foreign` (`event_id`),
  ADD KEY `registration_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `tops`
--
ALTER TABLE `tops`
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
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tops`
--
ALTER TABLE `tops`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registration_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
