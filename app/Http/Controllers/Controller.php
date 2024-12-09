<?php

namespace App\Http\Controllers;
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
        $kolom1 = $datas
        ->take(2) ; // Ambil data dari database
        $kolom2 = $datas
        ->slice(2);

        $backgrounds = Background::where('is_active', 'active')
        ->inRandomOrder()
        ->take(6)
        ->pluck('background')
        ->toArray();





        return view('berita', compact('kolom1', 'kolom2','backgrounds'));
        
    }



    public function showBerita(Request $request, $id)
    {
        // Menemukan berita berdasarkan ID
        $berita = Data::findOrFail($id);
    
        // Menarik gambar acak yang memiliki ID yang sama dengan ID berita dari kolom yang ditentukan
        $relatedImages = Image::whereIn('column', ['a', 'b', 'c', 'd', 'e'])
            ->where('id', $berita->id) // Menggunakan ID berita, bukan ID gambar
            ->inRandomOrder()
            ->take(3)
            ->get();
        return response()->json($relatedImages);
    }
    
 

}
