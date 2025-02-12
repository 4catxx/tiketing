<?php  

namespace App\Controllers;  

use App\Controllers\BaseController;  
use App\Models\TiketModel;  
use App\Models\UsersModel;  

class AdminController extends BaseController  
{  
    protected $tiketModel;  
    protected $usersModel;  

    public function __construct()  
    {  
        $this->tiketModel = new TiketModel();  
        $this->usersModel = new UsersModel();  
    }  

    public function showBeranda()
{
    // Ambil semua data tiket tanpa filter vendor, urutkan berdasarkan tanggal terbaru
    $dataTiket = $this->tiketModel->getAllTiketWithUserName();
    $statusCounts = $this->tiketModel->getStatusCounts();

    $data = [
        'title_meta' => view('partials/title-meta', ['title' => 'Beranda Admin']),
        'dataTiket' => $dataTiket,
        'totalSelesai' => $statusCounts['Selesai'] ?? 0,
        'totalDitanggapi' => $statusCounts['Sudah ditanggapi'] ?? 0,
        'totalDalamPenanganan' => $statusCounts['Sedang Dalam Penanganan'] ?? 0,
    ];

    return view('admin/beranda', $data);
}  

public function showTiketPekerjaan()
    {
        // Mengambil semua data tiket
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Beranda Admin']),
            'page_title' => 'Tiket Pekerjaan',
            'tiket' => $this->tiketModel->getAllTiketWithUserName()
        ];

        // Menampilkan view dengan data tiket
        return view('admin/tiket-pekerjaan', $data);
    }

    public function selesaikanTiket($id_tiket)  
{  
    // Ambil data tiket berdasarkan ID  
    $tiket = $this->tiketModel->find($id_tiket);  

    if ($tiket) {  
        // Update status tiket menjadi "Selesai"  
        $this->tiketModel->update($id_tiket, ['status' => 'Selesai']);  

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses  
        return redirect()->back()->with('success', 'Status tiket berhasil diubah menjadi Selesai.');  
    } else {  
        // Redirect kembali dengan pesan error jika tiket tidak ditemukan  
        return redirect()->back()->with('error', 'Tiket tidak ditemukan.');  
    }  
} 

}