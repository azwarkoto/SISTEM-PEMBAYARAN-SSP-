-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2018 pada 11.34
-- Versi Server: 10.1.25-MariaDB
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
-- Database: `ta_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `gol_drh` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL,
  `pendidikan_ortu` varchar(50) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `no_ijazah` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jkel`, `gol_drh`, `alamat`, `telepon`, `agama`, `warga_negara`, `ayah`, `ibu`, `alamat_ortu`, `pekerjaan_ortu`, `pendidikan_ortu`, `nisn`, `no_ijazah`, `foto`, `tgl_daftar`, `status`) VALUES
('19001', 'Alfredo', 'Jakarta', '1999-11-11', 'L', 'A', 'JL. KP JEMBATAN RT. 04 RW. 12', '0895349221830', 'Islam', 'WNI', 'Pasaribu', 'Ayu', 'JL. KP JEMBATAN RT. 04 RW. 12', 'Karyawan Swasta', 'SMA', '9996479587', 'DN-62895349221830', '11052018161517ijazah.jpg', '2018-05-01', NULL),
('19002', 'Dwi Indah', 'Jakarta', '1999-04-01', 'P', 'O', 'JL. KRT RADJIMAN ', '0895349221830', 'Hindu', 'WNI', 'Achmad', 'Puspita', 'JL. KRT RADJIMAN ', 'Wiraswasta', 'SD', '9985436669', 'DN-62895349221830', '11052018162107Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-01', NULL),
('19003', 'Dyah Aulia', 'Jakarta', '2000-02-16', 'P', 'B', 'JL. Mawar Merah IV Gg NO. 126', '0895349221830', 'Islam', 'WNI', 'Suryanto', 'Sekar', 'JL. Mawar Merah IV Gg NO. 126', 'Pns', 'S1', '0008398378', 'DN-62895349221830', '11052018162541Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-01', NULL),
('19004', 'Hedwig', 'Jakarta', '1998-11-21', 'L', 'AB', 'JL. KAPUK II ', '0895349221830', 'Budha', 'WNI', 'Daslim', 'Nuraisyah', 'JL. KP. SUMUR NO. 114', 'Karyawan Swasta', 'D3', '9986231674', 'DN-895349221830', '11052018162948ijazah.jpg', '2018-05-01', NULL),
('19005', 'Ilham', 'Jakarta', '1998-05-28', 'L', 'A', 'JL. KP. SUMUR NO. 114', '0895349221830', 'Budha', 'WNI', 'Mangapul', 'Wulandari', 'JL. KP. SUMUR NO. 114', 'polisi', 'S1', '9996453623', 'DN-62895349221830', '11052018163452ijazah.jpg', '2018-05-02', NULL),
('19006', 'Isnaini', 'Jakarta', '1998-05-28', 'P', 'O', 'JL. NUSA INDAH VI ', '0895349221830', 'Islam', 'WNI', 'Mohamad', 'wulandari', 'JL. NUSA INDAH VI ', 'Tentara', 'S1', '9997677472', 'DN-895349221830', '11052018163843Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-02', NULL),
('19007', 'Jelang', 'Jakarta', '1999-11-07', 'L', 'B', 'JL. DELIMA II ', '0895349221830', 'Islam', 'WNI', 'Imam', 'Sylviana', 'JL. DELIMA II ', 'Pns', 'S2', '9996479347', 'DN-62895349221830', '11052018164251ijazah.jpg', '2018-05-02', NULL),
('19008', 'Melinia', 'Grobongan', '1999-11-20', 'P', 'O', 'JL. KP. SUMUR', '0895349221830', 'Hindu', 'WNI', 'Warsito', 'Murni', 'JL. KP. SUMUR', 'Wiraswasta', 'SMA', '9997755902', 'DN-62895349221830', '11052018164808ijazah.jpg', '2018-05-02', NULL),
('19009', 'Muhamad', 'Tangerang', '1998-12-03', 'L', 'O', 'Usman', '0895349221830', 'Islam', 'WNI', 'Usman', 'Dyah', 'JL. DUREN SAWIT ', 'Wiraswasta', 'SMP', '9981371561', 'DN-62895349221830', '11052018165306ijazah.jpg', '2018-05-02', NULL),
('19010', 'Rifqi', 'Jakarta', '1999-04-12', 'L', 'A', 'Jl.Rawa Adas', '0895349221830', 'Islam', 'WNI', 'Hardiansyah', 'Caca', 'Jl.Rawa Adas', 'polisi', 'SMA', '9990561032', 'DN-62895349221830', '11052018170116ijazah.jpg', '2018-05-02', NULL),
('19011', 'Novida', 'Jakarta', '1998-11-24', 'P', 'O', 'JL. Bekasi Timur IV ', '0895349221830', 'Islam', 'WNI', 'Djunaidi', 'Sri', 'JL. Bekasi Timur IV ', 'Pns', 'S1', '9986274699', 'DN-62895349221830', '11052018170659Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-03', NULL),
('19012', 'Rahman', 'Jakarta', '1999-10-23', 'L', 'A', 'JL. Teratai Putih I', '0895349221830', 'Islam', 'WNI', 'Fadliansyah', 'Putri', 'JL. Teratai Putih I', 'Wiraswasta', 'SMP', '9990309686', 'DN-62895349221830', '11052018171321ijazah.jpg', '2018-05-03', NULL),
('19013', 'Ria', 'Jakarta', '1999-01-21', 'P', 'B', 'JL. Cipinang', '0895349221830', 'Katolik', 'WNI', 'Rivai', 'Siska', 'JL. Cipinang', 'Wiraswasta', 'SD', '9995914005', 'DN-62895349221830', '11052018171738Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-04', NULL),
('19014', 'Rismawati', 'Jakarta', '1999-02-21', 'P', 'O', 'JL. Rawa Adas', '0895349221830', 'Islam', 'WNI', 'Rizal', 'Arti', 'JL. Rawa Adas', 'Karyawan Swasta', 'S1', '9997677755', 'DN-62895349221830', '11052018172618Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-04', NULL),
('19015', 'Amelia', 'Jakarta', '1999-08-13', 'P', 'O', 'JL. Igusti Nguhrahrai', '0895349221830', 'Islam', 'WNI', 'Nuryadi', 'dwi', 'JL. Igusti Nguhrahrai', 'Pns', 'S2', '9996455636', 'DN-62895349221830', '11052018173102Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-04', NULL),
('19016', 'Robby', 'Jakarta', '1998-07-04', 'L', 'O', 'JL. KP. Bulak', '0895349221830', 'Islam', 'WNI', 'Acep', 'karina', 'JL. KP. Bulak', 'Wiraswasta', 'SMP', '9980081815', 'DN-62895349221830', '11052018173549ijazah.jpg', '2018-05-05', NULL),
('19017', 'Yoel', 'Jakarta', '1997-09-02', 'L', 'A', 'JL. Cipinang Jaga', '0895349221830', 'Budha', 'WNI', 'Bernaro', 'lala', 'JL. Cipinang Jaga', 'Wiraswasta', 'SMP', '9997693799', 'DN-62895349221830', '11052018174516ijazah.jpg', '2018-05-05', NULL),
('19018', 'Permatasari', 'Jakarta', '1999-08-19', 'P', 'O', 'JL. Madrasyah II ', '0895349221830', 'Islam', 'WNI', 'Rahmat', 'Ramin', 'JL. Madrasyah II ', 'Tentara', 'D3', '9996453151', 'DN-62895349221830', '11052018175551Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-05', NULL),
('19019', 'Farah', 'Jakarta', '1999-05-31', 'P', 'AB', 'JL. Prumpung Tenggah', '0895349221830', 'Katolik', 'WNI', 'Bahrul', 'Safitri', 'JL. Prumpung Tenggah', 'Wiraswasta', 'SMP', '9995915760', 'DN-62895349221830', '12052018161757Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-05', NULL),
('19020', 'Fathoni', 'Jakarta', '1999-02-11', 'L', 'A', 'JL. Pertanian Tenggah', '0895349221830', 'Hindu', 'WNI', 'Agus', 'Ratna', 'JL. Pertanian Tenggah', 'Karyawan Swasta', 'S2', '9996453281', 'DN-62895349221830', '12052018162505ijazah.jpg', '2018-05-05', NULL),
('19021', 'Gusti', 'Cirebon', '1998-08-18', 'L', 'O', 'JL. Swadaya Raya', '0895349221830', 'Islam', 'WNI', 'FAJAR ', 'Jasmani', 'JL. Swadaya Raya', 'Wiraswasta', 'SD', '998735602', 'DN-62895349221830', '12052018163027ijazah.jpg', '2018-05-06', NULL),
('19022', 'Yogantara', 'Palembang', '1999-06-30', 'L', 'AB', 'JL.Bintara', '0895349221830', 'Islam', 'WNI', 'suyanto', 'Nursanah', 'JL.Bintara', 'Pns', 'S2', '9996495471', 'DN-62895349221830', '12052018163448ijazah.jpg', '2018-05-06', NULL),
('19023', 'Nadia', 'Jakarta', '1999-01-06', 'P', 'O', 'JL. H. Ahyar', '0895349221830', 'Budha', 'WNI', 'Jupri', 'Amina', 'JL. H. Ahyar', 'Tentara', 'D3', '9997677784', 'DN-62895349221830', '12052018164000Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-06', NULL),
('19024', 'Rafa', 'Pemalang', '1999-09-30', 'P', 'AB', 'JL. Asrama Polri', '0895349221830', 'Islam', 'WNI', 'Wibowo', 'Rani', 'JL. Asrama Polri', 'Petani', 'SD', '9994126082', 'DN-62895349221830', '12052018164358Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-06', NULL),
('19025', 'Rahadyan', 'jakarta', '1999-03-21', 'L', 'O', 'JL. Bangun Jaya', '0895349221830', 'Budha', 'WNI', 'Trisno', 'Mutiara', 'JL. Bangun Jaya', 'Karyawan Swasta', 'S1', '9994126082', 'DN-62895349221830', '12052018165351ijazah.jpg', '2018-05-06', NULL),
('19026', 'Sekar', 'Wonogiri', '1998-01-02', 'P', 'AB', 'JL. Cipinang Empang ', '0895349221830', 'Islam', 'WNI', 'Setyawan', 'Lestari', 'JL. Cipinang Empang ', 'Karyawan Swasta', 'S2', '9994126082', 'DN-62895349221830', '12052018170359Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-06', NULL),
('19027', 'Sri Eka ', 'Nganjuk', '1999-08-16', 'P', 'O', 'JL. Bekasi Km 18 ', '0895349221830', 'Protesta', 'WNA', 'Mulyadi', 'Cahyani', 'JL. Bekasi Km 18 ', 'Karyawan Swasta', 'D3', '9994126082', 'DN-62895349221830', '12052018170848Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-07', NULL),
('19028', 'Ronal ', 'Kebumen', '1999-05-28', 'L', 'B', 'JL. Bekasi Km 18', '0895349221830', 'Islam', 'WNA', 'Joko', 'Yani', 'JL. Bekasi Km 18', 'Karyawan Swasta', 'S1', '9994126082', 'DN-62895349221830', '12052018172536ijazah.jpg', '2018-05-07', NULL),
('19029', 'Raja', 'surakarta', '1999-01-25', 'L', 'AB', 'JL. Gang Sadar Taboli ', '0895349221830', 'Hindu', 'WNA', 'Faisal', 'Tiana', 'JL. Gang Sadar Taboli ', 'Wiraswasta', 'SMP', '9994126082', 'DN-62895349221830', '12052018172344ijazah.jpg', '2018-05-07', NULL),
('19030', 'Herwati', 'Malang', '1999-12-30', 'P', 'A', 'Jl.Kayu Putih', '0895349221830', 'Hindu', 'WNI', 'Sampir', 'Lesti', 'Jl.Kayu Putih', 'Wiraswasta', 'SMA', '9981371562', 'DN-62895349221830', '12052018173117Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-07', NULL),
('19031', 'Azwar Anas Gusti', 'Jakarta', '1996-10-30', 'L', 'A', 'Pulogadung', '0895349221830', 'Islam', 'WNI', 'cahyono', 'aa', 'pulogadung', 'aaa', 'S2', '9994126082', 'DN-628953492218', '22052018084211baru.jpg', '2018-05-22', NULL),
('19032', 'Arif', 'Jakarta', '1996-11-26', 'L', 'O', 'Jl. Otista Raya GG Saabun no.11', '0895349221830', 'Islam', 'WNI', 'Erwanto', 'Mardiana', 'Jl. Otista Raya GG Saabun no.11', 'Karyawan Swasta', 'SMA', '0895349221', 'DN-08/DI0895349', '0206201822164111052018160158ijazah.jpg', '2018-06-02', 0),
('19033', 'Arif', 'Jakarta', '1996-11-26', 'L', 'O', 'Jl. Otista Raya GG Saabun no.11', '0895349221830', 'Islam', 'WNI', 'Erwanto', 'Mardiana', 'Jl. Otista Raya GG Saabun no.11', 'Karyawan Swasta', 'SMA', '1234567890', 'DN-26/DI-261196', '0306201800534011052018162107Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-06-03', 0),
('19034', 'Arif', 'Jakarta', '1996-11-26', 'L', 'O', 'Jl. Otista Raya GG Saabun no 11', '0895349221830', 'Islam', 'WNI', 'Erwanto', 'Mardiana', 'Jl. Otista Raya GG Saabun no 11', 'Karyawan Swasta', 'SMA', '1234567890', 'DN-26/DI-261196', '0306201801161111052018164808ijazah.jpg', '2018-06-03', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_psb` varchar(6) NOT NULL,
  `nis` int(5) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `bukti` varchar(200) NOT NULL,
  `status_pembayaran` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`no_psb`, `nis`, `atas_nama`, `tgl_bayar`, `nominal`, `bukti`, `status_pembayaran`) VALUES
('000001', 19001, 'Pasaribuu', '2018-05-01', '450000', '12052018183102gambar-kwitansi-kosong.jpg', 0),
('000002', 19002, 'Achamd', '2018-05-01', '450000', '12052018174610gambar-kwitansi-kosong.jpg', 0),
('000003', 19003, 'Suryanto', '2018-05-01', '450000', '12052018175000gambar-kwitansi-kosong.jpg', 0),
('000004', 19004, 'Daslim', '2018-05-01', '450000', '12052018175133gambar-kwitansi-kosong.jpg', 0),
('000005', 19005, 'Mangapul', '2018-05-01', '450000', '13052018183830gambar-kwitansi-kosong.jpg', 0),
('000006', 19006, 'Mohamad', '2018-05-02', '450000', '13052018184022gambar-kwitansi-kosong.jpg', 0),
('000007', 19007, 'Imam', '2018-05-02', '450000', '12052018175416gambar-kwitansi-kosong.jpg', 0),
('000008', 19008, 'Warsito', '2018-05-02', '450000', '12052018175504gambar-kwitansi-kosong.jpg', 0),
('000009', 19009, 'Usman', '2018-05-02', '450000', '12052018175548gambar-kwitansi-kosong.jpg', 0),
('000010', 19010, 'Hardiansyah', '2018-05-02', '450000', '12052018175626gambar-kwitansi-kosong.jpg', 0),
('000011', 19011, 'djunaidi', '2018-05-03', '450000', '12052018175742gambar-kwitansi-kosong.jpg', 0),
('000012', 19012, 'Fadlisyah', '2018-05-03', '450000', '12052018175833gambar-kwitansi-kosong.jpg', 0),
('000013', 19013, 'ade suryanto', '2018-05-03', '450000', '17052018082714aa.jpg', 0),
('000014', 19014, 'Erwanto', '2018-05-03', '450000', '1905201806010911052018153252gambar-kwitansi-kosong.jpg', 0),
('000015', 19015, 'Erwanto', '2018-05-03', '450000', '2005201809240811052018153307gambar-kwitansi-kosong.jpg', 0),
('000016', 19016, 'Erwanto', '2018-05-04', '450000', '2005201809243611052018153307gambar-kwitansi-kosong.jpg', 0),
('000017', 19017, 'Erwanto', '2018-05-04', '450000', '2005201815542811052018153307gambar-kwitansi-kosong.jpg', 0),
('000018', 19018, 'Erwanto', '2018-05-04', '450000', '21052018174447gambar-kwitansi-kosong.jpg', 0),
('000019', 19019, 'Erwanto', '2018-05-04', '450000', '21052018174531gambar-kwitansi-kosong.jpg', 0),
('000020', 19020, 'Erwanto', '2018-05-04', '450000', '21052018174609gambar-kwitansi-kosong.jpg', 0),
('000021', 19021, 'Erwanto', '2018-05-05', '450000', '21052018174651gambar-kwitansi-kosong.jpg', 0),
('000022', 19022, 'Erwanto', '2018-05-05', '450000', '21052018174723gambar-kwitansi-kosong.jpg', 0),
('000023', 19023, 'Erwanto', '2018-05-05', '450000', '21052018174759gambar-kwitansi-kosong.jpg', 0),
('000024', 19024, 'Erwanto', '2018-05-05', '450000', '21052018174831gambar-kwitansi-kosong.jpg', 0),
('000025', 19025, 'Erwanto', '2018-05-05', '450000', '21052018174905gambar-kwitansi-kosong.jpg', 0),
('000026', 19026, 'Erwanto', '2018-05-06', '450000', '21052018175000gambar-kwitansi-kosong.jpg', 0),
('000027', 19027, 'Erwanto', '2018-05-06', '450000', '21052018175031gambar-kwitansi-kosong.jpg', 0),
('000028', 19028, 'Erwanto', '2018-05-06', '450000', '21052018175106gambar-kwitansi-kosong.jpg', 0),
('000029', 19029, 'Erwanto', '2018-05-06', '450000', '21052018175135gambar-kwitansi-kosong.jpg', 0),
('000030', 19030, 'Erwanto', '2018-05-06', '450000', '21052018175207gambar-kwitansi-kosong.jpg', 0),
('000031', 19031, 'Erwanto', '2018-05-26', '450000', '2605201815071712052018174030gambar-kwitansi-kosong.jpg', 0),
('000032', 19032, 'Erwanto', '2018-06-02', '450000', '0206201822383212052018174102gambar-kwitansi-kosong.jpg', 0),
('000033', 19033, 'Erwanto', '2018-06-02', '450000', '0206201822392412052018174102gambar-kwitansi-kosong.jpg', 0),
('000034', 19034, 'Erwanto', '2018-06-03', '450000', '0306201801004312052018174030gambar-kwitansi-kosong.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_psb` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `gol_drh` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL,
  `pendidikan_ortu` varchar(50) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `no_ijazah` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_psb`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jkel`, `gol_drh`, `alamat`, `telepon`, `agama`, `warga_negara`, `ayah`, `ibu`, `alamat_ortu`, `pekerjaan_ortu`, `pendidikan_ortu`, `nisn`, `no_ijazah`, `foto`, `tgl_daftar`, `status`) VALUES
