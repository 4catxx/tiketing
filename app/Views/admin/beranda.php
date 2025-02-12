<?= $this->include('partials/main') ?>  
<head>  
    <?= $title_meta ?>  
    <?= $this->include('partials/head-css') ?>  
    <style>  
        .dashboard-cards {  
            transition: transform 0.3s ease;  
        }  
        
        .dashboard-cards:hover {  
            transform: scale(1.05);  
        }  
    </style>  
</head>  

<body>  
    <?= $this->include('partials/body') ?>  
    
    <div id="layout-wrapper">  
        <?= $this->include('partials/menu') ?>  
        
        <div class="main-content">  
            <div class="page-content">  
                <div class="container-fluid">  
                    <div class="row mb-4">  
                        <div class="col-12">  
                            <h2 class="page-title text-center mb-4">Dashboard Admin</h2>  
                        </div>  
                    </div>  
                    
                    <!-- Dashboard Cards -->  
                    <div class="row mb-4">  
                        <?php   
                        $cards = [  
                            ['title' => 'Total Pekerjaan Selesai', 'count' => $totalSelesai, 'color' => 'success'],  
                            ['title' => 'Total Pekerjaan Ditanggapi', 'count' => $totalDitanggapi, 'color' => 'warning'],  
                            ['title' => 'Total Pekerjaan Dalam Penanganan', 'count' => $totalDalamPenanganan, 'color' => 'danger']  
                        ];  
                        ?>  
                        
                        <?php foreach($cards as $card): ?>  
                            <div class="col-md-4">  
                                <div class="card dashboard-cards text-center">  
                                    <div class="card-body">  
                                        <h5 class="card-title"><?= $card['title'] ?></h5>  
                                        <h3 class="text-<?= $card['color'] ?>"><?= $card['count'] ?></h3>  
                                    </div>  
                                </div>  
                            </div>  
                        <?php endforeach; ?>  
                    </div>  
                    
                    <!-- Tabel Pekerjaan -->  
                    <div class="row">  
                        <div class="col-12">  
                            <div class="card">  
                                <div class="card-header bg-light">  
                                    <h4 class="card-title text-center">Data Pekerjaan Terbaru</h4>  
                                </div>  
                                <div class="card-body">  
                                    <div class="table-responsive">  
                                        <table class="table table-hover table-striped">  
                                            <thead>  
                                                <tr>  
                                                    <th>No</th>  
                                                    <th>Nama User</th>  
                                                    <th>Vendor</th>  
                                                    <th>Tanggal</th>  
                                                    <th>Laporan Pekerjaan</th>  
                                                    <th>Tindakan</th>  
                                                    <th>Nama Barang</th>  
                                                    <th>Status</th>  
                                                </tr>  
                                            </thead>  
                                            <tbody>  
                                                <?php foreach ($dataTiket as $index => $tiket): ?>  
                                                    <tr>  
                                                        <td><?= $index + 1 ?></td>  
                                                        <td><?= $tiket['user_name'] ?></td>  
                                                        <td><?= $tiket['vendor'] ?></td>  
                                                        <td><?= $tiket['tanggal'] ?></td>  
                                                        <td><?= $tiket['laporan_pekerjaan'] ?></td>  
                                                        <td><?= $tiket['tindakan'] ?></td>  
                                                        <td><?= $tiket['nama_barang'] ?></td>  
                                                        <td>  
                                                            <span class="badge   
                                                                <?= $tiket['status'] == 'Selesai' ? 'bg-success' :  
                                                                   ($tiket['status'] == 'Sudah ditanggapi' ? 'bg-warning' :  
                                                                   ($tiket['status'] == 'Sedang Dalam Penanganan' ? 'bg-danger' : 'bg-secondary')) ?>">  
                                                                <?= $tiket['status'] ?>  
                                                            </span>  
                                                        </td>  
                                                    </tr>  
                                                <?php endforeach; ?>  
                                            </tbody>  
                                        </table>   
                                    </div>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
        
        <?= $this->include('partials/footer') ?>  
    </div>  
</body>  

<?= $this->include('partials/right-sidebar') ?>  
<?= $this->include('partials/vendor-scripts') ?>  
