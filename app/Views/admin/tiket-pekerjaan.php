<?= $this->include('partials/main') ?>

<head>
    <?= $title_meta ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons.min.css" rel="stylesheet"> <!-- CDN Ionicons -->

    <?= $this->include('partials/head-css') ?>

    <style>
        /* Memperindah tabel */
        table.dataTable {
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            margin-top: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        table.dataTable thead {
            background-color: #f7f7f7;
            font-weight: bold;
        }

        table.dataTable tbody tr {
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        table.dataTable tbody tr:hover {
            background-color: #f2f2f2;
        }

        /* Memperindah badge status */
        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .bg-success {
            background-color: #28a745 !important;
            color: white;
        }

        .bg-warning {
            background-color: #ffc107 !important;
            color: white;
        }

        .bg-danger {
            background-color: #dc3545 !important;
            color: white;
        }

        .bg-secondary {
            background-color: #6c757d !important;
            color: white;
        }

        /* Memperindah tombol Selesaikan */  
        .btn-success {  
            color: #28a745; /* Warna hijau untuk ikon */  
            background-color: transparent; /* Menghapus latar belakang */  
            border: none; /* Menghapus border */  
            font-size: 24px; /* Mengatur ukuran font untuk ikon */  
            padding: 0; /* Menghapus padding */  
            cursor: pointer; /* Menambahkan cursor pointer */  
            transition: color 0.3s ease; /* Transisi warna saat hover */  
        }  

        .btn-success:hover {  
            color: #218838; /* Warna hijau lebih gelap saat hover */  
            background-color: transparent; /* Menghapus background saat hover */
        }

        .btn-success i {
            font-size: 30px; /* Ukuran ikon */
            transition: all 0.3s ease; /* Transisi untuk perubahan ikon */
        }

        .btn-success:hover i {  
            transform: scale(1.2); /* Membesarkan ikon saat hover */  
            background-color: transparent; /* Pastikan background tetap transparan */
        }

        /* Teks "Selesai" */
        .text-muted {  
            font-style: italic;  
            color: #6c757d; /* Warna abu-abu */  
        }

        /* Menyesuaikan tampilan filter vendor */
        #vendor {
            width: 200px; /* Mengatur lebar kotak filter lebih kecil */
            margin-bottom: 20px; /* Menambahkan jarak bawah untuk pemisah yang lebih rapi */
            padding: 5px 10px; /* Memberikan padding yang lebih pas agar kotak lebih kompak */
            font-size: 14px; /* Mengatur ukuran font di dalam kotak filter */
            border-radius: 5px; /* Memberikan sudut yang lebih membulat */
            border: 1px solid #ccc; /* Menambahkan border abu-abu */
        }

        /* Styling untuk label filter */
        label[for="vendor"] {
            font-size: 14px; /* Ukuran font label */
            font-weight: bold; /* Menebalkan teks label */
            display: inline-block; /* Agar label dan input berada di satu baris */
            margin-bottom: 8px; /* Menambahkan jarak bawah untuk label */
        }

        /* Menata elemen di atas tabel (filter dan lainnya) */
        .row.mb-4 {
            display: flex;
            align-items: center; /* Mengatur elemen untuk sejajar di tengah */
            justify-content: flex-start; /* Menempatkan elemen ke kiri */
            margin-bottom: 15px;
        }

        .col-12 {
            padding-left: 100; /* Menghapus padding kiri */
            padding-right: 0; /* Menghapus padding kanan */
        }

    </style>
</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row mb-4">
                    <div class="col-12">
                        <label for="vendor">Filter Vendor:</label>
                        <select id="vendor" class="form-control">
                            <option value="">Semua Vendor</option>
                            <option value="internal">Internal</option>
                            <option value="eksternal">Eksternal</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- DataTable -->
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Vendor</th>
                                            <th>Tanggal</th>
                                            <th>Laporan Pekerjaan</th>
                                            <th>Tindakan</th>
                                            <th>Nama Barang</th>
                                            <th>Barang Diganti</th>
                                            <th>Biaya Operasional</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($tiket as $index => $tiket_item) : ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><?= esc($tiket_item['user_name']) ?></td>
                                                <td><?= esc($tiket_item['vendor']) ?></td>
                                                <td><?= esc($tiket_item['tanggal']) ?></td>
                                                <td><?= esc($tiket_item['laporan_pekerjaan']) ?></td>
                                                <td><?= esc($tiket_item['tindakan']) ?></td>
                                                <td><?= esc($tiket_item['nama_barang']) ?></td>
                                                <td><?= esc($tiket_item['nama_barang_diganti']) ?></td>
                                                <td><?= esc(number_format($tiket_item['biaya_operasional'], 0, ',', '.')) ?></td>
                                                <td>
                                                    <span class="badge 
                                                        <?= $tiket_item['status'] === 'Selesai' ? 'bg-success' : 
                                                           ($tiket_item['status'] === 'Sudah Ditanggapi' ? 'bg-warning' : 'bg-danger') ?>">
                                                        <?= esc($tiket_item['status']) ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php if ($tiket_item['status'] !== 'Selesai') : ?>
                                                        <form action="<?= site_url('selesaikan-tiket/' . $tiket_item['id_tiket']) ?>" method="POST">
                                                            <!-- CSRF Token untuk keamanan -->
                                                            <?= csrf_field(); ?>
                                                            
                                                            <button type="submit" class="btn btn-success btn-sm" title="Selesaikan Tiket">
                                                                <i class="ion ion-md-checkmark"></i> <!-- Ikon centang -->
                                                            </button>
                                                        </form>
                                                    <?php else : ?>
                                                        <span class="text-muted">Selesai</span> <!-- Tampilkan teks jika status sudah selesai -->
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

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

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        // Event handler untuk perubahan filter vendor
        $('#vendor').change(function() {
            var vendorFilter = $(this).val(); // Mendapatkan nilai vendor yang dipilih
            filterTable(vendorFilter); // Memanggil fungsi filterTable dengan nilai filter
        });

        // Fungsi untuk memfilter tabel berdasarkan vendor
        function filterTable(vendor) {
            // Menyembunyikan semua baris
            $('#datatable-buttons tbody tr').each(function() {
                var rowVendor = $(this).find('td:nth-child(3)').text().trim(); // Ambil nilai di kolom 'Vendor'

                if (vendor === '' || rowVendor === vendor) {
                    $(this).show(); // Tampilkan baris yang cocok
                } else {
                    $(this).hide(); // Sembunyikan baris yang tidak cocok
                }
            });
        }
    });
</script>

</body>

</html>
