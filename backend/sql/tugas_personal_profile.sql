-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2025 at 02:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_personal_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `born` date NOT NULL,
  `address` text NOT NULL,
  `zip_code` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `total_project` int NOT NULL,
  `work` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `born`, `address`, `zip_code`, `email`, `phone`, `total_project`, `work`, `image`) VALUES
(1, 'Tari Matul Aslamiyah', '2007-12-02', 'Jln. Balai Desa Kancilan Rt 01 Rw 06 Kecamatan Kembang Kabupaten Jepara  Jawa Tengah', 59453, 'tarimatula@gmail.com', '082335645804', 5, 'SMKN 1 BANGSRI', '1752829533.png');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `author`, `tittle`, `description`) VALUES
(6, '1753281570.png', '2025-02-19', 'aslamiyah', 'membuat desain e-commerce menggunakan figma', 'Menampilkan hasil karya desain aplikasi mobile bertema e-commerce makanan. tujuan adalah untuk menciptakan antarmuka pengguna yang lebih menarik secara visual dan mudah digunakan, terutama untuk aplikasi pemesanan makana. karakter kartun sebagai elemen visual utama membuat tampilan terlihat ramah.'),
(7, '1753282689.png', '2024-02-14', 'aslamiyah', 'Menampilkan Data Pada LCD Menggunakan ESP8266 Dan Arduino IDE', 'Dalam dunia internet of things (IOT), menampilkan data ke layar lcd menjadi salah satu skill dasar yang penting. kali ini saya membuat project sederhana menggunakan NodeMCU ESP8266 dan LCD 16x2 untuk menampilkan teks pada bagian dari pembelajaran di smk negeri 1 bangsri(smknsaba)'),
(8, '1753282441.png', '2024-12-04', 'aslamiyah', 'Menampilkan data karyawan berdasarkan divisi dengan sql join', 'Menampilkan data karyawan dari tabel tbemployee, digabungkan dengan tabel tbdivision menggunakan INNER JOIN. Data yang ditampilkan meliputi nama karyawan, email, dan nama divisinya seperti Frontend dan Backend. Tampilan ini digunakan untuk mempermudah analisis data karyawan berdasarkan divisi mereka.'),
(9, '1753283741.png', '2024-03-13', 'aslamiyah', 'Membuat Game  Whack A Mole', 'Game Whack a Mole adalah permainan interaktif dan seru yang menguji kecepatan tangan dan refleks pemain. Dalam permainan ini, pemain harus mengetuk atau \"memukul\" tikus (mole) yang muncul secara acak dari lubang dalam waktu yang terbatas. Semakin cepat dan tepat pemain memukul mole, semakin tinggi skor yang didapat.'),
(10, '1753284684.png', '2025-06-20', 'aslamiyah', 'Membuat Aplikasi Warung makan Menggunakan sketchware', 'Menampilkan antarmuka dari aplikasi sederhana bernama \"Warung Makan\" yang dibuat menggunakan Sketchware, yaitu platform visual programming berbasis blok untuk membuat aplikasi Android tanpa harus menulis kode secara manual.'),
(11, '1753286649.png', '2024-02-27', 'aslamiyah', 'Membuat Game Snake', 'Game Snake adalah permainan klasik yang pertama kali populer pada perangkat ponsel . Dalam game ini, pemain mengendalikan seekor ular yang bergerak di area bermain untuk memakan objek. Setiap kali ular memakan makanan, tubuhnya akan bertambah panjang ');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(5, 'Tari Matul Aslamiyah', 'tarimatula@gmail.com', 'aslamiyah', 'Tari matul aslamiyah'),
(6, 'Tari Matul Aslamiyah', 'tarimatula@gmail.com', 'aslamiyah', 'Tari matul aslamiyah'),
(7, 'Tari Matul Aslamiyah', 'tarimatula@gmail.com', 'aslamiyah', 'Tari matul aslamiyah');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`, `description`) VALUES
(9, '1753409018.png', 'Membuat Tabel  gallery', 'Pelajar', 'Tabel gallery di gunakan untuk menyimpan data gambar yang di tampilkan dalam galeri pada sebuah website'),
(10, '1753254265.png', 'Membuat Form', 'pelajar', 'Form galeri adalah halaman formulir yang digunakan untuk menambahkan data gambar ke dalam website, biasanya ditampilkan di bagian galeri foto.'),
(11, '1753253614.png', 'Membuat Crud Personal_profile', 'pelajar', 'CRUD Personal Profile adalah fitur pada sebuah website yang digunakan untuk mengelola data pribadi pengguna, seperti nama lengkap, alamat, tanggal lahir, email, nomor telepon, dan foto profil.'),
(12, '1753253523.png', 'Membuat Web Berita', 'pelajar', 'Web berita adalah sebuah situs yang menampilkan informasi atau artikel terkini dalam berbagai kategori seperti politik, pendidikan, teknologi, hiburan, dan lainnya.'),
(13, '1753253411.png', 'Membuat Web Gallery', 'pelajar', 'Web Gallery adalah website untuk menampilkan kumpulan gambar. Saya membuatnya menggunakan HTML, CSS, PHP, dan MySQL. Fitur utamanya yaitu menambah, menampilkan, mengedit, dan menghapus gambar (CRUD). '),
(14, '1753253452.png', 'Membuat Web portofolio', 'pelajar', 'Web portofolio adalah website yang menampilkan informasi pribadi, keahlian, pengalaman, dan hasil karya seseorang. Saya membuat web ini menggunakan HTML, CSS, Bootstrap, PHP, dan MySQL. ');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int NOT NULL,
  `date` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`) VALUES
