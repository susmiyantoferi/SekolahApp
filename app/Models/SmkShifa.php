<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmkShifa extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat',
        'email',
        'hp',
        'visi',
        'misi',
        'tujuan',
    ];
}
