<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users'; // Nama tabel
    protected $primaryKey = 'id_user'; // Primary key

    // Kolom-kolom yang diizinkan untuk diisi (mass assignment)
    protected $allowedFields = ['username', 'email', 'password', 'nama', 'role'];

    // Opsi tambahan
    protected $useTimestamps = false; // Jika tabel memiliki kolom created_at dan updated_at, ubah menjadi true

    // Jika menggunakan hashing password, tambahkan ini
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    /**
     * Hash password sebelum menyimpan ke database
     *
     * @param array $data
     * @return array
     */
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }

        return $data;
    }
}
