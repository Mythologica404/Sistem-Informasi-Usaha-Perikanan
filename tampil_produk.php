<?php include_once("config.php"); ?>

<?php
clearstatcache()
?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lihat Data Produk</h1>
            <div class="section-header-button">
                <a href="?page=produk" class=" btn btn-primary">Tambah Data</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item">Produk</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Produk</h2>
            <p class="section-lead">Berikut adalah tabel Produk</p>

            <div class="card">
                <div class="card-header">
                    <h4 id="nama-table">Tabel Produk</h4>
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
                            $sql = mysqli_query($con, "SELECT tb_produk.Id, tb_produk.nama_produk, tb_kategori_06.kategori_06, tb_identitas_usaha.nama_usaha, tb_produk.Deskripsi_produk, tb_kategori_07.kategori_07, tb_produk.Photo_1, tb_produk.Photo_2, tb_produk.Photo_3, tb_produk.Photo_4, tb_produk.Unggah_Video, tb_produk.Video_Youtube FROM tb_produk JOIN tb_kategori_06 ON tb_kategori_06.Id = tb_produk.Id_kategori_produk JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_produk.Id_identitas_usaha JOIN tb_kategori_07 ON tb_kategori_07.Id = tb_produk.Id_kategori_07;") or die(mysqli_error($con));

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
                                            <td>' . $data['kategori_06'] . '</td>
                                            <td>' . $data['nama_usaha'] . '</td>
                                            <td>' . $data['Deskripsi_produk'] . '</td>
                                            <td>' . $data['kategori_07'] . '</td>
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
    </section>
</div>