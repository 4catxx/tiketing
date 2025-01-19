<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <link href="assets/libs/chartist/chartist.min.css" rel="stylesheet">

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- Start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h6 class="page-title text-center">FORMULIR PEKERJAAN</h6>
                        </div>
                    </div>
                </div>
                <!-- End page title -->

                <!-- Form Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Formulir Pekerjaan</h4>
                                <form action="<?= base_url('submit-form-pekerjaan') ?>" method="post">
                                    <!-- Laporan Pekerjaan -->
                                    <div class="row mb-3">
                                        <label for="laporan" class="col-sm-2 col-form-label">Laporan Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="laporan" name="laporan" placeholder="Masukkan laporan pekerjaan" required>
                                        </div>
                                    </div>

                                    <!-- Keterangan Kerusakan -->
                                    <div class="row mb-3">
                                        <label for="kerusakan" class="col-sm-2 col-form-label">Keterangan Kerusakan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="kerusakan" name="kerusakan" rows="3" placeholder="Jelaskan kerusakan yang terjadi"></textarea>
                                        </div>
                                    </div>

                                    <!-- Vendor -->
                                    <div class="row mb-3">
                                        <label for="vendor" class="col-sm-2 col-form-label">Vendor</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="vendor" name="vendor" required>
                                                <option selected disabled>Pilih vendor</option>
                                                <option value="Internal">Internal</option>
                                                <option value="Eksternal">Eksternal</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-primary">Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Section -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?= $this->include('partials/footer') ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>


<!-- Peity chart-->
<script src="<?= base_url('/assets/libs/peity/jquery.peity.min.js'); ?>"></script>

<!-- Plugin Js-->
<script src="<?= base_url('/assets/libs/chartist/chartist.min.js'); ?>"></script>
<script src="<?= base_url('/assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js'); ?>"></script>

<script src="<?= base_url('/assets/js/pages/dashboard.init.js'); ?>"></script>
<script src="<?= base_url('/assets/js/app.js'); ?>"></script>

</body>

</html>
