<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class AuthController extends BaseController
{
    /**
     * Show the login page
     */
    public function index()
    {
        $data = [
            'title_meta' => 'Login',
        ];

        return view('auth/login', $data);
    }

    /**
     * Process login form
     */
    public function processLogin()
    {
        // Ambil input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Inisialisasi model
        $usersModel = new UsersModel();

        // Cari user berdasarkan username
        $user = $usersModel->where('username', $username)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session
                session()->set([
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'nama' => $user['nama'],
                    'role' => $user['role'], // Tambahkan role ke session
                    'isLoggedIn' => true,
                ]);

                // Redirect berdasarkan role
                if ($user['role'] === 'Admin') {
                    return redirect()->to('/dashboard'); // Admin diarahkan ke /dashboard
                } elseif ($user['role'] === 'User') {
                    return redirect()->to('/form-pekerjaan'); // User diarahkan ke /beranda
                }
            } else {
                // Password salah
                return redirect()->back()->with('error', 'Password salah.');
            }
        } else {
            // Username tidak ditemukan
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }
    }

    /**
     * Show the register page
     */
    public function showRegister()
    {
        $data = [
            'title_meta' => 'Register',
        ];

        return view('auth/register', $data);
    }

    /**
     * Process the register form
     */
    public function processRegister()
    {
        // Validasi input
        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validasi sederhana
        if (!$nama || !$username || !$email || !$password) {
            return redirect()->back()->with('error', 'Semua kolom harus diisi!');
        }

        // Inisialisasi model
        $usersModel = new UsersModel();

        // Cek apakah username atau email sudah terdaftar
        if ($usersModel->where('username', $username)->orWhere('email', $email)->first()) {
            return redirect()->back()->with('error', 'Username atau email sudah terdaftar.');
        }

        // Simpan ke database
        $usersModel->insert([
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT), // Hash password
            'role' => 'User', // Role default adalah User
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->to('/login')->with('success', 'Akun berhasil didaftarkan. Silakan login.');
    }

    /**
     * Logout user
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
