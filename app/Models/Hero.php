<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'imgOrganisasi',
        'Organisasi',
        'Deskripsi',
        'is_active'
    ];

    protected $dates = ['deleted_at']; // Untuk soft delete

}
