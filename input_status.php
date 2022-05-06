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
                        $Tanggal = $_POST['tanggal'];
                        $Id_tb_trx_01 = $_POST['Id_tb_trx_01'];
                        $Status_awal = $_POST['status_awal'];
                        $Id_kategori_05 = $_POST['kategori_05'];
                        $Keterangan = $_POST['keterangan'];

                        $sql = mysqli_query($con, "INSERT INTO $tabel (Id, Tanggal, Id_tb_trx_01, Status_awal, Id_kategori_05, Keterangan) VALUES (NULL, '$Tanggal', '$Id_tb_trx_01', '$Status_awal', '$Id_kategori_05', '$Keterangan')") or die(mysqli_error($con));

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
                        $Tanggal = $_POST['tanggal'];
                        $Id_tb_trx_01 = $_POST['Id_tb_trx_01'];
                        $Status_awal = $_POST['status_awal'];
                        $Id_kategori_05 = $_POST['kategori_05'];
                        $Keterangan = $_POST['keterangan'];

                        $Id = $_GET['Id'];

                        $sql = mysqli_query($con, "UPDATE $tabel SET Tanggal = '$Tanggal', Id_tb_trx_01 = '$Id_tb_trx_01', Status_awal = '$Status_awal', Id_kategori_05 = '$Id_kategori_05', Keterangan = '$Keterangan' WHERE $tabel.Id = $Id;") or die(mysqli_error($con));

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
                        $edit1 = $data['Tanggal'];
                        $edit2 = $data['Id_tb_trx_01'];
                        $edit3 = $data['Status_awal'];
                        $edit4 = $data['Id_kategori_05'];
                        $edit5 = $data['Keterangan'];
                    }
                    ?>


                    <?php
                    if (isset($_GET['Id'])) {
                        echo '<form action="index.php?page=' . $page . '&Id=' . $_GET['Id'] . '" method="post" enctype="multipart/form-data">';
                    } else {
                        echo '<form action="index.php?page=' . $page . '" method="post" enctype="multipart/form-data">';
                    }
                    ?>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control datepicker" name="tanggal" value="<?= $edit1 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Id Transaksi</label>
                        <select class="form-control" name="Id_tb_trx_01" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_trx_01 ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id_kategori_05'] . '" ';
                                    if ($edit2 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['Id'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status Awal</label>
                        <input type="text" class="form-control" name="status_awal" id="status_awal" value="<?= $edit3 ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Status Transaksi</label>
                        <select class="form-control" name="kategori_05" required>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_kategori_05 ORDER BY Id ASC") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '<option value="' . $data['Id'] . '" ';
                                    if ($edit4 == $data['Id']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $data['kategori_05'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" spellcheck="false" name="keterangan" required><?= $edit5 ?></textarea>
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