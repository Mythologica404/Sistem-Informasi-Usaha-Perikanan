<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lihat Data Transaksi Produk</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item">Transaksi Produk</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Transaksi Produk</h2>
            <p class="section-lead">Berikut adalah tabel Transaksi Produk</p>

            <div class="card">
                <div class="card-header">
                    <h4 id="nama-table">Tabel Transaksi Produk</h4>
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
                                            <th style="min-width: 135px; max-width: 135px">Action</th>
                                        </tr>
                                    </thead>
                                ';
                            while ($data = mysqli_fetch_assoc($sql)) {
                                echo '
                                    <tbody>
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
                                            <td class="text-center" style="width:350px;"><a href="#" class="btn btn-warning">Edit</a> <a onclick="return confirm(\'Apakah anda yakin ingin menghapus data?\')" href="delete.php?Id=' . $data['Id'] . '&table=' . $tabel . '&page=' . $page . '" class="btn btn-danger">Hapus</a> </td>
                                        </tr>
                                    </tbody>
                                    ';
                            }
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
    </section>
</div>