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
                            <h6 class="page-title text-center" style="background-color: #4b544f; color: white; padding: 10px; border-radius: 10px;">VENDOR EKSTERNAL</h6>
                        </div>
                    </div>
                </div>
                <!-- End page title -->

                <!-- Form Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Formulir Vendor Eksternal</h4>
                                <form action="<?= base_url('submit-vendor-eksternal') ?>" method="post">
                                    <input type="hidden" name="id_tiket" value="<?= $id_tiket ?>">

                                    <!-- Tindakan -->
                                    <div class="row mb-3">
                                        <label for="tindakan" class="col-sm-2 col-form-label">Tindakan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="tindakan" name="tindakan" rows="3" placeholder="Jelaskan tindakan yang dilakukan"></textarea>
                                        </div>
                                    </div>

                                    <!-- Nama Barang -->
                                    <div class="row mb-3">
                                        <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Masukkan nama barang">
                                        </div>
                                    </div>

                                    <!-- Nama Barang Dibeli -->
                                    <div class="row mb-3">
                                        <label for="namaBarangDibeli" class="col-sm-2 col-form-label">Nama Barang Dibeli</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="namaBarangDibeli" name="namaBarangDibeli" placeholder="Masukkan nama barang yang dibeli">
                                        </div>
                                    </div>

                                    <!-- Biaya Operasional -->
                                    <div class="row mb-3">
                                        <label for="biayaOperasional" class="col-sm-2 col-form-label">Biaya Operasional</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="biayaOperasional" name="biayaOperasional" placeholder="Masukkan biaya operasional" required>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-secondary">Submit</button>
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
<script src="<?= base_url('assets/libs/peity/jquery.peity.min.js'); ?>"></script>

<!-- Plugin Js-->
<script src="<?= base_url('assets/libs/chartist/chartist.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/pages/dashboard.init.js'); ?>"></script>
<script src="<?= base_url('assets/js/app.js'); ?>"></script>


</body>

</html>
