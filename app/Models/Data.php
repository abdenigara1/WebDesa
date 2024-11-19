<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'judulBerita',
        'imgBeritaA',
        'imgBeritaB',
        'imgBeritaC',
        'imgBeritaD',
        'imgBeritaE',
        'berita',
        'imgPromote',
        'is_active'
    ];
    protected $dates = ['deleted_at']; // Untuk soft delete
}
