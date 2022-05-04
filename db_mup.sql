-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Bulan Mei 2022 pada 15.31
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
(1, 'Agro Mina Wisata 3', 'Jalan Mentaos Timur, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729a204dca5.png', 1, 'Kelompok Perikanan', '9:00 AM', '4:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/vygLDJ9RQSkBeSfr6', 1, '2017'),
(2, 'Amir Hamzah', 'Jalan Mentaos Timur, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729ae7d17b4.png', 1, 'Amir Hamzah', '9:00 AM', '4:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/vygLDJ9RQSkBeSfr6', 1, '2017'),
(3, 'Pembesaran Ikan', 'Jalan Mentaos Timur, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729b5e8629b.jpg', 1, 'Purwanto', '9:00 AM', '4:00 PM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/RFxzZQBM87vDAaLf6', 1, '2015'),
(4, 'Sentra Ikan Hias Mentaos Pokdakan Minasatuhati', 'Jalan Irigasi No 1, Kelurahan Mentaos Kecamatan Banjarbaru Utara, Kota Banjarbaru, Provinsi Kalimantan Selatan', 'Mentaos', 1, 1, 1, '62729bd279acf.jpg', 1, 'Agussyarif Hanafie', '7:00 AM', '10:30 AM', 'Senin', 'Minggu', 'https://maps.app.goo.gl/8avhbf1QAQeEeWi19', 1, '2020');

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
(1, 'Banjarbaru', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_01`
--

CREATE TABLE `tb_kategori_01` (
  `Id` int(10) NOT NULL,
  `kategori_01` varchar(250) NOT NULL COMMENT 'Penerimaan Pengeluaran',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_02`
--

CREATE TABLE `tb_kategori_02` (
  `Id` int(10) NOT NULL,
  `kategori_02` varchar(250) NOT NULL COMMENT 'Kontan Kredit',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_03`
--

CREATE TABLE `tb_kategori_03` (
  `Id` int(10) NOT NULL,
  `kategori_03` varchar(250) NOT NULL COMMENT 'Biaya Tetap \r\nBiaya Variabel',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_04`
--

CREATE TABLE `tb_kategori_04` (
  `Id` int(10) NOT NULL,
  `kategori_04` varchar(250) NOT NULL COMMENT 'Aset\r\nHutang\r\nModal\r\nPenjualan\r\nBeban',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_05`
--

CREATE TABLE `tb_kategori_05` (
  `Id` int(10) NOT NULL,
  `kategori_05` varchar(250) NOT NULL COMMENT 'Baru\r\nSelesai\r\nLanjut\r\nTunda',
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Pengolahan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_07`
--

CREATE TABLE `tb_kategori_07` (
  `Id` int(10) NOT NULL,
  `kategori_07` varchar(250) NOT NULL,
  `Keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_usaha`
--

CREATE TABLE `tb_kategori_usaha` (
  `Id` int(10) NOT NULL,
  `kategori_toko` varchar(250) NOT NULL COMMENT 'Kaki Lima\r\nToko/resto kecil\r\nToko/resto Sedang\r\nToko/resto Besar',
  `deskripsi_toko` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Banjarbaru Utara', '');

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
(1, 'Langsung', '');

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
(1, 'Kalimantan Selatan', '');

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_01`
--
ALTER TABLE `tb_kategori_01`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_02`
--
ALTER TABLE `tb_kategori_02`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_03`
--
ALTER TABLE `tb_kategori_03`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_04`
--
ALTER TABLE `tb_kategori_04`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_05`
--
ALTER TABLE `tb_kategori_05`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_06`
--
ALTER TABLE `tb_kategori_06`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_07`
--
ALTER TABLE `tb_kategori_07`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_usaha`
--
ALTER TABLE `tb_kategori_usaha`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_01`
--
ALTER TABLE `tb_trx_01`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_02`
--
ALTER TABLE `tb_trx_02`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_harga_produk`
--
ALTER TABLE `tb_trx_harga_produk`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_identitas_usaha`
--
ALTER TABLE `tb_identitas_usaha`
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_1` FOREIGN KEY (`Id_Kabupaten`) REFERENCES `tb_kabupaten` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_2` FOREIGN KEY (`Id_kategori_06`) REFERENCES `tb_kategori_06` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_3` FOREIGN KEY (`Id_Kecamatan`) REFERENCES `tb_kecamatan` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_4` FOREIGN KEY (`Id_Layanan`) REFERENCES `tb_layanan` (`Id`),
  ADD CONSTRAINT `tb_identitas_usaha_ibfk_5` FOREIGN KEY (`Id_Provinsi`) REFERENCES `tb_provinsi` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`Id_identitas_usaha`) REFERENCES `tb_identitas_usaha` (`Id`),
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`Id_kategori_07`) REFERENCES `tb_kategori_07` (`Id`),
  ADD CONSTRAINT `tb_produk_ibfk_3` FOREIGN KEY (`Id_kategori_produk`) REFERENCES `tb_produk` (`Id`);

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
