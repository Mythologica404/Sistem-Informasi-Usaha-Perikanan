<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sistem Informasi Manajemen Usaha Perikanan</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="node_modules/datatables.net-bs4/datatables.min.css">
    <link rel="stylesheet" href="node_modules/datatables.net-bs4/Buttons-2.2.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Pengusaha Ikan</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Sistem Informasi</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">SI</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>
                        <li><a class="nav-link" href="?page=home"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Input Data</span></a>
                            <ul class="dropdown-menu" style="display: none;">
                                <li><a class="nav-link" href="index.php?page=identitas_usaha">Identitas Usaha</a></li>
                                <li><a class="nav-link" href="index.php?page=produk">Produk</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_01">Jenis Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_02">Pembayaran Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_03">Jenis Biaya</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_04">Klasifikasi Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_05">Status Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_06">Kategori Usaha Perikanan</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_07">Kategori Ukuran</a></li>
                                <li><a class="nav-link" href="index.php?page=kategori_usaha">Kategori Usaha</a></li>
                                <li><a class="nav-link" href="index.php?page=kecamatan">Kecamatan</a></li>
                                <li><a class="nav-link" href="index.php?page=kabupaten">Kabupaten</a></li>
                                <li><a class="nav-link" href="index.php?page=provinsi">Provinsi</a></li>
                                <li><a class="nav-link" href="index.php?page=layanan">Layanan</a></li>
                                <li><a class="nav-link" href="index.php?page=transaksi_penjualan">Transaksi Produk</a></li>
                                <li><a class="nav-link" href="index.php?page=transaksi_non_penjualan">Transaksi Non Penjualan</a></li>
                                <li><a class="nav-link" href="index.php?page=status_transaksi_01">Status Transaksi 1</a></li>
                                <li><a class="nav-link" href="index.php?page=status_transaksi_02">Status Transaksi 2</a></li>
                                <li><a class="nav-link" href="index.php?page=stock_produk">Stock Produk</a></li>
                                <li><a class="nav-link" href="index.php?page=harga_produk">Harga Produk</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Lihat Data</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index.php?page=tampil_identitas_usaha">Identitas Usaha</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_produk">Produk</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_01">Jenis Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_02">Pembayaran Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_03">Jenis Biaya</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_04">Klasifikasi Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_05">Status Transaksi</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_06">Kategori Usaha Perikanan</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_07">Kategori Ukuran</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kategori_usaha">Kategori Usaha</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kecamatan">Kecamatan</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_kabupaten">Kabupaten</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_provinsi">Provinsi</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_layanan">Layanan</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_trx_01">Transaksi Produk</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_trx_02">Transaksi Non Penjualan</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_status_01">Status Transaksi 1</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_status_02">Status Transaksi 2</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_stock_produk">Stock Produk</a></li>
                                <li><a class="nav-link" href="index.php?page=tampil_harga_produk">Harga Produk</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="?page=tampil_chart"><i class="fas fa-th large"></i> <span>Tampilkan Grafik</span></a></li>
                    </ul>
                </aside>
            </div>

            <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            switch ($queries['page']) {
                case 'identitas_usaha':
                    include 'input_tabel01.php';
                    break;
                case 'produk':
                    include 'input_tabel02.php';
                    break;
                case 'kategori_01':
                    include 'input_tabel03.php';
                    break;
                case 'kategori_02':
                    include 'input_tabel04.php';
                    break;
                case 'kategori_03':
                    include 'input_tabel05.php';
                    break;
                case 'kategori_04':
                    include 'input_tabel06.php';
                    break;
                case 'kategori_05':
                    include 'input_tabel07.php';
                    break;
                case 'kategori_06':
                    include 'input_tabel08.php';
                    break;
                case 'kategori_07':
                    include 'input_tabel09.php';
                    break;
                case 'kategori_usaha':
                    include 'input_tabel10.php';
                    break;
                case 'kecamatan':
                    include 'input_tabel11.php';
                    break;
                case 'kabupaten':
                    include 'input_tabel12.php';
                    break;
                case 'provinsi':
                    include 'input_tabel13.php';
                    break;
                case 'layanan':
                    include 'input_tabel14.php';
                    break;
                case 'transaksi_penjualan':
                    include 'input_tabel15.php';
                    break;
                case 'transaksi_non_penjualan':
                    include 'input_tabel16.php';
                    break;
                case 'status_transaksi_01':
                    include 'input_tabel17.php';
                    break;
                case 'status_transaksi_02':
                    include 'input_tabel18.php';
                    break;
                case 'stock_produk':
                    include 'input_tabel19.php';
                    break;
                case 'harga_produk':
                    include 'input_tabel20.php';
                    break;
                case 'tampil_identitas_usaha':
                    $tabel = "tb_identitas_usaha";
                    $page = "tampil_identitas_usaha";
                    include 'tampil_identitas_usaha.php';
                    break;
                case 'tampil_produk':
                    $tabel = "tb_produk";
                    $page = "tampil_produk";
                    include 'tampil_produk.php';
                    break;
                case 'tampil_trx_01':
                    $tabel = "tb_trx_01";
                    $page = "tampil_trx_01";
                    include 'tampil_trx_01.php';
                    break;
                case 'tampil_trx_02':
                    $tabel = "tb_trx_02";
                    $page = "tampil_trx_02";
                    include 'tampil_trx_02.php';
                    break;
                case 'tampil_status_01':
                    $tabel = "tb_trx_status_01";
                    $page = "tampil_status_01";
                    $title = "Status Transaksi 01";
                    include 'tampil_status.php';
                    break;
                case 'tampil_status_02':
                    $tabel = "tb_trx_status_02";
                    $page = "tampil_status_02";
                    $title = "Status Transaksi 02";
                    include 'tampil_status.php';
                    break;
                case 'tampil_stock_produk':
                    $tabel = "tb_trx_stock";
                    $page = "tampil_stock_produk";
                    include 'tampil_stock.php';
                    break;
                case 'tampil_harga_produk':
                    $tabel = "tb_trx_harga_produk";
                    $page = "tampil_harga_produk";
                    include 'tampil_harga.php';
                    break;
                case 'tampil_kategori_01':
                    $tabel = "tb_kategori_01";
                    $page = "tampil_kategori_01";
                    $title = "Jenis Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_01";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_02':
                    $tabel = "tb_kategori_02";
                    $page = "tampil_kategori_02";
                    $title = "Pembayaran Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_02";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_03':
                    $tabel = "tb_kategori_03";
                    $page = "tampil_kategori_03";
                    $title = "Jenis Biaya";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_03";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_04':
                    $tabel = "tb_kategori_04";
                    $page = "tampil_kategori_04";
                    $title = "Klasifikasi Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_04";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_05':
                    $tabel = "tb_kategori_05";
                    $page = "tampil_kategori_05";
                    $title = "Status Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_05";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_06':
                    $tabel = "tb_kategori_06";
                    $page = "tampil_kategori_06";
                    $title = "Kategori Usaha Perikanan";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_06";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_07':
                    $tabel = "tb_kategori_07";
                    $page = "tampil_kategori_07";
                    $title = "Kategori Ukuran";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_07";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kategori_usaha':
                    $tabel = "tb_kategori_usaha";
                    $page = "tampil_kategori_usaha";
                    $title = "Kategori Usaha";
                    $head1 = "Kategori Toko";
                    $head2 = "Deskripsi Toko";
                    $att1 = "kategori_toko";
                    $att2 = "deskripsi_toko";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kecamatan':
                    $tabel = "tb_kecamatan";
                    $page = "tampil_kecamatan";
                    $title = "Kecamatan";
                    $head1 = "Kecamatan";
                    $head2 = "Keterangan";
                    $att1 = "Kecamatan";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_kabupaten':
                    $tabel = "tb_kabupaten";
                    $page = "tampil_kabupaten";
                    $title = "Kabupaten";
                    $head1 = "Kabupaten";
                    $head2 = "Keterangan";
                    $att1 = "Kabupaten";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_provinsi':
                    $tabel = "tb_provinsi";
                    $page = "tampil_provinsi";
                    $title = "Provinsi";
                    $head1 = "Provinsi";
                    $head2 = "Keterangan";
                    $att1 = "Provinsi";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_layanan':
                    $tabel = "tb_layanan";
                    $page = "tampil_layanan";
                    $title = "Layanan";
                    $head1 = "Layanan";
                    $head2 = "Keterangan";
                    $att1 = "Layanan";
                    $att2 = "Keterangan";
                    include('tampil_3attribute.php');
                    break;
                case 'tampil_chart':
                    include('tampil_chart.php');
                    break;
                default:
                    include 'home.php';
            }
            ?>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="?page=home">Kelompok Perikanan</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="node_modules/moment/min/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-bs4/datatables.min.js"></script>
    <script src="node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
    <script src="node_modules/datatables.net-bs4/Buttons-2.2.2/js/buttons.bootstrap4.min.js"></script>
    <script src="node_modules/datatables.net-bs4/Buttons-2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="node_modules/datatables.net-bs4/Buttons-2.2.2/js/buttons.print.min.js"></script>
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/chart.js/dist/Chart.bundle.min.js"></script>

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script></script>
</body>

</html>