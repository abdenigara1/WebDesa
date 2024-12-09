<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'imgPromote',
        'is_active'
    ];
    protected $dates = ['deleted_at']; // Untuk soft delete
}
