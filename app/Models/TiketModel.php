<?php  

namespace App\Models;  

use CodeIgniter\Model;  

class TiketModel extends Model  
{  
    protected $table = 'tiket';  
    protected $primaryKey = 'id_tiket';  

    protected $allowedFields = [  
        'id_user', 'vendor', 'tanggal', 'laporan_pekerjaan',   
        'tindakan', 'nama_barang', 'nama_barang_diganti',   
        'biaya_operasional', 'status'  
    ];  

    protected $useTimestamps = false;  

    // Metode untuk mendapatkan tiket dengan informasi user lebih komprehensif  
    public function getTiketWithUserDetails($vendor = null)  
    {  
        $builder = $this->db->table($this->table);  
        $builder->select('tiket.*, users.nama as user_name, users.email as user_email');  
        $builder->join('users', 'users.id_user = tiket.id_user');  

        if ($vendor !== null) {  
            $builder->where('tiket.vendor', $vendor);  
        }  

        return $builder->get()->getResultArray();  
    }  

    // Metode untuk mendapatkan tiket berdasarkan vendor dengan optimasi  
    public function getTiketByVendorWithUserName($vendor)  
    {  
    return $this->select('tiket.*, users.nama as user_name')  
                ->join('users', 'users.id_user = tiket.id_user', 'left')  
                ->where('tiket.vendor', $vendor)  
                ->orderBy('tiket.tanggal', 'DESC')  // Tambahkan sorting descending  
                ->findAll();  
    }  

    public function getAllTiketWithUserName()  
{  
    return $this->select('tiket.*, users.nama as user_name')  
                ->join('users', 'users.id_user = tiket.id_user', 'left')  
                ->orderBy('tiket.id_tiket', 'DESC')  // Ubah sorting berdasarkan id_tiket
                ->findAll();
}


    // Metode untuk menghitung status tiket  
    public function getStatusCounts()  
    {  
        $builder = $this->db->table($this->table);  
        $builder->select('status, COUNT(*) as count');  
        $builder->groupBy('status');  
        
        $result = $builder->get()->getResultArray();  
        
        // Transform result to associative array  
        $statusCounts = [];  
        foreach ($result as $row) {  
            $statusCounts[$row['status']] = $row['count'];  
        }  
        
        return $statusCounts;  
    }  

    // Metode untuk mendapatkan statistik tiket  
    public function getTiketStatistics($vendor = null)  
    {  
        $builder = $this->db->table($this->table);  
        
        if ($vendor !== null) {  
            $builder->where('vendor', $vendor);  
        }  

        return [  
            'total' => $builder->countAllResults(false),  
            'selesai' => $builder->where('status', 'Selesai')->countAllResults(false),  
            'ditanggapi' => $builder->where('status', 'Sudah ditanggapi')->countAllResults(false),  
            'dalam_penanganan' => $builder->where('status', 'Sedang Dalam Penanganan')->countAllResults(false)  
        ];  
    }  

    // Metode untuk pencarian tiket  
    public function searchTiket($keyword, $vendor = null)  
    {  
        $builder = $this->db->table($this->table);  
        $builder->select('tiket.*, users.nama as user_name');  
        $builder->join('users', 'users.id_user = tiket.id_user');  
        
        // Pencarian berdasarkan berbagai kolom  
        $builder->groupStart()  
                ->like('laporan_pekerjaan', $keyword)  
                ->orLike('tindakan', $keyword)  
                ->orLike('nama_barang', $keyword)  
                ->orLike('users.nama', $keyword)  
                ->groupEnd();  

        if ($vendor !== null) {  
            $builder->where('tiket.vendor', $vendor);  
        }  

        return $builder->get()->getResultArray();  
    }  

    // Metode untuk mendapatkan statistik biaya operasional  
    public function getBiayaOperasionalStatistics($vendor = null)  
    {  
        $builder = $this->db->table($this->table);  
        
        if ($vendor !== null) {  
            $builder->where('vendor', $vendor);  
        }  

        return [  
            'total_biaya' => $builder->selectSum('biaya_operasional')->get()->getRowArray()['biaya_operasional'] ?? 0,  
            'rata_rata_biaya' => $builder->selectAvg('biaya_operasional')->get()->getRowArray()['biaya_operasional'] ?? 0,  
            'biaya_tertinggi' => $builder->selectMax('biaya_operasional')->get()->getRowArray()['biaya_operasional'] ?? 0  
        ];  
    }  
}