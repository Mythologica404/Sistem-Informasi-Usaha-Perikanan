<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php
            if (isset($_GET['Id'])) {
                echo '<h1>Edit Data ' . $title . '</h1>';
            } else {
                echo '<h1>Tambah Data ' . $title . '</h1>';
            }
            ?>
            <div class="section-header-button">
                <a href="?page=tampil_<?= $page ?>" class=" btn btn-primary">Lihat Data</a>
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
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= $title ?></h2>
            <?php
            if (isset($_GET['Id'])) {
                echo '<p class="section-lead">Berikut adalah form untuk mengedit data di tabel ' . $title . '.</p>';
            } else {
                echo '<p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel ' . $title . '.</p>';
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
                        $Id_identitas_usaha = $_POST['identitas_usaha'];
                        $Tanggal = $_POST['tanggal'];
                        $Uraian = $_POST['uraian'];
                        $Id_kategori_01 = $_POST['kategori_01'];
                        $Id_kategori_02 = $_POST['kategori_02'];
                        $Id_kategori_03 = $_POST['kategori_03'];
                        $Id_kategori_04 = $_POST['kategori_04'];
                        $Id_kategori_05 = $_POST['kategori_05'];
                        $att1post = $_POST['att1post'];
                        $att2post = $_POST['att2post'];

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

                        $sql = mysqli_query($con, "INSERT INTO $tabel (Id, Id_identitas_usaha, Tanggal, Uraian, Id_kategori_01, Id_kategori_02, Id_kategori_03, Id_kategori_04, Id_kategori_05, $att1, $att2, Unggah_bukti_pdf, Unggah_bukti_gambar, Catatan) VALUES (NULL, '$Id_identitas_usaha', '$Tanggal', '$Uraian', '$Id_kategori_01', '$Id_kategori_02', '$Id_kategori_03', '$Id_kategori_04', '$Id_kategori_05', '$att1post', '$att2post', '$upload_pdf', '$upload_foto', '$Catatan')") or die(mysqli_error($con));

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
                        $Id_identitas_usaha = $_POST['identitas_usaha'];
                        $Tanggal = $_POST['tanggal'];
                        $Uraian = $_POST['uraian'];
                        $Id_kategori_01 = $_POST['kategori_01'];
                        $Id_kategori_02 = $_POST['kategori_02'];
                        $Id_kategori_03 = $_POST['kategori_03'];
                        $Id_kategori_04 = $_POST['kategori_04'];
                        $Id_kategori_05 = $_POST['kategori_05'];
                        $att1post = $_POST['att1post'];
                        $att2post = $_POST['att2post'];

                        $pdfTmpName = $_FILES['upload_pdf']['tmp_name'];
                        $pdfName = $_POST['pdfName'];

                        move_uploaded_file($pdfTmpName, 'file/pdf/' . $pdfName);

                        $fotoTmpName = $_FILES['upload_foto']['tmp_name'];
                        $fotoName = $_POST['fotoName'];

                        move_uploaded_file($fotoTmpName, 'file/img/' . $fotoName);

                        $Catatan = $_POST['catatan'];

                        $Id = $_GET['Id'];

                        $sql = mysqli_query($con, "UPDATE $tabel SET Id_identitas_usaha = '$Id_identitas_usaha', Tanggal = '$Tanggal', Uraian = '$Uraian', Id_kategori_01 = '$Id_kategori_01', Id_kategori_02 = '$Id_kategori_02', Id_kategori_03 = '$Id_kategori_03', Id_kategori_04 = '$Id_kategori_04', Id_kategori_05 = '$Id_kategori_05', $att1 = '$att1post', $att2 = '$att2post', Unggah_bukti_pdf = '$pdfName', Unggah_bukti_gambar = '$fotoName', Catatan = '$Catatan' WHERE $tabel.Id = $Id;") or die(mysqli_error($con));

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

                        $query = mysqli_query($con, "SELECT * FROM $tabel WHERE Id = $Id") or die(mysqli_error($con));

                        $data = mysqli_fetch_assoc($query);
                        $edit1 = $data['Id_identitas_usaha'];
                        $edit2 = $data['Tanggal'];
                        $edit3 = $data['Uraian'];
                        $edit4 = $data['Id_kategori_01'];
                        $edit5 = $data['Id_kategori_02'];
                        $edit6 = $data['Id_kategori_03'];
                        $edit7 = $data['Id_kategori_04'];
                        $edit8 = $data['Id_kategori_05'];
                        $edit9 = $data['$att1'];
                        $edit10 = $data['$att2'];
                        $edit11 = $data['Unggah_bukti_pdf'];
                        $edit12 = $data['Unggah_bukti_gambar'];
                        $edit13 = $data['Catatan'];
                    }
                    ?>

                    <?php
                    if (isset($_GET['Id']) && $page == 'transaksi_penjualan') {
                        echo '<form action="index.php?page=transaksi_penjualan&Id=' . $_GET['Id'] . '" method="post" enctype="multipart/form-data">';
                    } else if (!isset($_GET['Id']) && $page == 'transaksi_penjualan') {
                        echo '<form action="index.php?page=transaksi_penjualan" method="post" enctype="multipart/form-data">';
                    } else if (isset($_GET['Id']) && $page == 'transaksi_non_penjualan') {
                        echo '<form action="index.php?page=transaksi_non_penjualan&Id=' . $_GET['Id'] . '" method="post" enctype="multipart/form-data">';
                    } else if (!isset($_GET['Id']) && $page == 'transaksi_non_penjualan') {
                        echo '<form action="index.php?page=transaksi_non_penjualan" method="post" enctype="multipart/form-data">';
                    }
                    ?>
                    <div class="form-group">
                        <label>Identitas Usaha</label>
                        <select class="form-control" name="identitas_usaha" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_identitas_usaha ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit1 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['nama_usaha'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control datepicker" name="tanggal" value="<?= $edit2 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Uraian</label>
                        <textarea class="form-control" spellcheck="false" name="uraian" value="<?= $edit3 ?>" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kategori Transaksi</label>
                        <select class="form-control" name="kategori_01" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_kategori_01 ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit4 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_01'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit5 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_02'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit6 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_03'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit7 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_04'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit8 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_05'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <?php
                    if ($tabel == 'tb_trx_01') {
                        echo '
                                <div class="form-group">
                                    <label>' . $head1 . '</label>
                                    <select class="form-control" name="att1post" required>';
                        $sql = mysqli_query($con, "SELECT * FROM tb_produk ORDER BY Id ASC") or die(mysqli_error($con));

                        if (mysqli_num_rows($sql) > 0) {
                            while ($data = mysqli_fetch_assoc($sql)) {
                                echo '<option value="' . $data['Id'] . '" ';
                                if ($edit9 == $data['Id']) {
                                    echo 'selected';
                                }
                                echo '>' . $data['nama_produk'] . '</option>';
                            }
                        }
                        echo '
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>' . $head2 . '</label>
                                    <select class="form-control" name="att2post" required>';
                        $sql = mysqli_query($con, "SELECT * FROM tb_trx_harga_produk ORDER BY Id ASC") or die(mysqli_error($con));

                        if (mysqli_num_rows($sql) > 0) {
                            while ($data = mysqli_fetch_assoc($sql)) {
                                echo '<option value="' . $data['Id'] . '" ';
                                if ($edit10 == $data['Id']) {
                                    echo 'selected';
                                }
                                echo '>' . $data['Harga_satuan'] . '</option>';
                            }
                        }
                        echo '
                                        ?>
                                    </select>
                                </div>
                              ';
                    } else {
                        echo '
                            <div class="form-group">
                                <label>' . $head1 . '</label>
                                <input type="text" class="form-control" name="att1post" value="' . $edit9 . '" required>
                            </div>
                            <div class="form-group">
                                <label>' . $head2 . '</label>
                                <textarea class="form-control" spellcheck="false" name="att2post" value="' . $edit10 . '" required></textarea>
                            </div>
                            ';
                    }
                    ?>
                    <div class="form-group">
                        <label>Upload Bukti (.pdf)</label>
                        <div class="custom-file">
                            <input type="hidden" name="pdfName" value="<?= $edit11 ?>">
                            <input type="file" class="custom-file-input" id="upload_pdf" name="upload_pdf" accept=".pdf" required>
                            <label class="custom-file-label" for="upload_pdf">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Bukti (Foto)</label>
                        <div class="custom-file">
                            <input type="hidden" name="fotoName" value="<?= $edit12 ?>">
                            <input type="file" class="custom-file-input" id="upload_foto" name="upload_foto" accept="Image/*" required>
                            <label class="custom-file-label" for="upload_foto">Pilih file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Catatan</label>
                        <textarea class="form-control" spellcheck="false" name="catatan" required><?= $edit13 ?></textarea>
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