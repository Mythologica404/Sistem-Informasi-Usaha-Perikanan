<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Status Transaksi 01</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                <div class="breadcrumb-item">Status Transaksi 01</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Status Transaksi 01</h2>
            <p class="section-lead">Berikut adalah form untuk menambahkan data ke tabel Status Transaksi 01.</p>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $Tanggal = $_POST['tanggal'];
                        $Id_tb_trx_01 = $_POST['Id_tb_trx_01'];
                        $Status_awal = $_POST['status_awal'];
                        $Id_kategori_05 = $_POST['kategori_05'];
                        $Keterangan = $_POST['keterangan'];

                        $sql = mysqli_query($con, "INSERT INTO tb_trx_status_01 (Id, Tanggal, Id_tb_trx_01, Status_awal, Id_kategori_05, Keterangan) VALUES (NULL, '$Tanggal', '$Id_tb_trx_01', '$Status_awal', '$Id_kategori_05', '$Keterangan')") or die(mysqli_error($con));

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
                    <form action="index.php?page=status_transaksi_01" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control datepicker" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label>Id Transaksi</label>
                            <select class="form-control" name="Id_tb_trx_01" required>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM tb_trx_01 ORDER BY Id ASC") or die(mysqli_error($con));

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        echo '<option value="' . $data['Id_kategori_05'] . '">' . $data['Id'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Awal</label>
                            <input type="text" class="form-control" name="status_awal" id="status_awal" required>
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
                            <label>Keterangan</label>
                            <textarea class="form-control" spellcheck="false" name="keterangan" required></textarea>
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