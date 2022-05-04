<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Transaksi Non Penjualan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                <div class="breadcrumb-item">Transaksi Non Penjualan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Transaksi Non Penjualan</h2>
            <p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Transaksi Non Penjualan.</p>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $Id_identitas_usaha = $_POST['identitas_usaha'];
                        $Tanggal = $_POST['tanggal'];
                        $Uraian = $_POST['uraian'];
                        $Id_kategori_01 = $_POST['kategori_01'];
                        $Id_kategori_02 = $_POST['kategori_02'];
                        $Id_kategori_03 = $_POST['kategori_03'];
                        $Id_kategori_04 = $_POST['kategori_04'];
                        $Id_kategori_05 = $_POST['kategori_05'];
                        $Nama_Barang = $_POST['nama_barang'];
                        $Keterangan_barang = $_POST['keterangan_barang'];

                        $pdfExt = explode('.', $_FILES['upload_pdf']['name']);
                        $pdfExt = strtolower(end($pdfExt));
                        $fotoTmpName = $_FILES['upload_pdf']['tmp_name'];
                        $upload_pdf = uniqid();
                        $upload_pdf .= '.';
                        $upload_pdf .= $pdfExt;

                        move_uploaded_file($fotoTmpName, 'file/pdf/' . $upload_pdf);

                        $fotoExt = explode('.', $_FILES['upload_foto']['name']);
                        $fotoExt = strtolower(end($fotoExt));
                        $fotoTmpName = $_FILES['upload_foto']['tmp_name'];
                        $upload_foto = uniqid();
                        $upload_foto .= '.';
                        $upload_foto .= $fotoExt;

                        move_uploaded_file($fotoTmpName, 'file/img/' . $upload_foto);

                        $Catatan = $_POST['catatan'];

                        $sql = mysqli_query($con, "INSERT INTO tb_trx_02 (Id, Id_identitas_usaha, Tanggal, Uraian, Id_kategori_01, Id_kategori_02, Id_kategori_03, Id_kategori_04, Id_kategori_05, Nama_barang, Keterangan_barang, Unggah_bukti_pdf, Unggah_bukti_gambar, Catatan) VALUES (NULL, '$Id_identitas_usaha', '$Tanggal', '$Uraian', '$Id_kategori_01', '$Id_kategori_02', '$Id_kategori_03', '$Id_kategori_04', '$Id_kategori_05', '$Nama_Barang', '$Keterangan_barang', '$upload_pdf', '$upload_foto', '$Catatan')") or die(mysqli_error($con));

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
                    <form action="index.php?page=transaksi_non_penjualan" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Identitas Usaha</label>
                            <select class="form-control" name="identitas_usaha" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_identitas_usaha ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['nama_usaha'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control datepicker" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label>Uraian</label>
                            <textarea class="form-control" spellcheck="false" name="uraian" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kategori Transaksi</label>
                            <select class="form-control" name="kategori_01" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_01 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_01'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori Pembayaran Transaksi</label>
                            <select class="form-control" name="kategori_02" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_02 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_02'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kategori Biaya</label>
                            <select class="form-control" name="kategori_03" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_03 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_03'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Transaksi</label>
                            <select class="form-control" name="kategori_04" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_04 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_04'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Transaksi</label>
                            <select class="form-control" name="kategori_05" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_05 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_05'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan Barang</label>
                            <textarea class="form-control" spellcheck="false" name="keterangan_barang" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Upload Bukti (.pdf)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_pdf" name="upload_pdf" accept=".pdf" required>
                                <label class="custom-file-label" for="upload_pdf">Pilih file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Upload Bukti (Foto)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto" name="upload_foto" accept="Image/*" required>
                                <label class="custom-file-label" for="upload_foto">Pilih file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea class="form-control" spellcheck="false" name="catatan" required></textarea>
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