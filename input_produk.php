<?php include_once("config.php"); ?>


<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php
            if (isset($_GET['Id'])) {
                echo '<h1>Edit Data Produk</h1>';
            } else {
                echo '<h1>Tambah Data Produk</h1>';
            }
            ?>
            <div class="section-header-button">
                <a href="?page=tampil_produk" class=" btn btn-primary">Lihat Data</a>
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
                <div class="breadcrumb-item">Produk</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Produk</h2>
            <?php
            if (isset($_GET['Id'])) {
                echo '<p class="section-lead">Berikut adalah form untuk mengedit data di tabel Produk.</p>';
            } else {
                echo '<p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Produk.</p>';
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
                        $upload_foto1 .= $foto1Ext;

                        move_uploaded_file($foto1TmpName, 'file/img/' . $upload_foto1);

                        $foto2Ext = explode('.', $_FILES['upload_foto2']['name']);
                        $foto2Ext = strtolower(end($foto2Ext));
                        $foto2TmpName = $_FILES['upload_foto2']['tmp_name'];
                        $upload_foto2 = uniqid();
                        $upload_foto2 .= '.';
                        $upload_foto2 .= $foto2Ext;

                        move_uploaded_file($foto2TmpName, 'file/img/' . $upload_foto2);

                        $foto3Ext = explode('.', $_FILES['upload_foto3']['name']);
                        $foto3Ext = strtolower(end($foto3Ext));
                        $foto3TmpName = $_FILES['upload_foto3']['tmp_name'];
                        $upload_foto3 = uniqid();
                        $upload_foto3 .= '.';
                        $upload_foto3 .= $foto3Ext;

                        move_uploaded_file($foto3TmpName, 'file/img/' . $upload_foto3);

                        $foto4Ext = explode('.', $_FILES['upload_foto4']['name']);
                        $foto4Ext = strtolower(end($foto4Ext));
                        $foto4TmpName = $_FILES['upload_foto4']['tmp_name'];
                        $upload_foto4 = uniqid();
                        $upload_foto4 .= '.';
                        $upload_foto4 .= $foto4Ext;

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

                    <?php
                    if (isset($_POST['simpan'])) {
                        $nama_produk = $_POST['nama_produk'];
                        $Id_kategori_produk = $_POST['kategori_produk'];
                        $Id_identitas_usaha = $_POST['identitas_usaha'];
                        $Deskripsi_produk = $_POST['deskripsi'];
                        $Id_kategori_07 = $_POST['kategori_07'];

                        $foto1TmpName = $_FILES['upload_foto1']['tmp_name'];
                        $foto1Name = $_POST['foto1Name'];

                        move_uploaded_file($foto1TmpName, 'file/img/' . $foto1Name);

                        $foto2TmpName = $_FILES['upload_foto2']['tmp_name'];
                        $foto2Name = $_POST['foto2Name'];

                        move_uploaded_file($foto2TmpName, 'file/img/' . $foto2Name);

                        $foto3TmpName = $_FILES['upload_foto3']['tmp_name'];
                        $foto3Name = $_POST['foto3Name'];

                        move_uploaded_file($foto3TmpName, 'file/img/' . $foto3Name);

                        $foto4TmpName = $_FILES['upload_foto4']['tmp_name'];
                        $foto4Name = $_POST['foto4Name'];

                        move_uploaded_file($foto4TmpName, 'file/img/' . $foto4Name);

                        $videoTmpName = $_FILES['upload_video']['tmp_name'];
                        $videoName = $_POST['foto4Name'];

                        move_uploaded_file($videoTmpName, 'file/video/' . $videoName);

                        $Video_Youtube = $_POST['video_youtube'];

                        $Id = $_GET['Id'];

                        $sql = mysqli_query($con, "UPDATE tb_produk SET nama_produk = '$nama_produk', Id_kategori_produk = '$Id_kategori_produk', Id_identitas_usaha = '$Id_identitas_usaha', Deskripsi_produk = '$Deskripsi_produk', Id_kategori_07 = '$Id_kategori_07', Photo_1 = '$foto1Name', Photo_2 = '$foto2Name', Photo_3 = '$foto3Name', Photo_4 = '$foto4Name', Unggah_Video = '$videoName', Video_Youtube = '$Video_Youtube' WHERE tb_produk.Id = $Id;") or die(mysqli_error($con));

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

                        $query = mysqli_query($con, "SELECT * FROM tb_produk WHERE Id = $Id") or die(mysqli_error($con));

                        $data = mysqli_fetch_assoc($query);
                        $edit1 = $data['nama_produk'];
                        $edit2 = $data['Id_kategori_produk'];
                        $edit3 = $data['Id_identitas_usaha'];
                        $edit4 = $data['Deskripsi_produk'];
                        $edit5 = $data['Id_kategori_07'];
                        $edit6 = $data['Photo_1'];
                        $edit7 = $data['Photo_2'];
                        $edit8 = $data['Photo_3'];
                        $edit9 = $data['Photo_4'];
                        $edit10 = $data['Unggah_Video'];
                        $edit11 = $data['Video_Youtube'];
                    }
                    ?>

                    <?php
                    if (isset($_GET['Id'])) {
                        echo '<form action="index.php?page=produk&Id=' . $_GET['Id'] . '" method="post" enctype="multipart/form-data">';
                    } else {
                        echo '<form action="index.php?page=produk" method="post" enctype="multipart/form-data">';
                    }
                    ?>
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="<?= $edit1 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori Produk</label>
                        <select class="form-control" name="kategori_produk" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_kategori_06 ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit2 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_06'] . '</option>';
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
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit3 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['nama_usaha'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" spellcheck="false" name="deskripsi" value="<?= $edit4 ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori_07" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_kategori_07 ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit5 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_07'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto 1</label>
                        <div class="custom-file">
                            <input type="hidden" name="foto1Name" value="<?= $edit6 ?>">
                            <input type="file" class="custom-file-input" id="upload_foto1" name="upload_foto1" accept="Image/*" required>
                            <label class="custom-file-label" for="upload_foto1">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto 2</label>
                        <div class="custom-file">
                            <input type="hidden" name="foto2Name" value="<?= $edit7 ?>">
                            <input type="file" class="custom-file-input" id="upload_foto2" name="upload_foto2" accept="Image/*" required>
                            <label class="custom-file-label" for="upload_foto2">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto 3</label>
                        <div class="custom-file">
                            <input type="hidden" name="foto3Name" value="<?= $edit8 ?>">
                            <input type="file" class="custom-file-input" id="upload_foto3" name="upload_foto3" accept="Image/*" required>
                            <label class="custom-file-label" for="upload_foto3">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto 4</label>
                        <div class="custom-file">
                            <input type="hidden" name="foto4Name" value="<?= $edit9 ?>">
                            <input type="file" class="custom-file-input" id="upload_foto4" name="upload_foto4" accept="Image/*" required>
                            <label class="custom-file-label" for="upload_foto4">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Video</label>
                        <div class="custom-file">
                            <input type="hidden" name="videoName" value="<?= $edit10 ?>">
                            <input type="file" class="custom-file-input" id="upload_video" name="upload_video" accept="Video/*" required>
                            <label class="custom-file-label" for="upload_video">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Video Youtube</label>
                        <input type="text" class="form-control" name="video_youtube" id="video_youtube" value="<?= $edit11 ?>" required>
                    </div>
                    <div class="form-group">
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