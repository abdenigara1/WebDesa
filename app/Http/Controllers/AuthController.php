<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Menggunakan model User
use Illuminate\Support\Facades\Hash; // Untuk memeriksa password

class AuthController extends Controller
{
    /**
     * Tampilkan form login.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Proses login.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();
    
        // Periksa apakah user ditemukan
        if (!$user) {
            return back()->withErrors([
                'email' => 'Email tidak ditemukan.',
            ])->onlyInput('email');
        }
    
        // Periksa apakah password cocok
        if (Hash::check($request->password, $user->password)) {
            // Simpan data user ke session
            session(['user' => $user]);
    
            // Redirect berdasarkan role
            if ($user->role === 'user') {
                return redirect()->route('dashboard')->with('success', 'Login berhasil!');
                
            } elseif ($user->role ==='admin') {
                return redirect('/admin')->with('success', 'Login berhasil!');
            }
        }
    
        // Jika password salah
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    
    
        


        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Halaman dashboard setelah login.
     */
    public function dashboard()
    {
        // Periksa apakah user ada di session
        if (!session('user')) {
            return redirect()->route('login')->withErrors(['message' => 'Harap login terlebih dahulu.']);
        }

        // Tampilkan halaman dashboard dengan data user
        return view('dashboard', ['user' => session('user')]);
    }

    /**
     * Proses logout.
     */
    public function logout()
    {
        // Hapus data user dari session
        session()->forget('user');

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Logout berhasil.');
    }
}
