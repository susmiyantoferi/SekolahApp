<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    public function santri(){
        return $this->belongsTo(santri::class, 'id', 'id');
    }
}
