<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lihat Data Stock Produk</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item">Stock Produk</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Stock Produk</h2>
            <p class="section-lead">Berikut adalah tabel Stock Produk</p>

            <div class="card">
                <div class="card-header">
                    <h4 id="nama-table">Tabel Stock Produk</h4>
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
                        <table class="table table-striped" id="table-6attribute" style="width: 100%">
                            <?php
                            $sql = mysqli_query($con, "SELECT tb_trx_stock.Id, tb_identitas_usaha.nama_usaha, tb_trx_stock.Tanggal, tb_produk.nama_produk, tb_trx_stock.Stock, tb_trx_stock.Terjual FROM tb_trx_stock JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_trx_stock.Id_identitas_usaha JOIN tb_produk ON tb_produk.Id = tb_trx_stock.Id_produk;") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>Nama Usaha</th>
                                            <th>Tanggal</th>
                                            <th>Nama Produk</th>
                                            <th>Stock</th>
                                            <th>Terjual</th>
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
                                            <td>' . $data['nama_produk'] . '</td>
                                            <td>' . $data['Stock'] . '</td>
                                            <td>' . $data['Terjual'] . '</td>
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