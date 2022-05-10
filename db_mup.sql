-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Bulan Mei 2022 pada 08.56
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas_usaha`
--

CREATE TABLE `tb_identitas_usaha` (
  `Id` int(10) NOT NULL,
  `nama_usaha` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `Desa` varchar(250) NOT NULL,
  `Id_Kecamatan` int(10) NOT NULL,
  `Id_Kabupaten` int(10) NOT NULL,
  `Id_Provinsi` int(10) NOT NULL,
  `upload_foto` varchar(250) NOT NULL,
  `Id_kategori_06` int(10) NOT NULL,
  `Pemilik` varchar(250) NOT NULL,
  `Jam_buka` varchar(250) NOT NULL,
  `Jam_tutup` varchar(250) NOT NULL,
  `Hari_buka` varchar(250) NOT NULL,
  `Hari_tutup` varchar(250) NOT NULL,
  `Lokasi_gps` varchar(250) NOT NULL,
  `Id_Layanan` int(10) NOT NULL,
  `Tahun_berdiri` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_identitas_usaha`
--

INSERT INTO `tb_identitas_usaha` (`Id`, `nama_usaha`, `Alamat`, `Desa`, `Id_Kecamatan`, `Id_Kabupaten`, `Id_Provinsi`, `upload_foto`, `Id_kategori_06`, `Pemilik`, `Jam_buka`, `Jam_tutup`, `Hari_buka`, `Hari_tutup`, `Lokasi_gps`, `Id_Layanan`, `Tahun_berdiri`) VALUES
(1, 'Agro Mina Wisata 3', 'Jalan Mentaos Timur, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729a204dca5.png', 5, 'Kelompok Perikanan', '9:00 AM', '4:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/vygLDJ9RQSkBeSfr6', 1, '2017'),
(2, 'EDGAR KOI Mentaos', 'Jalan Mentaos Timur, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729ae7d17b4.png', 5, 'Amir Hamzah', '9:00 AM', '4:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/vygLDJ9RQSkBeSfr6', 1, '2017'),
(3, 'Pembesaran Ikan', 'Jalan Mentaos Timur, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729b5e8629b.jpg', 5, 'Purwanto', '9:00 AM', '4:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/RFxzZQBM87vDAaLf6', 1, '2015'),
(4, 'Sentra Ikan Hias Mentaos Pokdakan Minasatuhati', 'Jalan Irigasi No 1, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729bd279acf.jpg', 5, 'Agussyarif Hanafie', '7:00 AM', '10:30 AM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/8avhbf1QAQeEeWi19', 1, '2020'),
(5, 'Seafood', 'Perempatan Guntung Manggis', 'Guntung Manggis', 5, 1, 1, '6273220e4543c.jpg', 6, 'Nuryono', '8:00 AM', '12:00 AM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/8avhbf1QAQeEeWi19', 1, '2005'),
(8, 'Rumah Produksi Rini Amplang ', 'Jalan Budi Waluyo, Komet, Kec. Banjarbaru Utara, Kota Banjarbaru, Kalimantan Selatan, 70714', 'Komet', 1, 1, 1, '6274e0a577adb.jpeg', 6, 'Rini', '10:00 AM', '11:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/EVfimsQcwx6FqbJG8', 1, '2012'),
(9, 'PJM Casheila', 'Jl. Tunas Baru Komplek Graha Mega 2 No. 4B', 'Sungai Ulin', 1, 1, 1, '6274e45e18820.jpeg', 6, 'Dessyana Yudiarny', '8:00 AM', '5:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/CDDwEi7g46yLshwH6', 1, '2014'),
(10, 'Bakti Food Banjarbaru', 'Jl. Sungai Sumba No. 73, Rt.39, GuntungManggis, Kec. Landasan Ulin, Kota Banjarbaru, Kalimantan Selatan 70721', 'Guntungmanggis', 5, 1, 1, '6274e632b999e.jpeg', 6, 'Bakti Siswandari', '9:00 AM', '4:00 PM', 'Senin', 'Sabtu', 'https://goo.gl/maps/3QEVaaXfWLnt5QFR6', 1, '2015'),
(11, 'POKLAHSAR Bina Lestari', 'Jalan Budi Waluyo Komplek Griya Pratama', 'Sungai Ulin', 1, 1, 1, '62751061f337e.jpg', 6, 'Kelompok Pengolah dan Pemasar Ikan', '8:00 AM', '6:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/5uQpLaACk2zEAvtCA', 1, '2018'),
(12, 'Dimsum Ikan Ghaniesha', 'Jalan A.Yani No.22 Guntungmanggis, Kec. Landasan Ulin, Kota Banjarbaru, Kalimantan Selatan, 70714', 'Guntung Payung', 5, 1, 1, '62751736c7d72.jpeg', 6, 'Ghaniesha', '10:00 AM', '5:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/c1wd59q11atHneV78', 1, '2021'),
(13, 'test', 'test', 'test', 7, 3, 1, '62780bc19b2ce.gif', 6, '22', '2:30 AM', '2:30 AM', 'Senin', 'Senin', '222', 1, '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `Id` int(10) NOT NULL,
  `Kabupaten` varchar(250) NOT NULL,
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`Id`, `Kabupaten`, `Keterangan`) VALUES
(1, 'Banjarbaru', ''),
(2, 'Banjar', ''),
(3, 'Tanah Laut', ''),
(4, 'Kotabaru', ''),
(5, 'Barito Kuala', ''),
(6, 'Tapin', ''),
(7, 'Hulu Sungai Selatan', ''),
(8, 'Hulu Sungai Tengah', ''),
(9, 'Hulu Sungai Utara', ''),
(10, 'Tabalong', ''),
(11, 'Tanah Bumbu', ''),
(12, 'Balangan', ''),
(13, 'Banjarmasin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_01`
--

CREATE TABLE `tb_kategori_01` (
  `Id` int(10) NOT NULL,
  `kategori_01` varchar(250) NOT NULL COMMENT 'Penerimaan Pengeluaran',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_01`
--

INSERT INTO `tb_kategori_01` (`Id`, `kategori_01`, `Keterangan`) VALUES
(1, 'Penerimaan', ''),
(2, 'Pengeluaran', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_02`
--

CREATE TABLE `tb_kategori_02` (
  `Id` int(10) NOT NULL,
  `kategori_02` varchar(250) NOT NULL COMMENT 'Kontan Kredit',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_02`
--

INSERT INTO `tb_kategori_02` (`Id`, `kategori_02`, `Keterangan`) VALUES
(1, 'Kontan', ''),
(2, 'Kredit', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_03`
--

CREATE TABLE `tb_kategori_03` (
  `Id` int(10) NOT NULL,
  `kategori_03` varchar(250) NOT NULL COMMENT 'Biaya Tetap \r\nBiaya Variabel',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_03`
--

INSERT INTO `tb_kategori_03` (`Id`, `kategori_03`, `Keterangan`) VALUES
(1, 'Biaya Tetap', ''),
(2, 'Biaya Variable', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_04`
--

CREATE TABLE `tb_kategori_04` (
  `Id` int(10) NOT NULL,
  `kategori_04` varchar(250) NOT NULL COMMENT 'Aset\r\nHutang\r\nModal\r\nPenjualan\r\nBeban',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_04`
--

INSERT INTO `tb_kategori_04` (`Id`, `kategori_04`, `Keterangan`) VALUES
(1, 'Aset', ''),
(2, 'Hutang', ''),
(3, 'Modal', ''),
(4, 'Penjualan', ''),
(6, 'Beban', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_05`
--

CREATE TABLE `tb_kategori_05` (
  `Id` int(10) NOT NULL,
  `kategori_05` varchar(250) NOT NULL COMMENT 'Baru\r\nSelesai\r\nLanjut\r\nTunda',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_05`
--

INSERT INTO `tb_kategori_05` (`Id`, `kategori_05`, `Keterangan`) VALUES
(2, 'Baru', ''),
(3, 'Selesai', ''),
(4, 'Lanjut', ''),
(5, 'Tunda', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_06`
--

CREATE TABLE `tb_kategori_06` (
  `Id` int(10) NOT NULL,
  `kategori_06` varchar(250) NOT NULL COMMENT 'Budidaya\r\nPengolahan\r\nPenangkapan',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_06`
--

INSERT INTO `tb_kategori_06` (`Id`, `kategori_06`, `Keterangan`) VALUES
(1, 'Budidaya', ''),
(2, 'Pengolahan', ''),
(3, 'Penangkapan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_07`
--

CREATE TABLE `tb_kategori_07` (
  `Id` int(10) NOT NULL,
  `kategori_07` varchar(250) NOT NULL,
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_07`
--

INSERT INTO `tb_kategori_07` (`Id`, `kategori_07`, `Keterangan`) VALUES
(1, 'Besar', ''),
(2, 'Kecil', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_usaha`
--

CREATE TABLE `tb_kategori_usaha` (
  `Id` int(10) NOT NULL,
  `kategori_toko` varchar(250) NOT NULL COMMENT 'Kaki Lima\r\nToko/resto kecil\r\nToko/resto Sedang\r\nToko/resto Besar',
  `deskripsi_toko` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_usaha`
--

INSERT INTO `tb_kategori_usaha` (`Id`, `kategori_toko`, `deskripsi_toko`) VALUES
(5, 'Kaki Lima', ''),
(6, 'Toko/Resto Kecil', ''),
(7, 'Toko/Resto', ''),
(8, 'Sedang', ''),
(9, 'Toko/Resto Besar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `Id` int(10) NOT NULL,
  `Kecamatan` varchar(250) NOT NULL,
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`Id`, `Kecamatan`, `Keterangan`) VALUES
(1, 'Banjarbaru Utara', ''),
(3, 'Banjarbaru Selatan', ''),
(4, 'Cempaka', ''),
(5, 'Landasan Ulin', ''),
(6, 'Liang Anggang', ''),
(7, 'test', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `Id` int(10) NOT NULL,
  `Layanan` varchar(250) NOT NULL COMMENT 'Non Layanan\r\nAntar',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`Id`, `Layanan`, `Keterangan`) VALUES
(1, 'Non Layanan', ''),
(2, 'Antar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `Id` int(10) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `Id_kategori_produk` int(10) NOT NULL,
  `Id_identitas_usaha` int(10) NOT NULL,
  `Deskripsi_produk` longtext NOT NULL,
  `Id_kategori_07` int(10) NOT NULL,
  `Photo_1` varchar(250) NOT NULL,
  `Photo_2` varchar(250) NOT NULL,
  `Photo_3` varchar(250) NOT NULL,
  `Photo_4` varchar(250) NOT NULL,
  `Unggah_Video` varchar(250) NOT NULL,
  `Video_Youtube` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`Id`, `nama_produk`, `Id_kategori_produk`, `Id_identitas_usaha`, `Deskripsi_produk`, `Id_kategori_07`, `Photo_1`, `Photo_2`, `Photo_3`, `Photo_4`, `Unggah_Video`, `Video_Youtube`) VALUES
(1, 'Bibit Ikan Nila', 5, 1, 'Menjual bibit ikan nila berukuran 3/4 ', 1, '6274dc3342030.jpeg', '6274dc334263e.jpeg', '6274dc33b01a3.jpeg', '6274dc33b03b9.jpeg', '6274dc33b0670.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/htOHwvSMxTk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Ikan Patin', 5, 3, 'Menjual ikan patin', 1, '6274df225d25f.jpeg', '6274df229a36a.jpeg', '6274df229a6ea.jpeg', '6274df229ab38.jpeg', '6274df229aec0.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eV8twb_1x0A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Bibit Ikan Koi', 5, 2, 'Menjual bibit 3/4 ikan koi', 1, '6274e01a3d622.jpeg', '6274e01a3d9d5.jpeg', '6274e01a3dc0b.jpeg', '6274e01a3de7c.jpeg', '6274e01a3e06b.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1RjEQlqvQ8Q\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Ikan Hias', 5, 4, 'Menjual bermacam-macam ikan hias dan pembesaran ikan ', 1, '627502a0a9a9d.jpeg', '627502a0a9e35.jpeg', '627502a0aa08f.jpeg', '627502a0aa2a9.jpeg', '627502a0aa5c6.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/66aW5MWG1qU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'Ikan Sepat Sambal', 6, 9, 'Menjual berbagai jenis olahan dari ikan', 2, '627504641b7b7.jpeg', '627504641b9ae.jpg', '627504641bb3e.jpg', '627504641bc72.jpg', '627504641bdb7.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/buhpQqoj4DI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'Kerupuk Ikan Gabus', 6, 9, 'Menjual berbagai jenis pengolahan ikan', 2, '627506e5616c5.jpeg', '627506e561934.jpg', '627506e561b76.jpg', '627506e561d9a.jpg', '627506e561f20.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Z1OWAtLtImE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'Amplang Ikan', 6, 8, 'Rini Amplang adalah merek dagang dari amplang ikan tenggiri yang merupakan produk dari rumah industri yang diproduksi oleh POKLAHSAR yang bebas pengawet dan diolah secara alami. Amplang Rini dikemas secara menarik dan terdiri dari 4 kemasan sprit yaitu 75gram, 110gram, 200gram dan 300gram. Amplang Rini meliki rasa yang enak, renyah dan gurih karena dibuat dari bahan baku pilihan dan berkualitas, tidak menggunakan bahan pengawet dan tidak menggunakan bahan kimia lainnya. Disamping bisa dikonsumsi sebagai makanan ringan, cemilan atau makanan tambahan, Amplang Rini ini juga mengandung protein tinggi, karbohidrat dan Vitamin.', 2, '62751021b9182.jpeg', '62751021b92e0.jpeg', '62751021b9387.jpeg', '62751021b9424.jpeg', '62751021b94ec.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ISNct4pb1hw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Pentol Ikan', 6, 11, 'Kelompok Pengolah dan Pemasar Ikan di Komplek Griya Pratama membuat pentol yang terbuat dari olahan ikan', 2, '62751185814b0.jpg', '627511858164f.jpg', '6275118581ac3.jpg', '6275118581bdc.jpg', '6275118581c98.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/s6BWZ9nWHy4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Dimsum Ikan Tenggiri Ghaniesa', 6, 12, 'Dimsum Ikan yang kaya akan protein', 2, '62751943cc21e.jpeg', '62751944efe8b.jpeg', '62751944f01ae.jpeg', '62751944f06fe.jpeg', '62751944f07cf.mp4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/B0xGNnfEwLU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `Id` int(10) NOT NULL,
  `Provinsi` varchar(250) NOT NULL,
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`Id`, `Provinsi`, `Keterangan`) VALUES
(1, 'Kalimantan Selatan', ''),
(2, 'Aceh', ''),
(3, 'Sumatra Utara', ''),
(4, 'Sumatra Barat', ''),
(5, 'Riau', ''),
(6, 'Jambi', ''),
(7, 'Kepulauan Riau', ''),
(8, 'Bengkulu', ''),
(9, 'Sumatra Selatan', ''),
(10, 'Kepulauan Bangka Belitung', ''),
(11, 'Lampung', ''),
(12, 'Banten', ''),
(13, 'Daerah Khusus Ibukota Jakarta', ''),
(14, 'Jawa Barat', ''),
(15, 'Jawa Tengah', ''),
(16, 'Daerah Istimewa Yogyakarta	', ''),
(17, 'Jawa Timur', ''),
(18, 'Bali', ''),
(19, 'Nusa Tenggara Barat', ''),
(20, 'Nusa Tenggara Timur', ''),
(21, 'Kalimantan Barat', ''),
(22, 'Kalimantan Tengah', ''),
(23, 'Kalimantan Timur', ''),
(24, 'Kalimantan Utara', ''),
(25, 'Sulawesi Barat', ''),
(26, 'Sulawesi Selatan', ''),
(27, 'Sulawesi Tenggara', ''),
(28, 'Sulawesi Tengah', ''),
(29, 'Gorontalo', ''),
(30, 'Sulawesi Utara', ''),
(31, 'Maluku Utara', ''),
(32, 'Maluku', ''),
(33, 'Papua Barat', ''),
(34, 'Papua', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_01`
--

CREATE TABLE `tb_trx_01` (
  `Id` int(10) NOT NULL,
  `Id_identitas_usaha` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Uraian` text NOT NULL,
  `Id_kategori_01` int(10) NOT NULL,
  `Id_kategori_02` int(10) NOT NULL,
  `Id_kategori_03` int(10) NOT NULL,
  `Id_kategori_04` int(10) NOT NULL,
  `Id_kategori_05` int(10) NOT NULL,
  `Id_produk` int(10) NOT NULL,
  `Id_trx_harga_produk` int(10) NOT NULL,
  `Unggah_bukti_pdf` varchar(250) NOT NULL COMMENT 'File pdf',
  `Unggah_bukti_gambar` varchar(250) NOT NULL COMMENT 'File Gambar',
  `Catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_02`
--

CREATE TABLE `tb_trx_02` (
  `Id` int(10) NOT NULL,
  `Id_identitas_usaha` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Uraian` text NOT NULL,
  `Id_kategori_01` int(10) NOT NULL,
  `Id_kategori_02` int(10) NOT NULL,
  `Id_kategori_03` int(10) NOT NULL,
  `Id_kategori_04` int(10) NOT NULL,
  `Id_kategori_05` int(10) NOT NULL,
  `Nama_barang` varchar(250) NOT NULL,
  `Keterangan_barang` varchar(250) NOT NULL,
  `Unggah_bukti_pdf` varchar(250) NOT NULL COMMENT 'File pdf',
  `Unggah_bukti_gambar` varchar(250) NOT NULL COMMENT 'File gambar',
  `Catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_harga_produk`
--

CREATE TABLE `tb_trx_harga_produk` (
  `Id` int(10) NOT NULL,
  `Id_identitas_usaha` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_produk` int(10) NOT NULL,
  `Harga_satuan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_trx_harga_produk`
--

INSERT INTO `tb_trx_harga_produk` (`Id`, `Id_identitas_usaha`, `Tanggal`, `Id_produk`, `Harga_satuan`) VALUES
(1, 1, '2022-05-06', 1, 140),
(2, 9, '2022-05-06', 5, 25000),
(3, 9, '2022-05-06', 6, 25000),
(4, 11, '2022-05-06', 8, 17000),
(5, 8, '2022-05-06', 7, 15000),
(6, 12, '2022-04-29', 9, 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_status_01`
--

CREATE TABLE `tb_trx_status_01` (
  `Id` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_tb_trx_01` int(10) NOT NULL COMMENT 'Id_kategori_05 dari tb_trx_01',
  `Status_awal` varchar(250) NOT NULL,
  `Id_kategori_05` int(10) NOT NULL,
  `Keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_status_02`
--

CREATE TABLE `tb_trx_status_02` (
  `Id` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_tb_trx_01` int(10) NOT NULL COMMENT 'Id_kategori_05 dari tb_trx_01',
  `Status_awal` varchar(250) NOT NULL,
  `Id_kategori_05` int(10) NOT NULL,
  `Keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_stock`
--

CREATE TABLE `tb_trx_stock` (
  `Id` int(10) NOT NULL,
  `Id_identitas_usaha` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_produk` int(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Terjual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_trx_stock`
--

INSERT INTO `tb_trx_stock` (`Id`, `Id_identitas_usaha`, `Tanggal`, `Id_produk`, `Stock`, `Terjual`) VALUES
(1, 1, '2022-05-06', 1, 300000, 1000),
(2, 9, '2022-05-06', 5, 100, 60),
(3, 9, '2022-05-06', 6, 200, 120),
(4, 11, '2022-05-06', 8, 500, 500),
(5, 8, '2022-05-06', 7, 100, 80),
(6, 12, '2022-04-29', 9, 100, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_identitas_usaha`
--
ALTER TABLE `tb_identitas_usaha`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Kabupaten` (`Id_Kabupaten`),
  ADD KEY `Id_kategori_06` (`Id_kategori_06`),
  ADD KEY `Id_Kecamatan` (`Id_Kecamatan`),
  ADD KEY `Id_Layanan` (`Id_Layanan`),
  ADD KEY `Id_Provinsi` (`Id_Provinsi`);

--
-- Indeks untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_01`
--
ALTER TABLE `tb_kategori_01`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_02`
--
ALTER TABLE `tb_kategori_02`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_03`
--
ALTER TABLE `tb_kategori_03`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_04`
--
ALTER TABLE `tb_kategori_04`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_05`
--
ALTER TABLE `tb_kategori_05`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_06`
--
ALTER TABLE `tb_kategori_06`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_07`
--
ALTER TABLE `tb_kategori_07`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kategori_usaha`
--
ALTER TABLE `tb_kategori_usaha`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_identitas_usaha` (`Id_identitas_usaha`),
  ADD KEY `Id_kategori_07` (`Id_kategori_07`),
  ADD KEY `Id_kategori_produk` (`Id_kategori_produk`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_trx_01`
--
ALTER TABLE `tb_trx_01`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_kategori_01` (`Id_kategori_01`),
  ADD KEY `Id_kategori_02` (`Id_kategori_02`),
  ADD KEY `Id_kategori_03` (`Id_kategori_03`),
  ADD KEY `Id_kategori_04` (`Id_kategori_04`),
  ADD KEY `Id_kategori_05` (`Id_kategori_05`),
  ADD KEY `Id_produk` (`Id_produk`),
  ADD KEY `Id_identitas_usaha` (`Id_identitas_usaha`);

--
-- Indeks untuk tabel `tb_trx_02`
--
ALTER TABLE `tb_trx_02`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_identitas_usaha` (`Id_identitas_usaha`),
  ADD KEY `Id_kategori_01` (`Id_kategori_01`),
  ADD KEY `Id_kategori_02` (`Id_kategori_02`),
  ADD KEY `Id_kategori_03` (`Id_kategori_03`),
  ADD KEY `Id_kategori_04` (`Id_kategori_04`),
  ADD KEY `Id_kategori_05` (`Id_kategori_05`);

--
-- Indeks untuk tabel `tb_trx_harga_produk`
--
ALTER TABLE `tb_trx_harga_produk`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_identitas_usaha` (`Id_identitas_usaha`),
  ADD KEY `Id_produk` (`Id_produk`);

--
-- Indeks untuk tabel `tb_trx_status_01`
--
ALTER TABLE `tb_trx_status_01`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_kategori_05` (`Id_kategori_05`),
  ADD KEY `Id_tb_trx_01` (`Id_tb_trx_01`);

--
-- Indeks untuk tabel `tb_trx_status_02`
--
ALTER TABLE `tb_trx_status_02`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_kategori_05` (`Id_kategori_05`),
  ADD KEY `Id_tb_trx_01` (`Id_tb_trx_01`);

--
-- Indeks untuk tabel `tb_trx_stock`
--
ALTER TABLE `tb_trx_stock`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_identitas_usaha` (`Id_identitas_usaha`),
  ADD KEY `Id_produk` (`Id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_identitas_usaha`
--
ALTER TABLE `tb_identitas_usaha`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_01`
--
ALTER TABLE `tb_kategori_01`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_02`
--
ALTER TABLE `tb_kategori_02`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_03`
--
ALTER TABLE `tb_kategori_03`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_04`
--
ALTER TABLE `tb_kategori_04`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_05`
--
ALTER TABLE `tb_kategori_05`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_06`
--
ALTER TABLE `tb_kategori_06`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_07`
--
ALTER TABLE `tb_kategori_07`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_usaha`
--
ALTER TABLE `tb_kategori_usaha`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_01`
--
ALTER TABLE `tb_trx_01`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_02`
--
ALTER TABLE `tb_trx_02`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_harga_produk`
--
ALTER TABLE `tb_trx_harga_produk`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_status_01`
--
ALTER TABLE `tb_trx_status_01`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_status_02`
--
ALTER TABLE `tb_trx_status_02`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_stock`
--
ALTER TABLE `tb_trx_stock`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_identitas_usaha`
--
ALTER TABLE `tb_identitas_usaha`
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_1` FOREIGN KEY (`Id_Kabupaten`) REFERENCES `tb_kabupaten` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_3` FOREIGN KEY (`Id_Kecamatan`) REFERENCES `tb_kecamatan` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_4` FOREIGN KEY (`Id_Layanan`) REFERENCES `tb_layanan` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_5` FOREIGN KEY (`Id_Provinsi`) REFERENCES `tb_provinsi` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_6` FOREIGN KEY (`Id_kategori_06`) REFERENCES `tb_kategori_usaha` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`Id_identitas_usaha`) REFERENCES `tb_identitas_usaha` (`Id`),
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`Id_kategori_07`) REFERENCES `tb_kategori_07` (`Id`),
  ADD CONSTRAINT `tb_produk_ibfk_3` FOREIGN KEY (`Id_kategori_produk`) REFERENCES `tb_kategori_usaha` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_trx_01`
--
ALTER TABLE `tb_trx_01`
  ADD CONSTRAINT `tb_trx_01_ibfk_1` FOREIGN KEY (`Id_kategori_01`) REFERENCES `tb_kategori_01` (`Id`),
  ADD CONSTRAINT `tb_trx_01_ibfk_2` FOREIGN KEY (`Id_kategori_02`) REFERENCES `tb_kategori_02` (`Id`),
  ADD CONSTRAINT `tb_trx_01_ibfk_3` FOREIGN KEY (`Id_kategori_03`) REFERENCES `tb_kategori_03` (`Id`),
  ADD CONSTRAINT `tb_trx_01_ibfk_4` FOREIGN KEY (`Id_kategori_04`) REFERENCES `tb_kategori_04` (`Id`),
  ADD CONSTRAINT `tb_trx_01_ibfk_5` FOREIGN KEY (`Id_kategori_05`) REFERENCES `tb_kategori_05` (`Id`),
  ADD CONSTRAINT `tb_trx_01_ibfk_6` FOREIGN KEY (`Id_produk`) REFERENCES `tb_produk` (`Id`),
  ADD CONSTRAINT `tb_trx_01_ibfk_7` FOREIGN KEY (`Id_identitas_usaha`) REFERENCES `tb_identitas_usaha` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_trx_02`
--
ALTER TABLE `tb_trx_02`
  ADD CONSTRAINT `tb_trx_02_ibfk_1` FOREIGN KEY (`Id_identitas_usaha`) REFERENCES `tb_identitas_usaha` (`Id`),
  ADD CONSTRAINT `tb_trx_02_ibfk_2` FOREIGN KEY (`Id_kategori_01`) REFERENCES `tb_kategori_01` (`Id`),
  ADD CONSTRAINT `tb_trx_02_ibfk_3` FOREIGN KEY (`Id_kategori_02`) REFERENCES `tb_kategori_02` (`Id`),
  ADD CONSTRAINT `tb_trx_02_ibfk_4` FOREIGN KEY (`Id_kategori_03`) REFERENCES `tb_kategori_03` (`Id`),
  ADD CONSTRAINT `tb_trx_02_ibfk_5` FOREIGN KEY (`Id_kategori_04`) REFERENCES `tb_kategori_04` (`Id`),
  ADD CONSTRAINT `tb_trx_02_ibfk_6` FOREIGN KEY (`Id_kategori_05`) REFERENCES `tb_kategori_05` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_trx_harga_produk`
--
ALTER TABLE `tb_trx_harga_produk`
  ADD CONSTRAINT `tb_trx_harga_produk_ibfk_1` FOREIGN KEY (`Id_identitas_usaha`) REFERENCES `tb_identitas_usaha` (`Id`),
  ADD CONSTRAINT `tb_trx_harga_produk_ibfk_2` FOREIGN KEY (`Id_produk`) REFERENCES `tb_produk` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_trx_status_01`
--
ALTER TABLE `tb_trx_status_01`
  ADD CONSTRAINT `tb_trx_status_01_ibfk_1` FOREIGN KEY (`Id_kategori_05`) REFERENCES `tb_kategori_05` (`Id`),
  ADD CONSTRAINT `tb_trx_status_01_ibfk_2` FOREIGN KEY (`Id_tb_trx_01`) REFERENCES `tb_trx_01` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_trx_status_02`
--
ALTER TABLE `tb_trx_status_02`
  ADD CONSTRAINT `tb_trx_status_02_ibfk_1` FOREIGN KEY (`Id_kategori_05`) REFERENCES `tb_kategori_05` (`Id`),
  ADD CONSTRAINT `tb_trx_status_02_ibfk_2` FOREIGN KEY (`Id_tb_trx_01`) REFERENCES `tb_trx_01` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_trx_stock`
--
ALTER TABLE `tb_trx_stock`
  ADD CONSTRAINT `tb_trx_stock_ibfk_1` FOREIGN KEY (`Id_identitas_usaha`) REFERENCES `tb_identitas_usaha` (`Id`),
  ADD CONSTRAINT `tb_trx_stock_ibfk_2` FOREIGN KEY (`Id_produk`) REFERENCES `tb_produk` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
