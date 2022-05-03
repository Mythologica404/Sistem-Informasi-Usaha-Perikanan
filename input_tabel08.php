<?php include_once("config.php"); ?>



<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Kategori 06</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                <div class="breadcrumb-item">Kategori 06</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Kategori 06</h2>
            <p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Kategori 06.</p>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $kategori_06 = $_POST['kategori'];
                        $Keterangan = $_POST['keterangan'];

                        $sql = mysqli_query($con, "INSERT INTO tb_kategori_06 (Id, kategori_06, Keterangan) VALUES (NULL, '$kategori_06', '$Keterangan')") or die(mysqli_error($con));

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
                    <form action="index.php?page=kategori_06" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" name="kategori" id="kategori" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" spellcheck="false" name="keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
</div>