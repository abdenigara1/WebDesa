<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class background extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'background',
        'is_active'
    ];
    protected $dates = ['deleted_at']; // Untuk soft delete
}
