<?php include_once("config.php"); ?>

<?php
clearstatcache()
?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Sistem Informasi Manajemen Usaha Perikanan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Biodata Kelompok</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title" id="nama-table">Biodata Kelompok</h2>
            <p class="section-lead">Berikut adalah biodata anggota kelompok kami.</p>

            <div class="row">
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Anggota 1</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="400">
                                <div class="user-item">
                                    <img alt="image" src="assets/img/biodata/anggota_1.png" class="img-fluid" style="width: 275px">
                                </div>
                                <h2 style="color: #6777ef;">Gianti Ramadhania</h2>
                                <h5>1910715220015</h2>
                            </div>
                            <h5>Email</h5>
                            <p style="font-size: 1.1rem;">giantiramadhania29@gmail.com</p>
                            <h5>Alamat</h5>
                            <p style="font-size: 1.1rem;">Jalan Karamunting 1 Nomor 15, Banjarbaru Selatan, Kalimantan Selatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Anggota 2</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="400">
                                <div class="user-item">
                                    <img alt="image" src="assets/img/biodata/anggota_2.png" class="img-fluid" style="width: 275px">
                                </div>
                                <h2 style="color: #6777ef;">Eva Nur Anggraini</h2>
                                <h5>1910715220014</h2>
                            </div>
                            <h5>Email</h5>
                            <p style="font-size: 1.1rem;">evaanggraini051@gmail.com</p>
                            <h5>Alamat</h5>
                            <p style="font-size: 1.1rem;">Jalan Transad, Guntung Manggis, Kel. Guntung Manggis, Kec. Landasan Ulin, Banjarbaru, Kalimantan Selatan, 70721</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Anggota 3</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="400">
                                <div class="user-item">
                                    <img alt="image" src="assets/img/biodata/anggota_3.png" class="img-fluid" style="width: 275px">
                                </div>
                                <h2 style="color: #6777ef;">Tania Kusuma Dewati</h2>
                                <h5>1910715220019</h2>
                            </div>
                            <h5>Email</h5>
                            <p style="font-size: 1.1rem;">tdewati@gmail.com</p>
                            <h5>Alamat</h5>
                            <p style="font-size: 1.1rem;">Jalan Pari No 34 Ratu Elok</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Anggota 4</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="400">
                                <div class="user-item">
                                    <img alt="image" src="assets/img/biodata/anggota_4.png" class="img-fluid" style="width: 275px">
                                </div>
                                <h2 style="color: #6777ef;">Mahdalena Parika</h2>
                                <h5>1910715220018</h2>
                            </div>
                            <h5>Email</h5>
                            <p style="font-size: 1.1rem;">mahda582@gmail.com</p>
                            <h5>Alamat</h5>
                            <p style="font-size: 1.1rem;">Jalan Kh.anang sya'rani arif, Martapura Timur</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Anggota 5</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="400">
                                <div class="user-item">
                                    <img alt="image" src="assets/img/biodata/anggota_5.png" class="img-fluid" style="width: 275px">
                                </div>
                                <h2 style="color: #6777ef;">Muhammad Rizky Akbar</h2>
                                <h5>1910715310001</h2>
                            </div>
                            <h5>Email</h5>
                            <p style="font-size: 1.1rem;">muhammadrizkyakbar14022001@gmail.com</p>
                            <h5>Alamat</h5>
                            <p style="font-size: 1.1rem;">Komp. Al-Jihad Rt. 20 Rw. 03 sungai paring</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title" id="nama-table">Output Tabel</h2>
            <p class="section-lead">Berikut adalah output dari 4 tabel yang diminta.</p>

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

        <div class="section-body">
            <h2 class="section-title">Output Grafis</h2>
            <p class="section-lead">
                Berikut adalah output dari 5 grafis dan tabel yang diminta.</a>.
            </p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toko berdasarkan Kategori</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="tokoByKategori"></canvas>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" style="width: 100%">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_identitas_usaha.nama_usaha, tb_kategori_usaha.kategori_toko FROM tb_identitas_usaha JOIN tb_kategori_usaha ON tb_kategori_usaha.Id = tb_identitas_usaha.Id_kategori_06;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Kategori</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                ';
                                        $no = 1;
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $no . '
                                            </td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['kategori_toko'] . '</td>
                                        </tr>
                                        ';
                                            $no++;
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
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toko berdasarkan Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="tokoByKecamatan"></canvas>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" style="width: 100%">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_identitas_usaha.nama_usaha, tb_kecamatan.Kecamatan FROM tb_identitas_usaha JOIN tb_kecamatan ON tb_kecamatan.Id = tb_identitas_usaha.Id_Kecamatan;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Kecamatan</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                ';
                                        $no = 1;
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $no . '
                                            </td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Kecamatan'] . '</td>
                                        </tr>
                                        ';
                                            $no++;
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
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toko berdasarkan Kabupaten</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="tokoByKabupaten"></canvas>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" style="width: 100%">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_identitas_usaha.nama_usaha, tb_kabupaten.Kabupaten FROM tb_identitas_usaha JOIN tb_kabupaten ON tb_kabupaten.Id = tb_identitas_usaha.Id_Kabupaten;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Kabupaten</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                ';
                                        $no = 1;
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $no . '
                                            </td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Kabupaten'] . '</td>
                                        </tr>
                                        ';
                                            $no++;
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
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Produk berdasarkan Toko</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="produkByToko"></canvas>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" style="width: 100%">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_produk.nama_produk, tb_identitas_usaha.nama_usaha FROM tb_produk JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_produk.Id_identitas_usaha;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Produk</th>
                                            <th>Toko</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                ';
                                        $no = 1;
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $no . '
                                            </td>
                                            <td>' . $data['nama_produk'] . '</td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                        </tr>
                                        ';
                                            $no++;
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
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Produk berdasarkan Kategori</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="produkByKategori"></canvas>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" style="width: 100%">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT tb_produk.nama_produk, tb_kategori_06.kategori_06 FROM tb_produk JOIN tb_kategori_06 ON tb_kategori_06.Id = tb_produk.Id_kategori_produk;") or die(mysqli_error($con));

                                    if (mysqli_num_rows($sql) > 0) {
                                        echo '
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                ';
                                        $no = 1;
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                            echo '
                                        <tr>
                                            <td style="width: 85px" ;>
                                                ' . $no . '
                                            </td>
                                            <td>' . $data['nama_produk'] . '</td>
                                            <td>' . $data['kategori_06'] . '</td>
                                        </tr>
                                        ';
                                            $no++;
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

<script src="node_modules/chart.js/dist/Chart.min.js"></script>


<script>
    <?php
    $query1 = mysqli_query($con, "SELECT kategori_toko, COUNT(*) FROM tb_identitas_usaha JOIN tb_kategori_usaha ON tb_kategori_usaha.Id = tb_identitas_usaha.Id_kategori_06 GROUP BY kategori_toko;") or die(mysqli_error($con));

    foreach ($query1 as $data) {
        $kategori[] = $data['kategori_toko'];
        $count[] = $data['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("tokoByKategori").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: <?php
                    echo json_encode($kategori);
                    ?>,
            datasets: [{
                label: "Statistics",
                data: <?php
                        echo json_encode($count);
                        ?>,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: true,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query2 = mysqli_query($con, "SELECT Kecamatan, COUNT(*) FROM tb_identitas_usaha JOIN tb_kecamatan ON tb_kecamatan.Id = tb_identitas_usaha.Id_Kecamatan GROUP BY Kecamatan;") or die(mysqli_error($con));

    foreach ($query2 as $data2) {
        $kecamatan[] = $data2['Kecamatan'];
        $count2[] = $data2['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("tokoByKecamatan").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: <?php
                    echo json_encode($kecamatan);
                    ?>,
            datasets: [{
                label: "Statistics",
                data: <?php
                        echo json_encode($count2);
                        ?>,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: true,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query3 = mysqli_query($con, "SELECT Kabupaten, COUNT(*) FROM tb_identitas_usaha JOIN tb_kabupaten ON tb_kabupaten.Id = tb_identitas_usaha.Id_Kabupaten GROUP BY Kabupaten;") or die(mysqli_error($con));

    foreach ($query3 as $data3) {
        $kabupaten[] = $data3['Kabupaten'];
        $count3[] = $data3['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("tokoByKabupaten").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: <?php
                    echo json_encode($kabupaten);
                    ?>,
            datasets: [{
                label: "Statistics",
                data: <?php
                        echo json_encode($count3);
                        ?>,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: true,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query4 = mysqli_query($con, "SELECT nama_usaha, COUNT(*) FROM tb_produk JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_produk.Id_identitas_usaha GROUP BY nama_usaha;") or die(mysqli_error($con));

    foreach ($query4 as $data4) {
        $toko[] = $data4['nama_usaha'];
        $count4[] = $data4['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("produkByToko").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: <?php
                    echo json_encode($toko);
                    ?>,
            datasets: [{
                label: "Statistics",
                data: <?php
                        echo json_encode($count4);
                        ?>,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: true,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query5 = mysqli_query($con, "SELECT kategori_toko, COUNT(*) FROM tb_produk JOIN tb_kategori_usaha ON tb_kategori_usaha.Id = tb_produk.Id_kategori_produk GROUP BY kategori_toko;") or die(mysqli_error($con));

    foreach ($query5 as $data5) {
        $kategori02[] = $data5['kategori_toko'];
        $count5[] = $data5['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("produkByKategori").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: <?php
                    echo json_encode($kategori02);
                    ?>,
            datasets: [{
                label: "Statistics",
                data: <?php
                        echo json_encode($count5);
                        ?>,
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: true,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>