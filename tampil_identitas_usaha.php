<?php include_once("config.php"); ?>

<?php
clearstatcache()
?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lihat Data Identitas Usaha</h1>
            <div class="section-header-button">
                <a href="?page=identitas_usaha" class=" btn btn-primary">Tambah Data</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item">Identitas Usaha</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Identitas Usaha</h2>
            <p class="section-lead">Berikut adalah tabel Identitas Usaha</p>

            <div class="card">
                <div class="card-header">
                    <h4 id="nama-table">Tabel Identitas Usaha</h4>
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
    </section>
</div>