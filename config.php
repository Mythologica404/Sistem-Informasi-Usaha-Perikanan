<?php
$koneksi = mysqli_connect("localhost", "root", "root", "db_mup");

if (mysqli_connect_errno()) {
    echo "Gagal Connect: " . mysqli_connect_error();
}
