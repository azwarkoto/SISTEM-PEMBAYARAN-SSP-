-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 04:41 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaransppsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'siswa', 'bcd724d15cde8c47650fda962968f102', 2),
(3, 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id_kepsek` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id_kepsek`, `username`, `password`) VALUES
(3, 'kepsek', '8561863b55faf85b9ad67c52b3b851ac');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nis_murid` varchar(12) NOT NULL,
  `tanggalbayar` date NOT NULL,
  `uangpangkal` int(100) NOT NULL,
  `ulanganumum` int(100) NOT NULL,
  `akhirtahun` int(100) NOT NULL,
  `sppbulanan` varchar(255) NOT NULL,
  `totalbayar` int(255) NOT NULL,
  `metode_transfer` varchar(50) NOT NULL,
  `nomor_rek` varchar(100) NOT NULL,
  `bukti_kwitansi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis_murid` varchar(12) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_murid` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `orangtua` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kelas` int(5) NOT NULL,
  `tahunajaran` int(255) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis_murid`, `password`, `nama_murid`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `orangtua`, `alamat`, `agama`, `kelas`, `tahunajaran`, `jurusan`) VALUES
('9980081815', '8d05dd2f03981f86b56c23951f3f34d7', 'ROBBY YANTO', 'JAKARTA', '1998-07-04', 'L', 'ACEP', 'DUREN SAWIT, JAKARTA TIMUR', 'Kristen', 10, 2015, 'IPA'),
('9980100658', '79ee82b17dfb837b1be94a6827fa395a', 'SRI EKA WIDDYANTI', 'JAKARTA', '1998-06-02', 'P', 'AHMAD SETYAWAN', 'CIPINANG, JAKARTA TIMUR', 'Islam', 10, 2015, 'IPA'),
('9981371561', '5720a0ca16880c34ef214a30514632c9', 'MUHAMMAD IKBAL F', 'TANGERANG', '1998-12-31', 'L', 'USMAN', 'DUREN SAWIT, JAKARTA TIMUR', 'Kristen', 10, 2014, 'IPA'),
('9985436669', 'f3385c508ce54d577fd205a1b2ecdfb7', '   DWI INDAH NINGTYAS', 'JAKARTA', '1999-04-01', 'P', 'ACHMAD SANUSI', 'DUREN SAWIT, JAKARTA TIMUR', 'Kristen', 10, 2014, 'IPA'),
('9986231674', '6403e55883a8a4abf62af4ef7cc85dc1', 'HEDWIG NOVENTUS S', 'JAKARTA', '1998-11-21', 'L', 'MANGAPUL SIMANJUNTAK', 'DUREN SAWIT, JAKARTA TIMUR', 'Budha', 10, 2014, 'IPA'),
('9986274699', '4df0ddd138f466f9a1fbb68cf2332e26', 'NOVIDA NUR JUNAIDI', 'JAKARTA', '1998-11-24', 'L', 'MOHAMMAD DJUNAEDI', 'JATINEGARA, JAKARTA TIMUR', 'Hindu', 10, 2015, 'IPA'),
('9987356021', '2c309021e3d4c0f9129d66e733825b48', 'GUSTI PANGESTU', 'CIREBON', '1998-08-08', 'L', 'FAJAR F', 'DUREN SAWIT, JAKARTA TIMUR', 'Budha', 10, 2014, 'IPA'),
('9990309686', 'e9b74cd3c4c1600ee591fd56360b89db', 'RAHMAN FADLI', 'JAKARTA', '1999-10-23', 'L', 'FADLISYAH', 'DUREN SAWIT, JAKARTA TIMUR', 'Budha', 10, 2015, 'IPA'),
('9990561032', '72561baf6079c338cc2dd68e98d52055', 'MUHAMMAD RIFQI A', 'JAKARTA', '1999-04-12', 'L', 'HARDIANSYAH', 'DUREN SAWIT, JAKARTA TIMUR', 'Islam', 10, 2014, 'IPA'),
('9993914403', '6f02ffd47640eb866355c2dec534c882', 'YUNNI AYU HERAWATI', 'LAMPUNG', '1999-06-25', 'P', 'MARJUNI', 'TOBALI, BANGKA SELATAN', 'Islam', 10, 2015, 'IPA'),
('9994126082', '783f1ef4f8ac72db8600d3ae2d3e25a7', 'RAHADYAN CHILDNANDY W', 'NGANJUK', '1999-03-21', 'L', 'TRISNO WIBOWO', 'DUREN SAWIT, JAKARTA TIMUR', 'Islam', 10, 2015, 'IPA'),
('9995914005', 'd42a9ad09e9778b177d409f5716ac621', 'RIA FEBI FRISTIAN', 'JAKARTA', '1999-02-21', 'P', 'RIVAI SYAHRUDIN', 'JATINEGARA, JAKARTA TIMUR', 'Hindu', 10, 2015, 'IPA'),
('9995915760', '9b0f4d720720fd55436ac7f07ac8a840', 'FARAH RAFIDA', 'JAKARTA', '1999-05-31', 'P', 'BAHRUL ILMI', 'JAKARTA TIMUR', 'Katolik', 10, 2014, 'IPA'),
('9996434897', '114148d50080f83b81f26ead2941b69f', 'SEKAR AMALIA PUTRI P', 'WONOGIRI', '1999-08-16', 'P', 'MULYADI', 'PULOGADUNG, JAKARTA TIMUR', 'Kong Hu Chu', 10, 2015, 'IPA'),
('9996453151', '29c65f781a1068a41f735e1b092546de', 'AYU PERMATASARI', 'JAKARTA', '1999-08-19', 'P', 'RAMIN', 'DUREN SAWIT, JAKARTA TIMUR', 'Kristen', 10, 2014, 'IPA'),
('9996453281', 'be89e250d8388c5e7ded2f1630e5daa4', 'FATHONI RICO HIDAYAT', 'JAKARTA', '1999-02-11', 'L', 'AGUS HIDAYAT', 'DUREN SAWIT, JAKARTA TIMUR', 'Kong Hu Chu', 10, 2014, 'IPA'),
('9996453623', 'b63d204bf086017e34d8bd27ab969f28', 'ILHAM AL -AKHYAR', 'JAKARTA', '1998-05-28', 'L', 'DASLIM', 'DUREN SAWIT, JAKARTA TIMUR', 'Katolik', 10, 2014, 'IPA'),
('9996455636', '49d8712dd6ac9c3745d53cd4be48284c', 'RIZKY AMELIA', 'JAKARTA', '1999-08-13', 'P', 'NURYADI', 'DUREN SAWIT, JAKARTA TIMUR', 'Budha', 10, 2015, 'IPA'),
('9996479347', 'cd3b9962a142df7e6cf9cded597d705e', 'JELANG PUTRA R', 'JAKARTA', '1999-11-26', 'L', 'IMAM SUGIARTO', 'DUREN SAWIT, JAKARTA TIMUR', 'Kristen', 10, 2014, 'IPA'),
('9996479587', '5c2bf15004e661d7b7c9394617143d07', 'ALFREDO GAMALAIL', 'JAKARTA', '1999-11-11', 'L', 'RIJELSON PASARIBU', 'CAKUNG, JAKARTA TIMUR', 'Islam', 10, 2014, 'IPA'),
('9996495471', '7a8ba4b565a96de88dbf44aa37e6f77e', 'M. GALANG ANDIKA Y', 'PEMALANG', '1999-06-30', 'L', 'SUYANTO', 'BEKASI BARAT', 'Hindu', 10, 2014, 'IPA'),
('9997677472', '715d4d35f471b816e254eb4f6da69bef', 'ISNAINI RISKA AMALIA', 'JAKARTA', '1999-11-07', 'P', 'MOHAMAD ZAINUDIN', 'DUREN SAWIT, JAKARTA TIMUR', 'Kong Hu Chu', 10, 2014, 'IPA'),
('9997677755', 'fe1a69f0ce9491fbe8bf373b62f099fe', 'RISMAWATI', 'JAKARTA', '1999-02-05', 'P', 'MUHAMMAD RIZAL', 'DUREN SAWIT, JAKARTA TIMUR', 'Katolik', 10, 2015, 'IPA'),
('9997677784', 'a2e8cea3392da09d1d31be3fca68efed', 'NADIA VIDYA PUTRI', 'JAKARTA', '1999-06-06', 'P', 'AHMAD JUPRI', 'DUREN SAWIT, JAKARTA TIMUR', 'Kong Hu Chu', 10, 2015, 'IPA'),
('9997693799', '709bfa738ef16be56d391ac0c367f056', 'YOEL YOSEPH RANSUN', 'JAKARTA', '1997-09-29', 'L', 'BERNARD OSKAR YUNIUS RANSEN', 'PULOGADUNG, JAKARTA TIMUR', 'Katolik', 10, 2015, 'IPA'),
('9997755902', 'efa608460240e17f20ca89572c6bf13f', 'MELINIA NUR HIDAYAH', 'GROBOGAN', '1999-12-24', 'P', 'WARSITO', 'DUREN SAWIT, JAKARTA TIMUR', 'Islam', 10, 2014, 'IPA'),
('9998398378', 'd9ec7a2bcb5f792f101501f700977ec7', 'DYAH AULIA RATRI', 'JAKARTA', '2000-02-16', 'P', 'SURATNO', 'DUREN SAWIT, JAKARTA TIMUR', 'Hindu', 10, 2014, 'IPA'),
('9998433184', '35cd2d0d62d9bc5e60a3ca9f7593b05b', 'RAFA HANIFA', 'JAKARTA', '1999-09-30', 'P', 'SUWIGNYO', 'CIPINANG, JAKARTA TIMUR', 'Budha', 10, 2015, 'IPA'),
('9999846807', '526e34d04735124f05a090181f3e6e8a', 'RAJA REYHAN JAFAR', 'SURAKARTA', '2000-04-26', 'L', 'YOHANES FEISAL SJAHJOHAN', 'DUREN SAWIT, JAKARTA TIMUR', 'Islam', 10, 2015, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `surat_teguran_pembayaran`
--

CREATE TABLE `surat_teguran_pembayaran` (
  `id_surat` int(5) NOT NULL,
  `nis_murid` varchar(12) NOT NULL,
  `nama_murid` varchar(100) NOT NULL,
  `kelas` int(5) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `isisurat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id_kepsek`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`) USING BTREE,
  ADD KEY `nis_murid` (`nis_murid`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis_murid`);

--
-- Indexes for table `surat_teguran_pembayaran`
--
ALTER TABLE `surat_teguran_pembayaran`
  ADD PRIMARY KEY (`id_surat`,`nis_murid`) USING BTREE,
  ADD UNIQUE KEY `nis_murid` (`nis_murid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_teguran_pembayaran`
--
ALTER TABLE `surat_teguran_pembayaran`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`nis_murid`) REFERENCES `siswa` (`nis_murid`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
