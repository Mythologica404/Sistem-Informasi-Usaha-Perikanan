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
                    echo 'anjay';
                    if (isset($_POST['submit'])) {
                        echo 'anjay';
                        $cek = move_uploaded_file(
                            $_FILES['upload_foto']['tmp_name'],
                            'img/' . $_FILES['upload_foto']['name']
                        );
                    }
                    ?>
                    <form action="testupload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <div class="custom-file">
                                <input type="text" class="custom-file-input" id="upload_foto" name="upload_foto" required>
                                <label class="custom-file-label" for="upload_foto">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>