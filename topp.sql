-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 06:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categg`
--

CREATE TABLE `categg` (
  `id_categg` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_132045_create_posts_table', 1),
(6, '2023_10_20_124722_modify_content_on_posts_table', 1),
(7, '2023_10_25_140644_modify_category_on_posts_table', 2),
(8, '2023_10_27_103058_rename_adventure_to_category_in_categories', 2),
(9, '2023_10_28_092743_create_categg_table', 3),
(10, '2023_10_28_234706_rename_id_column_in_categg_table', 3),
(11, '2023_10_28_235916_drop_categg_table', 3),
(12, '2023_10_29_000142_create_categg_table', 3),
(13, '2023_11_10_041317_create_penggunas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `category`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'RPi8KOV4VLxw8SoFqoFBi9Xaichk3NAYmj8adLSD.jpg', 'travel', 'Menyelusuri Keindahan Alam di Destinasi Wisata Tersembunyi', 'Pendahuluan:\r\nSelamat datang kembali, para pencinta petualangan! Kali ini, kita akan bersama-sama menjelajahi keindahan alam di destinasi wisata tersembunyi yang belum banyak terjamah. Jauh dari keramaian kota, tempat-tempat ini menawarkan ketenangan, kecantikan alam yang memukau, dan pengalaman unik yang akan membuat perjalanan Anda tak terlupakan.\r\n\r\nDestinasi 1: Bukit Seribu Bunga\r\n\r\nTersembunyi di pedalaman, Bukit Seribu Bunga menawarkan pemandangan yang menakjubkan. Dikelilingi oleh hamparan bunga-bunga warna-warni, bukit ini menciptakan suasana yang begitu damai dan romantis. Jangan lewatkan matahari terbit yang memukau di sini, di mana warna langit berpadu sempurna dengan keindahan bunga-bunga yang berkembang.\r\n\r\nDestinasi 2: Pantai Pasir Putih Tersembunyi di Pulau Sembilan\r\n\r\nPulau Sembilan, destinasi yang mungkin belum banyak terdengar namanya. Namun, di pulau ini terdapat pantai pasir putih yang belum terjamah banyak wisatawan. Airnya yang jernih dan ombak yang tenang menciptakan suasana yang sempurna untuk bersantai sambil menikmati keindahan laut.\r\n\r\nDestinasi 3: Hutan Bambu Ajaib di Lereng Gunung Hijau\r\n\r\nBersembunyi di lereng gunung yang hijau, hutan bambu ini memberikan pengalaman seperti masuk ke dalam dunia dongeng. Suara gemercik air dari sungai kecil yang melintasi hutan, dedaunan yang rindang, dan aroma segar dari tanah membuat perjalanan ini sangat memikat bagi pecinta alam.\r\n\r\nTips Perjalanan:\r\n\r\nPersiapkan Diri dengan Baik: Pastikan untuk membawa perlengkapan yang cukup, seperti air minum, sepatu nyaman, dan perlengkapan pendukung lainnya.\r\nHindari Jejak Massa: Destinasi tersembunyi seringkali menjadi tempat yang tenang dan alami karena belum banyak dikunjungi. Oleh karena itu, jagalah kebersihan dan keheningan tempat tersebut.\r\nPenutup:\r\nPerjalanan ini membawa kita menjauh dari hiruk-pikuk kehidupan sehari-hari dan memberikan kesempatan untuk merenung dan bersatu dengan alam. Mari jadikan perjalanan ini sebagai peluang untuk menemukan keindahan baru dan meresapi ketenangan yang hanya dapat ditemukan di destinasi tersembunyi. Selamat menjelajahi dunia dan menemukan keindahan yang baru!\r\n\r\nSemoga blog ini memberikan inspirasi untuk perjalanan Anda. Jangan lupa menyesuaikan informasi sesuai dengan destinasi yang ingin Anda bahas.', '2023-11-16 19:06:24', '2023-11-16 19:06:24'),
(5, 'H18npU8BN8KfHdmetN4GfnOp3O0iTbpzNy9poWOD.jpg', 'holiday', 'Petualangan Tak Terlupakan di Negeri Sakura: Menyusuri Keindahan Jepang.', 'Pada suatu pagi yang cerah, kami memulai petualangan kami ke negeri yang penuh keajaiban: Jepang. Tujuan pertama kami adalah kota Kyoto, yang terkenal dengan keindahan budayanya yang kaya. Setibanya di sana, kami langsung terpesona oleh pesona tradisional Kyoto.\r\n\r\nMemburu Sakura di Taman Maruyama\r\nMengunjungi Jepang pada musim semi adalah impian yang terwujud. Taman Maruyama di Kyoto menawarkan keindahan yang luar biasa dengan bunga sakura yang mekar. Di bawah pepohonan yang penuh bunga, kami merasa seolah-olah berada di dalam lukisan yang hidup.\r\n\r\nEksplorasi Kuil Kiyomizu-dera\r\nKeesokan harinya, kami berkunjung ke Kuil Kiyomizu-dera yang megah. Kuil ini menawarkan pemandangan indah kota Kyoto dari atas bukit. Kami melangkah perlahan di atas jembatan kayu yang terkenal, merasakan sejarah dan keagungan kuil ini.\r\n\r\nPetualangan Kuliner di Distrik Gion\r\nDistrik Gion terkenal sebagai tempat berkumpulnya geisha. Kami menyusuri jalan-jalan berbatu yang dipenuhi dengan rumah tradisional, mencari restoran kecil yang menyajikan hidangan khas Jepang. Mencicipi ramen lezat dan sashimi segar di tengah lingkungan yang tradisional menjadi salah satu momen paling berkesan.\r\n\r\nNaik Shinkansen ke Tokyo\r\nDari Kyoto, kami melanjutkan perjalanan dengan Shinkansen ke Tokyo. Sensasi melaju dengan kecepatan tinggi dan pemandangan pegunungan yang hijau melewati jendela membuat perjalanan kami semakin menarik.\r\n\r\nMenjelajahi Distrik Akihabara\r\nTokyo, kota futuristik, menyambut kami dengan gemerlapnya lampu neon di distrik Akihabara. Menyusuri jalan-jalan yang penuh dengan toko manga, pusat perbelanjaan elektronik, dan kafe-kafe unik, kami merasa seolah-olah berada di dunia masa depan.\r\n\r\nPetualangan di Taman Ueno\r\nTaman Ueno adalah tempat yang sempurna untuk beristirahat dan merenung. Di sana, kami melihat bunga sakura lagi, kali ini ditemani oleh kicauan burung dan kehijauan taman yang menenangkan.\r\n\r\nTips Hemat Perjalanan di Jepang\r\nGunakan JR Pass: JR Pass memungkinkan akses tak terbatas ke jaringan kereta Jepang. Ini adalah pilihan hemat untuk bepergian antar kota.\r\n\r\nMenginap di Ryokan: Percayai saya, menginap di ryokan tradisional adalah pengalaman yang tak terlupakan. Ini tidak hanya memberikan kenyamanan, tetapi juga memperkenalkan Anda pada budaya Jepang yang autentik.\r\n\r\nJelajahi Kota dengan Sepeda: Beberapa kota di Jepang ramah sepeda, dan menyewa sepeda adalah cara yang menyenangkan dan efisien untuk menjelajahi tempat-tempat tertentu.\r\n\r\nPetualangan kami di Jepang berakhir dengan kenangan indah dan hati yang penuh rasa syukur. Negeri Sakura memberikan lebih dari yang kami bayangkan, dan kami meninggalkannya dengan harapan untuk kembali suatu hari nanti. Sampai jumpa, Jepang!', '2023-11-17 23:41:41', '2023-11-23 19:31:27'),
(7, 'y0KVVBgnQFaLopCGV6P11IOP0hdMSBlJvTAZKCXs.jpg', 'Pengalaman Pribadi', 'Solo Tapi Bahagia: Mengeksplor Perjalanan Solo dan Keuntungannya', 'Melibatkan diri dalam perjalanan solo bisa menjadi pengalaman yang membebaskan dan penuh makna. Jangan biarkan kekhawatiran akan kesepian atau keamanan menghentikan Anda dari menjelajahi dunia sendirian. Inilah mengapa perjalanan solo memiliki banyak keuntungan yang dapat membentuk Anda menjadi individu yang lebih kuat dan penuh percaya diri.\r\n\r\n1. Kebebasan Total\r\nMengembara sendirian memberi Anda kebebasan mutlak untuk mengatur rencana perjalanan sesuai keinginan Anda. Tidak ada perlu berkompromi atau bernegosiasi dengan orang lain. Pilih destinasi, aktivitas, dan waktu sesuai dengan keinginan pribadi Anda.\r\n\r\n2. Pembelajaran Diri\r\nPerjalanan solo adalah peluang untuk lebih memahami diri sendiri. Ketika Anda tidak memiliki teman atau keluarga di sekitar, Anda menjadi lebih terbuka terhadap diri sendiri dan dapat merenung tentang tujuan hidup, impian, dan keinginan yang mungkin terpendam.\r\n\r\n3. Fleksibilitas Tanpa Batas\r\nTanpa harus mempertimbangkan preferensi orang lain, Anda dapat merencanakan dan mengubah rencana Anda sesuka hati. Jika Anda terpikat oleh tempat baru atau bertemu orang menarik di perjalanan, Anda dapat dengan mudah mengubah arah dan meresapi setiap momen tanpa keterbatasan.\r\n\r\n4. Meningkatkan Keterampilan Sosial\r\nMengatasi rasa malu dan memulai percakapan dengan orang baru adalah keterampilan yang sangat penting. Perjalanan solo memaksa Anda untuk melibatkan diri dengan orang-orang baru, membuka pintu untuk pertemanan yang tak terduga dan mengasah keterampilan sosial Anda.\r\n\r\n5. Keberanian dan Percaya Diri\r\nMenaklukkan ketakutan dan tantangan sendirian dapat membentuk karakter Anda. Anda akan menemukan keberanian dan percaya diri yang mungkin tidak Anda sadari sebelumnya. Ini dapat berdampak positif pada aspek-aspek lain dalam kehidupan sehari-hari.\r\n\r\n6. Memperluas Jaringan Sosial\r\nMeskipun Anda bepergian solo, itu tidak berarti Anda akan kesepian. Perjalanan memungkinkan Anda bertemu dengan orang-orang dari berbagai budaya dan latar belakang. Jaringan sosial yang luas ini dapat membuka pintu untuk peluang baru dan persahabatan yang berharga.\r\n\r\n7. Refleksi dan Penerimaan Budaya\r\nMengalami budaya baru tanpa pengaruh orang lain dapat memberikan pemahaman yang lebih mendalam. Anda dapat merasakan kehidupan sehari-hari, adat istiadat, dan tradisi dengan lebih intens, memperkaya pengetahuan dan pemahaman Anda tentang dunia.\r\n\r\nKesimpulan\r\nPerjalanan solo bukanlah hanya tentang menjelajahi dunia fisik, tetapi juga perjalanan menuju pemahaman diri dan pertumbuhan pribadi. Terapkan keberanian, buka hati dan pikiran, dan biarkan perjalanan solo membawa Anda pada petualangan tak terduga yang akan membentuk kehidupan Anda dengan cara yang indah. Jadi, solo bukan berarti kesepian; itu adalah langkah berani menuju kebahagiaan pribadi dan pengembangan diri.', '2023-11-24 04:12:36', '2023-11-24 04:12:36'),
(8, 'skcwFK14efLa9LORCu5d0Yql2WnCSlKD44I7EVES.jpg', 'Interaksi Budaya', 'Jalinan Budaya: Mengenal Masyarakat Lokal di Desa Serengeti', 'Jalinan Budaya: Mengenal Masyarakat Lokal di Desa Serengeti\r\n\r\nPerjalanan bukan hanya tentang mengunjungi tempat-tempat indah, tetapi juga meresapi kehidupan sehari-hari dan keanekaragaman budaya masyarakat setempat. Dalam artikel ini, kita akan menjelajahi Desa Serengeti, menggali jalinan budaya yang unik dan berharga.\r\n\r\nPendahuluan ke Desa Serengeti\r\nDesa Serengeti, yang terletak di [Lokasi Geografis], adalah sebuah permata budaya yang mencerminkan keindahan Afrika dalam setiap aspeknya. Desa ini memiliki sejarah panjang, tradisi kaya, dan masyarakat yang ramah dan penuh kehangatan.\r\n\r\n1. Tradisi Lokal yang Melekat\r\nBudaya Desa Serengeti dikenal dengan tradisi khasnya yang telah diwariskan dari generasi ke generasi. Dari upacara adat hingga festival tahunan, kita akan mengetahui bagaimana tradisi ini masih memainkan peran penting dalam kehidupan masyarakat lokal.\r\n\r\n2. Menjelajahi Kerajinan Tangan Tradisional\r\nBertemu langsung dengan para pengrajin lokal dan memahami proses pembuatan kerajinan tangan tradisional dapat memberikan wawasan mendalam tentang keahlian dan warisan budaya yang dilestarikan. Mulai dari tenun, ukiran kayu, hingga seni anyaman, setiap kerajinan mencerminkan keindahan budaya setempat.\r\n\r\n3. Kuliner Lokal yang Membedakan\r\nSetiap daerah memiliki kelezatan kuliner khasnya sendiri. Mari menjelajahi pasar lokal, mencicipi hidangan khas, dan berbicara dengan penjual dan koki lokal untuk memahami cerita di balik setiap hidangan. Ini adalah cara terbaik untuk meresapi cita rasa sejati Desa Serengeti.\r\n\r\n4. Rumah Desa dan Arsitektur Unik\r\nMenjelajahi arsitektur rumah tradisional dan struktur bangunan lainnya memberikan wawasan tentang cara hidup dan kebutuhan masyarakat lokal. Ini adalah peluang untuk belajar tentang bagaimana lingkungan mereka mencerminkan nilai-nilai budaya dan hubungan erat dengan alam.\r\n\r\n5. Interaksi dengan Penduduk Lokal\r\nPenting untuk tidak hanya menjadi pengamat, tetapi juga peserta dalam jalinan budaya. Mungkin kita bisa bergabung dalam kegiatan sehari-hari seperti bekerja di kebun, berpartisipasi dalam upacara adat, atau berbicara dengan anak-anak sekolah setempat. Melibatkan diri kita secara langsung adalah kunci untuk mendapatkan pemahaman yang lebih dalam.\r\n\r\n6. Pemberdayaan Komunitas melalui Wisata\r\nBagaimana pariwisata dapat memberdayakan komunitas lokal di Desa Serengeti? Apakah ada inisiatif atau proyek yang diluncurkan untuk melibatkan penduduk lokal secara aktif dalam industri pariwisata? Ini adalah pertanyaan yang perlu dijawab untuk memahami dampak positif yang dapat dihasilkan oleh kunjungan wisata.\r\n\r\nPenutup: Merayakan Keberagaman Budaya di Desa Serengeti\r\nMelalui perjalanan ini ke Desa Serengeti, kita tidak hanya mendapatkan pengalaman memukau tetapi juga menghargai keberagaman budaya yang membuat dunia ini begitu istimewa. Mari bersama-sama merayakan dan melindungi warisan budaya ini agar dapat dinikmati oleh generasi mendatang.\r\n\r\nJelajahi, belajar, dan bangun jalinan budaya yang membawa kedamaian dan pengertian di dunia ini.', '2023-11-24 04:15:48', '2023-11-24 04:15:48'),
(9, 'OHqYUfiE8Or06E3vGQsbEVnm4Q26m1Rf8gzYcK0T.jpg', 'Petualangan Ekstrem', 'Adrenalin Tinggi: Menaklukkan Arung Jeram di Sungai Colorado', 'Langit-langit biru, air yang deras, dan jeritan arus sungai mengundang petualangan yang mendebarkan. Dalam artikel ini, kita akan mengeksplorasi pengalaman adrenalin tinggi dengan menaklukkan salah satu aktivitas ekstrem paling memacu, yaitu arung jeram di Sungai Colorado.\r\n\r\n1. Persiapan Sebelum Menyusuri Arus\r\nSebelum memasuki arus yang menantang, kita akan membahas tahap persiapan. Mulai dari pemilihan peralatan hingga instruksi keamanan, persiapan ini memastikan bahwa setiap peserta siap untuk menghadapi tantangan air yang menanti.\r\n\r\n2. Menghadapi Arus yang Menantang di Sungai Colorado\r\nSungai Colorado dikenal dengan jeram-jeramnya yang menantang, dan kita akan melibatkan diri dalam pengalaman ini. Menciptakan jalinan antara petualangan dan alam liar, kita akan merasakan gejolak air yang mendebarkan dan melibas arus yang menantang.\r\n\r\n3. Adrenalin Tinggi di Puncak Jeram\r\nKetika perahu melibas jeram-jeram tinggi, rasakan hembusan angin dan semprotan air yang menciptakan suasana adrenalin tinggi. Pengalaman ini tidak hanya tentang mengatasi rintangan air, tetapi juga mengeksplorasi kekuatan alam dan melebur dengan elemen-elemen alam.\r\n\r\n4. Tim Kerja yang Solid di Tengah Tantangan\r\nArung jeram memerlukan kerja tim yang solid. Kita akan mendiskusikan bagaimana komunikasi dan koordinasi di antara peserta menjadi kunci untuk mengatasi jeram-jeram yang menantang. Solidaritas tim tidak hanya diperlukan, tetapi juga ditingkatkan melalui pengalaman ini.\r\n\r\n5. Pemandangan Alam yang Memukau di Sekitar\r\nSelain kegembiraan arung jeram, kita akan menyoroti keindahan alam sekitar. Sungai Colorado melewati lanskap alam liar yang memukau, dari tebing-tebing tinggi hingga hutan-hutan hijau. Momen-momen ini menambahkan dimensi baru pada pengalaman arung jeram yang tak terlupakan.\r\n\r\n6. Keseruan Pasca-Arus di Sungai Colorado\r\nSetelah mengatasi arus yang menantang, kita akan menjelajahi keseruan pasca-arus. Ini termasuk merayakan kesuksesan bersama, merencanakan petualangan berikutnya, dan mendiskusikan cerita-cerita pribadi selama mengarungi jeram.\r\n\r\nPenutup: Jejak Petualangan di Air Sungai Colorado\r\nArung jeram di Sungai Colorado bukan hanya tentang menaklukkan arus air, tetapi juga tentang meninggalkan jejak petualangan yang tak terlupakan di alam liar. Adrenalin tinggi, kerja tim yang solid, dan keindahan alam yang menakjubkan adalah elemen-elemen yang membuat pengalaman arung jeram di Sungai Colorado begitu mengesankan.\r\n\r\nDengan tekad, persiapan yang matang, dan semangat petualangan, arung jeram di Sungai Colorado mengajak kita untuk menjelajahi keberanian dan keindahan alam secara bersamaan.', '2023-11-24 04:32:19', '2023-11-24 04:32:19'),
(10, 'EaNC2sD3EvL9yBty0jf5ohqlY8wklU5dWHZDdNUB.jpg', 'destinasi pantai', 'Cinta di Pasir Putih: Petualangan Romantis di Pulau Bora-Bora', 'Pasir putih yang halus, air laut berwarna biru turkis, dan bungalow melengkung di atas air. Dalam artikel ini, kita akan memasuki dunia keindahan yang memikat hati dengan petualangan romantis di Pulau Bora-Bora.\r\n\r\n1. Pemandangan Romantis dari Bungalow di Atas Air\r\nPulau Bora-Bora terkenal dengan bungalow mewahnya yang mengapung di atas air. Kita akan menjelajahi pengalaman menginap di salah satu bungalow ini, menyaksikan matahari terbenam yang memukau dan melihat langit bintang yang mempesona dari tempat tidur yang nyaman.\r\n\r\n2. Snorkeling di Lagun Biru Jernih\r\nMelibas air biru jernih Pulau Bora-Bora adalah pengalaman snorkeling yang tak terlupakan. Dengan terumbu karang yang indah dan kehidupan laut yang beragam, kita akan berdua mengeksplorasi keindahan bawah laut, merasakan ketenangan dan keajaiban yang hanya bisa ditemukan di sini.\r\n\r\n3. Makan Malam Romantis di Pantai Pribadi\r\nPulau Bora-Bora menawarkan pantai-pantai pribadi yang menyajikan pemandangan matahari terbenam yang memukau. Kita akan merencanakan makan malam romantis di tepi pantai dengan lampu-lampu kecil yang menyala, membangun kenangan manis yang akan terukir selamanya.\r\n\r\n4. Petualangan Bersama di Gunung Otemanu\r\nGunung Otemanu yang megah adalah ikon Pulau Bora-Bora. Meskipun bukan tanjakan yang mudah, mendaki gunung ini bersama-sama dapat menjadi petualangan romantis yang menghadirkan pemandangan spektakuler dan momen berdua yang mendalam.\r\n\r\n5. Pelayaran Bersama di Lagun\r\nMengarungi lagun Bora-Bora dengan kapal tradisional adalah pengalaman romantis yang tak terlupakan. Kita akan merencanakan pelayaran bersama di bawah langit berbintang, menikmati ketenangan dan keindahan alam yang hanya bisa ditemukan di perairan pulau ini.\r\n\r\n6. Spa Santai di Tengah Lagun\r\nPulau Bora-Bora terkenal dengan spa-spa mewahnya yang terletak di tengah lagun. Kita akan merencanakan sesi spa bersama di tepi air, menghilangkan lelah dari perjalanan, dan bersama-sama menikmati relaksasi di surga tropis ini.\r\n\r\nPenutup: Menciptakan Kenangan Abadi di Pulau Bora-Bora\r\nPetualangan romantis di Pulau Bora-Bora adalah tentang menciptakan kenangan abadi bersama pasangan. Dengan pemandangan alam yang menakjubkan, aktivitas yang penuh petualangan, dan momen kebersamaan yang ajaib, pulau ini menawarkan pengalaman romantis yang tak tertandingi.\r\n\r\nDengan cinta yang berkembang di pasir putih dan sinar matahari tropis, Pulau Bora-Bora adalah destinasi yang sempurna untuk petualangan romantis yang tak terlupakan.', '2023-11-24 04:40:01', '2023-11-24 04:40:01'),
(11, 'sowEUVfIv2WZEpoOiIo3fjTK1prQGDqkHOB3PCto.jpg', 'sejarah budaya', 'Jejak Sejarah di Solo: Menelusuri Warisan yang Dilupakan', 'Solo, sebuah kota dengan pesona sejarah yang kaya, menyimpan jejak masa lalu yang sering kali terlupakan. Dalam artikel ini, kita akan memandu langkah kita melalui lorong-lorong bersejarah Solo, menemukan warisan yang masih hidup di antara dinding-dinding dan jalan-jalan kuno.\r\n\r\n1. Mengawali Perjalanan di Keraton Solo\r\nLangkah pertama kita membawa kita ke Keraton Kasunanan Solo, sebuah istana kerajaan yang memancarkan keanggunan dan keagungan. Kita akan menjelajahi ruang-ruang bersejarah, mengikuti jejak keluarga kerajaan, dan mendalami kehidupan sehari-hari di istana yang merupakan pusat kebudayaan dan sejarah Jawa.\r\n\r\n2. Menelusuri Pasar Gede: Surga Kuliner dan Budaya\r\nPasar Gede, pasar tradisional yang berusia puluhan tahun, bukan hanya tempat berbelanja tetapi juga salah satu saksi bisu perkembangan ekonomi dan sosial di Solo. Kita akan berjalan melalui lorong-lorongnya, mencium aroma rempah-rempah, dan menyaksikan keramaian yang menyiratkan sejarah perdagangan kuno.\r\n\r\n3. Istana Mangkunegaran: Keindahan Arsitektur Jawa Klasik\r\nIstana Mangkunegaran, bangunan bersejarah yang indah, menyimpan cerita tentang kehidupan para bangsawan dan seni tradisional Jawa. Kita akan melibatkan diri dalam keindahan arsitektur klasik, mengagumi seni rupa tradisional, dan memahami warisan budaya yang dijaga dengan cermat.\r\n\r\n4. Laweyan: Kampoeng Batik yang Melestarikan Tradisi\r\nBerjalan-jalan di Laweyan, kampoeng batik yang penuh warna, akan membawa kita pada petualangan menelusuri warisan seni dan kerajinan. Kita akan bertemu dengan para pengrajin batik, memahami teknik tradisional, dan mungkin mencoba membuat batik sendiri sebagai bagian dari ikatan dengan warisan yang hidup di sini.\r\n\r\n5. Benteng Vastenburg: Peninggalan Sejarah Militer\r\nBenteng Vastenburg, peninggalan sejarah militer, menyimpan kisah perjuangan masa lalu. Kita akan menelusuri dinding-dinding benteng, mendengarkan kisah pahlawan yang terukir di sana, dan merenungi makna keberanian yang melingkupi tempat ini.\r\n\r\n6. Makam Raja-Raja di Imogiri: Puncak Kehormatan\r\nImogiri, makam raja-raja Mataram, adalah tempat sakral yang menampilkan seni arsitektur yang megah. Kita akan mengunjungi makam-makam yang memancarkan kehormatan dan mendengarkan cerita tentang kehidupan dan kepemimpinan para raja yang diabadikan di sini.\r\n\r\nPenutup: Menyimpan Jejak Sejarah Hidup di Solo\r\nJejak sejarah yang tersembunyi di Solo tidak hanya tentang bangunan dan artefak, tetapi juga tentang jiwa kota itu sendiri. Dalam setiap sudut, di setiap jalan, dan di antara setiap seni yang dipersembahkan, kita menemukan jejak-jejak masa lalu yang hidup dan terus diperjuangkan untuk tetap relevan di era modern.\r\n\r\nDengan menelusuri jejak sejarah di Solo, kita tidak hanya menyaksikan warisan yang terlupakan, tetapi juga merayakan kehidupan yang terus berdetak di antara tembok-tembok kuno kota ini.', '2023-11-24 04:42:53', '2023-11-24 04:42:53'),
(12, 'bTAAMyM0ZLk5zqNh9n6JXf1kabfFbEziQ5OjS9Pl.jpg', 'Tips Perjalanan', 'Destinasi Liburan Hemat: Tips Berwisata Murah di Bali', 'Bali, destinasi surga tropis yang indah, tidak perlu merusak rekening bank Anda. Dalam artikel ini, kita akan mengungkapkan sejumlah tips berwisata hemat di Bali, memungkinkan Anda menikmati keindahan pulau ini tanpa harus menguras dompet.\r\n\r\n1. Akomodasi Lokal yang Ramah Anggaran\r\nBali menyediakan berbagai opsi akomodasi, mulai dari homestay hingga vila murah. Pilihlah tempat menginap yang ramah anggaran, seperti homestay di desa-desa tradisional atau hostel di kawasan backpacker.\r\n\r\n2. Jelajahi Pantai-pantai Tanpa Biaya Mahal\r\nBali terkenal dengan pantainya yang memukau, dan kebanyakan pantai dapat dinikmati tanpa biaya masuk yang mahal. Nikmati sunset di Pantai Kuta atau berenang di Pantai Sanur tanpa harus mengeluarkan banyak uang.\r\n\r\n3. Wisata Kuliner di Warung Lokal\r\nJangan lewatkan kesempatan untuk menikmati kuliner lokal di warung-warung kecil. Makan di warung tidak hanya menghemat uang, tetapi juga memberikan Anda kesempatan untuk mencicipi autentisitas masakan Bali.\r\n\r\n4. Gunakan Transportasi Umum atau Sewa Motor\r\nMenggunakan transportasi umum atau menyewa motor adalah cara yang hemat untuk menjelajahi Bali. Hindari biaya taksi yang mahal dengan menggunakan layanan bus umum atau menyewa motor untuk lebih fleksibel menjelajahi tempat-tempat terpencil.\r\n\r\n5. Ikut Tur Wisata yang Terjangkau\r\nBali menawarkan berbagai tur wisata yang terjangkau. Pilih tur keliling pulau, snorkeling, atau trekking gunung dengan harga yang bersahabat. Selain hemat, Anda juga bisa mendapatkan panduan lokal yang memberikan wawasan unik.\r\n\r\n6. Berkunjung ke Tempat Wisata Gratis atau Murah\r\nBali memiliki tempat-tempat wisata yang bisa dikunjungi dengan biaya yang terjangkau atau bahkan gratis. Misalnya, Taman Ujung, Pantai Melasti, atau air terjun tersembunyi seperti Tukad Cepung.\r\n\r\n7. Belanja di Pasar Tradisional\r\nJangan lewatkan kesempatan untuk berbelanja di pasar tradisional. Anda dapat menemukan berbagai barang unik, dari pakaian hingga kerajinan tangan, dengan harga yang bisa dinegosiasikan.\r\n\r\n8. Aktivitas Gratis seperti Yoga atau Festival Lokal\r\nBali terkenal sebagai pusat yoga dunia. Banyak tempat menawarkan kelas yoga gratis atau dengan biaya yang terjangkau. Selain itu, cari tahu tentang festival lokal yang mungkin sedang berlangsung, memberi Anda kesempatan untuk merasakan kehidupan budaya Bali tanpa biaya mahal.\r\n\r\n9. Gunakan Aplikasi Diskon dan Promo\r\nManfaatkan aplikasi diskon dan promo untuk mendapatkan penawaran khusus di restoran, akomodasi, atau aktivitas wisata. Beberapa aplikasi menawarkan potongan harga atau cashback yang dapat membantu Anda menghemat lebih banyak uang.\r\n\r\n10. Pilih Waktu Liburan yang Tepat\r\nBeberapa periode, seperti musim sepi turis, dapat menjadi waktu yang ideal untuk berlibur di Bali. Harga akomodasi dan tiket pesawat biasanya lebih terjangkau selama periode ini.\r\n\r\nDengan mengikuti tips-tips berwisata hemat di Bali, Anda dapat menikmati pesona pulau ini tanpa mengorbankan anggaran liburan Anda.', '2023-11-24 04:47:00', '2023-11-24 04:47:00'),
(13, 'QNMnzxTd1sKFvOtIkYDoctjzZ5lSFnpZBDyQikpV.jpg', 'Wisata Kuliner', 'Rasakan Kuliner Yogyakarta: Menggoda Lidah di Setiap Sudut', 'Dalam artikel ini, kita akan menjelajahi kelezatan kuliner Yogyakarta, sebuah kota yang memanjakan lidah dengan hidangan-hidangan lezat di setiap jengkalnya. Bersiaplah untuk petualangan kuliner yang memikat dan menggoda selera di setiap sudut kota ini.\r\n\r\n1. Pasar Kuliner yang Hidup 24 Jam\r\nBermulai dari pasar kuliner yang hidup 24 jam, di Yogyakarta kita akan merasakan kehidupan malam yang penuh warna dan bau-bauan yang menggugah selera. Dari makanan jalanan hingga hidangan khas setempat, pasar ini adalah surga bagi pencinta kuliner.\r\n\r\n2. Jalan-Jalan Kuliner di Distrik Makanan\r\nDistrik makanan di Yogyakarta menyajikan berbagai pilihan kuliner dari berbagai masakan. Mulai dari hidangan tradisional hingga kreasi kuliner modern, jalan-jalan kuliner ini adalah tempat untuk mengeksplorasi keberagaman rasa di setiap warung dan restoran.\r\n\r\n3. Restoran Mewah dengan Sentuhan Lokal\r\nMeskipun Yogyakarta dikenal dengan hidangan yang lezat di pinggir jalan, kota ini juga memiliki restoran mewah yang menyajikan hidangan dengan sentuhan lokal. Kita akan menjelajahi beberapa tempat mewah ini yang menghadirkan pengalaman bersantap yang tak terlupakan.\r\n\r\n4. Warung Kopi Bersejarah\r\nKota ini juga dikenal dengan warung kopi bersejarahnya. Kita akan merasakan atmosfir yang unik sambil menikmati secangkir kopi yang lezat. Warung kopi ini bukan hanya tempat untuk menikmati kafein tetapi juga untuk memahami warisan kopi di Yogyakarta.\r\n\r\n5. Festival Kuliner Tahunan\r\nJangan lewatkan festival kuliner tahunan di Yogyakarta, di mana koki terkenal dan pengrajin makanan berkumpul untuk merayakan kekayaan kuliner kota ini. Festival ini adalah kesempatan sempurna untuk mencicipi berbagai hidangan dalam satu tempat.\r\n\r\n6. Kuliner Jalanan di Taman Kota\r\nTaman kota di Yogyakarta bukan hanya tempat untuk bersantai, tetapi juga surganya kuliner jalanan. Kita akan mencicipi berbagai hidangan yang dijual di kios-kios sepanjang taman, menciptakan pengalaman makan yang menyenangkan di alam terbuka.\r\n\r\n7. Hidangan Tradisional yang Melegenda\r\nRasakan hidangan tradisional yang telah menjadi legenda di Yogyakarta. Dari sate kambing yang lezat hingga nasi goreng yang menggugah selera, kita akan mengikuti jejak kuliner khas yang terus diwariskan dari generasi ke generasi.\r\n\r\n8. Food Truck Kreatif dan Modern\r\nTidak hanya hidangan tradisional, Yogyakarta juga dikenal dengan food truck kreatif dan modern yang menawarkan kreasi kuliner yang unik. Kita akan menjelajahi kawasan-kawasan di mana food truck berkumpul, memberikan nuansa urban pada petualangan kuliner kita.\r\n\r\n9. Kelas Masak Interaktif untuk Pengalaman Pribadi\r\nJika Anda ingin lebih mendalami rahasia kuliner Yogyakarta, ikutilah kelas masak interaktif yang ditawarkan oleh beberapa restoran terkemuka. Dalam kelas ini, kita dapat belajar membuat hidangan lokal dan membawa pulang keterampilan kuliner baru.\r\n\r\n10. Kuliner Malam yang Menggoda di Pusat Kota\r\nPusat kota Yogyakarta menyala malam dengan kegiatan kuliner yang menggoda. Dari street food hingga restoran yang buka hingga tengah malam, kita akan menutup petualangan kuliner kita dengan menyelami atmosfir malam yang meriah.\r\n\r\nDengan mencicipi kuliner kaya rasa di setiap sudut, Yogyakarta menjadi destinasi kuliner yang tak terlupakan bagi para penikmat makanan.', '2023-11-24 04:51:49', '2023-11-24 04:51:49'),
(14, 'zoICvgUrn58PA6D2LVhjZrFlB1UcxgAykvXwZVM6.jpg', 'Pendakian Gunung', 'Melampaui Puncak: Eksplorasi di Gunung Semeru', 'Dalam artikel ini, kita akan merayakan petualangan mendebarkan di Gunung Semeru, gunung tertinggi di Pulau Jawa, yang menawarkan pengalaman mendaki yang tak terlupakan hingga puncak tertinggi di Jawa. Bersiaplah untuk merasakan keajaiban alam dan ketangguhan diri sendiri di setiap langkah mendaki.\r\n\r\n1. Memulai Perjalanan di Pos Paltuding\r\nPetualangan di Gunung Semeru dimulai di Pos Paltuding, pintu gerbang resmi menuju puncak. Kita akan merasakan semangat perjalanan ketika melewati pintu masuk ini dan bersiap untuk menghadapi tantangan mendaki yang menantang.\r\n\r\n2. Mendaki Lereng Berbatu Tengger Caldera\r\nDalam tahap awal perjalanan, kita akan mendaki lereng berbatu Tengger Caldera yang menawan. Pemandangan keindahan alam dengan lautan pasir dan gunung-gunung sekitarnya akan mengiringi kita di setiap langkah mendaki.\r\n\r\n3. Mencapai Ranu Kumbolo: Oase di Tengah Perjalanan\r\nRanu Kumbolo, danau indah di ketinggian, menjadi tempat istirahat yang menyegarkan di tengah perjalanan menuju puncak. Kita akan menikmati pemandangan danau yang tenang sambil bersiap-siap untuk menghadapi tantangan mendaki lebih tinggi.\r\n\r\n4. Menaklukkan Bukit Cinta: Ujian Ketahanan Fisik dan Mental\r\nBukit Cinta, di ketinggian sekitar 3.100 mdpl, menjadi ujian pertama ketahanan fisik dan mental. Mendaki melalui jalur curam dan bebatuan, kita akan merasakan kepuasan ketika mencapai puncak bukit dan menyaksikan panorama Tengger Caldera yang megah.\r\n\r\n5. Berkemah di Kalimati: Persiapan Menuju Mahameru\r\nKalimati, dataran tinggi yang dingin, akan menjadi tempat berkemah sebelum menuju Mahameru. Malam di Kalimati akan diisi dengan cerita-cerita petualangan, dan kita akan bersiap untuk melanjutkan perjalanan mendaki ke puncak tertinggi.\r\n\r\n6. Puncak Mahameru: Menyentuh Langit di Jawa\r\nMencapai puncak Mahameru, setinggi 3.676 mdpl, adalah momen puncak dari petualangan ini. Kita akan merasakan kebahagiaan dan kebanggaan saat menyentuh batu puncak dan melihat panorama gunung dan lautan awan yang membentang di kejauhan.\r\n\r\n7. Menikmati Panorama Sunrise di Puncak\r\nBangun pagi di puncak Mahameru adalah pengalaman yang tak terlupakan. Menikmati panorama matahari terbit di atas awan, kita akan disuguhi cahaya yang memperlihatkan keindahan alam Pulau Jawa yang memukau.\r\n\r\n8. Turun ke Kawah Wurung: Petualangan Menuruni Lereng Vulkanik\r\nPetualangan belum berakhir setelah mencapai puncak. Kita akan menuruni lereng vulkanik yang menantang menuju Kawah Wurung, mendaki bebatuan besar dan merasakan kegembiraan melibas setiap rintangan.\r\n\r\n9. Berkunjung ke Candi Bromo: Penutup Perjalanan yang Penuh Makna\r\nPerjalanan di Gunung Semeru akan ditutup dengan kunjungan ke Candi Bromo. Kita akan menyaksikan keindahan lanskap alam dan merenungkan betapa kecilnya kita di hadapan keagungan alam semesta.\r\n\r\n10. Kenangan Abadi dari Puncak Mahameru\r\nPetualangan di Gunung Semeru akan meninggalkan kenangan abadi. Dengan keindahan alam, ketangguhan diri, dan semangat petualangan, kita akan membawa pulang pengalaman mendalam yang melampaui puncak dan menyentuh langit di Jawa.\r\n\r\nDengan mendaki Gunung Semeru, kita tidak hanya merasakan keindahan alam yang luar biasa tetapi juga menemukan kekuatan dan ketangguhan di dalam diri sendiri, menghadapi tantangan dan meraih puncak tertinggi.', '2023-11-24 04:55:53', '2023-11-24 04:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(172, 'arkan arya', 'alvintop@gmail.com', NULL, '$2y$10$SOtJWJ57XwgtV6iK7NX1F.r3fqmerhw5wD.zDTZ.vVprjGzZnlboC', NULL, '2023-11-16 23:23:57', '2023-11-16 23:23:57'),
(173, 'arkan', 'arkan@gmail.com', NULL, '$2y$10$X218kukOis03192UETohhu/4OfbiPAcm9fTrZsMPXg6qRVBcHrhHm', NULL, '2023-11-16 23:24:27', '2023-11-16 23:24:27'),
(174, 'Alvin top', 'alvin@gmail.com', NULL, '123456789', NULL, '2023-11-18 21:01:27', '2023-11-18 21:01:27'),
(175, 'alvin top ahmad djelani', 'topp@gmail.com', NULL, '$2y$10$hjRvKlH.XGiTuYKjGVdgFOsqWSQAJg5EhEZnSW2uqxqbPLmL7MHB2', NULL, '2023-11-23 21:16:55', '2023-11-23 21:16:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categg`
--
ALTER TABLE `categg`
  ADD PRIMARY KEY (`id_categg`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penggunas_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categg`
--
ALTER TABLE `categg`
  MODIFY `id_categg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
