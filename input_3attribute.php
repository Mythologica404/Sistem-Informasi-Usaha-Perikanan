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
                        $att1post = $_POST['att1'];
                        $att2post = $_POST['att2'];

                        $sql = mysqli_query($con, "INSERT INTO $tabel (Id, $att1, $att2) VALUES (NULL, '$att1post', '$att2post')") or die(mysqli_error($con));

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
                        $att1post = $_POST['att1'];
                        $att2post = $_POST['att2'];

                        $Id = $_GET['Id'];

                        $sql = mysqli_query($con, "UPDATE $tabel SET $att1 = '$att1post', $att2 = '$att2post' WHERE $tabel.Id = $Id") or die(mysqli_error($con));

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
                        $edit1 = $data[$att1];
                        $edit2 = $data[$att2];
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
                        <label><?= $head1 ?></label>
                        <input type="text" class="form-control" name="att1" value="<?= $edit1 ?>" required>
                    </div>
                    <div class="form-group">
                        <label><?= $head2 ?></label>
                        <textarea class="form-control" spellcheck="false" name="att2"><?= $edit2 ?></textarea>
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