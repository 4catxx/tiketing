<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    /**
     * Show the Admin Beranda Page
     */
    public function showBeranda()
    {
        // Data dummy untuk pekerjaan
        $dataPekerjaan = [
            [
                'id_tiket' => 1,
                'id_user' => 1,
                'vendor' => 'internal',
                'tanggal' => '2025-01-01',
                'laporan_pekerjaan' => 'Kerusakan pada mesin',
                'tindakan' => 'Diganti spare part',
                'status' => 'Selesai',
            ],
            [
                'id_tiket' => 2,
                'id_user' => 1,
                'vendor' => 'external',
                'tanggal' => '2025-01-02',
                'laporan_pekerjaan' => 'Kerusakan jaringan',
                'tindakan' => 'Diperbaiki oleh teknisi',
                'status' => 'Dalam Penanganan',
            ],
            [
                'id_tiket' => 3,
                'id_user' => 1,
                'vendor' => 'internal',
                'tanggal' => '2025-01-03',
                'laporan_pekerjaan' => 'Lampu tidak menyala',
                'tindakan' => 'Ditanggapi, menunggu spare part',
                'status' => 'Ditanggapi',
            ],
        ];

        // Hitung total pekerjaan berdasarkan status
        $totalSelesai = count(array_filter($dataPekerjaan, fn($row) => $row['status'] === 'Selesai'));
        $totalDitanggapi = count(array_filter($dataPekerjaan, fn($row) => $row['status'] === 'Ditanggapi'));
        $totalDalamPenanganan = count(array_filter($dataPekerjaan, fn($row) => $row['status'] === 'Dalam Penanganan'));

        $data = [
            'title_meta' => 'Beranda Admin',
            'dataPekerjaan' => $dataPekerjaan,
            'totalSelesai' => $totalSelesai,
            'totalDitanggapi' => $totalDitanggapi,
            'totalDalamPenanganan' => $totalDalamPenanganan,
        ];

        return view('admin/beranda', $data);
    }
}
