<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Identitas Usaha</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                <div class="breadcrumb-item">Identitas Usaha</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Identitas Usaha</h2>
            <p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Identitas Usaha.</p>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama_usaha = $_POST['nama_usaha'];
                        $Alamat = $_POST['alamat'];
                        $Desa = $_POST['desa'];
                        $Id_Kecamatan = $_POST['kecamatan'];
                        $Id_Kabupaten = $_POST['kabupaten'];
                        $Id_Provinsi = $_POST['provinsi'];

                        $fotoExt = explode('.', $_FILES['upload_foto']['name']);
                        $fotoExt = strtolower(end($fotoExt));
                        $fotoTmpName = $_FILES['upload_foto']['tmp_name'];
                        $upload_foto = uniqid();
                        $upload_foto .= '.';
                        $upload_foto .= $fotoExt;

                        move_uploaded_file($fotoTmpName, 'file/img/' . $upload_foto);

                        $Id_kategori_06 = $_POST['kategori'];
                        $Pemilik = $_POST['pemilik'];
                        $Jam_buka = $_POST['jam_buka'];
                        $Jam_tutup = $_POST['jam_tutup'];
                        $Hari_buka = $_POST['hari_buka'];
                        $Hari_tutup = $_POST['hari_tutup'];
                        $Lokasi_gps = $_POST['lokasi_gps'];
                        $Id_Layanan = $_POST['layanan'];
                        $Tahun_Berdiri = $_POST['tahun_berdiri'];

                        $sql = mysqli_query($con, "INSERT INTO tb_identitas_usaha (Id, nama_usaha, Alamat, Desa, Id_Kecamatan, Id_Kabupaten, Id_Provinsi, upload_foto, Id_kategori_06, Pemilik, Jam_buka, Jam_tutup, Hari_buka, Hari_tutup, Lokasi_gps, Id_Layanan, Tahun_berdiri) VALUES (NULL, '$nama_usaha', '$Alamat', '$Desa', '$Id_Kecamatan', '$Id_Kabupaten', '$Id_Provinsi', '$upload_foto', '$Id_kategori_06', '$Pemilik', '$Jam_buka', '$Jam_tutup', '$Hari_buka', '$Hari_tutup', '$Lokasi_gps', '$Id_Layanan', '$Tahun_Berdiri')") or die(mysqli_error($con));

                        if ($sql) {
                            echo '
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                <span>×</span>
                                </button>
                                Berhasil menambah data.
                            </div>
                        </div>
                        ';
                        } else {
                            echo '
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                <span>×</span>
                                </button>
                                Gagal menambah data.
                            </div>
                        </div>
                        ';
                        }
                    }
                    ?>
                    <form action="index.php?page=identitas_usaha" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Usaha</label>
                            <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                        <div class="form-group">
                            <label>Desa</label>
                            <input type="text" class="form-control" name="desa" id="desa" required>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kecamatan ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['Kecamatan'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten</label>
                            <select class="form-control" name="kabupaten" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kabupaten ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['Kabupaten'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_provinsi ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['Provinsi'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto" name="upload_foto" required>
                                <label class="custom-file-label" for="upload_foto">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_06 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_06'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pemilik</label>
                            <input type="text" class="form-control" name="pemilik" id="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label>Jam Buka</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" name="jam_buka" id="jam_buka" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam Tutup</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" name="jam_tutup" id="jam_tutup" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hari Buka</label>
                            <select class="form-control" name="hari_buka" required>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hari Tutup</label>
                            <select class="form-control" name="hari_tutup" required>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi GPS</label>
                            <input type="text" class="form-control" name="lokasi_gps" id="lokasi_gps" required>
                        </div>
                        <div class="form-group">
                            <label>Layanan</label>
                            <select class="form-control" name="layanan" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_layanan ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['Layanan'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun Berdiri</label>
                            <input type="number" class="form-control" name="tahun_berdiri" id="tahun_berdiri" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>