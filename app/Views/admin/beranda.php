<?= $this->include('partials/main') ?>

<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <?= $this->include('partials/body') ?>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?= $this->include('partials/menu') ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Start page title -->
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h6 class="page-title text-center">Beranda Admin</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End page title -->

                    <!-- Kotak Informasi -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Pekerjaan Selesai</h5>
                                    <h3 class="text-success"><?= $totalSelesai ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Pekerjaan Ditanggapi</h5>
                                    <h3 class="text-warning"><?= $totalDitanggapi ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Pekerjaan Dalam Penanganan</h5>
                                    <h3 class="text-danger"><?= $totalDalamPenanganan ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Data Pekerjaan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Pekerjaan</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama User</th>
                                                <th>Vendor</th>
                                                <th>Tanggal</th>
                                                <th>Laporan</th>
                                                <th>Tindakan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($dataPekerjaan as $index => $pekerjaan): ?>
                                                <tr>
                                                    <td><?= $index + 1 ?></td>
                                                    <td>Eri</td> <!-- Nama user -->
                                                    <td><?= ucfirst($pekerjaan['vendor']) ?></td>
                                                    <td><?= $pekerjaan['tanggal'] ?></td>
                                                    <td><?= $pekerjaan['laporan_pekerjaan'] ?></td>
                                                    <td><?= $pekerjaan['tindakan'] ?></td>
                                                    <td><?= $pekerjaan['status'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div>

        <?= $this->include('partials/footer') ?>
    </div>
</body>

<?= $this->include('partials/right-sidebar') ?>
<?= $this->include('partials/vendor-scripts') ?>
