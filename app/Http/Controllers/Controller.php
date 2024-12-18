<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\background;
use App\Models\Promosi;
use App\Models\Hero;
use App\Models\Saran;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function home()
    {
        // Data dari background
        $backgrounds = Background::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->pluck('background')
            ->toArray();

        // Data dari organisasi
        $heroes = Hero::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->get(['imgOrganisasi','Organisasi']);

        // Bagi data hero ke dalam kolom
        $kolom1 = $heroes->take(3);
        $kolom2 = $heroes->slice(3);

        // Kirim semua data ke view
        return view('home', compact('backgrounds', 'kolom1', 'kolom2'));
    }

    public function organisasi()
    {
        $heroes = Hero::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->limit(6)
            ->get([ 'imgOrganisasi','Organisasi','Deskripsi']); // Pastikan kolom `imgOrganisasi` dan `header` diambil
    

        $backgrounds = Background::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->pluck('background')
            ->toArray();

        return view('org', compact('heroes','backgrounds',));
    }
    


    public function berita()
    {
        // Data berita
        $datas = Data::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(4)
            ->get()
            ->sortByDesc('created_at');

        // Bagi data menjadi 2 grup
        $news1 = $datas->take(2);
        $news2 = $datas->slice(2);

        // Data background
        $backgrounds = Background::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->pluck('background')
            ->toArray();

        return view('berita', compact('news1', 'news2', 'backgrounds'));
    }

    public function showBerita(Request $request, $id)
    {
        // Data background
        $backgrounds = Background::query()
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->pluck('background')
            ->toArray();

        // Data berita
        $berita = Data::findOrFail($id);

        return view('beritanews', compact('berita', 'backgrounds'));
    }

    public function about(){
        $backgrounds = Background::query()
        ->where('is_active', 'active')
        ->inRandomOrder()
        ->take(6)
        ->pluck('background')
        ->toArray();


        return view('about', compact( 'backgrounds'));
    }


    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pesan' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        Saran::create([
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        

        // Redirect ke halaman login
        return redirect()->route('home')->with('success', 'berhasil dikirim');
    }


}
