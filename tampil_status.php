<?php include_once("config.php"); ?>

<?php
clearstatcache()
?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lihat Data <?= $title ?></h1>
            <div class="section-header-button">
                <a href="?page=<?= $add ?>" class=" btn btn-primary">Tambah Data</a>
            </div>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= $title ?></h2>
            <p class="section-lead">Berikut adalah tabel <?= $title ?>.</p>

            <div class="card">
                <div class="card-header">
                    <h4 id="nama-table">Tabel <?= $title ?></h4>
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
                            $sql = mysqli_query($con, "SELECT $tabel.Id, $tabel.Tanggal, $tabel.Id_tb_trx_01, $tabel.Status_awal, tb_kategori_05.kategori_05, $tabel.Keterangan FROM $tabel JOIN tb_kategori_05 ON tb_kategori_05.Id = $tabel.Id_kategori_05;") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>Tanggal</th>
                                            <th>Id Transaksi</th>
                                            <th>Status Awal</th>
                                            <th>Status Transaksi</th>
                                            <th>Keterangan</th>
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
                                            <td>' . $data['Tanggal'] . '</td>
                                            <td>' . $data['Id_tb_trx_01'] . '</td>
                                            <td>' . $data['Status_awal'] . '</td>
                                            <td>' . $data['kategori_05'] . '</td>
                                            <td>' . $data['Keterangan'] . '</td>
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
    </section>
</div>