('000001', '19001', 'Alfredo', 'Jakarta', '1999-11-11', 'L', 'A', 'JL. KP JEMBATAN RT. 04 RW. 12', '0895349221830', 'Islam', 'WNI', 'Pasaribu', 'Ayu', 'JL. KP JEMBATAN RT. 04 RW. 12', 'Karyawan Swasta', 'SMA', '9996479587', 'DN-62895349221830', '11052018161517ijazah.jpg', '2018-05-01 20:44:25', 0),
('000002', '19002', 'Dwi Indah', 'Jakarta', '1999-04-01', 'P', 'O', 'JL. KRT RADJIMAN ', '0895349221830', 'Hindu', 'WNI', 'Achmad', 'Puspita', 'JL. KRT RADJIMAN ', 'Wiraswasta', 'SD', '9985436669', 'DN-62895349221830', '11052018162107Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-01 20:44:25', 0),
('000003', '19003', 'Dyah Aulia', 'Jakarta', '2000-02-16', 'P', 'B', 'JL. Mawar Merah IV Gg NO. 126', '0895349221830', 'Islam', 'WNI', 'Suryanto', 'Sekar', 'JL. Mawar Merah IV Gg NO. 126', 'Pns', 'S1', '0008398378', 'DN-62895349221830', '11052018162541Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-01 20:44:25', 0),
('000004', '19004', 'Hedwig', 'Jakarta', '1998-11-21', 'L', 'AB', 'JL. KAPUK II ', '0895349221830', 'Budha', 'WNI', 'Daslim', 'Nuraisyah', 'JL. KP. SUMUR NO. 114', 'Karyawan Swasta', 'D3', '9986231674', 'DN-895349221830', '11052018162948ijazah.jpg', '2018-05-01 20:44:25', 0),
('000005', '19005', 'Ilham', 'Jakarta', '1998-05-28', 'L', '-', 'JL. KP. SUMUR NO. 114', '0895349221830', 'Budha', 'WNA', 'Mangapul', 'Wulandari', 'JL. KP. SUMUR NO. 114', 'polisi', 'S1', '9996453623', 'DN-62895349221830', '11052018163452ijazah.jpg', '2018-05-01 20:44:25', 0),
('000006', '19006', 'Isnaini', 'Jakarta', '1998-05-28', 'P', 'O', 'JL. NUSA INDAH VI ', '0895349221830', 'Islam', 'WNI', 'Mohamad', 'wulandari', 'JL. NUSA INDAH VI ', 'Tentara', 'S1', '9997677472', 'DN-895349221830', '11052018163843Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-02 20:44:25', 0),
('000007', '19007', 'Jelang', 'Jakarta', '1999-11-07', 'L', 'B', 'JL. DELIMA II ', '0895349221830', 'Islam', 'WNI', 'Imam', 'Sylviana', 'JL. DELIMA II ', 'Pns', 'S2', '9996479347', 'DN-62895349221830', '11052018164251ijazah.jpg', '2018-05-02 20:44:25', 0),
('000008', '19008', 'Melinia', 'Grobongan', '1999-11-20', 'P', 'O', 'JL. KP. SUMUR', '0895349221830', 'Hindu', 'WNI', 'Warsito', 'Murni', 'JL. KP. SUMUR', 'Wiraswasta', 'SMA', '9997755902', 'DN-62895349221830', '11052018164808ijazah.jpg', '2018-05-02 20:44:25', 0),
('000009', '19009', 'Muhamad', 'Tangerang', '1998-12-03', 'L', 'O', 'Usman', '0895349221830', 'Islam', 'WNI', 'Usman', 'Dyah', 'JL. DUREN SAWIT ', 'Wiraswasta', 'SMP', '9981371561', 'DN-62895349221830', '11052018165306ijazah.jpg', '2018-05-02 20:44:25', 0),
('000010', '19010', 'Rifqi', 'Jakarta', '1999-04-12', 'L', 'A', 'Jl.Rawa Adas', '0895349221830', 'Islam', 'WNI', 'Hardiansyah', 'Caca', 'Jl.Rawa Adas', 'polisi', 'SMA', '9990561032', 'DN-62895349221830', '11052018170116ijazah.jpg', '2018-05-02 20:44:25', 0),
('000011', '19011', 'Novida', 'Jakarta', '1998-11-24', 'P', 'O', 'JL. Bekasi Timur IV ', '0895349221830', 'Islam', 'WNI', 'Djunaidi', 'Sri', 'JL. Bekasi Timur IV ', 'Pns', 'S1', '9986274699', 'DN-62895349221830', '11052018170659Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-03 20:44:25', 0),
('000012', '19012', 'Rahman', 'Jakarta', '1999-10-23', 'L', 'A', 'JL. Teratai Putih I', '', 'Islam', 'WNI', 'Fadliansyah', 'Putri', 'JL. Teratai Putih I', 'Wiraswasta', 'SMP', '9990309686', 'DN-62895349221830', '11052018171321ijazah.jpg', '2018-05-03 20:44:25', 0),
('000013', '19013', 'Ria', 'Jakarta', '1999-01-21', 'P', 'B', 'JL. Cipinang', '0895349221830', 'Katolik', 'WNI', 'Rivai', 'Siska', 'JL. Cipinang', 'Wiraswasta', 'SD', '9995914005', 'DN-62895349221830', '11052018171738Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-03 20:44:25', 0),
('000014', '19014', 'Rismawati', 'Jakarta', '1999-02-21', 'P', 'O', 'JL. Rawa Adas', '0895349221830', 'Islam', 'WNI', 'Rizal', 'Arti', 'JL. Rawa Adas', 'Karyawan Swasta', 'S1', '9997677755', 'DN-62895349221830', '11052018172618Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-03 20:44:25', 0),
('000015', '19015', 'Amelia', 'Jakarta', '1999-08-13', 'P', 'O', 'JL. Igusti Nguhrahrai', '0895349221830', 'Islam', 'WNI', 'Nuryadi', 'dwi', 'JL. Igusti Nguhrahrai', 'Pns', 'S2', '9996455636', 'DN-62895349221830', '11052018173102Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-03 20:44:25', 0),
('000016', '19016', 'Robby', 'Jakarta', '1998-07-04', 'L', 'O', 'JL. KP. Bulak', '0895349221830', 'Islam', 'WNI', 'Acep', 'karina', 'JL. KP. Bulak', 'Wiraswasta', 'SMP', '9980081815', 'DN-62895349221830', '11052018173549ijazah.jpg', '2018-05-04 20:44:25', 0),
('000017', '19017', 'Yoel', 'Jakarta', '1997-09-02', 'L', 'A', 'JL. Cipinang Jaga', '0895349221830', 'Budha', 'WNI', 'Bernaro', 'lala', 'JL. Cipinang Jaga', 'Wiraswasta', 'SMP', '9997693799', 'DN-62895349221830', '11052018174516ijazah.jpg', '2018-05-04 20:44:25', 0),
('000018', '19018', 'Permatasari', 'Jakarta', '1999-08-19', 'P', 'O', 'JL. Madrasyah II ', '0895349221830', 'Islam', 'WNI', 'Rahmat', 'Ramin', 'JL. Madrasyah II ', 'Tentara', 'D3', '9996453151', 'DN-62895349221830', '11052018175551Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-04 20:44:25', 0),
('000019', '19019', 'Farah', 'Jakarta', '1999-05-31', 'P', 'AB', 'JL. Prumpung Tenggah', '0895349221830', 'Katolik', 'WNI', 'Bahrul', 'Safitri', 'JL. Prumpung Tenggah', 'Wiraswasta', 'SMP', '9995915760', 'DN-62895349221830', '12052018161757Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-04 20:44:25', 0),
('000020', '19020', 'Fathoni', 'Jakarta', '1999-02-11', 'L', 'A', 'JL. Pertanian Tenggah', '0895349221830', 'Hindu', 'WNI', 'Agus', 'Ratna', 'JL. Pertanian Tenggah', 'Karyawan Swasta', 'S2', '9996453281', 'DN-62895349221830', '12052018162505ijazah.jpg', '2018-05-04 20:44:25', 0),
('000021', '19021', 'Gusti', 'Cirebon', '1998-08-18', 'L', 'O', 'JL. Swadaya Raya', '0895349221830', 'Islam', 'WNI', 'FAJAR ', 'Jasmani', 'JL. Swadaya Raya', 'Wiraswasta', 'SD', '998735602', 'DN-62895349221830', '12052018163027ijazah.jpg', '2018-05-05 20:44:25', 0),
('000022', '19022', 'Yogantara', 'Palembang', '1999-06-30', 'L', 'AB', 'JL.Bintara', '0895349221830', 'Islam', 'WNI', 'suyanto', 'Nursanah', 'JL.Bintara', 'Pns', 'S2', '9996495471', 'DN-62895349221830', '12052018163448ijazah.jpg', '2018-05-05 20:44:25', 0),
('000023', '19023', 'Nadia', 'Jakarta', '1999-01-06', 'P', 'O', 'JL. H. Ahyar', '0895349221830', 'Budha', 'WNI', 'Jupri', 'Amina', 'JL. H. Ahyar', 'Tentara', 'D3', '9997677784', 'DN-62895349221830', '12052018164000Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-05 20:44:25', 0),
('000024', '19024', 'Rafa', 'Pemalang', '1999-09-30', 'P', 'AB', 'JL. Asrama Polri', '0895349221830', 'Islam', 'WNI', 'Wibowo', 'Rani', 'JL. Asrama Polri', 'Petani', 'SD', '9994126082', 'DN-62895349221830', '12052018164358Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-05 20:44:25', 0),
('000025', '19025', 'Rahadyan', 'Bengkulu', '1999-03-21', 'L', 'O', 'JL. Bangun Jaya', '0895349221830', 'Budha', 'WNI', 'Trisno', 'Mutiara', 'JL. Bangun Jaya', 'Karyawan Swasta', 'S1', '9994126082', 'DN-62895349221830', '12052018165351ijazah.jpg', '2018-05-05 20:44:25', 0),
('000026', '19026', 'Sekar', 'Wonogiri', '1998-01-02', 'P', 'AB', 'JL. Cipinang Empang ', '0895349221830', 'Islam', 'WNI', 'Setyawan', 'Lestari', 'JL. Cipinang Empang ', 'Karyawan Swasta', 'S2', '9994126082', 'DN-62895349221830', '12052018170359Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-06 20:44:25', 0),
('000027', '19027', 'Sri Eka ', 'Nganjuk', '1999-08-16', 'P', 'O', 'JL. Bekasi Km 18 ', '0895349221830', 'Protesta', 'WNA', 'Mulyadi', 'Cahyani', 'JL. Bekasi Km 18 ', 'Karyawan Swasta', 'D3', '9994126082', 'DN-62895349221830', '12052018170848Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-06 20:44:25', 0),
('000028', '19028', 'Ronal ', 'Kebumen', '1999-05-28', 'L', 'B', 'JL. Bekasi Km 18', '0895349221830', 'Islam', 'WNA', 'Joko', 'Yani', 'JL. Bekasi Km 18', 'Karyawan Swasta', 'S1', '9994126082', 'DN-62895349221830', '12052018172536ijazah.jpg', '2018-05-06 20:44:25', 0),
('000029', '19029', 'Raja', 'surakarta', '1999-01-25', 'L', 'AB', 'JL. Gang Sadar Taboli ', '0895349221830', 'Hindu', 'WNA', 'Faisal', 'Tiana', 'JL. Gang Sadar Taboli ', 'Wiraswasta', 'SMP', '9994126082', 'DN-62895349221830', '12052018172344ijazah.jpg', '2018-05-06 20:44:25', 0),
('000030', '19030', 'Herwati', 'Malang', '1999-12-30', 'P', 'A', 'Jl.Kayu Putih', '0895349221830', 'Hindu', 'WNI', 'Sampir', 'Lesti', 'Jl.Kayu Putih', 'Wiraswasta', 'SMA', '9981371562', 'DN-62895349221830', '12052018173117Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-05-06 20:44:25', 0),
('000031', '19031', 'Azwar Anas Gusti', 'Jakarta', '1996-10-30', 'L', 'A', 'Pulogadung', '0895349221830', 'Islam', 'WNI', 'cahyono', 'aa', 'pulogadung', 'aaa', 'S2', '9994126082', 'DN-628953492218', '22052018084211baru.jpg', '2018-05-22 13:41:00', 0),
('000032', '19032', 'Arif', 'Jakarta', '1996-11-26', 'L', 'O', 'Jl. Otista Raya GG Saabun no.11', '0895349221830', 'Islam', 'WNI', 'Erwanto', 'Mardiana', 'Jl. Otista Raya GG Saabun no.11', 'Karyawan Swasta', 'SMA', '0895349221', 'DN-08/DI0895349', '0206201822164111052018160158ijazah.jpg', '2018-06-02 22:11:04', 0),
('000033', '19033', 'Arif', 'Jakarta', '1996-11-26', 'L', 'O', 'Jl. Otista Raya GG Saabun no.11', '0895349221830', 'Islam', 'WNI', 'Erwanto', 'Mardiana', 'Jl. Otista Raya GG Saabun no.11', 'Karyawan Swasta', 'SMA', '1234567890', 'DN-26/DI-261196', '0306201800534011052018162107Ijazah-Jenice-Ailsa-Gunawan.jpg', '2018-06-03 00:00:00', 0),
('000034', '19034', 'Arif', 'Jakarta', '1996-11-26', 'L', 'O', 'Jl. Otista Raya GG Saabun no 11', '0895349221830', 'Islam', 'WNI', 'Erwanto', 'Mardiana', 'Jl. Otista Raya GG Saabun no 11', 'Karyawan Swasta', 'SMA', '1234567890', 'DN-26/DI-261196', '0306201801161111052018164808ijazah.jpg', '2018-06-03 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_psb`,`nis`) USING BTREE;

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_psb`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
