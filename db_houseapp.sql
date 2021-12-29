-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 03:54 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_houseapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo_progress`
--

CREATE TABLE `photo_progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `progress_id` bigint(20) UNSIGNED NOT NULL,
  `file_photo` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `acc_manager` tinyint(1) NOT NULL,
  `acc_pengawas` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `project_id`, `date`, `acc_manager`, `acc_pengawas`) VALUES
(1, 1, '2021-08-31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `pengawas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lapangan_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(200) NOT NULL,
  `type` int(4) NOT NULL,
  `building_area` int(4) NOT NULL,
  `land_area` int(4) NOT NULL,
  `house_spec` varchar(500) NOT NULL,
  `floors` int(2) NOT NULL,
  `work_duration` int(4) NOT NULL,
  `rab` decimal(15,0) NOT NULL,
  `twod_file` varchar(100) NOT NULL,
  `threed_link` varchar(300) NOT NULL,
  `animation_video` varchar(100) NOT NULL,
  `time_schedule` varchar(300) NOT NULL,
  `rab_file` varchar(300) NOT NULL,
  `agreement_doc` varchar(300) NOT NULL,
  `spec_doc` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `working_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `owner_id`, `manager_id`, `pengawas_id`, `lapangan_id`, `location`, `type`, `building_area`, `land_area`, `house_spec`, `floors`, `work_duration`, `rab`, `twod_file`, `threed_link`, `animation_video`, `time_schedule`, `rab_file`, `agreement_doc`, `spec_doc`, `start_date`, `end_date`, `working_status`) VALUES
(1, 'Rumah Rumahan', 2, 1, 3, 4, 'https://maps.app.goo.gl/mCKw6p8FBDx1ARXcA', 72, 72, 100, '3 Kamar tidur, 2 kamar mandi, 1 Ruang Tamu, 1 Ruang Keluarga, 1 Dapur', 1, 90, '1000000000', 'Assignment.pdf', 'https://3dwarehouse.sketchup.com/embed.html?mid=u33ee83a9-f9a6-4a14-8950-c487ded2ea4a', '2019-06-11 20-42-21.mp4', 'Estimated-Budget-Proposed.xlsx', 'Estimated-Budget-Proposed.xlsx', 'Assignment.pdf', 'Assignment.pdf', '2021-08-23', '2021-12-20', 100),
(2, 'My House', 2, 1, 3, 4, 'https://goo.gl/maps/BGLjhypTHELyjzZr5 ', 60, 60, 80, '2 Kamar tidur, 1 kamar mandi, 1 Ruang Tamu, 1 Ruang Keluarga, 1 Dapur', 1, 80, '900000000', 'Assignment.pdf', 'https://3dwarehouse.sketchup.com/embed.html?mid=u33ee83a9-f9a6-4a14-8950-c487ded2ea4a', '2019-06-11 20-42-21.mp4', 'Estimated-Budget-Proposed.xlsx', 'Estimated-Budget-Proposed.xlsx', 'Assignment.pdf', 'Assignment.pdf', '2022-01-02', '2022-03-25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Manager'),
(2, 'Owner'),
(3, 'Pengawas'),
(4, 'Lapangan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `phone_number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role_id`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Falah Robbani', 'manager', '$2y$10$vH4S52S3NrsJdlBVbuMEre5h/qhG0uqHpjtMbQaMkEHr7hZNe9Y2e', 1, '085123456789', NULL, '2021-12-24 19:47:46', '2021-12-24 19:47:46'),
(2, 'Nama Owner', 'owner', '$2y$10$XdikLPZYaxqAKmj2qmmSY.DNQbj3zWVGr2oywUsp1IY9tYyTtEXNy', 2, '081234567890', NULL, '2021-12-24 19:47:46', '2021-12-24 19:47:46'),
(3, 'Nama Pengawas', 'pengawas', '$2y$10$8kxGzi9ZBCLScIDxiMtdruLNVgQofoReOOgngMAxVyC4rgGj4yTre', 3, '088987654321', NULL, '2021-12-24 19:47:46', '2021-12-24 19:47:46'),
(4, 'Nama P.Lapangan', 'lapangan', '$2y$10$8skQMyjL4u8TRyRKz5hKOulfNRGylCghPXyAZp2m2GTdpIanYiFJe', 4, '083456789012', NULL, '2021-12-24 19:47:46', '2021-12-24 19:47:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `photo_progress`
--
ALTER TABLE `photo_progress`
  ADD KEY `progress_id` (`progress_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lapangan` (`lapangan_id`),
  ADD KEY `id_manager` (`manager_id`),
  ADD KEY `id_owner` (`owner_id`),
  ADD KEY `id_pengawas` (`pengawas_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `photo_progress`
--
ALTER TABLE `photo_progress`
  ADD CONSTRAINT `photo_progress_ibfk_1` FOREIGN KEY (`progress_id`) REFERENCES `progress` (`id`);

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`lapangan_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `project_ibfk_4` FOREIGN KEY (`pengawas_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
