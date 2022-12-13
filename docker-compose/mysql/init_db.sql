-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: progja
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrators`
(
    `id`         bigint unsigned NOT NULL AUTO_INCREMENT,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrators`
--

LOCK
TABLES `administrators` WRITE;
/*!40000 ALTER TABLE `administrators` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrators` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `beritas`
--

DROP TABLE IF EXISTS `beritas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beritas`
(
    `id`             bigint unsigned NOT NULL AUTO_INCREMENT,
    `judul_berita`   varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto_berita`    varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `tanggal_berita` date                                    NOT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beritas`
--

LOCK
TABLES `beritas` WRITE;
/*!40000 ALTER TABLE `beritas` DISABLE KEYS */;
/*!40000 ALTER TABLE `beritas` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `dokumentasis`
--

DROP TABLE IF EXISTS `dokumentasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dokumentasis`
(
    `id`            bigint unsigned NOT NULL AUTO_INCREMENT,
    `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `logo`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `created_at`    timestamp NULL DEFAULT NULL,
    `updated_at`    timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumentasis`
--

LOCK
TABLES `dokumentasis` WRITE;
/*!40000 ALTER TABLE `dokumentasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `dokumentasis` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `eskuls`
--

DROP TABLE IF EXISTS `eskuls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eskuls`
(
    `slug`            varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `nama_eskul`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `logo`            varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `pembina`         varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `ketua`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `wakilketua`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `jadwal_kumpulan` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `visi`            text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `misi_eskul`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `program_kerja`   text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `nama_instagram`  varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at`      timestamp NULL DEFAULT NULL,
    `updated_at`      timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eskuls`
--

LOCK
TABLES `eskuls` WRITE;
/*!40000 ALTER TABLE `eskuls` DISABLE KEYS */;
/*!40000 ALTER TABLE `eskuls` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs`
(
    `id`         bigint unsigned NOT NULL AUTO_INCREMENT,
    `uuid`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `queue`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `payload`    longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `exception`  longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `failed_at`  timestamp                               NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK
TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `kepseks`
--

DROP TABLE IF EXISTS `kepseks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kepseks`
(
    `id`               bigint unsigned NOT NULL AUTO_INCREMENT,
    `nama_kepsek`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto_kepsek`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `pembuka_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `isi_sambutan`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `penutup_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at`       timestamp NULL DEFAULT NULL,
    `updated_at`       timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kepseks`
--

LOCK
TABLES `kepseks` WRITE;
/*!40000 ALTER TABLE `kepseks` DISABLE KEYS */;
INSERT INTO `kepseks`
VALUES (1, 'Bejo', 'pak bejo.png', '-', 'b', '-', NULL, NULL);
/*!40000 ALTER TABLE `kepseks` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations`
(
    `id`        int unsigned NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch`     int                                     NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK
TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations`
VALUES (1, '2014_10_12_000000_create_users_table', 1),
       (2, '2014_10_12_100000_create_password_resets_table', 1),
       (3, '2019_08_19_000000_create_failed_jobs_table', 1),
       (4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
       (5, '2022_08_14_004234_create_administrators_table', 1),
       (6, '2022_08_15_145113_create_eskul_table', 1),
       (7, '2022_09_06_020632_create_dokumentasi_table', 1),
       (8, '2022_09_06_032246_create_berita_table', 1),
       (9, '2022_09_20_061907_create_kepsek_table', 1),
       (10, '2022_09_20_063637_create_wakasek_table', 1),
       (11, '2022_09_20_070137_create_tentangweb_table', 1),
       (12, '2022_09_22_111514_create_namaanggota_table', 1),
       (13, '2022_10_05_051915_create_roles_table', 1),
       (14, '2022_12_12_235444_add_admin', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `namaanggotas`
--

DROP TABLE IF EXISTS `namaanggotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `namaanggotas`
(
    `id`         bigint unsigned NOT NULL AUTO_INCREMENT,
    `nama`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `namaanggotas`
--

LOCK
TABLES `namaanggotas` WRITE;
/*!40000 ALTER TABLE `namaanggotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `namaanggotas` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets`
(
    `email`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    KEY          `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK
TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens`
(
    `id`             bigint unsigned NOT NULL AUTO_INCREMENT,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id`   bigint unsigned NOT NULL,
    `name`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`          varchar(64) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `abilities`      text COLLATE utf8mb4_unicode_ci,
    `last_used_at`   timestamp NULL DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
    KEY              `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK
TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles`
(
    `id`         bigint unsigned NOT NULL AUTO_INCREMENT,
    `role`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK
TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `tentangwebs`
--

DROP TABLE IF EXISTS `tentangwebs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tentangwebs`
(
    `id`         bigint unsigned NOT NULL AUTO_INCREMENT,
    `pembuka`    varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `isi`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `nama`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tentangwebs`
--

LOCK
TABLES `tentangwebs` WRITE;
/*!40000 ALTER TABLE `tentangwebs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tentangwebs` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users`
(
    `id`                bigint unsigned NOT NULL AUTO_INCREMENT,
    `name`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `role`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `remember_token`    varchar(100) COLLATE utf8mb4_unicode_ci          DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK
TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users`
VALUES (1, 'admin', 'admin@localhost', NULL, '$2y$10$mZ9LphNC/sgBXOWSr9LIPeuFgCMYDC1qcFpPq77b9DO/0kpcF5Jpy', 'root',
        'default.png', 'vLG4DFkyAjo2l0j8JmqN8zmoAKFaOU9okEg8TQMmhvxTAYYjw8gW5cowqUux', NULL, NULL),
       (2, 'sanbray', 'sanbray@gmail.com', NULL, '$2y$10$ltyp8Q53uivz2xa9dnc5duvtzRnZXJTD6JTxO7NxSxfxaW5fILp3i', 'root',
        'download (1).png', 'azbKgetCOB4mmATNvixjk0eEjW02gOcAL94H1VkJer87fzyGfLRffPRoVuvg', NULL, NULL),
       (3, 'naufal', 'itclub@gmail.com', NULL, '$2y$10$96AmSroaE9vgTpTDc.8jHOwsLD7LLh1Z0h0xGMD9HH/W9gMIch3/W',
        'adminitc', 'images.png', 'pOnFvRhhEuWUJ95kl9gaGOrJqP1ldYsWGE3K77ypjqOVaaPsalsD6v4INjHe', NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK
TABLES;

--
-- Table structure for table `wakaseks`
--

DROP TABLE IF EXISTS `wakaseks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wakaseks`
(
    `id`               bigint unsigned NOT NULL AUTO_INCREMENT,
    `nama_wakasek`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `foto_wakasek`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
    `pembuka_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `isi_sambutan`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `penutup_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at`       timestamp NULL DEFAULT NULL,
    `updated_at`       timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wakaseks`
--

LOCK
TABLES `wakaseks` WRITE;
/*!40000 ALTER TABLE `wakaseks` DISABLE KEYS */;
INSERT INTO `wakaseks`
VALUES (1, 'Nurdin', 'pak nurdin.png', '-', '-', '-', NULL, NULL);
/*!40000 ALTER TABLE `wakaseks` ENABLE KEYS */;
UNLOCK
TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-13  9:52:03
