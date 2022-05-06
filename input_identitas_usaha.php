<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php
            if (isset($_GET['Id'])) {
                echo '<h1>Edit Data Identitas Usaha</h1>';
            } else {
                echo '<h1>Tambah Data Identitas Usaha</h1>';
            }
            ?>
            <div class="section-header-button">
                <a href="?page=tampil_identitas_usaha" class=" btn btn-primary">Lihat Data</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">
                        <?php
                        if (isset($_GET['Id'])) {
                            echo 'Edit Data';
                        } else {
                            echo 'Tambah Data';
                        }
                        ?>
                    </a></div>
                <div class="breadcrumb-item">Identitas Usaha</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Identitas Usaha</h2>
            <?php
            if (isset($_GET['Id'])) {
                echo '<p class="section-lead">Berikut adalah form untuk mengedit data di tabel Identitas Usaha.</p>';
            } else {
                echo '<p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Identitas Usaha.</p>';
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <?php
                    if (isset($_GET['Id'])) {
                        echo '<h4>Edit Data</h4>';
                    } else {
                        echo '<h4>Tambah Data</h4>';
                    }
                    ?>
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

                    <?php
                    if (isset($_POST['simpan'])) {
                        $nama_usaha = $_POST['nama_usaha'];
                        $Alamat = $_POST['alamat'];
                        $Desa = $_POST['desa'];
                        $Id_Kecamatan = $_POST['kecamatan'];
                        $Id_Kabupaten = $_POST['kabupaten'];
                        $Id_Provinsi = $_POST['provinsi'];
                        $fotoTmpName = $_FILES['upload_foto']['tmp_name'];
                        $fotoName = $_POST['fotoName'];

                        move_uploaded_file($fotoTmpName, 'file/img/' . $fotoName);

                        $Id_kategori_06 = $_POST['kategori'];
                        $Pemilik = $_POST['pemilik'];
                        $Jam_buka = $_POST['jam_buka'];
                        $Jam_tutup = $_POST['jam_tutup'];
                        $Hari_buka = $_POST['hari_buka'];
                        $Hari_tutup = $_POST['hari_tutup'];
                        $Lokasi_gps = $_POST['lokasi_gps'];
                        $Id_Layanan = $_POST['layanan'];
                        $Tahun_Berdiri = $_POST['tahun_berdiri'];

                        $Id = $_GET['Id'];

                        $sql = mysqli_query($con, "UPDATE tb_identitas_usaha SET nama_usaha = '$nama_usaha', Alamat = '$Alamat', Desa = '$Desa', Id_Kecamatan = '$Id_Kecamatan', Id_Kabupaten = '$Id_Kabupaten', Id_Provinsi = '$Id_Provinsi', upload_foto = '$fotoName', Id_kategori_06 = '$Id_kategori_06', Pemilik = '$Pemilik', Jam_buka = '$Jam_buka', Jam_tutup = '$Jam_tutup', Hari_buka = '$Hari_buka', Hari_tutup = '$Hari_tutup', Lokasi_gps = '$Lokasi_gps', Id_Layanan = '$Id_Layanan', Tahun_berdiri = '$Tahun_Berdiri' WHERE tb_identitas_usaha.Id = $Id;") or die(mysqli_error($con));

                        if ($sql) {
                            echo '
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Berhasil mengupdate data.
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
                                    Gagal mengupdate data.
                                </div>
                            </div>
                            ';
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['Id'])) {
                        $Id = $_GET['Id'];

                        $query = mysqli_query($con, "SELECT * FROM tb_identitas_usaha WHERE Id = $Id") or die(mysqli_error($con));

                        $data = mysqli_fetch_assoc($query);
                        $edit1 = $data['nama_usaha'];
                        $edit2 = $data['Alamat'];
                        $edit3 = $data['Desa'];
                        $edit4 = $data['Id_Kecamatan'];
                        $edit5 = $data['Id_Kabupaten'];
                        $edit6 = $data['Id_Provinsi'];
                        $edit7 = $data['upload_foto'];
                        $edit8 = $data['Id_kategori_06'];
                        $edit9 = $data['Pemilik'];
                        $edit10 = $data['Jam_buka'];
                        $edit11 = $data['Jam_tutup'];
                        $edit12 = $data['Hari_buka'];
                        $edit13 = $data['Hari_tutup'];
                        $edit14 = $data['Lokasi_gps'];
                        $edit15 = $data['Id_Layanan'];
                        $edit16 = $data['Tahun_berdiri'];
                    }
                    ?>

                    <?php
                    if (isset($_GET['Id'])) {
                        echo '<form action="index.php?page=identitas_usaha&Id=' . $_GET['Id'] . '" method="post" enctype="multipart/form-data">';
                    } else {
                        echo '<form action="index.php?page=identitas_usaha" method="post" enctype="multipart/form-data">';
                    }
                    ?>
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" value="<?= $edit1 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $edit2 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Desa</label>
                        <input type="text" class="form-control" name="desa" id="desa" value="<?= $edit3 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" name="kecamatan" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_kecamatan ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit4 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['Kecamatan'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit5 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['Kabupaten'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit6 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['Provinsi'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <div class="custom-file">
                            <input type="hidden" name="fotoName" value="<?= $edit7 ?>">
                            <input type="file" class="custom-file-input" id="upload_foto" name="upload_foto" accept="Image/*" required>
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit8 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_06'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pemilik</label>
                        <input type="text" class="form-control" name="pemilik" id="pemilik" value="<?= $edit9 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jam Buka</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control timepicker" name="jam_buka" id="jam_buka" value="<?= $edit10 ?>" required>
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
                            <input type="text" class="form-control timepicker" name="jam_tutup" id="jam_tutup" value="<?= $edit11 ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Hari Buka</label>
                        <select class="form-control" name="hari_buka" required>
                            <option value="Senin" <?php if ($edit12 == "Senin") {
                                                        echo 'selected';
                                                    } ?>>Senin</option>
                            <option value="Selasa" <?php if ($edit12 == "Selasa") {
                                                        echo 'selected';
                                                    } ?>>Selasa</option>
                            <option value="Rabu" <?php if ($edit12 == "Rabu") {
                                                        echo 'selected';
                                                    } ?>>Rabu</option>
                            <option value="Kamis" <?php if ($edit12 == "Kamis") {
                                                        echo 'selected';
                                                    } ?>>Kamis</option>
                            <option value="Jumat" <?php if ($edit12 == "Jumat") {
                                                        echo 'selected';
                                                    } ?>>Jum'at</option>
                            <option value="Sabtu" <?php if ($edit12 == "Sabtu") {
                                                        echo 'selected';
                                                    } ?>>Sabtu</option>
                            <option value="Minggu" <?php if ($edit12 == "Minggu") {
                                                        echo 'selected';
                                                    } ?>>Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hari Tutup</label>
                        <select class="form-control" name="hari_tutup" required>
                            <option value="Senin" <?php if ($edit13 == "Senin") {
                                                        echo 'selected';
                                                    } ?>>Senin</option>
                            <option value="Selasa" <?php if ($edit13 == "Selasa") {
                                                        echo 'selected';
                                                    } ?>>Selasa</option>
                            <option value="Rabu" <?php if ($edit13 == "Rabu") {
                                                        echo 'selected';
                                                    } ?>>Rabu</option>
                            <option value="Kamis" <?php if ($edit13 == "Kamis") {
                                                        echo 'selected';
                                                    } ?>>Kamis</option>
                            <option value="Jumat" <?php if ($edit13 == "Jumat") {
                                                        echo 'selected';
                                                    } ?>>Jum'at</option>
                            <option value="Sabtu" <?php if ($edit13 == "Sabtu") {
                                                        echo 'selected';
                                                    } ?>>Sabtu</option>
                            <option value="Minggu" <?php if ($edit13 == "Minggu") {
                                                        echo 'selected';
                                                    } ?>>Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi GPS</label>
                        <input type="text" class="form-control" name="lokasi_gps" id="lokasi_gps" value="<?= $edit14 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select class="form-control" name="layanan" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_layanan ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit15 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['Layanan'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun Berdiri</label>
                        <input type="number" class="form-control" name="tahun_berdiri" id="tahun_berdiri" value="<?= $edit16 ?>" required>
                    </div>
                    <div class=" form-group">
                        <?php
                        if (isset($_GET['Id'])) {
                            echo '<button type="submit" class="btn btn-primary" name="simpan">Submit</button>';
                        } else {
                            echo '<button type="submit" class="btn btn-primary" name="submit">Submit</button>';
                        }
                        ?>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>