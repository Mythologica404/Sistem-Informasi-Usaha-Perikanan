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
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user">
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, Admin Perikanan</div>
                    </a>
            </nav>
            <?= include 'sidebar.php' ?>

            <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

            $edit1 = "";
            $edit2 = "";
            $edit3 = "";
            $edit4 = "";
            $edit5 = "";
            $edit6 = "";
            $edit7 = "";
            $edit8 = "";
            $edit9 = "";
            $edit10 = "";
            $edit11 = "";
            $edit12 = "";
            $edit13 = "";
            $edit14 = "";
            $edit15 = "";
            $edit16 = "";
            switch ($queries['page']) {
                case 'identitas_usaha':
                    include 'input_identitas_usaha.php';
                    break;
                case 'produk':
                    include 'input_produk.php';
                    break;
                case 'kategori_01':
                    $tabel = "tb_kategori_01";
                    $page = "kategori_01";
                    $title = "Jenis Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_01";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_02':
                    $tabel = "tb_kategori_02";
                    $page = "kategori_02";
                    $title = "Pembayaran Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_02";
                    $att2 = "Keterangan";
                    $edit1 = "";
                    $edit2 = "";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_03':
                    $tabel = "tb_kategori_03";
                    $page = "kategori_03";
                    $title = "Jenis Biaya";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_03";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_04':
                    $tabel = "tb_kategori_04";
                    $page = "kategori_04";
                    $title = "Klasifikasi Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_04";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_05':
                    $tabel = "tb_kategori_05";
                    $page = "kategori_05";
                    $title = "Status Transaksi";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_05";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_06':
                    $tabel = "tb_kategori_06";
                    $page = "kategori_06";
                    $title = "Kategori Usaha Perikanan";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_06";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_07':
                    $tabel = "tb_kategori_07";
                    $page = "kategori_07";
                    $title = "Kategori Ukuran";
                    $head1 = "Kategori";
                    $head2 = "Keterangan";
                    $att1 = "kategori_07";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kategori_usaha':
                    $tabel = "tb_kategori_usaha";
                    $page = "kategori_usaha";
                    $title = "Kategori Usaha";
                    $head1 = "Kategori Toko";
                    $head2 = "Deskripsi Toko";
                    $att1 = "kategori_toko";
                    $att2 = "deskripsi_toko";
                    include 'input_3attribute.php';
                    break;
                case 'kecamatan':
                    $tabel = "tb_kecamatan";
                    $page = "kecamatan";
                    $title = "Kecamatan";
                    $head1 = "Kecamatan";
                    $head2 = "Keterangan";
                    $att1 = "Kecamatan";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'kabupaten':
                    $tabel = "tb_kabupaten";
                    $page = "kabupaten";
                    $title = "Kabupaten";
                    $head1 = "Kabupaten";
                    $head2 = "Keterangan";
                    $att1 = "Kabupaten";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'provinsi':
                    $tabel = "tb_provinsi";
                    $page = "provinsi";
                    $title = "Provinsi";
                    $head1 = "Provinsi";
                    $head2 = "Keterangan";
                    $att1 = "Provinsi";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'layanan':
                    $tabel = "tb_layanan";
                    $page = "layanan";
                    $title = "Layanan";
                    $head1 = "Layanan";
                    $head2 = "Keterangan";
                    $att1 = "Layanan";
                    $att2 = "Keterangan";
                    include 'input_3attribute.php';
                    break;
                case 'transaksi_penjualan':
                    $tabel = "tb_trx_01";
                    $page = "transaksi_penjualan";
                    $title = "Transaksi Produk";
                    $head1 = "Nama Produk";
                    $head2 = "Harga";
                    $att1 = "nama_produk";
                    $att2 = "Harga_satuan";
                    $tampil = "tampil_trx";
                    include 'input_trx.php';
                    break;
                case 'transaksi_non_penjualan':
                    $tabel = "tb_trx_02";
                    $page = "transaksi_non_penjualan";
                    $title = "Transaksi Non Penjualan";
                    $head1 = "Nama Barang";
                    $head2 = "Keterangan Barang";
                    $att1 = "Nama_barang";
                    $att2 = "Keterangan_barang";
                    $tampil = "tampil_trx";
                    include 'input_trx.php';
                    break;
                case 'status_transaksi_01':
                    $tabel = "tb_trx_status_01";
                    $page = "status_transaksi_01";
                    $title = "Status Transaksi 01";
                    include 'input_status.php';
                    break;
                case 'status_transaksi_02':
                    $tabel = "tb_trx_status_02";
                    $page = "status_transaksi_02";
                    $title = "Status Transaksi 02";
                    include 'input_status.php';
                    break;
                case 'stock_produk':
                    include 'input_stock.php';
                    break;
                case 'harga_produk':
                    include 'input_harga.php';
                    break;
                case 'tampil_identitas_usaha':
                    $tabel = "tb_identitas_usaha";
                    $page = "tampil_identitas_usaha";
                    $add = "identitas_usaha";
                    include 'tampil_identitas_usaha.php';
                    break;
                case 'tampil_produk':
                    $tabel = "tb_produk";
                    $page = "tampil_produk";
                    $add = "produk";
                    include 'tampil_produk.php';
                    break;
                case 'tampil_transaksi_penjualan':
                    $tabel = "tb_trx_01";
                    $page = "tampil_transaksi_penjualan";
                    $title = "Transaksi Produk";
                    $head1 = "Nama Barang";
                    $head2 = "Keterangan Barang";
                    $att1 = "Nama_barang";
                    $att2 = "Keterangan_barang";
                    $add = "transaksi_penjualan";
                    include 'tampil_trx.php';
                    break;
                case 'tampil_transaksi_non_penjualan':
                    $tabel = "tb_trx_02";
                    $page = "tampil_transaksi_non_penjualan";
                    $title = "Transaksi Non Penjualan";
                    $head1 = "Nama Barang";
                    $head2 = "Keterangan Barang";
                    $att1 = "Nama_barang";
                    $att2 = "Keterangan_barang";
                    $add = "transaksi_non_penjualan";
                    include 'tampil_trx.php';
                    break;
                case 'tampil_status_transaksi_01':
                    $tabel = "tb_trx_status_01";
                    $page = "tampil_status_transaksi_01";
                    $title = "Status Transaksi 01";
                    $add = "status_transaksi_01";
                    include 'tampil_status.php';
                    break;
                case 'tampil_status_transaksi_02':
                    $tabel = "tb_trx_status_02";
                    $page = "tampil_status_transaksi_02";
                    $title = "Status Transaksi 02";
                    $add = "status_transaksi_02";
                    include 'tampil_status.php';
                    break;
                case 'tampil_stock_produk':
                    $tabel = "tb_trx_stock";
                    $page = "tampil_stock_produk";
                    $add = "stock_produk";
                    include 'tampil_stock.php';
                    break;
                case 'tampil_harga_produk':
                    $tabel = "tb_trx_harga_produk";
                    $page = "tampil_harga_produk";
                    $add = "harga_produk";
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
                    $add = "kategori_01";
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
                    $add = "kategori_02";
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
                    $add = "kategori_03";
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
                    $add = "kategori_04";
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
                    $add = "kategori_05";
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
                    $add = "kategori_06";
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
                    $add = "kategori_07";
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
                    $add = "kategori_usaha";
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
                    $add = "kecamatan";
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
                    $add = "kabupaten";
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
                    $add = "provinsi";
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
                    $add = "layanan";
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