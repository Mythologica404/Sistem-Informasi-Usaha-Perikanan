<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php echo '<h1>Lihat Data ' . $title . '</h1>' ?>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <?php echo '<div class="breadcrumb-item">' . $title . '</div>' ?>
            </div>
        </div>

        <div class="section-body">
            <?php echo '<h2 class="section-title">' . $title . '</h2>' ?>
            <?php echo '<p class="section-lead">Berikut adalah tabel ' . $title . '.</p>' ?>

            <div class="card">
                <div class="card-header">
                    <?php echo '<h4>Tabel ' . $title . '</h4>' ?>
                </div>

                <div class="card-body">
                    <?php
                    if (isset($_GET['status'])) {
                        echo '<script>$(".alert").alert()</script>';
                        $status = $_GET['status'];
                        switch ($status) {
                            case '1':
                                echo '
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Berhasil menghapus data.
                                </div>
                            </div>
                            ';
                                break;
                            case '2':
                                echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Gagal menghapus data.
                                </div>
                            </div>
                            ';
                                break;
                            case '3':
                                echo '
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                    </button>
                                    Data tidak ditemukan.
                                </div>
                            </div>
                            ';
                                break;
                        }
                    }
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM $tabel") or die(mysqli_error($con));

                            if (mysqli_num_rows($sql) > 0) {
                                echo '
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th>' . $head1 . '</th>
                                            <th>' . $head2 . '</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                ';
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '
                                    <tbody>
                                        <tr>
                                            <td style="width: 5%" ;>
                                                ' . $data['Id'] . '
                                            </td>
                                            <td style="width: 40%">' . $data[$att1] . '</td>
                                            <td style="width: 40%">
                                            ' . $data[$att2] . '
                                            </td>
                                            <td class="text-center" style="width:350px;"><a href="#" class="btn btn-warning">Edit</a> <a onclick="return confirm(\'Apakah anda yakin ingin menghapus data?\')" href="delete.php?Id=' . $data['Id'] . '&table=' . $tabel . '&page=' . $page . '" class="btn btn-danger">Hapus</a> </td>
                                        </tr>
                                    </tbody>
                                    ';
                                }
                            } else {
                                echo '
                                <tbody>
                                    <tr>
                                        <td class="text-center">Tidak ada data di database!</td>
                                    </tr>
                                </tbody>
                                ';
                            }

                            ?>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>