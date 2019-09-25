-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 01:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040028`
--
CREATE DATABASE IF NOT EXISTS `pw_173040028` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pw_173040028`;

-- --------------------------------------------------------

--
-- Table structure for table `flora_dan_fauna_langka`
--

CREATE TABLE `flora_dan_fauna_langka` (
  `id` int(11) NOT NULL,
  `Nama` char(55) NOT NULL,
  `Jenis` char(55) NOT NULL,
  `Asal` char(55) NOT NULL,
  `Ciri` char(125) NOT NULL,
  `Des` char(255) NOT NULL,
  `Gambar` char(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flora_dan_fauna_langka`
--

INSERT INTO `flora_dan_fauna_langka` (`id`, `Nama`, `Jenis`, `Asal`, `Ciri`, `Des`, `Gambar`) VALUES
(36, 'Black Bat Flower', 'Ubi-Ubian', 'Thailand, Malaysia, dan Cina selatan', 'Warnanya bervariasi seperti marun, perunggu, coklat dan hijau', 'Ditemukan di tempat lembab hingga tumbuh dengan baik, memiliki 10 spesies.', '1.jpg'),
(37, 'Chocolate Cosmos', 'Perdu', 'Meksiko', 'Bunga ini mengeluarkan aroma vanilla (seperti coklat) pada musim panas', 'Bunga ini berwarna coklat, berdiameter sekitar 3-4 cm. dan bunga hasil proses kultivasi ini tidak dapat berkembang biak', '2.jpg'),
(38, 'Parrots Beak', 'Lotus Vine', 'Selandia Baru', 'kelopak lembut dengan warna oranye, kuning dan merah yang cerah di bawah sinar matahari', 'Bunga ini bisa tumbuh hingga enam inci panjang dan 3 kaki lebar. Bunga ini terdiri dari. Bunga cantik satu ini sudah diklasifikasi sebagai salah satu tanaman yang paling langka di dunia sejak tahun 1884', '3.jpg'),
(39, 'Bunga Giok (Jade Vine)', 'Kacang-kacangan', 'Filipina', 'Warna khas yang sangat indah, yaitu perpaduan warna hijau kebiruan dan hijau mint', 'anaman ini sebetulnya masih memiliki hubungan erat dengan kacang merah. Bunganya berbentuk seperti cakar yang tumbuh menggantung dari ranting-ranting pohonnya. Tanaman ini bisa mencapai ketinggian 3 meter', '4.png'),
(40, 'Bunga Bangkai  (Rafflesia Arnoldii)', 'Bunga', 'Indonesia', 'Mengeluarkan bau yang tidak sedap, yang gunanya untuk menarik perhatian serangga seperti lalat', 'Bunga ini tidak memiliki tubuh, batang, daun, akar parasit, dan membutuhkan tanaman lain untuk hidup', '5.jpg'),
(41, 'Middlemist Camelia', 'Bunga', 'Inggris dan Selandia Baru', 'Warna merah peach', 'Tanaman ini hanya berbunga sesekali saja, dan ketika mekar bunganya memiliki bentuk kelopak yang sangat rimbun dan terlihat mirip seperti bunga mawar yang sangat indah dan hanya terdapat 2 sampel saja diseluruh dunia', '6.jpg'),
(42, 'Hydrangea', 'Tanaman Hias', 'Cina, Jepang, Korea, Himalaya, dan Indonesia', 'Tanaman hias ini adalah salah satu bunga pernikahan terbaik di dunia', 'Tanaman ini dikenal sebagai hydrangea atau hortensia. Salah satu bunga langka yang memiliki sekitar 70 hingga 75 spesies', '7.jpg'),
(43, 'Anggrek Tanah', 'Anggrek', 'Australia', 'Sangat langka dan hanya ada di australia', 'Tanaman ini selalu kekurangan klorofil karena tak bisa menyerap banyak cahaya matahari seperti kebanyakan tanaman lain. Sebagai gantinya, Anggrek Tanah mendapatkan nutrisi dari semak-semak di sekitarnya', '8.jpg'),
(44, 'Komodo', 'Mamalia', 'Indonesia', 'Komodo merupakan spesies kadal terbesar', 'Fauna spesies kadal raksasa ini ditemukan pada tahun 1910 Ukuran yang sangat besar dengan panjang rata-rata 2 sampai 3 meter', '9.jpg'),
(45, 'Orang Utan', 'Mamalia', 'Indonesia', 'Orang utan merupakan satu-satunya spesies kera terbesar di Asia', 'Orang utan atau disebut kera besar memiliki lengan panjang dan berbulu kemerahan atau cokelat', '10.jpg'),
(46, 'Harimau Sumatera', 'Mamalia', 'Indonesia', 'Ukuran tubuhnya terkecil dibandingkan jenis harimau lainnya dengan warna paling gelap di antara semua spesiesnya', 'Harimau jantan memiliki panjang tubuh sekitar 92 inci dari kepala sampai ekor dan berat sekitar 140 kg dengan tinggi 60 cm. Sedangkan pada harimau betina memiliki panjang sekitar 78 inci dan berat sekitar 91 kg', '11.jpg'),
(47, 'Burung Cenderawasih', 'Aves', 'Indonesia', 'Warna bulu cenderawasih  mencolok seperti hitam, cokelat, oranye, kuning, putih, biru, merah, hijau, dan ungu', 'Burung Cenderawasin sering dianggap sebagai burung karena memiliki keindahan dengan warna bulu yang indah. Indonesia merupakan negara dengan jumlah spesies cenderawasih tebanyak. Ada sekitar 33 jenis cenderawasih di Indonesia', '12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flora_dan_fauna_langka`
--
ALTER TABLE `flora_dan_fauna_langka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flora_dan_fauna_langka`
--
ALTER TABLE `flora_dan_fauna_langka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
