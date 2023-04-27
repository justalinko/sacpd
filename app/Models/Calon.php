<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hasiltest()
    {
        return $this->belongsTo(Hasiltest::class , 'id' , 'calon_id');
    }
}
