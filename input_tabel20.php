<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Harga Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                <div class="breadcrumb-item">Harga Produk</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Harga Produk</h2>
            <p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Harga Produk.</p>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $Id_identitas_usaha = $_POST['identitas_usaha'];
                        $Tanggal = $_POST['tanggal'];
                        $Id_produk = $_POST['id_produk'];
                        $Harga_satuan = $_POST['harga'];

                        $sql = mysqli_query($con, "INSERT INTO tb_trx_harga_produk (Id, Id_identitas_usaha, Tanggal, Id_produk, Harga_satuan) VALUES (NULL, '$Id_identitas_usaha', '$Tanggal', '$Id_produk', '$Harga_satuan')") or die(mysqli_error($con));

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
                    <form action="index.php?page=harga_produk" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Id Identitas Usaha</label>
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
                            <label>Id Produk</label>
                            <select class="form-control" name="id_produk" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_produk ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id'] . '">' . $data['nama_produk'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga Satuan</label>
                            <input type="number" class="form-control" name="harga" id="harga" required>
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