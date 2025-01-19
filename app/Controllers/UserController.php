<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TiketModel;

class UserController extends BaseController
{
    protected $tiketModel;

    public function __construct()
    {
        $this->tiketModel = new TiketModel(); // Inisialisasi model TiketModel
    }

    /**
     * Show the form pekerjaan page
     */
    public function showFormPekerjaan()
    {
        // Data yang akan dikirim ke view
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Formulir Pekerjaan']),
            'nama' => session()->get('nama'), // Ambil nama dari session
        ];

        // Load view form pekerjaan
        return view('user/form-pekerjaan', $data);
    }

    /**
     * Handle form submission
     */
    public function submitFormPekerjaan()
{
    // Ambil data dari form
    $vendor = $this->request->getPost('vendor');
    $laporan = $this->request->getPost('laporan');
    $kerusakan = $this->request->getPost('kerusakan');
    $id_user = session()->get('id_user'); // Ambil id_user dari session

    // Periksa apakah user sudah login
    if (!$id_user) {
        return redirect()->back()->with('error', 'Anda harus login untuk mengisi formulir.');
    }

    // Simpan data ke database
    $data = [
        'id_user' => $id_user,
        'tanggal' => date('Y-m-d'),
        'vendor' => $vendor,
        'laporan_pekerjaan' => $laporan,
        'kerusakan' => $kerusakan,
        'status' => 'Pending',
    ];

    // Menyimpan data dan mendapatkan id_tiket yang baru
    $id_tiket = $this->tiketModel->insert($data);

    // Jika vendor adalah 'Internal', arahkan ke halaman vendor internal dengan id_tiket
    if ($vendor === 'Internal') {
        return redirect()->to('/vendor-internal?id_tiket=' . $id_tiket);
    } else {
        return redirect()->to('/vendor-eksternal?id_tiket=' . $id_tiket);  // <--- Perbaiki di sini
    }    
}

public function showVendorInternal()
{
    // Ambil ID tiket dari query string
    $id_tiket = $this->request->getGet('id_tiket'); 
    
    // Periksa apakah id_tiket ada
    if (!$id_tiket) {
        return redirect()->to('/form-pekerjaan')->with('error', 'ID Tiket tidak ditemukan.');
    }

    // Ambil data tiket berdasarkan ID
    $tiket = $this->tiketModel->find($id_tiket);

    // Periksa apakah tiket ditemukan
    if (!$tiket) {
        return redirect()->to('/form-pekerjaan')->with('error', 'Tiket tidak ditemukan.');
    }

    // Data yang akan dikirim ke view
    $data = [
        'title_meta' => view('partials/title-meta', ['title' => 'Vendor Internal']),
        'nama' => session()->get('nama'), // Ambil nama dari session
        'id_tiket' => $tiket['id_tiket'], // Kirim ID tiket ke view
    ];

    // Load view vendor internal
    return view('user/vendor-internal', $data);
}
    

public function submitVendorInternal()
{
    $id_tiket = $this->request->getPost('id_tiket');
    $tindakan = $this->request->getPost('tindakan');
    $nama_barang = $this->request->getPost('namaBarang');
    $nama_barang_diganti = $this->request->getPost('namaBarangDiganti');

    // Ambil data tiket yang ingin diupdate
    $tiket = $this->tiketModel->find($id_tiket);

    if (!$tiket) {
        return redirect()->to('/form-pekerjaan')->with('error', 'Tiket tidak ditemukan.');
    }

    // Update data tiket dengan tindakan dan nama barang yang diganti
    $data = [
        'tindakan' => $tindakan,
        'nama_barang' => $nama_barang,
        'nama_barang_diganti' => $nama_barang_diganti,
        'status' => 'Sedang dalam penanganan',
    ];

    // Simpan perubahan
    $this->tiketModel->update($id_tiket, $data);

    return redirect()->to('/form-pekerjaan')->with('success', 'Tiket berhasil diperbarui.');
}

    public function showVendorEksternal()
    {
        $id_tiket = $this->request->getGet('id_tiket'); 

        if (!$id_tiket) {
            return redirect()->to('/form-pekerjaan')->with('error', 'ID Tiket tidak ditemukan.');
        }
    
        // Ambil data tiket berdasarkan ID
        $tiket = $this->tiketModel->find($id_tiket);
    
        // Periksa apakah tiket ditemukan
        if (!$tiket) {
            return redirect()->to('/form-pekerjaan')->with('error', 'Tiket tidak ditemukan.');
        }
    
        // Data yang akan dikirim ke view
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Vendor Internal']),
            'nama' => session()->get('nama'),
            'id_tiket' => $tiket['id_tiket'],
        ];
    
        // Load view vendor internal
        return view('user/vendor-eksternal', $data);
    }

    public function submitVendorEksternal()
{
    $id_tiket = $this->request->getPost('id_tiket');
    $tindakan = $this->request->getPost('tindakan');
    $nama_barang = $this->request->getPost('namaBarang');
    $nama_barang_dibeli = $this->request->getPost('namaBarangDibeli');
    $biaya_operasional = $this->request->getPost('biayaOperasional'); // Ambil biaya operasional

    // Ambil data tiket yang ingin diupdate
    $tiket = $this->tiketModel->find($id_tiket);

    if (!$tiket) {
        return redirect()->to('/form-pekerjaan')->with('error', 'Tiket tidak ditemukan.');
    }

    // Update data tiket dengan tindakan, nama barang, dan biaya operasional
    $data = [
        'tindakan' => $tindakan,
        'nama_barang' => $nama_barang,
        'nama_barang_diganti' => $nama_barang_dibeli,  // Menyimpan barang dibeli ke kolom nama_barang_diganti
        'biaya_operasional' => $biaya_operasional,     // Menyimpan biaya operasional
        'status' => 'Sudah ditanggapi',
    ];

    // Simpan perubahan
    $this->tiketModel->update($id_tiket, $data);

    return redirect()->to('/form-pekerjaan')->with('success', 'Tiket berhasil diperbarui.');
}

}
