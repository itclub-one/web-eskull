-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 09:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progja`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berita` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul_berita`, `foto_berita`, `tanggal_berita`, `created_at`, `updated_at`) VALUES
(1, 'afa', 'Checklist.jpg', '2022-09-06', '2022-09-05 20:31:18', '2022-09-05 20:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasis`
--

CREATE TABLE `dokumentasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eskuls`
--

CREATE TABLE `eskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_eskul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakilketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_kumpulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi_eskul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_kerja` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eskuls`
--

INSERT INTO `eskuls` (`id`, `nama_eskul`, `logo`, `pembina`, `ketua`, `wakilketua`, `jadwal_kumpulan`, `visi`, `misi_eskul`, `program_kerja`, `nama_instagram`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'MPK', 'mpk.png', 'Nurdin Ruslih, ST., M.Pd.', 'Muhammad Dewangga Adidaryansyah', 'Serly Pebrian', 'Senin & Jumat', '-', '-', '-', '@mpksmkn1garut', '2022-10-29 05:57:36', '2022-10-30 23:17:26', 'mpk1'),
(4, 'Pks', 'pks.png', 'Dias Lutfiana, S.Pd.I.', 'Annisa Darozah', 'Anindhita Nanda', 'Kamis & Jumat', 'Terwujudnya suasana yang kondusif dikalangan siswa dan siswi dalam pelaksanaan proses kegiatan pendidikan dan ketertiban penggunaan fasilitas jalan raya.', '1. Mewujudkan keteraturan pada lingkungan pergaulan remaja yang bersih dan berwibawa bebas dari kenakalan remaja. \r\n2. Mewujudkan sistem pendidikan remaja berdaya guna dan berhasil guna membina dan melestarikan nilai-nilai kehidupan demokratis, ke-gotong royongan dan kekeluargaan serta meningkatkan pelayanan masyarakat dan kesejahteraan bersama baik material dan spritual. \r\n3. Mewujudkan masyarakat yang dinamis dan partisipasi sebagai mitra yang baik bagi pemerintah, kreatif dan produktif sehingga mampu memacu laju pertumbuhan pembangunan dan kehidupan sosial masyarakat.\r\n4. Mewujudkan suasana yang tertib, jujur dan amanah serta kredible dan akuntable mulai dari tingkat SMP, SMA sampai INSTRUKTUR.', '1. Pelantikan sekolah Ca-Ang 28\r\n(Mengesahkan calon anggota menjadi anggota PKS Ca-Ang 28)\r\n2. Penebusan PDU Ca-Ang 28\r\n(Penebusan baju PDU kepada para anggota supaya berhati-hati dan tidak sembarangan menggunakan baju PDU) \r\n3. Operasi Ketupat Lodaya\r\n(Acara yang diadakan oleh Polres Garut dalam waktu sore hari untuk menjaga keamanan di bulan ramadhan) \r\n4. Penebusan slayer dan pin\r\n(Penebusan slayer dan pin bertujuan agar para anggota bisa bertanggung jawab serta berhati-hati dalam menggunakan slayer dan pin) \r\n5. MPLS 2022\r\n(Menjaga keamanan dan ketertiban para peserta didik baru)  \r\n6. Interview Ca-Ang 29\r\n(Sesi tanya jawab kepada anggota PKS yang baru) \r\n7. Pemberian dan pemahaman materi Ca-Ang 29\r\n(Memberikan materi dan pemahaman materi kepada anggota PKS yang baru) \r\n8. HUT PKS Polres\r\n(Acara ulang tahun PKS Polres Garut) \r\n9. LPJ sementara \r\n(Memberikan laporan kegiatan PKS sementara kepada danton) \r\n 10. HUT SMKN 1 Garut\r\n(Acara kegiatan ulang tahun PKS di sekolah) \r\n11. Pelantikan Polres Garut\r\n(Melantik semua anggota satuan PKS SMKN 1 Garut supaya menjadi anggota PKS di Polres) \r\n12. Operasi Lilin Lodaya\r\n(Acara yang diadakan oleh Polres Garut di malam tahun baru) \r\n13.Melaksanakan Gerakan Disiplin Sekolah (GDS) \r\n(Dilaksanakan sebelum bel pagi sekolah, guna terwujudnya suasana kondusif dikalangan siswa dan siswi dalam proses kegiatan belajar) \r\n14. Penebusan PDL Ca-Ang 28\r\n(Penebusan pdl kepada para anggota, supaya tidak sembarang dalam menggunakan PDL)', '@saga_prawuda', '2022-10-31 07:59:16', '2022-11-03 18:44:55', 'pks4'),
(9, 'Futsal Putra', 'futsalputra.png', 'Anggara Agung Budiman S.Pd', 'Zeni Junior', 'Wilby Fatwa Shandhika', 'Senin & Jumat', 'Menjadikan pemain Garuda Hitam lebih aktif, dapat berkembang,dan lebih kompak dalam olahraga Futsal. Agar bisa mendapatkan lebih banyak lagi prestasi dengan mengembangkan minat dan bakat pemain', '1. Mengembangkan minat dan bakat pemain terhadap olahraga futsal dilingkungan sekolah\r\n2. Menjadikan pemain Garuda Hitam bisa lebih menjalin sikap kekeluargaan untuk membentuk tim yang solid dan kompak\r\n3. Menjadi wadah bagi para siswa yang ingin mengembangkan bakatnya dalam bidang olahraga Futsal\r\n4. Menanamkan attitude, mental yang baik dan kuat di setiap pemain', '1. Mengadakan latihan rutin \r\nTujuan dari latihan rutin ini untuk meningkatkan bakat setiap siswa agar menjadi bekal buat di masa depan nanti\r\n2. Mengadakan agenda ujicoba dengan sekolah lain\r\nTujuan dari mengadakan agenda ujicoba dengan sekolah lain yaitu untuk mempererat tali silaturahmi \r\n3. Mengadakan evaluasi keanggotaan\r\nTujuan di evaluasi ini supaya ekstrakurikuler ini lebih tertata dan rapi \r\n4. Mengikuti pertandingan/turnamen yang diselenggarakan oleh lembaga- lembaga atau instansi\r\nTujuan dari program kerja ini adalah agar para siswa mendapat pengalaman berharga dan juga dapat mengharumkan nama sekolah SMKN 1 GARUT dengan meraih berbagai prestasi/juara', '@garudahitam59', '2022-10-31 07:56:00', '2022-11-07 00:32:26', 'futsal-putra9'),
(20, 'Koperasi Siswa', 'kopsis.png', 'Agus Sodikman,S.Pd', 'D Seli Nova Nuraeni', 'Sovi Aulia Ardhana', 'Rabu & Jumat', 'Menjadikan Koperasi siswa sebagai Ekstrakulikuler yang mampu maju, kreatif dan berwawasan luas dalam bidang kewirausahaan yang berlandaskan para anggota mempunya sifat dan karakter yang kompak guna untuk melengkapi kesejahteraan anggota melalui peningkatan sisa hasil usaha.', '-Meningkatkan rasa ketakwaan terhadap Tuhan YME\r\n-Mempertahankan serta meningkatkan sifat kedisiplinan untuk mencerminkan sifat positif seorang anggota kopsis\r\n-Mendidik, menanamkan, dan memelihara suatu kesadaran hidup bergotong royong dan setia kawan di antara para murid.\r\n-Menumbuhkan jiwa kewirausahaan siswa.\r\n-Memelihara dan meningkatkan mutu pengetahuan dan keterampilan di bidang perkoperasian\r\n-Menanamkan dan memupuk rasa tanggung jawab dan disiplin\r\nMempertahankan program kerja sebelumnya dan mengevaluasi program yang akan datang', 'Program harian\r\n1. Berwirausaha alat tulis ataupun perlengkapan sekolah.\r\n2. Menabung, yang di mana program kerja ini bertujuan untuk belajar menghemat dan untuk uang simpanan para anggota ataupun untuk orang yang menabung di kopsis.\r\nProgram Mingguan\r\n1. Pertemuan rutin, pertemuan rutin ini dilaksanakan setiap hari Jumat baik secara daring maupun luring ( tergantung situasi saat pandemi ). Biasanya berisi pemberian Materi langsung oleh pembina ataupun pengurus koperasi siswa. dilaksanakan di sekolah dan dilakukan oleh semua anggota koperasi siswa.\r\n2. Rapat antar anggota, rapat ini dilaksanakan setiap hari Rabu baik secara daring maupun luring ( tergantung situasi saat pandemi). Biasanya berisi evaluasi antar anggota. dilaksanakan di sekolah dan dilakukan oleh anggota koperasi siswa.\r\n3. Marketing dailly, dilaksanakan setiap hari Jumat. Berisi kegiatan memasarkan produk dari Koperasi Siswa itu sendiri. dilaksanakan di sekolah dan dilakukan oleh semua anggota koperasi siswa.\r\n• Program Tahunan\r\n1. Pembagian tabungan dari anggota koperasi ataupun orang yang menabung di koperasi siswa. di waktu yg terencana.\r\n2. Pembagian sisa hasil usaha, dilakukan setiap tahun nya, berisi kegiatan pembagian sisa hasil usaha dari pemasaran produk Koperasi siswa itu.', '@kopsissmea_', '2022-10-31 07:52:48', '2022-11-07 00:31:40', 'kopsis20'),
(29, 'itclub', 'itc.png', 'Andriansyah Maulana', 'Naufal Rabani', 'yusuf kala', 'Senin & Jumat', '-', '-', '-', '@itclub', '2022-10-29 05:58:19', '2022-10-31 08:10:26', 'it-club29'),
(30, 'Broadcast', 'broadcast.png', 'Sumartini Kusuma Ningrum, S.Pd.', 'Anma Risanti Maulidia', 'Farhan Al-Faiz', 'Rabu & Jumat', 'Menjadi wadah untuk mengembangkan minat dan bakat siswa/i di bidang film, fotografi, videografi, jurnalistik, editing, dan yang berkenaan dengan bidang Broadcasting', '<br> 1. Bertaqwa kepada Tuhan yang maha esa <br/>\r\n<br> 2. Menjadi media dalam mengembangkan mintat dan bakat siswa/i di bidang Broadcasting <br/>\r\n<br> 3. Menjunjung tinggi nilai moral serta kedisiplinan <br/>\r\n<br> 4. Mengasah kreativitas, menggali potensi, serta menambah wawasan di bidang Broadcasting <br/>', '1. Evaluasi bulanan : evaluasi yg dilakukan sebulan sekali untuk mengawasi kegiatan ekskul <br>\r\n2. pelatihan rutin : pelatih setiap hari rabu dan jumat  <br>\r\n3. Pelatih dasar : pembinaan yg dilakukan ketika awal masuk ekskul oleng pembina dan ketua <br>\r\n4. Broadcoverage : liputan oleh broadcast untuk keperluan website sekolah <br>\r\n5. Broadevent : event broadcast (lomba, isi materi/soal) <br>\r\n6. Program kerja film : film yang akan di produksi oleh anggota Broadcast untuk baik dari pemeran maupun produksi <br>', '@broadcast1garut_', '2022-10-31 07:42:53', '2022-11-02 06:52:48', 'broadcast30'),
(33, 'Tarung Derajat', 'boxer.png', 'Indra Ahmad Fauzi S.I.P', 'Wisnu Nugraha', 'Isna Siti K', 'Senin & Jumat', 'untuk mengenalkan pada dunia tentang ilmu bela diri tarung derajat. yang menggabungkan Senyawa Daya Gerak Otot, Otak serta Nurani secara Realistis dan Rasional, dan memperkaya citra budaya indonesia tentang seni ilmu bela diri.', '1.    Menjalin hubungan dan silaturahmi antar anggota, satlat lain, anggota perguruan diseluruh Indonesia maupun di luar negeri. \r\n2.    Melatih jasmani, rohani, kebugaran tubuh, tehnik beladiri dan sebagainya.\r\n4.    Menciptakan atlet-atlet Tarung Derajat yang professional yang mampu membawa nama harum Sekolah, daerah dan negara.', '1. Latihan Setiap Hari Senin dan Jumat: \r\nWaktu   : Setiap hari Senin dan Jumat (setelah selesai KBM)\r\nTempat : Sekolah\r\n2. Latihan Fisik\r\nWaktu   : Menyesuaikan\r\nTempat : Lingkungan Sekolah, Lapangan Kerkof\r\n3. Ujian Tingkat: \r\nWaktu   : 6 Bulan sekali\r\nTempat : Menyesuaikan\r\n4. LATGAB (Latihan Gabungan)\r\nWaktu   : Menyesuaikan\r\nTempat : Menyesuaikan\r\n5. KEJURSAT\r\nWaktu   : Menyesuaikan\r\nTempat : Menyesuaikan\r\n6. Kejuaraan Antar pelajar\r\nWaktu   : Menyesuaikan\r\nTempat : Menyesuaikan', '@kodratsmea', '2022-10-31 07:50:54', '2022-10-31 08:14:08', 'tarung-derajat18'),
(34, 'Deutsch Club (DC)', 'deutsch.png', 'Alfia Tawaffani Muslima S.Pd', 'Teguh Prayitno', 'Yemmima Gloria Lemmuela Valmay', 'Selasa & Jumat', 'Membentuk Ekskul DeutschClub (Grup yang memperlajari Bahasa dan Pengetahuan seputar Negara Jerman) yang mampu mewadahi kreasi,kreatifitas, inovasi, serta prestasi, pengalaman dan pembentukan bahasa baru siswa di bidang Ilmu Kebahasaan asing khususnya bahasa Jerman.', '1. Mengoptimalkan salah satu program ekstrakurikuler ,khususnya ekstrakulikuler bidang bahasa asing yang ada di Sekolah\r\n\r\n2. Mengembangkan program baru untuk mewadahi kebutuhan,keinginan serta kreatifitas  dan pengetahuan baru siswa\r\n\r\n3. Mengeratkan tali silaturahmi antar seluruh anggota DC, pembina, serta ekskul-ekskul lainnya', 'Program kerja Deutsch Club (DC)\r\n1. Penerimaan Anggota Baru Ekstrakurikuler Deutsch Club\r\n2. Pelantikan Ekskul/penebusan pita\r\n3. Kegiatan Sprechen (Berbicara) Bahasa Jerman\r\n4. Eksplore kebudayaan di Negara Jerman\r\n5. Kubu Cetar (Kuis Bulanan Cepat Pintar)\r\n6. Demo Ekstrakurikuler\r\n7. \"BUBARKAN JERMAN\" (Buka bareng kawan-kawan Jerman)\r\n8. Kotak kesan dan pesan\r\n9. Perayaan Hari Jadi Deutsch Club', '@deutschc.smkn1garut', '2022-10-31 08:05:08', '2022-11-07 00:33:54', 'Deutsch-Club34'),
(37, 'Karya Ilmiah Remaja (KIR)', 'kir.png', 'Cucu Nuryani M.Pd', 'Aditya Surya Pratama', 'Hilmi Siti Nur Hasanah', 'Rabu & Jumat', 'Mewujudkan dan mengembangkan sikap ilmiah guna meningkatkan kualitas IPTEK dalam diri setiap pengurus karya ilmiah remaja dan warga SMKN 1 Garut dengan tetap memegang teguh pada ajaran agama, aturan dan norma yang berlaku, serta membentuk karakter yang jujur, rasional, religius, kreatif dan inovatif.', 'a. Meningkatkan kualitas iman dan takwa.\r\nb. Meningkatkan kualitas IPTEK dengan memanfaatkan sarana dan prasarana yang tersedia.\r\nc. Meningkatkan kegiatan berbasis ilmiah.\r\nd. Meningkatkan rasa kebersamaan dan kekeluargaan.\r\ne. Menumbuhkan rasa pemberani dan jujur.\r\nf. Menanamkan jiwa kepemimpinan dalam diri setiap anggota KIR.', '-Kumpulan rutin\r\nProgram kerja yang sifatnya rutin atau harian yaitu berupa perkumpulan, pembelajaran, pendataan absen dan sebagai tanda dimulainya kegiatan ekstrakurikuler.\r\n\r\n-Literasi\r\nProgram kerja di mana semua anggota KIR melaksanakan kegiatan literasi bersama dalam jangka waktu yang ditentukan.\r\n\r\n-Unsur Intrinsik Cerpen\r\nProgram di mana semua anggota KIR menjelaskan unsur intrinsik cerpen yang telah dibuat sebelumnya.\r\n\r\n-Pemabagian Divisi KIR\r\nProgram yang bertujuan untuk membagi anggota KIR menjadi tiga bagian yaitu divisi yang mencakup divisi Eksperimen, divisi Bahasa, dan divisi Buletin.\r\n\r\n-Experiment\r\nProgram yang tugasnya yaitu mencoba berbagai eksperimen dan dikembangkan oleh anggota karya ilmiah remaja agar bisa melatih sikap keilmiahan dan menambah wawasan iptek.\r\n\r\n-Karya Tulis Ilmiah(KTI)\r\nProgram yang bertujuan untuk mempelajari bagaimana cara membuat karya tulis ilmiah. Pelaksanaan program ini yaitu pembina karya ilmiah remaja.\r\n\r\n-Artikel/Sosmed Information\r\nProgram kerja di mana anggota karya ilmiah remaja memberi tanggapan, komentar ataupun kritik terhadap artikel yang diberikan. Selain itu ada juga pembuatan poster digital.\r\n\r\n-Language Practice\r\nProgram kerja yang bertujuan untuk mempelajari berbagai bahasa asing yaitu: Inggris, Korea dan Jepang dengan cara mempelajari kata-kata dasar atau vocabulary.\r\n\r\n-Story Telling\r\nProgram kerja yang bertujuan sebagai tindak lanjut dari literasi, di mana anggota karya ilmiah remaja akan ditugaskan untuk membaca sebuah buku dalam waktu yang telah ditentukan, kemudian diceritakan kembali.\r\n\r\n-Puisi\r\nProgram kerja di mana anggota karya ilmiah remaja membuat karya puisi sehingga sesudah puisi tersebut dibuat, lalu dibacakan.\r\n\r\n-Mini Game Ilmiah\r\nProgram kerja mengenai sebuah permainan kecil yang berkaitan dengan sebuah karya ilmiah.\r\n\r\n-Merayakan Hari Jadi KIR\r\nProgram untuk merayakan hari jadi KIR yang dilakukan pada tanggal 6 Juli 2022.\r\n\r\n-Demo KIR\r\nKegiatan yang dilaksanakan ketika MPLS berlangsung.\r\n\r\n-Penebusan PIN\r\nProgram kerja yang di mana anggota kelas 11, akan dilantik kembali untuk mendapatkan amanat berupa PIN karya ilmiah remaja.\r\n\r\n-Pelantikan Anggota Kelas 10\r\nProgram Di mana para anggota baru kelas 10 dilantik dan disahkan keanggotaannya di ekstrakurikuler karya ilmiah remaja.\r\n\r\n-Evaluasi Novel And Cerpen Project\r\nProgram yang bertujuan untuk mengasah imajinasi, di mana anggota karya ilmiah remaja membuat sebuah novel atau cerpen yang ditentukan oleh semua pengurus. Program kerja novel atau cerpen Project dilaksanakan sebagai evaluasi akhir dari program kerja.', '@karyailmiahremaja__', '2022-10-31 08:01:29', '2022-10-31 08:01:29', 'Kir');

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
-- Table structure for table `kepseks`
--

CREATE TABLE `kepseks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kepsek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kepsek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembuka_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penutup_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepseks`
--

INSERT INTO `kepseks` (`id`, `nama_kepsek`, `foto_kepsek`, `pembuka_sambutan`, `isi_sambutan`, `penutup_sambutan`, `created_at`, `updated_at`) VALUES
(9, 'Bejo', 'pak bejo.png', '-', 'b', '-', '2022-09-20 01:01:13', '2022-09-20 01:15:12');

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
(5, '2022_08_14_004234_create_administrators_table', 1),
(6, '2022_08_15_145113_create_eskul_table', 1),
(7, '2022_09_06_020632_create_dokumentasi_table', 1),
(8, '2022_09_06_032246_create_berita_table', 1),
(9, '2022_09_20_061907_create_kepsek_table', 2),
(10, '2022_09_20_063637_create_wakasek_table', 3),
(11, '2022_09_20_070137_create_tentangweb_table', 4),
(12, '2022_09_22_111514_create_namaanggota_table', 5),
(13, '2022_10_05_051915_create_roles_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `namaanggotas`
--

CREATE TABLE `namaanggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tentangwebs`
--

CREATE TABLE `tentangwebs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembuka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logoitc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'root', 'sanbray', 'sanbray@gmail.com', NULL, '$2y$10$ltyp8Q53uivz2xa9dnc5duvtzRnZXJTD6JTxO7NxSxfxaW5fILp3i', 'download (1).png', NULL, '2022-11-07 00:15:18', '2022-11-07 00:15:18'),
(4, 'adminitc', 'naufal', 'itclub@gmail.com', NULL, '$2y$10$96AmSroaE9vgTpTDc.8jHOwsLD7LLh1Z0h0xGMD9HH/W9gMIch3/W', 'images.png', NULL, '2022-11-07 00:19:11', '2022-11-07 00:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `wakaseks`
--

CREATE TABLE `wakaseks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wakasek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_wakasek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembuka_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penutup_sambutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wakaseks`
--

INSERT INTO `wakaseks` (`id`, `nama_wakasek`, `foto_wakasek`, `pembuka_sambutan`, `isi_sambutan`, `penutup_sambutan`, `created_at`, `updated_at`) VALUES
(2, 'Nurdin', 'pak nurdin.png', '-', '-', '-', '2022-09-20 01:25:49', '2022-09-20 01:25:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasis`
--
ALTER TABLE `dokumentasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eskuls`
--
ALTER TABLE `eskuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kepseks`
--
ALTER TABLE `kepseks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namaanggotas`
--
ALTER TABLE `namaanggotas`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangwebs`
--
ALTER TABLE `tentangwebs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wakaseks`
--
ALTER TABLE `wakaseks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokumentasis`
--
ALTER TABLE `dokumentasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eskuls`
--
ALTER TABLE `eskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepseks`
--
ALTER TABLE `kepseks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `namaanggotas`
--
ALTER TABLE `namaanggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentangwebs`
--
ALTER TABLE `tentangwebs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wakaseks`
--
ALTER TABLE `wakaseks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
