<?php include_once("config.php"); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 id="nama-table">Grafis</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lihat Data</a></div>
                <div class="breadcrumb-item"><a href="#">Grafis</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Grafis</h2>
            <p class="section-lead">
                Berikut adalah output grafis dari tabel yang ada.</a>.
            </p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toko berdasarkan Kategori</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="tokoByKategori"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toko berdasarkan Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="tokoByKecamatan"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toko berdasarkan Kabupaten</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="tokoByKabupaten"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Produk berdasarkan Toko</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="produkByToko"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Produk berdasarkan Kategori</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="produkByKategori"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="node_modules/chart.js/dist/Chart.min.js"></script>


<script>
    <?php
    $query1 = mysqli_query($con, "SELECT kategori_06, COUNT(*) FROM tb_identitas_usaha JOIN tb_kategori_06 ON tb_kategori_06.Id = tb_identitas_usaha.Id_kategori_06 GROUP BY kategori_06;") or die(mysqli_error($con));

    foreach ($query1 as $data) {
        $kategori[] = $data['kategori_06'];
        $count[] = $data['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("tokoByKategori").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                <?php
                echo json_encode($kategori);
                ?>
            ],
            datasets: [{
                label: "Statistics",
                data: [
                    <?php
                    echo json_encode($count);
                    ?>
                ],
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query2 = mysqli_query($con, "SELECT Kecamatan, COUNT(*) FROM tb_identitas_usaha JOIN tb_kecamatan ON tb_kecamatan.Id = tb_identitas_usaha.Id_Kecamatan GROUP BY Kecamatan;") or die(mysqli_error($con));

    foreach ($query2 as $data2) {
        $kecamatan[] = $data2['Kecamatan'];
        $count2[] = $data2['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("tokoByKecamatan").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                <?php
                echo json_encode($kecamatan);
                ?>
            ],
            datasets: [{
                label: "Statistics",
                data: [
                    <?php
                    echo json_encode($count2);
                    ?>
                ],
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query3 = mysqli_query($con, "SELECT Kabupaten, COUNT(*) FROM tb_identitas_usaha JOIN tb_kabupaten ON tb_kabupaten.Id = tb_identitas_usaha.Id_Kabupaten GROUP BY Kabupaten;") or die(mysqli_error($con));

    foreach ($query3 as $data3) {
        $kabupaten[] = $data3['Kabupaten'];
        $count3[] = $data3['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("tokoByKabupaten").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                <?php
                echo json_encode($kabupaten);
                ?>
            ],
            datasets: [{
                label: "Statistics",
                data: [
                    <?php
                    echo json_encode($count3);
                    ?>
                ],
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query4 = mysqli_query($con, "SELECT nama_usaha, COUNT(*) FROM tb_produk JOIN tb_identitas_usaha ON tb_identitas_usaha.Id = tb_produk.Id_identitas_usaha GROUP BY nama_usaha;") or die(mysqli_error($con));

    foreach ($query4 as $data4) {
        $toko[] = $data4['nama_usaha'];
        $count4[] = $data4['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("produkByToko").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                <?php
                echo json_encode($toko);
                ?>
            ],
            datasets: [{
                label: "Statistics",
                data: [
                    <?php
                    echo json_encode($count4);
                    ?>
                ],
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>

<script>
    <?php
    $query5 = mysqli_query($con, "SELECT kategori_06, COUNT(*) FROM tb_produk JOIN tb_kategori_06 ON tb_kategori_06.Id = tb_produk.Id_kategori_produk GROUP BY kategori_06;") or die(mysqli_error($con));

    foreach ($query5 as $data5) {
        $kategori02[] = $data5['kategori_06'];
        $count5[] = $data5['COUNT(*)'];
    }
    ?>

    var ctx = document.getElementById("produkByKategori").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                <?php
                echo json_encode($kategori02);
                ?>
            ],
            datasets: [{
                label: "Statistics",
                data: [
                    <?php
                    echo json_encode($count5);
                    ?>
                ],
                borderWidth: 2,
                backgroundColor: "#6777ef",
                borderColor: "#6777ef",
                borderWidth: 2.5,
                pointBackgroundColor: "#ffffff",
                pointRadius: 4,
            }, ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "#f2f2f2",
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150,
                    },
                }, ],
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script>