<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = 'tiket'; // Nama tabel
    protected $primaryKey = 'id_tiket'; // Primary key

    // Kolom-kolom yang diizinkan untuk diisi (mass assignment)
    protected $allowedFields = ['id_user', 'vendor', 'tanggal', 'laporan_pekerjaan', 'tindakan', 'nama_barang', 'nama_barang_diganti', 'biaya_operasional', 'status'];

    // Opsi tambahan
    protected $useTimestamps = false; // Tidak ada kolom created_at dan updated_at di tabel

    /**
     * Method untuk mendapatkan data tiket dengan informasi user
     * Menggunakan JOIN ke tabel `users`
     */
    public function getTiketWithUser($id_tiket = null)
    {
        $builder = $this->db->table($this->table);
        $builder->select('tiket.*, users.nama, users.email');
        $builder->join('users', 'users.id_user = tiket.id_user'); // Join ke tabel users

        if ($id_tiket !== null) {
            $builder->where('tiket.id_tiket', $id_tiket); // Filter berdasarkan id_tiket
            return $builder->get()->getRowArray(); // Ambil satu baris
        }

        return $builder->get()->getResultArray(); // Ambil semua baris
    }
}
