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
        $backgrounds = Background::where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->pluck('background')
            ->toArray();

        // Data dari organisasi
        $heroes = Hero::where('is_active', 'active')
            ->inRandomOrder()
            ->take(6)
            ->get();

        // Bagi data hero ke dalam kolom
        $kolom1 = $heroes->take(3);
        $kolom2 = $heroes->slice(3);

        // Kirim semua data ke view
        return view('home', compact('backgrounds', 'kolom1', 'kolom2'));
    }
    

    
    public function berita (){
        $datas = Data::where('is_active', 'active')
        ->inRandomOrder() // Mengambil data secara acak
        ->take(4)         // Batasi hingga 6 data
        ->get()
        ->sortByDesc('created_at');

        // Bagi data menjadi 2 grup dengan masing-masing 3 item
        $news1 = $datas
        ->take(2) ; // Ambil data dari database
        $news2 = $datas
        ->slice(2);

        $backgrounds = Background::where('is_active', 'active')
        ->inRandomOrder()
        ->take(6)
        ->pluck('background')
        ->toArray();



        return view('berita', compact('news1', 'news2','backgrounds',));
        
    }



    public function showBerita(Request $request, $id)
    {   


        $backgrounds = Background::where('is_active', 'active')
        ->inRandomOrder()
        ->take(6)
        ->pluck('background')
        ->toArray();

        $berita = Data::findOrFail($id);
        return view('beritanews', compact('berita','backgrounds'));
    }
    
    public function show($id) {
        $berita = Berita::findOrFail($id); // Mengambil berita berdasarkan ID
        return view('berita-detail', compact('berita')); // Mengarahkan ke halaman berita detail
    }
 

}
