<?php include_once("config.php"); ?>

<?php
clearstatcache()
?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 id="nama-table">Tabel</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item">Tabel</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tabel</h2>
            <p class="section-lead">
                Berikut adalah output tabel yang diminta.</a>.
            </p>

            <div class="row">
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Usaha berdasarkan Kategori Usaha</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['status'])) {
                                echo '<script>$(".alert").alert()</script>';
                                $status = $_GET['status'];
                                switch ($status) {
                                    case '1':
                                        echo '
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Berhasil menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '2':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Gagal menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '3':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Data tidak ditemukan.
                                </div>
                            </div>
                            ';
                                        break;
                                }
                            }
                            ?>

                            <div class="table-responsive">
                                <table class="table table-striped" id="table-identitas-usaha" style="width: 100%">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_identitas_usaha.Id, tb_identitas_usaha.nama_usaha, tb_identitas_usaha.Alamat, tb_identitas_usaha.Desa, tb_kecamatan.Kecamatan, tb_kabupaten.Kabupaten, tb_provinsi.Provinsi, tb_identitas_usaha.upload_foto, tb_kategori_usaha.kategori_toko, tb_identitas_usaha.Pemilik, tb_identitas_usaha.Jam_buka, tb_identitas_usaha.Jam_tutup, tb_identitas_usaha.Hari_buka, tb_identitas_usaha.Hari_tutup, tb_identitas_usaha.Lokasi_gps, tb_layanan.Layanan, tb_identitas_usaha.Tahun_berdiri FROM tb_identitas_usaha JOIN tb_kecamatan ON tb_kecamatan.Id = tb_identitas_usaha.Id_Kecamatan JOIN tb_kabupaten ON tb_kabupaten.Id = tb_identitas_usaha.Id_Kabupaten JOIN tb_provinsi ON tb_provinsi.Id = tb_identitas_usaha.Id_Provinsi JOIN tb_kategori_usaha ON tb_kategori_usaha.Id = tb_identitas_usaha.Id_kategori_06 JOIN tb_layanan ON tb_layanan.Id = tb_identitas_usaha.Id_Layanan;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Alamat</th>
                                            <th>Desa</th>
                                            <th>Kecamatan</th>
                                            <th>Kabupaten</th>
                                            <th>Provinsi</th>
                                            <th>Foto</th>
                                            <th>Kategori Usaha</th>
                                            <th>Pemilik</th>
                                            <th>Jam Buka</th>
                                            <th>Jam Tutup</th>
                                            <th>Hari Buka</th>
                                            <th>Hari Tutup</th>
                                            <th>Lokasi GPS</th>
                                            <th>Layanan</th>
                                            <th>Tahun Berdiri</th>
                                            <th style="min-width: 135px; max-width: 135px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ';
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $data['Id'] . '
                                            </td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Alamat'] . '</td>
                                            <td>' . $data['Desa'] . '</td>
                                            <td>' . $data['Kecamatan'] . '</td>
                                            <td>' . $data['Kabupaten'] . '</td>
                                            <td>' . $data['Provinsi'] . '</td>
                                            <td><a href="file/img/' . $data['upload_foto'] . '"><img src="file/img/' . $data['upload_foto'] . '" width="100px"></a></td>
                                            <td>' . $data['kategori_toko'] . '</td>
                                            <td>' . $data['Pemilik'] . '</td>
                                            <td>' . $data['Jam_buka'] . '</td>
                                            <td>' . $data['Jam_tutup'] . '</td>
                                            <td>' . $data['Hari_buka'] . '</td>
                                            <td>' . $data['Hari_tutup'] . '</td>
                                            <td><a href="' . $data['Lokasi_gps'] . '">' . $data['Lokasi_gps'] . '</a></td>
                                            <td>' . $data['Layanan'] . '</td>
                                            <td>' . $data['Tahun_berdiri'] . '</td>
                                            <td class="text-center" style="width:350px;"><a href="?page=' . $add . '&Id=' . $data['Id'] . '" class="btn btn-warning">Edit</a> <a onclick="return confirm(\'Apakah anda yakin ingin menghapus data?\')" href="delete.php?Id=' . $data['Id'] . '&table=' . $tabel . '&page=' . $page . '" class="btn btn-danger">Hapus</a> </td>
                                        </tr>
                                        ';
                                        }
                                        echo '</tbody>';
                                    } else {
                                        echo '
                                <tbody>
                                    <tr>
                                        <td class="text-center">Tidak ada data di database!</td>
                                    </tr>
                                </tbody>
                                ';
                                    }

                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Katalog Produk per Usaha</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['status'])) {
                                echo '<script>$(".alert").alert()</script>';
                                $status = $_GET['status'];
                                switch ($status) {
                                    case '1':
                                        echo '
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Berhasil menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '2':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Gagal menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '3':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Data tidak ditemukan.
                                </div>
                            </div>
                            ';
                                        break;
                                }
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-produk">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_produk.Id, tb_produk.nama_produk, tb_kategori_usaha.kategori_toko, tb_identitas_usaha.nama_usaha, tb_produk.Deskripsi_produk, tb_kategori_07.kategori_07, tb_produk.Photo_1, tb_produk.Photo_2, tb_produk.Photo_3, tb_produk.Photo_4, tb_produk.Unggah_Video, tb_produk.Video_Youtube FROM tb_produk JOIN tb_kategori_usaha ON tb_kategori_usaha.Id = tb_produk.Id_kategori_produk JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_produk.Id_identitas_usaha JOIN tb_kategori_07 ON tb_kategori_07.Id = tb_produk.Id_kategori_07;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>Nama Produk</th>
                                            <th>Kategori Usaha</th>
                                            <th>Nama Usaha</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Ukuran</th>
                                            <th>Foto 1</th>
                                            <th>Foto 2</th>
                                            <th>Foto 3</th>
                                            <th>Foto 4</th>
                                            <th>Video</th>
                                            <th>Video Youtube</th>
                                            <th style="min-width: 135px; max-width: 135px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                ';
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $data['Id'] . '
                                            </td>
                                            <td>' . $data['nama_produk'] . '</td>
                                            <td>' . $data['kategori_toko'] . '</td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Deskripsi_produk'] . '</td>
                                            <td>' . $data['kategori_toko'] . '</td>
                                            <td><a href="file/img/' . $data['Photo_1'] . '"><img src="file/img/' . $data['Photo_1'] . '" width="100px"></a></td>
                                            <td><a href="file/img/' . $data['Photo_2'] . '"><img src="file/img/' . $data['Photo_2'] . '" width="100px"></a></td>
                                            <td><a href="file/img/' . $data['Photo_3'] . '"><img src="file/img/' . $data['Photo_3'] . '" width="100px"></a></td>
                                            <td><a href="file/img/' . $data['Photo_4'] . '"><img src="file/img/' . $data['Photo_4'] . '" width="100px"></a></td>
                                            <td><a href="file/video/' . $data['Unggah_Video'] . '">' . $data['Unggah_Video'] . '</a></td>
                                            <td>' . $data['Video_Youtube'] . '</td>
                                            <td class="text-center" style="width:350px;"><a href="?page=' . $add . '&Id=' . $data['Id'] . '" class="btn btn-warning">Edit</a> <a onclick="return confirm(\'Apakah anda yakin ingin menghapus data?\')" href="delete.php?Id=' . $data['Id'] . '&table=' . $tabel . '&page=' . $page . '" class="btn btn-danger">Hapus</a> </td>
                                        </tr>
                                        ';
                                        }
                                        echo '</tbody>';
                                    } else {
                                        echo '
                                <tbody>
                                    <tr>
                                        <td class="text-center">Tidak ada data di database!</td>
                                    </tr>
                                </tbody>
                                ';
                                    }

                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Transaksi Berdasarkan Kategori Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['status'])) {
                                echo '<script>$(".alert").alert()</script>';
                                $status = $_GET['status'];
                                switch ($status) {
                                    case '1':
                                        echo '
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Berhasil menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '2':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Gagal menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '3':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Data tidak ditemukan.
                                </div>
                            </div>
                            ';
                                        break;
                                }
                            }
                            ?>
                            <div class="table-responsive">
                                <?php echo '<table class="table table-striped" id="table_trx">'; ?>
                                <?php
                                $sql = mysqli_query($con, "SELECT tb_trx_01.Id, tb_identitas_usaha.nama_usaha, tb_trx_01.Tanggal, tb_trx_01.Uraian, tb_kategori_01.kategori_01, tb_kategori_02.kategori_02, tb_kategori_03.kategori_03, tb_kategori_04.kategori_04, tb_kategori_05.kategori_05, tb_produk.nama_produk, tb_trx_harga_produk.Harga_satuan, tb_trx_01.Unggah_bukti_pdf, tb_trx_01.Unggah_bukti_gambar, tb_trx_01.Catatan FROM tb_trx_01 JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_trx_01.Id_identitas_usaha JOIN tb_kategori_01 ON tb_kategori_01.Id = tb_trx_01.Id_kategori_01 JOIN tb_kategori_02 ON tb_kategori_02.Id = tb_trx_01.Id_kategori_02 JOIN tb_kategori_03 ON tb_kategori_03.Id = tb_trx_01.Id_kategori_03 JOIN tb_kategori_04 ON tb_kategori_04.Id = tb_trx_01.Id_kategori_04 JOIN tb_kategori_05 ON tb_kategori_05.Id = tb_trx_01.Id_kategori_05 JOIN tb_produk ON tb_produk.Id = tb_trx_01.Id_produk JOIN tb_trx_harga_produk ON tb_trx_harga_produk.Id = tb_trx_01.Id_trx_harga_produk;") or die(mysqli_error($con));



                                if (mysqli_num_rows($sql) > 0) {
                                    echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Tanggal</th>
                                            <th>Uraian</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Pembayaran Transaksi</th>
                                            <th>Jenis Biaya</th>
                                            <th>Klasifikasi Transaksi</th>
                                            <th>Status Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Bukti (Pdf)</th>
                                            <th>Bukti (Gambar)</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                ';
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $data['Id'] . '
                                            </td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Tanggal'] . '</td>
                                            <td>' . $data['Uraian'] . '</td>
                                            <td>' . $data['kategori_01'] . '</td>
                                            <td>' . $data['kategori_02'] . '</td>
                                            <td>' . $data['kategori_03'] . '</td>
                                            <td>' . $data['kategori_04'] . '</td>
                                            <td>' . $data['kategori_05'] . '</td>
                                            <td>' . $data['nama_produk'] . '</td>
                                            <td>' . $data['Harga_satuan'] . '</td>
                                            <td><a href="file/pdf/' . $data['Unggah_bukti_pdf'] . '">' . $data['Unggah_bukti_pdf'] . '</a></td>
                                            <td><a href="file/img/' . $data['Unggah_bukti_gambar'] . '"><img src="file/img/' . $data['Unggah_bukti_gambar'] . '" width="100px"></a></td>
                                            <td>' . $data['Catatan'] . '</td>
                                        </tr>
                                        ';
                                    }
                                    echo '</tbody>';
                                } else {
                                    echo '
                                <tbody>
                                    <tr>
                                        <td class="text-center">Tidak ada data di database!</td>
                                    </tr>
                                </tbody>
                                ';
                                }

                                ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Transaksi Berdasarkan Status Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['status'])) {
                                echo '<script>$(".alert").alert()</script>';
                                $status = $_GET['status'];
                                switch ($status) {
                                    case '1':
                                        echo '
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Berhasil menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '2':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Gagal menghapus data.
                                </div>
                            </div>
                            ';
                                        break;
                                    case '3':
                                        echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Data tidak ditemukan.
                                </div>
                            </div>
                            ';
                                        break;
                                }
                            }
                            ?>
                            <div class="table-responsive">
                                <?php echo '<table class="table table-striped" id="table_trx2">'; ?>
                                <?php
                                $sql = mysqli_query($con, "SELECT tb_trx_02.Id, tb_identitas_usaha.nama_usaha, tb_trx_02.Tanggal, tb_trx_02.Uraian, tb_kategori_01.kategori_01, tb_kategori_02.kategori_02, tb_kategori_03.kategori_03, tb_kategori_04.kategori_04, tb_kategori_05.kategori_05, tb_trx_02.Nama_barang, tb_trx_02.Keterangan_barang, tb_trx_02.Unggah_bukti_pdf, tb_trx_02.Unggah_bukti_gambar, tb_trx_02.Catatan FROM tb_trx_02 JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_trx_02.Id_identitas_usaha JOIN tb_kategori_01 ON tb_kategori_01.Id = tb_trx_02.Id_kategori_01 JOIN tb_kategori_02 ON tb_kategori_02.Id = tb_trx_02.Id_kategori_02 JOIN tb_kategori_03 ON tb_kategori_03.Id = tb_trx_02.Id_kategori_03 JOIN tb_kategori_04 ON tb_kategori_04.Id = tb_trx_02.Id_kategori_04 JOIN tb_kategori_05 ON tb_kategori_05.Id = tb_trx_02.Id_kategori_05;") or die(mysqli_error($con));



                                if (mysqli_num_rows($sql) > 0) {
                                    echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Tanggal</th>
                                            <th>Uraian</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Pembayaran Transaksi</th>
                                            <th>Jenis Biaya</th>
                                            <th>Klasifikasi Transaksi</th>
                                            <th>Status Transaksi</th>
                                            <th>Nama Barang</th>
                                            <th>Keterangan Barang</th>
                                            <th>Bukti (Pdf)</th>
                                            <th>Bukti (Gambar)</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                ';
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $data['Id'] . '
                                            </td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Tanggal'] . '</td>
                                            <td>' . $data['Uraian'] . '</td>
                                            <td>' . $data['kategori_01'] . '</td>
                                            <td>' . $data['kategori_02'] . '</td>
                                            <td>' . $data['kategori_03'] . '</td>
                                            <td>' . $data['kategori_04'] . '</td>
                                            <td>' . $data['kategori_05'] . '</td>
                                            <td>' . $data['Nama_barang'] . '</td>
                                            <td>' . $data['Keterangan_barang'] . '</td>
                                            <td><a href="file/pdf/' . $data['Unggah_bukti_pdf'] . '">' . $data['Unggah_bukti_pdf'] . '</a></td>
                                            <td><a href="file/img/' . $data['Unggah_bukti_gambar'] . '"><img src="file/img/' . $data['Unggah_bukti_gambar'] . '" width="100px"></a></td>
                                            <td>' . $data['Catatan'] . '</td>
                                        </tr>
                                        ';
                                    }
                                    echo '</tbody>';
                                } else {
                                    echo '
                                <tbody>
                                    <tr>
                                        <td class="text-center">Tidak ada data di database!</td>
                                    </tr>
                                </tbody>
                                ';
                                }

                                ?>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>