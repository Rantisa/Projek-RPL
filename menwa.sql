-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 01:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftaranggota`
--

CREATE TABLE `daftaranggota` (
  `id` int(11) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nbp` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `masuk` varchar(20) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tampil` enum('Y','N') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftaranggota`
--

INSERT INTO `daftaranggota` (`id`, `user_id`, `nama`, `nim`, `nbp`, `jabatan`, `fakultas`, `jurusan`, `prodi`, `hp`, `masuk`, `pendidikan`, `email`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `alamat`, `tampil`, `foto`, `status`) VALUES
(8, 8, 'ferry febrian edit', 'b1a014546', '123', 'UrHumas', 'F.HUKUM', 'ilmu hukum', 'Ilmu Hukum', '082350941033', '2016', 'diksar 2016', 'ferryokay17@gmail.com', 'banjarmasin ', '22221997', 'Laki-Laki', 'Islam', 'jl. trans kalimantan komp. kruing indah gg. garuda no. 17 rt. 37', 'Y', 'DSC_8928.jpg', 2),
(9, NULL, 'Muhammad Ilham Ramadhan', 'A1E315183', '0', '', 'Kristen', 'pgsd', '', '', '', '', 'madhanam2@gmail.com', 'Anjir Serapat', '0000-00-00', 'Laki-Laki', 'Islam', 'Desa Anjir Serapat Barat Km 9,5', 'Y', '', 0),
(10, NULL, 'rahmadi', '1710312210039', '0', '', 'Hindu', 'manajemen', '', '', '', '', 'rahmadi1805@gmail.com', 'anjir', '0000-00-00', 'Laki-Laki', 'Islam', 'jl. trans kalimantan km.30', 'Y', '', 0),
(11, NULL, 'Dinda Aryanti', '1710313320013', '0', '', 'Hindu', 'S1 akuntansi', '', '', '', '', 'aryanti.dinda98@gmail.com', 'Kotabaru', '0000-00-00', 'Perempuan', 'Islam', 'Desa Pulau Panci RT 05/ RW 01 kecamatan kelumpang hilir, kabupaten kotabaru', 'Y', '', 0),
(12, NULL, 'Wahyudinor', '1710122110028', '0', '', 'Kristen', 'JPOK', '', '', '', '', 'wahyudinoor44@gmail.com', 'muara arai', '0000-00-00', 'Laki-Laki', 'Islam', 'desa lajar RT 02 kecamatan lampihong kab. balangan', 'Y', '', 0),
(13, NULL, 'M. Bayu Rahman', '1710122310022', '0', '', 'Kristen', 'JPOK', '', '', '', '', 'mbayurahman200@gmail.com', 'Martapura', '0000-00-00', 'Laki-Laki', 'Islam', 'komplek asabri, damai indah blok G no.6, sungai sipai, martapura', 'Y', '', 0),
(14, NULL, 'Sayyid Abd. Razzak', '1710122310059', '0', '', 'Kristen', 'JPOK', '', '', '', '', 'abdulrazzaqalaydrus98@gmail.com', 'mangga', '0000-00-00', 'Laki-Laki', 'Islam', 'desa tamiang bakung RT 04 / RW 02 kabupaten kotabaru', 'Y', '', 0),
(16, 16, 'susi susanti siregar', 'aidi115038', '0', '', 'Kristen', 'JPOK', '', '', '', '', 'susisusanti12222@ymail.com', 'rawang', '0000-00-00', 'Perempuan', 'Kristen', 'jl.citra keraton', 'Y', '', 2),
(18, 18, 'Ridhaini Putri', '1610112320019', '0', '', 'Kristen', 'IPS', '', '', '', '', 'putrii.ridhaini@gmail.com', 'Alabio,HSU', '0000-00-00', 'Perempuan', 'Islam', 'Jl. Kayutangi 2 Jalur 2 No. 95', 'Y', '', 1),
(19, 19, 'Yunarti Agustina', '1610112120013', '0', '', 'Kristen', 'IPS', '', '', '', '', 'yunarti888@gmail.com', 'HSU', '0000-00-00', 'Perempuan', 'Islam', 'Jl. Kayutangi 2 Jalur 2 No. 95', 'Y', '', 1),
(20, 20, 'risni anila wardini asih', '1610211120060', '0', '', 'Kong Hu Chu', 'ilmu hukum', '', '', '', '', 'risnianilaw@gmail.com', 'muara teweh ', '0000-00-00', 'Perempuan', 'Islam', 'jl brigjen hasan basry komplek simpang gusti 4', 'Y', '', 1),
(21, 21, 'Muhammad Alpianor', 'E1D312020', '0', '', 'Hindu', 'Agribisnis', '', '', '', '', 'muhammad.alpianor5@gmail.com', 'Batu Tangga', '0000-00-00', 'Laki-Laki', 'Islam', 'Jl. Unlam III Desa Sunersari RT.19/RW.04 No. 59 Kel.Sei Besar Banjarbaru 70714', 'Y', '', 2),
(22, 22, 'heriyadi', 'A1e315400', '0', '', 'Kristen', 'PGSD', '', '', '', '', '', 'marabahan', '0000-00-00', 'Laki-Laki', 'Islam', 'komplek griya permata persada indah jalur 2', 'Y', '', 2),
(24, 24, 'M Surya Gazali', 'A1D115047', '0', '', 'Kristen', 'JPOK', '', '', '', '', 'Mgazali07@yahoo.com', 'Banjarmasin ', '0000-00-00', 'Laki-Laki', 'Islam', 'Jl Taruna Praja', 'Y', '', 2),
(25, 25, 'Noor Anita', 'A1A215008', '0', '', 'Kristen', 'IPS', '', '', '', '', 'anitanor16@gmail.com', 'Handil Biryang Atas', '0000-00-00', 'Perempuan', 'Islam', 'komplek kayu tangi II jalur 6 No 50', 'Y', '', 2),
(27, 27, 'Ranti saputri', 'h1g114208', '0', '', 'Islam', 'teknik inromatika', '', '', '', '', 'rantisaputri5@gmail.com', 'Hayup', '21021995', 'Perempuan', 'Islam', 'bjm', 'Y', '', 2),
(31, 31, 'Mahda Lina', '1610127120007', '0', '', 'Kristen', 'Ilmu Pendidikan', '', '', '', '', 'Mahdalina756@gmail.com', 'Anjir', '19061998', 'Perempuan', 'Islam', 'Desa Anjir Pasar Kota II Km 16,5Rt 12', 'Y', '', 1),
(33, 33, 'Mulyani', '1610815120014', '0', '', 'Islam', 'Teknik Lingkungan', '', '', '', '', 'mulyani.apps27@gmail.com', 'mantewe', '02111998', 'Perempuan', 'Islam', 'jl dahlina Raya', 'Y', '', 1),
(34, 34, 'Jinawi Efendi', 'G11B112020', '0', '', 'Kristen', 'Budidaya Perairan', '', '', '', '', 'www.purnaaljinawi39kahayan@gmail.com', 'Bahaur', '10101993', 'Laki-Laki', 'Islam', 'Jl. A.Yani 36', 'Y', '', 2),
(35, NULL, 'arhamni', '1610122210010', '0', '', 'Kristen', 'JPOK', '', '', '', '', 'arhamnijbt48@gmail.com', 'batola', '03031998', 'Laki-Laki', 'Islam', 'desa anjir muara kota tengah km 23,5 RT 05 handil pamatang 1', 'Y', '', 0),
(37, NULL, 'Selvinalia', '1710119220027', '0', '', 'Kristen', 'pendidikan Biologi', '', '', '', '', 'selvinalia25@gmail.com', 'Banjarmasin', '9 januari 1999', 'Perempuan', 'Islam', 'jl tembus mantuil lokasi 3', 'Y', '', 0),
(41, NULL, 'Maimunah', '1710312320031', '0', '', 'Hindu', 'manajemen', '', '', '', '', 'maimunah_22@yahoo.co.id', 'Banjarmasin', '22071997', 'Perempuan', 'Islam', 'jl.soetoyo s gg swadaya 1 rt 036', 'Y', '', 0),
(43, NULL, 'Amalia Rahmawati Anwar', '1710912320003', '0', '', 'Islam', 'Kesehatan Masyarakat', '', '', '', '', 'amaliaranwar99@gmail.com', 'Tabalong', '10 April 1999', 'Perempuan', 'Islam', 'Jl. Anggrek Raya No.16, Rt.05, Kec. Murung Pudak, Kab. Tabalong Kode pos 71571', 'Y', '', 0),
(44, NULL, 'Efenci familiana', '1710122220009', '0', '', 'Kristen', 'pendidikan olahraga dan kesehatan', '', '', '', '', 'efensifamiliana99@gmail.com', 'tarakan', '13 juni 1999', 'Perempuan', 'Islam', 'Asrama Rindam VI/MLW Banjarbaru Kalimantan Selatan', 'Y', '', 0),
(45, 45, 'Ahmad Rozali', 'A1e315310', '0', '', 'Kristen', 'Pendidikan Guru Sekolah Dasar', '', '', '', '', 'garaw003@gmail.com', 'marabahan', '07071995', 'Laki-Laki', 'Islam', 'Jl Putri junjung buih, marabahan', 'Y', '1506660484380.jpg', 2),
(46, 46, 'fathurrahman', 'g1d114016', '0', '', 'Kristen', 'manajemen sumberdaya perairan', '', '', '', '', 'fathurrahmangusti@gmail.com', 'tanah bumbu', '11111994', 'Laki-Laki', 'Islam', 'gedung kemahasiswaan ulm bnjarbaru', 'Y', '', 2),
(47, 47, 'Siti Muthmainnah', 'A1E315615', '0', '', 'FKIP', 'Keguruan', '', '', '', '', 'sitimuthmainnah98@gmail.com', 'Danau Panggang', '26 April 1998', 'Perempuan', 'Islam', 'Amuntai', 'Y', '', 2),
(48, 48, 'dimas sulung susilo', '1710413210004', '0', '', 'FISIP', 'Ilmu Pemerintahan', '', '', '', '', 'dimassulungsusilo@gmail.com', 'tamban', '30 juli 1997', 'Laki-Laki', 'Islam', 'desa sidorejo rt 001 kec tamban kab. batola prov. kalsel						\r\n						', 'Y', '', 2),
(51, 51, 'Miftaahul Hilmi', '1610715210008', '0', '', 'FPIK', 'Pemanfaatan Sumber Daya Perikanan', '', '', '', '', 'mhmifthil@gmail.com', 'Surabaya', '16 November 1996', 'Laki-Laki', 'Islam', '			Jl. Astoria Kasturi RT 14 RW 03 Blok B No. 2				\r\n						', 'Y', '', 2),
(52, 52, 'alfinah', '1610815120001', '0', '', 'F.Teknik', '', '', '', '', '', 'alfinahsalamah99@gmail.com', 'Labuan Mas', '12-12-1999', 'Perempuan', 'Islam', 'jl. dahlina raya, kec. sungai besar, kab. banjarbaru selatan, kota banjarbaru.				', 'Y', '', 1),
(55, NULL, 'maulida yuliawati', '1710122320026', '0', '', 'FKIP', 'pendidikanpendidikan  olahraga dan kesehatan', '', '', '', '', 'maulidayuliawati08@gmail.com', 'danda jaya', '09071998', 'Perempuan', 'Islam', 'danda jaya rt.007 rw.007 kec. rantau badauh kab. barito kuala		\r\n						', 'Y', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tampil` enum('Y','N') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `isi`, `hari`, `tanggal`, `jam`, `tampil`, `gambar`) VALUES
(15, 'SOSIALISASI RESIMEN MAHASISWA', 'Resimen Mahasiswa atau yang biasa disingkat MENWA Suryanata melakukan sosialisasi kepada mahasiswa baru Universitas Lambung Mangkurat bertempat di aula Rektorat lt.1, Rabu (04/09/2017). Kegiatan ini bertujuan untuk memperkenalkan Resimen Mahasiswa kepada mahasiswa baru ULM serta mengajak para mahasiswa baru untuk bergabung menjadi anggota Resimen Mahasiswa. Kegiatan ini dihadiri oleh Rektor  Prof. Dr. H. Sutarto Hadi, M.Si., M.Sc, Wakil Rektor Bidang Kemahasiswaan dan Alumni Dr. Ir. H. Abrani Sulaiman, M.Sc., Ph.D, Senior dari Menwa serta para mahasiswa dari berbagai fakultas di ULM. Resimen Mahasiswa Suryanata merupakan salah satu Unit Kegiatan Mahasiswa yang ada di ULM. sebagai wadah yang merupakan sarana pengembangan diri mahasiswa ke arah perluasan DSC_8928wawasan dan peningkatan keikutsertaan dalam upaya bela negara dan penguatan ketahanan nasional. Dalam sambutannya, Rektor menyampaikan bahwa Resimen Mahasiswa memberikan kontribusi yang besar terhadap ULM, anggota Menwa dinilai memiliki karakter, mental serta disiplin yang kuat. Tidak hanya itu anggota menwa juga diharuskan mempunyai intelektual tinggi yang menunjukan dirinya sebagai mahasiswa. Kegiatan sosialisasi ini diisi dengan berbagai macam materi terkait dengan sejarah Menwa serta pengalaman yang diberikan oleh senior Menwa untuk dibagikan kepada mahasiswa baru.', 'Senin', '2017-12-25', '09:24:33', 'N', 'DSC_8928.jpg'),
(16, 'sertijab komandan satuan 2017', 'Banjarmasin (13/02/2017) bertempat di Gedung Serbaguna Universitas Lambung Mangkurat (ULM), UKM Resimen Mahasiswa Suryanata Satuan 601/NRT Universitas Lambung Mangkurat menyelenggarakan serah terima jabatan komandan yang menandakan berakhirnya kepengurusan periode 2016, dan akan dilanjutkan oleh kepengurusan periode 2017. Sebagai inspektur upacara serah terima jabatan Wakil Rektor III Dr. Ir. H. Abrani Sulaiman, M.Sc, serta dihadiri oleh perwakilan dari Gubernur KalSel, Korem 101 Antasari, Kapolda KalSel, Lanal Banjarmasin, Koramil Banjarmasin Utara, Polsek Banjarmasin Utara, UKM di lingkungan ULM, serta anggota dan alumni Resimen Mahasiswa ULM. Serah terima jabatan ditandai dengan pelepasan tanda jabatan dari komandan lama, Jamal Rufik mahasiswa FKIP angkatan 2013, kepada komandan baru, Sayyid Hanafiah mahasiswa FKIP angkatan 2014.\r\n\r\nDSC_9107Wakil Rektor III selaku inspektur upacara dalam sambutannya mengucapkan terimakasih serta penghargaan yang setinggi tingginya kepada Jamal Rufik karena telah memunaikan masa baktinya pada periode tahun 2016, serta ucapan selamat dan sukses atas terpilihnya Sayyid Hanafiah sebagai Komandan Resimen Mahasiswa periode 2017. Beliau juga menyampaikan bahwa serah terima jabatan lumrah terjadi tiap tahunnya karena harus ada regenerasi untuk jabatan UKM yang ada dilingkungan ULM, hal ini bermaksud dalam rangka untuk menjadikan UKM sebagai sarana dari pembinaan kemahasiswaan sehingga diharapkan selalu ada kesempatan di tiap angkatan untuk menduduki jabatan di setiap UKM yang ada.\r\n\r\nULM dalam sejarahnya merupakan universitas perjuangan karena didirikan oleh para pejuang-pejuang revolusi di Indonesia, sehingga ULM akan terus bertekad berdiri tegak membela kesatuan negara Republik Indonesia bersama dengan Resimen Mahasiswa serta komponen komponen sivitas akademika yang lain.', 'Minggu', '2017-12-24', '09:12:01', 'Y', 'DSC_9107.jpg'),
(17, 'Alumni Menwa Ajak Sebarkan Nil', 'Hadir dalam acara yang digelar di Gedung Lemhanas, Jakarta (Jumat, 12/8) antara lain Ketua Umum DPN IARMI MS Kaban, Rektor Unhan Letjen TNI Dr. (Cand) I Wayab Midhio M. Phil, Ketua DPR RI Ade Komarudin dan Wakil Ketua KPK Irjen Basaria Pandjaitan.\r\n\r\nDalam kesempatan itu, Zulkifli mengingatkan kepada seluruh alumni Menwa Indonesia untuk menjaga nasionalismenya. Sebab dewasa ini, banyak yang mulai melupakan nilai-nilai identitas ke-Indonesia-an. Belum lagi masalah kesenjangan sosial di berbagai daerah yang masih tinggi. Jika terus dibiarkan maka akan melahirkan rantai kemiskinan yang semakin panjang dan dapat memicu tumbuhnya paham radikalisme.\r\n\r\nKarena itu, dia mengajak kepada alumni Menwa Indonesia untuk bersinergi dengan MPR dalam menyebarluaskan nilai-nilai luhur berkebangsaan kepada seluruh pihak.\r\n\r\nâ€œBela Negara program dari Menhan tapi isinya alangkah lebih baik bila bersinergi dengan MPR. Kita tanamkan nilai-nilai luhur Empat Pilar kebangsaan dan bernegara. Mudah-mudahan dengan begitu, survei yang menyatakan Pancasila mulai lumpuh bisa berjaya kembali,â€ jelas Zulkifi.', 'Minggu', '2017-12-24', '09:53:12', 'Y', 'Zulkifli-Hasan-Ketua-Menwa.jpeg'),
(18, 'Polisi Resimen Mahasiswa Indon', 'Di dalam usaha meningkatkan kualitas anggota Resimen Mahasiswa Indonesia (Menwa), Komando Nasional Menwa Indonesia melaksanakan Pendidikan Polisi Menwa Dikpolmen angkatan III. Kegiatan tingkat nasional selama 10 hari dari 9-18 Desember 2013 yang digelar di Pusdikpom Kodiklat TNI AD Cimahi Jawa Barat.\r\n\r\nKegiatan tersebut dibuka oleh Danpusdikpomad Kol.Cpm.Djuhendi. Sedikitnya ada 65 anggota Menwa yang terpilih dari seluruh Indonesia untuk mengikuti pendidikan. Dalam amanatnya, Danpusdikpom menyampaikan terima kasih atas kepercayaan Konas Menwa memilih Pusdikpomad sebagai tempat latihan Polmen.\r\n\r\nIa berharap lulusan Dikpolmen dapat menjadi Polmen yang berdedikasi tinggi terhadap organisasi dan tentunya negara.\r\n\r\n\"Dapat memiliki keterampilan serta pengetahuan kepolmenan dan keprovosan yang dibekali samapta yang baik di kampus,\" ujarnya dalam rilisnya kepada wartawan, Selasa (11/12/2013).\r\n\r\nDankonas Menwa Ariza Patria mengatakan pihaknya ingin melahirkan Kader Menwa yang berkualitas dan memiliki rasa disiplin yang tinggi serta selaras dengan tujuan kegiatan Dikpolmen ini dalam membentuk anggota Menwa di bidang Kepolmenan dan Keprovosan.\r\n\r\nDikpolmen, kata dia, adalah Diklat reguler yang selalu diadakan Konas Menwa dalam rangka mengembangkan dan memberikan bekal pengalaman bagi anggota Menwa.\r\n\r\n\"Agar memiliki nilai-nilai empat pilar kebangsaan dan karakter kepemimpinan yang kuat serta secara khusus menyiapkan kader penegak dan pemelihara disiplin Organisasi di lingkungan Menwa Indonesia di seluruh lembaga pendidikan,\" tutupnya.', 'Minggu', '2017-12-24', '09:57:34', 'Y', 'TFNliwHN47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(10) NOT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `isi` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tampil` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul`, `isi`, `foto`, `hari`, `tanggal`, `jam`, `tampil`) VALUES
(8, 'SEJARAH RESIMEN MAHASISWA SURYANATA PROP', 'BATALYON MAHASISWA 17 MEI\r\nYon mahasiswa 17 Mei adalah merupakan bentuk permulaan daripada timbulnya', '', 'Minggu', '2017-12-24', '07:25:07', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tampil` enum('Y','N') NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `judul`, `tampil`, `foto`) VALUES
(4, 'STRUKTUR ORGANISASI RESIMEN MA', 'Y', '1506661423894.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'HEHEHEH', '827ccb0eea8a706c4c34a16891f84e', 'user'),
(3, 'dssb12345', 'f03b6d52a966b79fc44eaa9e63cfb6', 'user'),
(5, 'h1g114208', 'a1737945f850df6ba524af557e4ad2', 'user'),
(8, 'b1a014546', '509584e9b7bb37a3b5bb72d80b29d4', 'user'),
(16, 'aidi115038', 'b2ed50f8c2fea8bcfc8904a54ae21f', 'user'),
(17, 'A1D114215', '28f705d02aaef8764c650ccd7bfb5b', 'user'),
(18, '1610112320019', 'c3248aefc7571dbc914d9f1d9f760a', 'user'),
(19, '1610112120013', '7d19fc08ba73c08e43fb7ec63430f2', 'user'),
(20, '1610211120060', '9ae99be42b42c3ecf0d0a88ad918d0', 'user'),
(21, 'E1D312020', 'bfc32b65799ac956ff62e898243fff', 'user'),
(22, 'A1e315400', 'de1c7cfc655a6bdda3d3dc28809a2f', 'user'),
(23, '', 'd41d8cd98f00b204e9800998ecf842', 'user'),
(24, 'A1D115047', '75c4e28e5d0a43b892749d4c126252', 'user'),
(25, 'A1A215008', 'cdb89558e6bb9c1f07105e3a69ce59', 'user'),
(27, 'h1g114208', 'a1737945f850df6ba524af557e4ad2', 'user'),
(31, '1610127120007', '7f881ed50010767032b0565bc4c84c', 'user'),
(33, '1610815120014', 'ec910f780c1e2e5af5fd9d1fab704d', 'user'),
(34, 'G11B112020', '07f11e9636fc9ec6c0a00e2d0d11d1', 'user'),
(45, 'A1e315310', 'a2c26288f466ccb6d1c4c1934caf02', 'user'),
(46, 'g1d114016', 'bb2ac7739a0d4ae7bfebe5a831dcc6', 'user'),
(47, 'A1E315615', '8609d284c1ff2577071c146455a4c9', 'user'),
(48, '1710413210004', '1f84b3177c2eea0f33ca9f71f1e6df', 'user'),
(51, '1610715210008', '018929fc42ec6c9f91f3cc3f4cf2e8', 'user'),
(52, '1610815120001', '372406c1a4d95cde2e79034d05ac49', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tampil` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `judul`, `isi`, `hari`, `tanggal`, `jam`, `tampil`) VALUES
(12, 'visi', '\r\n    Sebagai wadah penyaluran potensi mahasiswa dalam bela negara dan pengabdian masyarakat.\r\n    Pembelajaran disiplin, wawasan kebangsaan, kemampuan mental dan fisik serta kepemimpinan.\r\n    Sebagai organisasi pengembangan diri bagi mahasiswa untuk menghadapi â€œkawah candra di mukaâ€ di masa depan.\r\n    Sebagai organisasi yabg bisa mencetak kader pemimpin.\r\n    Menyiapkan kader yang siap dalam upaya bela negara dan sebagai komponen cadangan dalam pertahanan negara.\r\n    Pelatihan kehidupan berorganisasi yang menstimulasikan lingkungan kerja di masa mendatang, serta membuka jaringan yang luas hingga lingkup nasional.\r\n', 'Senin', '2017-12-25', '09:23:53', 'Y'),
(16, 'misi', '\r\n    Setia pada pancasila dan UUD 1945 serta mempertahankan kedaulatan dan kehormatan NKRI.\r\n    Turut membina persatuan dan kesatuan bangsa Indonesia.\r\n    Menjunjung tinggi dan ikit serta membina dan mengamalkan nilai-nilai luhur kebudayaan bangsa Indonesia.\r\n    Senatiasa mengamalkan Tri Dharma perguruan tinggi untuk kesejahteraan bangsa dan negara.\r\n    Melaksanakan tujuan dan fungsi Resimen Mahasiswa Indonesia serta mentaati tata tertib dan peraturan yang berlaku di perguruan tinggibdan negara.\r\n		', 'Minggu', '2017-12-24', '09:05:28', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftaranggota`
--
ALTER TABLE `daftaranggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftaranggota`
--
ALTER TABLE `daftaranggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
