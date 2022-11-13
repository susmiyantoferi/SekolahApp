<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    public function orangtua(){
        return $this->belongsTo(orangtua::class, 'id', 'id');
    }
}
