<?php include_once("config.php"); ?>


<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                <div class="breadcrumb-item">Produk</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Produk</h2>
            <p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Produk.</p>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama_produk = $_POST['nama_produk'];
                        $Id_kategori_produk = $_POST['kategori_produk'];
                        $Id_identitas_usaha = $_POST['identitas_usaha'];
                        $Deskripsi_produk = $_POST['deskripsi'];
                        $Id_kategori_07 = $_POST['kategori_07'];

                        $foto1Ext = explode('.', $_FILES['upload_foto1']['name']);
                        $foto1Ext = strtolower(end($foto1Ext));
                        $foto1TmpName = $_FILES['upload_foto1']['tmp_name'];
                        $upload_foto1 = uniqid();
                        $upload_foto1 .= '.';
                        $upload_foto1 .= $fotoExt1;

                        move_uploaded_file($foto1TmpName, 'file/img/' . $upload_foto1);

                        $foto2Ext = explode('.', $_FILES['upload_foto2']['name']);
                        $foto2Ext = strtolower(end($foto2Ext));
                        $foto2TmpName = $_FILES['upload_foto2']['tmp_name'];
                        $upload_foto2 = uniqid();
                        $upload_foto2 .= '.';
                        $upload_foto2 .= $fotoExt1;

                        move_uploaded_file($foto2TmpName, 'file/img/' . $upload_foto2);

                        $foto3Ext = explode('.', $_FILES['upload_foto3']['name']);
                        $foto3Ext = strtolower(end($foto3Ext));
                        $foto3TmpName = $_FILES['upload_foto3']['tmp_name'];
                        $upload_foto3 = uniqid();
                        $upload_foto3 .= '.';
                        $upload_foto3 .= $fotoExt3;

                        move_uploaded_file($foto3TmpName, 'file/img/' . $upload_foto3);

                        $foto4Ext = explode('.', $_FILES['upload_foto4']['name']);
                        $foto4Ext = strtolower(end($foto4Ext));
                        $foto4TmpName = $_FILES['upload_foto4']['tmp_name'];
                        $upload_foto4 = uniqid();
                        $upload_foto4 .= '.';
                        $upload_foto4 .= $fotoExt4;

                        move_uploaded_file($foto4TmpName, 'file/img/' . $upload_foto4);

                        $videoExt = explode('.', $_FILES['upload_video']['name']);
                        $videoExt = strtolower(end($videoExt));
                        $videoTmpName = $_FILES['upload_video']['tmp_name'];
                        $upload_video = uniqid();
                        $upload_video .= '.';
                        $upload_video .= $videoExt;

                        move_uploaded_file($videoTmpName, 'file/video/' . $upload_video);

                        $Video_Youtube = $_POST['video_youtube'];

                        $sql = mysqli_query($con, "INSERT INTO tb_produk (Id, nama_produk, Id_kategori_produk, Id_identitas_usaha, Deskripsi_produk, Id_kategori_07, Photo_1, Photo_2, Photo_3, Photo_4, Unggah_Video, Video_Youtube) VALUES (NULL, '$nama_produk', '$Id_kategori_produk', '$Id_identitas_usaha', '$Deskripsi_produk', '$Id_kategori_07', '$upload_foto1', '$upload_foto2', '$upload_foto3', '$upload_foto4', '$upload_video', '$Video_Youtube')") or die(mysqli_error($con));

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
                    <form action="index.php?page=produk" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" id="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori Produk</label>
                            <select class="form-control" name="kategori_produk" required>
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
                            <label>Deskripsi Produk</label>
                            <textarea class="form-control" spellcheck="false" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori_07" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_kategori_07 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['kategori_07'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto 1</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto1" name="upload_foto1" accept="Image/*" required>
                                <label class="custom-file-label" for="upload_foto1">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto 2</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto2" name="upload_foto2" accept="Image/*" required>
                                <label class="custom-file-label" for="upload_foto2">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto 3</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto3" name="upload_foto3" accept="Image/*" required>
                                <label class="custom-file-label" for="upload_foto3">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto 4</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto4" name="upload_foto4" accept="Image/*" required>
                                <label class="custom-file-label" for="upload_foto4">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload Video</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_video" name="upload_video" accept="Video/*" required>
                                <label class="custom-file-label" for="upload_video">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Video Youtube</label>
                            <input type="text" class="form-control" name="video_youtube" id="video_youtube" required>
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