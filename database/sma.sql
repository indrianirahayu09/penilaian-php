-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2020 pada 03.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi_siswa`
--

CREATE TABLE `absensi_siswa` (
  `id_absensi_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `alpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `email`, `password`, `jk`, `telepon`, `foto`, `alamat`) VALUES
(1, 'Aris Abdul Ajis', 'aris', 'arisabdulajis027@gmail.com', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', 'Laki-Laki', '08981189598', '', 'Jl. Sekumpul No. 49 RT/RW 002/001 Kec. Martapura Kab. Banjar Kalimantan Selatan'),
(2, 'Indriani', 'admin2', 'depanmu9@gmail.com', '1122', 'Perempuan', '', '', 'sleman, yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rapot`
--

CREATE TABLE `data_rapot` (
  `id_data_rapot` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `deskripsi_sikap` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_ktr`
--

CREATE TABLE `deskripsi_ktr` (
  `id_deskripsi_ktr` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `predikat` varchar(1) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_ktr`
--

INSERT INTO `deskripsi_ktr` (`id_deskripsi_ktr`, `id_mapel`, `predikat`, `deskripsi`) VALUES
(1, 1, 'A', 'Terampil menghafal alqur\'an surat al anfal:72, al hujurat: 12 dan 10, al isra: 32 dan an nur:2 dengan sangat baik'),
(2, 1, 'B', 'Terampil menghafal alqur\'an surat al anfal:72, al hujurat: 12 dan 10, al isra: 32 dan an nur:2 dengan baik'),
(3, 1, 'C', 'Terampil menghafal alqur\'an surat al anfal:72, al hujurat: 12 dan 10, al isra: 32 dan an nur:2 dengan cukup baik'),
(4, 2, 'A', 'Terampil menyajikan hasil diskusi tentang fungsi dan kewenangan lembaga-lembaga negara menurut UUD 1945 sesuai dengan pembelajaran dengan sangat  baik'),
(5, 2, 'B', 'Terampil menyajikan hasil diskusi tentang fungsi dan kewenangan lembaga-lembaga negara menurut UUD 1945 sesuai dengan pembelajaran dengan baik'),
(6, 2, 'C', 'Terampil menyajikan hasil diskusi tentang fungsi dan kewenangan lembaga-lembaga negara menurut UUD 1945 sesuai dengan pembelajaran dengan cukup baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_pth`
--

CREATE TABLE `deskripsi_pth` (
  `id_deskripsi_pth` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `predikat` varchar(1) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_pth`
--

INSERT INTO `deskripsi_pth` (`id_deskripsi_pth`, `id_mapel`, `predikat`, `deskripsi`) VALUES
(1, 1, 'A', 'Mampu memahami al qur\'an dan hadits yang berkaitan dengan mujahadah an nafs, husnudzhan, ukhuwah, zina, asmaul husna, malaikat,berpakaian menurut syariat islam dan jujur dengan sangat baik'),
(2, 1, 'B', 'Mampu memahami al qur\'an dan hadits yang berkaitan dengan mujahadah an nafs, husnudzhan, ukhuwah, zina, asmaul husna, malaikat,berpakaian menurut syariat islam dan jujur dengan baik'),
(3, 1, 'C', 'Mampu memahami al qur\'an dan hadits yang berkaitan dengan mujahadah an nafs, husnudzhan, ukhuwah, zina, asmaul husna, malaikat,berpakaian menurut syariat islam dan jujur dengan cukup baik'),
(4, 2, 'A', 'Mampu memahami fungsi dan kewenangan lembaga-lembaga negara menurut UUD 1945 sesuai dengan pembelajaran dengan sangat baik'),
(5, 2, 'B', 'Mampu memahami fungsi dan kewenangan lembaga-lembaga negara menurut UUD 1945 sesuai dengan pembelajaran dengan  baik'),
(6, 2, 'C', 'Mampu memahami fungsi dan kewenangan lembaga-lembaga negara menurut UUD 1945 sesuai dengan pembelajaran dengan cukup baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kegiatan_ekskul` varchar(150) NOT NULL,
  `deskripsi_ekskul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `jenis_ptk` varchar(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk_guru` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `telepon_guru` varchar(15) NOT NULL,
  `foto_guru` text NOT NULL,
  `alamat_guru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `jenis_ptk`, `nip`, `password`, `nama_guru`, `jk_guru`, `telepon_guru`, `foto_guru`, `alamat_guru`) VALUES
(8, 'Guru Mapel', '5150411283', '40d16c844696e77fb3490574688d4cfc519ecb5e', 'Ahmad Nasikin, S.Pd.', 'Laki-Laki', '081294045252', '', 'Jl. Ukrim, Kadirojo I, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571'),
(9, 'Guru Mapel', '5150411284', '4d5874aaf11a73a2bf904e13bee9cd2c548bce6e', 'Hari Setiabudi, S.Pd.', 'Laki-Laki', '08981189598', '', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281'),
(10, 'Guru Mapel', '5150411285', '9616de796847efdc5ea580788bc15515a394dd4f', 'Yulia Fahrizatul, S.Pd.', 'Perempuan', '082152707176', '', 'Jl. Siliwangi Jl. Ring Road Utara, Jombor Lor, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285'),
(11, 'Guru Mapel', '5150411286', 'c0a4d4b86483d0f421431efa261f02a7635fd963', 'Rendy Pangestu, S.Pd.', 'Laki-Laki', '082151585956', '', 'Jl. Kapas No.9, Semaki, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166'),
(12, 'Guru Mapel', '5150411287', 'ac379f5341bec396ab838e298ce308b6a39eee29', 'Luluk Indrawati, S.Pd.', 'Perempuan', '0895673976547', '', 'Jl. Jend. Sudirman No.51, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930'),
(13, 'Guru Mapel', '5150411288', 'b5e0160f5ba508c5c759a90dbe6d14b6023d4563', 'Wenda Santi, S.Pd.', 'Perempuan', '089675645656', '', 'Jl. Jend. Sudirman No.51, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930'),
(14, 'Guru Mapel', '5150411289', '6c13b7fd1884e0820769c79fb2312209524d31fa', 'Anton Fatoni, S.Pd.', 'Laki-Laki', '087856564343', '', 'Jl. Ukrim, Kadirojo I, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571'),
(15, 'Guru Mapel', '5150411290', '249c36a703cb81e49762e604211ce6cab9e6d93f', 'Thoriq Firmansyah, S.Pd.', 'Laki-Laki', '082245676574', '', 'Jl. Jend. Sudirman No.51, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930'),
(16, 'Guru Mapel', '5150411291', '216f949f7bbd988c64e56d74de253873423527a9', 'Sinta Fendiana, S.E.', 'Perempuan', '083187369898', '', 'Jl. Jend. Sudirman No.51, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930'),
(17, 'Guru Mapel', '5150411292', '32af6efd7f228a00d184b260b73decbc49cebcd2', 'Kustiono, S.Pd.', 'Laki-Laki', '081294948686', '', 'Jl. Ukrim, Kadirojo I, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571'),
(18, 'Guru Mapel', '5150411293', '47690bd2bade279e30928dbb4ba2405d90961121', 'Khusnul Khoiriah, S.Pd.', 'Perempuan', '08118675878', '', 'Jl. Jend. Sudirman No.51, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930'),
(19, 'Guru Mapel', '5150411294', 'ac1889c1d5aa506ce77e9414f35f1af6e4e46c91', 'Endang Listiani, S.Pd.', 'Perempuan', '08981189592', '', 'Jl. Ukrim, Kadirojo I, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_rombel`, `id_mapel`, `id_guru`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(2, 2, 1, 8, 'Senin', '07:30:00', '09:30:00'),
(3, 1, 2, 9, 'Senin', '10:00:00', '12:00:00'),
(4, 1, 3, 10, 'Senin', '12:30:00', '14:30:00'),
(6, 1, 5, 12, 'Selasa', '07:30:00', '09:30:00'),
(7, 1, 6, 13, 'Selasa', '10:00:00', '12:00:00'),
(8, 1, 7, 14, 'Selasa', '12:30:00', '14:30:00'),
(10, 1, 8, 15, 'Rabu', '07:30:00', '09:30:00'),
(11, 1, 10, 11, 'Rabu', '10:00:00', '12:00:00'),
(12, 1, 11, 17, 'Rabu', '12:30:00', '14:30:00'),
(13, 1, 4, 11, 'Kamis', '07:30:00', '09:30:00'),
(14, 1, 9, 16, 'Kamis', '10:30:00', '12:00:00'),
(15, 1, 3, 10, 'Kamis', '12:30:00', '14:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'MIPA', 'Ilmu Pengetahuan Alam'),
(2, 'IPS', 'Ilmu Pengetahuan Sosial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, '10'),
(2, '11'),
(3, '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_mapel`
--

CREATE TABLE `kelompok_mapel` (
  `id_kelompok_mapel` int(11) NOT NULL,
  `nama_kelompok` varchar(20) NOT NULL,
  `kelompok` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelompok_mapel`
--

INSERT INTO `kelompok_mapel` (`id_kelompok_mapel`, `nama_kelompok`, `kelompok`) VALUES
(1, 'A (Wajib)', 'A'),
(2, 'B (Wajib)', 'B'),
(3, 'C (Peminatan)', 'C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkm`
--

CREATE TABLE `kkm` (
  `id_kkm` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kkm`
--

INSERT INTO `kkm` (`id_kkm`, `id_mapel`, `kkm`) VALUES
(2, 2, 75),
(3, 3, 75),
(4, 4, 70),
(5, 5, 75),
(6, 6, 70),
(7, 7, 77),
(8, 8, 75),
(9, 9, 75),
(10, 10, 70),
(11, 11, 75),
(12, 12, 70),
(13, 13, 70),
(15, 1, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_kelompok_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `id_kelompok_mapel`, `nama_mapel`) VALUES
(1, 1, 'Pendidikan Agama dan Budi Pekerti'),
(2, 1, 'Pendidikan Pancasila dan Kewarganegaraan'),
(3, 1, 'Bahasa Indonesia'),
(4, 1, 'Matematika'),
(5, 1, 'Sejarah Indonesia'),
(6, 1, 'Bahasa Inggris'),
(7, 2, 'Seni Budaya'),
(8, 2, 'Pendidikan Jasmani, Olahraga dan Kesehatan'),
(9, 2, 'Prakarya dan Kewirausahaan'),
(10, 3, 'Matematika'),
(11, 3, 'Fisika'),
(12, 3, 'Kimia'),
(13, 3, 'Biologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `uh1` int(11) NOT NULL,
  `uh2` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `rata_rata` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_rombel`, `id_mapel`, `id_guru`, `id_siswa`, `uh1`, `uh2`, `uts`, `uas`, `rata_rata`) VALUES
(3, 1, 2, 9, 2, 78, 98, 78, 78, 81.3333),
(4, 2, 1, 8, 5, 80, 77, 75, 80, 71.3333),
(5, 2, 1, 8, 6, 87, 80, 81, 80, 81.3333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `isi`) VALUES
(1, '<ul><li>    Ujian Tengah Semester Ganjil 2015/2016 - 1 Oktober 2020\r\n</li><li>    Ujian Akhir Semester Genap 2015/2016 - Desember 2020\r\n</li><li>    Ujian Nasional tanggal 4-7 April 2020</li><li>oke dicoba<br></li></ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id_profil_sekolah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kepala` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id_profil_sekolah`, `nama`, `kepala`, `telepon`, `email`, `website`, `logo`, `alamat`) VALUES
(1, 'SMA Taman Madya Jetis Yogyakarta', 'Rico Andriatma', '08981189598', 'smatamanmadya@gmail.com', 'https://smatamanmadyajetisyk.wordpress.com/', 'cropped-icon.png', 'Jl. Pakuningratan No.34A, 001, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapot`
--

CREATE TABLE `rapot` (
  `id_rapot` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `p_angka` int(11) NOT NULL,
  `p_predikat` varchar(1) NOT NULL,
  `k_angka` int(11) NOT NULL,
  `k_predikat` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rapot`
--

INSERT INTO `rapot` (`id_rapot`, `id_siswa`, `id_rombel`, `id_guru`, `id_mapel`, `p_angka`, `p_predikat`, `k_angka`, `k_predikat`) VALUES
(1, 5, 2, 8, 1, 89, 'B', 89, 'B'),
(2, 6, 2, 8, 1, 75, 'C', 86, 'B'),
(3, 2, 1, 9, 2, 89, 'B', 85, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `rombel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rombel`
--

INSERT INTO `rombel` (`id_rombel`, `id_jurusan`, `id_guru`, `rombel`) VALUES
(1, 1, 8, '10 MIPA A'),
(2, 1, 9, '10 MIPA B'),
(3, 1, 10, '10 MIPA C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `tahun_pelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`, `tahun_pelajaran`) VALUES
(1, 'Genap', '2020/2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk_siswa` enum('L','P','','') NOT NULL,
  `foto` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `id_rombel`, `nis`, `nisn`, `password`, `nama_siswa`, `jk_siswa`, `foto`, `alamat`) VALUES
(2, 1, 1, '5150411', '5151', 'c71ce8327ddb80f5f2d66ef497a4c2f2ed295a15', 'Gema Fadhillah Pratama', 'L', 'aris.jpg', 'Jl. Sekumpul, Mentaos, Kec. Martapura, Banjar, Kalimantan Selatan 70714'),
(3, 1, 1, '5150412', '5152', '879c533f64beab7c24441d4bfb77672505db7a98', 'Aris Abdul Ajis', 'L', '', 'Jl. Sekumpul, Mentaos, Kec. Martapura, Banjar, Kalimantan Selatan 70714'),
(4, 1, 1, '5150413', '5153', '03568f858884d0596ad98e0c1545fed56a236547', 'Syifa Malinda Dewi', 'P', '', 'Jl. Sekumpul, Mentaos, Kec. Martapura, Banjar, Kalimantan Selatan 70714'),
(5, 1, 2, '5150414', '5154', 'ba7cf3b462401f7a89ea76d953276bc52f5622c0', 'Muhammad Halil', 'L', '', 'Landasan Ulin Tim., Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70721'),
(6, 1, 2, '5150415', '5155', 'c5aa09e5f00033397bb3eed2b4343318bc216f7b', 'Muhammad Galih', 'L', '', 'Jl. Kenanga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `telepon_wali` varchar(15) NOT NULL,
  `foto_wali` text NOT NULL,
  `alamat_wali` text NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id_wali`, `id_siswa`, `nama_wali`, `telepon_wali`, `foto_wali`, `alamat_wali`, `password`) VALUES
(2, 2, 'Yeti Warningsih', '082152707176', '', 'Jl. Sekumpul, Mentaos, Kec. Martapura, Banjar, Kalimantan Selatan 70714', 'af1ded1286ee1def80ef8a182e0c31f5540228da'),
(3, 3, 'Teten Jaelani', '081251585956', '', 'Jl. Sekumpul, Gg. Purnama, Kec. Martapura, Banjar, Kalimantan Selatan 70714', 'd7f2da142b21e52e66c88cce38ac04758ad25ebe'),
(4, 4, 'Wildan Saputra', '08215270', '', 'Jl. Sekumpul, Mentaos, Kec. Martapura, Banjar, Kalimantan Selatan 70714', 'af1ded1286ee1def80ef8a182e0c31f5540228da'),
(5, 5, 'Hijral Asikin', '081209129393', '', 'Landasan Ulin Tim., Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70721', '85561c27279dd100b6b1838f910be5d168aa5c99'),
(6, 6, 'Januari Munandar', '08912898289', '', 'Jl. Kenanga', 'b7d6285e5648531fbf3435b16d66ee6d684fbed9');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  ADD PRIMARY KEY (`id_absensi_siswa`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_rapot`
--
ALTER TABLE `data_rapot`
  ADD PRIMARY KEY (`id_data_rapot`);

--
-- Indeks untuk tabel `deskripsi_ktr`
--
ALTER TABLE `deskripsi_ktr`
  ADD PRIMARY KEY (`id_deskripsi_ktr`);

--
-- Indeks untuk tabel `deskripsi_pth`
--
ALTER TABLE `deskripsi_pth`
  ADD PRIMARY KEY (`id_deskripsi_pth`);

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kelompok_mapel`
--
ALTER TABLE `kelompok_mapel`
  ADD PRIMARY KEY (`id_kelompok_mapel`);

--
-- Indeks untuk tabel `kkm`
--
ALTER TABLE `kkm`
  ADD PRIMARY KEY (`id_kkm`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id_profil_sekolah`);

--
-- Indeks untuk tabel `rapot`
--
ALTER TABLE `rapot`
  ADD PRIMARY KEY (`id_rapot`);

--
-- Indeks untuk tabel `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  MODIFY `id_absensi_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_rapot`
--
ALTER TABLE `data_rapot`
  MODIFY `id_data_rapot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_ktr`
--
ALTER TABLE `deskripsi_ktr`
  MODIFY `id_deskripsi_ktr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_pth`
--
ALTER TABLE `deskripsi_pth`
  MODIFY `id_deskripsi_pth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelompok_mapel`
--
ALTER TABLE `kelompok_mapel`
  MODIFY `id_kelompok_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kkm`
--
ALTER TABLE `kkm`
  MODIFY `id_kkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id_profil_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rapot`
--
ALTER TABLE `rapot`
  MODIFY `id_rapot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id_rombel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
