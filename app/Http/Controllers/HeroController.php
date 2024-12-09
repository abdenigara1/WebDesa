<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $heroes = Hero::where('is_active', 'active')
        ->inRandomOrder() // Mengambil data secara acak
        ->take(6)         // Batasi hingga 6 data
        ->get();

        // Bagi data menjadi 2 grup dengan masing-masing 3 item
        $kolom1 = $heroes->take(3); // Ambil 3 data pertama untuk div 1
        $kolom2 = $heroes->slice(3); // Ambil sisanya (3 data) untuk div 2

        return view('home', compact('heroes','kolom1', 'kolom2'));
        



        // Kirim ke view
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
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
