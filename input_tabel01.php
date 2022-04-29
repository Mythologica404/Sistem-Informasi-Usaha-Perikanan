<?php
include('config.php');
?>

<?php
if (isset($_POST['submit'])) {
    $nama_usaha = $_POST['nama_usaha'];
    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $upload_foto = $_POST['upload_foto'];
    $nama_usaha = $_POST['nama_usaha'];
    $nama_usaha = $_POST['nama_usaha'];
    $nama_usaha = $_POST['nama_usaha'];
    $nama_usaha = $_POST['nama_usaha'];
}
?>

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
                    <form action="index.php?page=identitas_usaha" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Usaha</label>
                            <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                        <div class="form-group">
                            <label>Desa</label>
                            <input type="text" class="form-control" name="desa" id="desa" required>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan" required>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten</label>
                            <select class="form-control" name="kabupaten" required>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi" required>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload_foto" name="upload_foto" accept="Image/*" required>
                                <label class="custom-file-label" for="upload_foto">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pemilik</label>
                            <input type="text" class="form-control" name="pemilik" id="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label>Jam Buka</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" name="jam_buka" id="jam_buka" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam Tutup</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" name="jam_tutup" id="jam_tutup" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hari Buka</label>
                            <select class="form-control" name="hari_buka" required>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hari Tutup</label>
                            <select class="form-control" name="hari_tutup" required>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Layanan</label>
                            <select class="form-control" name="layanan" required>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun Berdiri</label>
                            <input type="text" class="form-control" name="tahun_berdiri" id="tahun_berdiri" required>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>