(5, '2021-2022', 'MTS HASYIM AS\'YARI BANGSRI', ' Blk Jl. Ktr. Pos, Krsak, Bangsri, Jepara Regency, Central Java 59453', 'Di MTs Hasyim Asy’ari Bangsri, saya belajar berbagai mata pelajaran umum dan keagamaan yang saling melengkapi. Pelajaran umum meliputi Matematika, Bahasa Indonesia, Bahasa Inggris, IPA, IPS. Sementara pelajaran keislaman mencakup Al-Qur’an Hadis, Aqidah Akhlak, Fiqih, dan Sejarah Kebudayaan Islam.\r\nSelain itu, saya juga mengikuti pelajaran Bahasa Arab, muatan lokal seperti Bahasa Jawa dan Aswaja, serta berbagai kegiatan ekstrakurikuler seperti pramuka, seni, dan olahraga. Proses pembelajaran dilakukan secara aktif, kreatif, dan bernuansa Islami, dengan tujuan membentuk generasi yang cerdas, berakhlak, dan siap menghadapi perkembangan zaman.'),
(6, '2023-2026', 'SMKN 1 BANGSRI', 'jln. kh achmad fauzan no.17, krasak,kec.bangsri kab.jepara jawa tengah', 'Saya adalah siswa SMKN 1 Bangsri, jurusan PPLG (Pengembangan Perangkat Lunak dan Gim). Di jurusan ini, saya belajar berbagai hal yang berkaitan dengan dunia teknologi informasi, khususnya dalam membuat dan mengembangkan aplikasi serta permainan (game).\r\nSelama belajar di jurusan PPLG, saya mempelajari bahasa pemrograman seperti HTML, CSS, JavaScript, PHP. Saya juga belajar cara membuat website, aplikasi mobile, serta dasar-dasar pembuatan game. Selain itu, saya dibekali dengan keterampilan dalam desain antarmuka (UI/UX), manajemen database.Belajar di SMKN 1 Bangsri memberikan saya banyak pengalaman, baik secara teori maupun praktik. Sekolah ini memiliki fasilitas yang mendukung pembelajaran IT, serta guru-guru yang kompeten di bidangnya. Saya juga mendapat kesempatan untuk magang di industri, sehingga saya bisa menerapkan ilmu yang saya pelajari secara langsung di dunia kerja.'),
(7, '2025', 'PT. LAUWBA TECHNO INDONESIA ', 'Jln.taman kenari no.A3, kledokan, caturtunggal,kec.depok kab.sleman.', 'Saya melaksanakan praktik kerja lapangan (pkl) di pt lauwba techno indonesia sebuah perusahaan yang bergerak dibidang teknologi informasi, khususnya dalam layanan it training, software development. selama saya pkl disini saya mendapatkan banyak pengalaman praktis di dunia industri it.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`) VALUES
(3, '1753933207.png', 'web developer'),
(4, '1753933578.png', 'desainer'),
(5, '1753933775.png', 'Arduino'),
(9, '1753292935.png', 'Sketchware');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percent` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`, `description`) VALUES
(3, 'Html', 90, 'saya menggunakan html untuk tampilan  game snake,game wack a mole, dan juga tampilan web.'),
(4, 'Js', 88, 'saya menggunakan js untuk menggerakan game whack a mole, game snake, dan membuat web.'),
(5, 'css', 90, 'Saya menggunakan css untuk mengatur warna,font, ukuran,posisi elemen website, game wack a mole, game snake.'),
(6, 'Php', 90, 'saya sudah membuat personal profile, crud dari php.'),
(7, 'Boostrap5', 95, 'saya sudah membuat web, form dan crud,dari boostrap5.'),
(8, 'Laravel', 85, 'saya sudah membuat login upload gambar dari laravel.');

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(3, '1754018470.png', 'https://www.tiktok.com/@stelar.squad?is_from_webapp=1&sender_device=pc'),
(4, '1754024370.png', 'https://web.whatsapp.com/'),
(5, '1754024695.png', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'aslamiyah', 'tarimatula@gmail.com', '$2y$10$PZ3T61hCz8A26pd/GCsiM.XSTSDNs.SHUhmWow.pWDcrbVJ8YVYsK'),
(5, 'aslamiyah', 'tarimatula@gmail.com', '$2y$10$ZUKoeUYsX/ydgYKYG.KV.u5gjoLG0itwOMLFbmvYHOsksKYFAKj/6'),
(6, 'aslamiyah', 'tarimatula@gmail.com', '$2y$10$vVYUtdyGZmwUT.L0ceNvJO2aVzfKz/ZbWmVPybm.XoL2fbCV7wZvq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
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
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
