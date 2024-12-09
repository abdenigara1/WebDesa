<?php

namespace App\Http\Controllers;

use App\Models\background;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Query untuk mendapatkan data random 6 item
        $backgrounds = background::where('is_active', 'active') // Perhatikan huruf kecil pada 'background'
            ->inRandomOrder()
            ->take(6)
            ->pluck('background'); // Ambil hanya kolom 'backgrounds'
    
        // Periksa apakah data kosong
        if ($backgrounds->isEmpty()) {
            return view('home')->with('backgrounds', []); // Kirim array kosong jika tidak ada data
        }
    
        // Kembalikan data ke view
        return view('home', compact('backgrounds'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(background $background)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(background $background)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, background $background)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(background $background)
    {
        //
    }
}
