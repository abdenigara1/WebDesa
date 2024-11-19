<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'background',
        'imgOrganisasi',
        'Organisasi',
        'is_active'
    ];

    protected $dates = ['deleted_at']; // Untuk soft delete

}
